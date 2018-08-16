<?php

class ControleOcorrencia {

    private $Dados;
    private $UserId;

    public function index() {

        if ($_SESSION['nivel'] == 1) {

            $ListarOcorrencia = new ModelsOcorrencia;
            $this->Dados = $ListarOcorrencia->listarEmProcesso();

            $CarregarView = new ConfigView("ocorrencia/Ocorrencia", $this->Dados);

            $CarregarView->renderizar();
        } else if ($_SESSION['nivel'] == 3) {

            $ListarOcorrencia = new ModelsOcorrencia;
            $this->Dados = $ListarOcorrencia->listarPorUsuario($_SESSION['nome']);


            $CarregarView = new ConfigView("ocorrencia/OcorrenciaUsuario", $this->Dados);

            $CarregarView->renderizar();
            
        }else if ($_SESSION['nivel'] == 2) {

            $ListarOcorrencia = new ModelsOcorrencia;
            $this->Dados = $ListarOcorrencia->listarEmProcesso();

            $CarregarView = new ConfigView("ocorrencia/Ocorrencia", $this->Dados);

            $CarregarView->renderizar();
        }else if ($_SESSION['nivel'] == 4) {

            $ListarOcorrencia = new ModelsOcorrencia;
            $this->Dados = $ListarOcorrencia->listarEmProcesso();

            $CarregarView = new ConfigView("ocorrenciadti/OcorrenciaDti", $this->Dados);

            $CarregarView->renderizar();
        }
    }
    
     public function indexFechadas() {

            $ListarOcorrencia = new ModelsOcorrencia;
            $this->Dados = $ListarOcorrencia->listarFinalizada();

            $CarregarView = new ConfigView("ocorrencia/OcorrenciaFechada", $this->Dados);

            $CarregarView->renderizar();
    }
    
     public function indexRecusadas() {

            $ListarOcorrencia = new ModelsOcorrencia;
            $this->Dados = $ListarOcorrencia->listarRecusada();

            $CarregarView = new ConfigView("ocorrencia/Ocorrencia", $this->Dados);

            $CarregarView->renderizar();
    }

    public function cadastrarOcorrencia() {

        $ListarDepartamento = new ModelsDepartamento();
        $this->Dados = $ListarDepartamento->listar();

        $ListarTipo = new ModelsTipo();
        $this->Dados1 = $ListarTipo->listar();

        $CarregarView = new ConfigView("ocorrencia/CadastrarOcorrencia", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

    public function salvarocorrencia() {

        $ocusucod = filter_input(INPUT_POST, 'ocusucod', FILTER_DEFAULT);
        $ocdepcod = filter_input(INPUT_POST, 'ocdepcod', FILTER_DEFAULT);
        $octipocod = filter_input(INPUT_POST, 'octipocod', FILTER_DEFAULT);
        $ocdescricao = filter_input(INPUT_POST, 'ocdescricao', FILTER_DEFAULT);
        $ocdata = filter_input(INPUT_POST, 'ocdata', FILTER_DEFAULT);
        $ochora = filter_input(INPUT_POST, 'ochora', FILTER_DEFAULT);
        $ocprioridade = filter_input(INPUT_POST, 'ocprioridade', FILTER_DEFAULT);
        $ocstatus = "Pendente";


        $Dados = [
            'ocusucod' => $ocusucod,
            'ocdepcod' => $ocdepcod,
            'octipcod' => $octipocod,
            'ocdescricao' => $ocdescricao,
            'ocdata' => $ocdata,
            'ochora' => $ochora,
            'ocprioridade' => $ocprioridade,
            'ocstatus' => $ocstatus
        ];

        //var_dump($Dados);

        $CadastrarOcorrencia = new ModelsOcorrencia();
        $CadastrarOcorrencia->cadastrar($Dados);
        //var_dump($Dados);
    }

    public function visualizar($UserId = null) {
        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):
            $ListarIdOcorrencia = new ModelsOcorrencia();
            $this->Dados = $ListarIdOcorrencia->listarPorId($UserId);

            $ListarFeedback = new ModelsFeedback();
            $this->Dados1 = $ListarFeedback->listar($UserId);

            $ListarTipo = new ModelsTipo;
            $this->Dados2 = $ListarTipo->listar();

            $ListarTecnico = new ModelsTecnico();
            $this->Dados3 = $ListarTecnico->listar();

            $CarregarView = new ConfigView("ocorrencia/EditarOcorrencia", $this->Dados, $this->Dados1, $this->Dados2, $this->Dados3);
            //var_dump($this->Dados);
            //echo $this->Dados[0]['grunome'];
            $CarregarView->renderizar();
        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }

    public function editarOcorrencia() {

        $occod = filter_input(INPUT_POST, 'occod', FILTER_DEFAULT);
        $ocdtresposta = filter_input(INPUT_POST, 'ocdtresposta', FILTER_DEFAULT);
        $ochrresposta = filter_input(INPUT_POST, 'ochrresposta', FILTER_DEFAULT);
        $ocdtprevisao = filter_input(INPUT_POST, 'ocdtprevisao', FILTER_DEFAULT);
        $ocprioridade = filter_input(INPUT_POST, 'ocprioridade', FILTER_DEFAULT);
        $ocstatus = "Aberto";
        
        $Dados = [
            'ocdtresposta' => $ocdtresposta,
            'ochrresposta' => $ochrresposta,
            'ocdtprevisao' => $ocdtprevisao,
            'ocprioridade' => $ocprioridade,
            'ocstatus' => $ocstatus
        ];

        $AlterarOcorrencia = new ModelsOcorrencia();
        $AlterarOcorrencia->alterar($Dados, $occod);
        //var_dump($Dados);
    }

    public function recusarOcorrencia() {

        $occod = filter_input(INPUT_POST, 'occod', FILTER_DEFAULT);
        $ocstatus = "Recusado";

        $Dados = [
            'ocstatus' => $ocstatus
        ];

        $AlterarOcorrencia = new ModelsOcorrencia();
        $AlterarOcorrencia->alterar($Dados, $occod);
        //var_dump($Dados);
    }

    public function executarOcorrencia($id) {

        $ListarOcorrencia = new ModelsOcorrencia;
        $this->Dados = $ListarOcorrencia->listarPorId($id);

        $ListarTecnico = new ModelsTecnico();
        $this->Dados1 = $ListarTecnico->listar();

        $CarregarView = new ConfigView("ocorrencia/ExecutarOcorrencia", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

    public function finalizarOcorrencia($id) {

        $ListarExecucao = new ModelsExecucao();
        $this->Dados = $ListarExecucao->listarPorId($id);

        $ListarTecnico = new ModelsTecnico();
        $this->Dados1 = $ListarTecnico->listar();

        $CarregarView = new ConfigView("ocorrencia/FinalizarOcorrencia", $this->Dados, $this->Dados1);
        $CarregarView->renderizar();
    }

    public function finalizarExecucao() {

        $atcod = filter_input(INPUT_POST, 'atcod', FILTER_DEFAULT);
        $atteccod1 = filter_input(INPUT_POST, 'atteccod1', FILTER_DEFAULT);
        $atteccod2 = filter_input(INPUT_POST, 'atteccod2', FILTER_DEFAULT);
        $atteccod3 = filter_input(INPUT_POST, 'atteccod3', FILTER_DEFAULT);
        $atteccod4 = filter_input(INPUT_POST, 'atteccod4', FILTER_DEFAULT);
        $atdescricao = filter_input(INPUT_POST, 'atdescricao', FILTER_DEFAULT);

        date_default_timezone_set('America/Manaus');
        $date = date('Y-m-d');
        $hora = date('H:i:s');

        if ($atteccod1 == "Selecione") {
            $atteccod1 = null;
        }
        if ($atteccod2 == "Selecione") {
            $atteccod2 = null;
        }
        if ($atteccod3 == "Selecione") {
            $atteccod3 = null;
        }
        if ($atteccod4 == "Selecione") {
            $atteccod4 = null;
        }
        if ($atdescricao == "") {
            $atdescricao = null;
        }

        $Dados = [
            'atdtfinal' => $date,
            'athrfinal' => $hora,
            'atteccod1' => $atteccod1,
            'atteccod2' => $atteccod2,
            'atteccod3' => $atteccod3,
            'atteccod4' => $atteccod4,
            'atdescricao' => $atdescricao
        ];


        $AlterarExecucao = new ModelsExecucao();
        $AlterarExecucao->alterar($Dados, $atcod);
    }

    public function salvarExecucao() {

        $atoccod = filter_input(INPUT_POST, 'atoccod', FILTER_DEFAULT);
        $atteccod1 = filter_input(INPUT_POST, 'atteccod1', FILTER_DEFAULT);
        $atteccod2 = filter_input(INPUT_POST, 'atteccod2', FILTER_DEFAULT);
        $atteccod3 = filter_input(INPUT_POST, 'atteccod3', FILTER_DEFAULT);
        $atteccod4 = filter_input(INPUT_POST, 'atteccod4', FILTER_DEFAULT);
        $atdescricao = filter_input(INPUT_POST, 'atdescricao', FILTER_DEFAULT);

        date_default_timezone_set('America/Manaus');
        $date = date('Y-m-d');
        $hora = date('H:i:s');

        if ($atteccod1 == "Selecione") {
            $atteccod1 = null;
        }
        if ($atteccod2 == "Selecione") {
            $atteccod2 = null;
        }
        if ($atteccod3 == "Selecione") {
            $atteccod3 = null;
        }
        if ($atteccod4 == "Selecione") {
            $atteccod4 = null;
        }
        if ($atdescricao == "") {
            $atdescricao = null;
        }

        $Dados = [
            'atdtinicio' => $date,
            'athrinicio' => $hora,
            'atoccod' => $atoccod,
            'atteccod1' => $atteccod1,
            'atteccod2' => $atteccod2,
            'atteccod3' => $atteccod3,
            'atteccod4' => $atteccod4,
            'atdescricao' => $atdescricao
        ];
        //var_dump($Dados);

        $CadastrarExecucao = new ModelsExecucao();
        $CadastrarExecucao->cadastrar($Dados);
    }

    public function avaliarOcorrencia() {
        $occod = filter_input(INPUT_POST, 'occod', FILTER_DEFAULT);
        $ocavaliacao = filter_input(INPUT_POST, 'ocavaliacao', FILTER_DEFAULT);

        $Dados = [
            'ocavaliacao' => $ocavaliacao
        ];

        //echo $occod;
        //var_dump($Dados);

        $AlterarOcorrencia = new ModelsOcorrencia();
        $AlterarOcorrencia->alterar($Dados, $occod);
    }

    public function impressao($UserId) {

        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):

            $ListarOcorrencia = new ModelsExecucao();
            $this->Dados = $ListarOcorrencia->listarPorId($UserId);

            $CarregarView = new ConfigView("ocorrencia/OcorrenciaImpressao", $this->Dados);

            $CarregarView->renderizarImpressao();

        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }

}
