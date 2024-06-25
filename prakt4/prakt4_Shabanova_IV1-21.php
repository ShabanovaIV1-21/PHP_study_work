<pre>Практическая работа 4, Шабанова В. ИВ1-21
<p>Задача 1</p>
<?php
/* Используя рекурсию, реализовать функцию вычисления факториала числа.
0! = 1 5! = 4!*5 = 1*2*3*4*5*/
//Create a function that calculates factorial from the number ($a)
function factorial($a) {
    if ($a < 0) {
        return "Факториал не ищется для отрицательных чисел";
    } elseif ($a === 0) {
        return 1;
    } else {
        return $a * factorial($a - 1);
    }
}

$a = -5;
echo $a . "! = " . factorial($a) . "<br>";
?>
<p>Задача 2</p>
<?php
/*Дан массив, который может иметь неограниченную вложенность.  Требуется
реализовать рекурсивную функцию, которая, на основе данного массива формировала
список. Для формирования списка используются теги «<ul></ul><li></li>»*/
//Given an array that can have unlimited nesting. Create a function that makes a list from array elements using HTML tags «<ul></ul><li></li>»
$arr = [
    'id' => 1,
    'name' => 'item1',
    'items' => [
        [
            'id' => 2,
            'name' => 'item2',
            'items' => [
                [],
                [],
                [],
                null,
                []
            ],
        ],
        [
            'id' => 3,
            'name' => 'item3',
            'items' => [],
        ],
        [
            'id' => 4,
            'name' => 'item4',
            'items' => [
                [
                    'id' => 5,
                    'name' => 'item5',
                    'items' => [],
                ],
                [
                    'id' => 6,
                    'name' => 'item6',
                    'items' => [],
                ],
            ],
        ],
    ]
];

function list($arr, $a = "") {
    $a .= "\n<ul>\n";
    foreach ($arr as $key => $val) {
        if (is_array($val)) {
            if (empty($val)) {
                $a .= "<li>" . $key . " => [пустой массив] </li>\n";
            } else {
                $a .= "<li>" . $key . " => " . spicok($val) . " </li>\n";
            }
        } elseif (is_null($val)) {
            $a .= "<li> пустой элемент</li>\n";
        } else {
            $a .= "<li>$key => $val</li>\n";
        }
    }
    $a .= "</ul>\n";
    return $a;
}

echo list($arr);
//var_dump($arr);
?>
