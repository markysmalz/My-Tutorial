<?php

require 'Collection.php';

$c = new Collection();
$c->add('foo');
$c->add('bar');

$c->baz = 'qux';

echo print_r($c->all());