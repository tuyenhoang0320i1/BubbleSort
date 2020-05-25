<?php
$myArray = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

function bubbleSort($array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {

        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
echo "<pre>";
print_r($myArray);
echo "</pre>";

echo "<pre>";
print_r(bubbleSort($myArray));
echo "</pre>";