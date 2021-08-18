<?php
require_once("config.php");


//carrega 1 usuário pelo seu ID
$obUser= new Usuario();
$obUser->loadById(1);
echo $obUser;


//Carrega uma lista de Usuários
$listaUsuarios=Usuario::getList();
echo $listaUsuarios;

//Carrega uma lista de Usuários 
$listaOrdenada=Usuario::search("Andre");
echo $listaOrdenada;


//verifica se o login do usuário é valido
$usuario = new Usuario();
$usuario->login("Andre",987654);
echo $usuario;


//inserindo novo usuário
$aluno = new Usuario("Julio Lopes","julio@email.com");
$aluno->insert();
echo $aluno;


//alterando usuário
$usuario_alterar= new Usuario();
$usuario_alterar->loadById(11);
$usuario_alterar->update("Julio Pereira", "julio");
echo $usuario_alterar;


//Deletando um usuário
$usuario_deletar = new Usuario("joao maicom","jão");
$usuario_deletar->insert();
$usuario_deletar->delete();
echo $usuario_deletar;
