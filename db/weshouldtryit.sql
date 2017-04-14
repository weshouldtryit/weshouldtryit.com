-- MySQL dump 10.13  Distrib 5.5.33, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: youandme
-- ------------------------------------------------------
-- Server version	5.5.33-1

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
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` enum('enabled','disabled') NOT NULL DEFAULT 'enabled',
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sort` int(4) NOT NULL DEFAULT '50',
  `hide_result` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `new_index` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (1,0,'enabled','no<br>&nbsp;','',20,1),(2,0,'enabled','we already<br> do that','',30,0),(3,0,'enabled','yes<br>&nbsp;','',70,0),(4,0,'enabled','if my partner<br> interested','',50,0),(5,0,'enabled','I want more<br>&nbsp;','',60,0);
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` enum('enabled','disabled') NOT NULL DEFAULT 'enabled',
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sort` int(4) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,0,'enabled','Basics','',40),(2,0,'enabled','Playing with Toys','',50),(3,0,'enabled','B.D.S.M.','',60),(4,0,'enabled','Anal Play','',70),(5,0,'enabled','Group and Public Fun','',80),(25,0,'enabled','Other Fetishes','',90);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('enabled','disabled') NOT NULL DEFAULT 'enabled',
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'enabled','English');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `date_added` int(24) NOT NULL,
  `date_edited` int(24) NOT NULL,
  `body` text NOT NULL,
  `status` enum('enabled','disabled') NOT NULL DEFAULT 'enabled',
  `allow_publish` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(4) NOT NULL DEFAULT '50',
  `level` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `new_index` (`user_id`),
  KEY `new_index2` (`language_id`),
  KEY `new_index3` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,0,1,1,1389643809,0,'have longer teasing and foreplay sessions with partner','enabled',0,50,1),(2,0,1,1,1389643809,0,'give partner a sensual massage','enabled',0,70,1),(3,0,1,1,1389643809,0,'have partner give me a sensual massage','enabled',0,90,1),(4,0,1,1,1389643809,0,'take pictures of partner','enabled',0,110,1),(5,0,1,1,1389643809,0,'have pictures taken by partner','enabled',0,130,1),(6,0,1,1,1389643809,0,'take pictures of us having sex','enabled',0,150,1),(7,0,1,1,1389643809,0,'strip or give a lap dance to partner','enabled',0,170,1),(8,0,1,1,1389643809,0,'have partner strip or give me a lap dance','enabled',0,190,1),(9,0,1,1,1389643809,0,'film ourselves having sex','enabled',0,210,1),(10,0,1,1,1389643809,0,'use mirrors while having sex','enabled',0,230,1),(11,0,1,1,1389643809,0,'be woken up with sex or oral sex by partner','enabled',0,250,1),(12,0,1,1,1389643809,0,'wake partner up with sex or oral sex','enabled',0,270,1),(13,0,1,1,1389643809,0,'watch partner masturbate','enabled',0,290,1),(14,0,1,1,1389643809,0,'be watched by partner while I masturbate','enabled',0,310,1),(15,0,1,1,1389643809,0,'shave partner','enabled',0,330,1),(16,0,1,1,1389643809,0,'be shaven by partner','enabled',0,350,1),(17,0,1,1,1389643809,0,'shave each other','enabled',0,370,1),(18,0,1,1,1389643809,0,'watch porn together','enabled',0,390,1),(19,0,1,1,1389643809,0,'show partner how I like something from porn scene','enabled',0,410,1),(20,0,1,1,1389643809,0,'be shown what partner likes from porn','enabled',0,430,1),(21,0,1,1,1389643809,0,'thrust my penis between partner\'s breasts','enabled',0,450,1),(22,0,1,1,1389643809,0,'be more vocal towards partner during sex','enabled',0,470,1),(23,0,1,1,1389643809,0,'have partner be more vocal','enabled',0,490,1),(24,0,1,1,1389643809,0,'talk dirtier to partner','enabled',0,510,1),(25,0,1,1,1389643809,0,'have partner talk dirtier to me','enabled',0,530,1),(26,0,1,1,1389643809,0,'call partner obscene words (bitch, slut, whore, etc)','enabled',0,550,1),(27,0,1,1,1389643809,0,'be called obscene words (bitch, slut, whore, etc)by partner','enabled',0,570,1),(28,0,1,1,1389643809,0,'have sex while on period','enabled',0,590,1),(29,0,1,1,1389643809,0,'have sex while on period','enabled',0,610,1),(30,0,1,1,1389643809,0,'roleplay in costumes','enabled',0,630,1),(31,0,1,1,1389643809,0,'wear stocking and high heels for partner during sex','enabled',0,650,1),(32,0,1,1,1389643809,0,'listen to romantic music while having sex','enabled',0,670,1),(33,0,1,1,1389643809,0,'listen to more aggressive (rap/rock) music while having sex','enabled',0,690,1),(34,0,1,1,1389643809,0,'mutually masturbate','enabled',0,710,1),(35,0,1,1,1389643809,0,'be rougher in sex towards partner','enabled',0,730,1),(36,0,1,1,1389643809,0,'have partner be rougher to me in sex','enabled',0,750,1),(37,0,1,1,1389643809,0,'be fisted by partner','enabled',0,770,1),(38,0,1,1,1389643809,0,'69 partner','enabled',0,790,1),(39,0,1,1,1389643809,0,'swallow partner\'s cum','enabled',0,810,1),(40,0,1,1,1389643809,0,'swallow partner\'s cum','enabled',0,830,1),(41,0,1,1,1389643809,0,'cum over partner\'s breasts/neck (pearl necklace)','enabled',0,850,1),(42,0,1,1,1389643809,0,'cum over partner\'s face (facial)','enabled',0,870,1),(43,0,1,1,1389643809,0,'cum over partner\'s face (facial)','enabled',0,890,1),(44,0,1,1,1389643809,0,'have partner cum over my face (facial)','enabled',0,910,1),(45,0,1,1,1389643809,0,'have partner sit on my face as I give oral sex','enabled',0,930,1),(46,0,1,1,1389643809,0,'sit on partner\'s face and be given oral sex','enabled',0,950,1),(47,0,2,1,1389643885,0,'use dildos in sex','enabled',0,50,1),(48,0,2,1,1389643885,0,'use vibrators while having sex','enabled',0,70,1),(49,0,2,1,1389643885,0,'wear a cock ring (vibrating/non-vibrating) during sex','enabled',0,90,1),(50,0,2,1,1389643885,0,'use nipple clamps','enabled',0,110,1),(51,0,2,1,1389643885,0,'use a butt plug while having sex with partner','enabled',0,130,1),(52,0,2,1,1389643885,0,'have partner use a butt plug','enabled',0,150,1),(53,0,2,1,1389643885,0,'use sex furniture (such as a sex swing or ramp)','enabled',0,170,1),(54,0,3,1,1389643987,0,'have a weapon (knife, gun) directed at me during sex (knife and gun play)','enabled',0,50,2),(55,0,3,1,1389643987,0,'direct a weapon (knife, gun) during sex (knife and gun play)','enabled',0,70,2),(56,0,3,1,1389643987,0,'wear earplugs during sex','enabled',0,90,2),(57,0,3,1,1389643987,0,'have partner wear earplugs during sex','enabled',0,110,2),(58,0,3,1,1389643987,0,'slap partner\'s face during sex','enabled',0,130,2),(59,0,3,1,1389643987,0,'have my face slapped during sex','enabled',0,150,2),(60,0,3,1,1389643987,0,'blindfold partner','enabled',0,170,2),(61,0,3,1,1389643987,0,'be blindfolded by partner','enabled',0,190,2),(62,0,3,1,1389643987,0,'punch partner during sex','enabled',0,210,2),(63,0,3,1,1389643987,0,'be punched by partner during sex','enabled',0,230,2),(64,0,3,1,1389643987,0,'use restraints on partner','enabled',0,250,2),(65,0,3,1,1389643987,0,'be tied down or otherwise restrained by partner','enabled',0,270,2),(66,0,3,1,1389643987,0,'pull partner\'s hair','enabled',0,290,2),(67,0,3,1,1389643987,0,'have my hair pulled by partner','enabled',0,310,2),(68,0,3,1,1389643987,0,'use a riding crop on partner','enabled',0,330,2),(69,0,3,1,1389643987,0,'have partner use a riding crop on me','enabled',0,350,2),(70,0,3,1,1389643987,0,'spank partner with your hand','enabled',0,370,2),(71,0,3,1,1389643987,0,'be spanked by partner\'s hand','enabled',0,390,2),(72,0,3,1,1389643987,0,'have partner strike me with a cane','enabled',0,410,2),(73,0,3,1,1389643987,0,'be struck with a cane','enabled',0,430,2),(74,0,3,1,1389643987,0,'spank partner with toys (whip/paddle)','enabled',0,450,2),(75,0,3,1,1389643987,0,'be spanked by partner with toys (whip/paddle)','enabled',0,470,2),(76,0,3,1,1389643987,0,'bite partner','enabled',0,490,2),(77,0,3,1,1389643987,0,'be bitten by partner','enabled',0,510,2),(78,0,3,1,1389643987,0,'wear a dog collar with a leash','enabled',0,530,2),(79,0,3,1,1389643987,0,'have partner wear a dog collar with a leash','enabled',0,550,2),(80,0,3,1,1389643987,0,'have partner be submissive and worship one of my body parts','enabled',0,570,2),(81,0,3,1,1389643987,0,'be submissive and worship one of partner\'s body parts','enabled',0,590,2),(82,0,3,1,1389643987,0,'be submissive for partner','enabled',0,610,2),(83,0,3,1,1389643987,0,'be dominant towards partner','enabled',0,630,2),(84,0,3,1,1389643987,0,'wear hoods or half hoods for partner','enabled',0,650,2),(85,0,3,1,1389643987,0,'have partner wear hoods or half-hoods','enabled',0,670,2),(86,0,3,1,1389643987,0,'have partner act as furniture to be used by me','enabled',0,690,2),(87,0,3,1,1389643987,0,'act as {furniture} to be used by partner','enabled',0,710,2),(88,0,3,1,1389643987,0,'roleplay rape partner','enabled',0,730,2),(89,0,3,1,1389643987,0,'be roleplay raped by partner','enabled',0,750,2),(90,0,3,1,1389643987,0,'have partner be a submissive brat','enabled',0,770,2),(91,0,3,1,1389643987,0,'be a submissive brat towards partner','enabled',0,790,2),(92,0,3,1,1389643987,0,'have partner be a submissive servant','enabled',0,810,2),(93,0,3,1,1389643987,0,'be a submissive servant towards partner','enabled',0,830,2),(94,0,3,1,1389643987,0,'command and deny orgasms for partner','enabled',0,850,2),(95,0,3,1,1389643987,0,'be commanded and denied orgasms by partner','enabled',0,870,2),(96,0,3,1,1389643987,0,'be a 24/7 slave for partner','enabled',0,890,2),(97,0,3,1,1389643987,0,'have partner be a 24/7 slave','enabled',0,910,2),(98,0,3,1,1389643987,0,'wear a chastity belt for partner','enabled',0,930,2),(99,0,3,1,1389643987,0,'have partner wear a chastity belt','enabled',0,950,2),(100,0,3,1,1389643987,0,'be a Gorean slave for partner','enabled',0,970,2),(101,0,3,1,1389643987,0,'be a Gorean master for partner','enabled',0,990,2),(102,0,3,1,1389643987,0,'be suspended while having sex with partner','enabled',0,1010,2),(103,0,3,1,1389643987,0,'have partner be suspended while having sex','enabled',0,1030,2),(104,0,3,1,1389643987,0,'wear a ball gag for partner','enabled',0,1050,2),(105,0,3,1,1389643987,0,'have partner wear a ball gag','enabled',0,1070,2),(106,0,3,1,1389643987,0,'torture partner\'s genitals','enabled',0,1090,2),(107,0,3,1,1389643987,0,'have partner torture my genitals','enabled',0,1110,2),(108,0,4,1,1389644065,0,'anally fist partner','enabled',0,50,2),(109,0,4,1,1389644065,0,'be anally fisted by partner','enabled',0,70,2),(110,0,4,1,1389644065,0,'anally finger partner','enabled',0,90,1),(111,0,4,1,1389644065,0,'be fingered anally by partner','enabled',0,110,1),(112,0,4,1,1389644065,0,'anally penetrate partner','enabled',0,130,1),(113,0,4,1,1389644065,0,'double penetrate partner with me and a toy','enabled',0,150,1),(114,0,4,1,1389644065,0,'peg partner with a strap-on','enabled',0,170,1),(115,0,4,1,1389644065,0,'lick partner\'s anus (analingus)','enabled',0,190,1),(116,0,4,1,1389644065,0,'be licked anally by partner','enabled',0,210,1),(118,0,5,1,1389644186,0,'be bukkake\'d by partner and other men','enabled',0,70,2),(119,0,5,1,1389644186,0,'fondle partner in a public setting (restaurant/theater)','enabled',0,90,1),(120,0,5,1,1389644186,0,'be fondled by partner in a public setting (restaurant/theater)','enabled',0,110,1),(121,0,5,1,1389644186,0,'have my pictures shown over the internet','enabled',0,130,1),(122,0,5,1,1389644186,0,'double penetration by your partner and another man','enabled',0,150,2),(123,0,5,1,1389644186,0,'show pictures of us having sex over the internet','enabled',0,170,1),(124,0,5,1,1389644186,0,'show pictures/film of partner over the internet','enabled',0,190,1),(125,0,5,1,1389644186,0,'triple penetration by your partner two other men','enabled',0,210,2),(126,0,5,1,1389644186,0,'have sex in a car','enabled',0,230,1),(127,0,5,1,1389644186,0,'have sex in the woods or in a park','enabled',0,250,1),(128,0,5,1,1389644186,0,'have sex in work environment (office, etc)','enabled',0,270,1),(129,0,5,1,1389644186,0,'have sex in front of an outward facing window','enabled',0,290,1),(130,0,5,1,1389644186,0,'have sex in a place where you might get caught','enabled',0,310,1),(131,0,5,1,1389644186,0,'watch other couples have sex (live)','enabled',0,330,1),(132,0,5,1,1389644186,0,'let another person/people/couples watch us have sex','enabled',0,350,1),(133,0,5,1,1389644186,0,'have sex monogamously with other couples (don\'t touch other couples)','enabled',0,370,1),(134,0,5,1,1389644186,0,'include another female in sex (menage-a-trois)','enabled',0,390,1),(135,0,5,1,1389644186,0,'include another male in sex (menage-a-trois)','enabled',0,410,1),(136,0,5,1,1389644186,0,'include another couple in sex (small orgy)','enabled',0,430,1),(137,0,5,1,1389644186,0,'include more than two men in sex','enabled',0,450,1),(138,0,5,1,1389644186,0,'include more than two women in sex','enabled',0,470,1),(139,0,5,1,1389644186,0,'participate in an large orgy (more than 4 people)','enabled',0,490,1),(140,0,5,1,1389644186,0,'watch partner have sex with another person','enabled',0,510,1),(141,0,5,1,1389644186,0,'have sex with another person while partner watches','enabled',0,530,1),(142,0,5,1,1389644186,0,'go to a strip club with partner','enabled',0,550,1),(143,0,5,1,1389644186,0,'go to a sex or swingers club with partner','enabled',0,570,1),(144,0,5,1,1389644186,0,'go to a nudist resort with partner','enabled',0,590,1),(145,0,5,1,1389644186,0,'go to a pleasure resort with partner','enabled',0,610,1),(146,0,6,1,1389644499,0,'give partner a foot job','enabled',0,50,1),(147,0,6,1,1389644499,0,'be given a foot job','enabled',0,70,1),(148,0,6,1,1389644499,0,'douse ourselves in oil/mud/paint/milk/pies during sex','enabled',0,90,1),(149,0,6,1,1389644499,0,'use chemicals (menthol, toothpaste, ben-gay) on partner','enabled',0,110,2),(150,0,6,1,1389644499,0,'have partner use chemicals on me (menthol, toothpaste, ben-gay)','enabled',0,130,2),(151,0,6,1,1389644499,0,'have partner give me a golden shower','enabled',0,150,2),(152,0,6,1,1389644499,0,'give partner a golden shower','enabled',0,170,2),(153,0,6,1,1389644499,0,'have partner give me a brown shower','enabled',0,190,2),(154,0,6,1,1389644499,0,'give partner a brown shower','enabled',0,210,2),(155,0,6,1,1389644499,0,'swap my cum with my partner','enabled',0,230,2),(156,0,6,1,1389644499,0,'suck semen out of partner\'s vagina or anus after sex (felching)','enabled',0,250,2),(157,0,6,1,1389644499,0,'suck semen out of partner\'s vagina or anus after sex (felching)','enabled',0,270,2);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_answer`
--

DROP TABLE IF EXISTS `question_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `date_added` int(24) NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `new_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_answer`
--

LOCK TABLES `question_answer` WRITE;
/*!40000 ALTER TABLE `question_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ask_key` varchar(64) NOT NULL,
  `date_added` int(24) NOT NULL,
  `date_edited` int(24) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `levels` varchar(8) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `new_index` (`ask_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_link`
--

DROP TABLE IF EXISTS `user_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_user_id` int(11) NOT NULL,
  `slave_user_id` int(11) NOT NULL,
  `results_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `new_index` (`main_user_id`),
  KEY `new_index2` (`results_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_link`
--

LOCK TABLES `user_link` WRITE;
/*!40000 ALTER TABLE `user_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_link` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-14 13:43:33
