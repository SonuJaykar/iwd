<?php
class MyClass {
    private $privateAttribute;
    public function __get($name) {
        if ($name === 'privateAttribute') {
            return $this->$name;
        } else {
            throw new Exception("Cannot access undefined property: $name");
        }
    }
    public function __set($name, $value) {
        if ($name === 'privateAttribute') {
            $this->$name = $value;
        } else {
            throw new Exception("Cannot set undefined property: $name");
        }
    }
}
$myObject = new MyClass();
$myObject->privateAttribute = 'Private Value';
echo $myObject->privateAttribute;

?>