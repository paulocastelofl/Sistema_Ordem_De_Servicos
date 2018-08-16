
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6"><img src="<?php echo URL; ?>/assets/image/computador.png" alt=""/> Cadastrar Ocorrência-DTI/ <a href="<?php echo URL; ?>controle-ocorrenciaDti/index">Listar Ocorrência-DTI</a></div>
            <div class="col-sm-6" id="msg" style="display: none"><h5 style="color: green"><strong id="strong-msg">Cadastrado com sucesso!</strong></h5></div>
        </div>
    </div>

    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    ?>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" id="form_ocorrencia_dti">
            <div class="form-group">  
                <div class="col-sm-6">
                    <label for="ocusuariodti" class=" control-label"><span style="color: red">* </span>Solicitante:</label>
                    <input type="text" value="<?php echo $_SESSION['nome'] ?>" disabled="true" required="required" class="form-control" id="ocusuariodti">
                    <input type="hidden"  value="<?php echo $_SESSION['idt'] ?>" required="required" class="form-control" id="ocusucoddti">
                </div>
                <div class="col-sm-3">
                    <label for="ocdepcoddti" class="control-label"><span style="color: red">* </span>Departamento:</label>
                    <select id="ocdepcoddti" class="form-control">
                       <option>Selecione</option>
                            <?php
                            foreach ($this->Dados as $dep) {
                                ?>
                                <option value="<?= $dep['depcod'] ?>"><?= $dep['depdescricao'] ?></option>
                                <?php
                            }
                            ?>
                    </select>
                </div> 
                <div class="col-sm-3">
                    <label for="octipocoddti" class="control-label"><span style="color: red">* </span>Tipo Manutenção-DTI:</label>
                    <select id="octipocoddti" class="form-control">
                        <option>Selecione</option>
                            <?php
                            foreach ($this->Dados1 as $tip) {
                                ?>
                                <option value="<?= $tip['tipcoddti'] ?>"><?= $tip['tipdescricaodti'] ?></option>
                                <?php
                            }
                            ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="ocdescricaodti" class=" control-label"><span style="color: red">* </span>Descrição:</label>
                    <textarea class="form-control" rows="5" id="ocdescricaodti"></textarea>
                </div>
            </div>
            <?php
            date_default_timezone_set('America/Manaus');
            $date = date('Y-m-d');
            $hora = date('H:i:s');
            ?>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="ocdatadti" class=" control-label"><span style="color: red">* </span>Data:</label>
                    <input type="date" value="<?php echo $date?>" disabled="true" required="required" class="form-control" id="ocdatadti" >
                </div>
                <div class="col-sm-4">
                    <label for="ochoradti" class=" control-label"><span style="color: red">* </span>Horário:</label>
                    <input type="time" value="<?php echo $hora?>" disabled="true" required="required" class="form-control" id="ochoradti">
                </div>
                  <div class="col-sm-4">
                    <label for="ocprioridadedti" class="control-label"><span style="color: red">* </span>Prioridade:</label>
                    <select id="ocprioridadedti" class="form-control">
                       <option>Baixa</option>
                       <option>Média</option>
                       <option>Alta</option>
                       <option>Urgente</option>    
                    </select>
                </div> 
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>
                </div>
            </div>
        </form>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/OcorrenciaDti.js"></script>


