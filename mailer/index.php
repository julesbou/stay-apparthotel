<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$isLocalhost = $_SERVER['SERVER_NAME'] === 'localhost';
$app['debug'] = $isLocalhost;

putenv('SENDGRID_API_KEY=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');

$app->register(new JDesrosiers\Silex\Provider\CorsServiceProvider(), [
  "cors.allowOrigin" => "*",
]);

$app->get('/', function() {
  return 'hello world';
});

$app->register(new \Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
  //'monolog.level' => \Monolog\Logger::WARNING,
));

$app->post('/', function(Symfony\Component\HttpFoundation\Request $request) use ($app, $isLocalhost) {
  $email = $request->get('email');
  $name = $request->get('name');
  $room = $request->get('room');
  $body = $request->get('body');

  $from = new SendGrid\Email(null, $email);
  $subject = "Stay AppartHotel - $room - Nouveau message - $name";
  $to = new SendGrid\Email(null, $isLocalhost ? "jules.boussekeyt@gmail.com" : "stay.apparthotel@gmail.com");
  $content = new SendGrid\Content("text/html", $body);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  $mail->personalization[0]->addSubstitution("-email-", $email);
  $mail->personalization[0]->addSubstitution("-name-", $name);
  $mail->personalization[0]->addSubstitution("-room-", $room);
  $mail->setTemplateId("f9fe93e7-bb0d-4201-b9ce-3a90135358a0");


  $apiKey = getenv('SENDGRID_API_KEY');
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($mail);
  $app['monolog']->info("$email - $name - $body " . $response->statusCode());

  return new Symfony\Component\HttpFoundation\Response('done', $response->statusCode());
});

$app["cors-enabled"]($app);

$app->run();
