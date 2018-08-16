<?php

class ControleOcorrenciaDti {

    private $Dados;
    private $UserId;

    public function index() {

        if ($_SESSION['nivel'] == 1) {

            $ListarOcorrenciaDti = new ModelsOcorrenciaDti;
            $this->Dados = $ListarOcorrenciaDti->listarEmProcesso();

            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaDti", $this->Dados);

            $CarregarView->renderizar();
        } else if ($_SESSION['nivel'] == 3) {

            $ListarOcorrenciaDti = new ModelsOcorrenciaDti;
            $this->Dados = $ListarOcorrenciaDti->listarPorUsuario($_SESSION['nome']);


            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaUsuarioDti", $this->Dados);

            $CarregarView->renderizar();
            
        }else if ($_SESSION['nivel'] == 4) {

            $ListarOcorrenciaDti = new ModelsOcorrenciaDti;
            $this->Dados = $ListarOcorrenciaDti->listarEmProcesso();

            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaDti", $this->Dados);

            $CarregarView->renderizar();
        }
    }
    
     public function indexFechadas() {

            $ListarOcorrenciaDti = new ModelsOcorrenciaDti();
            $this->Dados = $ListarOcorrenciaDti->listarFinalizada();

            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaFechadaDti", $this->Dados);

            $CarregarView->renderizar();
    }
    
     public function indexRecusadas() {

            $ListarOcorrenciaDti = new ModelsOcorrenciaDti;
            $this->Dados = $ListarOcorrenciaDti->listarRecusada();

            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaDti", $this->Dados);

            $CarregarView->renderizar();
    }

    public function cadastrarOcorrenciaDti() {

        $ListarDepartamento = new ModelsDepartamento();
        $this->Dados = $ListarDepartamento->listar();

        $ListarTipoDti = new ModelsTipoDti();
        $this->Dados1 = $ListarTipoDti->listar();

        $CarregarView = new ConfigView("ocorrenciadti/CadastrarOcorrenciaDti", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

    public function salvarOcorrenciaDti() {

        $ocusucoddti = filter_input(INPUT_POST, 'ocusucoddti', FILTER_DEFAULT);
        $ocdepcoddti = filter_input(INPUT_POST, 'ocdepcoddti', FILTER_DEFAULT);
        $octipocoddti = filter_input(INPUT_POST, 'octipocoddti', FILTER_DEFAULT);
        $ocdescricaodti = filter_input(INPUT_POST, 'ocdescricaodti', FILTER_DEFAULT);
        $ocdatadti = filter_input(INPUT_POST, 'ocdatadti', FILTER_DEFAULT);
        $ochoradti = filter_input(INPUT_POST, 'ochoradti', FILTER_DEFAULT);
        $ocprioridadedti = filter_input(INPUT_POST, 'ocprioridadedti', FILTER_DEFAULT);
        $ocstatusdti = "Pendente";


        $Dados = [
            'ocusucoddti' => $ocusucoddti,
            'ocdepcoddti' => $ocdepcoddti,
            'octipcoddti' => $octipocoddti,
            'ocdescricaodti' => $ocdescricaodti,
            'ocdatadti' => $ocdatadti,
            'ochoradti' => $ochoradti,
            'ocprioridadedti' => $ocprioridadedti,
            'ocstatusdti' => $ocstatusdti
        ];

        //var_dump($Dados);

        $CadastrarOcorrenciaDti = new ModelsOcorrenciaDti();
        $CadastrarOcorrenciaDti->cadastrar($Dados);
        //var_dump($Dados);
    }

    public function visualizarDti($UserId = null) {
        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):
            $ListarIdOcorrenciaDti = new ModelsOcorrenciaDti();
            $this->Dados = $ListarIdOcorrenciaDti->listarPorId($UserId);

            $ListarFeedbackDti = new ModelsFeedbackDti();
            $this->Dados1 = $ListarFeedbackDti->listar($UserId);

            $ListarTipoDti = new ModelsTipoDti();
            $this->Dados2 = $ListarTipoDti->listar();

            $ListarTecnico = new ModelsTecnico();
            $this->Dados3 = $ListarTecnico->listar();

            $CarregarView = new ConfigView("ocorrenciadti/EditarOcorrenciaDti", $this->Dados, $this->Dados1, $this->Dados2, $this->Dados3);
            //var_dump($this->Dados);
            //echo $this->Dados[0]['grunome'];
            $CarregarView->renderizar();
        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }

    public function editarOcorrenciaDti() {

        $occoddti = filter_input(INPUT_POST, 'occoddti', FILTER_DEFAULT);
        $ocdtrespostadti = filter_input(INPUT_POST, 'ocdtrespostadti', FILTER_DEFAULT);
        $ochrrespostadti = filter_input(INPUT_POST, 'ochrrespostadti', FILTER_DEFAULT);
        $ocdtprevisaodti = filter_input(INPUT_POST, 'ocdtprevisaodti', FILTER_DEFAULT);
        $ocprioridadedti = filter_input(INPUT_POST, 'ocprioridadedti', FILTER_DEFAULT);
        $ocstatusdti = "Aberto";
        
        $Dados = [
            'ocdtrespostadti' => $ocdtrespostadti,
            'ochrrespostadti' => $ochrrespostadti,
            'ocdtprevisaodti' => $ocdtprevisaodti,
            'ocprioridadedti' => $ocprioridadedti,
            'ocstatusdti' => $ocstatusdti
        ];

        $AlterarOcorrenciaDti = new ModelsOcorrenciaDti();
        $AlterarOcorrenciaDti->alterar($Dados, $occoddti);
        //var_dump($Dados);
    }

    public function recusarOcorrenciaDti() {

        $occoddti = filter_input(INPUT_POST, 'occoddti', FILTER_DEFAULT);
        $ocstatusdti = "Recusado";

        $Dados = [
            'ocstatusdti' => $ocstatusdti
        ];

        $AlterarOcorrenciaDti = new ModelsOcorrenciaDti();
        $AlterarOcorrenciaDti->alterar($Dados, $occoddti);
        //var_dump($Dados);
    }

    public function executarOcorrenciaDti($id) {

        $ListarOcorrenciaDti = new ModelsOcorrenciaDti();
        $this->Dados = $ListarOcorrenciaDti->listarPorId($id);

        $ListarTecnico = new ModelsTecnico();
        $this->Dados1 = $ListarTecnico->listar();

        $CarregarView = new ConfigView("ocorrenciadti/ExecutarOcorrenciaDti", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

    public function finalizarOcorrenciaDti($id) {

        $ListarExecucaoDti = new ModelsExecucaoDti();
        $this->Dados = $ListarExecucaoDti->listarPorId($id);

        $ListarTecnico = new ModelsTecnico();
        $this->Dados1 = $ListarTecnico->listar();

        $CarregarView = new ConfigView("ocorrenciadti/FinalizarOcorrenciaDti", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

    public function finalizarExecucaoDti() {

        $atcoddti = filter_input(INPUT_POST, 'atcoddti', FILTER_DEFAULT);
        $atteccod1dti = filter_input(INPUT_POST, 'atteccod1dti', FILTER_DEFAULT);
        $atteccod2dti = filter_input(INPUT_POST, 'atteccod2dti', FILTER_DEFAULT);
        $atteccod3dti = filter_input(INPUT_POST, 'atteccod3dti', FILTER_DEFAULT);
        $atteccod4dti = filter_input(INPUT_POST, 'atteccod4dti', FILTER_DEFAULT);
        $atdescricaodti = filter_input(INPUT_POST, 'atdescricaodti', FILTER_DEFAULT);

        date_default_timezone_set('America/Manaus');
        $date = date('Y-m-d');
        $hora = date('H:i:s');

        if ($atteccod1dti == "Selecione") {
            $atteccod1dti = null;
        }
        if ($atteccod2dti == "Selecione") {
            $atteccod2dti = null;
        }
        if ($atteccod3dti == "Selecione") {
            $atteccod3dti = null;
        }
        if ($atteccod4dti == "Selecione") {
            $atteccod4dti = null;
        }
        if ($atdescricaodti == "") {
            $atdescricaodti = null;
        }

        $Dados = [
            'atdtfinaldti' => $date,
            'athrfinaldti' => $hora,
            'atteccod1dti' => $atteccod1dti,
            'atteccod2dti' => $atteccod2dti,
            'atteccod3dti' => $atteccod3dti,
            'atteccod4dti' => $atteccod4dti,
            'atdescricaodti' => $atdescricaodti
        ];

        //var_dump($Dados);
        
        $AlterarExecucaoDti = new ModelsExecucaoDti();
        $AlterarExecucaoDti->alterar($Dados, $atcoddti);
    }

    public function salvarExecucaoDti() {

        $atoccoddti = filter_input(INPUT_POST, 'atoccoddti', FILTER_DEFAULT);
        $atteccod1dti = filter_input(INPUT_POST, 'atteccod1dti', FILTER_DEFAULT);
        $atteccod2dti = filter_input(INPUT_POST, 'atteccod2dti', FILTER_DEFAULT);
        $atteccod3dti = filter_input(INPUT_POST, 'atteccod3dti', FILTER_DEFAULT);
        $atteccod4dti = filter_input(INPUT_POST, 'atteccod4dti', FILTER_DEFAULT);
        $atdescricaodti = filter_input(INPUT_POST, 'atdescricaodti', FILTER_DEFAULT);

        date_default_timezone_set('America/Manaus');
        $date = date('Y-m-d');
        $hora = date('H:i:s');

        if ($atteccod1dti == "Selecione") {
            $atteccod1dti = null;
        }
        if ($atteccod2dti == "Selecione") {
            $atteccod2dti = null;
        }
        if ($atteccod3dti == "Selecione") {
            $atteccod3dti = null;
        }
        if ($atteccod4dti == "Selecione") {
            $atteccod4dti = null;
        }
        if ($atdescricaodti == "") {
            $atdescricaodti = null;
        }

        $Dados = [
            'atdtiniciodti' => $date,
            'athriniciodti' => $hora,
            'atoccoddti' => $atoccoddti,
            'atteccod1dti' => $atteccod1dti,
            'atteccod2dti' => $atteccod2dti,
            'atteccod3dti' => $atteccod3dti,
            'atteccod4dti' => $atteccod4dti,
            'atdescricaodti' => $atdescricaodti
        ];
        //var_dump($Dados);

        $CadastrarExecucaoDti = new ModelsExecucaoDti();
        $CadastrarExecucaoDti->cadastrar($Dados);
    }

    public function avaliarOcorrenciaDti() {
        $occoddti = filter_input(INPUT_POST, 'occoddti', FILTER_DEFAULT);
        $ocavaliacaodti = filter_input(INPUT_POST, 'ocavaliacaodti', FILTER_DEFAULT);

        $Dados = [
            'ocavaliacaodti' => $ocavaliacaodti
        ];

        //echo $occod;
        //var_dump($Dados);

        $AlterarOcorrenciaDti = new ModelsOcorrenciaDti();
        $AlterarOcorrenciaDti->alterar($Dados, $occoddti);
    }

    public function impressaoDti($UserId) {

        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):

            $ListarOcorrenciaDti = new ModelsExecucaoDti();
            $this->Dados = $ListarOcorrenciaDti->listarPorId($UserId);

            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaImpressaoDti", $this->Dados);

            $CarregarView->renderizarImpressao();

        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }

}
