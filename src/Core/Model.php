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

    public function remove($id)
    {
        try {
            $query = Connect::getInstance()->prepare(
                "DELETE FROM fans WHERE id = :id;"
            );
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao Deletar!");
        }
    }

    public function edit($id, $nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo)
    {
        try {
            $query = Connect::getInstance()->prepare(
                "UPDATE fans SET 
                nome = :nome,
                documento = :documento,
                cep = :cep,
                endereco = :endereco,
                bairro = :bairro,
                cidade = :cidade,
                uf = :uf,
                telefone = :telefone,
                email = :email,
                ativo = :ativo
                WHERE id = :id;"
            );
            $query->bindValue(":id", $id, PDO::PARAM_STR);
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
            die("Erro ao Atualizar!");
        }
    }

    public function list($id = false)
    {  
        try {
            if($id){
                $query = Connect::getInstance()->prepare(
                    "SELECT * FROM fans WHERE id = :id;"
                );
                $query->bindValue(":id", $id, PDO::PARAM_STR);
            }else{
                $query = Connect::getInstance()->prepare(
                    "SELECT * FROM fans;"
                );
            }
            $query->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao Exibir!");
        }

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}