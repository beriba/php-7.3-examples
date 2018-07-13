<?php

class Sth {
    public $a = "0"; # type not set

    # this will throw Fatal error at compile time
    # Note that strict_types are not set!
    public int $b = "1";
}

