<?php

class Bicycle extends Vehicle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct(string $color, int $nbSeats);
    }
}