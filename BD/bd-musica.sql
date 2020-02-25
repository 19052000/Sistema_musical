-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/02/2020 às 22:37
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd-musica`
--
CREATE DATABASE IF NOT EXISTS `bd-musica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd-musica`;

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
-- Estrutura para tabela `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(3) NOT NULL,
  `Nome` varchar(60) DEFAULT NULL,
  `Idade` int(3) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Sexo` int(3) DEFAULT NULL,
  `Senha` varchar(60) DEFAULT NULL,
  `Perfil` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_user`
--

INSERT INTO `tb_user` (`id`, `Nome`, `Idade`, `Email`, `Sexo`, `Senha`, `Perfil`) VALUES
(1, 'Henrique do Amaral Ferreira', 19, 'hamaral158@gmail.com', 1, '123456', 3),
(3, 'Maria', 16, 'mariaenegrelli@gmail.com', 2, '10238', 3);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_sexo`
--
ALTER TABLE `tb_sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Índices de tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sexo` (`Sexo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_sexo`
--
ALTER TABLE `tb_sexo`
  MODIFY `id_sexo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_sexo` FOREIGN KEY (`Sexo`) REFERENCES `tb_sexo` (`id_sexo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
