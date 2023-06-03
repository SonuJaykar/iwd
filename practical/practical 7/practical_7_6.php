<?php
class Grandfather
{
    public function Ga()
    {
        echo "This is Grandfather:<br>";
    }
}

class Father extends Grandfather
{
    public function Fa()
    {
        echo "This is Father: <br>";
    }
}

class  Child extends Father
{
    public function Ch()
    {
        echo "This is Child:";
    }
}

$c = new child();

$c -> Ga();
$c -> Fa();
$c -> Ch();
?>