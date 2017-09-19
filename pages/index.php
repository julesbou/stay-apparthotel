<?php echo $view->extend('layout.php') ?>

<?php $view['head'] = '
  <meta property="fb:app_id" content="289746158116404" />
  <meta property="og:url" content="https://stay-apparthotel.fr" />
  <meta property="og:title" content="Stay AppartHotel" />
  <meta property="og:description" content="Location de meublés en courte et moyenne durée EN PLEIN COEUR DE Lille." />
  <meta property="og:image" content="https://stay-apparthotel.fr/assets/rooms/appartement-1/cover.jpg" />
';
?>

<ul class="menu">
  <li><a href="#appartements">Nos appartements</a></li>
  <li><a href="#map">Localisation</a></li>
  <li><a href="#contact">Nous contacter</a></li>
</ul>

<div class="container">
  <article class="tile" id="appartements">
    <a href="/appartement-1.html" class="tile-picture" style="background-image: url(/assets/rooms/appartement-1/cover.jpg)"></a>
    <div class="tile-content">
      <h3>Appartement Nº1</h3>
      <p>Un appartement très confortable de 33 m2 idéal pour une moyenne ou longue durée.</p>
      <a href="/appartement-1.html">Visiter l'appartement</a>
    </div>
  </article>

  <article class="tile">
    <div class="tile-content">
      <h3>Appartement Nº2</h3>
      <p>Très bel appartement de 27 m2 idéal pour une courte ou moyenne durée.</p>
      <a href="/appartement-2.html">Visiter l'appartement</a>
    </div>
    <a href="/appartement-2.html" class="tile-picture" style="background-image: url(/assets/rooms/appartement-2/cover.jpg)"><a>
  </article>

  <article class="tile">
    <a href="/chambre.html" class="tile-picture" style="background-image: url(/assets/rooms/chambre/cover.jpg)"></a>
    <div class="tile-content">
      <h3>Chambre</h3>
      <p>Pied à terre idéal pour un week end ou court séjour. Chambre équipée d'une salle de bain et de toilettes.</p>
      <a href="/chambre.html">Visiter la chambre</a>
    </div>
  </article>
</div>

<section class="map" id="map">
  <div class="container">
    <p>Nous sommes situés en plein coeur de lille - 2min à pied de la grand place - 15min à pied des gares</p>
    <iframe
      width="100%"
      height="450"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCn4h7sfEvyNX_Fy6moKbwUTnp2CSwhSlQ&q=stay%20AppartHotel%20-%20%204%20Rue%20des%202%20%C3%89p%C3%A9es%2C%2059800%20Lille&zoom=15" allowfullscreen>
    </iframe>
    <figure>
      <img src="/assets/street.jpg" />
      <figcaption>
        Vue de la façade depuis rue Nationale<br>
        L'entrée se fait dans la petit ruelle sur la droite.
      </figcaption>
    </figure>
  </div>
</section>

<section class="contact" id="contact">
  <div class="container">
    <p>À votre écoute - Pour toute questions ou demande.</p>

    <div class="contact-box">
      <form class="contact-form" method="POST">
        <label class="field">
          Email
          <input type="email" name="_replyto" required>
        </label>
        <label class="field">
          Nom et Prénom
          <input type="text" name="name">
        </label>
        <label class="field">
          Message
          <textarea name="msg" rows="8" required></textarea>
        </label>
        <input type="submit" value="Envoyer" />
      </form>

      <div class="contact-reglement">
        <ul>
          <li>✔ Connection internet incluse (WIFI & Ethernet)</li>
          <li>✔ Draps et serviettes de toilette fournis</li>
          <li>✔ Places de parking (en supplément) au <a target="_blank" href="https://www.google.fr/maps/place/Parking+EFFIA+Nouveau+Si%C3%A8cle+T%C3%A9l%C3%A9p%C3%A9age/@50.6371404,3.0579306,17z/data=!3m1!4b1!4m5!3m4!1s0x47c2d587ad309ef7:0xd99fc139717f482f!8m2!3d50.637137!4d3.0601246">Nouveau Siècle</a> (parking Effia)</li>
          <li>✔ Ménage possible (en supplément)</li>
        </ul>
      </div>
    </div>

  </div>
</section>
