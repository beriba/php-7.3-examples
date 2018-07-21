<?php

$datetimeimmutable = new DateTimeImmutable();

$datetime = DateTime::createFromImmutable($datetimeimmutable);

# below will output DateTime object
var_dump($datetime);

