-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host:     Database: hackathon
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `motivation` int(11) DEFAULT NULL,
  `confidence` int(11) DEFAULT NULL,
  `oppertunity` int(11) DEFAULT NULL,
  `physical_competence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'john','pass','john@john.com','John','Parsons',21,'Male','Edinburgh, Fife and East',7,5,8,8),(2,'juri','','','Juri','Ilmjarv',21,'Male','Glasgow and West',5,8,7,6),(3,'test','test','test','Test','Tester',30,'Female','NE, Orkney and Shetland',7,6,6,6),(4,'yo','','yo@yo.com','Yousef','Hollister',65,'Male','Tayside and Central',4,3,5,3),(5,'zohaib','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,NULL,'','yo@yo.com',NULL,NULL,22,'male','here',NULL,NULL,NULL,NULL),(7,NULL,'','yo@yo.com',NULL,NULL,22,'male','here',NULL,NULL,NULL,NULL),(8,NULL,'','yo@yo.com',NULL,NULL,22,'male','here',NULL,NULL,NULL,NULL),(9,NULL,'','yo@yo.com',NULL,NULL,22,'male','here',NULL,NULL,NULL,NULL),(10,NULL,'','yo2@yo.com',NULL,NULL,2,'male','here also',NULL,NULL,NULL,NULL),(11,NULL,'','yo2@yo.com',NULL,NULL,2,'male','here also',NULL,NULL,NULL,NULL),(12,NULL,'','testbyz@email.com',NULL,NULL,55,'male','glasgow',NULL,NULL,NULL,NULL),(13,NULL,'','testtslnl@fjnf.com',NULL,NULL,87,'kjhghj','khsdikhsh',NULL,NULL,NULL,NULL),(14,NULL,'','x@x.com',NULL,NULL,1,'m','1',NULL,NULL,NULL,NULL),(15,NULL,'1','y@y.com',NULL,NULL,1,'male','there',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-27  5:31:36
