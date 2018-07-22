<?php

# doc: http://php.net/manual/en/function.is-countable.php

# bool(true)
var_dump(is_countable([1, 2, 3]));

# bool(true)
var_dump(is_countable(new ArrayIterator(['foo', 'bar', 'baz'])));

# bool(true)
var_dump(is_countable(new ArrayIterator()));

# bool(false)
var_dump(is_countable(new stdClass()));

# bool(false)
var_dump(is_countable(1));

# bool(false)
var_dump(is_countable(true));

# bool(false)
var_dump(is_countable(null));

