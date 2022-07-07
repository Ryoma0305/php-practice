<?php
function diamond(float $diagonal1, float $diagonal2): float
{
    return $diagonal1 * $diagonal2 / 2;
}

$result = diamond(3, 11);
print "菱形の面積は{$result}です";