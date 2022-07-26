-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema systemflow
--

CREATE DATABASE IF NOT EXISTS systemflow;
USE systemflow;

--
-- Definition of table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id_clients',
  `name` varchar(166) DEFAULT NULL,
  `nickname` varchar(166) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `email` varchar(166) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `neighborhood` varchar(166) DEFAULT NULL,
  `city` varchar(166) DEFAULT NULL,
  `complement` varchar(166) DEFAULT NULL,
  `cover` varchar(166) DEFAULT NULL,
  `state` char(10) DEFAULT NULL,
  `physical` tinyint(1) DEFAULT NULL,
  `legal` tinyint(1) DEFAULT NULL,
  `site` varchar(166) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `company` varchar(166) DEFAULT NULL,
  `profession` varchar(166) DEFAULT NULL,
  `economic_activity` varchar(166) DEFAULT NULL,
  `marital_status` char(20) DEFAULT NULL,
  `parentage` varchar(166) DEFAULT NULL,
  `naturalness` varchar(166) DEFAULT NULL,
  `nationality` varchar(166) DEFAULT NULL,
  `number_client` varchar(166) DEFAULT NULL,
  `observation` text DEFAULT NULL,
  `document_cpf` char(14) DEFAULT NULL,
  `document_rg` char(20) DEFAULT NULL,
  `document_pis` char(20) DEFAULT NULL,
  `voter_registration` varchar(166) DEFAULT NULL,
  `document_cnh` varchar(166) DEFAULT NULL,
  `document_passport` varchar(166) DEFAULT NULL,
  `document_reservist` varchar(166) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`,`name`,`nickname`,`phone`,`email`,`address`,`neighborhood`,`city`,`complement`,`cover`,`state`,`physical`,`legal`,`site`,`birth`,`company`,`profession`,`economic_activity`,`marital_status`,`parentage`,`naturalness`,`nationality`,`number_client`,`observation`,`document_cpf`,`document_rg`,`document_pis`,`voter_registration`,`document_cnh`,`document_passport`,`document_reservist`,`created_at`,`updated_at`) VALUES 
 (36,'Adriel Douglas MIranda das Neves','Miranda','5566996707440','adrielneves3@gmail.com','Rua Manoel Antonio de Almeida','Jd Atlântico','Rondonópolis','Perto da farmácia compre sempre','client/b4gjT2PSeCMRdYxOz54GAFHRXw7KEth325mDnAYT.png','MT',0,1,'www.campany.com.br','1990-04-13','Company Adriel Douglas','Desenvolvedor','1517','Solteiro','Jocilene Miranda das Neves','Rondonópolis','Brasileiro','123','Processando a empresa','044.230.591-50','51569874','156843','Zona 23','AB','15698','1879 Dispensado','2022-07-22 18:03:42','2022-07-22 18:03:43');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;


--
-- Definition of table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;


--
-- Definition of table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES 
 (1,'2014_10_12_000000_create_users_table',1),
 (2,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES 
 (1,'Tony Stark','dev@gmail.com',NULL,'$2y$10$E5LQEOiQgiY3R5r3JLSeKukN5L.pNv8oGgGkT6pzMXclO4VeeU2Km',NULL,'2022-07-03 20:52:03','2022-07-03 20:52:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
