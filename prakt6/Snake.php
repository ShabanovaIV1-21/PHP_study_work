<?php

class Snake
{
    public $line;
    public $file;


    public function __construct($file)
    {
        $this->file = $file;
        $this->line = file_get_contents($file);  //It reads given line from the file
    }

    public function eat() //The snake eats '-', but it stops when it gets to the end of the line or uneatable symbol
    //Each snake's move is written in the output.txt file
    {
        if (substr($this->line, 0, 1) == "|") {
            $b = substr_replace($this->line, ">", 1, 0);
        } else {
            $b = substr_replace($this->line, ">", 0, 0);
        }
        file_put_contents("output.txt", $b . "\n");
        $i = 0;
        while ($i < strlen($this->line)) {
            if (substr($b, strpos($b, ">") + 1, 1) == "-") {
                $b = substr_replace($b, ">", strpos($b, ">") + 1, 1);
                $b = substr_replace($b, "*", strpos($b, ">"), 1);
                file_put_contents("output.txt", $b . "\n", FILE_APPEND);
            }
            $i++;
        }
    }
}
