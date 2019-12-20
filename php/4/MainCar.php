<?php 
    include "Vehicle.php";
    include "Car.php";
    $c1 = new Car();
    $c1->setCarInfo(500, "High", "Diesel");
    $c1->showCarInfo();