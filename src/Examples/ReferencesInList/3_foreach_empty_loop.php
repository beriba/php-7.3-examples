<?php

$array = [[1, 2], [3, 4]];

foreach ($array as list(&$a, $b)) {
    #empty
}

$a = 5;

# this will return
# int(5)
var_dump($array[1][0]);
