-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 01:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carcompareug`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_blog`
--

CREATE TABLE `car_blog` (
  `id` int(11) NOT NULL,
  `featured_img` char(200) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shortdescription` text DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_blog`
--

INSERT INTO `car_blog` (`id`, `featured_img`, `title`, `shortdescription`, `description`, `created_by`, `created_date`, `status`) VALUES
(7, 'blog-30934649-1597771563.jpg', 'Swift Sell', NULL, '<h2 style=\"font-style:italic\">ZXX</h2>\r\n', 1, '2020-08-18 00:00:00', 1),
(13, 'blog-357392512-1597771527.jpg', 'car testing1', '<p><strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw</p>\r\n', '<p><strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw</p>\r\n\r\n<p><strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw</p>\r\n\r\n<p><strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw</p>\r\n\r\n<p><strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw<strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw</p>\r\n\r\n<p><strong>Lorem11111 Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software<br />\r\nlike Aldus PageMaker including versions of Lorem Ipsumw</p>\r\n', 1, '2020-08-18 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_brandmodels`
--

CREATE TABLE `car_brandmodels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `parent` varchar(255) NOT NULL DEFAULT '0',
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_brandmodels`
--

INSERT INTO `car_brandmodels` (`id`, `name`, `type`, `category_id`, `parent`, `status`) VALUES
(1, 'Alfa Romeo', 'Brand', NULL, '0', 1),
(2, 'Aston Martin', 'Brand', NULL, '0', 1),
(3, 'Audi', 'Brand', NULL, '0', 1),
(4, 'Bentley', 'Brand', NULL, '0', 1),
(5, 'Buick', 'Brand', NULL, '0', 1),
(6, 'Cadillac', 'Brand', NULL, '0', 1),
(7, 'Chevrolet', 'Brand', NULL, '0', 1),
(8, 'Chrysler', 'Brand', NULL, '0', 1),
(9, 'BMW', 'Brand', NULL, '0', 1),
(10, 'Daihatsu', 'Brand', NULL, '0', 1),
(11, 'Dodge', 'Brand', NULL, '0', 1),
(12, 'Eagle', 'Brand', NULL, '0', 1),
(13, 'Ferrari', 'Brand', NULL, '0', 1),
(14, 'Fiat', 'Brand', NULL, '0', 1),
(15, 'Fisker', 'Brand', NULL, '0', 1),
(16, 'Ford', 'Brand', NULL, '0', 1),
(17, 'Freightliner', 'Brand', NULL, '0', 1),
(18, 'GMC', 'Brand', NULL, '0', 1),
(20, 'Geo', 'Brand', NULL, '0', 1),
(21, 'Honda', 'Brand', NULL, '0', 1),
(22, 'Hummer', 'Brand', NULL, '0', 1),
(23, 'Hyundai', 'Brand', NULL, '0', 1),
(24, 'Infinity', 'Brand', NULL, '0', 1),
(25, 'Isuzu', 'Brand', NULL, '0', 1),
(26, 'Jaguar', 'Brand', NULL, '0', 1),
(27, 'Jeep', 'Brand', NULL, '0', 1),
(28, 'Kia', 'Brand', NULL, '0', 1),
(29, 'Lamborghini', 'Brand', NULL, '0', 1),
(30, 'Land Rover', 'Brand', NULL, '0', 1),
(31, 'Lexus', 'Brand', NULL, '0', 1),
(32, 'Lincoln', 'Brand', NULL, '0', 1),
(33, 'Lotus', 'Brand', NULL, '0', 1),
(34, 'MAZDA', 'Brand', NULL, '0', 1),
(35, 'Maserati', 'Brand', NULL, '0', 1),
(36, 'Maybach', 'Brand', NULL, '0', 1),
(37, 'McLaren', 'Brand', NULL, '0', 1),
(38, 'Mercedes Benz', 'Brand', NULL, '0', 1),
(39, 'Mercury', 'Brand', NULL, '0', 1),
(40, 'Mini', 'Brand', NULL, '0', 1),
(41, 'Mitsubishi', 'Brand', NULL, '0', 1),
(42, 'Nissan', 'Brand', NULL, '0', 1),
(43, 'Oldsmobile', 'Brand', NULL, '0', 1),
(44, 'Panoz', 'Brand', NULL, '0', 1),
(45, 'Plymouth', 'Brand', NULL, '0', 1),
(46, 'Pontiac', 'Brand', NULL, '0', 1),
(47, 'Porsche', 'Brand', NULL, '0', 1),
(48, 'Ram', 'Brand', NULL, '0', 1),
(50, 'Saab', 'Brand', NULL, '0', 1),
(51, 'Saturn', 'Brand', NULL, '0', 1),
(52, 'Smart', 'Brand', NULL, '0', 1),
(53, 'Subaru', 'Brand', NULL, '0', 1),
(54, 'Suzuki', 'Brand', NULL, '0', 1),
(55, 'Tesla', 'Brand', NULL, '0', 1),
(56, 'Toyota', 'Brand', NULL, '0', 1),
(57, 'Volkswagen', 'Brand', NULL, '0', 1),
(58, 'Volvo', 'Brand', NULL, '0', 1),
(62, 'Stelvio', 'Model', '7', '1', 1),
(68, '4C', 'Model', '10', '1', 1),
(74, 'Giulia', 'Model', '5', '1', 1),
(75, '164', 'Model', '5', '1', 1),
(77, '4C Spider', 'Model', '9', '1', 1),
(78, 'Spider', 'Model', '9', '1', 1),
(253, 'DB11', 'Model', '10', '2', 1),
(272, 'Rapide S', 'Model', '5', '2', 1),
(279, 'Rapide', 'Model', '5', '2', 1),
(316, 'RS 3', 'Model', '5', '3', 1),
(320, 'e-tron', 'Model', '7', '3', 1),
(329, 'Q8', 'Model', '7', '3', 1),
(344, 'A4 allroad', 'Model', '11', '3', 1),
(349, 'A3 Sportback e-tron', 'Model', '11', '3', 1),
(372, 'Q3', 'Model', '7', '3', 1),
(386, 'S3', 'Model', '5', '3', 1),
(401, 'RS 7', 'Model', '5', '3', 1),
(416, 'SQ5', 'Model', '7', '3', 1),
(424, 'S7', 'Model', '5', '3', 1),
(454, 'A7', 'Model', '5', '3', 1),
(476, 'Q5', 'Model', '7', '3', 1),
(495, 'Q7', 'Model', '7', '3', 1),
(528, 'RS 6', 'Model', '5', '3', 1),
(535, 'S8', 'Model', '5', '3', 1),
(549, 'allroad', 'Model', '11', '3', 1),
(559, 'A8', 'Model', '5', '3', 1),
(570, '80', 'Model', '5', '3', 1),
(575, '90', 'Model', '5', '3', 1),
(578, 'Quattro', 'Model', '5', '3', 1),
(593, 'X2', 'Model', '7', '9', 1),
(623, 'X7', 'Model', '7', '9', 1),
(644, 'M2', 'Model', '10', '9', 1),
(680, 'X4', 'Model', '7', '9', 1),
(688, 'i3', 'Model', '1', '9', 1),
(716, 'X1', 'Model', '7', '9', 1),
(755, 'X6 M', 'Model', '7', '9', 1),
(758, 'X5 M', 'Model', '7', '9', 1),
(776, 'X6', 'Model', '7', '9', 1),
(796, 'Alpina B7', 'Model', '5', '9', 1),
(819, 'X3', 'Model', '7', '9', 1),
(856, 'X5', 'Model', '7', '9', 1),
(857, 'Z8', 'Model', '9', '9', 1),
(890, '7 Series', 'Model', '5', '9', 1),
(891, 'M5', 'Model', '5', '9', 1),
(895, 'Bentayga', 'Model', '7', '4', 1),
(917, 'Brooklands', 'Model', '10', '4', 1),
(918, 'Flying Spur', 'Model', '5', '4', 1),
(919, 'Azure T', 'Model', '9', '4', 1),
(922, 'Mulsanne', 'Model', '5', '4', 1),
(930, 'Arnage', 'Model', '5', '4', 1),
(931, 'Azure', 'Model', '9', '4', 1),
(959, 'Regal TourX', 'Model', '11', '5', 1),
(961, 'Envision', 'Model', '7', '5', 1),
(966, 'Regal Sportback', 'Model', '5', '5', 1),
(1000, 'Encore', 'Model', '7', '5', 1),
(1009, 'Rainier', 'Model', '7', '5', 1),
(1016, 'Cascada', 'Model', '9', '5', 1),
(1022, 'Enclave', 'Model', '7', '5', 1),
(1023, 'Terraza', 'Model', '3', '5', 1),
(1026, 'Lucerne', 'Model', '5', '5', 1),
(1028, 'LaCrosse', 'Model', '5', '5', 1),
(1029, 'Rendezvous', 'Model', '7', '5', 1),
(1033, 'Verano', 'Model', '5', '5', 1),
(1078, 'Park Avenue', 'Model', '5', '5', 1),
(1080, 'Riviera', 'Model', '10', '5', 1),
(1085, 'LeSabre', 'Model', '5', '5', 1),
(1106, 'XT6', 'Model', '7', '6', 1),
(1123, 'CT6', 'Model', '5', '6', 1),
(1133, 'XT4', 'Model', '7', '6', 1),
(1134, 'CTS-V', 'Model', '5', '6', 1),
(1135, 'XT5', 'Model', '7', '6', 1),
(1138, 'CT5', 'Model', '5', '6', 1),
(1160, 'XTS', 'Model', '5', '6', 1),
(1161, 'CT6-V', 'Model', '5', '6', 1),
(1176, 'ELR', 'Model', '10', '6', 1),
(1196, 'DTS', 'Model', '5', '6', 1),
(1208, 'STS', 'Model', '5', '6', 1),
(1216, 'XLR', 'Model', '9', '6', 1),
(1226, 'Escalade ESV', 'Model', '7', '6', 1),
(1227, 'Escalade EXT', 'Model', '14', '6', 1),
(1228, 'SRX', 'Model', '7', '6', 1),
(1246, 'Catera', 'Model', '5', '6', 1),
(1254, 'Escalade', 'Model', '7', '6', 1),
(1269, 'Allante', 'Model', '9', '6', 1),
(1271, 'Eldorado', 'Model', '10', '6', 1),
(1274, 'Brougham', 'Model', '5', '6', 1),
(1275, 'Seville', 'Model', '5', '6', 1),
(1277, 'Sixty Special', 'Model', '5', '6', 1),
(1287, 'Silverado 1500 LD Double Cab', 'Model', '14', '7', 1),
(1340, 'Bolt EV', 'Model', '1', '7', 1),
(1394, 'Cruze Limited', 'Model', '5', '7', 1),
(1405, 'Malibu Limited', 'Model', '5', '7', 1),
(1416, 'Suburban 3500HD', 'Model', '7', '7', 1),
(1428, 'City Express', 'Model', '3', '7', 1),
(1444, 'Silverado 3500 HD Double Cab', 'Model', '14', '7', 1),
(1447, 'Silverado 2500 HD Double Cab', 'Model', '14', '7', 1),
(1449, 'Trax', 'Model', '7', '7', 1),
(1451, 'Suburban', 'Model', '7', '7', 1),
(1455, 'Impala Limited', 'Model', '5', '7', 1),
(1461, 'Silverado 1500 Double Cab', 'Model', '14', '7', 1),
(1471, 'Spark EV', 'Model', '1', '7', 1),
(1481, 'SS', 'Model', '5', '7', 1),
(1504, 'Spark', 'Model', '1', '7', 1),
(1521, 'Captiva Sport', 'Model', '7', '7', 1),
(1574, 'Volt', 'Model', '5', '7', 1),
(1652, 'Traverse', 'Model', '7', '7', 1),
(1655, 'Malibu (Classic)', 'Model', '5', '7', 1),
(1675, 'Avalanche', 'Model', '14', '7', 1),
(1686, 'Silverado (Classic) 3500 Crew Cab', 'Model', '14', '7', 1),
(1690, 'Silverado (Classic) 1500 Extended Cab', 'Model', '14', '7', 1),
(1692, 'Silverado (Classic) 2500 HD Extended Cab', 'Model', '14', '7', 1),
(1694, 'Silverado (Classic) 1500 HD Crew Cab', 'Model', '14', '7', 1),
(1695, 'Silverado (Classic) 2500 HD Regular Cab', 'Model', '14', '7', 1),
(1696, 'Silverado (Classic) 1500 Regular Cab', 'Model', '14', '7', 1),
(1697, 'Silverado (Classic) 1500 Crew Cab', 'Model', '14', '7', 1),
(1698, 'Silverado (Classic) 2500 HD Crew Cab', 'Model', '14', '7', 1),
(1700, 'Silverado (Classic) 3500 Extended Cab', 'Model', '14', '7', 1),
(1705, 'Silverado (Classic) 3500 Regular Cab', 'Model', '14', '7', 1),
(1708, 'Silverado 3500 HD Crew Cab', 'Model', '14', '7', 1),
(1709, 'Silverado 3500 HD Extended Cab', 'Model', '14', '7', 1),
(1715, 'Silverado 3500 HD Regular Cab', 'Model', '14', '7', 1),
(1732, 'HHR', 'Model', '11', '7', 1),
(1760, 'Equinox', 'Model', '7', '7', 1),
(1783, 'Uplander Passenger', 'Model', '3', '7', 1),
(1792, 'Classic', 'Model', '5', '7', 1),
(1799, 'Uplander Cargo', 'Model', '3', '7', 1),
(1800, 'Colorado Extended Cab', 'Model', '14', '7', 1),
(1801, 'Colorado Crew Cab', 'Model', '14', '7', 1),
(1807, 'Colorado Regular Cab', 'Model', '14', '7', 1),
(1821, 'Silverado 1500 Crew Cab', 'Model', '14', '7', 1),
(1839, 'Silverado 2500 Crew Cab', 'Model', '14', '7', 1),
(1863, 'SSR', 'Model', '14', '7', 1),
(1868, 'Avalanche 2500', 'Model', '14', '7', 1),
(1875, 'Avalanche 1500', 'Model', '14', '7', 1),
(1913, 'TrailBlazer', 'Model', '7', '7', 1),
(1922, 'Silverado 2500 HD Crew Cab', 'Model', '14', '7', 1),
(1936, 'Silverado 3500 Extended Cab', 'Model', '14', '7', 1),
(1938, 'S10 Crew Cab', 'Model', '14', '7', 1),
(1942, 'Silverado 1500 HD Crew Cab', 'Model', '14', '7', 1),
(1944, 'Silverado 3500 Crew Cab', 'Model', '14', '7', 1),
(1947, 'Silverado 3500 Regular Cab', 'Model', '14', '7', 1),
(1991, 'Tahoe (New)', 'Model', '7', '7', 1),
(1996, 'Express 2500 Cargo', 'Model', '3', '7', 1),
(2001, 'Express 3500 Cargo', 'Model', '3', '7', 1),
(2003, 'Express 1500 Cargo', 'Model', '3', '7', 1),
(2010, 'Silverado 2500 Extended Cab', 'Model', '14', '7', 1),
(2012, 'Silverado 2500 HD Extended Cab', 'Model', '14', '7', 1),
(2013, 'Silverado 2500 Regular Cab', 'Model', '14', '7', 1),
(2019, 'Silverado 1500 Extended Cab', 'Model', '14', '7', 1),
(2023, 'Silverado 2500 HD Regular Cab', 'Model', '14', '7', 1),
(2025, 'Silverado 1500 Regular Cab', 'Model', '14', '7', 1),
(2068, 'Venture Cargo', 'Model', '3', '7', 1),
(2080, 'G-Series 3500', 'Model', '3', '7', 1),
(2092, 'Venture Passenger', 'Model', '3', '7', 1),
(2101, 'Express 3500 Passenger', 'Model', '3', '7', 1),
(2105, 'G-Series 1500', 'Model', '3', '7', 1),
(2109, 'G-Series 2500', 'Model', '3', '7', 1),
(2112, 'Express 2500 Passenger', 'Model', '3', '7', 1),
(2117, 'Express 1500 Passenger', 'Model', '3', '7', 1),
(2122, '3500 HD Extended Cab', 'Model', '14', '7', 1),
(2135, 'Tahoe', 'Model', '7', '7', 1),
(2143, '3500 HD Regular Cab', 'Model', '14', '7', 1),
(2150, 'Monte Carlo', 'Model', '10', '7', 1),
(2174, 'Lumina Passenger', 'Model', '3', '7', 1),
(2177, 'Impala', 'Model', '5', '7', 1),
(2178, 'Lumina Cargo', 'Model', '3', '7', 1),
(2216, '1500 Extended Cab', 'Model', '14', '7', 1),
(2218, 'Beretta', 'Model', '10', '7', 1),
(2219, 'Lumina APV', 'Model', '3', '7', 1),
(2220, 'G-Series G10', 'Model', '3', '7', 1),
(2221, 'S10 Extended Cab', 'Model', '14', '7', 1),
(2222, 'Blazer', 'Model', '7', '7', 1),
(2223, 'APV Cargo', 'Model', '3', '7', 1),
(2224, 'Corsica', 'Model', '5', '7', 1),
(2226, 'G-Series G20', 'Model', '3', '7', 1),
(2227, 'Astro Passenger', 'Model', '3', '7', 1),
(2228, 'Astro Cargo', 'Model', '3', '7', 1),
(2229, 'S10 Blazer', 'Model', '7', '7', 1),
(2231, 'Sportvan G10', 'Model', '3', '7', 1),
(2232, 'Sportvan G20', 'Model', '3', '7', 1),
(2236, 'Sportvan G30', 'Model', '3', '7', 1),
(2239, '2500 Extended Cab', 'Model', '14', '7', 1),
(2240, 'G-Series G30', 'Model', '3', '7', 1),
(2241, 'S10 Regular Cab', 'Model', '14', '7', 1),
(2599, 'Pacifica', 'Model', '11', '8', 1),
(2622, 'Pacifica Hybrid', 'Model', '3', '8', 1),
(2625, 'Aspen', 'Model', '7', '8', 1),
(2629, '300M', 'Model', '5', '8', 1),
(2645, '300', 'Model', '5', '8', 1),
(2660, 'Cirrus', 'Model', '5', '8', 1),
(2668, 'New Yorker', 'Model', '5', '8', 1),
(2671, 'LHS', 'Model', '5', '8', 1),
(2672, 'Fifth Ave', 'Model', '5', '8', 1),
(2673, 'Concorde', 'Model', '5', '8', 1),
(2676, 'Town & Country', 'Model', '3', '8', 1),
(2678, 'Imperial', 'Model', '5', '8', 1),
(2695, 'Ram 3500 Crew Cab', 'Model', '14', '11', 1),
(2712, 'Ram 2500 Crew Cab', 'Model', '14', '11', 1),
(2740, 'Dart', 'Model', '5', '11', 1),
(2776, 'Journey', 'Model', '7', '11', 1),
(2777, 'Ram 1500 Crew Cab', 'Model', '14', '11', 1),
(2787, 'Challenger', 'Model', '10', '11', 1),
(2808, 'Nitro', 'Model', '7', '11', 1),
(2818, 'Caliber', 'Model', '11', '11', 1),
(2833, 'Charger', 'Model', '5', '11', 1),
(2841, 'Ram 2500 Mega Cab', 'Model', '14', '11', 1),
(2845, 'Ram 3500 Mega Cab', 'Model', '14', '11', 1),
(2847, 'Ram 1500 Mega Cab', 'Model', '14', '11', 1),
(2871, 'Magnum', 'Model', '11', '11', 1),
(2913, 'Grand Caravan Cargo', 'Model', '3', '11', 1),
(2974, 'Dakota Quad Cab', 'Model', '14', '11', 1),
(3021, 'Ram 2500 Quad Cab', 'Model', '14', '11', 1),
(3022, 'Durango', 'Model', '7', '11', 1),
(3026, 'Ram 1500 Quad Cab', 'Model', '14', '11', 1),
(3038, 'Ram 3500 Quad Cab', 'Model', '14', '11', 1),
(3074, 'Avenger', 'Model', '10', '11', 1),
(3082, 'Ram Wagon 3500', 'Model', '3', '11', 1),
(3089, 'Ram 2500 Club Cab', 'Model', '14', '11', 1),
(3090, 'Ram 1500 Club Cab', 'Model', '14', '11', 1),
(3091, 'Ram 2500 Regular Cab', 'Model', '14', '11', 1),
(3092, 'Ram Wagon 1500', 'Model', '3', '11', 1),
(3094, 'Ram Van 2500', 'Model', '3', '11', 1),
(3096, 'Ram 1500 Regular Cab', 'Model', '14', '11', 1),
(3098, 'Ram Van 1500', 'Model', '3', '11', 1),
(3099, 'Ram Van 3500', 'Model', '3', '11', 1),
(3103, 'Ram 3500 Club Cab', 'Model', '14', '11', 1),
(3106, 'Ram Wagon 2500', 'Model', '3', '11', 1),
(3114, 'Ram 3500 Regular Cab', 'Model', '14', '11', 1),
(3140, 'Intrepid', 'Model', '5', '11', 1),
(3147, 'D250 Regular Cab', 'Model', '14', '11', 1),
(3148, 'D150 Club Cab', 'Model', '14', '11', 1),
(3149, 'D250 Club Cab', 'Model', '14', '11', 1),
(3150, 'Caravan Passenger', 'Model', '3', '11', 1),
(3152, 'Grand Caravan Passenger', 'Model', '3', '11', 1),
(3154, 'D150 Regular Cab', 'Model', '14', '11', 1),
(3155, 'Caravan Cargo', 'Model', '3', '11', 1),
(3156, 'Ram 50 Regular Cab', 'Model', '14', '11', 1),
(3157, 'Dakota Club Cab', 'Model', '14', '11', 1),
(3158, 'D350 Regular Cab', 'Model', '14', '11', 1),
(3160, 'Dakota Regular Cab', 'Model', '14', '11', 1),
(3161, 'D350 Club Cab', 'Model', '14', '11', 1),
(3162, 'Ram Wagon B250', 'Model', '3', '11', 1),
(3163, 'Ram Wagon B150', 'Model', '3', '11', 1),
(3164, 'Ram Van B150', 'Model', '3', '11', 1),
(3165, 'Ram Van B250', 'Model', '3', '11', 1),
(3166, 'Ram Van B350', 'Model', '3', '11', 1),
(3167, 'Monaco', 'Model', '5', '11', 1),
(3168, 'Dynasty', 'Model', '5', '11', 1),
(3169, 'Daytona', 'Model', '1', '11', 1),
(3170, 'Ram Wagon B350', 'Model', '3', '11', 1),
(3171, 'Ramcharger', 'Model', '7', '11', 1),
(3172, 'Stealth', 'Model', '1', '11', 1),
(3174, 'Spirit', 'Model', '5', '11', 1),
(3191, 'Talon', 'Model', '1', '12', 1),
(3192, 'Premier', 'Model', '5', '12', 1),
(3193, 'Vision', 'Model', '5', '12', 1),
(3195, 'Portofino', 'Model', '9', '13', 1),
(3209, '458 Spider', 'Model', '9', '13', 1),
(3214, '812 Superfast', 'Model', '10', '13', 1),
(3217, '599 GTO', 'Model', '10', '13', 1),
(3219, '488 GTB', 'Model', '10', '13', 1),
(3222, 'GTC4Lusso', 'Model', '1', '13', 1),
(3232, '458 Speciale', 'Model', '10', '13', 1),
(3235, 'F12berlinetta', 'Model', '10', '13', 1),
(3236, 'FF', 'Model', '10', '13', 1),
(3239, '488 Spider', 'Model', '9', '13', 1),
(3242, '458 Italia', 'Model', '10', '13', 1),
(3247, 'California', 'Model', '9', '13', 1),
(3248, '612 Scaglietti', 'Model', '10', '13', 1),
(3250, '599 GTB Fiorano', 'Model', '10', '13', 1),
(3279, '124 Spider', 'Model', '9', '14', 1),
(3288, '500c Abarth', 'Model', '9', '14', 1),
(3289, '500X', 'Model', '7', '14', 1),
(3291, '500c', 'Model', '9', '14', 1),
(3292, '500L', 'Model', '1', '14', 1),
(3293, '500e', 'Model', '1', '14', 1),
(3295, 'Karma', 'Model', '5', '15', 1),
(3304, 'Sprinter 3500XD Cargo', 'Model', '3', '17', 1),
(3333, 'Sierra 1500 Limited Double Cab', 'Model', '14', '18', 1),
(3398, 'Sierra 3500 HD Double Cab', 'Model', '14', '18', 1),
(3413, 'Acadia Limited', 'Model', '7', '18', 1),
(3424, 'Yukon XL', 'Model', '7', '18', 1),
(3425, 'Sierra 2500 HD Double Cab', 'Model', '14', '18', 1),
(3433, 'Sierra 1500 Double Cab', 'Model', '14', '18', 1),
(3522, 'Terrain', 'Model', '7', '18', 1),
(3568, 'Sierra (Classic) 1500 Regular Cab', 'Model', '14', '18', 1),
(3569, 'Sierra (Classic) 2500 HD Crew Cab', 'Model', '14', '18', 1),
(3571, 'Acadia', 'Model', '7', '18', 1),
(3578, 'Sierra (Classic) 1500 Crew Cab', 'Model', '14', '18', 1),
(3587, 'Sierra 3500 HD Crew Cab', 'Model', '14', '18', 1),
(3596, 'Sierra (Classic) 1500 Extended Cab', 'Model', '14', '18', 1),
(3597, 'Sierra (Classic) 1500 HD Crew Cab', 'Model', '14', '18', 1),
(3601, 'Sierra 3500 HD Regular Cab', 'Model', '14', '18', 1),
(3607, 'Sierra 3500 HD Extended Cab', 'Model', '14', '18', 1),
(3658, 'Canyon Crew Cab', 'Model', '14', '18', 1),
(3660, 'Envoy XUV', 'Model', '7', '18', 1),
(3662, 'Canyon Regular Cab', 'Model', '14', '18', 1),
(3667, 'Canyon Extended Cab', 'Model', '14', '18', 1),
(3673, 'Sierra 1500 Crew Cab', 'Model', '14', '18', 1),
(3676, 'Sierra 2500 Crew Cab', 'Model', '14', '18', 1),
(3720, 'Envoy XL', 'Model', '7', '18', 1),
(3747, 'Sierra 2500 HD Crew Cab', 'Model', '14', '18', 1),
(3754, 'Sierra 1500 HD Crew Cab', 'Model', '14', '18', 1),
(3762, 'Sonoma Crew Cab', 'Model', '14', '18', 1),
(3763, 'Sierra 3500 Regular Cab', 'Model', '14', '18', 1),
(3764, 'Sierra 3500 Crew Cab', 'Model', '14', '18', 1),
(3769, 'Sierra 3500 Extended Cab', 'Model', '14', '18', 1),
(3780, 'Sierra (Classic) 2500 HD Extended Cab', 'Model', '14', '18', 1),
(3783, 'Sierra (Classic) 3500 Crew Cab', 'Model', '14', '18', 1),
(3789, 'Sierra (Classic) 2500 Crew Cab', 'Model', '14', '18', 1),
(3790, 'Sierra (Classic) 3500 Extended Cab', 'Model', '14', '18', 1),
(3792, 'Yukon XL 2500', 'Model', '7', '18', 1),
(3794, 'Sierra (Classic) 3500 Regular Cab', 'Model', '14', '18', 1),
(3796, '2500 HD Regular Cab', 'Model', '14', '18', 1),
(3797, '3500 Extended Cab', 'Model', '14', '18', 1),
(3799, 'Yukon XL 1500', 'Model', '7', '18', 1),
(3800, 'Yukon Denali', 'Model', '7', '18', 1),
(3801, 'Sierra (Classic) 2500 HD Regular Cab', 'Model', '14', '18', 1),
(3807, '2500 HD Extended Cab', 'Model', '14', '18', 1),
(3814, 'Sierra 1500 Extended Cab', 'Model', '14', '18', 1),
(3815, 'Sierra 2500 HD Extended Cab', 'Model', '14', '18', 1),
(3816, 'Sierra 2500 HD Regular Cab', 'Model', '14', '18', 1),
(3819, 'Sierra 2500 Regular Cab', 'Model', '14', '18', 1),
(3820, 'Sonoma Extended Cab', 'Model', '14', '18', 1),
(3824, 'Sierra 1500 Regular Cab', 'Model', '14', '18', 1),
(3826, 'Sierra 2500 Extended Cab', 'Model', '14', '18', 1),
(3831, 'Envoy', 'Model', '7', '18', 1),
(3857, '2500 HD Club Coupe', 'Model', '14', '18', 1),
(3867, 'Savana 3500 Cargo', 'Model', '3', '18', 1),
(3881, 'Vandura G2500', 'Model', '3', '18', 1),
(3883, 'Savana 1500 Passenger', 'Model', '3', '18', 1),
(3889, 'Savana 2500 Passenger', 'Model', '3', '18', 1),
(3892, 'Savana 2500 Cargo', 'Model', '3', '18', 1),
(3897, 'Rally Wagon G3500', 'Model', '3', '18', 1),
(3901, 'Vandura G1500', 'Model', '3', '18', 1),
(3903, 'Savana 1500 Cargo', 'Model', '3', '18', 1),
(3916, 'Savana 3500 Passenger', 'Model', '3', '18', 1),
(3923, 'Vandura G3500', 'Model', '3', '18', 1),
(3924, 'Rally Wagon G2500', 'Model', '3', '18', 1),
(3947, '1500 Club Coupe', 'Model', '14', '18', 1),
(3951, 'Sonoma Club Coupe Cab', 'Model', '14', '18', 1),
(3956, 'Safari Passenger', 'Model', '3', '18', 1),
(3958, 'Vandura 2500', 'Model', '3', '18', 1),
(3959, 'Safari Cargo', 'Model', '3', '18', 1),
(3960, '3500 Club Coupe', 'Model', '14', '18', 1),
(3961, 'Vandura 1500', 'Model', '3', '18', 1),
(3962, 'Sonoma Club Cab', 'Model', '14', '18', 1),
(3964, 'Jimmy', 'Model', '7', '18', 1),
(3965, 'Rally Wagon 3500', 'Model', '3', '18', 1),
(3966, 'Yukon', 'Model', '7', '18', 1),
(3968, 'Rally Wagon 1500', 'Model', '3', '18', 1),
(3969, 'Rally Wagon 2500', 'Model', '3', '18', 1),
(3970, 'Sonoma Regular Cab', 'Model', '14', '18', 1),
(3971, '2500 Club Coupe', 'Model', '14', '18', 1),
(3972, 'Vandura 3500', 'Model', '3', '18', 1),
(3973, 'Suburban 1500', 'Model', '7', '18', 1),
(3975, 'Suburban 2500', 'Model', '7', '18', 1),
(3980, 'G80', 'Model', '5', '19', 1),
(3983, 'G90', 'Model', '5', '19', 1),
(3984, 'G70', 'Model', '5', '19', 1),
(4003, 'Tracker', 'Model', '7', '20', 1),
(4004, 'Prizm', 'Model', '5', '20', 1),
(4029, 'Clarity Fuel Cell', 'Model', '5', '21', 1),
(4031, 'Clarity Plug-in Hybrid', 'Model', '5', '21', 1),
(4046, 'Clarity Electric', 'Model', '5', '21', 1),
(4053, 'HR-V', 'Model', '7', '21', 1),
(4068, 'Civic Type R', 'Model', '1', '21', 1),
(4071, 'Accord Hybrid', 'Model', '5', '21', 1),
(4098, 'CR-Z', 'Model', '10', '21', 1),
(4102, 'Crosstour', 'Model', '7', '21', 1),
(4113, 'Accord Crosstour', 'Model', '7', '21', 1),
(4143, 'Ridgeline', 'Model', '14', '21', 1),
(4150, 'Fit', 'Model', '1', '21', 1),
(4167, 'Element', 'Model', '7', '21', 1),
(4174, 'Pilot', 'Model', '7', '21', 1),
(4196, 'S2000', 'Model', '9', '21', 1),
(4198, 'Insight', 'Model', '1', '21', 1),
(4221, 'CR-V', 'Model', '7', '21', 1),
(4233, 'Odyssey', 'Model', '3', '21', 1),
(4238, 'Passport', 'Model', '7', '21', 1),
(4244, 'Prelude', 'Model', '10', '21', 1),
(4245, 'del Sol', 'Model', '10', '21', 1),
(4251, 'H3T', 'Model', '14', '22', 1),
(4262, 'H3', 'Model', '7', '22', 1),
(4276, 'Venue', 'Model', '7', '23', 1),
(4284, 'Ioniq Plug-in Hybrid', 'Model', '1', '23', 1),
(4290, 'Santa Fe XL', 'Model', '7', '23', 1),
(4315, 'NEXO', 'Model', '7', '23', 1),
(4318, 'Palisade', 'Model', '7', '23', 1),
(4335, 'Sonata Hybrid', 'Model', '5', '23', 1),
(4339, 'Kona Electric', 'Model', '7', '23', 1),
(4340, 'Elantra GT', 'Model', '1', '23', 1),
(4348, 'Kona', 'Model', '7', '23', 1),
(4353, 'Sonata Plug-in Hybrid', 'Model', '5', '23', 1),
(4356, 'Tucson Fuel Cell', 'Model', '7', '23', 1),
(4366, 'Ioniq Hybrid', 'Model', '1', '23', 1),
(4368, 'Ioniq Electric', 'Model', '1', '23', 1),
(4387, 'Santa Fe Sport', 'Model', '7', '23', 1),
(4388, 'Equus', 'Model', '5', '23', 1),
(4398, 'Veloster', 'Model', '10', '23', 1),
(4410, 'Genesis Coupe', 'Model', '10', '23', 1),
(4429, 'Genesis', 'Model', '5', '23', 1),
(4434, 'Veracruz', 'Model', '7', '23', 1),
(4435, 'Entourage', 'Model', '3', '23', 1),
(4440, 'Azera', 'Model', '5', '23', 1),
(4451, 'Tucson', 'Model', '7', '23', 1),
(4460, 'XG300', 'Model', '5', '23', 1),
(4469, 'Santa Fe', 'Model', '7', '23', 1),
(4473, 'XG350', 'Model', '5', '23', 1),
(4489, 'Tiburon', 'Model', '1', '23', 1),
(4504, 'Sonata', 'Model', '5', '23', 1),
(4506, 'Scoupe', 'Model', '10', '23', 1),
(4521, 'JX', 'Model', '7', '24', 1),
(4547, 'QX50', 'Model', '7', '24', 1),
(4564, 'Q40', 'Model', '5', '24', 1),
(4569, 'QX60', 'Model', '7', '24', 1),
(4580, 'Q70', 'Model', '5', '24', 1),
(4584, 'QX70', 'Model', '7', '24', 1),
(4585, 'QX80', 'Model', '7', '24', 1),
(4586, 'QX30', 'Model', '7', '24', 1),
(4587, 'Q50', 'Model', '5', '24', 1),
(4589, 'EX', 'Model', '7', '24', 1),
(4606, 'FX', 'Model', '7', '24', 1),
(4631, 'QX', 'Model', '7', '24', 1),
(4636, 'I', 'Model', '5', '24', 1),
(4647, 'J', 'Model', '5', '24', 1),
(4649, 'Q', 'Model', '5', '24', 1),
(4652, 'i-350 Crew Cab', 'Model', '14', '25', 1),
(4662, 'i-280 Extended Cab', 'Model', '14', '25', 1),
(4672, 'i-370 Crew Cab', 'Model', '14', '25', 1),
(4675, 'Axiom', 'Model', '7', '25', 1),
(4680, 'VehiCROSS', 'Model', '7', '25', 1),
(4687, 'i-370 Extended Cab', 'Model', '14', '25', 1),
(4688, 'Rodeo Sport', 'Model', '7', '25', 1),
(4689, 'i-290 Extended Cab', 'Model', '14', '25', 1),
(4704, 'Ascender', 'Model', '7', '25', 1),
(4706, 'Hombre Regular Cab', 'Model', '14', '25', 1),
(4711, 'Hombre Spacecab', 'Model', '14', '25', 1),
(4712, 'Impulse', 'Model', '1', '25', 1),
(4716, 'Trooper', 'Model', '7', '25', 1),
(4719, 'Oasis', 'Model', '3', '25', 1),
(4720, 'Amigo', 'Model', '7', '25', 1),
(4722, 'Rodeo', 'Model', '7', '25', 1),
(4723, 'Stylus', 'Model', '5', '25', 1),
(4724, 'Spacecab', 'Model', '14', '25', 1),
(4736, 'F-PACE', 'Model', '7', '26', 1),
(4742, 'I-PACE', 'Model', '7', '26', 1),
(4759, 'XE', 'Model', '5', '26', 1),
(4764, 'E-PACE', 'Model', '7', '26', 1),
(4817, 'S-Type', 'Model', '5', '26', 1),
(4847, 'Gladiator', 'Model', '14', '27', 1),
(4881, 'Wrangler Unlimited', 'Model', '7', '27', 1),
(4894, 'Renegade', 'Model', '7', '27', 1),
(4911, 'Liberty', 'Model', '7', '27', 1),
(4913, 'Commander', 'Model', '7', '27', 1),
(4915, 'Compass', 'Model', '7', '27', 1),
(4917, 'Patriot', 'Model', '7', '27', 1),
(4937, 'Cherokee', 'Model', '7', '27', 1),
(4939, 'Grand Cherokee', 'Model', '7', '27', 1),
(4942, 'Comanche Regular Cab', 'Model', '14', '27', 1),
(4943, 'Wrangler', 'Model', '7', '27', 1),
(4993, 'Niro EV', 'Model', '11', '28', 1),
(4995, 'Niro Plug-in Hybrid', 'Model', '11', '28', 1),
(5003, 'Forte Koup', 'Model', '10', '28', 1),
(5012, 'Stinger', 'Model', '5', '28', 1),
(5013, 'Optima Plug-in Hybrid', 'Model', '5', '28', 1),
(5015, 'Telluride', 'Model', '7', '28', 1),
(5021, 'Soul EV', 'Model', '11', '28', 1),
(5030, 'K900', 'Model', '5', '28', 1),
(5031, 'Optima Hybrid', 'Model', '5', '28', 1),
(5032, 'Niro', 'Model', '11', '28', 1),
(5033, 'Cadenza', 'Model', '5', '28', 1),
(5036, 'Forte5', 'Model', '1', '28', 1),
(5051, 'Borrego', 'Model', '7', '28', 1),
(5056, 'Soul', 'Model', '11', '28', 1),
(5085, 'Optima (2006.5)', 'Model', '5', '28', 1),
(5087, 'Rondo', 'Model', '11', '28', 1),
(5108, 'Sedona', 'Model', '3', '28', 1),
(5111, 'Optima', 'Model', '5', '28', 1),
(5115, 'Sorento', 'Model', '7', '28', 1),
(5116, 'Amanti', 'Model', '5', '28', 1),
(5134, 'Sephia', 'Model', '5', '28', 1),
(5135, 'Sportage', 'Model', '7', '28', 1),
(5221, 'LR2', 'Model', '7', '30', 1),
(5231, 'Discovery Sport', 'Model', '7', '30', 1),
(5232, 'Range Rover Evoque', 'Model', '7', '30', 1),
(5233, 'Range Rover Velar', 'Model', '7', '30', 1),
(5235, 'LR4', 'Model', '7', '30', 1),
(5239, 'Range Rover Sport', 'Model', '7', '30', 1),
(5252, 'Defender 90', 'Model', '7', '30', 1),
(5254, 'LR3', 'Model', '7', '30', 1),
(5258, 'Discovery Series II', 'Model', '7', '30', 1),
(5261, 'Freelander', 'Model', '7', '30', 1),
(5262, 'Discovery', 'Model', '7', '30', 1),
(5263, 'Defender 110', 'Model', '7', '30', 1),
(5266, 'Range Rover', 'Model', '7', '30', 1),
(5303, 'LFA', 'Model', '10', '31', 1),
(5313, 'UX', 'Model', '7', '31', 1),
(5335, 'LC', 'Model', '10', '31', 1),
(5352, 'RC', 'Model', '10', '31', 1),
(5359, 'HS', 'Model', '5', '31', 1),
(5362, 'CT', 'Model', '1', '31', 1),
(5387, 'IS F', 'Model', '5', '31', 1),
(5432, 'GX', 'Model', '7', '31', 1),
(5452, 'RX', 'Model', '7', '31', 1),
(5468, 'LX', 'Model', '7', '31', 1),
(5480, 'GS', 'Model', '5', '31', 1),
(5484, 'SC', 'Model', '10', '31', 1),
(5485, 'ES', 'Model', '5', '31', 1),
(5494, 'Corsair', 'Model', '7', '32', 1),
(5532, 'Zephyr', 'Model', '5', '32', 1),
(5553, 'Nautilus', 'Model', '7', '32', 1),
(5568, 'MKT', 'Model', '7', '32', 1),
(5569, 'MKS', 'Model', '5', '32', 1),
(5573, 'MKC', 'Model', '7', '32', 1),
(5580, 'MKX', 'Model', '7', '32', 1),
(5581, 'Navigator L', 'Model', '7', '32', 1),
(5584, 'Mark LT', 'Model', '14', '32', 1),
(5585, 'MKZ', 'Model', '5', '32', 1),
(5587, 'Aviator', 'Model', '7', '32', 1),
(5596, 'Blackwood', 'Model', '14', '32', 1),
(5612, 'LS', 'Model', '5', '32', 1),
(5614, 'Mark VII', 'Model', '10', '32', 1),
(5628, 'Mark VIII', 'Model', '10', '32', 1),
(5630, 'Navigator', 'Model', '7', '32', 1),
(5631, 'Town Car', 'Model', '5', '32', 1),
(5636, 'Evora 400', 'Model', '10', '33', 1),
(5643, 'Exige S', 'Model', '10', '33', 1),
(5647, 'Evora', 'Model', '10', '33', 1),
(5650, 'Exige', 'Model', '10', '33', 1),
(5651, 'Elise', 'Model', '10', '33', 1),
(5660, 'CX-30', 'Model', '7', '34', 1),
(5671, 'MX-5 Miata RF', 'Model', '9', '34', 1),
(5709, 'CX-3', 'Model', '7', '34', 1),
(5728, 'CX-5', 'Model', '7', '34', 1),
(5730, 'CX-7', 'Model', '7', '34', 1),
(5743, 'MAZDA2', 'Model', '1', '34', 1),
(5752, 'CX-9', 'Model', '7', '34', 1),
(5757, 'B-Series Extended Cab', 'Model', '14', '34', 1),
(5764, 'MAZDA5', 'Model', '3', '34', 1),
(5785, 'RX-8', 'Model', '10', '34', 1),
(5788, 'Protege5', 'Model', '1', '34', 1),
(5801, 'Tribute', 'Model', '7', '34', 1),
(5844, 'Millenia', 'Model', '5', '34', 1),
(5873, '323', 'Model', '1', '34', 1),
(5874, 'RX-7', 'Model', '1', '34', 1),
(5876, '626', 'Model', '5', '34', 1),
(5877, 'Navajo', 'Model', '7', '34', 1),
(5878, 'MX-5 Miata', 'Model', '9', '34', 1),
(5880, 'MPV', 'Model', '3', '34', 1),
(5881, '929', 'Model', '5', '34', 1),
(5882, 'MX-3', 'Model', '1', '34', 1),
(5883, 'B-Series Cab Plus', 'Model', '14', '34', 1),
(5884, 'B-Series Regular Cab', 'Model', '14', '34', 1),
(5885, 'MX-6', 'Model', '10', '34', 1),
(5886, 'Protege', 'Model', '5', '34', 1),
(5919, 'Levante', 'Model', '7', '35', 1),
(5921, 'Ghibli', 'Model', '5', '35', 1),
(5923, 'Quattroporte', 'Model', '5', '35', 1),
(5937, '62', 'Model', '5', '36', 1),
(5940, '57', 'Model', '5', '36', 1),
(5948, '720S', 'Model', '10', '37', 1),
(5950, '675LT', 'Model', '10', '37', 1),
(5951, '570GT', 'Model', '10', '37', 1),
(5996, 'Mercedes-AMG G-Class', 'Model', '7', '38', 1),
(6016, 'A-Class', 'Model', '5', '38', 1),
(6023, 'GLS', 'Model', '7', '38', 1),
(6027, 'Mercedes-AMG CLS', 'Model', '5', '38', 1),
(6040, 'GLC Coupe', 'Model', '7', '38', 1),
(6044, 'Mercedes-AMG GLC Coupe', 'Model', '7', '38', 1),
(6045, 'CLS', 'Model', '5', '38', 1),
(6050, 'Mercedes-AMG GLC', 'Model', '7', '38', 1),
(6054, 'Mercedes-AMG GLS', 'Model', '7', '38', 1),
(6057, 'Mercedes-AMG SLC', 'Model', '9', '38', 1),
(6060, 'Mercedes-Maybach S-Class', 'Model', '5', '38', 1),
(6062, 'Metris WORKER Cargo', 'Model', '3', '38', 1),
(6065, 'Metris WORKER Passenger', 'Model', '3', '38', 1),
(6067, 'SLC', 'Model', '9', '38', 1),
(6070, 'Sprinter WORKER Passenger', 'Model', '3', '38', 1),
(6072, 'Sprinter WORKER Cargo', 'Model', '3', '38', 1),
(6073, 'Sprinter 3500 XD Cargo', 'Model', '3', '38', 1),
(6074, 'CLA', 'Model', '5', '38', 1),
(6076, 'GLA', 'Model', '7', '38', 1),
(6077, 'GLC', 'Model', '7', '38', 1),
(6080, 'GLE', 'Model', '7', '38', 1),
(6083, 'Mercedes-AMG CLA', 'Model', '5', '38', 1),
(6085, 'Mercedes-AMG GLE Coupe', 'Model', '7', '38', 1),
(6086, 'Mercedes-AMG SLK', 'Model', '9', '38', 1),
(6087, 'Mercedes-AMG GLA', 'Model', '7', '38', 1),
(6090, 'Mercedes-AMG SL', 'Model', '9', '38', 1),
(6091, 'Mercedes-AMG GLE', 'Model', '7', '38', 1),
(6092, 'Mercedes-Maybach S 600', 'Model', '5', '38', 1),
(6094, 'GLE Coupe', 'Model', '7', '38', 1),
(6096, 'SLK', 'Model', '9', '38', 1),
(6098, 'SL', 'Model', '9', '38', 1),
(6100, 'Metris Cargo', 'Model', '3', '38', 1),
(6101, 'Metris Passenger', 'Model', '3', '38', 1),
(6109, 'GLA-Class', 'Model', '7', '38', 1),
(6113, 'B-Class', 'Model', '1', '38', 1),
(6136, 'CLA-Class', 'Model', '5', '38', 1),
(6176, 'Sprinter 2500 Crew', 'Model', '3', '38', 1),
(6180, 'Sprinter 3500 Cargo', 'Model', '3', '38', 1),
(6186, 'Sprinter 2500 Cargo', 'Model', '3', '38', 1),
(6200, 'GLK-Class', 'Model', '7', '38', 1),
(6201, 'Sprinter 2500 Passenger', 'Model', '3', '38', 1),
(6233, 'GL-Class', 'Model', '7', '38', 1),
(6234, 'R-Class', 'Model', '11', '38', 1),
(6243, 'CLS-Class', 'Model', '10', '38', 1),
(6261, 'SLR McLaren', 'Model', '10', '38', 1),
(6283, 'G-Class', 'Model', '7', '38', 1),
(6315, 'M-Class', 'Model', '7', '38', 1),
(6318, 'CL-Class', 'Model', '10', '38', 1),
(6321, 'SLK-Class', 'Model', '9', '38', 1),
(6336, 'SL-Class', 'Model', '9', '38', 1),
(6337, '600 SEC', 'Model', '10', '38', 1),
(6342, '600 SL', 'Model', '9', '38', 1),
(6343, '400 SEL', 'Model', '5', '38', 1),
(6345, '500 SEC', 'Model', '10', '38', 1),
(6350, '190 E', 'Model', '5', '38', 1),
(6354, '300 E', 'Model', '5', '38', 1),
(6355, '300 SL', 'Model', '9', '38', 1),
(6356, '300 SE', 'Model', '5', '38', 1),
(6357, '300 SD', 'Model', '5', '38', 1),
(6358, '300 D', 'Model', '5', '38', 1),
(6359, '500 E', 'Model', '5', '38', 1),
(6360, '300 TE', 'Model', '11', '38', 1),
(6361, '400 SE', 'Model', '5', '38', 1),
(6362, '500 SL', 'Model', '9', '38', 1),
(6363, '500 SEL', 'Model', '5', '38', 1),
(6364, '400 E', 'Model', '5', '38', 1),
(6365, '600 SEL', 'Model', '5', '38', 1),
(6397, 'Marauder', 'Model', '5', '39', 1),
(6430, 'Milan', 'Model', '5', '39', 1),
(6433, 'Mariner', 'Model', '7', '39', 1),
(6447, 'Montego', 'Model', '5', '39', 1),
(6452, 'Monterey', 'Model', '3', '39', 1),
(6454, 'Mountaineer', 'Model', '7', '39', 1),
(6465, 'Mystique', 'Model', '5', '39', 1),
(6473, 'Capri', 'Model', '9', '39', 1),
(6474, 'Grand Marquis', 'Model', '5', '39', 1),
(6476, 'Cougar', 'Model', '10', '39', 1),
(6477, 'Villager', 'Model', '3', '39', 1),
(6524, 'Countryman', 'Model', '7', '40', 1),
(6526, 'Roadster', 'Model', '9', '40', 1),
(6532, 'Paceman', 'Model', '1', '40', 1),
(6536, 'Hardtop 2 Door', 'Model', '1', '40', 1),
(6540, 'Hardtop 4 Door', 'Model', '1', '40', 1),
(6542, 'Coupe', 'Model', '10', '40', 1),
(6544, 'Hardtop', 'Model', '1', '40', 1),
(6546, 'Clubman', 'Model', '1', '40', 1),
(6547, 'Convertible', 'Model', '9', '40', 1),
(6548, 'Cooper', 'Model', '1', '40', 1),
(6603, 'Raider Double Cab', 'Model', '14', '41', 1),
(6607, 'Eclipse Cross', 'Model', '7', '41', 1),
(6612, 'Outlander PHEV', 'Model', '7', '41', 1),
(6627, 'Mirage G4', 'Model', '5', '41', 1),
(6628, 'Lancer Evolution', 'Model', '5', '41', 1),
(6633, 'i-MiEV', 'Model', '1', '41', 1),
(6636, 'Outlander Sport', 'Model', '7', '41', 1),
(6642, 'Raider Extended Cab', 'Model', '14', '41', 1),
(6645, 'Endeavor', 'Model', '7', '41', 1),
(6657, 'Outlander', 'Model', '7', '41', 1),
(6697, 'Montero Sport', 'Model', '7', '41', 1),
(6734, 'Expo', 'Model', '11', '41', 1),
(6736, 'Montero', 'Model', '7', '41', 1),
(6737, 'Mighty Max Regular Cab', 'Model', '14', '41', 1),
(6738, 'Precis', 'Model', '1', '41', 1),
(6739, 'Mighty Max Macro Cab', 'Model', '14', '41', 1),
(6740, 'Galant', 'Model', '5', '41', 1),
(6769, 'Kicks', 'Model', '7', '42', 1),
(6813, 'TITAN Single Cab', 'Model', '14', '42', 1),
(6825, 'Rogue Sport', 'Model', '7', '42', 1),
(6835, 'TITAN XD King Cab', 'Model', '14', '42', 1),
(6841, 'TITAN XD Single Cab', 'Model', '14', '42', 1),
(6857, 'TITAN XD Crew Cab', 'Model', '14', '42', 1),
(6866, 'Versa Note', 'Model', '1', '42', 1),
(6881, 'NV200 Taxi', 'Model', '3', '42', 1),
(6912, 'Rogue Select', 'Model', '7', '42', 1),
(6930, 'NV200', 'Model', '3', '42', 1),
(6943, 'NV1500 Cargo', 'Model', '3', '42', 1),
(6944, 'NV3500 HD Passenger', 'Model', '3', '42', 1),
(6945, 'NV2500 HD Cargo', 'Model', '3', '42', 1),
(6957, 'NV3500 HD Cargo', 'Model', '3', '42', 1),
(6964, 'LEAF', 'Model', '1', '42', 1),
(6976, 'JUKE', 'Model', '7', '42', 1),
(7001, 'GT-R', 'Model', '10', '42', 1),
(7013, 'cube', 'Model', '11', '42', 1),
(7022, 'Rogue', 'Model', '7', '42', 1),
(7046, 'Armada', 'Model', '7', '42', 1),
(7074, 'Pathfinder Armada', 'Model', '7', '42', 1),
(7076, 'Titan Crew Cab', 'Model', '14', '42', 1),
(7079, 'Murano', 'Model', '7', '42', 1),
(7083, 'Titan King Cab', 'Model', '14', '42', 1),
(7105, 'Frontier Crew Cab', 'Model', '14', '42', 1),
(7108, 'Xterra', 'Model', '7', '42', 1),
(7115, 'Frontier Regular Cab', 'Model', '14', '42', 1),
(7124, 'Frontier King Cab', 'Model', '14', '42', 1),
(7146, '200SX', 'Model', '10', '42', 1),
(7172, 'Quest', 'Model', '3', '42', 1),
(7177, 'NX', 'Model', '1', '42', 1),
(7180, 'King Cab', 'Model', '14', '42', 1),
(7183, 'Maxima', 'Model', '5', '42', 1),
(7184, 'Stanza', 'Model', '5', '42', 1),
(7185, 'Pathfinder', 'Model', '7', '42', 1),
(7220, 'Custom Cruiser', 'Model', '11', '43', 1),
(7224, 'Regency', 'Model', '5', '43', 1),
(7231, 'Cutlass', 'Model', '5', '43', 1),
(7245, 'Intrigue', 'Model', '5', '43', 1),
(7249, 'Cutlass Cruiser', 'Model', '11', '43', 1),
(7256, 'Aurora', 'Model', '5', '43', 1),
(7265, 'Toronado', 'Model', '10', '43', 1),
(7266, 'Silhouette', 'Model', '3', '43', 1),
(7268, 'Bravada', 'Model', '7', '43', 1),
(7269, '98', 'Model', '5', '43', 1),
(7271, 'LSS', 'Model', '5', '43', 1),
(7272, '88', 'Model', '5', '43', 1),
(7302, 'Prowler', 'Model', '9', '45', 1),
(7303, 'Colt Vista', 'Model', '11', '45', 1),
(7312, 'Sundance', 'Model', '1', '45', 1),
(7317, 'Acclaim', 'Model', '5', '45', 1),
(7319, 'Voyager', 'Model', '3', '45', 1),
(7320, 'Grand Voyager', 'Model', '3', '45', 1),
(7321, 'Laser', 'Model', '1', '45', 1),
(7323, 'Breeze', 'Model', '5', '45', 1),
(7341, 'G8', 'Model', '5', '46', 1),
(7344, 'Montana SV6', 'Model', '3', '46', 1),
(7373, 'Aztek', 'Model', '7', '46', 1),
(7376, 'G3', 'Model', '1', '46', 1),
(7400, 'GTO', 'Model', '10', '46', 1),
(7401, 'Vibe', 'Model', '1', '46', 1),
(7410, 'G5', 'Model', '10', '46', 1),
(7412, 'Torrent', 'Model', '7', '46', 1),
(7414, 'Montana', 'Model', '3', '46', 1),
(7433, 'Bonneville', 'Model', '5', '46', 1),
(7448, 'Trans Sport', 'Model', '3', '46', 1),
(7454, 'Taycan', 'Model', '5', '47', 1),
(7495, 'Cayenne Coupe', 'Model', '7', '47', 1),
(7516, '718 Boxster', 'Model', '9', '47', 1),
(7523, '718 Cayman', 'Model', '10', '47', 1),
(7535, 'Macan', 'Model', '7', '47', 1),
(7539, 'Panamera', 'Model', '5', '47', 1),
(7545, 'Carrera GT', 'Model', '9', '47', 1),
(7546, 'Cayman', 'Model', '10', '47', 1),
(7547, '928', 'Model', '1', '47', 1),
(7548, 'Boxster', 'Model', '9', '47', 1),
(7549, 'Cayenne', 'Model', '7', '47', 1),
(7683, '1500 Classic Regular Cab', 'Model', '14', '48', 1),
(7701, '1500 Classic Quad Cab', 'Model', '14', '48', 1),
(7709, '1500 Classic Crew Cab', 'Model', '14', '48', 1),
(7712, 'ProMaster 1500 Cargo', 'Model', '3', '48', 1),
(7713, 'ProMaster 3500 Cargo', 'Model', '3', '48', 1),
(7740, 'ProMaster City', 'Model', '3', '48', 1),
(7743, 'ProMaster Cargo Van', 'Model', '3', '48', 1),
(7748, 'ProMaster Window Van', 'Model', '3', '48', 1),
(7749, '1500 Crew Cab', 'Model', '14', '48', 1),
(7750, 'ProMaster 2500 Cargo', 'Model', '3', '48', 1),
(7756, 'C/V', 'Model', '3', '48', 1),
(7758, '1500 Quad Cab', 'Model', '14', '48', 1),
(7760, 'C/V Tradesman', 'Model', '3', '48', 1),
(7761, '1500 Regular Cab', 'Model', '14', '48', 1),
(7762, '2500 Mega Cab', 'Model', '14', '48', 1),
(7763, '2500 Crew Cab', 'Model', '14', '48', 1),
(7764, '3500 Mega Cab', 'Model', '14', '48', 1),
(7765, '3500 Regular Cab', 'Model', '14', '48', 1),
(7766, 'Dakota Extended Cab', 'Model', '14', '48', 1),
(7767, '3500 Crew Cab', 'Model', '14', '48', 1),
(7768, '2500 Regular Cab', 'Model', '14', '48', 1),
(7769, 'Dakota Crew Cab', 'Model', '14', '48', 1),
(7781, '9-4X', 'Model', '7', '50', 1),
(7790, '9-2X', 'Model', '11', '50', 1),
(7807, '9-7X', 'Model', '7', '50', 1),
(7824, 'Aura', 'Model', '5', '51', 1),
(7833, 'Relay', 'Model', '3', '51', 1),
(7840, 'Astra', 'Model', '1', '51', 1),
(7851, 'Outlook', 'Model', '7', '51', 1),
(7852, 'SKY', 'Model', '9', '51', 1),
(7856, 'VUE', 'Model', '7', '51', 1),
(7864, 'fortwo cabrio', 'Model', '9', '52', 1),
(7874, 'fortwo electric drive cabrio', 'Model', '9', '52', 1),
(7924, 'Crosstrek', 'Model', '7', '53', 1),
(7938, 'Ascent', 'Model', '7', '53', 1),
(7963, 'WRX', 'Model', '5', '53', 1),
(7966, 'XV Crosstrek', 'Model', '7', '53', 1),
(7967, 'BRZ', 'Model', '10', '53', 1),
(7973, 'B9 Tribeca', 'Model', '7', '53', 1),
(7980, 'Tribeca', 'Model', '7', '53', 1),
(7984, 'Baja', 'Model', '14', '53', 1),
(8012, 'Forester', 'Model', '7', '53', 1),
(8028, 'SVX', 'Model', '10', '53', 1),
(8030, 'Justy', 'Model', '1', '53', 1),
(8048, 'XL7', 'Model', '7', '54', 1),
(8077, 'Kizashi', 'Model', '5', '54', 1),
(8078, 'Equator Crew Cab', 'Model', '14', '54', 1),
(8086, 'Verona', 'Model', '5', '54', 1),
(8097, 'Equator Extended Cab', 'Model', '14', '54', 1),
(8103, 'Reno', 'Model', '1', '54', 1),
(8112, 'XL-7', 'Model', '7', '54', 1),
(8114, 'Samurai', 'Model', '7', '54', 1),
(8120, 'Vitara', 'Model', '7', '54', 1),
(8123, 'X-90', 'Model', '7', '54', 1),
(8124, 'Sidekick', 'Model', '7', '54', 1),
(8129, 'Grand Vitara', 'Model', '7', '54', 1),
(8137, 'Model 3', 'Model', '5', '55', 1),
(8143, 'Model X', 'Model', '7', '55', 1),
(8144, 'Model S', 'Model', '5', '55', 1),
(8700, 'GR Supra', 'Model', '10', '56', 1),
(8711, 'Corolla Hybrid', 'Model', '5', '56', 1),
(8716, 'Yaris Hatchback', 'Model', '1', '56', 1),
(8743, 'Highlander Hybrid', 'Model', '7', '56', 1),
(8751, 'Prius Prime', 'Model', '1', '56', 1),
(8758, 'C-HR', 'Model', '7', '56', 1),
(8772, 'Corolla Hatchback', 'Model', '1', '56', 1),
(8778, 'RAV4 Hybrid', 'Model', '7', '56', 1),
(8780, 'Avalon Hybrid', 'Model', '5', '56', 1),
(8787, '86', 'Model', '10', '56', 1),
(8794, 'Camry Hybrid', 'Model', '5', '56', 1),
(8798, 'Corolla iM', 'Model', '1', '56', 1),
(8802, 'Mirai', 'Model', '5', '56', 1),
(8810, 'Yaris iA', 'Model', '5', '56', 1),
(8894, 'Prius c', 'Model', '1', '56', 1),
(8896, 'Prius v', 'Model', '11', '56', 1),
(8897, 'Prius Plug-in Hybrid', 'Model', '1', '56', 1),
(8952, 'Venza', 'Model', '11', '56', 1),
(8988, 'FJ Cruiser', 'Model', '7', '56', 1),
(9009, 'Tundra CrewMax', 'Model', '14', '56', 1),
(9040, 'Tacoma Access Cab', 'Model', '14', '56', 1),
(9065, 'Tundra Double Cab', 'Model', '14', '56', 1),
(9101, 'Prius', 'Model', '5', '56', 1),
(9102, 'Highlander', 'Model', '7', '56', 1),
(9113, 'Sequoia', 'Model', '7', '56', 1),
(9131, 'Tacoma Double Cab', 'Model', '14', '56', 1),
(9136, 'Tundra Regular Cab', 'Model', '14', '56', 1),
(9150, 'Sienna', 'Model', '3', '56', 1),
(9155, 'Tundra Access Cab', 'Model', '14', '56', 1),
(9189, 'RAV4', 'Model', '7', '56', 1),
(9195, 'Avalon', 'Model', '5', '56', 1),
(9205, 'Tacoma Regular Cab', 'Model', '14', '56', 1),
(9211, 'Tacoma Xtracab', 'Model', '14', '56', 1),
(9213, 'T100 Xtracab', 'Model', '14', '56', 1),
(9237, 'Cressida', 'Model', '5', '56', 1),
(9240, 'Land Cruiser', 'Model', '7', '56', 1),
(9243, 'T100 Regular Cab', 'Model', '14', '56', 1),
(9244, '4Runner', 'Model', '7', '56', 1),
(9245, 'Regular Cab', 'Model', '14', '56', 1),
(9246, 'Supra', 'Model', '1', '56', 1),
(9248, 'Previa', 'Model', '3', '56', 1),
(9251, 'MR2', 'Model', '10', '56', 1),
(9252, 'Xtra Cab', 'Model', '14', '56', 1),
(9283, 'Jetta GLI', 'Model', '5', '57', 1),
(9298, 'Arteon', 'Model', '5', '57', 1),
(9299, 'Atlas', 'Model', '7', '57', 1),
(9303, 'Tiguan Limited', 'Model', '7', '57', 1),
(9306, 'Golf GTI', 'Model', '1', '57', 1),
(9328, 'Golf R', 'Model', '1', '57', 1),
(9337, 'Golf Alltrack', 'Model', '11', '57', 1),
(9341, 'e-Golf', 'Model', '1', '57', 1),
(9345, 'Golf SportWagen', 'Model', '11', '57', 1),
(9351, 'Jetta SportWagen', 'Model', '11', '57', 1),
(9370, 'CC', 'Model', '5', '57', 1),
(9373, 'Tiguan', 'Model', '7', '57', 1),
(9378, 'Routan', 'Model', '3', '57', 1),
(9383, 'Touareg 2', 'Model', '7', '57', 1),
(9389, 'Rabbit', 'Model', '1', '57', 1),
(9390, 'GLI', 'Model', '5', '57', 1),
(9405, 'Eos', 'Model', '9', '57', 1),
(9415, 'R32', 'Model', '1', '57', 1),
(9417, 'Phaeton', 'Model', '5', '57', 1),
(9421, 'Touareg', 'Model', '7', '57', 1),
(9439, 'Golf (New)', 'Model', '1', '57', 1),
(9447, 'GTI (New)', 'Model', '1', '57', 1),
(9449, 'Cabrio (New)', 'Model', '9', '57', 1),
(9455, 'Jetta (New)', 'Model', '5', '57', 1),
(9474, 'Cabrio', 'Model', '9', '57', 1),
(9476, 'Golf III', 'Model', '1', '57', 1),
(9478, 'Jetta III', 'Model', '5', '57', 1),
(9484, 'Eurovan', 'Model', '3', '57', 1),
(9487, 'GTI', 'Model', '1', '57', 1),
(9489, 'Corrado', 'Model', '10', '57', 1),
(9490, 'Golf', 'Model', '1', '57', 1),
(9493, 'Cabriolet', 'Model', '9', '57', 1),
(9517, 'V60', 'Model', '11', '58', 1),
(9531, 'XC40', 'Model', '7', '58', 1),
(9557, 'C30', 'Model', '1', '58', 1),
(9572, 'XC60', 'Model', '7', '58', 1),
(9600, 'V50', 'Model', '11', '58', 1),
(9609, 'S40 (New)', 'Model', '5', '58', 1),
(9620, 'XC70', 'Model', '11', '58', 1),
(9622, 'XC90', 'Model', '7', '58', 1),
(9631, 'S60', 'Model', '5', '58', 1),
(9635, 'S40', 'Model', '5', '58', 1),
(9636, 'V40', 'Model', '11', '58', 1),
(9643, 'S80', 'Model', '5', '58', 1),
(9646, 'V70', 'Model', '11', '58', 1),
(9647, 'S70', 'Model', '5', '58', 1),
(9652, 'S90', 'Model', '5', '58', 1),
(9654, 'V90', 'Model', '11', '58', 1),
(9676, 'Vanquish S', 'Model', '10', '2', 1),
(9692, 'DB9 GT', 'Model', '9', '2', 1),
(9704, 'Vanquish', 'Model', '9', '2', 1),
(9716, 'DBS', 'Model', '9', '2', 1),
(9730, 'Vantage', 'Model', '9', '2', 1),
(9732, 'DB9', 'Model', '10', '2', 1),
(9734, 'Virage', 'Model', '9', '2', 1),
(9754, 'A5 Sport', 'Model', '10', '3', 1),
(9784, 'A3', 'Model', '9', '3', 1),
(9812, 'RS 5', 'Model', '9', '3', 1),
(9826, 'R8', 'Model', '9', '3', 1),
(9830, 'A5', 'Model', '9', '3', 1),
(9839, 'S5', 'Model', '9', '3', 1),
(9855, 'RS 4', 'Model', '9', '3', 1),
(9872, 'A4 (2005.5)', 'Model', '11', '3', 1),
(9885, 'S4 (2005.5)', 'Model', '11', '3', 1),
(9928, 'TT', 'Model', '9', '3', 1),
(9930, 'S4', 'Model', '5', '3', 1),
(9932, 'A4', 'Model', '11', '3', 1),
(9936, 'S6', 'Model', '5', '3', 1),
(9944, 'A6', 'Model', '5', '3', 1),
(9946, '100', 'Model', '11', '3', 1),
(9960, 'i8', 'Model', '10', '9', 1),
(9966, '8 Series', 'Model', '9', '9', 1),
(9984, '2 Series', 'Model', '9', '9', 1),
(10012, 'M4', 'Model', '9', '9', 1),
(10014, '4 Series', 'Model', '9', '9', 1),
(10082, '1 Series', 'Model', '9', '9', 1),
(10109, 'M6', 'Model', '9', '9', 1),
(10121, '6 Series', 'Model', '10', '9', 1),
(10123, 'Z4', 'Model', '10', '9', 1),
(10131, 'Z4 M', 'Model', '10', '9', 1),
(10197, 'Z3', 'Model', '10', '9', 1),
(10212, 'M3', 'Model', '10', '9', 1),
(10229, '3 Series', 'Model', '5', '9', 1),
(10233, '5 Series', 'Model', '5', '9', 1),
(10266, 'Continental', 'Model', '5', '4', 1),
(10292, 'Century', 'Model', '11', '5', 1),
(10306, 'Regal', 'Model', '5', '5', 1),
(10308, 'Roadmaster', 'Model', '11', '5', 1),
(10310, 'Skylark', 'Model', '10', '5', 1),
(10322, 'ATS-V', 'Model', '10', '6', 1),
(10335, 'ATS', 'Model', '5', '6', 1),
(10340, 'CTS', 'Model', '11', '6', 1),
(10344, 'DeVille', 'Model', '10', '6', 1),
(10346, 'Fleetwood', 'Model', '10', '6', 1),
(10370, 'Cruze', 'Model', '1', '7', 1),
(10402, 'Sonic', 'Model', '1', '7', 1),
(10444, 'Cobalt', 'Model', '10', '7', 1),
(10454, 'Aveo', 'Model', '1', '7', 1),
(10460, 'Malibu', 'Model', '5', '7', 1),
(10549, 'Caprice Classic', 'Model', '11', '7', 1),
(10551, 'Lumina', 'Model', '10', '7', 1),
(10553, 'Caprice', 'Model', '11', '7', 1),
(10555, 'Camaro', 'Model', '9', '7', 1),
(10559, 'Cavalier', 'Model', '9', '7', 1),
(10561, 'Corvette', 'Model', '9', '7', 1),
(10703, '200', 'Model', '5', '8', 1),
(10730, 'Crossfire', 'Model', '9', '8', 1),
(10738, 'PT Cruiser', 'Model', '9', '8', 1),
(10748, 'Sebring', 'Model', '9', '8', 1),
(10756, 'LeBaron', 'Model', '9', '8', 1),
(10778, 'Stratus', 'Model', '5', '11', 1),
(10794, 'Viper', 'Model', '9', '11', 1),
(10802, 'Shadow', 'Model', '9', '11', 1),
(10817, 'Summit', 'Model', '11', '12', 1),
(10819, '430 Scuderia', 'Model', '9', '13', 1),
(10827, 'F430', 'Model', '10', '13', 1),
(10835, '500 Abarth', 'Model', '9', '14', 1),
(10837, '500', 'Model', '9', '14', 1),
(10843, 'Storm', 'Model', '1', '20', 1),
(10849, 'Metro', 'Model', '9', '20', 1),
(10978, 'Accord', 'Model', '11', '21', 1),
(10981, 'Civic', 'Model', '10', '21', 1),
(10999, 'H2', 'Model', '14', '22', 1),
(11011, 'H1', 'Model', '11', '22', 1),
(11087, 'Elantra', 'Model', '11', '23', 1),
(11091, 'Accent', 'Model', '5', '23', 1),
(11097, 'Excel', 'Model', '1', '23', 1),
(11108, 'Q60', 'Model', '9', '24', 1),
(11128, 'G', 'Model', '9', '24', 1),
(11130, 'M', 'Model', '9', '24', 1),
(11157, 'XF', 'Model', '5', '26', 1),
(11167, 'F-TYPE', 'Model', '10', '26', 1),
(11185, 'X-Type', 'Model', '11', '26', 1),
(11202, 'XJ', 'Model', '9', '26', 1),
(11204, 'XK', 'Model', '10', '26', 1),
(11240, 'Forte', 'Model', '10', '28', 1),
(11268, 'Rio', 'Model', '11', '28', 1),
(11272, 'Spectra', 'Model', '1', '28', 1),
(11290, 'Huracan', 'Model', '9', '29', 1),
(11300, 'Aventador', 'Model', '10', '29', 1),
(11310, 'Gallardo', 'Model', '9', '29', 1),
(11312, 'Murcielago LP640', 'Model', '9', '29', 1),
(11316, 'Murcielago', 'Model', '10', '29', 1),
(11336, 'IS', 'Model', '1', '31', 1),
(11381, 'MAZDA3', 'Model', '1', '34', 1),
(11384, 'MAZDA6', 'Model', '1', '34', 1),
(11402, 'GranTurismo', 'Model', '9', '35', 1),
(11404, 'GranSport', 'Model', '9', '35', 1),
(11406, '570S', 'Model', '9', '37', 1),
(11410, 'MP4-12C', 'Model', '9', '37', 1),
(11412, '650S', 'Model', '9', '37', 1),
(11457, 'Mercedes-AMG E-Class', 'Model', '11', '38', 1),
(11463, 'Mercedes-AMG C-Class', 'Model', '10', '38', 1),
(11468, 'Mercedes-AMG GT', 'Model', '9', '38', 1),
(11475, 'Mercedes-AMG S-Class', 'Model', '9', '38', 1),
(11518, 'SLS-Class', 'Model', '10', '38', 1),
(11568, 'C-Class', 'Model', '11', '38', 1),
(11580, 'CLK-Class', 'Model', '9', '38', 1),
(11594, 'S-Class', 'Model', '10', '38', 1),
(11598, 'E-Class', 'Model', '5', '38', 1),
(11600, '300 CE', 'Model', '9', '38', 1),
(11644, 'Sable', 'Model', '11', '39', 1),
(11646, 'Topaz', 'Model', '10', '39', 1),
(11648, 'Tracer', 'Model', '11', '39', 1),
(11676, 'Lancer', 'Model', '11', '41', 1),
(11700, 'Eclipse', 'Model', '9', '41', 1),
(11704, '3000GT', 'Model', '1', '41', 1),
(11716, 'Diamante', 'Model', '11', '41', 1),
(11720, 'Mirage', 'Model', '5', '41', 1),
(11752, '370Z', 'Model', '10', '42', 1),
(11760, 'Altima', 'Model', '10', '42', 1),
(11772, 'Versa', 'Model', '5', '42', 1),
(11778, '350Z', 'Model', '9', '42', 1),
(11788, '300ZX', 'Model', '9', '42', 1),
(11794, '240SX', 'Model', '9', '42', 1),
(11796, 'Sentra', 'Model', '5', '42', 1),
(11822, 'Ciera', 'Model', '11', '43', 1),
(11826, 'Alero', 'Model', '10', '43', 1),
(11835, 'Achieva', 'Model', '10', '43', 1),
(11840, 'Cutlass Supreme', 'Model', '5', '43', 1),
(11842, 'Cutlass Ciera', 'Model', '11', '43', 1),
(11846, 'Esperante', 'Model', '9', '44', 1),
(11850, 'Colt', 'Model', '5', '45', 1),
(11858, 'Neon', 'Model', '5', '45', 1),
(11864, 'G6 (2009.5)', 'Model', '9', '46', 1),
(11888, 'G6', 'Model', '5', '46', 1),
(11899, 'Solstice', 'Model', '10', '46', 1),
(11955, 'Sunfire', 'Model', '5', '46', 1),
(11962, 'LeMans', 'Model', '5', '46', 1),
(11966, 'Grand Prix', 'Model', '10', '46', 1),
(11975, 'Firebird', 'Model', '9', '46', 1),
(11977, 'Grand Am', 'Model', '10', '46', 1),
(11980, 'Sunbird', 'Model', '9', '46', 1),
(12030, '911', 'Model', '10', '47', 1),
(12092, '9000', 'Model', '5', '50', 1),
(12096, '5-Sep', 'Model', '5', '50', 1),
(12104, '3-Sep', 'Model', '9', '50', 1),
(12110, '900', 'Model', '9', '50', 1),
(12145, 'Ion', 'Model', '10', '51', 1),
(12147, 'L-Series', 'Model', '11', '51', 1),
(12161, 'S-Series', 'Model', '11', '51', 1),
(12179, 'fortwo electric drive', 'Model', '9', '52', 1),
(12183, 'fortwo', 'Model', '9', '52', 1),
(12280, 'Outback', 'Model', '5', '53', 1),
(12294, 'Impreza', 'Model', '5', '53', 1),
(12296, 'Loyale', 'Model', '11', '53', 1),
(12298, 'Legacy', 'Model', '11', '53', 1),
(12324, 'SX4', 'Model', '1', '54', 1),
(12328, 'Forenza', 'Model', '11', '54', 1),
(12336, 'Aerio', 'Model', '11', '54', 1),
(12342, 'Esteem', 'Model', '11', '54', 1),
(12344, 'Swift', 'Model', '1', '54', 1),
(12447, 'Yaris', 'Model', '5', '56', 1),
(12455, 'Matrix', 'Model', '11', '56', 1),
(12467, 'Echo', 'Model', '10', '56', 1),
(12469, 'Solara', 'Model', '9', '56', 1),
(12479, 'Paseo', 'Model', '9', '56', 1),
(12509, 'Tercel', 'Model', '5', '56', 1),
(12512, 'Celica', 'Model', '1', '56', 1),
(12516, 'Camry', 'Model', '11', '56', 1),
(12518, 'Corolla', 'Model', '11', '56', 1),
(12533, 'Beetle', 'Model', '9', '57', 1),
(12577, 'New Beetle', 'Model', '1', '57', 1),
(12581, 'Passat (New)', 'Model', '11', '57', 1),
(12587, 'Jetta', 'Model', '11', '57', 1),
(12603, 'Fox', 'Model', '10', '57', 1),
(12607, 'Passat', 'Model', '11', '57', 1),
(12617, 'C70', 'Model', '9', '58', 1),
(12631, '850', 'Model', '5', '58', 1),
(12645, '940', 'Model', '11', '58', 1),
(12647, '240', 'Model', '5', '58', 1),
(12649, '960', 'Model', '11', '58', 1),
(12651, '740', 'Model', '5', '58', 1),
(12653, 'Other', 'brand', NULL, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_brandmodels_old`
--

CREATE TABLE `car_brandmodels_old` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `name` char(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` char(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_brandmodels_old`
--

INSERT INTO `car_brandmodels_old` (`id`, `parent`, `name`, `type`, `status`, `category_id`) VALUES
(1, 0, 'Alfa Romeo', 'brand', 1, 1),
(2, 0, ' Acura', 'brand', 1, 2),
(3, 0, ' Aston Martin', 'brand', 1, 2),
(4, 0, ' Audi', 'brand', 1, 2),
(5, 0, 'Bentley', 'brand', 1, 2),
(6, 0, ' BMW', 'brand', 1, 2),
(7, 0, ' Cadillac', 'brand', 1, 2),
(8, 0, ' Chevrolet', 'brand', 1, 2),
(9, 0, ' Chrysler', 'brand', 1, 2),
(10, 0, ' Citroen', 'brand', 1, 2),
(11, 0, ' Corvette', 'brand', 1, 2),
(12, 0, ' Dacia', 'brand', 1, 2),
(13, 0, ' Dodge', 'brand', 1, 2),
(14, 0, ' Ferrari', 'brand', 1, 2),
(15, 0, ' Fiat', 'brand', 1, 2),
(16, 0, ' Ford', 'brand', 1, 2),
(17, 0, ' GMC', 'brand', 1, 2),
(18, 0, ' Honda', 'brand', 1, 2),
(19, 0, ' Hyundai', 'brand', 1, 2),
(20, 0, ' Infiniti', 'brand', 1, 2),
(21, 0, ' Isuzu', 'brand', 1, 2),
(22, 0, ' Jaguar', 'brand', 1, 2),
(23, 0, ' Jeep', 'brand', 1, 2),
(24, 0, ' KIA', 'brand', 1, 2),
(25, 0, ' Lamborghini', 'brand', 1, 2),
(26, 0, ' Lancia', 'brand', 1, 2),
(27, 0, ' Land Rover', 'brand', 1, 2),
(28, 0, ' Lexus', 'brand', 1, 2),
(29, 0, ' Lotus', 'brand', 1, 2),
(30, 0, ' Maserati', 'brand', 1, 2),
(31, 0, ' Mazda', 'brand', 1, 2),
(32, 0, ' McLaren', 'brand', 1, 2),
(33, 0, ' Mercedes-Benz', 'brand', 1, 2),
(34, 0, ' Mini', 'brand', 1, 2),
(35, 0, ' Mitsubishi', 'brand', 1, 2),
(36, 0, ' Nissan', 'brand', 1, 2),
(37, 0, ' Opel', 'brand', 1, 2),
(38, 0, ' Peugeot', 'brand', 1, 2),
(39, 0, ' Porsche', 'brand', 1, 2),
(40, 0, ' Proton', 'brand', 1, 2),
(41, 0, ' Renault', 'brand', 1, 2),
(42, 0, ' Rolls-Royce', 'brand', 1, 2),
(43, 0, ' Saab', 'brand', 1, 2),
(44, 0, ' Seat', 'brand', 1, 2),
(45, 0, ' Skoda', 'brand', 1, 2),
(46, 0, ' Subaru', 'brand', 1, 2),
(47, 0, ' Suzuki', 'brand', 1, 2),
(48, 0, ' Toyota', 'brand', 1, 2),
(49, 0, ' Vauxhall', 'brand', 1, 2),
(50, 0, ' Volkswagen', 'brand', 1, 2),
(51, 0, ' Volvo', 'brand', 1, 2),
(52, 6, 'F48', 'model', 1, NULL),
(53, 6, 'F80', 'model', 1, NULL),
(54, 6, 'F82', 'model', 1, NULL),
(55, 6, 'F83', 'model', 1, NULL),
(56, 6, 'F85', 'model', 1, NULL),
(57, 6, 'F86', 'model', 1, NULL),
(58, 6, 'G11', 'model', 1, NULL),
(59, 6, 'G12', 'model', 1, NULL),
(60, 6, 'G30', 'model', 1, NULL),
(61, 6, 'E24', 'model', 1, NULL),
(62, 6, 'M3', 'model', 1, NULL),
(63, 6, 'M5', 'model', 1, NULL),
(64, 6, 'Z4 Roadster', 'model', 1, NULL),
(65, 6, 'X6M', 'model', 1, NULL),
(66, 4, 'A1', 'model', 1, NULL),
(67, 4, 'A4', 'model', 1, NULL),
(68, 4, 'A5', 'model', 1, NULL),
(69, 4, 'A6', 'model', 1, NULL),
(70, 4, 'A7', 'model', 1, NULL),
(71, 4, 'A8', 'model', 1, NULL),
(72, 4, 'TT', 'model', 1, NULL),
(73, 4, 'R8', 'model', 1, NULL),
(74, 4, 'Q3', 'model', 1, NULL),
(75, 4, 'Q5', 'model', 1, NULL),
(76, 4, 'Q7', 'model', 1, NULL),
(77, 48, 'Prius', 'model', 1, NULL),
(78, 48, 'Celica', 'model', 1, NULL),
(79, 48, 'Supra', 'model', 1, NULL),
(80, 48, 'Carina', 'model', 1, NULL),
(81, 48, 'Camry', 'model', 1, NULL),
(82, 48, 'MR2', 'model', 1, NULL),
(83, 48, 'Premio', 'model', 1, NULL),
(84, 48, 'Corolla', 'model', 1, NULL),
(85, 48, 'Allion', 'model', 1, NULL),
(86, 48, 'Axio', 'model', 1, NULL),
(87, 16, 'Escape', 'model', 1, NULL),
(88, 16, 'Mustang', 'model', 1, NULL),
(89, 16, 'Fusion', 'model', 1, NULL),
(90, 16, 'Taurus', 'model', 1, NULL),
(91, 16, 'Explorer', 'model', 1, NULL),
(92, 16, 'Edge', 'model', 1, NULL),
(93, 16, 'Fiesta', 'model', 1, NULL),
(94, 39, 'Cayenne', 'model', 1, NULL),
(95, 39, '911', 'model', 1, NULL),
(96, 39, 'Boxster', 'model', 1, NULL),
(97, 39, '912', 'model', 1, NULL),
(98, 39, 'Panamera', 'model', 1, NULL),
(99, 39, 'Carrera', 'model', 1, NULL),
(100, 39, 'Cayman', 'model', 1, NULL),
(101, 7, 'Escalade', 'model', 1, NULL),
(102, 7, 'CTS-V', 'model', 1, NULL),
(103, 7, 'SRX', 'model', 1, NULL),
(104, 7, 'Eldorado', 'model', 1, NULL),
(105, 7, 'Cimarron', 'model', 1, NULL),
(106, 7, 'Seville', 'model', 1, NULL),
(107, 7, 'XTS', 'model', 1, NULL),
(108, 7, 'ATS', 'model', 1, NULL),
(109, 14, '750 Monza', 'model', 1, NULL),
(110, 14, 'Barchetta', 'model', 1, NULL),
(111, 14, '312PB', 'model', 1, NULL),
(112, 14, 'Testa Rossa', 'model', 1, NULL),
(113, 14, '330 LMB', 'model', 1, NULL),
(114, 14, '458 Italia', 'model', 1, NULL),
(115, 1, 'MiTo', 'model', 1, NULL),
(116, 1, 'Giulietta', 'model', 1, NULL),
(117, 1, '4C', 'model', 1, NULL),
(118, 2, 'ILX', 'model', 1, NULL),
(119, 2, 'MDX', 'model', 1, NULL),
(120, 2, 'RDX', 'model', 1, NULL),
(121, 2, 'RLX', 'model', 1, NULL),
(122, 2, 'TLX', 'model', 1, NULL),
(123, 3, 'V8 Vantage', 'model', 1, NULL),
(124, 3, 'V12 Vantage', 'model', 1, NULL),
(125, 3, 'DB9', 'model', 1, NULL),
(126, 3, 'Vanquish', 'model', 1, NULL),
(127, 3, 'Rapide', 'model', 1, NULL),
(128, 8, 'Agile', 'model', 1, NULL),
(129, 8, 'Aveo', 'model', 1, NULL),
(130, 8, 'Celta', 'model', 1, NULL),
(131, 8, 'Classic', 'model', 1, NULL),
(132, 8, 'Lova', 'model', 1, NULL),
(133, 8, 'Lanos', 'model', 1, NULL),
(134, 8, 'Onix', 'model', 1, NULL),
(135, 8, 'Prisma', 'model', 1, NULL),
(136, 8, 'Sail', 'model', 1, NULL),
(137, 8, 'Sonic', 'model', 1, NULL),
(138, 8, 'Spark', 'model', 1, NULL),
(139, 8, 'Cobalt', 'model', 1, NULL),
(140, 8, 'Cruze', 'model', 1, NULL),
(141, 8, 'Lacetti', 'model', 1, NULL),
(142, 8, 'Volt', 'model', 1, NULL),
(143, 8, 'Malibu', 'model', 1, NULL),
(144, 8, 'Caprice', 'model', 1, NULL),
(145, 8, 'Impala', 'model', 1, NULL),
(146, 8, 'Lumina', 'model', 1, NULL),
(147, 8, 'SS', 'model', 1, NULL),
(148, 8, 'Corvette', 'model', 1, NULL),
(149, 8, 'Camaro', 'model', 1, NULL),
(150, 8, 'Orlando', 'model', 1, NULL),
(151, 8, 'Spin', 'model', 1, NULL),
(152, 8, 'Tavera', 'model', 1, NULL),
(153, 8, 'Captiva', 'model', 1, NULL),
(154, 8, 'Niva', 'model', 1, NULL),
(155, 8, 'Colorado', 'model', 1, NULL),
(156, 8, 'Express', 'model', 1, NULL),
(157, 8, 'Montana', 'model', 1, NULL),
(158, 8, 'Tornado', 'model', 1, NULL),
(159, 9, 'Ypsilon', 'model', 1, NULL),
(160, 9, 'Delta', 'model', 1, NULL),
(161, 9, '300', 'model', 1, NULL),
(162, 9, 'Grand Voyager', 'model', 1, NULL),
(163, 10, 'C1', 'model', 1, NULL),
(164, 10, 'C4 Picasso', 'model', 1, NULL),
(165, 10, 'Aircross', 'model', 1, NULL),
(166, 10, 'C- Elysse', 'model', 1, NULL),
(167, 10, 'C3 Picasso', 'model', 1, NULL),
(168, 10, 'C4', 'model', 1, NULL),
(169, 10, 'C4 Cactus', 'model', 1, NULL),
(170, 13, 'Avenger', 'model', 1, NULL),
(171, 13, 'Grand Caravan', 'model', 1, NULL),
(172, 13, 'Challenger', 'model', 1, NULL),
(173, 13, 'Charger', 'model', 1, NULL),
(174, 13, 'Dart', 'model', 1, NULL),
(175, 13, 'Durango', 'model', 1, NULL),
(176, 13, 'Journey', 'model', 0, NULL),
(177, 17, 'Sierra', 'model', 1, NULL),
(178, 17, 'Syclone', 'model', 1, NULL),
(179, 17, 'Sonoma', 'model', 1, NULL),
(180, 17, 'Canyon', 'model', 1, NULL),
(181, 17, 'TopKick', 'model', 1, NULL),
(182, 17, 'Forward', 'model', 1, NULL),
(183, 17, 'W-Series', 'model', 1, NULL),
(184, 17, 'T-Series', 'model', 1, NULL),
(185, 17, 'Typhoon', 'model', 1, NULL),
(186, 17, 'Envoy', 'model', 1, NULL),
(187, 17, 'Acadia', 'model', 1, NULL),
(188, 17, 'Terrain', 'model', 1, NULL),
(189, 18, 'Accord', 'model', 1, NULL),
(190, 18, 'Acty', 'model', 1, NULL),
(191, 18, 'Brio', 'model', 1, NULL),
(192, 18, 'City', 'model', 1, NULL),
(193, 18, 'Civic', 'model', 1, NULL),
(194, 18, 'CR-V', 'model', 1, NULL),
(195, 18, 'Elysion', 'model', 1, NULL),
(196, 18, 'HR-V', 'model', 1, NULL),
(197, 18, 'NSX', 'model', 1, NULL),
(198, 18, 'Pilot', 'model', 1, NULL),
(199, 18, 'Shuttle', 'model', 1, NULL),
(200, 18, 'Vamos', 'model', 1, NULL),
(201, 18, 'ZEST', 'model', 1, NULL),
(202, 19, 'Accent', 'model', 1, NULL),
(203, 19, 'Ventam Genesis', 'model', 1, NULL),
(204, 19, 'Eon', 'model', 1, NULL),
(205, 19, 'Atos', 'model', 1, NULL),
(206, 19, 'Santro', 'model', 1, NULL),
(207, 19, 'Avante', 'model', 1, NULL),
(208, 0, 'tesyt', 'brand', 1, 2),
(210, 0, 'test brand3', 'brand', 0, 2),
(211, 0, 'test brand4', 'brand', 1, 2),
(214, 0, 'Tesla', 'brand', 1, 2),
(215, 214, 'Model S', 'model', 1, NULL),
(216, 214, 'Model X', 'model', 1, NULL),
(217, 214, 'Model 3', 'model', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_categories`
--

CREATE TABLE `car_categories` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `title` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fa_icon` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `featured_img` char(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `show_menu` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `create_time` int(15) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_categories`
--

INSERT INTO `car_categories` (`id`, `parent`, `title`, `fa_icon`, `featured_img`, `show_menu`, `created_by`, `create_time`, `status`) VALUES
(1, 0, 'Hatchback', 'fa-car', 'hatchback.png', 0, 1, 1516955775, 1),
(3, 0, 'Van', 'fa-car', 'van.png', 0, 1, 1516955797, 1),
(5, 0, 'Sedan', 'fa-car', 'sedan.png', 0, 1, 1516955836, 1),
(7, 0, 'SUV', 'fa-car', 'suv.png', 0, 1, 1516955873, 1),
(9, 0, 'Convertible', 'fa-car', 'convertible.png', 0, 1, 1516955916, 1),
(10, 0, 'Coupe', 'fa-car', 'coupe.png', 0, 1, 1516955943, 1),
(11, 0, 'Wagon', '', '', 0, 0, 0, 0),
(14, 0, 'Pickup', '', '', 0, 0, 0, 0),
(19, 0, 'Other', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `car_contact`
--

CREATE TABLE `car_contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `vehicleMake` varchar(255) DEFAULT NULL,
  `vehicleModel` varchar(255) DEFAULT NULL,
  `vehicleRegNo` varchar(255) DEFAULT NULL,
  `yearofManufacture` varchar(255) DEFAULT NULL,
  `valueofVehicle` varchar(255) DEFAULT NULL,
  `created_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_contact`
--

INSERT INTO `car_contact` (`id`, `fname`, `lname`, `email`, `message`, `vehicleMake`, `vehicleModel`, `vehicleRegNo`, `yearofManufacture`, `valueofVehicle`, `created_date`) VALUES
(1, 'harsh', 'asd', 'har@gmail.com', 'zxcxcxz', NULL, NULL, NULL, NULL, NULL, '2020-08-12 20:13:35'),
(2, 'steav', 'james', 'dgauravsamsung@gmail.com', 'hello', '2015', 'auti q7', '123456', '2015', '10000', '2021-07-09 16:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `car_contact_offer`
--

CREATE TABLE `car_contact_offer` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `sender_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_contact_offer`
--

INSERT INTO `car_contact_offer` (`id`, `post_id`, `seller_id`, `sender_name`, `sender_email`, `phone`, `subject`, `message`, `amount`, `created_date`) VALUES
(1, 3, 2, 'Harsh', 'harsh@gmail.com', '9989559963', 'Notification for test case', 'Hello ', '', '2020-07-31 22:34:36'),
(2, 9, 4, 'y', 'r@gmail.com', '131212', 'Teting', 'Testing the messga', '', '2020-08-15 10:16:31'),
(3, 9, 4, 'dj`', 'fdjb@gmail.com', '234324', 'Testing Seller', 'Testing seller maessage make an offer\r\n', '2332', '2020-08-15 10:17:39'),
(4, 23, 9, 'keshav', 'keshav@gmail.com', '39856329853622375639239562', 'I would like ot make this offer', 'Let me know your thoughts', '34347687', '2020-09-07 21:42:57'),
(5, 23, 9, 'kehsav', 'keshav@gmail.com', '235732748236587325328', 'I wold llike to contact', 'Testing', '', '2020-09-07 21:43:37'),
(6, 24, 9, 'Abhay Desai', 'abhay.desai1886@gmail.com', '7894041007', 'Test ', 'Testing ', '', '2020-12-17 15:16:32'),
(7, 5, 1, 'amar', 'dgauravsamsung@gmail.com', '8798675412', 'need your car', 'need it urgently...', '', '2021-07-09 15:59:56'),
(8, 16, 22, 'amar', 'dgauravsamsung@gmail.com', '1234567896', 'need car', 'need car urgently...', '', '2021-07-09 16:10:32'),
(9, 16, 22, 'amar', 'dgauravsamsung@gmail.com', '1234567898', 'need it badly', 'need it badly', '150', '2021-07-09 16:11:32'),
(10, 15, 22, 'zamil', 'dgauravsamsung@gmail.com', '1234567890', 'need your car', 'need your car', '20000', '2021-07-09 16:47:34'),
(11, 15, 22, 'zamil', 'dgauravsamsung@gmail.com', '1234567890', 'need your car', 'need your car...', '', '2021-07-09 16:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `car_locations`
--

CREATE TABLE `car_locations` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `parent_country` int(11) NOT NULL,
  `name` char(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_locations`
--

INSERT INTO `car_locations` (`id`, `parent`, `parent_country`, `name`, `type`, `status`) VALUES
(93, 0, 0, 'Uganda', 'country', 1),
(94, 93, 93, 'Adjumani', 'state', 1),
(95, 93, 93, 'Arua Municipality', 'state', 1),
(96, 93, 93, 'Aswa', 'state', 1),
(97, 93, 93, 'Bamunanika', 'state', 1),
(98, 93, 93, 'Budadiri', 'state', 1),
(99, 93, 93, 'Bungokho', 'state', 1),
(100, 93, 93, 'Busia', 'state', 1),
(101, 93, 93, 'Busujju', 'state', 1),
(102, 93, 93, 'Iganga', 'state', 1),
(103, 93, 93, 'Jinja', 'state', 1),
(104, 93, 93, '\r\nKaabong', 'state', 1),
(105, 93, 93, '\r\nKabale', 'state', 1),
(106, 93, 93, '\r\nKabarole', 'state', 1),
(107, 93, 93, '\r\nKaberamaido', 'state', 1),
(108, 93, 93, '\r\nKalangala', 'state', 1),
(109, 93, 93, '\r\nKampala', 'state', 1),
(110, 93, 93, '\r\nKamuli', 'state', 1),
(111, 93, 93, '\r\nKasese', 'state', 1),
(112, 93, 93, '\r\nKashari', 'state', 1),
(113, 93, 93, '\r\nKayunga', 'state', 1),
(114, 93, 93, '\r\nKibale', 'state', 1),
(115, 93, 93, '\r\nKiboga', 'state', 1),
(116, 93, 93, '\r\nKisoro', 'state', 1),
(117, 93, 93, '\r\nKitgum', 'state', 1),
(118, 93, 93, '\r\nKumi', 'state', 1),
(119, 93, 93, '\r\nLira', 'state', 1),
(120, 93, 93, '\r\nMasaka', 'state', 1),
(121, 93, 93, '\r\nMasindi', 'state', 1),
(122, 93, 93, '\r\nMoroto', 'state', 1),
(123, 93, 93, '\r\nMoyo', 'state', 1),
(125, 93, 93, 'Mpigi', 'state', 1),
(126, 93, 93, 'Mubende', 'state', 1),
(127, 93, 93, 'Nakasongola', 'state', 1),
(128, 93, 93, 'Nebbi', 'state', 1),
(129, 93, 93, 'Ntungamo', 'state', 1),
(130, 93, 93, 'Pallisa', 'state', 1),
(131, 93, 93, 'Soroti', 'state', 1),
(132, 93, 93, 'Tororo', 'state', 1),
(133, 93, 93, 'Usuk', 'state', 1),
(134, 93, 93, 'Wakiso', 'state', 1),
(135, 104, 93, '', 'city', 1),
(136, 119, 93, '', 'city', 1),
(137, 111, 93, '', 'city', 1),
(138, 105, 93, '', 'city', 1),
(139, 107, 93, '', 'city', 1),
(140, 108, 93, '', 'city', 1),
(141, 110, 93, '', 'city', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_pages`
--

CREATE TABLE `car_pages` (
  `id` int(11) NOT NULL,
  `alias` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `show_in_menu` int(1) NOT NULL DEFAULT 1,
  `layout` int(1) NOT NULL,
  `content_from` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Manual',
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` char(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sidebar` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seo_settings` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(20) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `editable` int(1) NOT NULL DEFAULT 1,
  `parent` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_pages`
--

INSERT INTO `car_pages` (`id`, `alias`, `show_in_menu`, `layout`, `content_from`, `title`, `url`, `content`, `sidebar`, `seo_settings`, `create_time`, `status`, `editable`, `parent`) VALUES
(1, 'home', 1, 1, 'Url', '[home]', '', '', '', '{\"meta_description\":\"search top cars near your location of various categories like coupe sedan van suv\",\"key_words\":\"sale,rent,buy,classified,cms,whiz,electronics,real estate,pets,fashion\",\"crawl_after\":\"3\"}', 1522345431, 1, 0, 0),
(2, 'advanced_search', 0, 1, 'Url', '[advanced_search]', 'results', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408308, 1, 0, 0),
(3, 'about', 0, 1, 'Manual', '[about]', 'page/about', '<p>Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet.</p>\r\n<p>Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<p>Phone : +34534223434</p>\r\n<p>Mail : webheliosteam@gmail.com</p>', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408057, 1, 0, 0),
(4, 'contactus', 1, 1, 'Url', '[contact us]', 'contact', '', '', '{\"meta_description\":\"contact us page for carbiz, this meta will be read by search engine\",\"key_words\":null,\"crawl_after\":\"3\"}', 1594409806, 1, 1, 0),
(5, 'users', 0, 0, 'Url', '[users]', 'users', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408183, 1, 1, 0),
(6, 'blog', 0, 0, 'Url', '[blog]', 'blog-posts', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594407898, 1, 1, 0),
(7, 'news', 0, 0, 'Url', '[news]', 'news-posts', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408157, 1, 1, 0),
(8, 'articles', 0, 0, 'Url', '[articles]', 'article-posts', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408140, 1, 1, 0),
(9, 'pages', 0, 0, 'Url', '[pages]', '#', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408214, 1, 1, 0),
(10, 'post_ad', 0, 0, 'Url', '[post_ad]', 'post-ad', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594409138, 1, 1, 0),
(11, 'locations', 0, 2, 'Url', '[locations]', 'locations', '', '', '{\"meta_description\":\"city, state, country\",\"key_words\":null,\"crawl_after\":\"3\"}', 1594408233, 1, 1, 0),
(12, 'terms_and_conditions', 0, 2, 'Manual', '[terms_and_conditions]', 'page/terms_and_conditions', '<p>Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.</p>\r\n<p style=text-align: justify>Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.Lorem ipsum doller sit amet.</p>', '', '{\"meta_description\":\"\",\"key_words\":\"\",\"crawl_after\":\"\"}', 1521907849, 1, 1, 0),
(13, 'cookie_policy', 0, 2, 'Manual', '[cookie_policy]', 'page/cookie_policy', '<div class=col-md-9>\n<div class=page-sidebar>\n<p style=margin: 0cm 0cm 12pt><strong>What are Cookies?</strong><br /> A cookie is a very small piece of information that a website stores to save and collect basic information.<br style=box-sizing: border-box /> Many cookies are essential to the operation of our website, for example to allow you to make a purchase or create an account with us.<br style=box-sizing: border-box /> Cookies on our site are also used to customise certain areas of content just for you, and to make your browsing experience more efficient and faster.<br style=box-sizing: border-box /> <br style=box-sizing: border-box /> <strong>How we use Cookies</strong><br style=box-sizing: border-box /> Cookies on our website are used for the following purposes</p>\n<ul style=list-style-type: disc>\n<li style=margin-bottom: 3pt>To enable you to login to the system</li>\n<li style=margin-bottom: 3pt box-sizing: border-box background-position: 0px 0.45em>To enable you to system messages</li>\n<li style=margin-bottom: 3pt box-sizing: border-box background-position: 0px 0.45em>To improve the website\'s usability by saving loading time</li>\n<li style=margin-bottom: 3pt box-sizing: border-box background-position: 0px 0.45em>To analyse the use of our website through Analytics software such as Google Analytics.</li>\n</ul>\n<p></p>\n<p><strong>Information Collected</strong><br style=box-sizing: border-box /> The cookies our website doesn\'t collect any private data</p>\n</div>\n</div>', '', '{\"meta_description\":\"cookie policy\",\"key_words\":\"cookie,policy\",\"crawl_after\":\"3\"}', 1476443264, 1, 1, 0),
(14, 'pricing', 0, 2, 'Url', '[pricing]', 'pricing', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408097, 1, 1, 0),
(15, 'usedcar', 1, 0, 'Url', '[used car]', 'used-car', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408541, 1, 1, 0),
(16, 'rentcar', 1, 0, 'Url', '[rent car]', 'rent-car', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408603, 1, 1, 0),
(17, 'newcar', 1, 0, 'Url', '[New car]', 'new-car', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594408631, 1, 1, 0),
(18, 'valueyourcar', 1, 0, 'Manual', '[Value Your car]', 'page/valueyourcar', '<h1>Coming soon...</h1>', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594749415, 1, 1, 0),
(19, 'carreviews', 1, 2, 'Manual', '[car reviews]', 'page/carreviews', '<h2>Coming Soon...</h2>', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594754977, 1, 1, 0),
(20, 'list-view', 0, 0, 'Url', '[list view]', 'list-view', '', '', '{\"meta_description\":\"\",\"key_words\":null,\"crawl_after\":\"\"}', 1594789494, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `car_posts`
--

CREATE TABLE `car_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `browser_id` varchar(255) DEFAULT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` decimal(2,1) NOT NULL DEFAULT 0.0,
  `advert_type` text DEFAULT NULL,
  `category` int(11) NOT NULL DEFAULT 0,
  `brand` int(11) NOT NULL DEFAULT 0,
  `model` int(11) NOT NULL DEFAULT 0,
  `year` int(4) NOT NULL DEFAULT 0,
  `yearofimport` text NOT NULL,
  `currency` text NOT NULL,
  `price` decimal(11,2) NOT NULL DEFAULT 0.00,
  `ask_for_price` int(1) NOT NULL DEFAULT 0,
  `mileage` int(4) NOT NULL DEFAULT 0,
  `transmission` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `condition` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fuel_type` char(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) NOT NULL,
  `featured_img` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `package` varchar(255) DEFAULT NULL,
  `created_by` text NOT NULL,
  `create_time` int(20) NOT NULL DEFAULT 0,
  `publish_time` int(20) NOT NULL DEFAULT 0,
  `status` int(25) NOT NULL DEFAULT 0,
  `activation_date` date DEFAULT NULL,
  `expirtion_date` date DEFAULT NULL,
  `total_view` int(10) NOT NULL DEFAULT 0,
  `created_date` varchar(255) DEFAULT NULL,
  `noofSeats` varchar(255) DEFAULT NULL,
  `SGS` varchar(255) DEFAULT NULL,
  `safetyRating` varchar(255) DEFAULT NULL,
  `amount` varchar(225) DEFAULT '0',
  `unavailable` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_posts`
--

INSERT INTO `car_posts` (`id`, `user_id`, `browser_id`, `title`, `description`, `tags`, `rating`, `advert_type`, `category`, `brand`, `model`, `year`, `yearofimport`, `currency`, `price`, `ask_for_price`, `mileage`, `transmission`, `condition`, `fuel_type`, `phone_no`, `email`, `state`, `featured_img`, `package`, `created_by`, `create_time`, `publish_time`, `status`, `activation_date`, `expirtion_date`, `total_view`, `created_date`, `noofSeats`, `SGS`, `safetyRating`, `amount`, `unavailable`) VALUES
(1, 19, '62af224471390679c9d0a596f45eb51dc7b1733e', 'Hatchback BMW 1 Series', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL, '0.0', 'sell', 1, 9, 10082, 2021, '2020', 'UGX', '5750000.00', 0, 3120, 'manual', 'new', 'petrol', '9632587412', 'hashr@gmail.com', 134, 'gallary-247219221-1614618446.jpeg', 'basic', '', 0, 0, 1, '2021-03-01', '2021-04-30', 0, '2021-03-01 22:19:55', '2', 'DR14563', '2', '0', ''),
(2, 19, '0a099e1c27e6d31c447bc78fffa1e79886e2755b', 'Van Chevrolet  1500 EX', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL, '0.0', 'rent', 3, 7, 2216, 2021, '2021', 'UGX', '452000.00', 0, 1020, 'manual', 'new', 'diesel', '9632587412', 'harsh@gmail.com', 95, 'gallary-2096235246-1614618607.jpeg', 'basic', '', 0, 0, 1, '2021-03-01', '2021-04-30', 0, '2021-03-01 22:41:03', '5', 'Van 5623', '5', '0', ''),
(3, 0, '6c61350c989990fb38f0097e46cad3746df6cbc7', 'Saden Alfo Remo 4C ', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL, '0.0', 'sell', 5, 1, 77, 2020, '2020', 'UGX', '78520123.00', 0, 1200, 'automatic', 'new', 'diesel', '9632587412', 'lora@gmail.com', 94, 'gallary-2101442606-1614619333.jpeg', 'basic', '', 0, 0, 0, '2021-03-01', '2021-04-30', 0, '2021-03-01 22:53:10', '6', 'Lora 4562', '5', '0', ''),
(4, 0, 'ec8e0c8db87a49d1193db10ff3219249be7bf65f', 'Saden Alfo Remo 4C ', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL, '0.0', 'sell', 5, 1, 68, 2020, '2019', 'UGX', '5623012.00', 0, 1000, 'manual', 'used', 'gas', '9632587412', 'harsh@gmail.com', 94, 'gallary-690805507-1614619742.jpeg', 'premium', '', 0, 0, 0, '2021-03-01', '2021-04-30', 0, '2021-03-01 22:59:55', '6', 'RTY-5201', '5', '0', ''),
(5, 1, '07cfe1f9babf8c80f7bf4a8faddab95a71a32ef9', 'Aston Martin car', 'Aston Martin has launched a 150 units limited DB9 GT Bond Edition. This will be the final edition of the DB9 as the car will now be replaced by the upcoming DB11 in 2016. The car has a lot of tweaks to make it a Bond Edition. Features include ', NULL, '0.0', 'sell', 5, 2, 9692, 2016, '2018', 'UGX', '456354.00', 0, 34, 'semi_automatic', 'new', 'petrol', '8968900775', 'yogesh.pph@gmail.com', 96, 'gallary-251899673-1614780919.png', 'basic', '', 0, 0, 1, '2021-03-03', '2021-05-02', 0, '2021-03-03 19:35:40', '', '', '', '0', ''),
(6, 0, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'Toyota Land Cruiser', 'Test', NULL, '0.0', 'sell', 7, 3, 495, 2020, '2021', 'UGX', '150000000.00', 0, 5000, 'automatic', 'new', 'diesel', '0701777771', 'jay@goldstarinsurance.com', 109, 'gallary-1708797806-1614869367.jpeg', 'premium', '', 0, 0, 0, '2021-03-04', '2021-05-03', 0, '2021-03-04 20:19:52', '', '', '', '0', ''),
(7, 0, 'bef72ed01594734e0d38765a001448cef6c643b3', 'Audi Best car', 'The Audi 90 was an upmarket version of the Audi 80, although all North American sedans of the B4 generation were called Audi 90.\r\n\r\nBuy your Audi 90 used safely with Reezocar and find the best price thanks', NULL, '0.0', 'sell', 5, 3, 575, 2016, '2014', 'UGX', '750000.00', 0, 35, 'semi_automatic', 'used', 'petrol', '8968900775', 'keshav.wowz@gmail.com', 109, 'gallary-138602354-1615198144.png', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 15:39:22', '5', '2323532', '4', '0', ''),
(8, 0, 'f591bb2681b281d0ba85675b2f6e812373a86f4d', 'Aston Martin car', 'Bentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.\r\n\r\nBentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.', NULL, '0.0', 'sell', 7, 4, 922, 2014, '2019', 'UGX', '73546.00', 0, 23, 'manual', 'used', 'petrol', '8968900775', 'keshav.wowz@gmail.com', 97, 'gallary-807967515-1615199007.jpg', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 15:51:09', '4', '324324', '3', '0', ''),
(9, 0, '0e6c1de73eb4ed30775bc1852e842a4e0b769051', 'Van - Chevrolate', 'Bentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.\r\n\r\nBentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.', NULL, '0.0', 'sell', 3, 7, 2239, 2018, '2018', 'UGX', '46467.00', 0, 12, 'semi_automatic', 'used', 'electricity', '8968900775', 'harsh@gmail.com', 97, 'gallary-1275805495-1615199392.jpg', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 16:01:26', '4', '12412', '4', '0', ''),
(10, 0, 'cae2cb792812dd9e10ee022a6b1a0c241c5bcc1c', 'Dodge Super car', 'Bentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.\r\n\r\nBentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.', NULL, '0.0', 'rent', 3, 11, 2818, 2018, '2016', 'UGX', '456354.00', 0, 34, 'manual', 'used', 'diesel', '8968900775', 'yogesh.pph@gmail.com', 94, '', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 16:10:16', '2', 'fdaf', '2', '0', ''),
(11, 0, '6cb9d60c5433304fd811a7898a47d45e94957349', 'Top Best car Van Dodge', 'Bentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.\r\n\r\nBentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.', NULL, '0.0', 'sell', 3, 11, 3150, 2018, '2016', 'UGX', '456354.00', 0, 34, 'automatic', 'used', 'petrol', '235325252532', 'keshav.wowz@gmail.com', 96, '', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 16:17:47', '3', '113131', '2', '0', ''),
(12, 0, '51dca21df9c68bd74ce938aae76862576e5134df', 'Top Best car Van', 'Bentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.\r\n\r\n\r\nBentley Brooklands is the name of two distinct models produced by British automobile manufacturer Bentley Motors. ... These cars were named after Brooklands, a banked race track in Surrey, where Bentley obtained some of its greatest triumphs in the 1920s and 1930s.', NULL, '0.0', 'rent', 3, 7, 2239, 2020, '2015', 'UGX', '45345.00', 0, 23, 'manual', 'new', 'diesel', '2353253252', 'keshav.wowz@gmail.com', 96, '', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 16:23:21', '2', '1241241', '2', '0', ''),
(13, 0, '966fb1738223d64a17c6e784b3825c7db4a3f795', 'Top Best car Van', 'Silverado 3500 HD is offered as a Crew Cab with Standard Bed or Long Bed and is available with a single-rear-wheel (SRW) or dual-rear-wheel (DRW) configuration. Front Head Room: 43.0 in. Front Leg Room: 44.5 in\r\n\r\nSilverado 3500 HD is offered as a Crew Cab with Standard Bed or Long Bed and is available with a single-rear-wheel (SRW) or dual-rear-wheel (DRW) configuration. Front Head Room: 43.0 in. Front Leg Room: 44.5 in', NULL, '0.0', 'rent', 3, 7, 2122, 2018, '2010', 'UGX', '456354.00', 0, 34, 'manual', 'used', 'gas', '01792272735', 'keshav.wowz@gmail.com', 96, '', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 18:15:01', '42', '22414', '2', '0', ''),
(14, 0, '0a3bbc8c5fe1968cc0e16f3f47080594067475b4', 'car testing', 'ZXzXz', NULL, '0.0', 'rent', 1, 11, 3150, 2009, '2006', 'UGX', '56230.00', 0, 100, 'automatic', 'new', 'gas', '1232313313', 'har@gmail.com', 107, '', 'premium', '', 0, 0, 0, '2021-03-08', '2021-05-07', 0, '2021-03-08 18:22:12', '6', 'ee', '4', '0', ''),
(15, 22, '5b2190a562b63c162a60e08aa6f1587a970330e4', 'Fiat500', 'need to sell it...', NULL, '0.0', 'sell', 1, 14, 10837, 2009, '2011', 'UGX', '100.00', 0, 20, 'automatic', 'used', 'petrol', '1234567892', 'deependrag@oxeenit.com', 132, 'gallary-776929874-1625825209.jpg', 'basic', '', 0, 0, 1, '2021-07-09', '2021-09-07', 0, '2021-07-09 15:37:32', '4', 'valid', '5', '0', ''),
(16, 22, '28d2e87a865ab796ac301884a44b9fd1d7707222', 'Nissanalt', 'For rent contact me...', NULL, '0.0', 'rent', 5, 42, 11760, 2010, '2012', 'UGX', '100.00', 0, 50, 'semi_automatic', 'used', 'diesel', '9876543219', 'deependrag@oxeenit.com', 131, 'gallary-1300321850-1625826092.jpg', 'basic', '', 0, 0, 1, '2021-07-09', '2021-09-07', 0, '2021-07-09 15:51:58', '4', 'valid', '5', '0', ''),
(17, 24, '23de76913aa050d965813897bdb2466913a6546f', 'bmw5', 'need to sell', NULL, '0.0', 'sell', 1, 9, 10233, 2018, '2018', 'UGX', '20000.00', 0, 40, 'automatic', 'new', 'diesel', '1234567890', 'dgauravsamsung@gmail.com', 130, 'gallary-124045261-1625830595.jpg', 'basic', '', 0, 0, 0, '2021-07-09', '2021-09-07', 0, '2021-07-09 17:07:11', '4', 'valid', '5', '0', ''),
(18, 24, '68020882d256d8768df15b593649bd0cd8394f25', 'audia3', 'need to rent car...', NULL, '0.0', 'rent', 5, 3, 9784, 2018, '2018', 'UGX', '10000.00', 0, 50, 'automatic', 'new', 'gas', '9876543216', 'dgauravsamsung@gmail.com', 129, 'gallary-565621433-1625831114.jpg', 'basic', '', 0, 0, 1, '2021-07-09', '2021-09-07', 0, '2021-07-09 17:16:30', '2', 'valid', '5', '0', ''),
(19, 24, '0927d8005bd7ec6c475bd18ede6bc8d5a8ff48e1', 'hondaaccord', 'need to sell', NULL, '0.0', 'sell', 5, 21, 10978, 2017, '2017', 'UGX', '1444.00', 0, 20, 'semi_automatic', 'new', 'petrol', '1234567890', 'dgauravsamsung@gmail.com', 128, 'gallary-1720011903-1625831546.jpg', 'basic', '', 0, 0, 1, '2021-07-09', '2021-09-07', 0, '2021-07-09 17:22:42', '4', 'valid', '5', '0', ''),
(20, 24, '569a77276962301fa15dec0c6b666ae46993beb4', 'Hyundaiacc', 'need to rent my new car...', NULL, '0.0', 'rent', 7, 23, 11091, 2015, '2015', 'UGX', '1000.00', 0, 50, 'automatic', 'new', 'diesel', '1234567890', 'dgauravsamsung@gmail.com', 133, 'gallary-1321285070-1625834541.jpg', 'premium', '', 0, 0, 0, '2021-07-09', '2021-09-07', 0, '2021-07-09 18:14:00', '4', 'valid', '5', '0', ''),
(21, 24, '0f0f126f1419364ba5e9dde3e66c3dca9abae908', 'Hyundaiacc', 'need to rent my new car...', NULL, '0.0', 'rent', 7, 23, 11091, 2015, '2015', 'UGX', '1000.00', 0, 50, 'automatic', 'new', 'diesel', '1234567890', 'dgauravsamsung@gmail.com', 133, '', 'basic', '', 0, 0, 0, '2021-07-09', '2021-09-07', 0, '2021-07-09 18:21:06', '4', 'valid', '5', '0', ''),
(22, 24, '3b45b25bb0a6c193c1392df1bc87c578855b9ae5', 'kiaama', 'need to rent my car...', NULL, '0.0', 'rent', 1, 28, 5116, 2018, '2018', 'UGX', '1000.00', 0, 30, 'manual', 'new', 'petrol', '2345678901', 'dgauravsamsung@gmail.com', 99, 'gallary-1058910747-1625835643.jpg', 'basic', '', 0, 0, 1, '2021-07-09', '2021-09-07', 0, '2021-07-09 18:31:09', '4', 'valid', '5', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `car_review`
--

CREATE TABLE `car_review` (
  `id` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` int(2) NOT NULL DEFAULT 0,
  `post_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `create_time` int(20) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_review`
--

INSERT INTO `car_review` (`id`, `comment`, `rating`, `post_id`, `created_by`, `create_time`, `status`) VALUES
(1, 'Very nice car within a affordable price range. Also the seller is very much helpful.', 5, 6, 1, 1522045025, 1),
(2, 'Car of future. Very stylish (Y)', 4, 6, 2, 1522045157, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_sessions`
--

CREATE TABLE `car_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car_upload_images`
--

CREATE TABLE `car_upload_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `browser_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_upload_images`
--

INSERT INTO `car_upload_images` (`id`, `user_id`, `post_id`, `browser_id`, `image`, `created_date`) VALUES
(1, 19, 1, '62af224471390679c9d0a596f45eb51dc7b1733e', 'gallery-487958299-1614617356.jpeg', '2021-03-01 22:19:16'),
(2, 19, 2, '0a099e1c27e6d31c447bc78fffa1e79886e2755b', 'gallery-17261075-1614618634.jpeg', '2021-03-01 22:40:34'),
(3, 19, 2, '0a099e1c27e6d31c447bc78fffa1e79886e2755b', 'gallery-1081953728-1614618643.jpeg', '2021-03-01 22:40:43'),
(4, 19, 3, '6c61350c989990fb38f0097e46cad3746df6cbc7', 'gallery-1086366353-1614619369.jpeg', '2021-03-01 22:52:49'),
(5, 19, 3, '6c61350c989990fb38f0097e46cad3746df6cbc7', 'gallery-1366726835-1614619369.jpeg', '2021-03-01 22:52:49'),
(6, 19, 4, 'ec8e0c8db87a49d1193db10ff3219249be7bf65f', 'gallery-1366509506-1614619778.jpeg', '2021-03-01 22:59:38'),
(7, 19, 4, 'ec8e0c8db87a49d1193db10ff3219249be7bf65f', 'gallery-481205261-1614619778.jpeg', '2021-03-01 22:59:38'),
(8, 0, 0, '5547ac4ae1b197c3000905d632024292c4f7c9ef', 'gallery-663048819-1614789997.jpg', '2021-03-03 22:16:37'),
(9, 0, 0, '5547ac4ae1b197c3000905d632024292c4f7c9ef', 'gallery-474434710-1614789997.png', '2021-03-03 22:16:37'),
(10, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-95478535-1614869339.jpeg', '2021-03-04 20:19:00'),
(11, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-2128507587-1614869340.jpeg', '2021-03-04 20:19:00'),
(12, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-8674042-1614869340.jpeg', '2021-03-04 20:19:00'),
(13, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-2128751348-1614869340.jpeg', '2021-03-04 20:19:00'),
(14, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-1152375681-1614869340.jpeg', '2021-03-04 20:19:00'),
(15, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-883662473-1614869340.jpeg', '2021-03-04 20:19:00'),
(16, 14, 6, 'e1daabe7563b722eaa7c11d615502de565ffba29', 'gallery-619523941-1614869340.jpeg', '2021-03-04 20:19:00'),
(17, 0, 0, '0292d626130cfc92d83b4ca71fbd32a4e347c4d1', 'gallery-402130027-1614956428.png', '2021-03-05 20:30:28'),
(18, 20, 7, 'bef72ed01594734e0d38765a001448cef6c643b3', 'gallery-1121553976-1615197970.jpg', '2021-03-08 15:36:10'),
(19, 20, 7, 'bef72ed01594734e0d38765a001448cef6c643b3', 'gallery-536324623-1615197970.jpg', '2021-03-08 15:36:10'),
(20, 20, 7, 'bef72ed01594734e0d38765a001448cef6c643b3', 'gallery-507485821-1615197970.jpg', '2021-03-08 15:36:10'),
(21, 20, 7, 'bef72ed01594734e0d38765a001448cef6c643b3', 'gallery-809299275-1615197970.png', '2021-03-08 15:36:10'),
(22, 0, 0, 'e3641c173f02c99446fa0754c35e90ad357d11f6', 'gallery-503589186-1615198431.jpg', '2021-03-08 15:43:51'),
(23, 0, 0, 'e3641c173f02c99446fa0754c35e90ad357d11f6', 'gallery-848820545-1615198431.jpg', '2021-03-08 15:43:51'),
(24, 22, 16, '28d2e87a865ab796ac301884a44b9fd1d7707222', 'gallery-411285374-1625825274.jpg', '2021-07-09 15:37:55'),
(25, 22, 16, '28d2e87a865ab796ac301884a44b9fd1d7707222', 'gallery-354019571-1625825275.jpg', '2021-07-09 15:37:55'),
(26, 22, 16, '28d2e87a865ab796ac301884a44b9fd1d7707222', 'gallery-1357648144-1625826101.jpg', '2021-07-09 15:51:41'),
(27, 22, 16, '28d2e87a865ab796ac301884a44b9fd1d7707222', 'gallery-1148912783-1625826101.jpg', '2021-07-09 15:51:41'),
(28, 24, 17, '23de76913aa050d965813897bdb2466913a6546f', 'gallery-577859971-1625830603.jpg', '2021-07-09 17:06:43'),
(29, 24, 17, '23de76913aa050d965813897bdb2466913a6546f', 'gallery-127484289-1625830603.jpg', '2021-07-09 17:06:43'),
(30, 24, 17, '23de76913aa050d965813897bdb2466913a6546f', 'gallery-615542959-1625830603.jpg', '2021-07-09 17:06:43'),
(31, 24, 17, '23de76913aa050d965813897bdb2466913a6546f', 'gallery-562886452-1625830603.jpg', '2021-07-09 17:06:43'),
(32, 24, 18, '68020882d256d8768df15b593649bd0cd8394f25', 'gallery-1471029566-1625831120.jpg', '2021-07-09 17:15:20'),
(33, 24, 18, '68020882d256d8768df15b593649bd0cd8394f25', 'gallery-703648580-1625831120.jpg', '2021-07-09 17:15:20'),
(34, 24, 18, '68020882d256d8768df15b593649bd0cd8394f25', 'gallery-2010574805-1625831120.jpg', '2021-07-09 17:15:20'),
(35, 24, 18, '68020882d256d8768df15b593649bd0cd8394f25', 'gallery-1778208660-1625831120.jpg', '2021-07-09 17:15:20'),
(36, 24, 18, '68020882d256d8768df15b593649bd0cd8394f25', 'gallery-1185117014-1625831161.png', '2021-07-09 17:16:01'),
(37, 24, 19, '0927d8005bd7ec6c475bd18ede6bc8d5a8ff48e1', 'gallery-958426538-1625831554.jpg', '2021-07-09 17:22:34'),
(38, 24, 19, '0927d8005bd7ec6c475bd18ede6bc8d5a8ff48e1', 'gallery-1552003094-1625831554.jpg', '2021-07-09 17:22:34'),
(39, 24, 19, '0927d8005bd7ec6c475bd18ede6bc8d5a8ff48e1', 'gallery-683184117-1625831554.jpg', '2021-07-09 17:22:34'),
(40, 24, 19, '0927d8005bd7ec6c475bd18ede6bc8d5a8ff48e1', 'gallery-153216354-1625831554.jpg', '2021-07-09 17:22:34'),
(41, 24, 20, '569a77276962301fa15dec0c6b666ae46993beb4', 'gallery-768083051-1625834627.jpg', '2021-07-09 18:13:47'),
(42, 24, 20, '569a77276962301fa15dec0c6b666ae46993beb4', 'gallery-811741320-1625834627.jpg', '2021-07-09 18:13:47'),
(43, 24, 20, '569a77276962301fa15dec0c6b666ae46993beb4', 'gallery-535874158-1625834627.jpg', '2021-07-09 18:13:47'),
(44, 24, 20, '569a77276962301fa15dec0c6b666ae46993beb4', 'gallery-1898387657-1625834627.jpg', '2021-07-09 18:13:47'),
(45, 24, 22, '3b45b25bb0a6c193c1392df1bc87c578855b9ae5', 'gallery-171673885-1625835652.jpg', '2021-07-09 18:30:52'),
(46, 24, 22, '3b45b25bb0a6c193c1392df1bc87c578855b9ae5', 'gallery-52332208-1625835652.jpg', '2021-07-09 18:30:52'),
(47, 24, 22, '3b45b25bb0a6c193c1392df1bc87c578855b9ae5', 'gallery-654243057-1625835652.jpg', '2021-07-09 18:30:52'),
(48, 24, 22, '3b45b25bb0a6c193c1392df1bc87c578855b9ae5', 'gallery-841145384-1625835652.jpg', '2021-07-09 18:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `car_users`
--

CREATE TABLE `car_users` (
  `id` int(11) NOT NULL,
  `user_type` int(3) NOT NULL,
  `first_name` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_name` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `user_email` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_company` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phone` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_website` text DEFAULT NULL,
  `password` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_me_key` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `recovery_key` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `confirmation_key` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `confirmed` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 0,
  `banned` int(11) NOT NULL DEFAULT 0,
  `created_date` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_users`
--

INSERT INTO `car_users` (`id`, `user_type`, `first_name`, `last_name`, `gender`, `user_email`, `user_company`, `user_phone`, `user_website`, `password`, `remember_me_key`, `recovery_key`, `confirmation_key`, `confirmed`, `status`, `banned`, `created_date`, `profile_image`) VALUES
(1, 1, 'Admin', 'kumar', '', 'admin@admin.com', '', '', '', '21232f297a57a5a743894a0e4a801fc3', '', '', '', 1, 0, 0, '2020-07-29 12:11:40', NULL),
(10, 2, 'Jay', 'Sakaria', '', 'jay@goldstarinsurance.com', '', '', '', '31d7f7ea033f9897325d01f303256bb0', '', '', '', 1, 0, 0, '2020-09-08 09:30:29', NULL),
(14, 2, 'Jay', 'Sakaria', '', 'sakaria.jay@gmail.com', '', '', '', '574ca677c260b98e732e7028761c6a95', '', '', '', 1, 0, 0, '2020-11-16 17:45:53', NULL),
(17, 2, 'Hemel', 'Majithia', '', 'hemelmajithia@hotmail.com', '', '', '', 'd14b968a56dc95cca150b6a2855a543a', '', '', '', 1, 0, 0, '2020-12-17 20:02:07', NULL),
(18, 2, 'Harsh', 'kumar', '', 'harshk@gmail.com', '', '', '', '21232f297a57a5a743894a0e4a801fc3', '', '', '', 1, 0, 0, '2021-02-01 12:50:53', NULL),
(19, 2, 'Harsh', 'kumar', '', 'harsh@gmail.com', '', '', '', '21232f297a57a5a743894a0e4a801fc3', '', '', '', 1, 0, 0, '2021-02-18 14:34:33', NULL),
(20, 2, 'KeshavB', 'bK', '', 'keshav.wowz@gmail.com', '', '', '', '0192023a7bbd73250516f069df18b500', '', '', '', 1, 0, 0, '2021-03-08 10:09:59', NULL),
(21, 2, 'keshav', 'KB', '', '1keshav.wowz@gmail.com', '', '', '', '0192023a7bbd73250516f069df18b500', '', '', '', 1, 0, 0, '2021-03-08 12:47:15', NULL),
(22, 2, 'nick', 'jones', '', 'deependrag@oxeenit.com', 'avado', '1234567892', 'www.google.com', 'dd4f1dbc6441bd7b5282c1b95686cb44', '', '', '', 1, 0, 0, '2021-07-09 09:55:14', NULL),
(23, 2, 'amar', 'singh', '', 'deependra.gaurav@oxeenit.com', '', '', '', '726f9b9f61fd39a731986f7e0f4c0e74', '', '', '', 1, 0, 0, '2021-07-09 11:30:19', NULL),
(24, 2, 'amar', 'singh', '', 'deependra.gaurav@gmail.com', '', '', '', '726f9b9f61fd39a731986f7e0f4c0e74', '', '', '', 1, 0, 0, '2021-07-09 11:31:47', NULL),
(25, 2, 'Sunpreet', 'Shah', '', 'sunpreet.wowz@gmail.com', '', '', '', 'e6e061838856bf47e1de730719fb2609', '', '', '', 1, 0, 0, '2022-03-28 17:01:18', NULL),
(26, 3, 'Abhay', 'Sharma', '', 'abhaysharma@yopmail.com', NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 1, 0, 0, '2022-03-29 22:01:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesapal_txn`
--

CREATE TABLE `pesapal_txn` (
  `txn_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reference_code` bigint(40) NOT NULL,
  `tracking_id` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `txn_date` datetime NOT NULL,
  `txn_ipn_date` datetime NOT NULL,
  `notification_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txn_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pesapal_txn`
--

INSERT INTO `pesapal_txn` (`txn_id`, `user_id`, `reference_code`, `tracking_id`, `txn_date`, `txn_ipn_date`, `notification_type`, `txn_status`, `flag`) VALUES
(1, 2, 15, '605f12dd-a2fe-4a62-9991-2003fc842a8c', '2020-08-11 15:02:38', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(2, 2, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 15:14:45', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(3, 0, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 15:14:56', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(4, 0, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 16:31:02', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(5, 0, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 16:33:06', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(6, 1, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 16:51:10', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(7, 1, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 16:53:00', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(8, 1, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 16:57:00', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(9, 0, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 18:20:18', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(10, 0, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 18:20:23', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(11, 1, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 18:21:55', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(12, 1, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 18:24:17', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(13, 0, 16, '44fa5f8f-b263-476b-92f6-5b8c51925d80', '2020-08-11 19:55:50', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(14, 4, 22, 'b7f7e372-7427-4a2f-859e-4cc0aa9798c0', '2020-08-19 10:18:08', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(15, 8, 24, 'b633d2fe-2950-4211-90e7-199362b0fa06', '2020-08-19 10:50:10', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(16, 8, 24, 'b633d2fe-2950-4211-90e7-199362b0fa06', '2020-08-19 10:54:57', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(17, 8, 24, 'b633d2fe-2950-4211-90e7-199362b0fa06', '2020-08-19 10:55:01', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(18, 1, 27, 'fb6f85ea-7745-4efc-8e6a-6e2853c78027', '2020-09-07 21:22:36', '0000-00-00 00:00:00', NULL, 'WAITING', 0),
(19, 18, 61, 'fe2b47a9-3b0f-4d7a-8e85-42efb44be918', '2021-02-01 17:17:04', '0000-00-00 00:00:00', NULL, 'WAITING', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theme_setting`
--

CREATE TABLE `theme_setting` (
  `id` int(11) NOT NULL,
  `section1` text DEFAULT NULL,
  `section2` text DEFAULT NULL,
  `section3` text DEFAULT NULL,
  `section4` text DEFAULT NULL,
  `section5` text DEFAULT NULL,
  `section6` text DEFAULT NULL,
  `section7` text DEFAULT NULL,
  `section8` text DEFAULT NULL,
  `section9` text DEFAULT NULL,
  `section10` text DEFAULT NULL,
  `section11` text DEFAULT NULL,
  `section12` text DEFAULT NULL,
  `section13` text DEFAULT NULL,
  `section14` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme_setting`
--

INSERT INTO `theme_setting` (`id`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section9`, `section10`, `section11`, `section12`, `section13`, `section14`) VALUES
(1, 'SELL YOUR CAR ', '<p><span style=\"font-size:14px\">Unlike other websites, we won&rsquo;t take a cut of the price &ndash; it&rsquo;s your car, it&rsquo;s your money</span></p>\r\n\r\n<p><span style=\"font-size:14px\">With Car Compare UG, It&#39;s Simple</span></p>\r\n', 'INSURANCE', '<p><span style=\"font-size:14px\">Compare car insurance prices and get peace of mind knowing you are protected</span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-size:14px\">Through Car Compare UG&nbsp;we help you find the most competitive price and cover.</span></p>\r\n', 'VALUE MY CAR', '<p><span style=\"font-size:14px\">Get a free valuation. Sell your car at the right price.</span></p>\r\n', 'ARE YOU LOOKING FOR A CAR?', '<p><span style=\"font-size:14px\">Search our extensive database to find your perfect car.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Check out guides to buying a used car for more information and advice.</span></p>\r\n', 'DO YOU WANT TO SELL A CAR?', '<p><span style=\"font-size:14px\">We have custom packages for dealerships to help them get the most out of their listings.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Please contact us today for more information.</span></p>\r\n', 'Peace of Mind, Every Step of the Way', '<p><span style=\"font-size:14px\">Car Compare UG&nbsp;is committed to providing an efficient platform to connect sellers to prospective buyers.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14px\">We make it easy for your to find a great deal and you can feel confident you are buying from someone you can trust with our dealer review system.</span><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><span style=\"font-size:14px\">Car Compare Services&nbsp;is wholly owed by Arie Ventures Ltd, and registered in Uganda as a trading name.</span></p>\r\n', '<ul>\r\n	<li>Address: Plot 38 Kampala Road, PO Box 3673, Kampala Uganda</li>\r\n	<li>Email:&nbsp;&nbsp;info@carcompareug.com</li>\r\n</ul>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_blog`
--
ALTER TABLE `car_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brandmodels`
--
ALTER TABLE `car_brandmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brandmodels_old`
--
ALTER TABLE `car_brandmodels_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_categories`
--
ALTER TABLE `car_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_contact`
--
ALTER TABLE `car_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_contact_offer`
--
ALTER TABLE `car_contact_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_locations`
--
ALTER TABLE `car_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_pages`
--
ALTER TABLE `car_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD UNIQUE KEY `alias_2` (`alias`);

--
-- Indexes for table `car_posts`
--
ALTER TABLE `car_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_review`
--
ALTER TABLE `car_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_sessions`
--
ALTER TABLE `car_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `car_upload_images`
--
ALTER TABLE `car_upload_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_users`
--
ALTER TABLE `car_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesapal_txn`
--
ALTER TABLE `pesapal_txn`
  ADD PRIMARY KEY (`txn_id`);

--
-- Indexes for table `theme_setting`
--
ALTER TABLE `theme_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_blog`
--
ALTER TABLE `car_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car_brandmodels`
--
ALTER TABLE `car_brandmodels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12654;

--
-- AUTO_INCREMENT for table `car_brandmodels_old`
--
ALTER TABLE `car_brandmodels_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `car_categories`
--
ALTER TABLE `car_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `car_contact`
--
ALTER TABLE `car_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_contact_offer`
--
ALTER TABLE `car_contact_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car_posts`
--
ALTER TABLE `car_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `car_upload_images`
--
ALTER TABLE `car_upload_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `car_users`
--
ALTER TABLE `car_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pesapal_txn`
--
ALTER TABLE `pesapal_txn`
  MODIFY `txn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `theme_setting`
--
ALTER TABLE `theme_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
