
<div class="panel panel-default">
    <div class="panel-body">

        <img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/> Listar Ocorrências-Manutenção/ <a href="<?php echo URL; ?>controle-ocorrencia/cadastrarOcorrencia">Abrir Ocorrência-Manutenção</a>       
    </div>
</div>

<br>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>N°</th>
            <th>Nome</th>
            <th>Depart.</th>
            <th>Descrição</th>
            <th>Prioridade</th>
            <th>Status</th>  
            <th>Previsão</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->Dados as $ocorrencia) {

            if ($ocorrencia['ocstatus'] == 'Pendente') {
                ?>
                <tr style="background-color: #fffa65">
                    <?php
                } else {
                    ?>
                <tr>
                    <?php
                }
                ?>

                <td style=" width: 10px; "><?= $ocorrencia['occod'] ?></td>
                <td><?= $ocorrencia['usunome'] ?></td>
                <td style=" width: 80px; "><?= $ocorrencia['depdescricao'] ?></td>
                <td><?= $ocorrencia['ocdescricao'] ?></td>
                <td style=" width: 80px; "><?= $ocorrencia['ocprioridade'] ?></td>
                <td><?= $ocorrencia['ocstatus'] ?></td>
                <?php
                if ($ocorrencia['ocdtprevisao'] == null) {
                    ?>
                    <td>Indefinido</td> 
                    <?php
                } else {
                    ?>
                    <td><?= $ocorrencia['ocdtprevisao'] ?></td>
                    <?php
                }
                ?>


                <td>
                    <a class="btn btn-default" href="<?php echo URL; ?>controle-ocorrencia/visualizar/<?php echo $ocorrencia['occod']; ?>"><img src="<?php echo URL; ?>/assets/image/feedback.png" alt=""/></a>             
                </td>
                <td>
                    <a class="btn btn-default" href="<?php echo URL; ?>controle-ocorrencia/executarOcorrencia/<?php echo $ocorrencia['occod']; ?>"><img src="<?php echo URL; ?>/assets/image/martelo.png" alt=""/></a>             
                </td>
                <?php
                if ($ocorrencia['ocstatus'] == 'Executando') {
                    ?>
                    <td>
                        <a class="btn btn-default"  href="<?php echo URL; ?>controle-ocorrencia/finalizarOcorrencia/<?php echo $ocorrencia['occod']; ?>"><img src="<?php echo URL; ?>/assets/image/bandeira.png" alt=""/></a>             
                    </td>
                    <?php
                } else {
                    ?>
                    <td>
                        <button class="btn btn-default" ><img src="<?php echo URL; ?>/assets/image/cancelar.png" alt=""/></button>             
                    </td>
                    <?php
                }
                ?>


            </tr> 

            <?php
        }
        ?>
    </tbody>
</table>


