<?php
function sequence(int $nb)
{
    if ($nb == 0)
        return "1";
    if ($nb == 1)
        return "11";

    $str = "11";
    for ($i = 2; $i <= $nb; $i++) {
        $str = $str . '$';
        $len = strlen($str);
        $count = 1;
        $tmp = "";

        for ($j = 1; $j < $len; $j++) {
            if ($str[$j] != $str[$j - 1]) {
                $tmp = $tmp . $count + 0;
                $tmp = $tmp . $str[$j - 1];
                $count = 1;
            } else
                $count++;
        }
        $str = $tmp;
        print ("$str\n");
    }
}
