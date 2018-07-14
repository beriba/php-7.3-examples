<?php

$array = [1, 2];

list(&$a, $b) = $array;

$array[0] = 3;

# this will return
# int(3)
var_dump($a);

