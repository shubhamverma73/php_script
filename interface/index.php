<?php

require "interface.php";

class School implements School_Members {

    public function Principle() {
        echo 1;
    }

    public function Teachers() {
        echo 10;
    }

    public function Students() {
        echo 100;
    }
}
?>