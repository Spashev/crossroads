<?php
date_default_timezone_set('Asia/Almaty');
require('Traffic.php');
require('Car.php');
require('Direction.php');
require('Logger.php');
$marks = ['Mers', 'Toyota', 'BMW', 'Audi', 'Porsche', 'Bugatti']; // марки
$road = ['A', 'B', 'C', 'D']; // направления
$directions = [];
for($i = 0; $i < count($road); $i++) {
    $directions[$i] = new Direction($road[$i]); // создаем обьект класса Direction
    $count_car = rand(6, 20);
    for($j = 0; $j < $count_car; $j++) {
        $cars[$road[$i]][$j] = new Car($marks[rand(0, count($marks) - 1)], $road[$i], $road[rand(0, count($road) - 1)]); 
            // создаем обьект класса Car
        $directions[$i]->setCars($cars[$road[$i]][$j]); // записываем машины к обьектам
    }
}
// print_r($cars);
// print_r($directions);
$trafic = new Traffic($road, $directions); // создаем обьект Traffic
$trafic->setCoordinates(); // записываем координаты
$trafic->startMove(); // начинаем движения машин
