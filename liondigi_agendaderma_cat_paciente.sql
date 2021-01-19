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
-- Table structure for table `cat_paciente`
--

DROP TABLE IF EXISTS `cat_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_paciente` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `folio` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_P` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apaterno_P` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Amaterno_M` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `ac_pac` int(1) DEFAULT NULL,
  `dateadd` datetime DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_paciente`
--

LOCK TABLES `cat_paciente` WRITE;
/*!40000 ALTER TABLE `cat_paciente` DISABLE KEYS */;
INSERT INTO `cat_paciente` VALUES (1,'HP211019','Fern','grim','hop',NULL,NULL,NULL,NULL,NULL),(4,'12324','jav','vier','lopez',20,NULL,NULL,NULL,NULL),(5,'J19v23','jav','vier','lopez',20,NULL,NULL,NULL,NULL),(6,'J19v23','vic','tor','tr',20,NULL,NULL,NULL,NULL),(7,'J19v23','vic','tor','tr',20,NULL,NULL,NULL,NULL),(8,'J19v23','vic','tor','tr',20,NULL,NULL,NULL,NULL),(9,'sdadsad','vic','tor','tr',20,NULL,NULL,NULL,NULL),(10,'sdadsad','vic','tor','tr',20,NULL,NULL,NULL,NULL),(11,'ff1019',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'10f10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'f10f10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'javier 19',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'javi 10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'f10f10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'SSADDDS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cat_paciente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-16 16:11:04
