-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2019 às 03:33
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `codFunc` int(11) NOT NULL,
  `nomeFunc` varchar(200) NOT NULL,
  `emailFunc` varchar(100) NOT NULL,
  `senhaFunc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`codFunc`, `nomeFunc`, `emailFunc`, `senhaFunc`) VALUES
(1, 'Carlos Alberto', 'carlos@gmail.com', 'carlos123'),
(2, 'Joao Arnaldo', 'joaoarnaldo@gmail.com', 'joao123'),
(3, 'Ricardo Milos', 'milos@gmail.com', 'milos123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente`
--

CREATE TABLE `gerente` (
  `codGer` int(11) NOT NULL,
  `nomeGer` varchar(200) NOT NULL,
  `emailGer` varchar(100) NOT NULL,
  `senhaGer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gerente`
--

INSERT INTO `gerente` (`codGer`, `nomeGer`, `emailGer`, `senhaGer`) VALUES
(1, 'Joao Gilberto', 'joao@gmail.com', 'joao123'),
(2, 'Arnaldo Antunes', 'arnaldo@gmail.com', 'arnaldo123'),
(3, 'Ricardo Solim', 'solim@gmail.com', 'solim123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codProd` int(11) NOT NULL,
  `nomeProd` varchar(150) NOT NULL,
  `descricaoProd` varchar(200) NOT NULL,
  `qtdProd` int(11) NOT NULL,
  `precoProd` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codProd`, `nomeProd`, `descricaoProd`, `qtdProd`, `precoProd`) VALUES
(1, 'Muda Jabuticabeira', 'Muda frutifera da especie Myrciaria cauliflora.', 5, '20.00'),
(2, 'Muda Goiabeira', 'Muda frutifera da especie Psidium guajava L.', 5, '15.00'),
(3, 'Sacola Ecologica', 'Sacola de material biodegradavel. Menos poluente e degrada rapido.', 20, '2.00'),
(4, 'Canudo Ecologico', 'Canudo ecologico, feito em metal para ser reutilizado', 10, '7.50'),
(5, 'Caderno Ecologico', 'Caderno feito de material reciclavel. 200 folhas', 15, '10.00'),
(6, 'Adesivo Tema Sustentabilidade', 'Adesivo com estampa diversa. Tema sustentabilidade', 30, '1.50');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`codFunc`);

--
-- Índices para tabela `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`codGer`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codProd`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `codFunc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `gerente`
--
ALTER TABLE `gerente`
  MODIFY `codGer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;