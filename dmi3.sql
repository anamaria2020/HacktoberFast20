-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Out-2018 às 17:08
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmi3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id`, `nome`) VALUES
(1, 'Analise de Sistemas'),
(2, 'Analise de Redes'),
(3, 'Banco de Dados'),
(4, 'Designer'),
(5, 'Programacao Web'),
(6, 'Topografia'),
(7, 'Cartografia'),
(9, 'Analise Matematica'),
(10, 'Analise Estatistica'),
(14, 'Matematica Discreta'),
(15, 'Sistema Operativos'),
(16, 'Introducao a Informatica'),
(17, 'Redes de Computadores'),
(18, 'Sistemas Distribuidos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ccientifica`
--

CREATE TABLE `ccientifica` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ccientifica`
--

INSERT INTO `ccientifica` (`id`, `username`, `user_id`) VALUES
(1, 'Helder Muianga', 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, 'Ana', 'Ola..', 1),
(2, 'Telma', 'Devolve', 1),
(3, 'Dario', 'Nao', 1),
(4, 'Joana Amaral', 'Esta e a ultima vez..', 1),
(5, 'Silva', 'Concordo', 1),
(6, 'Rui Perreira', 'Bom dia', 1),
(7, 'Silva', 'Ya ya', 1),
(8, 'Sim', 'nnnn', 1),
(9, 'alexandrina', 'boa noite', 1),
(10, 'Yanic', 'Voceeeeee.....eeeee', 1),
(11, 'Ana', 'bbbb', 1),
(12, 'Alfredo', 'Sim', 1),
(13, 'Alfredo', 'Ja Consegui', 1),
(14, 'Enzi', 'Tabula', 1),
(15, 'Enzi', 'sim', 1),
(16, 'Edilson trjhsf', 'dsgdsg 2017', 1),
(17, 'Ana', 'Sim', 1),
(18, 'Ana Maria', 'Sim', 1),
(19, 'Vania Tadi CCC OOO AAA', 'Ja consegui!!!', 1),
(20, 'Ana', 'Festival AZGO', 1),
(21, 'Euliterio', 'Celio essa sena de LPC ta se mallllll', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`) VALUES
(1, 'Informatica'),
(2, 'Estatistica'),
(3, 'CIG'),
(4, 'Matematica'),
(5, 'Eng. Civil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `defesa`
--

CREATE TABLE `defesa` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `supervisao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dircurso`
--

CREATE TABLE `dircurso` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `curso_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dircurso`
--

INSERT INTO `dircurso` (`id`, `nome`, `curso_id`, `docente_id`, `user_id`) VALUES
(1, 'Carlos Cumbana', 1, 1, 28),
(4, 'Manuel Alves', 4, 17, 52),
(5, 'Tiago Guilherme Devesse', 2, 18, 57);

-- --------------------------------------------------------

--
-- Estrutura da tabela `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `curso_id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `docente`
--

INSERT INTO `docente` (`id`, `nome`, `curso_id`, `area_id`, `user_id`) VALUES
(1, 'Carlos Cumbana', 1, 1, 28),
(15, 'Amarildo Alberto Bernardo Come', 1, 5, 48),
(16, 'Erminio Pita Jasse', 1, 6, 49),
(17, 'Manuel Alves', 4, 9, 50),
(18, 'Tiago Guilherme Devesse', 2, 10, 51),
(20, 'Constancia Antonio Devesse', 2, 10, 56),
(22, 'Calisto Justino Guambe', 1, 14, 60),
(24, 'Virgilio Emilio Antonio Culpa', 1, NULL, 64),
(25, 'Sheyla Rotan Rodrigues Cassy', 2, NULL, 70),
(26, 'Nilza Eliana Correia de Lemos Collinson', 1, NULL, 71);

-- --------------------------------------------------------

--
-- Estrutura da tabela `docente_has_area`
--

CREATE TABLE `docente_has_area` (
  `docente_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `docente_has_area`
--

INSERT INTO `docente_has_area` (`docente_id`, `area_id`) VALUES
(1, 1),
(15, 5),
(17, 9),
(18, 10),
(20, 10),
(22, 14),
(24, 1),
(24, 3),
(24, 4),
(25, 7),
(26, 1),
(26, 2),
(26, 3),
(26, 5),
(26, 17),
(26, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `curso_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`id`, `nome`, `curso_id`, `user_id`) VALUES
(34, 'Ana Mungwambe', 3, 47),
(35, 'Clara Moana', 1, 53),
(36, 'Alfredo Chamo', 2, 54),
(37, 'Santos Chiluane', 1, 63),
(38, 'Aida Alfredo', 1, 65),
(39, 'Tome', 1, 72),
(40, 'Samuel Matola', 4, 73),
(41, 'Natividade Langa', 4, 74),
(42, 'Enzi', 1, 75),
(43, 'Edilson', 1, 76),
(44, 'Shana Almeida', 4, 77),
(45, 'Salvador Tchauque', 1, 78),
(46, 'Edson Mazive', 1, 79),
(47, 'Vania', 1, 80),
(48, 'Jose Cabo', 1, 81),
(49, 'ivo', 1, 82),
(50, 'Ce', 1, 83),
(51, 'tya', 2, 84),
(52, 'Silvia Santana', 1, 85);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `supervisao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisao`
--

CREATE TABLE `supervisao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `status` varchar(45) NOT NULL,
  `data1` date NOT NULL,
  `data2` date NOT NULL,
  `objectivo` varchar(45) DEFAULT NULL,
  `instituicao` varchar(45) NOT NULL,
  `instituicao2` varchar(45) DEFAULT NULL,
  `ccientifica_id` int(11) DEFAULT NULL,
  `docente_id` int(11) NOT NULL,
  `estudante_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `supervisao`
--

INSERT INTO `supervisao` (`id`, `titulo`, `status`, `data1`, `data2`, `objectivo`, `instituicao`, `instituicao2`, `ccientifica_id`, `docente_id`, `estudante_id`, `area_id`) VALUES
(31, 'Gestao de Areas Residencias', 'aprovado', '2017-06-15', '2017-08-25', 'Melhorias do Sistema de Parcelamento         ', 'Conselho Municipal da Cidade de Maputo', 'Conselho Municipal da Cidade da Matola', NULL, 16, 34, 6),
(32, 'Sistema Integrado de Monitoria de Mensalidades', 'aprovado', '2017-08-01', '2017-12-31', 'Controle de pagamentos na UEM     ', 'UEM', 'ISUTC', NULL, 15, 35, 5),
(33, 'Estatistica Descritiva', 'reprovado', '2017-06-09', '2017-09-11', 'Avalicao de Numero de Contratos de Trabalho', 'INAE', 'MCEL', NULL, 20, 36, 10),
(34, 'Fluxo em Redes', 'aprovado', '2017-07-27', '2017-09-21', 'Criacao de Algoritmo de Fluxo de Redes', 'Faculdade de Engenharia da Universidade Eduar', 'ISCTEM', NULL, 22, 37, 14),
(35, 'Redes de Cumputadores', 'aprovado', '2017-07-19', '2017-08-31', 'Redes de Telecomunicacoes                  ', 'UEM', 'Nenhuma', NULL, 15, 38, 17),
(36, 'Filas de Espera', 'aprovado', '2017-06-07', '2017-06-30', 'Melhoramento de Filas de Espera', 'CIUEM', 'Electricidade de Mocambique', NULL, 22, 39, 14),
(37, 'Analise de Redes', 'pendente', '2017-07-20', '2017-08-24', 'Monitoria de Fluxo de Transmissao de Dados', 'CIUEM', 'Conselho Municipal da Cidade da Matola', NULL, 26, 34, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `perfil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `perfil`) VALUES
(28, 'cumbana', '1111', 'director'),
(33, 'Helder Muianga', 'admin', 'admin'),
(47, 'ana', '0000', 'estudante'),
(48, 'acome', '2017', 'docente'),
(49, 'saraiva', '2017', 'docente'),
(50, 'malves', '2017', 'docente'),
(51, 'devesse', '2017', 'docente'),
(52, 'malves', '1111', 'director'),
(53, 'clara', '0000', 'estudante'),
(54, 'alfredo', '0000', 'estudante'),
(55, 'clarinda', '2017', 'docente'),
(56, 'constancia', '2017', 'docente'),
(57, 'devesse', '1111', 'director'),
(60, 'guambe', '2017', 'docente'),
(62, 'lumenta', '2017', 'docente'),
(71, 'nilza', '2017', 'docente'),
(72, 'tome', '0000', 'estudante'),
(73, 'samuel', '0000', 'estudante'),
(74, 'natividade', '0000', 'estudante'),
(75, 'enzi', '0000', 'estudante'),
(76, 'edilson', '0000', 'estudante'),
(77, 'shana', '0000', 'estudante'),
(78, 'salvador', '0000', 'estudante'),
(79, 'mazive', '0000', 'estudante'),
(80, 'vania', '0000', 'estudante'),
(81, 'cabo', '0000', 'estudante'),
(82, 'ivo', '0000', 'estudante'),
(83, 'celso', '0000', 'estudante'),
(84, 'ana maria', '25252', 'estudante'),
(85, 'silvinha', '0000', 'estudante');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccientifica`
--
ALTER TABLE `ccientifica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `defesa`
--
ALTER TABLE `defesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_defesa_supervisao1_idx` (`supervisao_id`);

--
-- Indexes for table `dircurso`
--
ALTER TABLE `dircurso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dircurso_curso1_idx` (`curso_id`),
  ADD KEY `fk_dircurso_docente1_idx` (`docente_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_docente_curso1_idx` (`curso_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `docente_has_area`
--
ALTER TABLE `docente_has_area`
  ADD PRIMARY KEY (`docente_id`,`area_id`),
  ADD KEY `fk_docente_has_area_area1_idx` (`area_id`),
  ADD KEY `fk_docente_has_area_docente1_idx` (`docente_id`);

--
-- Indexes for table `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estudante_curso1_idx` (`curso_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_relatorio_supervisao1_idx` (`supervisao_id`);

--
-- Indexes for table `supervisao`
--
ALTER TABLE `supervisao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supervisao_ccientifica1_idx` (`ccientifica_id`),
  ADD KEY `fk_supervisao_docente1_idx` (`docente_id`),
  ADD KEY `fk_supervisao_estudante1_idx` (`estudante_id`),
  ADD KEY `fk_supervisao_area1_idx` (`area_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ccientifica`
--
ALTER TABLE `ccientifica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `defesa`
--
ALTER TABLE `defesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dircurso`
--
ALTER TABLE `dircurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisao`
--
ALTER TABLE `supervisao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `defesa`
--
ALTER TABLE `defesa`
  ADD CONSTRAINT `fk_defesa_supervisao1` FOREIGN KEY (`supervisao_id`) REFERENCES `supervisao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `dircurso`
--
ALTER TABLE `dircurso`
  ADD CONSTRAINT `fk_dircurso_curso1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dircurso_docente1` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `fk_docente_curso1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `docente_has_area`
--
ALTER TABLE `docente_has_area`
  ADD CONSTRAINT `fk_docente_has_area_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_docente_has_area_docente1` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estudante`
--
ALTER TABLE `estudante`
  ADD CONSTRAINT `fk_estudante_curso1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD CONSTRAINT `fk_relatorio_supervisao1` FOREIGN KEY (`supervisao_id`) REFERENCES `supervisao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `supervisao`
--
ALTER TABLE `supervisao`
  ADD CONSTRAINT `fk_supervisao_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supervisao_ccientifica1` FOREIGN KEY (`ccientifica_id`) REFERENCES `ccientifica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supervisao_docente1` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supervisao_estudante1` FOREIGN KEY (`estudante_id`) REFERENCES `estudante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
