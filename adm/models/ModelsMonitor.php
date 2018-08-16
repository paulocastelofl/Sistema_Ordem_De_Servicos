<?php

class ModelsMonitor {

    private $Resultado;
    private $UserId;
    
     public function listarEmProcessoMonitor() {
        $sql = "select * from vw_ocorrencia where ocstatus != 'Finalizado' and ocstatus != 'Recusado' and ocstatus != 'Executando' order by occod desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarExecutandoMonitor() {
        $sql = "select * from vw_atividade where ocstatus = 'Executando'  order by occod desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
}
