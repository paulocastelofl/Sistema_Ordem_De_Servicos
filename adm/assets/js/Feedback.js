
function limparCampos() {
    $('#feeddescricao').val("");
}
$('#form_feedback').submit(function () {

    var feeddescricao = $('#feeddescricao').val();
    var feedteccod = $('#feedteccod').val();
    var feedoccod = $('#feedoccod').val();

    //alert(feeddescricao);
    //alert(feedteccod);
    //alert(feedoccod);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-feedback/salvarFeedback",
        data: {
            feeddescricao: feeddescricao,
            feedteccod: feedteccod,
            feedoccod: feedoccod
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
                $('#carregar_tb').html("<h5>Atualizando...</h5>");
                limparCampos();
                setTimeout(function () {
                    $('#carregar_tb').load("http://192.168.100.145/OSproject/adm/controle-ocorrencia/visualizar/" + feedoccod + " #carregar_tb");
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
            url: "http://192.168.100.145/OSproject/adm/controle-feedback/excluirFeedback",
            data: {
                feedcod: id
            },

            beforeSend: function () {
                $('#modal-grupo').modal('hide');
                $('#h3-modal').html('Excluindo dados');

                $('#mode').modal('show');
            },

            success: function (resultado) {
                if (resultado != "") {
                    $('#mode').modal('hide');
                    $('#carregar_tb').html("<h5>Atualizando...</h5>");
                    limparCampos();
                    setTimeout(function () {
                        $('#carregar_tb').load("http://192.168.100.145/OSproject/adm/controle-ocorrencia/visualizar/" + id + " #carregar_tb");
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




