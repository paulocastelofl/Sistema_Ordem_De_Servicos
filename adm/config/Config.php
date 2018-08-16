<?php
session_start();
define('URL', 'http://192.168.100.145/OSproject/adm/');

define('CONTROLER', 'controle-login');
define('METODO', 'login');

//Credenciais de acesso ao BD
define('HOST', '192.168.100.145');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'osproject');

function __autoload($Class) {
    $dirName = array(
        'controllers',
        'models',
        'models/helper',
        'assets/fpdf',
        'views',
        'config'
    );
    foreach ($dirName as $diretorios) {
        if (file_exists("{$diretorios}/{$Class}.php")):
            require("{$diretorios}/{$Class}.php");        
        endif;
    }
    
}
