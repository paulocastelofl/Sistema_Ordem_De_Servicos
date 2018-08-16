<?php

class ModelsExecucaoDti {

    private $Resultado;
    private $UserId;


    public function cadastrar($Dados) {
        sleep(1);

        $Cadastrar = new ModelsCreate();
        $Cadastrar->ExeCreate('atividade_dti', $Dados);

        if ($Cadastrar->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }


    public function alterar($Dados, $id) {
        sleep(1);

        $update = new ModelsUpdate();
        $update->ExeUpdate('atividade_dti', $Dados, "WHERE atcoddti = :id", "id=" . $id . "");
        if ($update->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }
    
    public function listarPorId($id) {
        $sql = "select * from vw_atividade_dti where occoddti = '" . $id . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
    

    function getResultado() {
        return $this->Resultado;
    }
}





