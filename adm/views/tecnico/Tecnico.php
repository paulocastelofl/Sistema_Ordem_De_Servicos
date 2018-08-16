
<div class="panel panel-default">
    <div class="panel-body">

        <i class="fa fa-users" aria-hidden="true"></i> Listar Técnico/ <a href="<?php echo URL; ?>controle-tecnico/cadastrarTecnico">Cadastrar</a>       
    </div>
</div>

<br>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Mátricula</th>
            <th>Nome</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->Dados as $tecnico) {
            ?>
            <tr>
                <td><?= $tecnico['tecmatricula'] ?></td>
                <td><?= $tecnico['tecnome'] ?></td>

                <td>
                    <a href="<?php echo URL; ?>controle-tecnico/visualizar/<?php echo $tecnico['teccod']; ?>"><img src="<?php echo URL; ?>/assets/image/editar_1.png" alt=""/></a>             
                </td>
                <?php
                if ($tecnico['tecstatus'] == 'Ativo') {
                    ?>
                    <td>
                        <a href="" onclick="excluir('<?= $tecnico['teccod'] ?>', 'Inativo')" ><img src="<?php echo URL; ?>/assets/image/icone/on_1.png" alt=""/></a>
                    </td>
                    <?php
                } else {
                    ?>
                    <td>
                        <a href="" onclick="excluir('<?= $tecnico['teccod'] ?>', 'Ativo')" ><img src="<?php echo URL; ?>/assets/image/icone/off_1.png" alt=""/></a>
                    </td>
                    <?php
                }
                ?>

            </tr> 

        <script>
            function excluir(id, status) {
                if (status == "Ativo") {
                    var variavel = "Ativando Técnico";
                } else {
                    var variavel = "Desativando Técnico";
                }
                $.ajax({
                    type: "POST",
                    url: "http://192.168.100.16:82/OSproject/adm/controle-tecnico/desativarTecnico",
                    data: {
                        teccod: id,
                        tecstatus: status
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


