<?php

namespace Drupal\rss\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\Loader;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;

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

            $guid = str_replace("cinecettesemaine", "", $item['guid']);
            $image = $item['enclosure']['@attributes']['url'];
            $title = $item['title'];
            $description =  $item['description'];
            $pieces = explode('</p><p>', $description);
            $description = $pieces['0'];
            $realisateur = $pieces['1'];
            $pieces2 = explode('<br>', $realisateur);
            $realisateur = str_replace('Un film de ',' ',$pieces2[0]);
            $categorie = "Cettesemaine";
            //$acteur = str_replace('Avec ',' ',$pieces2[1]);
            //kpr($realisateur);
            //kpr($acteur);

            $realisateur_id = $this->check_rea($realisateur);

            $this->check_film($guid,$title,$image,$categorie,$realisateur_id,$description);

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
            $guid = str_replace("cineprochainement", "", $item['guid']);
            $image = $item['enclosure']['@attributes']['url'];
            $title = $item['title'];
            $description =  $item['description'];
            $pieces = explode('</p><p>', $description);
            $description = $pieces['0'];
            $realisateur = $pieces['1'];
            $pieces2 = explode('<br>', $realisateur);
            $realisateur = str_replace('Un film de ',' ',$pieces2[0]);
            $categorie = "Prochainement";
            //$acteur = str_replace('Avec ',' ',$pieces2[1]);
            //kpr($acteur);

            $realisateur_id = $this->check_rea($realisateur);

            $this->check_film($guid,$title,$image,$categorie,$realisateur_id,$description);

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
        //kpr($arr);

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
            $pieces = explode('</p><p>', $description);
            $description = $pieces['0'];
            $realisateur = $pieces['1'];
            $pieces2 = explode('<br>', $realisateur);
            $realisateur = str_replace('Un film de ',' ',$pieces2[0]);
            $categorie = "Topfilms";
            //$acteur = str_replace('Avec ',' ',$pieces2[1]);
            //kpr($realisateur);
            //kpr($acteur);

            $realisateur_id = $this->check_rea($realisateur);

            $this->check_film($guid,$title,$image,$categorie,$realisateur_id,$description);

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
                     'field_description_actualite' => ['value' => $description, 'format' => 'basic_html'],

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

        public function check_rea($realisateur){
            # check rea
            $term = \Drupal::entityTypeManager()
                ->getStorage('taxonomy_term')
                ->loadByProperties(['name' => strip_tags($realisateur),'vid' => 'realisateur']);

            foreach($term as $term) {
                $realisateur = $term->id();
            }

            if(empty($term)) {
                $term = Term::create(array(
                    'parent' => array(),
                    'name' => strip_tags($realisateur),
                    'vid' => 'realisateur',
                ));

                $term->save();

                $realisateur = $term->id();
            }

            return $realisateur;
        }

        public function check_film($guid,$title,$image,$categorie,$realisateur_id,$description){
            # check film
            $nids = \Drupal::entityQuery('node')
                ->condition('type', 'film')
                ->condition('field_guid', $guid)
                ->execute();
            $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

            if (empty($nodes)) {
                $node = Node::create(array(
                    'type' => 'film',
                    'field_fields' => array(),
                    'title' => $title,
                    'field_image_link' => $image,
                    'field_guid' => $guid,
                    'field_categorie' => $categorie,
                    'field_realisateur' => $realisateur_id,
                    'body' => ['value' => $description, 'format' => 'basic_html']
                ));

                $node->save();
            }
        }
}



