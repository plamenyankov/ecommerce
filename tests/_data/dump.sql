-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: ecomm
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Laptop',NULL,'2014-10-06 01:58:56','2014-10-06 01:58:56'),(2,'Phone',NULL,'2014-10-06 01:58:56','2014-10-06 01:58:56'),(3,'Tablet',NULL,'2014-10-06 01:58:56','2014-10-06 01:58:56');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_09_30_052654_create_categories_table',1),('2014_09_30_052940_create_products_table',1),('2014_10_03_214058_create_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,2,'Vanessa Homenick','Sint laudantium fuga dolorem nihil nesciunt voluptatem itaque magnam quis dolorem.',528.00,0,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:56','2014-10-06 01:58:56'),(2,2,'Asia Luettgen','Pariatur fugiat similique officiis non velit ab accusantium deleniti et quas.',213.00,0,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:56','2014-10-06 01:58:56'),(3,1,'Desiree Denesik','Inventore dolor suscipit molestiae incidunt aut impedit a.',796.00,0,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:56','2014-10-06 01:58:56'),(4,1,'Krystel Cronin DVM','Ratione voluptas doloremque illo deserunt placeat fugit.',927.00,1,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(5,2,'Mrs. Marianna Crona DDS','Blanditiis consequatur vitae et debitis iure maxime corporis ut quas sit quo.',94.00,1,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(6,1,'Maximillia Cummerata MD','Aspernatur perspiciatis dolor sint animi harum nihil recusandae voluptatem quam suscipit ut laboriosam.',572.00,1,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(7,1,'Lauryn Weimann V','Quis velit eius qui vel porro occaecati quia doloremque eos incidunt alias.',27.00,0,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(8,1,'Dr. Elsie Terry','Quia doloribus molestiae explicabo expedita sit error iste similique sint.',654.00,1,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(9,2,'Flo Gleichner','Qui et omnis pariatur minus quae doloremque.',621.00,1,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(10,2,'Marcelina Rohan','Saepe sit omnis vel dolor autem omnis doloribus beatae.',339.00,0,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(11,2,'Letitia Kemmer','Sed et optio consequatur tenetur deleniti necessitatibus animi alias itaque sit.',45.00,1,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57'),(12,2,'Dr. Judge Yost Sr.','Doloremque repellat deserunt nihil quidem commodi quia vel accusamus quam.',787.00,0,'http://lorempixel.com/500/300/technics/','2014-10-06 01:58:57','2014-10-06 01:58:57');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','Schroeder','justen61@russel.com','$2y$10$MwJ3bQQ.W9UxAU5CVnNi.edFMq2Sb/x3VBk/01tNnhsjArVv2Y4ee','(150)636-9657x1999',1,NULL,'2014-10-06 01:58:54','2014-10-06 01:58:54'),(2,'Ms. Rachael Williamson','Smith','nolan.jaydon@hahnharber.com','$2y$10$YePgZaU.lwE003giODdkoup7pbQ51VCJjAdhbZJ/iZx8EEANn7TIK','626-452-0940',0,NULL,'2014-10-06 01:58:54','2014-10-06 01:58:54'),(3,'Trudie Kutch','Kiehn','hfay@roob.info','$2y$10$HBQi6aQPfx9c8jmRJvQv5u2R3Ic8QkCPUmOUV7g25fCcpjes0kZRC','1-889-226-1330x753',0,NULL,'2014-10-06 01:58:54','2014-10-06 01:58:54'),(4,'Garnet Terry','Bergnaum','kristian.kohler@hotmail.com','$2y$10$g.dNj.n3jt5Zov160TBjZuGFOXjY4P5wBx.gNR/ccVpPcLWZans5m','316-836-1215',0,NULL,'2014-10-06 01:58:54','2014-10-06 01:58:54'),(5,'Dr. Santiago Kemmer V','Balistreri','lconsidine@hotmail.com','$2y$10$9WWhrsG93YKIilrOwNdGn.nH3txdHlqAEarRvC9dVknnWCpMOE65.','704.581.3063',0,NULL,'2014-10-06 01:58:55','2014-10-06 01:58:55'),(6,'Marian Walsh','Schulist','tyrique.beier@hotmail.com','$2y$10$7hBdsr7drlzjeJrUfBcr/OsOT05RK3Y/RRN/ANeV0P07q/Cpzmup.','689.235.6440x4735',0,NULL,'2014-10-06 01:58:55','2014-10-06 01:58:55'),(7,'Ms. Anna Jacobi DVM','Lemke','lgibson@hansenferry.com','$2y$10$BxQNPp9tLORazeww37dNH.hKp6RWXxG7Ije4EJWq773Y2Ee5HwdmS','(883)589-8519',0,NULL,'2014-10-06 01:58:55','2014-10-06 01:58:55'),(8,'Effie Keeling','Spinka','rhirthe@lehner.com','$2y$10$O7p19l49U2ls/SK0J0OA4u3lfm5vI21I4M7m4D83woS0/uucSBPHm','+62(2)7835959588',0,NULL,'2014-10-06 01:58:55','2014-10-06 01:58:55'),(9,'Ova Tremblay II','Ferry','walton.schmeler@hoeger.biz','$2y$10$vF9Bz7cbbKLhEt/qfGJYUe4ymUrYlFeEJ8l.hm/KXNt876K1ILN7a','(784)139-3779x820',0,NULL,'2014-10-06 01:58:56','2014-10-06 01:58:56'),(10,'Shana Heaney','Terry','haylee32@yahoo.com','$2y$10$H1iTevf03Rm7/KxHdDhVbOb5ZvN7hnrbD2k8T33pN79CnUbAYzmNS','107-126-8170',0,NULL,'2014-10-06 01:58:56','2014-10-06 01:58:56'),(11,'Anabel Tromp','Renner','rkonopelski@gmail.com','$2y$10$0YWSOVDvywRz95ZaYYEu5uk2p50.vdDOJ4HITAr3Hs4HmKBJpcmiu','696.795.4716x90534',0,NULL,'2014-10-06 01:58:56','2014-10-06 01:58:56');
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

-- Dump completed on 2014-10-06  8:02:44
