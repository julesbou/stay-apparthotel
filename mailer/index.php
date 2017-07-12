<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
//$app['debug'] = true;

putenv('SENDGRID_API_KEY=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');

$app->register(new JDesrosiers\Silex\Provider\CorsServiceProvider(), [
  "cors.allowOrigin" => "*",
]);

$app->get('/', function() {
  return 'hello world';
});

$app->post('/', function(Symfony\Component\HttpFoundation\Request $request) {
  $email = $request->get('email');
  $name = $request->get('name');
  $body = $request->get('body');

  $from = new SendGrid\Email(null, $email);
  $subject = "Stay AppartHotel - Nouveau message";
  $to = new SendGrid\Email(null, "jules.boussekeyt@gmail.com");
  $content = new SendGrid\Content("text/html", $body);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  $mail->personalization[0]->addSubstitution("-name-", $name);
  $mail->setTemplateId("f9fe93e7-bb0d-4201-b9ce-3a90135358a0");


  $apiKey = getenv('SENDGRID_API_KEY');
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($mail);

  echo '';
  echo "$email - $name - $body " . $response->statusCode();
  echo '';

  return '';
});

$app["cors-enabled"]($app);

$app->run();
