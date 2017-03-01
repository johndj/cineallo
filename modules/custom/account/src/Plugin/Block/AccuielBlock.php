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
          $build['accuiel_block']['#markup'] = '<ul>
                                                <li><a href='.$base_path.'user/register>Inscription</a></li><span>/</span>
                                                <li><a href='.$base_path.'/user/login>Connexion</a></li>
                                                </ul>';
          return $build;
      }
      else {
          $user = \Drupal\user\Entity\User::load($current_user->id());
          $picture = $user->get('user_picture')->entity->url();
          $nom = $user->get('field_nom')->value;
          $prenom = $user->get('field_prenom')->value;
          $id = $current_user->id();
          $build = [];
          $build['accuiel_block']['#markup'] = '<ul>
                                                <li><a href='.$base_path.'user/'.$id.'><img src='.$picture.' width=50 /></a></li>
                                                <li>Bienvenue <a href='.$base_path.'user/'.$id.'>'.$nom.' '.$prenom.'</a></li>
                                                <li><a href='.$base_path.'user/logout>Deconnexion</a></li>
                                                </ul>';
          return $build;
      }

  }

}
