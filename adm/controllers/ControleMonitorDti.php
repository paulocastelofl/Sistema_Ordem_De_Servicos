<?php

class ControleMonitorDti {

    private $Dados;
    private $UserId;

    public function index() {

        $ListarMonitorDti = new ModelsMonitorDti;
        $this->Dados = $ListarMonitorDti->listarEmProcessoMonitor();
        
        $ListarMonitorDtiExe = new ModelsMonitorDti;
        $this->Dados1 = $ListarMonitorDtiExe->listarExecutandoMonitor();

        $CarregarView = new ConfigView("monitorDti/MonitorDti", $this->Dados, $this->Dados1);
        $CarregarView->renderizarImpressao();
        
    }

}
