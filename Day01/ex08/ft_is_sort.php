<?php
function ft_is_sort($str)
{
    $my_arr = $str;
    sort ($my_arr, SORT_STRING);
    $i = 0;
    while ($i < sizeof($str))
    {
        if (strcmp($str[$i], $my_arr[$i]) != 0)
            return (FALSE);
        $i++;
    }
    return (TRUE);
}