<?php
$array = [
    [
        'name' => 'Маша',
        'lastname' => 'Иванова',
        'sex' => 'Женский',
        'height' => 'Высокая',
    ],
    [
        'name' => 'Оля',
        'lastname' => 'Петрова',
        'sex' => 'Женский',
        'height' => 'Низкая',
    ],
    [
        'name' => 'Коля',
        'lastname' => 'Сидоров',
        'sex' => 'Мужской',
    ],
    [
        'name' => 'Петя',
        'lastname' => 'Сурков',
        'height' => 'Высокий',
    ],
];

/*
 * Удалить из массива все элементы с ключами sex и height
 *
 * Результат
 $array = [
    [
        'name' => 'Маша',
        'lastname' => 'Иванова',
    ],
    [
        'name' => 'Оля',
        'lastname' => 'Петрова',
    ],
    [
        'name' => 'Коля',
        'lastname' => 'Сидоров',
    ],
    [
        'name' => 'Петя',
        'lastname' => 'Сурков',
    ],
];
 */