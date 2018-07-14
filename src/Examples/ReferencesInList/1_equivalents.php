<?php

$array = [1, 2];

## below lines are equivalent

# this work in previous PHP versions
# at least in 5.6 (I didn't check earlier versions)
$b =& $array[1];

# those two lines work from PHP 7.3
list($a, &$b) = $array;
[$a, &$b] = $array;

## end of equivalent lines

$b = 5;

# this will return
# array(2) {
#   [0]=>
#   int(1)
#   [1]=>
#   &int(5)
# }
var_dump($array);

