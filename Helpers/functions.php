<?php

function adition($num_1, $num_2)
{
    return $num_1 + $num_2;
}

function soustraction($num_1, $num_2)
{
    return $num_1 - $num_2;
}

function multiplication($num_1, $num_2)
{
    return $num_1 * $num_2;
}

function dvision($num_1, $num_2)
{
    return $num_2 == 0 ?  "Error"  :  $num_1 / $num_2;
}
