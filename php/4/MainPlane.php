<?php 
    include "Vehicle.php";
    include "Plane.php";
    $p1 = new Plane();
    $p1->setPlaneInfo(500, "High");
    $p1->showPlaneInfo();
?>