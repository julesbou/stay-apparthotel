<?php echo $view->extend('layout.php') ?>

<?php $view['head'] = '
  <meta property="fb:app_id" content="289746158116404" />
  <meta property="og:url" content="https://stay-apparthotel.fr' . $url . '" />
  <meta property="og:title" content="' . $name . ' - Location d\'appartements courte et longue durée à Lille" />
  <meta property="og:description" content="' . $desc . '" />
  <meta property="og:image" content="https://stay-apparthotel.fr/assets/rooms/' . $assets . '/cover.jpg" />
';
?>

<section class="section section-desc">

  <div class="header">
    <h1 class="header-title"><a href="/">Stay AppartHotel</a></h1>
    <a href="/about.html" class="about">Où nous trouver ?</a>
  </div>

  <div class="row mobile-col section-desc-container">
    <div class="section-desc-left">
    <h2 class="section-title"><?php echo $name; ?></h2>
      <p class="section-p"><?php echo $desc; ?></p>
      <div class="details">
        <div>
          <div>Prix</div>
          <div>
            à partir de <?php echo $prix; ?> par nuit
            <small class="break">(possibilité de prix à la semaine ou au mois)</small>
          </div>
        </div>
        <div>
          <div>Superficie</div>
          <div><?php echo $superficie; ?></div>
        </div>
        <div>
          <div>Nbr. Places</div>
          <div>2 personnes - lit double</div>
        </div>
      </div>
    </div>
    <div class="section-desc-right">
      <img src="/assets/rooms/<?php echo $assets; ?>/cover.jpg" class="cover">
      <div class="equipments">
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
</section>

<section class="section section-gallery">
  <h2 class="section-title">Gallerie photos</h2>

  <div class="gallery">
    <?php foreach($imgs as $img) { ?>
      <div class="img">
        <img
          src="/assets/rooms-thumbnails/<?php echo $assets; ?>/<?php echo $img; ?>.jpg"
          data-src="/assets/rooms/<?php echo $assets; ?>/<?php echo $img; ?>.jpg"
        >
      </div>
    <?php } ?>
  </div>

  <div class="gallery-fullpage">
    <div class="img"></div>
    <div class="left"></div>
    <div class="right"></div>
    <div class="close"></div>
  </div>
</section>

<section class="section section-contact">

  <div class="row mobile-col">

    <div class="row-col">
      <h2 class="section-title">Réservation</h2>

      <p class="section-p" style="margin-right: 160px; text-align: justify;">
        Vous pouvez nous joindre ici pour toute question ou demande de réservation.
        Nous nous ferons une joie de vous y répondre.
        <a href="/reglement.html">Lire le réglement intérieur.</a>
      </p>

    </div>

    <form name="reservation" class="row-col">
      <label class="field">
        Email
        <input name="email">
      </label>
      <label class="field">
        Nom et Prénom
        <input name="name">
      </label>

      <label class="field">
        Message
        <textarea name="msg" rows="8" placeholder="Indiquer votre date d'arrivée et de départ"></textarea>
      </label>

      <input type="hidden" name="name" value="<?php echo $name; ?>">

      <button type="submit">Envoyer votre demande</button>
      <span class="after-button">ou par mail <a class="eliam"></a></span>
    </form>

  </div>

</section>
