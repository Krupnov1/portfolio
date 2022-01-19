-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: car
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `article_products`
--

DROP TABLE IF EXISTS `article_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article_products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `article` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_products`
--

LOCK TABLES `article_products` WRITE;
/*!40000 ALTER TABLE `article_products` DISABLE KEYS */;
INSERT INTO `article_products` VALUES (1,'00001ЛА'),(2,'00002ЛА'),(3,'00003ЛА'),(4,'00004ЛА'),(5,'00005ЛА'),(6,'00006ЛА'),(7,'00007ЛА'),(8,'00008ЛА'),(9,'00009ЛА'),(10,'00010ЛА');
/*!40000 ALTER TABLE `article_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `basket` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `products_id` int unsigned NOT NULL,
  `quantity` int NOT NULL,
  `id_session` varchar(125) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_basket_products1_idx` (`products_id`),
  CONSTRAINT `fk_basket_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` VALUES (1,2,4,'qwert567','2021-03-30 15:48:41',NULL,NULL),(2,3,1,'zxfr789','2021-03-30 15:48:41',NULL,NULL),(3,6,2,'nhy123','2021-03-30 15:48:41',NULL,NULL),(4,8,1,'mnio986','2021-03-30 15:48:41',NULL,NULL),(5,7,4,'rty678','2021-03-30 15:48:41','2021-03-31 11:53:49',NULL),(6,4,2,'uytr567','2021-03-31 11:05:43',NULL,NULL),(7,9,1,'mng457','2021-03-31 11:05:43',NULL,NULL),(8,10,1,'zxer3490','2021-03-31 11:05:43',NULL,NULL),(9,3,8,'lksa1290','2021-03-31 11:05:43',NULL,NULL),(10,5,3,'cfbn5487','2021-03-31 11:05:43',NULL,NULL);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_brand`
--

DROP TABLE IF EXISTS `car_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_brand` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(125) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brand_UNIQUE` (`brand`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_brand`
--

LOCK TABLES `car_brand` WRITE;
/*!40000 ALTER TABLE `car_brand` DISABLE KEYS */;
INSERT INTO `car_brand` VALUES (3,'Audi'),(4,'BMW'),(2,'Kia'),(1,'Lada'),(5,'Volvo');
/*!40000 ALTER TABLE `car_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_products`
--

DROP TABLE IF EXISTS `category_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_products`
--

LOCK TABLES `category_products` WRITE;
/*!40000 ALTER TABLE `category_products` DISABLE KEYS */;
INSERT INTO `category_products` VALUES (1,'Моторное масло'),(2,'Фильтр'),(3,'Аккумуляторная батарея'),(4,'Фара'),(5,'Шины');
/*!40000 ALTER TABLE `category_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(125) NOT NULL,
  `phone` bigint NOT NULL,
  `password_hash` char(65) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `phone_UNIQUE` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'sarina64@example.net',79360647500,'27880df586fc26f3e115149cc5f347d65ab82eef','2016-03-13 15:20:52',NULL,NULL),(2,'raynor.letitia@example.org',79318149879,'f74a63dbdd9c53f96c41c595f6b53a2f57db1489','2018-01-04 22:38:13',NULL,NULL),(3,'emurphy@example.net',79191513482,'2a87d63c4d6c02a492365500485595094f8490ff','2014-09-12 06:08:30',NULL,NULL),(4,'green94@example.org',79252071231,'d24c03b5c32a990678c871fa1d2a3314975d0e20','2019-07-17 10:55:44',NULL,NULL),(5,'smuller@example.com',79841721511,'24a75982fcf5b5100b591c1fda2b243caaa1ed50','2016-03-14 00:49:56',NULL,NULL),(6,'collins.kelsie@example.org',79411645121,'350f7162552ec6ef4f2516f22b89d0af860bfc4f','2015-11-14 22:55:02',NULL,NULL),(7,'eugenia63@example.org',79725992860,'30135cf932b4cd8b6f6d0db49d2aaefd614bfade','2017-12-22 00:09:27',NULL,NULL),(8,'akeem75@example.net',79417108354,'8e9618fb56d73a8f6fa9a4b14b01808a7f9dd905','2021-01-08 12:51:47',NULL,NULL),(9,'baumbach.brennan@example.org',79264649314,'77beec0a9593c50fbbd7d87c78a460c557770a41','2013-08-12 02:35:53',NULL,NULL),(10,'willy.skiles@example.com',79814337606,'80418f86c39f85da9b24e500d5661b801c780292','2015-08-14 06:30:52',NULL,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_orders_customer1_idx` (`customer_id`),
  CONSTRAINT `fk_orders_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,2,'2021-03-30 18:05:21',NULL),(2,6,'2021-03-30 18:05:21',NULL),(3,8,'2021-03-30 18:05:21',NULL),(4,5,'2021-03-30 18:05:21',NULL),(5,9,'2021-03-30 18:05:21',NULL),(6,3,'2021-03-30 18:05:21',NULL),(7,4,'2021-03-30 18:05:21',NULL),(8,1,'2021-03-30 18:05:21',NULL),(9,1,'2021-03-30 18:05:21','2021-03-31 15:41:19'),(10,1,'2021-03-30 18:05:21',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders_products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `orders_id` int unsigned NOT NULL,
  `basket_id` int unsigned NOT NULL,
  `total` int unsigned DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_orders_products_orders1_idx` (`orders_id`),
  KEY `fk_orders_products_basket1_idx` (`basket_id`),
  CONSTRAINT `fk_orders_products_basket` FOREIGN KEY (`basket_id`) REFERENCES `basket` (`id`),
  CONSTRAINT `fk_orders_products_orders` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_products`
--

LOCK TABLES `orders_products` WRITE;
/*!40000 ALTER TABLE `orders_products` DISABLE KEYS */;
INSERT INTO `orders_products` VALUES (1,4,4,3,'2021-03-30 18:13:10',NULL),(2,7,3,4,'2021-03-30 18:13:10',NULL),(3,2,1,1,'2021-03-30 18:13:10',NULL),(4,9,4,2,'2021-03-30 18:13:10',NULL),(5,6,4,2,'2021-03-30 18:13:10',NULL),(6,3,5,1,'2021-03-30 18:13:10',NULL),(7,8,3,1,'2021-03-30 18:13:10',NULL),(8,1,2,4,'2021-03-30 18:13:10',NULL),(9,10,1,2,'2021-03-30 18:13:10',NULL),(10,5,2,1,'2021-03-30 18:13:10',NULL);
/*!40000 ALTER TABLE `orders_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `car_brand_id` int unsigned NOT NULL,
  `category_products_id` int unsigned NOT NULL,
  `type_product_id` int unsigned NOT NULL,
  `article_products_id` int unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_products_car_brand1_idx` (`car_brand_id`),
  KEY `fk_products_category_products1_idx` (`category_products_id`),
  KEY `fk_products_type_product1_idx` (`type_product_id`),
  KEY `fk_products_article_products1_idx` (`article_products_id`),
  CONSTRAINT `fk_products_article_products1` FOREIGN KEY (`article_products_id`) REFERENCES `article_products` (`id`),
  CONSTRAINT `fk_products_car_brand1` FOREIGN KEY (`car_brand_id`) REFERENCES `car_brand` (`id`),
  CONSTRAINT `fk_products_category_products1` FOREIGN KEY (`category_products_id`) REFERENCES `category_products` (`id`),
  CONSTRAINT `fk_products_type_product1` FOREIGN KEY (`type_product_id`) REFERENCES `type_product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,3,4,4,3500.00,'2021-03-30 15:41:51','2021-04-01 10:24:46'),(2,1,5,10,10,2500.00,'2021-03-30 15:41:51',NULL),(3,2,2,1,1,350.00,'2021-03-30 15:41:51',NULL),(4,2,4,9,9,3500.00,'2021-03-30 15:41:51',NULL),(5,3,3,5,5,2000.00,'2021-03-30 15:41:51',NULL),(6,3,5,10,10,3000.00,'2021-03-30 15:41:51',NULL),(7,4,1,7,7,600.00,'2021-03-30 15:41:51',NULL),(8,4,4,8,8,5000.00,'2021-03-30 15:41:51',NULL),(9,5,5,10,10,3000.00,'2021-03-30 15:41:51',NULL),(10,5,2,3,3,350.00,'2021-03-30 15:41:51',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profile` (
  `customer_id` int unsigned NOT NULL,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`customer_id`),
  CONSTRAINT `fk_profile_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,'Millie','Considine','1983-04-05'),(2,'Evans','Walter','1980-06-16'),(3,'Rosemary','Bins','1991-04-02'),(4,'Einar','Marks','1976-01-21'),(5,'Dario','Parker','1988-03-04'),(6,'Kareem','Wisoky','1974-10-21'),(7,'Augustus','Legros','1976-01-08'),(8,'Heidi','Kohler','1975-12-05'),(9,'Abigayle','Heller','1984-09-30'),(10,'Travis','Bednar','1989-12-09');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned NOT NULL,
  `reviews_id` int unsigned DEFAULT NULL,
  `texts` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_customer1_idx` (`customer_id`),
  KEY `fk_reviews_reviews1_idx` (`reviews_id`),
  CONSTRAINT `fk_reviews_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  CONSTRAINT `fk_reviews_reviews1` FOREIGN KEY (`reviews_id`) REFERENCES `reviews` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,3,NULL,'Praesentium inventore sed nobis tempora impedit inventore perspiciatis.','2021-03-30 18:17:05',NULL,NULL),(2,7,NULL,'Accusantium exercitationem consequuntur odit repellendus quisquam sed.','2021-03-30 18:17:05',NULL,NULL),(3,4,NULL,'Fugiat eum iure voluptatem sunt consequuntur aut quibusdam illum.','2021-03-30 18:17:05',NULL,NULL),(4,8,NULL,'Accusantium exercitationem consequuntur odit repellendus quisquam sed.','2021-03-30 18:17:05',NULL,NULL),(5,1,NULL,'Sit dolore placeat id officia asperiores id.','2021-03-30 18:17:05',NULL,NULL),(6,10,NULL,'Provident quasi nobis voluptatibus est illo quibusdam.','2021-03-30 18:17:05',NULL,NULL),(7,7,NULL,'Aut nam optio necessitatibus ea omnis neque dolorem consequatur.','2021-03-30 18:17:05',NULL,NULL),(8,3,NULL,'Est vitae iusto et nesciunt magnam officia ducimus quidem.','2021-03-30 18:17:05',NULL,NULL),(9,9,NULL,'Quia accusantium doloremque non soluta et ad nihil.','2021-03-30 18:17:05',NULL,NULL),(10,2,NULL,'Molestiae non similique esse voluptate provident provident libero voluptatibus.','2021-03-30 18:17:05',NULL,NULL);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `reviews_name`
--

DROP TABLE IF EXISTS `reviews_name`;
/*!50001 DROP VIEW IF EXISTS `reviews_name`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `reviews_name` AS SELECT 
 1 AS `firstname`,
 1 AS `lastname`,
 1 AS `texts`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `type_product`
--

DROP TABLE IF EXISTS `type_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_product` (
  `id` int unsigned NOT NULL,
  `type` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_product`
--

LOCK TABLES `type_product` WRITE;
/*!40000 ALTER TABLE `type_product` DISABLE KEYS */;
INSERT INTO `type_product` VALUES (1,'Топливный фильтр'),(2,'Масляный фильтр'),(3,'Воздушный фильтр'),(4,'Кислотная АКБ'),(5,'Щелочная АКБ'),(6,'Синтетическое моторное масло'),(7,'Полусинтетическое моторное масло'),(8,'Левая фара'),(9,'Правая фара'),(10,'Всесезонные шины');
/*!40000 ALTER TABLE `type_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `reviews_name`
--

/*!50001 DROP VIEW IF EXISTS `reviews_name`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `reviews_name` (`firstname`,`lastname`,`texts`) AS select `p`.`firstname` AS `firstname`,`p`.`lastname` AS `lastname`,`r`.`texts` AS `texts` from (`reviews` `r` join `profile` `p` on((`p`.`customer_id` = `r`.`customer_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-01 12:17:50
