<?php declare(strict_types=1);

class Sth {
    public int $count;
}

$sth = new Sth();

# this will throw TypeError
$sth->count = '1';

