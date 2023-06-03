<?php
class A
{
    public function a()
    {
        echo "This is class A:<br>";
    }
}

interface B 
{
    public function b();
}

class C extends A implements B
{
    function b()
    {
        echo "This is class B:<br>";
    }

    public function c()
    {
        echo "This is class C:";
    }
}

$c1 = new C();

$c1 -> a();
$c1 -> b();
$c1 -> c();
?>