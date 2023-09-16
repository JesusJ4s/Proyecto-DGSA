-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 05:32:57
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
-- Base de datos: `practica_php_dgsa`
--
CREATE DATABASE IF NOT EXISTS `practica_php_dgsa` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `practica_php_dgsa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a1_usuarios`
--

CREATE TABLE `a1_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `nacionalidad` varchar(45) COLLATE utf8_bin NOT NULL,
  `cedula` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefono_secundario` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `usuario_departamento_id` int(11) DEFAULT NULL,
  `usuario_rol_id` int(11) NOT NULL,
  `contraseña` varchar(256) COLLATE utf8_bin NOT NULL,
  `color_favorito` varchar(45) COLLATE utf8_bin NOT NULL,
  `lugar_nacimiento` varchar(45) COLLATE utf8_bin NOT NULL,
  `fruta_favorita` varchar(45) COLLATE utf8_bin NOT NULL,
  `pin_seguridad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a2_cargos`
--

CREATE TABLE `a2_cargos` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `a2_cargos`
--

INSERT INTO `a2_cargos` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Ingeniero Informático'),
(3, 'Jefe de Departamento'),
(4, 'Empleado'),
(5, 'Sin Acceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b1_direccion_general_de_salud_ambiental`
--

CREATE TABLE `b1_direccion_general_de_salud_ambiental` (
  `id_direcciones` int(11) NOT NULL,
  `nombre_dire` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `b1_direccion_general_de_salud_ambiental`
--

INSERT INTO `b1_direccion_general_de_salud_ambiental` (`id_direcciones`, `nombre_dire`) VALUES
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
(NULL, 'Despacho Dirección', 1),
(NULL, 'Servicios Generales', 1),
(NULL, 'Talleres', 1),
(NULL, 'Vigilantes', 1),
(NULL, 'Enlace Administración', 1),
(NULL, 'Almacenes', 1),
(NULL, 'Enlace RRHH-Dirección', 1),
(NULL, 'Unidad Legal', 1),
(NULL, 'Evaluación y Acreencias', 1),
(NULL, 'Servicios de Salud y Seguridad en el Trabajo', 1),
(NULL, 'Coordinación de Informática', 1),
(NULL, 'Enlace de Planificación y Presupuesto', 1),
(NULL, 'Transporte', 1),
(NULL, 'Mercosur-Cooperación Técnica Internacional RSI', 1),
(NULL, 'Control Interno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b3_departamentos`
--

CREATE TABLE `b3_departamentos` (
  `id_departamento` int(11) NOT NULL,
  `nombre_dpto` varchar(45) COLLATE utf8_bin NOT NULL,
  `departamento_division_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `b3_departamentos`
--

INSERT INTO `b3_departamentos` (`id_departamento`, `nombre_dpto`, `departamento_division_id`) VALUES
(NULL, 'Despacho Dirección', 1),
(NULL, 'Mantenimiento Área I', 2),
(NULL, 'Mantenimiento Área II', 2),
(NULL, 'Mantenimiento Área III', 2),
(NULL, 'Talleres', 3),
(NULL, 'Vigilantes', 4),
(NULL, 'Bienes Nacionales', 5),
(NULL, 'Kardex', 5),
(NULL, 'Almacenes', 6),
(NULL, 'Secretaria', 7),
(NULL, 'Capacitación', 7),
(NULL, 'Jubilados', 7),
(NULL, 'Bienestar Social', 7),
(NULL, 'Nómina', 7),
(NULL, 'Archivo', 7),
(NULL, 'Registro y Control', 7),
(NULL, 'Seguro Social', 7),
(NULL, 'Unidad Legal', 8),
(NULL, 'Evaluación y Acreencias', 9),
(NULL, 'Servicios de Salud y Seguridad en el Trabajo', 10),
(NULL, 'Coordinación de Informática', 11),
(NULL, 'Enlace de Planificación y Presupuesto', 12),
(NULL, 'Transporte', 13),
(NULL, 'Mercosur-Cooperación Técnica Internacional RS', 14),
(NULL, 'Control Interno', 15);

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
  `escaner_modelo` varchar(45) COLLATE utf8_bin NOT NULL,
  `escaner_conexion` varchar(45) COLLATE utf8_bin NOT NULL,
  `BN_serial_escaner` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `comentario` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c2_inventario_cambios`
--

CREATE TABLE `c2_inventario_cambios` (
  `id_inventario` int(11) NOT NULL,
  `inv_camb_principal` int(11) NOT NULL,
  `fecha_cambio` date NOT NULL,
  `comentario_cambio` varchar(255) COLLATE utf8_bin NOT NULL,
  `tecn_editor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(5, 'Rechazado Completo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c3_solicitudes_soportes`
--

CREATE TABLE `c3_solicitudes_soportes` (
  `id_soporte` int(11) NOT NULL,
  `uso_equipo` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_equipo_soporte` int(11) NOT NULL,
  `mac_equipo_soporte` varchar(100) COLLATE utf8_bin NOT NULL,
  `nivel_soporte` varchar(45) COLLATE utf8_bin NOT NULL,
  `soporte_descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_soporte_solicitud` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_soporte_aceptacion` datetime NOT NULL,
  `tecnico_soporte_id` int(11) DEFAULT NULL,
  `fecha_soporte_final` datetime NOT NULL,
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL
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

--
-- Volcado de datos para la tabla `c4_base_conocimiento`
--

INSERT INTO `c4_base_conocimiento` (`id_conocimiento`, `tipo_conocimiento`, `descripcion_caso`, `posible_solucion`) VALUES
(1, 'Software', 'El Word no quiere abrir ningún archivo', 'Intente abrir primero la aplicación Word presionando click derecho, nuevo archivo. Si continúa presentando fallos reinicie el ordenador.'),
(2, 'Hardware', 'La pantalla no muestra imagen', 'Verifique que se encuentre conectado correctamente al equipo. Verifique se el monitor se encuentre conectado a la corriente y que esté encendido.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z1_historial`
--

CREATE TABLE `z1_historial` (
  `id_historial_cambios` int(11) NOT NULL,
  `id_usuario_cambio` int(11) NOT NULL,
  `cedula_usuario_cambio` int(11) NOT NULL,
  `fecha_usuario_cambio` datetime DEFAULT NULL,
  `descripcion_cambio` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z2_historial_usuario`
--

CREATE TABLE `z2_historial_usuario` (
  `id_historial_usuario` int(11) NOT NULL,
  `id_usuario_fecha` int(11) NOT NULL,
  `cedula_usuario_fecha` varchar(45) COLLATE utf8_bin NOT NULL,
  `fecha_creacion_registro` datetime NOT NULL,
  `descripcion_usuario` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `a1_usuarios`
--
ALTER TABLE `a1_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_dpto_fk` (`usuario_departamento_id`),
  ADD KEY `usuario_cargo_fk` (`usuario_rol_id`);

--
-- Indices de la tabla `a2_cargos`
--
ALTER TABLE `a2_cargos`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `b1_direccion_general_de_salud_ambiental`
--
ALTER TABLE `b1_direccion_general_de_salud_ambiental`
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
-- Indices de la tabla `c2_inventario_cambios`
--
ALTER TABLE `c2_inventario_cambios`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `inv_camb_principal_fk` (`inv_camb_principal`),
  ADD KEY `tecn_editor_id_fk` (`tecn_editor_id`);

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
-- Indices de la tabla `z1_historial`
--
ALTER TABLE `z1_historial`
  ADD PRIMARY KEY (`id_historial_cambios`),
  ADD KEY `id_usuario_cambio_fk` (`id_usuario_cambio`);

--
-- Indices de la tabla `z2_historial_usuario`
--
ALTER TABLE `z2_historial_usuario`
  ADD PRIMARY KEY (`id_historial_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `a1_usuarios`
--
ALTER TABLE `a1_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `a2_cargos`
--
ALTER TABLE `a2_cargos`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `b1_direccion_general_de_salud_ambiental`
--
ALTER TABLE `b1_direccion_general_de_salud_ambiental`
  MODIFY `id_direcciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `b2_divisiones`
--
ALTER TABLE `b2_divisiones`
  MODIFY `id_divisiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `b3_departamentos`
--
ALTER TABLE `b3_departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `c1_inventario_equipo`
--
ALTER TABLE `c1_inventario_equipo`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `c2_inventario_cambios`
--
ALTER TABLE `c2_inventario_cambios`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `c3_1_estado_soporte`
--
ALTER TABLE `c3_1_estado_soporte`
  MODIFY `id_estado_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `c3_solicitudes_soportes`
--
ALTER TABLE `c3_solicitudes_soportes`
  MODIFY `id_soporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `c4_base_conocimiento`
--
ALTER TABLE `c4_base_conocimiento`
  MODIFY `id_conocimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `z1_historial`
--
ALTER TABLE `z1_historial`
  MODIFY `id_historial_cambios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `z2_historial_usuario`
--
ALTER TABLE `z2_historial_usuario`
  MODIFY `id_historial_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `a1_usuarios`
--
ALTER TABLE `a1_usuarios`
  ADD CONSTRAINT `usuario_cargo_fk` FOREIGN KEY (`usuario_rol_id`) REFERENCES `a2_cargos` (`id_rol`),
  ADD CONSTRAINT `usuario_dpto_fk` FOREIGN KEY (`usuario_departamento_id`) REFERENCES `b3_departamentos` (`id_departamento`);

--
-- Filtros para la tabla `b2_divisiones`
--
ALTER TABLE `b2_divisiones`
  ADD CONSTRAINT `division_direccion_fk` FOREIGN KEY (`division_direccion_id`) REFERENCES `b1_direccion_general_de_salud_ambiental` (`id_direcciones`);

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
  ADD CONSTRAINT `inv_equipo_direccion_fk` FOREIGN KEY (`direccion_inv_id`) REFERENCES `b1_direccion_general_de_salud_ambiental` (`id_direcciones`),
  ADD CONSTRAINT `inv_equipo_division_fk` FOREIGN KEY (`division_inv_id`) REFERENCES `b2_divisiones` (`id_divisiones`),
  ADD CONSTRAINT `inv_equipo_dpto_fk` FOREIGN KEY (`dpto_inv_id`) REFERENCES `b3_departamentos` (`id_departamento`);

--
-- Filtros para la tabla `c2_inventario_cambios`
--
ALTER TABLE `c2_inventario_cambios`
  ADD CONSTRAINT `inv_camb_principal_fk` FOREIGN KEY (`inv_camb_principal`) REFERENCES `c1_inventario_equipo` (`id_case`),
  ADD CONSTRAINT `tecn_editor_id_fk` FOREIGN KEY (`tecn_editor_id`) REFERENCES `a1_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `c3_solicitudes_soportes`
--
ALTER TABLE `c3_solicitudes_soportes`
  ADD CONSTRAINT `estado_soporte_id` FOREIGN KEY (`estado`) REFERENCES `c3_1_estado_soporte` (`id_estado_sop`),
  ADD CONSTRAINT `id_equipo_soporte_fk` FOREIGN KEY (`id_equipo_soporte`) REFERENCES `c1_inventario_equipo` (`id_case`),
  ADD CONSTRAINT `tecnico_soporte_fk` FOREIGN KEY (`tecnico_soporte_id`) REFERENCES `a1_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `z1_historial`
--
ALTER TABLE `z1_historial`
  ADD CONSTRAINT `id_usuario_cambio_fk` FOREIGN KEY (`id_usuario_cambio`) REFERENCES `a1_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
