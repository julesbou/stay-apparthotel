<?php echo $view->extend('layout.php') ?>

<section class="section section-desc <?php echo $color; ?>">
  <a href="/" class="back">Retour</a>
  <h1 class="title">Chambre<br><?php echo $name; ?></h1>
  <!-- Teodoro Jericho Takashi Manlio Arnaldo Toussaint Walker -->
  <div class="row mobile-col">
    <div class="row-col right-margin">
      <h2 class="section-title">01 - Présentation</h2>
      <p class="section-p">
        Un appartement simple et fonctionnel, une déco chaleureuse pour vous sentir comme chez vous.
        Restez-y aussi longtemps que vous le souhaiter, il est fait pour vous.
      </p>
      <div class="details">
        <div>
          <div>Superficie</div>
          <div>45m²</div>
        </div>
        <div>
          <div>Nbr. Places</div>
          <div>2 personnes - lit double</div>
        </div>
        <div>
          <div>Equipements</div>
          <div>
            <ul>
              <li>Frigo</li>
              <li>Wifi</li>
              <li>Cuisine</li>
              <li>Bureau</li>
            </ul>
            <ul>
              <li>Micro-onde</li>
              <li>Cafetière</li>
              <li>Serviettes de toilette</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row-col row-v-center">
      <img src="/assets/rooms/<?php echo $assets; ?>/cover.jpg">
    </div>
  </div>
</section>

<section class="section section-gallery yellow">
  <h2 class="section-title">02 - Gallerie</h2>

  <div class="gallery">
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/1.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/1.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/2.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/2.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/3.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/3.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/4.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/4.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/5.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/5.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/6.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/6.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/7.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/7.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/8.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/8.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/9.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/9.jpg">
    </div>
    <div class="img">
      <img src="/assets/rooms-thumbnails/<?php echo $assets; ?>/10.jpg" data-src="/assets/rooms/<?php echo $assets; ?>/10.jpg">
    </div>
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
      <h2 class="section-title">03 - Réservation</h2>

      <p class="section-p" style="margin-right: 160px; text-align: justify;">
        Vous pouvez nous joindre ici toute question ou demande de réservation.
        Nous vous ferons une joie de vous y répondre.
        <a href="/reglement.html">Lire le réglement intérieur.</a>
      </p>

    </div>

    <div class="row-col">
      <label class="field">
        Email
        <input>
      </label>

      <label class="field">
        Nom et Prénom
        <input>
      </label>

      <label class="field">
        Message
        <textarea rows="8" placeholder="Indiquer votre date d'arrivée et de départ"></textarea>
      </label>

      <input type="hidden" name="name" value="<?php echo $name; ?>">

      <button>Envoyer votre demande</button>
    </div>

  </div>

</section>
