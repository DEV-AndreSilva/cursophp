<?php
require_once("config.php");

//carrega 1 usuário pelo seu ID
$obUser= new Usuario();
$obUser->loadById(1);
echo $obUser;

//Carrega uma lista de Usuários
$listaUsuarios=Usuario::getList();
echo json_encode($listaUsuarios);