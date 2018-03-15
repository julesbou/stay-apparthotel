<?php
  echo $view->extend('room.php');
  $data = array(
    'name' => 'Chambre',
    'url' => '/chambre.html',
    'prix' => '69€',
    'desc' => "
Chambre située sur l'arrière de l'immeuble au calme composée d'un lit double (140/190), coin bureau et télé écran plat.
Salle de bain avec douche, meuble vasque, wc suspendus et radiateur sèche serviette.
Mini bar, machine Nespresso et bouilloire (pas de cuisine).
",
    'superficie' => '17m²',
    'assets' => 'chambre',
    'imgs' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 17, 12, 14, 15, 18),
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
