
function avaliar(id, status) {
    if (status === 'Finalizado') {
        var ocavaliacaodti = $("input[name='estrela" + id + "']:checked").val();
        if (ocavaliacaodti == '') {
            alert('Valor mínimo para avaliação é de 1 estrela!');
        } else {

            $.ajax({
                type: "POST",
                url: "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/avaliarOcorrenciaDti",
                data: {
                    occoddti: id,
                    ocavaliacaodti: ocavaliacaodti
                },

                beforeSend: function () {
                    $('#modal-grupo').modal('hide');
                    $('#h3-modal').html('Salvando avaliação');

                    $('#mode').modal('show');
                },

                success: function (resultado) {
                    if (resultado !== "") {
                        $('#mode').modal('hide');

                        //alert("PPPPPPPP");
                        $('#strong-msg').html('Avalição registrada com sucesso!');
                        $('#msg').show();

                        setTimeout(function () {

                            $('#msg').fadeOut(4000);
                            var novaURL = "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/index";
                            $(window.document.location).attr('href', novaURL);
                        }, 1000);
                        console.log(resultado);
                        console.log(resultado);
                    } else {
                        console.log("error retorno vazio!");
                    }
                }
            });
        }
    } else {
        alert('Não é possivel avaliar. Processo em andamento!');

        var novaURL = "http://192.168.100.145/OSproject/adm/controle-ocorrenciadti/index";
        $(window.document.location).attr('href', novaURL);
    }

    return false;
}