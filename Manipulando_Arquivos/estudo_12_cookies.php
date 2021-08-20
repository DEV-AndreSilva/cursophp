<?php
//Criando um array com dados
$data= array("nome"=>"Andre", "idade"=>19);

//Criando um cookie na máquina do usuário e definindo tempo de expiração como 1 hora
setcookie("cookie_user",json_encode($data),time()+60*60);

echo "Cookie criado com sucesso";