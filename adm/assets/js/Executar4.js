$("#executar").click(function () {

    var atoccod = $('#atoccod').val();
    var atteccod1 = $('#atteccod1').val();
    var atteccod2 = $('#atteccod2').val();
    var atteccod3 = $('#atteccod3').val();
    var atteccod4 = $('#atteccod4').val();
    var atdescricao = $('#atdescricao').val();

    //alert(atoccod);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrencia/salvarExecucao",
        data: {
            atoccod: atoccod,
            atteccod1: atteccod1,
            atteccod2: atteccod2,
            atteccod3: atteccod3,
            atteccod4: atteccod4,
            atdescricao: atdescricao
        },

        beforeSend: function () {
            $('#modal-grupo').modal('hide');
            $('#h3-modal').html('Salvando dados');

            $('#mode').modal('show');
        },

        success: function (resultado) {
            if (resultado !== "") {
                $('#mode').modal('hide');
                //limparCampos();
                //alert("PPPPPPPP");
                $('#strong-msg').html('Salvo com Sucesso!');
                $('#msg').show();
                setTimeout(function () {

                    $('#msg').fadeOut(4000);
                    var novaURL = "http://192.168.100.145/OSproject/adm/controle-ocorrencia/index";
                    $(window.document.location).attr('href', novaURL);
                }, 1000);
                console.log(resultado);
            } else {
                console.log("error retorno vazio!");
            }
        }
    });

    return false;
});

$("#atteccod1").change(function () {
    $('#atteccod2').removeAttr('disabled');
});
$("#atteccod2").change(function () {
    $('#atteccod3').removeAttr('disabled');
});
$("#atteccod3").change(function () {
    $('#atteccod4').removeAttr('disabled');
});



$("#finalizar").click(function () {

    var atcod = $('#atcod').val();
    var atteccod1 = $('#atteccod1').val();
    var atteccod2 = $('#atteccod2').val();
    var atteccod3 = $('#atteccod3').val();
    var atteccod4 = $('#atteccod4').val();
    var atdescricao = $('#atdescricao').val();

    //alert(atcod);

    if (atteccod1 == "Selecione") {

        alert("Preencha o campo técnico!");

    } else {

        $.ajax({
            type: "POST",
            url: "http://192.168.100.145/OSproject/adm/controle-ocorrencia/finalizarExecucao",
            data: {
                atcod: atcod,
                atteccod1: atteccod1,
                atteccod2: atteccod2,
                atteccod3: atteccod3,
                atteccod4: atteccod4,
                atdescricao: atdescricao
            },

            beforeSend: function () {
                $('#modal-grupo').modal('hide');
                $('#h3-modal').html('Salvando procedimento');

                $('#mode').modal('show');
            },

            success: function (resultado) {
                if (resultado !== "") {
                    $('#mode').modal('hide');
                    //limparCampos();
                    //alert("PPPPPPPP");
                    $('#strong-msg').html('Salvo com Sucesso!');
                    $('#msg').show();

                    setTimeout(function () {

                        $('#msg').fadeOut(4000);
                        var novaURL = "http://192.168.100.145/OSproject/adm/controle-ocorrencia/index";
                        $(window.document.location).attr('href', novaURL);
                    }, 1000);

                    console.log(resultado);
                } else {
                    console.log("error retorno vazio!");
                }
            }
        });

    }



    return false;
});

