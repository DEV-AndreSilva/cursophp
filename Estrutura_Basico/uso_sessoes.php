<?php

//recuperando valores pelo id da sessao
session_id('ho419ah19o4o9cii3vo4a5mi2h');

session_start();

//Limpando valor da sessão
session_unset();

//Destruindo a sessão após isso é necessário iniciar a sessão novamente
session_destroy();

session_start();
$_SESSION['sobrenome']="Silva";

//Exibindo valor na tela
echo $_SESSION['sobrenome']."<br>";

//id de sessão  - Identificador da sessão ativa no momento
//ele é unico para aquele momento entre a maquina e o servidor
echo(session_id());


//Gerar um novo ID de sessão
//session_regenerate_id();
echo "<br>".session_id();
?>