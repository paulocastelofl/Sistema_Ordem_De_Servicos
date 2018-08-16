<?php


class ModelsHome {
    
    private $QtdMembro;
    private $QtdCulto;
    private $QtdGrupo;
    
     public function listarQtdMembro() {
        //$sql = "select * from membro ORDER BY memcod DESC;";
        $sql = "SELECT * FROM membro";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
        $this->QtdMembro= $Listar->getRowCount();
    
        return $this->QtdMembro;
    }
    
    public function listarQtdCulto() {
        //$sql = "select * from membro ORDER BY memcod DESC;";
        $sql = "SELECT * FROM culto";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
        $this->QtdCulto= $Listar->getRowCount();
    
        return $this->QtdCulto;
    }
    
    public function listarQtdGrupo() {
        //$sql = "select * from membro ORDER BY memcod DESC;";
        $sql = "SELECT * FROM grupo";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
        $this->QtdGrupo= $Listar->getRowCount();
    
        return $this->QtdGrupo;
    }
    
     public function listarQtdCelula() {
        //$sql = "select * from membro ORDER BY memcod DESC;";
        $sql = "SELECT * FROM celula";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
        $this->QtdCelula= $Listar->getRowCount();
    
        return $this->QtdCelula;
    }
}
