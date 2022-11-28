-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 21:47:50
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario de automóviles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
  `Automoviles_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `Automovilescol` varchar(45) DEFAULT NULL,
  `Marca_automovil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Cliente_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionario`
--

CREATE TABLE `concesionario` (
  `concesionario_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_automovil`
--

CREATE TABLE `marca_automovil` (
  `Marca_automovil_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `trabajadores_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `salario` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `concesionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_automovil`
--

CREATE TABLE `venta_automovil` (
  `trabajadores_id` int(11) NOT NULL,
  `Automoviles_id` int(11) NOT NULL,
  `fecha_de_venta` date DEFAULT NULL,
  `Cliente_id` int(11) NOT NULL,
  `monto_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD PRIMARY KEY (`Automoviles_id`,`Marca_automovil_id`),
  ADD KEY `fk_Automoviles_Marca_automovil1_idx` (`Marca_automovil_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cliente_id`);

--
-- Indices de la tabla `concesionario`
--
ALTER TABLE `concesionario`
  ADD PRIMARY KEY (`concesionario_id`);

--
-- Indices de la tabla `marca_automovil`
--
ALTER TABLE `marca_automovil`
  ADD PRIMARY KEY (`Marca_automovil_id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`trabajadores_id`,`concesionario_id`),
  ADD KEY `fk_trabajadores_concesionario_idx` (`concesionario_id`);

--
-- Indices de la tabla `venta_automovil`
--
ALTER TABLE `venta_automovil`
  ADD PRIMARY KEY (`trabajadores_id`,`Automoviles_id`,`Cliente_id`),
  ADD KEY `fk_trabajadores_has_Automoviles_Automoviles1_idx` (`Automoviles_id`),
  ADD KEY `fk_trabajadores_has_Automoviles_trabajadores1_idx` (`trabajadores_id`),
  ADD KEY `fk_trabajador_acargo_de_venta_Cliente1_idx` (`Cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  MODIFY `Automoviles_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Cliente_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `concesionario`
--
ALTER TABLE `concesionario`
  MODIFY `concesionario_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca_automovil`
--
ALTER TABLE `marca_automovil`
  MODIFY `Marca_automovil_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `trabajadores_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD CONSTRAINT `fk_Automoviles_Marca_automovil1` FOREIGN KEY (`Marca_automovil_id`) REFERENCES `marca_automovil` (`Marca_automovil_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `fk_trabajadores_concesionario` FOREIGN KEY (`concesionario_id`) REFERENCES `concesionario` (`concesionario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta_automovil`
--
ALTER TABLE `venta_automovil`
  ADD CONSTRAINT `fk_trabajador_acargo_de_venta_Cliente1` FOREIGN KEY (`Cliente_id`) REFERENCES `cliente` (`Cliente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajadores_has_Automoviles_Automoviles1` FOREIGN KEY (`Automoviles_id`) REFERENCES `automoviles` (`Automoviles_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajadores_has_Automoviles_trabajadores1` FOREIGN KEY (`trabajadores_id`) REFERENCES `trabajadores` (`trabajadores_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
