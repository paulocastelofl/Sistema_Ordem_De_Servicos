<?php

class ControleHome {

    private $Dados;
    private $UserId;

    public function index() {

        $ListarGraficoProd01 = new ModelsGrafico();
        $totalOcorrenciaProd01 = $ListarGraficoProd01->OcorrenciaPorProdução01();

        $ListarGraficoProd02 = new ModelsGrafico();
        $totalOcorrenciaProd02 = $ListarGraficoProd02->OcorrenciaPorProdução02();

        $ListarGraficoSmd = new ModelsGrafico();
        $totalOcorrenciaSmd = $ListarGraficoSmd->OcorrenciaPorSMD();

        $ListarGraficoAlmoxarifado = new ModelsGrafico();
        $totalOcorrenciaAlmoxarifado = $ListarGraficoAlmoxarifado->OcorrenciaPorAlmoxarifado();

        $ListarGraficoAreaTecnica = new ModelsGrafico();
        $totalOcorrenciaAreaTecnica = $ListarGraficoAreaTecnica->OcorrenciaPorAreaTecnia();

        $ListarGraficoEngenharia = new ModelsGrafico();
        $totalOcorrenciaEngenharia = $ListarGraficoEngenharia->OcorrenciaPorEngenharia();

        $ListarGraficoSubestoque = new ModelsGrafico();
        $totalOcorrenciaSubestoque = $ListarGraficoSubestoque->OcorrenciaPorSubestoque();

        $ListarGraficoqualidade = new ModelsGrafico();
        $totalOcorrenciaqualidade = $ListarGraficoqualidade->OcorrenciaPorQualidade();

        $ListarGraficoDTI = new ModelsGrafico();
        $totalOcorrenciaDTI = $ListarGraficoDTI->OcorrenciaPorDTI();

        $ListarGraficoCompras = new ModelsGrafico();
        $totalOcorrenciaCompras = $ListarGraficoCompras->OcorrenciaPorCompras();

        $ListarGraficoPCP = new ModelsGrafico();
        $totalOcorrenciaPCP = $ListarGraficoPCP->OcorrenciaPorPCP();

        $ListarGraficoRH = new ModelsGrafico();
        $totalOcorrenciaRH = $ListarGraficoRH->OcorrenciaPorRH();

        $ListarGraficoDP = new ModelsGrafico();
        $totalOcorrenciaDP = $ListarGraficoDP->OcorrenciaPorDP();

        $ListarGraficoGerencia = new ModelsGrafico();
        $totalOcorrenciaGerencia = $ListarGraficoGerencia->OcorrenciaPorGerencia();

        $ListarGraficoManutencao = new ModelsGrafico();
        $totalOcorrenciaManutencao = $ListarGraficoManutencao->OcorrenciaPorManutencao();
        
        $ListarGraficoSesmt = new ModelsGrafico();
        $totalOcorrenciaSesmt = $ListarGraficoSesmt->OcorrenciaPorSesmt();
        

        $this->Dados = [
            'prod01' => $totalOcorrenciaProd01,
            'prod02' => $totalOcorrenciaProd02,
            'smd' => $totalOcorrenciaSmd,
            'almox' => $totalOcorrenciaAlmoxarifado,
            'at' => $totalOcorrenciaAreaTecnica,
            'engenharia' => $totalOcorrenciaEngenharia,
            'subestoque' => $totalOcorrenciaSubestoque,
            'qualidade' => $totalOcorrenciaqualidade,
            'dti' => $totalOcorrenciaDTI,
            'compras' => $totalOcorrenciaCompras,
            'pcp' => $totalOcorrenciaPCP,
            'rh' => $totalOcorrenciaRH,
            'dp' => $totalOcorrenciaDP,
            'gerencia' => $totalOcorrenciaGerencia,
            'manutencao' => $totalOcorrenciaManutencao,
            'sesmt' => $totalOcorrenciaSesmt,
        ];
        
        
        $ListarGraficoProd01dti = new ModelsGraficoDti();
        $totalOcorrenciaProd01dti = $ListarGraficoProd01dti->OcorrenciaPorProdução01Dti();

        $ListarGraficoProd02dti = new ModelsGraficoDti();
        $totalOcorrenciaProd02dti = $ListarGraficoProd02dti->OcorrenciaPorProdução02Dti();

        $ListarGraficoSmddti = new ModelsGraficoDti();
        $totalOcorrenciaSmddti = $ListarGraficoSmddti->OcorrenciaPorSMDDti();

        $ListarGraficoAlmoxarifadodti = new ModelsGraficoDti();
        $totalOcorrenciaAlmoxarifadodti = $ListarGraficoAlmoxarifadodti->OcorrenciaPorAlmoxarifadoDti();

        $ListarGraficoAreaTecnicadti = new ModelsGraficoDti();
        $totalOcorrenciaAreaTecnicadti = $ListarGraficoAreaTecnicadti->OcorrenciaPorAreaTecniaDti();

        $ListarGraficoEngenhariadti = new ModelsGraficoDti();
        $totalOcorrenciaEngenhariadti = $ListarGraficoEngenhariadti->OcorrenciaPorEngenhariaDti();

        $ListarGraficoSubestoquedti = new ModelsGraficoDti();
        $totalOcorrenciaSubestoquedti = $ListarGraficoSubestoquedti->OcorrenciaPorSubestoqueDti();

        $ListarGraficoqualidadedti = new ModelsGraficoDti();
        $totalOcorrenciaqualidadedti = $ListarGraficoqualidadedti->OcorrenciaPorQualidadeDti();

        $ListarGraficoDTIdti = new ModelsGraficoDti();
        $totalOcorrenciaDTIdti = $ListarGraficoDTIdti->OcorrenciaPorDtiDti();

        $ListarGraficoComprasdti = new ModelsGraficoDti();
        $totalOcorrenciaComprasdti = $ListarGraficoComprasdti->OcorrenciaPorComprasDti();

        $ListarGraficoPCPdti = new ModelsGraficoDti();
        $totalOcorrenciaPCPdti = $ListarGraficoPCPdti->OcorrenciaPorPCPDti();

        $ListarGraficoRHdti = new ModelsGraficoDti();
        $totalOcorrenciaRHdti = $ListarGraficoRHdti->OcorrenciaPorRHDti();

        $ListarGraficoDPdti = new ModelsGraficoDti();
        $totalOcorrenciaDPdti = $ListarGraficoDPdti->OcorrenciaPorDPDti();

        $ListarGraficoGerenciadti = new ModelsGraficoDti();
        $totalOcorrenciaGerenciadti = $ListarGraficoGerenciadti->OcorrenciaPorGerenciaDti();

        $ListarGraficoManutencaodti = new ModelsGraficoDti();
        $totalOcorrenciaManutencaodti = $ListarGraficoManutencaodti->OcorrenciaPorManutencaoDti();
        
        $ListarGraficoSesmtdti = new ModelsGraficoDti();
        $totalOcorrenciaSesmtdti = $ListarGraficoSesmtdti->OcorrenciaPorSesmtDti();

       
         $this->Dados1 = [
            'prod01dti' => $totalOcorrenciaProd01dti,
            'prod02dti' => $totalOcorrenciaProd02dti,
            'smddti' => $totalOcorrenciaSmddti,
            'almoxdti' => $totalOcorrenciaAlmoxarifadodti,
            'atdti' => $totalOcorrenciaAreaTecnicadti,
            'engenhariadti' => $totalOcorrenciaEngenhariadti,
            'subestoquedti' => $totalOcorrenciaSubestoquedti,
            'qualidadedti' => $totalOcorrenciaqualidadedti,
            'dtidti' => $totalOcorrenciaDTIdti,
            'comprasdti' => $totalOcorrenciaComprasdti,
            'pcpdti' => $totalOcorrenciaPCPdti,
            'rhdti' => $totalOcorrenciaRHdti,
            'dpdti' => $totalOcorrenciaDPdti,
            'gerenciadti' => $totalOcorrenciaGerenciadti,
            'manutencaodti' => $totalOcorrenciaManutencaodti,
            'sesmtdti' => $totalOcorrenciaSesmtdti
        ];
         
         
        $CarregarView = new ConfigView("home/home", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

}
