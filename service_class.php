<?php
class CalculatorService {

    // add
    function add($a, $b) {
        echo $a + $b;
    }

    // sub
    function sub($a, $b) {
        echo $a - $b;
    }

    // multiply
    function multiply($a, $b) {
        echo $a * $b;
    }

    // devide
    function devide($a, $b) {
        echo $a / $b;
    }
}
$calculator = new CalculatorService();
//$calculator->add(5,10);
//$calculator->sub(10,5);
//$calculator->multiply(5,5);
$calculator->devide(10,5);

?>