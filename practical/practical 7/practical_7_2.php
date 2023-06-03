<?php

class car
{
    public $name ;

    public function speed()
    {
        $name = "Lamborghini";
        echo "Speed of $name is 350kmph";
    }
}

$c = new car();

$c -> speed();




?>