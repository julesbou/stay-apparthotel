<?php echo $view->extend('layout.php') ?>

<section class="section section-about blue">
  <a href="/" class="back">Retour</a>
  <a onclick="print()" class="btn print">Print</a>
  <h1 class="title">Où nous trouver ?</h1>
</section>

<div id="map"></div>

<section class="section section-address grey row">
  <address class="row-col">
    <strong>Stay AppartHotel</strong><br>
    4 rue des 2 Epées<br>
    59000 Lille<br>
    <abbr title="Phone">Tél:</abbr> 06 06 06 06 06<br>
    <a href="mailto:#">contact@gmail.com</a>
  </address>

  <div class="row-col">
    <p>
      Situation exceptionnelle à 50 m de la Grand place de Lille , pied à terre idéal pour vos déplacements professionnels ou pour découvrir la région.
    </p>
  </div>
</section>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqqAaaQR7yShwSBOu45lcuZRboBNZnKuA&callback=initMap"></script>
