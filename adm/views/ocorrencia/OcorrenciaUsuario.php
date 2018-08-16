
<div class="panel panel-default">
    <div class="panel-body">

       <img src="<?php echo URL; ?>/assets/image/chave.png" alt=""/> Listar Ocorrências-Manutenção/ <a href="<?php echo URL; ?>controle-ocorrencia/cadastrarOcorrencia">Abrir Ocorrência-Manutenção</a>       
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
                
                if($ocorrencia['ocstatus'] =='Finalizado'){
                   ?>
                     <td><a href="<?php echo URL; ?>controle-ocorrencia/impressao/<?php echo $ocorrencia['occod'];?>" target="blank" ><img src="<?php echo URL; ?>/assets/image/print-on.png" alt=""/></a></td>
                    <?php
                }else{
                    ?>
                        <td><a href="" ><img src="<?php echo URL; ?>/assets/image/print-off.png" alt=""/></a></td>
                    <?php
                    }
                ?>
             
                <td style=" width: 10px; "><?= $ocorrencia['occod'] ?></td>
                <td style=" width: 100px; "><?= $ocorrencia['usunome'] ?></td>
                <td style=" width: 80px; "><?= $ocorrencia['depdescricao'] ?></td>
                <td style=" width: 550px;"><?= $ocorrencia['ocdescricao'] ?></td>
                <td style=" width: 80px;"><?= $ocorrencia['ocprioridade'] ?></td>
                <td style=" width: 50px;"><?= $ocorrencia['ocstatus'] ?></td>
                <?php
                if ($ocorrencia['ocdtprevisao'] == null) {
                    ?>
                    <td style=" width: 50px;">Indefinido</td> 
                    <?php
                } else {
                    ?>
                    <td style=" width: 50px;"><?= $ocorrencia['ocdtprevisao'] ?></td>
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
                    if ($ocorrencia['ocavaliacao'] == 1) {

                        $varcheck1 = "checked";
                    } else {
                        $varchek1 = "";
                    }

                    if ($ocorrencia['ocavaliacao'] == 2) {
                        $varcheck2 = "checked";
                    } else {
                        $varchek2 = "";
                    }

                    if ($ocorrencia['ocavaliacao'] == 3) {
                        $varcheck3 = "checked";
                    } else {
                        $varchek3 = "";
                    }

                    if ($ocorrencia['ocavaliacao'] == 4) {
                        $varcheck4 = "checked";
                    } else {
                        $varchek4 = "";
                    }

                    if ($ocorrencia['ocavaliacao'] == 5) {
                        $varcheck5 = "checked";
                    } else {
                        $varchek5 = "";
                    }
                    ?>

                    <form id="form_avaliacao">
                        <div class="estrela">

                            <input type="hidden" id="ocstatus" value="<?= $ocorrencia['ocstatus'] ?>">

                            <input type="radio" id="vazio<?php echo $ocorrencia['occod'] ?>" name="estrela<?php echo $ocorrencia['occod'] ?>" value="" checked="">

                            <label for="estrela_um<?php echo $ocorrencia['occod'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um<?php echo $ocorrencia['occod'] ?>" name="estrela<?php echo $ocorrencia['occod'] ?>" value="1" <?php
                            if (!empty($varcheck1)) {
                                echo $varcheck1;
                            }
                            ?>>

                            <label for="estrela_dois<?php echo $ocorrencia['occod'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois<?php echo $ocorrencia['occod'] ?>" name="estrela<?php echo $ocorrencia['occod'] ?>" value="2" <?php
                            if (!empty($varcheck2)) {
                                echo $varcheck2;
                            }
                            ?>>

                            <label for="estrela_tres<?php echo $ocorrencia['occod'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres<?php echo $ocorrencia['occod'] ?>" name="estrela<?php echo $ocorrencia['occod'] ?>" value="3" <?php
                            if (!empty($varcheck3)) {
                                echo $varcheck3;
                            }
                            ?>>

                            <label for="estrela_quatro<?php echo $ocorrencia['occod'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro<?php echo $ocorrencia['occod'] ?>" name="estrela<?php echo $ocorrencia['occod'] ?>" value="4" <?php
                            if (!empty($varcheck4)) {
                                echo $varcheck4;
                            }
                            ?>>

                            <label for="estrela_cinco<?php echo $ocorrencia['occod'] ?>"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco<?php echo $ocorrencia['occod'] ?>" name="estrela<?php echo $ocorrencia['occod'] ?>" value="5" <?php
                                   if (!empty($varcheck5)) {
                                       echo $varcheck5;
                                   }
                                   ?>>
                            &nbsp;&nbsp; &nbsp;&nbsp;
                            <button type="button" onclick="avaliar('<?= $ocorrencia['occod'] ?>', '<?= $ocorrencia['ocstatus'] ?>')" value="Avaliar"><img src="<?php echo URL; ?>/assets/image/icone/pago.png" alt=""/></button>
                        </div>
                    </form>
                </td>

            </tr>

            <?php
        }
        ?>
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/Avaliacao4.js"></script>


