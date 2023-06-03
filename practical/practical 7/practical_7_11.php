<?php
class a
{
    public $name;
    public $age;
    public function SetAndGive($n, $a)
    {
        global $name, $age;
        $name = $n;
        $age = $a;
    }
    public function give()
    {
        global $name, $age;
        echo "<br>Name : " . $name . "<br>Age : " . $age;
    }
}
$student1 = new a();
$student2 = clone $student1;
$student1->SetAndGive("divyan", 16);
$student1->give();
$student2->give();
?>