<?php

class Usuario{
    private $idususario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario()
    {
        return $this->idususario;
    }

    public function setIdusuario($id)
    {
        $this->idususario=$id;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($login)
    {
        $this->deslogin = $login;
    }
    
    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($senha)
    {
        $this->dessenha=$senha;
    }
    
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }
    public function setDtcadastro($data)
    {
        $this->dtcadastro=$data;
    }

    /**
     * Pesquisa de Cadastro por ID
     *
     * @param integer $id
     * @return void
     */
    public function loadById($id)
    {
        $sql= new SQL();

        $result=$sql->select("select * from tb_usuarios where idusuario = :id", array(
            ":id"=>$id
        ));

        if(count($result)>0)
        {
            $row=$result[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }

    }
    
    /**
     * Retorna uma lista com todos os Usuários
     *
     * @return array $sql
     */
    public static function getList()
    {
        $sql = new SQL();
        $sql->select("select * from tb_usuarios order by deslogin");
        return $sql;
    }
    /**
     * Função chamada quando utilizado o Echo no objeto Usuario
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}