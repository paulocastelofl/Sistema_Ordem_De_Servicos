<?php

class ControleFeedback {

    private $Dados;
    private $UserId;

    public function salvarFeedback() {

        date_default_timezone_set('America/Manaus');
        $date = date('Y-m-d');
        $hora = date('H:i:s');

        $feeddescricao = filter_input(INPUT_POST, 'feeddescricao', FILTER_DEFAULT);
        $feeddata = $date;
        $feedhora = $hora;
        $feedteccod = filter_input(INPUT_POST, 'feedteccod', FILTER_DEFAULT);
        $feedoccod = filter_input(INPUT_POST, 'feedoccod', FILTER_DEFAULT);


        $Dados = [
            'feeddescricao' => $feeddescricao,
            'feeddata' => $feeddata,
            'feedhora' => $feedhora,
            'feedteccod' => $feedteccod,
            'feedoccod' => $feedoccod
        ];

        var_dump($Dados);

        $CadastrarFeedback = new ModelsFeedback();
        $CadastrarFeedback->cadastrar($Dados);
        //var_dump($Dados);
    }

    public function visualizar($UserId = null) {
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

    public function excluirFeedback() {

        $feedcod = filter_input(INPUT_POST, 'feedcod', FILTER_DEFAULT);

        $ExcluirFeedback = new ModelsFeedback();
        $ExcluirFeedback->excluir($feedcod);
    }

}
