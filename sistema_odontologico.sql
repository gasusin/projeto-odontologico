-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2018 às 11:17
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_odontologico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `id_paciente` int(5) NOT NULL,
  `id_dentista` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(5) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(5) COLLATE utf8_bin NOT NULL,
  `id_agenda` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

CREATE TABLE `dentista` (
  `id_dentista` int(5) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista_paciente`
--

CREATE TABLE `dentista_paciente` (
  `id_dentista_paciente` int(5) NOT NULL,
  `id_paciente` int(5) NOT NULL,
  `id_dentista` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE `exame` (
  `id_exame` int(5) NOT NULL,
  `descricao` int(5) NOT NULL,
  `observacao` varchar(100) COLLATE utf8_bin NOT NULL,
  `exame` binary(100) NOT NULL,
  `id_paciente` int(5) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_dentista` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `odontograma`
--

CREATE TABLE `odontograma` (
  `id_odontograma` int(5) NOT NULL,
  `descricao` varchar(100) COLLATE utf8_bin NOT NULL,
  `observacao` varchar(100) COLLATE utf8_bin NOT NULL,
  `desenho` binary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` varchar(5) COLLATE utf8_bin NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `plano_saude` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_cadastro` date NOT NULL,
  `hora_cadastro` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome`, `cpf`, `data_nascimento`, `plano_saude`, `data_cadastro`, `hora_cadastro`) VALUES
('00001', 'teste', 2147483647, '2018-01-01', 'Sem plano', '2018-11-11', '16:19'),
('00002', 'Daniel Scheeren', 2147483647, '2018-11-01', 'Unimed', '2018-11-12', '08:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posicao_odontograma`
--

CREATE TABLE `posicao_odontograma` (
  `id_posicao_odontograma` int(5) NOT NULL,
  `id_odontograma` int(5) NOT NULL,
  `posicao` int(5) NOT NULL,
  `observacao` varchar(100) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `posicao_x` int(5) NOT NULL,
  `posicao_y` int(5) NOT NULL,
  `id_paciente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretario`
--

CREATE TABLE `secretario` (
  `id_secretario` int(5) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(5) NOT NULL,
  `descricao` varchar(100) COLLATE utf8_bin NOT NULL,
  `administrador` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `login` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha` varchar(10) COLLATE utf8_bin NOT NULL,
  `id_tipo_usuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `login`, `senha`, `id_tipo_usuario`) VALUES
(1, 'Administrador', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
