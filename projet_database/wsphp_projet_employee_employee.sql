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
-- Table structure for table `employee_employee`
--

DROP TABLE IF EXISTS `employee_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_employee` (
  `Employee_ID` int NOT NULL AUTO_INCREMENT,
  `Employee_Entreprise_ID` int DEFAULT NULL,
  `Employee_FirstName` varchar(45) DEFAULT NULL,
  `Employee_MiddleName` varchar(45) DEFAULT NULL,
  `Employee_LastName` varchar(45) DEFAULT NULL,
  `Employee_Gender` varchar(45) DEFAULT NULL,
  `Employee_EmailAddress` varchar(45) DEFAULT NULL,
  `Employee_Title` varchar(45) DEFAULT NULL,
  `Employee_Department` varchar(45) DEFAULT NULL,
  `Employee_ModifiedDate` date DEFAULT NULL,
  PRIMARY KEY (`Employee_ID`),
  KEY `Employee_Entreprise_ID_idx` (`Employee_Entreprise_ID`),
  CONSTRAINT `Employee_Entreprise_ID` FOREIGN KEY (`Employee_Entreprise_ID`) REFERENCES `entreprise_entreprise` (`Entreprise_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_employee`
--

LOCK TABLES `employee_employee` WRITE;
/*!40000 ALTER TABLE `employee_employee` DISABLE KEYS */;
INSERT INTO `employee_employee` VALUES (1,1,'Sylvain','Lafontaine','Breton','Male','sb@gmail.com','art curator','Aesthetic & Design','2021-03-04'),(2,3,'Luc','Terreur','Désilet','Male','ldv@gmail.com','employee','Clean Department ','2021-03-04'),(3,5,'Isabelle','Lebreton','Beauvoir','Female','ilb@gmail.com','director','Communication','2021-03-04'),(4,5,'Nathalie','Passemont','Nasse','Female','npn@gmail.com','manager','Politics','2021-03-04'),(5,7,'Manon','Desbiens','Masse','Female','mdm@gmail.com','employee','Administration','2021-03-04'),(6,7,'Marie-Eve','Ghislaine','Mercure','Female','memercure@osm.ca','Director','Sponsorship','2021-03-04');
/*!40000 ALTER TABLE `employee_employee` ENABLE KEYS */;
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
