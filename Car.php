<?php
require_once "Vehicle.php";
require_once "LightableInterface.php";

class Car extends Vehicle implements LightableInterface

{
    public const ALLOWED_ENERGIES = [
        "fuel",
        "electric",
    ];


    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }


    public function setEnergyCar(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function switchOn(): bool
    {
        echo "Lumière allumée" . "<br>";
        return  true;
    }

    public function switchOff(): bool
    {
        echo "Lumière éteinte" . "<br>";
        return false;
    }
}
