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
-- Table structure for table `sc_usuarios`
--

DROP TABLE IF EXISTS `sc_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sc_usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `estatus_usuario` int(11) DEFAULT NULL,
  `apellido_paterno` varchar(45) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `primer_nombre` varchar(45) DEFAULT NULL,
  `segundo_nombre` varchar(45) DEFAULT NULL,
  `whatsapp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `usuario_registra` varchar(45) DEFAULT NULL,
  `fecha_reg_usuario` datetime DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `date_exact_reg` datetime DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_device` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sc_usuarios`
--

LOCK TABLES `sc_usuarios` WRITE;
/*!40000 ALTER TABLE `sc_usuarios` DISABLE KEYS */;
INSERT INTO `sc_usuarios` VALUES (1,0,'Sarmiento','Spalkova','Rafael','Martin','2147483647','abcm@gmail.com','MatrixTron','Matrix','Rafael','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(2,1,'Sarmiento','Rengifo','Rafael','Humberto','2147483647','abcmsarmiento@gmail.com','Martin7','Martin7','Rafael','0000-00-00 00:00:00','admin',NULL,NULL,NULL),(3,1,'Sarmiento','Carter','Alena','Belen','07429637185','alena@gmail.com','Alena','Alena','','2019-12-12 14:42:54','Medico','2019-12-12 14:42:54','201.103.83.59','Windows'),(4,1,'Sarmiento','Cochetti','Gabriel','Leonardo','+72 07429637185','gabo@gmail.com','GABO','Gabo','Martin7','2019-12-12 14:51:03','Enfermero(a)','2019-12-12 14:51:03','201.103.83.59','Windows'),(5,1,'Sarmiento','Perez','Rafa','Humbe','07429637185','rafa@gmail.com','Rafa','8ba7245b4559da4fe04145ad4a1ed010','Martin7','2019-12-12 21:58:17','admin','2019-12-12 21:58:17','189.216.98.0','Windows'),(6,1,'Sarmiento','Spalkova','Rafael','Martin','07429637185','abcmsarmiento@gmail.com','RAMA','6a42a7a9d38150dd930ffb398151496f','Rafa','2019-12-13 00:49:39','admin','2019-12-13 00:49:39','189.216.99.128','Windows');
/*!40000 ALTER TABLE `sc_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-16 16:10:55
