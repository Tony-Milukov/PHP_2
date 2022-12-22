<?php

    $name = readline("Введите имя именниника: " );
    function generateWishes() {
        $wishes =  ["счастья","здоровья","друга","выиграть в лоттерею","терпения"];
        $epithets = ["бесконечного","крепкого","космического","безудержного"];
        $fullWish = "";
        for ($x=0; $x !== 3; $x++) {
            $fullWish = $fullWish ." ".  $epithets[array_rand($epithets)] . " " . $wishes[array_rand($wishes)] . ",";
        }
        return $fullWish;
    }


    echo("Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю " . generateWishes());