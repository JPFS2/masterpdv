-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Maio-2023 às 20:48
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `masterpdv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `codcliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `ie` varchar(20) NOT NULL,
  `cel` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`codcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome`, `cnpj`, `cpf`, `ie`, `cel`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `complemento`, `email`) VALUES
(1, 'Johnnathan Pacífico Ferreira Sousa', '20.953.141/0001-36', '075.113.513-52', '123321', '(88)99612-8637', '63118-250', 'Rua da bomba', 123, 'Parque Recreio', 'Crato', 'ce', 'apto B', 'tispotify2019@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `codempresa` int NOT NULL AUTO_INCREMENT,
  `razao` varchar(100) NOT NULL,
  `fantasia` varchar(100) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `ie` int NOT NULL,
  `im` int NOT NULL,
  `tel` varchar(14) NOT NULL,
  `cel` varchar(14) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  PRIMARY KEY (`codempresa`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`codempresa`, `razao`, `fantasia`, `cnpj`, `ie`, `im`, `tel`, `cel`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `complemento`, `email`, `instagram`, `facebook`) VALUES
(1, 'Iphone', 'Nome Fantasia', '12.345.678/0001-90', 1234567890, 1234567890, '(88)3571-1486', '(88)98844-1448', '63.000-000', '(88)3571-1486', '437', 'Salesiano', 'Juazeiro do Norte', 'CE', '', 'tispotify2019@gmail.com', 'dasd', 'sadsad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `codentrada` int NOT NULL AUTO_INCREMENT,
  `codproduto` int NOT NULL,
  `codfornecedor` int NOT NULL,
  `tipo` int NOT NULL,
  `imei` int NOT NULL,
  `quantidade` int NOT NULL,
  `dataentrada` date NOT NULL,
  `datasaida` date NOT NULL,
  PRIMARY KEY (`codentrada`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `codfornecedor` int NOT NULL AUTO_INCREMENT,
  `razao` varchar(100) NOT NULL,
  `fantasia` varchar(100) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `ie` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`codfornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`codfornecedor`, `razao`, `fantasia`, `cnpj`, `ie`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `tel`, `email`) VALUES
(1, 'iphoneee12321123', 'iphone112', '20.953.141/0001-36', '123321', 'Rua da bomba', '123', 'Parque Recreio', 'Crato', 'ce', '63118-250', '(88) 99999-9999', 'tispotify2019@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `codproduto` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `armazenamento` varchar(50) NOT NULL,
  `memoria` varchar(50) NOT NULL,
  PRIMARY KEY (`codproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `tipo`, `descricao`, `modelo`, `armazenamento`, `memoria`) VALUES
(1, 'Celular', 'Iphone', 'X PRO MAX', '128 GB', '16 GB'),
(2, 'Acessório', 'carregador', 'C', '', ''),
(3, 'Acessório', 'Fone de ouvido', 'sem fio', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Johnnathan', 'johnnathan.pf.sousa@aluno.senai.br', 'c8837b23ff8aaa8a2dde915473ce0991');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
