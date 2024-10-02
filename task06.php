<?php
function sequence(int $nb)
{
    $str = "1";
    for ($i = 0; $i <= $nb; $i++) {
        print ("$str\n");

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
    }
}
