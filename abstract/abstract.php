<?php

abstract class School_Members {

    abstract public function Principle();
    abstract public function Teachers();
    public function Students() {
        echo 100;
    }
}
?>