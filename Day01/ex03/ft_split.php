<?php
function    ft_split($str)
{
    if (is_string($str))
    {
        $table = array_filter(explode(' ', $str));
        sort ($table, SORT_STRING);
        return ($table);
    }
    else
        return (FALSE);
}
?>