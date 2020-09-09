<?php
$n = 9;
for ($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $n; $j++)
    {
        if ($i + $j <= 10 && $i <= $j || $i + $j >= 10 && $i >= $j)
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
