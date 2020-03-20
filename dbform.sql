-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Mar-2020 às 20:59
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbform`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `origin` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `destination` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL,
  `travelers` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `informations`
--

INSERT INTO `informations` (`name`, `phone`, `origin`, `destination`, `datefrom`, `dateto`, `travelers`) VALUES
('Roberta Mendes', 2147483647, 'Itajubá', 'Rio', '2020-03-20', '2020-03-31', 1),
('Larissa Mendes', 2147483647, 'Itajubá', 'França', '2020-03-20', '2020-03-28', 2),
('Leize Mendes', 2147483647, 'Itajubá', 'Bahia', '2020-03-20', '2020-03-25', 1),
('Roberta Mendes', 0, '', '', '0000-00-00', '0000-00-00', 0),
('Roberta Mendes', 0, '', '', '0000-00-00', '0000-00-00', 0),
('', 0, '', '', '0000-00-00', '0000-00-00', 0),
('', 0, '', '', '0000-00-00', '0000-00-00', 0),
('Juliana ', 984984555, 'Rio de Janeiro', 'Itajubá', '2020-03-14', '2020-03-31', 1),
('Juliana ', 984984555, 'Rio de Janeiro', 'Itajubá', '2020-03-14', '2020-03-31', 1),
('yudguydgasu', 312312321, 'asuydgasu', 'sudagasuy', '0000-00-00', '0000-00-00', 1),
('asdas', 0, '', '', '0000-00-00', '0000-00-00', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
