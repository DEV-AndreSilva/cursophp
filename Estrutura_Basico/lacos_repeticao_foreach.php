<?php

$meses=array(
    "Janeiro", "Fevereiro","Março",
    "Abril","Maio","Junho","Julho",
    "Agosto","Setembro","Outubro",
    "Novembro","Dezembro"
);

//percorrendo array
foreach($meses as $mes)
{
    echo "<br>$mes";
}

echo"<br>";
//percorrendo indice e array
foreach($meses as $index=>$mes)
{
    echo"<br>Indice: $index";
    echo"<br>Mês; $mes";
}
?>