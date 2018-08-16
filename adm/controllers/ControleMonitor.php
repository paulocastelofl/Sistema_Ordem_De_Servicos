<?php

class ControleMonitor {

    private $Dados;
    private $UserId;

    public function index() {

        $ListarMonitor = new ModelsMonitor;
        $this->Dados = $ListarMonitor->listarEmProcessoMonitor();

        $ListarMonitorExe = new ModelsMonitor;
        $this->Dados1 = $ListarMonitorExe->listarExecutandoMonitor();

        $CarregarView = new ConfigView("monitor/Monitor", $this->Dados, $this->Dados1);
        $CarregarView->renderizarImpressao();
    }

}
