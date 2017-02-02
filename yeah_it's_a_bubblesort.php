<?php
$arr = [0, 1, 3, 5, 2, 4, 500, 2, 7000, 699, 300];
$arrLen = count($arr);

for ($x = 0; $x < $arrLen; $x++) {
    for ($y = 0; $y < $arrLen-1; $y++) {
        if ($arr[$x] < $arr[$y]) {
            $temp = $arr[$x];
            $arr[$x] = $arr[$y];
            $arr[$y] = $temp;
        }
    }
}
    
print_r($arr)    
?>
