<?php
    if(isset($_POST['removerdisciplina'])){
        $id = $_POST['removerdisciplina'];
        $sql = "
                DELETE FROM
                    `disciplina`
                WHERE 
                    `codigo` = '$id'
            ";

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Disciplina removida com sucesso!");
            include("gerenciarDisciplinas.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarDisciplinas.php");
        }
        exit;
    }elseif(isset($_POST['enviadisciplina'])){
        $codigo = addslashes($_POST['codigo']);
        $nome = addslashes($_POST['nome']);
        $name = $tr->translate($nome);
        $ch = addslashes($_POST['ch']);
        $cd = addslashes($_POST['cd']);
        $obg = addslashes($_POST['obg']);

        $sql = "
                INSERT INTO `disciplina`(
                    `codigo`,
                    `nome`,
                    `name`,
                    `ch`,
                    `cd`,
                    `obrigatorio`
                )VALUES(
                    '$codigo',
                    '$nome',
                    '$name',
                    $ch,
                    $cd,
                    $obg
                )
            ";
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Disciplina cadastrada com sucesso!");

        }else{
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarDisciplinas.php");
        exit;
    }elseif(isset($_POST['alteradisciplina'])){
        $codigo = $_POST['alteradisciplina'];
        $codigomuda = $_POST['codigo'];
        $nome = addslashes($_POST['nome']);
        $name = addslashes($_POST['name']);
        $ch = addslashes($_POST['ch']);
        $cd = addslashes($_POST['cd']);
        $obg = addslashes($_POST['obg']);


        $sql = "
            UPDATE 
                `disciplina`
            SET
                `codigo` = '$codigomuda',
                `nome` = '$nome',
                `name` = '$name',
                `ch` = '$ch',
                `cd` = '$cd',
                `obrigatorio` = '$obg'
            WHERE 
                `codigo` = '$codigo' 
        ";

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Disciplina alterada com sucesso!");
        }else{
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarDisciplinas.php");
        exit;
    }else{
        include("gerenciarDisciplinas.php");
        exit;
    }