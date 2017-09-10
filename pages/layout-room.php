<?php echo $view->extend('layout.php') ?>

<?php $view['head'] = '
  <meta property="fb:app_id" content="289746158116404" />
  <meta property="og:url" content="https://stay-apparthotel.fr' . $url . '" />
  <meta property="og:title" content="' . $name . ' - Locations courtes et moyennes durée EN PLEIN COEUR DE Lille." />
  <meta property="og:description" content="' . $desc . '" />
  <meta property="og:image" content="https://stay-apparthotel.fr/assets/rooms/' . $assets . '/cover.jpg" />
';
?>

<section class="overview">
  <div class="container">
    <div class="row mobile-col">
      <div class="overview-left">
        <h2><?php echo $name; ?></h2>
        <p><?php echo $desc; ?></p>
        <div class="overview-details">
          <div>
            <div>Prix <br><small>(À partir de)</small></div>
            <div>
              <?php if ($url === '/chambre.html') { ?>
                <?php echo $prix; ?> par nuit
              <?php } else { ?>
                <?php echo $prix; ?> par nuit
                <br>
                <?php echo $prixSemaine; ?> par semaine
                <br>
                <?php echo $prixMois; ?> par mois
              <?php } ?>
            </div>
          </div>
          <div>
            <div>Superficie</div>
            <div><?php echo $superficie; ?></div>
          </div>
          <div>
            <div>Pour</div>
            <div>2 personnes - lit double</div>
          </div>
        </div>
        <a class="btn overview-btn" href="/booking.html">Réserver en ligne</a>
      </div>
      <div class="overview-right" style="background-image: url(/assets/rooms/<?php echo $assets; ?>/cover.jpg)">
        <div class="overview-equipments">
          <?php foreach(array_chunk($equipments, count($equipments) / 2 + (count($equipments) % 2 === 0 ? 0 : 1)) as $list) { ?>
            <ul>
              <?php foreach($list as $el) { ?>
                <li><?php echo $el; ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery">
  <?php foreach($imgs as $img) { ?>
    <div class="img">
      <img
        src="/assets/rooms-thumbnails/<?php echo $assets; ?>/<?php echo $img; ?>.jpg"
        data-src="/assets/rooms/<?php echo $assets; ?>/<?php echo $img; ?>.jpg"
      >
    </div>
  <?php } ?>
</section>

<div class="modal" data-modal="gallery">
  <div class="img"></div>
  <div class="left"></div>
  <div class="right"></div>
  <div class="close"></div>
</div>
