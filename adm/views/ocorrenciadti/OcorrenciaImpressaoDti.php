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
                <td style="font-size: 28px; text-align: center; "> <b>Ordem de Serviço DTI</b></td>
                <td style="font-size: 16px;">
                    &nbsp;&nbsp;O.S.№    0<?php echo $this->Dados[0]['occoddti'] ?>/2018
                    <hr>
                    &nbsp;&nbsp;CIS216  /  Revisão: 2.0
                </td>
            </tr>
            <tr>
                <td style="font-size: 14px; " colspan="2" >
                    &nbsp;&nbsp;Inicio da execução:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['atdtiniciodti'] . "&nbsp;&nbsp;" . $this->Dados[0]['athriniciodti'] ?>
                    <br>
                    <hr>
                    &nbsp;&nbsp;Fim da execução:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['atdtfinaldti'] . "&nbsp;&nbsp;" . $this->Dados[0]['athrfinaldti'] ?>
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
                    <?php echo $this->Dados[0]['ocdescricaodti'] ?>
                    <br>
                    <br>

                </td>
            </tr>
            <tr>
                <td style="font-size: 14px; " colspan="2" >
                    &nbsp;&nbsp;Status:<?php echo " &nbsp;&nbsp;" . $this->Dados[0]['ocstatusdti'] ?>
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
                    <?php echo $this->Dados[0]['atdescricaodti'] ?>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 18px; ">&nbsp;&nbsp;<b>Técnicos Executantes:</b>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b/>1-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod1dti'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b>2-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod2dti'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b>3-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod3dti'] ?><br></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 14px; "><b>4-</b> <?php echo "&nbsp;&nbsp;" . $this->Dados[0]['atteccod4dti'] ?><br></td>
            </tr>
        </table>
        
    </body>
</html>

