<?php
 
 $nome= "Andre";


  function teste()
 {
     //variavel não exite nesse escopo
    global $nome;
    echo $nome;
 }
 
 function teste2($nome)
 {
    echo $nome;
 } 

 //executante testes

 teste();
 teste2($nome);

 ?>