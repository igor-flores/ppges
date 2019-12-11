<?php
    if(isset($_POST['update'])){
        $email = addslashes($_POST['email']);
        $capes = addslashes($_POST['capes']);
        $telefone = addslashes($_POST['telefone']);
        $endereco = addslashes($_POST['endereco']);

        $sql = "
        UPDATE 
            `informacao`
        SET
            `email` = '$email',
            `capes` = '$capes',
            `telefone` = '$telefone',
            `endereco` = '$endereco'
        ";
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Informações atualizadas com sucesso");
        }else{
            alertModal("Merda!", "Algo deu errado!");
        }
    }
    include "home.php";
    exit;