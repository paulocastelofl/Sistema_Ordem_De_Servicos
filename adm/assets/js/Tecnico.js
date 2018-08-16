
function limparCampos() {
    $('#tecmatricula').val("");
    $('#tecnome').val("");
}
$('#form_tecnico').submit(function () {

    var tecmatricula = $('#tecmatricula').val();
    var tecnome = $('#tecnome').val();

    //alert(tecmatricula);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-tecnico/salvarTecnico",
        data: {
            tecmatricula: tecmatricula,
            tecnome: tecnome
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
                console.log(resultado);
            } else {
                console.log("error retorno vazio!");
            }
        }
    });

    return false;
});

$('#form_tecnico_editar').submit(function () {

    var teccod = $('#teccod').val();
    var tecmatricula = $('#tecmatricula').val();
    var tecnome = $('#tecnome').val();

    // alert(cardescricao);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-tecnico/editarTecnico",
        data: {
            teccod: teccod,
            tecmatricula: tecmatricula,
            tecnome: tecnome
        },

        beforeSend: function () {
            $('#modal-grupo').modal('hide');
            $('#h3-modal').html('Salvando dados editados');

            $('#mode').modal('show');
        },

        success: function (resultado) {
            if (resultado !== "") {
                $('#mode').modal('hide');
                limparCampos();
                //alert("PPPPPPPP");
                $('#strong-msg').html('Alterado com Sucesso!');
                $('#msg').show();

                setTimeout(function () {

                    $('#msg').fadeOut(4000);
                    var novaURL = "http://192.168.100.145/OSproject/adm/controle-tecnico/index";
                    $(window.document.location).attr('href', novaURL);
                }, 1000);
                console.log(resultado);
                console.log(resultado);
            } else {
                console.log("error retorno vazio!");
            }
        }
    });

    return false;
});




