<?php
function get_shortest(array $arr)
{
    $shortest = $arr[0];
    for ($i = 0; $i < count($arr) - 1; $i++)
        if (strlen($shortest) > strlen($arr[$i]))
            $shortest = $arr[$i];
    return $shortest;
}
