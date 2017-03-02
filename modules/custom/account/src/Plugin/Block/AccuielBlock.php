<?php

namespace Drupal\account\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\user\Entity\User;
/**
 * Provides a 'AccuielBlock' block.
 *
 * @Block(
 *  id = "accuiel_block",
 *  admin_label = @Translation("Accuiel block"),
 * )
 */
class AccuielBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

      $current_user = \Drupal::currentUser();
      global $base_path;

      if ($current_user->id() == 0) {
          $build = [];
          $build['accuiel_block']['#markup'] = '<div id="log">
                                                <a href='.$base_path.'user/register><button type="button" class="btn btn-primary btn-sm">Inscription</button></a>
                                                <a href='.$base_path.'/user/login><button type="button" class="btn btn-primary btn-sm">Connexion</button></a>
                                                </div>';
          return $build;
      }
      else {
          $user = \Drupal\user\Entity\User::load($current_user->id());
          $picture = $user->get('user_picture')->entity->url();
          $nom = $user->get('field_nom')->value;
          $prenom = $user->get('field_prenom')->value;
          $pseudo = $user->get('name')->value;
          $id = $current_user->id();

          //return $build;

          return array(
              '#theme' => 'account',
              '#nom' => $nom,
              '#prenom' => $prenom,
              '#userid' => $id,
              '#picture' => $picture,
              '#path' => $base_path
          );
      }

  }

}
