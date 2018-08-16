<div class="well">
    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    ?>
    <div class="page-header">
        <h1>Listar usuários</h1>
    </div>
    
    <div class="pull-right">
        <a href="<?php echo URL; ?>controle-usuario/cadastrar"><button type="button" class="btn btn-sm btn-success">Cadastrar</button></a>
    </div>

    <?php
//echo "<hr>ID: " . $_SESSION['id'] . "<br>";
//echo "Nome: " . $_SESSION['name'] . "<br>";
//echo "E-mail: " . $_SESSION['email'] . "<hr>";


    if (!empty($this->Dados)):
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="hidden-xs">E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($this->Dados as $user) {
                    extract($user);
                    ?>               
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td class="hidden-xs"><?php echo $email; ?></td>
                        <td>
                            <a href="<?php echo URL; ?>controle-usuario/visualizar/<?php echo $id; ?>"><button type="button" class="btn btn-primary">Visualizar</button></a>

                            <a href="<?php echo URL; ?>controle-usuario/Editar/<?php echo $id; ?>"><button type="button" class="btn btn-warning">Editar</button></a>

                            <a href="<?php echo URL; ?>controle-usuario/apagar/<?php echo $id; ?>"><button type="button" class="btn btn-danger">Apagar</button></a>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    endif;
    ?>
</div>
