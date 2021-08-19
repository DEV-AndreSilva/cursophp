<?php

//escaneia o diretorio
$images= scandir("images");
$data = array();

//percorrendo arquivos do diretório
foreach($images as $img)
{
    //ignorando arquivos . e ..
    if(!in_array($img,array(".","..")))
    {
        //recebendo as informações dos arquivos
        $filename="images".DIRECTORY_SEPARATOR.$img; //nome 
        $info = pathinfo($filename); //path
        $info["size"]=filesize($filename); //tamanho
        $info["type"]=filetype($filename); //tipo
        $info["owner"]=fileowner($filename); //se sou dono ou não
        $info["last_access"]=date("d/m/Y H:i:s",fileatime($filename)); //data do ultimo acesso
        $info["modified"]=date("d/m/Y H:i:s",filemtime($filename)); //data da ultima modificação
        $info["url"]="http://localhost/Estudo/Curso_PHP7_Udemy/Manipulando_Arquivos/".$filename; //caminho completo do arquivo
        
        //criando um array com as informações dos arquivos da pasta images
        array_push($data,$info);
    }
}

echo json_encode($data);