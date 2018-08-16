<?php

/**
 * <b>Read.class:</b>
 * Classe responsavel por ler o banco de dados!
 * @copyright (c) 2014, Fabio Augusto CASA DOS SITES
 * 
 * Como utilizar: **************************************************
        //INSTANCIA O OBJETO - VAI TER QUE USAR EM TODOS OS CASOS
        $read = new Read;  
        
        // CASO 1 - LER O BANCO DE DADOS INSTANCIANDO O WHERE COMO OBJETO E INFORMANDO O ParseString.
        $read->ExeRead('TABELA DO BANCO', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=Porra&views=10&limit=2");
        
        //CASO 2 - SE TIVER O CASO DE NA MESMA PAGINA LER A MESMA TABELA MUDAS SO OS PARAMENTOS DO ParseString. 
        $read->setPlaces("name=safira&views=10&limit=2");

        //CASO 3 - DEBUGANDO SE TIVER UMA OCORRENCIA NO BANCO DE DADOS.
        if($read->getRowCount()>= 1):
        endif;
        
        //CASO 4 - FAZ UMA LEITURA FULL MAIS O ParseString DO LIMIT E OBRIGATORIO.
        $read->FullRead("SELECT * FROM ws_siteviews_agent LIMIT :limit OFFSET :offset", "limit=1000&offset=0");

 * *****************************************************************
 */
class ModelsRead extends ModelsConn {

    private $Select;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Read;

    /* @var PDO */
    private $Conn;

    public function ExeRead($Tabela, $Termos = null, $ParseString = null) {
        if (!empty($ParseString)):
            parse_str($ParseString, $this->Places);
        endif;

        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        $this->Execute();
    }

    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Read->rowCount();
    }

    public function FullRead($Query, $ParseString = null) {
        $this->Select = (string) $Query;
        if (!empty($ParseString)):
            parse_str($ParseString, $this->Places);
        endif;
        $this->Execute();
    }

    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->Execute();
    }

    /**
     * ****************************************
     * ********** PRIVATE METHODS *************
     * ****************************************
     */
    private function Connect() {
        $this->Conn = parent::getConn();
        $this->Read = $this->Conn->prepare($this->Select);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getSyntax() {
        if ($this->Places):
            foreach ($this->Places as $Vinculo => $Valor):
                if ($Vinculo == 'limit' || $Vinculo == 'offset'):
                    $Valor = (int) $Valor;
                endif;
                $this->Read->bindValue(":{$Vinculo}", $Valor, ( is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            endforeach;
        endif;
    }

    private function Execute() {
        $this->Connect();
        try {
            $this->getSyntax();
            $this->Read->execute();
            $this->Result = $this->Read->fetchAll();
        } catch (PDOException $e) {
            $this->Result = null;
            CDSErro("<b>Erro ao ler:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
