<?php
    include 'Fraction.php';
    $f1 = new Fraction();
    $f1->topN = 1050;
    $f1->btmN = 2500;

    $f2 = new Fraction();
    $f2->topN = 2100;
    $f2->btmN = 5000;
    
    $f1->LowestTermFrac();
    echo $f1->toFraction();
    echo $f1->toFloat();
    
    echo "ddd".$f1->myEquals($f2)."///";
    $f1->addFraction($f2);
    
    echo "After".$f1->toFraction();
    echo "After".$f1->toFloat();
    
