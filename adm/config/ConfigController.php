<?php


class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlMetodo;
    private $UrlParamentro;
    private static $Format;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))):
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->limparUrl();
            $this->UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0])):
                $this->UrlController = $this->slugController($this->UrlConjunto[0]);
            endif;

            if (isset($this->UrlConjunto[1])):
                $this->UrlMetodo = $this->slugMetodo($this->UrlConjunto[1]);
            endif;

            if (isset($this->UrlConjunto[2])):
                $this->UrlParamentro = $this->slugMetodo($this->UrlConjunto[2]);
            else:
                $this->UrlParamentro = null;
            endif;

        else:
            $this->UrlController = $this->slugController(CONTROLER);
            $this->UrlMetodo = $this->slugMetodo(METODO);
        endif;
    }

    public function limparUrl() {
        //Eliminar as tags
        $this->Url = strip_tags($this->Url);
        //Eliminar espaços em branco
        $this->Url = trim($this->Url);
        //Eliminar a barra no final da URL
        $this->Url = rtrim($this->Url, "/");

        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';
        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }

    public function slugController($SlugController) {
        $UrlController = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($SlugController)))));
        return $UrlController;
    }

    public function slugMetodo($SlugMetod) {
        $SlugMetodo = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($SlugMetod)))));
        return lcfirst($SlugMetodo);
    }

    public function carregar() {
        //Verificar se UrlController existe com nome de classe
        if (class_exists($this->UrlController)):
            try {
                $this->login();
                $this->carregarMetodo();
            } catch (Exception $e) {
                $this->UrlController = $this->slugController(CONTROLER);
                $this->UrlMetodo = $this->slugMetodo(METODO);
                $this->carregar();
            }
        else:
            $this->UrlController = $this->slugController(CONTROLER);
            $this->UrlMetodo = $this->slugMetodo(METODO);
            $this->carregar();
        endif;
    }

    public function carregarMetodo() {
        $classeCarregar = new $this->UrlController();
        //Verificar se existe o método
        if (method_exists($classeCarregar, $this->UrlMetodo)):
            if ($this->UrlParamentro !== null):
                $classeCarregar->{$this->UrlMetodo}($this->UrlParamentro);
            else:
                $classeCarregar->{$this->UrlMetodo}();
            endif;

        else:
            $this->UrlController = $this->slugController(CONTROLER);
            $this->UrlMetodo = $this->slugMetodo(METODO);
            $this->carregarMetodo();
        endif;
    }

    private function login() {
        if (!isset($_SESSION['idt'])):
            if((($this->UrlController == 'ControleLogin') & ($this->UrlMetodo == 'login')) || (($this->UrlController == '') & ($this->UrlMetodo == ''))):
                $this->UrlController = 'ControleLogin';
                $this->UrlMetodo = 'login';
            else:                
                $_SESSION['msg'] = "<div class='alert alert-danger'>Necessário realizar o login para acessar a página.</div>";
                $this->UrlController = 'ControleLogin';
                $this->UrlMetodo = 'login';
            endif;    
        endif;
    }

}
