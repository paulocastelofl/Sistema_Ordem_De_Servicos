<?php

class ControleOf {

    private $Dados;
    private $UserId;

    public function index() {

        //$ListarOf = new ModelsOf();

        //$this->Dados = $ListarOf->listar();

        $CarregarView = new ConfigView("of/Of");

        $CarregarView->renderizar();
    }

    public function cadastrarOf() {
        $CarregarView = new ConfigView("of/CadastrarOf");
        $CarregarView->renderizar();
    }
    
    public function salvarTecnico() {

        $tecmatricula = filter_input(INPUT_POST, 'tecmatricula', FILTER_DEFAULT);
        $tecnome = filter_input(INPUT_POST, 'tecnome', FILTER_DEFAULT);
        $tecstatus = "Ativo";
        

        $Dados = [
            'tecmatricula' => $tecmatricula,
            'tecnome' => $tecnome,
            'tecstatus' => $tecstatus
        ];
        
        //var_dump($Dados);

        $CadastrarTecnico = new ModelsTecnico();
        $CadastrarTecnico->cadastrar($Dados);
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
    
     public function editarTecnico() {

        $teccod = filter_input(INPUT_POST, 'teccod', FILTER_DEFAULT);
        $tecmatricula = filter_input(INPUT_POST, 'tecmatricula', FILTER_DEFAULT);
        $tecnome = filter_input(INPUT_POST, 'tecnome', FILTER_DEFAULT);
       
       

         $Dados = [
            'tecmatricula' => $tecmatricula,
            'tecnome' => $tecnome
        ];

        $AlterarTecnico = new ModelsTecnico();
        $AlterarTecnico->alterar($Dados,$teccod);
        //var_dump($Dados);
    }
    
     public function desativarTecnico() {

        $teccod = filter_input(INPUT_POST, 'teccod', FILTER_DEFAULT);
        $tecstatus = filter_input(INPUT_POST, 'tecstatus', FILTER_DEFAULT);
        
        
        
        $Dados = [
            'tecstatus' => $tecstatus
        ];

        $AlterarTecnico = new ModelsTecnico();
        $AlterarTecnico->alterar($Dados, $teccod);
        //var_dump($Dados);
    }

}
