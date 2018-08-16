<?php

/**
 * <b>Update.class:</b>
 * Classe responsavel por atualizações no banco de dados!
 * @copyright (c) 2014, Fabio Augusto CASA DOS SITES
 * 
 * Como utilizar: **************************************************
        // CRIANDO DADOS PARA ALTERAÇÃO
        $Dados = [
            'TABELA' => 'TABELA',
            'TABELA' => 'TABELA',
        ];
  
        //CRIANDO O OBJETO
        $updade=new Update;
  
        //EXECUTANDO O UPDATE
        $updade->ExeUpdate('ws_siteviews_agent', $Dados, "WHERE agent_id = :id", 'id=4');
 
        //DEBUGANDO O UPDATE
        if($updade->getResult()):
            echo "{$updade->getRowCount()} dado(s) atualizados com sucesso!";
        endif;

        //PARA ALTERAR MAIS TABELA COM O MESMO OBJETO E SOR USAR DESTA MANEIRA.
        $updade->setPlaces('id=2');
 * *****************************************************************
 */
class ModelsUpdate extends ModelsConn {

    private $Tabela;
    private $Dados;
    private $Termos;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Update;

    /* @var PDO */
    private $Conn;

    public function ExeUpdate($Tabela, array $Dados, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Update->rowCount();
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
        $this->Update = $this->Conn->prepare($this->Update);
    }

    private function getSyntax() {
        foreach ($this->Dados as $key => $Values):
            $Places[] = $key . ' = :' . $key;
        endforeach;

        $Places = implode(', ', $Places);
        $this->Update = "UPDATE {$this->Tabela} SET {$Places} {$this->Termos}";
    }

    private function Execute() {
        $this->Connect();
        try {
            $this->Update->execute(array_merge($this->Dados, $this->Places));
            $this->Result = true;
        } catch (PDOException $e) {
            $this->Result = null;
            CDSErro("<b>Erro ao atualizar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
