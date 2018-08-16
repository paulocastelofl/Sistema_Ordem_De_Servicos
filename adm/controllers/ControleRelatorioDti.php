<?php

class ControleRelatorioDti {

    private $Dados;
    private $UserId;

    public function index() {

        $CarregarView = new ConfigView("relatoriodti/RelatorioOcorrenciaDti");

        $CarregarView->renderizar();
    }

    public function GerarRelatorioDti() {

        $status = filter_input(INPUT_GET, 'status', FILTER_DEFAULT);

        if ($status == "Finalizado" || $status == "Executando") {

            $listarPorStatus = new ModelsRelatorioDti();
            $this->Dados = $listarPorStatus->listarPorStatus($status);

            $CarregarView = new ConfigView("relatoriodti/RelaFinalizadoDti", $this->Dados);
            $CarregarView->renderizarImpressao();
            
        } elseif ($status == "Aberto" || $status == "Recusado") {
            
            $listarPorStatus = new ModelsRelatorioDti();
            $this->Dados = $listarPorStatus->listarPorStatusAberto($status);

            $CarregarView = new ConfigView("relatoriodti/RelaAbertoRecusadoDti", $this->Dados);
            $CarregarView->renderizarImpressao();
        }
    }

}
