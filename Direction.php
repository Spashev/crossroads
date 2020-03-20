<?php

class Direction
{
    public $name;
    public $cars = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setCars($car): void
    {
        $this->cars[] = $car;
    }
}