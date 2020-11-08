<?php

require_once 'vehicle.php';

class Truck extends Vehicle
{
    private $storage;
    private $loading = 0;

    public function __construct(int $storage, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;
        $this->energy = $energy;
    }

    public function loadingStatus()
    {
        $warning = '';
        if ($this->loading === $this->storage) {
            $warning = 'full';
        } else {
            $warning = 'in filling';
        }
        return $warning;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading($loading): void
    {
        $this->loading = $loading;
    }
}