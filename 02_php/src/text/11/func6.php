<?php
function recursion($a)
{
    if ($a < 10) {
        echo $a . PHP_EOL;
        recursion($a + 1);
    }
}

recursion(1);