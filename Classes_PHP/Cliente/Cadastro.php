<?php

//namespace desse arquivo
namespace Cliente;

    class Cadastro extends \Cadastro
    {
        public function registrarVenda()
        {
            echo "Foi registrado uma venda: ".$this->getNome();
        }
    }

?>