<?php

require_once "Vehicle.php";
require_once "LightableInterface.php";

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            echo "Lumière allumée" . "<br>";
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        echo "Lumière éteinte" . "<br>";
        return false;
    }
}
