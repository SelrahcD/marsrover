<?php
namespace MarsRover;

interface Command
{
    /**
     * @param Position $currentPosition
     * @param Direction $direction
     * @return mixed
     */
    public function apply(Position $currentPosition, Direction $direction);
}