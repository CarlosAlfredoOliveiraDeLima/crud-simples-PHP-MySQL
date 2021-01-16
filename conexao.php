<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "crudsimples";

    //Conexão com o bando através de api
    //mysqli_connect($server, $user, $pass, $bd);

    if(mysqli_connect($server, $user, $pass, $bd)){
        //echo "Conectado!";
    }else
        echo "Erro!";