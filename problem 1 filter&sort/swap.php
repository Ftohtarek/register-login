<?php
function printArr($arr)
{
    echo "[ ";
    foreach ($arr as $key => $val) {
        echo $val . " , ";
    }
    echo " ]<br>";
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// not best way 
function swapHalf($arr)
{
    $newarr = [];

    if (count($arr) % 2 == 0) {
        $len = count($arr) / 2;
        $rightSideLen = $len;
        $center = null;
    } else {
        $len = (count($arr) - 1) / 2;
        $rightSideLen = $len + 1;
        $center = $len;
    }
    for ($j = $rightSideLen; $j < count($arr); $j++) {
        $newarr[] = $arr[$j];
    }
    $newarr[] = $arr[$center];
    for ($i = 0; $i < $len; $i++) {
        $newarr[] = $arr[$i];
    }
    return $newarr;
}
printArr(swapHalf($arr));
