<?php

// Final Class
final Class ParentClass {

    public function myFunction() {
        echo "Programming Path!";
    }
}

Class ChildClass extends ParentClass {

}

$obj = new ChildClass();
$obj->myFunction()
?>