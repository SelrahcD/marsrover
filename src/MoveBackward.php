<?php
namespace MarsRover;

final class MoveBackward implements Command
{

    /**
     * MoveBackward constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param Position $currentPosition
     * @param Direction $direction
     * @return Position
     */
    public function apply(Position $currentPosition, Direction $direction)
    {
        return $currentPosition->moveAhead($direction->reverse());
    }
}