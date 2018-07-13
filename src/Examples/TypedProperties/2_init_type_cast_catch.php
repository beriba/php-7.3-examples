<?php

try {
    class Sth {
        public $a = "0"; # type not set
    
        # this will throw Fatal error at compile time
        # Note that strict_types are not set!
        public int $b = "1";
    }
} catch (Throwable $t) {
    # this won't be executed because the error was thown
    # at compile time
    var_dump($t->getMessage());
}
