<?php

class ModelsRelatorioDti {

    private $Resultado;
    private $UserId;

    public function listarPorStatus($status) {
        $sql = "select * from vw_atividade_dti where ocstatusdti = '" . $status . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

}
