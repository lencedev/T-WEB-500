<?php
function dog_bark(int $age)
{
    for ($i = 0; $i < $age; $i++) {
        print ("woof");
        if ($age != 1 && $i != $age - 1) {
            print (" ");
        }
    }
    print ("\n");
}
