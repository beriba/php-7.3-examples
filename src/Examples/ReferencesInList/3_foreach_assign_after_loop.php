<?php

$array = [[1, 2], [3, 4]];

foreach ($array as list(&$a, $b)) {
    $a = 5;
}

$a = 6;

# this will return
# array(2) {
#   [0]=>
#   array(2) {
#     [0]=>
#     int(5)
#     [1]=>
#     int(2)
#   }
#   [1]=>
#   array(2) {
#     [0]=>
#     &int(6)
#     [1]=>
#     int(4)
#   }
# }
var_dump($array);
