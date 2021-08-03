<?php
//incluindo arquivos de configuração
require_once ("config.php");

use Cliente\Cadastro;

$obCadastro = new Cadastro();
$obCadastro->setNome("Andre Luis da Silva");
$obCadastro->setEmail("andre@gmail.com");
$obCadastro->setSenha("123456");

$obCadastro->registrarVenda();
//echo $obCadastro;
