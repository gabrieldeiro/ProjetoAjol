-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2023 às 03:16
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ajol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL,
  `descricao_categoria` varchar(255) DEFAULT NULL,
  `obs_categoria` varchar(255) DEFAULT NULL,
  `status_categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`, `obs_categoria`, `status_categoria`) VALUES
(1, 'Filme', 'Filme', 'Teste', 'ativo'),
(2, 'Series', 'Series', '', 'ativo'),
(3, 'mauris', 's', 's', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_usuario_compra` int(11) NOT NULL,
  `valortotal_compra` decimal(10,2) DEFAULT NULL,
  `qtde_compra` int(11) DEFAULT NULL,
  `datafechamento_compra` datetime DEFAULT NULL,
  `formadepagamento_compra` varchar(30) DEFAULT NULL,
  `cupom_compra` varchar(30) DEFAULT NULL,
  `Valordesconto_compra` decimal(10,2) DEFAULT NULL,
  `obs_compra` varchar(200) DEFAULT NULL,
  `status_compra` varchar(30) NOT NULL,
  `estagio_compra` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id_compra`, `id_usuario_compra`, `valortotal_compra`, `qtde_compra`, `datafechamento_compra`, `formadepagamento_compra`, `cupom_compra`, `Valordesconto_compra`, `obs_compra`, `status_compra`, `estagio_compra`) VALUES
(31, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL),
(32, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL),
(33, 2, 340.00, 28, '2023-07-13 20:02:14', ' ', ' ', 0.00, ' ', 'FINALIZADO', ' '),
(34, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL),
(35, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL),
(36, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL),
(37, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL),
(38, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(100) NOT NULL,
  `login_funcionario` char(50) NOT NULL,
  `senha_funcionario` char(50) NOT NULL,
  `email_funcionario` varchar(50) NOT NULL,
  `cpf_funcionario` char(14) NOT NULL,
  `datanasc_funcionario` datetime NOT NULL,
  `endereco_funcionario` varchar(30) NOT NULL,
  `numero_funcionario` int(11) NOT NULL,
  `compl_funcionario` decimal(10,3) DEFAULT NULL,
  `bairro_funcionario` varchar(100) NOT NULL,
  `cep_funcionario` char(9) NOT NULL,
  `obs_funcionario` varchar(255) DEFAULT NULL,
  `status_funcionario` varchar(20) DEFAULT NULL,
  `img_funcionario` longblob NOT NULL,
  `cidade_funcionario` varchar(100) NOT NULL,
  `estado_funcionario` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `login_funcionario`, `senha_funcionario`, `email_funcionario`, `cpf_funcionario`, `datanasc_funcionario`, `endereco_funcionario`, `numero_funcionario`, `compl_funcionario`, `bairro_funcionario`, `cep_funcionario`, `obs_funcionario`, `status_funcionario`, `img_funcionario`, `cidade_funcionario`, `estado_funcionario`) VALUES
(1, 'Roger Guedes', 'rg10', '', 'roger.guedes@gmail.com', '123.123.123-12', '0000-00-00 00:00:00', '', 12, 0.000, 'end', '123', 'OLA', 'ativo', 0x726f6765722e6a7067, '', ''),
(2, '', '', '', '', '', '0000-00-00 00:00:00', '', 0, 0.000, '', '', '', 'ativo', '', '', ''),
(5, 'ss', 'sss', 'ss', 'ss@uol.m', '25825825814521', '2023-07-06 00:00:00', '', 0, NULL, '', '', '', '', '', '', ''),
(6, 'm', 's', 's', 'eee@ddd.com', '12512512511', '2023-06-28 00:00:00', '', 0, 0.000, '', '', '', '', '', '', ''),
(8, '21', '2', '2', 'eee@ddd.com', '1111', '2023-07-05 00:00:00', '', 0, 0.000, '', '', '', '', '', '', ''),
(9, 'm', 'ad', 'as', 'ss@uol.m', '11122233345', '2023-06-29 00:00:00', '', 20, 0.000, 'Vila Rosália', '07072250', '', 'ativo', '', 'Guarulhos', 'SP'),
(10, 'AdmT', 'admt', 'admt', 'fsafafsa@fafsa', '123', '2003-12-20 00:00:00', '', 0, 0.000, 'fasfasfs', '156156156', 'gdsgds', 'ativo', 0x467058634c4a3558734149432d5f38312d343230783330302e6a7067, 'sfafsad', 'sp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemproduto`
--

CREATE TABLE `itemproduto` (
  `id_itemproduto` int(11) NOT NULL,
  `id_produto_itemproduto` int(11) NOT NULL,
  `id_compra_itemproduto` int(11) NOT NULL,
  `qtde_itemproduto` int(11) NOT NULL,
  `valortotal_itemproduto` decimal(10,3) NOT NULL,
  `valorunitario_itemproduto` decimal(10,3) NOT NULL,
  `obs_itemcompra` varchar(255) DEFAULT NULL,
  `status_itemcompra` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `itemproduto`
--

INSERT INTO `itemproduto` (`id_itemproduto`, `id_produto_itemproduto`, `id_compra_itemproduto`, `qtde_itemproduto`, `valortotal_itemproduto`, `valorunitario_itemproduto`, `obs_itemcompra`, `status_itemcompra`) VALUES
(1, 14, 33, 1, 10.000, 10.000, NULL, NULL),
(2, 14, 33, 1, 10.000, 10.000, NULL, NULL),
(3, 14, 33, 1, 10.000, 10.000, NULL, NULL),
(4, 14, 33, 1, 10.000, 10.000, NULL, NULL),
(5, 13, 31, 1, 10.000, 10.000, NULL, NULL),
(6, 10, 35, 1, 10.000, 10.000, NULL, NULL),
(7, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(8, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(9, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(10, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(11, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(12, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(13, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(15, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(16, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(17, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(18, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(19, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(20, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(21, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(22, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(23, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(24, 10, 33, 1, 10.000, 10.000, NULL, NULL),
(25, 8, 33, 1, 10.000, 10.000, NULL, NULL),
(26, 7, 33, 2, 20.000, 10.000, NULL, NULL),
(27, 7, 33, 2, 20.000, 10.000, NULL, NULL),
(28, 7, 33, 2, 20.000, 10.000, NULL, NULL),
(29, 7, 33, 2, 20.000, 10.000, NULL, NULL),
(30, 7, 33, 2, 20.000, 10.000, NULL, NULL),
(31, 14, 33, 2, 20.000, 10.000, NULL, NULL),
(32, 12, 37, 1, 10.000, 10.000, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria_produto` int(11) NOT NULL,
  `nome_produto` varchar(30) NOT NULL,
  `marca_produto` varchar(50) NOT NULL,
  `datacadastro_produto` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lote_produto` varchar(30) DEFAULT NULL,
  `qtde_produto` int(11) NOT NULL,
  `peso_produto` decimal(10,3) NOT NULL,
  `dimensao_produto` varchar(50) NOT NULL,
  `escala_produto` int(11) NOT NULL,
  `valorunitario_produto` decimal(10,3) NOT NULL,
  `valorcusto_produto` decimal(10,3) NOT NULL,
  `desconto_produto` decimal(10,3) DEFAULT NULL,
  `img_produto` longblob NOT NULL,
  `img2_produto` longblob DEFAULT NULL,
  `img3_produto` longblob DEFAULT NULL,
  `obs_produto` varchar(255) DEFAULT NULL,
  `status_produto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria_produto`, `nome_produto`, `marca_produto`, `datacadastro_produto`, `lote_produto`, `qtde_produto`, `peso_produto`, `dimensao_produto`, `escala_produto`, `valorunitario_produto`, `valorcusto_produto`, `desconto_produto`, `img_produto`, `img2_produto`, `img3_produto`, `obs_produto`, `status_produto`) VALUES
(7, 2, 'Produto oficial 2', 'Marca oficial 2', '2023-06-29 03:00:00', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x6163652e77656270, NULL, NULL, '', 'ativo'),
(8, 1, '', '', '0000-00-00 00:00:00', '', 0, 0.000, '', 0, 0.000, 0.000, 0.000, 0x6172616e68612e77656270, NULL, NULL, '', ''),
(10, 1, 'Produto oficial 4', 'Marca oficial 4', '2023-06-29 03:00:00', '12', 3, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x686f6d656d20646520666572726f2e6a7067, NULL, NULL, '', 'ativo'),
(12, 1, 'Produto oficial 6', 'Marca oficial 6', '2023-06-29 03:00:00', '12', 1, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x796f64612e6a7067, NULL, NULL, '', 'ativo'),
(13, 1, 'Produto oficial 7', 'Marca oficial 7', '2023-06-29 03:00:00', '12', 8, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x6d616e64616c6f7269616e2e6a7067, NULL, NULL, '', 'ativo'),
(14, 1, 'Produto oficial 25', 'Marca oficial 25', '2023-06-30 00:53:53', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x636f72696e67612e706e67, NULL, NULL, '', 'ativo'),
(17, 1, 'Produto Oficial 17', '', '2023-07-04 03:00:00', '', 3, 0.000, '', 0, 13500.000, 15000.000, 10.000, 0x6d616e64616c6f7269616e636f6d796f64612e6a7067, NULL, NULL, '', ''),
(39, 2, 'produto oficial 39', 'sad', '2023-07-06 03:00:00', 'sad', 0, 0.000, 'sad', 0, 10.000, 10.000, -5.000, 0x747268796e646572636174732e6a7067, NULL, NULL, '', 'ativo'),
(41, 2, 'Produto Oficial 41', 's', '2023-07-06 03:00:00', '11', 1, 0.000, '2', 2, 9.000, 10.000, 2.000, 0x6c6173742e6a7067, NULL, NULL, '', 'ativo'),
(42, 1, 'Produto oficial teste ', 'Marca oficial 7', '2023-07-07 03:00:00', '12', 8, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x696e646963616e612e77656270, NULL, NULL, '', 'ativo'),
(44, 1, 'mayco', 's', '2023-07-14 00:10:55', '1', 1, 1.000, '1', 1, 0.990, 1.000, 1.000, '', NULL, NULL, '1', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `cpf_usuario` char(14) DEFAULT NULL,
  `login_usuario` char(50) DEFAULT NULL,
  `senha_usuario` char(50) DEFAULT NULL,
  `img_usuario` longblob DEFAULT NULL,
  `email_usuario` varchar(30) DEFAULT NULL,
  `data_nasc_usuario` datetime DEFAULT NULL,
  `endereco_usuario` varchar(30) DEFAULT NULL,
  `numero_usuario` int(11) DEFAULT NULL,
  `compl_usuario` decimal(10,3) DEFAULT NULL,
  `bairro_usuario` varchar(100) DEFAULT NULL,
  `cep_usuario` char(9) DEFAULT NULL,
  `obs_usuario` varchar(255) DEFAULT NULL,
  `status_usuario` varchar(20) DEFAULT NULL,
  `estado_usuario` varchar(2) NOT NULL,
  `cidade_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `login_usuario`, `senha_usuario`, `img_usuario`, `email_usuario`, `data_nasc_usuario`, `endereco_usuario`, `numero_usuario`, `compl_usuario`, `bairro_usuario`, `cep_usuario`, `obs_usuario`, `status_usuario`, `estado_usuario`, `cidade_usuario`) VALUES
(1, 'Adm', '123.123.123-12', 'adm', 'adm', 0x746974652e6a7067, 'adm@gmail.com', '2023-07-12 00:00:00', 'endereco 1', 12, 0.000, 'endereco 1', '12345-678', '', '', '', ''),
(2, 'Gabriel', '45612378925', 'jrgabriel', 'gabriel280203', 0x726f6765722e6a7067, 'gabrieldeiro2018@gmail.com', '2003-02-28 00:00:00', 'Rua Primavera 535', 535, 0.000, 'Rua Primavera 535', '07629374', '', '', '', ''),
(3, 'mauci', '4532165', 'abril', 'abril', NULL, 'eee@ddd.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ss', 0, 0.000, 's', '654156', NULL, NULL, 's', 's'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ss', 0, 0.000, 's', '654156', NULL, NULL, 's', 's'),
(35, 'sss', 'sssssss', 'sssssss', 'sss', NULL, 'sss@erf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(49, 'ultimoteste', NULL, 'ultimoteste', '123', NULL, 'ultimoteste@asasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(54, 'Jeffao da pica de ferro', '13141414141', 'JEFFPICUDO', '123456', 0x687164656661756c742e6a7067, 'asbafba@gmail.com', '2023-07-11 00:00:00', 'Rua Seis A', 80, 0.000, 'Parque Continental IV', '07124706', NULL, 'Ativo', 'SP', 'Guarulhos'),
(55, 'luiz', '44963867800', 'luiz', '123', 0x726f6765722e6a7067, 'lzeduardo775@gmail.com', '1996-10-25 00:00:00', 'Rua Mogi das Cruzes', 161, 0.000, 'Gopoúva', '07022010', NULL, 'Ativo', 'SP', 'Guarulhos'),
(56, 'fsafasf', NULL, 'tafasfas', '213', NULL, 'fsafasfsa@fsafasfas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(58, 'fsafasf', NULL, 'tafasfas14421', '213', NULL, 'fsafasfsa@fsafasfas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(59, 'Gustavo', '120.361.928-36', 'Gusta', 'gustavo', 0x6b697262792e706e67, 'tgustavo@blabla.com', '2004-04-08 00:00:00', 'Rua Edmundo Pereira', 120, 0.000, 'Jardim Fortaleza', '07153-050', NULL, 'Ativo', 'SP', 'Guarulhos'),
(61, 'Gustavo Tosta', '109.273.109-27', 'Gustavo', 'Gusta', 0x6b697262792070616f2e61766966, 'tgustavo@outlook.com', '2004-08-04 00:00:00', 'Rua Edmundo Pereira', 111, 0.000, 'Jardim Fortaleza', '07153-050', NULL, 'Ativo', 'SP', 'Guarulhos'),
(62, 'Homer Simpson', '123.709.120-36', 'Homer', 'Simpson', 0x31333237303939363036313933373835363134312e706e67, 'dooh@outook.com', '0000-00-00 00:00:00', 'Rua Evergreen Terrace', 142, 0.000, 'Chernobyl', '12412-512', NULL, 'Ativo', 'Al', 'Springfield'),
(64, 'mayco', '147.357.951-12', 'as', 'as', '', 'sss@sss.comsa', '2023-07-12 00:00:00', 'Rua Soldado José Fernandes da ', 20, 0.000, 'Vila Rosália', '07070-020', '', 'ativo', 'SP', 'Guarulhos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `FK_ID_Usuario_Compra` (`id_usuario_compra`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `login_funcionario` (`login_funcionario`),
  ADD UNIQUE KEY `cpf_funcionario` (`cpf_funcionario`);

--
-- Índices para tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  ADD PRIMARY KEY (`id_itemproduto`),
  ADD KEY `FK_ID_Produto_ItemProduto` (`id_produto_itemproduto`),
  ADD KEY `FK_ID_Compra_ItemProduto` (`id_compra_itemproduto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `FK_ID_Categoria_Produto` (`id_categoria_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cpf_usuario` (`cpf_usuario`),
  ADD UNIQUE KEY `login_usuario` (`login_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  MODIFY `id_itemproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_ID_Usuario_Compra` FOREIGN KEY (`id_usuario_compra`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  ADD CONSTRAINT `FK_ID_Compra_ItemProduto` FOREIGN KEY (`id_compra_itemproduto`) REFERENCES `compra` (`id_compra`),
  ADD CONSTRAINT `FK_ID_Produto_ItemProduto` FOREIGN KEY (`id_produto_itemproduto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_ID_Categoria_Produto` FOREIGN KEY (`id_categoria_produto`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
