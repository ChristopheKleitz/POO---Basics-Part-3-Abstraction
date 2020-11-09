<?php
require_once 'highway.php';

final class ResidentialWay extends  Highway
{
    protected $nbLane = 2;

    protected $maxSpeed = 50;

    public function addVehicle($vehicle)
    {
        $addedVehicle = $this->getCurrentVehicles();

        $addedVehicle[] = $vehicle;

        $this->setCurrentVehicles($addedVehicle);
    }
};

