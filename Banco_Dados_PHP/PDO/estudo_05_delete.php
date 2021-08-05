<?php
//criando a conexão
$conn=new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

//comando
$stmt= $conn->prepare("delete from tb_usuarios where idusuario = :ID");

$id=2;

//passando os parametros
$stmt->bindParam(":ID", $id);

//executa o comando
$stmt->execute();

echo "Excluido com sucesso";
