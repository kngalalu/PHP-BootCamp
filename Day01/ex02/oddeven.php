#!/usr/bin/php
<?php
$read = fopen('php://stdin', 'r');
while($read)
{
    echo "Enter a number: ";
    $str = rtrim(fgets(STDIN));
    if (feof(STDIN)) 
    {
        exit ();

    }
    if (is_numeric($str))
    {
        $str = (int)$str;
        if ($str % 2 == 0)
        {
            echo "The number ";
            echo $str;
            echo " is even";
        }
        else
        {
            echo "The number ";
            echo $str;
            echo " is odd";
        }
    }
    else
    {
        if ($str === "" || !is_numeric($str))
        {
            echo "'";
            echo $str;
            echo "'";
            echo " is not a number";
        }
    } 
echo "\n";

}