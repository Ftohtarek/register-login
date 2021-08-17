<?php
// -------------- sorting selection Sort --------------------
function br()
{
    echo "<br>";
}
function printArr($arr)
{
    echo "[ ";
    foreach ($arr as $key => $val) {
        echo $val . " , ";
    }
    echo " ]<br>";
}
$list = [1, -1, 3, -3, 4, -4, 8, 6, 2];
// ---------------------------------------------- 1  ----------------------------------------------
//  i depend on calc min number in list then swap this number in his location that i give for it by itration that pass
//  on all list and the loop that calc min every time decrease 1 in itration that already calc 

function sorting1($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $minStartPoint = $arr[$i];
        $arr = Minuim($arr, $minStartPoint, $i);
    }
    return $arr;
}
function Minuim($arr, $min, $location)
{
    for ($i = $location + 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $arr[$i] = $arr[$location];
            $arr[$location] = $min;
        }
    }
    return $arr;
}

echo "second sort1 <br>";
printArr(sorting1($list));
//  -------------------------------------- 2 -----------------------------------------
function sorting2($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        $val = $arr[$i];
        $location = $i - 1;
        while ($location >= 0 && $val < $arr[$location]) {
            $arr[$location + 1] = $arr[$location];
            $location = $location - 1;
        }
        $arr[$location + 1] = $val;
    }
    return $arr;
}
echo "second sort2 <br>";
printArr(sorting2($list));

// $list = [1, -1, 3, -3, 4, -4, 8, 6, 2];
// ---------------------------------- bubble sort -------------------------
function sorting3($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $val = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $val;
            }
        }
    }
    return $arr;
}
echo "second sort3 <br>";
printArr(sorting3($list));
