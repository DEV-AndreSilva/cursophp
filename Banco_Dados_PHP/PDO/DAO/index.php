<?php
require_once("config.php");

$obUser= new Usuario();
$obUser->loadById(1);
echo $obUser;