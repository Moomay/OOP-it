<?php 
    class Vehicle{
        private $fuel;
        private $topSpeed;
        protected function setFuel(int $i){
            $this->fuel = $i;
        }
        protected function setTopSpeed(string $n){
            $this->topSpeed = $n;
        }
        protected function getFuel(){
            return $this->fuel;
        }
        protected function getTopSpeed(){
            return $this->topSpeed;
        }
        public function showInfo(){
            echo "Fuel is {$this->fuel} litre and Top Speed is {$this->topSpeed} m/s.<br>";
        }
    }
?>