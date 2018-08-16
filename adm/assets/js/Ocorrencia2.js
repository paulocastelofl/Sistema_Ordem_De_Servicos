
function limparCampos() {
    $('#ocdep').val("Selecione");
    $('#octipo').val("Selecione");
    $('#ocdescricao').val("");

}
$('#form_ocorrencia').submit(function () {

    var ocusucod = $('#ocusucod').val();
    var ocdepcod = $('#ocdepcod').val();
    var octipocod = $('#octipocod').val();
    var ocdescricao = $('#ocdescricao').val();
    var ocdata = $('#ocdata').val();
    var ochora = $('#ochora').val();
    var ocprioridade = $('#ocprioridade').val();


    //alert(tecmatricula);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrencia/salvarOcorrencia",
        data: {
            ocusucod: ocusucod,
            ocdepcod: ocdepcod,
            octipocod: octipocod,
            ocdescricao: ocdescricao,
            ocdata: ocdata,
            ochora: ochora,
            ocprioridade: ocprioridade

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

    return false;
});
$("#confirmar").click(function () {

    var occod = $('#occod').val();
    var octipcod = $('#octipcod').val();
    var ocdtprevisao = $('#ocdtprevisao').val();
    var ocdtresposta = $('#ocdtresposta').val();
    var ochrresposta = $('#ochrresposta').val();
    var ocprioridade = $('#ocprioridade').val();


    // alert(cardescricao);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrencia/editarOcorrencia",
        data: {
            occod: occod,
            ocdtprevisao: ocdtprevisao,
            ocdtresposta: ocdtresposta,
            octipcod: octipcod,
            ochrresposta: ochrresposta,
            ocprioridade: ocprioridade
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

$("#recusar").click(function () {

    var occod = $('#occod').val();
    var octipcod = $('#octipcod').val();
    var ocdtresposta = $('#ocdtresposta').val();
    var ochrresposta = $('#ochrresposta').val();
    var ocprioridade = $('#ocprioridade').val();


    // alert(cardescricao);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-ocorrencia/recusarOcorrencia",
        data: {
            occod: occod
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








