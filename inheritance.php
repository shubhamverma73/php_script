<?php
// Inheritance
class A {
    public function MethodA() {
        echo "From Class A";
    }
}

class B extends A {
    public function MethodB() {
        echo "From Class B";
    }
}

/*class C extends A, B {

}*/

$obj = new B();
$obj->MethodB();
echo "</br>";
$obj->MethodA();
?>