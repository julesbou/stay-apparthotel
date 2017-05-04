<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Appartement - 2',
    'prix' => '99€',
    'desc' => "
Situé au 3ème étage avec ascenseur, l'appartement est entièrement neuf et équipé.
Cuisine avec coin repas (réfrigérateur, plaques induction, hotte, four, micro-ondes), salle de bain avec douche, wc suspendu et meuble vasque.
Salon avec TV, chambre séparée par verrière, coin bureau avec prise ethernet, dressing aménagé.
Tout est inclus, chauffage, accès internet, linge de lit et serviettes.
<br>Installez vous, vous n'avez rien à ramener.",
    'superficie' => '27m²',
    'assets' => 'appartement-2',
    'imgs' => array(7, 2, 6, 4, 10, 3, 5, 8, 9, 1),
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