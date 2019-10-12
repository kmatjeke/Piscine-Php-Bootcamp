#!/usr/bin/php
<?php
function ft_split($string)
{
    $arr = explode(" ",$string);
    $arr_sort = array_values(array_filter($arr));
    sort($arr_sort);
    return($arr_sort);
}

if ($argc > 1)
{
    $i = 1;
    while ($argv[$i])
    {
        $j = 0;
        $new = ft_split($argv[$i++]);
        while ($new[$j])
        {
            $array[] = $new[$j];
            $j++;
        }
    }
    sort($array);
    $k = 0;
    while ($array[$k])
    {
        print($array[$k]);
        print("\n");
        $k++;
    }
}