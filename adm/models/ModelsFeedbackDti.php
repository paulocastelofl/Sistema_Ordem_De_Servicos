<?php

class ModelsFeedbackDti {

    private $Resultado;
    private $UserId;

    public function listar($id) {
         $sql = "select * from vw_feedback_dti where occoddti = '" . $id . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $sql = "select * from from vw_feedback_dti where feedcoddti = '" . $UserId . "'";
        $visualizar = new ModelsRead();
        $visualizar->FullRead($sql);
        $this->Resultado = $visualizar->getResult();

        return $this->Resultado;
    }

    public function cadastrar($Dados) {
        sleep(1);

        $Cadastrar = new ModelsCreate();
        $Cadastrar->ExeCreate('feedback_dti', $Dados);

        if ($Cadastrar->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }
    
     public function excluir($id) {
        sleep(1);
        
        $Excluir = new ModelsDelete();
        $Excluir->executar("DELETE FROM feedback_dti WHERE  feedcoddti = '$id'");
        
        if ($Excluir->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }

   public function listarPorId($id) {
        $sql = "select * from from vw_feedback_dti where feedcoddti = '" . $id . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    public function alterar($Dados, $id) {
        sleep(1);

        $update = new ModelsUpdate();
        $update->ExeUpdate('feedback_dti', $Dados, "WHERE feedcoddti = :id", "id=" . $id . "");
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




