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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'155,00','Santo Agostinho: Confissões','“Confissões”, de Santo Agostinho, é uma das obras mais importantes da literatura cristã e da filosofia ocidental. Escrita por volta do ano 400 d.C., o livro é uma autobiografia espiritual em que Agostinho narra sua vida desde a infância até sua conversão ao cristianismo.De forma profunda e sincera, ele reflete sobre seus pecados, suas dúvidas, sua busca pela verdade e o encontro com Deus. A obra combina relato pessoal, filosofia e teologia, mostrando o caminho de um homem inquieto que encontra paz apenas em Deus.É um livro sobre arrependimento, fé e a transformação interior do ser humano.','https://americanas.vtexassets.com/arquivos/ids/5694716/164566_1_xlarge.jpg?v=638751451975800000'),(2,'155,00','Eusébio De Cesaréia:História Eclisiástica','“História Eclesiástica”, de Eusébio de Cesareia, é uma das obras mais importantes para o conhecimento dos primeiros séculos do cristianismo. Escrita no início do século IV, ela narra a história da Igreja desde o tempo dos apóstolos até o reinado do imperador Constantino.Eusébio, que foi bispo e historiador, reúne documentos, cartas e testemunhos para mostrar o crescimento da fé cristã, as perseguições sofridas pelos cristãos e o papel dos primeiros mártires e líderes da Igreja.','https://editorapaulus.vtexassets.com/arquivos/ids/159126-800-800?v=637909109245100000&width=800&height=800&aspect=true'),(3,'155,00','Irineu De Lyon: Demonstração da pregação apos','“Demonstração da Pregação Apostólica”, de Santo Irineu de Lião, é uma obra escrita no século II que tem como objetivo apresentar de forma clara e resumida a fé cristã tal como foi transmitida pelos apóstolos.\n\nNela, Irineu explica as principais verdades da doutrina cristã — desde a criação do mundo até a redenção em Cristo — mostrando que a fé da Igreja tem origem direta no ensinamento apostólico.\n\nO livro é considerado um dos primeiros “catecismos” da história da Igreja, pois busca instruir os fiéis e defender a verdadeira fé contra as heresias de sua época.','https://editorapaulus.vtexassets.com/arquivos/ids/160317/patristica-contra-as-heresias-vol-4.png?v=637925355329970000'),(4,'155,00','Irineu De Lyon: Contra as Heresias','“Contra as Heresias”, de Santo Irineu de Lião, é uma das obras mais importantes do cristianismo primitivo. Escrita no final do século II, ela tem como objetivo defender a fé apostólica contra as doutrinas falsas, especialmente as do gnosticismo.\n\nAo longo de cinco livros, Irineu explica e refuta as crenças dos hereges, mostrando como elas se afastam da verdade revelada por Cristo e transmitida pelos apóstolos. Ele também apresenta de forma sistemática os fundamentos da fé cristã, como a criação, a encarnação e a salvação em Jesus.\n\nA obra é um marco na teologia cristã e foi essencial para preservar a unidade e a autenticidade da doutrina da Igreja nos primeiros séculos.','https://m.media-amazon.com/images/I/51BC+RK699L._SY425_.jpg');
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

-- Dump completed on 2025-11-28 18:57:33
