SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `practica_php_dgsa`
--




CREATE TABLE `a1_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a1_usuarios VALUES
("1","1","Jesus","Castillo","V","27146430","JESUS4K","04124457287","","jesusgole33@gmail.com","21","11","1","1","$2y$10$KHZsV4QHVY.J.4CeNiWFq.kyKYESR1svaxugs8KD9.54hg6apeEUG","1","$2y$10$dsQmlNxJ5PlhthIQdCvWxOEMzIIgBiOYY5doj49ynbEdVJkE8ktCK","2","$2y$10$SUpOs2J6xfBGMmnQuV1EIOWfcveONWBP0H6FemHpfffVKsA1al7IC","3","$2y$10$GgbDTXlys/7168jKk8spYuCCZymvsnevy73.mgm1rXwnc.w3NKohu","030320","1"),
("2","1","Juan","Fox","V","33333333","INFORMATICA","04124457287","","jesusgole33@gmail.com","21","11","1","2","$2y$10$4oLQbDzRk5OgGHaK.xnfcuSbBfVO1wJ6JQPVEKfvmDhAqvojFOc9m","1","$2y$10$S5YHxfY7AT/OTx3.o58gg.hIFzdmsVWZSGluX.olE.z4qpQP7WZaO","2","$2y$10$Lo6lzU6J.VRpL2EvFeFcF.ENdOjhL/Jw9PWbVobWNkB9qDs0sNNtS","3","$2y$10$ynVEZqKQtGTbP21fQqVqs.asITR3GZzgu28BNoT6NE.JmAI5CbJW.","000000","0");




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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a4_estado VALUES
("1","Activo"),
("2","Inactivo");




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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


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
("24","Sala Situacional","5"),
("25","Laboratorio de Malaria","5"),
("26","Laboratorio de Parasitología","5"),
("27","Laboratorio de Chagas","5"),
("28","Sin Asignar","6"),
("29","Enlace de Recursos Humanos","3"),
("30","Coordinación de Regulación y Control de Radiaciones","3"),
("31","Coordinación Vigilancia e Higiene de las Radiaciones","3"),
("32","Sala Situacional","1");




CREATE TABLE `b3_departamentos` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dpto` varchar(255) COLLATE utf8_bin NOT NULL,
  `departamento_division_id` int(11) NOT NULL,
  PRIMARY KEY (`id_departamento`),
  KEY `dpto_division_fk` (`departamento_division_id`),
  CONSTRAINT `dpto_division_fk` FOREIGN KEY (`departamento_division_id`) REFERENCES `b2_divisiones` (`id_divisiones`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


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
("80","Sala Situacional","32");




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
  `comentario` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_case`),
  KEY `ing_enca_inv_usr_fk` (`ing_encar_inv_id`),
  KEY `inv_equipo_dpto_fk` (`dpto_inv_id`),
  KEY `inv_equipo_division_fk` (`division_inv_id`),
  KEY `inv_equipo_direccion_fk` (`direccion_inv_id`),
  CONSTRAINT `ing_enca_inv_usr_fk` FOREIGN KEY (`ing_encar_inv_id`) REFERENCES `a1_usuarios` (`id_usuario`),
  CONSTRAINT `inv_equipo_direccion_fk` FOREIGN KEY (`direccion_inv_id`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `inv_equipo_division_fk` FOREIGN KEY (`division_inv_id`) REFERENCES `b2_divisiones` (`id_divisiones`),
  CONSTRAINT `inv_equipo_dpto_fk` FOREIGN KEY (`dpto_inv_id`) REFERENCES `b3_departamentos` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c1_inventario_equipo VALUES
("1","2023-09-24","2","80","32","1","Eucarin Romero","Ing Rodolfo Mejias","M1SSPC02","3712800","CNG1470VMY","Escritorio","AMD Phenom II","3.40GHz","08-2E-5F-0E-4F-B4","10.72.0.196","320GB","WesternDigital","WD3200AAdS","1","4Gb","7","Si","Cableada","Si","Si","SinBN","HP","USB","HP","VGA","3713190","No","","","Si","Delux","USB","5016015","No","","","","Equipo de Sala Situacional, oficina de la Dirección General");




CREATE TABLE `c3_1_estado_soporte` (
  `id_estado_sop` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_estado_sop`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c3_1_estado_soporte VALUES
("1","En Espera"),
("2","En Proceso"),
("3","Finalizado"),
("4","Rechazado"),
("5","Rechazado Completo");




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
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_soporte`),
  KEY `id_equipo_soporte_fk` (`id_equipo_soporte`),
  KEY `tecnico_soporte_fk` (`tecnico_soporte_id`),
  KEY `estado_soporte_id` (`estado`),
  CONSTRAINT `estado_soporte_id_fk` FOREIGN KEY (`estado`) REFERENCES `c3_1_estado_soporte` (`id_estado_sop`),
  CONSTRAINT `id_equipo_soporte_fk` FOREIGN KEY (`id_equipo_soporte`) REFERENCES `c1_inventario_equipo` (`id_case`),
  CONSTRAINT `id_tecnico_soporte_fk` FOREIGN KEY (`tecnico_soporte_id`) REFERENCES `a1_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c3_solicitudes_soportes VALUES
("1","Uso Oficial","1","M1SSPC02","Nivel Software","El equipo no abre ciertos programas utilizados para realizar los informes","2023-09-24 23:14:37","3","2023-09-24 23:15:48","2","2023-09-24 23:19:57","Finalización de la solicitud de manera exitosa.");




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
  `fecha_llegada` date NOT NULL,
  `oficina_destino` int(11) NOT NULL,
  `coordi_destino` int(11) NOT NULL,
  PRIMARY KEY (`id_nro_admision`),
  KEY `procedencia_empr_fk` (`procedencia`),
  KEY `oficina_destino_fk` (`oficina_destino`),
  KEY `coordi_destino_fk` (`coordi_destino`),
  CONSTRAINT `coordi_destino_fk` FOREIGN KEY (`coordi_destino`) REFERENCES `b2_divisiones` (`id_divisiones`),
  CONSTRAINT `oficina_destino_fk` FOREIGN KEY (`oficina_destino`) REFERENCES `b1_direcciones` (`id_direcciones`),
  CONSTRAINT `procedencia_empr_fk` FOREIGN KEY (`procedencia`) REFERENCES `d2_empresas_corresp` (`id_empresas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d1_correspondencia VALUES
("1","254854","2023-09-04","1","271464300","Nuevos equipos","2023-09-07","1","11"),
("2","2121212","2023-09-07","2","248168000","Se quiere solicitar permiso de ambiente","2023-09-13","1","32");




CREATE TABLE `d2_empresas_corresp` (
  `id_empresas` int(11) NOT NULL AUTO_INCREMENT,
  `identificador_rif` varchar(5) COLLATE utf8_bin NOT NULL,
  `rif` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_empresa` varchar(45) COLLATE utf8_bin NOT NULL,
  `dedicacion` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_empresas`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d2_empresas_corresp VALUES
("1","V","271464300","ExportWorld","Exportación de Equipos Tecnológicos"),
("2","J","248168000","PollosA1","Hacer pollos chidos"),
("3","E","27146430","PollosA1","Hacer pollos chidos"),
("4","V","31092107","PollosA1","Hacer pollos chidos"),
("5","E","31092107","PollosA1","Hacer pollos chidos"),
("6","G","24816800","PollosA1","Hacer pollos chidos"),
("7","V","21212121","PollosA1","Hacer pollos chidos"),
("8","V","12121222","PollosA1","Hacer pollos chidos"),
("9","V","1111111","PollosA1","Hacer pollos chidos"),
("10","V","1215555","PollosA1111","Hacer pollos chidos");




CREATE TABLE `d3_notificaciones_div` (
  `id_notificacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_corresp` int(11) NOT NULL,
  `id_empresa_corresp` int(11) NOT NULL,
  `id_corres_divi` int(11) NOT NULL,
  `id_corres_dire` int(11) NOT NULL,
  `Jefe_Corres` int(11) NOT NULL,
  `Jefe_Ced_Corres` varchar(45) COLLATE utf8_bin NOT NULL,
  `fecha_llegada_corresp` datetime NOT NULL,
  `fecha_elim_notifi` datetime NOT NULL,
  `fecha_confirmacion_corres` datetime DEFAULT NULL,
  `descripcion_corresp` varchar(255) COLLATE utf8_bin NOT NULL,
  `estatus_Corres` int(1) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d3_notificaciones_div VALUES
("1","1","1","11","1","1","27146430","2023-09-24 11:41:52","2023-09-25 11:41:52","2023-09-25 12:31:58","Nuevos equipos","2"),
("2","2","2","32","1","1","27146430","2023-09-24 11:53:14","2023-09-25 11:53:14","","Se quiere solicitar permiso de ambiente","1");




CREATE TABLE `d4_notificaciones_estatus` (
  `id_estatus_notifi` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estatus_notifi` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_estatus_notifi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d4_notificaciones_estatus VALUES
("1","En espera"),
("2","Confirmado"),
("3","Alerta");




CREATE TABLE `z1_historial_camb_sis` (
  `id_historial_cambios` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario_cambio` int(11) NOT NULL,
  `id_accion_cambio` int(11) NOT NULL,
  `fecha_usuario_cambio` datetime DEFAULT NULL,
  `descripcion_cambio` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_historial_cambios`),
  KEY `id_usuario_cambio_fk` (`id_usuario_cambio`),
  KEY `id_accion_cambio_fk` (`id_accion_cambio`),
  CONSTRAINT `id_accion_cambio_fk` FOREIGN KEY (`id_accion_cambio`) REFERENCES `z2_historial_acciones` (`id_accHis`),
  CONSTRAINT `id_usuario_cambio_fk` FOREIGN KEY (`id_usuario_cambio`) REFERENCES `a1_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO z1_historial_camb_sis VALUES
("1","1","1","2023-09-20 01:43:12","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Jesus Castillo, cédula V-27146430. Dicho empleado se ha registrado como trabajador en: Coordinación de Informática"),
("2","1","1","2023-09-20 01:43:28","El usuario Jesus Castillo, finalizó el registro las preguntas de seguridad."),
("3","1","5","2023-09-20 01:44:09","Ingreso del Usuario: Jesus Castillo."),
("4","1","7","2023-09-20 01:45:23","Nuevo respaldo de la base de datos creado en fecha: 2023-09-20. Creado por el usuario: Jesus Castillo."),
("5","1","6","2023-09-20 01:46:50","Salida del sistema del Usuario: Jesus Castillo."),
("6","1","5","2023-09-21 10:25:38","Ingreso del Usuario: Jesus Castillo."),
("7","1","6","2023-09-21 10:41:13","Salida del sistema del Usuario: Jesus Castillo."),
("8","1","5","2023-09-21 11:07:14","Ingreso del Usuario: Jesus Castillo."),
("9","1","6","2023-09-21 11:07:38","Salida del sistema del Usuario: Jesus Castillo."),
("10","1","5","2023-09-21 11:32:40","Ingreso del Usuario: Jesus Castillo."),
("11","1","7","2023-09-21 11:32:49","Nuevo respaldo de la base de datos creado en fecha: 2023-09-21. Creado por el usuario: Jesus Castillo."),
("12","1","6","2023-09-21 11:32:56","Salida del sistema del Usuario: Jesus Castillo."),
("13","1","5","2023-09-24 22:30:19","Ingreso del Usuario: Jesus Castillo."),
("14","2","1","2023-09-24 22:32:09","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Juan Fox, cédula V-33333333. Dicho empleado se ha registrado como trabajador en: Coordinación de Informática"),
("15","2","1","2023-09-24 22:32:30","El usuario Juan Fox, finalizó el registro las preguntas de seguridad."),
("16","1","2","2023-09-24 22:32:44","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Juan Fox, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Ingeniero Informático. Cambios realizados."),
("17","1","1","2023-09-24 22:44:37","Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: M1SSPC02. Nro de Registro: 1."),
("18","1","6","2023-09-24 22:45:07","Salida del sistema del Usuario: Jesus Castillo."),
("19","1","5","2023-09-24 22:45:50","Ingreso del Usuario: Jesus Castillo."),
("20","1","6","2023-09-24 22:59:08","Salida del sistema del Usuario: Jesus Castillo."),
("21","1","5","2023-09-24 23:12:26","Ingreso del Usuario: Jesus Castillo."),
("22","1","1","2023-09-24 23:14:37","Nueva solicitud de Soporte técnico, nombre del equipo: M1SSPC02."),
("23","1","2","2023-09-24 23:15:48","Actualización de solicitud de Soporte técnico, nombre del equipo: M1SSPC02, Nro de Solicitud: 1. Actualizada a -En Proceso-, por Jesus Castillo, técnico designado: Juan Fox."),
("24","1","2","2023-09-24 23:19:57","Culminación de la solicitud de Soporte técnico, nombre del equipo: M1SSPC02, Nro de Solicitud: 1. Actualizada a -Finalizada-, por Jesus Castillo, técnico designado de realizar el soporte: Juan Fox."),
("25","1","1","2023-09-24 23:40:09","Se registra una nueva empresa en el sistema, bajo el nombre. ExportWorld, y cuyo RIF es: V-271464300. Registro hecho por: Jesus Castillo."),
("26","1","1","2023-09-24 23:41:52","Se registra una nueva correspondencia, nro de oficio: 254854, bajo el nombre de la empresa: ExportWorld, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo"),
("27","1","1","2023-09-24 23:52:28","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: J-248168000. Registro hecho por: Jesus Castillo."),
("28","1","1","2023-09-24 23:53:14","Se registra una nueva correspondencia, nro de oficio: 2121212, bajo el nombre de la empresa: PollosA1, cuyo rif es: J-248168000. Usuario encargado del registro: Jesus Castillo"),
("29","1","1","2023-09-24 23:55:55","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: E-27146430. Registro hecho por: Jesus Castillo."),
("30","1","1","2023-09-24 23:57:15","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: V-31092107. Registro hecho por: Jesus Castillo."),
("31","1","1","2023-09-24 23:58:57","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: E-31092107. Registro hecho por: Jesus Castillo."),
("32","1","1","2023-09-25 00:02:54","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: G-24816800. Registro hecho por: Jesus Castillo."),
("33","1","1","2023-09-25 00:06:17","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: V-21212121. Registro hecho por: Jesus Castillo."),
("34","1","1","2023-09-25 00:06:53","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: V-12121222. Registro hecho por: Jesus Castillo."),
("35","1","1","2023-09-25 00:07:13","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1, y cuyo RIF es: V-1111111. Registro hecho por: Jesus Castillo."),
("36","1","1","2023-09-25 00:07:50","Se registra una nueva empresa en el sistema, bajo el nombre. PollosA1111, y cuyo RIF es: V-1215555. Registro hecho por: Jesus Castillo."),
("37","1","6","2023-09-25 00:19:14","Salida del sistema del Usuario: Jesus Castillo."),
("38","1","5","2023-09-25 00:19:20","Ingreso del Usuario: Jesus Castillo."),
("39","1","2","2023-09-25 00:31:58","El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 1. Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados."),
("40","1","6","2023-09-25 00:39:29","Salida del sistema del Usuario: Jesus Castillo."),
("41","1","5","2023-09-25 00:49:13","Ingreso del Usuario: Jesus Castillo.");




CREATE TABLE `z2_historial_acciones` (
  `id_accHis` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_accion` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_accHis`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO z2_historial_acciones VALUES
("1","Registro"),
("2","Modificación"),
("3","Rechazo"),
("4","Eliminacion"),
("5","Ingreso al Sistema"),
("6","Salida del Sistema"),
("7","Creación Respaldo");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;