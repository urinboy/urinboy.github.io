<?php
    $narxi = $puli = $natija = 0;
    $narxi = (int)readline();
    $puli = explode(" ", (int)readline());
    $natija = $puli[0] + $puli[1] + $puli[2];
    if($narxi == $natija){
        echo "Yes";
    }else{
        echo "No";
    }