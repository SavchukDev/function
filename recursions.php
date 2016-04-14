<?php

// Рекурсия
function recursion_func($v) {
    if ($v == 0) {
        return null;
    }
    echo $v;
    $v--; // $v = $v - 1;
    recursion_func($v);
}
// recursion_func(3);

// Рекурсия, with return
function recursion_func_with_return(&$v) {
    if ($v == 0) {
        return null;
    }
    $v--; // $v = $v - 1;
    recursion_func_with_return($v);
}
$var = 3;
recursion_func_with_return($var);
// echo $var;


// Рекурсивный обход массива
function array_rec($data) {
    foreach ($data as $k => $v) {
        if (is_array($v)) {
            array_rec($v);
        } else {
            echo 'Key: '.$k.'; Value: '.$v."\n";
        }
    }
}
$array = [
    'a' => 1,
    'b' => [
        'c' => [5, 6, 7],
        'd' => 8,
        'e' => [9, 10, [11, 12]]
    ]
];
array_rec($array);

// Рекурсивный обход массива. Более сложный вариант
function array_rec_2(&$data) {
    foreach ($data as $k => &$v) {
        if (is_array($v)) {
            array_rec_2($v);
        } else {
            if ($k == 'e') {
                $v = 15;
            }
            echo 'Key: '.$k.'; Value: '.$v."\n";
        }
    }
}
$array = [
    'a' => 1,
    'b' => [
        'c' => [5, 6, 7],
        'd' => 8,
        'e' => [9, 10, [11, 12]]
    ]
];
array_rec_2($array);
print_r($array);







