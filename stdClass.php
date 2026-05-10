<?php
// stdClass
$obj = new stdClass();
$obj->name = "Deepak";
$obj->age = 30;
//echo $obj->age;
echo '<pre>';
print_r($obj);
$array = (array)$obj;
echo '<pre>';
print_r($array);
?>