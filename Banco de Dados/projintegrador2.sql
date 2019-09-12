-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2019 às 19:41
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projintegrador2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(11) NOT NULL,
  `loginAdmin` varchar(30) DEFAULT NULL,
  `senhaAdmin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `loginAdmin`, `senhaAdmin`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `idDisc` int(11) NOT NULL,
  `nomeDisc` varchar(40) DEFAULT NULL,
  `DiaDisc` varchar(12) DEFAULT NULL,
  `HorarioDisc` varchar(10) DEFAULT NULL,
  `cursoDisc` varchar(45) DEFAULT NULL,
  `fk_Professor_idProf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `laboratorio`
--

CREATE TABLE `laboratorio` (
  `idLab` int(11) NOT NULL,
  `nomeLab` varchar(30) DEFAULT NULL,
  `qtdcompLab` varchar(3) NOT NULL,
  `codLab` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `laboratorio`
--

INSERT INTO `laboratorio` (`idLab`, `nomeLab`, `qtdcompLab`, `codLab`) VALUES
(12, 'Lab Redes', '11', 'Lab Re'),
(13, 'Lab Redes', '11', 'Lab Re'),
(14, 'Lab Redes', '11', 'lab21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idProf` int(11) NOT NULL,
  `cursoProf` varchar(100) DEFAULT NULL,
  `loginProf` varchar(20) DEFAULT NULL,
  `senhaProf` varchar(16) DEFAULT NULL,
  `celProf` varchar(15) DEFAULT NULL,
  `emailProf` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idProf`, `cursoProf`, `loginProf`, `senhaProf`, `celProf`, `emailProf`) VALUES
(1, 'Sistemas', 'Jami', '123', '(88)998998877', 'jamires@ifce.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `dataRes` varchar(10) DEFAULT NULL,
  `horaRes` varchar(10) DEFAULT NULL,
  `fk_Professor_idProf` int(11) DEFAULT NULL,
  `fk_Laboratorio_idLab` int(11) DEFAULT NULL,
  `fk_Administrador_idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`idDisc`),
  ADD KEY `FK_Disciplina_2` (`fk_Professor_idProf`);

--
-- Indexes for table `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`idLab`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idProf`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD KEY `FK_Reserva_1` (`fk_Professor_idProf`),
  ADD KEY `FK_Reserva_2` (`fk_Laboratorio_idLab`),
  ADD KEY `FK_Reserva_3` (`fk_Administrador_idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `idDisc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `idLab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `idProf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `FK_Disciplina_2` FOREIGN KEY (`fk_Professor_idProf`) REFERENCES `professor` (`idProf`);

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_Reserva_1` FOREIGN KEY (`fk_Professor_idProf`) REFERENCES `professor` (`idProf`),
  ADD CONSTRAINT `FK_Reserva_2` FOREIGN KEY (`fk_Laboratorio_idLab`) REFERENCES `laboratorio` (`idLab`),
  ADD CONSTRAINT `FK_Reserva_3` FOREIGN KEY (`fk_Administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
