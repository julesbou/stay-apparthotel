<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Grand Appartement',
    'url' => '/appartement-1.html',
    //'prix' => '99€',
    'prixSemaine' => '490€',
    'prixMois' => '1490€',
    'desc' => "
Très bel appartement idéal pour une moyenne ou longue durée.
Vous vous sentirez comme chez vous.
Coin salon avec canapé convertible (1 personne), TV écran plat et grand placard de rangement.
Cuisine entièrement équipée avec table pour prendre ses repas.
Coin nuit séparé de la pièce à vivre par une belle verrière avec lit double (160/200).
Salle de bain avec douche, wc suspendus, meuble vasque et radiateur sèche serviette.
Vous aurez à disposition un lave linge séchant, aspirateur, table et fer à repasser (situé dans un local technique partagé avec l'appartement Nº2).
",
    'superficie' => '33m²',
    'assets' => 'appartement-1',
    'imgs' => array(1, /*2,*/ /*3,*/ 4, 5, 6),
    'equipments' => array(
      'Cuisine Equipée',
      'Vaisselle',
      'Cafetière Nespresso',
      'Bouilloire',
      'Télévision TNT',
      'Wifi & Prise Ethernet',
      'Linge de toilette/lit',
      'Sèche cheveux',
      'Fer à repasser',
      'Lave linge',
    ),
  );
