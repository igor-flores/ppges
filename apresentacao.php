<title> <?= $LANG['menu'][1]['titulo'] ?></title>

<div class="col-md-12">
    <h6 style="margin-bottom: 5px; color: #3a3a3a;"> <?= $LANG['menu'][1]['titulo'] ?>:</h6>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php
        $query = mysqli_query($con, "
            SELECT 
                *
            FROM
                apresentacao
        ");
        $n = 1;
        while($aprs = mysqli_fetch_array($query)){
            if($SHORTNAME == 'en_US'){
                $aprs['texto'] = $aprs['text'];
                $aprs['titulo'] = $aprs['title'];
            }
            echo "
                <li class='nav-item'>
                        <a class='nav-link text-success ". ($n == 1 ? 'active' : '') ."' data-toggle='tab' href='#n$n' role='tab' aria-selected='true'>". $aprs['titulo']."</a>
                </li>
            ";
            $n++;
        }
        $aprs = "";
        ?>
    </ul>
    <div class="tab-content" id="myTabContent">
        <?php

        $query = mysqli_query($con, "
            SELECT 
                *
            FROM
                apresentacao
        ");

        $n = 1;
        while($aprs = mysqli_fetch_array($query)){
            if($SHORTNAME == 'en_US'){
                    $aprs['texto'] = $aprs['text'];
                    $aprs['titulo'] = $aprs['title'];
            }

            echo " 
                <div class='tab-pane fade ". ($n == 1 ? 'show active' : '') ."' id='n$n' role='tabpanel'>
                    <p style='margin: 5px'>$aprs[texto]</p>
                </div>
            ";
            $n++;
        }
        ?>

    </div>



</div>