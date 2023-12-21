-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2023 a las 02:48:47
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
(1, 1, 'Jesus', 'Castillo', 'V', '27146430', 'ADMINJ', '04124457287', '04120391931', 'jesusgole33@gmail.com', 21, 11, 1, 1, '$2y$10$NvPGv9rpQ7IfVRFLwb1MpOx5sNd1yBv2Ko2Z8y9qOrGRpYZHEyqt.', 1, '$2y$10$12dYgK7dVi/DK4/wMJx46.l1bObrpUOkiK/GIEjp7O4cVu0TtFROi', 2, '$2y$10$n3YQggpfcELpdrKvpqf8feJVOAzUUSseJP6tWBVYnUEJKm0A3qF4e', 3, '$2y$10$zuZ7nkTq.tHf/8HcvihtieEVvKXAJLeH6djAEQwyM3F9aAov/ADOC', '030303', 0),
(2, 1, 'Prueba', 'Tecnico', 'V', '27146431', 'TECNICO1', '04124457287', '', 'jesusgole33@gmail.com', 21, 11, 1, 2, '$2y$10$C/HpR5XniJUcGBFMHJw3GOheL3dG2D255EqAHFx5p3nuOUsvlMJqu', 1, '$2y$10$pMo0iPT6zpu4apIwNmyR6OqCbOEVP.HuoTLwvKoneoGlpVhe2k052', 2, '$2y$10$WozaJtNhQnEbKm7bV1TLSuoKJtWNAfK.ScFB3G.cb.ju3RUFFe5g.', 3, '$2y$10$W2xfe7SZsIXW6K1frp90/OvEl9pJJEa4HgDnbnfy2zu/28RrlYmr2', '030303', 0),
(3, 1, 'Jefe', 'Correspondencia', 'V', '27146432', 'JEFECORR', '04124457287', '', 'jesusgole33@gmail.com', 80, 1, 1, 3, '$2y$10$J/Va.zo22hYZDkBDf1uaROYAEQHA/.7aimYG1hRXouZzZrTH4XOsy', 1, '$2y$10$6/IlcYLcakRstuM8a0.tAO8q419kYX3FoeXgc78m7cLDb35UBnqCC', 2, '$2y$10$ZPiu6F64nWaHsh1q4M9yxOczLlyuNeOiuCSznieKTXjSJlZqIGg/K', 3, '$2y$10$Zpdz2QPby1bhi0zBpONwDuabmfktPzKrJ5pAp9x965iwWad/u2nvq', '030303', 0),
(4, 1, 'Empleado', 'Vista', 'V', '27146433', 'EMPLEADO', '04124457287', '', 'jesusgole33@gmail.com', 25, 15, 1, 4, '$2y$10$vIQOE8Vk0x2UinfutOtqhOX.wEeRkZBuuREMt76RuhkCJ16r22pOW', 1, '$2y$10$GY0IcODJAc2YSJdm0y/Fru43BbTUxJpnTg1icM1e3Q1qj/KQD0jBS', 2, '$2y$10$M3R//RYBCpzYBbEldq4PSeloIexkktbayOXZMubGshVkB0IBRCApq', 3, '$2y$10$vc3weLGWv4eOwx0rLmlRbueMMPze/F1S12VbDWjqnr9cSAX22ZL1y', '030303', 0),
(5, 1, 'Salud', 'Radiologica', 'V', '27146434', 'RADIOLOGO', '04124457287', '', 'jesusgole33@gmail.com', 72, 30, 3, 3, '$2y$10$3xqE/4YErRTagfCBGvd6f.Ajagr7OOubm9d3UdgoRJfT2fdyAlqDC', 1, '$2y$10$LFw/K3WLbKj3dCW5vqkZ.e7.w6lqs0O6QR126FVJFQ8jzGx7IQbyS', 2, '$2y$10$nUdPAGKoDnb5MInuXO/AAeaTXjy/ouTAgCSWQrA1v0tE3M3sZZN8W', 3, '$2y$10$6Fzsi/yQJVaG08ZM7W/nheny/6Ttypyxq1BtFc.cGWXJ0kVaJJ/VW', '030303', 0),
(6, 1, 'Emi', 'Gia', 'V', '27146435', 'EPIDEMIOLOGIA', '04124457287', '', 'jesusgole33@gmail.com', 40, 21, 5, 3, '$2y$10$Q6HluVEBpK.mwO7Umgkq3O0rJaPmfEAQ..iBuReRhE/yP5jFBTmO6', 1, '$2y$10$d9.crVeMKgUH7SCNPOTNXORKI7ttCh6OXrx115WA9S.s1S86GKKZ.', 2, '$2y$10$1/ZSKCNWpPf/T14hmQOj2.c0LFMpuYzj8zYAZko5L65pSZWWV867a', 3, '$2y$10$kUHDC63CChXgw7Da/ulYq.jeSia4cpsaWC1Mui6Vc/bmsd2uj/UwW', '030303', 0),
(7, 1, 'Jesus', 'Castillo', 'V', '271464300', 'JESUS', '04124457287', '', 'jesusgole33@gmail.com', 21, 11, 1, 5, '$2y$10$Q7krDxyQouhIn9aPktvT3O2m/8WVPzj6vD5WJ7jB7NE6VAgvbDxBW', 1, '$2y$10$51ap3oYt5/0fSK5VJVOUkeJ63YPDws3Eufb1UGZwmAjOuevFwbxCe', 2, '$2y$10$ZvZFxJOjQAw/m2jMLUhA6OO5dfK7CHznRwZhOpVT5Ik9IHe9QHfMi', 4, '$2y$10$omk8.M4c0qTE18iLFyiwIOmLhImleEVqlJvlyfM8s/mc7H/fx2tg6', '030303', 0);

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
(2, '2023-10-02', 2, 1, 1, 1, 'Elirrog Cruces', 'Ing Rodolfo Mejias', 'M1SSPC17', '5080796', 'SinSerial', 'Escritorio', 'Intel i5 10505', '3.20Ghz', 'D0-8E-79-0F-A3-11', '10.72.3.225', '500gb', 'seagate', 'CL-3D512-Q11NVMe', '1', '8gb', '10', 'Si', 'Cableada', 'Si', 'Si', '5080796', 'Dell', 'USB', 'Si', 'Dell', 'HDMI', '5080796', 'Si', 'Dell', '5080796', 'Si', 'Dell', 'USB', '5080796', 'Si', 'HP', 'besto', 'USB', 'Si', 'Toner', 'No', '5080796', 'Posee un escaner, pero actualmente se encuentra dañado', 'Segunda edicion para probar la concatenacion<br><br>Tercer intento para irme a dormir<br><br>Prueba de funcionamiento de la auditoria version 2<br><br>Se reparo el escaner asignado al equipo de sala situacional'),
(3, '2023-11-05', 2, 1, 1, 1, 'Jose Mejias', 'Ing Rodolfo Mejias', 'M1SSPC16', '3690090', '', 'Escritorio', 'i3 2100', '3.10GHz', 'D0-27-88-6D-56-21', '10.72.3.238', '500Gb', 'WesternDigital', 'WD5000AAKX', '2', '8gb', '10', 'Si', 'Cableada', 'Si', 'Si', '3690090', 'DELL', 'USB', '', 'HPHP', 'VGAA', '3690090', 'Si', 'OMEGA', '5015987', 'Si', 'HP', 'USB', '3690090', 'No', '', '', '', '', '', '', '', 'Se registra nuevo equipo en la base de datos', NULL);

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
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL,
  `historial_soporte` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 1, 3, '27146430', '2023-12-20 21:47:23', 'Ingreso del Usuario: Jesus Castillo.'),
(2, 1, 4, '27146430', '2023-12-20 21:47:47', 'Salida del sistema del Usuario: Jesus Castillo.'),
(3, 1, 3, '27146430', '2023-12-20 21:47:56', 'Ingreso del Usuario: Jesus Castillo.'),
(4, 1, 4, '27146430', '2023-12-20 21:48:30', 'Salida del sistema del Usuario: Jesus Castillo.');

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
  MODIFY `id_soporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `c4_base_conocimiento`
--
ALTER TABLE `c4_base_conocimiento`
  MODIFY `id_conocimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `z1_historial_camb_sis`
--
ALTER TABLE `z1_historial_camb_sis`
  MODIFY `id_historial_cambios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
