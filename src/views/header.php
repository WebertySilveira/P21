<?php $controller = new \Src\Core\Controller(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AllBlacks Fans</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?php echo('/p21-teste'); ?>" class="nav-link px-2 text-secondary">Home</a></li>
            </ul>
            <form method="get">
                <button name="addFan" value="addFan" class="btn btn-outline-light me-2">Adicionar Torcedor</button>
            </form>
            <form method="get">
                <button name="importXML" value="importXML" class="btn btn-warning me-2">Importar XML</button>
            </form>
            <form method="get">
                <button name="addSheet" value="addSheet" class="btn btn-success me-2">Exportar Excell</button>
            </form>
        </div>
    </div>
  </header>
