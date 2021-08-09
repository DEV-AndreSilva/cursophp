<?php
//executando update e delete com segurança

//criando a conexão
$conn=new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

//inicia a transação
$conn->beginTransaction();

//comando
$stmt= $conn->prepare("delete from tb_usuarios where idusuario = ?");

$id=5;

//executa o comando e passa o parametro pelo array interno
$stmt->execute(array($id));

//comando de desfazer
# $conn->rollBack();

//comando de confirmar a ação
$conn->commit();