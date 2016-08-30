<?php

use MarsRover\Direction;

class DirectionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_inverse_direction()
    {
        $this->assertEquals(Direction::south(), Direction::north()->reverse());
        $this->assertEquals(Direction::north(), Direction::south()->reverse());
    }
}
