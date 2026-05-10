<?php
// Indexed array
/*$index_array = array('Red', 'New Delhi', 'Mango');
echo '<pre>';
print_r($index_array);
echo $index_array[2];*/

// Associative array
/*$assoc_array = array('color' => 'Red',
                    'city' => 'New Delhi',
                    'fruits' => 'Mango');
echo '<pre>';
print_r($assoc_array);
echo $assoc_array['fruits'];*/


// Multidimentional array
$multi_array =  array(
                    'array1' => array('color' => 'Red',
                    'city' => 'New Delhi',
                    'fruits' => 'Mango'),
                    'array2' => array('color' => 'Green',
                    'city' => 'New York',
                    'fruits' => 'Banana')
);

echo '<pre>';
print_r($multi_array);
?>