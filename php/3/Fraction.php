<?php 
    class Fraction {
        public $topN;
        public $btmN;
        public function toFraction(){
            return "{$this->topN}/{$this->btmN}<br>";
        }
        public function toFloat(){
            return $this->topN/$this->btmN."<br>";
        }
        public function addFraction(Fraction $f){
            $this->topN = $f->btmN*$this->topN + $this->btmN*$f->topN;
            $this->btmN *= $f->btmN;
        }
        public function myEquals(Fraction $f){
            return ($f->topN*$this->btmN == $f->btmN*$this->topN)?"true":"false";
        }
        public function LowestTermFrac(){
            if ($this->topN > $this->btmN){
                $maxV = $this->topN;
                $minV = $this->btmN;
            }else {
                $maxV = $this->btmN;
                $minV = $this->topN;
            }
            do{
                $temp = $minV;
                $minV = $maxV%$minV;
                $maxV = $temp;
            } while ($minV != 0);
            $this->topN /= $maxV;
            $this->btmN /= $maxV;
        } 
    }