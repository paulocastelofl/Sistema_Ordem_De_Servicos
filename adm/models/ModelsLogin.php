<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelsLogin
 *
 * @author paulocastelo
 */
class ModelsLogin {

    private $Dados;
    private $Resultado;
    private $Msg;
    private $RowCount;

    function getResultado() {
        return $this->Resultado;
    }

    function getMsg() {
        return $this->Msg;
    }

    function getRowCount() {
        return $this->RowCount;
    }

    public function logar(array $Dados) {
        $this->Dados = $Dados;
        $this->validar();
        
        //var_dump($this->Dados);
        if ($this->Resultado):
            $sql = "select * from usuario where usulogin = '".$this->Dados['email']."' and ususenha = '".$this->Dados['password']."'";
            $Listar = new ModelsRead();
            $Listar->fullread($sql);
            
            $nlinhas = $Listar->getRowCount();
            
            if($nlinhas>0):
                //var_dump($Listar->getResult());
                $this->Resultado = $Listar->getResult();
                $this->Msg = "<div class = 'alert alert-danger'>Login e/ou password incorretos !</div>";
            else:
            $this->Resultado = false;
            $this->Msg = "<div class = 'alert alert-danger'>Login e/ou password incorretos !</div>";
            endif;
            
            
        endif;
    }

    public function validar() {
        $this->Dados = array_map('strip_tags', $this->Dados);
        $this->Dados = array_map('trim', $this->Dados);

        if (in_array('', $this->Dados)):
            $this->Dados['password'] = md5($this->Dados['password']);
            $this->Resultado = false;
            $this->Msg = "<div class = 'alert alert-danger'>Login e/ou password incorretos !</div>";
        else:
            $this->Dados['password'] = md5($this->Dados['password']);
            $this->Resultado = true;

        endif;
    }

}
