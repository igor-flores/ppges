<?php
    /* CABEÇALHO */
    $LANG['navbar'] = [
        'titulo' => 'Programa de Pós Graduação em Engenharia de Software',
        'pesquisa' => 'Pesquisar'
    ];

    /* MENU */
    $LANG['logo'] = 'logoPT.jpg';
    $LANG['menu'] = [
        0 => [
            'titulo' => 'Página Inicial',
            'url' => 'home'
        ],
        1 => [
            'titulo' => 'Apresentação',
            'url' => 'apresentacao'
        ],
        2 => [
            'titulo' => 'Informes',
            'url' => 'informes'
        ],
        3 => [
            'titulo' => 'Coordenação',
            'url' => 'coordenacao'
        ],
        4 => [
            'titulo' => 'Professores Orientadores',
            'url' => 'orientadores'
        ],
        5 => [
            'titulo' => 'Eventos',
            'url' => 'eventos'
        ],
        6 => [
            'titulo' => 'Ciclo de Seminários e Palestras',
            'url' => 'seminarios'
        ],
        7 => [
            'titulo' => 'Disciplinas do Mestrado',
            'url' => 'disciplina'
        ],
        8 => [
            'titulo' => 'Alunos',
            'url' => 'alunos'
        ],
    ];

    /* FOOTER */
    $LANG['contato'] = [
      'titulo' => 'contato',
      'telefone' => 'telefone'
    ];

    $LANG['lang'] = [
        'titulo' => 'Idioma',
        'shortname' => 'pt_BR',
        'pt' => 'Português',
        'en' => 'Inglês'
    ];

    $LANG['developer'] = [
        'titulo' => 'Desenvolvido por',
        'e' => 'e'
    ];

    /* ERROR */
    $LANG['error'] = [
        'titulo' => 'Poxa!',
        'conteudo' => 'No momento essa página está em manutenção ou fora do ar.',
        'botao' => 'Ir para a página inicial'
    ];

    /* HOME */
    $LANG['home'] = [
        'noticia' => [
            'titulo' => 'Últimas notícias',
            'botao' => 'Abrir Notícia'
        ]

    ];


    /*  ORIENTADORES */
    $LANG['orientadores']['botao'] = "Ver mais!";

    /* ALUNOS */
    $LANG['alunos'] = [
        'tabela' => [
            1 => 'Nome do Aluno',
            2 => 'Orientador'
        ]
    ];

    /* INFORMES */
    $LANG['informes'] = [
        'botao' => 'Abrir PDF',
        1 => [
            'titulo' => 'Homologação dos candidatos inscritos para o mestrado EDITAL Nº 349/2019',
            'data' => '21 de outubro de 2019',
            'conteudo' => 'Lista dos candidatos homologados, edital Nº 349/2019, PROCESSO SELETIVO PARA INGRESSO DE DISCENTES NO PPGES',
            'url' => 'http://cursos.unipampa.edu.br/cursos/ppges/files/2019/10/sei_unipampa-0181004-aviso.pdf'
        ]
    ];

    /* EVENTOS */
    $LANG['eventos'] = [
        1 => 'Eventos Regionais',
        2 => 'Eventos Nacionais'
    ];

    /* DISCIPLINAS */
    $LANG['disciplina'] = [
        'descricao' => "CH: Carga Horária <br> CD: Créditos",
        'cabecalho' => [
            1 => 'Código',
            2 => 'Disciplina',
            3 => 'Obrigatória'
        ],
        'obg_sim' => 'Sim',
        'obg_nao' => 'Não'
    ];

    /* SEMINÁRIO */
    $LANG['seminario'] = [
        'texto' => "
                <p class='text-justify'>O Ciclo de Seminários e Palestras PPGES tem como objetivo trazer palestras acessíveis a um público mais amplo ministradas por profissionais, pesquisadores e professores experientes. As palestras ao longo do ano terão tema e foco variados, podendo ser mais específicas (ex. avanços no contexto de um problema específico) ou mais abrangentes (ex. desafios de uma área). A apresentação e discussão de ideias novas e antigas de diferentes temas contribui de maneira fundamental para a formação e pesquisa desenvolvida por alunos, professores e profissionais atuantes no desenvolvimento de software e hardware.<p>
                <h4>Palestras do PPGES 2019/01</h4>
                <p class='text-justify'>O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>
            ",
        'card' => [
            1 => 'Palestrante: ',
            2 => 'Orientador: ',
            3 => 'Área de pesquisa: ',
            4 => 'Tema de pesquisa: ',
            5 => 'Data e local: ',
            6 => 'Resumo da palestra'
        ],
        'palestras' => [
            1 => [
                'palestrante' => 'Luiz Daniel Garay Trindade',
                'orientador' => 'Fábio Paulo Basso',
                'area' => 'Processamento de Imagens ',
                'tema' => 'Processamento de imagens na agricultura de precisão',
                'data' => 'DTIC, Sala 201, Segunda-feira dia 24/06, às 17:30',
                'resumo' => 'A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.'
            ],
            2 => [
                'palestrante' => 'Miguel Ecar',
                'orientador' => 'João Pablo S. da Silva',
                'area' => 'Melhoria de Processo de Software',
                'tema' => 'Software Inteligente para Suporte ao Diagnóstico em Melhoria de Processo de Software',
                'data' => 'DTIC, Sala 201, Segunda-feira dia 24/06, às 18:00',
                'resumo' => 'Um dos primeiros passos quando se trabalha com Melhoria de Processo de Software (MPS) é a realização do diagnóstico. Atualmente na indústria, cada profissional ou empresa de consultoria tem seu próprio processo ad hoc para realização do diagnóstico. O que em geral inclui entrevistas, questionários, observação local, dentre outras práticas. Sendo assim, o trabalho se propõe a investigar quais são as soluções já propostas para sistematizar o processo de diagnóstico em MPS. Tais soluções podem ser, métodos, protocolos, frameworks, ferramentas, dentre outras, para dar suporte ao processo de diagnóstico.'
            ]
        ]

    ];

    /* COORDENAÇÃO */
    $LANG['coordenacao'] = [
        'cabecalho' => [
            1 => 'Coordenação',
            2 => 'Comissão de Pós-Graduação',
            3 => 'Comissão de Bolsas',
            4 => 'Comissão Acompanhamento da Produção Docente',
            5 => 'Secretário Acadêmico'
        ],
        1 => "
                <p>
                    <h3> Coordenador </h3>
                    <h6 style='margin-left: 2%'>Prof. Dr. Elder de Macedo Rodrigues</h6>
                    <p style='margin-left: 2%'><b>Email: </b>elderrodrigues@unipampa.edu.br<p/> <br>
                    <h3>Coordenador Substituto</h3>
                    <h6 style='margin-left: 2%'>Prof. Dr. Fábio Paulo Basso</h6>
                    <p style='margin-left: 2%'><b>Email: </b>fabiobasso@unipampa.edu.br</p>
                </p>
            ",
        2 => "
                <p>
                    <h4>Comissão de Pós-Graduação</h4>
                    <p style='margin-left: 2%'>
                    <b>Membro Titular:</b> Prof. Dr. Rodrigo Brandão Mansilha<br>
                    <b>Email: </b>rodrigomansilha@unipampa.edu.br<br><br>
                    <b>Membro Titular:</b> Prof. Dr. João Pablo Silva da Silva<br>
                    <b>Email: </b>joaosilva@unipampa.edu.br<br><br>
                    <b>Membro Titular:</b> Prof. Dr. Arthur Francisco Lorenzon<br>
                    <b>Email: </b>arthurlorenzon@unipampa.edu.br<br><br>
                    <b>Membro Titular:</b> Prof. Dr. Gilleanes Thorwald Araujo Guedes<br>
                    <b>Email: </b>gilleanesguedes@unipampa.edu.br<br><br>
                    <b>Membro Suplente:</b> Prof. Mr. Diego Luis Kreutz<br>
                    <b>Email: </b>diego.kreutz@unipampa.edu.br<br><br>
                    <b>Membro Suplente, Coordenador do Curso de ES:</b> Prof. Dr. Maicon Bernardino da Silveira<br>
                    <b>Email: </b>bernardino@unipampa.edu.br<br><br>
                    <b>Membro Suplente, Coordenador do Curso de CC:</b> Prof. Dr. Marcelo Caggiani Luizelli<br>
                    <b>Email: </b>mcluizelli@gmail.com<br><br>
                    <b>Membro Suplente, Coordenador Acadêmico dos Cursos de CC e ES:</b> Prof. Dr. Claudio Schepke<br>
                    <b>Email: </b>claudioschepke@unipampa.edu.br </p>
                </p>
            ",
        3 => "
                <p>
                    <h3>Comissão de Bolsas</h3>
                    <p style='margin-left: 2%'>Elder de Macedo Rodrigues<br>
                    Gilleanes Thorwald Araujo Guedes<br>
                    Maicon Bernardino da Silveira<br>
                    Marcelo Caggiani Luizelli</p>
                </p>
            ",
        4 => "
            <p>
                <h4>Comissão Acompanhamento da Produção Docente</h4>
                <p style='margin-left: 2%'>Fábio Paulo Basso<br>
                João Pablo Silva da Silva<br>
                Rodrigo Brandão Mansilha </p>
            </p>
            ",
        5 => "
            <p>
                <h3>Secretário Acadêmico</h3>
                <h6 style='margin-left: 2%'>Thiago Gomes</h6>
                <p style='margin-left: 2%'>thiagogomes@unipampa.edu.br</p>
            </p>
            "
    ];

?>