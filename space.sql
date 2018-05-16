-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: space
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'sanjana','lol'),(2,'varsh','satan');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isms`
--

DROP TABLE IF EXISTS `isms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fileisms` varchar(100) NOT NULL,
  `msno` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isms`
--

LOCK TABLES `isms` WRITE;
/*!40000 ALTER TABLE `isms` DISABLE KEYS */;
/*!40000 ALTER TABLE `isms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ln`
--

DROP TABLE IF EXISTS `ln`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ln` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fileln` varchar(100) NOT NULL,
  `lnno` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ln`
--

LOCK TABLES `ln` WRITE;
/*!40000 ALTER TABLE `ln` DISABLE KEYS */;
INSERT INTO `ln` VALUES (5,'SearchUsecase.pdf','11','new','2018-05-16'),(6,'NOUNS.docx','02','htmlll','2018-05-16');
/*!40000 ALTER TABLE `ln` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nsms`
--

DROP TABLE IF EXISTS `nsms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nsms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `filensms` varchar(100) NOT NULL,
  `msno` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nsms`
--

LOCK TABLES `nsms` WRITE;
/*!40000 ALTER TABLE `nsms` DISABLE KEYS */;
INSERT INTO `nsms` VALUES (1,'spacex.html','1','falcon 9','2018-03-21'),(2,'','001','falcon 9','2018-03-21');
/*!40000 ALTER TABLE `nsms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Adhi','Past07'),(2,'Edwin','Hulk'),(3,'Maya','Past12'),(4,'Meet','Sindhi'),(5,'Minhaaj','Deadpool'),(6,'Pallavi','Rishi'),(7,'Rishi','Pallavi'),(8,'Ronak','BadGuju'),(9,'Roshan','Cute'),(10,'Tarun','B0000');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upcoming`
--

DROP TABLE IF EXISTS `upcoming`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upcoming` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fileup` varchar(100) NOT NULL,
  `upno` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upcoming`
--

LOCK TABLES `upcoming` WRITE;
/*!40000 ALTER TABLE `upcoming` DISABLE KEYS */;
/*!40000 ALTER TABLE `upcoming` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-16 22:08:47
