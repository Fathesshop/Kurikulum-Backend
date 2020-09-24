-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: dzul
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asrama`
--

DROP TABLE IF EXISTS `asrama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asrama` (
  `id_asrama` int NOT NULL AUTO_INCREMENT,
  `asrama_santri` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_asrama`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asrama`
--

LOCK TABLES `asrama` WRITE;
/*!40000 ALTER TABLE `asrama` DISABLE KEYS */;
INSERT INTO `asrama` VALUES (1,'asrama 1'),(2,'asrama 2'),(3,'asrama 3');
/*!40000 ALTER TABLE `asrama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data` (
  `id_nama` int DEFAULT NULL,
  `id_jurusan` int DEFAULT NULL,
  `id_asrama` int DEFAULT NULL,
  KEY `id_nama` (`id_nama`),
  KEY `id_jurusan` (`id_jurusan`),
  KEY `id_asrama` (`id_asrama`),
  CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_nama`) REFERENCES `nama` (`id_nama`),
  CONSTRAINT `data_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  CONSTRAINT `data_ibfk_3` FOREIGN KEY (`id_asrama`) REFERENCES `asrama` (`id_asrama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` VALUES (1,1,1),(3,1,3),(5,2,2),(4,3,2),(2,3,3);
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jurusan` (
  `id_jurusan` int NOT NULL AUTO_INCREMENT,
  `jurusan_santri` varchar(10) DEFAULT NULL,
  `id_nama` int DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`),
  KEY `id_nama` (`id_nama`),
  CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_nama`) REFERENCES `nama` (`id_nama`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES (1,'backend',1),(2,'frontend',5),(3,'mobile',2);
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nama`
--

DROP TABLE IF EXISTS `nama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nama` (
  `id_nama` int NOT NULL AUTO_INCREMENT,
  `nama_santri` varchar(50) DEFAULT NULL,
  `id_jurusan` int DEFAULT NULL,
  PRIMARY KEY (`id_nama`),
  KEY `id_jurusan` (`id_jurusan`),
  CONSTRAINT `nama_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nama`
--

LOCK TABLES `nama` WRITE;
/*!40000 ALTER TABLE `nama` DISABLE KEYS */;
INSERT INTO `nama` VALUES (1,'dzulmaarij',1),(2,'fauzil',3),(3,'ridho',1),(4,'fathesshop',3),(5,'fathullah',2);
/*!40000 ALTER TABLE `nama` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-24  9:38:51
