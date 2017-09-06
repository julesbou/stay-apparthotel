<?php echo $view->extend('layout.php') ?>

<?php $view['head'] = '
  <meta property="fb:app_id" content="289746158116404" />
  <meta property="og:url" content="https://stay-apparthotel.fr" />
  <meta property="og:title" content="Stay AppartHotel" />
  <meta property="og:description" content="Location d\'appartements courte et moyenne durée à Lille" />
  <meta property="og:image" content="https://stay-apparthotel.fr/assets/rooms/appartement-2/cover.jpg" />
';
?>

<header class="header">
  <div class="header-logo">
    <div>Stay Appart</div>
    <div>Hotel Lille</div>
  </div>
  <p class="header-text">Locations courtes et moyennes durées EN PLEIN COEUR DE Lille.</p>
</header>

<ul class="menu">
  <li><a href="#appartements">Nos appartements</a></li>
  <li><a href="#map">Localisation</a></li>
  <li><a href="#contact">Nous contacter</a></li>
</ul>


<article class="tile" id="appartements">
  <div class="tile-picture" style="background-image: url(/assets/rooms/appartement-1/cover.jpg)"></div>
  <div class="tile-content">
    <h3>Appartement Nº1</h3>
    <p>Un appartement confortable et très bien équipé - Pour un long séjour, vous vous y sentirez comme chez vous.</p>
    <a href="/">Visiter l'appartement</a>
  </div>
</article>

<article class="tile">
  <div class="tile-content">
    <h3>Appartement Nº2</h3>
    <p>Un tout petit peu plus petit que notre appartement Nº1 - mais tout aussi complet et agréable.</p>
    <a href="/">Visiter l'appartement</a>
  </div>
  <div class="tile-picture" style="background-image: url(/assets/rooms/appartement-2/cover.jpg)"></div>
</article>

<article class="tile">
  <div class="tile-picture" style="background-image: url(/assets/rooms/chambre/cover.jpg)"></div>
  <div class="tile-content">
    <h3>Chambre</h3>
    <p>Pour les séjours courts, soyez à l'aise - Chambre équipé d'une salle de bain et de toilettes.</p>
    <a href="/">Visiter la chambre</a>
  </div>
</article>

<section class="map" id="map">
  <p>Nous sommes situé en plein coeur de lille - 2min à pied de la grand place - 15min à pied des gares</p>
  <iframe
    width="100%"
    height="450"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCn4h7sfEvyNX_Fy6moKbwUTnp2CSwhSlQ&q=stay%20AppartHotel%20-%20%204%20Rue%20des%202%20%C3%89p%C3%A9es%2C%2059800%20Lille" allowfullscreen>
  </iframe>
</section>

<section class="contact" id="contact">
  <p>À votre écoute - Pour toute questions ou demande.</p>

  <div class="contact-box">
    <form name="contact" class="contact-form">
      <label class="field">
        Email
        <input name="email" type="email">
      </label>
      <label class="field">
        Nom et Prénom
        <input name="name">
      </label>
      <label class="field">
        Message
        <textarea name="msg" rows="8"></textarea>
      </label>
      <button type="submit">Envoyer</button>
    </form>

    <div class="contact-reglement">
      <ul>
        <li>✔ Appartements Non fumeur</li>
        <li>✔ Ne convient pas aux animaux</li>
        <li>✔ Pas de fête ni de soirée</li>
        <li>✔ Peut ne pas convenir aux enfants (0-12 ans)</li>
        <li>✔ Durée minimum de 2 nuits (sauf chambre)</li>
        <li>✔ Places de parking (payant) au <a target="_blank" href="https://www.google.fr/maps/place/Parking+EFFIA+Nouveau+Si%C3%A8cle+T%C3%A9l%C3%A9p%C3%A9age/@50.6371404,3.0579306,17z/data=!3m1!4b1!4m5!3m4!1s0x47c2d587ad309ef7:0xd99fc139717f482f!8m2!3d50.637137!4d3.0601246">Nouveau Siècle</a></li>
        <li>✔ Ménage possible pour longue durée</li>
      </ul>
    </div>

  </div>
</section>


<footer class="footer">
  <p>Adresse: <b>Stay AppartHotel - 4 Rue des 2 Épées - 59800 Lille</b></p>
  <p>Contact: <b><a class="eliam"></a></b></p>
  <p>Réalisation: <b><a href="julesbou.net">Jules</a></b></p>
</footer>
