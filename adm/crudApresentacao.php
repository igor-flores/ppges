<?php
    if(isset($_POST['removerapresentacao'])){
        $id = $_POST['removerapresentacao'];
        $sql = "
            DELETE FROM
                `apresentacao`
            WHERE 
                `id_apresentacao` = $id
        ";
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Tópico excluído com sucesso!");
            include("gerenciarApresentacao.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarApresentacao.php");
        }
        exit;
    }elseif(isset($_POST['enviaapresentacao'])){
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];

        $title = $tr->translate($titulo);


        $text = str_replace(";", "", $texto);
        $text = strip_tags($text);
        $text = $tr->translate($text);

        $text = str_replace("& eacute", "is", $text);
        $text = addslashes($text);
        $texto = addslashes($texto);

        $query = mysqli_query($con, "SELECT COUNT(`id_apresentacao`)/2 AS 'max' FROM `apresentacao`");
        $max = mysqli_fetch_array($query);
        $max = $max['max'] + 1;

        $sql = "
            INSERT INTO `apresentacao`(
                `id_apresentacao`,
                `titulo`,
                `texto`,
                `title`,
                `text`
            )VALUES( 
                 $max,
                '$titulo',
                '$texto',
                '$title',
                '$text'
            );
        ";

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Tópico cadastrado com sucesso!");
            include("gerenciarApresentacao.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarApresentacao.php");
        }
        exit;
    }elseif(isset($_POST['alterarapresentacao'])){
        $id = $_POST['alterarapresentacao'];
        $titulo = addslashes($_POST['titulo']);
        $texto = addslashes($_POST['texto']);
        $idioma = $_POST['language'];

        if($idioma == 'pt_BR'){
            $sql = "
                UPDATE
                    `apresentacao`
                SET
                    `titulo` = '$titulo', 
                    `texto` = '$texto'
                WHERE 
                    `id_apresentacao` = $id
            ";
        }elseif($idioma == 'en_US'){
            $sql = "
                UPDATE
                    `apresentacao`
                SET
                    `title` = '$titulo', 
                    `text` = '$texto'
                WHERE 
                    `id_apresentacao` = $id
            ";
        }

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Tópico alterado com sucesso!");
            include("gerenciarApresentacao.php");
        }else{
            alertModal("Merda", "Deu algum erro!");
            include("gerenciarApresentacao.php");
        }
        exit;
    }else{
        include("gerenciarApresentacao.php");
        exit;
    }
