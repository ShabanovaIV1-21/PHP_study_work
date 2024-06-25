<?php

class Snake2
{
    public $line; //The field as an array
    public $file;
    public $height; //The amount of the rows in the field
    public $width; //The width of the field
    public $moving = true; //The ability to move forward


    public function __construct($file) //It reads given field from the file
    {
        $this->file = $file;
        $this->line = file($file); 
        $this->height = count($this->line);
        $this->width = substr_count($this->line[0], "-");
    }

    public function generate() //It generates the snake's next move
    {
        $array_width = range(1, $this->width); //
        $array_height = range(1, $this->height);
        $width = $array_width[array_rand($array_width)]; //The amount of steps 
        $height = $array_height[array_rand($array_height)];
        $array_direction = range(1, 4); //1 - вверх, 2 - вниз, 3 - вправо, 4 - влево, 1 - up, 2 - down, 3 - right, 4 - left
        $direction = $array_direction[array_rand($array_direction)];
        return [$width, $height, $direction];
    }

    public function position($h, $l) //It puts the snake in its starter position
    {
        $this->line[$h - 1] = substr_replace($this->line[$h - 1], ">", $l, 1);
        file_put_contents("output2.txt", $this->line);
    }

    public function check($h, $l, $d, $key, $s) //It checks if snake can move forward
    //$h - starter position on row, 
    //$l - starter position on '-'
    //$d - direction
    //$key - expected position on row
    //$s - expected position on '-'
    {
        switch ($d) {
            case 1:
                if (($h === 1) || (substr($this->line[$key], $l, 1) != "-") ||
                     ($key === -1)) {
                    $this->moving = false;
                }
                break;
            case 2:
                if (($h === $this->height) || (substr($this->line[$key], $l, 1)
                     != "-") || ($key === $this->height)) {
                    $this->moving = false;
                }
                break;
            case 3:
                if (substr($this->line[$h - 1], $s, 1) != "-") {
                    $this->moving = false;
                }
                break;
            case 4:
                if (substr($this->line[$h - 1], $s, 1) != "-") {
                    $this->moving = false;
                }
                break;
        }
    }

    public function move()
    {
        list($l1, $h1, ) = $this->generate();  //coordinates of the starter position
        $this->position($h1, $l1); //The amount of rows and '-'
        while ($this->moving) {
            list($l, $h, $d) = $this->generate();
            switch ($d) {
                case 1:
                    $this->line[$h1 - 1] = str_replace(["<", ">", "v", "^"], "^", 
                    $this->line[$h1 - 1]); //change direction of the snake's head
                    for ($i = 1, $b = 0; $i <= $h; $i++, $b++) {
                        $key = $h1 - 1 - $i; //the expected snake's potition
                        $this->check($h1, $l1, $d, $key, $s);
                        if ($this->moving) { //one snake's step
                            $this->line[$h1 - 1 - $b] = substr_replace
                             ($this->line[$h1 - 1 - $b], "*", $l1, 1);
                            $this->line[$key] = substr_replace
                             ($this->line[$h1 - 1 - $i], "^", $l1, 1);
                        } else {
                            break;
                        }
                    }
                    $h1 -= $b; //It changes snake's starter position
                    break;
                case 2:
                    $this->line[$h1 - 1] = str_replace(["<", ">", "v", "^"], "v",
                    $this->line[$h1 - 1]); //change direction of the snake's head
                    for ($i = 1, $b = 0; $i <= $h; $i++, $b++) {
                        $key = $h1 - 1 + $i; //the expected snake's potition
                        $this->check($h1, $l1, $d, $key, $s);
                        if ($this->moving) { //one snake's step 
                            $this->line[$h1 - 1 + $b] = substr_replace
                             ($this->line[$h1 - 1 + $b], "*", $l1, 1);
                            $this->line[$key] = substr_replace
                             ($this->line[$h1 - 1 + $i], "v", $l1, 1);
                        } else {
                            break;
                        }
                    }
                    $h1 += $b; //It changes snake's starter position
                    break;
                case 3:
                    $this->line[$h1 - 1] = str_replace(["<", ">", "v", "^"], ">",
                    $this->line[$h1 - 1]); //change direction of the snake's head
                    for ($i = 1, $b = 0; $i <= $l; $i++, $b++) {
                        $s = $l1 + $i; //the expected snake's potition
                        $this->check($h1, $l1, $d, $key, $s);
                        if ($this->moving) { //one snake's step
                            $this->line[$h1 - 1] = substr_replace
                             ($this->line[$h1 - 1], "*", $l1 + $b, 1);
                            $this->line[$h1 - 1] = substr_replace
                             ($this->line[$h1 - 1], ">", $s, 1);
                        } else {
                            break;
                        }
                    }
                    $l1 = strpos($this->line[$h1 - 1], ">"); //It changes snake's starter position
                    break;
                case 4:
                    $this->line[$h1 - 1] = str_replace(["<", ">", "v", "^"], "<",
                    $this->line[$h1 - 1]); //change direction of the snake's head
                    for ($i = 1, $b = 0; $i <= $l; $i++, $b++)    {
                        $s = $l1 - $i; //the expected snake's potition
                        $this->check($h1, $l1, $d, $key, $s);
                        if ($this->moving) { //one snake's step
                            $this->line[$h1 - 1] = substr_replace
                             ($this->line[$h1 - 1], "*", $l1 - $b, 1);
                            $this->line[$h1 - 1] = substr_replace
                             ($this->line[$h1 - 1], "<", $s, 1);
                        } else {
                            break;
                        }
                    }
                    $l1 = strpos($this->line[$h1 - 1], "<"); //It changes snake's starter position
                    break;
            }
            file_put_contents("output2.txt", "\n\n", FILE_APPEND);
            file_put_contents("output2.txt", $this->line, FILE_APPEND);
            //Each snake's move is written in the output2.txt file
        }
    }
}
