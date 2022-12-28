<?php

    $menu = [
        "notebooks" => [
            "ASUS" => [
                "asus1",
                "asus2"
            ],
            "HP" => [
                "hp1",
                "hp2"
            ]
        ]
    ];

    function generateMenu($array) {
        $menuGenerated = "";
        foreach ($array as $key => $item) {
            if(is_array($item)) {
                $menuGenerated .= " <hr> <ul type='circle'><li>$key</li><ul/>";
                $menuGenerated .= generateMenu($item);
            } else {
                $menuGenerated .= " <ul><li>$item</li><ul/>";
            }
        }
        return $menuGenerated;
    }
  echo generateMenu($menu);
