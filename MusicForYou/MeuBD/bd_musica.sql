-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/03/2020 às 02:21
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_musica`
--
CREATE DATABASE IF NOT EXISTS `bd_musica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_musica`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_genero`
--

DROP TABLE IF EXISTS `tb_genero`;
CREATE TABLE `tb_genero` (
  `id_genero` int(3) NOT NULL,
  `descricao` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_genero`
--

INSERT INTO `tb_genero` (`id_genero`, `descricao`) VALUES
(1, 'rock'),
(2, 'disco'),
(3, 'classica'),
(4, 'pop'),
(5, 'rap');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_perfil`
--

DROP TABLE IF EXISTS `tb_perfil`;
CREATE TABLE `tb_perfil` (
  `id_perfil` int(3) NOT NULL,
  `perfil` int(3) DEFAULT NULL,
  `qntde` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_perfil`
--

INSERT INTO `tb_perfil` (`id_perfil`, `perfil`, `qntde`) VALUES
(10, 232, 1),
(11, 121, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_perf_genero`
--

DROP TABLE IF EXISTS `tb_perf_genero`;
CREATE TABLE `tb_perf_genero` (
  `id_gosto` int(3) NOT NULL,
  `perfil` int(3) NOT NULL,
  `genero` int(3) NOT NULL,
  `gostei` int(3) DEFAULT NULL,
  `odiei` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_perf_genero`
--

INSERT INTO `tb_perf_genero` (`id_gosto`, `perfil`, `genero`, `gostei`, `odiei`) VALUES
(7, 10, 2, 4, 2),
(8, 10, 3, 2, 0),
(13, 10, 1, 1, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_sexo`
--

DROP TABLE IF EXISTS `tb_sexo`;
CREATE TABLE `tb_sexo` (
  `id_sexo` int(3) NOT NULL,
  `descricao` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_sexo`
--

INSERT INTO `tb_sexo` (`id_sexo`, `descricao`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipo`
--

DROP TABLE IF EXISTS `tb_tipo`;
CREATE TABLE `tb_tipo` (
  `id_tipo` int(3) NOT NULL,
  `descricao` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_tipo`
--

INSERT INTO `tb_tipo` (`id_tipo`, `descricao`) VALUES
(3, 'Administrador'),
(5, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(3) NOT NULL,
  `Nome` varchar(60) DEFAULT NULL,
  `Idade` int(3) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Sexo` int(3) DEFAULT NULL,
  `Senha` varchar(60) DEFAULT NULL,
  `Perfil` int(3) DEFAULT NULL,
  `tipo` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `Nome`, `Idade`, `Email`, `Sexo`, `Senha`, `Perfil`, `tipo`) VALUES
(14, 'Maria Negrelli', 16, 'mariaenegrelli@gmail.com', 2, '92f20dafc5e5ac1c66820903c492cc04', 232, 3),
(15, 'Maria Eduarda', 16, 'mariaenegrelli@gmail.com', 2, 'a57fc812a9521b8c0ede9a2724351a55', 232, 5),
(16, 'Ana Clara', 20, 'mariaenegrelli@gmail.com', 2, '23d1e10df85ef805b442a922b240ce25', 121, 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_genero`
--
ALTER TABLE `tb_genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices de tabela `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Índices de tabela `tb_perf_genero`
--
ALTER TABLE `tb_perf_genero`
  ADD PRIMARY KEY (`id_gosto`),
  ADD KEY `genero` (`genero`),
  ADD KEY `fk_perf` (`perfil`);

--
-- Índices de tabela `tb_sexo`
--
ALTER TABLE `tb_sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Índices de tabela `tb_tipo`
--
ALTER TABLE `tb_tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices de tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `fk_sexo` (`Sexo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_genero`
--
ALTER TABLE `tb_genero`
  MODIFY `id_genero` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `id_perfil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_perf_genero`
--
ALTER TABLE `tb_perf_genero`
  MODIFY `id_gosto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_sexo`
--
ALTER TABLE `tb_sexo`
  MODIFY `id_sexo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_perf_genero`
--
ALTER TABLE `tb_perf_genero`
  ADD CONSTRAINT `fk_perf` FOREIGN KEY (`perfil`) REFERENCES `tb_perfil` (`id_perfil`),
  ADD CONSTRAINT `tb_perf_genero_ibfk_1` FOREIGN KEY (`genero`) REFERENCES `tb_genero` (`id_genero`);

--
-- Restrições para tabelas `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_sexo` FOREIGN KEY (`Sexo`) REFERENCES `tb_sexo` (`id_sexo`),
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tb_tipo` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
