-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.56-community - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-07-25 14:50:37
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for covoffic_cov
DROP DATABASE IF EXISTS `covoffic_cov`;
CREATE DATABASE IF NOT EXISTS `covoffic_cov` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `covoffic_cov`;


-- Dumping structure for table covoffic_cov.imagenes
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `ext` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL DEFAULT '0',
  `fecha_creacion` int(11) NOT NULL DEFAULT '0',
  `creado_por` varchar(500) NOT NULL,
  `fecha_borrado` int(11) NOT NULL DEFAULT '0',
  `borrado_por` int(11) NOT NULL DEFAULT '0',
  `borrado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Dumping data for table covoffic_cov.imagenes: 6 rows
DELETE FROM `imagenes`;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` (`id`, `nombre`, `ext`, `path`, `fecha_creacion`, `creado_por`, `fecha_borrado`, `borrado_por`, `borrado`) VALUES
	(13, 'Desert.jpg', 'jpg', 'gallery/Desert.jpg', 1437532382, '2', 1437845807, 2, 1),
	(14, 'Hydrangeas.jpg', 'jpg', 'gallery/Hydrangeas.jpg', 1437533146, '2', 1437845799, 2, 1),
	(15, 'Jellyfish.jpg', 'jpg', 'gallery/Jellyfish.jpg', 1437533251, '2', 1437845727, 2, 1),
	(16, 'Tulips.jpg', 'jpg', 'gallery/Tulips.jpg', 1437842294, '2', 1437845419, 2, 1),
	(12, 'Chrysanthemum.jpg', 'jpg', 'gallery/Chrysanthemum.jpg', 1437531958, '1', 1437845636, 2, 1),
	(11, 'foto nota 3 - ODEPA (1).JPG', 'JPG', 'gallery/foto nota 3 - ODEPA (1).JPG', 1436635711, '1', 1437845498, 2, 1),
	(17, 'Koala.jpg', 'jpg', 'gallery/Koala.jpg', 1437845566, '2', 1437845586, 2, 1),
	(18, 'Penguins.jpg', 'jpg', 'gallery/Penguins.jpg', 1437845582, '2', 1437845620, 2, 1),
	(19, 'Chrysanthemum.jpg', 'jpg', 'gallery/Chrysanthemum.jpg', 1437845823, '2', 1437845962, 2, 1),
	(20, 'Desert.jpg', 'jpg', 'gallery/Desert.jpg', 1437845832, '2', 0, 0, 0),
	(21, 'Hydrangeas.jpg', 'jpg', 'gallery/Hydrangeas.jpg', 1437845840, '2', 0, 0, 0),
	(22, 'Jellyfish.jpg', 'jpg', 'gallery/Jellyfish.jpg', 1437845853, '2', 1437845970, 2, 1),
	(23, 'Koala.jpg', 'jpg', 'gallery/Koala.jpg', 1437845866, '2', 1437845980, 2, 1),
	(24, 'Lighthouse.jpg', 'jpg', 'gallery/Lighthouse.jpg', 1437845876, '2', 0, 0, 0),
	(25, 'Penguins.jpg', 'jpg', 'gallery/Penguins.jpg', 1437845886, '2', 1437846030, 2, 1),
	(26, 'Tulips.jpg', 'jpg', 'gallery/Tulips.jpg', 1437845895, '2', 1437845967, 2, 1);
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;


-- Dumping structure for table covoffic_cov.noticias
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `subtitulo` tinytext,
  `fuente` varchar(500) DEFAULT NULL,
  `fecha` int(15) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `contenido` longtext,
  `imagen` text,
  `fecha_creacion` int(15) DEFAULT NULL,
  `creado_por` int(15) DEFAULT NULL,
  `fecha_edicion` int(15) DEFAULT NULL,
  `editado_por` int(15) DEFAULT NULL,
  `fecha_borrado` int(15) DEFAULT NULL,
  `borrado_por` int(15) DEFAULT NULL,
  `borrado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table covoffic_cov.noticias: ~7 rows (approximately)
DELETE FROM `noticias`;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `fuente`, `fecha`, `autor`, `contenido`, `imagen`, `fecha_creacion`, `creado_por`, `fecha_edicion`, `editado_por`, `fecha_borrado`, `borrado_por`, `borrado`) VALUES
	(3, 'Inscritos los atletas Venezolanos', '351 atletas, fueron los inscritos para competir en los XVII Juegos Deportivos Panamericanos que se realizarán en Toronto del 10 al 26 de julio.', 'Prensa Comité Olímpico Venezolano', 1435788000, 'Salvador Almea', '<p>La delegaci&oacute;n qued&oacute; inscrita con 351 atletas, 196 en masculino y 155 en feminino. El proceso se llev&oacute; a cabo en el Centro de Bienvenida de la Villa de los atletas Panamericanos/para panamericanos CIBC en Toronto, ubicada en: 65 Trinity Street, Toronto,ON. M5A3T1.</p>\r\n<p>En esta reuni&oacute;n donde todo se realiz&oacute; con toda normalidad, estuvieron presentes por Venezuela, el licenciado Arturo Castillo, Jefe de Misi&oacute;n de la delegaci&oacute;n de Venezuela; la doctora Elida P&aacute;rraga, Secretaria General del COV; la seńora &Eacute;lida Barreto, responsable de acreditaci&oacute;n del COV; la licenciada Magdampi Mar&iacute;n, Coordinadora T&eacute;cnica y Jos&eacute; Rivas, por Mindeporte. Por el Comit&eacute; Organizador de los juegos TO2015, Paola Mora Gerente de Servicios a los CON; Sarah Hardouin Coordinadora de Servicios de Acreditaci&oacute;n y Carole Fuchs Gerente de Inscripci&oacute;n Deportiva.</p>\r\n<p><span class="blue">Los puntos a tratar de esta reuni&oacute;n fueron:</span><br />Inscripciones Deportivas: se revis&oacute; el reporte de Inscripci&oacute;n nominal, para garantizar la participaci&oacute;n de los atletas y sus eventos.</p>\r\n<p><span class="blue">Calculadora de Tamańo estimado de Delegaci&oacute;n:</span>&nbsp;Actualizaci&oacute;n de la Calculadora.</p>\r\n<p><span class="blue">Acreditaci&oacute;n:</span>&nbsp;revisi&oacute;n del reporte de privilegios de acceso, para asegurar que se respeten en lineamientos de acreditaci&oacute;n y que los privilegios de accesos de cada delegado u oficial sean correctos revisi&oacute;n de herramientas de Asignaci&oacute;n de Oficiales de equipo, para confirmar las asignaciones ALL - 3 - 1 y las transferencia de Ao.</p>\r\n<p><span class="blue">Asignaci&oacute;n:</span>&nbsp;revisi&oacute;n de los espacios asignados al CON en la Villa y Hospedaje Sat&eacute;lite.</p>\r\n<p><span class="blue">Servicio a los CON:</span>&nbsp;revisi&oacute;n del cuestionario de la DRM, as&iacute; como tratar cualquier punto de inter&eacute;s.</p>\r\n<p>Adem&aacute;s de los atletas, tambi&eacute;n se realiz&oacute; la inscripci&oacute;n de los oficiales, 1 Jefe de Misi&oacute;n, 3 Subjefes de Misi&oacute;n, 1 Attache Panamericano y 1 Veterinario, se suman a la delegaci&oacute;n de participantes en los Juegos Panamericanos.</p>', 'gallery/news/noticia-img.png', NULL, NULL, 1437444857, 2, NULL, NULL, 0),
	(4, 'Dos cupos adicionales para Venezuela', '353 atletas para Venezuela, luego de que la Comisión Técnica otorgara dos plazas. Los maratonistas Zuleima Amaya y Luis Orta se suman al contingente del atletismo.       ', 'Prensa Comité Olímpico Venezolano', 1436220000, 'Salvador Almea', '<p>Luego de que el presidente del Comit&eacute; Ol&iacute;mpico Venezolano, profesor Eduardo &Aacute;lvarez sostuviera una reuni&oacute;n con la comisi&oacute;n t&eacute;cnica del atletismo, donde le fue solicitada reconsideraci&oacute;n de los cupos asignados obtenidos (24), &nbsp;para poder cumplir con la cuota especificada en los manuales de clasificaci&oacute;n, que era de 680, donde una vez que se realiz&oacute; el corte de los m&aacute;s de mil atletas en la regi&oacute;n que hab&iacute;an hecho la marca m&iacute;nima, para optar a la clasificaci&oacute;n, Venezuela vio afectado el n&uacute;mero de posibles clasificados de 43 a 24, se pudo conseguir que le permitieran a los maratonistas criollos, Zuleima Amaya y Luis Orta, ser los atletas 352 y 353 inscritos para competir en estos XVII Juegos Deportivos Panamericanos, Toronto 2015.</p>\r\n<p>Luego de hacer una revisi&oacute;n de los atletas, &nbsp;31 ser&iacute;a el n&uacute;mero que la comisi&oacute;n t&eacute;cnica de la disciplina aument&oacute; luego de evaluar a todo el contingente de atletas que quedaron fuera del proceso clasificatorio a los juegos m&aacute;s importantes del continente. De este aumento, pudo Venezuela hacerse con dos cupos.</p>\r\n<p>&ldquo;Entendemos que pese a lo expuesto en los manuales de clasificaci&oacute;n, hubo incomunicaci&oacute;n, para definir con claridad entre las partes este punto en particular con los procesos de clasificaci&oacute;n de los participantes del atletismo&rdquo; dijo el profesor &Aacute;lvarez, para continuar, &ldquo;pero, haber conseguido dos nuevos cupos ante esta contingencia, permite ampliar las opciones de participaci&oacute;n de nuestros atletas&rdquo;.</p>\r\n<p>De la comisi&oacute;n t&eacute;cnica del atletismo en estos juegos se dijo que en funci&oacute;n de tratar de no afectar a los atletas, se tom&oacute; la decisi&oacute;n de incrementar el n&uacute;mero de clasificados, de 680 a 711, entendiendo que todo se fundamentaba no solo en estos procesos clasificatorios, sino en la capacidad operativa y de funcionalidad de la Villa, la transportaci&oacute;n, log&iacute;stica del Comit&eacute; Organizador. Tambi&eacute;n sali&oacute; del pronunciamiento de la comisi&oacute;n t&eacute;cnica, que permanecen abiertos evaluando caso por caso de cada atleta, para dentro de las posibilidades operativas descritas, buscar la manera de aumentar un poco m&aacute;s el n&uacute;mero de atletas aceptados para ser inscritos, entre los cuales podr&iacute;an estar otros atletas venezolanos.</p>\r\n<p>La decisi&oacute;n y nuevo pronunciamiento se realizar&iacute;a muy pronto.</p>', 'gallery/news/Foto Nota 1 ZULEIMA_AMAYA (1).JPG', NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(5, 'Sigue Venezuela arribando a la Villa', '', 'Prensa Comité Olímpico Venezolano', 1436220000, 'Salvador Almea', '<p>De los 351 atletas venezolanos inscritos a participar a los XVII Juegos Deportivos Panamericanos, en Toronto, se encuentran 83 atletas de 15 disciplinas deportivas, alojados en la Villa Panamericana, d&aacute;ndole colorido venezolano al edificio Cottage Country del conjunto residencial que servir&aacute; de dormitorio a la representaci&oacute;n de los 41 pa&iacute;ses miembros de la ODEPA.</p>\r\n<p>Los 26 integrantes de los dos equipos de Polo Acu&aacute;tico (13 masculinos y 13 femenino); 2 integrantes del nado sincronizado; 12 judocas (5 femenino y 7 masculino). Asimismo 13 integrantes de levantamiento de pesas (6 femenino y 7 masculino). Con ellos 2 representantes del b&aacute;dminton y triatl&oacute;n (1 por g&eacute;nero); el ciclismo de monta&ntilde;a con un ciclista masculino. Remo y canotaje con 7 y 18 respectivamente, detallados en g&eacute;nero, tenemos al remo con 3 en masculino y 4 en femenino; el canotaje con 13 en masculino y 5 en femenino. En ecuestre 1 f&eacute;mina y dos en masculino.</p>\r\n<p>El d&iacute;a de hoy es el turno de la entrada a la Villa de 20 atletas, de 5 deportes. Estos son Aguas abiertas (2 caballeros y 2 damas); Clavados con 3 en masculino y 1 en femenino; BMX con 2 caballeros y 1 dama; Tenis con 3 en masculino y 2 en femenino, cerrando con el Patinaje de velocidad, que ingresa con 2 por g&eacute;nero.</p>\r\n<p>Cabe destacar que el Ciclismo de monta&ntilde;a se alojar&aacute; en la sub sede de Horseshoe, tanto el remo como el canotaje lo har&aacute; en Brock, con el ecuestre en la sub sede de Nottawasaga.</p>', 'gallery/news/Foto nota 2 - FOTOGRAFO CARLOS PUCHE (1).JPG', NULL, NULL, NULL, NULL, 1437532886, 2, 1),
	(6, 'LII Asamblea General Extraordinaria', 'Con la presencia del presidente del Comité Olímpico Internacional, Thomas Bach, se instaló la Asamblea Extraordinaria del organismo panamericano, en la ciudad de Toronto.', 'Prensa Comité Olímpico Venezolano', 1436220000, 'Salvador Almea', '<p>La primera sesi&oacute;n de la Asamblea General Extraordinaria de la Organizaci&oacute;n Deportiva Panamericana, se instal&oacute; con la presencia del presidente del Comit&eacute; Ol&iacute;mpico Internacional, Tomas Bach, en los salones de conferencia del Hotel Westin Harbour Castle, de la ciudad de Toronto. La asamblea fue presidida por el se&ntilde;or Julio Maglione, presidente de la ODEPA, con la presencia de los presidentes y secretarios generales de la regi&oacute;n. La misma cont&oacute; con la presencia del presidente del Comit&eacute; Ol&iacute;mpico Venezolano, profesor Eduardo &Aacute;lvarez y la secretaria general doctora Elida P&aacute;rraga de &Aacute;lvarez.</p>\r\n<p>Entre los temas de la agenda se destacan la aprobaci&oacute;n de las minutas de la 52va. Asamblea General llevada a cabo en Puerto Vallarta, M&eacute;xico el pasado 11 de enero y de la Asamblea General Extraordinaria realizada en Miami el 11 de abril de este mismo a&ntilde;o.</p>\r\n<p>Dentro de los reportes administrativos presentados estuvieron los del presidente, secretario general, tesorer&iacute;a, as&iacute; como de la auditor&iacute;a interna. El tema de la Solidaridad Ol&iacute;mpica Panamericana, fue de gran importancia al describir el crecimiento de los &uacute;ltimos dos a&ntilde;os, de las ayudas a los atletas y entrenadores a trav&eacute;s de cursos y becas, as&iacute; como el programa de ayuda de preparaci&oacute;n para los Juegos Ol&iacute;mpicos de R&iacute;o de Janeiro.</p>\r\n<p>Asimismo los informes del Comit&eacute; Organizador de los XVII Juegos Panamericanos, Toronto 2015, referente a las comisiones de coordinaci&oacute;n, la comisi&oacute;n t&eacute;cnica y la comisi&oacute;n m&eacute;dica.</p>\r\n<p>M&aacute;s adelante, se expusieron los reportes de los comit&eacute;s organizadores de los Juegos Panamericanos a realizarse en Lima en 2019 y R&iacute;o 2016.</p>\r\n<p>La asamblea concluir&aacute; este mi&eacute;rcoles 8 con una intervenci&oacute;n del presidente del Comit&eacute; Ol&iacute;mpico Internacional, Thomas Bach.</p>', 'gallery/news/foto nota 3 - ODEPA (1).JPG', NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(8, 'Prueba Cambio Titulo no Imagen', 'Prueba de cambio en imagen', 'Cuarto de Yomi', 1449442800, 'Yomar Medina', '<p>Probando ando el cambio de imagen</p>', 'gallery/news/55a2dd658f129_Penguins.jpg', NULL, NULL, NULL, NULL, 1436737616, NULL, 1),
	(9, 'Marion esta loca', 'Un reportaje exclusivo de lo loca que esta Marion', 'Cuarto de Yomi', 1449442800, 'Yomar Medina', '<p>Marion esta super mega recontra loca, pero de remate.</p>', 'gallery/news/55a2e3fb08e4b_Tulips.jpg', 1436738555, 1, 1436738640, 1, 1436738663, 1, 1),
	(10, 'Prueba', 'Prueba', 'Prueba', 1438380000, 'Prueba', '<p>Prueba</p>', 'gallery/news/55adab6048756_Jellyfish.jpg', 1437444960, 2, 1437444985, 2, 1437444993, 2, 1);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


-- Dumping structure for table covoffic_cov.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `apellido` varchar(250) DEFAULT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `correo` varchar(250) DEFAULT NULL,
  `contrasena` varchar(500) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `borrado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table covoffic_cov.usuarios: 5 rows
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `correo`, `contrasena`, `admin`, `borrado`) VALUES
	(1, 'Marion', 'Carambula', 'mc2ion', 'mc2.ions@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
	(2, 'Administrador', 'General', 'admin', 'rrmedinach@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
	(3, 'Yeilimar', 'Viloria', 'yviloria', 'yei.vilo3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
	(4, 'Yomar', 'Medina', 'ailema39', 'ailema39@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
	(5, 'Prueba', 'Mendoza', 'pmendoza', 'pmendoza@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
