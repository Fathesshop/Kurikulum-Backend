<?php
$n = 9;
for ($p = 0; $p < $n; $p++)
{
    for ($m = 0; $m < $n; $m++)
    {
        if (($p + $m) <= 8 and $p <= $m)
        {
            echo "+ ";
        }
        else if (($p + $m) <= 16 and ($p + $m) > 7 and $p >= $m)
        {
            echo "+ ";
        }
        else
        {
            echo "&nbsp- ";
        }
    }
    echo "<br/>";
}