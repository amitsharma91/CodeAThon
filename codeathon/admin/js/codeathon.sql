-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: codeathon
-- ------------------------------------------------------
-- Server version	5.7.12-log

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
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','1234');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) NOT NULL,
  `round_type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,'Write program to display Prime numbers.',2),(2,'This is a sample Question with max size 80 characters llllllllllllllllllllllllll',2),(4,'d',2),(6,'dfsgg',2),(7,'sdfsdf',2),(30,'fdgd',3),(31,'fdg',3),(32,'fdg',3),(33,'wer',3),(34,'sdfsdf',3),(35,'xcvzxzcv',3),(36,'fsdsdf',3),(37,'sdfsadf',3),(39,'fsdf',3),(40,'dfsdfa',3),(41,'sdfas',3);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_mcq`
--

DROP TABLE IF EXISTS `question_mcq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_mcq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(60) NOT NULL,
  `opt1` varchar(40) NOT NULL,
  `opt2` varchar(40) NOT NULL,
  `opt3` varchar(40) NOT NULL,
  `opt4` varchar(40) NOT NULL,
  `answer` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_mcq`
--

LOCK TABLES `question_mcq` WRITE;
/*!40000 ALTER TABLE `question_mcq` DISABLE KEYS */;
INSERT INTO `question_mcq` VALUES (18,'gh','hj','gjg','fjh','j','3'),(19,'ghm','mhgm','hgm','ghmghm','ghmg','1'),(20,'lkj','lkj','lkjlk','jlkj','lkjl','3'),(21,'f','fdg','df','mnm','n,mn','3'),(22,'gfg','fgb','fgb','gbg','gbfg','1'),(23,'f','fgbf','ff','ff','ff','1'),(24,'fdg','dfg','dfg','dfg','fdg','1'),(25,'v','kjh','kjhkj','hkj','hkjh','0'),(26,'ds','jkh','jkhk','h','j','0'),(27,'dsf','kjh','kjh','kjh','j','0'),(28,'jhkhjkjhkj','hkkj','jh','kjh','kj','1'),(29,'Fsgsvxhshxsgdh','Gdj','Hdvfh','Ggdh','Gdhdu','2'),(30,'Ydh','Gdj','Dgsg','Gsgd','Gdgdu','4');
/*!40000 ALTER TABLE `question_mcq` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-25  8:23:56
