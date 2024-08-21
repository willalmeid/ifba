-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: mynetflix
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `filme`
--

DROP TABLE IF EXISTS `filme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filme` (
  `id_filme` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `lancamento` datetime DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `diretores` varchar(100) DEFAULT NULL,
  `roteiristas` varchar(100) DEFAULT NULL,
  `bilheteria` varchar(100) DEFAULT NULL,
  `orcamento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_filme`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filme`
--

LOCK TABLES `filme` WRITE;
/*!40000 ALTER TABLE `filme` DISABLE KEYS */;
INSERT INTO `filme` VALUES (1,'Guerra Ifinita','./imagens/poster-guerra-infinita.png','2018-04-26 00:00:00','Açao Ficção, Cientifica, Super-Herói, Aventura e Fantasia','Anthony Russo e Joe Russo','Stephen McFeely e Christopher Markus','US$ 2,052 bilhões','US$ 316 milhões'),(2,'O Poderoso Chefão','./imagens/poster-poderoso-chefao.png','1972-03-24 00:00:00','Mafia, Drama e Policia','Fancis Ford Coppola','Fancis Ford Coppola e Mario Puzo','US$ 120 milhoes','US$ 2 milhões'),(3,'Parasita','./imagens/poster-parasita.png','2019-11-07 00:00:00','Suspense','Joon-ho Bong','Joon-ho Bong e Jin Won Han','US$ 204 milhoes','US$ 11 milhões'),(4,'1917','./imagens/poster-1917.png','2020-01-23 00:00:00','Guerra','Sam Mendes','Sam Mendes e Krysty Wilson-Cairns','US$ 384,6 milhoes','US$ 100 milhões'),(5,'O Irlândes','./imagens/poster-o-irlandes.png','2020-07-08 00:00:00','Suspense e Biográfico','Martin Scorcese','Steve Zaillian','Não teve exibição cinematográfrica','US$ 160 milhões'),(6,'Auto da compadecida','./imagens/poster-auto-da-compadecida.png','2000-09-10 00:00:00','Comédia e Aventura','Guel Arraes','Guel Arraes e João Falcão','R$ 11,4 milhões','R$ 400 mil'),(7,'John Wick: De volta ao jogo','./imagens/poster-de-volta-ao-jogo.png','2014-11-17 00:00:00','Ação','David Leitch e Chad Stahelski','Derek Kolstad','US$ 86,1 milhões','US$ 29 milhões'),(8,'O Pianista','./imagens/poster-o-pianista.png','2003-03-07 00:00:00','Drama e Histórico','Roman Polanski','Roman Polanski e Ronald Harwood','US$ 120 milhões','US$ 35 milhões'),(9,'O Grande Ditador','./imagens/poster-o-grande-ditador.png','1942-08-12 00:00:00','Comédia Sátira','Charles Chaplin','Charles Chaplin','US$ 5 milhões','US$ 2 milhões'),(10,'A Grande Aposta','./imagens/poster-a-grande-aposta.png','2016-01-14 00:00:00','Drama Comédia e Biografia','Adam Mckay','Adam Mckay e Charles Randolph','US$ 28 milhões','US$ 133,4 milhões');
/*!40000 ALTER TABLE `filme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'mynetflix'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-28 15:12:05
