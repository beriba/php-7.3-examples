<?php

class Sth {
    public ?int $a = null;
}

$sth = new Sth();

# this will return NULL
var_dump($sth->a);
