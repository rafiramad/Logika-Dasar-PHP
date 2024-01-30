<!-- tampilkan angka angka yang bisa dibagi 4 dan pada rentang 1 - 50 -->

<?php

for ($i = 1; $i < 50; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo $i. "</br>";
    }
}