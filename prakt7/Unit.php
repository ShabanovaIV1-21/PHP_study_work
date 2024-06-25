<?php
//This class describes one unit of an army
class Unit
{
    public $status = "active"; 
    public $damageLevel; //How much the unit can damage a unit from other army
    public $life = 100;


    public function __construct()
    {
        $this->damageLevel = rand(5, 40);
    }
}
