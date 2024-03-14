-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 05:25:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_dgsa`
--
CREATE DATABASE IF NOT EXISTS `proyecto_dgsa` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `proyecto_dgsa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a1_usuarios`
--

CREATE TABLE `a1_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `ActivoInactivo` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `nacionalidad` varchar(45) COLLATE utf8_bin NOT NULL,
  `cedula` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `telefono_secundario` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `usuario_departamento_id` int(11) DEFAULT NULL,
  `usuario_division_id` int(11) NOT NULL,
  `usuario_direccion_id` int(11) NOT NULL,
  `usuario_rol_id` int(11) NOT NULL,
  `contraseña` varchar(256) COLLATE utf8_bin NOT NULL,
  `id_pregunta1` int(11) DEFAULT NULL,
  `respuesta1` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_pregunta2` int(11) DEFAULT NULL,
  `respuesta2` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_pregunta3` int(11) DEFAULT NULL,
  `respuesta3` varchar(255) COLLATE utf8_bin NOT NULL,
  `pin_seguridad` varchar(6) COLLATE utf8_bin NOT NULL,
  `sesion` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `a1_usuarios`
--

INSERT INTO `a1_usuarios` (`id_usuario`, `ActivoInactivo`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `nombre_usuario`, `telefono`, `telefono_secundario`, `email`, `usuario_departamento_id`, `usuario_division_id`, `usuario_direccion_id`, `usuario_rol_id`, `contraseña`, `id_pregunta1`, `respuesta1`, `id_pregunta2`, `respuesta2`, `id_pregunta3`, `respuesta3`, `pin_seguridad`, `sesion`) VALUES
(1, 1, 'Jesus', 'Castillo', 'V', '27146430', 'JADMIN', '04124457287', '', 'jesusgole33@gmail.com', 21, 11, 1, 1, '$2y$10$1ILJhkEEkzmcvSSegQ1Eu.ItdlToZXUPqPeMRKbQUPtz0a5FPkwFa', 1, '$2y$10$he8YwdLUALqy56il2P7If.xDjkqQ7Tv24v3huJdexZxyrnL0vT1D6', 2, '$2y$10$T81sFyjMgJJSatXKXxnnTOJESmGbYJbbDzav8VkXoBBYzAakFPnja', 3, '$2y$10$I4cQXeOn9Izg7wcnDKj9/.wJ6xyxnTdQifQrHa5WAp5.j7PSfThn2', '0303', 0),
(2, 1, 'Juan', 'García', 'V', '271464301', 'TECNICO1', '04124457287', '', 'jesusgole33@gmail.com', 21, 11, 1, 2, '$2y$10$miOJ5nSJBIh2fJAEvd7hHuqreU2IAySrlTOnaL4gevKckcng8zfee', 1, '$2y$10$xnUSEhx0gtVVBHaOWVgEKeWUmhQ.rBY/ckUfijHh.1k2e9mEAv2RW', 2, '$2y$10$bVqSBNgnV79uvwRJSkEfz.bo.1UTaJAJIjpNQ2BT9VESUBUTYJZpK', 3, '$2y$10$mNUM94SIw2BMTJM0ie2D2uKWNuBAq21zMU9VGp.9rjpWrePBvgdmG', '0303', 0),
(3, 1, 'Martin', 'Empl', 'V', '271464302', 'EMPLEADO', '04124457287', '', 'jesusgole33@gmail.com', 1, 1, 1, 4, '$2y$10$RhPguGiy1h6z149UQN2LLetT0UzK9/WqxQfsQEv1yCI4.fXoqf.Fu', 1, '$2y$10$OZXb5moyWAm4SDRQ6xmKc.3FIEbDuXYA6VrqDTeKywSTV.LGt0tru', 2, '$2y$10$MMHIbUoqeAyPvQmCl92RDeSN4PEZnEIUUQwrs7Lpa7OlCSeHIQkvW', 3, '$2y$10$1nebSlJznV5S7hPZ/NHRb.0ismqQZRv/QvN0f.WtNh9Kh2vfN9wNm', '0303', 0),
(4, 1, 'Jakelin', 'Correspondencia', 'V', '271464303', 'JEFECORR', '04124457287', '', 'jesusgole33@gmail.com', 80, 1, 1, 3, '$2y$10$S0J6CkoIECNWfCM.7ouzwOo1iK4MfBChE9oRSWjV1kKZ2FnVbt4Fa', 1, '$2y$10$iicz2HKbXW68Vb4GuR2BwevyrcK9PAkgNUHyne6adLCzpvPJee2UW', 2, '$2y$10$w01eVWerHAqycSQL5Gqa9eVVIkaeZCuEGtxBZ/erMwG5JmuAWnQMq', 3, '$2y$10$DZE2NuXZsW3gyq94h3Awyu/RnjW0asUlFPsT4ncnqYKFvBBCskz.y', '0303', 0),
(5, 1, 'Carlos', 'DCV', 'V', '271464304', 'JEFEDCV', '04124457287', '', 'jesusgole33@gmail.com', 36, 19, 4, 3, '$2y$10$r6qgUkJEfgN..ysT.GfhFONwHS2YBzJ3wzTBEcKMy6Kz0ckXNIT2u', 1, '$2y$10$gYnOXbsl1MdSsgeN8So4Neo0iM.nXB8aGBtES/KF9raBGu5l717TG', 2, '$2y$10$IGCm7b.zkmKOoRHbGp.xxO16mkSA.sQgrIePsXyAvGFxDEv5uXbDC', 3, '$2y$10$E80ccg.a4oMPAVWAQJX4Pe2EKUbkDj845dtNML69c73C66heINsGy', '0303', 0),
(6, 1, 'Carol', 'Gomez', 'V', '18692692', 'JEFEDSR', '04124428787', '', 'jesusgole33@gmail.com', 72, 30, 3, 3, '$2y$10$m3yMnydYWNizeJJvVGsJ/Oi9I590xzT29IhMHCqRWwMK5xP1TBg3i', 1, '$2y$10$NPMUWA1MFCrbW84T/e8qH.ueAdabmobZqoGO0kgyEwLXlyCiGdx2S', 2, '$2y$10$c7lLFPm66CikL8FqXFH/gubHwtIkXitERnITD6cZrXW2yzlGrq7sa', 9, '$2y$10$JZOIHo1jIaJZ8WHbG2KhXOZI9oyUZg.xMII5OBpauKqg6gdvR20My', '0303', 0),
(7, 1, 'Martin', 'Guerra', 'V', '20548623', 'TECNICO2', '04124457287', '', 'jesusgole33@gmail.com', 21, 11, 1, 2, '$2y$10$4zjLV9CZhLzcmKX5Uidc4O4nM30of6Cn0YWpQIG3/AgMPDHFLXCdO', 1, '$2y$10$5w.uN5YJsHSa4c6abKAsV.L65RhqQBG5ni86gMIuSqpsQR9VDNS.m', 2, '$2y$10$ygioiL33xy3lGUb1ucjUXu9y2KvvCiQBkdUYvtXl7lUqR1qhzUYgm', 9, '$2y$10$JEPgfUnZjG3zwC8HyKSQAu/kO6yJuE4xOgRu7C0yOt.nFBkuxtiRC', '0303', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a2_rol`
--

CREATE TABLE `a2_rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `a2_rol`
--

INSERT INTO `a2_rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Ingeniero Informático'),
(3, 'Jefe de Coordinación'),
(4, 'Secretario'),
(5, 'Sin Acceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a3_preguntas`
--

CREATE TABLE `a3_preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `a3_preguntas`
--

INSERT INTO `a3_preguntas` (`id_pregunta`, `pregunta`) VALUES
(1, 'Color favorito'),
(2, 'Fruta favorita'),
(3, 'Pelicula favorita'),
(4, 'Mascota'),
(5, 'Nombre madre'),
(6, 'Nombre padre'),
(7, 'Serie favorita'),
(8, 'Música favorita'),
(9, 'Lugar favorito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a4_estado`
--

CREATE TABLE `a4_estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_status` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `a4_estado`
--

INSERT INTO `a4_estado` (`id_estado`, `nombre_status`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Eliminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b1_direcciones`
--

CREATE TABLE `b1_direcciones` (
  `id_direcciones` int(11) NOT NULL,
  `nombre_dire` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `b1_direcciones`
--

INSERT INTO `b1_direcciones` (`id_direcciones`, `nombre_dire`) VALUES
(1, 'Dirección General'),
(2, 'Dirección de Ingenería Sanitaria'),
(3, 'Dirección de Salud Radiológica'),
(4, 'Dirección de Control de Vectores'),
(5, 'Dirección Epidemiología Ambiental'),
(6, 'Sin Asignar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b2_divisiones`
--

CREATE TABLE `b2_divisiones` (
  `id_divisiones` int(11) NOT NULL,
  `nombre_div` varchar(100) COLLATE utf8_bin NOT NULL,
  `division_direccion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `b2_divisiones`
--

INSERT INTO `b2_divisiones` (`id_divisiones`, `nombre_div`, `division_direccion_id`) VALUES
(1, 'Despacho Dirección', 1),
(2, 'Servicios Generales', 1),
(3, 'Talleres', 1),
(4, 'Vigilantes', 1),
(5, 'Enlace Administración - Direccion', 1),
(6, 'Almacenes', 1),
(7, 'Enlace RRHH-Dirección', 1),
(8, 'Unidad Legal', 1),
(9, 'Evaluación y Acreencias', 1),
(10, 'Servicios de Salud y Seguridad en el Trabajo', 1),
(11, 'Coordinación de Informática', 1),
(12, 'Enlace de Planificación y Presupuesto', 1),
(13, 'Transporte', 1),
(14, 'Mercosur-Cooperación Técnica Internacional RSI', 1),
(15, 'Control Interno', 1),
(16, 'Dirección de Ingeniería Sanitaria', 2),
(17, 'Enlace Administrativo - DSR', 3),
(18, 'Dirección de Control de Vectores', 4),
(19, 'Laboratorio de Malacologia', 4),
(20, 'Dirección de Epidemiología', 5),
(21, 'Sala de Inspectores', 5),
(22, 'Sala Dibujo', 5),
(23, 'Coordinación Gestión de Medicamentos', 5),
(24, 'Sala Situacional', 1),
(25, 'Laboratorio de Malaria', 5),
(26, 'Laboratorio de Parasitología', 5),
(27, 'Laboratorio de Chagas', 5),
(28, 'Sin Asignar', 6),
(29, 'Enlace de Recursos Humanos', 3),
(30, 'Coordinación de Regulación y Control de Radiaciones', 3),
(31, 'Coordinación Vigilancia e Higiene de las Radiaciones', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b3_departamentos`
--

CREATE TABLE `b3_departamentos` (
  `id_departamento` int(11) NOT NULL,
  `nombre_dpto` varchar(255) COLLATE utf8_bin NOT NULL,
  `departamento_division_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `b3_departamentos`
--

INSERT INTO `b3_departamentos` (`id_departamento`, `nombre_dpto`, `departamento_division_id`) VALUES
(1, 'Despacho Dirección', 1),
(2, 'Mantenimiento Área I', 2),
(3, 'Mantenimiento Área II', 2),
(4, 'Mantenimiento Área III', 2),
(5, 'Talleres', 3),
(6, 'Vigilantes', 4),
(7, 'Bienes Nacionales', 5),
(8, 'Kardex', 5),
(9, 'Almacenes', 6),
(10, 'Secretaria', 7),
(11, 'Capacitación', 7),
(12, 'Jubilados', 7),
(13, 'Bienestar Social', 7),
(14, 'Nómina', 7),
(15, 'Archivo', 7),
(16, 'Registro y Control', 7),
(17, 'Seguro Social', 7),
(18, 'Unidad Legal', 8),
(19, 'Evaluación y Acreencias', 9),
(20, 'Servicios de Salud y Seguridad en el Trabajo', 10),
(21, 'Coordinación de Informática', 11),
(22, 'Enlace de Planificación y Presupuesto', 12),
(23, 'Transporte', 13),
(24, 'Mercosur-Cooperación Técnica Internacional RSI', 14),
(25, 'Control Interno', 15),
(26, 'Coordinacion de Residuos y Desechos', 16),
(27, 'Coordinación de Agua, Aire  y Edificaciones', 16),
(28, 'Coordinación Sustancia y Materiales', 16),
(29, 'Coordinación de Regulación y Control de Radiaciones\r\n', 17),
(30, 'Coordinación de Regulación y Control de Radia.. (verificar)\r\n', 17),
(31, 'Coordinación Protección e Higiene de las Radioaciones\r\n', 17),
(32, 'Coordinación Entomología en Salud Pública', 18),
(33, 'Coordinación de Foco Zoonoticos', 18),
(34, 'Coordinación de Control Operacional', 18),
(35, 'Coordinación de Control de Vectores', 18),
(36, 'Laboratorio de Malacologia', 19),
(37, 'Programa de Parasitosis', 20),
(38, 'Progarma de Chagas', 20),
(39, 'Programa de Malaria', 20),
(40, 'Sala de Inspectores', 21),
(41, 'Sala Dibujo', 22),
(42, 'Coordinación Gestión de Medicamentos', 23),
(43, 'Sala Situacional', 24),
(44, 'Laboratorio de Malaria', 25),
(45, 'Laboratorio de Parasitología', 26),
(46, 'Laboratorio de Chagas', 27),
(47, 'Sin Asignar', 28),
(70, 'Administracion', 17),
(71, 'Recursos Humanos', 29),
(72, 'Estadistica Radiologica', 30),
(73, 'Fiscalización', 30),
(74, 'Archivo', 30),
(75, 'Gestion de Desechos Radioactivos', 30),
(76, 'Departamento Informática (Dosimetria Externa)', 31),
(77, 'Dosimetria Ambiental', 31),
(78, 'Dosimetria Clinica y Auditoria de Equipos', 31),
(79, 'Registro Nacional de Dosimetria', 31),
(80, 'Correspondencia', 1),
(81, 'Diseño y Publicidad', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c1_inventario_equipo`
--

CREATE TABLE `c1_inventario_equipo` (
  `id_case` int(11) NOT NULL,
  `fecha_inventario` date NOT NULL,
  `ing_encar_inv_id` int(11) NOT NULL,
  `dpto_inv_id` int(11) NOT NULL,
  `division_inv_id` int(11) NOT NULL,
  `direccion_inv_id` int(11) NOT NULL,
  `responsable` varchar(45) COLLATE utf8_bin NOT NULL,
  `supervisor_dpto` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_equipo` varchar(45) COLLATE utf8_bin NOT NULL,
  `BN_equipo` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `serial_equipo` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `tipo_de_equipo` varchar(45) COLLATE utf8_bin NOT NULL,
  `cpu_modelo` varchar(45) COLLATE utf8_bin NOT NULL,
  `cpu_velocidad` varchar(45) COLLATE utf8_bin NOT NULL,
  `mac` varchar(45) COLLATE utf8_bin NOT NULL,
  `ip` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `disco_duro_cap` varchar(45) COLLATE utf8_bin NOT NULL,
  `disco_duro_marca` varchar(45) COLLATE utf8_bin NOT NULL,
  `disco_duro_serial` varchar(45) COLLATE utf8_bin NOT NULL,
  `ram` varchar(45) COLLATE utf8_bin NOT NULL,
  `ram_velocidad` varchar(45) COLLATE utf8_bin NOT NULL,
  `windows_ver` varchar(45) COLLATE utf8_bin NOT NULL,
  `conect_red` varchar(45) COLLATE utf8_bin NOT NULL,
  `tipo_conexion` varchar(45) COLLATE utf8_bin NOT NULL,
  `internet` varchar(45) COLLATE utf8_bin NOT NULL,
  `mouse` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `BN_serial_mouse` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `mouse_marca` varchar(45) COLLATE utf8_bin NOT NULL,
  `mouse_conexion` varchar(45) COLLATE utf8_bin NOT NULL,
  `monitor` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `monitor_marca` varchar(100) COLLATE utf8_bin NOT NULL,
  `monitor_conexion` varchar(45) COLLATE utf8_bin NOT NULL,
  `BN_serial_monitor` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `regulador` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `regulador_marca` varchar(45) COLLATE utf8_bin NOT NULL,
  `BN_serial_regulador` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `teclado` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `teclado_marca` varchar(45) COLLATE utf8_bin NOT NULL,
  `teclado_conexion` varchar(45) COLLATE utf8_bin NOT NULL,
  `BN_serial_teclado` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `escaner` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `escaner_marca` varchar(100) COLLATE utf8_bin NOT NULL,
  `escaner_modelo` varchar(45) COLLATE utf8_bin NOT NULL,
  `escaner_conexion` varchar(45) COLLATE utf8_bin NOT NULL,
  `escaner_operativo` varchar(25) COLLATE utf8_bin NOT NULL,
  `toner_tinta` varchar(25) COLLATE utf8_bin NOT NULL,
  `conectada_red` varchar(25) COLLATE utf8_bin NOT NULL,
  `BN_serial_escaner` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `comentario` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `notas_edicion` longtext COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `c1_inventario_equipo`
--

INSERT INTO `c1_inventario_equipo` (`id_case`, `fecha_inventario`, `ing_encar_inv_id`, `dpto_inv_id`, `division_inv_id`, `direccion_inv_id`, `responsable`, `supervisor_dpto`, `nombre_equipo`, `BN_equipo`, `serial_equipo`, `tipo_de_equipo`, `cpu_modelo`, `cpu_velocidad`, `mac`, `ip`, `disco_duro_cap`, `disco_duro_marca`, `disco_duro_serial`, `ram`, `ram_velocidad`, `windows_ver`, `conect_red`, `tipo_conexion`, `internet`, `mouse`, `BN_serial_mouse`, `mouse_marca`, `mouse_conexion`, `monitor`, `monitor_marca`, `monitor_conexion`, `BN_serial_monitor`, `regulador`, `regulador_marca`, `BN_serial_regulador`, `teclado`, `teclado_marca`, `teclado_conexion`, `BN_serial_teclado`, `escaner`, `escaner_marca`, `escaner_modelo`, `escaner_conexion`, `escaner_operativo`, `toner_tinta`, `conectada_red`, `BN_serial_escaner`, `comentario`, `notas_edicion`) VALUES
(1, '2024-02-08', 2, 43, 24, 1, 'Javier Martinez', 'Rodolfo Mejias', 'M1SSPC18', '5080745', '', 'Escritorio', 'i5 10505', '3.19GHz', 'D0-8E-79-0F-A4-C6', '10.72.3.226', '500Gb', 'SinMarca', '42D54D8B', '1', '8gb', '10', 'Si', 'Cableada', 'Si', 'Si', 'SinSerial', 'DELL', 'USB', '', 'DELL', 'VGA', '5080743', 'Si', 'Generico', '5080793', 'Si', 'VGA', 'USB', '5080793', 'No', '', '', '', '', '', '', '', 'Registro de equipo de sala situacional', NULL),
(2, '2024-02-08', 2, 43, 24, 1, 'Carla Diaz', 'Rodolfo Mejias', 'M1SSPC17', '5080796', '', 'Escritorio', 'i5 10505', '3.20GHz', 'D0-8E-79-0F-A3-11', '10.72.3.220', '500Gb', 'MarcaCL', 'CL-3D512-Q11NVMe', '2', '8gb', '10', 'Si', 'Ambas', 'Si', 'Si', 'CN-0DMV3P-CH400-171', 'DELL', 'USB', 'Si', 'DELL', 'HDMI', '5080746', 'Si', 'DELL', '3428396', 'Si', 'DELL', 'USB', '5080796', 'No', '', '', '', '', '', '', '', 'Escaner dañado, se hará un reporte', 'Cambio de responsable del equipo, además de tipo de conexiones a la red<br><br>Cambio de la ip a la que estaba conectado por modificaciones en el servidor'),
(3, '2024-03-13', 2, 1, 1, 1, 'Eucarin Romero', 'Rodolfo Mejias', 'M1SSPC02', '3712800', 'CNG1470VMY', 'Escritorio', 'Phenom II', '3.40Ghz', '08-2E-5F-0E-4F-B4', '10.72.0.196', '300Gb', 'WesternDigital', 'WD3200AAdS', '1', '4Gb', '7', 'Si', 'Cableada', 'Si', 'Si', 'SinSerial', 'MouseHP', 'USB', '', 'HP', 'VGA', '3713190', 'No', '', '', 'Si', 'Delux', 'USB', '5016015', 'No', '', '', '', '', '', '', '', 'Equipo Registrado por el Ingeniero Juan, equipo nuevo del departamento de Sala Situacional', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c3_1_estado_soporte`
--

CREATE TABLE `c3_1_estado_soporte` (
  `id_estado_sop` int(11) NOT NULL,
  `nombre_estado` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `c3_1_estado_soporte`
--

INSERT INTO `c3_1_estado_soporte` (`id_estado_sop`, `nombre_estado`) VALUES
(1, 'En Espera'),
(2, 'En Proceso'),
(3, 'Finalizado'),
(4, 'Rechazado'),
(5, 'Rechazado Definitivo'),
(6, 'Falta Repuesto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c3_solicitudes_soportes`
--

CREATE TABLE `c3_solicitudes_soportes` (
  `id_soporte` int(11) NOT NULL,
  `uso_equipo` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_equipo_soporte` int(11) NOT NULL,
  `nomb_equipo_soporte` varchar(100) COLLATE utf8_bin NOT NULL,
  `nivel_soporte` varchar(45) COLLATE utf8_bin NOT NULL,
  `soporte_descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_soporte_solicitud` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_soporte_aceptacion` datetime NOT NULL,
  `tecnico_soporte_id` int(11) DEFAULT NULL,
  `fecha_soporte_final` datetime NOT NULL,
  `comentario` text COLLATE utf8_bin NOT NULL,
  `historial_soporte` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `c3_solicitudes_soportes`
--

INSERT INTO `c3_solicitudes_soportes` (`id_soporte`, `uso_equipo`, `id_equipo_soporte`, `nomb_equipo_soporte`, `nivel_soporte`, `soporte_descripcion`, `fecha_soporte_solicitud`, `estado`, `fecha_soporte_aceptacion`, `tecnico_soporte_id`, `fecha_soporte_final`, `comentario`, `historial_soporte`) VALUES
(1, 'Uso Oficial', 1, 'M1SSPC18', 'Nivel Software', 'El equipo no quiere abrir los archivos pdf', '2024-02-08 08:34:38', 3, '2024-03-05 10:49:06', 2, '2024-03-05 10:49:33', 'Finalizada de manera exitosa', NULL),
(2, 'Uso Oficial', 1, 'M1SSPC18', 'Nivel Hardware', 'El equipo arranca pero no enciende, la pantalla queda en negro', '2024-03-11 01:52:37', 2, '2024-03-11 13:58:31', 2, '0000-00-00 00:00:00', '', NULL),
(3, 'Uso Oficial', 2, 'M1SSPC17', 'Nivel Software', 'No está llegando internet al equipo', '2024-03-12 10:57:41', 3, '2024-03-12 02:32:38', 2, '2024-03-13 02:35:15', 'Se finalizó de manera exitosa', 'Se debe cambiar la fuente de poder, parece presentar fallas<br><br>Se hizo el cambio de componentes pero parece que también debe hacerse cambio de memorias ram<br><br>Por fallos de luz se cambia la fecha de prueba al catorce de marzo'),
(4, 'Uso Oficial', 2, 'M1SSPC17', 'Nivel Software', 'El equipo se apago durante un bajón de luz y no enciende', '2024-03-13 02:36:27', 1, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c4_base_conocimiento`
--

CREATE TABLE `c4_base_conocimiento` (
  `id_conocimiento` int(11) NOT NULL,
  `tipo_conocimiento` varchar(45) COLLATE utf8_bin NOT NULL,
  `descripcion_caso` varchar(45) COLLATE utf8_bin NOT NULL,
  `posible_solucion` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d1_correspondencia`
--

CREATE TABLE `d1_correspondencia` (
  `id_nro_admision` int(11) NOT NULL,
  `nro_oficio` varchar(45) COLLATE utf8_bin NOT NULL,
  `fecha_sal_empresa` date NOT NULL,
  `procedencia` int(11) NOT NULL,
  `rif_corresp_emp` varchar(15) COLLATE utf8_bin NOT NULL,
  `asunto` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_llegada` datetime NOT NULL,
  `oficina_destino` int(11) NOT NULL,
  `coordi_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `d1_correspondencia`
--

INSERT INTO `d1_correspondencia` (`id_nro_admision`, `nro_oficio`, `fecha_sal_empresa`, `procedencia`, `rif_corresp_emp`, `asunto`, `fecha_llegada`, `oficina_destino`, `coordi_destino`) VALUES
(1, '52465', '2024-02-01', 1, '271464300', 'Ingreso de nuevos equipos', '2024-03-11 10:56:14', 1, 11),
(2, '4536', '2024-02-05', 2, '24816800', 'Se quiere solicitar permiso de ambiente', '2024-03-12 08:34:08', 4, 19),
(7, '3423543', '2024-03-11', 3, '27146430', 'Se quiere solicitar permiso de ambiente', '2024-03-13 02:23:40', 3, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d2_empresas_corresp`
--

CREATE TABLE `d2_empresas_corresp` (
  `id_empresas` int(11) NOT NULL,
  `identificador_rif` varchar(5) COLLATE utf8_bin NOT NULL,
  `rif` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_empresa` varchar(45) COLLATE utf8_bin NOT NULL,
  `dedicacion` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `d2_empresas_corresp`
--

INSERT INTO `d2_empresas_corresp` (`id_empresas`, `identificador_rif`, `rif`, `nombre_empresa`, `dedicacion`) VALUES
(1, 'V', '271464300', 'JS Imports', 'Exportacion de Equipos Electrónicos'),
(2, 'V', '24816800', 'Protectors', 'Productos de Proteccion contra plagas'),
(3, 'J', '27146430', 'Pro Salud', 'Centro de salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d3_notificaciones_div`
--

CREATE TABLE `d3_notificaciones_div` (
  `id_notificacion` int(11) NOT NULL,
  `id_corresp` int(11) NOT NULL,
  `id_empresa_corresp` int(11) NOT NULL,
  `id_corres_divi` int(11) NOT NULL,
  `id_corres_dire` int(11) NOT NULL,
  `Jefe_Corres` int(11) NOT NULL,
  `Jefe_Ced_Corres` varchar(45) COLLATE utf8_bin NOT NULL,
  `fecha_llegada_corresp` datetime NOT NULL,
  `fecha_confirmacion_corres` datetime DEFAULT NULL,
  `descripcion_corresp` varchar(255) COLLATE utf8_bin NOT NULL,
  `estatus_Corres` int(1) NOT NULL,
  `nota_final_corresp` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `d3_notificaciones_div`
--

INSERT INTO `d3_notificaciones_div` (`id_notificacion`, `id_corresp`, `id_empresa_corresp`, `id_corres_divi`, `id_corres_dire`, `Jefe_Corres`, `Jefe_Ced_Corres`, `fecha_llegada_corresp`, `fecha_confirmacion_corres`, `descripcion_corresp`, `estatus_Corres`, `nota_final_corresp`) VALUES
(1, 1, 1, 11, 1, 1, '27146430', '2024-03-11 08:33:11', NULL, 'Ingreso de nuevos equipos', 1, ''),
(2, 2, 2, 19, 4, 5, '271464304', '2024-03-12 13:56:46', NULL, 'Se quiere solicitar permiso de ambiente', 1, ''),
(7, 7, 3, 30, 3, 6, '18692692', '2024-03-13 02:23:40', NULL, 'Se quiere solicitar permiso de ambiente', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d4_notificaciones_estatus`
--

CREATE TABLE `d4_notificaciones_estatus` (
  `id_estatus_notifi` int(11) NOT NULL,
  `nombre_estatus_notifi` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `d4_notificaciones_estatus`
--

INSERT INTO `d4_notificaciones_estatus` (`id_estatus_notifi`, `nombre_estatus_notifi`) VALUES
(1, 'En espera'),
(2, 'Confirmado'),
(3, 'Alerta'),
(4, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e1_galerias`
--

CREATE TABLE `e1_galerias` (
  `id_galeria` int(11) NOT NULL,
  `titulo_archivo` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `descripcion_archivo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_archivo` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_galeria_direccion` int(11) NOT NULL,
  `id_galeria_tipo` int(11) NOT NULL,
  `id_galeria_grupo` int(11) NOT NULL,
  `tipo_archivo` varchar(50) COLLATE utf8_bin NOT NULL,
  `visible` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e2_galerias_tipos`
--

CREATE TABLE `e2_galerias_tipos` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `actualizacion_galeria_tipos` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `e2_galerias_tipos`
--

INSERT INTO `e2_galerias_tipos` (`id_tipo`, `nombre_tipo`, `actualizacion_galeria_tipos`) VALUES
(1, 'Imagen', '2024-02-08 12:06:15'),
(2, 'Video', '2024-02-08 12:06:15'),
(3, 'Documento', '2024-02-08 12:06:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e3_galerias_grupos`
--

CREATE TABLE `e3_galerias_grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo_galeria` varchar(200) COLLATE utf8_bin NOT NULL,
  `id_direccion_grupo` int(11) NOT NULL,
  `actualizacion_galeria_grupos` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e4_boletines`
--

CREATE TABLE `e4_boletines` (
  `id_boletin` int(11) NOT NULL,
  `id_usuario_boletin` int(11) NOT NULL,
  `id_boletin_direccion` int(11) NOT NULL,
  `titulo_boletin` varchar(150) COLLATE utf8_bin NOT NULL,
  `img1_boletin` varchar(255) COLLATE utf8_bin NOT NULL,
  `text1_boletin` mediumtext COLLATE utf8_bin NOT NULL,
  `img2_boletin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `text2_boletin` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `imgvid3_boletin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `text3_boletin` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `boletin_visible` int(11) NOT NULL,
  `fecha_creacion_bol` date NOT NULL,
  `fecha_actualizacion_bol` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e5_instrumentos_legales`
--

CREATE TABLE `e5_instrumentos_legales` (
  `id_instrumento_legal` int(11) NOT NULL,
  `titulo_instrumento` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_instrumento` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_instrumento_direccion` int(11) NOT NULL,
  `id_instrumento_grupo` int(11) NOT NULL,
  `id_instrumento_tipo` int(11) NOT NULL,
  `instrumento_visible` int(11) NOT NULL,
  `fecha_creacion_instrumento` date NOT NULL,
  `fecha_actualizacion_instrumento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e6_tipos_instrumentos`
--

CREATE TABLE `e6_tipos_instrumentos` (
  `id_tipo_instrumento` int(11) NOT NULL,
  `nombre_tipo_instrumento` varchar(45) COLLATE utf8_bin NOT NULL,
  `actualizacion_tipo_instrumento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e7_grupos_instrumentos`
--

CREATE TABLE `e7_grupos_instrumentos` (
  `id_grup_instrumento` int(11) NOT NULL,
  `nombre_grup_instrumento` varchar(150) COLLATE utf8_bin NOT NULL,
  `id_grupo_instr_direc` int(11) NOT NULL,
  `actualizacion_grupo_instrumento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f1_coordinaciones_web`
--

CREATE TABLE `f1_coordinaciones_web` (
  `id_coordinacion_web` int(11) NOT NULL,
  `imagen_coord1` varchar(255) COLLATE utf8_bin NOT NULL,
  `titulo_text1` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion_text1` mediumtext COLLATE utf8_bin NOT NULL,
  `imagen_coord2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `titulo_text2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion_text2` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `imagen_coord3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `titulo_text3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion_text3` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `titulo_lista1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lista1_coord` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `titulo_lista2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lista2_coord` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `id_coord_direccion` int(11) NOT NULL,
  `id_coord_usuario` int(11) NOT NULL,
  `id_coord_visible` int(11) NOT NULL,
  `fecha_creacion_coord` date NOT NULL,
  `fecha_actualizacion_coord` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z1_historial_camb_sis`
--

CREATE TABLE `z1_historial_camb_sis` (
  `id_historial_cambios` int(11) NOT NULL,
  `id_usuario_cambio` int(11) NOT NULL,
  `id_accion_cambio` int(11) NOT NULL,
  `entidad_cambio` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_usuario_cambio` datetime DEFAULT NULL,
  `descripcion_cambio` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `z1_historial_camb_sis`
--

INSERT INTO `z1_historial_camb_sis` (`id_historial_cambios`, `id_usuario_cambio`, `id_accion_cambio`, `entidad_cambio`, `fecha_usuario_cambio`, `descripcion_cambio`) VALUES
(1, 1, 1, '27146430', '2024-02-08 08:12:07', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-27146430. Dicho empleado se ha registrado como trabajador en: Coordinación de Informática'),
(2, 1, 1, '27146430', '2024-02-08 08:12:20', 'El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad.'),
(3, 1, 3, '27146430', '2024-02-08 08:12:40', 'Ingreso del Usuario: Jesus Castillo.'),
(4, 2, 1, '271464301', '2024-02-08 08:15:12', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Juan García, cédula V-271464301. Dicho empleado se ha registrado como trabajador en: Coordinación de Informática'),
(5, 2, 1, '271464301', '2024-02-08 08:15:29', 'El usuario Juan García, finalizó el registro las preguntas de seguridad.'),
(6, 3, 1, '271464302', '2024-02-08 08:16:31', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-271464302. Dicho empleado se ha registrado como trabajador en: Despacho Dirección'),
(7, 3, 1, '271464302', '2024-02-08 08:16:49', 'El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad.'),
(8, 4, 1, '271464303', '2024-02-08 08:17:38', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-271464303. Dicho empleado se ha registrado como trabajador en: Despacho Dirección'),
(9, 4, 1, '271464303', '2024-02-08 08:17:54', 'El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad.'),
(10, 5, 1, '271464304', '2024-02-08 08:19:27', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-271464304. Dicho empleado se ha registrado como trabajador en: Laboratorio de Malacologia'),
(11, 5, 1, '271464304', '2024-02-08 08:20:01', 'El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad.'),
(12, 1, 2, '271464304', '2024-02-08 08:21:36', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Carlos DCV, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Jefe de Coordinación. Cambios realizados.'),
(13, 1, 2, '271464303', '2024-02-08 08:21:43', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Jakelin Correspondencia, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Jefe de Coordinación. Cambios realizados.'),
(14, 1, 2, '271464301', '2024-02-08 08:21:50', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Juan García, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Ingeniero Informático. Cambios realizados.'),
(15, 1, 2, '271464302', '2024-02-08 08:21:58', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Martin Empl, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Secretario. Cambios realizados.'),
(16, 1, 5, 'M1SSPC18', '2024-02-08 08:26:36', 'Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: M1SSPC18. Nro de Registro: 1.'),
(17, 1, 5, 'M1SSPC17', '2024-02-08 08:31:01', 'Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: M1SSPC17. Nro de Registro: 2.'),
(18, 1, 4, '27146430', '2024-02-08 08:31:58', 'Salida del sistema del Usuario: Jesus Castillo.'),
(19, 4, 3, '271464303', '2024-02-08 08:32:02', 'Ingreso del Usuario: Jakelin Correspondencia.'),
(20, 4, 15, 'JS Imports', '2024-02-08 08:32:53', 'Se registra una nueva empresa en el sistema, bajo el nombre. JS Imports, y cuyo RIF es: V-271464300. Registro hecho por: Jakelin Correspondencia.'),
(21, 4, 13, '271464303', '2024-02-08 08:33:11', 'Se registra una nueva correspondencia, nro de oficio: 52465, bajo el nombre de la empresa: JS Imports, cuyo rif es: V-271464300. Usuario encargado del registro: Jakelin Correspondencia'),
(22, 4, 15, 'Protectors', '2024-02-08 08:33:58', 'Se registra una nueva empresa en el sistema, bajo el nombre. Protectors, y cuyo RIF es: V-24816800. Registro hecho por: Jakelin Correspondencia.'),
(23, 4, 13, '271464303', '2024-02-08 08:34:08', 'Se registra una nueva correspondencia, nro de oficio: 4536, bajo el nombre de la empresa: Protectors, cuyo rif es: V-24816800. Usuario encargado del registro: Jakelin Correspondencia'),
(24, 4, 8, 'M1SSPC18', '2024-02-08 08:34:38', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC18.'),
(25, 4, 4, '271464303', '2024-02-08 08:34:48', 'Salida del sistema del Usuario: Jakelin Correspondencia.'),
(26, 5, 3, '271464304', '2024-02-08 08:34:52', 'Ingreso del Usuario: Carlos DCV.'),
(27, 5, 4, '271464304', '2024-02-08 08:35:00', 'Salida del sistema del Usuario: Carlos DCV.'),
(28, 3, 3, '271464302', '2024-02-08 08:35:03', 'Ingreso del Usuario: Martin Empl.'),
(29, 3, 4, '271464302', '2024-02-08 08:35:16', 'Salida del sistema del Usuario: Martin Empl.'),
(30, 1, 3, '27146430', '2024-02-08 08:35:27', 'Ingreso del Usuario: Jesus Castillo.'),
(31, 1, 4, '27146430', '2024-02-08 08:35:44', 'Salida del sistema del Usuario: Jesus Castillo.'),
(32, 1, 3, '27146430', '2024-02-11 19:07:17', 'Ingreso del Usuario: Jesus Castillo.'),
(33, 1, 4, '27146430', '2024-02-11 19:07:51', 'Salida del sistema del Usuario: Jesus Castillo.'),
(35, 1, 3, '27146430', '2024-03-03 14:13:31', 'Ingreso del Usuario: Jesus Castillo.'),
(36, 1, 4, '27146430', '2024-03-03 14:13:45', 'Salida del sistema del Usuario: Jesus Castillo.'),
(37, 1, 3, '27146430', '2024-03-05 01:20:58', 'Ingreso del Usuario: Jesus Castillo.'),
(38, 1, 4, '27146430', '2024-03-05 01:24:41', 'Salida del sistema del Usuario: Jesus Castillo.'),
(39, 2, 3, '271464301', '2024-03-05 01:25:44', 'Ingreso del Usuario: Juan García.'),
(40, 2, 4, '271464301', '2024-03-05 01:28:12', 'Salida del sistema del Usuario: Juan García.'),
(41, 1, 3, '27146430', '2024-03-05 01:28:20', 'Ingreso del Usuario: Jesus Castillo.'),
(42, 1, 4, '27146430', '2024-03-05 01:32:41', 'Salida del sistema del Usuario: Jesus Castillo.'),
(43, 4, 3, '271464303', '2024-03-05 01:32:44', 'Ingreso del Usuario: Jakelin Correspondencia.'),
(44, 4, 4, '271464303', '2024-03-05 01:34:01', 'Salida del sistema del Usuario: Jakelin Correspondencia.'),
(45, 5, 3, '271464304', '2024-03-05 01:34:15', 'Ingreso del Usuario: Carlos DCV.'),
(46, 5, 4, '271464304', '2024-03-05 01:43:52', 'Salida del sistema del Usuario: Carlos DCV.'),
(47, 3, 3, '271464302', '2024-03-05 01:44:11', 'Ingreso del Usuario: Martin Empl.'),
(48, 3, 4, '271464302', '2024-03-05 01:50:09', 'Salida del sistema del Usuario: Martin Empl.'),
(49, 2, 3, '271464301', '2024-03-05 10:46:24', 'Ingreso del Usuario: Juan García.'),
(50, 2, 9, 'M1SSPC18', '2024-03-05 10:49:06', 'Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Actualizada a -En Proceso-, por Juan García, técnico designado: Juan García.'),
(51, 2, 11, 'M1SSPC18', '2024-03-05 10:49:33', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Actualizada a -Finalizada-, por Juan García, técnico designado de realizar el soporte: Juan García.'),
(52, 2, 4, '271464301', '2024-03-05 10:52:56', 'Salida del sistema del Usuario: Juan García.'),
(53, 3, 3, '271464302', '2024-03-05 11:08:39', 'Ingreso del Usuario: Martin Empl.'),
(54, 3, 4, '271464302', '2024-03-05 11:08:54', 'Salida del sistema del Usuario: Martin Empl.'),
(55, 3, 3, '271464302', '2024-03-05 11:09:06', 'Ingreso del Usuario: Martin Empl.'),
(56, 3, 4, '271464302', '2024-03-05 11:09:12', 'Salida del sistema del Usuario: Martin Empl.'),
(57, 3, 3, '271464302', '2024-03-05 11:09:39', 'Ingreso del Usuario: Martin Empl.'),
(58, 3, 4, '271464302', '2024-03-05 11:12:06', 'Salida del sistema del Usuario: Martin Empl.'),
(59, 4, 3, '271464303', '2024-03-13 01:50:54', 'Ingreso del Usuario: Jakelin Correspondencia.'),
(60, 1, 3, '27146430', '2024-03-13 01:51:22', 'Ingreso del Usuario: Jesus Castillo.'),
(61, 4, 8, 'M1SSPC18', '2024-03-13 01:52:37', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 2.'),
(62, 4, 15, 'Pro Salud', '2024-03-13 01:55:11', 'Se registra una nueva empresa en el sistema, bajo el nombre. Pro Salud, y cuyo RIF es: J-27146430. Registro hecho por: Jakelin Correspondencia.'),
(63, 1, 4, '27146430', '2024-03-13 01:56:29', 'Salida del sistema del Usuario: Jesus Castillo.'),
(64, 4, 4, '271464303', '2024-03-13 01:58:01', 'Salida automática del sistema, del Usuario: .'),
(65, 6, 1, '18692692', '2024-03-13 02:00:16', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Carol Gomez, cédula V-18692692. Dicho empleado se ha registrado como trabajador en: Coordinación de Regulación y Control de Radiaciones'),
(66, 6, 1, '18692692', '2024-03-13 02:00:30', 'El usuario Carol Gomez, finalizó el registro las preguntas de seguridad.'),
(67, 1, 3, '27146430', '2024-03-13 02:00:34', 'Ingreso del Usuario: Jesus Castillo.'),
(68, 1, 2, '18692692', '2024-03-13 02:01:02', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Carol Gomez, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Jefe de Coordinación. Cambios realizados.'),
(69, 1, 4, '27146430', '2024-03-13 02:15:55', 'Salida automática del sistema, del Usuario: .'),
(70, 1, 4, '27146430', '2024-03-13 02:16:02', 'Salida del sistema del Usuario: Jesus Castillo.'),
(71, 4, 4, '271464303', '2024-03-13 02:19:15', 'Salida automática del sistema, del Usuario: .'),
(72, 4, 13, '271464303', '2024-03-13 02:23:40', 'Se registra una nueva correspondencia, nro de oficio: 3423543, bajo el nombre de la empresa: Pro Salud, cuyo rif es: J-27146430. Usuario encargado del registro: Jakelin Correspondencia'),
(73, 4, 4, '271464303', '2024-03-13 02:24:30', 'Salida del sistema del Usuario: Jakelin Correspondencia.'),
(74, 6, 3, '18692692', '2024-03-13 02:24:54', 'Ingreso del Usuario: Carol Gomez.'),
(75, 6, 4, '18692692', '2024-03-13 02:25:26', 'Salida del sistema del Usuario: Carol Gomez.'),
(76, 1, 3, '27146430', '2024-03-13 02:25:30', 'Ingreso del Usuario: Jesus Castillo.'),
(77, 2, 3, '271464301', '2024-03-13 02:25:55', 'Ingreso del Usuario: Juan García.'),
(78, 2, 9, 'M1SSPC18', '2024-03-13 02:26:05', 'Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada a -En Proceso-, por Juan García, técnico designado: Juan García.'),
(79, 2, 4, '271464301', '2024-03-13 02:26:41', 'Salida del sistema del Usuario: Juan García.'),
(80, 6, 3, '18692692', '2024-03-13 02:26:46', 'Ingreso del Usuario: Carol Gomez.'),
(81, 6, 8, 'M1SSPC17', '2024-03-13 02:27:12', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC17.'),
(82, 1, 9, 'M1SSPC17', '2024-03-13 02:27:49', 'Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada a -En Proceso-, por Jesus Castillo, técnico designado: Juan García.'),
(83, 6, 4, '18692692', '2024-03-13 02:27:56', 'Salida del sistema del Usuario: Carol Gomez.'),
(84, 2, 3, '271464301', '2024-03-13 02:27:59', 'Ingreso del Usuario: Juan García.'),
(85, 2, 10, 'M1SSPC17', '2024-03-13 02:28:33', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada, por Juan García, descripción: Se debe cambiar la fuente de poder, parece presentar fallas.'),
(86, 2, 10, 'M1SSPC17', '2024-03-13 02:30:05', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada, por Juan García, descripción: Se hizo el cambio de componentes pero parece que también debe hacerse cambio de memorias ram.'),
(87, 2, 11, 'M1SSPC17', '2024-03-13 02:30:21', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada a -Finalizada-, por Juan García, técnico designado de realizar el soporte: Juan García.'),
(88, 2, 10, 'M1SSPC17', '2024-03-13 02:32:38', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada, por Juan García, descripción: Por fallos de luz se cambia la fecha de prueba al catorce de marzo.'),
(89, 2, 11, 'M1SSPC17', '2024-03-13 02:35:15', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada a -Finalizada-, por Juan García, técnico designado de realizar el soporte: Juan García.'),
(90, 2, 4, '271464301', '2024-03-13 02:35:43', 'Salida del sistema del Usuario: Juan García.'),
(91, 3, 3, '271464302', '2024-03-13 02:35:47', 'Ingreso del Usuario: Martin Empl.'),
(92, 3, 8, 'M1SSPC17', '2024-03-13 02:36:27', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4.'),
(93, 3, 4, '271464302', '2024-03-13 02:36:30', 'Salida del sistema del Usuario: Martin Empl.'),
(94, 1, 4, '27146430', '2024-03-13 02:38:42', 'Salida del sistema del Usuario: Jesus Castillo.'),
(95, 1, 3, '27146430', '2024-03-13 02:38:50', 'Ingreso del Usuario: Jesus Castillo.'),
(96, 1, 4, '27146430', '2024-03-13 02:39:14', 'Salida del sistema del Usuario: Jesus Castillo.'),
(97, 1, 3, '27146430', '2024-03-13 03:39:12', 'Ingreso del Usuario: Jesus Castillo.'),
(98, 1, 4, '27146430', '2024-03-13 03:40:24', 'Salida del sistema del Usuario: Jesus Castillo.'),
(99, 1, 3, '27146430', '2024-03-13 21:49:41', 'Ingreso del Usuario: Jesus Castillo.'),
(100, 1, 4, '27146430', '2024-03-13 21:53:04', 'Salida del sistema del Usuario: Jesus Castillo.'),
(101, 2, 3, '271464301', '2024-03-13 21:53:08', 'Ingreso del Usuario: Juan García.'),
(102, 2, 5, 'M1SSPC02', '2024-03-13 22:09:19', 'Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: M1SSPC02. Nro de Registro: 3.'),
(103, 2, 6, 'M1SSPC17', '2024-03-13 22:11:11', 'El usuario: Juan García realizó cambios en el equipo M1SSPC17: responsable cambió de: Elirrog Cruces a: Carla Diaz. Cantidad Memorias cambió de: 1 a: 2. Tipo Conexión cambió de: Cableada a: Ambas. Posee Monitor se agregó: Si. Nota de Edición se agregó: Cambio de responsable del equipo, además de tipo de conexiones a la red. Cambios realizados.'),
(104, 2, 6, 'M1SSPC17', '2024-03-13 22:12:57', 'El usuario: Juan García realizó cambios en el equipo M1SSPC17: IP cambió de: 10.72.3.225 a: 10.72.3.220. Nota de Edición cambió de: Cambio de responsable del equipo, además de tipo de conexiones a la red a: Cambio de la ip a la que estaba conectado por modificaciones en el servidor. Cambios realizados.'),
(105, 2, 4, '271464301', '2024-03-13 22:14:27', 'Salida del sistema del Usuario: Juan García.'),
(106, 1, 3, '27146430', '2024-03-13 22:14:34', 'Ingreso del Usuario: Jesus Castillo.'),
(107, 1, 4, '27146430', '2024-03-13 22:14:41', 'Salida del sistema del Usuario: Jesus Castillo.'),
(108, 7, 1, '20548623', '2024-03-13 22:15:28', 'Nuevo Usuario registrandose en el Sistema, nombre del empleado: Martin Guerra, cédula V-20548623. Dicho empleado se ha registrado como trabajador en: Coordinación de Informática'),
(109, 7, 1, '20548623', '2024-03-13 22:15:40', 'El usuario Martin Guerra, finalizó el registro las preguntas de seguridad.'),
(110, 1, 3, '27146430', '2024-03-13 22:15:51', 'Ingreso del Usuario: Jesus Castillo.'),
(111, 1, 2, '20548623', '2024-03-13 22:28:57', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Martin Guerra, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Ingeniero Informático. Cambios realizados.'),
(112, 1, 4, '27146430', '2024-03-13 22:29:02', 'Salida del sistema del Usuario: Jesus Castillo.'),
(113, 7, 3, '20548623', '2024-03-13 22:29:07', 'Ingreso del Usuario: Martin Guerra.'),
(114, 7, 4, '20548623', '2024-03-13 22:29:28', 'Salida del sistema del Usuario: Martin Guerra.'),
(115, 2, 3, '271464301', '2024-03-13 22:29:35', 'Ingreso del Usuario: Juan García.'),
(116, 2, 4, '271464301', '2024-03-13 22:31:50', 'Salida del sistema del Usuario: Juan García.'),
(117, 1, 3, '27146430', '2024-03-13 22:52:41', 'Ingreso del Usuario: Jesus Castillo.'),
(118, 1, 4, '27146430', '2024-03-13 22:59:32', 'Salida del sistema del Usuario: Jesus Castillo.'),
(119, 1, 3, '27146430', '2024-03-13 23:18:49', 'Ingreso del Usuario: Jesus Castillo.'),
(120, 1, 4, '27146430', '2024-03-13 23:25:12', 'Salida del sistema del Usuario: Jesus Castillo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z2_historial_acciones`
--

CREATE TABLE `z2_historial_acciones` (
  `id_accHis` int(11) NOT NULL,
  `nombre_accion` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `z2_historial_acciones`
--

INSERT INTO `z2_historial_acciones` (`id_accHis`, `nombre_accion`) VALUES
(1, 'Registro Datos Usuario'),
(2, 'Modificación Datos Usuario'),
(3, 'Ingreso al Sistema'),
(4, 'Salida del Sistema'),
(5, 'Registro Equipo Tecnológico'),
(6, 'Edición Equipo Tecnológico'),
(7, 'Desincorporación de Equipo Tecnológico'),
(8, 'Solicitud de Soporte Técnico'),
(9, 'Soporte Técnico Aceptado'),
(10, 'Soporte Técnico Falta de Componente'),
(11, 'Soporte Técnico Finalizado'),
(12, 'Soporte Técnico Rechazado'),
(13, 'Registro Correspondencia'),
(14, 'Correspondencia aceptada'),
(15, 'Registro Institución Correspondencia'),
(16, 'Registro Base de Conocimiento'),
(17, 'Creación Respaldo'),
(18, 'Registro de Nuevo Grupo Galería'),
(19, 'Registro de Imagen'),
(20, 'Registro de Video'),
(21, 'Registro de Documento'),
(22, 'Modificacion Imagen-Video-Documento'),
(23, 'Eliminacion Imagen-Video-Documento'),
(24, 'Nuevo Boletin'),
(25, 'Modificacion Boletin'),
(26, 'Eliminacion Boletin'),
(27, 'Registro Grupo Instrumento Legal'),
(28, 'Registro Tipo de Instrumento Legal'),
(29, 'Registro Instrumento Legal'),
(30, 'Edición de Instrumento Legal'),
(31, 'Eliminacion de Instrumento Legal'),
(32, 'Registro Pagina Coordinacion'),
(33, 'Edicion Pagina Coordinacion'),
(34, 'Eliminacion Pagina Coordinacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `a1_usuarios`
--
ALTER TABLE `a1_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_dpto_fk` (`usuario_departamento_id`),
  ADD KEY `usuario_cargo_fk` (`usuario_rol_id`),
  ADD KEY `pregunta1_fk` (`id_pregunta1`),
  ADD KEY `pregunta2_fk` (`id_pregunta2`),
  ADD KEY `pregunta3_fk` (`id_pregunta3`),
  ADD KEY `usuario_division_fk` (`usuario_division_id`),
  ADD KEY `usuario_direccion_fk` (`usuario_direccion_id`),
  ADD KEY `activo_inactivo_fk` (`ActivoInactivo`);

--
-- Indices de la tabla `a2_rol`
--
ALTER TABLE `a2_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `a3_preguntas`
--
ALTER TABLE `a3_preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `a4_estado`
--
ALTER TABLE `a4_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `b1_direcciones`
--
ALTER TABLE `b1_direcciones`
  ADD PRIMARY KEY (`id_direcciones`);

--
-- Indices de la tabla `b2_divisiones`
--
ALTER TABLE `b2_divisiones`
  ADD PRIMARY KEY (`id_divisiones`),
  ADD KEY `division_direccion_fk` (`division_direccion_id`);

--
-- Indices de la tabla `b3_departamentos`
--
ALTER TABLE `b3_departamentos`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `dpto_division_fk` (`departamento_division_id`);

--
-- Indices de la tabla `c1_inventario_equipo`
--
ALTER TABLE `c1_inventario_equipo`
  ADD PRIMARY KEY (`id_case`),
  ADD KEY `ing_enca_inv_usr_fk` (`ing_encar_inv_id`),
  ADD KEY `inv_equipo_dpto_fk` (`dpto_inv_id`),
  ADD KEY `inv_equipo_division_fk` (`division_inv_id`),
  ADD KEY `inv_equipo_direccion_fk` (`direccion_inv_id`);

--
-- Indices de la tabla `c3_1_estado_soporte`
--
ALTER TABLE `c3_1_estado_soporte`
  ADD PRIMARY KEY (`id_estado_sop`);

--
-- Indices de la tabla `c3_solicitudes_soportes`
--
ALTER TABLE `c3_solicitudes_soportes`
  ADD PRIMARY KEY (`id_soporte`),
  ADD KEY `id_equipo_soporte_fk` (`id_equipo_soporte`),
  ADD KEY `tecnico_soporte_fk` (`tecnico_soporte_id`),
  ADD KEY `estado_soporte_id` (`estado`);

--
-- Indices de la tabla `c4_base_conocimiento`
--
ALTER TABLE `c4_base_conocimiento`
  ADD PRIMARY KEY (`id_conocimiento`);

--
-- Indices de la tabla `d1_correspondencia`
--
ALTER TABLE `d1_correspondencia`
  ADD PRIMARY KEY (`id_nro_admision`),
  ADD KEY `procedencia_empr_fk` (`procedencia`),
  ADD KEY `oficina_destino_fk` (`oficina_destino`),
  ADD KEY `coordi_destino_fk` (`coordi_destino`);

--
-- Indices de la tabla `d2_empresas_corresp`
--
ALTER TABLE `d2_empresas_corresp`
  ADD PRIMARY KEY (`id_empresas`);

--
-- Indices de la tabla `d3_notificaciones_div`
--
ALTER TABLE `d3_notificaciones_div`
  ADD PRIMARY KEY (`id_notificacion`),
  ADD KEY `id_correspondencia_fk` (`id_corresp`),
  ADD KEY `id_empresa_correspon_fk` (`id_empresa_corresp`),
  ADD KEY `id_correspon_division_fk` (`id_corres_divi`),
  ADD KEY `id_jefe_division_corres_fk` (`Jefe_Corres`),
  ADD KEY `id_correspon_direccion_fk` (`id_corres_dire`),
  ADD KEY `id_estatus_nombres_fk` (`estatus_Corres`);

--
-- Indices de la tabla `d4_notificaciones_estatus`
--
ALTER TABLE `d4_notificaciones_estatus`
  ADD PRIMARY KEY (`id_estatus_notifi`);

--
-- Indices de la tabla `e1_galerias`
--
ALTER TABLE `e1_galerias`
  ADD PRIMARY KEY (`id_galeria`),
  ADD KEY `id_galeria_direccion` (`id_galeria_direccion`),
  ADD KEY `id_galeria_tipo` (`id_galeria_tipo`),
  ADD KEY `id_galeria_grupo` (`id_galeria_grupo`),
  ADD KEY `id_visible_estado` (`visible`);

--
-- Indices de la tabla `e2_galerias_tipos`
--
ALTER TABLE `e2_galerias_tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `e3_galerias_grupos`
--
ALTER TABLE `e3_galerias_grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_direccion_grupo` (`id_direccion_grupo`);

--
-- Indices de la tabla `e4_boletines`
--
ALTER TABLE `e4_boletines`
  ADD PRIMARY KEY (`id_boletin`),
  ADD KEY `id_usuario_boletin_fk` (`id_usuario_boletin`),
  ADD KEY `id_boletin_visible_fk` (`boletin_visible`),
  ADD KEY `id_boletin_direccion_fk` (`id_boletin_direccion`);

--
-- Indices de la tabla `e5_instrumentos_legales`
--
ALTER TABLE `e5_instrumentos_legales`
  ADD PRIMARY KEY (`id_instrumento_legal`),
  ADD KEY `id_instrumento_dir_fk` (`id_instrumento_direccion`),
  ADD KEY `id_instrumento_grupo_fk` (`id_instrumento_grupo`),
  ADD KEY `id_instrumento_tipo_fk` (`id_instrumento_tipo`),
  ADD KEY `id_instrumento_visible_fk` (`instrumento_visible`);

--
-- Indices de la tabla `e6_tipos_instrumentos`
--
ALTER TABLE `e6_tipos_instrumentos`
  ADD PRIMARY KEY (`id_tipo_instrumento`);

--
-- Indices de la tabla `e7_grupos_instrumentos`
--
ALTER TABLE `e7_grupos_instrumentos`
  ADD PRIMARY KEY (`id_grup_instrumento`),
  ADD KEY `id_grup_instr_dire_fk` (`id_grupo_instr_direc`);

--
-- Indices de la tabla `f1_coordinaciones_web`
--
ALTER TABLE `f1_coordinaciones_web`
  ADD PRIMARY KEY (`id_coordinacion_web`),
  ADD KEY `id_coord_direccion_fk` (`id_coord_direccion`),
  ADD KEY `id_coord_usuario_fk` (`id_coord_usuario`),
  ADD KEY `id_coord_visible` (`id_coord_visible`);

--
-- Indices de la tabla `z1_historial_camb_sis`
--
ALTER TABLE `z1_historial_camb_sis`
  ADD PRIMARY KEY (`id_historial_cambios`),
  ADD KEY `id_usuario_cambio_fk` (`id_usuario_cambio`),
  ADD KEY `id_accion_cambio_fk` (`id_accion_cambio`);

--
-- Indices de la tabla `z2_historial_acciones`
--
ALTER TABLE `z2_historial_acciones`
  ADD PRIMARY KEY (`id_accHis`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `a1_usuarios`
--
ALTER TABLE `a1_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `a2_rol`
--
ALTER TABLE `a2_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `a3_preguntas`
--
ALTER TABLE `a3_preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `a4_estado`
--
ALTER TABLE `a4_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `b1_direcciones`
--
ALTER TABLE `b1_direcciones`
  MODIFY `id_direcciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `b2_divisiones`
--
ALTER TABLE `b2_divisiones`
  MODIFY `id_divisiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `b3_departamentos`
--
ALTER TABLE `b3_departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `c1_inventario_equipo`
--
ALTER TABLE `c1_inventario_equipo`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `c3_1_estado_soporte`
--
ALTER TABLE `c3_1_estado_soporte`
  MODIFY `id_estado_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `c3_solicitudes_soportes`
--
ALTER TABLE `c3_solicitudes_soportes`
  MODIFY `id_soporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `c4_base_conocimiento`
--
ALTER TABLE `c4_base_conocimiento`
  MODIFY `id_conocimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `d1_correspondencia`
--
ALTER TABLE `d1_correspondencia`
  MODIFY `id_nro_admision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `d2_empresas_corresp`
--
ALTER TABLE `d2_empresas_corresp`
  MODIFY `id_empresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `d3_notificaciones_div`
--
ALTER TABLE `d3_notificaciones_div`
  MODIFY `id_notificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `d4_notificaciones_estatus`
--
ALTER TABLE `d4_notificaciones_estatus`
  MODIFY `id_estatus_notifi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `e1_galerias`
--
ALTER TABLE `e1_galerias`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `e2_galerias_tipos`
--
ALTER TABLE `e2_galerias_tipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `e3_galerias_grupos`
--
ALTER TABLE `e3_galerias_grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `e4_boletines`
--
ALTER TABLE `e4_boletines`
  MODIFY `id_boletin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `e5_instrumentos_legales`
--
ALTER TABLE `e5_instrumentos_legales`
  MODIFY `id_instrumento_legal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `e6_tipos_instrumentos`
--
ALTER TABLE `e6_tipos_instrumentos`
  MODIFY `id_tipo_instrumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `e7_grupos_instrumentos`
--
ALTER TABLE `e7_grupos_instrumentos`
  MODIFY `id_grup_instrumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `f1_coordinaciones_web`
--
ALTER TABLE `f1_coordinaciones_web`
  MODIFY `id_coordinacion_web` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `z1_historial_camb_sis`
--
ALTER TABLE `z1_historial_camb_sis`
  MODIFY `id_historial_cambios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `z2_historial_acciones`
--
ALTER TABLE `z2_historial_acciones`
  MODIFY `id_accHis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `a1_usuarios`
--
ALTER TABLE `a1_usuarios`
  ADD CONSTRAINT `activo_inactivo_fk` FOREIGN KEY (`ActivoInactivo`) REFERENCES `a4_estado` (`id_estado`),
  ADD CONSTRAINT `pregunta1_fk` FOREIGN KEY (`id_pregunta1`) REFERENCES `a3_preguntas` (`id_pregunta`),
  ADD CONSTRAINT `pregunta2_fk` FOREIGN KEY (`id_pregunta2`) REFERENCES `a3_preguntas` (`id_pregunta`),
  ADD CONSTRAINT `pregunta3_fk` FOREIGN KEY (`id_pregunta3`) REFERENCES `a3_preguntas` (`id_pregunta`),
  ADD CONSTRAINT `usuario_cargo_fk` FOREIGN KEY (`usuario_rol_id`) REFERENCES `a2_rol` (`id_rol`),
  ADD CONSTRAINT `usuario_direccion_fk` FOREIGN KEY (`usuario_direccion_id`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `usuario_division_fk` FOREIGN KEY (`usuario_division_id`) REFERENCES `b2_divisiones` (`id_divisiones`),
  ADD CONSTRAINT `usuario_dpto_fk` FOREIGN KEY (`usuario_departamento_id`) REFERENCES `b3_departamentos` (`id_departamento`);

--
-- Filtros para la tabla `b2_divisiones`
--
ALTER TABLE `b2_divisiones`
  ADD CONSTRAINT `division_direccion_fk` FOREIGN KEY (`division_direccion_id`) REFERENCES `b1_direcciones` (`id_direcciones`);

--
-- Filtros para la tabla `b3_departamentos`
--
ALTER TABLE `b3_departamentos`
  ADD CONSTRAINT `dpto_division_fk` FOREIGN KEY (`departamento_division_id`) REFERENCES `b2_divisiones` (`id_divisiones`);

--
-- Filtros para la tabla `c1_inventario_equipo`
--
ALTER TABLE `c1_inventario_equipo`
  ADD CONSTRAINT `ing_enca_inv_usr_fk` FOREIGN KEY (`ing_encar_inv_id`) REFERENCES `a1_usuarios` (`id_usuario`),
  ADD CONSTRAINT `inv_equipo_direccion_fk` FOREIGN KEY (`direccion_inv_id`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `inv_equipo_division_fk` FOREIGN KEY (`division_inv_id`) REFERENCES `b2_divisiones` (`id_divisiones`),
  ADD CONSTRAINT `inv_equipo_dpto_fk` FOREIGN KEY (`dpto_inv_id`) REFERENCES `b3_departamentos` (`id_departamento`);

--
-- Filtros para la tabla `c3_solicitudes_soportes`
--
ALTER TABLE `c3_solicitudes_soportes`
  ADD CONSTRAINT `estado_soporte_id_fk` FOREIGN KEY (`estado`) REFERENCES `c3_1_estado_soporte` (`id_estado_sop`),
  ADD CONSTRAINT `id_equipo_soporte_fk` FOREIGN KEY (`id_equipo_soporte`) REFERENCES `c1_inventario_equipo` (`id_case`),
  ADD CONSTRAINT `id_tecnico_soporte_fk` FOREIGN KEY (`tecnico_soporte_id`) REFERENCES `a1_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `d1_correspondencia`
--
ALTER TABLE `d1_correspondencia`
  ADD CONSTRAINT `coordi_destino_fk` FOREIGN KEY (`coordi_destino`) REFERENCES `b2_divisiones` (`id_divisiones`),
  ADD CONSTRAINT `oficina_destino_fk` FOREIGN KEY (`oficina_destino`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `procedencia_empr_fk` FOREIGN KEY (`procedencia`) REFERENCES `d2_empresas_corresp` (`id_empresas`);

--
-- Filtros para la tabla `d3_notificaciones_div`
--
ALTER TABLE `d3_notificaciones_div`
  ADD CONSTRAINT `id_correspon_direccion_fk` FOREIGN KEY (`id_corres_dire`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `id_correspon_division_fk` FOREIGN KEY (`id_corres_divi`) REFERENCES `b2_divisiones` (`id_divisiones`),
  ADD CONSTRAINT `id_correspondencia_fk` FOREIGN KEY (`id_corresp`) REFERENCES `d1_correspondencia` (`id_nro_admision`),
  ADD CONSTRAINT `id_empresa_correspon_fk` FOREIGN KEY (`id_empresa_corresp`) REFERENCES `d2_empresas_corresp` (`id_empresas`),
  ADD CONSTRAINT `id_estatus_nombres_fk` FOREIGN KEY (`estatus_Corres`) REFERENCES `d4_notificaciones_estatus` (`id_estatus_notifi`),
  ADD CONSTRAINT `id_jefe_division_corres_fk` FOREIGN KEY (`Jefe_Corres`) REFERENCES `a1_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `e1_galerias`
--
ALTER TABLE `e1_galerias`
  ADD CONSTRAINT `id_galeria_direccion` FOREIGN KEY (`id_galeria_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `id_galeria_grupo` FOREIGN KEY (`id_galeria_grupo`) REFERENCES `e3_galerias_grupos` (`id_grupo`),
  ADD CONSTRAINT `id_galeria_tipo` FOREIGN KEY (`id_galeria_tipo`) REFERENCES `e2_galerias_tipos` (`id_tipo`),
  ADD CONSTRAINT `id_visible_estado` FOREIGN KEY (`visible`) REFERENCES `a4_estado` (`id_estado`);

--
-- Filtros para la tabla `e3_galerias_grupos`
--
ALTER TABLE `e3_galerias_grupos`
  ADD CONSTRAINT `id_direccion_grupo` FOREIGN KEY (`id_direccion_grupo`) REFERENCES `b1_direcciones` (`id_direcciones`);

--
-- Filtros para la tabla `e4_boletines`
--
ALTER TABLE `e4_boletines`
  ADD CONSTRAINT `id_boletin_direccion_fk` FOREIGN KEY (`id_boletin_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `id_boletin_visible_fk` FOREIGN KEY (`boletin_visible`) REFERENCES `a4_estado` (`id_estado`),
  ADD CONSTRAINT `id_usuario_boletin_fk` FOREIGN KEY (`id_usuario_boletin`) REFERENCES `a1_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `e5_instrumentos_legales`
--
ALTER TABLE `e5_instrumentos_legales`
  ADD CONSTRAINT `id_instrumento_dir_fk` FOREIGN KEY (`id_instrumento_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `id_instrumento_grupo_fk` FOREIGN KEY (`id_instrumento_grupo`) REFERENCES `e7_grupos_instrumentos` (`id_grup_instrumento`),
  ADD CONSTRAINT `id_instrumento_tipo_fk` FOREIGN KEY (`id_instrumento_tipo`) REFERENCES `e6_tipos_instrumentos` (`id_tipo_instrumento`),
  ADD CONSTRAINT `id_instrumento_visible_fk` FOREIGN KEY (`instrumento_visible`) REFERENCES `a4_estado` (`id_estado`);

--
-- Filtros para la tabla `e7_grupos_instrumentos`
--
ALTER TABLE `e7_grupos_instrumentos`
  ADD CONSTRAINT `id_grup_instr_dire_fk` FOREIGN KEY (`id_grupo_instr_direc`) REFERENCES `b1_direcciones` (`id_direcciones`);

--
-- Filtros para la tabla `f1_coordinaciones_web`
--
ALTER TABLE `f1_coordinaciones_web`
  ADD CONSTRAINT `id_coord_direccion_fk` FOREIGN KEY (`id_coord_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  ADD CONSTRAINT `id_coord_usuario_fk` FOREIGN KEY (`id_coord_usuario`) REFERENCES `a1_usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_coord_visible` FOREIGN KEY (`id_coord_visible`) REFERENCES `a4_estado` (`id_estado`);

--
-- Filtros para la tabla `z1_historial_camb_sis`
--
ALTER TABLE `z1_historial_camb_sis`
  ADD CONSTRAINT `id_accion_cambio_fk` FOREIGN KEY (`id_accion_cambio`) REFERENCES `z2_historial_acciones` (`id_accHis`),
  ADD CONSTRAINT `id_usuario_cambio_fk` FOREIGN KEY (`id_usuario_cambio`) REFERENCES `a1_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
