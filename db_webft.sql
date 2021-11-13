/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.31-MariaDB : Database - putuabdi_webteknik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `nip` char(18) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `admins` */

insert  into `admins`(`id`,`nama`,`nip`,`password`,`foto`,`role`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Abdi Purnawan','1805551051','$2y$10$BRXGTwNRfOmJ95aPxXf4Je0.6tl9I9pPHmCuA8u4OwGr4Ojg0.MZe','/storage/image/admin/profile/6158f9668401d.png',1,'2021-06-13 08:09:47','2021-06-13 08:09:51',NULL),
(2,'Hadi Darmawan','1805551041','$2y$10$qPyvtTD9ulK3/VC2UMOJLOiqZZ9d/pyYrQUi90UuKlB2QYvXFct.2',NULL,1,NULL,NULL,NULL),
(3,'Doddy Prat','180555105111111111','$2y$10$mtikaSleya8TaXMpQhqiiON7lIXc3EDLJ5ArDmH9uUTorpyKVSdb.',NULL,0,NULL,NULL,NULL),
(4,'Dekwik','180555105112345678','$2y$10$ckFP0EKEc/BAwKj7zK79NuIQ1/ezRKhsznHnG.mX.fkiPcGoyhrYm',NULL,0,NULL,NULL,NULL),
(5,'Dekwik','180555105112345679','$2y$10$kZSRN5tY6QN7RQ5hYVjnxuJO/TAXDgpYEF8mo0jjBYDpQXGyW2gba',NULL,1,NULL,NULL,'2021-10-19 01:37:57'),
(6,'Guna Saputra','180555107618055510','$2y$10$QmWqPwjZMNCb0Tz57tzjee0sYe4DGtbnqCONRpp3DNdFsoOYdt1jG',NULL,1,NULL,NULL,NULL);

/*Table structure for table `agenda_images` */

DROP TABLE IF EXISTS `agenda_images`;

CREATE TABLE `agenda_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_agenda` bigint(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `agenda_images` */

insert  into `agenda_images`(`id`,`id_agenda`,`image`,`created_at`,`updated_at`) values 
(17,17,'/image/agenda/academic/Temu Alumni/content/60724dc429f0a1.49668831.jpeg','2021-04-11 01:15:48','2021-04-11 01:15:48'),
(18,16,'/image/agenda/academic/AgendaKu/content_ina/6077b9ca63bad9.22536860.png','2021-04-15 03:58:02','2021-04-15 03:58:02'),
(19,16,'/image/agenda/academic/AgendaKu/content_eng/6077b9ca67f014.63103693.png','2021-04-15 03:58:02','2021-04-15 03:58:02'),
(20,22,'/image/agenda/general/PANGGILAN UNTUK KERTAS IJCAET & ISAMPE 2017/content_ina/6077ba233cf361.24836189.png','2021-04-15 03:59:31','2021-04-15 03:59:31'),
(21,22,'/image/agenda/general/PANGGILAN UNTUK KERTAS IJCAET & ISAMPE 2017/content_eng/6077ba233ecf34.42809483.png','2021-04-15 03:59:31','2021-04-15 03:59:31');

/*Table structure for table `agenda_kategoris` */

DROP TABLE IF EXISTS `agenda_kategoris`;

CREATE TABLE `agenda_kategoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ina` varchar(100) DEFAULT NULL,
  `kategori_eng` varchar(100) DEFAULT NULL,
  `kategori_lower` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `agenda_kategoris` */

insert  into `agenda_kategoris`(`id`,`kategori_ina`,`kategori_eng`,`kategori_lower`,`created_at`,`updated_at`,`deleted_at`) values 
(12,'Akademik','Academic','academic','2021-04-01 21:31:53','2021-04-01 14:31:51',NULL),
(14,'Umum','General','general','2021-04-11 09:14:24','2021-04-11 09:14:28',NULL),
(15,'Pentingg','Urgentt','urgentt','2021-06-11 02:23:13','2021-06-10 19:23:11','2021-06-10 19:23:11'),
(16,'Penting Rev','Urgent','urgent','2021-09-05 20:39:55','2021-09-05 13:39:55','2021-09-05 13:39:55');

/*Table structure for table `agendas` */

DROP TABLE IF EXISTS `agendas`;

CREATE TABLE `agendas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(110) DEFAULT NULL,
  `title_slug` varchar(110) DEFAULT NULL,
  `title_eng` varchar(110) DEFAULT NULL,
  `content_ina` text DEFAULT NULL,
  `content_eng` text DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kategori` int(6) DEFAULT NULL,
  `status` enum('aktif','tidak_aktif') DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `pengelola` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `lampiran_name` text DEFAULT NULL,
  `waktu_akhir` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `agendas_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `agenda_kategoris` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `agendas` */

insert  into `agendas`(`id`,`title_ina`,`title_slug`,`title_eng`,`content_ina`,`content_eng`,`lampiran`,`created_at`,`updated_at`,`deleted_at`,`id_kategori`,`status`,`tanggal`,`waktu_mulai`,`lokasi`,`pengelola`,`website`,`lampiran_name`,`waktu_akhir`) values 
(16,'AgendaKu','agendaku','EventsKu','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>Setelah sukses yang dicapai di tahun 2014 mengantarkan seorang lulusan Universitas Udayana sebagai kandidat terbaik dengan menyingkirkan kandidat-kandidat seluruh Indonesia, kini GTP hadir kembali dan mengundang kembali lulusan-lulusan Universitas Udayana untuk kembali bersaing mendapatkan tempat yang terbaik di Coca Cola Amatil Indonesia<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>info lebih lanjut :</p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>CDC Unud (belakang gedung pasca sarjana denpasar)</p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-weight: bold;\">(0361) 255370 INA</span></p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><img data-filename=\"Screenshot_4.png\" style=\"width: 1400px;\" src=\"http://localhost:8000/storage/image/agenda/academic/AgendaKu/content_ina/6077b9ca63bad9.22536860.png\"><span style=\"font-weight: bold;\"><br></span></p><h1></h1><p></p><p></p><p></p></p>\n','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>Setelah sukses yang dicapai di tahun 2014 mengantarkan seorang lulusan Universitas Udayana sebagai kandidat terbaik dengan menyingkirkan kandidat-kandidat seluruh Indonesia, kini GTP hadir kembali dan mengundang kembali lulusan-lulusan Universitas Udayana untuk kembali bersaing mendapatkan tempat yang terbaik di Coca Cola Amatil Indonesia<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>info lebih lanjut :</p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>CDC Unud (belakang gedung pasca sarjana denpasar)</p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-weight: bold;\">(0361) 255370</span></p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><img data-filename=\"Screenshot_5.png\" style=\"width: 1400px;\" src=\"http://localhost:8000/storage/image/agenda/academic/AgendaKu/content_eng/6077b9ca67f014.63103693.png\"><span style=\"font-weight: bold;\"><br></span></p><p></p><p></p><p></p><p></p></p>\n','/storage/file/agenda/academic/Agenda/lampiran/Review Question, Discussion Question, Hand-On MIS Project.docx','2021-09-05 20:52:37','2021-09-05 13:52:37','2021-09-05 13:52:37',12,'aktif','2021-04-01','02:18:00','Undagi Brox',NULL,'tesz','Review Question, Discussion Question, Hand-On MIS Project.docx','03:19:00'),
(17,'Temu Alumni','temu-alumni','Reunion','<p>Akan dilaksanakan temu alumni pada<p><img data-filename=\"Facebook Icon, Facebook Icons, Social Media Icon, Facebook Logo PNG and Vector with Transparent Background for Free Download.jpg\" style=\"width: 360px;\" src=\"http://localhost:8000/storage/image/agenda/academic/Temu%20Alumni/content/60724dc429f0a1.49668831.jpeg\"><br></p></p>\n','<p>Akan dilaksanakan temu alumni pada english<p><img src=\"data:image/jpeg;base64,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\" data-filename=\"Facebook Icon, Facebook Icons, Social Media Icon, Facebook Logo PNG and Vector with Transparent Background for Free Download.jpg\" style=\"width: 360px;\"></p></p>\n','/storage/file/agenda/academic/Temu Alumni/lampiran/Screenshot_4.png','2021-04-11 01:15:48','2021-04-11 01:15:48',NULL,12,'aktif','2021-04-11','09:14:00','Fakultas Teknik Jimbaran',NULL,'https://ft.unud.ac.id','Screenshot_4.png','10:16:00'),
(19,'Elektro Festival 2017','elektro-festival-2017','Electrical Fest 2017','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-size: 18px;\">\"Research and Technology Develovement</span><br><span style=\"font-size: 18px;\">To Establish Indonesia Gold Generation\"</span><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-size: 18px;\">Sabtu 18 Maret 2017</span></p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-size: 18px;\">AULA Lt.III<br>Gedung Pasca Sarjana Unud<br>Kampus Sudirman</span></p></p>\n','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-size: 18px;\">\"Research and Technology Develovement</span><br><span style=\"font-size: 18px;\">To Establish Indonesia Gold Generation\"</span><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-size: 18px;\">Sabtu 18 Maret 2017</span></p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-size: 18px;\">AULA Lt.III<br>Gedung Pasca Sarjana Unud<br>Kampus Sudirman</span></p></p>\n',NULL,'2021-04-11 01:24:22','2021-04-11 01:24:22',NULL,14,'aktif','2021-04-11','09:24:00','Teknik Elektro Jimbaran',NULL,NULL,NULL,'09:26:00'),
(20,'BKFT 53','bkft-53','BKFT 53','<h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">BKFT ke - 53 Tahun 2018<h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\"><br>Hari/ tanggal&nbsp; &nbsp; : Minggu/ 7 Oktober 2018</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Pukul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: 06.30 wita - selesai</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Pakaian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : Olahraga</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kampus FT Sudirman Denpasar</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Acara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : BKFT (Jalan Santai, Senam, Donor Darah, dan lomba - lomba)</h4><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'></p><p><br style=\"color: rgb(102, 102, 102); font-family: Montserrat, sans-serif; font-size: 13px;\"></p><div style=\"color: rgb(102, 102, 102); font-family: Montserrat, sans-serif; font-size: 13px;\"><div class=\"sidebar right-sidebar\" style=\"margin-bottom: 30px;\"><div class=\"widget widget-popular-posts\" style=\"overflow: hidden; margin-bottom: 50px;\"><h4 class=\"classic-title\" style=\'font-family: \"Roboto Slab\", serif; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 16px; margin-left: 0px; font-size: 14px; padding-bottom: 8px; border-bottom: 1px solid rgb(238, 238, 238); text-transform: uppercase; position: relative;\'>ATTACHMENT</h4></div></div></div></h4>\n','<h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">BKFT ke - 53 Tahun 2018 English<h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\"><br>Hari/ tanggal&nbsp; &nbsp; : Minggu/ 7 Oktober 2018</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Pukul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: 06.30 wita - selesai</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Pakaian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : Olahraga</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kampus FT Sudirman Denpasar</h4><h4 style=\"font-family: Montserrat, sans-serif; font-weight: 600; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px;\">Acara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : BKFT (Jalan Santai, Senam, Donor Darah, dan lomba - lomba)</h4><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'></p><p><br style=\"color: rgb(102, 102, 102); font-family: Montserrat, sans-serif; font-size: 13px;\"></p><div style=\"color: rgb(102, 102, 102); font-family: Montserrat, sans-serif; font-size: 13px;\"><div class=\"sidebar right-sidebar\" style=\"margin-bottom: 30px;\"><div class=\"widget widget-popular-posts\" style=\"overflow: hidden; margin-bottom: 50px;\"><h4 class=\"classic-title\" style=\'font-family: \"Roboto Slab\", serif; line-height: 22px; color: rgb(68, 68, 68); margin-right: 0px; margin-bottom: 16px; margin-left: 0px; font-size: 14px; padding-bottom: 8px; border-bottom: 1px solid rgb(238, 238, 238); text-transform: uppercase; position: relative;\'>ATTACHMENT</h4></div></div></div></h4>\n','/storage/file/agenda/general/BKFT 53/lampiran/Screenshot_3.png','2021-04-11 01:25:30','2021-04-11 01:25:30',NULL,14,'aktif','2021-04-11','09:29:00','Kampus Sudirman',NULL,NULL,'Screenshot_3.png','09:29:00'),
(21,'Pembahasan Unit Kredit Partisipasi Mahasiswa Fakultas Teknik Universitas Udayana','pembahasan-unit-kredit-partisipasi-mahasiswa-fakultas-teknik-universitas-udayana','Discussion on Participation Credit Units for Engineering Faculty Student, Udayana University','<pre class=\"tw-data-text tw-text-large XcVN5d tw-ta\" data-placeholder=\"Terjemahan\" id=\"tw-target-text\" dir=\"ltr\" style=\"unicode-bidi: isolate; line-height: 36px; border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; overflow: hidden; width: 270px; overflow-wrap: break-word;\"><span style=\"color: rgb(102, 102, 102); font-family: Helvetica, sans-serif; white-space: normal;\">Referring to the Regulation Rector of Udayana University Number 9 2017 concerning in Guidelines about Participation Credit Units, Thursday 18th March, 2021 the Faculty of Engineering with Senate Engineering Faculty of Udayana University arranged a meeting to discuss guidelines of Participation Credit Units (SKP) for students in the Faculty of Engineering. Located in Ruang Sidang II, 3rd Floor, Dean Building, Faculty of Engineering, Udayana University, Jimbaran. This meeting was attended by all leaders in faculty, lectures for student affairs, and chaired by the Deputy Dean for Student Affairs Mr. Ir. I Nyoman Budiastra,kdkajdakjd M.Erg. In this discussion, the SKP guideline draft that has been made was submitted, so could be corrected and further discussed later. This meeting was important because giving SKP to students was an appreciation form to student for their participation both in academic and non-academic activities.</span><br></pre>\n','<p><span style=\"color: rgb(102, 102, 102); font-family: Helvetica, sans-serif; font-size: 14px;\">Referring to the Regulation Rector of Udayana University Number 9 2017 concerning in Guidelines about Participation Credit Units, Thursday 18th March, 2021 the Faculty of Engineering with Senate Engineering Faculty of Udayana University arranged a meeting to discuss guidelines of Participation Credit Units (SKP) for students in the Faculty of Engineering. Located in Ruang Sidang II, 3rd Floor, Dean Building, Faculty of Engineering, Udayana University, Jimbaran. This meeting was attended by all leaders in faculty, lectures for student affairs, and chaired by the Deputy Dean for Student Affairs Mr. Ir. I Nyoman Budiastra, M.Erg. In this discussion, the SKP guideline draft that has been made was submitted, so could be corrected and further discussed later. This meeting was important because giving SKP to students was an appreciation form to student for their participation both in academic and non-academic activities.</span><br></p>\n',NULL,'2021-04-11 01:28:22','2021-04-11 01:28:22',NULL,14,'aktif','2021-04-14','09:29:00','Unud',NULL,NULL,NULL,'13:31:00'),
(22,'PANGGILAN UNTUK KERTAS IJCAET & ISAMPE 2017','panggilan-untuk-kertas-ijcaet-isampe-2017','CALL FOR PAPERS IJCAET & ISAMPE 2017','<p>Ini agenda ina<p><img data-filename=\"Screenshot_12.png\" style=\"width: 1071px;\" src=\"http://localhost:8000/storage/image/agenda/general/PANGGILAN%20UNTUK%20KERTAS%20IJCAET%20&amp;%20ISAMPE%202017/content_ina/6077ba233cf361.24836189.png\"><br></p></p>\n','<p>ini agenda eng<p><img data-filename=\"Screenshot_12.png\" style=\"width: 1071px;\" src=\"http://localhost:8000/storage/image/agenda/general/PANGGILAN%20UNTUK%20KERTAS%20IJCAET%20&amp;%20ISAMPE%202017/content_eng/6077ba233ecf34.42809483.png\"><br></p></p>\n','/storage/file/agenda/general/PANGGILAN UNTUK KERTAS IJCAET & ISAMPE 2017/lampiran/Screenshot_11.png','2021-04-15 03:59:31','2021-04-15 03:59:31',NULL,14,'aktif','2021-04-15','11:58:00','Unud',NULL,'https://youtube.com','Screenshot_11.png','12:58:00'),
(24,'fgsdfgdf','fgsdfgdf','dfgsgsf','<p>fgdfgdfgfdgf</p>\n','<p>fdgdgdfgdfgdf</p>\n','/storage/file/agenda/general/fgsdfgdf/lampiran/Screenshot_3.png','2021-06-11 02:02:07','2021-06-10 19:02:05','2021-06-10 19:02:05',14,'aktif','2021-04-30','16:49:00','dfgdg',NULL,'dfgdfg','Screenshot_3.png','16:58:00'),
(25,'He Handsome','he-handsome','Announcementku','<p>Apalah kontennya</p>\n','<p>Random content</p>\n',NULL,'2021-06-11 02:10:00','2021-06-10 19:09:58',NULL,12,'aktif','2021-06-11','03:01:00','Undagi Brox',NULL,'tes',NULL,'04:02:00'),
(26,'Program Pasca Sarjana Coca Cola Amatil Indonesia','program-pasca-sarjana-coca-cola-amatil-indonesia','Graduate Trainee Program Coca Cola Amatil Indonesia','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>Setelah sukses yang dicapai di tahun 2014 mengantarkan seorang lulusan Universitas Udayana sebagai kandidat terbaik dengan menyingkirkan kandidat-kandidat seluruh Indonesia, kini GTP hadir kembali dan mengundang kembali lulusan-lulusan Universitas Udayana untuk kembali bersaing mendapatkan tempat yang terbaik di Coca Cola Amatil Indonesia<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>info lebih lanjut :</p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>CDC Unud (belakang gedung pasca sarjana denpasar)</p><p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><span style=\"font-weight: bold;\">(0361) 255370</span></p></p>\n','<pre class=\"tw-data-text tw-text-large XcVN5d tw-ta\" data-placeholder=\"Terjemahan\" id=\"tw-target-text\" dir=\"ltr\" style=\'font-size: 28px; margin-top: -2px; margin-bottom: -2px; overflow: hidden; color: rgb(32, 33, 36); unicode-bidi: isolate; line-height: 36px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; resize: none; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; font-family: \"Google Sans\", arial, sans-serif !important;\'><span class=\"Y2IQFc\" lang=\"en\">After the success achieved in 2014 in leading a Udayana University graduate as the best candidate by eliminating candidates from all over Indonesia, GTP is now back and inviting Udayana University graduates to compete again for the best place in Coca Cola Amatil Indonesia.\r\n\r\nmore info:\r\n\r\nCDC Unud (behind the postgraduate building Denpasar)\r\n\r\n(0361) 255370</span></pre>\n',NULL,'2021-09-06 00:28:14','2021-09-06 00:28:14',NULL,14,'aktif','2021-09-06','08:26:00','Dekanat Fakultas Teknik',NULL,NULL,NULL,'10:26:00');

/*Table structure for table `berita_images` */

DROP TABLE IF EXISTS `berita_images`;

CREATE TABLE `berita_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_berita` bigint(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `berita_images` */

insert  into `berita_images`(`id`,`id_berita`,`image`,`created_at`,`updated_at`) values 
(3,2,'/image/news/academic/Haha/content_ina/6077951b106c64.01801595.png','2021-04-15 01:21:31','2021-04-15 01:21:31'),
(4,2,'/image/news/academic/Haha/content_eng/6077951b15a235.12276574.png','2021-04-15 01:21:31','2021-04-15 01:21:31'),
(5,1,'/image/news/academic/Rapat Koordinasi Karyawan Fakultas Teknik/content_ina/60779589d88ab4.72475309.png','2021-04-15 01:23:22','2021-04-15 01:23:22'),
(6,1,'/image/news/academic/Rapat Koordinasi Karyawan Fakultas Teknik/content_eng/60779589db9f22.90876059.png','2021-04-15 01:23:22','2021-04-15 01:23:22'),
(7,3,'/image/news/academic/Pembahasan Unit Kredit Partisipasi Mahasiswa Fakultas Teknik Universitas Udayana/content_ina/60779682c7ba49.59906912.png','2021-04-15 01:27:30','2021-04-15 01:27:30'),
(8,3,'/image/news/academic/Pembahasan Unit Kredit Partisipasi Mahasiswa Fakultas Teknik Universitas Udayana/content_eng/60779682caa224.67745890.png','2021-04-15 01:27:31','2021-04-15 01:27:31'),
(9,4,'/image/news/academic/Musyawarah Perencanaan dan Pengembangan (Musrenbang) Fakultas Teknik Universitas Udayana/content_ina/607797ae718c73.81176997.png','2021-04-15 01:32:30','2021-04-15 01:32:30'),
(10,4,'/image/news/academic/Musyawarah Perencanaan dan Pengembangan (Musrenbang) Fakultas Teknik Universitas Udayana/content_eng/607797ae73cb70.70080390.png','2021-04-15 01:32:30','2021-04-15 01:32:30'),
(11,5,'/image/news/general/Perolehan Perunggu Pada Pekan Ilmiah Mahasiswa Nasional ke 33/content_ina/60779933163a68.49272287.png','2021-04-15 01:38:59','2021-04-15 01:38:59'),
(12,5,'/image/news/general/Perolehan Perunggu Pada Pekan Ilmiah Mahasiswa Nasional ke 33/content_eng/6077993318ac81.82881164.png','2021-04-15 01:38:59','2021-04-15 01:38:59'),
(13,6,'/image/news/general/Pengenalan Kehidupan Kampus Mahasiswa Baru Tahun 2020/content_ina/60779a946ddaa0.85207143.png','2021-04-15 01:44:52','2021-04-15 01:44:52'),
(14,6,'/image/news/general/Pengenalan Kehidupan Kampus Mahasiswa Baru Tahun 2020/content_eng/60779a946eda87.79704210.png','2021-04-15 01:44:52','2021-04-15 01:44:52'),
(15,7,'/image/news/health/Tim RATNA Fakultas Teknik Menyerahkan Mobile Robot RATNA ke RSPTN UNUD/content_ina/60779cf9a2e021.53569019.png','2021-04-15 01:55:05','2021-04-15 01:55:05'),
(16,7,'/image/news/health/Tim RATNA Fakultas Teknik Menyerahkan Mobile Robot RATNA ke RSPTN UNUD/content_eng/60779cf9a5bcb3.03251315.png','2021-04-15 01:55:06','2021-04-15 01:55:06'),
(17,15,'/image/news/academic/Pengumuman/content_ina/60bb8cb6cca0c9.67048416.jpeg','2021-06-05 14:39:51','2021-06-05 14:39:51');

/*Table structure for table `beritas` */

DROP TABLE IF EXISTS `beritas`;

CREATE TABLE `beritas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(110) DEFAULT NULL,
  `title_slug` varchar(110) DEFAULT NULL,
  `title_eng` varchar(110) DEFAULT NULL,
  `content_ina` text DEFAULT NULL,
  `content_eng` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kategori` int(6) DEFAULT NULL,
  `status` enum('aktif','tidak_aktif') DEFAULT NULL,
  `tanggal_publish` date DEFAULT NULL,
  `thumbnail` text DEFAULT NULL,
  `thumbnail_name` text DEFAULT NULL,
  `read_count` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `beritas_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `beritas` */

insert  into `beritas`(`id`,`title_ina`,`title_slug`,`title_eng`,`content_ina`,`content_eng`,`created_at`,`updated_at`,`deleted_at`,`id_kategori`,`status`,`tanggal_publish`,`thumbnail`,`thumbnail_name`,`read_count`) values 
(1,'Rapat Koordinasi Karyawan Fakultas Teknik','rapat-koordinasi-karyawan-fakultas-teknik','Employee Coordination Meeting of Engineering Faculty','<p>Fakultas Teknik Universitas Udayana mengadakan Rapat Koordinasi Karyawan sehari sebelum libur panjang pada hari Senin, 12 April 2021. Rapat dihadiri oleh seluruh fakultas baik karyawan maupun pimpinan, bertempat di Ruang Sidang II Gedung Dekanat Lantai 3 Teknik Fakultas Jimbaran, yang masih menerapkan protokol kesehatan yang ketat. Pertemuan ini diawali dengan arahan dari Wakil Dekan Bidang Umum dan Keuangan yang memberikan beberapa pandangan tentang standar pelayanan pegawai di Fakultas Teknik. Ada beberapa poin yang dibahas seperti persiapan akreditasi, pembahasan pengisian Target Kinerja Pegawai khususnya tugas dan fungsinya pegawai, serta pengenalan pegawai baru di Fakultas Teknik.<p><img data-filename=\"Screenshot_12.png\" style=\"width: 25%;\" src=\"http://localhost:8000/storage/image/news/academic/Rapat%20Koordinasi%20Karyawan%20Fakultas%20Teknik/content_ina/60779589d88ab4.72475309.png\"><br></p></p>\n','<p><span style=\'color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 13px;\'>The Faculty of Engineering, Udayana University held an Employee Coordination Meeting a day before long holiday on Monday, April 12th, 2021. The meeting was attended by all faculties both employees and leaders, was held in Ruang Sidang II, Dekanat Building 3rd Floor, Engineering Faculty Jimbaran, which still implementing strict health protocols. This meeting was began with an intructions from the Vice Dean for General and Finance Affairs who gave several views about standard employee services in Engineering Faculty. There were several points discussed such as preparation for accreditation, discussion of Employee Performance Target filling especially of the duties and functions employee, as well as introduced the new employees in Faculty of Engineering.</span><p><img data-filename=\"Screenshot_12.png\" style=\"width: 50%;\" src=\"http://localhost:8000/storage/image/news/academic/Rapat%20Koordinasi%20Karyawan%20Fakultas%20Teknik/content_eng/60779589db9f22.90876059.png\"><span style=\'color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 13px;\'><br></span><br></p></p>\n','2021-04-16 15:10:43','2021-04-16 08:10:43',NULL,8,'aktif','2021-04-15','/storage/image/news/academic/Rapat Koordinasi Karyawan Fakultas Teknik/thumbnail/Screenshot_4.png','Screenshot_4.png',8),
(2,'Haha','haha','Hehe','<p>haha<p><img data-filename=\"Screenshot_12.png\" style=\"width: 50%;\" src=\"http://localhost:8000/storage/image/news/academic/Haha/content_ina/6077951b106c64.01801595.png\"><br></p><p><br></p><p></p></p>\n','<p>hehe<p><img data-filename=\"Screenshot_2.png\" style=\"width: 25%;\" src=\"http://localhost:8000/storage/image/news/academic/Haha/content_eng/6077951b15a235.12276574.png\"><br></p><p><br></p><p></p></p>\n','2021-04-15 08:22:25','2021-04-15 01:22:20','2021-04-15 01:22:20',8,'aktif','2021-04-15','/storage/image/news/academic/Haha/thumbnail/Screenshot_7.png','Screenshot_7.png',3),
(3,'Pembahasan Unit Kredit Partisipasi Mahasiswa Fakultas Teknik Universitas Udayana','pembahasan-unit-kredit-partisipasi-mahasiswa-fakultas-teknik-universitas-udayana','Discussion on Participation Credit Units for Engineering Faculty Student, Udayana University','<p>Merujuk pada Peraturan Rektor Universitas Udayana Nomor 9 Tahun 2017 tentang Pedoman tentang Satuan Kredit Penyertaan, Kamis 18 Maret 2021 Fakultas Teknik bersama Senat Fakultas Teknik Universitas Udayana mengadakan rapat pembahasan pedoman Satuan Kredit Penyertaan (SKP) bagi mahasiswa. di Fakultas Teknik. Bertempat di Ruang Sidang II Lantai 3 Gedung Dekanat Fakultas Teknik Universitas Udayana Jimbaran. Pertemuan ini dihadiri oleh seluruh pimpinan fakultas, dosen kemahasiswaan, dan dipimpin langsung oleh Wakil Dekan Bidang Kemahasiswaan Bapak Ir. I Nyoman Budiastra, M.Erg. Dalam pembahasan ini, draft pedoman SKP yang telah dibuat sudah disampaikan, sehingga dapat diperbaiki dan dibahas lebih lanjut nanti. Pertemuan ini penting karena pemberian SKP kepada mahasiswa merupakan bentuk apresiasi kepada mahasiswa atas partisipasinya baik dalam kegiatan akademik maupun non akademik.<p style=\"text-align: center; \"><img data-filename=\"Screenshot_79.png\" style=\"width: 1054px;\" src=\"http://localhost:8000/storage/image/news/academic/Pembahasan%20Unit%20Kredit%20Partisipasi%20Mahasiswa%20Fakultas%20Teknik%20Universitas%20Udayana/content_ina/60779682c7ba49.59906912.png\"><br></p></p>\n','<p>Referring to the Regulation Rector of Udayana University Number 9 2017 concerning in Guidelines about Participation Credit Units, Thursday 18th March, 2021 the Faculty of Engineering with Senate Engineering Faculty of Udayana University arranged a meeting to discuss guidelines of Participation Credit Units (SKP) for students in the Faculty of Engineering. Located in Ruang Sidang II, 3rd Floor, Dean Building, Faculty of Engineering, Udayana University, Jimbaran. This meeting was attended by all leaders in faculty, lectures for student affairs, and chaired by the Deputy Dean for Student Affairs Mr. Ir. I Nyoman Budiastra, M.Erg. In this discussion, the SKP guideline draft that has been made was submitted, so could be corrected and further discussed later. This meeting was important because giving SKP to students was an appreciation form to student for their participation both in academic and non-academic activities.<p style=\"text-align: center; \"><img data-filename=\"Screenshot_79.png\" style=\"width: 1054px;\" src=\"http://localhost:8000/storage/image/news/academic/Pembahasan%20Unit%20Kredit%20Partisipasi%20Mahasiswa%20Fakultas%20Teknik%20Universitas%20Udayana/content_eng/60779682caa224.67745890.png\"><br></p></p>\n','2021-04-25 10:30:56','2021-04-25 03:30:54',NULL,8,'aktif','2021-04-15','/storage/image/news/academic/Pembahasan Unit Kredit Partisipasi Mahasiswa Fakultas Teknik Universitas Udayana/thumbnail/Screenshot_77.png','Screenshot_77.png',2),
(4,'Musyawarah Perencanaan dan Pengembangan (Musrenbang) Fakultas Teknik Universitas Udayana','musyawarah-perencanaan-dan-pengembangan-musrenbang-fakultas-teknik-universitas-udayana','Planning and Development Deliberation (Musrenbang) Faculty of Engineering, Udayana University','<p>Fakultas Teknik Universitas Udayana menyelenggarakan Musyawarah Perencanaan dan Pembangunan (Musrenbang) Rabu, 17 Maret 2021. Rapat online ini dipimpin oleh Wakil Dekan Bidang Akademik dan Perencanaan Bapak I Ketut Sudarsana, ST., Ph.D dan dihadiri oleh seluruh pimpinan fakultas dan sub unit terkait. Diskusi ini merupakan tindak lanjut dari Musrenbang Universitas, dan hasilnya akan dijadikan acuan dalam penyusunan Rencana Kerja dan Anggaran Fakultas Teknik Universitas Udayana 2022. Pertemuan ini menegaskan bahwa seluruh rencana kegiatan harus mengacu pada Key Performance Indicator. Renstra, kontrak kinerja, atau indikator BANPT, juga mendesak koordinator program studi untuk mengarahkan timnya dalam membuat Rencana Kerja dan Anggaran 2022. Dengan demikian, Rencana Kerja dan Anggaran yang akan dibuat tidak menyimpang dan dapat mencapai target.<p style=\"text-align: center; \"><img data-filename=\"Screenshot_12.png\" style=\"width: 1071px;\" src=\"http://localhost:8000/storage/image/news/academic/Musyawarah%20Perencanaan%20dan%20Pengembangan%20(Musrenbang)%20Fakultas%20Teknik%20Universitas%20Udayana/content_ina/607797ae718c73.81176997.png\"><br></p></p>\n','<p>The Engineering Faculty of Udayana University arranged a Planning and Development Deliberation (Musrenbang) Wednesday, 17th of March, 2021. This online meeting was chaired by the Deputy Dean of Academic and Planning Affairs Mr. I Ketut Sudarsana, ST., Ph.D and was attended by all leaders in faculty and related sub-units. This discussion is a follow-up of the Musrenbang University, and the result will be used as a reference in compiling the Work Plan and Budget for Engineering Faculty of Udayana University 2022. This meeting emphasized that all activity plans must referring to the Key Performance Indicator of Renstra, contracts of performance, or BANPT indicators , also urge coordinators of program study to direct their team in making the 2022 Work Plan and Budget. Accordingly, the Work Plan and Budget that will make does not deviate and can achieve the targets.<p style=\"text-align: center; \"><img data-filename=\"Screenshot_12.png\" style=\"width: 1071px;\" src=\"http://localhost:8000/storage/image/news/academic/Musyawarah%20Perencanaan%20dan%20Pengembangan%20(Musrenbang)%20Fakultas%20Teknik%20Universitas%20Udayana/content_eng/607797ae73cb70.70080390.png\"><br></p></p>\n','2021-04-16 13:12:23','2021-04-16 06:12:23',NULL,8,'aktif','2021-04-15','/storage/image/news/academic/Musyawarah Perencanaan dan Pengembangan (Musrenbang) Fakultas Teknik Universitas Udayana/thumbnail/Screenshot_15.png','Screenshot_15.png',2),
(5,'Perolehan Perunggu Pada Pekan Ilmiah Mahasiswa Nasional ke 33','perolehan-perunggu-pada-pekan-ilmiah-mahasiswa-nasional-ke-33','Bronze Acquisition at the 33rd National Student Scientific Week','<p style=\"text-align: center; \"><img data-filename=\"Screenshot_80.png\" style=\"width: 1057px;\" src=\"http://localhost:8000/storage/image/news/general/Perolehan%20Perunggu%20Pada%20Pekan%20Ilmiah%20Mahasiswa%20Nasional%20ke%2033/content_ina/60779933163a68.49272287.png\"><p style=\"text-align: left;\">Fakultas Teknik Universitas Udayana ikut serta berpertisipasi dalam Pekan Ilmiah Nasional ke - 33 yang diselenggarakan pada tanggal 24 - 29 Nopember 2020&nbsp; dengan tuan rumah Universitas Gadjah Mada secara daring melalui Zoom Meeting. Kegiatan yang diselenggarakan oleh Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) ini merupakan forum pertemuan ilmiah dan komunikasi produk kreasi mahasiswa yang diikuti oleh mahasiswa atau kelompok mahasiswa yang terpilih melalui jalur Program Kreativitas Mahasiswa (PKM) dan non-PKM.&nbsp;</p><p><br></p><p>Fakultas Teknik diwakili oleh LOADING TEAM dengan Putu Brahmanda Sudarsana sebagai Ketua Team dengan beranggotakan I Made Putra Arya Winata dan Sonny Suharto berada di bawah bimbingan Prof. I Dewa Gede Ary Subagia, ST., MT., PhD sebagai Dosen Pembimbing.</p><p><br></p><p>Loading Team mengajukan proposal dalam kategori Program Kreativitas Mahasiswa Karsa Cipta (PKMKC) dengan judul &acirc;&#128;&#156;Sistem Cetakan Injeksi Polimer Berbasis Microcontroller sebagai Preservasi Manuskrip Lontar&acirc;&#128;&#157;.</p><p><br></p><p>PKMKC yang dibuat mengangkat permasalahan lontar yang banyak mengalami kerusakan dan usaha presevasi yang belum efektif sehingga dibuat inovasi suatu sistem yang bekerja dengan metode Vacuum-Assisted Resin Transfer Molding (VARTM) terintegrasi dengan Internet of Things (IoT) sebagai sistem monitoring. Sistem/alat ini nantinya bisa melapisi lontar dengan resin dengan ketebalan 1 mm pada dua sisi sehingga lontar akan tahan terhadap temperatur ekstrim (kebakaran) dan kerusakan akibat faktor biologis.</p><p><br></p><p>Dengan proposal tersebut LOADING TEAM berhasil meraih Medali Perunggu kategori Presentasi Ilmiah dengan menyisihkan 100 tim lain dari total 625 tim yang berpartisipasi dalam PIMNas ke - 33 yang diikuti oleh 101 perguruan tinggi di seluruh Indonesia.</p><p><br></p><p>Selamat kepada LOADING TEAM serta Dosen Pembimbing atas prestasi yang telah diraih.</p></p>\n','<p style=\"text-align: center; \"><img data-filename=\"Screenshot_80.png\" style=\"width: 1057px;\" src=\"http://localhost:8000/storage/image/news/general/Perolehan%20Perunggu%20Pada%20Pekan%20Ilmiah%20Mahasiswa%20Nasional%20ke%2033/content_eng/6077993318ac81.82881164.png\"><p style=\"text-align: left;\">The Faculty of Engineering, Udayana University participated in participating in the 33rd National Scientific Week which was held on November 24-29, 2020, hosted by Gadjah Mada University online through the Zoom Meeting. This activity, which is organized by the Directorate General of Higher Education (Ditjen Dikti), is a forum for scientific meetings and communication of student creations which is attended by students or groups of students selected through the Student Creativity Program (PKM) and non-PKM.</p><p><br></p><p>The Faculty of Engineering was represented by LOADING TEAM with Putu Brahmanda Sudarsana as Team Leader consisting of I Made Putra Arya Winata and Sonny Suharto under the guidance of Prof. I Dewa Gede Ary Subagia, ST., MT., PhD as the Advisor.</p><p><br></p><p>Loading Team submits a proposal in the category of Creative Student Creativity Program (PKMKC) with the title \"Microcontroller-Based Polymer Injection Molding System as Lontar Manuscript Preservation\".</p><p><br></p><p>The PKMKC that was made raised the problem of lontar which had suffered a lot of damage and ineffective preservation efforts were made so that an innovation of a system that worked with the Vacuum-Assisted Resin Transfer Molding (VARTM) method was integrated with the Internet of Things (IoT) as a monitoring system. This system / tool will be able to coat the lontar with resin with a thickness of 1 mm on both sides so that it will withstand extreme temperatures (fire) and damage due to biological factors.</p><p><br></p><p>With this proposal LOADING TEAM won the Bronze Medal in the Scientific Presentation category by eliminating 100 other teams from a total of 625 teams that participated in the 33rd PIMNas which was attended by 101 universities throughout Indonesia.</p><p><br></p><p>Congratulations to LOADING TEAM and Supervising Lecturers for the achievements.</p></p>\n','2021-04-15 08:48:31','2021-04-15 01:48:26',NULL,13,'aktif','2021-04-15','/storage/image/news/general/Perolehan Perunggu Pada Pekan Ilmiah Mahasiswa Nasional ke 33/thumbnail/Screenshot_80.png','Screenshot_80.png',0),
(6,'Pengenalan Kehidupan Kampus Mahasiswa Baru Tahun 2020','pengenalan-kehidupan-kampus-mahasiswa-baru-tahun-2020','Introduction to Campus Life for New Students in 2020','<p>Serangkaian Pelaksanaan Kegiatan Penerimaan Mahasiswa Baru Tahun Ajaran 2020-2021 Fakultas Teknik Universitas Udayana hari ini mulai dilaksanaan secara daring. Kegiatan Pertama dimulai dengan Acara Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) yang dilaksanakan melalui aplikasi Cisco Webex dan disiarkan secara langsung melalui Youtube Streaming (https://youtu.be/nSjzZV1ebPs).&nbsp; Acara Kegiatan PKKMB Fakultas Teknik Tahun 2020 Mengambil Tema Revitalisasi Tri Dharma Perguruan Tinggi di FT, Unud untuk mencetak SDM Unggul di Era Revolusi Industri 4.0 dan Tatanan Era Baru. Acara PKKMB Tahun 2020 Hadiri oleh seluruh Mahasiswa Baru Sebanyak 872 Orang dan 10 Orang Mahasiswa Lama melalui Aplikasi Cisco Webex Meeting&nbsp; di kediaman masing-masing. Acara PKKMB dilaksanakan dalam 2 sesi acara. Sesi Pertama (Sesi Pagi) dilaksanakan di Lingkungan Fakultas Teknik dan Sesi Dua (Sesi Siang) dilaksanakan di Lingkungan Program Studi Fakultas Teknik Universitas Udayana melalui Link Aplikasi Cisco Webex yang telah dibagikan ke masing-masing peserta PKKMB.<p><img data-filename=\"Screenshot_81.png\" style=\"width: 100%;\" src=\"http://localhost:8000/storage/image/news/general/Pengenalan%20Kehidupan%20Kampus%20Mahasiswa%20Baru%20Tahun%202020/content_ina/60779a946ddaa0.85207143.png\"><br></p></p>\n','<p>A series of New Student Admissions Activities for the 2020-2021 Academic Year of the Faculty of Engineering, Udayana University today began to be carried out online. The first activity began with the New Student Campus Life Introduction Program (PKKMB) which was carried out through the Cisco Webex application and broadcast live via Youtube Streaming (https://youtu.be/nSjzZV1ebPs). The 2020 Faculty of Engineering PKKMB Activities Take the Theme of Revitalizing the Tri Dharma of Higher Education at FT, Udayana University to produce superior human resources in the 4.0 Industrial Revolution Era and the New Era Order. The 2020 PKKMB event was attended by all 872 new students and 10 old students through the Cisco Webex Meeting application at their respective residences. The PKKMB program was held in 2 session sessions. The First Session (Morning Session) is held in the Faculty of Engineering Environment and the Second Session (Afternoon Session) is held in the Udayana University Faculty of Engineering Study Program Environment through the Cisco Webex Application Link which has been distributed to each PKKMB participant.<p><img data-filename=\"Screenshot_81.png\" style=\"width: 100%;\" src=\"http://localhost:8000/storage/image/news/general/Pengenalan%20Kehidupan%20Kampus%20Mahasiswa%20Baru%20Tahun%202020/content_eng/60779a946eda87.79704210.png\"><br></p></p>\n','2021-07-13 08:05:16','2021-07-13 01:05:16',NULL,13,'aktif','2021-04-15','/storage/image/news/general/Pengenalan Kehidupan Kampus Mahasiswa Baru Tahun 2020/thumbnail/Screenshot_81.png','Screenshot_81.png',5),
(7,'Tim RATNA Fakultas Teknik Menyerahkan Mobile Robot RATNA ke RSPTN UNUD','tim-ratna-fakultas-teknik-menyerahkan-mobile-robot-ratna-ke-rsptn-unud','RATNA Team, Faculty of Engineering, Submits the RATNA Mobile Robot to RSPTN UNUD','<p>Sesuai dengan surat tugas 2432/UN14.2.5/KM.04.02/2020 yang dikeluarkan oleh Ngakan Putu Gede Suardana selaku Dekan Fakultas Teknik Universitas Udayana telah membentuk Tim RATNA (Robot Assistant Udayana). Tim RATNA dibimbing oleh Cok Gede Indra Parta dan I Wayan Widiada yang beranggotakan 13 orang mahasiswa dari Prodi Teknik Elektro. Tujuan dibentuknya tim ini adalah untuk membuat robot yang dapat membantu tenaga medis untuk membawakan logistik maupun alat pelindung diri (APD).<p><br></p><p>Robot RATNA adalah mobile robot yang dapat dikontrol dan dapat difungsikan untuk membantu tenaga medis merawat pasien. Pembuatan robot ini diharapkan dapat meminimalisir penularan virus COVID-19 akibat interaksi langsung antara perawat dengan pasien . Fungsi RATNA antara lain membawa hand sanitizer, dapat mengecek suhu tubuh pasien, tekanan darah, dan berkomunikasi secara audio visual langsung dengan dokter yang akan memberikan instruksi serta menanyakan setiap keadaan dari pasien.</p><p><br></p><p>Tim RATNA akhirnya berhasil merampungkan pembuatan robot assistant udayana ini. Selanjutnya Tim RATNA didampingi oleh Ibu Rektor Universitas Udayana serta beberapa pejabat lainnya menyerahkan RATNA ke RSPTN pada tanggal 29 Juli 2020. Tim RATNA mengharapkan robot ini dapat bermanfaat secara maksimal dalam membantu&nbsp; para petugas medis untuk menangani sejumlah pasien COVID-19 di RSPTN Unud.</p><p style=\"text-align: center; \"><img data-filename=\"Screenshot_83.png\" style=\"width: 100%;\" src=\"http://localhost:8000/storage/image/news/health/Tim%20RATNA%20Fakultas%20Teknik%20Menyerahkan%20Mobile%20Robot%20RATNA%20ke%20RSPTN%20UNUD/content_ina/60779cf9a2e021.53569019.png\"><br></p><p><br></p></p>\n','<p>In accordance with the assignment letter 2432 / UN14.2.5 / KM.04.02 / 2020 issued by Ngakan Putu Gede Suardana as the Dean of the Faculty of Engineering, Udayana University, has formed the RATNA Team (Robot Assistant Udayana). The RATNA team was guided by Cok Gede Indra Parta and I Wayan Widiada, which consisted of 13 students from the Electrical Engineering Study Program. The aim of this team was to create a robot that could help medical personnel to carry logistics and personal protective equipment (PPE).<p><br></p><p>RATNA robot is a mobile robot that can be controlled and can be used to help medical personnel treat patients. The making of this robot is expected to minimize the transmission of the COVID-19 virus due to direct interaction between nurses and patients. RATNA\'s functions include carrying a hand sanitizer, being able to check the patient\'s temperature, blood pressure, and communicating audio-visual directly with the doctor who will give instructions and ask about any conditions from the patient.</p><p><br></p><p>The RATNA team finally succeeded in completing the construction of this assistant Udayana robot. Furthermore, the RATNA team accompanied by the Rector of Udayana University and several other officials submitted RATNA to RSPTN on July 29, 2020. The RATNA team hopes that this robot can be of maximum use in helping medical officers to handle a number of COVID-19 patients at RSPTN Unud.</p><p><img data-filename=\"Screenshot_83.png\" style=\"width: 100%;\" src=\"http://localhost:8000/storage/image/news/health/Tim%20RATNA%20Fakultas%20Teknik%20Menyerahkan%20Mobile%20Robot%20RATNA%20ke%20RSPTN%20UNUD/content_eng/60779cf9a5bcb3.03251315.png\"><br></p><p><br></p></p>\n','2021-09-16 10:26:52','2021-09-16 03:26:52',NULL,7,'aktif','2021-04-15','/storage/image/news/health/Tim RATNA Fakultas Teknik Menyerahkan Mobile Robot RATNA ke RSPTN UNUD/thumbnail/Screenshot_82.png','Screenshot_82.png',42),
(8,'Kunjungan SMK Telekomedika Bogor','kunjungan-smk-telekomedika-bogor','Visit of SMK Telekomedika Bogor','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>SMK Telekomedika Bogor mengunjungi Fakultas Teknik Universitas Udayana pada hari Jumat, 10 Januari 2020 bertempat di Ruang Sidang II Gedung Dekanat Fakultas Teknik Universitas Udayana. Kunjungan yang berjumlah 115 orang tersebut dipimpin oleh Kepala Sekolah SMK Telekomedika Bogor serta beberapa orang Guru Pendamping.<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><img src=\"https://ft.unud.ac.id/protected/storage/file_summernote/uploads/post/d56d13454fc6024347e39143b424faaf.jpg\" style=\"border: 0px; max-width: 100%; height: auto; width: 873px;\"></p></p>\n','<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>SMK Telekomedika Bogor mengunjungi Fakultas Teknik Universitas Udayana pada hari Jumat, 10 Januari 2020 bertempat di Ruang Sidang II Gedung Dekanat Fakultas Teknik Universitas Udayana. Kunjungan yang berjumlah 115 orang tersebut dipimpin oleh Kepala Sekolah SMK Telekomedika Bogor serta beberapa orang Guru Pendamping.<p style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><img src=\"https://ft.unud.ac.id/protected/storage/file_summernote/uploads/post/d56d13454fc6024347e39143b424faaf.jpg\" style=\"border: 0px; max-width: 100%; height: auto; width: 873px;\"></p></p>\n','2021-07-23 17:28:31','2021-07-23 10:28:32',NULL,1,'aktif','2021-04-15','/storage/image/news/technology/Kunjungan SMK Telekomedika Bogor/thumbnail/Screenshot_13.png','Screenshot_13.png',9),
(13,'Hari ini senjawsdsdas','hari-ini-senjawsdsdas','todays','<p>haha</p>\n','<p>hehe</p>\n','2021-09-05 09:51:10','2021-09-05 02:51:10','2021-09-05 02:51:10',1,'aktif','2021-04-30','/storage/image/news/technology/Hari ini senjawsdsdas/thumbnail/608bc14b49c19.png','608bc14b49c19.png',1),
(14,'Hari ini senjawsdsdassdasd','hari-ini-senjawsdsdassdasd','todays','<p>haha</p>\n','<p>hehe</p>\n','2021-09-05 09:51:21','2021-09-05 02:51:21','2021-09-05 02:51:21',1,'aktif','2021-04-30','/storage/image/news/technology/Hari ini senjawsdsdassdasd/thumbnail/608bad0ae754d.png','608bad0ae754d.png',14),
(15,'Pengumuman','pengumuman','Announcement','<p><img style=\"width: 512px;\" data-filename=\"sma1.jpg\" src=\"http://localhost:8000/storage/image/news/academic/Pengumuman/content_ina/60bb8cb6cca0c9.67048416.jpeg\"><b></b></p>\n','<p>Berita&nbsp;</p>\n','2021-09-05 09:52:40','2021-09-05 02:52:39','2021-09-05 02:52:39',8,'aktif','2021-06-05','/storage/image/news/academic/Pengumuman/thumbnail/60bb8cb6706ba.png','60bb8cb6706ba.png',5),
(16,'Indo','indo','Hari ini senjawsdsdas','<p>Hari ini senjawsdsdas<ul><li>abdssff</li><li>dwdwdwdw</li><li>wdsddwd</li><li>dadadadadad</li></ul><p>dadadadad</p><ol><li>daadad</li><li>adada</li><li>dadad</li></ol></p>\n','<p>Hari ini senjawsdsdas<br></p>\n','2021-10-09 17:47:39','2021-10-09 10:46:17',NULL,7,'aktif','2021-06-08','/storage/image/news/health/Hari ini ini cerah/thumbnail/60bf68a601822.png','60bf68a601822.png',11),
(17,'Indo','indo','Inggris','<p>Indo</p>\n','<p>Inggris<br></p>\n','2021-08-06 10:06:14','2021-08-06 03:05:43',NULL,1,'tidak_aktif','2021-07-23','/storage/image/news/technology/Indo/thumbnail/60fc1d62ad07f.png','60fc1d62ad07f.png',0),
(18,'Peningkatan Jiwa Kewirausahaan Lulusan Fakultas Teknik','peningkatan-jiwa-kewirausahaan-lulusan-fakultas-teknik','The Improving Spirit of Entrepreneurship of Engineering Faculty Graduates','<p class=\"MsoNormal\" style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px; text-align: justify;\'><span style=\"font-size: 12pt; line-height: 17.12px;\"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Fakultas teknik Universitas Udayana</span></font></span></p>\n','<p class=\"MsoNormal\" style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px; text-align: justify;\'><span style=\"font-size: 12pt; line-height: 17.12px;\"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">The Faculty of Engineering held the Improving Spirit of Entrepreneurship of Engineering Faculty Graduates on Period 143, Thursday, 2</span><span style=\"position: relative; font-size: 12px; line-height: 0; vertical-align: baseline; top: -0.5em;\"><span style=\"font-size: 14px;\">nd</span></span><span style=\"font-size: 14px;\">&nbsp;September 2021. Like a previous event, this graduation also held online via Cisco Webex Aps and lives streaming on the official YouTube channel.</span><p></p></font></span><p class=\"MsoNormal\" style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px; text-align: justify;\'><span style=\"font-size: 12pt; line-height: 17.12px;\"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">The event was began by academic report by the Vice Dean for General and Finance Dr. Ir. I Ketut Gede Sugita, MT. I Ketut Sugita said that this graduation purpose to giving motivation about entrepreneurship knowledge to the graduates with inviting speaker from alumni of Engineering Faculty that has experience full in work world.</span></font></span></p></p>\n','2021-11-12 20:49:45','2021-11-12 13:49:45',NULL,8,'aktif','2021-09-05','/storage/image/news/academic/Peningkatan Jiwa Kewirausahaan Lulusan Fakultas Teknik/thumbnail/6134576636045.png','6134576636045.png',1);

/*Table structure for table `downloads` */

DROP TABLE IF EXISTS `downloads`;

CREATE TABLE `downloads` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(110) DEFAULT NULL,
  `title_eng` varchar(110) DEFAULT NULL,
  `url_download` text DEFAULT NULL,
  `title_slug` varchar(110) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `downloads` */

insert  into `downloads`(`id`,`title_ina`,`title_eng`,`url_download`,`title_slug`,`created_at`,`updated_at`,`deleted_at`) values 
(3,'Dokumen Kepangkatan Dosen Fakultas Tekniks','Udayana University Document Heheheheez','https://drive.google.com/file/d/14lMPDGmLvY5Rx-PMt22_42ZUfMvdO4E8/view?usp=sharings','dokumen-kepangkatan-dosen-fakultas-tekniks','2021-04-02 10:54:18','2021-04-02 10:54:18',NULL),
(2,'Dokumen Kepangkatan Dosen Fakultas Teknik Rev','Udayana University Document Hehehehee','https://drive.google.com/file/d/1aXx19DW_lWnf__uMCZTxOhRuKOPT7TO1/view?usp=sharing','dokumen-kepangkatan-dosen-fakultas-teknik-rev','2021-04-02 10:41:58','2021-10-10 13:09:56',NULL),
(4,'Dokumen Kepangkatan Dosen Fakultas Teknikssdsdsd','Udayana University Document Heheheheezsdsds','https://www.youtube.com/watch?v=hoCwM09r4sc','dokumen-kepangkatan-dosen-fakultas-teknikssdsdsd','2021-04-02 10:55:56','2021-04-02 10:59:01',NULL),
(5,'Pengumuman','Announcement','https://drive.google.com/file/d/14lMPDGmLvY5Rx-PMt22_42ZUfMvdO4E8/view?usp=sharing','pengumuman','2021-06-10 21:12:22','2021-06-10 21:16:19','2021-06-10 21:16:19'),
(6,'Dokumen Kepangkatan Fakultas Teknik','Faculty of Engineering Ranking Document','https://drive.google.com/file/d/14lMPDGmLvY5Rx-PMt22_42ZUfMvdO4E8/view?usp=sharing','dokumen-kepangkatan-fakultas-teknik','2021-10-10 12:58:54','2021-10-10 12:58:54',NULL);

/*Table structure for table `galeris` */

DROP TABLE IF EXISTS `galeris`;

CREATE TABLE `galeris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(150) DEFAULT NULL,
  `title_eng` varchar(150) DEFAULT NULL,
  `title_slug` varchar(150) DEFAULT NULL,
  `deskripsi_ina` text DEFAULT NULL,
  `deskripsi_eng` text DEFAULT NULL,
  `galeri` text DEFAULT NULL,
  `galeri_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `galeris` */

insert  into `galeris`(`id`,`title_ina`,`title_eng`,`title_slug`,`deskripsi_ina`,`deskripsi_eng`,`galeri`,`galeri_name`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'PKKMB 2021','PKKMB 2021 Eng','pkkmb-2021','Ini PKKMB ya kak baru edit','This is PKKMB Boy new edig','/storage/image/galeri/pkkmb-2021/Logo-unud-baru.png','Logo-unud-baru.png','2021-03-26 22:13:18','2021-03-26 15:13:16',NULL),
(2,'Musyawarah Bersama','Joint Deliberation','musyawarah-bersama','Musyawarah Bersama','Joint Deliberation','/storage/image/galeri/musyawarah-bersama/Screenshot_11.png','Screenshot_11.png','2021-04-15 08:56:53','2021-04-15 08:56:53',NULL),
(3,'dfsfsdf','sfsdfsdf','dfsfsdf','sfsdfsfsfsfsfsdf','sfsdfsfsfsfsfsfs','/storage/image/galeri/dfsfsdf/608bca3fecc61.png','608bca3fecc61.png','2021-04-30 16:13:35','2021-04-30 09:13:35',NULL),
(4,'He Handsome','Announcement','he-handsome','hbhjgvhvnv','hbhjgvhvnv','/storage/image/galeri/he-handsome/60c278a280f76.png','60c278a280f76.png','2021-06-11 03:46:42','2021-06-10 20:46:42','2021-06-10 20:46:42'),
(5,'Peningkatan Jiwa Kewirausahaan Lulusan Fakultas Teknik Rev','The Improving Spirit of Entrepreneurship of Engineering Faculty Graduates','peningkatan-jiwa-kewirausahaan-lulusan-fakultas-teknik-rev','Peningkatan Jiwa Kewirausahaan Lulusan Fakultas Teknik','The Improving Spirit of Entrepreneurship of Engineering Faculty Graduates','/storage/image/galeri/peningkatan-jiwa-kewirausahaan-lulusan-fakultas-teknik/6162dc0d3dc22.png','6162dc0d3dc22.png','2021-10-10 19:42:41','2021-10-10 12:41:13',NULL);

/*Table structure for table `headers` */

DROP TABLE IF EXISTS `headers`;

CREATE TABLE `headers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_ina` varchar(20) DEFAULT NULL,
  `header_eng` varchar(20) DEFAULT NULL,
  `header_slug` varchar(20) DEFAULT NULL,
  `header_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_page` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_page` (`id_page`),
  CONSTRAINT `headers_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `headers` */

insert  into `headers`(`id`,`header_ina`,`header_eng`,`header_slug`,`header_url`,`created_at`,`updated_at`,`deleted_at`,`id_page`) values 
(8,'Akademik','Academic','akademi',NULL,'2021-04-02 18:09:22',NULL,NULL,NULL),
(9,'Prodi','Department','department','/admin/pages/show/pengumuman-ini','2021-04-02 19:36:08','2021-04-02 12:00:27',NULL,5),
(10,'Kemahasiswaan','Student','kemahasiswaan','yaaa','2021-07-12 09:40:24','2021-07-12 02:40:24',NULL,11),
(11,'Alumni','Alumni','alumni','yaaa','2021-07-12 09:41:36','2021-07-12 02:41:36',NULL,11),
(13,'Kontak','Contact','kontak','/admin/pages/show/pengumuman-ini','2021-04-08 14:01:33','2021-04-08 07:01:32','2021-04-08 07:01:32',5),
(14,'Tes header','Header test','tes-header','aku-adalah-lelakii','2021-06-13 17:53:19','2021-06-13 10:53:17','2021-06-13 10:53:17',4),
(15,'Tes','Test','tes','www.youtube.com','2021-07-08 14:26:57','2021-07-08 07:26:57','2021-07-08 07:26:57',NULL),
(16,'Doddy','Doddy','doddy',NULL,'2021-07-12 07:43:04','2021-07-12 00:43:04','2021-07-12 00:43:04',NULL),
(17,'Testt','Testt','testt',NULL,'2021-07-12 07:46:22','2021-07-12 00:46:22','2021-07-12 00:46:22',NULL),
(18,'Tes10','Test10','tes10',NULL,'2021-07-13 14:35:36','2021-07-13 07:35:36','2021-07-13 07:35:36',NULL),
(19,'Lembaga Rev','Institution Rev','lembaga-rev','#','2021-10-23 09:51:56','2021-10-23 02:51:56','2021-10-23 02:51:56',NULL);

/*Table structure for table `jabatan_pegawais` */

DROP TABLE IF EXISTS `jabatan_pegawais`;

CREATE TABLE `jabatan_pegawais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan_ina` varchar(110) DEFAULT NULL,
  `jabatan_eng` varchar(110) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sub_bidang` enum('kepala_bidang','pendidikan_dan_kerjasama','perencanaan_dan_sistem_informasi','kemahasiswaan','umum_dan_keuangan') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `jabatan_pegawais` */

insert  into `jabatan_pegawais`(`id`,`jabatan_ina`,`jabatan_eng`,`created_at`,`updated_at`,`deleted_at`,`sub_bidang`) values 
(6,'Kepala Bagian Tata Usaha','Head of Administration','2021-08-13 11:40:58','2021-08-13 11:40:59',NULL,'kepala_bidang'),
(7,'Pengelola Informasi Akademik','Academic Information Manager','2021-08-19 08:10:01','2021-08-19 01:07:10',NULL,'pendidikan_dan_kerjasama'),
(8,'Pengolah Data','Data Processor','2021-08-20 07:03:30','2021-08-20 07:03:30',NULL,'perencanaan_dan_sistem_informasi'),
(9,'Pengelola Keuangan','Financial Manager','2021-08-20 07:04:04','2021-08-20 07:04:04',NULL,'umum_dan_keuangan'),
(10,'Pengadministrasi Umum','General Administration','2021-08-20 07:04:37','2021-08-20 07:04:37',NULL,'kemahasiswaan'),
(11,'Pengelola Sistem Informasi Rev','System Information Manager Rev','2021-10-18 16:03:09','2021-10-18 09:01:10','2021-10-18 09:01:10','perencanaan_dan_sistem_informasi');

/*Table structure for table `jabatans` */

DROP TABLE IF EXISTS `jabatans`;

CREATE TABLE `jabatans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan_ina` varchar(110) DEFAULT NULL,
  `jabatan_eng` varchar(110) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `jabatans` */

insert  into `jabatans`(`id`,`jabatan_ina`,`jabatan_eng`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Dekan','Dean','2021-04-21 14:28:41','2021-04-21 07:28:16',NULL),
(2,'Wakil Dekan 1','Deputy Dean 1','2021-04-21 14:31:27','2021-04-21 07:31:01',NULL),
(3,'Wakil Dekan 2','Deputy Dean 2','2021-04-21 07:31:40','2021-04-21 07:31:40',NULL),
(4,'hahaha','hehehe','2021-06-11 18:18:14','2021-06-11 11:18:11','2021-06-11 11:18:11'),
(5,'Tes','Test','2021-07-01 16:42:42','2021-07-01 09:42:42','2021-07-01 09:42:42'),
(6,'Wakil Dekan 3 Rev','Deputy Dean 3 Rev','2021-10-18 15:41:15','2021-10-18 08:39:16','2021-10-18 08:39:16');

/*Table structure for table `kategoris` */

DROP TABLE IF EXISTS `kategoris`;

CREATE TABLE `kategoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ina` varchar(100) DEFAULT NULL,
  `kategori_eng` varchar(100) DEFAULT NULL,
  `kategori_lower` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategoris` */

insert  into `kategoris`(`id`,`kategori_ina`,`kategori_eng`,`kategori_lower`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Teknologi','Technology','technology','2021-04-01 12:57:07','2021-03-18 09:45:56',NULL),
(2,'Kriminal','Criminal','criminal','2021-04-01 12:57:21','2021-03-18 12:30:30','2021-03-18 12:30:30'),
(7,'Kesehatan','Health','health','2021-04-01 12:57:33','2021-03-18 09:45:27',NULL),
(8,'Akademik','Academic','academic','2021-03-18 17:45:32','2021-03-18 09:45:32',NULL),
(9,'Haha','Hehe','hehe','2021-03-18 17:45:23','2021-03-18 09:45:23','2021-03-18 09:45:23'),
(10,'Ekonomi','Economy','economy','2021-04-01 12:57:50','2021-03-19 00:12:03',NULL),
(11,'Haha','Hehe','hehe','2021-04-13 18:09:01','2021-04-13 11:09:00','2021-04-13 11:09:00'),
(12,'asdad','asdas','asdas','2021-04-13 18:08:53','2021-04-13 11:08:52','2021-04-13 11:08:52'),
(13,'Umum','General','general','2021-04-15 01:28:57','2021-04-15 01:28:57',NULL),
(14,'haha','hehe','hehe','2021-06-09 18:27:30','2021-06-09 11:27:25','2021-06-09 11:27:25'),
(15,'hahaa','hehee','hehee','2021-06-09 18:28:44','2021-06-09 11:28:40','2021-06-09 11:28:40'),
(16,'Hukum','Law','law','2021-06-30 09:24:16','2021-06-30 02:24:16','2021-06-30 02:24:16'),
(17,'Penting','Urgent Rev','urgent rev','2021-09-05 09:43:29','2021-09-05 02:43:30','2021-09-05 02:43:30');

/*Table structure for table `manajemens` */

DROP TABLE IF EXISTS `manajemens`;

CREATE TABLE `manajemens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_staf` bigint(20) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_staf` (`id_staf`),
  CONSTRAINT `manajemens_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatans` (`id`),
  CONSTRAINT `manajemens_ibfk_2` FOREIGN KEY (`id_staf`) REFERENCES `staffs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `manajemens` */

insert  into `manajemens`(`id`,`id_staf`,`id_jabatan`,`created_at`,`updated_at`,`deleted_at`) values 
(1,1,1,'2021-04-21 17:46:16','2021-04-21 17:46:18',NULL);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ina` varchar(255) DEFAULT NULL,
  `menu_eng` varchar(255) DEFAULT NULL,
  `menu_slug` varchar(255) DEFAULT NULL,
  `menu_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_page` int(11) DEFAULT NULL,
  `id_header` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_page` (`id_page`),
  KEY `menus_ibfk_2` (`id_header`),
  CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `pages` (`id`),
  CONSTRAINT `menus_ibfk_2` FOREIGN KEY (`id_header`) REFERENCES `headers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menus` */

insert  into `menus`(`id`,`menu_ina`,`menu_eng`,`menu_slug`,`menu_url`,`created_at`,`updated_at`,`deleted_at`,`id_page`,`id_header`) values 
(15,'Pedoman Akademik','Pedoman Academic','pedoman-akademik','pedoman-akademik','2021-07-12 07:46:45','2021-07-12 00:46:45',NULL,7,8),
(16,'KRS Online','Online KRS','krs-online','aku-adalah-lelaki','2021-04-21 13:06:49','2021-04-21 06:06:49',NULL,4,8),
(17,'Sarjana','Bachelor','sarjana','#','2021-04-12 18:49:45','2021-04-02 12:53:03',NULL,6,9),
(18,'Pasca Sarjana','Post Graduated','pasca-sarjana','#','2021-04-12 18:49:38','2021-04-02 12:54:24',NULL,5,9),
(19,'Program Internasional','International Program','program-internasional','#','2021-04-12 18:49:53','2021-04-02 12:56:22',NULL,6,9),
(22,'Pedoman Akademikkk','Pedoman Academic','pedoman-akademikkk','pedoman-akademik','2021-06-13 18:04:32','2021-06-13 11:04:30','2021-06-13 11:04:30',7,8),
(23,'Tes11','Test11','tes11','yaaa','2021-07-13 14:35:30','2021-07-13 07:35:30','2021-07-13 07:35:30',11,18),
(24,'Pedoman UKT Rev','Single Tuition Guide Rev','pedoman-ukt-rev',NULL,'2021-10-23 10:32:46','2021-10-23 03:32:46','2021-10-23 03:32:46',NULL,8);

/*Table structure for table `page_images` */

DROP TABLE IF EXISTS `page_images`;

CREATE TABLE `page_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_page` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_page` (`id_page`),
  CONSTRAINT `page_images_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `page_images` */

insert  into `page_images`(`id`,`id_page`,`image`,`created_at`,`updated_at`) values 
(3,1,'/image/pages/Dokumen Fakultas Teknik/content/604b2c031d5707.77675268.jpeg','2021-03-12 08:53:23','2021-03-12 08:53:23'),
(4,6,'/image/pages/Hahaha/content/605ca299271aa9.84165718.png','2021-03-25 14:47:53','2021-03-25 14:47:53');

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(50) DEFAULT NULL,
  `title_eng` varchar(50) DEFAULT NULL,
  `title_slug` varchar(50) DEFAULT NULL,
  `content_ina` text DEFAULT NULL,
  `content_eng` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `status` enum('aktif','tidak_aktif') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pages` */

insert  into `pages`(`id`,`title_ina`,`title_eng`,`title_slug`,`content_ina`,`content_eng`,`file`,`file_name`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Dokumen Fakultas Teknik','This is Document','dokumen-fakultas-teknik','<h2 style=\"text-align: center; \"><b><u>Ini Adalah Dokumen Fakultas Teknikx</u></b><h2 style=\"text-align: center; \"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><img data-filename=\"wallpaperflare.com_wallpaper.jpg\" style=\"width: 50%;\" src=\"http://localhost:8000/storage/image/pages/Dokumen%20Fakultas%20Teknik/content/604b2c031d5707.77675268.jpeg\"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><b><u><br></u></b></h2></h2>\n','<h2 style=\"text-align: center; \"><b><u>Ini Adalah Dokumen Fakultas Teknikx</u></b><h2 style=\"text-align: center; \"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><img data-filename=\"wallpaperflare.com_wallpaper.jpg\" style=\"width: 50%;\" src=\"http://localhost:8000/storage/image/pages/Dokumen%20Fakultas%20Teknik/content/604b2c031d5707.77675268.jpeg\"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><b><u><br></u></b></h2><h2 style=\"text-align: center; \"><b><u><br></u></b></h2></h2>\n','/storage/file/pages/Dokumen Fakultas Teknik/lampiran/p_sanur.jpg','p_sanur.jpg','tidak_aktif','2021-03-12 06:33:08','2021-04-21 06:31:41',NULL),
(2,'Tes','tess','tes','<p>akjdksajdhakdjas</p>\n','<p>akjdksajdhakdjas</p>\n',NULL,NULL,'tidak_aktif','2021-03-12 09:49:09','2021-07-12 00:47:14','2021-07-12 00:47:14'),
(3,'hahahaha','wkwkwkkww','hahahaha','<h3>WKWKWKWKWKWKWK</h3>\n','<h3>WKWKWKWKWKWKWK</h3>\n',NULL,NULL,'tidak_aktif','2021-03-12 09:50:05','2021-10-11 08:11:04','2021-10-11 08:11:04'),
(4,'Aku Adalah Lelakii','ahhahahahaha','aku-adalah-lelakii','<p>ahhahahahaha</p>\n','<p>ahhahahahaha</p>\n',NULL,NULL,'aktif','2021-03-12 09:50:47','2021-10-11 08:10:53','2021-10-11 08:10:53'),
(5,'Pengumuman ini','Announcement','pengumuman-ini','<h2>Ini Pengumuman<p><img data-filename=\"Pertemuan 4.png\" style=\"width: 1231.2px;\" src=\"http://localhost:8000/storage/image/pages/Pengumuman/content/60531673a74229.73283193.png\"><br></p></h2>\n','<h2>Ini Pengumuman<p><img data-filename=\"Pertemuan 4.png\" style=\"width: 1231.2px;\" src=\"http://localhost:8000/storage/image/pages/Pengumuman/content/60531673a74229.73283193.png\"><br></p></h2>\n','/storage/file/pages/Pengumuman/lampiran/8284-8048-1-SM.pdf','8284-8048-1-SM.pdf','tidak_aktif','2021-03-18 08:59:31','2021-04-21 06:31:30',NULL),
(6,'Hahaha','Hehehe','hahaha','<p>Hahaha<p><img data-filename=\"Screenshot_8.png\" style=\"width: 25%;\" src=\"http://localhost:8000/storage/image/pages/Hahaha/content/605ca299271aa9.84165718.png\"><br></p></p>\n','<p>Hahaha<p><img data-filename=\"Screenshot_8.png\" style=\"width: 25%;\" src=\"http://localhost:8000/storage/image/pages/Hahaha/content/605ca299271aa9.84165718.png\"><br></p></p>\n','/storage/file/pages/Hahaha/lampiran/Screenshot_15.png','Screenshot_15.png','tidak_aktif','2021-03-25 14:47:53','2021-10-11 08:11:15','2021-10-11 08:11:15'),
(7,'Pedoman Akademik','Academic Guidelines','pedoman-akademik','<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>Pedoman akademik dapat diunduh pada link dibawah ini<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><a href=\"https://drive.google.com/file/d/1AKoKWy8Db3AifFeAmnaCHUUcljq3Hlla/view\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(68, 68, 68); transition: color 0.2s ease-in-out 0s; outline: 0px;\"><span style=\"font-weight: 600;\"><u>Click here!</u></span></a></p></p>\n','<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'>Pedoman akademik dapat diunduh pada link dibawah ini<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-size: 13px; font-family: \"Open Sans\", sans-serif; line-height: 22px;\'><a href=\"https://drive.google.com/file/d/1AKoKWy8Db3AifFeAmnaCHUUcljq3Hlla/view\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(68, 68, 68); transition: color 0.2s ease-in-out 0s; outline: 0px;\"><span style=\"font-weight: 600;\"><u>Click here!</u></span></a></p></p>\n','/storage/file/pages/Pedoman Akademik/lampiran/3062-6979-1-PB.pdf','3062-6979-1-PB.pdf','aktif','2021-04-21 06:33:21','2021-04-21 06:33:21',NULL),
(8,'Pengumuman','Announcement','pengumuman','<p>asdasdada</p>\n','<p>asdasdada</p>\n','/storage/file/pages/Pengumuman/lampiran/dalem.jpg','dalem.jpg','aktif','2021-06-11 10:48:55','2021-06-11 10:49:39','2021-06-11 10:49:39'),
(9,'Pengumumann','Announcement','pengumumann','<p>sdadasdada</p>\n','<p>sdadasdada</p>\n','/storage/file/pages/Pengumumann/lampiran/puseh.jpg','puseh.jpg','aktif','2021-06-11 10:50:10','2021-06-11 10:50:10',NULL),
(10,'Tes Doddy','Doddy Test','tes-doddy','<p>Tes Doddy</p>\n','<p>Tes Doddy</p>\n',NULL,NULL,'aktif','2021-07-12 00:41:34','2021-07-12 00:47:08','2021-07-12 00:47:08'),
(11,'Yaaa','Yesss','yaaa','<p>Yaaaa</p>\n','<p>Yaaaa</p>\n',NULL,NULL,'aktif','2021-07-12 01:39:37','2021-10-11 08:12:19','2021-10-11 08:12:19'),
(12,'Tes100','Test100','tes100','<p>Tes100</p>\n','<p>Tes100</p>\n',NULL,NULL,'aktif','2021-07-12 06:14:18','2021-07-12 06:14:18',NULL),
(13,'Teknologi Informasi Rev','Information Technology Rev','teknologi-informasi-rev','<div style=\"\">Unggul berarti sumber daya manusia yang dihasilkan memiliki kompetensi tinggi, mandiri dan kemampuan berdaya saing global dalam pengembangan ilmu dan teknologi informasi yang berciri khas pada pengembangan sistem dan aplikasi cerdas berbasis platform internet dan mobile (Smart System and Application Development Based on Internet and Mobile Platform), seta memiliki kepribadian yang tangguh dan kemampuan berinteraksi dengan teknologi Informasi yang berkembang secara cepat dan dinamis.<div style=\"\"><br></div><div style=\"\">Terkemuka berarti dikenal secara kuat di masyarakat baik lokal, nasional maupun internasional serta maju dalam penerapan teknologi informasi untuk memperkuat tata kelola jurusan</div><div style=\"\"><br></div><div style=\"\">Berbudaya berarti sumber daya manusia yang dihasilkan memiliki kepekaan dan ketajaman nurani, berkarakter kuat dan luhur, dapat mengangkat dan memanfaatkan nilai-nilai luhur budaya lokal yang bersifat universal dalam berinteraksi di masyarakat serta mampu memberikan sentuhan teknologi informasi pada budaya bali.</div></div>\n','<p>Superior means that the human resources produced have high competence, independence and the ability to be globally competitive in the development of information science and technology which is characterized by the development of intelligent systems and applications based on internet and mobile platforms (Smart System and Application Development Based on Internet and Mobile Platforms). , and has a strong personality and the ability to interact with information technology that develops rapidly and dynamically.<p><br></p><p>Leading means being well known in the local, national and international community and being advanced in the application of information technology to strengthen departmental governance</p><p><br></p><p>Being cultured means that the human resources produced have sensitivity and sharpness of conscience, have a strong and noble character, can lift and utilize the noble values &acirc;&#128;&#139;&acirc;&#128;&#139;of local culture that are universal in interacting in society and are able to provide a touch of information technology on Balinese culture.</p></p>\n','/storage/file/pages/Teknologi Informasi/lampiran/Screenshot_2.png','Screenshot_2.png','aktif','2021-10-11 08:22:09','2021-10-11 08:35:20',NULL);

/*Table structure for table `pegawais` */

DROP TABLE IF EXISTS `pegawais`;

CREATE TABLE `pegawais` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `biografi_ina` text DEFAULT NULL,
  `biografi_eng` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `foto_name` text DEFAULT NULL,
  `nama_slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jabatan` (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `pegawais` */

insert  into `pegawais`(`id`,`nip`,`id_jabatan`,`nama`,`biografi_ina`,`biografi_eng`,`tanggal_lahir`,`alamat`,`nomor_telepon`,`email`,`created_at`,`updated_at`,`deleted_at`,`foto`,`foto_name`,`nama_slug`) values 
(13,'180555104112345678',6,'Kadek Dwi Yatna Priyoga','Dekwik merupakan','Dekwik is','2021-08-13','Br. Penida Kaja, Tembuku\r\nJl. Dewata, Denpasar','081338960544','abdipurnawan1@gmail.com','2021-10-18 14:55:44','2021-10-18 07:53:46',NULL,'/storage/image/pegawai/180555104112345678/611628c37eac2.png','611628c37eac2.png','kadek-dwi-yatna-priyoga'),
(14,'1805551051180555',7,'I Putu Abdi Purnawan Rev 1','I Putu Abdi Purnawan merupakan seorang pegawai yang menjabat sebagai pengelola informasi akademik','I Putu Abdi Purnawan is an employee who serves as an academic information manager','2021-10-18','Br. Penida Kaja, Tembuku\r\nJl. Dewata, Denpasar','081338960544','abdipurnawan1@gmail.com','2021-10-18 15:12:56','2021-10-18 08:10:58',NULL,'/storage/image/pegawai/1805551051180555/616d2a3ae749f.png','616d2a3ae749f.png','i-putu-abdi-purnawan-rev-1');

/*Table structure for table `pengumuman_images` */

DROP TABLE IF EXISTS `pengumuman_images`;

CREATE TABLE `pengumuman_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_pengumuman` bigint(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengumuman_images` */

insert  into `pengumuman_images`(`id`,`id_pengumuman`,`image`,`created_at`,`updated_at`) values 
(1,1,'/image/pengumuman/14/flowchart-alur-mencari-surat-keterangan-aktif-kuliah-mahasiswa/content_ina/607801a13a1946.94916908.png','2021-04-15 09:04:33','2021-04-15 09:04:33'),
(2,1,'/image/pengumuman/14/flowchart-alur-mencari-surat-keterangan-aktif-kuliah-mahasiswa/content_eng/607801a13aeb04.83981268.png','2021-04-15 09:04:34','2021-04-15 09:04:34'),
(3,2,'/image/pengumuman/14/flowchart-alur-pendaftaran-beasiswa-di-fakultas-teknik-unud/content_ina/60780239b072f4.10695858.png','2021-04-15 09:07:05','2021-04-15 09:07:05'),
(4,2,'/image/pengumuman/14/flowchart-alur-pendaftaran-beasiswa-di-fakultas-teknik-unud/content_eng/60780239b23826.43355462.png','2021-04-15 09:07:05','2021-04-15 09:07:05'),
(5,3,'/image/pengumuman/13/pelaksanaan-monev-pkm-2016/content_ina/60780296ce5b95.87617924.png','2021-04-15 09:08:38','2021-04-15 09:08:38'),
(6,3,'/image/pengumuman/13/pelaksanaan-monev-pkm-2016/content_eng/60780296d070f1.99688565.png','2021-04-15 09:08:39','2021-04-15 09:08:39'),
(7,4,'/image/pengumuman/1/pengumuman-pkkmb-ft-2016/content_ina/60780307e35c96.43703796.png','2021-04-15 09:10:32','2021-04-15 09:10:32'),
(8,4,'/image/pengumuman/1/pengumuman-pkkmb-ft-2016/content_eng/60780307e56e15.78875205.png','2021-04-15 09:10:32','2021-04-15 09:10:32');

/*Table structure for table `pengumuman_kategoris` */

DROP TABLE IF EXISTS `pengumuman_kategoris`;

CREATE TABLE `pengumuman_kategoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ina` varchar(100) DEFAULT NULL,
  `kategori_eng` varchar(100) DEFAULT NULL,
  `kategori_lower` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `icon_name` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengumuman_kategoris` */

insert  into `pengumuman_kategoris`(`id`,`kategori_ina`,`kategori_eng`,`kategori_lower`,`created_at`,`updated_at`,`deleted_at`,`icon`,`icon_name`) values 
(1,'Penting','Urgent','urgent','2021-09-05 16:14:38','2021-08-05 06:55:50',NULL,'/storage/image/kategori/Penting/icon/alarm (1).png','alarm (1).png'),
(13,'Umum','General','general','2021-04-13 11:15:54','2021-04-13 11:15:54',NULL,'/storage/image/kategori/Umum/icon/jigsaw.png','jigsaw.png'),
(14,'Akademik','Academic','academic','2021-04-13 11:16:51','2021-04-13 11:16:51',NULL,'/storage/image/kategori/Akademik/icon/academic.png','academic.png'),
(15,'haha','hehe','hehe','2021-05-01 19:14:03','2021-05-01 12:13:59',NULL,'/storage/image/kategori//icon/608d4607ca0ce.png','608d4607ca0ce.png'),
(16,'hahu','huha','huha','2021-07-08 09:45:58','2021-07-08 02:45:58','2021-07-08 02:45:58','/storage/image/kategori/hahu/icon/608d48850631f.png','608d48850631f.png'),
(17,'Hahaa','hehee','hehee','2021-06-10 09:31:04','2021-06-10 09:31:04',NULL,'/storage/image/kategori/Hahaa/icon/60c1dbd7d9381.png','60c1dbd7d9381.png'),
(18,'Penting Rev','Urgent','urgent','2021-09-05 16:07:21','2021-09-05 09:07:20','2021-09-05 09:07:20','/storage/image/kategori/Penting/icon/613484b22ba53.png','613484b22ba53.png');

/*Table structure for table `pengumumans` */

DROP TABLE IF EXISTS `pengumumans`;

CREATE TABLE `pengumumans` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(110) DEFAULT NULL,
  `title_slug` varchar(110) DEFAULT NULL,
  `title_eng` varchar(110) DEFAULT NULL,
  `content_ina` text DEFAULT NULL,
  `content_eng` text DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('aktif','tidak_aktif') DEFAULT NULL,
  `tanggal_publish` date DEFAULT NULL,
  `lampiran_name` text DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `pengumumans_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `pengumuman_kategoris` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengumumans` */

insert  into `pengumumans`(`id`,`title_ina`,`title_slug`,`title_eng`,`content_ina`,`content_eng`,`lampiran`,`created_at`,`updated_at`,`deleted_at`,`status`,`tanggal_publish`,`lampiran_name`,`id_kategori`) values 
(2,'Flowchart Alur Pendaftaran Beasiswa di Fakultas Teknik Unud','flowchart-alur-pendaftaran-beasiswa-di-fakultas-teknik-unud','Flowchart of Scholarship Registration Flowchart at the Faculty of Engineering, Udayana University','<p>Prosedur Pendaftaran Beasiswa di Fakultas Teknik Unud<p><br></p><p>Dimulai dari adanya tawaran (pengumuman) beasiswa dari pihak penyelenggara kepada Pihak Fakultas diwakili oleh PD III (selaku Pembantu Dekan bidang kemahasiswaan) ;</p><p>Selanjutnya PD III mendisposisikan pengumuman beasiswa tersebut ke Kepala Bagian Kemahasiswaan untuk dibuatkan Pengumuman kepada Mahasiswa Fakultas Teknik Unud;</p><p>Kasubag Kemahasiswaan membuat konsep Pengumuman dan selanjutnya diteruskan oleh Staf Layanan Beasiswa untuk diproses lebih lanjut;</p><p>Apabila pengumuman tersebut sudah jadi, diperiksa kembali oleh Kasubag Kemahsiswaan untuk di paraf;</p><p>Selanjutnya pengumuman tersebut di tandatangani oleh PD III, diteruskan oleh Staf&nbsp; untuk diUmumkan dimasing-masing jurusan;</p><p>Mahasiswa yang berminat dan memenuhi syarat, diwajibkan untuk melengkapi Form Kelengkapan serta syarat lain yang telah ditentukan;</p><p>Selanjutnya mahasiswa melakukan Entry data ke SINMAWA;</p><p>Form kelengkapan diajukan di bagian Kemahasiswaan untuk diperiksa;</p><p>Jika data sudah lengkap dan benar sesuai dengan Syarat dan Ketentuan yang berlaku&nbsp; pihak Sub Bagian Kemahasiswaan FT.Unud akan menerbitkan Surat&nbsp; Pengajuan Beasiswa;</p><p>Surat Pengajuan Beasiswa tersebut ditandatangai oleh PD III yang selanjutnya&nbsp; dikirim kembali oleh Staf Kemahasiswaan ke Rektorat bersama dengan kelengkapan mahasiswa calon penerima beasiswa untuk diproses lebih lanjut;</p><p>Mahasiswa calon penerima beasiswa menunggu pengumuman hasil seleksi.</p><p><br></p><p style=\"text-align: center; \"><img data-filename=\"Screenshot_85.png\" style=\"width: 1039px;\" src=\"http://localhost:8000/storage/image/pengumuman/14/flowchart-alur-pendaftaran-beasiswa-di-fakultas-teknik-unud/content_ina/60780239b072f4.10695858.png\"><br></p></p>\n','<p>Scholarship Registration Procedure at the Faculty of Engineering, Udayana University<p><br></p><p>Starting from the offer (announcement) of scholarships from the organizers to the Faculties represented by Vice Dean III (as Assistant Dean for Student Affairs);</p><p>Furthermore, Vice Dean III disposed of the scholarship announcement to the Head of Student Affairs to make an announcement to the Engineering Faculty Students of Udayana University;</p><p>The Head of Subdivision of Student Affairs drafted an Announcement which was then forwarded by the Scholarship Service Staff for further processing;</p><p>If the announcement has been made, it is checked again by the Head of Sub-Division of Kemahsiswaan to initialize it;</p><p>Furthermore, the announcement was signed by PD III, forwarded by the staff to be announced in each department;</p><p>Students who are interested and meet the requirements are required to complete the Completion Form and other conditions that have been determined;</p><p>Furthermore, students do data entry to SINMAWA;</p><p>The completeness form is submitted in the Student Affairs section for inspection;</p><p>If the data is complete and correct in accordance with the applicable Terms and Conditions, the Sub Division of Student Affairs FT.Unud will issue a Scholarship Application Letter;</p><p>The Scholarship Application Letter was signed by the Vice Dean III which was then sent back by the Student Affairs Staff to the Rectorate together with the completeness of the student scholarship recipients for further processing;</p><p>Prospective scholarship recipients are waiting for the announcement of the selection results.</p><p style=\"text-align: center; \"><img data-filename=\"Screenshot_85.png\" style=\"width: 1039px;\" src=\"http://localhost:8000/storage/image/pengumuman/14/flowchart-alur-pendaftaran-beasiswa-di-fakultas-teknik-unud/content_eng/60780239b23826.43355462.png\"><br></p></p>\n',NULL,'2021-04-15 09:07:05','2021-04-15 09:07:05',NULL,'aktif','2021-04-15',NULL,14),
(3,'Pelaksanaan Monev PKM 2016','pelaksanaan-monev-pkm-2016','2016 PKM Monev Implementation','<p><img data-filename=\"Screenshot_86.png\" style=\"width: 100%;\" src=\"http://localhost:8000/storage/image/pengumuman/13/pelaksanaan-monev-pkm-2016/content_ina/60780296ce5b95.87617924.png\"><br></p>\n','<p><img data-filename=\"Screenshot_86.png\" style=\"width: 1381.33px;\" src=\"http://localhost:8000/storage/image/pengumuman/13/pelaksanaan-monev-pkm-2016/content_eng/60780296d070f1.99688565.png\"><br></p>\n',NULL,'2021-04-15 09:08:38','2021-04-15 09:08:38',NULL,'aktif','2021-04-15',NULL,13),
(4,'PENGUMUMAN PKKMB FT 2016','pengumuman-pkkmb-ft-2016','ANNOUNCEMENT OF PKKMB FT 2016','<p style=\"text-align: center; \"><img data-filename=\"Screenshot_87.png\" style=\"width: 784px;\" src=\"http://localhost:8000/storage/image/pengumuman/1/pengumuman-pkkmb-ft-2016/content_ina/60780307e35c96.43703796.png\"><br></p>\n','<p><img data-filename=\"Screenshot_87.png\" style=\"text-align: center; width: 784px;\" src=\"http://localhost:8000/storage/image/pengumuman/1/pengumuman-pkkmb-ft-2016/content_eng/60780307e56e15.78875205.png\"><br></p>\n',NULL,'2021-04-15 09:10:31','2021-04-15 09:10:31',NULL,'aktif','2021-04-15',NULL,1),
(5,'Pengumuman Penerimaan Sekolah Inspektur Polisi Sumber Sarjana (SIPSS)','pengumuman-penerimaan-sekolah-inspektur-polisi-sumber-sarjana-sipss','Announcement of School of Undergraduate Police Inspector Admissions (SIPSS)','<p>Kepolisan Negara Republik Indonesia Daerah Bali<p><br></p><p>Membuka Kesempatan Kepada Putra Putri Terbaik Bangsa Untuk Bergabung Menjadi Anggota Polri Melalui Pendidikan Pembentukan Sekolah Inspektur Polisi Sumber Sarjana (SIPSS) TA 2017</p></p>\n','<p>Indonesian National Police, Bali Region<p><br></p><p>Opening Opportunities for the Nation\'s Best Boys and Girls to Join the National Police through Education on the Establishment of a School of Police Inspector for Bachelor\'s Degree (SIPSS) FY 2017</p></p>\n',NULL,'2021-04-15 09:14:59','2021-04-15 09:14:59',NULL,'aktif','2021-04-15',NULL,13),
(6,'Pengumuman Rekruitment umum PLN Tingkat S1/ D-IV dan D-III Tahun 2017','pengumuman-rekruitment-umum-pln-tingkat-s1-d-iv-dan-d-iii-tahun-2017','Announcement of PLN general recruitment for S1 / D-IV and D-III 2017 levels','<p>Pengumuman Rekrutmen Umum PLN Tingkat S1/D-IV dan D-III Tahun 2017<br></p>\n','<p><br><p>Announcement of PLN General Recruitment for S1 / D-IV and D-III Levels of 2017</p></p>\n',NULL,'2021-04-15 09:16:50','2021-04-15 09:16:50',NULL,'aktif','2021-04-15',NULL,13),
(7,'Informasi Penerimaan Mahasiswa Baru Program Magister (S2) dan Program Doktor (S3)','informasi-penerimaan-mahasiswa-baru-program-magister-s2-dan-program-doktor-s3','Information on New Student Admissions for Masters Program (S2) and Doctoral Program (S3)','<p>Info lengkap silahkan dilihat pada lampiran berikut<br></p>\n','<pre class=\"tw-data-text tw-text-large XcVN5d tw-ta\" data-placeholder=\"Terjemahan\" id=\"tw-target-text\" dir=\"ltr\" style=\'unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36); font-family: \"Google Sans\", arial, sans-serif !important;\'><span class=\"Y2IQFc\" lang=\"en\">Complete information, please see the following attachment</span></pre>\n','/storage/file/news/14/Informasi Penerimaan Mahasiswa Baru Program Magister (S2) dan Program Doktor (S3)/lampiran/Screenshot_11.png','2021-04-15 09:19:23','2021-04-15 09:19:23',NULL,'aktif','2021-04-15','Screenshot_11.png',14),
(8,'Pengumuman','pengumuman','Announcement','<p>adsaadadasd</p>\n','<p>adsaadadasd<br></p>\n',NULL,'2021-06-10 08:25:23','2021-06-10 08:25:23',NULL,'aktif','2021-06-10',NULL,13),
(9,'Pengumumann','pengumumann','Announcement','<p>adsaadadasd</p>\n','<p>adsaadadasd<br></p>\n',NULL,'2021-07-08 09:46:48','2021-07-08 02:46:48','2021-07-08 02:46:48','aktif','2021-06-10',NULL,13),
(10,'Flowchart Alur mencari Surat Keterangan Aktif Kuliah Mahasiswa Revisi','flowchart-alur-mencari-surat-keterangan-aktif-kuliah-mahasiswa-revisi','Flowchart The flow of looking for Certificate of Active Student Lecture','<p>Prosedur Aktif Kuliah Mahasiswa<p><br></p><p>Dimulai dari mahasiswa datang ke Sub Bagian Kemahasiswaan membawa kelengkapan dan mengisi Form;</p><p>Form dan kelengkapan di serahkan ke Bagian Kemahasiswaan untuk di periksa (Apakah memang benar mahasiswa tersebut Aktif terdaftar sebagai mahasiswa atau tidak);</p><p>Jika tidak lengkap akan dikembalikan ke mahasiswa yang bersangkutan;</p><p>Jika lengkap maka prosesnya akan dilanjutkan dengan menerbitkan Surat Keterangan Aktif Kuliah ;</p><p>Surat Keterangan Aktif Kuliah tersebut diteruskan ke Kasubag Kemahasiswaan untuk diparaf;</p><p>Selanjutnya Surat Keterangan Aktif Kuliah&nbsp; yang sudah diparaf dilanjutkan ke PD III (Pembantu Dekan Bidang Kemahasiswaan) untuk ditanda tangani;</p><p>Surat Keterangan Aktif Kuliah yang sudah diparaf dan di Tanda tangani PD III akan diteruskan ke Bagian Penomeran dan Dicap;</p><p>Selanjutnya Surat Keterangan Aktif Kuliah diberikan kepada mahasiswa yang bersangkutan.</p><p><br></p><p style=\"text-align: center;\"><img data-filename=\"Screenshot_84.png\" src=\"http://localhost:8000/storage/image/pengumuman/14/flowchart-alur-mencari-surat-keterangan-aktif-kuliah-mahasiswa/content_ina/607801a13a1946.94916908.png\" style=\"width: 1034px;\"></p></p>\n','<p>Student Lecture Active Procedure<p><br></p><p>Starting from the students coming to the Student Affairs Subdivision bringing the completeness and filling out the Form;</p><p>The form and completeness are submitted to the Student Affairs Section for checking (Is it true that the student is actively registered as a student or not);</p><p>If it is not complete, it will be returned to the student concerned;</p><p>If complete, the process will be continued by issuing a Certificate of Active Lecture;</p><p>The Certificate of Active Lecture is forwarded to the Head of Subdivision of Student Affairs to be initiated;</p><p>Furthermore, the Certificate of Active Lecture which has been initiated is continued to the Vice Dean III (Assistant Dean for Student Affairs) to be signed;</p><p>Certificate of Active Lecture which has been initialized and signed by Vice Dean III will be forwarded to the Numbering and Stamped Section;</p><p>Furthermore, the Certificate of Active Lecture is given to the student concerned.</p><p><br></p><p><br></p><div style=\"text-align: center;\"><img data-filename=\"Screenshot_84.png\" src=\"http://localhost:8000/storage/image/pengumuman/14/flowchart-alur-mencari-surat-keterangan-aktif-kuliah-mahasiswa/content_eng/607801a13aeb04.83981268.png\" style=\"font-size: 1rem; width: 1034px;\"></div></p>\n',NULL,'2021-09-05 19:19:30','2021-09-05 12:19:30',NULL,'aktif','2021-09-05',NULL,14);

/*Table structure for table `preferences` */

DROP TABLE IF EXISTS `preferences`;

CREATE TABLE `preferences` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_website_ina` varchar(255) DEFAULT NULL,
  `nama_website_eng` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `logo_name` varchar(255) DEFAULT NULL,
  `footer_ina` text DEFAULT NULL,
  `footer_eng` text DEFAULT NULL,
  `tentang_ina` text DEFAULT NULL,
  `tentang_eng` text DEFAULT NULL,
  `visi_misi_ina` text DEFAULT NULL,
  `visi_misi_eng` text DEFAULT NULL,
  `tujuan_ina` text DEFAULT NULL,
  `tujuan_eng` text DEFAULT NULL,
  `denah_ina` text DEFAULT NULL,
  `denah_eng` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `preferences` */

insert  into `preferences`(`id`,`nama_website_ina`,`nama_website_eng`,`logo`,`logo_name`,`footer_ina`,`footer_eng`,`tentang_ina`,`tentang_eng`,`visi_misi_ina`,`visi_misi_eng`,`tujuan_ina`,`tujuan_eng`,`denah_ina`,`denah_eng`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Fakultas Teknik Universitas Udayana','Faculty of Engineering Udayana University','/storage/image/preferences/logo/608bddd84850c.png','608bddd84850c.png','<p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Jl. Kampus Unud Jimbaran Badung, Bali 80361</p><p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Nomor Telepon: +62 (361) 703320</p><p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Fax: +62 (361) 703320</p><p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Email: ft@unud.ac.id</p>','<p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Jl. Kampus Unud Jimbaran Badung, Bali 80361</p><p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Nomor Telepon: +62 (361) 703320</p><p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Fax: +62 (361) 703320</p><p class=\"fw-bold text-start text-light\" style=\"font-family: Nunito, sans-serif; background-color: rgb(56, 60, 61); font-weight: 700 !important; color: rgb(248, 249, 250) !important;\">Email: ft@unud.ac.id</p>','<div style=\"\">Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965, yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana, adalah dalam rangka pelestarian, pengembangan kebudayaan Daerah Bali pada khususnya dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.<div style=\"\"><br></div><div style=\"\">Secara fisik perkembangan itu banyak menyangkut bidang-bidang kearsitekturan dan kesenirupaan, yaitu suatu potensi yang mempunyai nilai tersendiri di dalam kehidupan kebudayaan Bali, selain untuk menampung aspirasi masyarakat khususnya calon-calon mahasiswa dari Bali yang ingin melanjutkan pendidikan seni dan teknologi pada jenjang pendidikan tinggi. Untuk maksud tersebut budayawan di Bali khususnya di kalangan Universitas Udayana merintis jalan untuk mendirikan pendidikan tinggi yang relevan yaitu pendidikan tinggi bidang arsitektur dan seni rupa.</div><div style=\"\"><br></div><div style=\"\">Maka pada tahun 1965, dibentuklah panitia yang disebut Panitia Persiapan Fakultas Teknik Universitas Udayana dengan susunan sebagai berikut:</div><div style=\"\"><br></div><div style=\"\">Ketua (merangkap anggota):</div><div style=\"\"><br></div><div style=\"\">Prof. Dr. Ida Bagus Mantra (Rektor Universitas Udayana)</div><div style=\"\"><br></div><div style=\"\">Sekretaris (merangkap anggota):</div><div style=\"\"><br></div><div style=\"\">Drs. Soedarminto (Dosen Fakultas Kedokteran Universitas Udayana)</div><div style=\"\"><br></div><div style=\"\">Anggota: Ir. I Gusti Ngurah Jelantik</div><div style=\"\"><br></div><div style=\"\">dr. R. Moerdowo (Dosen Fakultas Kedokteran Universitas Udayana)</div><div style=\"\"><br></div><div style=\"\"><div style=\"\">Panitia ini berhasil mendirikan Fakultas Teknik Universitas Udayana dengan dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai Pimpinan pertama: Prof. Dr. Ida Bagus Mantra sebagai pejabat dekan dan Drs. Soedarminto sebagai sekretaris dekan. Dengan demikian, tahun 1965 Fakultas Teknik merupakan fakultas kelima di lingkungan Universitas Udayana, dan dengan Surat Keputusan Menteri PTIP Nomor 248 Tahun 1965 terhitung tanggal 1 Oktober 1965 secara resmi dan sah menjadi Fakultas Teknik Universitas Udayana.</div><div style=\"\"><br></div><div style=\"\">Sejalan dengan perkembangan yang ada, Fakultas Teknik Universitas Udayana terus berbenah dan mengembangkan diri. Untuk mengantisipasi perkembangan teknologi dan tuntutan masyarakat akan tenaga teknik.</div><div style=\"\"><br></div><div style=\"\">Pada tahun 1968 Fakultas Teknik membuka jurusan baru yaitu Jurusan Teknik Sipil, sehingga Fakultas Teknik Universitas Udayana resmi memiliki tiga jurusan yaitu Jurusan Arsitektur, Jurusan Seni Rupa dan Jurusan Teknik Sipil.</div><div style=\"\">Perkembangan berikutnya adalah dengan diberlakukannya PP No.5 tahun 1980 dan pada tahun 1983 Fakultas Teknik Universitas Udayana ditetapkan hanya terdiri atas dua jurusan yaitu Jurusan Arsitektur dan Jurusan Teknik Sipil. Sedangkan Jurusan Seni Rupa berdiri sendiri menjadi Program Studi Seni Rupa dan Disain (PSSRD).</div><div style=\"\">Fakultas Teknik Universitas Udayana melengkapi jurusan yang dikelola dengan dua program studi baru yaitu Program Studi Teknik Mesin dan Program Studi Teknik Elektro pada tahun 1984, berdasarkan Surat Keputusan Rektor Nomor: 612/PT.17/1.01.02/ 1984. Setelah diperjuangkan selama 4 (empat) tahun maka pada tahun 1988 turun Surat Keputusan Direktur Jendral Pendidikan Tinggi Nomor: 64 dan 65/DIKTI/KEP/1988 tentang status resmi Program Studi Teknik Mesin dan Program Studi Teknik Elektro.</div><div style=\"\"><br></div><div style=\"\">Berdasarkan Keputusan Direktur Jendral Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan Republik Indonesia Nomor: 231/DIKTI/KEP/1996, tanggal 11 Juli 1996, tentang program studi pada program sarjana di lingkungan Universitas Udayana, maka Fakultas Teknik memiliki empat program studi, yaitu: 1) Program Studi Arsitektur, 2) Program Studi Teknik Sipil, 3) Program Studi Teknik Mesin, dan 4)Program Studi Teknik Elektro</div><div style=\"\">Guna memberikan kesempatan kepada masyarakat luas untuk memperoleh pelayanan pendidikan tinggi, maka Fakultas Teknik membuka Program Ekstensi dengan dasar hukum Surat Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan No 555/DIKTI/KEP/1997. Untuk Program Ekstensi, Fakultas Teknik memiliki empat program studi yaitu :</div><div style=\"\"><br></div><div style=\"\"><br></div><div style=\"\"><ol style=\"margin-bottom: 10px;\"><li>Program Studi Arsitektur</li><li><span style=\"line-height: 1.42857;\">Program Studi Teknik Sipil</span></li><li><span style=\"line-height: 1.42857;\">Program Studi Teknik Mesin</span></li><li><span style=\"line-height: 1.42857;\">Program Studi Teknik Elektro<br><br></span></li></ol><div style=\"\">Dengan terbitnya Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Republik Indonesia No: 28/DIKTI/KEP/2002, tentang Penyelenggaraan Program Reguler dan Non Reguler di Perguruan Tinggi Negeri, maka Program Ekstensi disesuaikan menjadi Program Non Reguler.</div><div style=\"\"><br></div><div style=\"\">Untuk memenuhi kebutuhan tenaga kerja menengah yang profesional dibidang keteknikan, maka Fakultas Teknik membuka Program Diploma I dan Diploma II, berdasarkan Keputusan Rektor Universitas Udayana No. 165/J14/PR.01.10/2002. Program Diploma yang dibuka adalah untuk Jurusan Arsitektur, Teknik Sipil, Teknik Elektro dan Teknik Mesin.</div><div style=\"\"><br></div><div style=\"\">Sejalan dengan upaya peningkatan Sumber Daya Manusia (SDM), Universitas Udayana memandang perlu untuk membuka Program Pasca Sarjana (S2). Berdasarkan Surat Ijin dari Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Nomor 485/D/T/2003, tanggal 13 Maret 2003, pada tahun ajaran 2003/2004 dibuka Program Studi Magister Tenik Sipil. Administrasi akademik untuk Program Magister berada di bawah Program Pasca Sarjana Universitas Udayana.</div></div></div><p style=\"font-family: Montserrat, sans-serif; font-size: 13px; color: rgb(102, 102, 102);\"></p><p style=\"font-family: Montserrat, sans-serif; font-size: 13px; color: rgb(102, 102, 102);\"></p></div>\n','<p>Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965, yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana, adalah dalam rangka pelestarian, pengembangan kebudayaan Daerah Bali pada khususnya dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.<div><br></div><div>Secara fisik perkembangan itu banyak menyangkut bidang-bidang kearsitekturan dan kesenirupaan, yaitu suatu potensi yang mempunyai nilai tersendiri di dalam kehidupan kebudayaan Bali, selain untuk menampung aspirasi masyarakat khususnya calon-calon mahasiswa dari Bali yang ingin melanjutkan pendidikan seni dan teknologi pada jenjang pendidikan tinggi. Untuk maksud tersebut budayawan di Bali khususnya di kalangan Universitas Udayana merintis jalan untuk mendirikan pendidikan tinggi yang relevan yaitu pendidikan tinggi bidang arsitektur dan seni rupa.</div><div><br></div><div>Maka pada tahun 1965, dibentuklah panitia yang disebut Panitia Persiapan Fakultas Teknik Universitas Udayana dengan susunan sebagai berikut:</div><div><br></div><div>Ketua (merangkap anggota):</div><div><br></div><div>Prof. Dr. Ida Bagus Mantra (Rektor Universitas Udayana)</div><div><br></div><div>Sekretaris (merangkap anggota):</div><div><br></div><div>Drs. Soedarminto (Dosen Fakultas Kedokteran Universitas Udayana)</div><div><br></div><div>Anggota: Ir. I Gusti Ngurah Jelantik</div><div><br></div><div>dr. R. Moerdowo (Dosen Fakultas Kedokteran Universitas Udayana)</div><div><br></div><div><div>Panitia ini berhasil mendirikan Fakultas Teknik Universitas Udayana dengan dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai Pimpinan pertama: Prof. Dr. Ida Bagus Mantra sebagai pejabat dekan dan Drs. Soedarminto sebagai sekretaris dekan. Dengan demikian, tahun 1965 Fakultas Teknik merupakan fakultas kelima di lingkungan Universitas Udayana, dan dengan Surat Keputusan Menteri PTIP Nomor 248 Tahun 1965 terhitung tanggal 1 Oktober 1965 secara resmi dan sah menjadi Fakultas Teknik Universitas Udayana.</div><div><br></div><div>Sejalan dengan perkembangan yang ada, Fakultas Teknik Universitas Udayana terus berbenah dan mengembangkan diri. Untuk mengantisipasi perkembangan teknologi dan tuntutan masyarakat akan tenaga teknik.</div><div><br></div><div>Pada tahun 1968 Fakultas Teknik membuka jurusan baru yaitu Jurusan Teknik Sipil, sehingga Fakultas Teknik Universitas Udayana resmi memiliki tiga jurusan yaitu Jurusan Arsitektur, Jurusan Seni Rupa dan Jurusan Teknik Sipil.</div><div>Perkembangan berikutnya adalah dengan diberlakukannya PP No.5 tahun 1980 dan pada tahun 1983 Fakultas Teknik Universitas Udayana ditetapkan hanya terdiri atas dua jurusan yaitu Jurusan Arsitektur dan Jurusan Teknik Sipil. Sedangkan Jurusan Seni Rupa berdiri sendiri menjadi Program Studi Seni Rupa dan Disain (PSSRD).</div><div>Fakultas Teknik Universitas Udayana melengkapi jurusan yang dikelola dengan dua program studi baru yaitu Program Studi Teknik Mesin dan Program Studi Teknik Elektro pada tahun 1984, berdasarkan Surat Keputusan Rektor Nomor: 612/PT.17/1.01.02/ 1984. Setelah diperjuangkan selama 4 (empat) tahun maka pada tahun 1988 turun Surat Keputusan Direktur Jendral Pendidikan Tinggi Nomor: 64 dan 65/DIKTI/KEP/1988 tentang status resmi Program Studi Teknik Mesin dan Program Studi Teknik Elektro.</div><div><br></div><div>Berdasarkan Keputusan Direktur Jendral Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan Republik Indonesia Nomor: 231/DIKTI/KEP/1996, tanggal 11 Juli 1996, tentang program studi pada program sarjana di lingkungan Universitas Udayana, maka Fakultas Teknik memiliki empat program studi, yaitu: 1) Program Studi Arsitektur, 2) Program Studi Teknik Sipil, 3) Program Studi Teknik Mesin, dan 4)Program Studi Teknik Elektro</div><div>Guna memberikan kesempatan kepada masyarakat luas untuk memperoleh pelayanan pendidikan tinggi, maka Fakultas Teknik membuka Program Ekstensi dengan dasar hukum Surat Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan No 555/DIKTI/KEP/1997. Untuk Program Ekstensi, Fakultas Teknik memiliki empat program studi yaitu :</div><div><br></div><div><br></div><div><ol style=\"margin-bottom: 10px;\"><li>Program Studi Arsitektur</li><li><span style=\"line-height: 1.42857;\">Program Studi Teknik Sipil</span></li><li><span style=\"line-height: 1.42857;\">Program Studi Teknik Mesin</span></li><li><span style=\"line-height: 1.42857;\">Program Studi Teknik Elektro<br><br></span></li></ol><div>Dengan terbitnya Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Republik Indonesia No: 28/DIKTI/KEP/2002, tentang Penyelenggaraan Program Reguler dan Non Reguler di Perguruan Tinggi Negeri, maka Program Ekstensi disesuaikan menjadi Program Non Reguler.</div><div><br></div><div>Untuk memenuhi kebutuhan tenaga kerja menengah yang profesional dibidang keteknikan, maka Fakultas Teknik membuka Program Diploma I dan Diploma II, berdasarkan Keputusan Rektor Universitas Udayana No. 165/J14/PR.01.10/2002. Program Diploma yang dibuka adalah untuk Jurusan Arsitektur, Teknik Sipil, Teknik Elektro dan Teknik Mesin.</div><div><br></div><div>Sejalan dengan upaya peningkatan Sumber Daya Manusia (SDM), Universitas Udayana memandang perlu untuk membuka Program Pasca Sarjana (S2). Berdasarkan Surat Ijin dari Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Nomor 485/D/T/2003, tanggal 13 Maret 2003, pada tahun ajaran 2003/2004 dibuka Program Studi Magister Tenik Sipil. Administrasi akademik untuk Program Magister berada di bawah Program Pasca Sarjana Universitas Udayana.</div></div></div><p></p><p></p></p>\n','<p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Visi</span><p style=\"\">Menjadikan Fakultas Teknik sebagai lembaga pendidikan tinggi yang dapat melaksanakan Tri Dharma Perguruan Tinggi yang berkualitas, berbudaya, mendukung pembangunan yang berkelanjutan dan memiliki daya saing global.</p><p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Misi</span></p><p style=\"\">Didasarkan atas visi diatas, misi yang diemban oleh Fakultas Teknik Universitas Udayana adalah:</p><p style=\"\">Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu menghasilkan lulusan yang berkualitas dan dapat bersaing secara global. Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu mengembangkan ilmu pengetahuan, teknologi dan seni yang berwawasan budaya dan menunjang pembangunan berkelanjutan. Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu berperan aktif dalam kehidupan bermasyarakat. Meningkatkan kerjasama dengan instansi lain baik di dalam maupun di luar negeri.</p><p></p></p>\n','<p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Visi</span><p>Menjadikan Fakultas Teknik sebagai lembaga pendidikan tinggi yang dapat melaksanakan Tri Dharma Perguruan Tinggi yang berkualitas, berbudaya, mendukung pembangunan yang berkelanjutan dan memiliki daya saing global.</p><p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Misi</span></p><p>Didasarkan atas visi diatas, misi yang diemban oleh Fakultas Teknik Universitas Udayana adalah:</p><p>Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu menghasilkan lulusan yang berkualitas dan dapat bersaing secara global. Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu mengembangkan ilmu pengetahuan, teknologi dan seni yang berwawasan budaya dan menunjang pembangunan berkelanjutan. Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu berperan aktif dalam kehidupan bermasyarakat. Meningkatkan kerjasama dengan instansi lain baik di dalam maupun di luar negeri.</p><p></p></p>\n','<p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Tujuan Umum</span><p style=\"\">Mencerdaskan kehidupan bangsa, mengembangkan manusia Indonesia seutuhnya, manusia beriman, bertaqwa terhadap Tuhan Yang Maha Esa (Ida Hyang Widhi Wasa), berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani, rohani, kepribadian yang mantap dan mandiri, serta rasa tanggung jawab kemasyarakatan dan kebangsaan.</p><p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Tujuan Khusus</span></p><p style=\"\">Menyiapkan peserta didik yang memiliki kemampuan akademik dan atau menciptakan ilmu dan teknologi. Mengembangkan dan menyebarluaskan ilmu pengetahuan serta mengupayakan penggunaannya untuk meningkatkan taraf kehidupan masyarakat dan memperkaya kebudayaan lokal dan nasional.</p><p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Sasaran</span></p><p style=\"\">Menghasilkan lulusan yang mampu menerapkan keahlian akademis, professional, mandiri dan bertanggung jawab, sehingga handal dalam memanfaatkan pengetahuan dan teknologi di bidangnya, untuk menangani berbagai masalah lingkungan binaan secara keteknikan.</p><p></p></p>\n','<p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Tujuan Umum</span><p>Mencerdaskan kehidupan bangsa, mengembangkan manusia Indonesia seutuhnya, manusia beriman, bertaqwa terhadap Tuhan Yang Maha Esa (Ida Hyang Widhi Wasa), berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani, rohani, kepribadian yang mantap dan mandiri, serta rasa tanggung jawab kemasyarakatan dan kebangsaan.</p><p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Tujuan Khusus</span></p><p>Menyiapkan peserta didik yang memiliki kemampuan akademik dan atau menciptakan ilmu dan teknologi. Mengembangkan dan menyebarluaskan ilmu pengetahuan serta mengupayakan penggunaannya untuk meningkatkan taraf kehidupan masyarakat dan memperkaya kebudayaan lokal dan nasional.</p><p><span class=\"h3 text-start fw-bold\" style=\"margin-top: 0px;\">Sasaran</span></p><p>Menghasilkan lulusan yang mampu menerapkan keahlian akademis, professional, mandiri dan bertanggung jawab, sehingga handal dalam memanfaatkan pengetahuan dan teknologi di bidangnya, untuk menangani berbagai masalah lingkungan binaan secara keteknikan.</p><p></p></p>\n','<p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">Peta Fakultas Teknik Kampus Bukit Jimbaran<br><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><br></span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 517px; height: 775px;\"><img src=\"https://lh4.googleusercontent.com/g853q6HVBG_7A-yVQom90cxistAWH0awkNCK0AMSkTJusKBu1ncVRIrKLue6-eaNP4iS83fgZjxTlCKcX5NBiYfmxwLwZkLJ2W8YkbyEUrGpvPEwHivcvCGJstF-RGTJ0fVtUAA=s0\" width=\"517\" height=\"775\" style=\"border: 0px; max-width: 100%; height: auto; margin-left: 0px; margin-top: 0px;\"></span></span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">Exp:</span></p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">1. Gedung Dekanat FT</span></p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">2. </span>Gedung Undagi Graha</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">3. Program Studi Arsitektur</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">4. Program Studi Teknik Mesin</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">5. Program Studi Teknik Elektro</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">6. Program Studi Teknologi Informasi</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">7. Program Studi Teknik Sipil</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">8. Program Studi Teknik Lingkungan</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">9. Program Studi Teknik Industri</p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><br></p><p style=\"margin: 0pt 0px; line-height: 1.38;\">Peta Fakultas Teknik Kampus Sudirman<br></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 451px; height: 661px;\"><img alt=\"Description: C:\\Users\\Admin FT\\Desktop\\Peta Kampus Teknik Sudirman.jpg\" src=\"https://lh4.googleusercontent.com/pkPYrBG3lMg8-SuRayFc25gRthMAdCyko2yhPYWMsd1-AfLfmQb2shQG-ClMjkTJfvhQX8e1I6S7paXYAQ7LYg2f5ItL4ORziR61TihINHVLlIA3r5_EKGmZcMguPycQlYxTIDY=s0\" width=\"451\" height=\"661\" style=\"border: 0px; max-width: 100%; height: auto; margin-left: 0px; margin-top: 0px;\"></span></span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">Exp:</span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">1. </span>Gedung Administrasi FT</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">2. Gedung A</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">3. Gedung B</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">4. Gedung C</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">5. Gedung D</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">6. Gedung Pasca Sarjana</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">7. Gedung UPT Laboratorium</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">8. Gedung Agrokompleks</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 451px; height: 661px;\">9. Gedung Parkir</span></span></p><p></p></p>\n','<p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"text-align: justify;\">Map of the Faculty of Engineering Bukit Jimbaran Campus</span><br><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><br></span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 517px; height: 775px;\"><img src=\"https://lh4.googleusercontent.com/g853q6HVBG_7A-yVQom90cxistAWH0awkNCK0AMSkTJusKBu1ncVRIrKLue6-eaNP4iS83fgZjxTlCKcX5NBiYfmxwLwZkLJ2W8YkbyEUrGpvPEwHivcvCGJstF-RGTJ0fVtUAA=s0\" width=\"517\" height=\"775\" style=\"border: 0px; max-width: 100%; height: auto; margin-left: 0px; margin-top: 0px;\"></span></span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">Exp:</span></p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">1. Gedung Dekanat FT</span></p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">2. </span>Gedung Undagi Graha</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">3. Program Studi Arsitektur</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">4. Program Studi Teknik Mesin</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">5. Program Studi Teknik Elektro</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">6. Program Studi Teknologi Informasi</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">7. Program Studi Teknik Sipil</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">8. Program Studi Teknik Lingkungan</p><p style=\"margin: 0pt 0px; line-height: 1.38;\">9. Program Studi Teknik Industri</p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><br></p><p style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"text-align: justify;\">Map of the Faculty of Engineering Sudirman Campus</span><br></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 451px; height: 661px;\"><img alt=\"Description: C:\\Users\\Admin FT\\Desktop\\Peta Kampus Teknik Sudirman.jpg\" src=\"https://lh4.googleusercontent.com/pkPYrBG3lMg8-SuRayFc25gRthMAdCyko2yhPYWMsd1-AfLfmQb2shQG-ClMjkTJfvhQX8e1I6S7paXYAQ7LYg2f5ItL4ORziR61TihINHVLlIA3r5_EKGmZcMguPycQlYxTIDY=s0\" width=\"451\" height=\"661\" style=\"border: 0px; max-width: 100%; height: auto; margin-left: 0px; margin-top: 0px;\"></span></span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">Exp:</span></p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\">1. </span>Gedung Administrasi FT</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">2. Gedung A</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">3. Gedung B</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">4. Gedung C</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">5. Gedung D</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">6. Gedung Pasca Sarjana</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">7. Gedung UPT Laboratorium</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\">8. Gedung Agrokompleks</p><p dir=\"ltr\" style=\"margin: 0pt 0px; line-height: 1.38;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 451px; height: 661px;\">9. Gedung Parkir</span></span></p><p></p><p></p></p>\n',NULL,'2021-09-28 09:41:15',NULL);

/*Table structure for table `prodis` */

DROP TABLE IF EXISTS `prodis`;

CREATE TABLE `prodis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodi_ina` varchar(255) DEFAULT NULL,
  `prodi_eng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `prodis` */

insert  into `prodis`(`id`,`prodi_ina`,`prodi_eng`,`created_at`,`deleted_at`,`updated_at`) values 
(1,'Teknik Arsitektur','Architecture Engineering','2021-04-10 19:28:52',NULL,'2021-04-10 12:26:15'),
(2,'Teknik Sipil','Civil Engineering','2021-04-10 12:11:49',NULL,'2021-04-10 12:11:49'),
(3,'Teknik Mesin','Mechanical Engineering','2021-04-10 12:20:33',NULL,'2021-04-10 12:20:33'),
(4,'Teknik Elektro','Electrical Engineering','2021-04-10 12:24:16',NULL,'2021-04-10 12:24:16'),
(5,'Teknologi Informasi','Information Technology','2021-04-10 12:24:32',NULL,'2021-04-10 12:24:32'),
(6,'Teknik Arsitekturrr','Architecture Engineeringg','2021-06-12 14:13:02','2021-06-12 07:12:58','2021-06-12 07:12:58'),
(7,'Teknik Lingkungan Rev','Environmental Engineering Rev','2021-10-19 09:55:17','2021-10-19 02:53:15','2021-10-19 02:53:15');

/*Table structure for table `slides` */

DROP TABLE IF EXISTS `slides`;

CREATE TABLE `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ina` varchar(255) DEFAULT NULL,
  `title_eng` varchar(255) DEFAULT NULL,
  `slide_show` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `slides` */

insert  into `slides`(`id`,`title_ina`,`title_eng`,`slide_show`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Pengumumann','Announcementt','/storage/image/slideshow//610b8ac5edee2.png','2021-08-05 06:29:10','2021-08-05 06:56:28','2021-08-05 06:56:28'),
(2,'Pengumuman','Announcement','/storage/image/slideshow/Pengumuman/610b8b0f26cdb.png','2021-08-05 06:54:07','2021-08-06 03:00:58','2021-08-06 03:00:58'),
(3,'Galungan','Galungan','/storage/image/slideshow/Galungan/610ca61311061.png','2021-08-06 03:01:39','2021-08-06 03:01:39',NULL),
(4,'Kartini','Kartini N','/storage/image/slideshow/Kartini/610ca6372c8c0.png','2021-08-06 03:02:15','2021-09-06 02:01:19','2021-09-06 02:01:19'),
(5,'Selamat Menunaikan Ibadah Puasa','Happy Fasting Rev','/storage/image/slideshow/Selamat Menunaikan Ibadah Puasa/61356e4ccb410.png','2021-09-06 01:26:36','2021-09-06 01:44:47',NULL);

/*Table structure for table `socials` */

DROP TABLE IF EXISTS `socials`;

CREATE TABLE `socials` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_sosmed` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `logo_name` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `socials` */

insert  into `socials`(`id`,`nama_sosmed`,`link`,`logo`,`logo_name`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Facebook','https://web.facebook.com/profile.php?id=1000288475','https://plus.google.com',NULL,'2021-03-18 21:50:35','2021-03-26 04:52:17','2021-03-26 04:52:17'),
(2,'Instagram','https://www.instagram.com','/storage/image/socials//logo/instagram (1).png','instagram (1).png','2021-03-26 04:23:06','2021-04-13 05:09:20',NULL),
(3,'Facebook','https://web.facebook.com/profile.php?id=100028847566818','/storage/image/socials//logo/facebook.png','facebook.png','2021-04-01 13:43:06','2021-06-12 12:16:41','2021-06-12 12:16:41'),
(4,'Twitter','https://www.twitter.com','/storage/image/socials//logo/608d46c9c4b1a.png','608d46c9c4b1a.png','2021-05-01 11:50:51','2021-05-01 12:17:13',NULL),
(5,'Sestyc','Sestyc.com','/storage/image/socials/Sestyc/logo/608d48c4d3390.png','608d48c4d3390.png','2021-05-01 12:25:40','2021-05-01 12:25:40',NULL),
(6,'Facebookk','instagram.com','/storage/image/socials/Facebook/logo/60c4a40b98447.png','60c4a40b98447.png','2021-06-12 12:09:47','2021-06-12 12:16:21','2021-06-12 12:16:21'),
(7,'Facebook FT Rev','https://web.facebook.com/ftunud/?_rdc=1&_rdr','/storage/image/socials//logo/616e3af35e04c.png','616e3af35e04c.png','2021-10-19 03:17:28','2021-10-19 03:26:43',NULL);

/*Table structure for table `staf_bidangs` */

DROP TABLE IF EXISTS `staf_bidangs`;

CREATE TABLE `staf_bidangs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_staf` int(11) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `bidang_eng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_staf` (`id_staf`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `staf_bidangs` */

insert  into `staf_bidangs`(`id`,`id_staf`,`bidang`,`bidang_eng`,`created_at`,`updated_at`,`deleted_at`) values 
(1,5,'Teknologi','Technology','2021-07-28 01:15:41','2021-08-19 07:55:13',NULL),
(2,5,'Arsitekturr','Architecturee','2021-08-19 07:32:46','2021-08-19 07:56:32',NULL),
(3,5,'Sistem Informasi Rev','Information System Rev','2021-10-18 06:06:25','2021-10-18 06:20:51','2021-10-18 06:20:51');

/*Table structure for table `staf_penelitians` */

DROP TABLE IF EXISTS `staf_penelitians`;

CREATE TABLE `staf_penelitians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_staf` int(11) DEFAULT NULL,
  `penelitian` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_staf` (`id_staf`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `staf_penelitians` */

insert  into `staf_penelitians`(`id`,`id_staf`,`penelitian`,`created_at`,`updated_at`,`deleted_at`) values 
(1,5,'Purnawan (2018). Sistem Informasi Manajemen Kependudukan Desa Adat Terintegrasi Berbasis Web 2','2021-07-28 01:27:35','2021-08-19 08:18:16',NULL),
(2,5,'Purnawan(2018). Sistem Informasi Manajemen Keuangan Desa Adat Terintegrasi Berbasis Web Rev','2021-10-18 06:31:11','2021-10-18 06:40:09','2021-10-18 06:40:09');

/*Table structure for table `staf_prodis` */

DROP TABLE IF EXISTS `staf_prodis`;

CREATE TABLE `staf_prodis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_staf` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_staf` (`id_staf`),
  KEY `id_prodi` (`id_prodi`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `staf_prodis` */

insert  into `staf_prodis`(`id`,`id_staf`,`id_prodi`,`created_at`,`updated_at`,`deleted_at`) values 
(1,11,3,'2021-07-28 00:51:00','2021-07-28 00:51:00',NULL),
(25,4,2,'2021-08-20 05:26:48','2021-08-20 05:26:48',NULL),
(6,12,2,'2021-08-19 02:34:51','2021-08-19 02:34:51',NULL),
(5,12,1,'2021-08-19 02:34:51','2021-08-19 02:34:51',NULL),
(24,8,4,'2021-08-20 05:26:14','2021-08-20 05:26:14',NULL),
(23,1,5,'2021-08-20 05:25:59','2021-08-20 05:25:59',NULL),
(22,10,2,'2021-08-20 05:25:42','2021-08-20 05:25:42',NULL),
(21,10,1,'2021-08-20 05:25:41','2021-08-20 05:25:41',NULL),
(20,9,5,'2021-08-20 05:25:23','2021-08-20 05:25:23',NULL),
(19,9,4,'2021-08-20 05:25:23','2021-08-20 05:25:23',NULL),
(18,7,3,'2021-08-20 05:25:07','2021-08-20 05:25:07',NULL),
(17,7,2,'2021-08-20 05:25:07','2021-08-20 05:25:07',NULL),
(16,5,5,'2021-08-20 05:24:52','2021-08-20 05:24:52',NULL),
(26,4,4,'2021-08-20 05:26:48','2021-08-20 05:26:48',NULL),
(27,13,4,'2021-10-11 10:08:55','2021-10-11 10:47:03','2021-10-11 10:47:03'),
(28,13,5,'2021-10-11 10:08:57','2021-10-11 10:47:03','2021-10-11 10:47:03'),
(29,13,4,'2021-10-11 10:47:03','2021-10-11 10:47:03',NULL),
(30,13,5,'2021-10-11 10:47:04','2021-10-11 10:47:04',NULL);

/*Table structure for table `staffs` */

DROP TABLE IF EXISTS `staffs`;

CREATE TABLE `staffs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `biografi_ina` text DEFAULT NULL,
  `biografi_eng` text DEFAULT NULL,
  `pendidikan_s1` varchar(255) DEFAULT NULL,
  `pendidikan_s2` varchar(255) DEFAULT NULL,
  `pendidikan_s3` varchar(255) DEFAULT NULL,
  `sinta` text DEFAULT NULL,
  `scopus` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `foto_name` text DEFAULT NULL,
  `nama_slug` varchar(255) DEFAULT NULL,
  `jenis` enum('dosen','guru_besar') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jabatan` (`id_jabatan`),
  CONSTRAINT `staffs_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `staffs` */

insert  into `staffs`(`id`,`nip`,`id_jabatan`,`nama`,`biografi_ina`,`biografi_eng`,`pendidikan_s1`,`pendidikan_s2`,`pendidikan_s3`,`sinta`,`scopus`,`tanggal_lahir`,`alamat`,`nomor_telepon`,`email`,`created_at`,`updated_at`,`deleted_at`,`foto`,`foto_name`,`nama_slug`,`jenis`) values 
(1,'199111152019031017',2,'I Putu Arya Dharmaadi, S.T., M.T.','I Putu Arya Dharmaadi, S.T., M.T. adalah dosen TI','I Putu Arya Dharmaadi, S.T., M.T. adalah dosen TI English','Universitas Udayana','Itb',NULL,'https://www.youtube.com/','https://www.youtube.com/','2021-04-23','Denpasar','0812323131','aryadharmaadi@gmail.com','2021-10-18 19:24:46','2021-10-18 12:22:48',NULL,'/storage/image/staff/199111152019031017/60d5472b3512d.png','60d5472b3512d.png','i-putu-arya-dharmaadi-st-mt','dosen'),
(4,'178401478914871',NULL,'Putu Abdi Purnawan','Abdi Purnawan adalahh','Abdi Purnawan Iss','Universitas Udayana ni bos','Itb ne bos','s3 ku','https://www.youtube.com/','https://www.youtube.com/','2021-04-21','Br. Penida Kaja, Tembuku a','081338960544','abdipurnawan1@gmail.com','2021-10-18 19:36:15','2021-10-18 12:34:17',NULL,'/storage/image/staff/178401478914871/60d5470e83476.png','60d5470e83476.png','putu-abdi-purnawan','dosen'),
(5,'12345677',NULL,'Abdi Purnawan','asdsadadadadad','asdsadadadadad','Universitas Udayana','Itb ne bos',NULL,'https://www.youtube.com/','https://www.youtube.com/','2021-05-01','Br. Penida Kaja, Tembuku','081338960544','ypranathaa@gmail.com','2021-08-13 10:16:07','2021-06-25 01:22:11',NULL,'/storage/image/staff/12345677/60d52fc329f60.png','60d52fc329f60.png','abdi-purnawan','dosen'),
(7,'3636363636',1,'Hadi Darmawan','Hahahahahaa','Hahahahaha','Universitas Udayana','Itb',NULL,'https://www.youtube.com/',NULL,'2021-06-25','Br. Penida Kaja, Tembuku','081338960544','aryadharmaadi@gmail.com','2021-08-13 10:16:09','2021-07-01 10:41:50',NULL,'/storage/image/staff/3636363636/60d5301ed37b5.png','60d5301ed37b5.png','hadi-darmawan','dosen'),
(8,'12345678',NULL,'Kadek Abdi Priyoga','TESTTTTTTTTTTTTTTTTTT','NTAPPPPPPPPPPPPPPPPP','Unud','ITB','UI','www.youtube.com','www.lontarkomputer.com','2010-10-10','Badung','082122223333','abdi@gmail.com','2021-08-13 10:16:10','2021-07-02 06:02:58',NULL,'/storage/image/staff/12345678/60deac122ef35.png','60deac122ef35.png','kadek-abdi-priyoga','dosen'),
(9,'180555104112345678',NULL,'Hadi Darmawan Boy','Hadi Darmawan merupakan','Hadi Darmawan is','Universitas Udayana','Itb ne bos','s3 ku','https:sinta',NULL,'2021-07-28','Br. Penida Kaja, TembukuJl. Dewata, Denpasar','081338960544','ypranathaa@gmail.com','2021-10-11 16:58:19','2021-10-11 09:56:48','2021-10-11 09:56:48','/storage/image/staff/180555104112345678/6100a975e4c53.png','6100a975e4c53.png','hadi-darmawan-boy','guru_besar'),
(10,'180555104112345678',NULL,'Hadi Darmawan Boyy','Hadi Darmawan merupakan','Hadi Darmawan is','Universitas Udayana','Itb ne bos','s3 ku','https:sinta',NULL,'2021-07-28','Br. Penida Kaja, Tembuku','081338960544','ypranathaa@gmail.com','2021-10-11 16:58:43','2021-10-11 09:57:12','2021-10-11 09:57:12','/storage/image/staff/180555104112345678/6100a9ae1bfb0.png','6100a9ae1bfb0.png','hadi-darmawan-boyy','guru_besar'),
(11,'180555104112345678',NULL,'Hadi Darmawan Boyys','Hadi Darmawan merupakan','Hadi Darmawan is','Universitas Udayana','Itb ne bos','s3 ku','https:sinta',NULL,'2021-07-28','Br. Penida Kaja, Tembuku\r\nJl. Dewata, Denpasar','081338960544','ypranathaa@gmail.com','2021-10-11 16:58:30','2021-10-11 09:56:59','2021-10-11 09:56:59','/storage/image/staff/180555104112345678/6100a9f4a836e.png','6100a9f4a836e.png','hadi-darmawan-boyys','dosen'),
(12,'180555107612345678',NULL,'Guna Saputra','Guna saputra adalah','Guna saputra is','Universitas Udayana','Itb ne bos','s3 ku',NULL,NULL,'2021-08-03','Br. Penida Kaja, TembukuJl. Dewata, Denpasar','081338960544','abdipurnawan1@gmail.com','2021-08-19 09:36:13','2021-08-19 02:34:49',NULL,'/storage/image/staff/180555107612345678/6115e39984eb0.png','6115e39984eb0.png','guna-saputra','guru_besar'),
(13,'1970311212345678',NULL,'I Putu Yogi Mulyana Perbaikan, S.T., M.T.','Yogi Mulyana merupakan seorang dosen universitas udayana','Yogi Mulyana universitas udayana\'s lecture','Universitas Udayana','Institut Teknologi Bandung',NULL,'https://www.sinta.ristekbrin.go.id/','https://www.scopus.com/home.uri','2010-07-08','Br. Manggis, Karangasem','081237237237','yogimulyana@gmail.com','2021-10-18 19:40:43','2021-10-18 12:38:45',NULL,'/storage/image/staff/1970311212345678/61640d345e9d5.png','61640d345e9d5.png','i-putu-yogi-mulyana-perbaikan-st-mt','dosen');

/*Table structure for table `submenus` */

DROP TABLE IF EXISTS `submenus`;

CREATE TABLE `submenus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ina` varchar(255) DEFAULT NULL,
  `menu_eng` varchar(255) DEFAULT NULL,
  `menu_slug` varchar(255) DEFAULT NULL,
  `menu_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_page` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_page` (`id_page`),
  KEY `submenus_ibfk_2` (`id_menu`),
  CONSTRAINT `submenus_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `pages` (`id`),
  CONSTRAINT `submenus_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `submenus` */

insert  into `submenus`(`id`,`menu_ina`,`menu_eng`,`menu_slug`,`menu_url`,`created_at`,`updated_at`,`deleted_at`,`id_page`,`id_menu`) values 
(22,'Teknik Arsitektur','Architecture Engineering','teknik-arsitektur','https://ar.unud.ac.id/','2021-04-12 18:48:56','2021-04-02 21:17:52',NULL,NULL,17),
(24,'Teknik Sipil','Civil Engineering','teknik-sipil','https://sipil.unud.ac.id/','2021-04-12 18:39:57','2021-04-05 08:59:34',NULL,NULL,17),
(25,'Teknik Mesin','Mechanical Engineering','teknik-mesin','https://mesin.unud.ac.id/','2021-04-12 18:40:23','2021-04-05 09:00:23',NULL,NULL,17),
(26,'Teknik Elektro','Electrical Engineering','teknik-elektro','https://ee.unud.ac.id/','2021-04-12 18:41:26','2021-04-05 09:02:24',NULL,5,17),
(27,'Teknologi Informasi','Information Technology','teknologi-informasi','https://hmtiudayana.id/','2021-04-12 20:24:32','2021-04-12 13:24:32',NULL,NULL,17),
(28,'Teknik Lingkungan','Environmental Engineering','teknik-lingkungan','https://ft.unud.ac.id/pages/teknik-lingkungan','2021-10-23 09:08:57','2021-10-23 02:08:57','2021-10-23 02:08:57',5,17),
(29,'Teknik Industri','Industrial Engineering','teknik-industri','https://ft.unud.ac.id/pages/teknik-industri','2021-10-23 09:08:39','2021-10-23 02:08:39','2021-10-23 02:08:39',5,17),
(30,'Teknik Arsitekturrr','Architecture Engineeringgg','teknik-arsitekturrr','ss','2021-04-08 14:26:03','2021-04-08 07:26:02','2021-04-08 07:26:02',NULL,18),
(31,'Teknik Baru Ni Bos','New Engineering','teknik-baru-ni-bos','/admin/pages/pengumuman-ini','2021-04-15 10:02:28','2021-04-15 03:02:23','2021-04-15 03:02:23',5,17),
(32,'S3 Teknik Sipil','S3 Civil Engineering','s3-teknik-sipil','https://youtube.com','2021-04-12 12:30:04','2021-04-12 12:30:04',NULL,NULL,18),
(33,'Sipil Internasional','Civil International','sipil-internasional','https://youtube.com','2021-04-12 12:47:04','2021-04-12 12:47:04',NULL,NULL,19),
(34,'Teknikss','Engineringss','teknikss','aku-adalah-lelakii','2021-10-23 09:08:06','2021-10-23 02:08:05','2021-10-23 02:08:05',4,17),
(35,'Teknik Lingkungan Rev','Environmental Engineering Rev','teknik-lingkungan-rev',NULL,'2021-10-23 11:43:47','2021-10-23 04:43:47','2021-10-23 04:43:47',NULL,17);

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `judul_slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `judul_eng` varchar(255) DEFAULT NULL,
  `deskripsi_eng` text DEFAULT NULL,
  `is_profile` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `videos` */

insert  into `videos`(`id`,`judul`,`judul_slug`,`deskripsi`,`link`,`created_at`,`updated_at`,`deleted_at`,`judul_eng`,`deskripsi_eng`,`is_profile`) values 
(0,'Shingeki no Kyojin','shingeki-no-kyojin','Ini Adalah Video AoT','TcbNGMFzqqU','2021-04-27 19:35:13','2021-04-27 12:35:09',NULL,'Attack on Titan','This is AoT Video',0),
(1,'Profile Fakultas Teknik','profile-fakultas-teknik','Fakultas Teknik Universitas Udayana \r\nJl. Kampus Unud Jimbaran Badung, Bali 80361\r\nPhone Number: +62 (361) 703320','aFItsrv3n-Q','2021-10-23 19:19:01','2021-10-23 12:19:01',NULL,'Faculty of Engineering Profile Video','Faculty of Engineering Udayana University\r\nJl. Kampus Unud Jimbaran Badung, Bali 80361\r\nPhone Number: +62 (361) 703320',0),
(2,'Promosi Doktor : Ir. I Nyoman Setiawan, M.T.','hihi-hihi','Promosi Doktor : Ir. I Nyoman Setiawan, M.T.','b4_XNNZNdkc','2021-04-27 19:28:10','2021-03-18 07:22:20',NULL,'Doctor Promotion : Ir. I Nyoman Setiawan, M.T.','This is doctor promotion video\r\n',0),
(3,'ACARA PUNCAK - Hut BKFT Ke-55','acara-puncak-hut-bkft-ke-55','ACARA PUNCAK - Hut BKFT Ke-55','ybOI_hQnNz8','2021-04-27 19:58:59','2021-04-27 12:58:56',NULL,'BKFT Engineering Anniv 53','ACARA PUNCAK - Hut BKFT Ke-55 eng',0),
(4,'PKKMB Fakultas Teknik Universitas Udayana','pkkmb-fakultas-teknik-universitas-udayana','PKKMB Fakultas Teknik Universitas Udayana','nSjzZV1ebPs','2021-10-23 19:19:02','2021-10-23 12:19:01',NULL,'PKKMB Faculty of Engineering','This is Faculty of Engineering PKKMB Video\r\n',1),
(5,'Attack on Titan','attack-on-titan','TcbNGMFzqqU','TcbNGMFzqqU','2021-10-10 18:33:25','2021-10-10 11:31:58','2021-10-10 11:31:58','Shingeki no Kyojin','Ini video aot',0),
(7,'Promosi Doktor : Ir. I Nyoman Setiawan, M.T.a','promosi-doktor-ir-i-nyoman-setiawan-mta','dsfsdfsdfsdfsd','sdfsdfsdfs','2021-06-11 03:20:40','2021-06-10 20:20:40','2021-06-10 20:20:40','ACARA PUNCAK - Hut BKFT Ke-55 eng','sfsfsdfsdfsfd',NULL),
(8,'Uji Coba Video Rev','uji-coba-video-rev','Ini merupakan pengujian tambah video','r2zCS92VaeQ','2021-10-10 19:11:52','2021-10-10 12:10:24','2021-10-10 12:10:24','Video Testing Rev','Create video testing',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
