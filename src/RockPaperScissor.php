<?php
    class RockPaperScissor
    {
        function play_rock($player1, $player2)
        {
            if ($player1 === $player2){
                $result = "tie";
            } else {
                // Player 1 == Rock Action
                if ($player1 === "rock") {
                    if ($player2 === "paper"){
                        $result = "Player Two Wins";
                    } else {
                        $result = "Player One Wins";
                    }
                }
                // Player 1 === Paper Action
                elseif ($player1 === "paper") {
                    if ($player2 === "scissors") {
                        $result = "Player Two Wins";
                    } else {
                        $result = "Player One Wins";
                    }
                }
                // Plyaer 1 === Scissor Action
                else {
                    if ($player2 === "rock"){
                        $result = "Player Two Wins";
                    } else {
                        $result = "Player One Wins";
                    }
                }

            }

            return $result;
        }
        // function save()
        // {
        //     array_push($_SESSION['results_array'], $this);
        // }
        // static function getAll()
        // {
        //     return $_SESSION['results_array'];
        // }
        // static function deleteAll()
        // {
        //     $_SESSION['results_array'] = array();
        // }
    }
?>
