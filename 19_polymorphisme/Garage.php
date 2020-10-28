<?php


namespace Polymorphisme;


class Garage
{
    protected $vehicules = [];

    public function addVehicule(Vehicule $vehicule): Garage {
        $this->vehicules[] = $vehicule;
        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): bool {
        foreach ($this->vehicules as $k => $v) {
            if ($v === $vehicule) {
                unset($this->vehicules[$k]);
                return true;
            }
        }
        return false;
    }
}