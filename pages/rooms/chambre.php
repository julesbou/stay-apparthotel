<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Chambre',
    'url' => '/chambre.html',
    'prix' => '69€',
    'desc' => "
Pied à terre idéal pour un week-end ou un court séjour, entiérement neuf et équipé.
Salle de bain avec douche, wc suspendu et meuble vasque. Dressing aménagé, coin bureau, TV.
",
    'superficie' => '17m²',
    'assets' => 'chambre',
    'imgs' => array(1, 2, 5, 4, 10, 6, 7, 8, 3, 9),
    'equipments' => array(
      'Minibar',
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
