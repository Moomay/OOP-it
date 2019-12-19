<?php
    class Student{
        public $name;
        public $MidtermScore;
        public $FinalScore;
        public function showGrade(){
            $score = $this->MidtermScore*0.4  + $this->FinalScore*0.4 +20;
            $grade = ($score >= 80)?"A":($score >= 70?"B":($score >=60?"C":($score>=50?"D":"F")));
            echo "Your grade is  {$grade}<br>";

        }

    }