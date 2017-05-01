<?php echo $view->extend('layout.php') ?>

<section class="section section-home">
  <div class="header">
    <h1 class="title">Stay<br>AppartHotel</h1>
    <a href="/about.html" class="about">Où nous trouver ?</a>
  </div>

  <div class="rooms row">

    <a href="/room1.html" class="room">
      <span class="room-price">à partir de<br>45€</span>
      <img class="room-img" src="/assets/rooms-thumbnails/1/cover.jpg" data-src="/assets/rooms/1/cover.jpg">
      <p class="room-desc">Chambre Erasmo</p>
    </a>

    <a href="/room2.html" class="room">
      <span class="room-price">à partir de<br>55€</span>
      <img class="room-img" src="/assets/rooms-thumbnails/2/cover.jpg" data-src="/assets/rooms/2/cover.jpg">
      <p class="room-desc">Chambre Toussaint</p>
    </a>

  </div>

  <div class="footer">
    <h2 class="subtitle">Location d'appartements à Lille</h2>
  </div>

</section>

<svg width="0" height="0">
  <defs>
    <clipPath id="roomClipPath" clipPathUnits="objectBoundingBox">
      <polygon points="0 0.3, 0.3 0, 1 0, 1 1, 1 1, 0 1" />
    </clipPath>
  </defs>
</svg>

