<?php
//incluindo o arquivo onde está a função
//tenta funcionar mesmo que o arquivo não exista ou esteja com problemas
// include "funcoes.php";

//include path, inclui arquivos de um arquivo do servidor interno de inclusão do próprio PHP
//pasta que pode ser mapeada


//Obriga que o arquivo exista e que ele esteja funcionando corretamente
//caso essa obrigação não seja atendida gera um erro fatal
require "funcoes.php";

//inclui o arquivo apenas uma vez, caso ele ja esteja incluido não é chamado, evitando possiveis erros por chamada repetida
require_once "funcoes.php";

// ../ (sobe uma pasta para subir um diretório)

$resultado=somar(10,20);
echo $resultado;

?>