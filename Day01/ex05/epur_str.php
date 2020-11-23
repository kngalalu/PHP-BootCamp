#!/usr/bin/php
<?php
if ($argc != 2)
    exit (0);
$str = $argv[1];
if (is_string($str))
{
    $table = array_filter(explode(' ', $str));
    print implode(" ", $table);
    print ("\n");
}
else
    return (FALSE);
?>