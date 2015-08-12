<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissor.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provide\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
            return $app['twig']->render('player_one_form.html.twig');
    });

?>
