<?php
namespace MarsRover;

final class MarsRover
{
    /**
     * @var Position
     */
    private $currentPosition;

    /**
     * @var Direction
     */
    private $currentDirection;

    /**
     * @param Position $startingPosition
     * @param Direction $startingDirection
     * @return MarsRover
     */
    public static function startAtLookingTo(Position $startingPosition, Direction $startingDirection)
    {
        return new self($startingPosition, $startingDirection);
    }

    /**
     * MarsRover constructor.
     * @param Position $startingPosition
     * @param Direction $startingDirection
     */
    private function __construct(Position $startingPosition, Direction $startingDirection)
    {
        $this->currentPosition = $startingPosition;
        $this->currentDirection = $startingDirection;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->currentPosition;
    }

    /**
     * @param Command[] $commands
     */
    public function receiveCommands(array $commands = [])
    {
        /** @var Command $command */
        $command = reset($commands);
        $this->currentPosition = $command->apply($this->currentPosition, $this->currentDirection);
    }
}