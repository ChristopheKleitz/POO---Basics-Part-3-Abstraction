<?php
require_once 'highway.php';

final class PedestrianWay extends  Highway{

    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $addedVehicle = $this->getCurrentVehicles();

            $addedVehicle[] = $vehicle;

            $this->setCurrentVehicles($addedVehicle);
        }
    }
};