-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2022 às 01:41
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_webi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `texto` varchar(100) NOT NULL,
  `acao` varchar(200) NOT NULL,
  `colunas` varchar(255) NOT NULL,
  `sqltabela` varchar(255) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `texto`, `acao`, `colunas`, `sqltabela`, `tipo`) VALUES
(1, 'Pessoas 2222', '?pagina=lista_pessoa', 'ID,Nome,E-mail', 'select id,nome,email from pessoa', 'lista'),
(2, 'Produtos', '?pagina=lista_produto', 'ID,Nome,Valor,Total Estoque', 'select id,nome,valor,total_estoque from produto', 'lista'),
(3, 'Usuarios', '?pagina=lista_usuario', 'ID,Nome,E-mail', 'select id,nome,email from usuario', 'lista'),
(4, 'Conta a Pagar', '?pagina=lista_conta_pagar', '', '', 'lista'),
(5, 'Edição de Pessoa', '?pagina=pessoa_editar', 'ID,Nome,E-mail', 'select id,nome,email from pessoa', 'editar'),
(6, 'Cadastro de Pessoa', '?pagina=pessoa_cadastro', 'Nome,E-mail', 'insert into pessoa (nome,email) values (?,?)', 'cadastro'),
(7, 'Exclusão de Pessoa', '?pagina=pessoa_deletar', 'ID,Nome,E-mail', 'select id,nome,email from pessoa', 'deletar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `datacadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `dataalteracao` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `email`, `usu_id`, `datacadastro`, `dataalteracao`) VALUES
(3, 'Marcondes', 'marcondes@unidavi.edu.br', 1, '2021-03-18 01:20:08', NULL),
(4, 'Leticia', 'leticia@unidavi.edu.br', 1, '2021-03-18 01:20:08', NULL),
(6, 'aaaa', 'ssss', 2, '2022-03-04 01:44:36', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` double(10,2) NOT NULL,
  `total_estoque` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `valor`, `total_estoque`) VALUES
(1, 'Cerveja', 5.00, 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `asdasd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`asdasd`) VALUES
(333),
(333);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Marcondes', '', ''),
(2, 'Leticia', 'leticia@unidavi.edu.br', 'asdad');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
