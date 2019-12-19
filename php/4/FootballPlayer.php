<?php 
    class FootballPlayer extends Player{
        private $playerNumber;
        private $position;
        public function setPlayerNumber (int $n){
            $this->playerNumber = $n;
        }
        public function setPosition(string $p){
            $this->position = $p;
        }
        public function getPlayerNumber(){
            return $this->playerNumber;
        }
        public function getPosition(){
            return $this->position;
        }
        public function isSamePosition(FootballPlayer $fp){
            return $this->position == $fp->getPosition() && $this->isSameTeam($fp);
        }

    }