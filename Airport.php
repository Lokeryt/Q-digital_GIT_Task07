<?php

class Airport
{
    private $plane;

    public function __construct($plane)
    {
        $this->plane = $plane;
    }

    public function takePlane()
    {
        $this->plane->planeLanding();
    }

    public function freeUpPlace()
    {
        $this->plane->takeOff();
    }

    public function planeToTheParking()
    {
        $this->plane->status = 'Ушёл на стоянку';
    }

    public function planeReadyToTakeOff()
    {
        $this->plane->status = 'Готов взлетать';
    }

    public function changePlaneName($name)
    {
        $this->plane->name = $name;
    }

    public function tryToAttack()
    {
        if (method_exists($this->plane, 'attack')) {
            $this->plane->attack();
        } else {
            echo 'Атака не возможна';
        }
    }
}