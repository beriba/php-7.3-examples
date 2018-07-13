<?php

class Sth {
    public $a; # type not set
    public int $b;

    public function __construct() {
        $this->a = 0;
        $this->b = 1;
    }
}

$sth = new Sth();

# this will return 0
var_dump($sth->a);

# this will return 1
var_dump($sth->b);
