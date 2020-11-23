#!/usr/bin/php
<?php
//Day_of_the_week, Number_of_day, Month, Year, Hours:Minutes:Seconds
{
    $day_of_the_week_fr = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    $day_of_the_week_en = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
    $months_fr = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "decembre");
    $months_en = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
    $time_match = 0;
    if (preg_match('/^([A-Z]?[a-z]+) ([0-9]{1,2}) ([A-Z]?[a-z]+) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/', $argv[1], $ft_date)){
        if (($day_of_the_week_fr = array_search(strtolower($ft_date[1]), $day_of_the_week_fr))>=0)
            $day_bool = 1;
        if (($months_fr = array_search(strtolower($ft_date[3]), $months_fr))>=0)
            $month_bool = 1;
        if (($year = (int)$ft_date[4] >= 1970))
            $year = 1;
    }
}
