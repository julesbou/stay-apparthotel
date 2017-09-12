<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Chambre',
    'url' => '/chambre.html',
    'prix' => '69€',
    'desc' => "
Chambre située sur l'arrière de l'immeuble au calme composée d'un lit (140/190), coin bureau et télé écran plat.
Salle de bain avec douche, meuble vasque, wc suspendus et radiateur sèche serviette.
Mini bar, machine Nespresso et bouilloire (pas de cuisine).
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
