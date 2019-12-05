<?php
    if(isset($_POST['removeraluno'])){
        $id = $_POST['removeraluno'];
        $sql = "
            DELETE FROM
                `aluno`
            WHERE 
                `id_aluno` = $id
        ";

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Aluno removido com sucesso!");
            include("gerenciarAlunos.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarAlunos.php");
        }
        exit;
    }elseif(isset($_POST['enviaaluno'])){
        $nome = addslashes($_POST['nome']);
        $semestre = addslashes($_POST['semestre']);
        $prof = addslashes($_POST['prof']);


        $sql = "
            INSERT INTO `aluno`(
                `nome`,
                `semestre`,
                `professor_id_professor`
            )VALUES(
                '$nome',
                '$semestre',
                '$prof'
            )
        ";
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Aluno cadastrado com sucesso!");
            include("gerenciarAlunos.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarAlunos.php");
        }
        exit;
    }elseif(isset($_POST['alteraaluno'])){
        $id = $_POST['alteraaluno'];
        $nome = addslashes($_POST['nome']);
        $semestre = addslashes($_POST['semestre']);
        $prof = addslashes($_POST['prof']);

        $sql = "
            UPDATE 
                `aluno`
            SET
                `nome` = '$nome',
                `semestre` = '$semestre',
                `professor_id_professor` = '$prof'
            WHERE 
                `id_aluno` = $id
                
        ";

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Aluno alterado com sucesso!");
            include("gerenciarAlunos.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarAlunos.php");
        }

        exit;
    }else{
        include("gerenciarAlunos.php");
        exit;
    }