-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2022 a las 00:36:13
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `relacion` varchar(100) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `relacion`, `fecha_creacion`, `descripcion`) VALUES
(1, 'Alemania', 'Comercial', '2022-05-06', 'Una relacion comercial'),
(2, 'Brasil', 'No comercial', '2022-05-04', 'Una relacion no comercial'),
(3, 'Chile', 'Comercial', '2022-04-28', 'Una relacion comercial'),
(4, 'Uruguay', 'No comercial', '2022-05-01', 'Una relacion no comercial'),
(5, 'Argentina', 'No comercial', '2022-04-27', 'Una relacion no comercial'),
(6, 'Colombia', 'Comercial', '2022-04-25', 'Una relacion comercial'),
(17, 'PaisTest_modified', 'Comercial', '2022-05-08', 'Una relacion comercial'),
(19, 'PaisTest2', 'Comercial', '2022-04-29', 'Una relacion comercial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cantidad` int(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `descripcion`) VALUES
(1, 'ProductoTest', 135, 'Un producto de prueba'),
(2, 'ProductoTest_1', 23, 'Un producto de prueba'),
(3, 'ProductoTest_2', 40, 'Un producto de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_comercios`
--

CREATE TABLE `registro_comercios` (
  `id` int(10) NOT NULL,
  `tipo_flujo` varchar(100) NOT NULL,
  `nombre_pais` varchar(50) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_comercios`
--

INSERT INTO `registro_comercios` (`id`, `tipo_flujo`, `nombre_pais`, `fecha`) VALUES
(3, 'Importación', 'Alemania', '2022-05-08'),
(4, 'Exportación', 'Chile', '2022-05-08'),
(5, 'Exportación', 'Brasil', '2022-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `user`, `password`) VALUES
(1, 'Will Enrique', 'Pari Muñante', 'wpari', 'psw123456'),
(2, 'Axel Ander', 'Chacon Tasaico ', 'achacon', 'psw654321'),
(3, 'NombreTest', 'ApellidoTest', 'utest', 'psw999888');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_comercios`
--
ALTER TABLE `registro_comercios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro_comercios`
--
ALTER TABLE `registro_comercios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
