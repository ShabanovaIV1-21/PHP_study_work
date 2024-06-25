<?php
//This class describes one army
class Army extends Unit
{
    public $army = []; //Units of the army


    public function __construct($b) //It creates army units in passed amount ($b)
    {
        for ($i = 0; $i < $b; $i++) {
            $this->army[] = new parent; 
        }
    }
}
