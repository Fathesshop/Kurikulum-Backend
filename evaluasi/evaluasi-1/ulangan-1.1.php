<?php
$n = 9;
for($i = 1 ; $i <= $n ; $i++)
{
    for($j = 1 ; $j <= $n ; $j++)
    {
        if($i == 1 || $i == 3 ||$i == 5|| $i == 7 || $i == 9)
        {
            echo "&nbsp-";
        }
        else
        {
            echo "+";
        }
        echo " ";
    }
    echo "<br>";
}