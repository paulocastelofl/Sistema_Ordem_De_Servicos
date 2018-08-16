<?php

class ModelsGraficoDti {

    private $Resultado;
    private $UserId;

    public function OcorrenciaPorProdução01Dti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Produção 01'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
     public function OcorrenciaPorProdução02Dti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Produção 02'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
      public function OcorrenciaPorSMDDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'SMD'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
      public function OcorrenciaPorAlmoxarifadoDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Almoxarifado'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    
      public function OcorrenciaPorAreaTecniaDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Area Tecnica'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
      public function OcorrenciaPorEngenhariaDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Engenharia'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
      public function OcorrenciaPorSubestoqueDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Sub-estoque'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
      public function OcorrenciaPorQualidadeDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Qualidade'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    public function OcorrenciaPorDtiDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'DTI'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
    public function OcorrenciaPorComprasDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Compras'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorPCPDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'PCP'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorRHDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'RH'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorDPDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'DP'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorGerenciaDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Gerência'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorManutencaoDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Manutenção'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }
     public function OcorrenciaPorSesmtDti() {
           
        $sql = "select count(occoddti) from ocorrencia_dti inner join departamento on depcod = ocdepcoddti where depdescricao like 'Sesmt'";
        $Listar = new ModelsRead();
        $Listar->fullread($sql);
        $this->Resultado = $Listar->getResult();
      
        return $this->Resultado;
    }

}
