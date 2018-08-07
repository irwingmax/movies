-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 02-Abr-2018 às 04:12
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movies`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_movies`
--

CREATE TABLE `tb_movies` (
  `movieID` varchar(99) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Director` varchar(20) NOT NULL,
  `Actor` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_movies`
--

INSERT INTO `tb_movies` (`movieID`, `Title`, `Director`, `Actor`) VALUES
('0227630439c507688c41c655209a1ee6', 'Dolor even', 'Ipsum ut a', 'Hic ration'),
('3a4814fd6d73114f6157bcff5e2bae08', 'Adipisicin', 'Harum id c', 'Ad dolor a'),
('4bbc67d5b14a682f7c676568203582ee', 'Irwing', 'Max ', 'Oliveira'),
('9ac1aaf4275c991bacc5a171db063e19', 'Consectetu', 'Voluptas m', 'Adipisicin'),
('9cbfc33589f8c672b275a025b12b5c86', 'Porro in p', 'Sit labori sai', 'Sed cumque'),
('feab3ddd114c0160829ed5b2686e92fe', 'Ipsam pers', 'Laboris es', 'Cum sint ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_movies`
--
ALTER TABLE `tb_movies`
  ADD PRIMARY KEY (`movieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
