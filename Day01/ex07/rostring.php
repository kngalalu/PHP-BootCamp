#!/usr/bin/php
<?php
if (isset($argv[1]))
{
    $str = array_filter(explode(' ', $argv[1]));
    $rostring = array_shift($str);
    $str[] = $rostring;
    $str = implode($str, " ");
    print ($str);
}
?>