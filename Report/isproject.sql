-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 12:52 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Delete_From_apps` (IN `Uname` VARCHAR(255))  NO SQL
BEGIN
DELETE FROM apps where name=Uname;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Delete_From_Art` (IN `Uname` VARCHAR(255))  NO SQL
BEGIN
DELETE FROM art where name=Uname;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_ART` ()  NO SQL
Select * FROM art$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Update_From_Art` (IN `uBio` TEXT, IN `uName` VARCHAR(255), IN `uSocial` TEXT, IN `uCity` VARCHAR(500), IN `uSkill` VARCHAR(255))  NO SQL
BEGIN
UPDATE art
SET city = Ucity , social = uSocial, Bio= uBio , skill= uSkill
WHERE name=Uname;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `survey` varchar(255) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`name`, `email`, `survey`, `subject`) VALUES
('Ted', 'admin@admin.com', 'PHONE', 'dol'),
('Test', 'Test@gmail.com', 'PHONE', 'Test of Test'),
('Test', 'Test@gmail.com', 'PHONE', 'Test of Test');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `Name` varchar(255) NOT NULL,
  `City` varchar(500) NOT NULL,
  `Skill` varchar(255) NOT NULL,
  `Social` text NOT NULL,
  `Bio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`Name`, `City`, `Skill`, `Social`, `Bio`) VALUES
('TayReal', 'Richmond,Va', 'rapper', 'twitter.com/TayReal', 'Find out'),
('Quan2Nice', 'Baltimore,MD', 'Rapper', 'Instagram.com/Quan2Nice', 'Rap whats real'),
('MethodT', 'Greensbor,NC', 'Producer', 'MethodT.com', 'Get the Methods'),
('Lowkey', 'Pg County,MD', 'producer', 'twitter.com/LowkeyMD', 'Shadow Music'),
('BigAction', 'High Point,NC', 'Photographer ', 'instagram.com/BigActionFlicks', 'I love to find a way to capture the moment '),
('TinyFire', 'Miami, FL', 'Rapper/Singer/Producer', 'twitter.com/tinyFire\r\nFacebook.com/tinyFire400\r\n', 'Streets Realest'),
('TinyFire', 'Miami, FL', 'Rapper/Singer/Producer', 'twitter.com/tinyFire\r\nFacebook.com/tinyFire400\r\n', 'Streets Realest'),
('Keys', 'Atlanta,GA', 'Singer', 'Youtube.com/KeySings\r\nTwitter.com/Keysings\r\nInstagram.com/KeysDaSinger', 'Passion,Power,Love, real music maker\r\n'),
('jojo', 'Houston,TX', 'Videography ', 'twitter.com/ShotbyJoJo', 'Better Picture Better Moment'),
('Yan', 'Washington,DC', 'Singer/Clothing Designer', 'YanEx.com\r\nTwitter.com/YanEXshow\r\nYoutube.com/YanEXshow\r\n\r\n', 'Southside authentic '),
('GGGraphics', 'Brooklyn,NY,NY', 'Graphic Designer', 'GGGraphic.com\r\n', 'Hit us up for Album covers,headers,bannersbackground,and more'),
('Electric', 'Detroit,MI', 'Model', 'ElectricVision.com', 'Euphoric Electric Expensive'),
('Kel', 'DC', 'Singer', 'websit.com', 'who are you');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
