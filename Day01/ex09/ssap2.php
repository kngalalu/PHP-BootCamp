#!/usr/bin/php
<?php
function compare($a, $b)
{
    $i = 0;
        while (($i < strlen($a) && $i < strlen($b)))
        {
                $first_cmp = $a[$i];
                $sec_cmp = $b[$i];
                if ($first_cmp == $sec_cmp)
                        continue ;
                if (ctype_alpha($first_cmp))
                {
                        if (ctype_alpha($sec_cmp))
                        {
                                if (strcmp(strtolower($first_cmp), strtolower($sec_cmp)) == 0)
                                        continue ;
                                return (strcmp(strtolower($first_cmp), strtolower($sec_cmp)));
                        }
                        return (FALSE);
                }
                else if (is_numeric($first_cmp))
                {
                        if (ctype_alpha($sec_cmp))
                                return (TRUE);
                        else if (is_numeric($sec_cmp))
                                return (strcmp($first_cmp, $sec_cmp));
                        return (FALSE);
                }
                else
                {
                        if (!ctype_alpha($sec_cmp) && !is_numeric($sec_cmp))
                                return (strcmp($first_cmp, $sec_cmp));
                        return (TRUE);
                }
                $i++;
        }
        return (strlen($a) - strlen($b));
}

if ($argc > 1)
{
        $arr = [];
        $i = 0;
        while ($i < $argc)
        {
                $str = trim($argv[$i]);
                $tmp = array_filter(explode(" ", $str), "strlen");
                $arr = array_merge($arr, $tmp);
                $i++;
        }
        usort($arr, "cmp");
        foreach ($arr as $str)
                printf("%s\n", $str);
}
?>