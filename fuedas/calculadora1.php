<?php

require 'calculadora.php';

$calc = new Calculadosra();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "Total: " . $calc->total;

$calc->clear();

?>