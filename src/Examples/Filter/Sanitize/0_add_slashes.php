<?php

# quote
$var1 = filter_var('"', FILTER_SANITIZE_ADD_SLASHES);

# apostrophe
$var2 = filter_var('\'', FILTER_SANITIZE_ADD_SLASHES);

# single backslash
$var3 = filter_var('\\', FILTER_SANITIZE_ADD_SLASHES);

# NUL char
$var4 = filter_var(chr(0), FILTER_SANITIZE_ADD_SLASHES);

# string(2) "\""
var_dump($var1);

# string(2) "\'"
var_dump($var2);

# string(2) "\\"
var_dump($var3);

# string(2) "\0"
var_dump($var4);

