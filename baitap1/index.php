<?php
$arrayTest = [1, 9, 4.5, 6.6, 5.7, -4.5];
function selectionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp= $list[$i];
            $list[$i]=$list[$min];
            $list[$min]=$temp;
        }
    }
    return $list;
}

echo implode(", ",selectionSort($arrayTest));

