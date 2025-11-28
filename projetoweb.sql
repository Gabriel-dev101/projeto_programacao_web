-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: projetoweb
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'','','');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'80,00','Boné Based','Boné simples e estiloso, perfeito para quem gosta de um visual moderno sem exageros. Feito com material de alta qualidade, tem toque macio, aba curvada e formato estruturado que se adapta bem à cabeça. O design minimalista, com poucos detalhes e cores neutras, traz um ar sofisticado e versátil — ideal para usar no dia a dia, em passeios ou compor um look urbano com personalidade.','https://i.ibb.co/27qwB7XH/bone-based-bege.png'),(2,'90,00','Camisa Básica Branca','Camisa básica branca com design minimalista e toque sofisticado. Produzida em algodão de alta qualidade, oferece conforto e caimento perfeito ao corpo. O logo da marca em preto no peito adiciona contraste sutil e identidade ao visual. Ideal para quem busca uma peça versátil, estilosa e fácil de combinar em qualquer ocasião, do casual ao moderno.','https://i.ibb.co/LfD8MZG/camisa-based-frente.png'),(3,'90,00','Camisa Básica Preta','Camisa básica preta com design clean e moderno. Confeccionada em algodão macio de alta qualidade, oferece conforto, durabilidade e ótimo caimento. O logo da marca em branco no peito traz um contraste elegante e discreto, destacando o estilo minimalista da peça. Versátil e atemporal, combina facilmente com diferentes looks, ideal para quem valoriza simplicidade com personalidade.','https://i.ibb.co/VWr2Z2gV/camisa-based-preta.png'),(4,'249,99','Camisa Social','Camisa social azul-escura com design elegante e sofisticado. Confeccionada em tecido leve e de alta qualidade, oferece conforto e caimento impecável. Possui acabamento refinado, botões discretos e corte que valoriza a silhueta. Ideal para ocasiões formais ou para compor um visual moderno e profissional, unindo estilo, sobriedade e classe em uma única peça.','https://i.ibb.co/pBLLyRhx/camisa-manga-longa-azul.png'),(5,'199,99','Jaqueta de Couro','Jaqueta de couro preta com design marcante e contemporâneo. Produzida em couro legítimo de alta qualidade, oferece durabilidade, conforto e um caimento perfeito. Possui zíper metálico, bolsos funcionais e acabamento detalhado que reforça o estilo urbano e sofisticado. Versátil e atemporal, é a peça ideal para quem busca presença e elegância em qualquer ocasião.','https://i.ibb.co/gn9KMJh/jaqueta-based-frente-1.png'),(6,'149,90','Sweater','Sweater preto com design minimalista e elegante. Confeccionado em tecido macio e de alta qualidade, proporciona conforto térmico e excelente caimento. Possui acabamento refinado nas mangas e na barra, destacando um visual moderno e discreto. Ideal para dias frios, combina facilmente com diferentes estilos, trazendo sofisticação e praticidade ao look.','https://i.ibb.co/Vpj4xWWP/moletom-based-preto.png'),(7,'59,90','Camisa Regata Branca','Regata branca com design simples e moderno. Feita em tecido leve e respirável, garante conforto e liberdade de movimento. Possui corte ajustado ao corpo e acabamento limpo, ideal para compor looks casuais ou esportivos. Versátil e atemporal, é uma peça essencial para dias quentes e para quem busca estilo com praticidade.','https://i.ibb.co/Hs6GVMf/regata-based-branca.png'),(8,'59,90','Camisa Regata Preta','Regata preta com design simples e moderno. Feita em tecido leve e respirável, garante conforto e liberdade de movimento. Possui corte ajustado ao corpo e acabamento limpo, ideal para compor looks casuais ou esportivos. Versátil e atemporal, é uma peça essencial para dias quentes e para quem busca estilo com praticidade.','https://i.ibb.co/237Frw71/regata-based-preta.png'),(9,'59,90','Short Preto','Short preto com design clean e versátil. Confeccionado em tecido leve e resistente, oferece conforto e liberdade de movimento. Possui cós ajustável e bolsos funcionais, unindo praticidade e estilo. Ideal para o dia a dia ou momentos de lazer, é uma peça essencial que combina facilmente com qualquer look casual.','https://i.ibb.co/DgfwSGzt/short-based-preto.png'),(10,'199,90','Sapato de Couro','Tênis preto com design moderno e minimalista. Confeccionado em material resistente e respirável, garante conforto e durabilidade no uso diário. Possui solado antiderrapante e palmilha macia, oferecendo estabilidade e bem-estar a cada passo. Versátil e estiloso, combina com qualquer ocasião, do casual ao urbano, mantendo sempre um visual clean e sofisticado.','https://i.ibb.co/zVtDKRMp/tenis-based-preto.png');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) NOT NULL,
  `Email` varchar(105) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2025-11-28 19:28:33
