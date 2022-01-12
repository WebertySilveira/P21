<?php 

namespace Src\Core;

use \PDO;
use \PDOException;

class Connect
{
    private const HOST = "localhost";
    private const USER = "root";
    private const DBNAME = "allblacks";
    private const PASSWD = "";

    private static $instance;

    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASSWD,
                );
            } catch (PDOException $exception) {
                die("Erro de Conexão com o banco!");
            }
        }
        return self::$instance;
    }

    private function __construct(){}
    private function __clone(){}
}