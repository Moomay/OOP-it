<?php 
    include 'Student.php';
    $s1 = new Student();
    $s1->MidtermScore = 40;
    $s1->FinalScore = 35;
    $s1->showGrade();
?>