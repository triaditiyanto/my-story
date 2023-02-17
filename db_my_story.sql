-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_projek_dit.tb_main
CREATE TABLE IF NOT EXISTS `tb_main` (
  `id_main` int(11) NOT NULL AUTO_INCREMENT,
  `judul_diary` varchar(50) NOT NULL,
  `time_diary` date NOT NULL,
  `isi_diary` varchar(9999) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_main`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_projek_dit.tb_main: ~22 rows (approximately)
/*!40000 ALTER TABLE `tb_main` DISABLE KEYS */;
INSERT INTO `tb_main` (`id_main`, `judul_diary`, `time_diary`, `isi_diary`, `id_user`) VALUES
	(10, 'note', '2022-09-24', 'jadi saya mau ke rumah ke rumah ortu saya dan saya harus ke pasar', 2),
	(15, 'haloo tanggal hari ini', '2022-09-25', 'sbcasbcbascb ashcbjasc  ahcb jbbascjhasac jjhbac hbsbcsj bac jhacs jh ahsbc hasc jhb ascja  scjjhscs basc bbasc bsc asch asbchb scakcsb', 2),
	(23, 'test 2', '2022-09-25', 'Halo, nama saya Tri Aditiyanto Putra. Saya alumni siswa SMKN 5 Kota Tangerang dan saya merupakan anak ketiga dari tiga bersaudara dan saya sangat tertarik pada dunia IT, awal-awal saya terjun ke dunia IT adalah sebagai web developer dan saya sangat mahir di bidang web developer. Pada saat saya menjadi siswa di SMKN 5 Kota Tangerang banyak sekali pengalaman yang saya dapatkan yaitu, sebagai teknisi maintenance lab komputer di sekolah saya dan juga saya mengikuti berbagai kejuaraan di bidang IT yaitu, juara harapan 1 web desain Linea tahun 2019 saat itu saya masih kelas 10, dan pada saat kelas 11 saya menjuarai kejuaraan LKS Kota Tangerang mata lomba IT Software solution for bussines. Lalu ketika saya sudah mengijak kelas 12 saya menjadi ketua IT Community periode 2021-2022. Pada saat memasuki ujian kompetensi kejuruan saya membuat projek Aplikasi Booking Hotel berbasis website dan saya mendapatkan nilai yg sangat memuaskan pada ujian tersebut. Sebelum melamar pada Next Soft saya berprofesi sebagai Junior Software Developer pada sebuah start up yg terdapat di Kelapa Dua, Gading, Serpong. Cukup itu saja yg bisa saya bagikan tentang latar belakang saya kurang lebih nya mohon maaf.', 9),
	(24, 'hari', '2022-09-25', 'hari ini ku dapat kue ulang tahun dan kue itu enak sekali enak', 9),
	(25, 'mendung tanpo udan', '2022-09-25', 'hari ini mendung belum tentu hujan dan jika hujan belum tentu mendung ...', 9),
	(28, 'halo testing', '2022-09-25', 'asc ksc kjasbc kjabsc baskc kajsbc kjasbc kajsbc kajbsc kasbc kbbasc kjabsc absc kasbc kabssc asbscakbasbc ascbascs aksbcas sc', 2),
	(29, 'haloo aku adit', '2022-09-25', 'asjcb kasc kabsbc jas ckasc kasc aksc kassc akshsc asvckas ckasca asc akaksc asc vasc kas scbasc ascb kasck akabsckas ckakscbkas cascashcdv dwvkwjbvwkbasc asksca sckaskc sakb cas cksajb', 2),
	(30, 'halo testing 2', '2022-09-26', 'aksuusaf kabsbf kabsf kasc kbasc kaskujc aksjb asfa sckajsbf asf  kja ajsbf kasj f kajsbf kasjbf kajsfb asf kas f', 9),
	(32, 'halo testing', '2022-09-27', 'kabsckbaksbc as c kasb c ascb ascbascbas ckas scbaks scibascasbcas', 9),
	(35, 'hari ini fathur', '2022-09-28', 'kuas iacs iascu ascsiusab ashciusabcb ashcbias sciasscjashcbiasbcjascsiusac asivascjasciascsc iasscaksh ciasc ascibascia sciubasci asci', 10),
	(37, 'haloo aku adit', '2022-10-01', 'you', 2),
	(38, 'halo hari ini', '2022-10-16', 'asjcu siacub asu uasd ausdba ausdb oausd oaousfa oaisc aosf aoisdb oais oasff asifb alsjb asbd aois aoais asf oaisf', 9),
	(39, 'aku disini', '2022-10-16', 'asjbb asc oaousc aoscoaosc  oasncoaos soas aos oasjb oas soasb', 2),
	(40, 'haloo aku disini gaes', '2022-10-16', 'ljfcb ascaj aisd aisd  asjd alsc asc aosifas asoicc asci asock asc', 2),
	(41, 'hahahahah', '2022-10-16', 'ahahahahahahahahahah', 2),
	(42, 'haloo gauys test', '2022-10-16', 'hahahahahahahahahahahahahahahhhhhhhhhhhhhhhhhhhhhhhhhahahahahaha', 2),
	(44, 'nisfu', '2022-11-17', 'halobckbasbcysa', 2),
	(48, 'haloo', '2022-12-16', 'akuu mauu cerita nih hahaha', 9);
/*!40000 ALTER TABLE `tb_main` ENABLE KEYS */;

-- Dumping structure for table db_projek_dit.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `name_user` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_projek_dit.tb_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`id_user`, `name`, `name_user`, `password`) VALUES
	(1, 'tradtya', 'adit', 'rahasia'),
	(2, 'tri aditiyanto', 'dev', 'ac43724f16e9241d990427ab7c8f4228'),
	(9, 'tri aditiyanto putra', 'aditiya', '78b01778807b2945e6c4c1ef08c7ca70'),
	(10, 'fathur rahman', 'fathur', 'ac43724f16e9241d990427ab7c8f4228');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
