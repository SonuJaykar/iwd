<?php

class father
{
    public function fa()
    {
        echo "This is father class.<br>";
    }    
}

class child extends father
{
    public function ch()
    {
        echo "This is child class.<br>";
    }
}

$c = new child();

$c -> fa();
$c -> ch();
?>