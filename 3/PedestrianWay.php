<?php
require_once 'HighWay.php';

 final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle){
            return $this->currentVehicles[] = $vehicle;
        }
    }
 }