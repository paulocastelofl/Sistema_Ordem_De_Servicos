<div class="well">
    <div class="page-header">
        <h1>Detalhes do usuário</h1>
    </div>
    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    if (!empty($this->Dados[0]['id'])):
        ?>
        <dl class="dl-horizontal">
            <dt>ID</dt>
            <dd><?php echo $this->Dados[0]['id']; ?></dd>
            
            <dt>Nome</dt>
            <dd><?php echo $this->Dados[0]['name']; ?></dd>
            
            <dt>E-mail</dt>
            <dd><?php echo $this->Dados[0]['email']; ?></dd>
        </dl>
        <?php
    else:
        echo "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
    endif;
    ?>
</div>


