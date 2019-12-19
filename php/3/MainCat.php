<?php 
    include 'Cat.php';
    $c1 = new Cat();
    $c1->defineCat("Mew", "White");
    $c1->speak();

    $c1->weight = 10;
    $c1->height = 10;
    $c1->upHeight(10);
    $c1->speak();

    $c1->upHeight("10.5");
    $c1->speak();
    echo "10"-10;
    echo "10"-"50";
    echo false;
    
?>
