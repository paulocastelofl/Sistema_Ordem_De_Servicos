
<div class="panel panel-default">
    <div class="panel-body">

        <img src="<?php echo URL; ?>/assets/image/computador.png" alt=""/> Listar Ocorrências Em processo-DTI/ <a href="<?php echo URL; ?>controle-ocorrenciadti/cadastrarOcorrenciaDti">Abrir Ocorrência-DTI</a>       
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

            if ($ocorrencia['ocstatusdti'] == 'Pendente') {
                ?>
                <tr style="background-color: #fffa65">
                    <?php
                } else {
                    ?>
                <tr>
                    <?php
                }
                ?>

                <td style=" width: 10px; "><?= $ocorrencia['occoddti'] ?></td>
                <td><?= $ocorrencia['usunome'] ?></td>
                <td style=" width: 80px; "><?= $ocorrencia['depdescricao'] ?></td>
                <td><?= $ocorrencia['ocdescricaodti'] ?></td>
                <td style=" width: 80px; "><?= $ocorrencia['ocprioridadedti'] ?></td>
                <td><?= $ocorrencia['ocstatusdti'] ?></td>
                <?php
                if ($ocorrencia['ocdtprevisaodti'] == null) {
                    ?>
                    <td>Indefinido</td> 
                    <?php
                } else {
                    ?>
                    <td><?= $ocorrencia['ocdtprevisaodti'] ?></td>
                    <?php
                }
                ?>


                <td>
                    <a class="btn btn-default" href="<?php echo URL; ?>controle-ocorrenciadti/visualizardti/<?php echo $ocorrencia['occoddti']; ?>"><img src="<?php echo URL; ?>/assets/image/feedback.png" alt=""/></a>             
                </td>
                <td>
                    <a class="btn btn-default" href="<?php echo URL; ?>controle-ocorrenciadti/executarOcorrenciadti/<?php echo $ocorrencia['occoddti']; ?>"><img src="<?php echo URL; ?>/assets/image/martelo.png" alt=""/></a>             
                </td>
                <?php
                if ($ocorrencia['ocstatusdti'] == 'Executando') {
                    ?>
                    <td>
                        <a class="btn btn-default"  href="<?php echo URL; ?>controle-ocorrenciadti/finalizarOcorrenciadti/<?php echo $ocorrencia['occoddti']; ?>"><img src="<?php echo URL; ?>/assets/image/bandeira.png" alt=""/></a>             
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


