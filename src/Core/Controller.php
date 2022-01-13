<?php 

namespace Src\Core;

class Controller
{
    public function index()
    {
        require __DIR__ . '/../Views/index.php';
    }

    public function read($id = false)
    {
        $list = new Model();
        return $list->list($id);
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

    public function update($id, $nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo)
    {
        $update = new Model();
        $update->edit($id, $nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo);
        
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

    public function generateCSV()
    {
 
        $read = new Model();
        $read = $read->list();

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=clientes.csv');
        $output = fopen('php://output', 'w');
        ob_end_clean();
        fputcsv($output, array('ID', 'NOME', 'DOCUMENTO', 'CEP', 'ENDEREÇO', 'BAIRRO', 'CIDADE', 'UF', 'TELEFONE', 'EMAIL', 'ATIVO'));

        foreach ($read as $row) {
            fputcsv($output, $row, ',');
        }
    }
}