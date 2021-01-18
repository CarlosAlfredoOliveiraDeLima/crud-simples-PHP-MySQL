<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                include 'conexao.php';

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $dt_nasc = $_POST['dt_nasc'];
                $foto = $_FILES['foto'];
                $nome_foto = mover_foto($foto);


                $sql = "insert into pessoas (nome, endereco, telefone, email, data_nascimento, foto) values ('$nome', '$endereco', '$telefone','$email','$dt_nasc', '$nome_foto')";

                if (mysqli_query($conn, $sql)){
                    mensagem("$nome cadastrado com sucesso!", "success");
                }else {
                    mensagem("$nome não cadastrado!", "danger");
                }
                echo "<img src='imagens_usuarios/$nome_foto' title='$nome_foto' class='mostra_foto'>";
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
