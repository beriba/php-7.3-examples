<?php

$array = [1, 2, 3, [4, 5]];

list($a, &$b, $c, list(&$d, $e)) = $array;

$b = 8;
$d = 9;

# this will return
# array(4) {
#   [0]=>
#   int(1)
#   [1]=>
#   &int(8)
#   [2]=>
#   int(3)
#   [3]=>
#   array(2) {
#     [0]=>
#     &int(9)
#     [1]=>
#     int(5)
#   }
# }
var_dump($array);

