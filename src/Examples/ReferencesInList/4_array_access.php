<?php

class RefArr implements ArrayAccess {
    private $s = [];
    function __construct(array $a) { $this->s = $a; }
    function offsetSet ($k, $v) { $this->s[$k] = $v; }
    function offsetExists ($k) { return isset($this->s[$k]); }
    function offsetUnset ($k) { unset($this->s[$k]); }

    # & in below line is important!
    # otherwise references in list won't work
    function &offsetGet ($k) { return $this->s[$k]; }
}

$array = new RefArr([1, [2, 3]]);
list(&$a, list($b, &$c)) = $array;

$a = 4;

# this will return
# object(RefArr)#1 (1) {
#   ["s":"RefArr":private]=>
#   array(2) {
#     [0]=>
#     &int(4)
#     [1]=>
#     array(2) {
#       [0]=>
#       int(2)
#       [1]=>
#       &int(3)
#     }
#   }
# }
var_dump($array);
