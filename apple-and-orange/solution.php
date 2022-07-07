<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $apples = array_map(function ($val) use (&$a, &$s, &$t) {
        $val = ($a + $val);
        return ($val >= $s && $val <= $t) ? 1 : 0;
    }, $apples);

    $oranges = array_map(function ($val) use (&$b, &$s, &$t) {
        $val = ($b + $val);
        return ($val >= $s && $val <= $t) ? 1 : 0;
    }, $oranges);

    echo array_sum($apples) . "\n";
    echo array_sum($oranges) . "\n";
}

$s = 7;

$t = 11;

$a = 5;

$b = 15;

$apples = [-2, 2, 1];

$oranges = [5, -6];

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
