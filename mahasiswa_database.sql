/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.32-MariaDB : Database - mahasiswa_database
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mahasiswa_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `mahasiswa_database`;

/*Table structure for table `data_mahasiswa` */

DROP TABLE IF EXISTS `data_mahasiswa`;

CREATE TABLE `data_mahasiswa` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Semester` int(11) NOT NULL,
  `Prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `NIM` (`NIM`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `data_mahasiswa` */

insert  into `data_mahasiswa`(`No`,`NIM`,`Nama`,`Jenis_Kelamin`,`Semester`,`Prodi`) values 
(2,'32210220','William Syz','Laki-laki',6,'D3 Akutansi'),
(3,'12238449','Albert Hansel','Perempuan',4,'D3 Kebidanan'),
(4,'34495006','Yopan adi','Laki-laki',7,'D3 Teknik Komputer');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
