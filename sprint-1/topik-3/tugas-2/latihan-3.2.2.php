<?php
$n = 9;
for ($t = 1; $t <= $n; $t++)
{
    for ($p = $n; $p > $t; $p--)
    {
        echo "&nbsp-";
    }
    for ($m = 1; $m <= $p; $m++)
    {
        echo "+";
    }
    echo "<br>";
}
