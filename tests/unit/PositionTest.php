<?php

use MarsRover\Direction;
use MarsRover\Position;

class PositionTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_equals_a_position_with_same_paremeters()
    {
        $this->assertEquals(new Position(12, 16), new Position(12, 16));
    }

    /**
     * @test
     */
    public function it_doesnt_equal_a_position_with_a_different_latitude()
    {
        $this->assertNotEquals(new Position(12, 16), new Position(13, 16));
    }

    /**
     * @test
     */
    public function it_can_be_moved_north()
    {
        $this->assertEquals(new Position(13, 16), (new Position(12, 16))->moveAhead(Direction::north()));
    }
}
