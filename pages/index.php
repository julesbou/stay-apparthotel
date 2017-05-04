<?php echo $view->extend('layout.php') ?>

<section class="section section-home">
  <div class="header">
    <h1 class="title">Stay<br>AppartHotel</h1>
    <a href="/about.html" class="about">Où nous trouver ?</a>
  </div>

  <div class="rooms row">

    <a href="/appartement-1.html" class="room">
      <span class="room-price">à partir de<br>129€</span>
      <img class="room-img" src="/assets/rooms-thumbnails/appartement-1/cover.jpg" data-src="/assets/rooms/appartement-1/cover.jpg">
      <p class="room-desc">Appartement - 1</p>
    </a>

    <a href="/appartement-2.html" class="room">
      <span class="room-price">à partir de<br>99€</span>
      <img class="room-img" src="/assets/rooms-thumbnails/appartement-2/cover.jpg" data-src="/assets/rooms/appartement-2/cover.jpg">
      <p class="room-desc">Appartement - 2</p>
    </a>

    <a href="/chambre.html" class="room">
      <span class="room-price">à partir de<br>59€</span>
      <img class="room-img" src="/assets/rooms-thumbnails/chambre/cover.jpg" data-src="/assets/rooms/chambre/cover.jpg">
      <p class="room-desc">Chambre</p>
    </a>

  </div>

  <div class="footer">
    <h2 class="subtitle">Location d'appartements courte et longue durée à Lille</h2>
  </div>

</section>
