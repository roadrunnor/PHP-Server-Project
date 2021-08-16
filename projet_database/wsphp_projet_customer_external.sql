-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: wsphp_projet
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `customer_external`
--

DROP TABLE IF EXISTS `customer_external`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_external` (
  `Customer_ID` int NOT NULL AUTO_INCREMENT,
  `Customer_email` varchar(128) NOT NULL,
  `Customer_pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_external`
--

LOCK TABLES `customer_external` WRITE;
/*!40000 ALTER TABLE `customer_external` DISABLE KEYS */;
INSERT INTO `customer_external` VALUES (1,'sb@gmail.com','$2y$10$2ThHJwQ1z/0X/6AS3CSTxe9fmSrvEjS09ScBB7xaDolLZCMXdk8pa'),(2,'sbb@aaa.ca','$2y$10$G4WTkex9RrSXRbFuoMcnceXUsnx7ZNbii6COUUpKW5meBn2cmUaRm'),(3,'test@gmail.com','$2y$10$16ReyqmN8T6DrobfMfdgrebQbGBmBu27WsY/bVbNfpus.HQo7nGvy'),(4,'sylvain.breton@gmail.com','$2y$10$wTOrLT.vCabLWQ4oz4IoWuwe1YrWVqmWdWKcaZ01SuxV.Ff8Zv3AW'),(5,'test@test.com','$2y$10$/thwFLUT0min6Xmze9IX3ekirHaUFHNpitoTkTBwwkAnfSYF31bE6'),(6,'sylvain.breton@yahoo.com','$2y$10$Ekk.ERxIXmuQiG.S3jDvrux1Ug0H2jTXIWUjFsyZV5LouwNiPzVNa'),(7,'sylvain.breton@gmail.com','$2y$10$OSz8umC4AYNvsR1V88NRtOoOJV.v8hgzyp1.qt6u3sGa77stX5OGm'),(8,'sv@gmail.com','$2y$10$Ow400QyQIQdKYh.SJKYrLOunY1Y9Lv1Avqh4wPFsE1Wckba9419va'),(9,'sv@gmail.com','$2y$10$G2mPEtjPjkQ0V2mgjxQ3Iu2eiZFxCMWSCe0XAswl2SLqCBtnuBnHS'),(10,'sbreton@yahoo.com','$2y$10$qaLvHu5QXCgHxuGWmiz01OKxMT4xuBMGis/5CiDe6t1oqiTy02bwy'),(11,'sylvain.breton@gmail.com','$2y$10$sQOuewj.yrNUmbjzZN6GteBRazdYtOSSX22aeShl2YZ2N3bNgWWeK'),(12,'mahdi.vakili@gmail.com','$2y$10$tAvOi/lGurtQrJVeJwEtY.TjwZVh75Eusww5.PDKi.OpxYKrgTNcK'),(13,'sb@hotmail.com','$2y$10$JNl32zUaNdLf/gM4cFtWheCU6GkUMvJViN8d7S7ZOz5iJ9RwVkgFG'),(14,'sb@sb.com','$2y$10$OIsESSxJtKO0qDWCExAfkeGr1dzVUViwVQ1oHtwU/SymE56zVKwEm'),(15,'test@test.com','$2y$10$pTor2EN175d/PVhs.IbnKeSjLxQzRoo2.bmH.Lg.74HxUBodtxo5G'),(16,'info@sb.com','$2y$10$4g6tKzWE6RnnL5S8d1Okm.yoPHt9iEU5NJ3WZdhjnOw7gNweHibje'),(17,'test2@test.com','$2y$10$7KjQpevl7HnXzghW2yAlI.kiMTqXNas1RYthj2ErlOyL59l1tUaTS'),(18,'madhi@gmail.com','$2y$10$LIF7XrLsXbDb4qxLCJToYu6K7hMp4Mhjc0WLoq8tE/w5QmjVSIkVO'),(19,'sylvain@gmail.com','$2y$10$lrivEyMJi3WS0N3HSAMRaePrhbfAwEs0eKj0kTkMXINxYk05BmuU6'),(20,'mahdi@go.com','$2y$10$jUsZmJ3SYkNhn8NGtoze.u/KKQFnb7UmOpSOtYn4hXEu.42pZhr.W'),(21,'wael@go.com','$2y$10$irAtHu/CBxPbhAGTgecaCug2jDdd0hrmYHe/ivYDi7yaOO.j6.F9G'),(22,'ricardo@go.com','$2y$10$7RMe5pwt6pl48lwkfNTk1e/laKtCzxONISvpo2k4K5012v5LKR8Dy');
/*!40000 ALTER TABLE `customer_external` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-04 22:24:30
