<?php
// Break
for ($a = 1; $a <= 10; $a++) {
    if($a == 5) {
        break;
    }
    echo $a."<br>";
}

// Continue
for ($a = 11; $a <= 20; $a++) {
    if($a == 16) {
        continue;
    }
    echo $a."<br>";
}
?>