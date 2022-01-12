<?php

namespace Src\Core;

use \PDO;
use \PDOException;

class Model{

    public function save($nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo)
    {
        try {
            $query = Connect::getInstance()->prepare(
                "INSERT INTO fans (nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo) 
                 VALUES (:nome, :documento, :cep, :endereco, :bairro, :cidade, :uf, :telefone, :email, :ativo);"
            );
            $query->bindValue(":nome", $nome, PDO::PARAM_STR);
            $query->bindValue(":documento", $documento, PDO::PARAM_STR);
            $query->bindValue(":cep", $cep, PDO::PARAM_STR);
            $query->bindValue(":endereco", $endereco, PDO::PARAM_STR);
            $query->bindValue(":bairro", $bairro, PDO::PARAM_STR);
            $query->bindValue(":cidade", $cidade, PDO::PARAM_STR);
            $query->bindValue(":uf", $uf, PDO::PARAM_STR);
            $query->bindValue(":telefone", $telefone, PDO::PARAM_STR);
            $query->bindValue(":email", $email, PDO::PARAM_STR);
            $query->bindValue(":ativo", $ativo, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao inserir!");
        }
    }

    public function listAll()
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