<?php

//função date (parametros case sensitive - documentação do PHP)
echo date("d/m/Y h:i:s");

//converte uma string para timestamp e aceita expressoes
$timeStamp=strtotime("2001-08-26");
echo'<br> Meu nascimento foi em: '.date('l d/m/Y',$timeStamp);

//agora
$timeStamp=strtotime("now");
echo'<br> Agora é: '.date('l d/m/Y',$timeStamp);

// +1 semana
$timeStamp=strtotime("+1 week");
echo'<br> Daqui uma semana será: '.date('l d/m/Y',$timeStamp);

//+2 dias
$timeStamp=strtotime("+2 days");
echo'<br> Daqui dois dias será: '.date('l d/m/Y',$timeStamp);

//////////////////////////  Definindo regionalidade    ///////////////////////

//mude a localização para portugues
setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese-brazilian");

//função strftime (parecido com a função date)
echo "<br>Hoje é: ".utf8_encode(strftime("%A  %B "));

echo "<br>Hoje é: ".utf8_encode(strftime("%d/%m/%g"));

echo "<br>Hora atual: ".utf8_encode(strftime("%H:%M:%S"));

?>