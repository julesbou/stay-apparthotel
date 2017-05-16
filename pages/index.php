<?php echo $view->extend('layout.php') ?>

<?php $view['head'] = '
  <meta property="fb:app_id" content="289746158116404" />
  <meta property="og:url" content="https://stay-apparthotel.fr" />
  <meta property="og:title" content="Stay AppartHotel" />
  <meta property="og:description" content="Location d\'appartements courte et longue durée à Lille" />
  <meta property="og:image" content="https://stay-apparthotel.fr/assets/rooms/appartement-2/cover.jpg" />
';
?>

<section class="section section-home">

  <div class="header">
    <h1 class="header-title">Stay AppartHotel</h1>
    <a href="/about.html" class="about">Où nous trouver ?</a>
  </div>

  <h2 class="subtitle"><span>Location d'appartements courte et longue durée à Lille</span></h2>

  <div class="rooms row">

    <a href="/chambre.html" class="room">
      <div class="room-img">
        <span>à partir de<br>59€</span>
        <img src="/assets/rooms-thumbnails/chambre/cover.jpg" data-src="/assets/rooms/chambre/cover.jpg">
      </div>
      <div class="room-text">
        <p class="room-title">Chambre</p>
        <p class="room-desc">
          Une chambre fonctionnelle, possédant une salle de bain complète et des W.C.
          Vous trouverez également un dressing, des rangements. Ainsi qu'un coin télé et
          une connection internet rapide.
        </p>
      </div>
    </a>

    <a href="/appartement-2.html" class="room">
      <div class="room-img">
        <span>à partir de<br>99€</span>
        <img src="/assets/rooms-thumbnails/appartement-2/cover.jpg" data-src="/assets/rooms/appartement-2/cover.jpg">
      </div>
      <div class="room-text">
        <p class="room-title">Appartement</p>
        <p class="room-desc">
          Un appartement complet, possédant une salle de bain ainsi qu'une cuisine toute équipée.
          Vous trouverez également un dressing, des rangements, une télé et un coin bureau.
        </p>
      </div>
    </a>

    <a href="/appartement-1.html" class="room">
      <div class="room-img">
        <span>à partir de<br>129€</span>
        <img src="/assets/rooms-thumbnails/appartement-1/cover.jpg" data-src="/assets/rooms/appartement-1/cover.jpg">
      </div>
      <div class="room-text">
        <p class="room-title">Grand Appartement</p>
        <p class="room-desc">
          Le plus grand de nos appartements, vous vous y sentirez comme chez vous.
          Cuisine complète, grand dressing, coin salon, salle de bain et toilettes, coin salon avec Télé.
        </p>
      </div>
    </a>

  </div>

</section>
