<?php
echo "Лабораторная работа 1, Шабанова В. ИВ1-21<br>";
echo "Задача 1<br>";
/*Задача 1. Найти наименьший элемент в упорядоченном массиве А с помощью 
линейного, бинарного и индексно-последовательного поиска.*/
function massiv($elements, $empty) { /*кол-во элементов, которое должно быть и
    кол-во дырок*/
    $mas = range(1, $elements + $empty);
    $rand = array_rand($mas, $empty);
    for ($i = 0; $i <= $empty - 1; $i++) { /*обращение к ключу, который
        является элементом другого массива*/
        unset($mas[$rand[$i]]);
    }
    shuffle($mas);
    echo "исходный массив<br>";
    var_dump($mas);
    return $mas;
}

function lineSearch1($mas) {// массив, в котором осуществляется поиск
    $fkey = array_key_first($mas);
    $mval = $mas[$fkey];
    $min = [$fkey => $mval];
    foreach ($mas as $key => $val) {
        if ($val < $mval) {
            $mval = $val;
            $min = [$key => $val];
        }
    }
    //echo "искомое значение<br>";
    //var_dump($min);
    return $min; 
}

function binSearch($mas, $s) { //массив, в котором ищу, массив искомых значений
    sort($mas);
    foreach ($s as $val) {
        $low = 0;
        $high = count($mas) - 1;
        while ($low <= $high) {
            $mid = ($low + $high)/2;
            $mid = (int)$mid; 
            if ($val < $mas[$mid]) {
                $high = $mid - 1;
            } elseif ($val > $mas[$mid]) {
                $low = $mid + 1;
            } else {
                $res[] = $mid; 
                break;
            }
        }
    }
    return $res;
}

function table($mas, $n) {
    foreach ($mas as $key => $val) {        
        if ($key % $n == 0) {            
            $table[$key] = $val;
        }
    }
    //var_dump($table);
    return $table;
}

function search($table, $s, &$res, $b, $c = true) {/*перебираемый массив,
    искомое значение, полученный ключ, минимум, наличие проверки*/
    foreach ($table as $key => $val) { 
        if ($c) {
            if ($b > $key) {
                continue;
            }
        }
        
        if ($val == $s) {
            $res = $key;
            break;
        }
        
        if ($val < $s) {
            $min = $key;
        }
        
        if ($val > $s) {
            break;
        }
    }
    if (!empty($min)) {
        return $min;
    }  
}

function indexSearch($mas, $s, $n) { /*исходный массив, массив искомых значений,
    количество элементов в одном куске */
    sort($mas);
    //echo "индексный поиск, отсортированный массив"."<br>";\
     //var_dump($mas);
    //echo "первая таблица индексов"."<br>";
    $table = table($mas, $n);
    //echo "вторая таблица индексов"."<br>";
    $table2 = table($table, $n * $n);
    foreach ($s as $keyf => $valf) { // искомое значение
    //echo "ключ".$keyf."значение".$valf."<br>";
        $res = null;
        $min = search($table2, $valf, $res, 0, false);
        if (is_null($res)) {
            $min = search($table, $valf, $res, $min);
        }
        
        if (is_null($res)) {
            search($mas, $valf, $res, $min);
        }
        $result[] = $res;
        //var_dump($result);
    }
    return $result;
}

$mas = massiv(35, 5);
echo "<br>Линейный поиск<br>";
var_dump(lineSearch1($mas));
$s = lineSearch1($mas);
echo "<br>Бинарный поиск<br>";
var_dump(binSearch($mas, $s));
echo "<br>Индексно-последовательный поиск<br>";
var_dump(indexSearch($mas, $s, 5));

echo "<br>Задача 2<br>";
/*Задача 2. Найти элементы в упорядоченном массиве А, которые больше 30, с 
помощью линейного, бинарного и индексно-последовательного поиска.*/
function lineSearch2($mas) {
    //var_dump($mas);
    foreach ($mas as $key => $val) {
        if ($val > 30) {
            $result[$key] = $val;
        }
    }
    //echo "искомое значение<br>";
    //var_dump($result);
    return $result;
}

$mas = massiv(35, 5);
echo "<br>Линейный поиск<br>";
var_dump(lineSearch2($mas));
$s = lineSearch2($mas);
echo "<br>Бинарный поиск<br>";
var_dump(binSearch($mas, $s));
echo "<br>Индексно-последовательный поиск<br>";
var_dump(indexSearch($mas, $s, 5));

echo "<br>Задача 3<br>";
/*Задача 3. Вывести на экран все числа массива А кратные n (3,6,9,...) с помощью 
линейного, бинарного и индексно-последовательного поиска.*/
function lineSearch3($mas) {
    //var_dump($mas);
    foreach ($mas as $key => $val) {
        if ($val % 3 == 0) {
            $result[$key] = $val;
        }
    }
    return $result;
}

$mas = massiv(35, 5);
echo "<br>Линейный поиск<br>";
var_dump(lineSearch3($mas));
$s = lineSearch3($mas);
echo "<br>Бинарный поиск<br>";
var_dump(binSearch($mas, $s));
echo "<br>Индексно-последовательный поиск<br>";
var_dump(indexSearch($mas, $s, 5));
?>
