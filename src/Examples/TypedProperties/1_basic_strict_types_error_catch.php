<?php declare(strict_types=1);

class Sth {
    public int $count;
}

$sth = new Sth();

try {
    # this will throw TypeError
    $sth->count = '1';
} catch (TypeError $e) {
    # this will return
    # object(Sth)#1 (0) {
    #   ["count"]=>
    #   uninitialized(int)
    # }
    var_dump($sth);
}
