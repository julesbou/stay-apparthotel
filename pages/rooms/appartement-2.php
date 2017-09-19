<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Appartement',
    'url' => '/appartement-2.html',
    'prix' => '99€',
    'prixSemaine' => '450€',
    'prixMois' => '1390€',
    'desc' => "
Appartement de 27m² idéal pour une courte ou moyenne durée.
Coin salon avec TV  écran plat accrochée au mur.
Cuisine entièrement équipée avec bar et tabourets pour prendre ses repas.
Coin nuit séparé de la pièce à vivre par une belle verrière avec lit double (140/190).
Coin bureau pour travailler avec internet en wifi ou par port Ethernet.
Grand dressing aménagé.
Salle de bain avec douche, meuble vasque, wc suspendus et sèches serviette.
Vous aurez à disposition un lave linge séchant, aspirateur, table et fer repasser (situé dans un local technique partagé avec l'appartement avec l'appartement Nº1)
",
    'superficie' => '27m²',
    'assets' => 'appartement-2',
    'imgs' => array(6, 2, 10, 3, 5, 8, 9, 1, 4, 7),
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
