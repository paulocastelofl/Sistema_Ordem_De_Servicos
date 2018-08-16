<div class="panel panel-default">
    <div class="panel-body">

        <i class="fa fa-users" aria-hidden="true"></i> Listar Usuário/ <a href="<?php echo URL; ?>controle-usuario/cadastrarUsuario">Cadastrar</a>       
    </div>
</div>

<br>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Nível</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->Dados as $usuario) {
            if($usuario['usunivel'] == '1'){
                $nivel = 'Administrador';
            }elseif($usuario['usunivel'] == '2'){
                $nivel = 'Técnico Manutenção';
            }elseif($usuario['usunivel'] == '3'){
                $nivel = 'Usuário';
            }elseif($usuario['usunivel'] == '4'){
                $nivel = 'Técnico DTI';
            }
            ?>
            <tr>
                <td><?= $usuario['usucod'] ?></td>
                <td><?= $usuario['usunome'] ?></td>
                <td><?= $usuario['usulogin'] ?></td>
                <td><?php echo $nivel ?></td>
  
                <td>
                    <a href="<?php echo URL; ?>controle-usuario/visualizar/<?php echo $usuario['usucod']; ?>"><img src="<?php echo URL; ?>/assets/image/editar_1.png" alt=""/></a>             
                </td>
                <td>
                    <a href=""><img src="<?php echo URL; ?>/assets/image/delete_1.png" alt=""/></a>
                </td>

            </tr> 
            <?php
        }
        ?>
    </tbody>
</table>


