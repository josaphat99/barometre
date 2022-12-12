-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 09:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barometre`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`id`, `username`, `password`, `type`, `person_id`) VALUES
(1, 'paul', '0000', 'admin', 2),
(7, 'konie', '0000', 'agent', 14),
(8, 'kabulu', '0000', 'agent', 15);

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE `don` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `groupe_id` int(11) NOT NULL,
  `donneur_id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `produit_sanguin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `don`
--

INSERT INTO `don` (`id`, `quantite`, `date`, `groupe_id`, `donneur_id`, `type`, `produit_sanguin_id`) VALUES
(4, 500, '12-12-2022 19:42', 3, 11, NULL, 2),
(5, 400, '12-12-2022 20:49', 3, 11, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`id`, `name`) VALUES
(1, 'O+'),
(2, 'O-'),
(3, 'A+'),
(4, 'A-'),
(5, 'B+'),
(6, 'B-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `nomcomplet` varchar(200) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `date_naissence` varchar(100) NOT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `groupe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `nomcomplet`, `adresse`, `phone`, `email`, `date_naissence`, `genre`, `weight`, `type`, `groupe_id`) VALUES
(2, 'Paul Kyungu', 'Lubumbashi Makomeno', '0998765432', 'paul@gmail.com', '22-04-1980', NULL, NULL, NULL, NULL),
(11, 'Kyungu Daniel', 'Lubumbashi', '+260 772630674', '16kk112@esisalama.org', '1996-12-13', 'Male', 80, 'donneur', 3),
(12, 'Meddy Kazemba', 'Ndola', '+26098847493', 'meddy@gmail.com', '01-09-2022', 'm', NULL, 'beneficiaire', 1),
(13, 'Josaphat Kasongo', 'Lubumbashi', '+260965032149', '16kk112@esisalama.org', '2022-10-08', 'Male', 60, 'beneficiaire', 3),
(14, 'Maurice Konie', 'Lubumbashi', '0997766543', 'konie@gmail.com', '', 'Male', NULL, NULL, NULL),
(15, 'JeanLuc Kabulu', '32 Lumumba, Lubumbashi', '0967788332', 'kabulu@gmail.com', '', 'Male', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produit_sanguin`
--

CREATE TABLE `produit_sanguin` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `symbol` varchar(11) DEFAULT NULL,
  `duree` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit_sanguin`
--

INSERT INTO `produit_sanguin` (`id`, `type`, `symbol`, `duree`) VALUES
(1, 'Concentré de globules rouges', 'CGR', '42 jours'),
(2, 'Concentré de plaquettes', 'CP', '3-5 jours'),
(3, 'Le plasma', 'plasma', '12 mois');

-- --------------------------------------------------------

--
-- Table structure for table `programme_don`
--

CREATE TABLE `programme_don` (
  `id` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transfusion`
--

CREATE TABLE `transfusion` (
  `id` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `groupe_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `produit_sanguin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfusion`
--

INSERT INTO `transfusion` (`id`, `date`, `type`, `quantite`, `groupe_id`, `person_id`, `produit_sanguin_id`) VALUES
(3, '12-12-2022 19:46', NULL, 300, 3, 13, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_person_idx` (`person_id`);

--
-- Indexes for table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grpindx` (`groupe_id`),
  ADD KEY `prsindx` (`donneur_id`),
  ADD KEY `prdsng_id` (`produit_sanguin_id`);

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grp_idx` (`groupe_id`);

--
-- Indexes for table `produit_sanguin`
--
ALTER TABLE `produit_sanguin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme_don`
--
ALTER TABLE `programme_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prs_idx` (`person_id`);

--
-- Indexes for table `transfusion`
--
ALTER TABLE `transfusion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gp_idx` (`groupe_id`),
  ADD KEY `fk_ps_idx` (`person_id`),
  ADD KEY `prdfk` (`produit_sanguin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `don`
--
ALTER TABLE `don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produit_sanguin`
--
ALTER TABLE `produit_sanguin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programme_don`
--
ALTER TABLE `programme_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfusion`
--
ALTER TABLE `transfusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `fk_person` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `grpfk` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prdsgnfk` FOREIGN KEY (`produit_sanguin_id`) REFERENCES `produit_sanguin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prsfk` FOREIGN KEY (`donneur_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_grp` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programme_don`
--
ALTER TABLE `programme_don`
  ADD CONSTRAINT `fk_prs` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transfusion`
--
ALTER TABLE `transfusion`
  ADD CONSTRAINT `fk_gp` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prd` FOREIGN KEY (`produit_sanguin_id`) REFERENCES `produit_sanguin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ps` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
