-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 08:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iasolv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `kode_fakultas` varchar(3) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `kode_fakultas`, `nama_fakultas`) VALUES
(2, 'TI', 'Teknik Informatika'),
(3, 'EB', 'Ekonomi dan Bisnis'),
(4, 'HK', 'Hukum'),
(5, 'TK', 'Teknik'),
(6, 'SB', 'Sastra dan Budaya'),
(7, 'SD', 'Seni Rupa dan Desain');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(6) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `alamat`, `email`, `telp`, `tempat_lahir`, `tgl_lahir`, `jenis_kel`, `nama_prodi`) VALUES
(1, 222180023, 'Kamiswara Angga Wijaya', 'Semarang', '222180023@student.unaki.ac.id', '089507340705', 'Semarang', '1998-09-06', 'Pria', 'Sistem Informasi'),
(2, 222180013, 'Thomas Dwi Christiyanto', 'Semarang', '222180013@student.unaki.ac.id', '089507260705', 'Jakarta', '1999-10-06', 'Pria', 'Sistem Informasi'),
(3, 222180016, 'Yeremia Chris Saragi', 'Karimun', '222180016@student.unaki.ac.id', '089522350705', 'Karimun', '2000-09-06', 'Pria', 'Sistem Informasi'),
(4, 222180015, 'Frans Alwan Purba', 'TGCU', '222180016@student.unaki.ac.id', '089522350225', 'Jambi', '2000-09-06', 'Pria', 'Sistem Informasi'),
(9, 222180010, 'Febe Adelia Satoko', 'Nias', '222180010@student.unaki.ac.id', '082137580942', 'Nias', '2000-04-01', 'Wanita', 'Sistem Informasi'),
(10, 223180010, 'Anggiat Andika', 'Jakarta', '223180010@student.unaki.ac.id', '082137599942', 'Jakarta', '2000-05-02', 'Pria', 'Teknik Informatika'),
(11, 223180034, 'Ferdinand Atmadja', 'Semarang', '223180034@student.unaki.ac.id', '082132299942', 'Semarang', '2000-05-07', 'Pria', 'Teknik Informatika'),
(12, 223180012, 'Wirangga Bernandi', 'Kalimantan', '223180012@student.unaki.ac.id', '082137599912', 'Kalimantan', '2000-07-02', 'Pria', 'Teknik Informatika'),
(13, 223180026, 'Aron Branden', 'Papua', '223180010@student.unaki.ac.id', '082197593942', 'Papua', '2000-12-09', 'Pria', 'Teknik Informatika'),
(14, 121190052, 'Surti Sulastri', 'Jakarta', '121190052@student.unaki.ac.id', '082137599942', 'Jakarta', '2000-05-02', 'Wanita', 'Sastra Inggris'),
(15, 121190001, 'Budi Atmodjo', 'Semarang', '121190001@student.unaki.ac.id', '083132299942', 'Semarang', '2000-05-07', 'Pria', 'Sastra Inggris'),
(16, 121190003, 'Mickael Simbuan', 'Kalimantan', '121190003@student.unaki.ac.id', '081137599912', 'Kalimantan', '2000-07-02', 'Pria', 'Sastra Inggris'),
(17, 121190026, 'Alex Simbolon', 'Papua', '223180010@student.unaki.ac.id', '089197593942', 'Papua', '2000-12-09', 'Pria', 'Sastra Inggris'),
(18, 121190013, 'Putra Bagus', 'Papua', '223180010@student.unaki.ac.id', '082197593942', 'Papua', '2000-12-09', 'Pria', 'Sastra Inggris'),
(19, 58254930, 'Shad Flynn', 'P.O. Box 642, 4456 Magna, Rd.', 'montes@hendreritidante.edu', '085263365310', 'Sagamu', '2000-08-26', 'Pria', 'Telekomunikasi dan Jaringan'),
(20, 12021473, 'Stone Sharpe', 'Ap #805-9725 Nec, St.', 'Suspendisse@acurna.edu', '089559517977', 'Drumheller', '1970-11-27', 'Wanita', 'Teknik Mesin'),
(21, 64848658, 'Mohammad Bonner', 'P.O. Box 927, 631 Et Avenue', 'risus.Nunc.ac@quispede.org', '089582315914', 'Green Bay', '1994-02-10', 'Wanita', 'Teknik Informatika'),
(22, 66133594, 'Nora York', '673-3110 Aliquet Av.', 'aliquam@utdolordapibus.co.uk', '081234903962', 'Reno', '1983-02-16', 'Wanita', 'Teknik Mesin'),
(23, 46145819, 'Hashim Gallagher', 'P.O. Box 386, 1115 Sed Av.', 'pellentesque.tellus@veliteu.co.uk', '089543633389', 'Şanlıurfa', '1968-09-22', 'Pria', 'Teknik Mesin'),
(24, 51193117, 'Cameron Logan', '3550 Nam St.', 'lacus.Aliquam.rutrum@Nullam.net', '089560759334', 'Legal', '1987-06-14', 'Pria', 'Telekomunikasi dan Jaringan'),
(25, 52866140, 'Steel Green', '8959 Netus Street', 'ac.turpis@elementumategestas.org', '089571098187', 'Gloucester', '1969-06-06', 'Pria', 'Teknik Mesin'),
(26, 65812701, 'Lee Rocha', '6017 Diam. Av.', 'non.feugiat@orci.ca', '085284461930', 'White Rock', '1986-10-20', 'Wanita', 'Telekomunikasi dan Jaringan'),
(27, 88604644, 'Rose Bates', 'Ap #943-5146 Dui Rd.', 'nulla@dolor.edu', '085286231905', 'Cellara', '1974-06-10', 'Wanita', 'Teknik Mesin'),
(28, 791103, 'Brittany Neal', '291-5296 Consectetuer St.', 'risus.Morbi.metus@estNunc.com', '089547557912', 'Ipís', '1969-07-31', 'Wanita', 'Sastra Inggris'),
(29, 854065, 'Uriel Christian', '185-6320 Dapibus Rd.', 'Phasellus.vitae.mauris@infaucibusorci.edu', '085285891787', 'Pordenone', '1973-11-26', 'Wanita', 'Sastra Inggris'),
(30, 61459955, 'Daniel Jones', 'P.O. Box 755, 7543 Et Ave', 'eros.Nam.consequat@atvelit.org', '085288288562', 'General Escobedo', '1968-11-07', 'Pria', 'Sastra Inggris'),
(31, 45008205, 'Graham Nash', 'P.O. Box 699, 6708 Aliquam St.', 'mauris@ultriciessemmagna.ca', '085253272704', 'Viggiano', '1999-07-24', 'Wanita', 'Sastra Inggris'),
(32, 50622662, 'Maggy Martin', 'Ap #267-281 Eget St.', 'orci@ornare.ca', '081285910715', 'Purén', '1980-08-08', 'Pria', 'Telekomunikasi dan Jaringan'),
(33, 18262326, 'Magee Nixon', '6902 Orci Ave', 'et@lobortisquam.org', '085270170432', 'Ruda', '1995-06-30', 'Wanita', 'Teknik Mesin'),
(34, 23758608, 'Aimee Mcclure', '203-2228 Ligula. Av.', 'facilisis@mattisIntegereu.com', '085290818454', 'Bergisch Gladbach', '2000-08-17', 'Wanita', 'Teknik Mesin'),
(35, 44083959, 'Claire Caldwell', '654-2518 Nullam Street', 'vehicula.Pellentesque.tincidunt@libero.edu', '081235532735', 'Glimes', '1986-06-18', 'Pria', 'Teknik Informatika'),
(36, 85596677, 'Aspen Norton', 'Ap #997-6652 Vitae Avenue', 'at@CurabiturmassaVestibulum.net', '081297004976', 'Forbach', '1997-07-05', 'Pria', 'Sistem Informasi'),
(37, 65301094, 'Abdul Hardin', '4002 Laoreet St.', 'Suspendisse.sagittis@a.org', '085250446051', 'Victor Harbor', '1972-09-15', 'Pria', 'Teknik Informatika'),
(38, 40129129, 'Leslie Chan', 'P.O. Box 364, 5304 Vitae, Avenue', 'Quisque@nislsem.com', '085295293138', 'Erembodegem', '1985-02-19', 'Pria', 'Sistem Informasi'),
(39, 20343694, 'Ila Barry', '4668 Ultricies Street', 'magna@diam.co.uk', '089560773819', 'Chandrapur', '1998-02-04', 'Pria', 'Sastra Inggris'),
(40, 11590797, 'Rhiannon Franco', '4428 Elit, St.', 'elit.fermentum@Duisvolutpat.ca', '085207307152', 'Rabbi', '1977-05-16', 'Pria', 'Teknik Informatika'),
(41, 7565964, 'Rama Jordan', 'P.O. Box 740, 4940 Nullam St.', 'eu.odio.Phasellus@ametluctusvulputate.ca', '089538209263', 'Ghanche', '1997-02-01', 'Wanita', 'Telekomunikasi dan Jaringan'),
(42, 20148824, 'Elijah Macias', 'P.O. Box 209, 2769 Urna. Avenue', 'morbi.tristique.senectus@tristique.net', '089590014554', 'Oteppe', '1998-06-10', 'Pria', 'Teknik Informatika'),
(43, 64187438, 'Guy Mays', '215-2768 Fusce Rd.', 'sed.libero.Proin@lobortisquis.ca', '081240424165', 'Namur', '1973-06-19', 'Pria', 'Sastra Inggris'),
(44, 94567240, 'Isadora Parks', 'Ap #272-9180 Phasellus St.', 'diam.nunc.ullamcorper@nullaInteger.co.uk', '081237985888', 'Tacoma', '1994-03-29', 'Pria', 'Sastra Inggris'),
(45, 53402085, 'Chiquita Barber', 'P.O. Box 234, 325 Odio. Av.', 'et@miacmattis.co.uk', '089528696602', 'Knoxville', '1978-11-03', 'Pria', 'Teknik Mesin'),
(46, 85690183, 'Yolanda Bright', 'P.O. Box 439, 554 Arcu Rd.', 'leo.in.lobortis@CuraeDonec.co.uk', '081262227542', 'San Vicente', '1978-04-04', 'Pria', 'Sastra Inggris'),
(47, 89739987, 'Elijah Chapman', '8487 Quisque Rd.', 'at.sem.molestie@vulputateposuerevulputate.com', '081282334396', 'Meix-Devant-Virton', '1970-07-21', 'Pria', 'Sastra Inggris'),
(48, 57472635, 'Devin Sosa', 'Ap #541-6410 Montes, Rd.', 'in@miDuisrisus.ca', '089529307433', 'Yumbel', '1993-09-24', 'Pria', 'Teknik Mesin'),
(49, 40553171, 'Ethan Vasquez', '6450 Rutrum, Rd.', 'nibh.sit.amet@nequeMorbiquis.co.uk', '089585151992', 'Burlington', '1988-07-13', 'Pria', 'Sistem Informasi'),
(50, 53228346, 'Angela Johns', 'P.O. Box 401, 6910 Molestie St.', 'mi.lorem@purusmaurisa.co.uk', '089524357998', 'Castelluccio Valmaggiore', '1979-03-21', 'Wanita', 'Telekomunikasi dan Jaringan'),
(51, 25995909, 'Salvador Bond', '7230 Quis, St.', 'vulputate@euplacerat.net', '081224875083', 'Sedgewick', '1984-05-05', 'Wanita', 'Sistem Informasi'),
(52, 17129672, 'Driscoll Small', 'P.O. Box 457, 9112 Sit Avenue', 'ultricies.ligula.Nullam@imperdiet.ca', '089527839388', 'Hody', '1973-05-08', 'Pria', 'Teknik Informatika'),
(53, 47498642, 'Basia Mason', '7824 Convallis, Street', 'tincidunt.tempus@acmattisvelit.ca', '085214558984', 'El Carmen', '1986-03-18', 'Pria', 'Teknik Mesin'),
(54, 73265822, 'Adrian Ingram', '196-457 Nunc St.', 'fringilla@erategettincidunt.com', '085288667428', 'Villa Alegre', '1967-06-18', 'Wanita', 'Teknik Mesin'),
(55, 95590592, 'Benedict Sargent', '8018 Diam. Road', 'Aliquam.auctor.velit@nonummy.com', '085298655818', 'Gdańsk', '1973-12-14', 'Pria', 'Teknik Mesin'),
(56, 33157084, 'Aladdin Bright', 'P.O. Box 787, 838 Facilisis Street', 'hymenaeos.Mauris@Nunc.com', '085250418389', 'Hoyerswerda', '1982-11-07', 'Pria', 'Teknik Informatika'),
(57, 77004819, 'Wing Benton', '7650 Nulla Road', 'ac.tellus@posuereatvelit.org', '085207172283', 'Cap-Saint-Ignace', '1974-11-04', 'Wanita', 'Sastra Inggris'),
(58, 14660224, 'Colette Oliver', '347-5235 Fringilla. Street', 'tempor.diam.dictum@egetodioAliquam.edu', '089595495018', 'Primavera', '1993-01-21', 'Wanita', 'Telekomunikasi dan Jaringan'),
(59, 71773157, 'Karleigh Farmer', '289-7020 Sed Street', 'Duis.ac@tortor.net', '081218710854', 'Bad Dürkheim', '1979-04-28', 'Pria', 'Sastra Inggris'),
(60, 43927163, 'Xavier Guy', '692-6286 Aliquet Av.', 'vel.venenatis@ante.com', '081274575728', 'Toruń', '1997-11-16', 'Wanita', 'Teknik Mesin'),
(61, 77315414, 'Abel Tyson', '801-4687 Et Av.', 'sapien@magnaa.net', '085247378933', 'Sanghar', '1978-12-28', 'Pria', 'Sistem Informasi'),
(62, 42706014, 'Jackson Hooper', '721-403 Vestibulum Ave', 'scelerisque.dui@ornaresagittisfelis.ca', '085280336333', 'Jambi', '1976-09-18', 'Wanita', 'Telekomunikasi dan Jaringan'),
(63, 21864510, 'Mary Patel', 'P.O. Box 779, 1857 Justo. Road', 'augue@Nulla.edu', '089593577941', 'Zwevegem', '1994-09-19', 'Pria', 'Teknik Mesin'),
(64, 66050416, 'Risa Brennan', 'Ap #136-7632 Consectetuer Rd.', 'turpis.vitae.purus@condimentumDonec.co.uk', '081217474240', 'Scala Coeli', '1977-12-29', 'Wanita', 'Sastra Inggris'),
(65, 99810363, 'Knox Poole', 'P.O. Box 609, 2761 Varius Ave', 'id@mipedenonummy.org', '081251658295', 'Upper Hutt', '1968-12-09', 'Wanita', 'Sastra Inggris'),
(66, 79657111, 'Aidan Cardenas', '1125 Ac Rd.', 'nec.leo@tinciduntpedeac.co.uk', '089594992872', 'Bexbach', '1972-11-14', 'Wanita', 'Sastra Inggris'),
(67, 40867403, 'Aileen Garcia', 'P.O. Box 273, 5319 Tristique St.', 'enim.gravida@Sedidrisus.org', '085271012335', 'Alexeyevka', '1978-01-30', 'Wanita', 'Teknik Informatika'),
(68, 80957881, 'Amos Newman', 'Ap #550-3234 Lectus Rd.', 'luctus.Curabitur.egestas@aliquamenim.org', '085224862264', 'Aurora', '1979-05-30', 'Pria', 'Sastra Inggris'),
(69, 78055723, 'Brady Myers', '880 Pretium Rd.', 'aliquet.lobortis@magnamalesuadavel.edu', '089555698288', 'San Rafael', '1991-03-24', 'Wanita', 'Teknik Informatika'),
(70, 37379989, 'Sacha Hull', '8626 Odio Road', 'Duis.ac@urnaVivamus.com', '081216987712', 'Ingooigem', '2000-11-08', 'Wanita', 'Teknik Informatika'),
(71, 86277280, 'Neville Sandoval', 'P.O. Box 783, 9103 Proin St.', 'vitae.orci@lobortisultricesVivamus.co.uk', '081269717596', 'Drogenbos', '1989-04-27', 'Pria', 'Telekomunikasi dan Jaringan'),
(72, 54251796, 'Curran Marsh', 'Ap #555-7343 Rutrum Street', 'dictum@vulputaterisusa.co.uk', '089576843836', 'Bremen', '1983-05-04', 'Wanita', 'Teknik Mesin'),
(73, 36618874, 'Desirae Collier', '373-2653 Vitae St.', 'erat.volutpat@et.co.uk', '089559412276', 'Genk', '1974-10-13', 'Wanita', 'Telekomunikasi dan Jaringan'),
(74, 65162260, 'Jeremy Puckett', '9930 Purus, Av.', 'arcu@intempuseu.edu', '081242140991', 'Macon', '1981-10-05', 'Wanita', 'Sistem Informasi'),
(75, 64043786, 'Yen Leonard', '6073 Vivamus Avenue', 'non.luctus@tristique.ca', '085270097221', 'Seattle', '1999-08-27', 'Pria', 'Teknik Mesin'),
(76, 20336470, 'Wanda Mcintosh', '290-596 Eget Road', 'natoque.penatibus.et@sedfacilisis.net', '085226098911', 'Carstairs', '1995-03-10', 'Wanita', 'Sastra Inggris'),
(77, 35173205, 'Talon Lee', '5330 Malesuada Rd.', 'lorem@egestasrhoncus.ca', '089553688689', 'Birmingham', '1995-07-06', 'Pria', 'Teknik Mesin'),
(78, 30479306, 'Hakeem Rodriquez', '886-6630 Urna. Street', 'auctor.Mauris@urna.org', '089579846820', 'Promo-Control', '1972-05-26', 'Wanita', 'Teknik Mesin'),
(79, 47291224, 'Plato Rowe', '334-5286 Duis Ave', 'massa.non@Fuscealiquetmagna.com', '089514282468', 'Traiskirchen', '1974-05-08', 'Pria', 'Teknik Informatika'),
(80, 14943186, 'Mark Miller', '9470 A, St.', 'Morbi@indolor.ca', '085262314287', 'Haverhill', '1970-12-09', 'Pria', 'Sistem Informasi'),
(81, 87000039, 'Shana Raymond', '8539 Dictum St.', 'porttitor@eros.ca', '089587089352', 'Pudahuel', '1991-02-10', 'Wanita', 'Sistem Informasi'),
(82, 40288874, 'Mikayla Booker', 'P.O. Box 163, 3500 Metus. St.', 'lacus.Quisque.purus@Sed.org', '081203086193', 'Hilo', '1975-09-25', 'Pria', 'Sistem Informasi'),
(83, 87087948, 'Maggie Glenn', 'P.O. Box 213, 4793 Sit St.', 'tellus@dui.net', '089512670440', 'Baschi', '1999-03-27', 'Pria', 'Teknik Informatika'),
(84, 69003134, 'McKenzie Lindsay', 'P.O. Box 125, 6146 A, Rd.', 'cursus.non@neque.co.uk', '081276846794', 'Sant\'Elia a Pianisi', '1987-05-20', 'Wanita', 'Sistem Informasi'),
(85, 79892581, 'Rahim Garza', '1060 Suspendisse Street', 'Vivamus@magnamalesuadavel.co.uk', '085211881503', 'Novosibirsk', '1981-06-13', 'Pria', 'Sistem Informasi'),
(86, 8061840, 'Tatyana Wise', '316-692 Proin Rd.', 'Nunc.mauris@quisarcuvel.org', '089598618066', 'Redwater', '1967-04-08', 'Wanita', 'Teknik Mesin'),
(87, 94381775, 'Brynne Love', '8956 Cum Rd.', 'vitae.odio@nasceturridiculusmus.org', '089566900573', 'La Reina', '1997-04-18', 'Wanita', 'Sistem Informasi'),
(88, 69047302, 'Herrod Jacobson', '359-7547 Velit Street', 'ipsum.Donec@risusNullaeget.net', '081223835205', 'Signeulx', '1990-02-01', 'Wanita', 'Sistem Informasi'),
(89, 66698741, 'Jessamine Blackwell', '6860 Dui. Rd.', 'suscipit.nonummy@velvenenatis.ca', '085272315649', 'Bourges', '1976-10-04', 'Wanita', 'Sastra Inggris'),
(90, 23523107, 'Zane Whitley', 'Ap #302-5211 Suspendisse Ave', 'orci.lacus@Lorem.com', '081228940478', 'Montleban', '1998-04-24', 'Pria', 'Teknik Informatika'),
(91, 91252324, 'Suki Reid', '492 Non Ave', 'magnis.dis@lacus.net', '085206267956', 'Montelíbano', '2000-08-19', 'Wanita', 'Teknik Mesin'),
(92, 8508991, 'Ira Hobbs', 'P.O. Box 679, 4544 Maecenas Street', 'lobortis.mauris.Suspendisse@Suspendisse.edu', '081215134819', 'Vichuquén', '1978-11-16', 'Pria', 'Teknik Informatika'),
(93, 39979995, 'Ashely Craig', 'P.O. Box 678, 7312 At, Rd.', 'tempor.est.ac@rutrumnonhendrerit.net', '089595111016', 'Tiruchirapalli', '1977-09-11', 'Pria', 'Teknik Mesin'),
(94, 81663073, 'Jack Newton', 'P.O. Box 675, 3183 Mus. St.', 'in.faucibus.orci@luctusaliquet.edu', '085252999180', 'La Pintana', '1980-12-09', 'Pria', 'Teknik Mesin'),
(95, 27171143, 'Kato Daniels', '468-5925 Lorem, Avenue', 'adipiscing.fringilla.porttitor@non.ca', '089593381856', 'Vedrin', '1988-02-20', 'Pria', 'Teknik Informatika'),
(96, 20418000, 'Nathaniel Mcgowan', 'Ap #142-8210 Vulputate, Rd.', 'velit.egestas@Inscelerisquescelerisque.org', '089529296725', 'Orhangazi', '1966-11-08', 'Wanita', 'Teknik Informatika'),
(97, 20696650, 'Neil Larsen', '5518 Elit. Av.', 'massa.Mauris.vestibulum@litoratorquent.edu', '085231667066', 'Codó', '1981-05-01', 'Wanita', 'Teknik Mesin'),
(98, 68826719, 'Myles Craft', '284-3891 Eu Avenue', 'urna.Ut@estvitae.co.uk', '081268366030', 'Orsara di Puglia', '1993-06-05', 'Wanita', 'Sistem Informasi'),
(99, 3104880, 'Rowan Stephenson', '389-7846 Magna. Rd.', 'natoque@metusfacilisis.co.uk', '085284738134', 'Sissa', '1985-08-20', 'Pria', 'Telekomunikasi dan Jaringan'),
(100, 10976767, 'Candice Watson', 'Ap #721-3054 Vestibulum Avenue', 'lacus.Nulla@ipsum.net', '085288790747', 'Arrah', '1978-06-25', 'Wanita', 'Teknik Informatika'),
(101, 86544914, 'Colin Stuart', '3719 Dui Avenue', 'id.mollis@Sedegetlacus.ca', '085289542106', 'Incheon', '1966-09-17', 'Pria', 'Telekomunikasi dan Jaringan'),
(102, 42618892, 'Ronan Malone', 'P.O. Box 164, 8900 Eu Avenue', 'sodales.Mauris.blandit@bibendumsed.org', '081247792888', 'Montebello sul Sangro', '1992-08-07', 'Wanita', 'Telekomunikasi dan Jaringan'),
(103, 15910052, 'Gannon Spence', 'P.O. Box 492, 6503 Vestibulum Ave', 'vel.turpis.Aliquam@interdum.org', '081251476726', 'Workum', '1983-02-14', 'Wanita', 'Sistem Informasi'),
(104, 95176566, 'Travis Wyatt', '490-2240 Eu Avenue', 'convallis@Sed.edu', '089503617589', 'Huaral', '1967-04-03', 'Pria', 'Telekomunikasi dan Jaringan'),
(105, 15510718, 'Alexa Gilmore', '604 Arcu. Av.', 'Duis.ac@semperpretium.net', '081240312352', 'Ternate', '1975-12-09', 'Pria', 'Teknik Informatika'),
(106, 30648122, 'Sasha Frank', '869-3275 Consectetuer Road', 'sagittis.placerat@tristique.edu', '085269254840', 'Colleretto Castelnuovo', '1983-11-21', 'Wanita', 'Sastra Inggris'),
(107, 61674243, 'Bevis Harper', 'P.O. Box 874, 8914 Penatibus St.', 'nec@Nuncmauriselit.co.uk', '085218203282', 'Houdemont', '1991-09-30', 'Wanita', 'Telekomunikasi dan Jaringan'),
(108, 72067219, 'Hop Obrien', '199-5052 Posuere Ave', 'arcu@ullamcorpereueuismod.com', '081267663453', 'Kolmont', '1994-07-15', 'Wanita', 'Teknik Informatika'),
(109, 34557712, 'Eaton Gomez', 'P.O. Box 779, 8454 Ipsum St.', 'Etiam.vestibulum@augueeutempor.com', '081247908024', 'Mönchengladbach', '1978-12-24', 'Wanita', 'Teknik Mesin'),
(110, 31773939, 'Herrod French', '396-6513 Nec, Ave', 'sem@lectus.org', '081200602588', 'Thiaumont', '1974-10-19', 'Pria', 'Telekomunikasi dan Jaringan'),
(111, 9715722, 'Reece Moss', '561-691 Sed Street', 'enim@fringilla.net', '085245125785', 'Notre-Dame-du-Nord', '1981-06-30', 'Pria', 'Sistem Informasi'),
(112, 11660190, 'Aubrey Tucker', '5136 Erat Street', 'et@atliberoMorbi.co.uk', '081262726478', 'Bunbury', '1997-08-01', 'Wanita', 'Sistem Informasi'),
(113, 68134588, 'Julian Flores', 'Ap #314-6657 Quis, Ave', 'orci.quis@hymenaeos.net', '089521758268', 'Salcito', '1999-07-27', 'Wanita', 'Sistem Informasi'),
(114, 92038654, 'Hope Mccoy', '6735 Quisque Ave', 'arcu.Curabitur@magnaaneque.com', '081260217166', 'Kerkhove', '1971-11-04', 'Pria', 'Teknik Mesin'),
(115, 66083179, 'Lenore Sargent', '474-9019 Tristique Rd.', 'mauris@semelit.net', '085225468261', 'Poppel', '1986-12-12', 'Wanita', 'Sistem Informasi'),
(116, 27517667, 'Bree Chan', '9365 Lacus. Road', 'gravida.non@tortor.net', '085247566727', 'Narowal', '1993-10-25', 'Wanita', 'Sastra Inggris'),
(117, 13555790, 'Abigail Chandler', 'Ap #721-2977 Quis Ave', 'dolor@Cumsociisnatoque.ca', '081217634619', 'Chicoutimi', '1998-01-20', 'Pria', 'Teknik Mesin'),
(118, 39763089, 'Lillith Martin', 'Ap #278-1726 Dignissim. Rd.', 'orci.lacus@velpede.net', '089512810140', 'Soledad de Graciano Sánchez', '1971-10-27', 'Pria', 'Telekomunikasi dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` varchar(5) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(1) NOT NULL,
  `smt` int(1) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`, `sks`, `smt`, `nama_prodi`) VALUES
('TI1', 'Algoritma dan Pemrograman Dasar I', 2, 1, 'Teknik Informatika'),
('TI1', 'Algoritma dan Pemrograman Dasar I', 2, 1, 'Sistem Informasi'),
('TI2', 'Pemrograman Visual I', 2, 1, 'Teknik Informatika'),
('TI2', 'Pemrograman Visual I', 2, 1, 'Sistem Informasi'),
('TI3', 'Sistem Basis Data I', 3, 2, 'Sistem Informasi'),
('TI3', 'Sistem Basis Data I', 3, 2, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(3) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_fakultas`) VALUES
(1, 'SI', 'Sistem Informasi', 'Teknik Informatika'),
(2, 'TI', 'Teknik Informatika', 'Teknik Informatika'),
(3, 'DG', 'Desain Grafis', 'Seni Rupa dan Desain'),
(4, 'DP', 'Desain Produk', 'Seni Rupa dan Desain'),
(5, 'SIN', 'Sastra Inggris', 'Sastra dan Budaya'),
(6, 'SJ', 'Sastra Jepang', 'Sastra dan Budaya'),
(7, 'TS', 'Teknik Sipil', 'Teknik'),
(8, 'TE', 'Teknik Elektro', 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_sessions`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin', 'N', ''),
(2, 'angga', '827ccb0eea8a706c4c34a16891f84e7b', '222180023@student.unaki.ac.id', 'admin', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
