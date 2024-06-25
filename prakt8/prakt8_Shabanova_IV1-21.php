<pre>Практическая работа 8, Шабанова В. ИВ1-21
<p>Задача 1</p>
<?php
require "autoload.php";

//var_dump($_POST);
//var_dump($_FILES);

//сделать так, чтобы на экран перед удалением файла выводилось его название,
//чтобы удаление было без вызова метода отдельно
$exe = new Form();
echo $exe->saveFile();
//$exe->deleteFile();
//var_dump($exe);
?>
