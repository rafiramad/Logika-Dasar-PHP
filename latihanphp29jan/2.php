<?php

function formatNumber($number) {

    if ($number >= 1000000) {
        $formatnumber = ($number / 1000000) . ' M';
    } elseif ($number >= 1000) {
        $formatnumber =  ($number / 1000) . ' K';
    } else {
        $formatnumber = $number;
    }

    echo $formatnumber;
    echo "</br>";
}

formatNumber(9000);
echo "</br>";
formatNumber(1700000);