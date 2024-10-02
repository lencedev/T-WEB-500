<?php
function calc_average(array $arr)
{
    $average = 0;
    for ($i = 0; $i < count($arr); $i++)
        $average += $arr[$i];
    return (round($average / count($arr), 1));
}
