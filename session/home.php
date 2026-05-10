<?php

session_start();


echo $_SESSION['subscribe'];
echo "<br>";
echo $_SESSION['city'];
echo "<br>";
echo $_SESSION['user']['name'];
?>