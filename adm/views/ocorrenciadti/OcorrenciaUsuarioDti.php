
<div class="panel panel-default">
    <div class="panel-body">

        <img src="<?php echo URL; ?>/assets/image/computador.png" alt=""/> Listar Ocorrências-DTI/ <a href="<?php echo URL; ?>controle-ocorrenciadti/cadastrarOcorrenciaDti">Abrir Ocorrência-DTI</a>       
    </div>
</div>

<br>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th></th>
            <th>N°</th>
            <th>Nome</th>
            <th>Depart.</th>
            <th>Descrição</th>
            <th>Prioridade</th>
            <th>Status</th>  
            <th>Previsão</th>
            <th>Avaliação</th>
            <th>Feed</th>
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
                
                if($ocorrencia['ocstatusdti'] =='Finalizado'){
                   ?>
                     <td><a href="<?php echo URL; ?>controle-ocorrenciadti/impressaoDti/<?php echo $ocorrencia['occoddti'];?>" target="blank" ><img src="<?php echo URL; ?>/assets/image/print-on.png" alt=""/></a></td>
                    <?php
                }else{
                    ?>
                        <td><a href="" ><img src="<?php echo URL; ?>/assets/image/print-off.png" alt=""/></a></td>
                    <?php
                    }
                ?>
             
                <td style=" width: 10px; "><?= $ocorrencia['occoddti'] ?></td>
                <td style=" width: 100px; "><?= $ocorrencia['usunome'] ?></td>
                <td style=" width: 80px; "><?= $ocorrencia['depdescricao'] ?></td>
                <td style=" width: 550px;"><?= $ocorrencia['ocdescricaodti'] ?></td>
                <td style=" width: 80px;"><?= $ocorrencia['ocprioridadedti'] ?></td>
                <td style=" width: 50px;"><?= $ocorrencia['ocstatusdti'] ?></td>
                <?php
                if ($ocorrencia['ocdtprevisaodti'] == null) {
                    ?>
                    <td style=" width: 50px;">Indefinido</td> 
                    <?php
                } else {
                    ?>
                    <td style=" width: 50px;"><?= $ocorrencia['ocdtprevisaodti'] ?></td>
                    <?php
                }
                ?>
                <?php
                $varcheck1 = "";
                $varcheck2 = "";
                $varcheck3 = "";
                $varcheck4 = "";
                $varcheck5 = "";
                ?>

                <td style=" width: 130px;">
                    <?php
                    if ($ocorrencia['ocavaliacaodti'] == 1) {

                        $varcheck1 = "checked";
                    } else {
                        $varchek1 = "";
                    }

                    if ($ocorrencia['ocavaliacaodti'] == 2) {
                        $varcheck2 = "checked";
                    } else {
                        $varchek2 = "";
                    }

                    if ($ocorrencia['ocavaliacaodti'] == 3) {
                        $varcheck3 = "checked";
                    } else {
                        $varchek3 = "";
                    }

                    if ($ocorrencia['ocavaliacaodti'] == 4) {
                        $varcheck4 = "checked";
                    } else {
                        $varchek4 = "";
                    }

                    if ($ocorrencia['ocavaliacaodti'] == 5) {
                        $varcheck5 = "checked";
                    } else {
                        $varchek5 = "";
                    }
                    ?>

                    <form id="form_avaliacao">
                        <div class="estrela">

                            <input type="hidden" id="ocstatus" value="<?= $ocorrencia['ocstatusdti'] ?>">

                            <input type="radio" id="vazio<?php echo $ocorrencia['occoddtidti'] ?>" name="estrela<?php echo $ocorrencia['occoddti'] ?>" value="" checked="">

                            <label for="estrela_um<?php echo $ocorrencia['occoddti'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um<?php echo $ocorrencia['occoddti'] ?>" name="estrela<?php echo $ocorrencia['occoddti'] ?>" value="1" <?php
                            if (!empty($varcheck1)) {
                                echo $varcheck1;
                            }
                            ?>>

                            <label for="estrela_dois<?php echo $ocorrencia['occoddti'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois<?php echo $ocorrencia['occoddti'] ?>" name="estrela<?php echo $ocorrencia['occoddti'] ?>" value="2" <?php
                            if (!empty($varcheck2)) {
                                echo $varcheck2;
                            }
                            ?>>

                            <label for="estrela_tres<?php echo $ocorrencia['occoddti'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres<?php echo $ocorrencia['occoddti'] ?>" name="estrela<?php echo $ocorrencia['occoddti'] ?>" value="3" <?php
                            if (!empty($varcheck3)) {
                                echo $varcheck3;
                            }
                            ?>>

                            <label for="estrela_quatro<?php echo $ocorrencia['occoddti'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro<?php echo $ocorrencia['occoddti'] ?>" name="estrela<?php echo $ocorrencia['occoddti'] ?>" value="4" <?php
                            if (!empty($varcheck4)) {
                                echo $varcheck4;
                            }
                            ?>>

                            <label for="estrela_cinco<?php echo $ocorrencia['occoddti'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco<?php echo $ocorrencia['occoddti'] ?>" name="estrela<?php echo $ocorrencia['occoddti'] ?>" value="5" <?php
                                   if (!empty($varcheck5)) {
                                       echo $varcheck5;
                                   }
                                   ?>>
                            &nbsp;&nbsp; &nbsp;&nbsp;
                            <button type="button" onclick="avaliar('<?= $ocorrencia['occoddti'] ?>', '<?= $ocorrencia['ocstatusdti'] ?>')" value="Avaliar"><img src="<?php echo URL; ?>/assets/image/icone/pago.png" alt=""/></button>
                        </div>
                    </form>
                </td>
                <td>
                    <a href="<?php echo URL; ?>controle-feedbackdti/visualizarfeedDti/<?php echo $ocorrencia['occoddti']; ?>"><img src="<?php echo URL; ?>/assets/image/olho.png" alt=""/></a>
                </td>

            </tr>

            <?php
        }
        ?>
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/AvaliacaoDti.js"></script>


