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

    public function delete($id)
    {
        if(!empty($id)){
            $delete = new Model();
            $delete->remove($id);
        }
        unset($_GET);
        $this->index();
    }

    public function XML($uploadfile)
    {
        if(!empty($uploadfile)){
            $xml = simplexml_load_file($uploadfile);
            foreach($xml->children() as $value){
                $nome = $value->attributes()->nome;
                $documento = $value->attributes()->documento;
                $cep = $value->attributes()->cep;
                $endereco = $value->attributes()->endereco;
                $bairro = $value->attributes()->bairro;
                $cidade = $value->attributes()->cidade;
                $uf = $value->attributes()->uf;
                $telefone = $value->attributes()->telefone;
                $email = $value->attributes()->email;
                $ativo = $value->attributes()->ativo;

                $this->create($nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo);
            }
        }
        $this->index();
    }
}