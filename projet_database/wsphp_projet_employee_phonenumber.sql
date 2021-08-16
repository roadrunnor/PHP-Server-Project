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
-- Table structure for table `employee_phonenumber`
--

DROP TABLE IF EXISTS `employee_phonenumber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_phonenumber` (
  `PhoneNumber_Employee_ID` int DEFAULT NULL,
  `PhoneNumber_ID` int NOT NULL AUTO_INCREMENT,
  `PhoneNumberType_ID` int DEFAULT NULL,
  `PhoneNumber` varchar(45) DEFAULT NULL,
  `PhoneNumber_ModifiedDate` date DEFAULT NULL,
  PRIMARY KEY (`PhoneNumber_ID`),
  KEY `PhoneNumber_Employee_ID_idx` (`PhoneNumber_Employee_ID`),
  KEY `PhoneNumberType_ID_idx` (`PhoneNumberType_ID`),
  CONSTRAINT `PhoneNumber_Employee_ID` FOREIGN KEY (`PhoneNumber_Employee_ID`) REFERENCES `employee_employee` (`Employee_ID`),
  CONSTRAINT `PhoneNumberType_ID` FOREIGN KEY (`PhoneNumberType_ID`) REFERENCES `employee_phonenumbertype` (`PhoneNumberType_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_phonenumber`
--

LOCK TABLES `employee_phonenumber` WRITE;
/*!40000 ALTER TABLE `employee_phonenumber` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_phonenumber` ENABLE KEYS */;
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
