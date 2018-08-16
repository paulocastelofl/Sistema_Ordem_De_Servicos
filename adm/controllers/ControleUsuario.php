<?php

class ControleUsuario {

    private $Dados;
    private $UserId;

    public function index() {

        $ListarUsuario = new ModelsUsuario();

        $this->Dados = $ListarUsuario->listar();

        $CarregarView = new ConfigView("usuario/Usuario", $this->Dados);

        $CarregarView->renderizar();
    }

    public function cadastrarUsuario() {
        $CarregarView = new ConfigView("usuario/CadastrarUsuario");
        $CarregarView->renderizar();
    }

    public function salvarUsuario() {

        $usunome = filter_input(INPUT_POST, 'usunome', FILTER_DEFAULT);
        $usulogin = filter_input(INPUT_POST, 'usulogin', FILTER_DEFAULT);
        $ususenha = filter_input(INPUT_POST, 'ususenha', FILTER_DEFAULT);
        $usunivel = filter_input(INPUT_POST, 'usunivel', FILTER_DEFAULT);

        $ususenhamd5 = md5($ususenha);

        $Dados = [
            'usunome' => $usunome,
            'usulogin' => $usulogin,
            'ususenha' => $ususenhamd5,
            'usunivel' => $usunivel
        ];

        //var_dump($Dados);

        $CadastrarUsuario = new ModelsUsuario();
        $CadastrarUsuario->cadastrar($Dados);
    }

    public function perfilUsuario() {
        $CarregarView = new ConfigView("usuario/perfilUsuario");
        $CarregarView->renderizar();
    }

    public function salvarFoto() {
        $codigo = $_SESSION["idt"];

        if ($_SESSION["foto"] != "sem_foto.png") {
            // Removendo imagem da pasta fotos/
            unlink("arquivo/" . $_SESSION["foto"] . "");
        }


        $altura = "90";
        $largura = "100";
        // echo "Altura pretendida: $altura - largura pretendida: $largura <br>";

        switch ($_FILES['arquivo']['type']):
            case 'image/jpeg';
            case 'image/pjpeg';
                $imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);

                $largura_original = imagesx($imagem_temporaria);

                $altura_original = imagesy($imagem_temporaria);

                // echo "largura original: $largura_original - Altura original: $altura_original <br>";

                $nova_largura = $largura ? $largura : floor(($largura_original / $altura_original) * $altura);

                $nova_altura = $altura ? $altura : floor(($altura_original / $largura_original) * $largura);

                $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
                imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

                imagejpeg($imagem_redimensionada, 'arquivo/' . $_FILES['arquivo']['name']);

                //echo $_FILES['arquivo']['name'];

                $Dados = [
                    'usufoto' => $_FILES['arquivo']['name'],
                ];

                //echo var_dump($Dados);

                $AlterarUsuario = new ModelsUsuario();
                $AlterarUsuario->alterar($Dados, $codigo);

                $_SESSION['foto'] = $_FILES['arquivo']['name'];


                $_SESSION['msg'] = "<span style='green'>Cadastrado com sucesso!</span><br>";
                $UrlDestino = URL . 'controle-usuario/perfilUsuario';
                header("Location: $UrlDestino");


                break;

            //Caso a imagem seja extensão PNG cai nesse CASE
            case 'image/png':
            case 'image/x-png';
                $imagem_temporaria = imagecreatefrompng($_FILES['arquivo']['tmp_name']);

                $largura_original = imagesx($imagem_temporaria);
                $altura_original = imagesy($imagem_temporaria);
                //echo "Largura original: $largura_original - Altura original: $altura_original <br> ";

                /* Configura a nova largura */
                $nova_largura = $largura ? $largura : floor(( $largura_original / $altura_original ) * $altura);

                /* Configura a nova altura */
                $nova_altura = $altura ? $altura : floor(( $altura_original / $largura_original ) * $largura);

                /* Retorna a nova imagem criada */
                $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);

                /* Copia a nova imagem da imagem antiga com o tamanho correto */
                //imagealphablending($imagem_redimensionada, false);
                //imagesavealpha($imagem_redimensionada, true);

                imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

                //função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
                imagepng($imagem_redimensionada, 'arquivo/' . $_FILES['arquivo']['name']);

                $Dados = [
                    'usufoto' => $_FILES['arquivo']['name'],
                ];

                //echo var_dump($Dados);

                $AlterarUsuario = new ModelsUsuario();
                $AlterarUsuario->alterar($Dados, $codigo);

                $_SESSION['foto'] = $_FILES['arquivo']['name'];

                $_SESSION['msg'] = "<span style='green'>Cadastrado com sucesso!</span><br>";
                $UrlDestino = URL . 'controle-usuario/perfilUsuario';
                header("Location: $UrlDestino");

                break;
        endswitch;
    }

}
