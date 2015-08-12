<?php

     require_once "src/RockPaperScissor.php";

     class RockPaperScissorTest extends PHPUnit_Framework_TestCase
     {

         function test_rock_rock()
         {
             //Arrange
             $test_RockPaperScissor = new RockPaperScissor;
             $first_input = "rock";
             $second_input = "rock";

             //Act
             $result = $test_RockPaperScissor->play_rock($first_input, $second_input);

             //Assert
             $this->assertEquals("tie", $result);
         }

         function test_rock_paper()
            //Arrange
            $test_RockPaperScissor = new RockPaperScissor;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissor->play_rock($first_input, $second_input);

            //Assert
            $this->assertEquals("Player Two Wins", $result);
     }

 ?>
