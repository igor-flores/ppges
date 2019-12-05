<?php
    include "../conexao.php";
    include "../function.php";
    $email = addslashes($_POST['email']);      //addslashes é uma forma de segurança para informações
    $senha = md5(addslashes($_POST['senha']));

    $sql = "
        SELECT
            *
        FROM
            administrador
        WHERE
            email = '$email' and senha = '$senha'
    ";

    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        session_start();
        $dados = mysqli_fetch_array($query);
        $_SESSION['usuario'] = $dados;
        header("location: index.php");
    }else{
        header("location: login.php?msg=true");
        exit;
    }


?>