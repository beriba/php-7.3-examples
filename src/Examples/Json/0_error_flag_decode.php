<?php

$a = json_decode('{', true, 512);
# this will return NULL
var_dump($a);

# this will throw JsonException
json_decode('{', true, 512, JSON_THROW_ON_ERROR);

