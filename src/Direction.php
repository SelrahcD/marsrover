<?php
namespace MarsRover;

final class Direction
{
    /**
     * @var integer
     */
    private $deltaLatitude;

    /**
     * @var integer
     */
    private $deltaLongitude;

    public static function north()
    {
        return new self(1, 0);
    }

    /**
     * @return Direction
     */
    public static function south()
    {
        return new self(-1, 0);
    }

    /**
     * Direction constructor.
     * @param $deltaLatitude
     * @param $deltaLongitude
     */
    private function __construct($deltaLatitude, $deltaLongitude)
    {
        $this->deltaLatitude = $deltaLatitude;
        $this->deltaLongitude = $deltaLongitude;
    }

    /**
     * @return int
     */
    public function deltaLatitude()
    {
        return $this->deltaLatitude;
    }
    
    /**
     * 
     */
    public function reverse()
    {
        return new self(- $this->deltaLatitude, - $this->deltaLongitude);
    }
}