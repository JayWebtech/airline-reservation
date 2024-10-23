-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2024 at 09:21 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platenumber`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

DROP TABLE IF EXISTS `backend`;
CREATE TABLE IF NOT EXISTS `backend` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`id`, `uname`, `pword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `ffrom` varchar(2000) NOT NULL,
  `tto` varchar(2000) NOT NULL,
  `fdate` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `seats` varchar(2000) NOT NULL,
  `flight_id` varchar(2000) NOT NULL,
  `otherguests` varchar(5000) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gsm` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `booking_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `re_price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fname`, `sname`, `state`, `ffrom`, `tto`, `fdate`, `seats`, `flight_id`, `otherguests`, `amount`, `status`, `gsm`, `email`, `booking_date`, `re_price`) VALUES
(1, 'Adamu', 'Jethro', 'Kaduna', 'Kano', 'Gombe', '2024-08-24', '12, 11, 20', '1', 'Samuel Jackson, Emmanuel Sam, Sam Jack', '123000', '', '', '', '2024-08-10 20:21:05.762624', ''),
(2, 'Samuel', 'Jafar', 'Lagos', 'Kano', 'Gombe', '2024-08-24', '1,4', '1', 'Samuel Jackson, Emmanuel Sam', '89000', '', '', '', '2024-08-10 20:21:05.762624', ''),
(11, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-08-24', '14', '1', '', '45000', '', '', '', '2024-08-10 20:21:05.762624', ''),
(9, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-08-24', '8,9,10', '1', 'Airspeed Ambassador, Sameul DInnack', '135000', '', '', '', '2024-08-10 20:21:05.762624', ''),
(10, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-08-24', '5', '1', '', '45000', '', '', '', '2024-08-10 20:21:05.762624', ''),
(12, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-08-24', '15', '1', '', '45000', '', '', '', '2024-08-10 20:21:05.762624', ''),
(13, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-08-24', '2,3', '1', 'Boeing Stratoliner', '90000', 'PAID', '0804333242', 'test@gmail.com', '2024-08-10 20:32:04.420999', ''),
(14, 'Farman', 'Goliath', 'Abia', 'Abuja', 'Kano', '2024-08-30', '1,8,16', '4', 'Boeing Stratoliner, Airspeed Ambassador', '240000', 'PAID', '0804333242', 'test@gmail.com', '2024-08-10 21:02:54.286148', ''),
(15, 'Farman', 'Goliath', 'Abia', 'Abuja', 'Kano', '2024-08-30', '10,12', '4', 'Boeing Stratoliner', '160000', 'PAID', '0804333242', 'test@gmail.com', '2024-08-10 21:03:52.312795', ''),
(16, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-10-23', '16,17,22,6', '1', 'Boeing Stratoliner, Airspeed Ambassador, Airspeed Ambassador', '180000', '', '0804333242', 'test@gmail.com', '2024-10-23 21:06:25.263080', '-180000'),
(17, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-10-23', '21,23,18,13', '1', 'Boeing Stratoliner, Airspeed Ambassador, Airspeed Ambassador', '180000', '', '0804333242', 'test@gmail.com', '2024-10-23 21:13:11.485776', ''),
(18, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-10-23', '39,41,34,27,26', '1', 'Boeing Stratoliner, Airspeed Ambassador, Airspeed Ambassador, Boeing Stratoliner', '225000', '', '0804333242', 'test@gmail.com', '2024-10-23 21:14:53.831436', '123000'),
(19, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-10-23', '28,29,30,36,33', '1', 'Boeing Stratoliner, Airspeed Ambassador, Airspeed Ambassador, Boeing Stratoliner', '225000', '', '0804333242', 'test@gmail.com', '2024-10-23 21:20:04.291118', '123000'),
(20, 'Farman', 'Goliath', 'Abia', 'Kano', 'Gombe', '2024-10-23', '31,32,38,43,44', '1', 'Boeing Stratoliner, Airspeed Ambassador, Airspeed Ambassador, Boeing Stratoliner', '225000', '', '0804333242', 'test@gmail.com', '2024-10-23 21:21:14.779204', '225000');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `id` int NOT NULL AUTO_INCREMENT,
  `plane` varchar(5000) NOT NULL,
  `fdate` varchar(500) NOT NULL,
  `ftime` varchar(500) NOT NULL,
  `ffrom` varchar(500) NOT NULL,
  `fto` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `plane`, `fdate`, `ftime`, `ffrom`, `fto`, `amount`) VALUES
(1, 'Piper PA-31 Navajo CV', '2024-10-23', '15:50', 'Kano', 'Gombe', '45000'),
(2, 'De Havilland Canada Dash 8', '2024-07-30', '19:52', 'Kano', 'Lagos', '45600'),
(3, 'Airspeed Ambassador', '2024-07-30', '10:50', 'Birnin Kebbi', 'Maiduguri', '122000'),
(4, 'Da vinci plane', '2024-08-30', '12:01', 'Abuja', 'Kano', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `planes`
--

DROP TABLE IF EXISTS `planes`;
CREATE TABLE IF NOT EXISTS `planes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `seats` varchar(5000) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `planes`
--

INSERT INTO `planes` (`id`, `seats`, `name`, `status`) VALUES
(2, '50', 'Airspeed Ambassador', 'true'),
(3, '25', 'Farman F.60 Goliath', 'false'),
(5, '56', 'De Havilland Canada Dash 8', 'true'),
(6, '50', 'Piper PA-31 Navajo CV', 'true'),
(8, '50', 'Da vinci plane', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `plate`
--

DROP TABLE IF EXISTS `plate`;
CREATE TABLE IF NOT EXISTS `plate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `slogan` varchar(200) NOT NULL,
  `driver` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `pnumber` varchar(200) NOT NULL,
  `gsm` varchar(200) NOT NULL,
  `dateregister` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_sent` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
