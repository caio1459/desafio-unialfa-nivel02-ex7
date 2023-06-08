<?php
    require "config.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Região</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM pesquisa";
                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();
                    $dados = $consulta->fetchAll(PDO::FETCH_OBJ);
                    foreach ($dados as $dado) {
                ?>
                    <tr>
                        <td><?= $dado->id ?></td>
                        <td><?= $dado->regiao ?></td>
                        <td><?= $dado->descricao ?></td>
                        <td><?= $dado->status ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>