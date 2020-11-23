#!/usr/bin/php
<?php
    unset($argv[0]);//remove argv[0] from argv array
    $str = array();
    foreach ($argv as $value) {
        if ($value == trim($value) && (strpos($value, ' ') !== false))
        {
            $my_word = explode(" ", $value);
            $my_word = array_diff($my_word, [""]);
            $str = array_merge($my_word, $str);
        }
        else
            array_push($str, $value);
    }
    sort($str);
    foreach($str as $value)
        print ($value."\n");
?>