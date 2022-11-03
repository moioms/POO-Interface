<?php
require "Vehicle.php";
abstract class HighWay
{
    private array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(
        // array $currentVehicles,
        int $nbLane,
        int $maxSpeed
    ) {
        // $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getcurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setcurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setnbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getmaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setmaxSpeed($maxSpeed): void
    {
        $this->nbLane = $maxSpeed;
    }

    public abstract function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle->instanceof (Car) {
            $vehicle->setcurrentVehicles();
        }
        if($vehicle->instanceof (Truck) {
            $vehicle->setcurrentVehicles();
        }
        if($vehicle->instanceof (Bicycle)  {
            $vehicle->setcurrentVehicles();
        }
    
}
