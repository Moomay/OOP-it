<?php 
    class Player {
        private $name; //string
        private $team;
        public function setName(string $n){
            $this->name = $n;
        }   
        public function getName(){
            return $this->name;
        }
        public function setTeam(string $t){
            $this->team = $t;
        }
        public function getTeam(){
            return $this->team;
        }
        public function isSameTeam(Player $p){
            return ($p->getTeam() == $this->getTeam());
        }

    }