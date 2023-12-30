<?php

function binarySearchUsingArraySearch($arr, $element) {
    $index = array_search($element, $arr);
    return $index !== false ? $index : -1;
}

// Example of use:
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$elementToFind = 6;

$result = binarySearchUsingArraySearch($array, $elementToFind);

if ($result !== -1) {
    echo "Item found in index $result.\n";
} else {
    echo "Item not found.\n";
}

?>