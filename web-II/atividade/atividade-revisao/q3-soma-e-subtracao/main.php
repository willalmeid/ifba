<?php

    $j = 0;
    $l = 1;

    for ($i = 60; $i >= 0; $i-=5) { 
        $j = $i;
        echo "l = " . $l . "\t";
        echo "J = " . $j . "\n";
        $l += 3; 
    }

?>