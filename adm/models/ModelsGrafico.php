<?php

class ModelsGrafico {

    private $Resultado;
    private $UserId;

    public function OcorrenciaPorProdução01() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Produção 01'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
     public function OcorrenciaPorProdução02() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Produção 02'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
      public function OcorrenciaPorSMD() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'SMD'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
      public function OcorrenciaPorAlmoxarifado() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Almoxarifado'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
      public function OcorrenciaPorAreaTecnia() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Area Tecnica'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
      public function OcorrenciaPorEngenharia() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Engenharia'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
      public function OcorrenciaPorSubestoque() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Sub-estoque'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
      public function OcorrenciaPorQualidade() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Qualidade'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    public function OcorrenciaPorDTI() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'DTI'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    public function OcorrenciaPorCompras() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Compras'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorPCP() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'PCP'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorRH() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'RH'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorDP() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'DP'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorGerencia() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Gerência'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorManutencao() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Manutenção'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorSesmt() {
           
        $sql = "select count(occod) from ocorrencia inner join departamento on depcod = ocdepcod where depdescricao like 'Sesmt'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }

}
