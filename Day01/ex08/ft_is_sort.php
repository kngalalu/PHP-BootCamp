#!/usr/bin/php
<?php
function ft_is_sort($arr)
{
    $array = $arr;
    sort($array);
    $arr_rev = array_reverse($array);
    return ($arr == $array || $arr == $arr_rev);
}

?>