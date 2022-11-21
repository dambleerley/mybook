-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Nov-2022 às 12:14
-- Versão do servidor: 8.0.31-0ubuntu0.22.04.1
-- versão do PHP: 8.1.2-1ubuntu2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mybook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE `book` (
  `id` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `autor` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `editora` varchar(45) NOT NULL,
  `paginas` varchar(5) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `publicacao` varchar(4) NOT NULL,
  `capa` varchar(50) NOT NULL,
  `status` char(1) NOT NULL,
  `classificacao` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `titulo`, `autor`, `editora`, `paginas`, `isbn`, `publicacao`, `capa`, `status`, `classificacao`) VALUES
(4, 'JavaScript o guia definitivo 6ª Edição', 'David Flanagan', 'Novatec', '1062', '978-85-65837-19-4', '2013', '20221024152436.jpg', '2', '5'),
(6, 'PHP Moderno', 'Josh Lockhart', 'Novatec', '295', '978-85-7522428-1', '2015', '20221024152401.jpg', '2', '5'),
(7, 'Introdução à linguagem SQL', 'Thomas Nield', 'Novatec', '136', '978-85-7522-501-1', '2022', '20221024162435.jpg', '3', '3'),
(8, 'Macros no Excel', 'Steven Roman', 'Editora Ciência Moderna', '557', '85-7393-106-X', '2000', '20221024162432.jpg', '0', '0'),
(9, 'Use a Cabeça! PHP e MySQL', 'Lynn Beighley e Michael Morrison', 'Alta Books', '753', '978-85-7608-502-7', '2010', '20221024162439.jpg', '2', '3'),
(10, 'Treinamento Prático em PHP', 'Alessandro Gerardi', 'Dirgerati', '181', '85-7702-013-4', '2005', '20221024162428.jpg', '3', '5'),
(11, 'E-Commerce conceitos implementação e gestão', 'Nara Stefano', 'Editora Intersaberes', '309', '978-85-5972-208-6', '2016', '20221024162420jpeg', '2', '4'),
(12, 'PHP Programando com Orientação a Objetos', 'Pablo Dall’Oglio', 'Novatec', '568', '978-8575226919', '2018', '20221024182425.jpg', '1', '5'),
(29, 'Linguagens e técnicas de programação I', 'Paulo Roberto Martins', 'Person Education', '186', '978-85-7605-264-7', '2009', '20221024202436.jpg', '1', '3'),
(30, 'Organização de computadores', 'Ruy Tsutomun Nishimura', 'Person Education', '184', '978-85-7605-295-1', '2009', '20221024202415.jpg', '0', '0'),
(31, 'UML 2. Uma Abordagem Prática ', 'Gilleanes T. A. Guedes', 'Novatec', '488', '978-8575222812', '2011', '20221024202431.jpg', '2', '4'),
(32, 'Fundamentos de lógica e matemática discreta', 'Eliane Maria de Oliveira Araman e Jenai Oliveira Cazetta', 'Person Education', '173', '978-85-7605-262-3', '2009', '20221025062542.jpg', '0', '0'),
(33, 'Fundamentos da administração da informação', 'Denise Dias de Santana e Luis Claudio Perine', 'Person Education', '184', '978-85-7605-305-7', '2009', '20221025072545.jpg', '0', '0'),
(34, 'Psicologia Organizacional', 'Letícia F. Menegon', 'Ser Educacional', '119', '978-85-430-0285-9', '2014', '20221025072518.jpg', '0', '0'),
(35, 'Informática', 'Paulo Henrique Martins Bittencourt', 'Person Education', '223', '978-85-430-0280-4', '2014', '20221025072551.jpg', '0', '0'),
(36, 'Curso Programação PHP', 'Prof. Allan Guerreiro Carneiro', 'UNIVIÇOSA e o CPT', '164', '978-85-7601-721-9', '2011', '20221027002749jpeg', '3', '2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `book`
--
ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
