
<div class="panel panel-default">
    <div class="panel-body"><i class="fa fa-users" aria-hidden="true"></i> Perfil Usuário/ <a href="<?php echo URL; ?>controle-usuario/index">Listar Usuários</a></div>
    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    ?>
</div>
<div class="panel panel-default">
    <div class="panel-body">
          <div class="6"><img  src="<?php echo URL; ?>/arquivo/<?php echo $_SESSION['foto'] ?>"  class="img-circle" alt="Foto de exibição"/></div>
            
        <form action="<?php echo URL; ?>controle-usuario/salvarFoto" method="post" enctype="multipart/form-data" name="cadastro" >
            Foto de exibição:<br />
            <input type="file" name="arquivo" /><br /><br />
            <input type="submit" class="btn btn-primary" name="enviar" value="Cadastrar" />
        </form>
    </div>

</div>