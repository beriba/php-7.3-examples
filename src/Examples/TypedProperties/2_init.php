<?php

class Sth {
    public $a = 0; # type not set
    public int $b = 1;
}

$sth = new Sth();

# this will return 0
var_dump($sth->a);

# this will return 1
var_dump($sth->b);
