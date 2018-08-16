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

        if ($status == "Finalizado"||$status == "Executando") {
            $listarPorStatus = new ModelsRelatorio();
            $this->Dados = $listarPorStatus->listarPorStatus($status);

            $CarregarView = new ConfigView("relatoriomanut/RelaFinalizado", $this->Dados);
            $CarregarView->renderizarImpressao();
            
        } elseif ($status == "Recusado") {
            $listarPorStatus = new ModelsRelatorio();
            $this->Dados = $listarPorStatus->listarPorStatusRecusado($status);
            
            //var_dump($this->Dados);

            $CarregarView = new ConfigView("relatoriomanut/RelaAbertoRecusado", $this->Dados);
            $CarregarView->renderizarImpressao();
            
        }elseif ($status == "Aberto") {
            $listarPorStatus = new ModelsRelatorio();
            $this->Dados = $listarPorStatus->listarPorStatusAberto($status);

            $CarregarView = new ConfigView("relatoriomanut/RelaAbertoRecusado", $this->Dados);
            $CarregarView->renderizarImpressao();
        }
    }

}
