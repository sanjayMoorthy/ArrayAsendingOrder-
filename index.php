<?php
// timestamp: 3:00
//$array = [5, 2, 1];
//$array = [1, 2, 5];

// $array = [4, 1, 2, 5];
// $result = [];
// if (isDescendingOrder($array)) {
//     echo "The array is already arranged in descending order.";
// } else {
//     do {
//         for ($i = 0; $i < count($array) - 1; $i++) {
//             if ($array[$i] < $array[$i + 1]) {
//                 $temp = $array[$i + 1];
//                 $array[$i + 1] = $array[$i];
//                 $array[$i] = $temp;
//                 // $result[] = $array;
//                 //
//                 array_push($result, $array);
//             }
//         }
//     } while (! isDescendingOrder($array));
//     print_r($result);
// }
// function isDescendingOrder($array)
// {
//     for ($i = 0; $i < (count($array) - 1); $i++) {
//         if ($array[$i] < $array[$i + 1]) {
//             return false;
//         }
//     }
//     return true;
// }

// ------------------------------------------------------------------------------------------
// Another Example:
// Input [4, 1, 2, 5]
// Output
// [4, 1, 5, 2]
// [4, 5, 1, 2]
// [5, 4, 1, 2]
// [5, 4, 2, 1]

// ----------------------------------------------------------------------------------------
// For example: 
// Input [1, 2, 5]
// Output
// [1, 5, 2]
// [5, 1, 2]
// [5, 2, 1]

// -------------------------------------------------------------------------------------------

// Another Example:
// Input [3, 2, 1]
// Output
// The array is already arranged in descending order.


$array = [4,1,2,5];
$result = [];
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    do {
        for ($i = count($array) -1 ; $i >=0 ; $i--) {
            if ($array[$i] < $array[$i+1]) {
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;

                array_push($result, $array);
            }
        }
    } while (! isDescendingOrder($array));
    print_r($result);
}
function isDescendingOrder($array)
{
    for ($i = 0; $i < (count($array) - 1); $i++) {
        if ($array[$i] < $array[$i + 1]) {
            return false;
        }
    }
    return true;
}
