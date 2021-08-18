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


