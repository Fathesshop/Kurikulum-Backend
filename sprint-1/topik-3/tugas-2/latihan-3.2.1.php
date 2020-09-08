<?php
$n = 9;
for ($t = 1; $t <= $n; $t++)
{
    for ($p = 1; $p <= $t; $p++)
    {
        echo "+";
    }
    for ($m = $n; $m >= $p; $m--)
    {
        echo "&nbsp-";
    }
    echo "<br>";
}