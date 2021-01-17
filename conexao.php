<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "crudsimples";

    //Conexão com o bando através de api
    //mysqli_connect($server, $user, $pass, $bd);

    $conn = new mysqli($server, $user, $pass, $bd);

    if($conn){
        //echo "Conectado!";
    }else
        echo "Erro!";

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }

