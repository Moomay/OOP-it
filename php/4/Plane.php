<?php 
    class Plane extends Vehicle{
        public function showPlaneInfo(){
            echo "Plane detail is,";
            $this->showInfo();
        }
        public function fly(){
            echo "Fly<br>";
        }
        public function setPlaneInfo(int $n, string $t){
            $this->setFuel($n);
            $this->setTopSpeed($t);
        }
        
    }