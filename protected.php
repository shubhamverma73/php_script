<?php
// Protected
class MyProtectedClass {

    protected $country;

    public function __construct($country) {
        $this->country = $country;
    }
}

class childClass extends MyProtectedClass {

    public function showCountry() {
        return $this->country;
    }
}

$obj = new childClass('India');
//echo $obj->country;
echo $obj->showCountry();
?>