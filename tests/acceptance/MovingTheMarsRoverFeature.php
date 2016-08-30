<?php

use MarsRover\Direction;
use MarsRover\MarsRover;
use MarsRover\MoveBackward;
use MarsRover\MoveForward;
use MarsRover\Position;

class MovingTheMarsRoverFeature extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_stays_at_the_same_position_if_it_does_not_receive_a_move_command()
    {
        $rover = MarsRover::startAtLookingTo(new Position(12, 15), Direction::north());

        $this->assertEquals(new Position(12, 15), $rover->getPosition());
    }

    /**
     * @test
     */
    public function it_moves_forward()
    {
        $rover = MarsRover::startAtLookingTo(new Position(12, 15), Direction::north());
        $rover->receiveCommands([new MoveForward()]);

        $this->assertNotEquals(new Position(12, 15), $rover->getPosition());
        $this->assertEquals(new Position(13, 15), $rover->getPosition());
    }

    /**
     * @test
     */
    public function it_moves_backward()
    {
        $rover = MarsRover::startAtLookingTo(new Position(12, 15), Direction::north());
        $rover->receiveCommands([new MoveBackward()]);

        $this->assertNotEquals(new Position(12, 15), $rover->getPosition());
        $this->assertEquals(new Position(11, 15), $rover->getPosition());
    }

    public function it_stays_at_the_same_position_when_it_changes_direction()
    {
        $rover = MarsRover::startAtLookingTo(new Position(12, 15), Direction::north());
        $rover->receiveCommands([new LookAtSouth()]);

        $this->assertEquals(new Position(12, 15)); // Faire les assertNotEquals
    }
}
