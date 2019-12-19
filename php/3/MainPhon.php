<?php
    include "Phone.php";
    $p1 = new Phone();
    $p1->turnOn();
    $p1->call("jame");
    $p1->turnOff();
?>