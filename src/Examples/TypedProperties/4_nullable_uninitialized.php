<?php

class Sth {
    public ?int $a = null;
    public ?int $b;
}

$sth = new Sth();

# this will return NULL
var_dump($sth->a);

# this will throw TypeError
var_dump($sth->b);

