<?php
//Nome dos diretórios que serão criados
$dir1="Pasta_01";
$dir2="Pasta_02";

//Se os diretórios não existirem são criados
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

//Arquivo de teste que será movido de um diretório para o outro
$filename= "Readme.txt";

/**
 * Função que verifica se o arquivo existe no local indicado
 *
 * @param string $dir
 * @param string $filename
 * @return bool
 */
function arquivoExiste($dir,$filename)
{
    return file_exists($dir.DIRECTORY_SEPARATOR.$filename);
}

//Verifico se o arquivo existe em alguma das pastas, se não existir ele é criado na pasta 01
if(!arquivoExiste($dir1,$filename) && !arquivoExiste($dir2,$filename))
{
    $file= fopen($dir1.DIRECTORY_SEPARATOR.$filename,"w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

//Se o arquivo existir na pasta 01 movo ele para a pasta 2
if(arquivoExiste($dir1,$filename))
{
    rename($dir1.DIRECTORY_SEPARATOR.$filename,$dir2.DIRECTORY_SEPARATOR.$filename);
    echo "Arquivo movido com sucesso da Pasta_01 para a Pasta_02";

}
//Se o arquivo existir na pasta 02 movo ele para a pasta 1
else
{
    rename($dir2.DIRECTORY_SEPARATOR.$filename,$dir1.DIRECTORY_SEPARATOR.$filename);
    echo "Arquivo movido com sucesso da Pasta_02 para a Pasta_01";
}



?>