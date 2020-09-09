<?php
$n = 9;
for ($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $n; $j++)
    {
        if ($i == 1 || $i == 5 || $i == 9 || $j == 1 && $j + $i <= 6 || $j == 9 && $j + $i >= 14 )
        {
            echo "+";
        }
        else
        {
            echo "&nbsp-";
        }
        echo " ";
    }
    echo "<br/>";
}
