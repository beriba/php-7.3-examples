<?php

try {
    json_decode('{', true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    # this will output "Syntax error"
    var_dump($e->getMessage());
}

