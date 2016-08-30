<?php
namespace MarsRover;

final class MoveForward implements Command
{

    /**
     * MoveForward constructor.
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
        return $currentPosition->moveAhead($direction);
    }
}