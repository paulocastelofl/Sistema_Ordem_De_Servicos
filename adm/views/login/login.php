<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cis-Eletrônica</title>
        <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo URL; ?>assets/css/signin4.css" rel="stylesheet">
        <style> 
            body {

                padding-top: 100px;
                padding-bottom: 40px;

                background-color: #d4d4d4;
                text-align: center;

            }
        </style>
    </head>
    <body>
        <div class="container col-sm-4 " >

        </div>
        <div class="container col-sm-4 " >
            <form method="POST" action="" class="form-signin">
                <h4 class="form-signin-heading text-center"><img src="<?php echo URL; ?>/assets/image/cis.jpg" alt=""/></h4>
                <h4 class="form-signin-heading text-center">Você deve digitar um nome de usuário e senha para acessar sistema Cis Elêtronica</h4>

                <?php
                if (isset($_SESSION['Msg'])):
                    echo $_SESSION['Msg'];
                    unset($_SESSION['Msg']);
                endif;
                ?>

                <div style="padding-bottom: 20px;">
                    <label class="sr-only">Usuário: </label>
                    <input type="text" required="required" class="form-control" name="email" placeholder="Digite seu email">
                </div>

                <div style="padding-bottom: 20px;">
                    <label class="sr-only">Senha: </label>
                    <input type="password" required="required" class="form-control" name="password" placeholder="Digite sua senha">
                </div>
                

                <input type="submit" class="btn btn-lg btn-success btn-block" value="Acessar" name="SendLogin">    
            </form>
        </div>
        <div class="container col-sm-4 " >

        </div>

    </body>
</html>