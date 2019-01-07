-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: notifications
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxid` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startbalance` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacttype` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_not` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_not_methods` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_not_period` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_send` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_send` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rand_num` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adder` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addercompany` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isactive` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (5,NULL,'بيتر ثروت','ptharwat@gmail.com','201282381045',NULL,NULL,NULL,NULL,'on',',sms,whatsapp,email','3days','2019-01-07 03:37:09','2019-01-14 00:00:00','2019-01-07 03:37:092535',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-07 01:37:09','2019-01-07 01:37:09'),(6,NULL,'بيتر ثروت بطرس ايوب','ptharwat@gmail.com','201282381045',NULL,NULL,NULL,NULL,'on',',sms,whatsapp,email','+ 14 days','2019-01-07 04:43:31','2019-01-07 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-07 02:43:31','2019-01-07 02:43:31'),(7,NULL,'new whats app','ptharwat@gmail.com','201282381045',NULL,NULL,NULL,NULL,'on',',sms,whatsapp,email','+ 1 days','2019-01-07 05:26:45','2019-01-07 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-07 03:26:45','2019-01-07 03:26:45');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deals`
--

DROP TABLE IF EXISTS `deals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `deal_details_for_emp` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_details_for_client` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_mount` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_currency` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_borrow_payback` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_init_send_not_methods` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `not_setter_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deals`
--

LOCK TABLES `deals` WRITE;
/*!40000 ALTER TABLE `deals` DISABLE KEYS */;
INSERT INTO `deals` VALUES (1,6,NULL,NULL,'120','RS','P AYOUB','borrow',',sms,whatsapp,email',123,'2019-01-07 02:43:31','2019-01-07 02:43:31'),(2,5,NULL,NULL,'120','RS','P AYOUB','borrow',',whatsapp',123,'2019-01-07 03:24:05','2019-01-07 03:24:05'),(3,7,NULL,NULL,'120','RS','P AYOUB','borrow',',sms,whatsapp,email',123,'2019-01-07 03:26:45','2019-01-07 03:26:45');
/*!40000 ALTER TABLE `deals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gateways`
--

DROP TABLE IF EXISTS `gateways`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gateways` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sms_phone_sender` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_token_number` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_phone_sender` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_token_number` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_sender` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setter_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gateways`
--

LOCK TABLES `gateways` WRITE;
/*!40000 ALTER TABLE `gateways` DISABLE KEYS */;
/*!40000 ALTER TABLE `gateways` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_content` text COLLATE utf8mb4_unicode_ci,
  `message_type` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_receiver_id` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_or_emp` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_num_or_email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_about` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_status` text COLLATE utf8mb4_unicode_ci,
  `sender_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (4,'رسالة اشعار\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\nالاخ بيتر ثروت\nنشعركم بأن حسابكم لدينا مدين بالمبالغ التالية :-\nمبلغ 0 ريال عماني \nمبلغ 0 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nيرجى سرعة تسوية حسابكم مع شكرنا وتقديرنا\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','email','5','client','ptharwat@gmail.com',NULL,'OK',1,'2019-01-07 02:18:31','2019-01-07 02:18:31'),(5,'رسالة اشعار\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\nالاخ بيتر ثروت\nنشعركم بأن حسابكم لدينا مدين بالمبالغ التالية :-\nمبلغ 0 ريال عماني \nمبلغ 0 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nيرجى سرعة تسوية حسابكم مع شكرنا وتقديرنا\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','whatsapp','5','client','201282381045',NULL,'OK',1,'2019-01-07 02:18:32','2019-01-07 04:09:23'),(6,'رسالة اشعار\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\nالاخ بيتر ثروت\nنشعركم بأن حسابكم لدينا مدين بالمبالغ التالية :-\nمبلغ 0 ريال عماني \nمبلغ 0 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nيرجى سرعة تسوية حسابكم مع شكرنا وتقديرنا\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','sms','5','client','201282381045',NULL,'OK',1,'2019-01-07 02:18:33','2019-01-07 02:18:33'),(7,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ بيتر ثروت بطرس ايوب\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','email','6','client','ptharwat@gmail.com',NULL,'OK',1,'2019-01-07 02:43:34','2019-01-07 02:43:34'),(8,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ بيتر ثروت بطرس ايوب\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','whatsapp','6','client','201282381045',NULL,'OK',1,'2019-01-07 02:43:35','2019-01-07 04:09:24'),(9,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ بيتر ثروت بطرس ايوب\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','sms','6','client','201282381045',NULL,'OK',1,'2019-01-07 02:43:37','2019-01-07 02:43:37'),(10,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ بيتر ثروت\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','whatsapp','5','client','201282381045',NULL,'OK',1,'2019-01-07 03:24:05','2019-01-07 04:09:28'),(11,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ new whats app\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','email','7','client','ptharwat@gmail.com',NULL,'OK',1,'2019-01-07 03:26:48','2019-01-07 03:26:48'),(12,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ new whats app\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','whatsapp','7','client','201282381045',NULL,'OK',1,'2019-01-07 03:26:49','2019-01-07 04:09:31'),(13,'اشعار قيد\nرسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات\n\nالاخ new whats app\nتم قيد مبلغ 120 ريال سعودي إلي حسابكم لدينا وذلك مقابل P AYOUB\nاجمالي الرصيد عليكم \nمبلغ 0 ريال عماني \nمبلغ 120 ريال سعودي\nمبلغ 0 ريال يمني \nمبلغ 0 دولار\n\nلمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى http://127.0.0.1:8000/track\n\nلاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476\nاو ارقامنا الاخرى\nفرع المكلا 00967770060117\nفرع صلالة 0096894225255','sms','7','client','201282381045',NULL,'OK',1,'2019-01-07 03:26:50','2019-01-07 03:26:50');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (69,'2014_10_12_100000_create_password_resets_table',1),(70,'2018_06_19_104450_create_clients_table',1),(71,'2018_06_19_105215_create_users_table',1),(72,'2019_01_04_040343_deals',1),(73,'2019_01_04_043505_messages',1),(74,'2019_01_04_050941_gateways',1),(75,'2019_01_04_050955_settings',1),(76,'2019_01_04_051015_templates',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `company` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sallary` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacttype` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adder` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isactive` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,NULL,'ptharwat@gmail.com',NULL,NULL,NULL,NULL,'ptharwat@gmail.com','$2y$10$MpK1Z7mv8Z0KNB8eHsiwa.uQmQP26NDMhPE2FX2zjxgsRrkSBueJ2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-07 00:55:31','2019-01-07 00:55:31');
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

-- Dump completed on 2019-01-07  8:16:33
