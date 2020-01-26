-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Jan-2020 às 12:04
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalhoprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

DROP TABLE IF EXISTS `contrato`;
CREATE TABLE IF NOT EXISTS `contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilizador` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_regulacao` int(11) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT 'Contrato padrão',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_contrato`),
  KEY `id_utilizador` (`id_utilizador`),
  KEY `id_empresa` (`id_empresa`),
  KEY `id_regulacao` (`id_regulacao`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_utilizador`, `id_empresa`, `id_regulacao`, `descricao`, `created`, `modified`) VALUES
(2, 4, 1, 1, 'Contrato op', NULL, '2020-01-08 21:24:50'),
(4, 1, 2, 1, 'Contrato padrão', '2020-01-08 21:23:09', '2020-01-10 09:08:27'),
(5, 5, 1, 1, 'Contrato padrão', '2020-01-08 21:23:31', '2020-01-08 21:23:31'),
(6, 3, 1, 1, 'Contrato padrão', '2020-01-09 11:23:02', '2020-01-09 11:23:02'),
(8, 1, 2, 1, 'Contrato padrão', '2020-01-09 17:17:56', '2020-01-09 17:17:56'),
(9, 5, 2, NULL, 'Contrato padrão', '2020-01-23 14:41:46', '2020-01-23 14:41:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `web` varchar(150) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `web`, `email`, `pass`) VALUES
(1, 'MagoCorp', 'http:\\\\www.mago.pt', 'ceo@mago.pt', 'qwerty'),
(2, 'Pentium Corp', 'pentium.com', 'mdasd@das.ds', 'qwerty');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` longtext NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilizador` (`id_utilizador`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `path`, `id_utilizador`) VALUES
(33, 'f0e5e872-875a-4597-b2cc-99c1dc83334f-True.jpg', 3),
(34, 'e6faeef9-3790-4616-a83b-08ddbd2e217c-DERM16V2.png', 5),
(38, '17da1a51-e21a-4bbd-8025-fa5c748cd2eb-WallpaerTM.jpg', 5),
(39, 'd61e2c59-2e43-4c58-a6e9-4aab764d6ad1-Peach_Marble_700x.jpg', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `regulacao`
--

DROP TABLE IF EXISTS `regulacao`;
CREATE TABLE IF NOT EXISTS `regulacao` (
  `id_regulacao` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(90) NOT NULL,
  `local_efetivo` varchar(250) NOT NULL,
  `regulamento` varchar(250) NOT NULL,
  PRIMARY KEY (`id_regulacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `regulacao`
--

INSERT INTO `regulacao` (`id_regulacao`, `designacao`, `local_efetivo`, `regulamento`) VALUES
(1, 'Regulamento de Proteção de dados', 'União Europeia', 'http://www.pgdlisboa.pt/leis/lei_mostra_articulado.php?nid=2961&tabela=leis&so_miolo='),
(2, 'GDPR EU/US', 'Europa | EUA', 'https://gdpr.eu/compliance-checklist-us-companies/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `idade` int(2) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `profilepicture` longtext NOT NULL,
  PRIMARY KEY (`id_utilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `nome`, `idade`, `email`, `pass`, `profilepicture`) VALUES
(1, 'Duarte Cruz', 17, 'duartemcruz@hotmail.com', 'qwerty', 'default.gif'),
(3, 'Zé das Coves', 32, 'mago@compal.com', 'qwerty', 'default.gif'),
(4, 'MagoPTzão', 10, 'mago@boss.pt', 'qwerty', 'default.gif'),
(5, 'agfhf', 17, 'hfdhds@basaf.vb', 'qwerty', 'default.gif'),
(7, 'Zé dos Captcha', 17, 'fsfa@das.pt', '17', 'default.gif'),
(8, 'fsafa', 17, 'sfaf@fsaf.fg', 'qwerty', 'default.gif'),
(11, 'Batata', 19, 'batata@pure.pt', 'qwerty', 'default.gif'),
(12, 'fasf', 17, 'fsa@gs.vb', 'qwerty', 'default.gif'),
(14, 'faf', 17, 'fdfa@fdsa.sd', 'qwerty', 'default.gif'),
(16, 'fsaf2@fa.fg', 17, 'qwerty@sfds.fs', 'qwerty', 'default.gif'),
(18, 'dsada', 17, 'dasda@fasf.cv', 'qwerty', 'default.gif'),
(19, 'af', 15, 'fdfa@fdsa.sdw', 'q', 'default.gif'),
(20, 'fasf', 17, 'fasf@ff.fs', 'qw', 'default.gif'),
(21, 'as', 12, 'asd@gsd.bn', 'q', 'default.gif'),
(22, 'a', 12, 'asd@fsf.cv', 'q', 'default.gif'),
(23, 'as', 12, 'as@w.m', 'qwerty', 'default.gif'),
(24, 'q', 15, 'we@sd.fg', 'qwerty', 'default.gif'),
(25, 'dsad', 11, 'das@2ds.f', 'q', 'default.gif'),
(26, 'dsad', 11, 'das@2ds.f', 'q', 'default.gif'),
(27, 'das', 11, 'dsad@fg.l', 'q', 'default.gif'),
(28, 'dsad', 11, 'dasd@fd.v', 'q', 'default.gif'),
(29, 'dsad', 11, 'dasd@fd.v', 'q', 'default.gif'),
(30, 'das', 11, 'dasd@ds.f', '1', 'default.gif'),
(31, 'das', 11, 'da@ds.f', '12', 'default.gif'),
(32, 'dasd', 11, 'dad@sfa.xc', 'q', 'default.gif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `webgrafia`
--

DROP TABLE IF EXISTS `webgrafia`;
CREATE TABLE IF NOT EXISTS `webgrafia` (
  `id_webgrafia` int(11) NOT NULL AUTO_INCREMENT,
  `fonte` longtext NOT NULL,
  `site` text NOT NULL,
  PRIMARY KEY (`id_webgrafia`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `webgrafia`
--

INSERT INTO `webgrafia` (`id_webgrafia`, `fonte`, `site`) VALUES
(4, 'https://www.php.net/manual/pt_BR/function.date.php', 'PHP manual'),
(5, 'https://github.com/ctlabvn/Recaptcha', 'Github - Recaptcha'),
(6, 'https://www.youtube.com/watch?v=EJ9JaCcepO4', 'Youtube - Internacionalização (i18n)'),
(7, 'https://www.youtube.com/watch?v=yrsGHEZbjnQ', 'Youtube - Internacionalização');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizador` (`id_utilizador`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `contrato_ibfk_3` FOREIGN KEY (`id_regulacao`) REFERENCES `regulacao` (`id_regulacao`);

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizador` (`id_utilizador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
