
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6"><img src="<?php echo URL; ?>/assets/image/computador.png" alt=""/> Avaliar Ocorrência-DTI/ <a href="<?php echo URL; ?>controle-ocorrenciadti/index">Listar Ocorrência-DTI</a></div>
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
        <form class="form-horizontal" id="form_ocorrencia_editar_dti">
            <div class="form-group">
                <div class="col-sm-1">
                    <label for="occoddti" class=" control-label"><span style="color: red">* </span>N°:</label>
                    <input type="text" value="<?php echo $this->Dados[0]['occoddti'] ?>" disabled="true" required="required" class="form-control" id="occoddti">
                </div>
                <div class="col-sm-3">
                    <label for="ocdata/hora" class=" control-label">Data / hora de abertura: </label>
                    <label for="ocdata/hora" class=" control-label"><?php echo $this->Dados[0]['ocdatadti'] . " / " . $this->Dados[0]['ochoradti'] ?> </label>
                </div>

                <?php
                if ($this->Dados[0]['ocstatusdti'] == "Pendente") {
                    ?>
                    <div class="col-sm-4 text-center" >
                        <button style="width: 150px" id="confirmarDti" type="button" class="btn-lg btn-success">Confirmar</button> 
                        <button style="width: 150px" id="recusarDti" type="button" class="btn-lg btn-danger">Recusar</button>
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
                    <h3>Status: <span style="color: red"><?php echo $this->Dados[0]['ocstatusdti'] ?></span></h3>
                </div>

            </div>
            <div class="form-group">  
                <div class="col-sm-6">
                    <label for="ocusuariodti" class=" control-label"><span style="color: red">* </span>Solicitante:</label>
                    <input type="text" value="<?php echo $this->Dados[0]['usunome'] ?>" disabled="true" required="required" class="form-control" id="ocusuariodti">
                    <input type="hidden"  value="<?php echo $this->Dados[0]['usucod'] ?>" required="required" class="form-control" id="ocusucoddti">
                </div>
                <div class="col-sm-3">
                    <label for="ocdepcoddti" class="control-label"><span style="color: red">* </span>Departamento:</label>
                    <select id="ocdepcoddti" disabled="true" class="form-control">
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
                    <label for="octipocoddti"  class="control-label"><span style="color: red">* </span>Tipo Manutenção-DTI:</label>
                    <select id="octipocoddti"  class="form-control">
                        <option value="<?php echo $this->Dados[0]['tipcoddti'] ?>"><?php echo $this->Dados[0]['tipdescricaodti'] ?></option>
                        <?php
                        foreach ($this->Dados2 as $tip) {
                            ?>
                            <option value="<?= $tip['tipcoddti'] ?>"><?= $tip['tipdescricaodti'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="ocdescricaodti" class=" control-label"><span style="color: red">* </span>Descrição:</label>
                    <textarea disabled="true" class="form-control" rows="5" id="ocdescricaodti"><?php echo $this->Dados[0]['ocdescricaodti'] ?></textarea>
                </div>
                <div class="col-sm-4">
                    <label for="ocdtprevisaodti" class=" control-label"><span style="color: red">* </span>Previsão:</label>
                    <input type="date" value="<?php echo $this->Dados[0]['ocdtprevisaodti'] ?>"  required="required" class="form-control" id="ocdtprevisaodti">
                </div>
            </div>
            <?php
            if ($this->Dados[0]['ocdtrespostadti'] == null) {
                date_default_timezone_set('America/Manaus');
                $date = date('Y-m-d');
                $hora = date('H:i:s');
            } else {
                $date = $this->Dados[0]['ocdtrespostadti'];
                $hora = $this->Dados[0]['ochrrespostadti'];
            }
            ?>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="ocdtrespostadti" class=" control-label"><span style="color: red">* </span>Data:</label>
                    <input type="date" value="<?php echo $date ?>" disabled="true" required="required" class="form-control" id="ocdtrespostadti" >
                </div>
                <div class="col-sm-4">
                    <label for="ochrrespostadti" class=" control-label"><span style="color: red">* </span>Horário:</label>
                    <input type="time" value="<?php echo $hora ?>" disabled="true" required="required" class="form-control" id="ochrrespostadti">
                </div>
                <div class="col-sm-4">
                    <label for="ocprioridadedti" class="control-label"><span style="color: red">* </span>Prioridade:</label>
                    
                    <select id="ocprioridadedti" class="form-control">
                        
                        <option value="<?php echo $this->Dados[0]['ocprioridadedti'] ?>"><?php echo $this->Dados[0]['ocprioridadedti'] ?></option>
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
    <div class="panel-body" id="carregar_tb_dti">
        <table class="table" id="tabela-feed_dti" style="width:100%">
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
                        <td><?= $feed['feedcoddti'] ?></td>
                        <td><?= $feed['feeddescricaodti'] ?></td>
                        <td><?= $feed['feeddatadti'] ?> / <?= $feed['feedhoradti'] ?></td>
                        <td><?= $feed['tecnome'] ?></td>

                        <td>
                            <button onclick="excluir('<?= $feed['feedcoddti'] ?>')" id="bt-excluirDti"><img src="<?php echo URL; ?>/assets/image/delete_1.png" alt=""/></button>             
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
                <h5 class="modal-title"> Ocorrência N° <?php echo "0" . $this->Dados[0]['occoddti'] ?></h5>
                <input type="hidden" value="<?php echo $this->Dados[0]['occoddti'] ?>" required="required" class="form-control" id="feedoccoddti">
            </div>
            <div class="modal-body ">
                <form class="form-horizontal" id="form_feedback_dti">
                    <label for="feeddescricaodti" class=" control-label"><span style="color: red">* </span>Descrição:</label>
                    <textarea class="form-control" rows="5" id="feeddescricaodti"></textarea>
                    <br>
                    <label for="feedteccoddti"  class="control-label"><span style="color: red">* </span>Técnico:</label>
                    <select id="feedteccoddti"  class="form-control">

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
<script src="<?php echo URL; ?>assets/js/OcorrenciaDti.js"></script>
<script src="<?php echo URL; ?>assets/js/FeedbackDti.js"></script>


