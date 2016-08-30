<?php
namespace MarsRover;

final class Position
{
    private $latitude;


    /**
     * Position constructor.
     * @param $latitude
     */
    public function __construct($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @param Direction $direction
     * @return Position
     */
    public function moveAhead(Direction $direction)
    {
        return new self($this->latitude + $direction->deltaLatitude());
    }
}