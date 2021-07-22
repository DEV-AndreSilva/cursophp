<?php

//criar  a variavel na URL para teste  inserir na URL da página ?a=256
//URI é os pedaços da URL

//cast da variavel (transformando a string recebida em um numero inteiro)
$numero = (int)$_GET["a"];
var_dump($numero);

echo "<BR>";
//ip do ambiente
$ip=$_SERVER['REMOTE_ADDR'];

$script=$_SERVER['SCRIPT_NAME'];

echo $ip."<br>";
echo $script;

?>