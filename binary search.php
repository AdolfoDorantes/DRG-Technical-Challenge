<?php

function binarySearchManual($arr, $element) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($arr[$mid] == $element) {
            return $mid;
        }

        if ($arr[$mid] < $element) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return -1;
}

// Example of use:
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$elementToFind = 6;

$result = binarySearchManual($array, $elementToFind);

if ($result !== -1) {
    echo "Item found in index $result.\n";
} else {
    echo "Item not found.\n";
}

?>