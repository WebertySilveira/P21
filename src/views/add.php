<?php 
$controller = new \Src\Core\Controller();
?>

<form method="POST">
  <div class="row my-3">
    <div class="col">
      <input type="text" name="nome" class="form-control" placeholder="Nome" required>
    </div>
    <div class="col">
      <input type="text" name="documento" class="form-control" placeholder="Documento" required>
    </div>
  </div>

  <div class="row my-3">
    <div class="col">
      <input type="text" name="cidade" class="form-control" placeholder="Cidade" required>
    </div>
    <div class="col">
      <input type="text" name="endereco" class="form-control" placeholder="Endereço" required>
    </div>
    <div class="col">
      <input type="text" name="bairro" class="form-control" placeholder="Bairro" required>
    </div>
  </div>

  <div class="row my-3">
    <div class="col">
      <input type="text" name="cep" class="form-control" placeholder="CEP" required>
    </div>
    <div class="col">
      <input type="text" name="uf" class="form-control" placeholder="UF" required>
    </div>
  </div>

  <div class="row my-3">
    <div class="col">
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="col">
      <input type="text" name="telefone" class="form-control" placeholder="Telefone">
    </div>
    <div class="col">
      <input type="text" name="ativo" class="form-control" placeholder="Ativo">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
if(!empty($_POST)){
  $nome = $_POST['nome'];
  $documento = $_POST['documento']; 
  $cep = $_POST['cep']; 
  $endereco = $_POST['endereco']; 
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade']; 
  $uf = $_POST['uf']; 
  $telefone = $_POST['telefone']; 
  $email = $_POST['email'];
  $ativo = $_POST['ativo'];

  $controller->create($nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo); 
}
?>