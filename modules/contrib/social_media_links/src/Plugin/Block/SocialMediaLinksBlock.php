<?php

namespace Drupal\social_media_links\Plugin\Block;

use Drupal\Component\Plugin\Exception\PluginException;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Url;
use Drupal\social_media_links\SocialMediaLinksPlatformManager;
use Drupal\social_media_links\SocialMediaLinksIconsetManager;
use Drupal\social_media_links\IconsetBase;
use Drupal\social_media_links\IconsetFinderService;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Logger\LoggerChannelInterface;

/**
 * Provides the Social Media Links Block.
 *
 * @Block(
 *   id="social_media_links_block",
 *   admin_label = @Translation("Social Media Links"),
 * )
 */
class SocialMediaLinksBlock extends BlockBase implements ContainerFactoryPluginInterface {

  protected $platformManager;
  protected $iconsetManager;
  protected $iconsetFinderService;
  protected $renderer;
  protected $logger;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, SocialMediaLinksPlatformManager $platform_manager, SocialMediaLinksIconsetManager $iconset_manager, IconsetFinderService $finder_service, RendererInterface $renderer, LoggerChannelInterface $logger) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->platformManager = $platform_manager;
    $this->iconsetManager = $iconset_manager;
    $this->iconsetFinderService = $finder_service;
    $this->renderer = $renderer;
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('plugin.manager.social_media_links.platform'),
      $container->get('plugin.manager.social_media_links.iconset'),
      $container->get('social_media_links.finder'),
      $container->get('renderer'),
      $container->get('logger.channel.social_media_links')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    // Platforms.
    $form['platforms'] = array(
      '#type' => 'table',
      '#header' => array(
        $this->t('Platform'),
        $this->t('Platform URL'),
        $this->t('Description'),
        $this->t('Weight'),
      ),
      '#tabledrag' => array(
        array(
          'action' => 'order',
          'relationship' => 'silbing',
          'group' => 'platform-order-weight',
        ),
      ),
    );

    $i = -11;
    foreach ($this->platformManager->getPlatforms() as $platform_id => $platform) {
      $form['platforms'][$platform_id]['#attributes']['class'][] = 'draggable';
      $form['platforms'][$platform_id]['#weight'] = isset($config['platforms'][$platform_id]['weight']) ? $config['platforms'][$platform_id]['weight'] : $i + 1;

      $form['platforms'][$platform_id]['label'] = array(
        '#markup' => '<strong>' . $platform['name']->render() . '</strong>',
      );

      $form['platforms'][$platform_id]['value'] = array(
        '#type' => 'textfield',
        '#title' => $platform['name']->render(),
        '#title_display' => 'invisible',
        '#size' => 40,
        '#default_value' => isset($config['platforms'][$platform_id]['value']) ? $config['platforms'][$platform_id]['value'] : '',
        '#field_prefix' => $platform['instance']->getUrlPrefix(),
        '#field_suffix' => $platform['instance']->getUrlSuffix(),
        '#element_validate' => array(array(get_class($platform['instance']), 'validateValue')),
      );
      $form['platforms'][$platform_id]['description'] = array(
        '#type' => 'textfield',
        '#title' => $platform['name']->render(),
        '#title_display' => 'invisible',
        '#description' => $this->t('The description is used for the title and WAI-ARIA attribute.'),
        '#size' => 40,
        '#placeholder' => $this->t('Find / Follow us on %platform', ['%platform' => $platform['name']->render()]),
        '#default_value' => isset($config['platforms'][$platform_id]['description']) ? $config['platforms'][$platform_id]['description'] : '',
      );

      $form['platforms'][$platform_id]['weight'] = array(
        '#type' => 'weight',
        '#title' => $this->t('Weight for @title', array('@title' => $platform['name']->render())),
        '#title_display' => 'invisible',
        '#default_value' => isset($config['platforms'][$platform_id]['weight']) ? $config['platforms'][$platform_id]['weight'] : $i + 1,
        '#attributes' => array('class' => array('platform-order-weight')),
      );

      $i++;
    }

    // Appearance.
    $form['appearance'] = array(
      '#type' => 'details',
      '#title' => $this->t('Appearance'),
      '#tree' => TRUE,
    );
    $form['appearance']['orientation'] = array(
      '#type' => 'select',
      '#title' => $this->t('Orientation'),
      '#options' => array(
        'v' => $this->t('vertical'),
        'h' => $this->t('horizontal'),
      ),
      '#default_value' => isset($config['appearance']['orientation']) ? $config['appearance']['orientation'] : 'h',
    );
    $form['appearance']['show_name'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Show name'),
      '#description' => $this->t('Show the platform name next to the icon.'),
      '#default_value' => isset($config['appearance']['show_name']) ? $config['appearance']['show_name'] : 0,
    );

    // Link Attributes.
    $form['link_attributes'] = array(
      '#type' => 'details',
      '#title' => $this->t('Link attributes'),
      '#tree' => TRUE,
    );
    $form['link_attributes']['target'] = array(
      '#type' => 'select',
      '#title' => $this->t('Default target'),
      '#default_value' => isset($config['link_attributes']['target']) ? $config['link_attributes']['target'] : '<none>',
      '#options' => array(
        '<none>' => $this->t('Remove target attribute'),
        '_blank' => $this->t('Open in a new browser window or tab (_blank)'),
        '_self' => $this->t('Open in the current window (_self)'),
        '_parent' => $this->t('Open in the frame that is superior to the frame the link is in (_parent)'),
        '_top' => $this->t('Cancel all frames and open in full browser window (_top)'),
      ),
    );
    $form['link_attributes']['rel'] = array(
      '#type' => 'select',
      '#title' => $this->t('Default rel'),
      '#default_value' => isset($config['link_attributes']['rel']) ? $config['link_attributes']['rel'] : '<none>',
      '#options' => array(
        '<none>' => $this->t('Remove rel attribute'),
        'nofollow' => $this->t('Set nofollow'),
      ),
    );

    // Icon Sets.
    $iconsetStyles = $this->iconsetManager->getStyles();

    $form['iconset'] = array(
      '#type' => 'details',
      '#title' => $this->t('Icon Sets'),
      '#open' => TRUE,
    );
    $form['iconset']['style'] = array(
      '#type' => 'select',
      '#title' => $this->t('Icon Style'),
      '#default_value' => isset($config['iconset']['style']) ? $config['iconset']['style'] : '',
      '#options' => $iconsetStyles,
    );

    // Get the possible libarary install locations.
    // We use it maybe later in the form process, if a iconset is not installed.
    $installDirs = $this->iconsetFinderService->getInstallDirs();

    $installedIconsets = array();
    foreach ($this->iconsetManager->getIconsets() as $iconset_id => $iconset) {
      if (isset($iconset['downloadUrl'])) {
        $name = Link::fromTextAndUrl($iconset['name'], Url::fromUri($iconset['downloadUrl']))->toString();
      }
      else {
        $name = $iconset['name'];
      }

      $publisher = '';
      if (isset($iconset['publisher'])) {
        $publisher = $this->t('by') . ' ';

        if (isset($iconset['publisherUrl'])) {
          $publisher .= Link::fromTextAndUrl($iconset['publisher'], Url::fromUri($iconset['publisherUrl']))->toString();
        }
        else {
          $publisher .= $iconset['publisher'];
        }
      }

      $installedIconsets[$iconset_id]['name'] = array(
        '#markup' => '<strong>' . $name . '</strong><br />' . $publisher,
      );

      $installedIconsets[$iconset_id]['styles'] = array(
        '#markup' => implode('<br />', $iconsetStyles[$iconset_id]),
      );

      if ($iconset['instance']->getPath()) {
        $installedIconsets[$iconset_id]['examples'] = array(
          '#type' => 'table',
        );

        // Use the first iconset style for the sample table.
        $style = key($iconsetStyles[$iconset_id]);
        $style = IconsetBase::explodeStyle($style);
        $style = $style['style'];

        if ($iconset['instance']->getPath() === 'library' && $library = $iconset['instance']->getLibrary()) {
          $installedIconsets[$iconset_id]['examples']['#attached']['library'] = (array) $library;
        }

        foreach ($this->platformManager->getPlatforms() as $platform_id => $platform) {
          $installedIconsets[$iconset_id]['examples']['#header'][] = $platform['name']->render();

          $iconElement = $iconset['instance']->getIconElement($platform['instance'], $style);
          $installedIconsets[$iconset_id]['examples'][1][$platform_id] = array(
            '#type' => 'markup',
            '#markup' => $this->renderer->render($iconElement),
          );
        }
      }
      else {
        $examples = '<strong>' . $this->t('Not installed.') . '</strong><br />';
        $examples .= $this->t('To install: @download and copy it to one of these directories:',
          array(
            '@download' => Link::fromTextAndUrl($this->t('Download'), Url::fromUri($iconset['downloadUrl']))->toString(),
          )
        );

        $installDirsIconset = array();
        foreach ($installDirs as $dir) {
          $installDirsIconset[] = $dir . '/' . $iconset_id;
        }
        $examples .= '<br /><code>' . preg_replace('/,([^,]+) ?$/', " " . $this->t('or') . " $1", implode(',<br />', $installDirsIconset), 1) . '</code>';

        $installedIconsets[$iconset_id]['examples'] = array(
          '#markup' => $examples,
        );
      }

      // Add a weigth to the iconset for sorting.
      $installedIconsets[$iconset_id]['#weight'] = $iconset['instance']->getPath() ? 0 : 1;
    }

    // Sort the array so that installed iconsets shown first.
    uasort($installedIconsets, array('Drupal\Component\Utility\SortArray', 'sortByWeightProperty'));

    $form['iconset']['installed_iconsets'] = array(
      '#type' => 'table',
      '#header' => array(
        $this->t('Name'),
        $this->t('Sizes'),
        $this->t('Icon examples and download instructions'),
      ),
    ) + $installedIconsets;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('platforms', $form_state->getValue('platforms'));
    $this->setConfigurationValue('appearance', $form_state->getValue('appearance'));
    $this->setConfigurationValue('link_attributes', $form_state->getValue('link_attributes'));

    $iconset = $form_state->getValue('iconset');
    unset($iconset['iconset']['installed_iconsets']);
    $this->setConfigurationValue('iconset', $iconset);
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();
    $platforms = $this->platformManager->getPlatformsWithValue($config['platforms']);

    if (count($platforms) < 1) {
      return array();
    }

    $iconset = IconsetBase::explodeStyle($config['iconset']['style']);

    try {
      $iconsetInstance = $this->iconsetManager->createInstance($iconset['iconset']);
    }
    catch (PluginException $exception) {
      $this->logger->error('The selected "@iconset" iconset plugin does not exist.', array('@iconset' => $iconset['iconset']));
      return array();
    }

    foreach ($config['link_attributes'] as $key => $value) {
      if ($value === '<none>') {
        unset($config['link_attributes'][$key]);
      }
    }

    // Set the attributes for the individual links.
    //
    // We use two different types of link attributes:
    // * "global" attributes that affects all links (e.g. target or rel)
    // which are set in $config['link_attributes'];
    // * "individual" attributes for each link (e.g. title) which are defined
    // in $platforms[$platform_id]['attributes'].
    foreach ($platforms as $platform_id => $platform) {
      $platforms[$platform_id]['element'] = (array) $iconsetInstance->getIconElement($platform['instance'], $iconset['style']);
      $platforms[$platform_id]['attributes'] = new Attribute($config['link_attributes']);

      if (!empty($platform['instance']->getDescription())) {
        $platforms[$platform_id]['attributes']->setAttribute('aria-label', $platform['instance']->getDescription());
        $platforms[$platform_id]['attributes']->setAttribute('title', $platform['instance']->getDescription());
      }
    }

    $output = array(
      '#theme' => 'social_media_links_platforms',
      '#platforms' => $platforms,
      '#appearance' => $config['appearance'],
      '#attached' => array(
        'library' => array('social_media_links/social_media_links.theme'),
      ),
    );

    if ($iconsetInstance->getPath() === 'library' && (array) $library = $iconsetInstance->getLibrary()) {
      $output['#attached']['library'] = array_merge_recursive($output['#attached']['library'], $library);
    }

    return array($output);
  }

}
