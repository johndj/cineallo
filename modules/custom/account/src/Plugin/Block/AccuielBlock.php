<?php

namespace Drupal\account\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
          $build['accuiel_block']['#markup'] = '<ul>
                                                <li><a href='.$base_path.'user/register>Inscription</a></li><span>/</span>
                                                <li><a href='.$base_path.'/user/login>Connexion</a></li>
                                                </ul>';
          return $build;
      }
      else {
          $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
          $name = ucfirst($user->get('name')->value);
          $id = $current_user->id();
          $build = [];
          $build['accuiel_block']['#markup'] = '<ul>
                                                <li>Bienvenue <a href='.$base_path.'user/'.$id.'>'.$name.'</a></li><span>/</span>
                                                <li><a href='.$base_path.'user/logout>Deconnexion</a></li>
                                                </ul>';
          return $build;
      }

  }

}
