<?php 
$controller = new \Src\Core\Controller();
$fans = $controller->read(); 
?>

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
                    <form method="GET" onsubmit="return confirm('Tem certeza que desaja remover?')">
                        <div class="col my-1">
                            <button name="remove" value="<?php echo $fa['id']; ?>" class="btn btn-danger" title="Remover">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </form>
                    <form method="GET">
                        <div class="col my-1">
                            <button name="edit" value="<?php echo $fa['id']; ?>" class="btn btn-warning" title="Remover">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>