<?php
// Private
class MyPrivateClass {

    private $city;

    public function __construct($city) {
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }
}

$obj = new MyPrivateClass('Mumbai');
echo $obj->getCity();
?>