<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private string $energy;

    private int $storageCapacity;

    private int $loading = 0;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;

    }

    /**
     * @return int
     */
    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     */
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function loadChecking(){
        $result= '';
        if ($this->loading >= $this->storageCapacity) {
            $result= 'full';
        } else {
            $result= 'in filling';
        }
        return $result;
    }
}