<?php
    class RockPaperScissor
    {

        private $player1;
        private $player2;

        function __construct($player1="", $player2="")
        {
            $this->player1 = $player1;
            $this->player2 = $player2;
        }

        function setPlayer1($new_player1)
        {
            $this->player1 = $new_player1;
        }

        function getPlayer1()
        {
            return $this->player1;
        }

        function setPlayer2($new_player2)
        {
            $this->player2 = $new_player2;
        }

        function getPlayer2()
        {
            return $this->player2;
        }

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
        function save()
        {
            array_push($_SESSION['list_of_moves'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_moves'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_moves'] = array();
        }
    }
?>
