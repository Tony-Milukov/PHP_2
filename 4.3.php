<?php

    $box = [
        [
            0 => 'Тетрадь',
            1 => 'Книга',
            2 => 'Настольная игра',
            3 => [
                'Настольная игра',
                'Настольная игра',
            ],
            4 => [
                [
                    'Ноутбук',
                    'Зарядное устройство'
                ],
                [
                    'Компьютерная мышь',
                    'Набор проводов',
                    [
                        'Фотография',
                        'Картина'
                    ]
                ],
                [
                    'Инструкция',
                    [
                        'Ключ'
                    ]
                ]
            ]
        ],
        [
            0 => 'Пакет кошачьего корма',
            1 => [
                'Музыкальный плеер',
                1
            ]
        ]
    ];

    function findElement(array $array, $searched)
    {
        foreach ($array as $item) {
            if (is_array($item)) {
               if ( findElement($item, $searched) ) {
                   return true;
               };

            } if ($item == $searched) {
                return true;
            }
        }
    }

       var_dump(findElement($box,  'Музыкальный плеер'));