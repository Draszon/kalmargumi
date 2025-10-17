/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: kalmargumi
-- ------------------------------------------------------
-- Server version	10.11.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_photos`
--

DROP TABLE IF EXISTS `about_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_photos`
--

LOCK TABLES `about_photos` WRITE;
/*!40000 ALTER TABLE `about_photos` DISABLE KEYS */;
INSERT INTO `about_photos` VALUES
(1,'about1.jpg',NULL,NULL),
(4,'galery1.jpg','2025-10-09 20:09:54','2025-10-09 20:09:54'),
(8,'galery3.jpg','2025-10-10 03:12:09','2025-10-10 03:12:09');
/*!40000 ALTER TABLE `about_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aboutmes`
--

DROP TABLE IF EXISTS `aboutmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `aboutmes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutmes`
--

LOCK TABLES `aboutmes` WRITE;
/*!40000 ALTER TABLE `aboutmes` DISABLE KEYS */;
INSERT INTO `aboutmes` VALUES
(1,'Szervizünk története 2010-ben kezdődött, amikor egy kis garázsból indultunk el azzal a céllal, hogy megbízható és megfizethető gumiszerviz szolgáltatásokat nyújtsunk helyi autósoknak. Az első években egyszerű szerszámokkal és hatalmas lelkesedéssel dolgoztunk azon, hogy ügyfeleink mindig elégedetten távozzanak. A kemény munka és az elkötelezettség meghozta gyümölcsét: 2015-ben sikerült bővítenünk a műhelyt, modern diagnosztikai eszközöket és professzionális gépeket vásároltunk. Ezzel lehetővé vált, hogy gyorsabban, pontosabban és még nagyobb ügyfélkörrel dolgozzunk. 2020-ra már több mint 2.000 ügyfél választott minket abroncscserére, futómű-beállításra vagy javításra. Ez az eredmény megerősített minket abban, hogy jó úton járunk. Azóta is folyamatosan fejlődünk, hogy ügyfeleink számára a legmagasabb színvonalú szolgáltatást nyújthassuk....',NULL,'2025-09-29 13:46:56');
/*!40000 ALTER TABLE `aboutmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES
(22,'Gumiszerelés-centrírozás','2025-10-15 12:59:30','2025-10-15 12:59:30'),
(23,'Kerék centrírozás','2025-10-15 13:14:25','2025-10-15 13:14:25'),
(24,'Komplett kerék le-fel szerelés centírozás nélkül','2025-10-15 15:44:46','2025-10-15 15:44:46'),
(25,'Gumihotel','2025-10-15 15:45:51','2025-10-15 15:45:51'),
(27,'Gumijavítás','2025-10-15 16:16:18','2025-10-15 16:16:18');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES
(2,'Nyitás előtt pár perccel oda értem fogadtak és gyorsan meg is csinálták a gumicserét. Gyors és profi. Másodjára voltam itt. :) ajánlom.','Joci',NULL,NULL),
(3,'Mindig nagyon rugalmasak és segítőkészek.\nAjánlom mindenkinek!','Ádám',NULL,NULL),
(4,'Időpontra mentem, azonnal hozzáfogtak, kb 20 perc alatt a 4 gumit lecserélték, szakszerűen, pl. szelepcsere, amit sok helyen nem tesznek meg csak ha kéred. Profi munka, jó ár, ajánlom. Ja kérdés nélkül kiállítják a számlát, ezt sem teszik meg sehol.','Zoltán',NULL,NULL),
(5,'Extra szuper figyelem, pontosság és szervezés. 300km tévolságból némi előzetes szervezéssel sikerült percre pontosan összehozni az általam kiválasztott napra teljes gumicserét.','Szabolcs',NULL,NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES
(1,'phone','06 36/560-231','Telefonszámunkon azonnal elér minket, és munkatársaink készséggel állnak rendelkezésére minden kérdésében!',NULL,'2025-10-15 13:11:43'),
(2,'mail','info@autogumiexpo.hu','Írjon nekünk bizalommal, legyen szó időpontfoglalásról, ajánlatkérésről vagy általános érdeklődésről!',NULL,'2025-09-20 09:04:59'),
(3,'address','3300 Eger, Árpád út 39.','Gumiszervizünk Eger szívében található, könnyen megközelíthető helyen, ahol mindig örömmel látjuk!',NULL,'2025-09-20 09:04:20');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galerys`
--

DROP TABLE IF EXISTS `galerys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `galerys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galerys`
--

LOCK TABLES `galerys` WRITE;
/*!40000 ALTER TABLE `galerys` DISABLE KEYS */;
INSERT INTO `galerys` VALUES
(2,'galery2.jpg',NULL,NULL),
(7,'image-2-gdwp-802-4k-no-logo_optimized.jpg','2025-09-24 16:51:45','2025-09-24 16:51:45'),
(8,'mountain-range-3840x2160-20832_optimized.jpg','2025-09-24 16:51:48','2025-09-24 16:51:48'),
(10,'image-1-gdwp-802-4k-no-logo_optimized.jpg','2025-09-30 12:53:20','2025-09-30 12:53:20');
/*!40000 ALTER TABLE `galerys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2025_09_08_185656_create_services_table',2),
(5,'2025_09_09_190152_add_image_to_services_table',3),
(6,'2025_09_09_195702_create_comments_table',4),
(7,'2025_09_10_051009_create_galerys_table',5),
(8,'2025_09_11_175106_create_aboutmes_table',6),
(10,'2025_09_11_180905_create_contacts_table',7),
(11,'2025_09_11_222131_create_opening_hours_table',8),
(13,'2025_09_16_052109_create_categories_table',9),
(14,'2025_09_16_052156_create_wheel_services_table',9),
(15,'2025_10_08_203026_drop_service_id_from_wheel_services_table',10),
(16,'2025_10_08_194505_add_service_id_to_wheel_services_table',11),
(17,'2025_10_08_203424_drop_service_id_from_wheel_services_table',12),
(20,'2025_10_09_174933_add_order_to_wheel_services_table',13),
(21,'2025_10_09_192025_create_about_photos_table',14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opening_hours`
--

DROP TABLE IF EXISTS `opening_hours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `opening_hours` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `day` varchar(255) NOT NULL,
  `openinghour` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opening_hours`
--

LOCK TABLES `opening_hours` WRITE;
/*!40000 ALTER TABLE `opening_hours` DISABLE KEYS */;
INSERT INTO `opening_hours` VALUES
(1,'Hétfő - Péntek','7:30 - 17:00',NULL,'2025-10-15 13:11:20'),
(2,'Szombat','7:30 - 12:00',NULL,NULL),
(3,'Vasárnap','Zárva',NULL,'2025-09-20 08:31:11');
/*!40000 ALTER TABLE `opening_hours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES
(1,'Abroncs csere','Szezonális abroncs cseréje gyorsan és precízen, a biztonságos vezetés érdekében télen is és nyáron is egyaránt. Ezen felül defektes gumik cseréjét is vállaljuk, méghozzá rövid határidővel. Munkánk során mindig figyelünk a megfelelő nyomásra és centrírozásra, ami miatt autója stabilan és megbízhatóan közlekedhet.','tire_change.jpg',NULL,'2025-09-30 12:57:19'),
(2,'Abroncs javítás','Szúrt, repedt vagy kisebb sérüléseket szenvedett abroncsát szakszerűen megjavítjuk, hogy még tovább használhassa. A javítás során korszerű anyagokat és technológiákat alkalmazunk, így az abroncs élettartama a lehető leghosszabb lesz, és Ön biztonságban vezethessen.','defekt.jpg',NULL,'2025-09-29 13:46:51'),
(3,'Gumihotel','Abroncsai nálunk jó kezekben vannak: megfelelő körülmények között tároljuk őket, így mindig a legjobb állapotban kerülnek vissza autójára. Szezonváltáskor gyors és egyszerű kiszolgálást biztosítunk, többet nem kell aggódnia a tárolás vagy a szállítás miatt.','hotel.jpg',NULL,'2025-09-20 15:06:26'),
(4,'Alufelni javítás','Kisebb karcolások, horpadások vagy korrózió az alufelnin? Profi csapatunk gyorsan és precízen visszaállítja felni eredeti szépségét és stabilitását. Szolgáltatásunk során a felni felületét javítjuk, polírozzuk és, ha szükséges, újrafestjük, hogy autód stílusos és biztonságos legyen.','alufelni.jpg',NULL,NULL),
(5,'Keréknyomás-ellenőrző rendszer (TPMS)','A TPMS (Tire Pressure Monitoring System) folyamatosan figyeli az abroncsok légnyomását, és jelzi, ha valamelyik kerékben a nyomás a megengedett szint alá csökken. Ez növeli a biztonságot, csökkenti az üzemanyag-fogyasztást és az abroncsok kopását. Szervizünk vállalja a TPMS szenzorok ellenőrzését, programozását, javítását és cseréjét, hogy mindig pontos visszajelzést kapjon autója gumijainak állapotáról.','TPMS.webp',NULL,NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('wDt7BPAWg0wIWbp59G8CD3Lk3B07JxB6HhWSXx1q',NULL,'::1','Mozilla/5.0 (X11; Linux x86_64; rv:144.0) Gecko/20100101 Firefox/144.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoickJjaHJQREtiWTE4OFFPYlZnRktadmpWWDVRWkZsRWFTNUlqVG5VZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9nZXRjb21tZW50cyI7fX0=',1760553067);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Admin','peti0202@windowslive.com',NULL,'$2y$12$CsrgrOHnNqdeTg/yMu8/V.NQxCle6Brs0Q21Z0L3aLk.aHsiv2uka',NULL,'2025-08-27 15:27:42','2025-08-27 15:27:42'),
(2,'Kalmár','valami@gmail.com',NULL,'$2y$12$IOYeQt8hodrsN9IQAAi21ur3CG.IgTmw3bhzSpCCly22JP14R6iwG',NULL,'2025-09-18 03:16:51','2025-09-18 03:16:51'),
(3,'Kalmár Tibor','info@autogumiexpo.hu',NULL,'$2y$12$Cwz5IGPp4ppegOTeUaGssuu.ro1d8H101l5d8IX4LibROoqW1hC4S',NULL,'2025-10-15 13:25:01','2025-10-15 13:25:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheel_services`
--

DROP TABLE IF EXISTS `wheel_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `wheel_services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `order` int(11) NOT NULL DEFAULT 10,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wheel_services_category_id_foreign` (`category_id`),
  CONSTRAINT `wheel_services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_hungarian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheel_services`
--

LOCK TABLES `wheel_services` WRITE;
/*!40000 ALTER TABLE `wheel_services` DISABLE KEYS */;
INSERT INTO `wheel_services` VALUES
(57,22,10,'Szgk 12-14\"',3550,'Ft/db','2025-10-15 13:00:44','2025-10-15 13:00:44'),
(58,22,20,'Szgk 15\"',3900,'Ft/db','2025-10-15 13:01:50','2025-10-15 13:07:46'),
(59,22,30,'Szgk 16\"',4100,'Ft/db','2025-10-15 13:02:41','2025-10-15 13:07:46'),
(60,22,40,'Szgk 17\"',4400,'Ft/db','2025-10-15 13:03:12','2025-10-15 13:07:46'),
(61,22,50,'Szgk 18\"',5000,'Ft/db','2025-10-15 13:03:45','2025-10-15 13:07:46'),
(62,22,60,'Szgk 19\"-tól',5500,'Ft/db','2025-10-15 13:04:54','2025-10-15 13:07:46'),
(63,22,70,'Kistgk',5000,'Ft/db','2025-10-15 13:05:33','2025-10-15 13:07:46'),
(64,22,80,'Terepjáró 4X4',5000,'Ft/db','2025-10-15 13:06:21','2025-10-15 13:07:46'),
(65,22,90,'SUV felár 17\"-tól',250,'Ft/db','2025-10-15 13:07:00','2025-10-15 13:07:46'),
(66,23,100,'Szgk 12-14\"',3000,'Ft/db','2025-10-15 13:15:01','2025-10-15 16:18:12'),
(67,23,110,'Szgk 13-14\"',3000,'Ft/db','2025-10-15 15:40:37','2025-10-15 16:18:12'),
(68,23,120,'Szgk 15\"',3300,'Ft/db','2025-10-15 15:41:00','2025-10-15 16:18:12'),
(69,23,130,'Szgk 16\"',3500,'Ft/db','2025-10-15 15:41:26','2025-10-15 16:18:12'),
(70,23,140,'Szgk 17\"',3700,'Ft/db','2025-10-15 15:42:10','2025-10-15 16:18:12'),
(71,23,150,'Szgk 18\"',4000,'Ft/db','2025-10-15 15:42:22','2025-10-15 16:18:12'),
(72,23,160,'Szgk 19\"-tól',4500,'Ft/db','2025-10-15 15:42:38','2025-10-15 16:18:12'),
(73,23,170,'Kisteher',4500,'Ft/db','2025-10-15 15:42:59','2025-10-15 16:18:12'),
(74,23,180,'Terepjáró 4X4',4500,'Ft/db','2025-10-15 15:43:12','2025-10-15 16:18:12'),
(75,24,190,'16\"-ig',1500,'Ft/db','2025-10-15 15:45:18','2025-10-15 16:18:12'),
(76,24,200,'17\"-tól',1800,'Ft/db','2025-10-15 15:45:38','2025-10-15 16:18:12'),
(77,25,210,'Szerelt kerék tárolása',7000,'Ft/garnitúra/szezon','2025-10-15 15:46:24','2025-10-15 16:18:12'),
(78,25,220,'Gumiabroncs tárolása',6000,'Ft/garnitúra/szezon','2025-10-15 15:47:09','2025-10-15 16:18:12'),
(79,27,230,'Defektjavítás',2000,'Ft/db','2025-10-15 16:16:30','2025-10-15 16:18:12');
/*!40000 ALTER TABLE `wheel_services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-15 21:21:16
