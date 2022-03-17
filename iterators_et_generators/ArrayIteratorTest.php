<?php

$a = new ArrayIterator();
$a[] = "coucou";
$a[] = "hello";

echo sprintf("%s %s %d", $a[0], $a[1],$a->count());