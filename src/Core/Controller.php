<?php 

namespace Src\Core;

class Controller
{
    public function index()
    {
        require __DIR__ . '/../Views/index.php';
    }

    public function read()
    {
        $list = new Model();
        return $list->listAll();
    }

    public function create($nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo)
    {
        $create = new Model();
        $create->save($nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo);
    }
}