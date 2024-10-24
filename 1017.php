<?php

$tempo = (int) fgets(STDIN);
$velocidade = (int) fgets(STDIN);

echo number_format(($velocidade * $tempo) / 12, '3', '.', '') . "\n"; 