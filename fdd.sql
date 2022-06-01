-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: fdd
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actus`
--

DROP TABLE IF EXISTS `actus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` text COLLATE utf8mb4_unicode_ci,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actus`
--

LOCK TABLES `actus` WRITE;
/*!40000 ALTER TABLE `actus` DISABLE KEYS */;
INSERT INTO `actus` VALUES (1,'Enfin, une commission pour évaluer le logiciel LMD Manager for ISP!','La loi-cadre n° 14 du 14 février 2014 prévoit l\'arrimage de l\'Enseignement Supérieur et Universitaire Congolais au Système LMD (Licence Master Doctorat). Quelques ISP avaient commencé à implémenter le système LMD à titre expérimental depuis l\'année académique 2019 -2020. La gestion des notes des étudiants étant très complexe, l\'équipe du Professeur Dr. NGOIE MPOY Ruffin-Benoît a conçu un logiciel appelé LMD Manager for ISP destiné à traiter de manière automatisée les notes des étudiants. Le logiciel LMD Manager for ISP a été utilisé durant deux années académiques, soit pendant quatre semestres. A travers cette vidéo, le Chef de Travaux BANSIMBA MUKIESE J.-Roger de l\'ISP MBANZA-NGUNGU présente les contours de la mission d\'une commission censée évaluer l\'utilisation du logiciel LMD Manager for ISP durant cette période d\'essai avant sa validation pour son utilisation. \nL\'année académique 2021-2022 a été précédée par les états généraux de l\'Enseignement Supérieur et Universitaire de la République Démocratique du Congo. Ces états généraux ont recommandé la généralisation de l\'arrimage de toutes les filières au système LMD en RD Congo. Devant ce nouveau défi, l\'utilisation du logiciel LMD Manager for ISP s\'avère indispensable pour chaque institution qui veut réussir la mise en œuvre du Système LMD.','v=J5iSbcWaBcs','2021-12-08 13:31:12','2022-01-13 00:44:57');
/*!40000 ALTER TABLE `actus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comptes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptes`
--

LOCK TABLES `comptes` WRITE;
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
INSERT INTO `comptes` VALUES (1,'Fdd','444-34-344-345','2021-12-08 13:37:02','2021-12-08 13:37:02');
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'tel','M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z','+243 998213886','2021-12-08 13:37:33','2021-12-08 13:37:33'),(2,'mailto','M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','bansimbamukiese@hotmail.com','2021-12-08 13:37:57','2021-12-08 13:37:57');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domaines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

LOCK TABLES `domaines` WRITE;
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES (1,'Éducation formelle et non formelle','jfjfj','[\"Education scolaire\", \"appui à l’insertion universitaire\", \"recherche scientifique\", \"Alphabétisation\", \"Elaboration des matériels didactiques\"]','2021-12-08 13:29:47','2021-12-08 13:29:47');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headers`
--

DROP TABLE IF EXISTS `headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headers`
--

LOCK TABLES `headers` WRITE;
/*!40000 ALTER TABLE `headers` DISABLE KEYS */;
INSERT INTO `headers` VALUES (1,'Empowering people\'s skills','2021-12-08 13:14:43','2022-01-05 12:03:36'),(2,'Eau - Hygiène - Assainissement','2021-12-08 13:15:59','2022-01-05 12:05:06');
/*!40000 ALTER TABLE `headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infosites`
--

DROP TABLE IF EXISTS `infosites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `infosites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infosites`
--

LOCK TABLES `infosites` WRITE;
/*!40000 ALTER TABLE `infosites` DISABLE KEYS */;
INSERT INTO `infosites` VALUES (1,'PRENEZ CONTACT AVEC NOUS A','2745, Lotissement KIKONKA, Quartier YUBA. Agglomération de KIKONKA / INKISI. Province du Kongo Central / DR Congo.','2021-12-08 13:32:55','2022-01-05 12:19:34'),(2,'The Chief Executive Officer',' Axel J.-Roger BANSIMBA MUKIESE Formateur / Facilitateur d’Ateliers participatifs Chef de Travaux ESU (I.S.P. Mbanza-Ngungu) Expert en Biostatistique, en Formation des adultes et en Evaluations.','2021-12-08 13:33:13','2021-12-08 13:33:13'),(3,'About the <b>CEO</b>','Axel J.-Roger BANSIMBA is a biologist who proved his abilities in adults training, students teaching and evaluations as well as workshops facilitation. These last 18 years, he has been working as teacher at the Institut Supérieur Pédagogique (ISP) de Mbanza-Ngungu Biology Department where he dealt of teaching, framing trainees and research monitoring. Since june 2014, he worked at the SNV (The Netherlands Development Organisation) prior as a Wash advisor (2014-2016) in charge of training, coaching and monitoring state officials (Health zones and Education sectors) during implementation of the UNICEF’s Wash friendly Healthy Schools and Villages National Program. After it, he also worked with the SNV as a Training Coordinator in the PDPC Project (Projet de Développement des Pôles de Croissance-Ouest) from june 2016 until january 2020 in the Kongo Central Province, D.R. Congo. During this period(October 2019), he also assumed the functions of Team leader and Project manager ad interim in the PDPC Project. Axel J.-Roger BANSIMBA holds a Bachelor in Applied Pedagogy in Biology. He is fluent in French and English languages. ','2021-12-08 13:33:28','2021-12-08 13:33:28');
/*!40000 ALTER TABLE `infosites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_11_26_081112_create_sessions_table',1),(7,'2021_12_03_100346_create_nouses_table',1),(8,'2021_12_03_100623_create_services_table',1),(9,'2021_12_03_100636_create_domaines_table',1),(10,'2021_12_03_100652_create_partenaires_table',1),(11,'2021_12_03_100902_create_comptes_table',1),(12,'2021_12_03_100935_create_actus_table',1),(13,'2021_12_03_101019_create_infosites_table',1),(14,'2021_12_03_101027_create_contacts_table',1),(15,'2021_12_03_101043_create_rxsocials_table',1),(16,'2021_12_03_101222_create_headers_table',1),(17,'2021_12_04_154824_create_rapports_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nouses`
--

DROP TABLE IF EXISTS `nouses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nouses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nouses`
--

LOCK TABLES `nouses` WRITE;
/*!40000 ALTER TABLE `nouses` DISABLE KEYS */;
INSERT INTO `nouses` VALUES (1,'Qui sommes-nous','FDD / ASBL','Nous sommes une Organisation non-Gouvernementale de Développement, dénommée « Formateurs pour un Développement Durable », en abrégé FDD. Créé en date du 15 décembre 2011.\n\nLes Formateurs pour un Développement Durable exercent leurs activités sur toute l’étendue de la République Démocratique du Congo.','2021-12-08 13:23:23','2021-12-08 13:23:23'),(2,'Vision','FDD / ASBL','Nous aspirons à un monde où chaque peuple, et chaque tribu jouit durablement de ses propres ressources en parfaite connaissance et entière responsabilité, telle est formulée la vision de l’Association FDD.','2021-12-08 13:23:49','2021-12-08 13:23:49'),(3,'Mission','FDD / ASBL','Sa mission est de faciliter le changement de comportement des populations cibles par un renforcement des capacités et un accompagnement à la mise en œuvre des initiatives innovantes en vue d\'un développement durable des communautés de base.','2021-12-08 13:26:58','2021-12-30 18:55:43');
/*!40000 ALTER TABLE `nouses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partenaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partenaires`
--

LOCK TABLES `partenaires` WRITE;
/*!40000 ALTER TABLE `partenaires` DISABLE KEYS */;
INSERT INTO `partenaires` VALUES (1,'Cepromor-Aeph','http://www.cepromor-aeph.org/','2021-12-08 13:36:11','2021-12-08 13:36:11');
/*!40000 ALTER TABLE `partenaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rapports`
--

DROP TABLE IF EXISTS `rapports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rapports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rapports`
--

LOCK TABLES `rapports` WRITE;
/*!40000 ALTER TABLE `rapports` DISABLE KEYS */;
/*!40000 ALTER TABLE `rapports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rxsocials`
--

DROP TABLE IF EXISTS `rxsocials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rxsocials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rxsocials`
--

LOCK TABLES `rxsocials` WRITE;
/*!40000 ALTER TABLE `rxsocials` DISABLE KEYS */;
INSERT INTO `rxsocials` VALUES (1,'M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z','fdd-officiel','fdd-officiel','2021-12-08 13:38:27','2021-12-08 13:38:27'),(2,'M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z','https://www.linkedin.com/in/jean-roger-bansimba-mukiese-387359104','jean-roger-bansimba-mukiese','2021-12-08 13:39:22','2021-12-08 13:39:22'),(3,'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z','Facebook','fdd-officiel page','2021-12-08 13:39:52','2021-12-08 13:39:52');
/*!40000 ALTER TABLE `rxsocials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Formation','Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque perferendis sapiente quibusdam, pariatur vero veniam porro tempora fuga quo earum illo dolor facere debitis repellendus ut provident sed suscipit tempore.','2021-12-08 13:27:39','2021-12-08 13:27:39'),(2,'Prestation des services','1. Appui dans la Conception, mise en œuvre, suivi et évaluation des projets.\n2.Infrastructures\n3. Organisation et Facilitation des ateliers','2021-12-08 13:27:58','2021-12-08 13:27:58');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('Ac4YwhXV1nhv4OmPkVdIodofQCQk0h3j3uKonsnM',NULL,'178.79.148.229','curl/7.54.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoidnFqcTRkRVZ4QmYwWDVncGpMSjJ6TDFlN2h4amN5U3o4eGFDcHZNNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713139),('AzkXTgd157IpV6JohFfAnV2Yp3MXsAGkTU7EJYUu',NULL,'74.82.47.5','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWpJYzFSR2M2cGZ6RUprRXhHSkhKUm8yUXR5SnVVVUttZVhNRFExYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643723357),('bTBH37PcQHf0Ks0SHa2XTVC9CfxKdJmQkLNtugSW',NULL,'178.79.148.229','curl/7.54.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEJQMlVSUWNZRmxJejBtc3Y5TlVaV0c5R2Z4amEycjNHQU1waWRrUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713139),('eEVjqAWPYiZ5PvF98Bo9GyTzO27vJhBogx6GcoXG',NULL,'178.79.148.229','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkVCUkxmWXc1N0ZhYU9sMndydDEyMzgxbTBZeWdUSEdDRkl1VFROSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713139),('JXL2UGITZqylrEG6te86ejwsHs5OPSqkQuhvk8fE',NULL,'130.211.54.158','python-requests/2.27.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoibXNrSXFEQmh1U085TlRNODdlYlEyYXJrWVJIQzB1eHdBODVOajhJMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713729),('leVUzej85JdXUaT7toMFjlmVdOaayq4w4EkPKAiJ',NULL,'103.156.91.51','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTNwMTJ1MWlFSHNtUm9uUUdJeXJ3d1A1bW9HUmxPUzlkR2JzR3h4MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643717661),('LH3UvGOcxwg23dLyprIVbCvGPf4Xgv2xPykfM4I6',NULL,'178.79.148.229','curl/7.54.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEJyNVBYSWRSYUZ2aG9XZnpQOFhFTjExdDczamJWcUtrYnlERTBaciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713139),('QIiN0VnXYnWW4veevbvRlijG43RT5vRATS2e8lQ7',NULL,'178.79.148.229','curl/7.54.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTk83SEgzZW9hQXV3cGpVUFNJWVQ3czZ3NnRqSVlYbGFJS00xdkZsSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713140),('uNuvLt9hGk3lGwFbhSGuFXWfYIVxezPAT4puS69a',NULL,'178.79.148.229','curl/7.54.0','YToyOntzOjY6Il90b2tlbiI7czo0MDoieWpWZmJrN3czRzhud0NtSnFiWEtQWE9UVGdpTTlEVlNWOE96dXpMdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1643713139),('usR5K3jMyTEvYLGosjS5v0iSm1Fy7pnGAArFHFui',NULL,'178.79.148.229','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjhzUldNdmRQdlpxQmtDeXNiaWlneFkxeFBFVFZPTjF1UWxJWUpOQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713150),('VmhHTzAmBvclIA7x3BPTM4OSy9E2uc7lOlUa1RY1',NULL,'178.79.148.229','curl/7.54.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaE5uQzVzR1JnTWJOR0JqejJSYTRudWZiaWU0UG1GN0dnNUhZZ1dDMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713140),('xih6kcCDs0gRJ0aPqSBMRl8LD7DwDvwCv0RjLUHA',NULL,'178.79.148.229','curl/7.54.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoibUV1ajlsdmxkcW1iNU9HUmIyZGxRaFBsMklZQW5wcTRiczVsbXdGdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713139),('YMKu2q3GUuG8GI6Qdj9uv38k6MSvBsGsqkIr7tpJ',NULL,'178.79.148.229','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiakNMSlk0a0J2Z2hPaVhkWWoydWlEckdPd3hxUGhZenVHaWF3Wk9kUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713139),('YsCoTkytVXXehjUKBPluIS3XSLZ9EaZvR6P1XGik',NULL,'178.79.148.229','','YTozOntzOjY6Il90b2tlbiI7czo0MDoidm91YkdSZ0pmTHNhemJxc2lqWWdxUlZnMEtSMThLTWI2OVphUFdBaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643713150),('ysWQl19WEMZEFsjCIbmbm7KeJluwTbWncdu7d8UN',NULL,'104.206.128.42','https://gdnplus.com:Gather Analyze Provide.','YTozOntzOjY6Il90b2tlbiI7czo0MDoialNjVHN3bmU1TUpRM0tWNW1DRmJJR0VCdlZTQktybEZsZTRUbjBSbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xNTkuMjIzLjEyMC45NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1643715254),('z1jiPNQlW06l1lEoKmfvRnrgvSRD4n84sBFrHoS6',NULL,'41.243.40.221','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVUzREdzWHRxaEVlNFp4eHdYblQySGZWT3FuUklBVkFYQnlsQkZ5UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly93d3cuZmRkLWFzYmwub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1643721823);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@fdd.org',NULL,'$2y$10$N3cU5CvJR3e77sRJJhsnW.G/FHCNz25riMx98NCrdf8686eZ.qRzK',NULL,NULL,NULL,NULL,NULL,'2021-12-08 13:13:39','2021-12-08 13:13:39');
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

-- Dump completed on 2022-02-01 14:58:12
