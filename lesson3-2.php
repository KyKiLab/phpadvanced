<?php

use domains\mathmulti\Mathmulti;

include 'vendor/autoload.php';

$multi = new Mathmulti();

echo "First number: 5<br/>Second number: 6<br/>Their multiplier: ";

echo $multi->multi(5, 6);