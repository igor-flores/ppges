<?php
    //REMOVER
    if(isset($_POST['remover'])){
        $id = $_POST['remover'];


        $query = mysqli_query($con, "SELECT foto FROM professor WHERE id_professor = $id");
        $nome = mysqli_fetch_array($query);
        @unlink("../assets/images/professores/$nome[foto]");

        $sql = "
            DELETE FROM
                professor
            WHERE
                id_professor = $id
        ";

        if(mysqli_query($con, $sql)){
            alertModal("Remoção bem sucedida!", "Professor removido com sucesso!");
            include("gerenciarProfessores.php");
        }

    //ADICIONAR
    }elseif(isset($_POST['alterar_professor'])){
        $id = $_POST['alterar_professor'];
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $descri = $_POST['descricao'];
        $descricao = addslashes($_POST['descricao']);
        $description = $tr->translate($descri);
        $description = addslashes($description);
        $lattes = addslashes($_POST['lattes']);
        $areapq = addslashes($_POST['areaPesquisa']);

        if(isset($_POST['research'])){
            $research = addslashes($_POST['research']);
        }else{
            $research = '';
        }
        if(isset($_FILES['foto']['tmp_name']) && $_FILES['foto']['tmp_name'] != ''){

            $query = mysqli_query($con, "SELECT foto FROM professor WHERE id_professor = $id");
            $delete = mysqli_fetch_array($query);
            @unlink("../assets/images/professores/$delete[foto]");

            $foto = (date("md--his").".jpg");
            copy($_FILES["foto"]["tmp_name"], "../assets/images/professores/".$foto);

            include "assets/zebra/Zebra_Image.php";
            $image = new Zebra_Image();
            $image->auto_handle_exif_orientation = false;
            $image->source_path = "../assets/images/professores/".$foto;
            $image->target_path = "../assets/images/professores/".$foto;
            $image->jpeg_quality = 100;
            $image->preserve_aspect_ratio = true;
            $image->enlarge_smaller_images = true;
            $image->preserve_time = true;
            $image->handle_exif_orientation_tag = true;
            $image->resize(900, 900, ZEBRA_IMAGE_CROP_CENTER);
            $sql = "
                UPDATE 
                    `professor`
                SET
                    `nome` = '$nome',
                    `foto` = '$foto',
                    `email` = '$email', 
                    `descricao` = '$descricao',
                    `description` = '$description',
                    `area_pesquisa` = '$areapq',
                    `lattes` = '$lattes',
                    `research` = '$research'
                WHERE 
                    `id_professor` = $id
            ";
        }else{
            $sql = "
                UPDATE 
                    `professor`
                SET
                    `nome` = '$nome',
                    `email` = '$email', 
                    `descricao` = '$descricao',
                    `description` = '$description',
                    `area_pesquisa` = '$areapq',
                    `lattes` = '$lattes',
                    `research` = '$research'
                WHERE 
                    `id_professor` = $id
            ";
        }
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Professor alterado com sucesso!");
        }else{
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarProfessores.php");
        exit;
    }elseif(isset($_POST['adicionar'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $descricao = $_POST['descricao'];
        $description = $tr->translate($descricao);
        $lattes = addslashes($_POST['lattes']);
        $areapq = addslashes($_POST['areaPesquisa']);

        if(isset($_POST['research'])){
            $research = addslashes($_POST['research']);
        }else{
            $research = '';
        }
        if(isset($_FILES['foto']['tmp_name']) && $_FILES['foto']['tmp_name'] != ''){
            $foto = (date("md--his").".jpg");
            copy($_FILES["foto"]["tmp_name"], "../assets/images/professores/".$foto);

            include "assets/zebra/Zebra_Image.php";
            $image = new Zebra_Image();
            $image->auto_handle_exif_orientation = false;
            $image->source_path = "../assets/images/professores/".$foto;
            $image->target_path = "../assets/images/professores/".$foto;
            $image->jpeg_quality = 100;
            $image->preserve_aspect_ratio = true;
            $image->enlarge_smaller_images = true;
            $image->preserve_time = true;
            $image->handle_exif_orientation_tag = true;
            $image->resize(900, 900, ZEBRA_IMAGE_CROP_CENTER);
        }else{
            $foto = '';
        }
        $sql = "
            INSERT INTO `professor`(
                `nome`, 
                `foto`, 
                `email`, 
                `descricao`, 
                `description`, 
                `area_pesquisa`,
                `lattes`, 
                `research`
            )VALUES(
                '$nome',
                '$foto',
                '$email',
                '$descricao',
                '$description',
                '$areapq',
                '$lattes',
                '$research'
            )
        ";
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Professor cadastrado com sucesso!");
        }else{
            alertModal("Merda", "Deu algum erro!");
        }
        include("gerenciarProfessores.php");
        exit;
    }else{
        include("gerenciarProfessores.php");
        exit;

    }
