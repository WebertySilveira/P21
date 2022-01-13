<?php $fans = $controller->read($_GET['edit']); ?>

<?php foreach($fans as $value) : ?>
  <form method="POST">
    <div class="row my-3">
      <div class="col">
        <input type="text" value="<?= $value['nome']; ?>" name="nome" class="form-control" placeholder="Nome" required>
      </div>
      <div class="col">
        <input type="number" value="<?= $value['documento']; ?>" name="documento" class="form-control" placeholder="Documento">
      </div>
    </div>

    <div class="row my-3">
      <div class="col">
        <input type="text" value="<?= $value['cidade']; ?>" name="cidade" class="form-control" placeholder="Cidade" required>
      </div>
      <div class="col">
        <input type="text" value="<?= $value['endereco']; ?>" name="endereco" class="form-control" placeholder="Endereço" required>
      </div>
      <div class="col">
        <input type="text" value="<?= $value['bairro']; ?>" name="bairro" class="form-control" placeholder="Bairro" required>
      </div>
    </div>

    <div class="row my-3">
      <div class="col">
        <input type="text" value="<?= $value['cep']; ?>" name="cep" class="form-control" placeholder="CEP" required>
      </div>
      <div class="col">
        <input type="text" value="<?= $value['uf']; ?>" name="uf" class="form-control" placeholder="UF"  maxlength="2"required>
      </div>
    </div>

    <div class="row my-3">
      <div class="col">
        <input type="email" value="<?= $value['email']; ?>" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="col">
        <input type="text" value="<?= $value['telefone']; ?>" name="telefone" class="form-control" placeholder="Telefone">
      </div>
      <div class="col">
        <input type="number" value="<?= $value['ativo']; ?>" name="ativo" class="form-control" min="0" max="1" placeholder="Ativo">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php endforeach; ?>

<?php 
if(!empty($_POST)){
  $id = $_GET['edit'];
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

  $controller->update($id, $nome, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $ativo); 
  unset($_GET);
}
?>