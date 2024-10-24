<?php
$p1 = explode(" ", fgets(STDIN));
$p2 = explode(" ", fgets(STDIN));
$x1 = $p1[0];
$x2 = $p2[0];
$y1 = $p1[1];
$y2 = $p2[1];

echo number_format(sqrt((pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2))), 4, '.', '') . "\n";
