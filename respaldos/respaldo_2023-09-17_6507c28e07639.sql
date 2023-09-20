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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO a1_usuarios VALUES
("1","1","Jesus","Castillo","V","27146430","JESUS4K","04127794698","04120004455","jesusgole33@gmail.com","21","11","1","1","$2y$10$nYr9VAioRrbZqf9WxBZP1uuMfanioHa4Faj.1yxgndEEamo8.EsVC","1","$2y$10$Y/VB/tbcSZg9W9.L.nCepevsek5Cn4bbc495zEcodLoXHNP0fGS9a","2","$2y$10$PLIX92EgUFZmacAUOkWzsuog9W36GJaPEjWPV4URAqwuhOBTk8faK","3","$2y$10$1728yP4YgsWyM0PnDlZnY.mY3TjbG.Vh4rFsUIO0lZcZhEtMrUQDe","040404","1"),
("2","1","Antonio R","Castillo A","V","24816800","JAGRA","04124457287","","jagravi16@gmail.com","21","11","1","2","$2y$10$22LeIU7N1CBlFsfWNgUd3O35yYojDpMqZQmKLdQ5z4U528kQqk8Bm","1","","1","","1","","1995","0"),
("3","1","Francisco","Miranda","V","4887889","FRANCIS34","04124457287","","jes@gmail.com","25","15","1","5","$2y$10$NL1LhyEr0Obx7/cB8m7WqOPF6mwW1To1wOHlnF6HfFFUFNb83i/yu","1","","1","","1","","1900","0"),
("6","1","Jack","Torrence","V","27444300","JACK34","04124457222","","jesusgole33@gmail.com","71","29","3","5","$2y$10$c2g7/Ja/67CxoXv8jYxN2OzsHNaxFYE.kQLAWjbzVkO6ub8O2QdMW","1","","1","","1","","030303","0"),
("10","1","Jao","Wick","V","22000222","JOHN2023","04124457287","","jagravi16@gmail.com","43","24","5","3","$2y$10$1QTsFhJeNqdPT.7Eht6NreY2hM0.TddciuCPQoLHNp4M.LivvWvOS","1","$2y$10$r89Q3fwN4/OBrl0IHUFRPe6pY/N1Acmtx3u8muNFxe1prdqnWdNtm","2","$2y$10$62ekDFRY0EiA1pj1dguTe.8idYoWvnLKJi0g2CD3thWT9GTbFsjtW","3","$2y$10$13gJ6SjgLUc7dvhp2rGZ.OklKMui9nn/8bzMYUeQl/VTS7E5TQeMW","2023","0"),
("14","1","John","Wick","V","22000333","JOHN2024","04124457287","","","29","17","3","3","$2y$10$c6WJ5LiU9rrRdDCXzD1Hb.TN1QT2Vdb7A21.gEOCFpnUPx1TkCTGy","1","$2y$10$wdPFphIbfscP0TCDIhG2ZetuCBzjzm8roCGpIXEIuVRX.Y5E5YFLa","3","$2y$10$49J.UlIVyYTGm2vzlDRf6uEnbWDctoYiPJ9Ul8mAX4Etb0iKGxcFW","8","$2y$10$qi8fOxkKHb00rGf7JwKreeFWt79Q/2sDXsK0uTUJ65V/zd.GFMEoO","2023","0"),
("16","2","Ad","Ad","V","28146430","ADMIN1","04124457287","","jagravi16@gmail.com","10","7","1","5","$2y$10$uB2sB6gBvwyfshfFltxd/.9GQ8oAewIcXfIJ9QV64EeWhdYRFPuWe","1","$2y$10$QmuFKImRbdjiLZ/rA/3h/eohge4JXKOAcCc5VmdaRCRFLKoSntBgW","2","$2y$10$aV8avFA4QcHDJVHhb4fwaOdkOOOcaYi1XOlp.W/PZl6C33mhWU.t2","9","$2y$10$e5wje2AA7J1ka.XXWc9VReppm.i3srqK2hXuV/qd3ZQ9ikqWU4GV2","030320","0");




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
("24","Sala Situacional","5"),
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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


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
("79","Registro Nacional de Dosimetria","31");




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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c1_inventario_equipo VALUES
("10","2023-06-16","3","16","7","1","Erika Zarameya","Lic Tamhdra Garcia","M1DCC03","5080178","SinSerial","Escritorio","AMD II B59","3.40GHz","08-2E-5F-0A-A5-D5","0.0.0.0","320GB","HITACHI","MD5721032CLA662","1","4Gb","XP","Si","Cableada","No","Si","2659869-011Serial","HP","USB","HP","VGA","5080178","Si","OMEGA","5015993","Si","COMPAQ","USB","3480082","No","","","","Registro de un equipo, formulario finalizado"),
("12","2023-06-16","3","6","4","1","Multiusuario","Direccion","M1DPC03","SinBien","CNG1476P9D","Escritorio","AMD II B59","3.40GHz","08-2E-5F-DC-90-99","10.72.0.77","500GB","HITACHI","HDS721032CLA66","2","8Gb","7","Si","Cableada","Si","Si","637749-001SerialMO","HP","USB","HP","VGA","3713550","Si","AVATEK","5016832","Si","Generico","USB","3713046Mo","HP","MFM350D","USB","5015967","Cancelando a medio proceso para probar"),
("13","2023-07-01","3","8","5","1","Kardex","KardexSupervisor","MDKARDEX1","5080178","CNG1476P9D","Escritorio","AMD II B59","3.40GHz","80-2E-5F-0A-A5-D5","0.0.0.0","320GB","HITACHI","MD5721032CLA662","2","4Gb","XP","Si","Wifi","Si","Si","212121","HP","USB","HP","VGA","5080178","No","","","Si","HP","USB","3480082","No","","","","REALIZANDO LAS VERIFICACIONES PERTINENTES"),
("14","2023-07-01","3","19","9","1","Erika Zarameya","Lic Tamhdra Garcia","PCUSR1","5080178","SinSerial","Escritorio","AMD II B59","3.40GHz","00-00-00-00-00-00","192.168.82.82","320GB","HITACHI","MD5721032CLA662","2","4Gb","XP","Si","Wifi","Si","Si","212121","HP","USB","Siragon","VGA","3713550Mo","No","","","Si","HP","USB","376674","No","","","","NUEVO PC, CREANDO UNA GRAN LISTA PARA EL PAGINADO. PRUEBA FINAL"),
("15","2023-07-01","3","5","3","1","Multiusuario","Ing Dennis Quiñones","MINGD12","5080178","SinSerial","Laptop Oficial","AMD II B59","3.40GHz","00-00-00-00-00-00","0.0.0.0","320GB","HITACHI","MD5721032CLA662","2","4Gb","XP","Si","Wifi","Si","Si","2659869-011Serial","HP","USB","HP","VGA","3713550","No","","","Si","Generico","USB","376674","No","","","","NUEVO PC, CREANDO UNA GRAN LISTA PARA EL PAGINADO"),
("16","2023-07-01","3","9","6","1","Multiusuario","Lic Tamhdra Garcia","PCUSR112","2121121","CNG1476P9D","Laptop Oficial","AMD II B59","3.40GHz","00-00-00-00-00-00","0.0.0.0","320GB","HITACHI","HDS721032CLA66","4","16gb","XP","Si","Wifi","Si","Si","2659869-011Serial","HP","USB","HP","VGA","3713550","No","","","Si","HP","USB","3480082","HP","","","","NUEVO PC, CREANDO UNA GRAN LISTA PARA EL PAGINADO"),
("17","2023-07-01","3","19","9","1","Multiusuario","Lic Tamhdra Garcia","PCUSR15612","2121121","SinSerial","Escritorio","AMD II B59","3.40GHz","00-00-00-00-00-00","00.00.00.00","320GB","HITACHI","MD5721032CLA662","1","4Gb","XP","No","","","No","","","","HP","VGA","3713550","No","","","Si","COMPAQ","USB","376674","No","","","","NUEVO PC, CREANDO UNA GRAN LISTA PARA EL PAGINADO"),
("18","2023-07-01","3","8","5","1","Multiusuario","Ing Dennis Quiñones","M1DPC032","SinBien","SinSerial","Laptop Personal","AMD II B59","3.40GHz","80-2E-5F-01-A5-D5","00.00.00.00","320GB","HITACHI","HDS721032CLA66","1","4gb","XP","Si","Cableada","Si","Si","212121","Generico","USB","No","","","No","","","Si","COMPAQ","USB","376674","No","","","","NUEVO PC, CREANDO UNA GRAN LISTA PARA EL PAGINADO"),
("19","2023-07-01","3","19","9","1","Erika Zarameya","KardexSupervisor","MINGD","SinBien","CNG1476P9D","Laptop Oficial","AMD II B59","3.40GHz","00-00-00-00-00-32","0.0.0.0","320GB","HITACHI","MD5721032CLA662","2","4Gb","7","No","","","Si","212121","HP","USB","Generico","VGA","5080178","Si","OMEGA","5015993","Si","COMPAQ","USB","3480082","No","","","","cambio de cosas en el codigo"),
("20","2023-09-10","2","9","6","1","Yisus","Jesus Castillo","PCGAMER","5884586","CNG1476P9D","Escritorio","i5 6ta","3.20Ghz","2C-41-38-A3-38-72","00.00.00.00","3Tb","HITACHI","MD5721032CLA662","2","8gb","10","No","","","Si","SinSerial","HP","USB","Generico","VGA","1585456","No","","","Si","IMEXX","USB","21456435","No","","","","Registrando un nuevo equipo para probar la auditoria, por favor que funcione");




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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c3_solicitudes_soportes VALUES
("13","Uso Oficial","10","M1DCC03","Nivel Software","Se ingresa nuevo equipo para el cambio de mac a nombre","2023-07-01 12:37:20","3","2023-07-01 13:34:39","2","2023-09-09 22:14:40","se culmino y reparo el fallo de manera exitosa\n"),
("18","Uso Oficial","10","M1DCC03","Nivel Software","Otra vez se dañó el pc ayuda","2023-07-19 22:52:40","3","2023-08-06 19:47:54","2","2023-08-06 19:48:05","finalizada exitozamente"),
("19","Uso Oficial","12","M1DPC03","Nivel Software","Otro pc de pruebas, esperemos todo salga good","2023-07-19 22:53:37","3","2023-09-09 23:15:47","2","2023-09-09 23:23:52","Completada de manera exitosa la revision y funcionamiento del equipo"),
("22","Uso Oficial","13","MDKARDEX1","Nivel Software","Tercer intento, este es el good","2023-09-09 21:17:10","5","2023-09-09 23:33:09","1","2023-09-09 23:38:22","ODIO A TODO EL MUNDO Y POR ESO LA RECHAZO"),
("23","Uso Oficial","10","M1DCC03","Nivel Software","SEGUIMOS HACIENDO PRUEBAS DE LA AUDITORIA","2023-09-09 22:17:27","2","2023-09-09 23:19:38","2","0000-00-00 00:00:00","");




CREATE TABLE `c4_base_conocimiento` (
  `id_conocimiento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_conocimiento` varchar(45) COLLATE utf8_bin NOT NULL,
  `descripcion_caso` varchar(45) COLLATE utf8_bin NOT NULL,
  `posible_solucion` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_conocimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO c4_base_conocimiento VALUES
("1","Software","El Word no quiere abrir ningún archivo","Intente abrir primero la aplicación Word presionando click derecho, nuevo archivo. Si continúa presentando fallos reinicie el ordenador."),
("2","Hardware","La pantalla no muestra imagen","Verifique que se encuentre conectado correctamente al equipo. Verifique se el monitor se encuentre conectado a la corriente y que esté encendido."),
("3","Software","Problemas con la aplicacion zoom","Verifique su conexión a internet. Verifique que el código que está usando sea el correcto. Intente comunicarse con el creador de la sala de Zoom"),
("4","Hardware","La pc se apaga muy rápido","Verifique si al apagarse muestra una pantalla azul, llame al departamento de informática. Si hace ruidos luego de encender, llame al departamento de informatica."),
("8","Software","Pc sonando raro","De ser posible verifique el origen del sonido, apague el ordenador y cree una solicitd de soporte para ser atendido lo antes posible.");




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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d1_correspondencia VALUES
("9","28485","2023-08-22","1","271464300","Llegan nuevos equipos al departamento de informatica","2023-08-29 00:00:00","1","11"),
("10","25874","2023-08-21","1","271464300","Se quiere solicitar permiso de ambiente","2023-08-29 00:00:00","3","29"),
("11","21212121","2023-08-15","1","271464300","PRUEBA PARA EL DEPARTAMENTO DE INFOR","2023-08-25 00:00:00","1","11"),
("12","8569845","2023-09-05","8","271464301","Prueba de auditoria","2023-09-08 00:00:00","1","11"),
("13","7598416","2023-09-07","8","271464301","Auditoria reparando","2023-09-02 00:00:00","1","11"),
("14","77885875","2023-09-05","1","271464300","PC NEWS NEWS","2023-09-10 00:00:00","1","11"),
("15","21212121","2023-09-06","1","271464300","Se quiere solicitar permiso de ambiente","2023-09-07 00:00:00","1","5");




CREATE TABLE `d2_empresas_corresp` (
  `id_empresas` int(11) NOT NULL AUTO_INCREMENT,
  `identificador_rif` varchar(5) COLLATE utf8_bin NOT NULL,
  `rif` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_empresa` varchar(45) COLLATE utf8_bin NOT NULL,
  `dedicacion` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_empresas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d2_empresas_corresp VALUES
("1","V","271464300","Restaurant Aincrad","Somos una empresa dedicada al disfrute del paladar de nuestros clientes"),
("4","G","28034625-55","Inversiones Ochako","Restaurant de comida chida"),
("5","J","123789-99","Gobierno","Distribucion Bienes Nacionales"),
("7","V","248168000","NoobN","Exportadores profesionales"),
("8","J","271464301","Auditoto","Auditorias profesionales");




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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO d3_notificaciones_div VALUES
("7","9","1","11","1","1","27146430","2023-08-30 01:53:56","2023-08-31 01:53:56","2023-09-10 09:24:20","Llegan nuevos equipos al departamento de informatica","2"),
("8","10","1","29","3","14","22000333","2023-08-29 08:04:23","2023-08-30 08:04:23","","Se quiere solicitar permiso de ambiente","1"),
("9","11","1","11","1","1","27146430","2023-08-25 07:56:09","2023-08-30 08:56:09","2023-08-30 10:50:47","PRUEBA PARA EL DEPARTAMENTO DE INFOR","2"),
("11","13","8","11","1","1","27146430","2023-09-10 08:36:39","2023-09-11 08:36:39","2023-09-10 09:26:01","Auditoria reparando","2"),
("12","14","1","11","1","1","27146430","2023-09-10 09:02:20","2023-09-11 09:02:20","2023-09-16 12:53:39","PC NEWS NEWS","1"),
("13","15","1","5","1","1","27146430","2023-09-10 09:10:02","2023-09-11 09:10:02","2023-09-16 12:53:36","Se quiere solicitar permiso de ambiente","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO z1_historial_camb_sis VALUES
("44","1","2","2023-09-09 15:34:02","El usuario: Jesus Castillo realizó cambios en un equipo del inventario: MAC cambió de: 00-00-00-00-00-00 a: . Comentario Anterior cambió de: NUEVO PC, CREANDO UNA GRAN LISTA PARA EL PAGINADO. MODIFICANDO... otra vez a: MODIFICANDO PC A TRAVES DEL NAME. Cambios realizados."),
("45","1","2","2023-09-09 15:36:18","El usuario: Jesus Castillo realizó cambios en un equipo del inventario: MAC cambió de: 00-00-00-00-00-00 a: . Cambios realizados."),
("46","1","2","2023-09-09 15:38:54","El usuario: Jesus Castillo realizó cambios en un equipo del inventario: MAC cambió de: 00-00-00-00-00-00 a: . Cambios realizados."),
("47","1","2","2023-09-09 15:42:19","El usuario: Jesus Castillo realizó cambios en un equipo del inventario: MAC cambió de: 00-00-00-00-00-00 a: . Cambios realizados."),
("48","1","2","2023-09-09 15:43:58","El usuario: Jesus Castillo realizó cambios en un equipo del inventario: MAC cambió de: 00-00-00-00-00-02 a: 00-00-00-00-00-32. Comentario Anterior cambió de: MODIFICANDO PC A TRAVES DEL NAME a: cambio de cosas en el codigo. Cambios realizados."),
("49","1","2","2023-09-09 16:23:15","El usuario: Jesus Castillo realizó cambios en las preguntas de seguridad: Cambio de la respuesta número 1 Cambio de la respuesta número 2 Cambio de la respuesta número 3 Cambios realizados."),
("50","1","2","2023-09-09 17:23:00","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("51","1","2","2023-09-09 17:24:01","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("52","1","2","2023-09-09 17:43:59","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("53","1","2","2023-09-09 17:44:30","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("54","1","2","2023-09-09 17:53:22","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de:  a: 04120391931. Cambios realizados."),
("55","1","2","2023-09-09 18:57:33","El usuario: Jesus Castillo realizó cambios en sus datos: Nombre de Usuario cambió de: JESUS4K a: . Telefono cambió de: 04124457287 a: . Telefono Secundario cambió de: 04120391931 a: . Correo cambió de: jesusgole33@gmail.com a: . Pin cambió de: 030320 a: . Cambios realizados."),
("56","1","2","2023-09-09 19:31:04","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de:  a: 04124457287. Cambios realizados."),
("57","1","2","2023-09-09 19:31:41","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de: 04124457287 a: . Cambios realizados."),
("58","1","2","2023-09-09 19:32:59","El usuario: Jesus Castillo realizó cambios en las preguntas de seguridad: Cambio de la respuesta número 1 Cambio de la respuesta número 2 Cambio de la respuesta número 3 Cambios realizados."),
("59","1","2","2023-09-09 19:33:59","El usuario: Jesus Castillo realizó cambios en las preguntas de seguridad: Cambio de la respuesta número 1 Cambio de la respuesta número 2 Cambio de la respuesta número 3 Cambios realizados."),
("60","1","2","2023-09-09 20:10:17","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 1 cambió.  Respuesta 2 cambió.  Respuesta 3 cambió.  Cambios realizados."),
("61","1","2","2023-09-09 20:10:55","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 1 cambió.  Respuesta 2 cambió.  Respuesta 3 cambió.  Cambios realizados."),
("62","1","2","2023-09-09 20:23:45","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 1 cambió.  Respuesta 2 cambió.  Respuesta 3 cambió.  Cambios realizados."),
("63","1","2","2023-09-09 20:42:48","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 2 cambió.  Cambios realizados."),
("64","1","2","2023-09-09 20:47:51","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 2 cambió.  Cambios realizados."),
("65","1","2","2023-09-09 20:54:20","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 2 cambió.  Cambios realizados."),
("66","1","2","2023-09-09 20:55:56","El usuario: Jesus Castillo realizó cambios en sus datos: Respuesta 2 cambió.  Cambios realizados."),
("67","1","1","2023-09-09 21:15:39","Nueva solicitud de Soporte técnico, nombre del equipo: ."),
("68","1","1","2023-09-09 21:17:10","Nueva solicitud de Soporte técnico, nombre del equipo: MDKARDEX1."),
("69","1","1","2023-09-09 21:25:38","El usuario: Jesus Castillo, ingresó un nuevo registro a la Base de Conocimiento: De ser posible verifique el origen del sonido, apague el ordenador y cree una solicitd de soporte para ser atendido lo antes posible."),
("70","1","1","2023-09-09 22:17:27","Nueva solicitud de Soporte técnico, nombre del equipo: M1DCC03."),
("71","1","2","2023-09-09 23:15:47","Actualización de solicitud de Soporte técnico, nombre del equipo: M1DPC03. Actualizada a -En Proceso-, por Antonio R Castillo A."),
("72","1","2","2023-09-09 23:19:38","Actualización de solicitud de Soporte técnico, nombre del equipo: M1DCC03. Actualizada a -En Proceso-, por Jesus Castillo, técnico designado: Antonio R Castillo A."),
("73","1","2","2023-09-09 23:23:52","Culminación de la solicitud de Soporte técnico, nombre del equipo: M1DPC03. Actualizada a -Finalizada-, por Jesus Castillo, técnico designado de realizar el soporte: Antonio R Castillo A."),
("74","1","3","2023-09-09 23:33:09","Rechazo de la solicitud de Soporte técnico, nombre del equipo: MDKARDEX1, Nro de Solicitud: 22. Se rechazó la solicitud por parte de Jesus Castillo; en espera de confirmación de rechazo."),
("75","1","3","2023-09-09 23:36:43","Rechazo de la solicitud de Soporte técnico, nombre del equipo: MDKARDEX1, Nro de Solicitud: . Se rechazó la solicitud de manera de finitiva por parte de Jesus Castillo."),
("76","1","3","2023-09-09 23:38:22","Rechazo de la solicitud de Soporte técnico, nombre del equipo: MDKARDEX1, Nro de Solicitud: 22. Se rechazó la solicitud de manera definitiva por parte de Jesus Castillo."),
("77","1","1","2023-09-10 00:23:47","Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: PCGAMER. Nro de Registro: 20."),
("79","1","1","2023-09-10 19:28:11","Se registra una nueva empresa en el sistema, bajo el nombre. NoobN, y cuyo RIF es: V-248168000. Registro hecho por: Jesus Castillo."),
("80","1","1","2023-09-10 20:29:56","Se registra una nueva empresa en el sistema, bajo el nombre. Auditoto, y cuyo RIF es: J-271464301. Registro hecho por: Jesus Castillo."),
("81","1","1","2023-09-10 21:02:20","Se registra una nueva correspondencia, bajo el nombre de la empresa: Restaurant Aincrad, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo"),
("82","1","1","2023-09-10 21:10:02","Se registra una nueva correspondencia, nro de oficio: 21212121, bajo el nombre de la empresa: Restaurant Aincrad, cuyo rif es: V-271464300. Usuario encargado del registro: Jesus Castillo"),
("83","1","2","2023-09-10 21:24:20","El usuario: Jesus Castillo aceptó correspondencia: Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados."),
("84","1","2","2023-09-10 21:26:01","El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 13;Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados."),
("85","1","2","2023-09-10 22:15:59","El usuario: Jesus Castillo realizó cambios en un equipo del inventario: Departamento cambió de: Unidad Legal a: Almacenes. División cambió de: Unidad Legal a: Almacenes. Mouse Marca cambió de: Generico a: HP. Cambios realizados."),
("86","1","2","2023-09-10 22:26:33","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A a Departamento cambió de: Coordinación de Informática a: . Division cambió de: Coordinación de Informática a: . Dirección cambió de: Dirección General a: . Rol del Usuario cambió de: Ingeniero Informático a: . Estatus cambió de: Activo a: . Cambios realizados."),
("87","1","2","2023-09-10 22:32:27","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A, cambios realizados: Sin cambios realizados."),
("88","1","2","2023-09-10 22:42:42","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A, cambios realizados: Sin cambios realizados."),
("89","1","2","2023-09-10 22:55:48","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A, cambios realizados: Departamento cambió de: Almacenes a: Coordinación de Informática. Division cambió de: Almacenes a: Coordinación de Informática. Cambios realizados."),
("90","1","2","2023-09-10 23:09:46","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A, cambios realizados: Rol del Usuario cambió de: Ingeniero Informático a: Sin Acceso. Estatus cambió de: Activo a: Inactivo. Cambios realizados."),
("91","1","2","2023-09-11 00:11:01","El usuario: Jesus Castillo, modificó el estado del usuario: Antonio R Castillo A de Sin cambios realizados."),
("92","1","2","2023-09-11 00:15:09","El usuario: Jesus Castillo, modificó el estado del usuario: Antonio R Castillo A de Estatus cambió de: Inactivo a: Activo. Cambios realizados."),
("93","1","2","2023-09-11 00:57:45","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Ingeniero Informático. Cambios realizados."),
("94","1","2","2023-09-11 00:57:54","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Antonio R Castillo A, cambios realizados: Sin cambios realizados."),
("95","1","2","2023-09-11 00:59:53","El usuario: Jesus Castillo, modificó el estado del usuario: Francisco Miranda. Estatus cambió de: Inactivo a: Activo. Cambios realizados."),
("96","1","2","2023-09-11 01:03:47","El usuario Jesus Castillo modificó la contraseña del usuario Antonio R Castillo A. El proceso fue realizado para restaurar la contraseña del usuario."),
("97","16","1","2023-09-11 01:25:49","Nuevo Usuario registrandose en el Sistema, nombre del empleado: Ad Ad, cédula V-28146430. Dicho empleado se ha registrado como trabajador de la coordinación Coordinación de Informática"),
("98","16","1","2023-09-11 01:31:49","El usuario  , acaba de registrar las preguntas de seguridad."),
("99","1","2","2023-09-11 01:34:06","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Departamento cambió de: Coordinación de Informática a: Secretaria. Division cambió de: Coordinación de Informática a: Enlace RRHH-Dirección. Rol del Usuario cambió de: Sin Acceso a: Jefe de Coordinación. Cambios realizados."),
("100","1","5","2023-09-14 22:03:35","Ingreso del Usuario: Jesus Castillo."),
("101","1","6","2023-09-14 22:13:27","Salida del sistema del usuario: Jesus Castillo. Cambios realizados: "),
("102","1","6","2023-09-14 22:13:34","Salida del sistema del usuario: Jesus Castillo. Cambios realizados: "),
("103","1","6","2023-09-14 22:16:23","Salida del sistema del usuario: Jesus Castillo. Cambios realizados: "),
("105","1","5","2023-09-14 22:19:23","Ingreso del Usuario: Jesus Castillo."),
("106","1","2","2023-09-14 22:29:42","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono cambió de: 04124457287 a: 04120391931. Telefono Secundario cambió de:  a: 04120004455. Cambios realizados."),
("107","1","6","2023-09-14 22:30:18","Salida del sistema del usuario: Jesus Castillo. Cambios realizados: "),
("109","1","5","2023-09-14 22:53:27","Ingreso del Usuario: Jesus Castillo."),
("110","1","2","2023-09-14 22:54:08","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono cambió de: 04120391931 a: 04127794698. Cambios realizados."),
("111","1","6","2023-09-14 22:54:34","Salida del sistema del usuario: Jesus Castillo. Cambios realizados: "),
("112","1","5","2023-09-14 22:59:24","Ingreso del Usuario: Jesus Castillo."),
("113","1","2","2023-09-14 23:02:34","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de: 04120004455 a: 04120391931. Cambios realizados."),
("114","1","6","2023-09-14 23:02:53","Salida del sistema del Usuario: Jesus Castillo."),
("115","1","5","2023-09-14 23:23:02","Ingreso del Usuario: Jesus Castillo."),
("116","1","6","2023-09-14 23:23:04","Salida del sistema del Usuario: Jesus Castillo."),
("117","1","5","2023-09-14 23:23:08","Ingreso del Usuario: Jesus Castillo."),
("118","1","2","2023-09-14 23:30:42","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("119","1","6","2023-09-14 23:30:58","Salida del sistema del Usuario: Jesus Castillo."),
("120","1","5","2023-09-14 23:31:03","Ingreso del Usuario: Jesus Castillo."),
("121","1","2","2023-09-14 23:31:13","El usuario: Jesus Castillo realizó cambios en sus datos: Pin cambió de: 030320 a: 040404. Cambios realizados."),
("122","1","6","2023-09-14 23:31:17","Salida del sistema del Usuario: Jesus Castillo."),
("123","1","5","2023-09-14 23:32:42","Ingreso del Usuario: Jesus Castillo."),
("124","1","6","2023-09-14 23:33:29","Salida del sistema del Usuario: Jesus Castillo."),
("125","1","5","2023-09-14 23:33:35","Ingreso del Usuario: Jesus Castillo."),
("126","1","6","2023-09-14 23:36:14","Salida del sistema del Usuario: Jesus Castillo."),
("127","1","5","2023-09-14 23:36:21","Ingreso del Usuario: Jesus Castillo."),
("128","1","2","2023-09-14 23:36:33","El usuario: Jesus Castillo realizó cambios en sus datos: Telefono Secundario cambió de: 04120391931 a: 04120004455. Cambios realizados."),
("129","1","6","2023-09-14 23:36:37","Salida del sistema del Usuario: Jesus Castillo."),
("130","1","5","2023-09-14 23:36:42","Ingreso del Usuario: Jesus Castillo."),
("131","1","6","2023-09-14 23:36:45","Salida del sistema del Usuario: Jesus Castillo."),
("132","1","5","2023-09-14 23:40:21","Ingreso del Usuario: Jesus Castillo."),
("133","1","6","2023-09-14 23:41:16","Salida del sistema del Usuario: Jesus Castillo."),
("134","1","5","2023-09-15 18:36:45","Ingreso del Usuario: Jesus Castillo."),
("135","1","6","2023-09-15 18:47:48","Salida del sistema del Usuario: Jesus Castillo."),
("136","1","5","2023-09-15 18:55:28","Ingreso del Usuario: Jesus Castillo."),
("137","1","6","2023-09-15 18:55:40","Salida del sistema del Usuario: Jesus Castillo."),
("138","1","5","2023-09-15 19:01:03","Ingreso del Usuario: Jesus Castillo."),
("139","1","6","2023-09-15 19:07:46","Salida del sistema del Usuario: Jesus Castillo."),
("140","1","5","2023-09-15 19:50:01","Ingreso del Usuario: Jesus Castillo."),
("141","1","6","2023-09-15 19:52:00","Salida del sistema del Usuario: Jesus Castillo."),
("142","1","5","2023-09-15 19:54:45","Ingreso del Usuario: Jesus Castillo."),
("143","1","6","2023-09-15 20:03:30","Salida del sistema del Usuario: Jesus Castillo."),
("144","1","5","2023-09-15 20:43:47","Ingreso del Usuario: Jesus Castillo."),
("145","1","2","2023-09-15 20:56:56","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Jack Torrence, cambios realizados: Estatus cambió de: Activo a: Inactivo. Cambios realizados."),
("146","1","2","2023-09-15 20:57:29","El usuario: Jesus Castillo, modificó el estado del usuario: Jack Torrence. Estatus cambió de: Inactivo a: Activo. Cambios realizados.");
INSERT INTO z1_historial_camb_sis VALUES
("147","1","2","2023-09-15 20:59:57","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Jack Torrence, cambios realizados: Estatus cambió de: Activo a: Inactivo. Cambios realizados."),
("148","1","2","2023-09-15 21:00:07","El usuario: Jesus Castillo, modificó el estado del usuario: Jack Torrence. Estatus cambió de: Inactivo a: Activo. Cambios realizados."),
("149","1","2","2023-09-15 21:06:14","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Sin cambios realizados."),
("150","1","2","2023-09-15 21:12:09","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Sin cambios realizados."),
("151","1","2","2023-09-15 21:14:43","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Sin cambios realizados."),
("152","1","2","2023-09-15 21:14:49","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Rol del Usuario cambió de: Jefe de Coordinación a: Sin Acceso. Estatus cambió de: Activo a: Inactivo. Cambios realizados."),
("153","1","2","2023-09-15 21:15:15","El usuario: Jesus Castillo, modificó el estado del usuario: Ad Ad. Estatus cambió de: Inactivo a: Activo. Cambios realizados."),
("154","1","2","2023-09-15 21:15:26","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Rol del Usuario cambió de: Sin Acceso a: Secretario. Cambios realizados."),
("155","1","6","2023-09-15 21:39:14","Salida del sistema del Usuario: Jesus Castillo."),
("156","1","5","2023-09-15 21:52:40","Ingreso del Usuario: Jesus Castillo."),
("157","1","6","2023-09-15 22:18:49","Salida del sistema del Usuario: Jesus Castillo."),
("158","1","5","2023-09-15 22:23:18","Ingreso del Usuario: Jesus Castillo."),
("159","1","6","2023-09-15 22:33:27","Salida del sistema del Usuario: Jesus Castillo."),
("160","1","5","2023-09-15 22:34:35","Ingreso del Usuario: Jesus Castillo."),
("161","1","6","2023-09-15 22:36:44","Salida del sistema del Usuario: Jesus Castillo."),
("162","1","5","2023-09-15 22:57:58","Ingreso del Usuario: Jesus Castillo."),
("163","1","6","2023-09-15 23:31:31","Salida del sistema del Usuario: Jesus Castillo."),
("164","1","5","2023-09-15 23:51:27","Ingreso del Usuario: Jesus Castillo."),
("165","1","2","2023-09-16 00:42:16","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("166","1","2","2023-09-16 00:42:16","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("167","1","2","2023-09-16 00:43:14","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("168","1","2","2023-09-16 00:45:25","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("169","1","2","2023-09-16 00:47:32","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("170","1","2","2023-09-16 00:50:39","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("171","1","2","2023-09-16 00:51:50","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("172","1","2","2023-09-16 00:53:18","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("173","1","2","2023-09-16 00:53:36","El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 15. Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados."),
("174","1","2","2023-09-16 00:53:39","El usuario: Jesus Castillo aceptó correspondencia, con el nro de admisión 14. Estatus de la Correspondencia cambió de: En espera a Confirmado. Cambios realizados."),
("175","1","6","2023-09-16 00:57:18","Salida del sistema del Usuario: Jesus Castillo."),
("176","1","5","2023-09-16 19:39:50","Ingreso del Usuario: Jesus Castillo."),
("177","1","2","2023-09-16 19:40:07","El usuario: Jesus Castillo realizó cambios en sus datos: Sin cambios realizados."),
("178","1","2","2023-09-16 19:42:24","El usuario: Jesus Castillo realizó cambios en sus datos: Contraseña cambió. Cambios realizados."),
("179","1","6","2023-09-16 20:02:29","Salida del sistema del Usuario: Jesus Castillo."),
("180","1","5","2023-09-16 20:20:17","Ingreso del Usuario: Jesus Castillo."),
("181","1","6","2023-09-16 20:27:19","Salida del sistema del Usuario: Jesus Castillo."),
("182","1","5","2023-09-16 20:48:37","Ingreso del Usuario: Jesus Castillo."),
("183","1","5","2023-09-16 20:59:30","Ingreso del Usuario: Jesus Castillo."),
("184","1","6","2023-09-16 21:04:30","Salida automática del sistema, del Usuario: Jesus Castillo."),
("185","1","5","2023-09-16 21:07:13","Ingreso del Usuario: Jesus Castillo."),
("186","1","2","2023-09-16 21:09:07","El usuario: Jesus Castillo realizó cambios en los datos del empleado: Ad Ad, cambios realizados: Rol del Usuario cambió de: Secretario a: Sin Acceso. Estatus cambió de: Activo a: Inactivo. Cambios realizados."),
("187","1","6","2023-09-16 21:12:13","Salida automática del sistema, del Usuario: Jesus Castillo."),
("188","1","6","2023-09-16 21:24:19","Salida automática del sistema, del Usuario: ."),
("189","1","6","2023-09-16 21:24:21","Salida del sistema del Usuario: Jesus Castillo."),
("190","1","5","2023-09-16 22:43:57","Ingreso del Usuario: Jesus Castillo."),
("191","1","6","2023-09-16 22:48:57","Salida automática del sistema, del Usuario: Jesus Castillo."),
("192","1","5","2023-09-16 22:50:59","Ingreso del Usuario: Jesus Castillo."),
("193","1","6","2023-09-16 22:55:59","Salida automática del sistema, del Usuario: Jesus Castillo."),
("194","1","5","2023-09-16 22:57:33","Ingreso del Usuario: Jesus Castillo."),
("195","1","6","2023-09-16 23:02:33","Salida automática del sistema, del Usuario: Jesus Castillo."),
("196","1","5","2023-09-16 23:03:19","Ingreso del Usuario: Jesus Castillo."),
("197","1","6","2023-09-16 23:08:19","Salida automática del sistema, del Usuario: Jesus Castillo."),
("198","1","6","2023-09-16 23:08:31","Salida del sistema del Usuario: Jesus Castillo."),
("199","1","5","2023-09-16 23:08:47","Ingreso del Usuario: Jesus Castillo."),
("200","1","6","2023-09-16 23:08:49","Salida del sistema del Usuario: Jesus Castillo."),
("201","1","5","2023-09-17 17:06:45","Ingreso del Usuario: Jesus Castillo."),
("202","1","6","2023-09-17 17:14:41","Salida del sistema del Usuario: Jesus Castillo."),
("203","1","5","2023-09-17 18:08:24","Ingreso del Usuario: Jesus Castillo."),
("204","1","6","2023-09-17 18:18:34","Salida del sistema del Usuario: Jesus Castillo."),
("205","1","5","2023-09-17 20:57:07","Ingreso del Usuario: Jesus Castillo."),
("206","1","6","2023-09-17 21:20:31","Salida del sistema del Usuario: Jesus Castillo."),
("207","1","5","2023-09-17 21:30:14","Ingreso del Usuario: Jesus Castillo."),
("208","1","7","2023-09-17 21:38:09","Nuevo respaldo de la base de datos creado en fecha: 2023-09-17. Creado por el usuario: Jesus Castillo."),
("209","1","7","2023-09-17 21:54:27","Nuevo respaldo de la base de datos creado en fecha: 2023-09-17. Creado por el usuario: Jesus Castillo."),
("210","1","7","2023-09-17 21:55:12","Nuevo respaldo de la base de datos creado en fecha: 2023-09-17. Creado por el usuario: Jesus Castillo."),
("211","1","7","2023-09-17 22:11:16","Nuevo respaldo de la base de datos creado en fecha: 2023-09-17. Creado por el usuario: Jesus Castillo.");




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