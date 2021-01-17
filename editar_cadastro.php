<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Cadastro</title>
</head>
<body>
    <?php
        include "conexao.php";

        if (isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $id = '';
        }

        $sql = "select * from pessoas where cod_pessoa = $id";
        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração de Cadastro</h1>
                <form action="editar_script.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome completo:</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']?>">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" required value="<?php echo $linha['endereco']?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone']?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="dt_nasc">Data de Nacimento:</label>
                        <input type="date" class="form-control" name="dt_nasc" required value="<?php echo $linha['data_nascimento']?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                    </div>
                </form>
                <a href="index.php" class="btn btn-primary">Voltar para o Início</a>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>