<?php echo $view->extend('layout.php') ?>

<section class="section section-reglement red">
  <a onclick="goBack()" class="back">Retour</a>
  <h1 class="title">Règlement Intérieur</h1>
</section>

<section class="section transparent section-reglement">
  <h2 class="subtitle"><span>Conditions</span></h2>
  <ul>
    <li>Non fumeur</li>
    <li>Ne convient pas aux animaux</li>
    <li>Pas de fête ni de soirée</li>
    <li>Peut ne pas convenir aux enfants (0-12 ans)</li>
    <li>Durée minimum de 2 nuits</li>
  </ul>

  <h2 class="subtitle"><span>Suppléments</span></h2>
  <ul>
    <li>Place de parking au <a target="_blank" href="https://www.google.fr/maps/place/Parking+EFFIA+Nouveau+Si%C3%A8cle+T%C3%A9l%C3%A9p%C3%A9age/@50.6371404,3.0579306,17z/data=!3m1!4b1!4m5!3m4!1s0x47c2d587ad309ef7:0xd99fc139717f482f!8m2!3d50.637137!4d3.0601246">Nouveau Siècle</a></li>
    <li>Ménage possible pour longue durée</li>
  </ul>

</section>


<script>
  function goBack() {
    if (history.length === 1){
      window.location = '/'
    } else {
      history.back()
    }
  }
</script>
