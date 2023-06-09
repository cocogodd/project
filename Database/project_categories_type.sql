-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories_type`
--

DROP TABLE IF EXISTS `categories_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(4500) DEFAULT NULL,
  `Categories_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categories_type_Categories1_idx` (`Categories_id`),
  CONSTRAINT `fk_categories_type_Categories1` FOREIGN KEY (`Categories_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=ucs2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_type`
--

LOCK TABLES `categories_type` WRITE;
/*!40000 ALTER TABLE `categories_type` DISABLE KEYS */;
INSERT INTO `categories_type` VALUES (1,'Cooking pots',1),(2,'Cooking Pans',1),(3,'Frying Pans',1),(4,'Cookware Sets',1),(5,'Handis',1),(6,'Kadais [Karahi]',1),(7,'Grill pans',1),(8,'Tawas',1),(9,'Egg Poachers',1),(10,'Steamers',1),(11,'Freezers',2),(12,'Refrigerators',2),(13,'Blenders',3),(14,'Bread Makers',3),(15,'Coffee Makers',3),(16,'Ice-Cream and sorbet makers',3),(17,'Electric Kettles',3),(18,'Food Choppers',3),(19,'Toasters',3),(20,'Flask',4),(21,'Spice Jars',4),(22,'Storage Bags',4),(23,'Lunch Boxes',4),(24,'Vacuum bottles',4);
/*!40000 ALTER TABLE `categories_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-14 12:55:20
