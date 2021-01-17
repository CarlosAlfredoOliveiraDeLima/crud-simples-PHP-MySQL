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
        if (isset($_POST['busca'])){
            $pesquisa = $_POST['busca'];
        }else{
            $pesquisa = '';
        }

        include "conexao.php";
        $sql = "select * from pessoas where nome like '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="pesquisa.php" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Digite um nome" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($linha = mysqli_fetch_assoc($dados)){
                                $cod_pessoa = $linha['cod_pessoa'];
                                $nome = $linha['nome'];
                                $endereco = $linha['endereco'];
                                $telefone = $linha['telefone'];
                                $email = $linha['email'];
                                $data_nascimento = $linha['data_nascimento'];
                                $data_nascimento = mostra_data($data_nascimento);

                                echo"
                                    <tr>
                                        <th scope='row'>$nome</th>
                                        <td>$endereco</td>
                                        <td>$telefone</td>
                                        <td>$email</td>
                                        <td>$data_nascimento</td>
                                        <td width=150px>
                                            <a href='editar_cadastro.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                                            <a href='' class='btn btn-danger btn-sm'>Excluir</a>
                                        </td>
                                    </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary">Voltar para o Início</a>
            </div>
        </div>
    </div>
</body>
</html>
