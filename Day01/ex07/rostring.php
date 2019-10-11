#!/usr/bin/php
<?php

$str = $argv[1];
$str = trim($str);
$i = stripos($str, " ");
$sub = substr($str, 0, $i);
$sub2 = substr($str, $i + 1);
$sub2 = trim($sub2);
$sub2 = trim(preg_replace('/\s+/', ' ', $sub2));
$arr = array($sub2, $sub);
$str = join(" ", $arr);
echo "$str\n";

?>