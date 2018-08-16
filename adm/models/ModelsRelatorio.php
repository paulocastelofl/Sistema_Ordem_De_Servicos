<?php

class ModelsRelatorio {

    private $Resultado;
    private $UserId;

    public function listarPorStatus($status) {
        $sql = "select * from vw_atividade where ocstatus = '" . $status . "'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }

}
