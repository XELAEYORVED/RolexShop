-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2023 at 08:28 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
`id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(13, 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/1d1c38c9-7f63-448c-b439-088ab81e3800/public', 'Rolex DATEJUST', '45000', 'Argent et diamand'),
(14, 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/fb20b16c-8756-4974-a63e-2d49b0c3a800/public', 'OYSTER PERPETUAL ', '25000', 'DATE GMT-MASTER II'),
(15, 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/4e1b1209-d0a3-42ea-8160-09644275d500/public', 'OYSTER PERPETUAL DATE ', '45000', 'YACHT-MASTER BLACK'),
(16, 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/5ad6ee31-2056-4906-4a65-ab7bf4bbac00/public', 'ROLEX SKY-DWELLER', '30000', 'OR BLACK EDITION '),
(17, 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/c086f72f-5947-4dfd-5dda-f4beeb6b9b00/public', 'ROLEX SKY-DWELLER', '35000', 'OR WHITE EDITION'),
(18, 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/820dbd56-403d-436d-392f-37718567bc00/public', 'ROLEX OYSTER PERPETUAL ', '50000', 'GREEN DIAMOND ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(37, 'root', '7f648fcf43d33a174e000d42104356e168559ae7', 'root'),
(38, 'laudev71', '2ef65ee25cf290e05b00a60cdfc82fbedcad954a', 'Laurent'),
(39, '7', 'e61886f458a447a3d612db680ff1bf9e9e7274c7', '7'),
(56, 'alex@admin.be', '83db27aca4414b28ea740c6945aa5167c7f7d047', 'Alexandre'),
(57, 'a', 'a49c9e4dcf4887a5c44497038d1aded2e79b1b82', 'a'),
(58, '45', '356c8834ff1fd6a178b4f4c5efeb98e0eb6f759c', '45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
