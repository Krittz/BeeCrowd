<?php 

$km = fgets(STDIN);
$litros = fgets(STDIN);
$media = number_format(($km/$litros), 3, '.', '');
echo "$media km/l";