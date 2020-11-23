#!/usr/bin/php
<?php
if (isset($argv) && isset($argc))
{
    $i = 1;
    while ($i < $argc)
    {
        print($argv[$i]."\n");
        $i++;
    }
}
else
    print ("\n"); 
?>