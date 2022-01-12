<?php

namespace Src\Core;

use \PDO;
use \PDOException;
use Src\Core\Connect;

class Model{

    public function Read()
    {
        try {
            $query = Connect::getInstance()->prepare(
                "SELECT * FROM fans;"
            );
            $query->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao Exibir!");
        }

        return $query->fetchAll();
    }
}