#!/usr/bin/php
<?php

function ft_split($string)
{
    $arr = explode(" ",$string);
    $arr_sort = array_values(array_filter($arr));
    return($arr_sort);
}

function epur_str($string)
{
    $index = 0;
    $count = 0;
    $split = ft_split($string);
    $count = count($split);
    while ($index < $count)
    {
        if (($index + 1) == $count)
        {
            print($split[$index]);
            $index++;
        }
        else
        {
            print($split[$index]);
            print(' ');
            $index++;
        }
    }
}
echo epur_str($argv[1])."\n";