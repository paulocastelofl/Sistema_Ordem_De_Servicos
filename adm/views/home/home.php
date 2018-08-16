
<div class="well text-center">
    Bem vindo' Welcome!
</div>
<h3>Cis-Eletrônica inovação em ordem de serviços</h3>
<br>

<?php
if ($_SESSION['nivel'] == 2) {
    ?>
    <div class="col-sm-6" id="container">

    </div>
    <div class="col-sm-6" id="container2">

    </div>

    </div>
    <?php
} else if ($_SESSION['nivel'] == 1||$_SESSION['nivel'] == 3) {
    ?>
    <div class="col-sm-6" id="container">

    </div>
    <div class="col-sm-6" id="container2">

    </div>
    <div class="col-sm-12">
        <br>
        <br>
        <br>
    </div>
    <div class="col-sm-6" id="container3">

    </div>
    <div class="col-sm-6" id="container4">

    </div>
    <?php
} else if ($_SESSION['nivel'] == 4) {
    ?>
    <div class="col-sm-6" id="container3">

    </div>
    <div class="col-sm-6" id="container4">

    </div>
    <?php
}
?>
<script>
    var prod01 = parseInt('<?php echo $this->Dados['prod01'][0]['count(occod)'] ?>');
    var prod02 = parseInt('<?php echo $this->Dados['prod02'][0]['count(occod)'] ?>');
    var smd = parseInt('<?php echo $this->Dados['smd'][0]['count(occod)'] ?>');
    var almox = parseInt('<?php echo $this->Dados['almox'][0]['count(occod)'] ?>');
    var at = parseInt('<?php echo $this->Dados['at'][0]['count(occod)'] ?>');
    var eng = parseInt('<?php echo $this->Dados['engenharia'][0]['count(occod)'] ?>');
    var subestoque = parseInt('<?php echo $this->Dados['subestoque'][0]['count(occod)'] ?>');
    var qualidade = parseInt('<?php echo $this->Dados['qualidade'][0]['count(occod)'] ?>');
    var dti = parseInt('<?php echo $this->Dados['dti'][0]['count(occod)'] ?>');
    var compras = parseInt('<?php echo $this->Dados['compras'][0]['count(occod)'] ?>');
    var pcp = parseInt('<?php echo $this->Dados['pcp'][0]['count(occod)'] ?>');
    var rh = parseInt('<?php echo $this->Dados['rh'][0]['count(occod)'] ?>');
    var dp = parseInt('<?php echo $this->Dados['dp'][0]['count(occod)'] ?>');
    var gerencia = parseInt('<?php echo $this->Dados['gerencia'][0]['count(occod)'] ?>');
    var manut = parseInt('<?php echo $this->Dados['manutencao'][0]['count(occod)'] ?>');
    var sesmt = parseInt('<?php echo $this->Dados['sesmt'][0]['count(occod)'] ?>');

    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'N° Ocorrências Manutenção 2018'
        },
        subtitle: {
            text: 'Source: <a href="">Tecnologia da Informação</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Ocorrências (quantidade)'
            }
        },
        legend: {
            enabled: false
        },
        series: [{
                name: 'Quantidade',
                data: [
                    ['Produção 01', prod01],
                    ['Produção 02', prod02],
                    ['SMD', smd],
                    ['Almoxarifado', almox],
                    ['Area Técnica', at],
                    ['Engenharia', eng],
                    ['Sub-estoque', subestoque],
                    ['Qualidade', qualidade],
                    ['DTI', dti],
                    ['Compras', compras],
                    ['PCP', pcp],
                    ['RH', rh],
                    ['DP', dp],
                    ['Gerência', gerencia],
                    ['Manutenção', manut],
                    ['SESMT', sesmt]
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.0f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
    });

    // Build the chart
    Highcharts.chart('container2', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Ocorrências Manutenção, 2018'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
                name: 'QTD',
                colorByPoint: true,
                data: [{
                        name: 'Produção 01',
                        y: prod01
                    }, {
                        name: 'Produção 02',
                        y: prod02
                    }, {
                        name: 'SMD',
                        y: smd
                    }, {
                        name: 'Almoxarifado',
                        y: almox
                    }, {
                        name: 'A. Técnica',
                        y: at
                    }, {
                        name: 'Eng.',
                        y: eng
                    }, {
                        name: 'Subestoque',
                        y: subestoque
                    }, {
                        name: 'Qualidade',
                        y: qualidade
                    }, {
                        name: 'DTI',
                        y: dti
                    }, {
                        name: 'Compras',
                        y: compras
                    }, {
                        name: 'PCP',
                        y: pcp
                    }, {
                        name: 'RH',
                        y: rh
                    }, {
                        name: 'DP',
                        y: dp
                    }, {
                        name: 'Gerência',
                        y: gerencia
                    }, {
                        name: 'Manutenção',
                        y: manut
                    }

                ]
            }]
    });

</script>
<script>

    var prod01dti = parseInt('<?php echo $this->Dados1['prod01dti'][0]['count(occoddti)'] ?>');
    var prod02dti = parseInt('<?php echo $this->Dados1['prod02dti'][0]['count(occoddti)'] ?>');
    var smddti = parseInt('<?php echo $this->Dados1['smddti'][0]['count(occoddti)'] ?>');
    var almoxdti = parseInt('<?php echo $this->Dados1['almoxdti'][0]['count(occoddti)'] ?>');
    var atdti = parseInt('<?php echo $this->Dados1['atdti'][0]['count(occoddti)'] ?>');
    var engdti = parseInt('<?php echo $this->Dados1['engenhariadti'][0]['count(occoddti)'] ?>');
    var subestoquedti = parseInt('<?php echo $this->Dados1['subestoquedti'][0]['count(occoddti)'] ?>');
    var qualidadedti = parseInt('<?php echo $this->Dados1['qualidadedti'][0]['count(occoddti)'] ?>');
    var dtidti = parseInt('<?php echo $this->Dados1['dtidti'][0]['count(occoddti)'] ?>');
    var comprasdti = parseInt('<?php echo $this->Dados1['comprasdti'][0]['count(occoddti)'] ?>');
    var pcpdti = parseInt('<?php echo $this->Dados1['pcpdti'][0]['count(occoddti)'] ?>');
    var rhdti = parseInt('<?php echo $this->Dados1['rhdti'][0]['count(occoddti)'] ?>');
    var dpdti = parseInt('<?php echo $this->Dados1['dpdti'][0]['count(occoddti)'] ?>');
    var gerenciadti = parseInt('<?php echo $this->Dados1['gerenciadti'][0]['count(occoddti)'] ?>');
    var manutdti = parseInt('<?php echo $this->Dados1['manutencaodti'][0]['count(occoddti)'] ?>');
    var sesmtdti = parseInt('<?php echo $this->Dados1['sesmtdti'][0]['count(occoddti)'] ?>');

    Highcharts.chart('container3', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'N° Ocorrências DTI 2018'
        },
        subtitle: {
            text: 'Source: <a href="">Tecnologia da Informação</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Ocorrências (quantidade)'
            }
        },
        legend: {
            enabled: false
        },
        series: [{
                name: 'Quantidade',
                data: [
                    ['Produção 01', prod01dti],
                    ['Produção 02', prod02dti],
                    ['SMD', smddti],
                    ['Almoxarifado', almoxdti],
                    ['Area Técnica', atdti],
                    ['Engenharia', engdti],
                    ['Sub-estoque', subestoquedti],
                    ['Qualidade', qualidadedti],
                    ['DTI', dtidti],
                    ['Compras', comprasdti],
                    ['PCP', pcpdti],
                    ['RH', rhdti],
                    ['DP', dpdti],
                    ['Gerência', gerenciadti],
                    ['Manutenção', manutdti],
                    ['SESMT', sesmtdti]
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.0f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
    });

    // Build the chart
    Highcharts.chart('container4', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Ocorrências DTI, 2018'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
                name: 'QTD',
                colorByPoint: true,
                data: [{
                        name: 'Produção 01',
                        y: prod01dti
                    }, {
                        name: 'Produção 02',
                        y: prod02dti
                    }, {
                        name: 'SMD',
                        y: smddti
                    }, {
                        name: 'Almoxarifado',
                        y: almoxdti
                    }, {
                        name: 'A. Técnica',
                        y: atdti
                    }, {
                        name: 'Eng.',
                        y: engdti
                    }, {
                        name: 'Subestoque',
                        y: subestoquedti
                    }, {
                        name: 'Qualidade',
                        y: qualidadedti
                    }, {
                        name: 'DTI',
                        y: dtidti
                    }, {
                        name: 'Compras',
                        y: comprasdti
                    }, {
                        name: 'PCP',
                        y: pcpdti
                    }, {
                        name: 'RH',
                        y: rhdti
                    }, {
                        name: 'DP',
                        y: dpdti
                    }, {
                        name: 'Gerência',
                        y: gerenciadti
                    }, {
                        name: 'Manutenção',
                        y: manutdti
                    }

                ]
            }]
    });


</script>   



