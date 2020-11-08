<?php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles;

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    function getCurrentVehicle(): array
    {
        $this->currentVehicles;
    }

    function setCurrentVehicle(array $currentVehicles): HighWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    function getNbLane(): int
    {
        $this->nbLane;
    }

    function setNbLane(array $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    function getMaxSpeed(): int
    {
        $this->maxSpeed;
    }

    function setMaxSpeed(array $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
