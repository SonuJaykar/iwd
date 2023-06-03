<?php
class A
{
    function __construct()
    {
        echo "This is constructor.<br>";
    }
    function __destruct()
    {
        echo "This is destructor.";
    }
    public function example()
    {
        echo "This is normal method.<br>";
    }
}
$a1 = new A();
$a1 -> example();
?>