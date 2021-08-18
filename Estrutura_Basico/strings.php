<?php

//strings
$nome= "André";
$nome2= 'Luis';

//interpolação de variaveis, o PHP identifica a variavel dentro da String
echo "ABC $nome";
echo"<br>";
echo 'ABC $nome <br>';

//funções para strings
$nome ="andre luis";
echo $nome.'<br>';

//muda toda palavra para letras maiusculas
echo strtoupper($nome).'<br>';
//muda toda palvra para letras minusculas
echo strtolower($nome).'<br>';
//muda a 1ª letra de cada palavra para maiuscula
echo ucwords($nome).'<br>';
//muda a 1ª letra da 1º palavra para maiuscula
echo ucfirst($nome);


//trocar informações no texto
$empresa = "Hcode";
$empresa=str_replace('o',"0", $empresa);
echo '<br>'.$empresa;
$empresa=str_replace('e',"3", $empresa);
echo '<br>'.$empresa;


$frase= "A repetição é a mãe da retenção";

//retorna a posição do valor indicado na string
$posicao= strpos($frase,"mãe");

//retorna o texto antes da posição indicada
$texto = substr($frase,0,$posicao);

echo"<br> o Texto completo é '$frase' e a palavra mãe está na posição $posicao";
echo"<br> o Texto antes da palavra mãe é: '$texto'";

//retorna o texto depois da posição indicada
$texto2 =substr($frase, $posicao + strlen("mãe"));

echo"<br> o Texto depois da palavra mãe é: '$texto2'";

echo "<br>";
$name ='Hcode Treinamentos';
$new=substr($name,0,strpos($name,'T')).'Cursos';
echo $new;
?>