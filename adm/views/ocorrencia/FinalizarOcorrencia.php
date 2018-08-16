<div class="panel panel-default">
    <div class="panel-body">

        <div class="col-sm-8"><img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/> Finalizar Ocorrência-Manutenção/ <a href="<?php echo URL; ?>controle-ocorrencia/index">Listar Ocorrência-Manutenção</a></div>
        <div class="col-sm-4" id="msg" style="display: none"><h5 style="color: green"><strong id="strong-msg">Cadastrado com sucesso!</strong></h5></div>
    </div>
</div>
<div class="panel panel-default col-sm-6">
    <div class="panel-body " >
        <div class="form-group">
            <div class="col-sm-6">
                <input type="hidden" id="atcod" value="<?php echo $this->Dados[0]['atcod'] ?>">
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

                   <?php
                    if ($this->Dados[0]['atteccod1'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod1'] ?>"><?php echo $this->Dados[0]['atteccod1'] ?></option>
                        <?php
                    }
                    ?>
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
                   <?php
                    if ($this->Dados[0]['atteccod2'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod2'] ?>"><?php echo $this->Dados[0]['atteccod2'] ?></option>
                        <?php
                    }
                    ?>
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
                    <?php
                    if ($this->Dados[0]['atteccod3'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod3'] ?>"><?php echo $this->Dados[0]['atteccod3'] ?></option>
                        <?php
                    }
                    ?>

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
                    <?php
                    if ($this->Dados[0]['atteccod4'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod4'] ?>"><?php echo $this->Dados[0]['atteccod4'] ?></option>
                        <?php
                    }
                    ?> 
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['teccod'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   
                </select>
            </div>
        </div>

    </form>
</div>
<div class="col-sm-12">
    <div class="col-sm-12">
        <label for="atdescricao" class=" control-label">Descrição da Atividade Realizada:</label>
        <textarea class="form-control" rows="5" id="atdescricao"></textarea>
    </div>
</div>
<div class=" col-sm-12"> 
    <br>
</div>
<div class=" col-sm-12">
    <div class="col-sm-12 text-center" >
        <?php
        if ($this->Dados[0]['ocstatus'] == "Aberto") {
            ?>
            <h3>Processo não pode ser finalizado pois o mesmo está em <span style="color: red">"aberto"</span>.</h3>
            <?php
        } else if ($this->Dados[0]['ocstatus'] == "Pendente") {
            ?>
            <<h3>Processo não pode ser finalizado pois o mesmo está <span style="color: red">"pendente"</span>.</h3>
            <?php
        } else if ($this->Dados[0]['ocstatus'] == "Executando") {
            ?>
            <button style="width: 250px; height: 80px" id="finalizar"  type="button" class="btn-lg btn-danger">Finalizar execução</button> 
            <?php
        } else if ($this->Dados[0]['ocstatus'] == "Finalizado") {
            ?>
            <h3>Processo não pode ser finalizado pois o mesmo está <span style="color: red">"finalizado"</span>.</h3>
            <?php
        } else if ($this->Dados[0]['ocstatus'] == "Recusado") {
            ?>
            <h3>Processo não pode ser finalizado pois o mesmo está <span style="color: red">"recusado"</span>.</h3>
            <?php
        }
        ?>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/Executar4.js"></script>

