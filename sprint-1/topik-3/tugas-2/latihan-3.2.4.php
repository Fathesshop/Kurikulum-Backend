<?php
$n = 9;
for ($p = 0; $p < $n; $p++)
{
    for ($m = 0; $m < $n; $m++)
    {
        if ($p == 0 or $p == 4 or $p == 8)
        {
            echo "+ ";
        }
        else if ($p <= 3 and $m == 0)
        {
            echo "+ ";
        }
        else if ($p >= 5 and $m == 8)
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