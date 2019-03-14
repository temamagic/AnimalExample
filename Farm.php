<?php

require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Animals/Pig.php';
require_once __DIR__ . '/Animals/Cow.php';

use farm\animals\Pig;
use farm\animals\Cow;

$pig = new Pig();
$cow = new Cow();

echo sprintf('Pig says: %s', $pig->say()) . PHP_EOL;
echo sprintf('Cow says: %s', $cow->say()) . PHP_EOL;
