<link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">
<style>
    th{
        background-color: #c4e3f3;
        font-size: 16px;
    }

    body{
        background-color: #eeeeee;
    }

</style>
<script>
    setTimeout("document.location=document.location", 15000);

    var bleep = new Audio();
    bleep.src = "http://192.168.100.16:82/OSproject/adm/sons/alerta.mp3";


</script>
<div class=" text-center" >
    <h2><b><img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/>&nbsp;&nbsp;-- Monitor de Atividades --&nbsp;&nbsp;<img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/></b></h2>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-sm-12" >
            <h2>Em análise:</h2>
        </div>

        <div class="col-sm-12">
            <table class="table table-bordered table-responsive" style="font-size: 13px; width: 1550px">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Solicitante</th>
                        <th>Depart.</th>
                        <th>Descrição</th>
                        <th>Tipo Manutenção</th>
                        <th>Prioridade</th>
                        <th>Data/Hora-Solicitação</th>  
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->Dados as $ocorrencia) {
                        ?>

                        <tr>
                            <td >00<?= $ocorrencia['occod'] ?></td>
                            <td style="width: 100px"><?= $ocorrencia['usunome'] ?></td>
                            <td style="width: 100px"><?= $ocorrencia['depdescricao'] ?></td>
                            <td style="width: 400px"><?= $ocorrencia['ocdescricao'] ?></td>
                            <td><?= $ocorrencia['tipdescricao'] ?></td>
                            <td><?= $ocorrencia['ocprioridade'] ?></td>
                            <td><?= $ocorrencia['ocdata'] ?>  &nbsp;&nbsp; <?= $ocorrencia['ochora'] ?></td> 
                            <?php
                            if ($ocorrencia['ocstatus'] == 'Pendente') {
                                ?>
                        <script>
                            bleep.play();
                        </script>
                        <td style="background-color: #FC0"><?= $ocorrencia['ocstatus'] ?></td>
                        <?php
                    } else if ($ocorrencia['ocstatus'] == 'Aberto') {
                        ?>
                        <td ><?= $ocorrencia['ocstatus'] ?></td>
                        <?php
                    } else if ($ocorrencia['ocstatus'] == 'Executando') {
                        ?>
                        <td style="background-color: green; color: white"><?= $ocorrencia['ocstatus'] ?></td>
                        <?php
                    }
                    ?>
                    </tr> 
                    <?php
                }
                ?>
                </tbody>
            </table> 
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-sm-12" >
            <h2>Em execução:</h2>
        </div>

        <div class="col-sm-12">
            <table class="table table-bordered table-responsive" style="font-size: 13px; width: 1550px">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Solicitante</th>
                        <th>Depart.</th>
                        <th>Descrição</th>
                        <th>Tipo Manutenção</th>
                        <th>Prioridade</th>
                        <th>Data/Hora-Solicitação</th>  
                        <th>Técnico</th>  
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->Dados1 as $ocorrencia) {
                        ?>

                        <tr>
                            <td >00<?= $ocorrencia['occod'] ?></td>
                            <td style="width: 100px"><?= $ocorrencia['usunome'] ?></td>
                            <td style="width: 100px"><?= $ocorrencia['depdescricao'] ?></td>
                            <td style="width: 400px"><?= $ocorrencia['ocdescricao'] ?></td>
                            <td><?= $ocorrencia['tipdescricao'] ?></td>
                            <td><?= $ocorrencia['ocprioridade'] ?></td>
                            <td><?= $ocorrencia['ocdata'] ?>  &nbsp;&nbsp; <?= $ocorrencia['ochora'] ?></td>
                            <td><?= $ocorrencia['atteccod1'] ?></td>
                            <td style="background-color: green; color: white"><?= $ocorrencia['ocstatus'] ?></td>
                        </tr> 
                        <?php
                    }
                    ?>
                </tbody>
            </table> 
        </div>
    </div>
</div>
<script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
