<?php

class ConfigView {

    private $Nome;
    private $Dados;
    private $Dados1;
    private $Dados2;
    private $Dados3;

    public function __construct($Nome, array $Dados = null,array $Dados1 = null,array $Dados2 = null, array $Dados3 = null ) {
        $this->Nome = (string) $Nome;
        $this->Dados = $Dados;
        $this->Dados1 = $Dados1;
        $this->Dados2 = $Dados2;
        $this->Dados3 = $Dados3;
    }

    public function renderizar() {
        include 'views/include/header.php';
        include 'views/include/menu.php';
        if (file_exists('views/' . $this->Nome . '.php')):
            include 'views/' . $this->Nome . '.php';
        else:
            echo "Erro ao carregar a VIEW: {$this->Nome}";
        endif;
        include 'views/include/footer.php';
    }
    
    public function renderizarImpressao() {
     
        if (file_exists('views/' . $this->Nome . '.php')):
            include 'views/' . $this->Nome . '.php';
        else:
            echo "Erro ao carregar a VIEW: {$this->Nome}";
        endif;
    }
    
 
    public function renderizarlogin() {
        if(file_exists('views/'. $this->Nome . '.php')):
            include 'views/'. $this->Nome . '.php';
        endif;
    }


    public function getdados() {
        return $this->Dados;
    }

}
