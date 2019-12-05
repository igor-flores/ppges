<?php
    if (isset($_POST['remover_servidor'])) {
        $id = $_POST['remover_servidor'];
        $sql = "
            DELETE FROM
                `coordenacao`
            WHERE 
                `id_coordenacao` = $id
        ";

        if (mysqli_query($con, $sql)) {
            alertModal("Boa!", "Servidor removido com sucesso!");
        } else {
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarCoordenacao.php");
        exit;


    } elseif (isset($_POST['envia_coordenacao'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $comissao = addslashes($_POST['comissao']);
        $cargo = addslashes($_POST['cargo']);

        $sql = "
            INSERT INTO `coordenacao`(
                `nome`,
                `email`,
                `cargo`,
                `comissao`
            )VALUES(
                '$nome',
                '$email',
                '$cargo',
                '$comissao'
            )
        ";
        if (mysqli_query($con, $sql)) {
            alertModal("Boa!", "Servidor cadastrado com sucesso!");
        } else {
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarCoordenacao.php");
        exit;

    } elseif (isset($_POST['altera_servidor'])) {
        $id = $_POST['altera_servidor'];
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $comissao = addslashes($_POST['comissao']);
        $cargo = addslashes($_POST['cargo']);

        $sql = "
            UPDATE 
                `coordenacao`
            SET
                `nome` = '$nome',
                `email` = '$email',
                `comissao` = '$comissao',
                `cargo` = '$cargo'
            WHERE 
                `id_coordenacao` = '$id' 
        ";

        if (mysqli_query($con, $sql)) {
            alertModal("Boa!", "Servidor alterado com sucesso!");
        } else {
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarCoordenacao.php");
        exit;

    }
    include("gerenciarCoordenacao.php");
    exit;
