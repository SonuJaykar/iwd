<?php
abstract class a {
    abstract public function a();
    public function b(){
        echo "<br>This is normal method";
    }
} 
class b extends a 
{
    function a()
    {
        echo "This is abstract method";
    }
}

$b1 = new b();

$b1 -> a();

$b1 -> b();
?>