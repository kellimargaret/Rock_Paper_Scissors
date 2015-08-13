<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissor.php";

    //initialize $_SESSION array to hold results
    session_start();
    if(empty($_SESSION['list_of_moves'])) {
        $_SESSION['list_of_moves'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        RockPaperScissor::deleteAll();
        return $app['twig']->render('player_one_form.html.twig');
    });

    $app->get("/player_two_form", function() use ($app){
        $player1_input = new RockPaperScissor($_GET['player1']);
        $player1_input->save();
        return $app['twig']->render('player_two_form.html.twig');
    });

    $app->get("/gameover", function() use ($app){
        $new_game = RockPaperScissor::getAll()[0];
        $new_game->setPlayer2($_GET['player2']);
        $game_results = $new_game->play_rock($new_game->getPlayer1(), $new_game->getPlayer2());
        return $app['twig']->render('results.html.twig', array('result' => $game_results, 'player1' => $new_game->getPlayer1(), 'player2' => $_GET['player2']));
    });

    return $app;

?>
