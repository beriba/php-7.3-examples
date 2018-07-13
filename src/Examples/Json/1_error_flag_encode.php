<?php

# malformed utf char
$char = substr('𠜎', -2);

$a = json_encode($char);
# this will return FALSE
var_dump($a);

# this will throw JsonException
json_encode($char, JSON_THROW_ON_ERROR);

