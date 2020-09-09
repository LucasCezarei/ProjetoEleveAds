-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2020 às 01:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livraria`
--

CREATE TABLE `livraria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `categoria` varchar(220) NOT NULL,
  `sinopse` varchar(1000) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `edicao` varchar(100) NOT NULL,
  `ano` varchar(100) NOT NULL,
  `num_paginas` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livraria`
--

INSERT INTO `livraria` (`id`, `titulo`, `categoria`, `sinopse`, `editora`, `autor`, `edicao`, `ano`, `num_paginas`, `imagem`, `created`, `modified`) VALUES
(12, 'A volta ao Mundo em 80 dias', 'Infantil ', 'A Volta ao Mundo em 80 Dias (Le tour du monde en quatre-vingts jours, em francês) é um romance de aventura escrito pelo francês Júlio Verne e lançado em 1873. ... A obra retrata a tentativa do cavalheiro inglês Phileas Fogg e seu valete, Passepartout, de circum-navegar o mundo em 80 dias.', 'Hetzel', 'Júlio Verne', '2563', '1873', '1565165', '2020.09.09-20.07.38.jpg', '0000-00-00 00:00:00', NULL),
(13, 'Gatilhos Mentais', 'Adulto', 'Alguns mentores brasileiros persistem em dizer que “copywriting” é gatilho mental. Mas, gatilhos mentais são apenas temperos. Não se preocupe em criar uma copy que ative os “Gatilhos Mentais”.\r\n\r\nVocê deve focar em criar uma copy que contorne e solucione o problema de seus clientes. Copywriting é redação publicitária. Mas no marketing digital, está mais para redação de marketing, já que estamos falando de um conteúdo totalmente focado na conversão de vendas de um produto ou serviço.', 'DVS EDITORA', 'Gustavo Ferreira', '2010', '2010', '450', '2020.09.09-20.10.12.jpg', '0000-00-00 00:00:00', NULL),
(14, 'Marley e Eu', 'Biografia, Autobiografia, romance autobiográfico', 'Marley & Eu é um livro dos Estados Unidos considerado best seller escrito pelo escritor e jornalista norte-americano John Grogan, baseado numa história real, que conta a vida e o amor de seu dono pelo &#34;Pior Cão do Mundo&#34;', 'HarperCollins, Hodder & Stoughton', 'John Grogan', '2011', '2009', '250', '2020.09.09-20.12.03.jpg', '0000-00-00 00:00:00', NULL),
(15, 'A Cabana', 'Romance, Suspense, Romance cristão, Ficção religiosa', 'A Cabana é um livro do escritor canadense William P. Young, lançado em 2007 nos Estados Unidos. Chegou ao Brasil pela Editora Sextante em 2008. No ano de 2009 ganhou o Diamond Awards por ter vendido 10 milhões de cópias nos EUA. Até então já vendeu mais de 20 milhões de livros', 'Olá Mundo', 'William P. Young', '2017', '2007', '520', '2020.09.09-20.13.32.jpg', '0000-00-00 00:00:00', NULL),
(16, 'O poder do Habito', 'Livro de autoajuda', 'O Poder do Hábito: por que fazemos o que fazemos na vida e nos negócios é um livro de Charles Duhigg, ex-repórter do New York Times, publicado em Fevereiro de 2012 pela Random House. Explora a ciência por trás da criação e reforma de hábito', 'Random House', 'Charles Duhigg', '2015', '2012', '362', '2020.09.09-20.15.37.png', '0000-00-00 00:00:00', NULL),
(17, 'O Senhor dos Aneis', 'Romance, Alta fantasia, Literatura fantástica, Romance de cavalaria, Ficção de aventura, Fantasia heroica', 'O Senhor dos Anéis é um livro de alta fantasia, escrito pelo escritor britânico J. R. R. Tolkien. Escrita entre 1937 e 1949, com muitas partes criadas durante a Segunda Guerra Mundial, a saga é uma continuação de O Hobbit.', 'A Sociedade do Anel', ' J. R. R. Tolkien', '1960', '1954', '653', '2020.09.09-20.17.24.jpg', '0000-00-00 00:00:00', NULL),
(18, 'Mentes Brilhantes', 'Livro de autoajuda', 'Sabemos que todo mundo reconhece aqueles que inovam, criam ou provocam situações que, de alguma forma, chamam a atenção. Então, faz sentido afirmar que o Segredo do sucesso pode ser resumido em ser criativo. ...', 'Abril', ' Alberto Dell Isola', '2010', '2010', '210', '2020.09.09-20.18.49.jpg', '0000-00-00 00:00:00', NULL),
(20, 'Lucas', 'Livro de autoajuda', 'fsdfasdfas', 'JJunho', 'mudno', 'Vitoria', '2510', '2563', '2020.09.09-20.23.15.jpg', '0000-00-00 00:00:00', '2020-09-09 20:27:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livraria`
--
ALTER TABLE `livraria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livraria`
--
ALTER TABLE `livraria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
