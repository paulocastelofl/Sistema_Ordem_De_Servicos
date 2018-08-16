<link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">
<style>
    th{
        background-color: #c4e3f3;
    }

</style>
<div class="col-sm-12">
    <h2>Relátorio de ocorrências Manutenção</h2>
</div>
<div class="col-sm-4">
    <h3>Status: <b><span style="color: red"><?php echo $this->Dados[0]['ocstatus'] ?></span></b></h3>
</div>
<div class="col-sm-6">
    <h3> <b><b></h3>
                </div>
                <div class="col-sm-12">
                    <table class="table table-bordered table-responsive" style="font-size: 11px; width: 2500px">
                        <thead>
                            <tr>
                                <th >N°</th>
                                <th>Nome</th>
                                <th>Depart.</th>
                                <th>Descrição</th>
                                <th>Tipo Manutenção</th>
                                <th>Prioridade</th>
                                <th>Abertura Solicitação-A</th>  
                                <th>Resposta Técnico-B</th>
                                <th style="text-align:center;">T1 = A - B<br>( H:mm:ss )</th>     
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($this->Dados as $ocorrencia) {
                                // -----------------------T1-----------------------------------
                                $date1 = new DateTime($ocorrencia['ocdata'] . 'T' . $ocorrencia['ochora']);
                                $date2 = new DateTime($ocorrencia['ocdtresposta'] . 'T' . $ocorrencia['ochrresposta']);

                                $diff = $date2->diff($date1);

                                $h1 = $diff->h;
                                $m1 = $diff->i;
                                $s1 = $diff->s;
                                $h1 = $h1 + ($diff->days * 24);

                                $tempo1 = $h1 . ':' . $m1 . ':' . $s1;
                                ?>
                                <tr>
                                    <td >00<?= $ocorrencia['occod'] ?></td>
                                    <td style="width: 100px"><?= $ocorrencia['usunome'] ?></td>
                                    <td style="width: 100px"><?= $ocorrencia['depdescricao'] ?></td>
                                    <td style="width: 400px"><?= $ocorrencia['ocdescricao'] ?></td>
                                    <td><?= $ocorrencia['tipdescricao'] ?></td>
                                    <td><?= $ocorrencia['ocprioridade'] ?></td>
                                    <td><?= $ocorrencia['ocdata'] ?>  &nbsp;&nbsp; <?= $ocorrencia['ochora'] ?></td>
                                    <td><?= $ocorrencia['ocdtresposta'] ?> &nbsp;&nbsp;<?= $ocorrencia['ochrresposta'] ?></td>
                                    <td style="text-align:center;"><?php echo $tempo1 ?></td>
                                    <td><?= $ocorrencia['ocstatus'] ?></td>


                                </tr> 
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
