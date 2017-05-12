<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Chambre',
    'prix' => '59€',
    'desc' => "
Situé au 3ème étage avec ascenseur, la chambre est entièrement équipée et vient d'être rénovée.
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
