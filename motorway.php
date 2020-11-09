<?php
require_once 'highway.php';

final class MotorWay extends Highway{

    protected $nbLane = 4;

    protected $maxSpeed = 130;

   /**
    * @param Vehicle $vehicle
    */

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $addedVehicle = $this->getCurrentVehicles();

            $addedVehicle[] = $vehicle;

            $this->setCurrentVehicles($addedVehicle);
        }
   }
};