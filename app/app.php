<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissor.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
            return $app['twig']->render('player_one_form.html.twig');
    });

    $app->get("/player_two_form", function() use ($app){
            return $app['twig']->render('player_two_form.html.twig');
    });

    return $app;

?>
