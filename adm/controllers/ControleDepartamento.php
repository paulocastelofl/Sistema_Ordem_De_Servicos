<?php

class ControleDepartamento {

    private $Dados;
    private $UserId;

    public function index() {

        $ListarDepartamento = new ModelsDepartamento();
        $this->Dados = $ListarDepartamento->listar();

        $CarregarView = new ConfigView("departamento/Departamento", $this->Dados);

        $CarregarView->renderizar();
    }

    public function cadastrarDepartamento() {
        $CarregarView = new ConfigView("departamento/CadastrarDepartamento");
        $CarregarView->renderizar();
    }
    
    public function salvarDepartamento() {

        $depdescricao = filter_input(INPUT_POST, 'depdescricao', FILTER_DEFAULT);
        $depresponsavel = filter_input(INPUT_POST, 'depresponsavel', FILTER_DEFAULT);
        $depstatus = "Ativo";
        

        $Dados = [
            'depdescricao' => $depdescricao,
            'depresponsavel' => $depresponsavel,
            'depstatus' => $depstatus
        ];
        
        //var_dump($Dados);

        $CadastrarDepartamento = new ModelsDepartamento();
        $CadastrarDepartamento->cadastrar($Dados);
        //var_dump($Dados);
    }
    
     public function visualizar($UserId = null) {
        $this->UserId = (int) $UserId;
        //echo 'id='.$UserId." ";
        if (!empty($this->UserId)):
            $ListarIdDepartamento = new ModelsDepartamento();
            $this->Dados = $ListarIdDepartamento->listarPorId($UserId);
            $CarregarView = new ConfigView("departamento/EditarDepartamento", $this->Dados);
            //var_dump($this->Dados);
            //echo $this->Dados[0]['grunome'];
            $CarregarView->renderizar();
        else:
            $_SESSION['msg'] = "Necessário selecionar um usuário<br>";
            $UrlDestino = URL . 'controle-usuario/index';
            header("Location: $UrlDestino");
        endif;
    }
    
     public function editarDepartamento() {

        $depcod = filter_input(INPUT_POST, 'depcod', FILTER_DEFAULT);
        $depdescricao = filter_input(INPUT_POST, 'depdescricao', FILTER_DEFAULT);
        $depresponsavel = filter_input(INPUT_POST, 'depresponsavel', FILTER_DEFAULT);
       
       

         $Dados = [
            'depresponsavel' => $depresponsavel,
            'depdescricao' => $depdescricao
        ];

        $AlterarDepartamento = new ModelsDepartamento();
        $AlterarDepartamento->alterar($Dados,$depcod);
        //var_dump($Dados);
    }
    
     public function desativarDepartamento() {

        $depcod = filter_input(INPUT_POST, 'depcod', FILTER_DEFAULT);
        $depstatus = filter_input(INPUT_POST, 'depstatus', FILTER_DEFAULT);
        
       
        
        $Dados = [
            'depstatus' => $depstatus
        ];

        $AlterarDepartamento = new ModelsDepartamento();
        $AlterarDepartamento->alterar($Dados, $depcod);
        //var_dump($Dados);
    }

}