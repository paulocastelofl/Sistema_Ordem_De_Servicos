
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-4"><i class="fa fa-users" aria-hidden="true"></i> Editar Departamento/ <a href="<?php echo URL; ?>controle-departamento/index">Listar Departamento</a></div>
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
        <form class="form-horizontal" id="form_departamento_editar">
            <div class="form-group">
                 <input type="hidden" value="<?php echo $this->Dados[0]['depcod']?>" id="depcod" >
                <label for="depdescricao" class="col-sm-2 control-label"><span style="color: red">* </span>Descrição:</label>
                <div class="col-sm-8">
                    <input type="text" required="required" value="<?php echo $this->Dados[0]['depdescricao']?>" class="form-control" id="depdescricao" placeholder="Digite a descrição">
                </div>
            </div>
            <div class="form-group">
                <label for="depresponsavel" class="col-sm-2 control-label"><span style="color: red">* </span>Nome:</label>
                <div class="col-sm-8">
                    <input type="text" required="required" class="form-control" value="<?php echo $this->Dados[0]['depresponsavel']?>" id="depresponsavel" placeholder="Digite responsável">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-saved"></i> Alterar</button>
                </div>
            </div>
        </form>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/Departamento.js"></script>





