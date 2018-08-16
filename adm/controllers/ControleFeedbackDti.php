<?php

class ControleFeedbackDti {

    private $Dados;
    private $UserId;

    public function salvarFeedbackDti() {

        date_default_timezone_set('America/Manaus');
        $date = date('Y-m-d');
        $hora = date('H:i:s');

        $feeddescricaodti = filter_input(INPUT_POST, 'feeddescricaodti', FILTER_DEFAULT);
        $feeddatadti = $date;
        $feedhoradti = $hora;
        $feedteccoddti = filter_input(INPUT_POST, 'feedteccoddti', FILTER_DEFAULT);
        $feedoccoddti = filter_input(INPUT_POST, 'feedoccoddti', FILTER_DEFAULT);


        $Dados = [
            'feeddescricaodti' => $feeddescricaodti,
            'feeddatadti' => $feeddatadti,
            'feedhoradti' => $feedhoradti,
            'feedteccoddti' => $feedteccoddti,
            'feedoccoddti' => $feedoccoddti
        ];

        var_dump($Dados);

        $CadastrarFeedbackDti = new ModelsFeedbackDti();
        $CadastrarFeedbackDti->cadastrar($Dados);
        //var_dump($Dados);
    }

    public function visualizarDti($UserId = null) {
        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):
            $ListarIdTecnico = new ModelsTecnico();
            $this->Dados = $ListarIdTecnico->listarPorId($UserId);
            $CarregarView = new ConfigView("tecnico/EditarTecnico", $this->Dados);
            //var_dump($this->Dados);
            //echo $this->Dados[0]['grunome'];
            $CarregarView->renderizar();
        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }

    public function excluirFeedbackDti() {

        $feedcoddti = filter_input(INPUT_POST, 'feedcoddti', FILTER_DEFAULT);

        $ExcluirFeedbackDti = new ModelsFeedbackDti();
        $ExcluirFeedbackDti->excluir($feedcoddti);
    }
    
    public function visualizarfeedDti($UserId = null) {
        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):
            //$ListarIdTecnico = new ModelsTecnico();
            //$this->Dados = $ListarIdTecnico->listarPorId($UserId);
            $CarregarView = new ConfigView("ocorrenciadti/FeedbackUsuario", $this->Dados);
            //var_dump($this->Dados);
            //echo $this->Dados[0]['grunome'];
            $CarregarView->renderizar();
        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }
//10:c3:7b:c4:3d:6f      be:a3:41:82:3c:34
}
