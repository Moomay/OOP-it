<?php 
    class Phone{
        private $brandName;
        private $hasFm;
        private $hasCamera;
        private $price;
        private $spac;
        public function call(string $n){
            echo "Calling to {$n}<br>";
        }
        public function turnOn(){
            echo "On<br>";
        }
        public function turnOff(){
           echo "Off<br>";
        }

    }
?>