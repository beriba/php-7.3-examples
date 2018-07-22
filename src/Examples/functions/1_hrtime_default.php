<?php

# doc: http://php.net/manual/en/function.hrtime.php

$hrt = hrtime();

# int - seconds from arbitrary point in time
var_dump($hrt[0]);

# int - nanoseconds which give more precision
# to the seconds above
# this number does NOT replace seconds
var_dump($hrt[1]);

