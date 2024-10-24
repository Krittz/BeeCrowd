<?php
$funcionario = fgets(STDIN);
$horas = fgets(STDIN);
$valor = fgets(STDIN);
$salary = number_format(($horas * $valor), 2, '.', '');

echo "NUMBER = $funcionario";
echo "SALARY = U$ $salary\n";

?>
