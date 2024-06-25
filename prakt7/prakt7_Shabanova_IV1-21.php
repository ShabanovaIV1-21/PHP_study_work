<pre>Практическая работа 7, Шабанова В. ИВ1-21
<p>Задача 1</p>
<?php
require "autoload.php";
//Creation armies for the game
for ($i = 0; $i < 3; $i++) {
    $armies[$i] = new Army(3);
}

$game = new Game($armies, "game.txt");

echo $game->game();

?>
