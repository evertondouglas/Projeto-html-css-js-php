-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/11/2017 às 00:52
-- Versão do servidor: 5.7.14
-- Versão do PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `rua` varchar(220) NOT NULL,
  `numero_casa` varchar(220) NOT NULL,
  `cidade` varchar (220) NOT NULL,
  `estados_brasil` varchar(220) NOT NULL,
  `zona` varchar(220) NOT NULL,
  `residencia`varchar(220) NOT NULL,
  `terreno` varchar(220) NOT NULL,
  `processa_status` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `rua`,`numero_casa`, `cidade`, `estados_brasil`, `zona`, `residencia`, `terreno`,`processa_status`, `created`, `modified`) VALUES
(1, 'Cesar', '121212','Benedito', '10', 'Alagoinha', 'PB', 'rural', 'urbana', 'terrrio', 'processando', '2017-11-12 22:35:47', NULL),
(2, 'douglas', '111111', 'Benedito', '10', 'Alagoinha', 'PB', 'rural', 'urbana', 'terrrio', 'processando', '2017-11-12 22:37:15', NULL),
(3, 'everton', '131313131313', 'Benedito', '10', 'Alagoinha', 'PB', 'rural', 'urbana', 'terrrio', 'processando', '2017-11-12 22:39:14', NULL),
(4, 'Cesar4', '151515151515', 'Benedito', '10', 'Alagoinha', 'PB', 'rural', 'urbana', 'terrrio', 'processando', '2017-11-12 22:41:21', NULL),
(5, 'Cesar5', '181818181818', 'Benedito', '10', 'Alagoinha', 'PB', 'rural', 'urbana', 'terrrio', 'processando', '2017-11-12 22:42:49', NULL),
(6, 'Cesar6', '1919191919', 'Benedito', '10', 'Alagoinha', 'PB', 'rural', 'urbana', 'terrrio', 'processando', '2017-11-12 22:48:27', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
