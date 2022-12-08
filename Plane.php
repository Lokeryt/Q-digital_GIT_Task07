<?php

abstract class Plane
{
    public string $name;
    public float $maxSpeed;
    public string $status = 'В полёте';

    public Airport $airport;

    public function __construct($name, $maxSpeed, Airport $airport = null)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;

        if ($airport) {
            $airport->takePlane($this);
            $this->planeLanding($airport);
        }
    }

    public function takeOff()
    {
        $this->status = 'В полёте';
        unset($this->airport);
    }

    public function planeLanding(Airport $airport)
    {
        $this->status = 'На земле';
        $this->airport = $airport;
    }

    public function changeStatus(string $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        echo $this->status;
    }
}