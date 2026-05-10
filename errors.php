<?php
/*
// Fatal error
nonExistentFunction(); // Fatal error: Call to undefined function
*/

/*
// Warning
include("missingfile.php"); // Warning: include(): Failed to open stream
echo "Script continues!";*/


/*
// Parse Error
echo "Hello World" // Parse error: Syntax error, unexpected end of file
echo "testing";*/


// Notice 
echo $undefinedVar; // Notice: Undefined variable
echo 'Script continues!';


// Deprecated Error
// Strict Standards Errors
// Exception Errors

?>