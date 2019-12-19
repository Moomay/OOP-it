<?php 
    //Make a cat
    class Cat{
        private $name;
        private $color;
        public $height;
        public  $weight;
        private function setWeight($w){
            $this->weight = $w;
        } 
        private function setHeight($h){
            $this->height = $h;
        }
        private function setName($n){
            $this->name = $n;
        }
        private function setColor($c){
            $this->color = $c; 
        }
        public function upHeight($w){
            if($w > 0){
                $this->weight += $w;
            }else{
                echo "error<br>";
            }
        }
        public function downWeight($w){
            if($w > 0){
                $this->weight -= $w;
            }
            else 
                echo "error<br>";
        }
        public function defineCat($n,$c){
            $this->setName($n);
            $this->setColor($c);
        }
        public function speak(){
            echo "Name :".$this->name.'<br>';
            echo "Color :".$this->color.'<br>';
            echo "Height :".$this->height.'<br>';
            echo "Weight :".$this->weight.'<br>';
        }
    }
?>