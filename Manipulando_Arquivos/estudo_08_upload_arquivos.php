<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Enviar</button>

</form>

<?php

//Verifica se o método de requisição é o POST
if($_SERVER["REQUEST_METHOD"]==="POST")
{
    //Variavel super global que trata arquivos de upload
    $file= $_FILES["fileUpload"];

    //Verificando se o arquivo foi pego
    if($file["error"])
    {
        throw new Exception("Error: ".$file["error"]);
    }

    //Nome do diretório onde o arquivo sera salvo
    $dirUploads = "uploads";

    //Verifico se o diretório existe, se não ele é criado
    if(!is_dir("uploads"))
    {
        mkdir("uploads");
    }
    
    //Tenta mover o arquivo para o diretório que eu criei
    if(move_uploaded_file($file["tmp_name"],$dirUploads.DIRECTORY_SEPARATOR.$file["name"]))
    {
        echo "upload realizado com sucesso";
    }
    else
    {
        throw new Exception("Não foi possivel realizar o upload");
    }
}
?>