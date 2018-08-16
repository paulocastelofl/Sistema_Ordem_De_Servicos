<div class="panel panel-default">
    <div class="panel-body">

         <div class="col-sm-8"><img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/> Executar Ocorrência-Manutenção/ <a href="<?php echo URL; ?>controle-ocorrencia/index">Listar Ocorrência-Manutenção</a></div>
            <div class="col-sm-4" id="msg" style="display: none"><h5 style="color: green"><strong id="strong-msg">Cadastrado com sucesso!</strong></h5></div>
    </div>
</div>
<div class="panel panel-default col-sm-6">
    <div class="panel-body " >
        <div class="form-group">
            <div class="col-sm-6">
                <input type="hidden" id="atoccod" value="<?php echo $this->Dados[0]['occod'] ?>">
                <label for="occod" class=" control-label" style="color: #999">N° Ocorrência: <span style="font-size: 14px; color: black">0<?php echo $this->Dados[0]['occod'] ?></span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occod" class=" control-label" style="color: #999">Solicitante: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['usunome'] ?></span></label>         
            </div>
            <div class="col-sm-6">
                <label for="occod" class=" control-label"style="color:#999">Datat/hora: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocdata'] ?> / <?php echo $this->Dados[0]['ochora'] ?></span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occod" class=" control-label" style="color: #999">Departamento: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['depdescricao'] ?></span></label>         
            </div>
            <div class="col-sm-6">
                <label for="occod" class=" control-label"style="color:#999">Tipo: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['tipdescricao'] ?> </span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occod" class=" control-label" style="color: #999">Prioridade: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocprioridade'] ?></span></label>         
            </div>
            <div class="col-sm-6">
                <label for="occod" class=" control-label"style="color:#999">Previsão: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocdtprevisao'] ?></span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="occod" class=" control-label" style="color: #999">Descrição: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocdescricao'] ?></span></label>         
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occod" class=" control-label"> </label>         
            </div>
        </div>
    </div>  
</div>

<div class=" col-sm-6">
    <form class="form-horizontal" id="form_ocorrencia_editar">
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod1" class=" control-label">Técnico 01:</label>
                <select id="atteccod1" class="form-control">
                    <option >Selecione</option>
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   

                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod2" class=" control-label">Técnico 02:</label>
                <select id="atteccod2" disabled="disabled" class="form-control">
                    <option>Selecione</option>
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>    
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod3" class=" control-label">Técnico 03:</label>
                <select id="atteccod3" disabled="disabled" class="form-control">
                    <option>Selecione</option>
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod4" class=" control-label">Técnico 04:</label>
                <select id="atteccod4" disabled="disabled" class="form-control">
                    <option>Selecione</option>  
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   
                </select>
            </div>
        </div>

    </form>
</div>
<div class=" col-sm-12"> 
    <br>
</div>
<div class=" col-sm-12">
    <div class="col-sm-12 text-center" >
        <?php
        if ($this->Dados[0]['ocstatus'] == "Aberto") {
            ?>
        <button style="width: 250px; height: 80px"  id="executar"  type="button" class="btn-lg btn-success">Iniciar execução</button> 
            <?php
        } else if ($this->Dados[0]['ocstatus'] == "Pendente") {
            ?>
            <button style="width: 250px; height: 80px" id="executar"  type="button" class="btn-lg btn-success">Iniciar executar</button> 
            <?php
        }else if ($this->Dados[0]['ocstatus'] == "Executando") {
            ?>
           <h3>Processo não pode ser realizado pois o mesmo está em <span style="color: red">"Execução"</span>.</h3>
            <?php
        }else if ($this->Dados[0]['ocstatus'] == "Finalizado") {
            ?>
            <h3>Processo não pode ser realizado pois o mesmo está <span style="color: red">"finalizado"</span>.</h3>
            <?php
        }else if ($this->Dados[0]['ocstatus'] == "Recusado") {
            ?>
            <h3>Processo não pode ser realizado pois o mesmo está <span style="color: red">"recusado"</span>.</h3>
            <?php
        }
        ?>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/Executar3.js"></script>

