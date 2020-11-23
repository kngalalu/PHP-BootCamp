#!/usr/bin/php
<?php
if($argc != 4)
    print ("Incorrect Parameters");
$var1 = trim($argv[1]);
$op = trim($argv[2], " ");
$var2 = trim($argv[3]);
$var1 = (int)$var1;
$var2 = (int)$var2;
if (strcmp($op, "+") == 0)
    $ans = ($var1 + $var2);
else if (strcmp($op, "-") == 0)
    $ans = ($var1 - $var2);
else if (strcmp($op, "*") == 0)
    $ans = ($var1 * $var2);
else if (strcmp($op, "/") == 0)
    $ans = ($var1 / $var2);
else if (strcmp($op, "%") == 0)
    $ans = ($var1 % $var2);
else
    $ans = ($var1 * $var2);;
print ($ans);
?>