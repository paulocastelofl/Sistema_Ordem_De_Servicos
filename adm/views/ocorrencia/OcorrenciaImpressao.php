<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>

        <table style="width:100%">
            <tr>
                <td style="text-align: center"><img src="<?php echo URL; ?>/assets/image/cis-logopp.jpg" alt=""/></td>
                <td style="font-size: 28px; text-align: center; "> <b>Ordem de Serviço Manutenção</b></td>
                <td style="font-size: 16px;">
                    &nbsp;&nbsp;O.S.№    0<?php echo $this->Dados[0]['occod'] ?>/2018
                    <hr>
                    &nbsp;&nbsp;CIS104  /  Revisão: 3.0
                </td>
            </tr>
            <tr>
                <td style="font-size: 14px; " colspan="2" >
                    &nbsp;&nbsp;Data/Hora da Solicitação:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['ocdata'] . "&nbsp;&nbsp;" . $this->Dados[0]['ochora'] ?>
                    <br>
                    <hr>
                    &nbsp;&nbsp;Inicio da execução:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['atdtinicio'] . "&nbsp;&nbsp;" . $this->Dados[0]['athrinicio'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fim da execução:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['atdtfinal'] . "&nbsp;&nbsp;" . $this->Dados[0]['athrfinal'] ?>
                </td>
                <td > 
                    &nbsp;&nbsp;Dep.:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['depdescricao'] ?>
                    <br>
                    <hr>
                    &nbsp;&nbsp;Solic.:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['usunome'] ?>
                </td>

            </tr>
            <tr>
                <td colspan="3" style="font-size: 18px; text-align: center"><b>Descrição do problema</b></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px">
                    <br>
                    <?php echo $this->Dados[0]['ocdescricao'] ?>
                    <br>
                    <br>

                </td>
            </tr>
            <tr>
                <td style="font-size: 14px; " colspan="2" >
                    &nbsp;&nbsp;Status:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['ocstatus'] ?>
                    <br>
                    <hr>
                    &nbsp;&nbsp;Data:<?php
                    date_default_timezone_set('America/Manaus');
                    $date = date('Y-m-d');
                    $hora = date('H:i:s');
                    echo " &nbsp;&nbsp;" . $date . "&nbsp;&nbsp;" . $hora;
                    ?>
                </td>
                <td style="font-size: 14px; "colspan="2" >
                </td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <td style="font-size: 14px; padding-top: 10px" >
                    &nbsp;&nbsp;Resp. técnico:
                </td>
                <td style="font-size: 14px; padding-top: 10px" >
                    &nbsp;&nbsp;Solicitante:
                </td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <td colspan="3" style="font-size: 18px; ">&nbsp;&nbsp;<b>Relatório Técnico:</b>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; ">
                    <br>
                    <?php echo $this->Dados[0]['atdescricao'] ?>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 18px; ">&nbsp;&nbsp;<b>Técnicos Executantes:</b>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b/>1-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod1'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b>2-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod2'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b>3-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod3'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b>4-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod4'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 16px; "><b>&nbsp;&nbsp;&nbsp;CIS 104&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                        
  
                        REV. 3.0 AGO/2018</b> <br></td>
            </tr>
        </table>

    </body>
</html>

