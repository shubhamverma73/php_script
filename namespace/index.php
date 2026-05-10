<?php

require "schoolA.php";
require "schoolB.php";

$obj = new schoolA\LKG();
echo $obj->getStudents();
echo '<br>';

$obj2 = new schoolB\LKG();
echo $obj2->getStudents();
?>