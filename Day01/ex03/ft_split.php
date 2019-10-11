#!/usr/bin/php
<?php
function ft_split($str)
{
    $arr = explode(" ", $str);
    $array =array_filter($arr, "strlen");
    sort($array);
    return ($array);
}

?>