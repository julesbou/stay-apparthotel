<?php echo $view->extend('layout.php') ?>

<section class="section section-reglement red">
  <a onclick="goBack()" class="back">Retour</a>
  <h1 class="title">Règlement Intérieur</h1>
</section>

<section class="section transparent section-reglement">
  <h2 class="subtitle">Conditions</h2>
  <ul>
    <li>Non fumeur</li>
    <li>Ne convient pas aux animaux</li>
    <li>Pas de fête ni de soirée</li>
    <li>Peut ne pas convenir aux enfants (0-12 ans)</li>
    <li>L'entrée dans les lieux se fait à partir de 14:00</li>
  </ul>

  <h2 class="subtitle">Annulation</h2>
  <p>
    Si vous annulez jusqu'à 7 jours avant le voyage, vous recevez un remboursement à hauteur de 50 % et les frais de service vous sont remboursés intégralement.
  </p>

  <h2 class="subtitle">Réservation</h2>
  <p>
    Les vendredis et samedis la durée de séjour minimale est de 2 nuits.
  </p>

  <h2 class="subtitle">Suppléments</h2>
  <p>
    Place de parking et ménage en supplément.
  </p>

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
