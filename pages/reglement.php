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
    <li>Place de parking au Nouveau Siècle</li>
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
