
function limparCampos() {
    $('#ocdepdti').val("Selecione");
    $('#octipodti').val("Selecione");
    $('#ocdescricaodti').val("");

}
$('#form_ocorrencia_dti').submit(function () {

    var ocusucoddti = $('#ocusucoddti').val();
    var ocdepcoddti = $('#ocdepcoddti').val();
    var octipocoddti = $('#octipocoddti').val();
    var ocdescricaodti = $('#ocdescricaodti').val();
    var ocdatadti = $('#ocdatadti').val();
    var ochoradti = $('#ochoradti').val();
    var ocprioridadedti = $('#ocprioridadedti').val();

    if (ocdepcoddti == "Selecione") {
        alert("Por favor selecione um departamento!");
    } else if(octipocoddti == "Selecione") {
        alert("Por favor selecione tipo de manutenção!");
    }else{
        
        $.ajax({
            type: "POST",
            url: "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/salvarOcorrenciaDti",
            data: {
                ocusucoddti: ocusucoddti,
                ocdepcoddti: ocdepcoddti,
                octipocoddti: octipocoddti,
                ocdescricaodti: ocdescricaodti,
                ocdatadti: ocdatadti,
                ochoradti: ochoradti,
                ocprioridadedti: ocprioridadedti

            },

            beforeSend: function () {
                $('#modal-grupo').modal('hide');
                $('#h3-modal').html('Salvando dados');

                $('#mode').modal('show');
            },

            success: function (resultado) {
                if (resultado !== "") {
                    $('#mode').modal('hide');
                    limparCampos();
                    //alert("PPPPPPPP");
                    $('#strong-msg').html('Salvo com Sucesso!');
                    $('#msg').show();

                    setTimeout(function () {

                        $('#msg').fadeOut(4000);
                    }, 3000);
                    console.log(resultado);
                } else {
                    console.log("error retorno vazio!");
                }
            }
        });
    }
    return false;

});

$("#confirmarDti").click(function () {

    var occoddti = $('#occoddti').val();
    var octipcoddti = $('#octipcoddti').val();
    var ocdtprevisaodti = $('#ocdtprevisaodti').val();
    var ocdtrespostadti = $('#ocdtrespostadti').val();
    var ochrrespostadti = $('#ochrrespostadti').val();
    var ocprioridadedti = $('#ocprioridadedti').val();


    // alert(cardescricao);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/editarOcorrenciaDti",
        data: {
            occoddti: occoddti,
            ocdtprevisaodti: ocdtprevisaodti,
            ocdtrespostadti: ocdtrespostadti,
            octipcoddti: octipcoddti,
            ochrrespostadti: ochrrespostadti,
            ocprioridadedti: ocprioridadedti
        },

        beforeSend: function () {
            $('#modal-grupo').modal('hide');
            $('#h3-modal').html('Abrindo Ocorrência');

            $('#mode').modal('show');
        },

        success: function (resultado) {
            if (resultado !== "") {
                $('#mode').modal('hide');
                limparCampos();
                //alert("PPPPPPPP");
                $('#strong-msg').html('Procedimento efetuado com sucesso!');
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

$("#recusarDti").click(function () {

    var occoddti = $('#occoddti').val();

    // alert(cardescricao);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/recusarOcorrenciaDti",
        data: {
            occoddti: occoddti
        },

        beforeSend: function () {
            $('#modal-grupo').modal('hide');
            $('#h3-modal').html('Recusando ocorrência');

            $('#mode').modal('show');
        },

        success: function (resultado) {
            if (resultado !== "") {
                $('#mode').modal('hide');
                limparCampos();
                //alert("PPPPPPPP");
                $('#strong-msg').html('Procedimento efetuado com sucesso!');
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








