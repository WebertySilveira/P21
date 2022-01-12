<?php 
include_once "header.php"; 

use Src\Core\Controller;
$fans = new \Src\Core\Controller();
$fans = $fans->read();
?>

<div class="container py-3 my-4">
    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">CEP</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">CIDADE</th>
            <th scope="col">UF</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">ATIVO</th>
            <th scope="col">AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($fans as $fa) : ?>
            <tr>
                <td><?= $fa['nome']; ?></td>
                <td><?= $fa['cep']; ?></td>
                <td><?= $fa['endereco']; ?></td>
                <td><?= $fa['bairro']; ?></td>
                <td><?= $fa['cidade']; ?></td>
                <td><?= $fa['uf']; ?></td>
                <td><?= $fa['telefone']; ?></td>
                <td><?= $fa['email']; ?></td>
                <td><?= $fa['ativo']; ?></td>
                <td>
                    <form method="post" action="" onsubmit="return confirm('Tem certeza que desaja remover?')">
                        <a class="btn btn-warning" title="Editar"> 
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" title="Remover">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

<?php include_once "footer.php"; ?>