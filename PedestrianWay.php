<?php

require_once __DIR__ . '/HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $currentVehicles[] = $vehicle;
        }
    }
}
