<?php

class Car
{
    public $mark;
    public $course;

    public function __construct(string $mark, string $from, string $to)
    {
        $this->mark = $mark;
        $this->course = [
            'from' => $from,
            'to' => $to
        ];
    }
}