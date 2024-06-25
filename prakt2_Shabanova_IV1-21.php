<pre>Практическая работа 2, Шабанова В. ИВ1-21 
<p>Задача 1</p> 
<?php
//Вывести последний элемент массива
//Display the last array element
$arr = [1 => 1, 2, 3, 5 => 4, 4 => 5];
echo $arr[count($arr) - 1];
?>

<p>Задача 2</p> 
<?php
/*Проверить, что в массиве с числами есть элемент
со значением 3*/
//Check if this array has an element with a value of 3
$arr = [1, 2, 3, 4, 5];
echo (in_array(3, $arr)) ? "элемент есть" : "нет";
?>

<p>Задача 3</p> 
<?php
//Найти сумму элементов массива
//Find the sum of the array elements
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
?>

<p>Задача 4</p> 
<?php
//Найти среднее арифметическое элементов массива
//Find the arithmetical mean of the array elements
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr) / count($arr);
?>

<p>Задача 5</p> 
<?php
//Создать массив, заполненный числами от 1 до 100
//Create an array containing elements from 1 to 100
$mas = range(1, 100);
var_dump($mas);
?>

<p>Задача 6</p> 
<?php
//Создайте массив, заполненный буквами от 'a' до 'z'
//Create an array containing elements from 'a' to 'z'
$mas = range("a", "z");
var_dump($mas);
?>

<p>Задача 7</p> 
<?php
//Найдите сумму чисел от 1 до 100 не используя цикл.
//Find the sum of numbers from 1 to 100
echo array_sum(range(1, 100));
?>

<p>Задача 8</p> 
<?php
/*Даны два массива: [1, 2, 3], ['a', 'b', 'c']. Сделайте из них
массив с элементами [1, 2, 3, 'a', 'b', 'c']*/
//Make the array [1, 2, 3, 'a', 'b', 'c'] from two arrays [1, 2, 3], ['a', 'b', 'c']
var_dump(array_merge(range(1, 3), range("a", "c")));
?>

<p>Задача 9</p> 
<?php
//Из массива [1, 2, 3, 4, 5] сделать [2, 3, 4]
//Make the array  [2, 3, 4] from the [1, 2, 3, 4, 5]
$result = array_slice(range(1, 5), 1, 3);
var_dump($result);
?>

<p>Задача 10</p> 
<?php
//Массив [1, 2, 3, 4, 5] преобразовать в [1, 4, 5]
//Make the array  [1, 4, 5] from the [1, 2, 3, 4, 5]
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 2);
var_dump($arr);
?>

<p>Задача 11</p> 
<?php
/*Массив [1, 2, 3, 4, 5] преобразовать в
[1, 2, 3, a, b, c, 4, 5]*/
//Make the array [1, 2, 3, a, b, c, 4, 5] from the [1, 2, 3, 4, 5]
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, ["a", "b", "c"]);
var_dump($arr);
?>

<p>Задача 12</p> 
<?php
/*Дан массив [a=>1, b=>2, c=>3], записать в один
массив ключи, а в другой - значения этого массива*/
//From the array [a=>1, b=>2, c=>3] make one array with keys and another with values
$mas = ["a" => 1, "b" => 2, "c" => 3];
$keys = array_keys($mas);
$values = array_values($mas);
var_dump($keys, $values);
?>

<p>Задача 13</p> 
<?php
/*Даны массивы [a, b, c], [1, 2, 3]
создать массив [a=>1, b=>2, c=>3]*/
//Make the array [a=>1, b=>2, c=>3] from the arrays [a, b, c] and [1, 2, 3]
$mas = array_combine(range("a", "c"), range(1, 3));
var_dump($mas);
?>

<p>Задача 14</p> 
<?php
//Поменять местами ключи и значения в массиве 
//Change places of keys and values in the array 
$mas = ["a" => 1, "b" => 2, "c" => 3];
var_dump(array_flip($mas));
?>

<p>Задача 15</p> 
<?php
/*Дан массив [1, 2, 3, 4, 5], сделать из него
[5, 4, 3, 2, 1]*/
// Make the [5, 4, 3, 2, 1] from the [1, 2, 3, 4, 5]
$arr = [1, 2, 3, 4, 5];
var_dump(array_reverse($arr));
?>

<p>Задача 16</p> 
<?php
/*Дан массив ['a', '-', 'b', '-', 'c', '-', 'd'].
Найдите позицию первого элемента '-'.*/
//Find position of the first '-' in the array ['a', '-', 'b', '-', 'c', '-', 'd']
$mas = ["a", "-", "b", "-", "c", "-", "d"];
echo array_search("-", $mas);
?>

<p>Задача 17</p> 
<?php
/*Дан массив ['a', '-', 'b', '-', 'c', '-', 'd'].
Найдите позицию первого элемента '-' и удалите его*/
//Find position of the first '-' in the array ['a', '-', 'b', '-', 'c', '-', 'd'] and delete it
$mas = ["a", "-", "b", "-", "c", "-", "d"];
array_splice($mas, array_search("-", $mas), 1);
var_dump($mas);
?>

<p>Задача 18</p> 
<?php
/*Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте
элемент с ключом 0 на '!', а элемент с ключом
3 - на '!!'.*/
//In the array ['a', 'b', 'c', 'd', 'e'], change the value of the element with the key '0' to the '!' and the value of the element with the key '3' to the '!!'
$mas = range("a", "e");
$rep = [0 => "!", 3 => "!!"];
var_dump(array_replace($mas, $rep));
?>

<p>Задача 19</p> 
<?php
/*Дан массив '3'=>'a', '1'=>'c', '2'=>'e',
'4'=>'b'. Попробуйте на нем различные типы
сортировок*/
//Try different types of sortings on the array ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b']
$mas = [3 => "a", 1 => "c", 2 => "e", 4 => "b"];
arsort($mas); 
var_dump($mas);

asort($mas); 
var_dump($mas);

krsort($mas); 
var_dump($mas);

ksort($mas); 
var_dump($mas);

natcasesort($mas); 
var_dump($mas);

rsort($mas);
var_dump($mas);

sort($mas); 
var_dump($mas);

shuffle($mas); 
var_dump($mas);
?>

<p>Задача 20</p>
<?php
/*Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3.
Выведите на экран случайный ключ из данного массива.*/
//Display a random key from the array ['a'=>1, 'b'=>2, 'c'=>3]
$mas = ["a" => 1, "b" => 2, "c" => 3];
echo array_rand($mas, 1);
?>

<p>Задача 21</p>
<?php
/*Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3.
Выведите на экран случайный элемент из данного массива.*/
//Display a random element from the array ['a'=>1, 'b'=>2, 'c'=>3]
$mas = ["a" => 1, "b" => 2, "c" => 3];
echo $mas[array_rand($mas, 1)];
?>

<p>Задача 22</p>
<?php
/*Дан массив $arr. Перемешайте его элементы в
случайном порядке.*/
//Shuffle elements from the array $arr
$arr = [1, 2, 3, 4, 5];
shuffle($arr);
var_dump($arr);
?>

<p>Задача 23</p>
<?php
/* Заполните массив числами от 1 до 25, а затем
перемешайте его элементы в случайном порядке.*/
//Create an array containing elements from 1 to 25, and shuffle them
$mas = range(1, 25);
shuffle($mas);
var_dump($mas);
?>

<p>Задача 24</p>
<?php
/* Сделайте строку длиной 6 символов, состоящую
из маленьких английских букв, расположенных в
случайном порядке. Буквы не должны повторяться.*/
//Make a string with the six symbols containing lower English letters placed in random order. Letters can't repeat
$mas = range("a", "z");
shuffle($mas);
$mas = array_slice($mas, 1, 6);
foreach ($mas as $val) { 
    $v .= $val;
}
echo $v;
?>

<p>Задача 25</p>
<?php
/*Дан массив с элементами 'a', 'b', 'c', 'b', 'a'.
Удалите из него повторяющиеся элементы.*/
//Delete from the array ['a', 'b', 'c', 'b', 'a'] repeating elements
$mas = ["a", "b", "c", "b", "a"];
var_dump(array_unique($mas));
?>

<p>Задача 26</p>
<?php
/*Дан массив с элементами 1, 2, 3, 4, 5. Выведите
на экран его первый и последний элемент, причем
так, чтобы в исходном массиве они исчезли*/
//Display the first and last elements of the array [1, 2, 3, 4, 5], but remove them from one
$mas = range(1, 5);
echo array_shift($mas), " ", array_pop($mas);
?>

<p>Задача 27</p>
<?php
/*Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8.
Bыведите на экран его элементы в следующем 
порядке: 18273645*/
//Make the array [1, 8, 2, 7, 3, 6, 4, 5] from the array [1, 2, 3, 4, 5, 6, 7, 8]
$mas = range(1, 8);
while (!empty($mas)){
    echo array_shift($mas), array_pop($mas);
}
?>

<p>Задача 28</p>
<?php
/*Дан массив ['a', 'b', 'c']. Сделайте из него
массив с элементами 'a', 'b', 'c', '-', '-', '-'.*/
//Make the array ['a', 'b', 'c', '-', '-', '-'] from the array ['a', 'b', 'c']
$mas = range("a", "c");
var_dump(array_pad($mas, 6, "-"));
?>

<p>Задача 29</p>
<?php
/*Создайте массив, заполненный целыми числами от
1 до 20, разбейте этот массив на 5 подмассивов*/
//Create an array containing elements from 1 to 20, and divide it into 5 subarrays
$mas = range(1, 20);
$mas = array_chunk($mas, 4); 
var_dump($mas);
?>

<p>Задача 30</p>
<?php
/*Дан массив с элементами 'a', 'b', 'c', 'b', 'a'.
Подсчитайте сколько раз встречается каждая из букв.*/
//Count how many times each element appears in the array ['a', 'b', 'c', 'b', 'a'] 
$mas = ["a", "b", "c", "b", "a"];
var_dump(array_count_values($mas));
?>

<p>Задача 31</p>
<?php
/*Дан массив с элементами 1, 2, 3, 4, 5. Создайте
новый массив, в котором будут лежать квадратные
корни данных элементов*/
//The array [1, 2, 3, 4, 5] is given. Create a new one that contains the square roots of its elements
$mas = range(1, 5);
$mas2 = array_map(function($a) {
    return $a**2;
}, $mas);
var_dump($mas2);
?>

<p>Задача 32</p>
<?php
/*Дан массив с элементами '<b>php</b>',
'<i>html</i>'. Создайте новый массив, в котором
из элементов будут удалены теги*/
//The array ['<b>php</b>', '<i>html</i>'] is given. Create a new one that contains the same elements but without tags
$mas = ["<b>php</b>", "<i>html</i>"];
$mas2 = array_map(function($a) {
    return strip_tags($a);
}, $mas);
var_dump($mas2);
?>

<p>Задача 33</p>
<?php
/*Дан массив с элементами 1, 2, 3, 4, 5 и массив
с элементами 3, 4, 5, 6, 7. Запишите в новый
массив элементы, которые есть и в том, и в другом массиве.*/
//The arrays [1, 2, 3, 4, 5] and [3, 4, 5, 6, 7] are given. Create a new one that contains elements that repeat in both arrays
$mas = range(1, 5);
$mas1 = range (3, 7);
$mas2 = array_intersect($mas, $mas1);
var_dump($mas2);
?>

<p>Задача 34</p>
<?php
/*Дан массив с элементами 1, 2, 3, 4, 5 и массив
с элементами 3, 4, 5, 6, 7. Запишите в новый
массив элементы, которые не присутствуют в обоих массивах 
одновременно.*/
//The arrays [1, 2, 3, 4, 5] and [3, 4, 5, 6, 7] are given. Create a new one that contains elements that don't appear at the same time in both arrays
$mas = range(1, 5);
$mas1 = range (3, 7);
$mas2 = array_merge(array_diff($mas, $mas1), array_diff($mas1, $mas));
var_dump($mas2);
?>


