<?php

$array = [[1, 2], [3, 4]];

foreach ($array as list(&$a, $b)) {
    $a = 5;
}

$array[0][0] = 6;
$array[1][0] = 7;

# this will return
# array(2) {
#   [0]=>
#   array(2) {
#     [0]=>
#     int(6)
#     [1]=>
#     int(2)
#   }
#   [1]=>
#   array(2) {
#     [0]=>
#     &int(7)
#     [1]=>
#     int(4)
#   }
# }
var_dump($array);

# this will return
# int(7)
var_dump($a);

# the above happens because reference on $array[0][0] don't exist
# anymore when the second loop iteration starts while
# on $array[1][0] there is still a ref (even after the loop ends)
# because $array[1] is the last element of $array

