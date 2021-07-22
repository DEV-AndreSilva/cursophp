<?php
//spaceship

$a=50;
$b=35;
//primeiro valor é o maior retorna 1
var_dump($a <=> $b);

$a=50;
$b=50;
//valores são iguais retorna 0
var_dump($a <=> $b);

$a=50;
$b=60;
//segundo valor é o maior retorna -1
var_dump($a <=> $b);

echo"<br>";

$valorA=null;
$valorB=null;
$valorC=12;

//Null coalescing
// se o o valor indicado em $a for nulo usa o valor em indicado em $b, se o valor indicado em $b for nulo usa o valor indicado em $C
echo $valorA ?? $valorB ?? $valorC




?>