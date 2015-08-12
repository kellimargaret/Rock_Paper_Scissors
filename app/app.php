<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissor.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //initialize $_SESSION array to hold results
    if (empty($_SESSION['results_array']))
    {
        $_SESSION['results_array'] = array();
    }

    $app->get("/", function() use($app) {


        var_dump($_SESSION['results_array']);
        return $app['twig']->render('player_one_form.html.twig');
    });

    $app->get("/player_two_form", function() use ($app){
        array_push($_SESSION['results_array'], $_GET['player1']);
        return $app['twig']->render('player_two_form.html.twig');
    });

    $app->get("/gameover", function() use ($app){
        $new_game = new RockPaperScissor;
        array_push($_SESSION['results_array'], $_GET['player2']);
        $game_results = $new_game->play_rock($_SESSION['results_array'][0], $_SESSION['results_array'][1]);
        return $app['twig']->render('results.html.twig', array('result' => $game_results));
    });

    return $app;

?>
