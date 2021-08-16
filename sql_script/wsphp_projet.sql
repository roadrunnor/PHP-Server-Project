SET sql_notes = 0;
CREATE DATABASE IF NOT EXISTS `wsphp_projet`;
USE `wsphp_projet`;


DROP TABLE IF EXISTS `employee_employee`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `employee_phonenumber`;
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

DROP TABLE IF EXISTS `employee_phonenumbertype`;
CREATE TABLE `employee_phonenumbertype` (
  `PhoneNumberType_ID` int NOT NULL AUTO_INCREMENT,
  `PhoneNumberType` varchar(45) DEFAULT NULL,
  `PhoneNumberType_ModifiedDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PhoneNumberType_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `entreprise_address`;
CREATE TABLE `entreprise_address` (
  `Address_ID` int NOT NULL AUTO_INCREMENT,
  `Address_Entreprise_ID` int DEFAULT NULL,
  `AddressType_ID` int DEFAULT NULL,
  `Address_Line1` varchar(45) DEFAULT NULL,
  `Address_Line2` varchar(45) DEFAULT NULL,
  `Address_City` varchar(45) DEFAULT NULL,
  `Address_Province` varchar(45) DEFAULT NULL,
  `Address_Country` varchar(45) DEFAULT NULL,
  `Address_PostalCode` varchar(45) DEFAULT NULL,
  `Address_AddressWeb` varchar(45) DEFAULT NULL,
  `Address_ModifiedDate` date DEFAULT NULL,
  PRIMARY KEY (`Address_ID`),
  KEY `Address_AddressType_ID_idx` (`AddressType_ID`),
  KEY `Address_Entreprise_ID_idx` (`Address_Entreprise_ID`),
  CONSTRAINT `Address_AddressType_ID` FOREIGN KEY (`AddressType_ID`) REFERENCES `entreprise_addresstype` (`AddressType_ID`),
  CONSTRAINT `Address_Entreprise_ID` FOREIGN KEY (`Address_Entreprise_ID`) REFERENCES `entreprise_entreprise` (`Entreprise_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `entreprise_addresstype`;
CREATE TABLE `entreprise_addresstype` (
  `AddressType_ID` int NOT NULL AUTO_INCREMENT,
  `AddressType` varchar(45) DEFAULT NULL,
  `AddressType_ModifiedDate` date DEFAULT NULL,
  PRIMARY KEY (`AddressType_ID`),
  KEY `Entreprise_ModifiedDate_idx` (`AddressType_ModifiedDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `entreprise_entreprise`;
CREATE TABLE `entreprise_entreprise` (
  `Entreprise_ID` int NOT NULL AUTO_INCREMENT,
  `Entreprise_Name` varchar(45) DEFAULT NULL,
  `Entreprise_Note` varchar(45) DEFAULT NULL,
  `Entreprise_DateInscription` date DEFAULT NULL,
  `Entreprise_DateModification` date DEFAULT NULL,
  PRIMARY KEY (`Entreprise_ID`),
  KEY `Entreprise_DateModification_idx` (`Entreprise_DateModification`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `customer_external`;
CREATE TABLE `customer_external` (
  `customer_ID` int NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(128) NOT NULL,
  `customer_pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

COMMIT;

SELECT `customer_external`.`customer_ID`,
    `customer_external`.`customer_email`,
    `customer_external`.`customer_pwd`
FROM `wsphp_projet`.`customer_external`;

SELECT `employee_employee`.`Employee_ID`,
    `employee_employee`.`Employee_Entreprise_ID`,
    `employee_employee`.`Employee_FirstName`,
    `employee_employee`.`Employee_MiddleName`,
    `employee_employee`.`Employee_LastName`,
    `employee_employee`.`Employee_Gender`,
    `employee_employee`.`Employee_EmailAddress`,
    `employee_employee`.`Employee_Title`,
    `employee_employee`.`Employee_Department`,
    `employee_employee`.`Employee_ModifiedDate`
FROM `wsphp_projet`.`employee_employee`;

SELECT `employee_phonenumber`.`PhoneNumber_Employee_ID`,
    `employee_phonenumber`.`PhoneNumber_ID`,
    `employee_phonenumber`.`PhoneNumberType_ID`,
    `employee_phonenumber`.`PhoneNumber`,
    `employee_phonenumber`.`PhoneNumber_ModifiedDate`
FROM `wsphp_projet`.`employee_phonenumber`;

SELECT `employee_phonenumbertype`.`PhoneNumberType_ID`,
    `employee_phonenumbertype`.`PhoneNumberType`,
    `employee_phonenumbertype`.`PhoneNumberType_ModifiedDate`
FROM `wsphp_projet`.`employee_phonenumbertype`;

SELECT `entreprise_address`.`Address_ID`,
    `entreprise_address`.`Address_Entreprise_ID`,
    `entreprise_address`.`AddressType_ID`,
    `entreprise_address`.`Address_Line1`,
    `entreprise_address`.`Address_Line2`,
    `entreprise_address`.`Address_City`,
    `entreprise_address`.`Address_Province`,
    `entreprise_address`.`Address_Country`,
    `entreprise_address`.`Address_PostalCode`,
    `entreprise_address`.`Address_AddressWeb`,
    `entreprise_address`.`Address_ModifiedDate`
FROM `wsphp_projet`.`entreprise_address`;

SELECT `entreprise_addresstype`.`AddressType_ID`,
    `entreprise_addresstype`.`AddressType`,
    `entreprise_addresstype`.`AddressType_ModifiedDate`
FROM `wsphp_projet`.`entreprise_addresstype`;

SELECT `entreprise_entreprise`.`Entreprise_ID`,
    `entreprise_entreprise`.`Entreprise_Name`,
    `entreprise_entreprise`.`Entreprise_Note`,
    `entreprise_entreprise`.`Entreprise_DateInscription`,
    `entreprise_entreprise`.`Entreprise_DateModification`
FROM `wsphp_projet`.`entreprise_entreprise`;

