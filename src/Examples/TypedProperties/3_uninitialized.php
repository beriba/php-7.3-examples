<?php

class Sth {
    public $a; # type not set
    public int $b;
}

$sth = new Sth();

# this will return NULL
var_dump($sth->a);

# this will return TypeError
# typed properties MUST have value before using them
# it can be null, see: 4_nullable_init.php
var_dump($sth->b);
