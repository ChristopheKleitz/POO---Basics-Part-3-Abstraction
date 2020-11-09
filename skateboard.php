<?php

class Skateboard extends Vehicle
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

    public function __construct(string $color)
    {
        parent::__construct(string $color);
    }
}