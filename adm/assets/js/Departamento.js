
function limparCampos() {
    $('#depdescricao').val("");
    $('#depresponsavel').val("");
}
$('#form_departamento').submit(function () {

    var depdescricao = $('#depdescricao').val();
    var depresponsavel = $('#depresponsavel').val();
    

    //alert(tecmatricula);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-departamento/salvarDepartamento",
        data: {
            depdescricao: depdescricao,
            depresponsavel: depresponsavel
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

$('#form_departamento_editar').submit(function () {

    var depcod = $('#depcod').val();
    var depdescricao = $('#depdescricao').val();
    var depresponsavel = $('#depresponsavel').val();

    // alert(cardescricao);

    $.ajax({
        type: "POST",
        url: "http://192.168.100.145/OSproject/adm/controle-departamento/editarDepartamento",
        data: {
            depcod: depcod,
            depdescricao: depdescricao,
            depresponsavel: depresponsavel
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
                    var novaURL = "http://192.168.100.145/OSproject/adm/controle-departamento/index";
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




