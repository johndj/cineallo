<?php

namespace Drupal\rss\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\Loader;
use Drupal\node\Entity\Node;

/**
 * Class ParseXMlController.
 *
 * @package Drupal\rss\Controller
 */
class ParseXMlController extends ControllerBase
{

    /**
     * Parsexml.
     *
     * @return string
     *   Return Hello string.
     */
    public function cetteSemaine()
    {
        $xml = simplexml_load_file('http://rss.allocine.fr/ac/cine/cettesemaine?format=xml');
        $arr = json_decode(json_encode($xml), 1);


        $header = [
            'Title' => t('Title'),
            'Date' => t('Date'),
            'Description' => t('Description'),
            'Image' => t('Image')
        ];

        $output = array();

        foreach ($arr['channel']['item'] as $item) {
            $guid = str_replace("cinealaffiche", "", $item['guid']);
            $image = $item['enclosure']['@attributes']['url'];
            $title = $item['title'];
            $description =  $item['description'];

            $nids = \Drupal::entityQuery('node')
                ->condition('type', 'film')
                ->condition('field_guid', $guid)
                ->execute();
            $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);


            if (empty($nodes)) {
                $node = Node::create(array(
                    'type' => 'film',
                    'field_fields' => array(),
                    'title' => $item['title'],
                    'field_image_link' => $image,
                    'field_guid' => $guid,
                    'field_categorie' => "Cettesemaine",
                    'body' => $description
                ));


                $node->save();
            }


            $output[] = [
                'Title' => $item['title'],
                'Date' => $item['pubDate'],
                'Description' => $item['description'],
                'Image' => $image
            ];
            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'title',
                    '#markup' => '<h1>' . "$title" . '</h1>',
                )
            );
            $build[] = array(
                'first_para' => array(
                    'type' => 'markup',
                    '#title' => 'Image',
                    '#markup' => '<img src=' . "$image" . '>',
                )
            );
            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'Descrption',
                    '#markup' => $item['description']
                )
            );


        }


        /*$node = \Drupal::entityTypeManager()->getStorage('node')->load($node);
        $title = $node->getTitle();
        $count = count($results);

        $build[] = array(
            'first_para' => array(
                '#type' => 'markup',
                '#markup' => "<p>Le noeaud $title a été modifié $count fois</p ",
            )
        );*/
        /*
        $build[''] = [
            '#theme' => 'rss',
            '#output' => $output,
        ];*/


        $build['table'] = [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $build,
            '#empty' => t('No users found'),
        ];


        return $build;
    }

    public function prochainement()
    {
        $xml = simplexml_load_file('http://rss.allocine.fr/ac/cine/prochainement?format=xml');
        $arr = json_decode(json_encode($xml), 1);

        $header = [
            'Title' => t('Title'),
            'Date' => t('Date'),
            'Description' => t('Description'),
            'Image' => t('Image')
        ];

        $output = array();

        foreach ($arr['channel']['item'] as $item) {
            $guid = str_replace("cinealaffiche", "", $item['guid']);
            $image = $item['enclosure']['@attributes']['url'];
            $title = $item['title'];
            $description =  $item['description'];

            $nids = \Drupal::entityQuery('node')
                ->condition('type', 'film')
                ->condition('field_guid', $guid)
                ->execute();
            $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);


            if (empty($nodes)) {
                $node = Node::create(array(
                    'type' => 'film',
                    'field_fields' => array(),
                    'title' => $item['title'],
                    'field_image_link' => $image,
                    'field_guid' => $guid,
                    'field_categorie' => "Prochainement",
                    'body' => $description
                ));


                $node->save();
            }


            $output[] = [
                'Title' => $item['title'],
                'Date' => $item['pubDate'],
                'Description' => $item['description'],
                'Image' => $image
            ];
            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'title',
                    '#markup' => '<h1>' . "$title" . '</h1>',
                )
            );
            $build[] = array(
                'first_para' => array(
                    'type' => 'markup',
                    '#title' => 'Image',
                    '#markup' => '<img src=' . "$image" . '>',
                )
            );
            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'Descrption',
                    '#markup' => $item['description']
                )
            );


        }

        $build['table'] = [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $build,
            '#empty' => t('No users found'),
        ];


        return $build;
    }

    public function topfilms()
    {
        $xml = simplexml_load_file('http://rss.allocine.fr/ac/cine/topfilms?format=xml');

        $arr = json_decode(json_encode($xml), 1);

        $header = [
            'Title' => t('Title'),
            'Date' => t('Date'),
            'Description' => t('Description'),
            'Image' => t('Image')
        ];

        $output = array();

        foreach ($arr['channel']['item'] as $item) {
            $guid = str_replace("cinealaffiche", "", $item['guid']);
            $image = $item['enclosure']['@attributes']['url'];
            $title = $item['title'];
            $description =  $item['description'];

            $nids = \Drupal::entityQuery('node')
                ->condition('type', 'film')
                ->condition('field_guid', $guid)
                ->execute();
            $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);


            if (empty($nodes)) {
                $node = Node::create(array(
                    'type' => 'film',
                    'field_fields' => array(),
                    'title' => $item['title'],
                    'field_image_link' => $image,
                    'field_guid' => $guid,
                    'field_categorie' => "Topfilms",
                    'body' => $description
                ));


                $node->save();
            }


            $output[] = [
                'Title' => $item['title'],
                'Date' => $item['pubDate'],
                'Description' => $item['description'],
                'Image' => $image
            ];
            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'title',
                    '#markup' => '<h1>' . "$title" . '</h1>',
                )
            );
            $build[] = array(
                'first_para' => array(
                    'type' => 'markup',
                    '#title' => 'Image',
                    '#markup' => '<img src=' . "$image" . '>',
                )
            );
            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'Descrption',
                    '#markup' => $item['description']
                )
            );


        }

        $build['table'] = [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $build,
            '#empty' => t('No users found'),
        ];


        return $build;
    }

    public function bandesannonces()
    {
        $xml = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?playlist_id=PL1DD10E84B9B08A35');
        $arr = json_decode(json_encode($xml), 1);

        //kpr($arr['entry']);

        foreach ($arr['entry'] as $item) {
            $title = $item['title'];
            $urlVideo = $item['link']['@attributes']['href'];

            $node = Node::create(array(
                'type' => 'bandeannonce',
                'field_fields' => array(),
                'title' => $title,
                'field_video' => $urlVideo
            ));

            $node->save();


            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'title',
                    '#markup' => '<h1>' . "$title" . '</h1>',
                )
            );

            $build[] = array(
                'first_para' => array(
                    '#type' => 'markup',
                    '#title' => 'title',
                    '#markup' => '<h1>' . "$urlVideo" . '</h1>',
                )
            );
        }


        return $build;

    }

    public function actualitecine()
    {
        $xml = simplexml_load_file('http://rss.allocine.fr/ac/actualites/cine?format=xml');
        $arr = json_decode(json_encode($xml), 1);

        $header = [
            'Title' => t('Title'),
            'Date' => t('Date'),
            'Description' => t('Description'),
            'Image' => t('Image')
        ];

        $output = array();

        foreach ($arr['channel']['item'] as $item) {


            $guid = str_replace("actualitescine", "", $item['guid']);
            $image = $item['enclosure']['@attributes']['url'];
            $title = $item['title'];
            $description = $item['description'];

             $nids = \Drupal::entityQuery('node')
                 ->condition('type','actualite')
                 ->condition('field_guid_actualite', $guid)
                 ->execute();
             $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);

             if(empty($nodes))
             {
                 $node = Node::create(array(
                     'type' => 'actualite',
                     'field_fields' => array(),
                     'title' => $item['title'],
                     'field_image_actualite' => $image,
                     'field_guid_actualite' => $guid,
                     'field_description_actualite' => $description
                 ));


                 $node->save();
             }


             $output[] = [
                 'Title' => $item['title'],
                 'Date' => $item['pubDate'],
                 'Description'=> $item['description'],
                 'Image' => $image
             ];
             $build[] = array(
                 'first_para' => array(
                     '#type' => 'markup',
                     '#title' => 'title',
                     '#markup' => '<h1>'."$title".'</h1>',
                 )
             );
             $build[] = array(
                 'first_para' => array(
                     'type' => 'markup',
                     '#title' => 'Image',
                     '#markup' => '<img src='."$image".'>',
                 )
             );
             $build[] = array(
                 'first_para' => array(
                     '#type' => 'markup',
                     '#title' => 'Descrption',
                     '#markup' => $item['description']
                 )
             );



         }

         $build['table'] = [
             '#type' => 'table',
             '#header' => $header,
             '#rows' => $build,
             '#empty' => t('No users found'),
         ];


         return $build;

        }
}



