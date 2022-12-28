<?php
    $arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

    function getInfoOfArray(array $arr): array {
        $max = max(...$arr);
        $min = min(...$arr);
        $avr = floor(array_sum($arr) / count($arr));
        return ["max" => $max,"min" => $min,"avr" => $avr];
    }

    foreach (getInfoOfArray($arr) as $key => $item) {
        echo "$key => $item" . "<br>";
    }