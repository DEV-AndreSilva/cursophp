<?php

$dt= new DateTime();

//data atual
echo '<br>'.$dt->format("d/m/Y h:i:s");

//periodo
$periodo=new DateInterval('P15D');

//adicionando periodo de 15 dias
$dt->add($periodo);

//15 dias a partir de hoje
echo '<br>'.$dt->format("d/m/Y h:i:s");
?>