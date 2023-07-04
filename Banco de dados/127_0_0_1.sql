-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/07/2023 às 03:14
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
CREATE DATABASE IF NOT EXISTS `ajol` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ajol`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL,
  `descricao_categoria` varchar(255) DEFAULT NULL,
  `obs_categoria` varchar(255) DEFAULT NULL,
  `status_categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`, `obs_categoria`, `status_categoria`) VALUES
(1, 'Filme', 'Filme', 'Teste', 'ativo'),
(2, 'Series', 'Series', '', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compra`
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
  `status_compra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compra`
--

INSERT INTO `compra` (`id_compra`, `id_usuario_compra`, `valortotal_compra`, `qtde_compra`, `datafechamento_compra`, `formadepagamento_compra`, `cupom_compra`, `Valordesconto_compra`, `obs_compra`, `status_compra`) VALUES
(31, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO'),
(32, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
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
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `login_funcionario`, `senha_funcionario`, `email_funcionario`, `cpf_funcionario`, `datanasc_funcionario`, `endereco_funcionario`, `numero_funcionario`, `compl_funcionario`, `bairro_funcionario`, `cep_funcionario`, `obs_funcionario`, `status_funcionario`, `img_funcionario`, `cidade_funcionario`, `estado_funcionario`) VALUES
(1, 'Roger Guedes', 'rg10', '', 'roger.guedes@gmail.com', '123.123.123-12', '0000-00-00 00:00:00', '', 12, 0.000, 'end', '123', 'OLA', 'ativo', 0x726f6765722e6a7067, '', ''),
(2, '', '', '', '', '', '0000-00-00 00:00:00', '', 0, 0.000, '', '', '', 'ativo', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
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
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria_produto`, `nome_produto`, `marca_produto`, `datacadastro_produto`, `lote_produto`, `qtde_produto`, `peso_produto`, `dimensao_produto`, `escala_produto`, `valorunitario_produto`, `valorcusto_produto`, `desconto_produto`, `img_produto`, `img2_produto`, `img3_produto`, `obs_produto`, `status_produto`) VALUES
(7, 1, 'Produto oficial 2', 'Marca oficial 2', '2023-06-29 23:29:07', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x6163652e77656270, NULL, NULL, '', 'ativo'),
(8, 1, 'Produto oficial 3', 'Marca oficial 3', '2023-06-29 23:47:16', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x6172616e68612e77656270, NULL, NULL, '', 'ativo'),
(10, 1, 'Produto oficial 4', 'Marca oficial 4', '2023-06-30 00:21:38', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x6e6f6b752e706e67, NULL, NULL, '', 'ativo'),
(12, 1, 'Produto oficial 6', 'Marca oficial 6', '2023-06-30 00:22:39', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x6361706974616f2e706e67, NULL, NULL, '', 'ativo'),
(13, 1, 'Produto oficial 7', 'Marca oficial 7', '2023-06-30 00:22:56', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x726976656e2e77656270, NULL, NULL, '', 'ativo'),
(14, 1, 'Produto oficial 25', 'Marca oficial 25', '2023-06-30 00:53:53', '12', 2, 12.000, '100x100', 1, 10.000, 100.000, 0.000, 0x636f72696e67612e706e67, NULL, NULL, '', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
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
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `login_usuario`, `senha_usuario`, `img_usuario`, `email_usuario`, `data_nasc_usuario`, `endereco_usuario`, `numero_usuario`, `compl_usuario`, `bairro_usuario`, `cep_usuario`, `obs_usuario`, `status_usuario`, `estado_usuario`, `cidade_usuario`) VALUES
(1, 'Adm', '123.123.123.12', 'adm', 'adm', 0x746974652e6a7067, 'adm@gmail.com', '0000-00-00 00:00:00', 'endereco 1', 12, 0.000, 'endereco 1', '123456789', '', '', '', ''),
(2, 'Gabriel', '45612378925', 'jrgabriel', 'gabriel280203', 0x726f6765722e6a7067, 'gabrieldeiro2018@gmail.com', '2003-02-28 00:00:00', 'Rua Primavera 535', 535, 0.000, 'Rua Primavera 535', '07629374', '', '', '', ''),
(3, 'mauci', '4532165', 'abril', 'abril', NULL, 'eee@ddd.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sss', 0, NULL, 'ss', NULL, NULL, NULL, 's', 's'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ss', 0, 0.000, 's', '654156', NULL, NULL, 's', 's'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ss', 0, 0.000, 's', '654156', NULL, NULL, 's', 's'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ss', 0, 0.000, 's', '654156', NULL, NULL, 's', 's'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(10, 'ss', 'ss', 'sss', 'ss', NULL, 'ss@uol.m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0.000, '', '', NULL, NULL, '', ''),
(27, 'aa', 'a221', 'aaa', 'aaa', NULL, 'aaa@a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(31, 'aaw22', 'a22122', 'aaaaaa', 'aaaa', NULL, 'aaa@aw2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(32, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(35, 'sss', 'sssssss', 'sssssss', 'sss', NULL, 'sss@erf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(36, 'aaw22', 'a22122ss', 'aaaaaass', '', NULL, 'aaa@aw2s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(40, 'as', NULL, 'alta', 'alta', NULL, 'AS@UJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(41, 'eu', '432432', 'teste', 'teste', NULL, 'eu@eu', '2023-06-09 00:00:00', 'fsafsa', 21, 0.000, 'fsa', '1321', NULL, NULL, 'as', 'fasfasf'),
(42, 'master', '123456', 'master', 'adm', NULL, 'master@gmail.com', '2023-07-19 00:00:00', 'gdsgds', 12, 0.000, 'gdsgds', '07629374', NULL, NULL, 'gd', 'gdsgds'),
(43, 'testeste', NULL, 'testeste', '123', NULL, 'testeste@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(45, 'alalala', '421412', 'pato', '123', 0x7061746f2d64652d657374696d6163616f2e6a7067, 'testeste@gmail.com', '2023-07-13 00:00:00', 'Rua da Primavera', 52, 0.000, 'Rua da Primavera', '07629374', '', 'ativo', 'Ma', 'SP'),
(46, 'fasfsa', '213123', 'bebebebe', '123', 0x6f2d7175652d7061746f2d636f6d652d332e6a7067, 'dsafasfas@safas', '0001-07-04 00:00:00', 'fsafas', 12, 0.000, 'fafsaf', '3213', NULL, 'Ativo', 'fs', 'fsafsa'),
(47, 'fsafasf', '21312', 'fsafasf', '123', 0x6f2d7175652d7061746f2d636f6d652d332e6a7067, 'fasfasfsa@fsafsafs', '2023-07-04 00:00:00', 'fsaf', 12, 0.000, 'fsaf', '12', NULL, 'Ativo', 'fs', 'fasfas'),
(48, 'AAAAAAAA', '3123213', 'NAO AGUENTO MAIS', '123', 0x6f2d7175652d7061746f2d636f6d652d332e6a7067, 'ASFASFSA@FASFASFSA', '2023-07-18 00:00:00', 'SADSAD', 123, 0.000, 'SADSAD', '13231', '', 'ativo', 'DS', 'AD'),
(49, 'ultimoteste', NULL, 'ultimoteste', '123', NULL, 'ultimoteste@asasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(50, 'aaaaaaa', NULL, 'aaaaa', '123', NULL, 'aaaa@aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(51, 'fsafas', '2321321', 'aasfsafsa', '123', NULL, 'fasfsaf@fasfsaf', '2023-07-20 00:00:00', 'Rua da Primavera', 123, 0.000, 'Capoavinha', '07629374', NULL, NULL, 'SP', 'Mairiporã'),
(52, 'ASFFSA', '3421421421', 'FSAFSAF', '123123', NULL, 'SFFAS@FSAFSA', '2023-07-12 00:00:00', 'Rua da Primavera', 123, 0.000, 'Capoavinha', '07629374', NULL, NULL, 'SP', 'Mairiporã'),
(53, 'AAAAAA', '564.354.364-36', 'fsafsa', '21312', 0x6f2d7175652d7061746f2d636f6d652d332e6a7067, 'FSAFASF@FSAFSAFAS', '0000-00-00 00:00:00', '', 0, 0.000, '', '', '', '', '', ''),
(54, 'Jeffao da pica de ferro', '13141414141', 'JEFFPICUDO', '123456', 0x687164656661756c742e6a7067, 'asbafba@gmail.com', '2023-07-11 00:00:00', 'Rua Seis A', 80, 0.000, 'Parque Continental IV', '07124706', NULL, 'Ativo', 'SP', 'Guarulhos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `FK_ID_Usuario_Compra` (`id_usuario_compra`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `login_funcionario` (`login_funcionario`),
  ADD UNIQUE KEY `cpf_funcionario` (`cpf_funcionario`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `FK_ID_Categoria_Produto` (`id_categoria_produto`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cpf_usuario` (`cpf_usuario`),
  ADD UNIQUE KEY `login_usuario` (`login_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_ID_Usuario_Compra` FOREIGN KEY (`id_usuario_compra`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_ID_Categoria_Produto` FOREIGN KEY (`id_categoria_produto`) REFERENCES `categoria` (`id_categoria`);
--
-- Banco de dados: `aloalo`
--
CREATE DATABASE IF NOT EXISTS `aloalo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aloalo`;
--
-- Banco de dados: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Despejando dados para a tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"ajol\",\"table\":\"compra\"},{\"db\":\"ajol\",\"table\":\"usuario\"},{\"db\":\"ajol\",\"table\":\"funcionario\"},{\"db\":\"ajol\",\"table\":\"produto\"},{\"db\":\"teste\",\"table\":\"alo\"}]');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Despejando dados para a tabela `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ajol', 'usuario', '{\"CREATE_TIME\":\"2023-06-14 21:37:20\",\"col_order\":[0,1,2,3,4,5,8,6,7,9,10,11,12],\"col_visib\":[1,1,1,1,1,1,1,1,1,1,1,1,1]}', '2023-06-15 22:16:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Despejando dados para a tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-07-04 01:14:31', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"pt_BR\"}');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura para tabela `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Despejando dados para a tabela `pma__users`
--

INSERT INTO `pma__users` (`username`, `usergroup`) VALUES
('root', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Índices de tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Índices de tabela `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Índices de tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Índices de tabela `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Índices de tabela `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Índices de tabela `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Índices de tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Índices de tabela `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Índices de tabela `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Índices de tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Índices de tabela `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Índices de tabela `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Índices de tabela `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Índices de tabela `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Índices de tabela `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Índices de tabela `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Índices de tabela `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
