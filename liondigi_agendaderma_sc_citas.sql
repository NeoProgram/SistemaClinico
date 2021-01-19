-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 192.185.122.74    Database: liondigi_agendaderma
-- ------------------------------------------------------
-- Server version	5.6.41-84.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sc_citas`
--

DROP TABLE IF EXISTS `sc_citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sc_citas` (
  `cita_id` int(11) NOT NULL AUTO_INCREMENT,
  `estatus_cita` int(11) DEFAULT NULL,
  `cita_comienza` datetime DEFAULT NULL,
  `cita_termina` datetime DEFAULT NULL,
  `fecha_reg_cita` date DEFAULT NULL,
  `date_exact_reg` datetime DEFAULT NULL,
  `usuario_registra` varchar(45) DEFAULT NULL,
  `paciente_id` int(11) DEFAULT NULL,
  `clinica_id` int(11) DEFAULT NULL,
  `medico_id` int(11) DEFAULT NULL,
  `procedimiento_id` int(11) DEFAULT NULL,
  `consulta_id` int(11) DEFAULT NULL,
  `expediente_id` int(11) DEFAULT NULL,
  `medio_registro` int(11) DEFAULT NULL,
  `apellido_paterno` varchar(45) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `primer_nombre` varchar(45) DEFAULT NULL,
  `segundo_nombre` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `notas` mediumtext,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_device` varchar(45) DEFAULT NULL,
  `fecha_hora_cita` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cita_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sc_citas`
--

LOCK TABLES `sc_citas` WRITE;
/*!40000 ALTER TABLE `sc_citas` DISABLE KEYS */;
INSERT INTO `sc_citas` VALUES (1,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',2,6,NULL,3,NULL,4,3,'Sarmiento','Cochetti','Rafael','Leonardo','2147483647','2147483647','leo@gmail.com','First Appointment',NULL,NULL,NULL),(2,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',3,3,0,8,NULL,3,5,'Sarmiento','Spalkova','Katerina','Ana','2147483647','2147483647','abcmsarmiento@gmail.com','AAAAA',NULL,NULL,NULL),(3,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',5,2,0,8,NULL,3,1,'Sarmiento','Spalkova','Rafael','Humberto','2147483647','2147483647','abcmsarmiento@gmail.com','uytruytu',NULL,NULL,NULL),(4,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',7,4,0,2,NULL,4,1,'Sarmiento','Perez','Rafael','Leonardo','2147483647','2147483647','abcmsarmiento@gmail.com','lkjljl',NULL,NULL,NULL),(5,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',6,1,3,8,NULL,1,1,'Sarmiento','Spalkova','Rafael','Humberto','2147483647','2147483647','abcmsarmiento@gmail.com','yoiyuoi',NULL,NULL,NULL),(6,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',4,3,5,2,NULL,4,4,'Martinez','Hoy','Carlos','Edy','2147483647','2147483647','carlose@gmail.com','Carlos',NULL,NULL,NULL),(7,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',8,4,1,8,NULL,2,7,'Herazo','Velez','Ramon','Teo','2147483647','2147483647','ramont@gmail.com','Ramon',NULL,NULL,NULL),(8,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'0',11,1,3,1,NULL,1,1,'Fer','FER','fer','fer','2147483647','2147483647','fer@gmail.com','Fer',NULL,NULL,NULL),(9,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','2019-12-13','2019-12-13 13:42:11','0',38,3,1,3,4,0,1,'Ultimo','Penultimo','Vamos','Palla','+99 123456789','+55 987654321','ultimo@gmail.com','Ultimo','201.103.83.59','Windows','12/31/2019 12:00 AM - 12/31/2019 01:00 PM'),(10,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','2019-12-13','2019-12-13 13:57:35','0',37,1,1,8,1,0,1,'Ricaute','Patria','Antonio','marcio','+52 9999999999','+32 8888888888','anma@sony.com','test31','201.103.83.59','Windows','01/01/2020 05:00 AM - 01/01/2020 06:00 PM'),(11,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','2019-12-13','2019-12-13 14:03:28','0',36,1,3,2,4,0,3,'Fundacion','Magdalena','Efrain','Domingo','+44 7777777777','2147483647','efdo@apple.com','test30','201.103.83.59','Windows','01/31/2020 10:00 AM - 01/31/2020 11:00 AM'),(12,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','2019-12-13','2019-12-13 14:11:18','Rafa',35,1,1,8,3,0,1,'Bolivar','Chavez','Simon','Tulio','2147483647','2147483647','situ@lenovo.com','test28','201.103.83.59','Windows','02/01/2020 02:00 PM - 02/01/2020 03:00 PM');
/*!40000 ALTER TABLE `sc_citas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-16 16:10:57
