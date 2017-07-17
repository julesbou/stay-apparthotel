<!doctype html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Dosis:200,300,400,500,600,700,800|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" href="/assets/favicon.ico">
    <title>Stay AppartHotel Lille</title>
    <meta name="description" content="Location d'appart-hotel sur Lille en plein centre ville.">
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
    <script> window.eliam = ['com', 'apparthotel@gmail', 'stay'].reverse().join('.') </script>
    <script src="/scripts.js"></script>
    <?php echo $content; ?>
  </body>
</html>
