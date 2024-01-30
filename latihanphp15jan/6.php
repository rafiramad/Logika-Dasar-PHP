<?php
$a = 9;


if ($a > 0) {
    echo "$a adalah bilangan bulat positif.";
} elseif ($a < 0) {
    echo "$a adalah bilangan bulat negatif.";
} else {
    echo "$a adalah bilangan cacah.";
}

echo "<br>";


if ($a % 3 == 0) {
    echo "$a adalah kelipatan 3.";
} else {
    echo "$a bukan kelipatan 3.";
}
?>