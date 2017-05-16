<!doctype html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Dosis:200,300,400,500,600,700,800|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
    <title>Stay AppartHotel Lille</title>
    <meta name="description" content="Location d'appart-hotel sur Lille en plein centre ville.">
    <?php if (isset($view['head'])) echo $view['head']; ?>
  </head>
  <body>
    <script src="/polyfill.min.js"></script>
    <script src="/jquery.slim.min.js"></script>
    <script src="/scripts.js"></script>
    <?php echo $content; ?>
  </body>
</html>
