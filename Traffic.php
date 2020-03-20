<?php

class Traffic 
{
    public $directions = [];
    public $roads = [];
    public $coordinates = [];

    public function __construct(array $roads, array $directions)
    {
        $this->directions = $directions;
        $this->roads = $roads;
    }

    public function setCoordinates(): void
    {
        foreach($this->roads as $road) {
            foreach($this->directions as $direction) { 
                $this->coordinates[] = $road . ':' . $direction->name; 
            }
        }
    }

    public function startMove()
    {
        $count = 0;
        while (true) {
            foreach($this->coordinates as $coordinate) {
                $explode = explode(':', $coordinate);
                $msg = date("F j, Y, g:i a") . PHP_EOL . 'Маршут: ' . $explode[0] . ' на ' . $explode[1] . ' открыт.' . "\n";
                Logger::get()->save($msg);
                foreach($this->directions as $key=>$direction) { 
                    if($explode[0] == $direction->name && count($direction->cars) > 0) {
                        $car = reset($direction->cars);
                        $firstKey = array_key_first($direction->cars);
                        if($car->course['to'] == $explode[1]) {
                            $msg = date("F j, Y, g:i a") . PHP_EOL . 'я стою на ' . $direction->name . ', мой маршут ' . $car->course['to'] . ', я еду.' . "\n";
                            Logger::get()->save($msg);
                            unset($this->directions[$key]->cars[$firstKey]);
                        } else {
                            $msg = date("F j, Y, g:i a") . PHP_EOL .  'я стою на ' . $direction->name . ', мой маршут ' . $car->course['to'] . "\n"; // нет
                            Logger::get()->save($msg);
                        }
                        $count++;
                    }
                }
                $explode = [];
            }
            if(count($this->directions[0]->cars) < 1 && count($this->directions[1]->cars) < 1 && count($this->directions[2]->cars) < 1 && count($this->directions[3]->cars) < 1 ) {
                $msg = 'Количество итерации: ' . $count . "\n";
                Logger::get()->save($msg);
                return false;
            }
        }
    }

}