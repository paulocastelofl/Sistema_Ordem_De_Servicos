<?php


class ModelsConn {

    private static $Host = 'localhost';
    private static $User = 'root';
    private static $Pass = '';
    private static $Dbsa = 'osproject';

    /** @var PDO */
    private static $Connect = null;

    /** conecta com o banco de dados com pattern singleton
     * retorna um objeto PDO
     */
    private static function Connectar() {
        try {
            if (self::$Connect == NULL):
                $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'];
                self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
            endif;
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            die;
        }
        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /** Retorna um objeto PDO singleton patterm. */
    public static function getConn() {
        return self::Connectar();
    }

}
