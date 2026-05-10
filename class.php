<?php

class MyClass {

    public $name;
    public $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getValue() {
        return 'My Name is: ' .$this->name . ', age ' . $this->age;
    }
}

$obj = new MyClass('Sanjay', 25);
echo $obj->getValue();
?>