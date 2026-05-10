<?php
// Destructor

class subscribe {

    public function __construct() {
        echo "Please Subscribe My <br>";
    }

    public function YTChannel() {
        echo "Youtube Channel <br>";
    }

    public function __destruct() {
        echo "Programming Path";
    }
}

$obj = new subscribe();
$obj->YTChannel();
?>