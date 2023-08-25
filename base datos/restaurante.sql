-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 21:11:38
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `id_bebida` int(11) NOT NULL,
  `tipo_bebida` char(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cate` int(11) NOT NULL,
  `categoria` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cate`, `categoria`) VALUES
(1, 'Desayunos'),
(2, 'Almuerzos'),
(3, 'Comidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_menu`
--

CREATE TABLE `detalle_menu` (
  `id_detalle` int(11) NOT NULL,
  `id_comida` int(12) DEFAULT NULL,
  `cod_menu` int(3) DEFAULT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detallep` int(11) NOT NULL,
  `id_pedido` int(12) DEFAULT NULL,
  `cod_menu` int(12) DEFAULT NULL,
  `id_detalle` int(12) DEFAULT NULL,
  `id_tip_ped` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `cantidades` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_esta` int(3) NOT NULL,
  `tipo_estado` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_esta`, `tipo_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Disponible'),
(4, 'No disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `ref_pago` int(4) NOT NULL,
  `tip_pago` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`ref_pago`, `tip_pago`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta'),
(3, 'PSE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `cod_menu` int(3) NOT NULL,
  `id_esta` int(3) NOT NULL,
  `id_comida` int(11) NOT NULL,
  `precio_ofert` int(6) DEFAULT NULL,
  `precio` int(6) DEFAULT NULL,
  `tiempo_estimado` varchar(40) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`cod_menu`, `id_esta`, `id_comida`, `precio_ofert`, `precio`, `tiempo_estimado`, `foto`) VALUES
(101, 3, 2, 0, 10000, '30 minutos', 'macarrones.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `cod_mesa` int(4) NOT NULL,
  `n_mesa` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`cod_mesa`, `n_mesa`) VALUES
(1, 'Mesa 1'),
(2, 'Mesa 2'),
(3, 'Mesa 3'),
(4, 'Mesa 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passwords`
--

CREATE TABLE `passwords` (
  `id_pass` int(11) NOT NULL,
  `id_usu` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `tiken` varchar(200) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `passwords`
--

INSERT INTO `passwords` (`id_pass`, `id_usu`, `email`, `fecha`, `tiken`, `codigo`) VALUES
(1, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '6407f3f50e', 1679),
(2, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '297a33074b', 6238),
(3, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '6aff5b0656', 4071),
(4, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '11b98a6c33', 4791),
(5, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', 'adbd448282', 2275),
(6, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', 'fda0f53859', 9539),
(7, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '7f3aa6f3f9', 9682),
(8, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', 'e70e0cb904', 3390),
(9, 134, 'nicolas.gomez5@misena.edu.co', '0000-00-00', 'ea3276ea33', 5370),
(10, 1005772553, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '8b5dc06582', 1735),
(11, 1005772553, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '1fe225e936', 2093),
(12, 1005772553, 'nicolas.gomez5@misena.edu.co', '0000-00-00', '6be2baeed1', 8195),
(13, 1005772553, 'nicolas.gomez5@misena.edu.co', '0000-00-00', 'b1337fef5e', 7281);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_usu` int(12) DEFAULT NULL,
  `cod_mesa` int(12) DEFAULT NULL,
  `id_esta` int(12) DEFAULT NULL,
  `ref_pago` int(12) DEFAULT NULL,
  `QR` float DEFAULT NULL,
  `foto` char(200) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(3) NOT NULL,
  `tip_rol` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `tip_rol`) VALUES
(1, 'Administrador'),
(2, 'Mesero'),
(3, 'Jefe de cocina'),
(4, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comida`
--

CREATE TABLE `tipo_comida` (
  `id_comida` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `comida` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_comida`
--

INSERT INTO `tipo_comida` (`id_comida`, `id_cate`, `comida`) VALUES
(1, 1, 'Changua'),
(2, 1, 'Sopa de macarrones'),
(51, 1, 'Chocolate'),
(71, 1, 'Huevo con arroz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pedido`
--

CREATE TABLE `tipo_pedido` (
  `id_tip_ped` int(11) NOT NULL,
  `tipo_ped` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_pedido`
--

INSERT INTO `tipo_pedido` (`id_tip_ped`, `tipo_ped`) VALUES
(1, 'Llevar'),
(2, 'Retaurante'),
(3, 'Domicilio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(12) NOT NULL,
  `id_rol` int(3) DEFAULT NULL,
  `nom_usu` char(50) DEFAULT NULL,
  `ape_usu` char(50) DEFAULT NULL,
  `tel_usu` bigint(10) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `contraseña` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `id_rol`, `nom_usu`, `ape_usu`, `tel_usu`, `email`, `contraseña`) VALUES
(104, 4, 'dffg', 'sddf', 34322332, 'ddfgg@ggg', '$2y$10$W0TY/s8GYt1Ngb4w/2t6t.GlYfIifD/vIPZd32WNEgK.gd257tDp2'),
(134, 3, 'Kamilo', 'Rivera', 3229576101, 'ng@msn.com', '$2y$10$Z/SmyVEFG8SQcalfyLgvB.1WP96ohJQa8sK.2eui5nl//kZBjuAsu'),
(145, 2, 'Santiago', 'Sanchez', 3229576101, 'registro@baulphp.com', '$2y$10$UvwrFCjOufLGhTStNfk3detb20buQnvOgakfCjw3WUeV5QpaFhYVy'),
(178, 4, 'Melanie', 'Leal', 321212345, 'ddfgg@ggg', '$2y$10$EboC2NyN4qknFayqWfpSa.IK.DDGfueBWqJUF.l9O5J9i6hrjKPtC'),
(777, 4, 'rtrtr', 'fggfgf', 43454, 'ffgg@ggg', '$2y$10$VlV5uiHOh4jdny8LlJnzj.wFWPyz0Z3R0wPPtKexvq.IRK9OuACT2'),
(1005772553, 1, 'Nicolas Andres', 'Gomez Leal', 3212113205, 'nicolas.gomez5@misena.edu.co', '$2y$10$GTIr.MWGF..RoW.wXvOEd.48Esa5d4W3oavdR3F3aTwf3X2cBB4dm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indices de la tabla `detalle_menu`
--
ALTER TABLE `detalle_menu`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_comida` (`id_comida`),
  ADD KEY `cod_menu` (`cod_menu`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detallep`),
  ADD KEY `cod_menu` (`cod_menu`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_detalle` (`id_detalle`),
  ADD KEY `detalle_pedido_ibfk_4` (`id_tip_ped`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_esta`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`ref_pago`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`cod_menu`),
  ADD KEY `id_esta` (`id_esta`),
  ADD KEY `id_comida` (`id_comida`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`cod_mesa`);

--
-- Indices de la tabla `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id_pass`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `cod_mesa` (`cod_mesa`),
  ADD KEY `id_esta` (`id_esta`),
  ADD KEY `ref_pago` (`ref_pago`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_comida`
--
ALTER TABLE `tipo_comida`
  ADD PRIMARY KEY (`id_comida`),
  ADD KEY `id_cate_ibfk` (`id_cate`);

--
-- Indices de la tabla `tipo_pedido`
--
ALTER TABLE `tipo_pedido`
  ADD PRIMARY KEY (`id_tip_ped`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalle_menu`
--
ALTER TABLE `detalle_menu`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detallep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id_pass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_pedido`
--
ALTER TABLE `tipo_pedido`
  MODIFY `id_tip_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_menu`
--
ALTER TABLE `detalle_menu`
  ADD CONSTRAINT `detalle_menu_ibfk_1` FOREIGN KEY (`id_comida`) REFERENCES `tipo_comida` (`id_comida`),
  ADD CONSTRAINT `detalle_menu_ibfk_2` FOREIGN KEY (`cod_menu`) REFERENCES `menu` (`cod_menu`);

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`cod_menu`) REFERENCES `menu` (`cod_menu`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `detalle_pedido_ibfk_3` FOREIGN KEY (`id_detalle`) REFERENCES `detalle_menu` (`id_detalle`),
  ADD CONSTRAINT `detalle_pedido_ibfk_4` FOREIGN KEY (`id_tip_ped`) REFERENCES `tipo_pedido` (`id_tip_ped`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`cod_mesa`) REFERENCES `mesas` (`cod_mesa`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`),
  ADD CONSTRAINT `pedido_ibfk_4` FOREIGN KEY (`ref_pago`) REFERENCES `forma_pago` (`ref_pago`);

--
-- Filtros para la tabla `tipo_comida`
--
ALTER TABLE `tipo_comida`
  ADD CONSTRAINT `id_cate_ibfk` FOREIGN KEY (`id_cate`) REFERENCES `categorias` (`id_cate`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
