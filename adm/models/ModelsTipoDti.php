<?php

class ModelsTipoDti {

    private $Resultado;
    private $UserId;

    public function listar() {
        $sql = "select * from tipo_ocorrencia_dti";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $sql = "select * from tipo_ocorrencia_dti where tipcoddti = '" . $UserId . "'";
        $visualizar = new ModelsRead();
        $visualizar->FullRead($sql);
        $this->Resultado = $visualizar->getResult();

        return $this->Resultado;
    }

    public function cadastrar($Dados) {
        sleep(1);

        $Cadastrar = new ModelsCreate();
        $Cadastrar->ExeCreate('tipo_ocorrencia_dti', $Dados);

        if ($Cadastrar->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }

   public function listarPorId($id) {
        $sql = "select * from tipo_ocorrencia_dti where tipcoddti = '" . $id . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    public function alterar($Dados, $id) {
        sleep(1);

        $update = new ModelsUpdate();
        $update->ExeUpdate('tipo_ocorrencia_dti', $Dados, "WHERE tipcoddti = :id", "id=" . $id . "");
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