<?php
// Trait
trait A {
    public function MethodA() {
        echo "From Class A";
    }
}

trait B {
    public function MethodB() {
        echo "From Class B";
    }
}

trait X {
    public function MethodX() {
        echo "From Class X";
    }
}

class C {
    use A, B, X; // Mulitiple Inheritance Possible
}

$obj = new C();
$obj->MethodA();
echo "<br>";
$obj->MethodB();
echo "<br>";
$obj->MethodX();
?>