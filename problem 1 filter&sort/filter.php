<?php
function printArr($arr)
{
    echo "[ ";
    foreach ($arr as $val) {
        echo " [ ";
        foreach ($val as $value) {
            echo $value . " , ";
        }
        echo " ] ,";
    }
    echo " ]<br>";
}

$arr = [[1, 2, 7, 4, 9], [4, 6, 5, 3], [4, 8, 9]];
function filter($arr, $type = "even")
{
    if ($type == "even") {
        $module = 0;
    } else {
        $module = 1;
    }
    foreach ($arr as $mainKey => $supArr) {
        foreach ($supArr as $key => $value) {
            if ($value % 2 == $module) {
                unset($arr[$mainKey][$key]);
            }
        }
    }
    return $arr;
}
printArr(filter($arr,"odd"));
printArr(filter($arr,"even"));
