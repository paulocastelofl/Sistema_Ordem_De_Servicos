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
                                <th>Inicio Execução-C</th>
                                <th style="text-align:center;">T2 = B - C<br>( H:mm:ss )</th>
                                <th>Final Execução-D</th>
                                <th style="text-align:center;">T3 = C - D<br>( H:mm:ss )</th>
                                <th style="text-align:center;">Total A - D<br>( H:mm:ss )</th>
                                <th>Descrição Atividade Realizada</th>
                                <th>Técnico 01</th>
                                <th>Técnico 02</th>
                                <th>Técnico 03</th>
                                <th>Técnico 04</th>
                                <th>Status</th>
                                <th>Avaliação</th>
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

                                // -----------------------------T2--------------------------------------
                                $date3 = new DateTime($ocorrencia['ocdtresposta'] . 'T' . $ocorrencia['ochrresposta']);
                                $date4 = new DateTime($ocorrencia['atdtinicio'] . 'T' . $ocorrencia['athrinicio']);

                                $diff1 = $date4->diff($date3);

                                $h2 = $diff1->h;
                                $m2 = $diff1->i;
                                $s2 = $diff1->s;
                                $h2 = $h2 + ($diff1->days * 24);

                                $tempo2 = $h2 . ':' . $m2 . ':' . $s2;

                                // ----------------------------T3------------------------------------------------
                                $date5 = new DateTime($ocorrencia['atdtinicio'] . 'T' . $ocorrencia['athrinicio']);
                                $date6 = new DateTime($ocorrencia['atdtfinal'] . 'T' . $ocorrencia['athrfinal']);


                                $diff3 = $date6->diff($date5);

                                $h3 = $diff3->h;
                                $m3 = $diff3->i;
                                $s3 = $diff3->s;
                                $h3 = $h3 + ($diff3->days * 24);

                                $tempo3 = $h3 . ':' . $m3 . ':' . $s3;



                                // T4
                                $date7 = new DateTime($ocorrencia['ocdata'] . 'T' . $ocorrencia['ochora']);
                                $date8 = new DateTime($ocorrencia['atdtfinal'] . 'T' . $ocorrencia['athrfinal']);


                                // The diff-methods returns a new DateInterval-object...
                                $diff4 = $date8->diff($date7);

                                $h4 = $diff4->h;
                                $m4 = $diff4->i;
                                $s4 = $diff4->s;
                                $h4 = $h4 + ($diff4->days * 24);

                                $tempo4 = $h4 . ':' . $m4 . ':' . $s4;
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
                                    <td><?= $ocorrencia['atdtinicio'] ?> &nbsp;&nbsp; <?= $ocorrencia['athrinicio'] ?></td>
                                    <td style="text-align:center;"><?php echo $tempo2 ?></td>
                                    <td><?= $ocorrencia['atdtfinal'] ?> &nbsp;&nbsp; <?= $ocorrencia['athrfinal'] ?></td>
                                    <td style="text-align:center;"><?php echo $tempo3; ?></td>
                                    <td style="text-align:center;"><?php echo $tempo4; ?></td>
                                    <td><?= $ocorrencia['atdescricao'] ?></td>
                                    <td><?= $ocorrencia['atteccod1'] ?></td>
                                    <td><?= $ocorrencia['atteccod2'] ?></td>
                                    <td><?= $ocorrencia['atteccod3'] ?></td>
                                    <td><?= $ocorrencia['atteccod4'] ?></td>
                                    <td><?= $ocorrencia['ocstatus'] ?></td>
                                    <td><?= $ocorrencia['ocavaliacao'] ?></td>

                                </tr> 
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
