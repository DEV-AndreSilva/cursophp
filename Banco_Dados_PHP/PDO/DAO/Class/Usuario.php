<?php

class Usuario{

    //atributos da classe Usuário
    private $idususario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //método acessor
    public function getIdusuario()
    {
        return $this->idususario;
    }

    //método modificador
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
     * Método de pesquisa de Cadastro por ID
     *
     * @param integer $id
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
     * Método que retorna uma lista com todos os Usuários
     *
     * @return string $result
     */
    public static function getList()
    {
        $sql = new SQL();
        $result=$sql->select("select * from tb_usuarios order by deslogin");
        return json_encode($result);
    }

    /**
     * Método de busca de Login por parametro
     *
     * @param string $login
     * @return string $result
     */
    public static function search(string $login)
    {
        $sql= new SQL();
        $result=$sql->select("Select * from tb_usuarios where deslogin LIKE :SEARCH",array(
            ':SEARCH'=>"%".$login."%"
        ));
        return json_encode($result);
    }

    public function login($login, $password)
    {
        $sql= new SQL();

        $result=$sql->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            "PASSWORD"=>$password
        ));

        if(count($result)>0)
        {
            $row=$result[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
        else{
            throw new Exception("Login e ou Senha invalidos !");
        }

    }


    /**
     * Método chamado quando utilizado o Echo no objeto Usuario
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