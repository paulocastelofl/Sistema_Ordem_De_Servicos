<?php

/**
 * <b>Delete.class:</b>
 * Classe responsavel por deletar itens no banco de dados!
 * @copyright (c) 2014, Fabio Augusto CASA DOS SITES
 * 
 * Como utilizar: **************************************************
    //CRIA O OBJETO PARA DELETAR
    $delete = new Delete;
 
    //EXCLUIDO O ITEM DA TEBELA IDENTIFICANDO O ID PELO ParseString.
    $delete->ExeDelete('ws_siteviews_agent', "WHERE agent_id = :id", 'id=8');
  
    //DEBUGANDO O DELETE.
    if($delete->getResult()):
        echo "{$delete->getRowCount()} registro(s) removidos com sucesso!";
    endif;
 * *****************************************************************
 */
class ModelsDelete extends ModelsConn {

    private $Tabela;
    private $Termos;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Delete;

    /* @var PDO */
    private $Conn;

    public function ExeDelete($Tabela, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Delete->rowCount();
    }

    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * ****************************************
     * ********** PRIVATE METHODS *************
     * ****************************************
     */
    private function Connect() {
        $this->Conn = parent::getConn();
        $this->Delete = $this->Conn->prepare($this->Delete);
    }

    private function getSyntax() {
        $this->Delete = "DELETE FROM {$this->Tabela} {$this->Termos}";
    }

    private function Execute() {
        $this->Connect();
        try {
            $this->Delete->execute($this->Places);
            $this->Result = true;
        } catch (PDOException $e) {
            $this->Result = null;
            CDSErro("<b>Erro ao Deletar:</b> {$e->getMessage()}", $e->getCode());
        }
    }
    
    public function executar($sql){
        $this->Connect();
        try {
            $this->Conn->exec($sql);
            $this->Result = true;
        } catch (PDOException $e) {
            $this->Result = null;
            CDSErro("<b>Erro ao Deletar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
