<?php

abstract class HighWay {

    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @return array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}