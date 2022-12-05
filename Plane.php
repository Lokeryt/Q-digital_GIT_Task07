<?php

abstract class Plane
{
    public string $name;
    public float $maxSpeed;

    public string $status = 'На земле';

    public function __construct($name = null, $maxSpeed = null)
    {
        if ($name) {
            $this->name = $name;
        }

        if ($maxSpeed) {
            $this->maxSpeed = $maxSpeed;
        }
    }

    public function takeOff()
    {
        $this->status = 'В полёте';
    }

    public function planeLanding()
    {
        $this->status = 'На земле';
    }

    public function getStatus()
    {
        echo $this->status;
    }
}