<?php
    include 'Player.php';
    $p1 = new Player();
    $p1->setName("Jame");
    $p1->setTeam("Gate Or");

    $p2 = new Player();
    $p2->setName("May");
    $p2->setTeam("Gate And");
    //echo $p1->isSameTeam($p2)?"true":"false";
    echo ($p1->isSameTeam($p2))?"{$p1->getName()} is a same team with {$p2->getName()}":"{$p1->getName()} is not a same team with {$p2->getName()}";
