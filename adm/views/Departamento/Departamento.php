
<div class="panel panel-default">
    <div class="panel-body">

        <i class="fa fa-users" aria-hidden="true"></i> Listar Departamento/ <a href="<?php echo URL; ?>controle-departamento/cadastrarDepartamento">Cadastrar</a>       
    </div>
</div>

<br>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Cód.</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->Dados as $dep) {
            ?>
            <tr>
                <td><?= $dep['depcod'] ?></td>
                <td><?= $dep['depdescricao'] ?></td>
                <td><?= $dep['depresponsavel'] ?></td>

                <td>
                    <a href="<?php echo URL; ?>controle-departamento/visualizar/<?php echo $dep['depcod']; ?>"><img src="<?php echo URL; ?>/assets/image/editar_1.png" alt=""/></a>             
                </td>
                <?php
                if ($dep['depstatus'] == 'Ativo') {
                    ?>
                    <td>
                        <a href="" onclick="excluir('<?= $dep['depcod'] ?>', 'Inativo')" ><img src="<?php echo URL; ?>/assets/image/icone/on_1.png" alt=""/></a>
                    </td>
                    <?php
                } else {
                    ?>
                    <td>
                        <a href="" onclick="excluir('<?= $dep['depcod'] ?>', 'Ativo')" ><img src="<?php echo URL; ?>/assets/image/icone/off_1.png" alt=""/></a>
                    </td>
                    <?php
                }
                ?>

            </tr> 

        <script>
            function excluir(id, status) {
                
                if (status == "Ativo") {
                    var variavel = "Ativando Departamento";
                } else {
                    var variavel = "Desativando Departamento";
                }
                $.ajax({
                    type: "POST",
                    url: "http://192.168.100.16:82/OSproject/adm/controle-departamento/desativarDepartamento",
                    data: {
                        depcod: id,
                        depstatus: status
                    },

                    beforeSend: function () {

                        $('#modal-grupo').modal('hide');
                        $('#h3-modal').html(variavel);

                        $('#mode').modal('show');
                    },

                    success: function (resultado) {
                        if (resultado !== "") {
                            $('#mode').modal('hide');

                            //alert("PPPPPPPP");
                            console.log(resultado);
                        } else {
                            console.log("error retorno vazio!");
                        }
                    }
                });
                return false;
            }

        </script>
        <?php
    }
    ?>
</tbody>
</table>


