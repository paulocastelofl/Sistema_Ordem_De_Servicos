<?php

class ModelsUsuario {

    private $Resultado;
    private $UserId;

    public function listar() {
        $sql = "select * from usuario";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $sql = "select * from usuario where usumatricula = '" . $UserId . "'";
        $visualizar = new ModelsRead();
        $visualizar->FullRead($sql);
        $this->Resultado = $visualizar->getResult();

        return $this->Resultado;
    }

    public function cadastrar($Dados) {
        sleep(1);

        $Cadastrar = new ModelsCreate();
        $Cadastrar->ExeCreate('usuario', $Dados);

        if ($Cadastrar->getResult()):
            echo 1;
        else:
            echo 2;
        endif;
    }
    
    public function alterar($Dados, $id) {
        sleep(1);

        $update = new ModelsUpdate();
        $update->ExeUpdate('usuario', $Dados, "WHERE usucod = :id", "id=" . $id . "");
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
