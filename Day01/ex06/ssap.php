#!/usr/bin/php
<?php
if ($argc > 1)
{
    $array = [];
    $i = 1;
    while ($i < $argc)
    {
        $origin_str = trim($argv[$i]);
        $temp_str = array_filter(explode(" ", $origin_str), "strlen");
        $array = array_merge($array, $temp_str);
        $i++;
    }
    sort($array);
    foreach ($array as $str)
        echo "$str\n";
}
?>