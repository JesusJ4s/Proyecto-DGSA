SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `proyecto_dgsa`
--



    CREATE DATABASE IF NOT EXISTS `proyecto_dgsa` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
    USE `proyecto_dgsa`;

CREATE TABLE `a1_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
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
  `sesion` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `usuario_dpto_fk` (`usuario_departamento_id`),
  KEY `usuario_cargo_fk` (`usuario_rol_id`),
  KEY `pregunta1_fk` (`id_pregunta1`),
  KEY `pregunta2_fk` (`id_pregunta2`),
  KEY `pregunta3_fk` (`id_pregunta3`),
  KEY `usuario_division_fk` (`usuario_division_id`),
  KEY `usuario_direccion_fk` (`usuario_direccion_id`),
  KEY `activo_inactivo_fk` (`ActivoInactivo`),
  CONSTRAINT `activo_inactivo_fk` FOREIGN KEY (`ActivoInactivo`) REFERENCES `a4_estado` (`id_estado`),
  CONSTRAINT `pregunta1_fk` FOREIGN KEY (`id_pregunta1`) REFERENCES `a3_preguntas` (`id_pregunta`),
  CONSTRAINT `pregunta2_fk` FOREIGN KEY (`id_pregunta2`) REFERENCES `a3_preguntas` (`id_pregunta`),
  CONSTRAINT `pregunta3_fk` FOREIGN KEY (`id_pregunta3`) REFERENCES `a3_preguntas` (`id_pregunta`),
  CONSTRAINT `usuario_cargo_fk` FOREIGN KEY (`usuario_rol_id`) REFERENCES `a2_rol` (`id_rol`),
  CONSTRAINT `usuario_direccion_fk` FOREIGN KEY (`usuario_direccion_id`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `usuario_division_fk` FOREIGN KEY (`usuario_division_id`) REFERENCES `b2_divisiones` (`id_divisiones`),
  CONSTRAINT `usuario_dpto_fk` FOREIGN KEY (`usuario_departamento_id`) REFERENCES `b3_departamentos` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a1_usuarios VALUES
("9","1","Jesus","Castillo","V","27146430","ADMINJ","04124457287","","jesusgole33@gmail.com","21","11","1","1","$2y$10$LJy2xjcYzHzZqi867wFRJe1WFuh6cuJcHtsEHk/f3ipDK8kvAsRRK","1","$2y$10$FwCCexJcysuLcCpn3mIdKObXfRx0z12OEBJ32n1PdbndYc9Htjf8C","2","$2y$10$MwAbRLglGnqVaCy3pTPebeNR4LA46tbwAasG4IDD1gPg6pkFLy4x6","3","$2y$10$.d07yoU.IUj4XM2xTx9Js.r0z.eAWwV7pfCjQLFh6IyJ6kG/b0qd6","0303","1"),
("10","1","Carla","Lopez","V","271464300","DISEñADORA","04124457287","","jesusgole33@gmail.com","81","1","1","4","$2y$10$oPuW56P.OPdms0PYYMfFeu4DmPMZPfPuqmGMu/N9HoP9RCNG9v0TC","1","$2y$10$2Tzr9CNHRpFAUWX935cXiellPTmO6gKuzYfx.etheVnq51KLY0d..","2","$2y$10$4pAT3mNrZAYgJQfcjbyJr.55aECuyMXJZthY6ok5KjtxCn54YTwne","3","$2y$10$czsIacMhdWXhTtbeXoiW5uqm6VbGBHoTWMHBgy7lLXh1XEanJa5iq","0303","0"),
("11","1","Jesus","Castillo","V","271464301","EMPLEADO","04124457287","","jesusgole33@gmail.com","1","1","1","4","$2y$10$RZOFd3ajMhmGDqVxqUhOGuxND6wz4JBR5IFuTNCpO2HDRN/B5nlhi","1","$2y$10$G83pnR9k418SfWMUOPjw1OvtvFI7PgN1WZiEr3kvoGeN1df1.KVGi","2","$2y$10$IeZvsrlJwsFFQyAKb.McsOn3y11cBB7KTfd2dcsQzGlrCW4SrUjhq","3","$2y$10$n29JDnjUhg.BztaMypPCPeWXcUj1cN50m8FELU4CHOw9CTTy.FoJi","0303","0"),
("12","1","Carlos","Cast","V","271464303","JEFECORR","04124457287","","jesusgole33@gmail.com","80","1","1","3","$2y$10$IMT9jaOk7DBI3vPUEH7uMO/AcI6vKwsU1NvuulpvAjUX3gYlQdIR.","1","$2y$10$ef5LmKl2OpIvPKvR1v2uyeNFdHZzl37aLrxW71116DGBbpeWor6dy","2","$2y$10$/usw7JDHN4dHDZRbKHfvj.4ZexgUkriKkw5AjZ9S08MtuNqDdLAEu","3","$2y$10$jcyX7Q8F5TnL/1DkpVml3.HWNQxhFU2gKGUFqIFkdrctvxK8/tEbG","0303","0"),
("13","1","Jesus","Castillo","V","271464305","JEFE","04124457287","","jesusgole33@gmail.com","26","16","2","3","$2y$10$0Wb7gXoBswGsu/tt2JuYYeAyHtRwInl9HneTTk371DXJUoRkllHhy","1","$2y$10$sWgJ0epbfpjwnJ5MzbJGG.wU9pidQBaX9oQiuNfESMAAuAJSRH0ty","2","$2y$10$mI0NbAYfOdN0hrUsWE2jv.ZKMPKpQQ51vKgsylAMrKcolSpzqtiDu","3","$2y$10$HbLgEkMa5Ft9Agwj24/e3.m49OBO8IH7hOIzedX79gDEUFbMrODzK","0303","0");




CREATE TABLE `a2_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a2_rol VALUES
("1","Administrador"),
("2","Ingeniero Informático"),
("3","Jefe de Coordinación"),
("4","Secretario"),
("5","Sin Acceso");




CREATE TABLE `a3_preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a3_preguntas VALUES
("1","Color favorito"),
("2","Fruta favorita"),
("3","Pelicula favorita"),
("4","Mascota"),
("5","Nombre madre"),
("6","Nombre padre"),
("7","Serie favorita"),
("8","Música favorita"),
("9","Lugar favorito");




CREATE TABLE `a4_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_status` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a4_estado VALUES
("1","Activo"),
("2","Inactivo"),
("3","Eliminado");




CREATE TABLE `b1_direcciones` (
  `id_direcciones` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dire` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_direcciones`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO b1_direcciones VALUES
("1","Dirección General"),
("2","Dirección de Ingenería Sanitaria"),
("3","Dirección de Salud Radiológica"),
("4","Dirección de Control de Vectores"),
("5","Dirección Epidemiología Ambiental"),
("6","Sin Asignar");




CREATE TABLE `b2_divisiones` (
  `id_divisiones` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_div` varchar(100) COLLATE utf8_bin NOT NULL,
  `division_direccion_id` int(11) NOT NULL,
  PRIMARY KEY (`id_divisiones`),
  KEY `division_direccion_fk` (`division_direccion_id`),
  CONSTRAINT `division_direccion_fk` FOREIGN KEY (`division_direccion_id`) REFERENCES `b1_direcciones` (`id_direcciones`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO b2_divisiones VALUES
("1","Despacho Dirección","1"),
("2","Servicios Generales","1"),
("3","Talleres","1"),
("4","Vigilantes","1"),
("5","Enlace Administración - Direccion","1"),
("6","Almacenes","1"),
("7","Enlace RRHH-Dirección","1"),
("8","Unidad Legal","1"),
("9","Evaluación y Acreencias","1"),
("10","Servicios de Salud y Seguridad en el Trabajo","1"),
("11","Coordinación de Informática","1"),
("12","Enlace de Planificación y Presupuesto","1"),
("13","Transporte","1"),
("14","Mercosur-Cooperación Técnica Internacional RSI","1"),
("15","Control Interno","1"),
("16","Dirección de Ingeniería Sanitaria","2"),
("17","Enlace Administrativo - DSR","3"),
("18","Dirección de Control de Vectores","4"),
("19","Laboratorio de Malacologia","4"),
("20","Dirección de Epidemiología","5"),
("21","Sala de Inspectores","5"),
("22","Sala Dibujo","5"),
("23","Coordinación Gestión de Medicamentos","5"),
("24","Sala Situacional","1"),
("25","Laboratorio de Malaria","5"),
("26","Laboratorio de Parasitología","5"),
("27","Laboratorio de Chagas","5"),
("28","Sin Asignar","6"),
("29","Enlace de Recursos Humanos","3"),
("30","Coordinación de Regulación y Control de Radiaciones","3"),
("31","Coordinación Vigilancia e Higiene de las Radiaciones","3");




CREATE TABLE `b3_departamentos` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dpto` varchar(255) COLLATE utf8_bin NOT NULL,
  `departamento_division_id` int(11) NOT NULL,
  PRIMARY KEY (`id_departamento`),
  KEY `dpto_division_fk` (`departamento_division_id`),
  CONSTRAINT `dpto_division_fk` FOREIGN KEY (`departamento_division_id`) REFERENCES `b2_divisiones` (`id_divisiones`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO b3_departamentos VALUES
("1","Despacho Dirección","1"),
("2","Mantenimiento Área I","2"),
("3","Mantenimiento Área II","2"),
("4","Mantenimiento Área III","2"),
("5","Talleres","3"),
("6","Vigilantes","4"),
("7","Bienes Nacionales","5"),
("8","Kardex","5"),
("9","Almacenes","6"),
("10","Secretaria","7"),
("11","Capacitación","7"),
("12","Jubilados","7"),
("13","Bienestar Social","7"),
("14","Nómina","7"),
("15","Archivo","7"),
("16","Registro y Control","7"),
("17","Seguro Social","7"),
("18","Unidad Legal","8"),
("19","Evaluación y Acreencias","9"),
("20","Servicios de Salud y Seguridad en el Trabajo","10"),
("21","Coordinación de Informática","11"),
("22","Enlace de Planificación y Presupuesto","12"),
("23","Transporte","13"),
("24","Mercosur-Cooperación Técnica Internacional RSI","14"),
("25","Control Interno","15"),
("26","Coordinacion de Residuos y Desechos","16"),
("27","Coordinación de Agua, Aire  y Edificaciones","16"),
("28","Coordinación Sustancia y Materiales","16"),
("29","Coordinación de Regulación y Control de Radiaciones\r\n","17"),
("30","Coordinación de Regulación y Control de Radia.. (verificar)\r\n","17"),
("31","Coordinación Protección e Higiene de las Radioaciones\r\n","17"),
("32","Coordinación Entomología en Salud Pública","18"),
("33","Coordinación de Foco Zoonoticos","18"),
("34","Coordinación de Control Operacional","18"),
("35","Coordinación de Control de Vectores","18"),
("36","Laboratorio de Malacologia","19"),
("37","Programa de Parasitosis","20"),
("38","Progarma de Chagas","20"),
("39","Programa de Malaria","20"),
("40","Sala de Inspectores","21"),
("41","Sala Dibujo","22"),
("42","Coordinación Gestión de Medicamentos","23"),
("43","Sala Situacional","24"),
("44","Laboratorio de Malaria","25"),
("45","Laboratorio de Parasitología","26"),
("46","Laboratorio de Chagas","27"),
("47","Sin Asignar","28"),
("70","Administracion","17"),
("71","Recursos Humanos","29"),
("72","Estadistica Radiologica","30"),
("73","Fiscalización","30"),
("74","Archivo","30"),
("75","Gestion de Desechos Radioactivos","30"),
("76","Departamento Informática (Dosimetria Externa)","31"),
("77","Dosimetria Ambiental","31"),
("78","Dosimetria Clinica y Auditoria de Equipos","31"),
("79","Registro Nacional de Dosimetria","31"),
("80","Correspondencia","1"),
("81","Diseño y Publicidad","1");




CREATE TABLE `c1_inventario_equipo` (
  `id_case` int(11) NOT NULL AUTO_INCREMENT,
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
  `notas_edicion` longtext COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_case`),
  KEY `ing_enca_inv_usr_fk` (`ing_encar_inv_id`),
  KEY `inv_equipo_dpto_fk` (`dpto_inv_id`),
  KEY `inv_equipo_division_fk` (`division_inv_id`),
  KEY `inv_equipo_direccion_fk` (`direccion_inv_id`),
  CONSTRAINT `ing_enca_inv_usr_fk` FOREIGN KEY (`ing_encar_inv_id`) REFERENCES `a1_usuarios` (`id_usuario`),
  CONSTRAINT `inv_equipo_direccion_fk` FOREIGN KEY (`direccion_inv_id`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `inv_equipo_division_fk` FOREIGN KEY (`division_inv_id`) REFERENCES `b2_divisiones` (`id_divisiones`),
  CONSTRAINT `inv_equipo_dpto_fk` FOREIGN KEY (`dpto_inv_id`) REFERENCES `b3_departamentos` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `c3_1_estado_soporte` (
  `id_estado_sop` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_estado_sop`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c3_1_estado_soporte VALUES
("1","En Espera"),
("2","En Proceso"),
("3","Finalizado"),
("4","Rechazado"),
("5","Rechazado Definitivo"),
("6","Falta Repuesto");




CREATE TABLE `c3_solicitudes_soportes` (
  `id_soporte` int(11) NOT NULL AUTO_INCREMENT,
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
  `historial_soporte` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_soporte`),
  KEY `id_equipo_soporte_fk` (`id_equipo_soporte`),
  KEY `tecnico_soporte_fk` (`tecnico_soporte_id`),
  KEY `estado_soporte_id` (`estado`),
  CONSTRAINT `estado_soporte_id_fk` FOREIGN KEY (`estado`) REFERENCES `c3_1_estado_soporte` (`id_estado_sop`),
  CONSTRAINT `id_equipo_soporte_fk` FOREIGN KEY (`id_equipo_soporte`) REFERENCES `c1_inventario_equipo` (`id_case`),
  CONSTRAINT `id_tecnico_soporte_fk` FOREIGN KEY (`tecnico_soporte_id`) REFERENCES `a1_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `c4_base_conocimiento` (
  `id_conocimiento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_conocimiento` varchar(45) COLLATE utf8_bin NOT NULL,
  `descripcion_caso` varchar(45) COLLATE utf8_bin NOT NULL,
  `posible_solucion` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_conocimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `d1_correspondencia` (
  `id_nro_admision` int(11) NOT NULL AUTO_INCREMENT,
  `nro_oficio` varchar(45) COLLATE utf8_bin NOT NULL,
  `fecha_sal_empresa` date NOT NULL,
  `procedencia` int(11) NOT NULL,
  `rif_corresp_emp` varchar(15) COLLATE utf8_bin NOT NULL,
  `asunto` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_llegada` datetime NOT NULL,
  `oficina_destino` int(11) NOT NULL,
  `coordi_destino` int(11) NOT NULL,
  PRIMARY KEY (`id_nro_admision`),
  KEY `procedencia_empr_fk` (`procedencia`),
  KEY `oficina_destino_fk` (`oficina_destino`),
  KEY `coordi_destino_fk` (`coordi_destino`),
  CONSTRAINT `coordi_destino_fk` FOREIGN KEY (`coordi_destino`) REFERENCES `b2_divisiones` (`id_divisiones`),
  CONSTRAINT `oficina_destino_fk` FOREIGN KEY (`oficina_destino`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `procedencia_empr_fk` FOREIGN KEY (`procedencia`) REFERENCES `d2_empresas_corresp` (`id_empresas`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `d2_empresas_corresp` (
  `id_empresas` int(11) NOT NULL AUTO_INCREMENT,
  `identificador_rif` varchar(5) COLLATE utf8_bin NOT NULL,
  `rif` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_empresa` varchar(45) COLLATE utf8_bin NOT NULL,
  `dedicacion` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_empresas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `d3_notificaciones_div` (
  `id_notificacion` int(11) NOT NULL AUTO_INCREMENT,
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
  `nota_final_corresp` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_notificacion`),
  KEY `id_correspondencia_fk` (`id_corresp`),
  KEY `id_empresa_correspon_fk` (`id_empresa_corresp`),
  KEY `id_correspon_division_fk` (`id_corres_divi`),
  KEY `id_jefe_division_corres_fk` (`Jefe_Corres`),
  KEY `id_correspon_direccion_fk` (`id_corres_dire`),
  KEY `id_estatus_nombres_fk` (`estatus_Corres`),
  CONSTRAINT `id_correspon_direccion_fk` FOREIGN KEY (`id_corres_dire`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `id_correspon_division_fk` FOREIGN KEY (`id_corres_divi`) REFERENCES `b2_divisiones` (`id_divisiones`),
  CONSTRAINT `id_correspondencia_fk` FOREIGN KEY (`id_corresp`) REFERENCES `d1_correspondencia` (`id_nro_admision`),
  CONSTRAINT `id_empresa_correspon_fk` FOREIGN KEY (`id_empresa_corresp`) REFERENCES `d2_empresas_corresp` (`id_empresas`),
  CONSTRAINT `id_estatus_nombres_fk` FOREIGN KEY (`estatus_Corres`) REFERENCES `d4_notificaciones_estatus` (`id_estatus_notifi`),
  CONSTRAINT `id_jefe_division_corres_fk` FOREIGN KEY (`Jefe_Corres`) REFERENCES `a1_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `d4_notificaciones_estatus` (
  `id_estatus_notifi` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estatus_notifi` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_estatus_notifi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d4_notificaciones_estatus VALUES
("1","En espera"),
("2","Confirmado"),
("3","Alerta"),
("4","Rechazado");




CREATE TABLE `e1_galerias` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_archivo` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `descripcion_archivo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_archivo` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_galeria_direccion` int(11) NOT NULL,
  `id_galeria_tipo` int(11) NOT NULL,
  `id_galeria_grupo` int(11) NOT NULL,
  `tipo_archivo` varchar(50) COLLATE utf8_bin NOT NULL,
  `visible` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_galeria`),
  KEY `id_galeria_direccion` (`id_galeria_direccion`),
  KEY `id_galeria_tipo` (`id_galeria_tipo`),
  KEY `id_galeria_grupo` (`id_galeria_grupo`),
  KEY `id_visible_estado` (`visible`),
  CONSTRAINT `id_galeria_direccion` FOREIGN KEY (`id_galeria_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `id_galeria_grupo` FOREIGN KEY (`id_galeria_grupo`) REFERENCES `e3_galerias_grupos` (`id_grupo`),
  CONSTRAINT `id_galeria_tipo` FOREIGN KEY (`id_galeria_tipo`) REFERENCES `e2_galerias_tipos` (`id_tipo`),
  CONSTRAINT `id_visible_estado` FOREIGN KEY (`visible`) REFERENCES `a4_estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e1_galerias VALUES
("55","Entrada Direccion General","Entrada al despacho de la Direccion General de Salud Ambiental DARK SOULS","../../assets/gallery/DSR/2024/1/12/7869d1_84edc10e4cec4d50a557cd1a6992aaa5~mv2.png","3","1","12","image/jpeg","1","","2024-02-04 17:29:52"),
("56","La verdad sobre el Ezequibo","Libro donde se nos revela la verdad sobre el ezequibo","../../assets/gallery/DGSA/2024/3/11/La_Verdad_del_Esequibo.pdf","1","3","11","application/pdf","1","","2024-02-04 21:33:52"),
("57","Nuestro Esequibo","","../../assets/gallery/DGSA/2024/3/11/Nuestro-Esequibo.pdf","1","3","11","application/pdf","1","","2024-02-03 10:13:14"),
("58","Despacho DGSA","El origen de la relación de esta especie con el ser humano se remonta al Neolítico, y concretamente en el marco del cambio de sociedades cazadoras-recolectoras a agricultoras-ganaderas. Algunos estudios revelan que las primeras gallinas y pollos domesticados pueden provenir de la India, hace más de 4000 años.\r\n\r\nSu presencia en la vida del hombre no es nueva. Los primeros restos datan del Neolítico, del año 6000 a. C. Fueron encontrados en la provincia china de Hebei y de ahí pasaron a Europa de la mano de los sumerios. En el Egipto de Tutmosis III 1500 a. C. ya hay constancia de avicultores, y en los tratados gastronómicos de la Roma del siglo i d. C.","../../assets/gallery/DGSA/2024/1/10/17159117_1113334618774902_6839481462901122206_o.jpg","1","1","10","image/jpeg","1","","2024-02-04 18:31:49"),
("59","Perro","En comparación con lobos de tamaño equivalente, los perros tienden a tener el cráneo un 20 % más pequeño y el cerebro un 10 % más pequeño, además de tener los dientes más pequeños que otras especies de cánidos.\r\n\r\n22​ El perro requiere menos calorías para vivir que el lobo. Su dieta de sobras de los humanos hizo que su cerebro grande y los músculos mandibulares utilizados en la caza dejaran de ser necesarios. Algunos expertos piensan que las orejas flácidas de los canes son el resultado de la atrofia de los músculos mandibulares.","../../assets/gallery/DGSA/2024/1/10/20221129_133535.jpg","1","1","10","image/jpeg","1","","2024-02-03 10:13:14"),
("60","DGSA Historia","cambiando imagen a","../../assets/gallery/DGSA/2024/1/10/83523002541-7.jpg","1","1","10","image/jpeg","1","","2024-02-05 01:01:17"),
("62","Zancudito","Zuncudo patas blancas","../../assets/gallery/DGSA/2024/2/10/Aedes Aegipty.mp4","1","2","10","video/mp4","1","","2024-02-04 19:33:34"),
("63","Docuento de Prueba","","../../assets/gallery/DEA/2024/3/13/14$ comprobante.pdf","3","3","13","application/pdf","1","2024-02-04","2024-02-04 20:49:41"),
("64","No empieces sin mi ","","../../assets/gallery/DGSA/2024/1/10/4348287962717159117_1113334618774902_6839481462901122206_o.jpg","6","1","10","image/jpeg","3","2024-02-04","2024-02-04 23:14:59"),
("65","Direccion General","AAAAAAAAAAAAAAA ONICHAAAAAAAN","../../assets/gallery/DGSA/2024/1/10/14819512785-25.jpeg","1","1","14","image/jpeg","1","2024-02-05","2024-02-05 01:05:05"),
("66","Destiny","","../../assets/gallery/DGSA/2024/1/14/49181727163-1.jpg","1","1","14","image/jpeg","1","2024-02-06","2024-02-06 18:52:58");




CREATE TABLE `e2_galerias_tipos` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `actualizacion_galeria_tipos` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e2_galerias_tipos VALUES
("1","Imagen","0000-00-00 00:00:00"),
("2","Video","0000-00-00 00:00:00"),
("3","Documento","0000-00-00 00:00:00");




CREATE TABLE `e3_galerias_grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo_galeria` varchar(200) COLLATE utf8_bin NOT NULL,
  `id_direccion_grupo` int(11) NOT NULL,
  `actualizacion_galeria_grupos` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_grupo`),
  KEY `id_direccion_grupo` (`id_direccion_grupo`),
  CONSTRAINT `id_direccion_grupo` FOREIGN KEY (`id_direccion_grupo`) REFERENCES `b1_direcciones` (`id_direcciones`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e3_galerias_grupos VALUES
("10","Dirección General Salud Ambiental","1","2024-02-05 00:24:32"),
("11","Libros Ezequibo","1","2024-02-05 00:24:32"),
("12","Radiaciones Ionizantes","3","2024-02-05 00:24:32"),
("13","Libros","5","2024-02-05 00:24:32"),
("14","Nuevo Grupo pp","1","2024-02-05 00:28:10");




CREATE TABLE `e4_boletines` (
  `id_boletin` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_actualizacion_bol` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_boletin`),
  KEY `id_usuario_boletin_fk` (`id_usuario_boletin`),
  KEY `id_boletin_visible_fk` (`boletin_visible`),
  KEY `id_boletin_direccion_fk` (`id_boletin_direccion`),
  CONSTRAINT `id_boletin_direccion_fk` FOREIGN KEY (`id_boletin_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `id_boletin_visible_fk` FOREIGN KEY (`boletin_visible`) REFERENCES `a4_estado` (`id_estado`),
  CONSTRAINT `id_usuario_boletin_fk` FOREIGN KEY (`id_usuario_boletin`) REFERENCES `a1_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e4_boletines VALUES
("5","9","5","Enfermedad del Chagas","../../assets/gallery/DEA/Boletin/Enfermedad del Chagas/Programa_Chagas.jpg","Panorama general\nLa enfermedad de Chagas, también llamada tripanosomiasis americana, es una enfermedad potencialmente mortal causada por el parásito protozoo Trypanosoma cruzi (T. cruzi). Se calcula que en el mundo hay entre seis y siete millones de personas infectadas por T. cruzi. La enfermedad se da sobre todo en zonas endémicas de 21 países de América Latina (1), donde se transmite a los seres humanos y otros mamíferos principalmente por las heces o la orina de los triatominos (vía vectorial), conocidos como vinchucas, chinches o con muchos otros nombres, según la zona geográfica.\n\nLa enfermedad lleva el nombre de Carlos Ribeiro Justiniano Chagas, el médico e investigador brasileño que la descubrió en 1909.","../../assets/gallery/DEA/Boletin/Enfermedad del Chagas/Programa_Esquistosomosis.jpg","Distribución\r\nInicialmente, la enfermedad de Chagas estaba confinada a las zonas rurales de la Región de las Américas (exceptuando las islas del Caribe). Debido principalmente a la mayor movilidad de la población en los últimos decenios, la mayoría de las personas infectadas viven hoy en entornos urbanos, y se han ido detectando cada vez más casos en los Estados Unidos de América y el Canadá, en muchos países de Europa y en algunos de África, el Mediterráneo Oriental y el Pacífico Occidental.","../../assets/gallery/DEA/Boletin/Enfermedad del Chagas/Programa_Malaria.jpg","Transmisión\r\nEn América Latina, el parásito T. cruzi se transmite principalmente por contacto con las heces o la orina infectadas de triatominos que se alimentan de sangre. Por lo general, esos insectos viven en las grietas y los huecos de paredes y tejados de casas y estructuras exteriores, como gallineros, corrales y almacenes, en zonas rurales y suburbanas. Normalmente permanecen ocultos durante el día y entran en actividad por la noche para alimentarse de la sangre de mamíferos, entre ellos los humanos. En general, pican en zonas expuestas de la piel, como la cara, y defecan/orinan cerca de la picadura. Los parásitos penetran en el organismo cuando la persona que ha sufrido la picadura se frota instintivamente, haciendo que las heces o la orina entren en contacto con la picadura, los ojos, la boca o alguna lesión cutánea abierta.","1","2024-02-03","2024-02-03 16:14:26"),
("6","9","5","Malaria o Paludismo","../../assets/gallery/DGSA/Boletin/Malaria o Paludismo/Boletín_DAE.png","El paludismo es una enfermedad potencialmente mortal, presente principalmente en los países tropicales. Se trata de una enfermedad prevenible y curable. Sin embargo, sin un diagnóstico rápido y un tratamiento eficaz, un caso de paludismo no complicado puede evolucionar a una forma grave de la enfermedad, que a menudo es mortal si no se trata.\r\n\r\n","../../assets/gallery/DGSA/Boletin/Malaria o Paludismo/Programa_Chagas.jpg","Los primeros síntomas del paludismo suelen darse entre 10 y 15 días después de la picadura de un mosquito infectado. Por lo general se tiene fiebre, dolor de cabeza y escalofríos, aunque estos síntomas pueden ser leves y es difícil atribuirlos al paludismo. En las zonas con paludismo endémico, las personas que han desarrollado una inmunidad parcial pueden infectarse pero no experimentar síntomas (infecciones asintomáticas).\r\n","../../assets/gallery/DGSA/Boletin/Malaria o Paludismo/Programa_Esquistosomosis.jpg","La visión de la OMS y de la comunidad mundial interesada en esta enfermedad es un mundo sin paludismo. Esta visión se logrará progresivamente a medida que los países eliminen el paludismo de sus territorios y apliquen medidas eficaces para prevenir el restablecimiento de la transmisión.","1","2024-02-03","2024-02-03 14:57:49"),
("7","9","4","Malaria","../../assets/gallery/DCVRFN/Boletin/Malaria/Malaria.JPG","La malaria es la enfermedad parasitaria más importante en el mundo, debido a su amplia distribución geográfica, morbilidad, mortalidad e impacto socio-económico que produce en los países afectados por la misma (WHO,1997), considerándose uno de los mayores problemas de salud pública en el mundo, estimándose que el total de casos clínicos pueden alcanzar entre 300 a 500 millones al año (WHO,1994) y ocasionar entre 3 a 5 millones de muertes.","../../assets/gallery/DCVRFN/Boletin/Malaria/malaria-transmission-cycle.webp","Los parásitos Plasmodium vivax y P. falciparum son los más comunes en la malaria, mientras que la P. malariae y P. ovale son parásitos menos conocidos. De todos estos, la infección adquirida por P. falciparum es la más fatal si no es tratada a tiempo y podría tener serias complicaciones renales y cerebrales, e inclusive la muerte. La Cloroquina fue el tratamiento de elección para la malaria y es aún usado en la mayoría de los países para el tratamiento de P. vivax, sin embargo, el parásito P. falciparum ha desarrollado una muy diseminada resistencia a este medicamento, y actualmente se recomienda una terapia de combinación basada en la Artemisinina, como tratamiento principal contra este parásito. Entre las medidas preventivas se recomienda el uso de mosquiteros impregnados con insecticida y rociado interno residual de los insecticidas; sus funciones consisten en disminuir el riesgo de las picaduras de los mosquitos infectados.","../../assets/gallery/DCVRFN/Boletin/Malaria/Aedes Aegipty.mp4","El Plan de Acción para la Eliminación de la Malaria 2021-2025 ha sido desarrollado en consulta con los países y socios regionales como un marco de  referencia para guiar los esfuerzos de los países y las contribuciones de los donantes y socios hacia la eliminación de la enfermedad en las Américas. \r\nEl documento busca orientar los planes nacionales y promover un enfoque interprogramático-intersectorial, así como esfuerzos conjuntos entre países y socios.\r\nEl Plan promueve una acción sistemática de detección, diagnóstico y respuesta, que debe ser implementada masivamente y monitoreada programáticamente.\r\nEn el documento se remarca la necesidad de abordar los focos clave de malaria en cada país con soluciones operativas específicas y basadas en la información.","1","2024-02-03","2024-02-03 17:52:45"),
("8","9","4","Malito","../../assets/gallery/DCVRFN/Boletin/Malito/Malaria.JPG","El Plan de Acción para la Eliminación de la Malaria 2021-2025 ha sido desarrollado en consulta con los países y socios regionales como un marco de  referencia para guiar los esfuerzos de los países y las contribuciones de los donantes y socios hacia la eliminación de la enfermedad en las Américas. \r\nEl documento busca orientar los planes nacionales y promover un enfoque interprogramático-intersectorial, así como esfuerzos conjuntos entre países y socios.\r\nEl Plan promueve una acción sistemática de detección, diagnóstico y respuesta, que debe ser implementada masivamente y monitoreada programáticamente.\r\nEn el documento se remarca la necesidad de abordar los focos clave de malaria en cada país con soluciones operativas específicas y basadas en la información.","","","","","1","2024-02-03","2024-02-04 01:16:34"),
("9","9","4","Hylesia","../../assets/gallery/DCVRFN/Boletin/Hylesia/Hylesia.JPG","Hylesia metabus (Cramer, 1.775), es una mariposa nocturna (Lepidoptera: Saturniidae), conocida como Palometa Peluda, la misma se encuentra distribuida en el nor-este de Venezuela, principalmente en los estados Sucre, Delta Amacuro y Monagas. Este insecto posee en el abdomen espículas urticantes que al entrar en contacto con la piel del ser humano y partirse libera una sustancia urticante responsable de causar prolongadas dermatitis y reacciones alérgicas conocidas como Lepidopterismo.","../../assets/gallery/DCVRFN/Boletin/Hylesia/palometa.jpg","El presente trabajo tuvo como propósito caracterizar los conocimientos y prácticas de los pobladores de Capure (municipio Pedernales - estado Delta Amacuro) sobre la mariposa H. metabus y el lepidopterismo asociado, con la finalidad de contribuir en la construcción de un marco de referencia con enfoque local, étnico e integral para implementar actividades de educación y promoción en el control de la mariposa H. metabus, considerando que la expresión del conocimiento en la comunidad es variada y tiene que ver con la cotidianidad de la vida de la población, marcada por su herencia, carga socio-cultural y vivencias (Bello & Marcano, 1998), en especial en Capure donde convergen población criolla e indígenas Warao en un interesante proceso intercultural de convivencia y sincretismo.","../../assets/gallery/DCVRFN/Boletin/Hylesia/Diseno-sin-titulo-4-3-1.png","El universo estudiado estuvo conformado por personas de 10 años de edad y más, residenciados en la comunidad, que totalizaron 637 habitantes: 584 criollos (91,7%) y 53 indígenas Warao (8,3%). La muestra fue calculada a través del software EpiInfo v.6.04, empleando la fórmula para estudios descriptivos y muestras aleatorias simples, con la utilización de 637 personas como tamaño de la población, prevalencia esperada de 85% (Rísquez et al., 1998), escenario desfavorable 75%, nivel de confianza 95% y error de muestreo 5%, con la obtención de 45 personas a encuestar. Se realizó muestreo aleatorio por conglomerados, se dividió proporcionalmente la muestra en dos conglomerados según grupo poblacional, con 41 cuestionarios para criollos y 4 para los indígenas Warao, seleccionados al azar empleando tablas de números aleatorios distintas.","1","2024-02-03","2024-02-03 17:54:34"),
("10","9","2","Importanciade la Ingeneria Sanitaria","../../assets/gallery/DIS/Boletin/Importanciade la Ingeneria Sanitaria/Ingenieria-Sanitaria.jpg","La ingeniería sanitaria, por su importancia, es considerada en muchos países como una carrera separada, en otros países es considerada una especialización de la ingeniería hidráulica. Se ocupa de diseñar, construir y operar: Sistemas de abastecimiento de agua potable, en todos sus componentes, destinados a la captación, del agua desde ríos o lagos, relacionándose aquí con la ingeniería fluvial, hasta la distribución del agua potabilizada a los usuarios. Sistemas de alcantarillado sanitario y plantas de tratamiento de aguas servidas, incluyendo las estructuras destinadas a la devolución del agua ya tratada adecuadamente al ambiente. Sistemas de gestión integral de residuos sólidos.","../../assets/gallery/DIS/Boletin/Importanciade la Ingeneria Sanitaria/","","../../assets/gallery/DIS/Boletin/Importanciade la Ingeneria Sanitaria/","","1","2024-02-03","2024-02-03 18:30:36"),
("11","9","3","Protección Radiológica","../../assets/gallery/DSR/Boletin/Protección Radiológica/radiacion.png","Es la radiactividad natural, es decir, la presencia de varios elementos radiactivos que se encuentran en el aire, en los suelos, en las plantas o en el agua. Representa el 60% de la radiactividad a la que estamos expuestos normalmente.\r\n\r\nLaprotección radiológica es el conjunto de medidas establecidas por los organismos competentes para la utilización segura de las radiaciones ionizantes de sus descendientes, de la población en su conjunto, así como del medio ambiente, frente a los posibles riesgos que se deriven de la exposición a las radiaciones ionizantes.\r\n\r\nEs la técnica que se emplea para medir la exposición a la radiación ionizante. Se encarga de medir la absorción que realizan los tejidos corporales de esta radiación.","","","","","1","2024-02-03","2024-02-04 01:05:56"),
("12","9","6","Formación Dark","../../assets/gallery/DEA/Boletin/Formación Dark/blood.jpg","","","","","","3","2024-02-03","2024-02-04 18:47:21"),
("13","9","3","Radiología","../../assets/gallery/DSR/Boletin/Radiología/historia1.jpg","Cualquier info sobre radiologia","","","","","1","2024-02-03","2024-02-03 22:36:21"),
("14","9","1","Boletin DGSA","../../assets/gallery/DGSA/Boletin/Boletin DGSA/819222.jpg","Dark Souls es el mejor juego de la fuking historia","../../assets/gallery/DGSA/Boletin/Boletin DGSA/blood.jpg","Vivan las guardianas de fuego que son super excitantes","../../assets/gallery/DGSA/Boletin/Boletin DGSA/819222.jpg","Ojala y encontrarse una waifu como ellas","1","2024-02-04","2024-02-04 18:29:49"),
("15","9","6","Prueba de imagen","../../assets/gallery/DGSA/Boletin/Prueba de imagen/-80288574203-Proyecto_IMG_1.png","","","","","","3","2024-02-04","2024-02-04 22:07:55"),
("16","9","1","Otra prueba mi pana","../../assets/gallery/DGSA/Boletin/Otra prueba mi pana/-63031983794-Proyecto_IMG_1.png","VAMOOOOOOOOOOOOOSSSSS","","","","","1","2024-02-04","2024-02-04 21:58:30");




CREATE TABLE `e5_instrumentos_legales` (
  `id_instrumento_legal` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_instrumento` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_instrumento` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_instrumento_direccion` int(11) NOT NULL,
  `id_instrumento_grupo` int(11) NOT NULL,
  `id_instrumento_tipo` int(11) NOT NULL,
  `instrumento_visible` int(11) NOT NULL,
  `fecha_creacion_instrumento` date NOT NULL,
  `fecha_actualizacion_instrumento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_instrumento_legal`),
  KEY `id_instrumento_dir_fk` (`id_instrumento_direccion`),
  KEY `id_instrumento_grupo_fk` (`id_instrumento_grupo`),
  KEY `id_instrumento_tipo_fk` (`id_instrumento_tipo`),
  KEY `id_instrumento_visible_fk` (`instrumento_visible`),
  CONSTRAINT `id_instrumento_dir_fk` FOREIGN KEY (`id_instrumento_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `id_instrumento_grupo_fk` FOREIGN KEY (`id_instrumento_grupo`) REFERENCES `e7_grupos_instrumentos` (`id_grup_instrumento`),
  CONSTRAINT `id_instrumento_tipo_fk` FOREIGN KEY (`id_instrumento_tipo`) REFERENCES `e6_tipos_instrumentos` (`id_tipo_instrumento`),
  CONSTRAINT `id_instrumento_visible_fk` FOREIGN KEY (`instrumento_visible`) REFERENCES `a4_estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e5_instrumentos_legales VALUES
("1","Circular Medicamentos 2015","../../assets/documents/DEA/2024/Instrumentos/1/2/circular de medicamento 2015.pdf","6","2","1","3","2024-02-03","2024-02-05 00:20:04"),
("2","Circular Gestión de Medicamentos","../../assets/documents/DEA/2024/Instrumentos/1/2/Circular de Gestión de Medicamentos 2016.pdf","5","1","3","1","2024-02-03","2024-02-05 00:20:25"),
("5","Agua Potable","../../assets/documents/DIS/2024/Instrumentos/3/7/Equipos de Agua Potable.pdf","2","7","3","1","2024-02-04","2024-02-04 11:19:52"),
("6","Aguas Residuales","../../assets/documents/DIS/2024/Instrumentos/3/7/Importacion de aguas residuales.pdf","2","7","3","1","2024-02-04","2024-02-04 11:21:08"),
("7","Procedimiento Certificados","../../assets/documents/DSR/2024/Instrumentos/4/8/Procedimiento Solicitud Certificaciones.pdf","3","8","4","1","2024-02-04","2024-02-04 11:24:28"),
("8","Resolucion 401","../../assets/documents/DSR/2024/Instrumentos/5/9/Resolucion 401.pdf","3","9","5","1","2024-02-04","2024-02-04 11:26:05"),
("12","Triatominos","../../assets/documents/DCV/2024/Instrumentos/1/3/Circular 00018 TRIATOMINOS.pdf","4","3","1","1","2024-02-04","2024-02-04 14:01:04");




CREATE TABLE `e6_tipos_instrumentos` (
  `id_tipo_instrumento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_instrumento` varchar(45) COLLATE utf8_bin NOT NULL,
  `actualizacion_tipo_instrumento` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_instrumento`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e6_tipos_instrumentos VALUES
("1","Circulares","0"),
("2","Protocolos","0"),
("3","Formatos","0"),
("4","Manuales","0"),
("5","Leyes","0"),
("6","Instrumento Experimental","0"),
("7","Pollos","0");




CREATE TABLE `e7_grupos_instrumentos` (
  `id_grup_instrumento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grup_instrumento` varchar(150) COLLATE utf8_bin NOT NULL,
  `id_grupo_instr_direc` int(11) NOT NULL,
  `actualizacion_grupo_instrumento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_grup_instrumento`),
  KEY `id_grup_instr_dire_fk` (`id_grupo_instr_direc`),
  CONSTRAINT `id_grup_instr_dire_fk` FOREIGN KEY (`id_grupo_instr_direc`) REFERENCES `b1_direcciones` (`id_direcciones`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO e7_grupos_instrumentos VALUES
("1","Procedimiento usuario de Certificacion e Importancia, ambiente y permiso","3","2024-02-05 00:23:06"),
("2","Medicamentos","5","2024-02-05 00:23:06"),
("3","Triatominos","4","2024-02-05 00:23:06"),
("6","Historial Clínico","4","2024-02-05 00:23:06"),
("7","Aguas","2","2024-02-05 00:23:06"),
("8","Procedimientos","3","2024-02-05 00:23:06"),
("9","Leyes de Protección Radiológica","3","2024-02-05 00:23:06"),
("10","Aguas residuales","2","2024-02-05 00:23:06"),
("11","Mas actual","2","2024-02-05 00:25:34");




CREATE TABLE `f1_coordinaciones_web` (
  `id_coordinacion_web` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_actualizacion_coord` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_coordinacion_web`),
  KEY `id_coord_direccion_fk` (`id_coord_direccion`),
  KEY `id_coord_usuario_fk` (`id_coord_usuario`),
  KEY `id_coord_visible` (`id_coord_visible`),
  CONSTRAINT `id_coord_direccion_fk` FOREIGN KEY (`id_coord_direccion`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `id_coord_usuario_fk` FOREIGN KEY (`id_coord_usuario`) REFERENCES `a1_usuarios` (`id_usuario`),
  CONSTRAINT `id_coord_visible` FOREIGN KEY (`id_coord_visible`) REFERENCES `a4_estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;






CREATE TABLE `z1_historial_camb_sis` (
  `id_historial_cambios` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario_cambio` int(11) NOT NULL,
  `id_accion_cambio` int(11) NOT NULL,
  `entidad_cambio` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_usuario_cambio` datetime DEFAULT NULL,
  `descripcion_cambio` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_historial_cambios`),
  KEY `id_usuario_cambio_fk` (`id_usuario_cambio`),
  KEY `id_accion_cambio_fk` (`id_accion_cambio`),
  CONSTRAINT `id_accion_cambio_fk` FOREIGN KEY (`id_accion_cambio`) REFERENCES `z2_historial_acciones` (`id_accHis`),
  CONSTRAINT `id_usuario_cambio_fk` FOREIGN KEY (`id_usuario_cambio`) REFERENCES `a1_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO z1_historial_camb_sis VALUES
("1","9","1","27146430","2024-02-02 17:09:04","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-27146430. Dicho empleado se ha registrado como trabajador en: Coordinación de Informática"),
("2","9","1","27146430","2024-02-02 17:09:16","El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad."),
("3","9","3","27146430","2024-02-02 17:09:33","Ingreso del Usuario: Jesus Castillo."),
("4","9","4","27146430","2024-02-02 17:09:36","Salida del sistema del Usuario: Jesus Castillo."),
("5","9","3","27146430","2024-02-02 17:31:04","Ingreso del Usuario: Jesus Castillo."),
("6","9","4","27146430","2024-02-02 17:31:09","Salida del sistema del Usuario: Jesus Castillo."),
("7","9","3","27146430","2024-02-02 17:59:53","Ingreso del Usuario: Jesus Castillo."),
("8","10","1","271464300","2024-02-02 18:31:42","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Carla Lopez, cédula V-271464300. Dicho empleado se ha registrado como trabajador en: Despacho Dirección"),
("9","10","1","271464300","2024-02-02 18:31:57","El usuario Carla Lopez, finalizó el registro las preguntas de seguridad."),
("10","9","2","271464300","2024-02-02 18:34:47","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Carla Lopez, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Secretario. Cambios realizados."),
("11","9","4","27146430","2024-02-02 18:34:54","Salida del sistema del Usuario: Jesus Castillo."),
("12","10","3","271464300","2024-02-02 18:35:08","Ingreso del Usuario: Carla Lopez."),
("13","10","4","271464300","2024-02-02 18:40:41","Salida del sistema del Usuario: Carla Lopez."),
("14","11","1","271464301","2024-02-02 18:41:30","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-271464301. Dicho empleado se ha registrado como trabajador en: Despacho Dirección"),
("15","11","1","271464301","2024-02-02 18:41:41","El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad."),
("16","9","3","27146430","2024-02-02 18:41:48","Ingreso del Usuario: Jesus Castillo."),
("17","9","2","271464301","2024-02-02 18:41:57","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Jesus Castillo, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Secretario. Cambios realizados."),
("18","9","4","27146430","2024-02-02 18:42:01","Salida del sistema del Usuario: Jesus Castillo."),
("19","11","3","271464301","2024-02-02 18:42:05","Ingreso del Usuario: Jesus Castillo."),
("20","11","4","271464301","2024-02-02 18:42:11","Salida del sistema del Usuario: Jesus Castillo."),
("21","9","3","27146430","2024-02-02 18:44:38","Ingreso del Usuario: Jesus Castillo."),
("22","9","4","27146430","2024-02-02 18:44:50","Salida del sistema del Usuario: Jesus Castillo."),
("23","10","3","271464300","2024-02-02 18:44:52","Ingreso del Usuario: Carla Lopez."),
("24","10","4","271464300","2024-02-02 18:49:32","Salida del sistema del Usuario: Carla Lopez."),
("25","10","3","271464300","2024-02-02 19:13:21","Ingreso del Usuario: Carla Lopez."),
("26","10","18","Registro de Grupo de Galería, en Imágenes/Videos","2024-02-02 19:19:38","Nuevo registro de Grupo, para la categorías de la Galería de la Página Web. Registro realizado por: Carla Lopez"),
("27","10","19","Registro de  en la Dir. General.","2024-02-02 19:19:55","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg; realizado por: Carla Lopez"),
("28","10","21","Identificador de la Imagen/Video: 55","2024-02-02 19:23:56","El usuario: Carla Lopez realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Visibilidad cambió de: Activo a: Inactivo. Cambios realizados."),
("29","10","18","Registro de Grupo de Galería, en Imágenes/Videos","2024-02-02 19:32:03","Nuevo registro de Grupo, para la categorías de la Galería de la Página Web. Registro realizado por: Carla Lopez"),
("30","10","21","Registro de  en la Dir. General.","2024-02-02 19:32:30","Nuevo registro de Documento en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/3/11/La_Verdad_del_Esequibo.pdf; realizado por: Carla Lopez"),
("31","10","4","271464300","2024-02-02 19:49:26","Salida del sistema del Usuario: Carla Lopez."),
("32","10","3","271464300","2024-02-02 20:04:41","Ingreso del Usuario: Carla Lopez."),
("33","10","21","Registro de  en la Dir. General.","2024-02-02 20:05:02","Nuevo registro de Documento en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/3/11/Nuestro-Esequibo.pdf; realizado por: Carla Lopez"),
("34","10","4","271464300","2024-02-02 20:33:46","Salida automática del sistema, del Usuario: ."),
("35","10","4","271464300","2024-02-02 20:41:43","Salida del sistema del Usuario: Carla Lopez."),
("36","10","3","271464300","2024-02-02 21:23:06","Ingreso del Usuario: Carla Lopez."),
("37","10","4","271464300","2024-02-02 21:41:13","Salida del sistema del Usuario: Carla Lopez."),
("38","10","3","271464300","2024-02-02 21:51:50","Ingreso del Usuario: Carla Lopez."),
("39","10","4","271464300","2024-02-02 22:47:27","Salida del sistema del Usuario: Carla Lopez."),
("40","10","3","271464300","2024-02-02 23:50:24","Ingreso del Usuario: Carla Lopez."),
("41","10","19","Registro de  en la Dir. General.","2024-02-02 23:52:47","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg; realizado por: Carla Lopez"),
("42","10","19","Registro de  en la Dir. General.","2024-02-02 23:59:53","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/10/20221129_133535.jpg; realizado por: Carla Lopez"),
("43","10","4","271464300","2024-02-03 00:09:39","Salida automática del sistema, del Usuario: ."),
("44","10","4","271464300","2024-02-03 00:33:13","Salida del sistema del Usuario: Carla Lopez."),
("45","10","3","271464300","2024-02-03 10:23:12","Ingreso del Usuario: Carla Lopez."),
("46","10","4","271464300","2024-02-03 10:34:27","Salida del sistema del Usuario: Carla Lopez."),
("47","10","3","271464300","2024-02-03 10:42:52","Ingreso del Usuario: Carla Lopez."),
("48","10","4","271464300","2024-02-03 10:51:39","Salida del sistema del Usuario: Carla Lopez."),
("49","9","3","27146430","2024-02-03 10:51:41","Ingreso del Usuario: Jesus Castillo."),
("50","9","4","27146430","2024-02-03 10:53:37","Salida del sistema del Usuario: Jesus Castillo."),
("51","9","3","27146430","2024-02-03 10:53:40","Ingreso del Usuario: Jesus Castillo."),
("52","9","4","27146430","2024-02-03 11:21:17","Salida automática del sistema, del Usuario: ."),
("54","9","3","27146430","2024-02-03 11:25:03","Ingreso del Usuario: Jesus Castillo."),
("55","9","4","27146430","2024-02-03 11:30:34","Salida del sistema del Usuario: Jesus Castillo."),
("56","11","3","271464301","2024-02-03 11:30:36","Ingreso del Usuario: Jesus Castillo."),
("57","11","4","271464301","2024-02-03 11:31:02","Salida del sistema del Usuario: Jesus Castillo."),
("58","9","3","27146430","2024-02-03 11:31:06","Ingreso del Usuario: Jesus Castillo."),
("59","9","4","27146430","2024-02-03 11:31:13","Salida del sistema del Usuario: Jesus Castillo."),
("60","11","3","271464301","2024-02-03 11:31:16","Ingreso del Usuario: Jesus Castillo."),
("61","11","4","271464301","2024-02-03 11:32:56","Salida del sistema del Usuario: Jesus Castillo."),
("62","10","3","271464300","2024-02-03 11:32:59","Ingreso del Usuario: Carla Lopez."),
("63","10","4","271464300","2024-02-03 11:33:09","Salida del sistema del Usuario: Carla Lopez."),
("64","12","1","271464303","2024-02-03 11:33:58","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Carlos Cast, cédula V-271464303. Dicho empleado se ha registrado como trabajador en: Despacho Dirección"),
("65","12","1","271464303","2024-02-03 11:34:18","El usuario Carlos Cast, finalizó el registro las preguntas de seguridad."),
("66","9","3","27146430","2024-02-03 11:34:23","Ingreso del Usuario: Jesus Castillo."),
("67","9","2","271464303","2024-02-03 11:34:34","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Carlos Cast, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Jefe de Coordinación. Cambios realizados."),
("68","9","4","27146430","2024-02-03 11:34:39","Salida del sistema del Usuario: Jesus Castillo."),
("69","12","3","271464303","2024-02-03 11:34:42","Ingreso del Usuario: Carlos Cast."),
("70","12","4","271464303","2024-02-03 11:35:42","Salida del sistema del Usuario: Carlos Cast."),
("71","13","1","271464305","2024-02-03 11:36:34","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-271464305. Dicho empleado se ha registrado como trabajador en: Dirección de Ingeniería Sanitaria"),
("72","13","1","271464305","2024-02-03 11:36:47","El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad."),
("73","9","3","27146430","2024-02-03 11:36:54","Ingreso del Usuario: Jesus Castillo."),
("74","9","2","271464305","2024-02-03 11:37:05","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Jesus Castillo, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Jefe de Coordinación. Cambios realizados."),
("75","9","4","27146430","2024-02-03 11:37:08","Salida del sistema del Usuario: Jesus Castillo."),
("76","13","3","271464305","2024-02-03 11:37:14","Ingreso del Usuario: Jesus Castillo."),
("77","13","4","271464305","2024-02-03 11:37:55","Salida del sistema del Usuario: Jesus Castillo."),
("78","9","3","27146430","2024-02-03 11:37:59","Ingreso del Usuario: Jesus Castillo."),
("79","12","4","271464303","2024-02-03 11:40:42","Salida automática del sistema, del Usuario: ."),
("80","9","4","27146430","2024-02-03 12:14:17","Salida automática del sistema, del Usuario: ."),
("81","9","4","27146430","2024-02-03 12:14:19","Salida del sistema del Usuario: Jesus Castillo."),
("82","9","3","27146430","2024-02-03 12:24:40","Ingreso del Usuario: Jesus Castillo."),
("83","9","4","27146430","2024-02-03 13:04:23","Salida automática del sistema, del Usuario: ."),
("85","9","3","27146430","2024-02-03 13:13:16","Ingreso del Usuario: Jesus Castillo."),
("86","9","23","Nuevo Boletín Informativo en la Dir. Epidemiología Ambiental.","2024-02-03 13:38:04","Nuevo registro de Boletín Informativo en la Dir. Epidemiología Ambiental, guardada con el nombre de: Primer Boletin Informativo; realizado por: Jesus Castillo"),
("87","9","23","Nuevo Boletín Informativo en la Dir. Epidemiología Ambiental.","2024-02-03 13:40:19","Nuevo registro de Boletín Informativo en la Dir. Epidemiología Ambiental, guardada con el nombre de: Enfermedad del Chagas; realizado por: Jesus Castillo"),
("88","9","23","Nuevo Boletín Informativo en la Dir. Epidemiología Ambiental.","2024-02-03 13:45:14","Nuevo registro de Boletín Informativo en la Dir. Epidemiología Ambiental, guardada con el nombre de: Enfermedad del Chagas; realizado por: Jesus Castillo"),
("89","9","23","Nuevo Boletín Informativo en la Dir. General.","2024-02-03 13:49:11","Nuevo registro de Boletín Informativo en la Dir. General, guardada con el nombre de: Historia; realizado por: Jesus Castillo"),
("90","9","19","Registro de  en la Dir. General.","2024-02-03 14:00:29","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/10/inicio4.jpeg; realizado por: Jesus Castillo"),
("91","9","23","Nuevo Boletín Informativo en la Dir. Epidemiología Ambiental.","2024-02-03 14:03:25","Nuevo registro de Boletín Informativo en la Dir. Epidemiología Ambiental, guardada con el nombre de: Enfermedad del Chagas; realizado por: Jesus Castillo"),
("92","9","4","27146430","2024-02-03 14:07:17","Salida del sistema del Usuario: Jesus Castillo."),
("93","9","3","27146430","2024-02-03 14:49:16","Ingreso del Usuario: Jesus Castillo."),
("94","9","23","Nuevo Boletín Informativo en la Dir. General.","2024-02-03 14:56:53","Nuevo registro de Boletín Informativo en la Dir. General, guardada con el nombre de: Malaria o Paludismo; realizado por: Jesus Castillo"),
("95","9","4","27146430","2024-02-03 15:02:00","Salida automática del sistema, del Usuario: ."),
("96","9","4","27146430","2024-02-03 15:06:24","Salida del sistema del Usuario: Jesus Castillo."),
("97","9","3","27146430","2024-02-03 17:47:35","Ingreso del Usuario: Jesus Castillo."),
("98","9","23","Nuevo Boletín Informativo en la Dir. Control de Vectores.","2024-02-03 17:49:49","Nuevo registro de Boletín Informativo en la Dir. Control de Vectores, guardada con el nombre de: Malaria; realizado por: Jesus Castillo"),
("99","9","23","Nuevo Boletín Informativo en la Dir. Control de Vectores.","2024-02-03 17:52:05","Nuevo registro de Boletín Informativo en la Dir. Control de Vectores, guardada con el nombre de: Malito; realizado por: Jesus Castillo"),
("100","9","23","Nuevo Boletín Informativo en la Dir. Control de Vectores.","2024-02-03 17:54:34","Nuevo registro de Boletín Informativo en la Dir. Control de Vectores, guardada con el nombre de: Hylesia; realizado por: Jesus Castillo"),
("101","9","4","27146430","2024-02-03 17:56:13","Salida automática del sistema, del Usuario: ."),
("102","9","4","27146430","2024-02-03 17:57:26","Salida del sistema del Usuario: Jesus Castillo.");
INSERT INTO z1_historial_camb_sis VALUES
("103","9","3","27146430","2024-02-03 18:29:49","Ingreso del Usuario: Jesus Castillo."),
("104","9","23","Nuevo Boletín Informativo en la Dir. Ing. Sanitaria.","2024-02-03 18:30:36","Nuevo registro de Boletín Informativo en la Dir. Ing. Sanitaria, guardada con el nombre de: Importanciade la Ingeneria Sanitaria; realizado por: Jesus Castillo"),
("105","9","4","27146430","2024-02-03 18:32:18","Salida del sistema del Usuario: Jesus Castillo."),
("106","9","3","27146430","2024-02-03 18:50:26","Ingreso del Usuario: Jesus Castillo."),
("107","9","23","Nuevo Boletín Informativo en la Dir. Salud Radiologica.","2024-02-03 18:55:46","Nuevo registro de Boletín Informativo en la Dir. Salud Radiologica, guardada con el nombre de: Protección Radiológica; realizado por: Jesus Castillo"),
("108","9","4","27146430","2024-02-03 18:56:09","Salida del sistema del Usuario: Jesus Castillo."),
("109","9","3","27146430","2024-02-03 19:43:54","Ingreso del Usuario: Jesus Castillo."),
("110","9","23","Nuevo Boletín Informativo en la Dir. Epidemiología Ambiental.","2024-02-03 19:45:25","Nuevo registro de Boletín Informativo en la Dir. Epidemiología Ambiental, guardada con el nombre de: Formación Dark; realizado por: Jesus Castillo"),
("111","9","4","27146430","2024-02-03 19:55:11","Salida del sistema del Usuario: Jesus Castillo."),
("112","9","3","27146430","2024-02-03 20:01:13","Ingreso del Usuario: Jesus Castillo."),
("113","9","26","Registro de Grupo de Instrumentos Legales","2024-02-03 21:26:23","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("114","9","27","Registro de nuevo Tipo de Instrumentos Legales","2024-02-03 21:50:02","Nuevo registro de Tipo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("115","9","4","27146430","2024-02-03 22:00:44","Salida automática del sistema, del Usuario: ."),
("116","9","4","27146430","2024-02-03 22:09:29","Salida del sistema del Usuario: Jesus Castillo."),
("117","9","3","27146430","2024-02-03 22:35:35","Ingreso del Usuario: Jesus Castillo."),
("118","9","23","Nuevo Boletín Informativo en la Dir. Salud Radiologica.","2024-02-03 22:36:21","Nuevo registro de Boletín Informativo en la Dir. Salud Radiologica, guardada con el nombre de: Radiología; realizado por: Jesus Castillo"),
("119","9","4","27146430","2024-02-03 22:44:41","Salida del sistema del Usuario: Jesus Castillo."),
("120","9","3","27146430","2024-02-03 22:56:22","Ingreso del Usuario: Jesus Castillo."),
("121","9","26","Registro de Grupo de Instrumentos Legales","2024-02-03 22:57:26","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("122","9","28","Registro de , en la Dir. Epidemiología Ambiental.","2024-02-03 23:01:12","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Epidemiología Ambiental; realizado por: Jesus Castillo"),
("123","9","28","Registro de , en la Dir. Epidemiología Ambiental.","2024-02-03 23:03:56","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Epidemiología Ambiental; realizado por: Jesus Castillo"),
("124","9","4","27146430","2024-02-03 23:04:00","Salida del sistema del Usuario: Jesus Castillo."),
("125","9","3","27146430","2024-02-04 11:12:38","Ingreso del Usuario: Jesus Castillo."),
("126","9","26","Registro de Grupo de Instrumentos Legales","2024-02-04 11:13:17","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("127","9","28","Registro de , en la Dir. Control de Vectores.","2024-02-04 11:13:33","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Control de Vectores; realizado por: Jesus Castillo"),
("128","9","26","Registro de Grupo de Instrumentos Legales","2024-02-04 11:16:37","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("129","9","28","Registro de , en la Dir. Control de Vectores.","2024-02-04 11:16:46","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Control de Vectores; realizado por: Jesus Castillo"),
("130","9","26","Registro de Grupo de Instrumentos Legales","2024-02-04 11:19:44","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("131","9","28","Registro de , en la Dir. Ing. Sanitaria.","2024-02-04 11:19:52","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Ing. Sanitaria; realizado por: Jesus Castillo"),
("132","9","28","Registro de , en la Dir. Ing. Sanitaria.","2024-02-04 11:21:08","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Ing. Sanitaria; realizado por: Jesus Castillo"),
("133","9","26","Registro de Grupo de Instrumentos Legales","2024-02-04 11:24:20","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("134","9","28","Registro de , en la Dir. Salud Radiologica.","2024-02-04 11:24:28","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Salud Radiologica; realizado por: Jesus Castillo"),
("135","9","26","Registro de Grupo de Instrumentos Legales","2024-02-04 11:25:43","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("136","9","28","Registro de , en la Dir. Salud Radiologica.","2024-02-04 11:26:05","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Salud Radiologica; realizado por: Jesus Castillo"),
("137","9","4","27146430","2024-02-04 11:26:12","Salida del sistema del Usuario: Jesus Castillo."),
("138","9","3","27146430","2024-02-04 11:30:55","Ingreso del Usuario: Jesus Castillo."),
("139","9","28","Registro de , en la Dir. Control de Vectores.","2024-02-04 11:31:20","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Control de Vectores; realizado por: Jesus Castillo"),
("140","9","28","Registro de , en la Dir. Control de Vectores.","2024-02-04 11:32:47","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Control de Vectores; realizado por: Jesus Castillo"),
("141","9","28","Registro de , en la Dir. Control de Vectores.","2024-02-04 11:37:42","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Control de Vectores; realizado por: Jesus Castillo"),
("142","9","4","27146430","2024-02-04 11:39:18","Salida del sistema del Usuario: Jesus Castillo."),
("143","9","3","27146430","2024-02-04 14:00:24","Ingreso del Usuario: Jesus Castillo."),
("144","9","28","Registro de , en la Dir. Control de Vectores.","2024-02-04 14:01:04","Nuevo registro de Documento Instrumento Legal, en la sección de Instrumentos Legales de la Página Web de la Dir. Control de Vectores; realizado por: Jesus Castillo"),
("145","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 14:02:24","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Visibilidad cambió de: Inactivo a: Activo. Cambios realizados."),
("146","9","22","Identificador de la Imagen, Video o Documento: 56","2024-02-04 14:02:58","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Visibilidad cambió de: Activo a: Inactivo. Cambios realizados."),
("147","9","22","Identificador de la Imagen, Video o Documento: 56","2024-02-04 14:03:10","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Visibilidad cambió de: Inactivo a: Activo. Cambios realizados."),
("148","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 14:06:11","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental a: Entrada al despacho de la Direccion General de Salud Ambiental onichaaaaaaaaaaaaaaan. Cambios realizados."),
("149","9","4","27146430","2024-02-04 14:07:13","Salida del sistema del Usuario: Jesus Castillo."),
("150","9","3","27146430","2024-02-04 14:09:21","Ingreso del Usuario: Jesus Castillo."),
("151","9","20","Registro de  en la Dir. General.","2024-02-04 14:11:07","Nuevo registro de Video en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/2/10/Aedes Aegipty.mp4; realizado por: Jesus Castillo"),
("152","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 14:25:45","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental onichaaaaaaaaaaaaaaan a: Entrada al despacho de la Direccion General de Salud Ambiental onichaaaaaaaaaaaaaaanaaa. Cambios realizados."),
("153","9","4","27146430","2024-02-04 14:31:15","Salida del sistema del Usuario: Jesus Castillo."),
("154","9","3","27146430","2024-02-04 14:42:42","Ingreso del Usuario: Jesus Castillo."),
("155","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 15:55:26","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental onichaaaaaaaaaaaaaaanaaa a: Entrada al despacho de la Direccion General de Salud Ambiental . Cambios realizados."),
("156","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 15:56:31","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental  a: Entrada al despacho de la Direccion General de Salud Ambiental aaa. Cambios realizados."),
("157","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:03:06","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental aaa a: Entrada al despacho de la Direccion General de Salud Ambiental aaaaaaaaaaa. Cambios realizados."),
("158","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:15:18","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental aaaaaaaaaaa a: Entrada al despacho de la Direccion General de Salud Ambiental cambio. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: . Cambios realizados."),
("159","9","4","27146430","2024-02-04 16:20:05","Salida del sistema del Usuario: Jesus Castillo."),
("160","9","3","27146430","2024-02-04 16:21:21","Ingreso del Usuario: Jesus Castillo."),
("161","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:23:37","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental cambio a: Entrada al despacho de la Direccion General de Salud Ambiental cambio aaaaaaaa. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: . Cambios realizados."),
("162","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:24:47","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/819222.jpg. Cambios realizados."),
("163","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:26:04","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/819222.jpg. Cambios realizados."),
("164","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:26:57","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental cambio aaaaaaaa a: Entrada al despacho de la Direccion General de Salud Ambiental. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/819222.jpg. Cambios realizados."),
("165","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-04 16:29:23","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de:  a: cambiando imagen. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/inicio4.jpeg a: ../../assets/gallery/DGSA/2024/1/10/129609419_4084869901527684_7524413929295147879_n.jpg. Cambios realizados."),
("166","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:35:32","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/819222.jpg. Cambios realizados."),
("167","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:45:33","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental a: Entrada al despacho de la Direccion General de Salud Ambiental DARK. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/819222.jpg. Cambios realizados."),
("168","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:47:41","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: Entrada al despacho de la Direccion General de Salud Ambiental DARK a: Entrada al despacho de la Direccion General de Salud Ambiental DARK SOULS. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/819222.jpg. Cambios realizados."),
("169","9","18","Registro de Grupo de Galería, en Imágenes/Videos","2024-02-04 16:49:01","Nuevo registro de Grupo, para la categorías de la Galería de la Página Web. Registro realizado por: Jesus Castillo"),
("170","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:49:19","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/819222.jpg a: . Grupo del archivo cambió de: Dirección General Salud Ambiental a: Radiaciones Ionizantes. Cambios realizados."),
("171","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 16:49:31","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/819222.jpg a: . Cambios realizados."),
("172","9","22","Identificador de la Imagen, Video o Documento: 55","2024-02-04 17:29:52","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/819222.jpg a: ../../assets/gallery/DSR/2024/1/12/7869d1_84edc10e4cec4d50a557cd1a6992aaa5~mv2.png. Cambios realizados."),
("173","9","4","27146430","2024-02-04 17:38:08","Salida automática del sistema, del Usuario: ."),
("174","9","23","Nuevo Boletín Informativo en la Dir. General.","2024-02-04 18:29:49","Nuevo registro de Boletín Informativo en la Dir. General, guardada con el nombre de: Boletin DGSA; realizado por: Jesus Castillo"),
("175","9","22","Identificador de la Imagen, Video o Documento: 58","2024-02-04 18:31:49","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/20221129_133338.jpg a: ../../assets/gallery/DGSA/2024/1/10/17159117_1113334618774902_6839481462901122206_o.jpg. Cambios realizados."),
("176","9","24","Identificador del Boletín: 12","2024-02-04 18:34:36","El usuario: Jesus Castillo realizó cambios en los datos de un Boletín Informativo, cambios realizados: Estado del Boletín cambió de: 1 a: 2. Cambios realizados."),
("177","9","24","Identificador del Boletín: 12","2024-02-04 18:46:53","El usuario: Jesus Castillo realizó cambios en los datos de un Boletín Informativo, cambios realizados: Estado del Boletín cambió de: Inactivo a: Activo. Cambios realizados."),
("178","9","25","Identificador del Boletín: 12","2024-02-04 18:47:21","El usuario: Jesus Castillo realizó cambios en los datos de un Boletín Informativo, cambios realizados: Estado del Boletín cambió de: Activo a: Eliminado. Cambios realizados."),
("179","9","4","27146430","2024-02-04 18:51:34","Salida automática del sistema, del Usuario: ."),
("181","9","3","27146430","2024-02-04 18:51:48","Ingreso del Usuario: Jesus Castillo."),
("182","9","4","27146430","2024-02-04 18:55:17","Salida del sistema del Usuario: Jesus Castillo."),
("183","9","3","27146430","2024-02-04 19:13:43","Ingreso del Usuario: Jesus Castillo."),
("184","9","18","Registro de Grupo de Galería, en Imágenes/Videos","2024-02-04 19:17:02","Nuevo registro de Grupo, para la categorías de la Galería de la Página Web. Registro realizado por: Jesus Castillo"),
("185","9","21","Registro de  en la Dir. Epidemiología Ambiental.","2024-02-04 19:17:13","Nuevo registro de Documento en la Galería de la Página Web de la Dir. Epidemiología Ambiental, ubicacion: ../../assets/gallery/DEA/2024/3/13/14$ comprobante.pdf; realizado por: Jesus Castillo"),
("186","9","4","27146430","2024-02-04 19:17:43","Salida del sistema del Usuario: Jesus Castillo."),
("187","9","3","27146430","2024-02-04 21:08:10","Ingreso del Usuario: Jesus Castillo."),
("188","9","4","27146430","2024-02-04 21:08:57","Salida del sistema del Usuario: Jesus Castillo."),
("189","9","3","27146430","2024-02-04 21:32:41","Ingreso del Usuario: Jesus Castillo."),
("190","9","22","Identificador de la Imagen, Video o Documento: 56","2024-02-04 21:32:58","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/3/11/La_Verdad_del_Esequibo.pdf a: . Cambios realizados."),
("191","9","22","Identificador de la Imagen, Video o Documento: 56","2024-02-04 21:33:52","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/3/11/La_Verdad_del_Esequibo.pdf a: . Cambios realizados."),
("192","9","19","Registro de  en la Dir. General.","2024-02-04 21:48:47","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/10/4348287962717159117_1113334618774902_6839481462901122206_o.jpg; realizado por: Jesus Castillo"),
("193","9","4","27146430","2024-02-04 21:53:51","Salida del sistema del Usuario: Jesus Castillo."),
("194","9","3","27146430","2024-02-04 21:54:44","Ingreso del Usuario: Jesus Castillo."),
("195","9","23","Nuevo Boletín Informativo en la Dir. General.","2024-02-04 21:55:41","Nuevo registro de Boletín Informativo en la Dir. General, guardada con el nombre de: Prueba de imagen; realizado por: Jesus Castillo"),
("196","9","23","Nuevo Boletín Informativo en la Dir. General.","2024-02-04 21:58:30","Nuevo registro de Boletín Informativo en la Dir. General, guardada con el nombre de: Otra prueba mi pana; realizado por: Jesus Castillo"),
("197","9","4","27146430","2024-02-04 22:04:31","Salida del sistema del Usuario: Jesus Castillo."),
("198","9","3","27146430","2024-02-04 22:07:41","Ingreso del Usuario: Jesus Castillo."),
("199","9","25","Identificador del Boletín: 15","2024-02-04 22:07:55","El usuario: Jesus Castillo realizó cambios en los datos de un Boletín Informativo, cambios realizados: Estado del Boletín cambió de: Activo a: Eliminado. Cambios realizados."),
("200","9","4","27146430","2024-02-04 22:12:15","Salida del sistema del Usuario: Jesus Castillo."),
("201","9","3","27146430","2024-02-04 22:17:36","Ingreso del Usuario: Jesus Castillo."),
("202","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-04 22:18:12","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/inicio4.jpeg a: ../../assets/gallery/DGSA/2024/1/10/47117147508-5.1.jpg. Cambios realizados."),
("203","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-04 22:20:06","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/47117147508-5.1.jpg a: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg. Cambios realizados.");
INSERT INTO z1_historial_camb_sis VALUES
("204","9","4","27146430","2024-02-04 22:23:01","Salida del sistema del Usuario: Jesus Castillo."),
("205","9","3","27146430","2024-02-04 22:47:38","Ingreso del Usuario: Jesus Castillo."),
("206","9","4","27146430","2024-02-04 22:47:41","Salida del sistema del Usuario: Jesus Castillo."),
("207","9","3","27146430","2024-02-04 23:14:44","Ingreso del Usuario: Jesus Castillo."),
("208","9","23","Eliminación de Archivo (imagen, video o documento) en la .","2024-02-04 23:14:59","Eliminación de Archivo (imagen, video o documento) en la Página Web de la , previa ubicacion del archivo: ../../assets/gallery/DGSA/2024/1/10/4348287962717159117_1113334618774902_6839481462901122206_o.jpg; realizado por: Jesus Castillo"),
("209","9","30","Identificador del Instrumento: 2","2024-02-05 00:19:40","El usuario: Jesus Castillo realizó cambios en los datos de un Instrumento Legal, cambios realizados: Estado del Instrumento cambió de: Activo a: Inactivo. Cambios realizados."),
("210","9","31","Identificador del Instrumento: 1","2024-02-05 00:20:04","El usuario: Jesus Castillo realizó cambios en los datos de un Instrumento Legal, cambios realizados: Estado del Instrumento cambió de: Activo a: Eliminado. Cambios realizados."),
("211","9","30","Identificador del Instrumento: 2","2024-02-05 00:20:25","El usuario: Jesus Castillo realizó cambios en los datos de un Instrumento Legal, cambios realizados: Estado del Instrumento cambió de: Inactivo a: Activo. Cambios realizados."),
("212","9","27","Registro de Grupo de Instrumentos Legales","2024-02-05 00:22:01","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("213","9","27","Registro de Grupo de Instrumentos Legales","2024-02-05 00:25:34","Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("214","9","18","Registro de Grupo de Galería, en Imágenes/Videos","2024-02-05 00:28:10","Nuevo registro de Grupo, para la categorías de la Galería de la Página Web. Registro realizado por: Jesus Castillo"),
("215","9","28","Registro de nuevo Tipo de Instrumentos Legales","2024-02-05 00:30:37","Nuevo registro de Tipo, para la categoría de Instrumentos Legales. Registro realizado por: Jesus Castillo"),
("216","9","4","27146430","2024-02-05 00:36:04","Salida automática del sistema, del Usuario: ."),
("217","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:46:05","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen a: cambiando imagen a. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("218","9","4","27146430","2024-02-05 00:48:19","Salida automática del sistema, del Usuario: ."),
("220","9","3","27146430","2024-02-05 00:49:02","Ingreso del Usuario: Jesus Castillo."),
("221","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:49:18","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen a a: cambiando imagen aaaa. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("222","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:51:14","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen aaaa a: cambiando imagen cambios. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("223","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:52:14","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen cambios a: cambiando imagen camaa. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("224","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:54:28","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen camaa a: cambiando imagen camaasa. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("225","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:55:53","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen camaasa a: cambiando imagen camaasas. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("226","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:56:30","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen camaasas a: cambiando imagen . Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("227","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:57:04","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de: cambiando imagen  a: cambiando imagen a. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: . Cambios realizados."),
("228","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 00:57:24","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: ../../assets/gallery/DGSA/2024/1/10/10218713653-9.jpg. Cambios realizados."),
("229","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 01:00:39","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/37196839607-5.1.jpg a: ../../assets/gallery/DGSA/2024/1/10/28807573670-01.jpeg. Cambios realizados."),
("230","9","22","Identificador de la Imagen, Video o Documento: 60","2024-02-05 01:01:17","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/28807573670-01.jpeg a: ../../assets/gallery/DGSA/2024/1/10/83523002541-7.jpg. Cambios realizados."),
("231","9","19","Registro de  en la Dir. General.","2024-02-05 01:04:06","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/10/14819512785-25.jpeg; realizado por: Jesus Castillo"),
("232","9","22","Identificador de la Imagen, Video o Documento: 65","2024-02-05 01:04:42","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Titulo del Archivo cambió de: dgsa a: Direccion General. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/14819512785-25.jpeg a: . Grupo del archivo cambió de: Dirección General Salud Ambiental a: Nuevo Grupo pp. Cambios realizados."),
("233","9","22","Identificador de la Imagen, Video o Documento: 65","2024-02-05 01:05:05","El usuario: Jesus Castillo realizó cambios en los datos de una imagen/video de la galería, cambios realizados: Descripcion cambió de:  a: AAAAAAAAAAAAAAA ONICHAAAAAAAN. Ubicación del Archivo cambió de: ../../assets/gallery/DGSA/2024/1/10/14819512785-25.jpeg a: . Cambios realizados."),
("234","9","4","27146430","2024-02-05 01:07:52","Salida del sistema del Usuario: Jesus Castillo."),
("235","9","3","27146430","2024-02-05 23:55:12","Ingreso del Usuario: Jesus Castillo."),
("236","9","4","27146430","2024-02-05 23:56:33","Salida del sistema del Usuario: Jesus Castillo."),
("237","10","3","271464300","2024-02-06 18:42:06","Ingreso del Usuario: Carla Lopez."),
("238","10","4","271464300","2024-02-06 18:42:32","Salida del sistema del Usuario: Carla Lopez."),
("239","9","3","27146430","2024-02-06 18:47:43","Ingreso del Usuario: Jesus Castillo."),
("240","9","4","27146430","2024-02-06 18:48:08","Salida del sistema del Usuario: Jesus Castillo."),
("241","11","3","271464301","2024-02-06 18:48:12","Ingreso del Usuario: Jesus Castillo."),
("242","11","4","271464301","2024-02-06 18:48:20","Salida del sistema del Usuario: Jesus Castillo."),
("243","10","3","271464300","2024-02-06 18:48:22","Ingreso del Usuario: Carla Lopez."),
("244","10","4","271464300","2024-02-06 18:48:32","Salida del sistema del Usuario: Carla Lopez."),
("245","9","3","27146430","2024-02-06 18:48:35","Ingreso del Usuario: Jesus Castillo."),
("246","9","19","Registro de  en la Dir. General.","2024-02-06 18:52:58","Nuevo registro de Imagen en la Galería de la Página Web de la Dir. General, ubicacion: ../../assets/gallery/DGSA/2024/1/14/49181727163-1.jpg; realizado por: Jesus Castillo"),
("247","9","4","27146430","2024-02-06 19:05:00","Salida automática del sistema, del Usuario: ."),
("249","9","3","27146430","2024-02-06 19:08:14","Ingreso del Usuario: Jesus Castillo.");




CREATE TABLE `z2_historial_acciones` (
  `id_accHis` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_accion` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_accHis`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO z2_historial_acciones VALUES
("1","Registro Datos Usuario"),
("2","Modificación Datos Usuario"),
("3","Ingreso al Sistema"),
("4","Salida del Sistema"),
("5","Registro Equipo Tecnológico"),
("6","Edición Equipo Tecnológico"),
("7","Desincorporación de Equipo Tecnológico"),
("8","Solicitud de Soporte Técnico"),
("9","Soporte Técnico Aceptado"),
("10","Soporte Técnico Falta de Componente"),
("11","Soporte Técnico Finalizado"),
("12","Soporte Técnico Rechazado"),
("13","Registro Correspondencia"),
("14","Correspondencia aceptada"),
("15","Registro Institución Correspondencia"),
("16","Registro Base de Conocimiento"),
("17","Creación Respaldo"),
("18","Registro de Nuevo Grupo Galería"),
("19","Registro de Imagen"),
("20","Registro de Video"),
("21","Registro de Documento"),
("22","Modificacion Imagen-Video-Documento"),
("23","Eliminacion Imagen-Video-Documento"),
("24","Nuevo Boletin"),
("25","Modificacion Boletin"),
("26","Eliminacion Boletin"),
("27","Registro Grupo Instrumento Legal"),
("28","Registro Tipo de Instrumento Legal"),
("29","Registro Instrumento Legal"),
("30","Edición de Instrumento Legal"),
("31","Eliminacion de Instrumento Legal"),
("32","Registro Pagina Coordinacion"),
("33","Edicion Pagina Coordinacion"),
("34","Eliminacion Pagina Coordinacion");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;