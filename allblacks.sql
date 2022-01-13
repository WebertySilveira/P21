-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2022 às 18:49
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `allblacks`
--
CREATE DATABASE IF NOT EXISTS `allblacks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `allblacks`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fans`
--

CREATE TABLE `fans` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `documento` varchar(150) NOT NULL,
  `cep` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `uf` varchar(150) NOT NULL,
  `telefone` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `ativo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fans`
--
ALTER TABLE `fans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;
