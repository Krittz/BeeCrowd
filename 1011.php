<?php

$r = fgets(STDIN);

$volume = number_format( (4/3) * 3.14159 * pow($r, 3), 3, '.', '');

echo "VOLUME = $volume\n";