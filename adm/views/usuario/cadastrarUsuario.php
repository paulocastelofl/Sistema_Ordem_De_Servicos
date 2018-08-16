
<div class="panel panel-default">
    <div class="panel-body"><i class="fa fa-users" aria-hidden="true"></i> Cadastrar Usuário/ <a href="<?php echo URL; ?>controle-usuario/index">Listar Usuários</a></div>
    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    ?>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" id="form_usuario">
            <div class="form-group">
                <label for="usunome" class="col-sm-2 control-label">Nome:</label>
                <div class="col-sm-8">
                    <input type="text" required="required" class="form-control" id="usunome" placeholder="Digite nome">
                </div>
            </div>
            <div class="form-group">
                <label for="usulogin" class="col-sm-2 control-label">Login:</label>
                <div class="col-sm-8">
                    <input type="text" required="required" class="form-control" id="usulogin" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="ususenha" class="col-sm-2 control-label">senha:</label>
                <div class="col-sm-4">
                    <input type="password" required="required" class="form-control" id="ususenha" >
                </div>
                <label class="col-sm-4 text-center control-label"><span style="color: red" id="label_ususenha"></span></label>
            </div>
            <div class="form-group">
                <label for="confsenha"  class="col-sm-2 control-label">Confirmar senha:</label>
                <div class="col-sm-4">
                    <input type="password" required="required" onblur="confirmarSenha();" class="form-control" id="confsenha" >
                </div>
                <label class="col-sm-4 text-center control-label"><span style="color: red" id="label_confsenha"></span></label>
            </div>
            <div class="form-group">
                 <label for="confsenha"  class="col-sm-2 control-label">Nível de Acesso:</label>
                <div class="col-sm-4">
                    <select id="usunivel" class="form-control">
                        <option value="3">Usuário</option>
                        <option value="2">Técnico Manutenção</option>
                        <option value="4">Técnico DTI</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>
                </div>
            </div>
        </form>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/usuario2.js"></script>