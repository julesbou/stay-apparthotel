<?php echo $view->extend('layout.php') ?>

<section class="section section-desc">
  <a href="/" class="back">Retour</a>
  <h1 class="title"><?php echo $name; ?></h1>
  <div class="row mobile-col">
    <div class="row-col right-margin">
      <h2 class="section-title">Présentation</h2>
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
        <div>
          <div>Equipements</div>
          <div>
            <?php foreach(array_chunk($equipments, count($equipments) / 2 + 1) as $list) { ?>
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
    <div class="row-col row-v-start row-h-end">
      <img src="/assets/rooms/<?php echo $assets; ?>/cover.jpg" class="cover">
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
        Nom et Prénom
        <input name="name">
      </label>

      <label class="field">
        Message
        <textarea name="msg" rows="8" placeholder="Indiquer votre date d'arrivée et de départ"></textarea>
      </label>

      <input type="hidden" name="name" value="<?php echo $name; ?>">

      <button type="submit">Envoyer votre demande</button>
      <span class="after-button">ou par mail <b class="eliam"></b></span>
    </div>

  </div>

</section>
