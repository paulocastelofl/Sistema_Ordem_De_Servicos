<link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">
<style>
    th{
        background-color: #c4e3f3;
    }

</style>
<div class="col-sm-12">
    <h2>Relátorio de ocorrências DTI</h2>
</div>
<div class="col-sm-4">
    <h3>Status: <b><span style="color: red"><?php echo $this->Dados[0]['ocstatusdti'] ?></span></b></h3>
</div>
<div class="col-sm-6">
    <h3> <b><b></h3>
                </div>
                <div class="col-sm-12">
                    <table class="table table-bordered table-responsive" style="font-size: 10px; width: 2500px">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nome</th>
                                <th>Depart.</th>
                                <th>Descrição</th>
                                <th>Tipo Manutenção</th>
                                <th>Prioridade</th>
                                <th>Abertura Solicitação-A</th>  
                                <th>Resposta Técnico-B</th>
                                <th style="text-align:center; width: 80px;">T1 = A - B<br>( H:mm:ss )</th>                
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($this->Dados as $ocorrencia) {
                                // -----------------------T1-----------------------------------
                                $date1 = new DateTime($ocorrencia['ocdatadti'] . 'T' . $ocorrencia['ochoradti']);
                                $date2 = new DateTime($ocorrencia['ocdtrespostadti'] . 'T' . $ocorrencia['ochrrespostadti']);

                                $diff = $date2->diff($date1);

                                $h1 = $diff->h;
                                $m1 = $diff->i;
                                $s1 = $diff->s;
                                $h1 = $h1 + ($diff->days * 24);

                                $tempo1 = $h1 . ':' . $m1 . ':' . $s1;

                               
                                ?>
                                <tr>
                                    <td >00<?= $ocorrencia['occoddti'] ?></td>
                                    <td style="width: 100px"><?= $ocorrencia['usunome'] ?></td>
                                    <td style="width: 100px"><?= $ocorrencia['depdescricao'] ?></td>
                                    <td style="width: 400px"><?= $ocorrencia['ocdescricaodti'] ?></td>
                                    <td><?= $ocorrencia['tipdescricaodti'] ?></td>
                                    <td><?= $ocorrencia['ocprioridadedti'] ?></td>
                                    <td><?= $ocorrencia['ocdatadti'] ?>  &nbsp;&nbsp; <?= $ocorrencia['ochoradti'] ?></td>
                                    <td><?= $ocorrencia['ocdtrespostadti'] ?> &nbsp;&nbsp;<?= $ocorrencia['ochrrespostadti'] ?></td>
                                    <td style="text-align:center;"><?php echo $tempo1 ?></td>
                                    <td><?= $ocorrencia['ocstatusdti'] ?></td>


                                </tr> 
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
