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

    function mostra_data($data){
        $data_vetor = explode('-', $data);
        $data_Br = $data_vetor[2]."/".$data_vetor[1]."/".$data_vetor[0];
        return $data_Br;
    }

    function mover_foto($vetor_foto){
        if(!$vetor_foto['error']){
            $nome_arquivo = md5(date('Ymdhms'))."--".date('Y-m-d-h-m-s').".jpg";
            move_uploaded_file($vetor_foto['tmp_name'], "imagens_usuarios/".$nome_arquivo);
            return $nome_arquivo;
        }else{
            return 0;
        }
    }