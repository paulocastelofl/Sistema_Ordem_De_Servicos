<?php

class ModelsOcorrencia {

    private $Resultado;
    private $UserId;

    public function listar() {
        $sql = "select * from vw_ocorrencia  order by occod desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    public function listarEmProcesso() {
        $sql = "select * from vw_ocorrencia where ocstatus != 'Finalizado' order by occod desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarFinalizada() {
        $sql = "select * from vw_ocorrencia where ocstatus = 'Finalizado'  order by occod desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarRecusada() {
        $sql = "select * from vw_ocorrencia where ocstatus = 'Recusada'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarPorUsuario($usuario) {
        $sql = "select * from vw_ocorrencia where usunome = '" . $usuario . "' order by occod desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $sql = "select * from vw_ocorrencia where occod = '" . $UserId . "' ";
        $visualizar = new ModelsRead();
        $visualizar->FullRead($sql);
        $this->Resultado = $visualizar->getResult();
        

        return $this->Resultado;
    }

    public function cadastrar($Dados) {
        sleep(1);

        $Cadastrar = new ModelsCreate();
        $Cadastrar->ExeCreate('ocorrencia', $Dados);

        if ($Cadastrar->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }

   public function listarPorId($id) {
        $sql = "select * from vw_ocorrencia where occod = '" . $id . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    public function alterar($Dados, $id) {
        sleep(1);

        $update = new ModelsUpdate();
        $update->ExeUpdate('ocorrencia', $Dados, "WHERE occod = :id", "id=" . $id . "");
        if ($update->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }
    
    

    function getResultado() {
        return $this->Resultado;
    }
}



