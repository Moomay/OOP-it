<?php 
    include "Creater.php";
    include "Monster.php";
    include "Player.php";
    $m1 = new Monster();
    $m2 = new Monster();
    $p1 = new Player();
    $p1->name = "Jame";
    $p1->hp = 1000;
    $p1->atk = 20;
    $p1->lv = 5;
    
    $m1->name = "poo1";
    $m1->hp = 100;
    $m1->atk = 10;
    $m1->lv = 3;
    
    
    $m2->name = "poo2";
    $m2->hp = 120;
    $m2->atk = 12;
    $m2->lv = 5;

    $p1->attack($m1);
    $p1->attack($m2);
    $m1->showDetail();
    $m2->showDetail();
?>