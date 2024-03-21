<?php 
$input = $_GET['celsius'];

$celsius = floatval($input);

$fahrenheit = ($celsius * 9/5) + 32;

$fahrenheit = $celsius + 32  * 1.8;
echo "{$celsius} graden celsius = {$fahrenheit} graden Fahrenheit. <br/>";


