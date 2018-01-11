<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" href="/assets/favicon.ico">
    <meta name="description" content="Dans un immeuble entièrement rénové, vous serez séduits par ces studios très bien équipés, meublés et décorés avec goût.">
    <?php if (isset($view['head'])) echo $view['head']; ?>
    <script>
      if (window.location.hostname !== '127.0.0.1') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-102501832-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
  </head>
  <body>
    <script src="/polyfill.min.js"></script>
    <script src="/jquery.min.js"></script>
    <script> window.eliam = ['com', 'apparthotel+site@gmail', 'stay'].reverse().join('.') </script>
    <script src="/scripts.js"></script>

    <div class="wrap">
      <header class="header">
        <h1>
          <a href="/" class="header-logo">
            <div>Stay Appart</div>
            <div>Hotel Lille</div>
          </a>
        </h1>
        <h2 class="header-text">Location de meublés en courte et moyenne durée EN PLEIN COEUR DE Lille.</h2>
        <p class="header-intro">
          Dans un immeuble entièrement rénové, vous serez séduits par ces studios très bien équipés, meublés et décorés avec goût.
          Situés au 3ème étage avec ascenseur.
        </p>
      </header>

      <?php echo $content; ?>
    </div>

    <footer class="footer">
      <p>Adresse: <b>Stay Appart Hotel - 4 Rue des 2 Épées - 59800 Lille</b></p>
      <p>Contact: <b><a class="eliam"></a></b></p>
      <p>Réalisation: <b><a href="http://julesbou.fr">JulesBou.fr</a></b></p>

      <a href="https://www.facebook.com/Stay-Appart-H%C3%B4tel-Lille-1301926073195337/" class="facebook">
        Rejoignez nous sur Facebook
        <img src="/assets/icons/fb.svg" />
      </a>
    </footer>

  </body>
</html>
