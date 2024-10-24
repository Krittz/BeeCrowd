<?php
$vendedor = fgets(STDIN);
$salario = fgets(STDIN);
$vendas = fgets(STDIN);


$total = number_format(($salario + ($vendas * 0.15)), 2, ".", "");

echo "TOTAL = R$ $total\n";
