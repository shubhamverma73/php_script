<?php
// Public
class MyPublicClass {

    public $city;

    public function getCity() {
        return $this->city;
    }
}

$obj = new MyPublicClass();
$obj->city = "New Delhi";
echo $obj->getCity();
?>
