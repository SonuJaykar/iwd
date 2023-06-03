<?php
interface temp{
    public function temp1();
}
class a implements temp
{
    function temp1(){
        echo "this is implemented method form temp interface";
    }
}
$obj = new a();
$obj -> temp1();
?>