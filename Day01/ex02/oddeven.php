#!/usr/bin/php
<?php
$i = fopen('php://stdin', 'r');
while ($i)
{
    print("Enter a number: ");
    $get_next_line = rtrim(fgets(STDIN));
    if (feof(STDIN))
    {
        print("\n");
        exit ();
    }
    $var = $get_next_line;
    if (is_numeric($var)) 
    {
        $var = (int)$var;

        print ("The number ".$var." is ");
        if ($var % 2 == 0)
            print ("even");
        else
            print ("odd");
    }
    else
        print("'".$var."' is not a number");
    print("\n");
}
?>