-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jan-2023 às 11:52
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco.sql`
--
CREATE DATABASE IF NOT EXISTS `banco.sql` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `banco.sql`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nome_admin` varchar(30) DEFAULT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `senha_admin` varchar(10) DEFAULT NULL,
  `foto_admin` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nome_admin`, `email_admin`, `senha_admin`, `foto_admin`) VALUES
(1, 'Makengo', 'Makengo@gmail.com', '12344', 'IMG-20220112-WA0018.jpg'),
(2, 'Isabel', 'Isabel@gmail.com', 'pereira', 'IMG-20211206-WA0098.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `data_agendamento` date DEFAULT NULL,
  `hora_agendamento` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `id_pessoa`, `data_agendamento`, `hora_agendamento`) VALUES
(1, 2, '2023-01-15', '08:30:00'),
(2, 1, '2023-01-15', '09:00:00'),
(3, 2, '2023-01-15', '08:30:00'),
(4, 1, '2023-01-15', '09:00:00'),
(5, 2, '2023-01-15', '08:30:00'),
(6, 1, '2023-01-15', '09:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_posto_identificação`
--

CREATE TABLE `tb_posto_identificação` (
  `id_posto` int(11) NOT NULL,
  `identificador` varchar(30) DEFAULT NULL,
  `email_posto` varchar(50) DEFAULT NULL,
  `senha_posto` varchar(30) DEFAULT NULL,
  `provincia` varchar(20) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `rua` varchar(30) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_documento`
--

CREATE TABLE `tb_tipo_documento` (
  `id_documento` int(11) NOT NULL,
  `nome_documento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_tipo_documento`
--

INSERT INTO `tb_tipo_documento` (`id_documento`, `nome_documento`) VALUES
(1, 'BI'),
(2, 'Registro criminal'),
(3, 'Acento de nascimento'),
(4, 'Recenciamento militar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `idade` int(3) DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nome`, `email`, `senha`, `idade`, `sexo`, `foto`) VALUES
(1, 'Kethia', 'kethia@gmail.com', NULL, 22, 'F', 'IMG-20211206-WA0098.jpg'),
(2, 'Ntanda', 'ntandaa@gmail.com', NULL, 45, 'M', 'IMG-20211206-WA0098.jpg'),
(3, 'Pereira', 'Pereira@gmail.com', NULL, 20, 'M', 'IMG-20211206-WA0098.jpg'),
(4, 'José', 'José@gmail.com', NULL, 30, 'M', 'IMG-20211206-WA0098.jpg'),
(5, 'Maria', 'Maria@gmail.com', NULL, 18, 'F', 'IMG-20211206-WA0098.jpg'),
(6, 'Vilma', 'vilma@gmail.com', 'md5(1234)', 20, 'F', 'img-dhbdyv.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tb_posto_identificação`
--
ALTER TABLE `tb_posto_identificação`
  ADD PRIMARY KEY (`id_posto`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_tipo_documento`
--
ALTER TABLE `tb_tipo_documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_posto_identificação`
--
ALTER TABLE `tb_posto_identificação`
  MODIFY `id_posto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tipo_documento`
--
ALTER TABLE `tb_tipo_documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_posto_identificação`
--
ALTER TABLE `tb_posto_identificação`
  ADD CONSTRAINT `tb_posto_identificação_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
