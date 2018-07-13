<?php

# malformed utf char
$char = substr('𠜎', -2);

try {
    json_encode($char, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    # this will output "Malformed UTF-8 characters ..."
    var_dump($e->getMessage());
}

