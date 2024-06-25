<pre>Практическая работа 6, Шабанова В. ИВ1-21
<p>Задача 1</p>
<?php
require "autoload.php";

$snake = new Snake("field.txt");
$snake->eat();
?>

<p>Задача 2</p>
<?php
$snake2 = new Snake2("field2.txt");
$snake2->move();
?>
