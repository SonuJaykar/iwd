<?php

class Father
{
    function relation()
    {
        echo "This is Father class:<br>";
    }
}

class Child extends Father
{
    function relation()
    {
        echo "This is Child class:";
    }
}

$F = new Father();
$C = new Child();

$F -> relation();
$C -> relation();

?>