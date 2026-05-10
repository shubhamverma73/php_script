<?php
// Session

session_start();

$_SESSION['subscribe'] = "Subscribe Programming Path";

$_SESSION['city'] = "Pune";

$_SESSION['user'] = [
    "name" => "Deepak",
    "age" => 25,
    "mobile" => "515545"
];

echo $_SESSION['subscribe'];
echo "<br>";
echo $_SESSION['city'];
echo "<br>";
echo $_SESSION['user']['name'];
?>