-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 23:58:24
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicion`
--

CREATE TABLE `medicion` (
  `idMedicion` int(11) NOT NULL,
  `idUsuario` varchar(16) NOT NULL,
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `imc` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicion`
--

INSERT INTO `medicion` (`idMedicion`, `idUsuario`, `peso`, `talla`, `imc`) VALUES
(1, 'dk', 15, 156, 9.61539);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(16) NOT NULL,
  `contrasenaUsuario` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `contrasenaUsuario`) VALUES
('randy', '12345678'),
('randy123', '12345678'),
('jjsns', '822dd1a3382274110b393176f35bd98a1d2b27b4149b14f08fe5dcf305f54e52'),
('prueba', '655e786674d9d3e77bc05ed1de37b4b6bc89f788829f9f3c679e7687b410c89b'),
('jjcjx', 'ab84f6e9cd98dc9d1d15533b67c1dc51ab5e2f08bfc9d5adb0445fd8bc4c0949'),
('dj bdd', '4d2ec60ff278153168a7a8a9bafdb55c2766356128f0a31ff5c3939cecc6d257'),
('final', '2443630b4620165c8b173e7265e17526fe2787ae594364dd6d839ad58f2fc007'),
('ieie', 'b90596fec7be8a9fa561606b210d2de4a3d66ee003d63e1460c28660e0be5188'),
('ijdjjd', 'aed9a7664c30419b9c0f4d6e1ee942d0cd5c0fa5ed3b71ce83171e0b34b2cd96'),
('jdduurrr', '121191804dc90c19c9f6f7fadec8ccd8a52c127504c85012ed19fd323f5b5257'),
('laaa', '51f8825c76039aa045eedce7392d3bce9174f1a80202fa12b74d601142652988'),
('sss', 'a871c47a7f48a12b38a994e48a9659fab5d6376f3dbce37559bcb617efe8662d'),
('finale', '56469d6119aa005479af87493e9e71d01171d32eb4f52c1fcd58fae2d8b810c3'),
('', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
('adminxd', '73e98b7ae50347e4b92c61141f20da128ba062736d62e782cab425e0fc0115c8'),
('randyj', '74072bd5b9d5b41cbcdf0d799584492918fabcc5398d978dfd6df159c141b9e2'),
('dk', '867b4bf4357a7c0e415ffd537f61ea8785dd47113104000b534a130c98a42ce8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicion`
--
ALTER TABLE `medicion`
  ADD PRIMARY KEY (`idMedicion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicion`
--
ALTER TABLE `medicion`
  MODIFY `idMedicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
