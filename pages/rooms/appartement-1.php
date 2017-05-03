<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Appartement - 1',
    'prix' => '99€',
    'desc' => "
Situé au 3ème étage avec ascenseur, l'appartement est entièrement neuf et équipé.
Cuisine avec coin repas, salle de bain avec douche, wc suspendu et meuble vasque, sèche cheveux et linge de toilette neuf.
<br>Installez vous, vous n'avez rien à ramener.",
    'superficie' => '45m²',
    'assets' => 'appartement-1',
    'imgs' => array(7, 2, 6, 4, 10, 3, 5, 8, 9, 1),
    'equipments' => array(
      'Cuisine Equipée',
      'Vaisselle',
      'Minibar',
      'Cafetière Nespresso™',
      'Bouilloire',
      'Bureau',
      'Armoire dressing',
      'Télévision TNT',
      'Wifi & Prise Ethernet',
      'Linge de toilette/lit',
      'Sèche cheveux',
      'Fer à repasser',
      'Lave linge',
    ),
  );
