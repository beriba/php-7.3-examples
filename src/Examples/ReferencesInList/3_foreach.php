<?php

$array = [[1, 2], [3, 4]];

foreach ($array as list(&$a, $b)) {
    $a = 5;
}

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
#     &int(5)
#     [1]=>
#     int(4)
#   }
# }
var_dump($array);

# Note that reference on $array[0][0] doesn't exist anymore!
# See: 3_foreach_lost_ref.php

