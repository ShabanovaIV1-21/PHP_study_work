Практическая работа, Шабанова В. ИВ1-21 
<p>Задача 1.1</p> 
<?php
//Дана строка "php", преобразовать в строку "PHP"
//Make "PHP" string from "php" string 
echo strtoupper("php");
?>

<p>Задача 1.2</p>  
<?php
//Дана строка "PHP", преобразовать в строку "php" 
//Make "php" string from "PHP" string 
echo strtolower("PHP");
?>

<p>Задача 1.3</p>  
<?php
//Дана строка "london", преобразовать в строку "London"
//Make "London" string from "london" string 
echo ucfirst("london");
?>

<p>Задача 1.4</p>  
<?php
//Дана строка "London", преобразовать в строку "london"
//Make "london" string from "London" string 
echo lcfirst("London");
?>

<p>Задача 1.5</p>  
<?php
/**Дана строка "london is the capital of great britain",
 *  преобразовать в строку "London Is The Capital Of Great Britain" */
//Make "London Is The Capital Of Great Britain" string from "london is the capital of great britain" string 
echo ucwords("london is the capital of great britain");
?>

<p>Задача 1.6</p>  
<?php
//Дана строка "LONDON", преобразовать в строку "London"
//Make "London" string from "LONDON" string 
echo ucfirst(strtolower("LONDON")); 
?>

<p>Задача 2.1</p>  
<?php
/**Eсли кол-во символов в пароле больше 5 и меньше 10,
 * то вывести, что пароль подходит, иначе сообщение,
 * что нужно придумать другой пароль  */
//If password length is more than 5 symbols and less than 10, then write "password is great"; otherwise, write "make another password"
$password="12345678";
//1)
echo ((strlen($password) > 5 && strlen($password) < 10) ? "пароль подходит" :
"придумайте другой пароль") . "<br>"; 
//2)
echo ((strlen($password) < 6) ? "минимум 5 символов" : ((strlen ($password) >9)
? "не больше 10 символов" : "пароль подходит")) . "<br>";
//3)
if (strlen($password) <= 5) {
    echo "минимум 5 символов";
} elseif (strlen ($password) >= 10) {
    echo "не больше 10 символов";
} else {
    echo "пароль подходит";
}
?>

<p>Задача 3.1</p>  
<?php
/**Дана строка "html css php", вырезать из нее и вывести на экран
 * слово "html", слово "css", слово "php"*/
//From string "html css php" cut word "html", word "css", word "php"
echo substr("html css php", 0, 4) . "<br>";
echo substr("html css php", 5, 3) . "<br>";
echo substr("html css php", 9, 3);
?>

<p>Задача 3.2</p>  
<?php
/** Дана строка,
 * вырежьте и выведите на экран последние 3 символа этой строки */
//Cut from string last three symbols
echo substr("BLABLABLA", -3, 3); 
?>

<p>Задача 3.3</p>  
<?php
/** Дана строка. Если она начинается на "http://", то выведите "да",
 * в противном случае "нет"*/
//If the string starts with "http://", then write 'yes'; otherwise, write "no"
echo (substr("/vjsifhttp://", 0, 7) == "http://") ? "ДА" : "НЕТ";
?>

<p>Задача 3.4</p>  
<?php
/** Дана строка. Если она начинается на "http://" или "https://"
 * , то выведите "да", в противном случае "нет"*/
//If the string starts with "http://" or "https://", then write 'yes'; otherwise, write "no"
$a = "cnjsdhhttp://bvf";
echo (substr($a, 0, 7) == "http://" || substr($a, 0, 8) == "https://") ?
"ДА" : "НЕТ";
?>

<p>Задача 3.5</p>  
<?php
/** Дана строка. Если она заканчивается на ".png", то выведите "да",
 * в противном случае "нет"*/
//If the string ends with ".png", then write 'yes'; otherwise, write "no"
echo (substr("fhhgh.pg", -4, 4) == ".png") ? "ДА" : "НЕТ";
?>

<p>Задача 3.6</p>  
<?php
/** Дана строка. Если она заканчивается на ".png" или ".jpg",
 * то выведите "да", в противном случае "нет"*/
//If the string starts with ".png" or ".jpg", then write 'yes'; otherwise, write "no"
$a = "dfjvhsurgf.jpg";
echo (substr($a, -4, 4) == ".png" || substr($a, -4, 4) == ".jpg") ? "ДА" : "НЕТ";
?>

<p>Задача 3.7</p>  
<?php
/** Дана строка. Если в этой строке более 5 символов,то вырежьте из нее
 * первые 5 символов, добавьте троеточие в конце и выведите на экран, 
 * в противном случае просто вывести эту строку на экран*/
//If the string has more than five symbols, then cut the first five symbols, add "..." to the end and display it; otherwise, just display the string 
$a = "kj";
//echo (strlen($a) > 5) ? substr($a, 0, 5) . "..." : $a;
if (strlen($a) > 5) {
    echo substr($a, 0, 5) . "...";
} 
echo $a;
?>

<p>Задача 4.1</p>  
<?php
//Дана строка "31.12.2022", замените все точки на дефисы
//Replace in the "31.12.2022" all dots with hyphen
echo str_replace(".", "-", "31.12.2022");
?>

<p>Задача 4.2</p>  
<?php
/** Дана строка "She looked again at the calendar",
 * замените все "a" на 1, "е" на 2, "n" на 3*/
//Replace in the "She looked again at the calendar" all "a" with 1, all "e" with 2, and all "n" with 3
echo str_replace(["a", "e", "n"], [1, 2, 3],
"She looked again at the calendar");
?>

<p>Задача 4.3</p>  
<?php
//Дана строка "1a2b3c4b5d6e7f8g9h0", удалите из нее все цифры
//Delete from the string "1a2b3c4b5d6e7f8g9h0" all numbers
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], "", "1a2b3c4b5d6e7f8g9h0");
?>

<p>Задача 5.1</p>  
<?php
/** Дана строка "She looked again at the calendar",
 * замените все "a" на 1, "е" на 2, "n" на 3*/
//Replace in the "She looked again at the calendar" all "a" with 1, all "e" with 2, and all "n" with 3
$a = "She looked again at the calendar";
echo strtr($a, ["a" => 1, "e" => 2, "n" => 3]);
echo strtr($a, "aen", 123);
?>

<p>Задача 6.1</p>
<?php
/*Дана строка "the password cannot be empty", вырежьте из нее
подстроку с 3-его символа (отсчет с нуля), 5 штук и вместо нее вставьте !!!*/
//Cut  the substring starting with the third symbol (5 symbols in length) from  "password cannot be empty" and replace it with "!!!"
echo substr_replace("the password cannot be empty", "!!!", 3, 5);
?>

<p>Задача 7.1</p>
<?php
/*Дана строка «abc abc abc». Определите позицию
первой буквы «b».*/
//Find the letter "b" position in the string «abc abc abc»
echo strpos("abc abc abc", "b");
?>

<p>Задача 7.2</p>
<?php
/*Дана строка «abc abc abc». Определите позицию
последней буквы «b».*/
//Find the last letter "b" position in the string «abc abc abc»
echo strrpos("abc abc abc", "b");
?>

<p>Задача 7.3</p>
<?php
/*Дана строка «abc abc abc». Определите позицию первой найденной
буквы "b", если начать поиск не с начала строки, а с позиции 3.*/
//The string «abc abc abc» is given. Find position of the first letter "b" if search starts from the third symbol position
echo strpos("abc abc abc", "b", 3);
?>

<p>Задача 7.4</p>
<?php
/* Дана строка «aaa aaa aaa aaa aaa». Определите позицию второго пробела.*/
//Find position of the second gap in the string «aaa aaa aaa aaa aaa»
$a = strpos("aaa aaa aaa aaa aaa", " ") + 1;
echo strpos("aaa aaa aaa aaa aaa", " ", $a);
?>

<p>Задача 7.5</p>
<?php
/* Проверьте, что в строке есть две точки подряд. Если это так - выведите
"есть", если не так - «нет»*/
//If the string contains "..", write "yes", otherwise "no"
$a = "..aaa aaa aaa aaa aaa";
$b = strpos($a, "..");
$b++;

echo ($b) ? "есть" : "нет";
/*if (strpos("aaa aaa aaa aaa.. aaa", "..")) {
    echo "есть";
} else {
    echo "нет";
}*/
?>

<p>Задача 7.6</p>
<?php
 /*Проверьте, что строка начинается на «http://». Если это так - выведите
«да', если не так - «нет».*/
//If the string starts with «http://», write "yes", otherwise "no"
echo (strpos("sdjihvsihfhttp://", "http://") === 0) ? "да" : "нет";
?>

<p>Задача 8.1</p>
<?php
//Дана строка. Очистите ее от концевых пробелов
//Strip gaps from the beginning and end of the string
echo trim(" fjvsjfg ");
?>

<p>Задача 8.2</p>
<?php
/*Дана строка «/php/». Сделайте из нее строку "php", удалив концевые слеши*/
//Make the "php" string from the "/php/" string
echo trim("/php/", "/");
?>

<p>Задача 8.3</p>
<?php
 /* Дана строка «слова слова слова.». В конце этой строки может быть
точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано
стояла точка. То есть: если этой точки нет - ее надо добавить, а если
есть - ничего не делать.*/
//Make the string end with one dot, no matter if it has one already
$a = "слова слова слова";
$a = rtrim($a, ".");
echo substr_replace($a, ".", strlen($a), 0);
?>

<p>Задача 9.1</p>
<?php
//Дана строка «12345». Сделайте из нее строку «54321»
//Make the «54321» string from the «12345» string
echo strrev("12345");
?>

<p>Задача 9.2</p>
<?php
/*Проверьте, является ли слово палиндромом (одинаково читается во всех
направлениях*/
//Check if this word is a palindrome
$a = "leve";
echo (strrev($a) == $a) ? "слово - палиндром" : "не палиндром";
?>

<p>Задача 10.1</p>
<?php
/*Дана строка «the password cannot be empty». Перемешайте символы
этой строки в случайном порядке*/
//Shuffle symbols from the string «the password cannot be empty»
echo str_shuffle("the password cannot be empty");
?>

<p>Задача 11.1</p>
<?php
//Дана строка «12345678». Сделайте из нее строку «12 345 678»
//Make the «12 345 678» string from the «12345678» string
echo number_format(12345678, 0, "", " ");
?>

<p>Задача 12.1</p>
<?php
//Дана строка «html, <b>php</b>, js». Удалите теги из этой строки.
//Delete tags from the string «html, <b>php</b>, js»
echo strip_tags("html, <b>php</b>, js");
?>

<p>Задача 12.2</p>
<?php
/*Дана строка"<div><span>the<a>password</a></span>cannot<b><i>be
</i></b><strong>empty</strong></div>".
Удалите все теги кроме <b> и <i>*/
//Delete tags from the string «html, <b>php</b>, js» except <b> and <i>
echo strip_tags("<div><span>the<a>password</a></span>cannot<b><i>be
</i></b><strong>empty</strong></div>", "<b><i>");
?>

<p>Задача 12.3</p>
<?php
/*Дана строка «html, <b>php</b>, js». Выведите её на экран "как есть", то есть браузер
не должен преобразовать <b> в жирный*/
//Display the string «html, <b>php</b>, js» like it is written; browser must not make the "php" bold 
echo htmlspecialchars("html, <b>php</b>, js");
?>

<p>Задача 13.1</p>
<?php
//Узнайте код символов "a", "b", "c", пробела
//Find the code of the given symbols
echo ord("a") . "<br>";
echo ord("b") . "<br>";
echo ord("c") . "<br>";
echo ord(" ") . "<br>";
?>

<p>Задача 13.2</p>
<?php
/*Изучите таблицу ASCII. Определите границы, в которых располагаются буквы
английского алфавита*/
//Find the boundaries within which the letters of the English alphabet are located in the ASCII-table
echo ord("A") . "<br>";
echo ord("Z") . "<br>";
echo ord("a") . "<br>";
echo ord("z") . "<br>";
?>

<p>Задача 13.3</p>
<?php
//Выведите на экран символ с кодом 33
//Display the symbol with the code 33
echo chr(33);
?>

<p>Задача 13.4</p>
<?php
//Запишите в $str случайный символ - большую букву латинского алфавита 
//Assign the $str variable by a random English capital letter
while (!($str >= 65 && $str <= 90)) {
    $str = substr(str_shuffle(123456789), 0, 2);
}
$str = chr($str);
echo $str;
?>

<p>Задача 13.6</p>
<?php
//Дана буква f. Узнать маленькая она или большая. Bывести букву и результат на
//экран
//Write if the letter is in capitals or not
$a = "F";
echo $a . "<br>";
$a = ord($a);
//1)
echo ($a >= 65 && $a <= 90) ? "большая буква" : "";
echo ($a >= 97 && $a <= 122) ? "маленькая буква" : "";

//2)
//echo ($a >= 65 && $a <= 90) ? "большая буква" : (($a >= 97 && $a <= 122) ?
//"маленькая буква" : "не буква");

//3)
/*if ($a >= 65 && $a <= 90) {
    echo "большая буква";
}
if ($a >= 97 && $a <= 122) {
    echo "маленькая буква";
}*/
?>

<p>Задача 14.1</p>
<?php
// дана строка "ab-cd-ef", вывести на экран строку "-cd-ef" 
//Display the substring "-cd-ef" from the "ab-cd-ef" 
echo strchr("ab-cd-ef", "-");
?>

<p>Задача 14.2</p>
<?php
// дана строка "ab-cd-ef", вывести на экран строку "-ef" 
//Display the substring "-ef" from the "ab-cd-ef" 
echo strrchr("ab-cd-ef", "-");
?>

<p>Задача 15.1</p>
<?php
// дана строка "ab--cd--ef", вывести на экран строку "--cd--ef" 
//Display the substring "--cd--ef" from the "ab--cd--ef"
echo strstr("ab--cd--ef", "-");
?>

<p>Дополнительная задача</p>
<?php
//Преобразовать строку "var_test_text" в "varTestText"
//Make "varTestText" string from "var_test_text" string 
$a = "var_test_text";
$a = str_replace("_", " ", $a);
$a = ucwords($a); 
$a = lcfirst($a);
echo str_replace(" ", "", $a);
?>