<?php

    function kmCalc($km)
    {
        static $total;
        $total += $km;

        echo "Percorreu mais $km do total de $total\n";
    }

    kmCalc(100);
    kmCalc(200);
    kmCalc(50);
?>