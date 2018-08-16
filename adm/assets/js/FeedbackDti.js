
function limparCampos() {
    $('#feeddescricaodti').val("");
}
$('#form_feedback_dti').submit(function () {

    var feeddescricaodti = $('#feeddescricaodti').val();
    var feedteccoddti = $('#feedteccoddti').val();
    var feedoccoddti = $('#feedoccoddti').val();

    //alert(feeddescricaodti);
   // alert(feedteccoddti);
   // alert(feedoccoddti);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-feedbackdti/salvarFeedbackDti",
        data: {
            feeddescricaodti: feeddescricaodti,
            feedteccoddti: feedteccoddti,
            feedoccoddti: feedoccoddti
        },

        beforeSend: function () {
            $('#modal-feed').modal('hide');
            $('#modal-grupo').modal('hide');
            $('#h3-modal').html('Salvando dados');

            $('#mode').modal('show');
        },

        success: function (resultado) {
            if (resultado !== "") {
                $('#mode').modal('hide');
                $('#carregar_tb_dti').html("<h5>Atualizando...</h5>");
                limparCampos();
                setTimeout(function () {
                    $('#carregar_tb_dti').load("http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/visualizardti/" + feedoccoddti + " #carregar_tb_dti");
                }, 1000);

                //$( "#result" ).load( "ajax/test.html #container" );

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

function excluir(id) {
    decisao = confirm("         Deseja realmente deletar esse feedback? \n" +
            "\n                          Código do Registro: " + id + "\n" +
            "\n Registros excluidos nao poderão ser recuperados");
    if (decisao) {

        $.ajax({
            type: "POST",
            url: "http://192.168.100.145/OSproject/adm/controle-feedbackDti/excluirFeedbackDti",
            data: {
                feedcoddti: id
            },

            beforeSend: function () {
                $('#modal-grupo').modal('hide');
                $('#h3-modal').html('Excluindo dados');

                $('#mode').modal('show');
            },

            success: function (resultado) {
                if (resultado != "") {
                    $('#mode').modal('hide');
                    $('#carregar_tb_dti').html("<h5>Atualizando...</h5>");
                    limparCampos();
                    setTimeout(function () {
                        $('#carregar_tb_dti').load("http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/visualizardti/" + id + " #carregar_tb_dti");
                    }, 1000);
                    //alert("PPPPPPPP");

                    $('#strong-msg').html('deletado com Sucesso!');
                    $('#msg').show();

                    setTimeout(function () {

                        $('#msg').fadeOut(4000);
                    }, 3000);
                    //location.reload(); 
                    console.log(resultado);
                } else {
                    console.log("error retorno vazio!");
                }
            }
        });

        return false;
    }


}




