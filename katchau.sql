-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Ago-2022 às 17:19
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
-- Banco de dados: `katchau`
--
CREATE DATABASE IF NOT EXISTS `katchau` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `katchau`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

DROP TABLE IF EXISTS `aluguel`;
CREATE TABLE IF NOT EXISTS `aluguel` (
  `id_aluguel` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_carro` int(11) NOT NULL,
  `data` date NOT NULL,
  `dataentrega` date NOT NULL,
  `valor_aluguel` float NOT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`id_aluguel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

DROP TABLE IF EXISTS `carros`;
CREATE TABLE IF NOT EXISTS `carros` (
  `id_carro` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `placa` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `diaria` float NOT NULL,
  `disponibilidade` bit(1) NOT NULL,
  PRIMARY KEY (`id_carro`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id_carro`, `modelo`, `marca`, `placa`, `diaria`, `disponibilidade`) VALUES
(1, 'Uno', 'Fiat', 'SUS-2021', 1000, b'1'),
(2, 'Dos', 'Fiat', 'SUS-2022', 2000, b'1'),
(3, 'Tres', 'Fiat', 'SUS-2023', 3000, b'1'),
(4, 'Quatres', 'Fiat', 'SUS-2024', 4000, b'1'),
(5, 'Cinques', 'Fiat', 'SUS-2025', 5000, b'1'),
(6, 'Porche', 'Não SEI', 'SUS-2020', 20000, b'1'),
(7, 'Rápido pra porra', 'Ferrari', 'SUS-2019', 20000, b'1'),
(8, 'Carro CAXA', 'Tesla', 'SUS-2019', 3, b'1'),
(9, 'Fusca', 'Volkswagen', 'SUS-1500', 0.5, b'1'),
(10, 'T-Cross', 'Volkswagen', 'SUS-2017', 100, b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `endereco` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `endereco`, `email`) VALUES
(1, 'João A', 'Rua Sus 10', 'sus1@gmail.com'),
(2, 'Daniel F', 'Rua Sus 9', 'sus2@gmail.com'),
(3, 'Pedro A', 'Rua Sus 8', 'sus3@gmail.com'),
(4, 'Pedro V', 'Rua Sus 7', 'sus4@gmail.com'),
(5, 'Thay C', 'Rua Sus 6', 'sus5@gmail.com'),
(6, 'Bea M', 'Rua Sus 5', 'sus6@gmail.com'),
(7, 'Laura P', 'Rua Sus 4', 'sus7@gmail.com'),
(8, 'Romulo G', 'Rua Sus 3', 'sus8@gmail.com'),
(9, 'Lucas N', 'Rua Sus 2', 'sus9@gmail.com'),
(10, 'Kaique G', 'Rua Sus 1', 'sus10@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
