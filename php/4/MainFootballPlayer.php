<?php 
    include "Player.php";
    include "FootballPlayer.php";

    $p1 = new FootballPlayer();
    $p1->setName("Jame");
    $p1->setPlayerNumber(69);
    $p1->setPosition("Carry");

    $p2 = new FootballPlayer();
    $p2->setName("May");
    $p2->setPlayerNumber(50);
    $p2->setPosition("Feeder");

    echo "we are same position ";
    echo $p1->isSamePosition($p2)?"ture":"false";