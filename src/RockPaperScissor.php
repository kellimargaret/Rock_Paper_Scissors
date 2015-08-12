<?php
    class RockPaperScissor
    {
        function play_rock($player1, $player2)
        {
            if ($player1 === $player2){
                $result = "tie";
            // Player 1 == Rock Action
            } else {
                if ($player1 === "rock") {
                    if ($player2 === "paper"){
                        $result = "Player Two Wins";
                    } else {
                        $result = "Player One Wins";
                    }
                }
            }

            return $result;
        }
    }
?>
