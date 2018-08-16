<div class="well">
    <div class="page-header">
        <h1>Editar usuário</h1>
    </div>
    <H1></H1>
    <?php
    if (isset($this->Dados[0]['msg'])) {
        echo $this->Dados[0]['msg'];
    } elseif (isset($this->Dados['msg'])) {
        echo $this->Dados['msg'];
    }
    ?>
    <form name="CadUsuario"  class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Nome completo" value="<?php
                if (isset($this->Dados[0]['name'])) {
                    echo $this->Dados[0]['name'];
                } elseif (isset($this->Dados['name'])) {
                    echo $this->Dados['name'];
                }
                ?>">
            </div>
        </div>



        <div class="form-group">
            <label class="col-sm-2 control-label">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Seu melhor e-mail" value="<?php
                if (isset($this->Dados[0]['email'])) {
                    echo $this->Dados[0]['email'];
                } elseif (isset($this->Dados['email'])) {
                    echo $this->Dados['email'];
                }
                ?>">
            </div>
        </div>



        <div class="form-group">
            <label class="col-sm-2 control-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Senha">

            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-warning" value="Editar" name="SendEditUsuario">
            </div>
        </div>
    </form>
</div>