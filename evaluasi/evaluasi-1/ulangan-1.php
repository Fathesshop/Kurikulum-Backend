<?php
$n = 9;
for($i = 1 ; $i <= $n ; $i++)
{
    for($j = 1 ; $j <= $n ; $j++)
    {
        if($j == 1 || $j == 3 ||$j == 5|| $j == 7 || $j == 9)
        {
            echo "+";
        }
        else
        {
            echo "&nbsp-";
        }
        echo " ";
    }
    echo "<br>";
}