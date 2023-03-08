<?php

// function insertElement($index, $element, $position) {
//     if ($position < 0 || $position > count($index)) {
//         return false;
// } else {
//     while (count($index) <= $position) {
//         $index[] = $element;
//         }
//     array_splice($index, $position, 0, $element);
//     return $index;
// }
// }
$index = array(1, 2, 3, 4, 5, 6);
$newIndex = insertElement($index, 4, 2);

var_dump($newIndex);

function insertElement($array, $element, $position) {
    if ($position < 0) {
        return false;
    } else {
        while (count($array) <= $position) {
            $array[] = null;
        }
        array_splice($array, $position, 0, $element);
        return $array;
    }
}
foreach ($newIndex as $element) {
    echo $element. " "; 
}

insertElement(var_dump($newIndex), 4, 10);


