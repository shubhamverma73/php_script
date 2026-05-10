<?php
// Lambda function
// temporary function
// anonymous function
// pass function as argument

// Regular funciton
/*function cityName($name) {
    echo $name;
}
cityName("Kanpur");*/

// ===> use function as variable
/*$cityName = function($name) {
    echo $name;
};
$cityName("Pune");*/

// ===> Passing Lambda Function as Argument

function accept_func_as_arg($arg_funciton) {
    echo $arg_funciton("Lambda Function");
}

/*$citName = function($name) {
    return "Hello From ".$name;
};

accept_func_as_arg($citName);*/

accept_func_as_arg(function($name) {
    return "Hello From... ".$name;
})
?>