#!/usr/bin/php
<?php
if ($argc == 4)
{
    $result = 0;
    if (trim($argv[2]) == '+')
    {
        $result = trim($argv[1]) + trim($argv[3]);
    }
    elseif (trim($argv[2]) == '-')
    {
        $result = trim($argv[1]) - trim($argv[3]);
    }

    elseif (trim($argv[2]) == '%')
    {
        $result = trim($argv[1]) % trim($argv[3]);
    }

    elseif (trim($argv[2]) == '*')
    {
        $result = trim($argv[1]) * trim($argv[3]);
    }

    else
    {
        $result = trim($argv[1]) / trim($argv[3]);
    }

    print $result;
    echo "\n";
}
?>
