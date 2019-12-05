<?php
    function alertModal($titulo, $descricao){
        echo "
            <div class='modal' tabindex='-1' role='dialog' id='teste' data-show='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>$titulo</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>
                            <p>$descricao</p>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-outline-secondary' data-dismiss='modal'>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <script>
            
                $('#teste').modal('show')
            </script>
      
        ";
    }



    function formModal($id, $titulo, $btn, $action, $descricao){
        echo "
            <button type='button' class='btn btn-$btn' data-toggle='modal' data-target='#fm$id' style='margin-top: 7px'>
                $titulo
            </button>
            
            <div class='modal fade' id='fm$id' role='dialog' style='text-align: left'>
                <div class='modal-dialog modal-lg'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title'>
                                $titulo
                            </h4>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
            
                        <form action='.?pag=$action' enctype='multipart/form-data' method='post'>
                            <div class='modal-body'>
                                $descricao
                            </div>
                            <div class='modal-footer'>
                            ";
                        if($action != ''){
                            echo "<button type='submit' class='btn btn-success'>Confirmar</button>";
                        }
        echo "
                                <button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span> Cancelar </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
        ";
    }
















    function bemVindo(){
            $msg = [
                0 => "<footer class='blockquote-footer'><cite title='Source Title'>\"A melhor maneira de prever o futuro é inventá-lo.\"</cite> Alan Kay.</footer>",
                1 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Sua mente é para ter ideias, e não para guardá-las.\"</cite> David Allen.</footer>",
                2 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Sua mente é para ter ideias, e não para guardá-las.\"</cite> David Allen.</footer>",
                3 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Melhorando a qualidade, automaticamente você estará melhorando a produtividade.\"</cite> W. Edwards Deming</footer>",
                4 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Tudo o que temos de decidir é o que fazer com o tempo que nos é dado.\" </cite> Gandalf</footer>",
                5 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Em cada obrigação existe um elemento de diversão.\"</cite> Mary Poppins</footer>",
                6 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Para a mente racional nada é inexplicável, é apenas algo que ainda não foi explicado.\"</cite> Doctor Who</footer>",
                7 => "<footer class='blockquote-footer'><cite title='Source Title'>\"Se é hora de ir, lembre-se o que está deixando. Lembre-se do melhor.\"</cite> Doctor Who</footer>",
            ];
            $i = rand(0, 7);

            return $msg[$i];
    }



?>