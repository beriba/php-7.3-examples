<?php declare(strict_types=1);

class Sth {
    public int $count;
}

$sth = new Sth();
$sth->count = 1;

# this will return int(1)
var_dump($sth->count);
