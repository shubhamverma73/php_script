<?php
// Abstract

require "abstract.php";

class school extends School_Members {

    public function Principle() {
        echo 1;
    }

    public function Teachers() {
        echo 10;
    }
}

$obj = new school();
$obj->Principle();
echo "<br>";
$obj->Teachers();
echo "<br>";
$obj->Students();
?>