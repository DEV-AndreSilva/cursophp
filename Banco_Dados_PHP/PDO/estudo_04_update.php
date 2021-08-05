<?php
//criando a conexão
$conn=new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

//comando
$stmt= $conn->prepare("update tb_usuarios set deslogin=:LOGIN, dessenha=:PASSWORD where idusuario = :ID");

$login="Andre Luis";
$password="124578";
$id=1;

//passando os parametros
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID", $id);
//executa o comando
$stmt->execute();

echo "Alterado com sucesso";
