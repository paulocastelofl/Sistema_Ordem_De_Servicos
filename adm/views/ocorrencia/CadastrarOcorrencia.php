
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-8"><img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/> Cadastrar Ocorrência-Manutenção/ <a href="<?php echo URL; ?>controle-ocorrencia/index">Listar Ocorrência-Manutenção</a></div>
            <div class="col-sm-4" id="msg" style="display: none"><h5 style="color: green"><strong id="strong-msg">Cadastrado com sucesso!</strong></h5></div>
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
        <form class="form-horizontal" id="form_ocorrencia">
            <div class="form-group">  
                <div class="col-sm-6">
                    <label for="ocusuario" class=" control-label"><span style="color: red">* </span>Solicitante:</label>
                    <input type="text" value="<?php echo $_SESSION['nome'] ?>" disabled="true" required="required" class="form-control" id="ocusuario">
                    <input type="hidden"  value="<?php echo $_SESSION['idt'] ?>" required="required" class="form-control" id="ocusucod">
                </div>
                <div class="col-sm-3">
                    <label for="ocdepcod" class="control-label"><span style="color: red">* </span>Departamento:</label>
                    <select id="ocdepcod" class="form-control">
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
                    <label for="octipocod" class="control-label"><span style="color: red">* </span>Tipo Manutenção:</label>
                    <select id="octipocod" class="form-control">
                        <option>Selecione</option>
                            <?php
                            foreach ($this->Dados1 as $tip) {
                                ?>
                                <option value="<?= $tip['tipcod'] ?>"><?= $tip['tipdescricao'] ?></option>
                                <?php
                            }
                            ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="ocdescricao" class=" control-label"><span style="color: red">* </span>Descrição:</label>
                    <textarea class="form-control" rows="5" id="ocdescricao"></textarea>
                </div>
            </div>
            <?php
            date_default_timezone_set('America/Manaus');
            $date = date('Y-m-d');
            $hora = date('H:i:s');
            ?>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="ocdata" class=" control-label"><span style="color: red">* </span>Data:</label>
                    <input type="date" value="<?php echo $date?>" disabled="true" required="required" class="form-control" id="ocdata" >
                </div>
                <div class="col-sm-4">
                    <label for="ochora" class=" control-label"><span style="color: red">* </span>Horário:</label>
                    <input type="time" value="<?php echo $hora?>" disabled="true" required="required" class="form-control" id="ochora">
                </div>
                  <div class="col-sm-4">
                    <label for="ocprioridade" class="control-label"><span style="color: red">* </span>Prioridade:</label>
                    <select id="ocprioridade" class="form-control">
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
<script src="<?php echo URL; ?>assets/js/Ocorrencia2.js"></script>


