<?php

abstract class Plane
{
    private string $name;
    private float $maxSpeed;
    private string $status = 'В полёте';

    private Airport $airport;

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

    public function changeName(string $name)
    {
        $this->name = $name;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function getName()
    {
        return $this->name;
    }
}