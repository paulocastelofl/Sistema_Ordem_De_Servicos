<nav class="navbar navbar-inverse visible-xs">

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cis-Eletrônica</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav hidden-xs">
            <h4 class="form-signin-heading text-center"><img  src="<?php echo URL; ?>/arquivo/<?php echo $_SESSION['foto'] ?>"  class="img-circle" alt="Foto de exibição"/></h4>
            <h2 style="background-color: #269abc; color: black">CIS <span style="font-size: 24px;">Elêtronica</span><span style="font-size: 14px; color: green"><b> Am</b></span></h2>

            <br>

            <?php
            if ($_SESSION['nivel'] == 1) {
                ?>
                <!--Menu Admin-->
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="<?php echo URL; ?>controle-home/index">
                            <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                            Home
                        </a> 
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-usuario/perfilUsuario">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            Perfil
                        </a>
                    </li>

                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" >  
                            <i class="fa fa-id-card-o fa-2x"  aria-hidden="true"></i>
                            Cadastros
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">      
                            <li><a href="<?php echo URL; ?>controle-departamento/index">> Departamento</a></li>                              
                            <li><a href="<?php echo URL; ?>controle-usuario/index">> Equipamentos</a></li>                              
                            <li><a href="<?php echo URL; ?>controle-tecnico/index">> Técnico</a></li>                
                            <li><a href="<?php echo URL; ?>controle-usuario/index">> Usuário</a></li>                
                        </ul>
                    </li>

                    <li>
                        <a href="#servSubmenu" data-toggle="collapse" >
                            <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                            Serviços
                        </a>
                        <ul class="collapse list-unstyled" id="servSubmenu">

                            <li>
                                <a href="#servSubmenu2" data-toggle="collapse" >
                                    > Ocorrências Manutenção
                                </a>
                                <ul class="collapse list-unstyled" id="servSubmenu2">
                                    <li><a href="<?php echo URL; ?>controle-ocorrencia/index">> Em processo</a></li>
                                    <li><a href="<?php echo URL; ?>controle-ocorrencia/indexFechadas">> Fechadas</a></li>
                                </ul>

                            <li>
                                <a href="#servSubmenu3" data-toggle="collapse" >
                                    > Ocorrências D.T.I
                                </a>
                                <ul class="collapse list-unstyled" id="servSubmenu3">
                                    <li><a href="<?php echo URL; ?>controle-ocorrenciaDti/index">> Em processo</a></li>
                                    <li><a href="<?php echo URL; ?>controle-ocorrenciaDti/indexFechadas">> Fechadas</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo URL; ?>controle-of/index">> Of's</a></li>
                    </li>
                </ul>
                </li>
                <li>

                    <a href="#relSubmenu" data-toggle="collapse" >
                        <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
                        Relatórios
                    </a>
                    <ul class="collapse list-unstyled" id="relSubmenu">
                        <li><a href="<?php echo URL; ?>controle-relatorioManut/index">> Relatório Manutenção</a></li>
                        <li><a href="<?php echo URL; ?>controle-relatorioDti/index">> Relatório DTI</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo URL; ?>controle-monitorDti/index">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                        Monitor DTI
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>controle-monitor/index">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                        Monitor Manutenção
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
                        Ajuda
                    </a>
                </li>
				<li>
                    <!-- mibew button -->
                    <a id="mibew-agent-button" href="http://192.168.100.16:82/mibew/operator/login" target="_blank">
                        <i class="fa fa-comments fa-2x " aria-hidden="true"></i>
                        Chat
                    </a>
                    <!-- / mibew button -->
                </li>
                <li>
                    <a href="<?php echo URL; ?>controle-login/logout">
                        <i class="fa fa-fw fa-sign-out fa-2x"></i>
                        Logout
                    </a>
                </li>
                <li>
                    <a href="http://192.168.100.150/CisInfo/Index.php">
                        -- Versão antiga --
                    </a>
                </li>
                </ul>
                <!--Menu Admin-->

                <?php
            } else if ($_SESSION['nivel'] == 3) {
                ?>

                <!--Menu Usuário-->
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="<?php echo URL; ?>controle-home/index">
                            <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                            Home
                        </a> 
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-usuario/perfilUsuario">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            Perfil
                        </a>
                    </li>

                    <li>
                        <a href="#servSubmenu" data-toggle="collapse" >
                            <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                            Serviços
                        </a>
                        <ul class="collapse list-unstyled" id="servSubmenu">
                            <li><a href="<?php echo URL; ?>controle-ocorrencia/index">> Ocorrências-Mant.</a></li>
                            <li><a href="<?php echo URL; ?>controle-ocorrenciadti/index">> Ocorrências-DTI</a></li>
                        </ul>

                    </li>
                    <li>

                        <a href="#relSubmenu" data-toggle="collapse" >
                            <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
                            Relatórios
                        </a>
                        <ul class="collapse list-unstyled" id="relSubmenu">
                            <li><a href="<?php echo URL; ?>controle-relatorioManut/index">> Relatório Manutenção</a></li>
                            <li><a href="<?php echo URL; ?>controle-relatorioDti/index">> Relatório DTI</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
                            Ajuda
                        </a>
                    </li>
					<li>
                    <!-- mibew button -->
                    <a id="mibew-agent-button" href="/mibew/chat?locale=pt-br" target="_blank" onclick="Mibew.Objects.ChatPopups['5b5f531069f288c9'].open();return false;">
                        <i class="fa fa-comments fa-2x " aria-hidden="true"></i>
                        Chat
                    </a>
                    <script type="text/javascript" src="/mibew/js/compiled/chat_popup.js">
                    </script>
                    <script type="text/javascript">
                        Mibew.ChatPopup.init({"id": "5b5f531069f288c9", "url": "\/mibew\/chat?locale=pt-br", "preferIFrame": true, "modSecurity": false, "forceSecure": false, "width": 640, "height": 480, "resizable": true, "styleLoader": "\/mibew\/chat\/style\/popup"});
                    </script>
                    <!-- / mibew button -->
                </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-login/logout">
                            <i class="fa fa-fw fa-sign-out fa-2x"></i>
                            Logout
                        </a>
                    </li>
                    <li>
                        <a href="http://192.168.100.150/CisInfo/Index.php">
                            -- Versão antiga --
                        </a>
                    </li>
                </ul>
                <!--Menu Usuário-->

                <?php
            } else if ($_SESSION['nivel'] == 2) {
                ?>

                <!--Menu Técnico Manutenção-->
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="<?php echo URL; ?>controle-home/index">
                            <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                            Home
                        </a> 
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-usuario/perfilUsuario">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            Perfil
                        </a>
                    </li>

                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" >
                            <i class="fa fa-id-card-o fa-2x"  aria-hidden="true"></i>
                            Cadastros
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">                                   
                            <li><a href="<?php echo URL; ?>controle-usuario/index">> Equip. Manutenção</a></li>                              
                            <li><a href="<?php echo URL; ?>controle-tecnico/index">> Técnico</a></li>                               
                        </ul>
                    </li>

                    <li>
                        <a href="#servSubmenu" data-toggle="collapse" >
                            <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                            Serviços
                        </a>
                        <ul class="collapse list-unstyled" id="servSubmenu">

                            <li>
                                <a href="#servSubmenu2" data-toggle="collapse" >
                                    *Ocorrências Manutenção
                                </a>
                                <ul class="collapse list-unstyled" id="servSubmenu2">
                                    <li><a href="<?php echo URL; ?>controle-ocorrencia/index">> Em processo</a></li>
                                    <li><a href="<?php echo URL; ?>controle-ocorrencia/indexFechadas">> Fechadas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <a href="#relSubmenu" data-toggle="collapse" >
                            <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
                            Relatórios
                        </a>
                        <ul class="collapse list-unstyled" id="relSubmenu">
                            <li><a href="<?php echo URL; ?>controle-relatorioManut/index">> Relatório Manutenção</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-monitor/index">
                            <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                            Monitor Manutenção
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
                            Ajuda
                        </a>
                    </li>
					<li>
                    <!-- mibew button -->
                    <a id="mibew-agent-button" href="http://192.168.100.16:82/mibew/operator/login" target="_blank">
                        <i class="fa fa-comments fa-2x " aria-hidden="true"></i>
                        Chat
                    </a>
                    <!-- / mibew button -->
                </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-login/logout">
                            <i class="fa fa-fw fa-sign-out fa-2x"></i>
                            Logout
                        </a>
                    </li>
                    <li>
                        <a href="http://192.168.100.150/CisInfo/Index.php">
                            -- Versão antiga --
                        </a>
                    </li>
                </ul>
                <!--Menu Tecnico Manutenção-->

                <?php
            } else if ($_SESSION['nivel'] == 4) {
                ?>

                <!--Menu Técnico Dti-->
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="<?php echo URL; ?>controle-home/index">
                            <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                            Home
                        </a> 
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>controle-usuario/perfilUsuario">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            Perfil
                        </a>
                    </li>

                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" >
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            Cadastros
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">      
                            <li><a href="<?php echo URL; ?>controle-departamento/index">> Departamento</a></li>                              
                            <li><a href="<?php echo URL; ?>controle-usuario/index">> Equipamentos</a></li>                              
                            <li><a href="<?php echo URL; ?>controle-tecnico/index">> Técnico</a></li>                
                            <li><a href="<?php echo URL; ?>controle-usuario/index">> Usuário</a></li>                
                        </ul>
                    </li>

                    <li>
                        <a href="#servSubmenu" data-toggle="collapse" >
                            <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                            Serviços
                        </a>
                        <ul class="collapse list-unstyled" id="servSubmenu">

                            <li>
                                <a href="#servSubmenu3" data-toggle="collapse" >
                                    *Ocorrências D.T.I
                                </a>
                                <ul class="collapse list-unstyled" id="servSubmenu3">
                                    <li><a href="<?php echo URL; ?>controle-ocorrenciadti/index">> Em processo</a></li>
                                    <li><a href="<?php echo URL; ?>controle-ocorrenciadti/indexFechadas">> Fechadas</a></li>
                                </ul>
                            </li>
                    </li>
                </ul>
                </li>

                <li>

                    <a href="#relSubmenu" data-toggle="collapse" >
                        <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
                        Relatórios
                    </a>
                    <ul class="collapse list-unstyled" id="relSubmenu">
                        <li><a href="<?php echo URL; ?>controle-relatorioDti/index">> Relatório DTI</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo URL; ?>controle-monitorDti/index">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
                        Monitor DTI
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
                        Ajuda
                    </a>
                </li>
				<li>
                    <!-- mibew button -->
                    <a id="mibew-agent-button" href="http://192.168.100.16:82/mibew/operator/login" target="_blank">
                        <i class="fa fa-comments fa-2x " aria-hidden="true"></i>
                        Chat
                    </a>
                    <!-- / mibew button -->
                </li>
                <li>
                    <a href="<?php echo URL; ?>controle-login/logout">
                        <i class="fa fa-fw fa-sign-out fa-2x"></i>
                        Logout
                    </a>
                </li>
                <li>
                    <a href="http://192.168.100.150/CisInfo/Index.php">
                        -- Versão antiga --
                    </a>
                </li>
                </ul>
                <!--Menu Tecnico DTI-->

                <?php
            }
            ?>

        </div><br>
        <div class="col-sm-10">