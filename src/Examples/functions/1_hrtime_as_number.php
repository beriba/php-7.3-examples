<?php

# doc: http://php.net/manual/en/function.hrtime.php

$hrt = hrtime(true);

# nanoseconds from arbitrary point in time
# int   - on 64-bit systems
# float - on 32-bit systems
var_dump($hrt);

