<?php
    /*Métodos e atributos estáticos permitem que você
     os utilize sem uma representação(objeto) daquela classe*/

     class Documento
     {
         private $numero;

         public function getNumero()
         {
             return $this->numero;
         }

         public function setNumero($numero=null)
         {
             //se o resultado for verdadeiro troca o valor do CPF
             if(Documento::validaCPF($numero))
             $this->numero=$numero;

             else{
                 throw new Exception("CPF Informado não é valido");
             }
         }

         public static function validaCPF($cpf)
         {
             if(is_null($cpf))
             {
                 return false;
             }
             return true;
         }
     }

//instanciando um objeto da classe Documento
$cpf= new Documento();
$cpf->setNumero("15156165665");
var_dump($cpf->getNumero());

//É possivel chama-lo fora da classe sem instancia-la
var_dump(Documento::validaCPF("11161588658"))
?>