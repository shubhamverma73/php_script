<?php

// Final method
Class ParentClass {

    final public function parentMethod() {
        echo "Parent Method";
    }
}

Class ChildClass extends ParentClass {

    public function parentMethod() {
        echo "Child Method";
    }
}

$obj = new ChildClass();
$obj->parentMethod();
?>