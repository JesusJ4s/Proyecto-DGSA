-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 07:16:21
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
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
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
(1, 1, 'Jesus', 'Castillo', 'V', '27146430', 'ADMINJ', '04124457287', '04120391931', 'jesusgole33@gmail.com', 21, 11, 1, 1, '$2y$10$NvPGv9rpQ7IfVRFLwb1MpOx5sNd1yBv2Ko2Z8y9qOrGRpYZHEyqt.', 1, '$2y$10$Vn3jwypZlcUNBgUvYhqTk.Xg3cGZH0D0sUi15Ljfz9bIfYKxK5iOW', 2, '$2y$10$qwehhDRQQQG7j.lgQ4fqw.MN64mgSmUbbDiBD59Q9N1GU85ZqauWG', 3, '$2y$10$LLdvNMzCLeJrV5nndddGJ.Wup/LiODDy4UniOb4ARXTBnrbvio6Zq', '030303', 0),
(2, 1, 'Prueba', 'Tecnico', 'V', '27146431', 'TECNICO1', '04124457287', '', 'jesusgole33@gmail.com', 21, 11, 1, 2, '$2y$10$C/HpR5XniJUcGBFMHJw3GOheL3dG2D255EqAHFx5p3nuOUsvlMJqu', 1, '$2y$10$pMo0iPT6zpu4apIwNmyR6OqCbOEVP.HuoTLwvKoneoGlpVhe2k052', 2, '$2y$10$WozaJtNhQnEbKm7bV1TLSuoKJtWNAfK.ScFB3G.cb.ju3RUFFe5g.', 3, '$2y$10$W2xfe7SZsIXW6K1frp90/OvEl9pJJEa4HgDnbnfy2zu/28RrlYmr2', '030303', 0),
(3, 1, 'Jefe', 'Correspondencia', 'V', '27146432', 'JEFECORR', '04124457287', '', 'jesusgole33@gmail.com', 80, 1, 1, 3, '$2y$10$J/Va.zo22hYZDkBDf1uaROYAEQHA/.7aimYG1hRXouZzZrTH4XOsy', 1, '$2y$10$6/IlcYLcakRstuM8a0.tAO8q419kYX3FoeXgc78m7cLDb35UBnqCC', 2, '$2y$10$ZPiu6F64nWaHsh1q4M9yxOczLlyuNeOiuCSznieKTXjSJlZqIGg/K', 3, '$2y$10$Zpdz2QPby1bhi0zBpONwDuabmfktPzKrJ5pAp9x965iwWad/u2nvq', '030303', 0),
(4, 1, 'Empleado', 'Vista', 'V', '27146433', 'EMPLEADO', '04124457287', '', 'jesusgole33@gmail.com', 25, 15, 1, 4, '$2y$10$vIQOE8Vk0x2UinfutOtqhOX.wEeRkZBuuREMt76RuhkCJ16r22pOW', 1, '$2y$10$GY0IcODJAc2YSJdm0y/Fru43BbTUxJpnTg1icM1e3Q1qj/KQD0jBS', 2, '$2y$10$M3R//RYBCpzYBbEldq4PSeloIexkktbayOXZMubGshVkB0IBRCApq', 3, '$2y$10$vc3weLGWv4eOwx0rLmlRbueMMPze/F1S12VbDWjqnr9cSAX22ZL1y', '030303', 0),
(5, 1, 'Salud', 'Radiologica', 'V', '27146434', 'RADIOLOGO', '04124457287', '', 'jesusgole33@gmail.com', 72, 30, 3, 3, '$2y$10$3xqE/4YErRTagfCBGvd6f.Ajagr7OOubm9d3UdgoRJfT2fdyAlqDC', 1, '$2y$10$LFw/K3WLbKj3dCW5vqkZ.e7.w6lqs0O6QR126FVJFQ8jzGx7IQbyS', 2, '$2y$10$nUdPAGKoDnb5MInuXO/AAeaTXjy/ouTAgCSWQrA1v0tE3M3sZZN8W', 3, '$2y$10$6Fzsi/yQJVaG08ZM7W/nheny/6Ttypyxq1BtFc.cGWXJ0kVaJJ/VW', '030303', 0),
(6, 1, 'Emi', 'Gia', 'V', '27146435', 'EPIDEMIOLOGIA', '04124457287', '', 'jesusgole33@gmail.com', 40, 21, 5, 3, '$2y$10$Q6HluVEBpK.mwO7Umgkq3O0rJaPmfEAQ..iBuReRhE/yP5jFBTmO6', 1, '$2y$10$d9.crVeMKgUH7SCNPOTNXORKI7ttCh6OXrx115WA9S.s1S86GKKZ.', 2, '$2y$10$1/ZSKCNWpPf/T14hmQOj2.c0LFMpuYzj8zYAZko5L65pSZWWV867a', 3, '$2y$10$kUHDC63CChXgw7Da/ulYq.jeSia4cpsaWC1Mui6Vc/bmsd2uj/UwW', '030303', 0);

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
(2, 'Inactivo');

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
(80, 'Correspondencia', 1);

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
(1, '2023-09-26', 2, 43, 24, 1, 'Javier Martinez', 'Rodolfo Mejias', 'M1SSPC18', '5080795', 'SinSerial', 'Escritorio', 'i5 10505', '3.20Ghz', 'D0-8E-79-0F-A4-C6', '10.72.3.236', '512gb', 'desconocida', '42D54D8B', '1', '8Gb', '10', 'Si', 'Ambas', 'Si', 'Si', 'SinBN', 'HP', 'USB', 'Si', 'Dell', 'VGA', '5080795', 'Si', 'Generico', '5080795', 'Si', 'Generico', 'USB', '5080795', 'No', '', '', '', '', '', '', '', 'Primer registro del equipo de inventario tecnológico', 'Haciendo un cambio en el jefe de departamento por una prueba<br><br>Siguiente prueba en la edicion del equipo'),
(2, '2023-10-02', 2, 1, 1, 1, 'Elirrog Cruces', 'Ing Rodolfo Mejias', 'M1SSPC17', '5080796', 'SinSerial', 'Escritorio', 'Intel i5 10505', '3.20Ghz', 'D0-8E-79-0F-A3-11', '10.72.3.225', '500gb', 'seagate', 'CL-3D512-Q11NVMe', '1', '8gb', '10', 'Si', 'Cableada', 'Si', 'Si', '5080796', 'Dell', 'USB', 'Si', 'Dell', 'HDMI', '5080796', 'Si', 'Dell', '5080796', 'Si', 'Dell', 'USB', '5080796', 'Si', 'HP', 'besto', 'USB', 'Si', 'Toner', 'No', '5080796', 'Posee un escaner, pero actualmente se encuentra dañado', 'Segunda edicion para probar la concatenacion<br><br>Tercer intento para irme a dormir<br><br>Prueba de funcionamiento de la auditoria version 2<br><br>Se reparo el escaner asignado al equipo de sala situacional');

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
(5, 'Rechazado Completo'),
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
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL,
  `historial_soporte` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `c3_solicitudes_soportes`
--

INSERT INTO `c3_solicitudes_soportes` (`id_soporte`, `uso_equipo`, `id_equipo_soporte`, `nomb_equipo_soporte`, `nivel_soporte`, `soporte_descripcion`, `fecha_soporte_solicitud`, `estado`, `fecha_soporte_aceptacion`, `tecnico_soporte_id`, `fecha_soporte_final`, `comentario`, `historial_soporte`) VALUES
(1, 'Uso Oficial', 1, 'M1SSPC18', 'Nivel Hardware', 'Sonidos extraños al encender el pc y mientras está encendida', '2023-09-26 21:00:30', 5, '2023-10-06 23:21:29', 1, '2023-10-06 23:22:11', 'La solicitud ya habia sido atendida', NULL),
(2, 'Uso Oficial', 1, 'M1SSPC18', 'Nivel Software', 'AYUDA PC EN MAL ESTADO HELP', '2023-10-06 23:22:34', 3, '2023-10-14 16:41:48', 1, '2023-10-14 22:06:30', 'Finalizado de manera exitosa', 'Falta fuente de poder para finalizar<br><br>Falta otra fuente de poder<br><br>Falta componentes hel<br><br>fadsfdafsdafasdfasfdsa<br><br>lsdkjfldsajfldsajlfjl fjsald fas<br><br>LE FALTAN UN VERGERO DE COSAS<br><br>Falta una fuente de poder'),
(3, 'Uso Oficial', 2, 'M1SSPC17', 'Nivel Software', 'LA PC HACE SONIDO RAROS', '2023-10-06 23:23:08', 3, '2023-10-06 23:23:32', 2, '2023-10-06 23:24:20', 'SE FINALIZO DE MANERA EXITOSAAAA', NULL),
(4, 'Uso Oficial', 2, 'M1SSPC17', 'Nivel Software', 'AYUDA CON EL EQUIPO QUE EXPLOTO', '2023-10-07 19:21:30', 3, '2023-10-09 01:14:45', 1, '2023-10-14 22:03:53', 'FINALIZANDO FINO FINO', NULL),
(5, 'Uso Oficial', 2, 'M1SSPC17', 'Nivel Software', 'AYUDA MI EQUIPO NO FUNCIONA PARA UN CARAJO', '2023-10-14 22:07:44', 5, '2023-10-14 22:18:37', 1, '2023-10-14 22:18:49', 'ES PARA UNA PRUEBA DE GRAFICOS', NULL);

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
(1, '578258', '2023-09-04', 1, '80369369', 'Registro de equipo de radiologia', '2023-09-06 00:00:00', 3, 30),
(2, '1221212', '2023-10-01', 2, '271464300', 'Se quiere solicitar permiso de ambiente', '2023-10-01 00:00:00', 1, 11),
(3, '123321', '2023-09-30', 2, '271464300', 'Se quiere solicitar permiso de ambiente', '2023-10-01 00:00:00', 1, 11),
(4, '5454545', '2023-09-22', 2, '271464300', 'Se quiere solicitar permiso de ambiente', '2023-10-01 00:00:00', 1, 11),
(5, '12313132', '2023-10-02', 2, '271464300', 'Se quiere solicitar permiso de ambiente', '2023-10-03 00:00:00', 1, 11);

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
(1, 'J', '80369369', 'Centro de Salud', 'Medicina nuclear'),
(2, 'V', '271464300', 'PollosA1', 'Hacer pollos chidos');

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
(1, 1, 1, 30, 3, 5, '27146434', '2023-09-26 09:53:22', '2023-09-26 09:56:34', 'Registro de equipo de radiologia', 2, ''),
(3, 3, 2, 11, 1, 1, '27146430', '2023-10-01 08:27:57', '2023-10-01 08:30:31', 'Se quiere solicitar permiso de ambiente', 2, ''),
(4, 4, 2, 11, 1, 1, '27146430', '2023-10-01 08:31:46', '2023-10-03 09:02:45', 'Se quiere solicitar permiso de ambiente', 2, ''),
(5, 5, 2, 11, 1, 1, '27146430', '2023-10-02 06:52:18', '2023-10-12 08:13:49', 'Se quiere solicitar permiso de ambiente', 1, 'Llego de manera adecuada');

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
(5, 1, 3, '0', '2023-09-28 00:00:00', 'Ingreso del Usuario: Jesus Castillo.'),
(6, 1, 17, '0', '2023-09-29 00:00:00', 'Nuevo respaldo de la base de datos creado en fecha: 2023-10-01. Creado por el usuario: Jesus Castillo.'),
(7, 1, 17, '0', '2023-09-30 19:31:24', 'Nuevo respaldo de la base de datos creado en fecha: 2023-10-01. Creado por el usuario: Jesus Castillo.'),
(8, 1, 4, '0', '2023-10-01 00:00:00', 'Salida del sistema del Usuario: Jesus Castillo.'),
(9, 1, 3, '0', '2023-10-01 00:00:00', 'Ingreso del Usuario: Jesus Castillo.'),
(10, 1, 4, '0', '2023-10-01 00:40:10', 'Salida del sistema del Usuario: Jesus Castillo.'),
(11, 1, 3, '0', '2023-10-01 00:40:16', 'Ingreso del Usuario: Jesus Castillo.'),
(12, 1, 4, '0', '2023-10-01 00:40:25', 'Salida del sistema del Usuario: Jesus Castillo.'),
(13, 1, 3, '0', '2023-10-01 19:18:54', 'Ingreso del Usuario: Jesus Castillo.'),
(14, 1, 4, '0', '2023-10-01 19:51:01', 'Salida del sistema del Usuario: Jesus Castillo.'),
(15, 1, 3, '0', '2023-10-01 19:54:17', 'Ingreso del Usuario: Jesus Castillo.'),
(16, 1, 15, '0', '2023-10-01 20:15:13', 'Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: V-271464300. Registro hecho por: Jesus Castillo.'),
(17, 1, 13, '0', '2023-10-01 20:15:32', 'Se registra una nueva correspondencia, nro de oficio: 1221212, bajo el nombre de la empresa: PollosA1, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo'),
(18, 1, 13, '0', '2023-10-01 20:27:57', 'Se registra una nueva correspondencia, nro de oficio: 123321, bajo el nombre de la empresa: PollosA1, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo'),
(19, 1, 14, '0', '2023-10-01 20:30:31', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 3. Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados.'),
(20, 1, 13, '0', '2023-10-01 20:31:46', 'Se registra una nueva correspondencia, nro de oficio: 5454545, bajo el nombre de la empresa: PollosA1, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo'),
(21, 1, 4, '0', '2023-10-01 21:17:40', 'Salida del sistema del Usuario: Jesus Castillo.'),
(22, 1, 3, '0', '2023-10-01 22:09:31', 'Ingreso del Usuario: Jesus Castillo.'),
(23, 1, 2, '0', '2023-10-01 22:19:28', 'El usuario Jesus Castillo modificó la contraseña del usuario Jesus Castillo. El proceso fue realizado para restaurar la contraseña del usuario.'),
(24, 1, 4, '0', '2023-10-01 22:19:47', 'Salida del sistema del Usuario: Jesus Castillo.'),
(25, 1, 3, '0', '2023-10-01 22:19:57', 'Ingreso del Usuario: Jesus Castillo.'),
(26, 1, 4, '0', '2023-10-01 23:09:40', 'Salida del sistema del Usuario: Jesus Castillo.'),
(27, 1, 3, '0', '2023-10-01 23:09:59', 'Ingreso del Usuario: Jesus Castillo.'),
(29, 1, 6, '0', '2023-10-01 23:53:10', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(30, 1, 3, '0', '2023-10-01 23:53:22', 'Ingreso del Usuario: Jesus Castillo.'),
(31, 1, 6, '0', '2023-10-01 23:58:22', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(32, 1, 5, '0', '2023-10-02 00:00:32', 'Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: M1SSPC17. Nro de Registro: 2.'),
(33, 1, 4, '0', '2023-10-02 00:03:27', 'Salida automática del sistema, del Usuario: .'),
(34, 1, 4, '0', '2023-10-02 00:15:23', 'Salida del sistema del Usuario: Jesus Castillo.'),
(35, 1, 3, '0', '2023-10-02 00:16:26', 'Ingreso del Usuario: Jesus Castillo.'),
(36, 1, 6, '0', '2023-10-02 00:21:26', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(37, 1, 6, 'M1SSPC17', '2023-10-02 01:12:54', 'El usuario: Jesus Castillo realizó cambios en un equipo del inventario: Nota de Edición cambió de:  a: Primera modificacion del equipo para hacer pruebas. Cambios realizados.'),
(38, 1, 6, 'M1SSPC17', '2023-10-02 01:15:57', 'El usuario: Jesus Castillo realizó cambios en un equipo del inventario: Escaner cambió de:  a: No. Nota de Edición cambió de: Primera modificacion del equipo para hacer pruebas a: Segunda edicion para probar la concatenacion. Cambios realizados.'),
(39, 1, 6, 'M1SSPC17', '2023-10-02 01:26:06', 'El usuario: Jesus Castillo realizó cambios en un equipo del inventario: Nota de Edición cambió de: <br><br>Segunda edicion para probar la concatenacion a: Tercer intento para irme a dormir. Cambios realizados.'),
(40, 1, 4, '0', '2023-10-02 01:26:45', 'Salida del sistema del Usuario: Jesus Castillo.'),
(41, 1, 3, '0', '2023-10-03 18:44:40', 'Ingreso del Usuario: Jesus Castillo.'),
(42, 1, 13, '0', '2023-10-03 18:52:18', 'Se registra una nueva correspondencia, nro de oficio: 12313132, bajo el nombre de la empresa: PollosA1, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo'),
(43, 1, 14, '0', '2023-10-03 19:04:17', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados.'),
(44, 1, 14, '0', '2023-10-03 19:27:45', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: 2 a: . Cambios realizados.'),
(45, 1, 14, '0', '2023-10-03 19:30:21', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: 2 a: . Cambios realizados.'),
(46, 1, 14, '0', '2023-10-03 19:38:50', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a: . Nota de confirmación cambió de: Llego de manera correcta a: Llego fino. Cambios realizados.'),
(47, 1, 14, '0', '2023-10-03 19:42:24', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a: Confirmado. Nota de confirmación cambió de: Llego fino a: LLego. Cambios realizados.'),
(48, 1, 14, '0', '2023-10-03 19:47:35', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a: Confirmado. Nota de confirmación cambió de: LLego a: . Cambios realizados.'),
(49, 1, 4, '0', '2023-10-03 20:19:07', 'Salida del sistema del Usuario: Jesus Castillo.'),
(50, 1, 3, '0', '2023-10-03 20:19:27', 'Ingreso del Usuario: Jesus Castillo.'),
(51, 1, 4, '0', '2023-10-03 20:24:37', 'Salida del sistema del Usuario: Jesus Castillo.'),
(52, 1, 3, '0', '2023-10-03 20:25:25', 'Ingreso del Usuario: Jesus Castillo.'),
(53, 1, 14, '0', '2023-10-03 20:43:22', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a: Confirmado. Nota de confirmación cambió de:  a: Fiini. Cambios realizados.'),
(54, 1, 14, '0', '2023-10-03 20:57:38', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a: Confirmado. Nota de confirmación cambió de: Fiini a: . Cambios realizados.'),
(55, 1, 14, '0', '2023-10-03 21:02:45', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 4. Estatus de la Correspondencia cambió de: En espera a: Confirmado. Cambios realizados.'),
(56, 1, 4, '0', '2023-10-03 21:26:43', 'Salida del sistema del Usuario: Jesus Castillo.'),
(57, 1, 3, '0', '2023-10-03 21:26:49', 'Ingreso del Usuario: Jesus Castillo.'),
(58, 1, 4, '0', '2023-10-03 21:29:30', 'Salida del sistema del Usuario: Jesus Castillo.'),
(59, 2, 3, '0', '2023-10-03 21:29:42', 'Ingreso del Usuario: Prueba Tecnico.'),
(60, 2, 4, '0', '2023-10-03 21:30:53', 'Salida del sistema del Usuario: Prueba Tecnico.'),
(61, 1, 3, '0', '2023-10-03 21:32:46', 'Ingreso del Usuario: Jesus Castillo.'),
(62, 1, 4, '0', '2023-10-03 21:37:50', 'Salida del sistema del Usuario: Jesus Castillo.'),
(63, 2, 3, '0', '2023-10-03 21:39:28', 'Ingreso del Usuario: Prueba Tecnico.'),
(64, 2, 12, '0', '2023-10-03 21:41:27', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Se rechazó la solicitud por parte de Prueba Tecnico; en espera de confirmación de rechazo.'),
(65, 2, 12, '0', '2023-10-03 21:44:38', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Se rechazó la solicitud por parte de Prueba Tecnico; en espera de confirmación de rechazo.'),
(66, 2, 4, '0', '2023-10-03 21:48:18', 'Salida del sistema del Usuario: Prueba Tecnico.'),
(67, 1, 3, '0', '2023-10-03 21:48:29', 'Ingreso del Usuario: Jesus Castillo.'),
(68, 1, 4, '0', '2023-10-03 21:48:57', 'Salida del sistema del Usuario: Jesus Castillo.'),
(69, 2, 3, '0', '2023-10-03 21:49:02', 'Ingreso del Usuario: Prueba Tecnico.'),
(70, 2, 9, '0', '2023-10-03 21:51:04', 'Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Actualizada a -En Proceso-, por Prueba Tecnico, técnico designado: Prueba Tecnico.'),
(71, 2, 4, '0', '2023-10-03 21:51:15', 'Salida del sistema del Usuario: Prueba Tecnico.'),
(72, 1, 3, '0', '2023-10-03 21:51:34', 'Ingreso del Usuario: Jesus Castillo.'),
(73, 1, 4, '0', '2023-10-03 21:52:03', 'Salida del sistema del Usuario: Jesus Castillo.'),
(74, 1, 3, '0', '2023-10-03 22:25:39', 'Ingreso del Usuario: Jesus Castillo.'),
(75, 1, 4, '0', '2023-10-03 22:54:53', 'Salida del sistema del Usuario: Jesus Castillo.'),
(76, 1, 3, '0', '2023-10-03 22:55:54', 'Ingreso del Usuario: Jesus Castillo.'),
(77, 1, 4, '0', '2023-10-03 23:13:36', 'Salida del sistema del Usuario: Jesus Castillo.'),
(78, 1, 3, '0', '2023-10-04 20:17:17', 'Ingreso del Usuario: Jesus Castillo.'),
(79, 1, 4, '0', '2023-10-04 21:18:20', 'Salida del sistema del Usuario: Jesus Castillo.'),
(80, 1, 3, '0', '2023-10-04 21:21:37', 'Ingreso del Usuario: Jesus Castillo.'),
(81, 1, 4, '0', '2023-10-04 22:15:43', 'Salida del sistema del Usuario: Jesus Castillo.'),
(82, 1, 3, '0', '2023-10-04 22:36:48', 'Ingreso del Usuario: Jesus Castillo.'),
(83, 1, 6, '0', '2023-10-04 22:43:22', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(84, 1, 4, '0', '2023-10-04 22:43:32', 'Salida del sistema del Usuario: Jesus Castillo.'),
(85, 1, 3, '0', '2023-10-04 22:46:15', 'Ingreso del Usuario: Jesus Castillo.'),
(86, 1, 4, '0', '2023-10-04 22:51:15', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(87, 1, 4, '0', '2023-10-04 23:07:35', 'Salida del sistema del Usuario: Jesus Castillo.'),
(88, 1, 3, 'ADMINJ', '2023-10-06 20:38:59', 'Ingreso del Usuario: Jesus Castillo.'),
(89, 1, 17, 'ADMINJ', '2023-10-06 20:39:26', 'Nuevo respaldo de la base de datos creado en fecha: 2023-10-06. Creado por el usuario: Jesus Castillo.'),
(90, 1, 4, 'ADMINJ', '2023-10-06 20:42:06', 'Salida del sistema del Usuario: Jesus Castillo.'),
(91, 1, 3, '27146430', '2023-10-06 20:45:58', 'Ingreso del Usuario: Jesus Castillo.'),
(92, 1, 4, '27146430', '2023-10-06 20:46:00', 'Salida del sistema del Usuario: Jesus Castillo.'),
(93, 1, 3, '27146430', '2023-10-06 21:36:00', 'Ingreso del Usuario: Jesus Castillo.'),
(94, 1, 4, '27146430', '2023-10-06 21:48:39', 'Salida del sistema del Usuario: Jesus Castillo.'),
(95, 1, 3, '27146430', '2023-10-06 21:49:59', 'Ingreso del Usuario: Jesus Castillo.'),
(96, 1, 6, 'M1SSPC17', '2023-10-06 22:24:13', 'El usuario: Jesus Castillo realizó cambios en un equipo del inventario: Nota de Edición cambió de: <br><br>Segunda edicion para probar la concatenacion<br><br>Tercer intento para irme a dormir a: Prueba de funcionamiento de la auditoria version 2. Cambios realizados.'),
(97, 1, 4, '27146430', '2023-10-06 22:25:15', 'Salida del sistema del Usuario: Jesus Castillo.'),
(98, 1, 3, '27146430', '2023-10-06 23:09:48', 'Ingreso del Usuario: Jesus Castillo.'),
(99, 1, 12, '1', '2023-10-06 23:21:29', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Se rechazó la solicitud por parte de Jesus Castillo; en espera de confirmación de rechazo.'),
(100, 1, 12, '1', '2023-10-06 23:22:11', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 1. Se rechazó la solicitud de manera definitiva por parte de Jesus Castillo.'),
(101, 1, 8, '2', '2023-10-06 23:22:34', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 2.'),
(102, 1, 8, 'M1SSPC17', '2023-10-06 23:23:08', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC17.'),
(103, 1, 9, 'M1SSPC17', '2023-10-06 23:23:32', 'Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada a -En Proceso-, por Jesus Castillo, técnico designado: Prueba Tecnico.'),
(104, 1, 11, 'M1SSPC17', '2023-10-06 23:24:20', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 3. Actualizada a -Finalizada-, por Jesus Castillo, técnico designado de realizar el soporte: Prueba Tecnico.'),
(105, 1, 4, '27146430', '2023-10-07 00:12:14', 'Salida del sistema del Usuario: Jesus Castillo.'),
(106, 1, 3, '27146430', '2023-10-07 19:20:25', 'Ingreso del Usuario: Jesus Castillo.'),
(107, 1, 8, 'M1SSPC17', '2023-10-07 19:21:30', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4.'),
(108, 1, 12, 'M1SSPC17', '2023-10-07 19:26:04', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4. Se rechazó la solicitud por parte de Jesus Castillo; en espera de confirmación de rechazo.'),
(109, 1, 12, 'M1SSPC17', '2023-10-07 19:26:30', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4. Se rechazó la solicitud de manera definitiva por parte de Jesus Castillo.'),
(110, 1, 6, 'M1SSPC18', '2023-10-07 19:31:46', 'El usuario: Jesus Castillo realizó cambios en el equipoM1SSPC18: Supervisor Dpto cambió de: Rodolfo Mejias a: Ing Rodolfo Mejias. Nota de Edición cambió de:  a: Haciendo un cambio en el jefe de departamento por una prueba. Cambios realizados.'),
(111, 1, 4, '27146430', '2023-10-07 19:33:04', 'Salida del sistema del Usuario: Jesus Castillo.'),
(112, 1, 3, '27146430', '2023-10-07 22:02:29', 'Ingreso del Usuario: Jesus Castillo.'),
(114, 1, 4, '27146430', '2023-10-07 23:25:19', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(115, 1, 3, '27146430', '2023-10-07 23:25:31', 'Ingreso del Usuario: Jesus Castillo.'),
(116, 1, 4, '27146430', '2023-10-07 23:30:31', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(117, 1, 3, '27146430', '2023-10-07 23:48:24', 'Ingreso del Usuario: Jesus Castillo.'),
(118, 1, 4, '27146430', '2023-10-07 23:53:24', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(119, 1, 6, 'M1SSPC17', '2023-10-07 23:59:09', 'El usuario: Jesus Castillo realizó cambios en el equipo M1SSPC17: Posee Escaner cambió de: No a: Si. Escaner Marca se agregó: HP. Escaner Modelo se agregó: besto. Escaner Conexión se agregó: USB. Escaner Operativo se agregó: Si. Toner o Tinta se agregó: Toner. Conectada a la Red se agregó: No. Escaner BN se agregó: 5080796. Nota de Edición cambió de: Segunda edicion para probar la concatenacion<br><br>Tercer intento para irme a dormir<br><br>Prueba de funcionamiento de la auditoria version 2 a: Se reparo el escaner asignado al equipo de sala situacional. Cambios realizados.'),
(120, 1, 4, '27146430', '2023-10-08 00:00:31', 'Salida del sistema del Usuario: Jesus Castillo.'),
(121, 1, 3, '27146430', '2023-10-08 20:08:15', 'Ingreso del Usuario: Jesus Castillo.'),
(122, 1, 4, '27146430', '2023-10-08 20:50:40', 'Salida del sistema del Usuario: Jesus Castillo.'),
(123, 1, 3, '27146430', '2023-10-08 21:52:02', 'Ingreso del Usuario: Jesus Castillo.'),
(125, 1, 4, '27146430', '2023-10-08 23:12:22', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(126, 1, 3, '27146430', '2023-10-08 23:12:36', 'Ingreso del Usuario: Jesus Castillo.'),
(127, 1, 4, '27146430', '2023-10-08 23:14:22', 'Salida del sistema del Usuario: Jesus Castillo.'),
(128, 1, 3, '27146430', '2023-10-08 23:14:51', 'Ingreso del Usuario: Jesus Castillo.'),
(129, 1, 4, '27146430', '2023-10-08 23:19:51', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(130, 1, 3, '27146430', '2023-10-08 23:20:53', 'Ingreso del Usuario: Jesus Castillo.'),
(131, 1, 4, '27146430', '2023-10-08 23:25:53', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(132, 1, 9, 'M1SSPC18', '2023-10-08 23:40:02', 'Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada a -En Proceso-, por Jesus Castillo, técnico designado: Prueba Tecnico.'),
(133, 1, 4, '27146430', '2023-10-09 00:09:05', 'Salida del sistema del Usuario: Jesus Castillo.'),
(134, 1, 3, '27146430', '2023-10-09 00:18:03', 'Ingreso del Usuario: Jesus Castillo.'),
(135, 1, 4, '27146430', '2023-10-09 00:23:03', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(136, 1, 10, 'M1SSPC18', '2023-10-09 00:53:48', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: Falta fuente de poder para finalizar.'),
(137, 1, 10, 'M1SSPC18', '2023-10-09 01:00:51', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: Falta otra fuente de poder.'),
(138, 1, 10, 'M1SSPC18', '2023-10-09 01:02:27', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: Falta componentes hel.'),
(139, 1, 10, 'M1SSPC18', '2023-10-09 01:08:03', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: fadsfdafsdafasdfasfdsa.'),
(140, 1, 10, 'M1SSPC18', '2023-10-09 01:10:07', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: lsdkjfldsajfldsajlfjl fjsald fas.'),
(141, 1, 12, 'M1SSPC17', '2023-10-09 01:14:45', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4. Se rechazó la solicitud por parte de Jesus Castillo; en espera de confirmación de rechazo.'),
(142, 1, 10, 'M1SSPC18', '2023-10-09 01:16:17', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: LE FALTAN UN VERGERO DE COSAS.'),
(143, 1, 4, '27146430', '2023-10-09 01:25:57', 'Salida del sistema del Usuario: Jesus Castillo.'),
(144, 1, 3, '27146430', '2023-10-12 02:26:26', 'Ingreso del Usuario: Jesus Castillo.'),
(145, 1, 4, '27146430', '2023-10-12 02:40:15', 'Salida del sistema del Usuario: Jesus Castillo.'),
(146, 1, 3, '27146430', '2023-10-12 02:40:40', 'Ingreso del Usuario: Jesus Castillo.'),
(147, 1, 4, '27146430', '2023-10-12 02:41:20', 'Salida del sistema del Usuario: Jesus Castillo.'),
(148, 1, 3, '27146430', '2023-10-12 20:11:41', 'Ingreso del Usuario: Jesus Castillo.'),
(149, 1, 14, '27146430', '2023-10-12 20:13:49', 'El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 5. Estatus de la Correspondencia cambió de: En espera a: Confirmado. Nota de confirmación cambió de:  a: Llego de manera adecuada. Cambios realizados.'),
(150, 2, 3, '27146431', '2023-10-12 20:15:05', 'Ingreso del Usuario: Prueba Tecnico.'),
(151, 2, 4, '27146431', '2023-10-12 20:20:41', 'Salida del sistema del Usuario: Prueba Tecnico.'),
(152, 1, 4, '27146430', '2023-10-12 20:20:56', 'Salida del sistema del Usuario: Jesus Castillo.'),
(153, 1, 3, '27146430', '2023-10-12 21:31:51', 'Ingreso del Usuario: Jesus Castillo.'),
(154, 1, 4, '27146430', '2023-10-12 21:32:17', 'Salida del sistema del Usuario: Jesus Castillo.'),
(155, 1, 3, '27146430', '2023-10-12 21:54:13', 'Ingreso del Usuario: Jesus Castillo.'),
(156, 1, 17, '27146430', '2023-10-12 21:54:34', 'Nuevo respaldo de la base de datos creado en fecha: 2023-10-12. Creado por el usuario: Jesus Castillo.'),
(157, 1, 4, '27146430', '2023-10-12 21:54:45', 'Salida del sistema del Usuario: Jesus Castillo.'),
(158, 1, 3, '27146430', '2023-10-12 22:58:00', 'Ingreso del Usuario: Jesus Castillo.'),
(159, 1, 4, '27146430', '2023-10-12 23:03:40', 'Salida del sistema del Usuario: Jesus Castillo.'),
(160, 1, 3, '27146430', '2023-10-12 23:25:13', 'Ingreso del Usuario: Jesus Castillo.'),
(161, 1, 4, '27146430', '2023-10-12 23:25:15', 'Salida del sistema del Usuario: Jesus Castillo.'),
(162, 1, 3, '27146430', '2023-10-12 23:48:39', 'Ingreso del Usuario: Jesus Castillo.'),
(166, 1, 2, '27146430', '2023-10-13 00:17:53', 'El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de:  a: 04120391931. Cambios realizados.'),
(167, 1, 2, '27146430', '2023-10-13 00:20:44', 'El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de: 04120391931 a: . Cambios realizados.'),
(168, 1, 2, '27146430', '2023-10-13 00:20:53', 'El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario se agregó como: 04120391931. Cambios realizados.'),
(169, 1, 2, '27146430', '2023-10-13 00:22:30', 'El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario se eliminó. Cambios realizados.'),
(170, 1, 2, '27146430', '2023-10-13 00:27:29', 'El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario se agregó como: 04120391931. Cambios realizados.'),
(171, 1, 2, '27146431', '2023-10-13 00:55:55', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Prueba Tecnico, cambios realizados: Rol del Usuario cambió de: Ingeniero Informático a: Administrador. Cambios realizados.'),
(172, 1, 2, '27146431', '2023-10-13 00:56:22', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Prueba Tecnico, cambios realizados: Rol del Usuario cambió de: Administrador a: Sin Acceso. Estatus cambió de: Activo a: Inactivo. Cambios realizados.'),
(173, 1, 2, '27146431', '2023-10-13 00:56:43', 'El usuario: Jesus Castillo, modificó el estado del usuario: Prueba Tecnico. Estatus cambió de: Inactivo a: Activo. Cambios realizados.'),
(174, 1, 2, '27146431', '2023-10-13 00:58:33', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Prueba Tecnico, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Ingeniero Informático. Cambios realizados.'),
(175, 1, 4, '27146430', '2023-10-13 01:35:47', 'Salida del sistema del Usuario: Jesus Castillo.'),
(176, 1, 3, '27146430', '2023-10-14 16:08:21', 'Ingreso del Usuario: Jesus Castillo.'),
(177, 1, 2, '27146430', '2023-10-14 16:18:24', 'El usuario Jesus Castillo modificó la contraseña del usuario Jesus Castillo. El proceso fue realizado para restaurar la contraseña del usuario.'),
(178, 1, 6, 'M1SSPC18', '2023-10-14 16:23:07', 'El usuario: Jesus Castillo realizó cambios en el equipo M1SSPC18: Supervisor Dpto cambió de: Ing Rodolfo Mejias a: Rodolfo Mejias. Nota de Edición cambió de: Haciendo un cambio en el jefe de departamento por una prueba a: Siguiente prueba en la edicion del equipo. Cambios realizados.'),
(179, 1, 10, 'M1SSPC18', '2023-10-14 16:41:48', 'Se movio la solicitud a En espera de componentes, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada, por Jesus Castillo, descripción: Falta una fuente de poder.'),
(180, 1, 2, '27146431', '2023-10-14 17:03:19', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Prueba Tecnico, cambios realizados: Rol del Usuario cambió de: Ingeniero Informático a: Sin Acceso. Estatus cambió de: Activo a: Inactivo. Cambios realizados.'),
(181, 1, 2, '27146431', '2023-10-14 17:03:24', 'El usuario: Jesus Castillo, modificó el estado del usuario: Prueba Tecnico. Estatus cambió de: Inactivo a: Activo. Cambios realizados.'),
(182, 1, 11, 'M1SSPC17', '2023-10-14 17:58:16', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4. Actualizada a -Finalizada-, por Jesus Castillo, técnico designado de realizar el soporte: Jesus Castillo.'),
(183, 1, 4, '27146430', '2023-10-14 18:30:40', 'Salida del sistema del Usuario: Jesus Castillo.'),
(184, 1, 3, '27146430', '2023-10-14 18:39:07', 'Ingreso del Usuario: Jesus Castillo.'),
(186, 1, 4, '27146430', '2023-10-14 20:41:52', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(187, 1, 3, '27146430', '2023-10-14 20:42:10', 'Ingreso del Usuario: Jesus Castillo.'),
(188, 1, 4, '27146430', '2023-10-14 20:47:10', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(189, 1, 3, '27146430', '2023-10-14 21:14:02', 'Ingreso del Usuario: Jesus Castillo.'),
(190, 1, 4, '27146430', '2023-10-14 21:19:02', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(191, 1, 4, '27146430', '2023-10-14 21:28:32', 'Salida del sistema del Usuario: Jesus Castillo.'),
(192, 1, 3, '27146430', '2023-10-14 21:43:37', 'Ingreso del Usuario: Jesus Castillo.'),
(193, 1, 4, '27146430', '2023-10-14 21:48:37', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(194, 1, 3, '27146430', '2023-10-14 22:02:59', 'Ingreso del Usuario: Jesus Castillo.'),
(195, 1, 11, 'M1SSPC17', '2023-10-14 22:03:53', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 4. Actualizada a -Finalizada-, por Jesus Castillo, técnico designado de realizar el soporte: Jesus Castillo.'),
(196, 1, 11, 'M1SSPC18', '2023-10-14 22:06:30', 'Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC18, Nro de Solicitud: 2. Actualizada a -Finalizada-, por Jesus Castillo, técnico designado de realizar el soporte: Jesus Castillo.'),
(197, 1, 8, 'M1SSPC17', '2023-10-14 22:07:44', 'Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 5.'),
(198, 1, 4, '27146430', '2023-10-14 22:07:59', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(199, 1, 4, '27146430', '2023-10-14 22:09:26', 'Salida del sistema del Usuario: Jesus Castillo.'),
(200, 1, 3, '27146430', '2023-10-14 22:17:31', 'Ingreso del Usuario: Jesus Castillo.'),
(201, 1, 2, '27146431', '2023-10-14 22:18:22', 'El usuario: Jesus Castillo realizó cambios en los datos del empleado: Prueba Tecnico, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Ingeniero Informático. Cambios realizados.'),
(202, 1, 12, 'M1SSPC17', '2023-10-14 22:18:37', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 5. Se rechazó la solicitud por parte de Jesus Castillo; en espera de confirmación de rechazo.'),
(203, 1, 12, 'M1SSPC17', '2023-10-14 22:18:49', 'Rechazo de la solicitud de Soporte técnico, nombre del equipo: M1SSPC17, Nro de Solicitud: 5. Se rechazó la solicitud de manera definitiva por parte de Jesus Castillo.'),
(204, 1, 4, '27146430', '2023-10-14 22:22:31', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(205, 1, 4, '27146430', '2023-10-14 22:26:52', 'Salida del sistema del Usuario: Jesus Castillo.'),
(206, 1, 3, '27146430', '2023-10-18 21:50:02', 'Ingreso del Usuario: Jesus Castillo.'),
(207, 1, 4, '27146430', '2023-10-18 21:55:02', 'Salida automática del sistema, del Usuario: Jesus Castillo.'),
(208, 1, 4, '27146430', '2023-10-18 21:55:12', 'Salida del sistema del Usuario: Jesus Castillo.');

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
(17, 'Creación Respaldo');

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `c1_inventario_equipo`
--
ALTER TABLE `c1_inventario_equipo`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `c3_1_estado_soporte`
--
ALTER TABLE `c3_1_estado_soporte`
  MODIFY `id_estado_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `c3_solicitudes_soportes`
--
ALTER TABLE `c3_solicitudes_soportes`
  MODIFY `id_soporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `c4_base_conocimiento`
--
ALTER TABLE `c4_base_conocimiento`
  MODIFY `id_conocimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `d1_correspondencia`
--
ALTER TABLE `d1_correspondencia`
  MODIFY `id_nro_admision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `d2_empresas_corresp`
--
ALTER TABLE `d2_empresas_corresp`
  MODIFY `id_empresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `d3_notificaciones_div`
--
ALTER TABLE `d3_notificaciones_div`
  MODIFY `id_notificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `d4_notificaciones_estatus`
--
ALTER TABLE `d4_notificaciones_estatus`
  MODIFY `id_estatus_notifi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `z1_historial_camb_sis`
--
ALTER TABLE `z1_historial_camb_sis`
  MODIFY `id_historial_cambios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT de la tabla `z2_historial_acciones`
--
ALTER TABLE `z2_historial_acciones`
  MODIFY `id_accHis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- Filtros para la tabla `z1_historial_camb_sis`
--
ALTER TABLE `z1_historial_camb_sis`
  ADD CONSTRAINT `id_accion_cambio_fk` FOREIGN KEY (`id_accion_cambio`) REFERENCES `z2_historial_acciones` (`id_accHis`),
  ADD CONSTRAINT `id_usuario_cambio_fk` FOREIGN KEY (`id_usuario_cambio`) REFERENCES `a1_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
