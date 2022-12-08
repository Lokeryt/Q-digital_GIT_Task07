<?php

class Airport
{
    public array $plane;

    public function __construct($plane)
    {
        $this->takePlane($plane);
    }

    public function takePlane($plane)
    {
        $this->plane[$plane->name] = $plane;
        $this->plane[$plane->name]->planeLanding($this);
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
        $this->plane[$name]->name = $newName;
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