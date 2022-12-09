<?php

class Airport
{
    private array $plane;

    public function __construct($plane)
    {
        $this->takePlane($plane);
    }

    public function takePlane($plane)
    {
        $this->plane[$plane->getName()] = $plane;
        $this->plane[$plane->getName()]->planeLanding($this);
    }

    public function freeUpPlace($name)
    {
        $this->plane[$name]->takeOff();
        unset($this->plane[$name]);
    }

    public function planeToTheParking($name)
    {
        $this->plane[$name]->changeStatus('Ушёл на стоянку');
    }

    public function planeReadyToTakeOff($name)
    {
        $this->plane[$name]->changeStatus('Готов взлетать');
    }

    public function changePlaneName($name, string $newName)
    {
        $this->plane[$name]->changeName($newName);
    }

    public function tryToAttack($name)
    {
        if (method_exists($this->plane[$name], 'attack')) {
            $this->plane[$name]->attack();
        } else {
            echo 'Атака не возможна';
        }
    }
}