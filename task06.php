<?php
function sequence(int $nb)
{
    if ($nb == 0)
        return "1";
    if ($nb == 1)
        return "11";

    $str = "11";
    for ($i = 3; $i <= $nb; $i++) {
        $str = $str . '$';
        $len = strlen($str);
        $count = 1;


    }


}
