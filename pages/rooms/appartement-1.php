<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Grand Appartement',
    'url' => '/appartement-1.html',
    'prix' => '129€',
    'desc' => "
Situé au 3ème étage avec ascenseur, l'appartement est entièrement neuf et équipé.
Cuisine équipée complète, salle de bain avec douche, wc suspendu et meuble vasque.
Salon avec TV, chambre séparée par verrière, dressing aménagé.
Tout est inclus, chauffage, accès internet, linge de lit et serviettes.
",
    'superficie' => '37m²',
    'assets' => 'appartement-1',
    'imgs' => array(1, 2, 3, 4),
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
