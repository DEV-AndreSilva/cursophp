<?php
//Utilizando da biblioteca do PHPmailer para estudar envio de Emails com PHP

//Usando a classe do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;

//inclusão dos arquivos de autoload e credenciais
require 'vendor/autoload.php';
require 'config.php';


//Instanciando a classe
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Desabilitando Debug
$mail->SMTPDebug = 0;

//Hostname do servidor
$mail->Host = 'smtp.gmail.com';


//Definindo número da porta SMTP
$mail->Port = 587;

//Definindo tipo de mecanisnmo de criptografia
$mail->SMTPSecure = "tls";

//Definindo se devemos usar autenticação SMTP
$mail->SMTPAuth = true;

//Definindo email do usuário
$mail->Username = USER;

//Definindo senha do usuário
$mail->Password = PASSWORD;

//Definindo origem do email
$mail->setFrom(USER, 'Teste email andre');


//Definindo quem recebera o email
$mail->addAddress('andreluis2608@gmail.com', 'Andre');

//Definindo assunto do email
$mail->Subject = utf8_decode('PHPMailer Teste André');

//Convertendo arquivo HTML como corpo do email
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Altbody do email
$mail->AltBody = 'Esse é o altbody';

//Anexando arquivo de imagem
//$mail->addAttachment('images/phpmailer_mini.png');

//Enviando email
if (!$mail->send()) {
    echo 'Falha ao enviar email: ' . $mail->ErrorInfo;
} else {
    echo 'Email enviado!';

}

