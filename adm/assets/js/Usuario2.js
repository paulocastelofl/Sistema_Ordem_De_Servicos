$("#ususenha").keyup(function () {
    var senha = $("#ususenha").val();
    var n = senha.length;
    if (n <= 4) {
        $("#ususenha").css("background-color", "pink");
        $("#label_ususenha").html("<span id='label_ususenha' style='color: red'><i class='glyphicon glyphicon-thumbs-down'></i> Senha muito curta!</span>");
    }
    if (n >= 6) {
        $("#ususenha").css("background-color", "#c7ecee");
        $("#label_ususenha").html("<span id='label_ususenha' style='color: blue'><i class='glyphicon glyphicon-hand-right'></i> Senha razoável!</span>");
    }
    if (n >= 8) {
        $("#ususenha").css("background-color", "#b8e994");
        $("#label_ususenha").html("<span id='label_ususenha' style='color: green'><i class='glyphicon glyphicon-thumbs-up'></i> Senha segura!</span>");
    }
});
function confirmarSenha() {

    var senha1 = $("#ususenha").val();
    var senha2 = $("#confsenha").val();

    if (senha1 !== senha2) {
        $("#label_confsenha").html("<span id='label_confsenha' style='color: red'><i class='glyphicon glyphicon-thumbs-down'></i> Senhas diferentes!</span>")
    }
    if (senha1 === senha2) {
        $("#label_confsenha").html("<span id='label_confsenha' style='color: green'><i class='glyphicon glyphicon-thumbs-up'></i> Senhas Iguais!</span>")
    }
}

function limparCampos() {
    $('#usunome').val("");
    $('#ususenha').val("");
    $('#usulogin').val("");
    $('#confsenha').val("");
}
$('#form_usuario').submit(function () {

    var usunome = $('#usunome').val();
    var usulogin = $('#usulogin').val();
    var ususenha = $('#ususenha').val();
    var confsenha = $('#confsenha').val();
    var usunivel = $('#usunivel').val();

    var n = ususenha.length;
    if (n > 4) {
        if (ususenha === confsenha) {

            $.ajax({
                type: "POST",
                url: "http://192.168.100.145/OSproject/adm/controle-usuario/salvarUsuario",
                data: {
                    usunome: usunome,
                    usulogin: usulogin,
                    ususenha: ususenha,
                    usunivel: usunivel
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
                        console.log(resultado);
                    } else {
                        console.log("error retorno vazio!");
                    }
                }
            });

        }else{
            alert("As senhas não coincidem!");
        }
    }else{
        alert("Senha não possui requisitos minímos para autenticação!");
    }
    //alert(cardescricao);



    return false;
});
