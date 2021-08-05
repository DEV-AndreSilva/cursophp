<?php
//criando a conexão
$conn=new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

//comando
$stmt= $conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(:LOGIN,:PASSWORD)");
$login="Andre";
$password="987654";

//passando os parametros
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$teste2="teste2";
//executa o comando
$stmt->execute();

?>