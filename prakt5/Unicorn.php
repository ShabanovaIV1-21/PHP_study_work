<?php

class Unicorn
{
    public $skills = 0; //You can increase the amount of the skills by learning()
    public $rest = true; //единорожка отдохнула, the unicorn had a rest
    public $transform = false; //Gives the unicorn the ability to transform into another creature
    public $hunger = true; //единорожка хочет кушать, the unicorn wants to eat
    public $hight = 50;
    public $lessons = 0; //The amount of lessons
    public $energy = 0;


    public function run()
    {
        if ($this->energy > 0) {
            $this->energy -= 10;
            return "Единорожка бежит<br>"; //the unicorn is running
        } else {
            return  "Единорожка устала<br>"; //the unicorn has been tired
        }
    }

    public function fly()
    {
        if ($this->energy > 0) {
            $this->energy -= 10;
            return "Единорожка летит<br>"; //the unicorn is flying
        } else {
            return "Единорожка устала<br>"; //the unicorn has been tired
        }
    }

    public function learning() /*It makes the unicorn study if it has enough energy.
    Studying increases the amount of skills, and if it has enough skills, it can transform into something*/
    {
        if ($this->rest && $this->energy > 0) {
            $mas = range(1, 100);
            $per = array_rand($mas);
            $this->skills += $per;
            $this->energy -= 30;
            if ($this->skills > 100) {
                $this->transform = true;
            }
            $this->lessons++;
            return "Уровень единорожки $this->skills <br>"; //The unicorn's level is...
        } else {
            return "Не хочу работать, хочу спать!"; //I don't want to study, I want sleep!
        }
    }

    public function tired() //It makes the unicorn tired
    {
        if ($this->skills > 50 || $this->energy < 10) {
            $this->rest = false;
        }
    }

    public function sleep()
    {
        if ($this->rest) {
            return "Я не хочу спать<br>"; //I don't want to sleep
        } else {
            $this->rest = true;
            $this->energy += 50;
            return "Единорожка спит<br>"; //The unicorn is sleeping
        }
    }

    public function transformation($a) //It transform the unicorn into another creature 
    {
        if ($this->transform && $this->energy > 0) {
            $this->skills = 0;
            $this->transform = false;
            $this->energy -= 70;
            return "Теперь это $a <br>"; //Now it's a ...
        } else {
            return "Учись давай! <br>"; //Let's go study
        }
    }

    public function eat($food)
    {
        if ($this->hunger) {
            $this->hunger = false;
            $this->energy += 30;
            return "Единорожка кушает $food<br>"; //The unicorn is eating
        } else {
            return "Не хочу кушать<br>"; //I don't want to eat
        }
    }

    public function hungry() //It makes the unicorn hungry 
    {
        if (!$this->hunger || $this->energy < 20) {
            $this->hunger = true;
        }
    }

    public function condition()
    {
        if (!$this->hunger && $this->rest && $this->energy > 40) {
            return "У единорожки всё хорошо<br>"; //The unicorn is totally fine
        } else {
            return "Единорожка хочет сжечь себя<br>"; //The unicorn wants to burn herself
        }
    }

    public function growth() //It makes the unicorn higher
    {
        if ($this->energy > 0) {
            $this->hight = $this->hight + $this->hight / 100 * $this->lessons;
            $this->energy -= 5;
            return "Теперь рост единорожки $this->hight <br>"; //Now the height of the unicorn is ...
        } else {
            return "Единорожка устала<br>"; //The unicorn is tired
        }
    }
}
