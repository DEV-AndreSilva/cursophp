<?php

//Laço de repetição For, repita enquanto a condição for verdadeira
//Valor inicial, condição de repetição , incremento ou decremento
for($contador=0;$contador<10;$contador++)
{
    echo $contador."<br>";
}

echo"<br>";

for($i=0; $i<1000;$i+=5)
{
    echo" $i";
    //para a execução e pula para próxima repetição
    if($i===0)
    continue;

    //pula uma linha se o resto da divisão do valor atual por 100 for 0
    if($i%100==0)
    {
        echo"<br>";
    }

    //para a execução do loop
    if($i>750)
    break;
}


//exemplo select dinamico usando laço de repetição FOR
echo "<br>";
echo  "<select>";
for ($i=date("Y");$i>date("Y")-100; $i-=5)
{
    echo '<option value="'.$i.'">'.$i.'</option>';
}
echo  "</select>";
?>