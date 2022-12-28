<?php
    $arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
    $arr = array_map(fn($i) => $i % 2 == 0 ? "четное " : "не четное ", $arr);
    foreach ($arr as $i) {
        echo $i . PHP_EOL . "<br>";
    }

