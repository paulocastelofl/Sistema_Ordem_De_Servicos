$("#executarDti").click(function () {

    var atoccoddti = $('#atoccoddti').val();
    var atteccod1dti = $('#atteccod1dti').val();
    var atteccod2dti = $('#atteccod2dti').val();
    var atteccod3dti = $('#atteccod3dti').val();
    var atteccod4dti = $('#atteccod4dti').val();
    var atdescricaodti = $('#atdescricaodti').val();

    //alert(atoccod);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/salvarExecucaoDti",
        data: {
            atoccoddti: atoccoddti,
            atteccod1dti: atteccod1dti,
            atteccod2dti: atteccod2dti,
            atteccod3dti: atteccod3dti,
            atteccod4dti: atteccod4dti,
            atdescricaodti: atdescricaodti
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
                    var novaURL = "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/index";
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

$("#atteccod1dti").change(function () {
    $('#atteccod2dti').removeAttr('disabled');
});
$("#atteccod2dti").change(function () {
    $('#atteccod3dti').removeAttr('disabled');
});
$("#atteccod3dti").change(function () {
    $('#atteccod4dti').removeAttr('disabled');
});



$("#finalizarDti").click(function () {

    var atcoddti = $('#atcoddti').val();
    var atteccod1dti = $('#atteccod1dti').val();
    var atteccod2dti = $('#atteccod2dti').val();
    var atteccod3dti = $('#atteccod3dti').val();
    var atteccod4dti = $('#atteccod4dti').val();
    var atdescricaodti = $('#atdescricaodti').val();

    //alert(atcoddti);

    if (atteccod1dti == "Selecione") {

        alert("Preencha o campo técnico!");

    } else {

        $.ajax({
            type: "POST",
            url: "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/finalizarExecucaoDti",
            data: {
                atcoddti: atcoddti,
                atteccod1dti: atteccod1dti,
                atteccod2dti: atteccod2dti,
                atteccod3dti: atteccod3dti,
                atteccod4dti: atteccod4dti,
                atdescricaodti: atdescricaodti
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
                        var novaURL = "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/index";
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

