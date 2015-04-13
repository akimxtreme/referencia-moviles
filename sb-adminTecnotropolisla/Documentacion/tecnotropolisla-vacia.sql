-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-10-2014 a las 19:30:59
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tecnotropolisla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_datos_maestros`
--

CREATE TABLE IF NOT EXISTS `cat_datos_maestros` (
  `lng_iddato_maestro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_tipo` varchar(45) NOT NULL COMMENT 'tipo al que pertenece el registro',
  `str_descripcion` varchar(45) NOT NULL COMMENT 'descripcion del registro',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  PRIMARY KEY (`lng_iddato_maestro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contiene id de varios tipos' AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cat_datos_maestros`
--

INSERT INTO `cat_datos_maestros` (`lng_iddato_maestro`, `str_tipo`, `str_descripcion`, `bol_eliminado`) VALUES
(1, 'Tipo de Equipo', 'Smartphone', 0),
(2, 'Tipo de Equipo', 'Tablet', 0),
(3, 'Gama', 'Alta', 0),
(4, 'Gama', 'Baja', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_especificaciones`
--

CREATE TABLE IF NOT EXISTS `cat_especificaciones` (
  `lng_idespecificacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_especificacion` varchar(50) NOT NULL COMMENT 'descripcion de la especificacion',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  PRIMARY KEY (`lng_idespecificacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contiene las especificaciones que pueden tener los equipos' AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `cat_especificaciones`
--

INSERT INTO `cat_especificaciones` (`lng_idespecificacion`, `str_especificacion`, `bol_eliminado`) VALUES
(1, '2G Network', 0),
(2, '3G Network', 0),
(3, '4G Network', 0),
(4, 'SIM', 0),
(5, 'Announced', 0),
(6, 'Status', 0),
(7, 'Dimensions', 0),
(8, 'Weight', 0),
(9, 'Type', 0),
(10, 'Size', 0),
(11, 'Multitouch', 0),
(12, 'Protection', 0),
(13, 'Alert types', 0),
(14, 'Loudspeaker', 0),
(15, '3.5mm jack', 0),
(16, 'Card slot', 0),
(17, 'Internal', 0),
(18, 'GPRS', 0),
(19, 'EDGE', 0),
(20, 'Speed', 0),
(21, 'WLAN', 0),
(22, 'Bluetooth', 0),
(23, 'NFC', 0),
(24, 'USB', 0),
(25, 'Camera Primary', 0),
(26, 'Video', 0),
(27, 'Camera Secondary', 0),
(28, 'OS', 0),
(29, 'Chipset', 0),
(30, 'CPU', 0),
(31, 'GPU', 0),
(32, 'Sensors', 0),
(33, 'Messaging', 0),
(34, 'Browser', 0),
(35, 'Radio', 0),
(36, 'GPS', 0),
(37, 'Java', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_marcas`
--

CREATE TABLE IF NOT EXISTS `cat_marcas` (
  `lng_idmarca` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_marca` varchar(50) NOT NULL COMMENT 'descripcion de la marca',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  PRIMARY KEY (`lng_idmarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contiene las marcas de los equipos' AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cat_marcas`
--

INSERT INTO `cat_marcas` (`lng_idmarca`, `str_marca`, `bol_eliminado`) VALUES
(1, 'Nokia', 0),
(2, 'Samsung', 0),
(3, 'Sony', 0),
(4, 'Motorola', 0),
(5, 'HTC', 0),
(6, 'Huawei', 0),
(7, 'Lenovo', 0),
(8, 'Apple', 0),
(9, 'Alcatel', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_privilegios`
--

CREATE TABLE IF NOT EXISTS `cat_privilegios` (
  `lng_idprivilegio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_privilegio` varchar(45) NOT NULL COMMENT 'Descripcion del privilegio',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  `lng_idrol` int(11) DEFAULT NULL,
  PRIMARY KEY (`lng_idprivilegio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contiene los privilegios que puede tener un usuario' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_roles`
--

CREATE TABLE IF NOT EXISTS `cat_roles` (
  `lng_idrol` int(11) NOT NULL AUTO_INCREMENT,
  `str_rol` varchar(45) DEFAULT NULL,
  `bol_eliminado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`lng_idrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cat_roles`
--

INSERT INTO `cat_roles` (`lng_idrol`, `str_rol`, `bol_eliminado`) VALUES
(1, 'Administrador', 0),
(2, 'Usuario', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE IF NOT EXISTS `tbl_categorias` (
  `lng_idcategoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `lng_idnoticia` int(11) NOT NULL COMMENT 'id del la noticia',
  `lng_idmarca` int(11) NOT NULL COMMENT 'id de la marca',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  `lng_idusuario` int(11) NOT NULL COMMENT 'id del usuario que guardo',
  PRIMARY KEY (`lng_idcategoria`),
  KEY `fk_tbl_categorias_1_idx` (`lng_idusuario`),
  KEY `fk_tbl_categorias_2_idx` (`lng_idnoticia`),
  KEY `fk_tbl_categorias_3_idx` (`lng_idmarca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contiene la categoria de las noticias' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

CREATE TABLE IF NOT EXISTS `tbl_comentarios` (
  `lng_idcomentario` int(11) NOT NULL COMMENT 'Clave primaria',
  `str_asunto` varchar(45) NOT NULL COMMENT 'Asunto del Comentario',
  `str_contenido` text NOT NULL COMMENT 'Contenido del comentario',
  `lng_idmodelo` int(11) NOT NULL COMMENT 'id del modelo sobre el cual se hace el comentario',
  `dmt_fecha` date NOT NULL COMMENT 'fecha del comentario',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'eliminado logico de la tabla',
  PRIMARY KEY (`lng_idcomentario`),
  KEY `fk_tbl_comentarios_1_idx` (`lng_idmodelo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contiene los comentarios de cada modelo';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modelos`
--

CREATE TABLE IF NOT EXISTS `tbl_modelos` (
  `lng_idmodelo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_modelo` varchar(50) NOT NULL COMMENT 'Descripcion del modelo',
  `blb_img_normal` blob COMMENT 'Imagen normal',
  `blb_img_mini` blob COMMENT 'imagen pequeña',
  `blb_img_galeria1` blob COMMENT 'Imagen para la galeria',
  `blb_img_galeria2` blob COMMENT 'Imagen para la galeria',
  `blb_img_galeria3` blob COMMENT 'imagen para la galeria',
  `dmt_fecha` date NOT NULL COMMENT 'fecha de creacion del registro',
  `lng_idusuario` int(11) NOT NULL COMMENT 'id del usuario que registro',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  `lng_idmarca` int(11) NOT NULL COMMENT 'marca asociada al modelo',
  `lng_idtipo_equipo` int(11) NOT NULL COMMENT 'smartphone o tablet',
  `lng_idgama` int(11) NOT NULL COMMENT 'alta o baja',
  `str_friendly_url` varchar(50) DEFAULT NULL COMMENT 'url amigable',
  PRIMARY KEY (`lng_idmodelo`),
  KEY `fk_lng_idmarca` (`lng_idmarca`),
  KEY `fk_lng_idtipo_equipo` (`lng_idtipo_equipo`),
  KEY `fk_lng_idgama` (`lng_idgama`),
  KEY `fk_tbl_modelos_1_idx` (`lng_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contiene los modelos de las marcas' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modelos_especificaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_modelos_especificaciones` (
  `lng_idmodelo_especificacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `lng_idmodelo` int(11) NOT NULL COMMENT 'id del modelo',
  `lng_idespecificacion` int(11) NOT NULL COMMENT 'id de la especificacion',
  `str_valor` varchar(45) NOT NULL COMMENT 'Valor de la especificacion',
  `dmt_fecha` date NOT NULL COMMENT 'fecha de creacion del registro',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  `lng_idusuario` int(11) NOT NULL COMMENT 'id del usuario que guardo',
  PRIMARY KEY (`lng_idmodelo_especificacion`),
  KEY `fk_lng_idespecificacion` (`lng_idespecificacion`),
  KEY `fk_lng_idmodelo` (`lng_idmodelo`),
  KEY `fk_lng_idusuario` (`lng_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contiene las especificaciones de cada modelo' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias`
--

CREATE TABLE IF NOT EXISTS `tbl_noticias` (
  `lng_idnoticia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_titulo` varchar(100) NOT NULL COMMENT 'Titulo de la noticia',
  `str_subtitulo` varchar(100) NOT NULL COMMENT 'Subtitulo de la noticia',
  `str_contenido` text NOT NULL COMMENT 'Contenido de la noticia',
  `blb_img_normal` blob COMMENT 'Imagen normal de la noticia',
  `blb_img_mini` blob COMMENT 'Imagen pequeña de la noticia',
  `dmt_fecha` date NOT NULL COMMENT 'fecha del registro',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  `lng_idusuario` int(11) NOT NULL COMMENT 'id del usuario que guardo',
  PRIMARY KEY (`lng_idnoticia`),
  KEY `fk_tbl_noticias_1_idx` (`lng_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contiene las noticias' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles_privilegios`
--

CREATE TABLE IF NOT EXISTS `tbl_roles_privilegios` (
  `lngid_rol_privilegio` int(11) NOT NULL AUTO_INCREMENT,
  `lng_idrol` int(11) DEFAULT NULL,
  `lng_idprivilegio` int(11) DEFAULT NULL,
  PRIMARY KEY (`lngid_rol_privilegio`),
  KEY `fk_tbl_roles_privilegios_1_idx` (`lng_idprivilegio`),
  KEY `fk_tbl_roles_privilegios_2_idx` (`lng_idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `lng_idusuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `str_usuario` varchar(45) NOT NULL COMMENT 'nombre de usuario',
  `str_cedula` varchar(45) NOT NULL COMMENT 'numero de cedula',
  `str_nombre` varchar(45) NOT NULL COMMENT 'nombre de la persona',
  `str_apellido` varchar(45) NOT NULL COMMENT 'apellido de la persona',
  `str_password` varchar(45) NOT NULL COMMENT 'clave del usuario',
  `str_correo` varchar(45) DEFAULT NULL COMMENT 'correo del usuario',
  `str_telefono` varchar(45) DEFAULT NULL COMMENT 'telefono del usuario',
  `lng_idrol` int(11) NOT NULL COMMENT 'id del privilegio del usuario',
  `dmt_fecha` date NOT NULL COMMENT 'fecha de creacion del registro',
  `bol_eliminado` tinyint(1) NOT NULL COMMENT 'Eliminado logico del registro',
  PRIMARY KEY (`lng_idusuario`),
  KEY `fk_tbl_usuarios_1_idx` (`lng_idrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contiene los usuarios del sistema' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`lng_idusuario`, `str_usuario`, `str_cedula`, `str_nombre`, `str_apellido`, `str_password`, `str_correo`, `str_telefono`, `lng_idrol`, `dmt_fecha`, `bol_eliminado`) VALUES
(1, 'nbarazarte', '16379712', 'Neel', 'Barazarte', 'm7nEr5PcsmSUtZ5u', 'ezebarazarte@gmail.com', '04142101096', 1, '2014-10-04', 0),
(5, 'dilarreta', '17588630', 'Domingo', 'Ilarreta', 'm7nOZpSmrmOU25Zu', '', '', 1, '2014-10-12', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD CONSTRAINT `fk_tbl_categorias_1` FOREIGN KEY (`lng_idusuario`) REFERENCES `tbl_usuarios` (`lng_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_categorias_2` FOREIGN KEY (`lng_idnoticia`) REFERENCES `tbl_noticias` (`lng_idnoticia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_categorias_3` FOREIGN KEY (`lng_idmarca`) REFERENCES `cat_marcas` (`lng_idmarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD CONSTRAINT `fk_tbl_comentarios_1` FOREIGN KEY (`lng_idmodelo`) REFERENCES `tbl_modelos` (`lng_idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_modelos`
--
ALTER TABLE `tbl_modelos`
  ADD CONSTRAINT `fk_lng_idgama` FOREIGN KEY (`lng_idgama`) REFERENCES `cat_datos_maestros` (`lng_iddato_maestro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lng_idmarca` FOREIGN KEY (`lng_idmarca`) REFERENCES `cat_marcas` (`lng_idmarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lng_idtipo_equipo` FOREIGN KEY (`lng_idtipo_equipo`) REFERENCES `cat_datos_maestros` (`lng_iddato_maestro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_modelos_1` FOREIGN KEY (`lng_idusuario`) REFERENCES `tbl_usuarios` (`lng_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_modelos_especificaciones`
--
ALTER TABLE `tbl_modelos_especificaciones`
  ADD CONSTRAINT `fk_lng_idespecificacion` FOREIGN KEY (`lng_idespecificacion`) REFERENCES `cat_especificaciones` (`lng_idespecificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lng_idmodelo` FOREIGN KEY (`lng_idmodelo`) REFERENCES `tbl_modelos` (`lng_idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lng_idusuario` FOREIGN KEY (`lng_idusuario`) REFERENCES `tbl_usuarios` (`lng_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD CONSTRAINT `fk_tbl_noticias_1` FOREIGN KEY (`lng_idusuario`) REFERENCES `tbl_usuarios` (`lng_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_roles_privilegios`
--
ALTER TABLE `tbl_roles_privilegios`
  ADD CONSTRAINT `fk_tbl_roles_privilegios_1` FOREIGN KEY (`lng_idprivilegio`) REFERENCES `cat_privilegios` (`lng_idprivilegio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_roles_privilegios_2` FOREIGN KEY (`lng_idrol`) REFERENCES `cat_roles` (`lng_idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_1` FOREIGN KEY (`lng_idrol`) REFERENCES `cat_roles` (`lng_idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
