<?php
  echo $view->extend('layout-room.php');
  $data = array(
    'name' => 'Chambre',
    'prix' => '59€',
    'desc' => "
Situé au 3ème étage avec ascenseur, l'appartement est entièrement neuf et équipé.
Salle de bain avec douche, wc suspendu et meuble vasque, sèche cheveux et linge de toilette neuf.
<br>Installez vous, vous n'avez rien à ramener.",
    'superficie' => '45m²',
    'assets' => 'chambre',
    'imgs' => array(1, 2, 5, 4, 10, 6, 7, 8, 3, 9),
    'equipments' => array(
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
