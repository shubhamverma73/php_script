<?php
// Encapusulation

class MyClass {

    public $amount = 1000;
    public function getValue() {
        echo $this->amount;
    }
}

$obj = new MyClass();
$obj->getValue();
echo "<br>";
$obj->amount = 2000;
$obj->getValue();
?>