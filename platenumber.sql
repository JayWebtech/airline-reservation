-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2022 at 04:14 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

--
-- Database: `platenumber`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

DROP TABLE IF EXISTS `backend`;
CREATE TABLE IF NOT EXISTS `backend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`id`, `uname`, `pword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `plate`
--

DROP TABLE IF EXISTS `plate`;
CREATE TABLE IF NOT EXISTS `plate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `slogan` varchar(200) NOT NULL,
  `driver` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `pnumber` varchar(200) NOT NULL,
  `gsm` varchar(200) NOT NULL,
  `dateregister` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `plate`
--

INSERT INTO `plate` (`id`, `name`, `state`, `slogan`, `driver`, `code`, `pnumber`, `gsm`, `dateregister`) VALUES
(2, 'Jethro Adamu', 'KADUNA STATE', 'Centre of Learning', 'KAD-457', 'WJMYOF', 'GHC-123ZY', '09066691043', '0000-00-00 00:00:00.000000'),
(3, 'Gaius Jaba', 'ENUGU STATE', 'The Coal City', 'ENG-457', 'ZRD4PS', 'FG-324KN', '09084347342', '2022-05-08 19:07:03.053993'),
(5, 'Smith Japh', 'KATSINA STATE', 'Centre of Commerce', 'KAD-457', 'T12LCT', 'KTE-877DT', '3169742594', '2022-05-09 01:15:01.933971'),
(6, 'Abdulazeez Sani', 'KATSINA STATE', 'Centre of Learning', 'KAN-457', 'JAMN66', 'IGB-7837', '09086737473', '2022-05-09 08:41:57.172091');

-- --------------------------------------------------------

--
-- Table structure for table `verified`
--

DROP TABLE IF EXISTS `verified`;
CREATE TABLE IF NOT EXISTS `verified` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_sent` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `verified`
--

INSERT INTO `verified` (`id`, `code`, `status`, `date_sent`) VALUES
(1, 'MES2LQ', 'true', '2022-05-09 01:06:04.282432'),
(2, 'MES2LR', 'true', '2022-05-09 01:06:04.282432'),
(3, 'MES2LW', 'false', '2022-05-09 01:06:04.282432'),
(4, 'MES2LB', 'true', '2022-05-09 01:06:04.282432'),
(5, 'MES2LM', 'true', '2022-05-09 01:06:04.282432'),
(6, 'MES2LK', 'false', '2022-05-09 01:06:04.282432'),
(7, 'JAMN66', 'true', '2022-05-09 08:43:44.546854'),
(8, 'MES2LQ', 'false', '2022-05-09 08:44:49.511607');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
