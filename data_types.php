<?php
/*
// String
$name = "New Delhi"; 
echo $name;*/


/*
// Integer
$age = 25;
echo $age;*/


/*
// Float (Double)
$price = 99.99;
echo $price;*/


/*
// Boolean 
$is_admin = true;
$is_logged_in = false;
echo $is_admin;
echo $is_logged_in;*/


/*
// Array
$colors = array("Red", "Green", "Blue");
//echo $colors[2];
echo "<pre>";
var_dump($colors)*/


/*
// Object
class Car {
    public $brand = "Tata";
    function drive() {
        return "Driving a " . $this->brand;
    }
}
$myCar = new Car();
echo $myCar->brand;
echo "<br>";
echo $myCar->drive();*/


/*
// Null
$emptyVar = NULL;
var_dump($emptyVar);*/



// Resource
$file = fopen("test.txt", "r");
var_dump($file);
?>