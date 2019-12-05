-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2019 às 03:26
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppges`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nome`, `email`, `senha`) VALUES
(1, 'André', 'adm@unipampa.edu.br', 'b09c600fddc573f117449b3723f23d64');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `semestre` varchar(6) NOT NULL,
  `professor_id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `semestre`, `professor_id_professor`) VALUES
(3, 'Miguel da Silva Ecar', '2019/1', 17),
(4, 'Luciano Augusto Marchezan de Paula', '2019/1', 13),
(5, 'Rumenigue Hohemberger', '2019/1', 19),
(6, 'Thiarles Soares Medeiros', '2019/1', 9),
(7, 'Guilherme Legramante Martins', '2019/1', 18),
(8, 'Giovane Davila Mendonça', '2019/1', 16),
(9, 'Daniel Chaves Temp', '2019/1', 20),
(10, 'Maurício Martinuzzi Fiorenza', '2019/1', 11),
(11, 'Luiz Daniel Garay Trindade', '2019/1', 14),
(12, 'Luis Guilherme Pires Moura', '2019/1', 10),
(13, 'Ana Claudia Ximenes de Lima', '2019/2', 14),
(14, 'Angelo Geovanni Amaral Menezes', '2019/2', 10),
(15, 'Giulliano Lyra Paz', '2019/2', 11),
(16, 'Henrique Nattrodt Thomé', '2019/2', 18),
(17, 'Gustavo Paim Berned', '2019/2', 9),
(18, 'João Batista Pedroso Carbonell', '2019/2', 13),
(19, 'Murilo da Rosa Bianchin', '2019/2', 17),
(20, 'Pablo Brauner Viegas', '2019/2', 19),
(21, 'Rafael Duarte Beltran', '2019/2', 20),
(22, 'Róger Augusto Dámbros Canabarro', '2019/2', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `apresentacao`
--

CREATE TABLE `apresentacao` (
  `id_apresentacao` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  `idioma_shortname` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `apresentacao`
--

INSERT INTO `apresentacao` (`id_apresentacao`, `titulo`, `texto`, `idioma_shortname`) VALUES
(1, 'Sobre o Programa', '<p class=\"text-justify\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: unipampa; font-size: 16px; background-color: #ffffff; text-align: justify !important;\">O Programa de P&oacute;s-Gradua&ccedil;&atilde;o em Engenharia de Software (PPGES) &eacute; vinculado &agrave; Universidade Federal do Pampa (UNIPAMPA), no campus de Alegrete, unidade que tamb&eacute;m congrega outros cursos de p&oacute;s-gradua&ccedil;&atilde;o (Mestrado em Engenharia El&eacute;trica, Mestrado em Engenharias e Especializa&ccedil;&atilde;o em Engenharia Econ&ocirc;mica) e gradua&ccedil;&atilde;o (Ci&ecirc;ncia da Computa&ccedil;&atilde;o, Engenharia de Software, Engenharia de Telecomunica&ccedil;&otilde;es, Engenharia Civil, Engenharia Agr&iacute;cola, Engenharia El&eacute;trica e Engenharia Mec&acirc;nica). A UNIPAMPA &eacute; composta por 10 campi em munic&iacute;pios da regi&atilde;o sul (Jaguar&atilde;o), sudoeste (Bag&eacute;, Dom Pedrito e Santana do Livramento), centro-oeste (Alegrete, Ca&ccedil;apava do Sul e S&atilde;o Gabriel) e fronteira oeste (Itaqui, S&atilde;o Borja e Uruguaiana) do estado. Nessa estrutura s&atilde;o ofertados 64 cursos de gradua&ccedil;&atilde;o, 43 especializa&ccedil;&otilde;es, 17 mestrados e 3 doutorados, que abrangem diversas &aacute;reas do conhecimento. A UNIPAMPA possui mais de 12.200 alunos de gradua&ccedil;&atilde;o, 1.189 alunos de p&oacute;s-gradua&ccedil;&atilde;o, 810 docentes, 848 t&eacute;cnicos administrativos e em torno de 400 funcion&aacute;rios terceirizados.</p>\r\n<p class=\"text-justify\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: unipampa; font-size: 16px; background-color: #ffffff; text-align: justify !important;\">O PPGES &eacute; formado pelo Curso de Mestrado Profissional em Engenharia de Software, aprovado para funcionamento na 179&ordf; Reuni&atilde;o do CTC. O PPGES integra o sistema de P&oacute;s-Gradua&ccedil;&atilde;o da Unipampa e, desde sua cria&ccedil;&atilde;o junto &agrave; CAPES em mar&ccedil;o de 2019, articula sua proposta formativa a partir de demandas sociais, cient&iacute;ficas e acad&ecirc;micas da &aacute;rea. As linhas e projetos de pesquisa, as disciplinas, as disserta&ccedil;&otilde;es e a produ&ccedil;&atilde;o bibliogr&aacute;fica/t&eacute;cnica do corpo docente e discente exploram os avan&ccedil;os e desafios da pesquisa brasileira aplicada na constru&ccedil;&atilde;o de software em geral, em conson&acirc;ncia com a vis&atilde;o do Programa e o arranjo produtivo regional.</p>\r\n<p class=\"text-justify\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: unipampa; font-size: 16px; background-color: #ffffff; text-align: justify !important;\">Nesse contexto, o PPGES tem sua origem balizada em 3 aspectos: (1) fomentar o desenvolvimento regional atrav&eacute;s da qualifica&ccedil;&atilde;o da m&atilde;o-de-obra, oportunizando a sua fixa&ccedil;&atilde;o na regi&atilde;o dos egressos da UNIPAMPA e de outras institui&ccedil;&otilde;es de ensino superior; (2) contribuir para a solu&ccedil;&atilde;o de problemas regionais e nacionais atrav&eacute;s das demandas das empresas parceiras ou &oacute;rg&atilde;os p&uacute;blicos; e (3) aproximar as pesquisas da comunidade acad&ecirc;mica &agrave; realidade regional, contando com o suporte do Parque Cient&iacute;fico e Tecnol&oacute;gico do Pampa (PAMPATEC).</p>', 'pt_BR'),
(1, 'What hurts me', 'Do you believe him, that gave me', 'en_US'),
(2, 'Área de Concentração e Linhas de Pesquisa', '<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: unipampa; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1.5rem; background-color: #ffffff;\">&Aacute;rea de Concentra&ccedil;&atilde;o</h4>\r\n<p class=\"text-justify\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: unipampa; font-size: 16px; background-color: #ffffff; text-align: justify !important;\">Ci&ecirc;ncias Exatas &ndash; Engenharia de Software. S&atilde;o metas da &aacute;rea a pesquisa, o desenvolvimento e aplica&ccedil;&atilde;o de abordagens sistem&aacute;ticas, disciplinadas e quantific&aacute;veis para a produ&ccedil;&atilde;o, opera&ccedil;&atilde;o e manuten&ccedil;&atilde;o de software com qualidade e economicamente vi&aacute;vel para diversos dom&iacute;nios de aplica&ccedil;&atilde;o.</p>\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: unipampa; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1.5rem; background-color: #ffffff;\">Linhas de Pesquisa</h4>\r\n<p class=\"text-justify\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: unipampa; font-size: 16px; background-color: #ffffff; text-align: justify !important;\">Engenharia de Software Aplicada &ndash; A linha de pesquisa objetiva estudar, adaptar e aplicar as pr&aacute;ticas de engenharia de software em problemas relacionados ao desenvolvimento, opera&ccedil;&atilde;o e manuten&ccedil;&atilde;o de software das diversas &aacute;reas da computa&ccedil;&atilde;o.</p>\r\n<p class=\"text-justify\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: unipampa; font-size: 16px; background-color: #ffffff; text-align: justify !important;\">Metodologias e Tecnologias para Engenharia de Software &ndash; A linha de pesquisa objetiva estudar, adaptar e propor processos, t&eacute;cnicas, ferramentas e padr&otilde;es que suportem o desenvolvimento produtivo de software de qualquer natureza com qualidade e economicamente vi&aacute;vel.</p>', 'pt_BR'),
(2, 'Concentration Area and Research Lines', 'Concentration Aacuterea\r\nExact Sciences & Software Engineering. The goals of the research are the research, development and application of systematic, disciplined and quantifiable approaches to the production, operation and maintenance of quality and economically viable applications for the application.\r\nResearch lines\r\nApplied Software Engineering - The research line aims to study, adapt, and apply software engineering practices to problems related to software development, operation, and maintenance of the various computer technologies.\r\nSoftware Engineering Methodologies and Technologies - The research line aims to study, adapt and propose processes, techniques, tools and standards that support the productive development of software of any nature with quality and economically viability.', 'en_US');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `id_artigo` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `resumo` varchar(800) NOT NULL,
  `abstract` varchar(800) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `aluno_id_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`id_artigo`, `titulo`, `resumo`, `abstract`, `pdf`, `data`, `aluno_id_aluno`) VALUES
(2, 'Titulo', 'aa', 'aa', '8-1204--094737.pdf', '1111-11-11', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `id_carrossel` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id_carrossel`, `image`, `url`) VALUES
(10, '1204--010654.jpg', 'http://localhost:8080/PPGES/?lang=pt&pag=apresentacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenacao`
--

CREATE TABLE `coordenacao` (
  `id_coordenacao` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `comissao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `coordenacao`
--

INSERT INTO `coordenacao` (`id_coordenacao`, `nome`, `email`, `cargo`, `comissao`) VALUES
(6, 'Dr. Elder de Macedo Rodrigues', 'elder.rodrigues@unipampa.edu.br', 'Coordenador', 'Coordenação'),
(7, 'Prof. Dr. Fábio Paulo Basso', 'fabiobasso@unipampa.edu.br', 'Coordenador Substituto ', 'Coordenação'),
(8, 'Prof. Dr. Rodrigo Brandão Mansilha', 'rodrigomansilha@unipampa.edu.br', 'Membro Títular', 'Comissão de Pós-Graduação'),
(9, 'Prof. Dr. João Pablo Silva da Silva', 'joaosilva@unipampa.edu.br', 'Membro Títular', 'Comissão de Pós-Graduação'),
(10, 'Prof. Dr. Arthur Francisco Lorenzon', 'arthur.lorenzon@unipampa.edu.br', 'Membro Títular', 'Comissão de Pós-Graduação'),
(11, 'Prof. Dr. Gilleanes Thorwald Araujo Guedes', 'gilleanesguedes@unipampa.edu.br', 'Membro Títular', 'Comissão de Pós-Graduação'),
(12, 'Prof. Mr. Diego Luis Kreutz', 'diego.kreutz@unipampa.edu.br', 'Membro Suplente', 'Comissão de Pós-Graduação'),
(13, 'Prof. Dr. Maicon Bernardino da Silveira ', 'bernardino@unipampa.edu.br', 'Membro Suplente (Coordenador do Curso da ES)', 'Comissão de Pós-Graduação'),
(14, 'Prof. Dr. Marcelo Caggiani Luizelli', 'mcluizelli@gmail.com', 'Membro Suplente (Coordenador do Curso da CC)', 'Comissão de Pós-Graduação'),
(15, 'Prof. Dr. Claudio Schepke', 'claudioschepke@unipampa.edu.br', 'Membro Suplente (Coordenador Acadêmico dos Cursos de CC e ES)', 'Comissão de Pós-Graduação'),
(16, 'Elder de Macedo Rodrigues', 'elder.rodrigues@unipampa.edu.br', 'Comissão de Bolsas', 'Comissão de Bolsas'),
(17, 'Gilleanes Thorwald Araujo Guedes', 'gilleanesguedes@unipampa.edu.br', 'Comissão de Bolsas', 'Comissão de Bolsas'),
(18, 'Maicon Bernardino da Silveira', 'bernardino@unipampa.edu.br', 'Comissão de Bolsas', 'Comissão de Bolsas'),
(19, 'Marcelo Caggiani Luizelli', 'mcluizelli@gmail.com', 'Comissão de Bolsas', 'Comissão de Bolsas'),
(20, 'Fábio Paulo Basso', 'fabiobasso@unipampa.edu.br', 'Comissão de Acompanhamento da Produção Docente', 'Comissão Acompanhamento da Produção Docente'),
(21, 'João Pablo Silva da Silva', 'joaosilva@unipampa.edu.br', 'Comissão de Acompanhamento da Produção Docente', 'Comissão Acompanhamento da Produção Docente'),
(22, 'Rodrigo Brandão Mansilha', 'rodrigomansilha@unipampa.edu.br', 'Comissão de Acompanhamento da Produção Docente', 'Comissão Acompanhamento da Produção Docente'),
(23, 'Thiago Gomes', 'thiagogomes@unipampa.edu.br', 'Secretário Acadêmico', 'Secretário Acadêmico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `codigo` varchar(10) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `obrigatorio` tinyint(4) DEFAULT NULL,
  `ch` int(11) DEFAULT NULL,
  `cd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo`, `nome`, `name`, `obrigatorio`, `ch`, `cd`) VALUES
('AL9332', 'Disciplina', 'Disciplines', 0, 60, 60);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `shortname` varchar(5) NOT NULL,
  `nome` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`shortname`, `nome`) VALUES
('en_US', 'Inglês'),
('pt_BR', 'Português');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacao`
--

CREATE TABLE `informacao` (
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `capes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `informe`
--

CREATE TABLE `informe` (
  `id_informe` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `pdf` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `idioma_shortname` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `description` text NOT NULL,
  `area_pesquisa` varchar(150) NOT NULL,
  `lattes` varchar(300) DEFAULT NULL,
  `research` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome`, `foto`, `email`, `descricao`, `description`, `area_pesquisa`, `lattes`, `research`) VALUES
(9, 'Dr. Arthur Francisco Lorenzon', '1126--094834.jpg', 'arthur.lorenzon@unipampa.edu.br', 'Arthur participa de diversos projetos de pesquisa onde o objetivo principal é o desenvolvimento de mecanismos para automatizar e tornar energeticamente eficiente a exploração do paralelismo no nível de threads em sistemas multiprocessados (e.g., embarcados, propósito geral e computação de alto desempenho). Dentro deste nicho, são realizadas pesquisas em diferentes interfaces de programação paralela (e.g., OpenMP, PThreads, Cilk++, Intel TBB e MPI), diferentes métodos para otimizar a exploração do paralelismo (e.g., estratégias de busca) e questões arquiteturais, como por exemplo, DVFS, tecnologias de boosting.', 'Arthur participates in a number of research projects where the main objective is to develop mechanisms to automate and make energy efficient the exploration of thread-level parallelism in multiprocessed (e.g., embedded, general purpose and high performance computing) systems. Within this niche, research is carried out on different parallel programming interfaces (eg, OpenMP, PThreads, Cilk ++, Intel TBB and MPI), different methods for optimizing the exploration of parallelism (eg, search strategies) and architectural issues such as , DVFS, boosting technologies.', 'Organização e arquitetura de computadores, Sistemas embarcados e Computação de alto desempenho.', 'http://lattes.cnpq.br/2890260984567329', 'https://www.researchgate.net/profile/Arthur_Lorenzon'),
(10, 'Dr. Claudio Schepke', '1126--095053.jpg', 'claudio.schepke@unipampa.edu.br', 'Em diversas áreas da ciência existem algoritmos que demandam um elevado custo computacional. Uma alternativa para acelerar a execução destes algoritmos consiste na execução concorrente do código, tornando a obtenção das soluções numéricas factível ou obtidas em um tempo de processamento aceitável. Arquiteturas multicore e aceleradores com vários núcleos de processamento têm sido amplamente utilizados como uma alternativa eficiente e viável na busca por maior poder de processamento. Sistemas modernos são compostos por processadores multicore e aceleradores altamente especializados tais como GPUs e co-processadores Intel Xeon Phi. No entanto, fazer uso desse tipo de arquitetura requer aspectos de programação distintos, e que, portanto, devem ser investigados apropriadamente para garantir a maximização do aproveitamento dos recursos computacionais. Assim, usando diferentes interfaces de programação paralela combinadas, é possível comparar e analisar modos de se obter o melhor aproveitamento do hardware e consequentemente prover execuções mais eficientes para os programas. Baseado neste contexto, esta pesquisa investiga como explorar diferentes formas de paralelismo para diversas classes de aplicações usando interfaces de programação paralelas apropriadas, avaliar o desempenho de arquiteturas atuais e propor técnicas de divisão paralela da aplicações. O uso de diferentes interfaces de programação permite fazer uso de um conjunto maior de arquiteturas computacionais como multiprocessadores/multicore, manycore/coprocessadores e multicomputadores. Desta forma será possível prover maior desempenho na execução de aplicações científicas e comerciais em arquiteturas atuais e, consequentemente, ter soluções mais rápidas e/ou precisas, além de usar e propor algoritmos para a avaliação de arquiteturas computacionais.', 'In several areas of science there are algorithms that demand a high computational cost. An alternative to speeding up the execution of these algorithms is concurrent code execution, making obtaining numerical solutions feasible or obtained within an acceptable processing time. Multicore architectures and multiprocessor accelerators have been widely used as an efficient and viable alternative in the pursuit of greater processing power. Modern systems are composed of multicore processors and highly specialized accelerators such as GPUs and Intel Xeon Phi coprocessors. However, making use of this type of architecture requires distinct programming aspects, which should therefore be properly investigated to ensure the maximum use of computational resources. Thus, using different combined parallel programming interfaces, it is possible to compare and analyze ways to get the best out of the hardware and consequently provide more efficient program executions. Based on this context, this research investigates how to explore different forms of parallelism for various application classes using appropriate parallel programming interfaces, evaluate the performance of current architectures, and propose parallel application splitting techniques. Using different programming interfaces allows us to make use of a larger set of computational architectures such as multiprocessors / multicore, manycore / coprocessors and multicomputers. In this way it will be possible to provide higher performance in the execution of scientific and commercial applications in current architectures and, consequently, have faster and / or more accurate solutions, besides using and proposing algorithms for the evaluation of computational architectures.', 'Processamento de alto desempenho, Programação paralela, Aplicações científicas e Computação em nuvem', 'http://lattes.cnpq.br/6412713158883137', 'https://www.researchgate.net/profile/Claudio_Schepke'),
(11, 'Ms. Diego Luis Kreutz', '1126--095245.jpg', 'diego.kreutz@unipampa.edu.br', 'Tenho projetos e/ou interesse de pesquisa e inovação em áreas e temas como redes programáveis (e.g. SDN), segurança de infra-estruturas de rede, segurança da informação, segurança de sistemas, tolerância a falhas e intrusões, escalabilidade em computação em núvem e desenvolvimento de sistemas aplicados ao mercado. As colaborações mais recentes em pesquisa e inovação foram com pesquisadores de universidades e empresas como a UFSC, UNISINOS, UFAM, UFPA, UNICAMP, ULisboa/Portugal, UnBabel/Portugal, UNI.lu/Luxemburgo e Universidade de Monash/Austrália. Alguns dos temas de trabalhos (recentes) incluem: segurança em redes programáveis, blockchain, cryptomoedas, vulnerabilidades e ataques em sistemas Web, Web Application Firewalls, bancos de dados cifrados, integridade e confidencialidade no armazenamento e processamento de dados, segurança das urnas eletrônicas, protocolos de segurança, computação confiável, segurança assistida por hardware (novas tecnologias), armazenamento de grandes volumes de dados para internet das coisas (IoT), identidade digital segura, segurança em aplicações e bancos online, ataques a infra-estruturas de redes, entre outros.', 'I have research and innovation projects and / or interest in areas and topics such as programmable networks (eg SDN), network infrastructure security, information security, system security, fault and intrusion tolerance, cloud computing scalability and development of systems applied to the market. The most recent collaborations in research and innovation were with researchers from universities and companies such as UFSC, UNISINOS, UFAM, UFPA, UNICAMP, ULisboa / Portugal, UnBabel / Portugal, UNI.lu/Luxembourg and University of Monash / Australia. Some of the (recent) work topics include: programmable network security, blockchain, cryptocurrency, web system vulnerabilities and attacks, Web Application Firewalls, encrypted databases, integrity and confidentiality in data storage and processing, electronic ballot box security, security protocols, reliable computing, hardware-assisted security (new technologies), IoT storage, secure digital identity, security in applications and online banking, network infrastructure attacks, and more. others.', 'redes definidas por software (SDN),  segurança, dependabilidade, computação em nuvem e desenvolvimento de software.', 'http://lattes.cnpq.br/2781747995973774', 'https://www.researchgate.net/profile/Diego_Kreutz'),
(13, 'Dr. Elder de Macedo Rodrigues', '1126--095525.jpg', 'elder.rodrigues@unipampa.edu.br', 'Possui graduação em Informática pela Universidade da Região da Campanha (2006) e mestrado e doutorado em Ciência da Computação pelo Programa de Pós-graduação em Ciências da Computação da Pontifícia Universidade Católica do Rio Grande do Sul, tendo atuado em diversas empresas, tais como Pesquisador PDTI na Pontifícia Universidade Católica do Rio Grande do Sul, professor da Faculdade Fundação Evangélica de Novo Hamburgo e analista de sistemas na Fundação Universidade Federal de Ciências da Saúde de Porto Alegre. Atualmente é professor adjunto na Universidade Federal do Pampa – Campus Alegrete. Tem experiência na área de Ciência da Computação, atuando principalmente nos seguintes temas: teste de software, teste de desempenho, teste baseado em modelos, linhas de produto de software e engenharia de software experimental.', 'He holds a degree in Informatics from the University of the Campaign Region (2006) and a master\'s and doctorate degree in Computer Science from the Postgraduate Program in Computer Science of the Pontifical Catholic University of Rio Grande do Sul, having worked in several companies, such as Researcher. PDTI at the Pontifical Catholic University of Rio Grande do Sul, professor at the Evangelical Foundation College of Novo Hamburgo and systems analyst at the Federal University of Health Sciences Foundation of Porto Alegre. He is currently adjunct professor at the Federal University of Pampa - Campus Alegrete. Has experience in Computer Science, acting on the following subjects: software testing, performance testing, model based testing, software product lines and experimental software engineering.', 'teste de software, teste de desempenho, teste baseado em modelos, linhas de produto de software e engenharia de software experimental', 'http://lattes.cnpq.br/5733269259864085', ''),
(14, 'Dr. Fábio Paulo Basso', '1126--095747.jpg', 'fabio.basso@unipampa.edu.br', 'Experiência com pesquisa e desenvolvimento para fábricas de software, atuando principalmente nos seguintes temas: Desenvolvimento ágil de software, arquiteturas de software orientadas à objetos, reúso de software por meio de Engenharia Dirigida por Modelos (MDE), Desenvolvimento Orientado à Serviços,  Reengenharia e refatoração, técnicas de prototipação rápida de aplicações baseadas em padrões de projeto e variabilidade arquitetural. As ferramentas desenvolvidas podem ser representadas em diversos construtores de linguagens de modelagem como UML Profiles, Linguagens Específicas de Domínio (DSLs) e linguagens nativas/ad-hoc como Java Annotations. Vem conduzindo um projeto de pesquisa inter-disciplinar unindo conhecimentos sobre transferência de tecnologia, DSLs, assets e blockchain para promover a Engenharia de Software Dirigida por Modelos. Foi empreendedor e valoriza bastante a pesquisa aplicada com potencial de inovação na indústria de software.', 'Experience with research and development for software factories, acting on the following subjects: Agile Software Development, Object Oriented Software Architectures, Software Reuse through Model Driven Engineering (MDE), Service Oriented Development, Reengineering and Refactoring , rapid application prototyping techniques based on design patterns and architectural variability. The tools developed can be represented in various modeling language builders such as UML Profiles, Domain Specific Languages ​​(DSLs) and native / ad-hoc languages ​​such as Java Annotations. He has been conducting an interdisciplinary research project bringing together knowledge in technology transfer, DSLs, assets and blockchain to promote Model Driven Software Engineering. He was an entrepreneur and highly values ​​applied research with potential for innovation in the software industry.', 'Arquitetura de Software, Reutilização de Software, Evolução de Software, Refatoração de Código, Automação de Processos de Desenvolvimento de Software ', 'http://lattes.cnpq.br/6653688230110966', 'https://www.researchgate.net/profile/Fabio_Basso'),
(16, 'Dr. Gilleanes Thorwald Araujo Guedes', '', 'gilleanes.guedes@unipampa.edu.br', 'As áreas de atuação são caracterizadas conforme os seguintes projetos de pesquisa: 1.  Validação e Desenvolvimento de Técnicas de Inspeção em Modelos UML de Análise e Projeto de Software:  Este projeto pretende estabelecer o estado-da-arte das técnicas de inspeção de modelos UML atualmente existentes, bem como validá-las para determinar se elas são realmente adequadas para a inspeção destes tipo de modelo. Com base neste estudo pretende-se concluir se as técnicas existentes são suficientes para a inspeção deste tipo de modelo ou se é necessário propor uma nova técnica de inspeção. 2. Engenharia de Requisitos para Sistemas Multiagentes: Pretende-se determinar o estado da arte de engenharia de requisitos aplicada a sistemas multiagentes, determinando os pontos fortes e fracos das abordagens ', 'Areas of expertise are characterized by the following research projects: 1. Validation and Development of Inspection Techniques in UML Model Analysis and Software Design: This project aims to establish the state-of-the-art UML model inspection techniques currently validate them to determine if they are really suitable for inspection of these types of models. Based on this study it is intended to conclude whether the existing techniques are sufficient for the inspection of this type of model or if it is necessary to propose a new inspection technique. 2. Requirements Engineering for Multiagent Systems: The aim is to determine the state of the art of requirements engineering applied to multiagent systems by determining the strengths and weaknesses of the approaches.', 'Técnicas de Inspeção e Engenharia de Requisitos, Modelagem de software por meio da UML e AOSE – Agent Oriented Software Engineering', 'http://lattes.cnpq.br/6804701791614680', 'https://www.researchgate.net/profile/Gilleanes_Guedes2'),
(17, 'Dr.  João Pablo Silva da Silva', '1126--100228.jpg', 'joao.silva@unipampa.edu.br', 'O prof. João Pablo desenvolve pesquisas em Engenharia de Software Inteligente, onde explora a sinergia entre Inteligência Artificial e a Engenharia de Software. Atualmente, coordena o projeto de pesquisa chamado “Uma Linguagem de Modelagem de Domínio Específico para Sistemas Autoadaptativos”, o qual busca desenvolver uma linguagem de modelagem de domínio específico baseada em UML para a modelagem conceitual de sistemas autoadaptativos. Complementarmente, atua no projeto “Engenharia de Requisitos para Sistemas multiagentes”, o qual busca desenvolver técnicas de engenharia de requisitos para sistemas multiagentes.', 'The prof. João Pablo develops research in Intelligent Software Engineering, where he explores the synergy between Artificial Intelligence and Software Engineering. He is currently coordinating a research project called “A Domain-Specific Modeling Language for Self-Adaptive Systems”, which seeks to develop a UML-based domain-specific modeling language for conceptual modeling of self-adaptive systems. In addition, he works in the project “Requirements Engineering for Multiagent Systems”, which seeks to develop requirements engineering techniques for multiagent systems.', 'Engenharia de software inteligente, Linguagem específica de domínio, Sistemas auto-adaptativos', 'http://lattes.cnpq.br/2530892415505191', ''),
(18, 'Dr. Maicon Bernardino da Silveira', '1126--100413.jpg', 'maicon.bernardino@unipampa.edu.br', 'Graduado em Licenciatura em Computação pela Universidade Feevale (2005). Master of Business Administration em Gerenciamento de Projetos pela FGV (2008). Mestre em Ciência da Computação pela Pontifícia Universidade Católica do Rio Grande do Sul – PUCRS (2012). Doutor em Ciência da Computação pela PUCRS (2016). Atuou como pesquisador da PUCRS no Projeto de Pesquisa em Virtualização e Teste de Software PUCRS/DELL durante o seu mestrado e doutorado. Atuou como docente do CST em Análise e Desenvolvimento de Sistemas pela FTEC em Novo Hamburgo. Atuou também como docente do CST em Jogos Digitais na Universidade Feevale. Atuou como professor do magistério superior na Universidade Tecnológica Federal do Paraná (UTFPR) – Campus Francisco Beltrão, associado ao curso de Licenciatura em Informática. Atualmente é professor do magistério superior adjunto na Universidade Federal do Pampa (UNIPAMPA) – Campus Alegrete, associado aos cursos de Bacharelado em Ciência da Computação e Engenharia de Software. Possui experiência na área de Ciência da Computação, atuando principalmente nos seguintes temas: Gerenciamento de Projetos de Software, Teste de Desempenho, Teste Baseado em Modelos, Linguagem de Domínio Específico, Linhas de Produtos de Software, Banco de Dados e Engenharia de Software Experimental. Membro da Association for Computing Machinery (ACM).', 'Graduated in Computer Degree from Feevale University (2005). Master of Business Administration in Project Management from FGV (2008). Master in Computer Science from the Pontifical Catholic University of Rio Grande do Sul - PUCRS (2012). Doctor of Computer Science from PUCRS (2016). He served as a PUCRS researcher at the PUCRS / DELL Software Virtualization and Testing Research Project during his master\'s and doctoral degree. He worked as a CST professor in Systems Analysis and Development at FTEC in Novo Hamburgo. He also served as a CST professor in Digital Games at Feevale University. He worked as a professor of higher teaching at the Federal Technological University of Paraná (UTFPR) - Francisco Beltrão Campus, associated with the Degree in Computer Science. He is currently Professor of the Assistant Professor at the Federal University of Pampa (UNIPAMPA) - Campus Alegrete, associated with the Bachelor of Computer Science and Software Engineering courses. Has experience in Computer Science, acting on the following subjects: Software Project Management, Performance Testing, Model Based Testing, Specific Domain Language, Software Product Lines, Database and Experimental Software Engineering. Member of the Association for Computing Machinery (ACM).', 'Gerenciamento de Projetos de Software, Teste de Desempenho, Teste Baseado em Modelos, Linguagem de Domínio Específico, Linhas de Produtos de Software,', 'http://lattes.cnpq.br/0523166822363498', 'https://www.researchgate.net/profile/Maicon_Da_Silveira2'),
(19, 'Dr. Marcelo Caggiani Luizelli', '1203--090306.jpg', 'marcelo.caggiani@unipampa.edu.br', 'A telemetria in-band do plano de dados é um paradigma emergente de monitoramento em infraestruturas de rede. A partir da coleta distribuída e em tempo real de informações de monitoramento, é possível obter maior visibilidade do estado da infraestrutura e identificar um conjunto maior de problemas — especialmente aqueles com curta duração como, por exemplo, micro-burst. Estudos recentes na área tem concentrado os esforços no desenvolvimento de mecanismos para (i) aumentar o nível de visibilidade das infraestruturas de rede e (ii) para projetar novas soluções de monitoramento. Entretanto, pouco ainda foi feito para coordenar o processo de coleta de informações de telemetria neste novo paradigma. Isto é particularmente desafiador principalmente por dois motivos. Primeiro, dependendo de quais itens de telemetria da rede são coletados, a visibilidade da infraestrutura pode degradar substancialmente em termos de consistência e atualização. Segundo, dependendo de como os itens de telemetria são coletados, o desempenho dos serviços de rede em operação e das aplicações de monitoramento podem ser prejudicados. Neste projeto, pretende-se investigar e modelar o problema de planejamento da coleta de itens de telemetria in-band. A ideia consiste em explorar o dinamismo entre os requisitos das aplicações de monitoramento e a aquisição dos itens de telemetria para, desta forma, garantir a acurácia do estado da infraestrutura e das aplicações de monitoramento. Posteriormente, pretende-se, utilizando-se do conhecimento adquirido, investigar estratégias para a operacionalização das soluções obtidas em uma infraestrutura com suporte à programabilidade', 'In-band data plan telemetry is an emerging paradigm for monitoring network infrastructures. From distributed, real-time collection of monitoring information, you can gain greater visibility into infrastructure status and identify a larger set of problems — especially those with short duration such as micro-bursts. Recent studies in the area have focused efforts on developing mechanisms to (i) increase the visibility level of network infrastructures and (ii) to design new monitoring solutions. However, little has been done to coordinate the process of collecting telemetry information in this new paradigm. This is particularly challenging mainly for two reasons. First, depending on what network telemetry items are collected, infrastructure visibility can degrade substantially in terms of consistency and update. Second, depending on how telemetry items are collected, the performance of operating network services and monitoring applications may be impaired. In this project, we intend to investigate and model the planning problem of in-band telemetry item collection. The idea is to explore the dynamism between the requirements of monitoring applications and the acquisition of telemetry items to ensure the accuracy of the state of infrastructure and monitoring applications. Subsequently, it is intended, using the acquired knowledge, to investigate strategies for the operationalization of the solutions obtained in an infrastructure with support for programmability.', 'Redes de Computadores, Algoritmos e Otimização Combinatória com ênfase em Funções Virtualizadas de Rede (NFV) e Redes Definidas por Software (SDN)', 'http://lattes.cnpq.br/6613933581513594', 'https://www.researchgate.net/profile/Marcelo_Caggiani_Luizelli'),
(20, 'Dr. Rodrigo Brandão Mansilha', '1126--100701.jpg', 'rodrigo.mansilha@unipampa.edu.br', 'Redes Centradas em Informação (Information-Centric Networking – ICN) é um paradigma para a Futura Internet com foco em disseminação eficiente de conteúdo, que é a principal aplicação responsável pelo crescimento do tráfego da Internet conforme estudos recentes. Após anos de pesquisa e desenvolvimento, ICN está alcançando maturidade suficiente para ser avaliado experimentalmente em ambiente real visando sua implantação na Futura Internet. Para avaliar a viabilidade e a potencialidade de implantação de ICN, é fundamental a realização de experimentos em redes operacionais reais e em contexto de inter-domínio. O objetivo geral deste projeto é avaliar experimentalmente ICN. Inicialmente realizaremos, localmente em ambiente controlado, uma avaliação comparativa ampla, abrangente e rigorosa das diversas alternativas de ICN que têm sido propostas recentemente. Em seguida, realizaremos uma avaliação de desempenho em testbeds distribuídos (como o PlanetLab) da alternativa considerada mais promissora na etapa anterior.', 'Information-Centric Networking (ICN) is a paradigm for the Future Internet focused on efficient content dissemination, which is the main application responsible for Internet traffic growth according to recent studies. After years of research and development, ICN is reaching sufficient maturity to be experimentally evaluated in a real-world environment for deployment on the Future Internet. To evaluate the feasibility and potentiality of ICN deployment, it is essential to conduct experiments in real operational networks and in inter-domain context. The overall objective of this project is to experimentally evaluate ICN. Initially, we will conduct, locally in a controlled environment, a comprehensive, comprehensive and rigorous comparative assessment of the various recently proposed ICN alternatives. We will then conduct a performance assessment on distributed testbeds (such as PlanetLab) of the most promising alternative in the previous step.', 'Avaliação Experimental de Redes Centradas em Informação, Redes de Computadores, Sistemas Distribuídos e Segurança de Sistemas Computacionais.', 'http://lattes.cnpq.br/3118442101667444', 'https://www.researchgate.net/profile/Rodrigo_Mansilha-');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `fk_aluno_professor_idx` (`professor_id_professor`);

--
-- Índices para tabela `apresentacao`
--
ALTER TABLE `apresentacao`
  ADD KEY `idioma_shortname` (`idioma_shortname`);

--
-- Índices para tabela `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`id_artigo`),
  ADD KEY `aluno_id_aluno` (`aluno_id_aluno`);

--
-- Índices para tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`id_carrossel`);

--
-- Índices para tabela `coordenacao`
--
ALTER TABLE `coordenacao`
  ADD PRIMARY KEY (`id_coordenacao`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`shortname`);

--
-- Índices para tabela `informe`
--
ALTER TABLE `informe`
  ADD KEY `idoma_shortname` (`idioma_shortname`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `artigo`
--
ALTER TABLE `artigo`
  MODIFY `id_artigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `id_carrossel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `coordenacao`
--
ALTER TABLE `coordenacao`
  MODIFY `id_coordenacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_professor` FOREIGN KEY (`professor_id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `apresentacao`
--
ALTER TABLE `apresentacao`
  ADD CONSTRAINT `apresentacao_ibfk_1` FOREIGN KEY (`idioma_shortname`) REFERENCES `idioma` (`shortname`);

--
-- Limitadores para a tabela `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `artigo_ibfk_1` FOREIGN KEY (`aluno_id_aluno`) REFERENCES `aluno` (`id_aluno`);

--
-- Limitadores para a tabela `informe`
--
ALTER TABLE `informe`
  ADD CONSTRAINT `informe_ibfk_1` FOREIGN KEY (`idioma_shortname`) REFERENCES `idioma` (`shortname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
