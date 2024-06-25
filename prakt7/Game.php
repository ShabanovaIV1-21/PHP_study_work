<?php
//require "Army.php";
class Game
{
    public $armies = []; //Playing armies
    public $attack = true; //Ability to continue the game
    public $fileName; //Name of the file where the game logs are written


    public function __construct(array $armies, string $file)
    {
        $this->fileName = $file; 
        $this->armies = $armies;

    }

    public function file_log(string $text, $tab = true, $t = false) //It writes game logs into the file
    {
        if ($t) {
            file_put_contents($this->fileName, "$text\n");
        } elseif ($tab) {
            file_put_contents($this->fileName, "$text\n", FILE_APPEND);
        } else {
            file_put_contents($this->fileName, "\n$text\n", FILE_APPEND);
        }
    }

    public function generateArmies() //It generates an attacking and attacked army
    {
        $q1 = rand(0, count($this->armies)-1);
        do {
            $q2 = rand(0, count($this->armies)-1);
        } while ($q1 == $q2);

        return [$q1, $q2]; //q1 - атакующая, q1 - attacking army
    }

    public function generateUnits(array $a) //It generates a number for the unit which will play
    {
        do {
            $k = rand(0, count($a) - 1);
        } while ($a[$k]->status == "destroy"); //Destroyed unit can't play anymore

        return $k;
    }

    public function check(object $a) //It checks if all units of the army have been destroyed and the round has ended
    {
        $c = 0;
        foreach ($a->army as $val) {
            if ($val->status == "active") {
                $c++;
            }

            if (empty($c)) {
                $this->attack = false;
            } else {
                $this->attack = true;
            }
        }

        if (!$this->attack) {
            $a->status = "destroy";
        }
    }

    public function hit(int $k1, int $k2, int $kk1, int $kk2) //The unit from one army attacks the unit from the another one
    //$k1 - number of unit from the one army
    //$k2 - number of unit from the another army
    //$kk1 - number of the one army
    //$kk2 - number of the another army

    {
        $b1 = $this->armies[$kk1];
        $b2 = $this->armies[$kk2];
        $b2->army[$k2]->life = $b2->army[$k2]->life - $b1->army[$k1]->damageLevel;
        $l = $b2->army[$k2]->life;
        $this->file_log("Юнит № $k1 из армии № $kk1 поразил юнита № $k2 из армии № $kk2
        Жизнь юнита № $k2 равна $l", false); //Unit №... from army №... attacked the unit №... from army №... Life of the unit №... is ...
        if ($b2->army[$k2]->life < 1) {
            $b2->army[$k2]->status = "destroy"; //If the unit's life is lower than 1, he is destroyed and can't attack anymore
        }
    }

    public function rounds() //One round of the game. It ends when all units in one of the armies are destroyed
    {
        while ($this->attack) {
            list($q1, $q2) = $this->generateArmies();
            $k1 = $this->generateUnits($this->armies[$q1]->army);
            $k2 = $this->generateUnits($this->armies[$q2]->army);
            $this->hit($k1, $k2, $q1, $q2);
            $this->check($this->armies[$q2]);
            if ($this->attack) {
                do {
                list($x1, $x2) = $this->generateArmies();
                } while ($q1 != $x2);
                $k1 = $this->generateUnits($this->armies[$x1]->army);
                $k2 = $this->generateUnits($this->armies[$x2]->army);
                $this->hit($k1, $k2, $x1, $x2);
                $this->check($this->armies[$x2]);
            }
        }
    }

    public function endRound(int $m) //It displays the result of the round for the army
    {
        $d = $this->armies[$m];
        if ($d->status == "active") {
            $this->file_log("Солдаты армии $m", false); //Soldiers of the army №...
            foreach ($d->army as $key => $val) {
                if ($val->status == "active") {
                    $this->file_log("Юнит № $key выжил с запасом жизни $val->life"); //Unit №... is alive and his life is ...
                } else {
                    $this->file_log("Юнит № $key мертв"); //The unit №... is dead
                }
            }
        } else {
            $this->file_log("Армия $m уничтожена", false); //The army №... is destroyed
        }
    }

    public function game()
    {
        $this->file_log("Начало игры", false, true); //Game has started
        for ($i = 1; $i <= 3; $i++) {
            $this->file_log("Раунд $i", false); //Round 
            $this->rounds();
            for ($h = 0; $h <= count($this->armies) -1; $h++) {//After every round units recover
                $this->endRound($h);
            
                foreach ($this->armies[$h]->army as $val) {
                    $val->life = 100;
                    $val->status = "active";
                }
                
                $this->armies[$h]->status = "active";
            }
            
            $this->attack = true;
        }

        return file_get_contents($this->fileName);
    }
}
