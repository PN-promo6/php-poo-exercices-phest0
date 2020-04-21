<?php

require_once('autoload.php');

use exo\Point;
use exo\Smartphone;
use exo\AdvancedString;

$smartphone1 = new Smartphone("honor", "play");
$smartphone1->sayHello();

$advancedString1 = new AdvancedString("bonjour");
$advancedString1->bold();
$advancedString1->italic();
$advancedString1->underline();
$advancedString1->upperCase();
$point1 = new Point(2, 3);
$point2 = new Point(5, 4);
$point1->__toString();
echo "distance p1 à p2: " . $point1->distance($point2);
