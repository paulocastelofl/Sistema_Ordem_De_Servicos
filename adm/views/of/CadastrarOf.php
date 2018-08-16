<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-8"> Cadastrar Of/ <a href="<?php echo URL; ?>controle-of/index">Listar Of's</a></div>
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
                <div class="col-sm-4">
                    <label for="ofnumero" class=" control-label"><span style="color: red">* </span>N° Of:</label>
                    <input type="text" value="" required="required" class="form-control" id="ofnumero">

                </div>                   
                <div class="col-sm-4">
                    <label for="example-number-input" class="col-2 col-form-label">Quant. peças</label>
                    <input class="form-control" type="number" value="" id="example-number-input">
                </div>

            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="octipocod" class="control-label"><span style="color: red">* </span>Código produto:</label>
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
                <div class="col-sm-8">
                    <label for="ofnumero" class=" control-label"><span style="color: red">* </span>Descrição do produto:</label>
                    <input type="text" disabled="true" value="" required="required" class="form-control" id="ofnumero">

                </div> 
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="octipocod" class="control-label"><span style="color: red">* </span>Responsável:</label>
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
                <div class="col-sm-4">
                    <label for="octipocod" class="control-label"><span style="color: red">* </span>Avaliação C.Q.:</label>
                    <select id="octipocod" class="form-control">
                        <option>Selecione</option>
                        <option>Liberado</option>
                    </select>
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
                    <input type="date" value="<?php echo $date ?>" disabled="true" required="required" class="form-control" id="ocdata" >
                </div>
                <div class="col-sm-4">
                    <label for="ochora" class=" control-label"><span style="color: red">* </span>Horário:</label>
                    <input type="time" value="<?php echo $hora ?>" disabled="true" required="required" class="form-control" id="ochora">
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
