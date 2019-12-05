<?php
    /* CABEÇALHO */
    $LANG['navbar'] = [
        'titulo' => 'Postgraduate Program in Software Engineering',
        'pesquisa' => 'Search'
    ];

    /* MENU */
    $LANG['logo'] = 'logoEN.jpg';
    $LANG['menu'] = [
        0 => [
            'titulo' => 'Home Page',
            'url' => 'home'
        ],
        1 => [
            'titulo' => 'Apresentation',
            'url' => 'apresentacao'
        ],
        2 => [
            'titulo' => 'Briefings',
            'url' => 'informes'
        ],
        3 => [
            'titulo' => 'Coordination',
            'url' => 'coordenacao'
        ],
        4 => [
            'titulo' => 'Guiding Professors',
            'url' => 'orientadores'
        ],
        5 => [
            'titulo' => 'Events',
            'url' => 'eventos'
        ],
        6 => [
            'titulo' => 'Seminar and Lecture Cycle',
            'url' => 'seminarios'
        ],
        7 => [
            'titulo' => "Master's Courses",
            'url' => 'disciplina'
        ],
        8 => [
            'titulo' => 'Students',
            'url' => 'alunos'
        ],
    ];

    /* FOOTER */
    $LANG['contato'] = [
        'titulo' => 'Contact',
        'telefone' => 'Telephone'
    ];

    $LANG['lang'] = [
        'titulo' => 'Language',
        'shortname' => 'en_US',
        'pt' => 'Portuguese',
        'en' => 'English'
    ];

    $LANG['developer'] = [
        'titulo' => 'Developed by',
        'e' => 'and'
    ];

    /* ERROR */
    $LANG['error'] = [
        'titulo' => 'Gosh!',
        'conteudo' => 'This page is currently down for maintenance or down.',
        'botao' => 'Go to the home page'
    ];

    /* HOME */
    $LANG['home'] = [
        'jumb' => [
            'titulo' => 'Welcome to the PPGES page!',
            'body' => "This is the new site of the UNIPAMPA Software Engineering Graduate Program (PPGES), Alegrete <i>campus</i>",
            'info' => 'Meet the presentation of our program by clicking the button below!',
            'botao' => 'Meet our program!!'
        ],
        'noticia' => [
            'titulo' => 'Latest news',
            'botao' => 'Open New'
        ]

    ];

    /* ORIENTADORES */
    $LANG['orientadores']['botao'] = "See more!";

    /* ALUNOS */
    $LANG['alunos'] = [
        'tabela' => [
            1 => "Student's name",
            2 => 'Mastermind'
        ]
    ];

    /* INFORMES */
    $LANG['informes'] = [
        'botao' => 'Open PDF',
        1 => [
            'titulo' => 'Approval of candidates enrolled for the Master\'s Degree EDITAL No. 349/2019',
            'data' => 'October 21, 2019',
            'conteudo' => 'List of approved candidates, Public Notice No. 349/2019, SELECTIVE PROCESS FOR ADMINISTRATION OF PPGES STUDENTS',
            'url' => 'http://cursos.unipampa.edu.br/cursos/ppges/files/2019/10/sei_unipampa-0181004-aviso.pdf'
        ]
    ];

    /* EVENTOS */
    $LANG['eventos'] = [
        1 => 'Regional Events',
        2 => 'National Events'
    ];


    /* DISCIPLINAS */
    $LANG['disciplina'] = [
        'descricao' => "CH: Hours <br> CD: Credits",
        'cabecalho' => [
            1 => 'Code',
            2 => 'Discipline',
            3 => 'Required'
        ],
        'obg_sim' => 'Yes',
        'obg_nao' => 'No'
    ];

    /* SEMINÁRIO */
    $LANG['seminario'] = [
        'texto' => "
                    <p class='text-justify'>The PPGES Seminar and Lecture Cycle aims to bring accessible lectures to a wider audience by experienced professionals, researchers and teachers. Talks throughout the year will have a varied theme and focus and may be more specific (eg advances in the context of a specific problem) or broader (eg challenges in an area). The presentation and discussion of new and old ideas of different themes contributes in a fundamental way to the formation and research developed by students, teachers and professionals working in software and hardware development.<p>
                    <h4>PPGES Lectures 2019/01</h4>
                    <p class='text-justify'>The Graduate Program in Software Engineering (PPGES), integrated with the UniHacker.club extension project, provides interested parties with a sequence of lectures on research topics conducted by students of the professional master's degree in Software Engineering, linked to the Federal University of Pampa (Unipampa), on the campus of Alegrete-RS. The seminar will take place the same week as the CBT defenses and internship of Computer Science and Software Engineering courses. The lectures will take place in the afternoon, between 24/06 and 28/06, at DTIC Room 201. The presentations are open to the public and feature an opportunity for the community to learn about the research projects conducted by the advisors. Certificates will also be delivered to participants.</p>
                ",
        'card' => [
            1 => 'Speaker: ',
            2 => 'mastermind: ',
            3 => 'Search area: ',
            4 => 'Research Theme: ',
            5 => 'Date and place: ',
            6 => 'Lecture Summary'
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
            1 => 'Coordination',
            2 => 'Pos Graduate Commission',
            3 => 'Scholarship Commission',
            4 => 'Teaching Production Monitoring Commission',
            5 => 'Academic Secretary'
        ],
        1 => "
                <p>
                    <h3> Coordination </h3>
                    <h6 style='margin-left: 2%'>Prof. Dr. Elder de Macedo Rodrigues</h6>
                    <p style='margin-left: 2%'><b>Email: </b>elderrodrigues@unipampa.edu.br<p/> <br>
                    <h3>Substitute Coordinator</h3>
                    <h6 style='margin-left: 2%'>Prof. Dr. Fábio Paulo Basso</h6>
                    <p style='margin-left: 2%'><b>Email: </b>fabiobasso@unipampa.edu.br</p>
                </p>
            ",
        2 => "
                <p>
                    <h4>Pos Graduate Commission</h4>
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
                    <h3>Scholarship Commission</h3>
                    <p style='margin-left: 2%'>Elder de Macedo Rodrigues<br>
                    Gilleanes Thorwald Araujo Guedes<br>
                    Maicon Bernardino da Silveira<br>
                    Marcelo Caggiani Luizelli</p>
                </p>
            ",
        4 => "
            <p>
                <h4>Teaching Production Monitoring Commission</h4>
                <p style='margin-left: 2%'>Fábio Paulo Basso<br>
                João Pablo Silva da Silva<br>
                Rodrigo Brandão Mansilha </p>
            </p>
            ",
        5 => "
            <p>
                <h3>Academic Secretary</h3>
                <h6 style='margin-left: 2%'>Thiago Gomes</h6>
                <p style='margin-left: 2%'>thiagogomes@unipampa.edu.br</p>
            </p>
            "
    ];

?>