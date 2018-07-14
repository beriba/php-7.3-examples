<?php

$array = [1, 2];

list(&$a, $b) = $array;

$a = 3;
$b = 4;

# this will return
# array(2) {
#   [0]=>
#   &int(3)
#   [1]=>
#   int(2)
# }
var_dump($array);

