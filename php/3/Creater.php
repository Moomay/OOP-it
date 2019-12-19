<?php
    class Creater{
        public $name;
        public $hp;
        public $atk;
        public $lv;
        public function showDetail(){
            echo "name : {$this->name} <br>";
            echo "HP : {$this->hp} <br>";
            echo "ATK : {$this->atk} <br>";
            echo "LV : {$this->lv} <br>";
        }
        public function attack(Creater $m){
            $n = $m->hp;
            ($n-$this->atk >= 0) ? $m->hp -= $this->atk : $m->hp = 0;
        }

    }