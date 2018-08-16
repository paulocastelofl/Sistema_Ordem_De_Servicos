
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-8"><img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/> Avaliar Ocorrência-Manutenção/ <a href="<?php echo URL; ?>controle-ocorrencia/index">Listar Ocorrência-Manutenção</a></div>
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
        <form class="form-horizontal" id="form_ocorrencia_editar">
            <div class="form-group">
                <div class="col-sm-1">
                    <label for="occod" class=" control-label"><span style="color: red">* </span>N°:</label>
                    <input type="text" value="<?php echo $this->Dados[0]['occod'] ?>" disabled="true" required="required" class="form-control" id="occod">
                </div>
                <div class="col-sm-3">
                    <label for="ocdata/hora" class=" control-label">Data / hora de abertura: </label>
                    <label for="ocdata/hora" class=" control-label"><?php echo $this->Dados[0]['ocdata'] . " / " . $this->Dados[0]['ochora'] ?> </label>
                </div>

                <?php
                if ($this->Dados[0]['ocstatus'] == "Pendente") {
                    ?>
                    <div class="col-sm-4 text-center" >
                        <button style="width: 150px" id="confirmar" type="button" class="btn-lg btn-success">Confirmar</button> 
                        <button style="width: 150px" id="recusar" type="button" class="btn-lg btn-danger">Recusar</button>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-sm-4 text-center" >
                        <button style="width: 150px"  type="button" disabled="true" class="btn-lg btn-default">Confirmar</button> 
                        <button style="width: 150px"  type="button" disabled="true" class="btn-lg btn-default">Recusar</button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-sm-4 text-center" >
                    <h3>Status: <span style="color: red"><?php echo $this->Dados[0]['ocstatus'] ?></span></h3>
                </div>

            </div>
            <div class="form-group">  
                <div class="col-sm-6">
                    <label for="ocusuario" class=" control-label"><span style="color: red">* </span>Solicitante:</label>
                    <input type="text" value="<?php echo $this->Dados[0]['usunome'] ?>" disabled="true" required="required" class="form-control" id="ocusuario">
                    <input type="hidden"  value="<?php echo $this->Dados[0]['usucod'] ?>" required="required" class="form-control" id="ocusucod">
                </div>
                <div class="col-sm-3">
                    <label for="ocdepcod" class="control-label"><span style="color: red">* </span>Departamento:</label>
                    <select id="ocdepcod" disabled="true" class="form-control">
                        <option value="<?php echo $this->Dados[0]['depcod'] ?>"><?php echo $this->Dados[0]['depdescricao'] ?></option>
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
                    <label for="octipocod"  class="control-label"><span style="color: red">* </span>Tipo Manutenção:</label>
                    <select id="octipocod"  class="form-control">
                        <option value="<?php echo $this->Dados[0]['tipcod'] ?>"><?php echo $this->Dados[0]['tipdescricao'] ?></option>
                        <?php
                        foreach ($this->Dados2 as $tip) {
                            ?>
                            <option value="<?= $tip['tipcod'] ?>"><?= $tip['tipdescricao'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="ocdescricao" class=" control-label"><span style="color: red">* </span>Descrição:</label>
                    <textarea disabled="true" class="form-control" rows="5" id="ocdescricao"><?php echo $this->Dados[0]['ocdescricao'] ?></textarea>
                </div>
                <div class="col-sm-4">
                    <label for="ocdtprevisao" class=" control-label"><span style="color: red">* </span>Previsão:</label>
                    <input type="date" value="<?php echo $this->Dados[0]['ocdtprevisao'] ?>"  required="required" class="form-control" id="ocdtprevisao">
                </div>
            </div>
            <?php
            if ($this->Dados[0]['ocdtresposta'] == null) {
                date_default_timezone_set('America/Manaus');
                $date = date('Y-m-d');
                $hora = date('H:i:s');
            } else {
                $date = $this->Dados[0]['ocdtresposta'];
                $hora = $this->Dados[0]['ochrresposta'];
            }
            ?>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="ocdtresposta" class=" control-label"><span style="color: red">* </span>Data:</label>
                    <input type="date" value="<?php echo $date ?>" disabled="true" required="required" class="form-control" id="ocdtresposta" >
                </div>
                <div class="col-sm-4">
                    <label for="ochrresposta" class=" control-label"><span style="color: red">* </span>Horário:</label>
                    <input type="time" value="<?php echo $hora ?>" disabled="true" required="required" class="form-control" id="ochrresposta">
                </div>
                <div class="col-sm-4">
                    <label for="ocprioridade" class="control-label"><span style="color: red">* </span>Prioridade:</label>
                    
                    <select id="ocprioridade" class="form-control">
                        
                        <option value="<?php echo $this->Dados[0]['ocprioridade'] ?>"><?php echo $this->Dados[0]['ocprioridade'] ?></option>
                        <option>Baixa</option>
                        <option>Média</option>
                        <option>Alta</option>
                        <option>Urgente</option>    
                    </select>
                </div> 
            </div>
        </form>
    </div>
</div>
<div>


</div>

<div class="panel panel-default">
    <br>
    <div class="form-group">
        <div class="col-sm-1"><h4>Feedback</h4></div> 
        <div class="col-sm-4"><button  data-toggle="modal" data-target=".modal_feed"><img src="<?php echo URL; ?>/assets/image/adicionar2.png" alt=""/></button>  </div>
    </div>
    <br>
    <div class="panel-body" id="carregar_tb">
        <table class="table" id="tabela-feed" style="width:100%">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Descrição</th>
                    <th>Data/hora</th>
                    <th>Técnico</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($this->Dados1 as $feed) {
                    ?>
                    <tr>
                        <td><?= $feed['feedcod'] ?></td>
                        <td><?= $feed['feeddescricao'] ?></td>
                        <td><?= $feed['feeddata'] ?> / <?= $feed['feedhora'] ?></td>
                        <td><?= $feed['tecnome'] ?></td>

                        <td>
                            <button onclick="excluir('<?= $feed['feedcod'] ?>')" id="bt-excluir"><img src="<?php echo URL; ?>/assets/image/delete_1.png" alt=""/></button>             
                        </td>

                    </tr> 

                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- adcionar feed -->

<div class="modal fade modal_feed" id="modal-feed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Ocorrência N° <?php echo "0" . $this->Dados[0]['occod'] ?></h5>
                <input type="hidden" value="<?php echo $this->Dados[0]['occod'] ?>" required="required" class="form-control" id="feedoccod">
            </div>
            <div class="modal-body ">
                <form class="form-horizontal" id="form_feedback">
                    <label for="feeddescricao" class=" control-label"><span style="color: red">* </span>Descrição:</label>
                    <textarea class="form-control" rows="5" id="feeddescricao"></textarea>
                    <br>
                    <label for="feedteccod"  class="control-label"><span style="color: red">* </span>Técnico:</label>
                    <select id="feedteccod"  class="form-control">

                        <?php
                        foreach ($this->Dados3 as $tecnico) {
                            ?>
                            <option value="<?= $tecnico['teccod'] ?>"><?= $tecnico['tecnome'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>
                </form>
            </div>

            <div class="modal-footer">
                <h6>1.0 version</h6>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/Ocorrencia2.js"></script>
<script src="<?php echo URL; ?>assets/js/Feedback.js"></script>


