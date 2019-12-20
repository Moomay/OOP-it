<?php 
    class Car extends Vehicle{
        private $typeEngine;
        public function ShowTypeEngine(string $t){
            $this->typeEngine = $t;
        }
        public function GetTypeEngine(){
            return $this->typeEngine;
        }
        public function showCarInfo(){
            echo "Car engine is {$this->typeEngine}.<br>";
            $this->showInfo();
        }
        public function setCarInfo(int $s, string $t, string $y){
            //$this->fuel = $s;
            $this->setFuel($s);
            $this->setTopSpeed($t);
            $this->typeEngine = $y;
        }
        public function move(){
            $this->fuel -= 50;
            echo "Move.<br>";
        }


    }