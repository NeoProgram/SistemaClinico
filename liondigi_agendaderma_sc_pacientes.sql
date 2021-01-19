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
-- Table structure for table `sc_pacientes`
--

DROP TABLE IF EXISTS `sc_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sc_pacientes` (
  `paciente_id` int(11) NOT NULL AUTO_INCREMENT,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `primer_nombre` varchar(45) NOT NULL,
  `segundo_nombre` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `notas` mediumtext,
  `clinica_id` varchar(45) NOT NULL,
  `medio_registro` varchar(45) NOT NULL,
  `usuario_registra` varchar(45) NOT NULL,
  `fecha_reg_paciente` date NOT NULL,
  `date_exact_reg` datetime NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_device` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`paciente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sc_pacientes`
--

LOCK TABLES `sc_pacientes` WRITE;
/*!40000 ALTER TABLE `sc_pacientes` DISABLE KEYS */;
INSERT INTO `sc_pacientes` VALUES (1,'','','','','0','0','','','','','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(2,'Sarmiento','Spalkova','Rafael','Martin','2147483647','2147483647','abcmsarmiento@gmail.com','First Patient','6','3','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(3,'Sarmiento','Spalkova','Katerina','Ana','2147483647','2147483647','abcmsarmiento@gmail.com','Ana','3','2','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(4,'Sarmiento','Carter','Ester','Catalina','2147483647','2147483647','abcmsarmiento@gmail.com','Cata','2','1','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(5,'Sarmiento','Carter','Alena','Belen','2147483647','2147483647','abcmsarmiento@gmail.com','Belen','4','5','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(6,'Sarmiento','Spalkova','Rafael','Humberto','2147483647','2147483647','abcmsarmiento@gmail.com','Rafa','1','4','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(7,'Sarmiento','Cochetti','Leo','Rafael','2147483647','2147483647','abcmsarmiento@gmail.com','Leo','1','6','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(8,'ggg','hhh','jjj','kkk','2147483647','2147483647','abcmsarmiento@gmail.com','GGG','3','0','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(9,'','','','','0','0','','','0','0','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(10,'','','','','0','0','','','0','0','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(11,'Sarmiento','Spalkova','Rafael','Martin','2147483647','2147483647','abcmsarmiento@gmail.com','New','2','1','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(12,'Sarmiento','Spalkova','Rafael','Martin','2147483647','2147483647','abcmsarmiento@gmail.com','NEW clinica_id','6','1','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(13,'Rodriguez','Spalkova','Nicko','Martin','2147483647','2147483647','nicko@gmail.com','redirect','6','1','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(14,'Rodriguez','Carter','Sebastian','Humberto','2147483647','2147483647','sony@sony.com','Sebas','2','4','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(15,'Ricardo','Perez','Lenovo','Humberto','2147483647','2147483647','lenovo@lenovo.com','RED','4','6','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(16,'','','','','0','0','','','1','1','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(17,'paterno','materno','fernando','segundo nombre','2147483647','2147483647','fernando@liondigital.mx','primer registro ','1','2','Rafael','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(18,'Perez','Angarita','Ramon','Orlando','2147483647','2147483647','raor@gmail.com','Cambios1','6','1','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(19,'Morales','Paternina','Guillermo','Pedro','2147483647','2147483647','guillo@gmail.com','test1','3','3','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(20,'Suarez','Jota','Zuta','Guiro','2147483647','2147483647','lenovo@lenovo.com','test2','4','1','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(21,'Ramirez','Costeno','ramiro','Raul','2147483647','2147483647','sony@sony.com','test3','5','1','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(22,'Fulano','De tal','Fulgencio','Confucio','2147483647','2147483647','fulcon@lenovo.com','test5','2','5','','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(23,'Terna','Binario','Saulo','Federico','2147483647','2147483647','saufe@apple.com','test7','6','1','Martin7','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(24,'Gale','Galiano','Diego','Alberto','2147483647','2147483647','diego@gmail.com','test9','3','1','Martin7','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(25,'Hoyos','Canal','Maria','Paula','2147483647','2147483647','mapau@sony.com','test10','3','2','Martin7','0000-00-00','0000-00-00 00:00:00',NULL,NULL),(26,'Filtro','Rosca','Paco','Lucio','2147483647','2147483647','paco@apple.com','test11','2','1','Martin7','2019-12-09','0000-00-00 00:00:00',NULL,NULL),(27,'Hoy','Manana','Hola','Bye','2147483647','2147483647','holabye@apple.com','test12','4','1','Martin7','2019-12-09','2019-12-09 20:36:28',NULL,NULL),(28,'Monaco','Paris','Juan','Camilo','2147483647','2147483647','juca@gmail.com','test20','1','1','Martin7','2019-12-10','2019-12-10 12:59:03',NULL,NULL),(29,'Italia','Francia','Paris','Monaco','2147483647','2147483647','pamo@sony.com','test21','1','1','Martin7','2019-12-10','2019-12-10 13:03:15',NULL,NULL),(30,'Bueno','Malo','Uno','Dos','2147483647','2147483647','uno@sony.com','test22','1','1','Martin7','2019-12-10','2019-12-10 13:09:49','201.103.63.192',NULL),(31,'Buendia','Petrona','Aureliano','Agustin','2147483647','2147483647','auag@sony.com','test23','1','1','Martin7','2019-12-10','2019-12-10 13:26:40','201.103.63.192','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.'),(32,'Trespalacios','Castillo','Manuel','Daniel','2147483647','2147483647','mada@apple.com','test25','1','1','Martin7','2019-12-10','2019-12-10 13:31:13','201.103.63.192',''),(33,'Montoya','Hiliarte','Juan','Pablo','2147483647','2147483647','jupa@sony.com','test26','1','1','Martin7','2019-12-10','2019-12-10 13:36:15','201.103.63.192','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.'),(34,'Narino','Santander','Anibal','Berto','2147483647','2147483647','abe@sony.com','test27','1','1','Martin7','2019-12-10','2019-12-10 13:40:02','201.103.63.192','Windows'),(35,'Bolivar','Chavez','Simon','Tulio','2147483647','2147483647','situ@lenovo.com','test28','1','1','Martin7','2019-12-10','2019-12-10 13:44:07','201.103.63.192','Windows'),(36,'Fundacion','Magdalena','Efrain','Domingo','+44 7777777777','2147483647','efdo@apple.com','test30','1','1','Martin7','2019-12-10','2019-12-10 13:51:38','201.103.63.192','Windows'),(37,'Ricaute','Patria','Antonio','marcio','+52 9999999999','+32 8888888888','anma@sony.com','test31','1','1','Martin7','2019-12-10','2019-12-10 13:54:14','201.103.63.192','Windows'),(38,'Ultimo','Penultimo','Vamos','Palla','+99 123456789','+55 987654321','ultimo@gmail.com','Ultimo','3','3','Martin7','2019-12-12','2019-12-12 14:58:51','201.103.83.59','Windows');
/*!40000 ALTER TABLE `sc_pacientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-16 16:11:16
