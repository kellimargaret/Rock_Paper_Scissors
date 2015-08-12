<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        fucntion test_rock_rock()
        {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "rock";
          $second_input = "rock";

          //Act
          $result = $test_RockPaperScissors->rockPaperScissors($first_input, $second_input);

          //Assert
          $this->assertEquals("Tie", $result);

        }
    }
 ?>
