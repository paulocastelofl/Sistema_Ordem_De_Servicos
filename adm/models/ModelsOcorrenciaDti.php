<?php

class ModelsOcorrenciaDti {

    private $Resultado;
    private $UserId;

    public function listar() {
        $sql = "select * from vw_ocorrencia_dti  order by occoddti desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    public function listarEmProcesso() {
        $sql = "select * from vw_ocorrencia_dti where ocstatusdti != 'Finalizado' and ocstatusdti != 'Recusado' order by occoddti desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarFinalizada() {
        $sql = "select * from vw_atividade_dti where ocstatusdti = 'Finalizado'  order by occoddti desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarRecusada() {
        $sql = "select * from vw_ocorrencia_dti where ocstatusdti = 'Recusada'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarPorUsuario($usuario) {
        $sql = "select * from vw_ocorrencia_dti where usunome = '" . $usuario . "' order by occoddti desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $sql = "select * from vw_ocorrencia_dti where occoddti = '" . $UserId . "'";
        $visualizar = new ModelsRead();
        $visualizar->FullRead($sql);
        $this->Resultado = $visualizar->getResult();
        

        return $this->Resultado;
    }

    public function cadastrar($Dados) {
        sleep(1);

        $Cadastrar = new ModelsCreate();
        $Cadastrar->ExeCreate('ocorrencia_dti', $Dados);

        if ($Cadastrar->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }

   public function listarPorId($id) {
        $sql = "select * from vw_ocorrencia_dti where occoddti = '" . $id . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    public function alterar($Dados, $id) {
        sleep(1);

        $update = new ModelsUpdate();
        $update->ExeUpdate('ocorrencia_dti', $Dados, "WHERE occoddti = :id", "id=" . $id . "");
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



