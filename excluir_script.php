<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Exclusão de Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                include 'conexao.php';
                $id = $_POST['id'];
                $nome = $_POST['nome'];

                $sql = "delete from pessoas where cod_pessoa = '$id'";

                if (mysqli_query($conn, $sql)){
                    mensagem("$nome excluído com sucesso!", "success");
                }else {
                    mensagem("$nome não excluído!", "danger");
                }
            ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
