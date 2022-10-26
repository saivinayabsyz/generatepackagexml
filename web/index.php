<?php include_once("views/index.html"); ?>

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/home', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('home.html');
});
