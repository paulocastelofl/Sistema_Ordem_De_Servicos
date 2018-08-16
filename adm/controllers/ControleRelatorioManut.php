<?php

class ControleRelatorioManut {

    private $Dados;
    private $UserId;

    public function index() {

        $CarregarView = new ConfigView("relatoriomanut/RelatorioOcorrencia");

        $CarregarView->renderizar();
    }

    public function GerarRelatorio() {

        $status = filter_input(INPUT_GET, 'status', FILTER_DEFAULT);

        $listarPorStatus = new ModelsRelatorio();
        $this->Dados = $listarPorStatus->listarPorStatus($status);
        
        $CarregarView = new ConfigView("relatoriomanut/RelaFinalizado", $this->Dados);
        $CarregarView->renderizarImpressao();
    }

}
