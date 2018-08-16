<?php

class ModelsMonitorDti {

    private $Resultado;
    private $UserId;
    
     public function listarEmProcessoMonitor() {
        $sql = "select * from vw_ocorrencia_dti where ocstatusdti != 'Finalizado' and ocstatusdti != 'Recusado' and ocstatusdti != 'Executando' order by occoddti desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
     public function listarExecutandoMonitor() {
        $sql = "select * from vw_atividade_dti where ocstatusdti = 'Executando'  order by occoddti desc";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();

        return $this->Resultado;
    }
    
}
