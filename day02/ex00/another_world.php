#!/usr/bin/php
<?php

function ft_split($string)
{
    $arr = explode(" ",$string);
    $arr_sort = array_values(array_filter($arr));
    return($arr_sort);
}

if ($argc > 1)
{
    $arr = ft_split($argv[1]);
    $j = 0;
    $k = count($arr);
    if ($k > 1)
    {
        print ($arr[0]);
        $j = 1;
        while ($arr[$j])
        {
            print(' ');
            print($arr[$j]);
            $j++;
        }
        echo "\n";
    }
    else
    {
        print($arr[0]);
        echo "\n";
    }
}

?>