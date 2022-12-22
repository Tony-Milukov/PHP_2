<?php
        $arr1 = [5,3,5,9,7,6,8,1,6,2];
        $arr2 = [2,8,7,1,3,5,2,5,4,9];

        foreach ($arr1 as $index => $item) {
            print_r($index . "index" . PHP_EOL . $item . "item");
                print_r($arr1[$index] * $arr2[$index] . PHP_EOL);
        }