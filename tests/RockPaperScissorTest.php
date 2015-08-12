<?php

     require_once "src/RockPaperScissor.php";

     class RockPaperScissorTest extends PHPUnit_Framework_TestCase
     {

         function test_whywontyouwork()
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
     }

 ?>
