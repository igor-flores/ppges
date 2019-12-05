<title> <?= $LANG['menu'][6]['titulo'] ?></title>

<div class="col-md-12">
    <h3> <?= $LANG['menu'][6]['titulo'] ?> </h3>
    <?= $LANG['seminario']['texto'] ?>
        <?php $n = 1;
            while(isset($LANG['seminario']['palestras'][$n])){
                echo ("
                    <div class='card' style='margin-bottom: 10px'>
                        <div class='card-body'>
                            <p>
                                <b>".$LANG['seminario']['card'][1]."</b>".$LANG['seminario']['palestras'][$n]['palestrante']."<br>
                               
                                <b>".$LANG['seminario']['card'][2]."</b>".$LANG['seminario']['palestras'][$n]['orientador']."<br>
                                <b>".$LANG['seminario']['card'][3]."</b>".$LANG['seminario']['palestras'][$n]['area']."<br>
                                <b>".$LANG['seminario']['card'][4]."</b>".$LANG['seminario']['palestras'][$n]['tema']."<br>
                                <b>".$LANG['seminario']['card'][5]."</b>".$LANG['seminario']['palestras'][$n]['data']."
                            </p>
                            <button class='btn btn-success' type='button' data-toggle='modal' data-target='#ModalLongoExemplo".$n."'>
                                ".$LANG['seminario']['card'][6] ."
                            </button>
                        </div>
                    </div> 
                    <div class='modal fade' id='ModalLongoExemplo".$n."' tabindex='-1' role='dialog' aria-labelledby='TituloModalLongoExemplo' aria-hidden='true'>
                        <div class='modal-dialog modal-lg' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='TituloModalLongoExemplo'>".$LANG['seminario']['palestras'][$n]['palestrante']."</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>

                                    <b> Resumo </b>
                                    <p class='text-justify'>".$LANG['seminario']['palestras'][$n]['resumo']." </p>  
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                ");
                $n++;
            }
        ?>
        <br>
        <h4>Palestra Sobre Arquiteturas de Microserviços</h4>
        <p class="text-justify">O Coordenador do Programa de Pós-Graduação em Engenharia de Software, Prof. Dr.  Elder de Macedo Rodrigues, divulga para os interessados uma palestra com Liancarlo Leffa Rolim – IT Specialist na IBM, a ser realizada no dia 29/03. Liancarlo é desenvolvedor de software com experiência em software de alta escala e missão crítica, atuando há oito anos como programador.<br>
        <p class="text-justify">A palestra abordará um relato de experiência dos sete anos trabalhando no desenvolvimento de software em core bancário.A palestra abordará a utilização de arquitetura SOA (Arquitetura orientada a serviço) e arquitetura de microserviços, com tecnologias como Spring Boot, Spring Batch, JavaEE, EJB, BPEL, OSB, Docker e Kubernetes.</p>
        <b>Data:</b> 29/03/2019, 18:30h
        <br><b>Tema:</b> “SOA e Microserviços”
        <br><b>Local:</b> Sala 101 do Campus Alegrete – Auditório Profª Márcia Cera
        <hr>
        <h4>Aula Magna de Abertura do Programa</h4>
        <p>O Coordenador do Programa de Pós-Graduação em Engenharia de Software, Prof. Dr.  Elder de Macedo Rodrigues, convoca todos docentes e discentes pertencentes ao programa, para os eventos abaixo descritos, a serem realizados no dia <b>22 de março de 2019</b>. <br><br>
            <b>Palestrante: </b> Prof. Dr. Avelino Francisco Zorzo, Coordenador de Programas Profissionais da área de Computação da CAPES/MEC. <br>

        <p>
        <b>Data:</b> 22/04/2019, 16h
        <br><b>Tema:</b> “Avaliação da Pós-Graduação”
        <br><b>Local:</b> PampaTec<br>

        <p><b>Data:</b> 22/04/2019, 18h30
            <br><b>Tema:</b> “Blockchain: o que é e onde está sendo utilizada”
            <br><b>Local:</b> Sala 101 do Campus Alegrete – Auditório Profª Márcia Cera
</div>