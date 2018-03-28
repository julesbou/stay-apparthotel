<?php echo $view->extend('layout.php') ?>

<?php $view['head'] = '
  <title>' . $name . ' meublé pour location courte ou moyenne durée à Lille</title>
  <meta property="fb:app_id" content="289746158116404" />
  <meta property="og:url" content="https://stay-apparthotel.fr' . $url . '" />
  <meta property="og:type" content="place" />
  <meta property="og:title" content="' . $name . ' - Location de meublés en courte et moyenne durée EN PLEIN COEUR DE Lille." />
  <meta property="og:description" content="' . $desc . '" />
  <meta property="og:image" content="https://stay-apparthotel.fr/assets/rooms/' . $assets . '/cover.jpg" />
';
?>

<section class="overview">
  <div class="container">
    <div class="row mobile-col">
      <div class="overview-left">
        <h3><?php echo $name; ?></h3>
        <p><?php echo $desc; ?></p>
        <div class="overview-details">
          <div>
            <div>Prix <br><small>(À partir de)</small></div>
            <div>
              <?php if ($url === '/chambre.html') { ?>
                <?php echo $prix; ?> par nuit
              <?php } else { ?>
                <?php if (isset($prix)) { ?>
                <?php echo $prix; ?> par nuit
                <br>
                <?php } ?>
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
        <div class="overview-btns">
          <a class="btn booking-btn" href="mailto:stay.apparthotel+site@gmail.com">Nous contacter</a>
          <?php if ($url === '/chambre.html') { ?>
            <a class="btn calendar-btn" href="https://via.eviivo.com/calme59800" target="_blank">Réserver en ligne</a>
          <?php } ?>
        </div>
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
  <?php foreach($imgs as $index => $img) { ?>
    <div class="img">
      <img
        src="/assets/rooms-thumbnails/<?php echo $assets; ?>/<?php echo $img; ?>.jpg"
        alt="Photo Nº<?php echo $index; ?> <?php echo $name; ?>"
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
