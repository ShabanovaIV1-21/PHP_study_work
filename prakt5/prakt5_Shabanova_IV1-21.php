<pre>Практическая работа 5, Шабанова В. ИВ1-21
<p>Задача 1</p>
<?php
require "autoload.php";

$Sparkle = new Unicorn();
echo $Sparkle->learning() . "<br>";
$Sparkle->tired();
echo $Sparkle->sleep();
echo $Sparkle->transformation("алекорн");
echo $Sparkle->learning() . "<br>";
$Sparkle->tired();
echo $Sparkle->sleep();
echo $Sparkle->transformation("алекорн");
echo $Sparkle->learning() . "<br>";
$Sparkle->tired();
echo $Sparkle->sleep();
echo $Sparkle->transformation("алекорн");
echo $Sparkle->eat("пончики");
echo $Sparkle->eat("пончики");
$Sparkle->hungry();
echo $Sparkle->eat("пончики");
echo $Sparkle->sleep();
echo $Sparkle->condition();

$Sparkle->energy = 100;
var_dump($Sparkle);
echo $Sparkle->growth();
echo $Sparkle->run();
echo $Sparkle->fly();
?>
