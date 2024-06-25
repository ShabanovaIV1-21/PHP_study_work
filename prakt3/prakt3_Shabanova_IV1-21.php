<pre>
<p>Задача 1</p>
<?php
/*Сделайте функцию, которая принимает строку на русском языке, а возвращает ее
транслит.*/
//Create the function for transliteration. Argument is a string in Russian. Function transforms it in English
function ex1($str) {
    $arr = [
        "A" => "A",  "Н" => "N",    "Ь" => "'",  "ж" => "zh", "у" => "u",                                                               
        "Б" => "B",  "О" => "O",    "Ы" => "Y",  "з" => "z",  "ф" => "f",     
        "В" => "V",  "П" => "P",    "Ъ" => "'",  "и" => "i",  "х" => "h",
        "Г" => "G",  "Р" => "R",    "Э" => "E",  "й" => "y",  "ц" => "ts", 
        "Д" => "D",  "С" => "S",    "Ю" => "Yu", "к" => "k",  "ч" => "ch",
        "Е" => "E",  "Т" => "T",    "Я" => "Ya", "л" => "l",  "ш" => "sh",
        "Ё" => "Yo", "У" => "U",    "а" => "a",  "м" => "m",  "щ" => "shch",
        "Ж" => "Zh", "Ф" => "F",    "б" => "b",  "н" => "n",  "ь" => "'",
        "З" => "Z",  "Х" => "H",    "в" => "v",  "о" => "o",  "ы" => "y",
        "И" => "I",  "Ц" => "Ts",   "г" => "g",  "п" => "p",  "ъ" => "'",
        "Й" => "Y",  "Ч" => "Ch",   "д" => "d",  "р" => "r",  "э" => "e",
        "К" => "K",  "Ш" => "Sh",   "е" => "e",  "с" => "s",  "ю" => "yu",
        "Л" => "L",  "Щ" => "Shch", "ё" => "yo", "т" => "t",  "я" => "ya",
        "М" => "M",         
    ];
    return strtr($str, $arr);
}

$str = "Яростной птицей жар вырвется из адского колта";
echo ex1($str);
?>
<p>Задача 2</p>
<?php
/*Сделайте функцию, которая возвращает множественное или единственное число
существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым
параметром принимает число, а следующие 3 параметра — форма для единственного
числа, для чисел два, три, четыре и для чисел, больших четырех, например,
func(3, 'яблоко', 'яблока', 'яблок').*/
//Create the function that returns singular or plural form of the noun. For instance, 1 apple, 2 (3, 4) apples, and 5 apples. 
//$numb - number of the noun
//$w1 - singular noun form
//$w2 - noun form for 2, 3, and 4 numbers
//$w3 - noun form for numbers greater than 5
function ex2($numb, $w1, $w2, $w3) {
    switch ($numb) {
        case 1:
            $a = $w1;
            break;
        case 2 || 3 || 4:
            $a = $w2;
            break;
        default:
            $a = $w3;
    }
    return $a;

}

$word = "яблокo";
$w1 = $word;
$w2 = substr_replace($word, "а", -1);
$w3 = substr_replace($word, "", -1);
echo ex2(3, $w1, $w2, $w3);
?>
<p>Задача 3</p>
<?php
/*Найдите все счастливые билеты. Счастливый билет - это билет, в котором сумма
первых трех цифр его номера равна сумме вторых трех цифр его номера.*/
//Create the function that finds lucky tickets. The ucky ticket has the sum of the three first elements equal the sum of the three last elements
function ex3($num) {
    while (strlen($num) < 6) {
        $num = substr_replace($num, "0", 0, 0);
    }
    $a = substr($num, 0, 3);
    $b = substr($num, 3, 3);
    for ($i = 0; $i < 4; $i++) {
        $sum1[] = substr($a, $i, 1);
        $sum2[] = substr($b, $i, 1);
    }

    if (array_sum($sum1) == array_sum($sum2)) {
        return  $num;
    } else {
        return false;
    }
}

for ($num = 1; $num < 3010; $num++) {
    if ($s = ex3($num)) {
        echo $s . "     билет счастливый<br>";
    }
}
?>
<p>Задача 4</p>
<?php
/*Дружественные числа - два различных числа, для которых сумма всех собственных
делителей первого числа равна второму числу и наоборот, сумма всех собственных
делителей второго числа равна первому числу.
Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000.
Для этого сделайте вспомогательную функцию, которая находит
все делители числа и возвращает их в виде массива. Также сделайте функцию,
которая параметром принимает массив, а возвращает его сумму*/
//Friendly numbers are two different numbers for which the sum of all proper divisors of the first number is equal to the second number.
//Find all pairs of friendly numbers in the range from 1 to 10000

//Finds all divisors ($del) for the number ($d) and returns them as an array
function divisors(&$del, $d) {
    for ($i = 1; $i < $d; $i++) {
        if ($d % $i == 0) {
            $del[] = $i;
        }
    }
    return $del;
}

//Finds the sum of the passed array ($del)
function sum($del) {
    $v = 0;
    foreach ($del as $val) {
        $v += $val;
    }
    return $v;
}

for ($d = 1; $d < 10001; $d++) {
    $del = [];
    delitel($del, $d);
    $v = sum($del);
    if ($d > $v) {
        continue;
    }
    $mas = [];
    delitel($mas, $v);
    sum($mas);
    if ($d == sum($mas) && $d != $v) {
        echo "$d    $v" . "<br>";
    }
}
?>
