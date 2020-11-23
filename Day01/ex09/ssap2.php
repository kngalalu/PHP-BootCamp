#!/usr/bin/php
<?php
function ft_isdigit($c){
    if ($c >= '0' && $c <= '9')
        return (1);
    else
        return (0);
}

function ft_isalpha($c){
    if(($c >= 'a' && $c <= 'z') || ($c >= 'A' && $c <= 'Z'))
        return (1);
    else
        return (0);
}
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
    usort($str, strcasecmp);
    //$arr_num = array();
    foreach($str as $value)
    {
        if (ft_isdigit($value[0])== 1)
            $arr_num[] = $value;
        //print ($value."\tIm a number\n");
        else if ((ft_isalpha($value[0]) == 0) && (ft_isdigit($value[0]) == 0))
            $arr_char[] = $value;    
        //print ($value."\tI'm not alphanumeric\n");
        else
            $arr_str[] = $value;
        //    print ($value."\tIm sorted\n");
    }
    $super = array_merge($arr_str, $arr_num);
    $super = array_merge($super, $arr_char);
    foreach($super as $value)
        print ($value."\n");
?>