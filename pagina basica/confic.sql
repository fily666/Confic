-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-10-2019 a las 17:24:30
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `confic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `g1`
--

DROP TABLE IF EXISTS `g1`;
CREATE TABLE IF NOT EXISTS `g1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `identificacion` varchar(250) DEFAULT NULL,
  `number` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `novedades` varchar(250) DEFAULT NULL,
  `sexo` varchar(250) DEFAULT NULL,
  `fecha` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `g1`
--

INSERT INTO `g1` (`id`, `name`, `identificacion`, `number`, `email`, `novedades`, `sexo`, `fecha`) VALUES
(1, 'Blossom Ford', 'PS', '688', 'mepybusac@mailinator.net', 'Nisi enim quidem ali', 'hombre', '2015-09-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Angelica Donovan', 'lyvakid', '$2y$10$ptOZqGDofnM6G8q0AGCmGOTKhXrKoPXdKjuwfCFgXa3Yjy6IV3Iya'),
(2, 'fgdf', 'dfgd', '$2y$10$HdsWpw9AEDLYPanv0ET1n.AjExTc.lWtW7.KCafC0YdLNc7rqz67K'),
(3, 'Malik Morris', 'pyqasexuce', '$2y$10$kbfqPz4/uxFJnzjnHJJw1ecsAMCebsfNiVKRF4XTjgsjtdkfg5CUy'),
(4, 'Aurelia Fernandez', 'nosef', '$2y$10$dhWnz/05BPmNye9Si.JAWO3w2Mk5kujvasduLN0DOcX8gbxPuplMG'),
(5, 'Colette Warner', 'movalu', '$2y$10$tvuWHVYUfkwLUJqaKT8rP.Mj0SThn7ef5YBZRB2XvA7SRZNQdBsEG'),
(6, 'Iona Wallace', 'sazawoji', '$2y$10$lu2hNllbxHRjuuzjxcyG3.J72LN3tC.Q6liu.nN1akcGuGt8RwRW2'),
(7, 'Brady Franks', 'xukotive', '$2y$10$aRB1JD5H5sV1Rbv4K9hHf.Y4piMICQ/ArV/B3AkUhE4/nRb.ixeXW'),
(8, '', '', '$2y$10$WLTtAqMEFY7RV68n2v8O2uEAmbo2ApT96Gna7nHP1qiitar1UEo7m'),
(9, 'Castor Sheppard', 'lazebam', '$2y$10$oOT/vq1qHAX5kFjWN5luG.S.1LWWBg4XZJC3cCF.jLVjk6cJqR7zC'),
(10, 'Jaquelyn Nunez', 'fudiluc', '$2y$10$O9w5eenMmxsrZpKn/KJGQOA0z4OLPMS12FFScKnxelCN2sqCITxe2'),
(11, 'Akeem Baldwin', 'nelybyduke', '$2y$10$FmeqbElNmrC9uDhH/Nllk.L2Az4mv4Z.EmR2.HKKmkG1Qg63UxobS'),
(12, 'Jenna Gross', 'wadiceref', '$2y$10$IlhnCyk7bES1eL.r1of0cerMDORmmlA8DKkwuTeF7xJrsO64NUPSG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
