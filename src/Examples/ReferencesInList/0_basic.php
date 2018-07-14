<?php

$array = [1, 2];
list($a, &$b) = $array;

$b = 3;

# this will output
# array(2) {
#   [0]=>
#   int(1)
#   [1]=>
#   &int(3)
# }
var_dump($array);

