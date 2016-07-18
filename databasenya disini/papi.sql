-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jun 2015 pada 22.49
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `papi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `province_id` (`province_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `districts`
--

INSERT INTO `districts` (`id`, `name`, `location`, `province_id`, `created_at`, `updated_at`) VALUES
(2, 'Bogor Kota', '', 1, '0000-00-00', '0000-00-00'),
(3, 'Solo', '', 2, '0000-00-00', '0000-00-00'),
(4, 'Pasuruan', '', 3, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'Admin', '0000-00-00', '0000-00-00'),
(1, 'Investor', '0000-00-00', '0000-00-00'),
(2, 'Land Owner', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_path_id` (`image_path_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `image_path_id`, `created_at`, `updated_at`) VALUES
(0, 0, '2015-06-05', '2015-06-05'),
(5, 3, '2015-05-30', '2015-05-30'),
(7, 5, '2015-05-30', '2015-05-30'),
(8, 6, '2015-05-31', '2015-05-31'),
(9, 7, '2015-05-31', '2015-05-31'),
(10, 8, '2015-05-31', '2015-05-31'),
(11, 9, '2015-05-31', '2015-05-31'),
(12, 10, '2015-05-31', '2015-05-31'),
(13, 11, '2015-05-31', '2015-05-31'),
(14, 12, '2015-05-31', '2015-05-31'),
(15, 13, '2015-05-31', '2015-05-31'),
(16, 14, '2015-05-31', '2015-05-31'),
(17, 15, '2015-05-31', '2015-05-31'),
(18, 16, '2015-05-31', '2015-05-31'),
(19, 17, '2015-05-31', '2015-05-31'),
(20, 18, '2015-05-31', '2015-05-31'),
(21, 19, '2015-05-31', '2015-05-31'),
(22, 20, '2015-05-31', '2015-05-31'),
(23, 21, '2015-05-31', '2015-05-31'),
(24, 22, '2015-05-31', '2015-05-31'),
(25, 23, '2015-05-31', '2015-05-31'),
(26, 24, '2015-05-31', '2015-05-31'),
(27, 25, '2015-06-02', '2015-06-02'),
(28, 30, '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images_paths`
--

CREATE TABLE IF NOT EXISTS `images_paths` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `path` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `images_paths`
--

INSERT INTO `images_paths` (`id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(0, 'default', 'default.jpg', '2015-06-05', '2015-06-04'),
(3, '1432971663', '1432971663.jpeg', '2015-05-30', '2015-05-30'),
(5, '1432972016', '1432972016.jpeg', '2015-05-30', '2015-05-30'),
(6, '1433055623', '1433055623.jpeg', '2015-05-31', '2015-05-31'),
(7, '1433055761', '1433055761.jpeg', '2015-05-31', '2015-05-31'),
(8, '1433055895', '1433055895.jpeg', '2015-05-31', '2015-05-31'),
(9, '1433056057', '1433056057.jpeg', '2015-05-31', '2015-05-31'),
(10, '1433056116', '1433056116.jpeg', '2015-05-31', '2015-05-31'),
(11, '1433056198', '1433056198.jpeg', '2015-05-31', '2015-05-31'),
(12, '1433056272', '1433056272.png', '2015-05-31', '2015-05-31'),
(13, '1433056333', '1433056333.jpeg', '2015-05-31', '2015-05-31'),
(14, '1433056404', '1433056404.jpeg', '2015-05-31', '2015-05-31'),
(15, '1433101369', '1433101369.jpeg', '2015-05-31', '2015-05-31'),
(16, '1433101386', '1433101386.jpeg', '2015-05-31', '2015-05-31'),
(17, '1433101451', '1433101451.jpeg', '2015-05-31', '2015-05-31'),
(18, '1433101576', '1433101576.jpeg', '2015-05-31', '2015-05-31'),
(19, '1433101603', '1433101603.jpeg', '2015-05-31', '2015-05-31'),
(20, '1433101636', '1433101636.jpeg', '2015-05-31', '2015-05-31'),
(21, '1433101668', '1433101668.jpeg', '2015-05-31', '2015-05-31'),
(22, '1433101728', '1433101728.jpeg', '2015-05-31', '2015-05-31'),
(23, '1433102031', '1433102031.jpeg', '2015-05-31', '2015-05-31'),
(24, '1433102180', '1433102180.jpeg', '2015-05-31', '2015-05-31'),
(25, '1433267335', '1433267335.jpeg', '2015-06-02', '2015-06-02'),
(26, '1433367329', '1433367329.jpeg', '2015-06-03', '2015-06-03'),
(27, '1433367349', '1433367349.jpeg', '2015-06-03', '2015-06-03'),
(28, '1433367403', '1433367403.jpeg', '2015-06-03', '2015-06-03'),
(29, '1433367429', '1433367429.jpeg', '2015-06-03', '2015-06-03'),
(30, '1433533989', '1433533989.jpeg', '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lands`
--

CREATE TABLE IF NOT EXISTS `lands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `wide` int(11) NOT NULL,
  `description` text NOT NULL,
  `district_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image_id` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `lands`
--

INSERT INTO `lands` (`id`, `name`, `wide`, `description`, `district_id`, `price`, `image_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kebun Raya Bogor', 100, 'Kebun Raya Bogor atau Kebun Botani Bogor adalah sebuah kebun botani besar yang terletak di Kota Bogor, Indonesia. Luasnya mencapai 87 hektaree dan memiliki 15.000 jenis koleksi pohon dan tumbuhan. <b>Wikipedia\r\nAlamat: Jalan Ir. Haji Juanda No.13, 16122, Indonesia</b>', 2, 1000000, 19, 7, '2015-05-31', '2015-06-03'),
(5, 'Kebun Pasir Mukti', 1000, 'Kebun Wisata Pasirmukti dengan lahan seluas 15 ha adalah kebun wisata agro yang ramah lingkungan dengan panorama hamparan sawah diantara kebun buah dan kolam pancing ikan. Terletak diantara Desa Tajur, Pasirmukti, dan Gunung Sari, Kecamatan Citeureup, Bogor, Jawa Barat. Kebun Wisata Pasir- mukti dapat ditempuh ± 60 menit dari Jakarta.\r\nJam operasional Kebun Wisata Pasirmukti adalah pukul 08.00 – 17.00 WIB setiap hari.', 2, 12000000, 24, 7, '2015-05-31', '2015-05-31'),
(6, 'Kebun Buah Mangunan', 1000, 'Kebun Buah mangunan terletak di Mangunan, Kecamatan Dlingo, Kabupaten Bantul. Lokasi ini berjarak sekitar 15 km dari ibukota Kabupaten Bantul dan 35 km dari pusat Kota Yogyakarta. Lokasi ini mulai dibangun oleh Permerintah Kabupaten Bantul pada Tahun 2003 di atas seluas 23,3415 hektar pada ketinggian 150-200m diatas permukaan laut. Titik ketinggian tersebut membuat kawasan ini memiliki udara yang sejuk serta pemandangan pegunungan seribu.\r\n\r\nWisatawan dapat menikmati pemandangan yang sangat indah dari Kebun Buah Mangunan yaitu Pantai Parangritis pada bagian selatan, pemandangan Kota Bantul yang berada di bagian barat serta keelokan sungai oyo yang sangat curam. Banyak populasi monyet yang juga terdapat di lokasi ini yang dapat menjadi salah satu potensi wisata.\r\n\r\nPotensi wisata yang bisa dilakukan wisatawan di sini adalah mengamati berbagai macam buah-buahan yang ditata dengan apik sesuai dengan kondisi kemiringan bukit mangunan antara lain  durian, mangga, rambutan, jambu air, jeruk, sawo, duku, serta manggis. Di samping itu terdapat pula buah-buahan lain yang jumlahnya relatif sedikit seperti  matoa, kelengkeng, jambu biji, cempedak dan belimbing. Untuk menambah kesejukan selain tanaman buah-buahan terdapat pula tanaman jati, king grass, pagar hidup berupa salak, magium dan pinus.\r\n\r\nUntuk melengkapi disana juga terdapat pembibitan sapi. Tujuan dari adanya pembibitan sapi ini yaitu selain untuk menambah populasi ternak sapi juga agar terjadi siklus yang berkesinambungan antara ternak sapi yang menghasilkan pupuk kandang untuk pemeliharaan tanaman buah-buahan di Kebun Buah Mangunan.\r\n\r\nFasilitas yang dimiliki oleh kawasan wisata ini antara lain penginapan/homestay, Gedung Pertemuan, Kolam Renang, serta Kantor Managemen. Lokasi ini merupakan potensi wisata yang dimiliki oleh Kabupaten bantul sebagaimana yang tertulis di arsip wisata Kabupaten Bantul Yogyakarta.\r\n\r\nSaat ini kebun buah yang terletak di selatan Yogyakarta ini perlu mendapatkan perhatian serius. Salah satunya karena jumlah sapi yang berkurang dari 60 menjadi 40 ekor. Penyebabnya selain karena mati juga dijual. \r\n\r\nSelain menawarkan wisata edukasi, kebun buah Mangunan juga memberikan pemandangan alam berupa pegunungan. Kebun yang ada di perbatasan kecamatan Dlingo dan Imogiri, Bantul itu pas untuk mengisi liburan natal dan tahun baru. Salah satu lokasi menarik ada di gardu pandang. Disana wisatawan bisa melihat sungai Oya dari kejauhan serta beberapa perbukitan. ', 3, 1000000, 25, 7, '2015-05-31', '2015-05-31'),
(7, 'Kebun Teh Kemuning', 100, 'Kebun Teh Kemuning Kebun Teh Kemuning Kebun Teh Kemuning Kebun Teh Kemuning Kebun Teh Kemuning Kebun Teh Kemuning', 3, 1000000, 26, 7, '2015-05-31', '2015-05-31'),
(8, 'Perkebunan Apel', 100, 'Wisata agro perkebunan Apel ini terletak di desa Andonosari, Kecamatan Tutur, sekitar 40 Km dari pusat kota Pasuruan. \r\n\r\nSaat memasuki area perekebunan ini, hanya dengan sekali bayar untuk tiket masuk, pengunjung yang datang ke perkebunan ini bisa menikmati luasnya perkebunan apel dan bisa memetik dan memakan langsung buah apel di setiap pohon yang ada.\r\n\r\nPerkebunan apel desa Tutur memiliki luas sekitar 1100 hektar dan terdiri dari berbagai jeni apel seperti Manalagi, Rhomebeauty dan Wanle. Obyek wisata ini sangant cocok untuk dikunjungi sebagai wahana rekreasi keluarga dan bisa dijangkau dengan mudah karena letaknya yang strategis.', 4, 1000000, 28, 4, '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lands_transactions`
--

CREATE TABLE IF NOT EXISTS `lands_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `wide` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('BELUM_DIBAYAR','DIBAYAR','CANCELLED') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `lands_transactions`
--

INSERT INTO `lands_transactions` (`id`, `user_id`, `land_id`, `wide`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 10, 10000000, 'DIBAYAR', '2015-05-31', '2015-06-05'),
(2, 3, 6, 10, 10000000, 'BELUM_DIBAYAR', '2015-06-02', '2015-06-02'),
(3, 6, 6, 10, 10000000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05'),
(4, 3, 7, 10, 10000000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05'),
(5, 6, 1, 100, 100000000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05'),
(6, 6, 8, 10, 10000000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05'),
(7, 3, 8, 10, 10000000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plants`
--

CREATE TABLE IF NOT EXISTS `plants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `land_transaction_id` int(11) NOT NULL,
  `seed_transaction_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `plants`
--

INSERT INTO `plants` (`id`, `user_id`, `land_transaction_id`, `seed_transaction_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 21, '2015-06-05', '2015-06-05'),
(3, 3, 4, 23, '2015-06-05', '2015-06-05'),
(4, 3, 2, 22, '2015-06-05', '2015-06-05'),
(5, 3, 4, 22, '2015-06-06', '2015-06-05'),
(6, 6, 6, 26, '2015-06-05', '2015-06-05'),
(7, 3, 7, 21, '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plants_updates`
--

CREATE TABLE IF NOT EXISTS `plants_updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plant_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` set('Male','Female','Other') DEFAULT NULL,
  `emission` int(11) NOT NULL,
  `image_path_id` int(11) NOT NULL DEFAULT '0',
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `email`, `name`, `address`, `gender`, `emission`, `image_path_id`, `updated_at`, `created_at`) VALUES
(7, 'aswinda.pp@gmail.com', 'Aswinda Prima Putra', 'Jl.Jalan', 'Male', 0, 0, '2015-06-04', '2015-05-27'),
(8, 'addinul.masri@gmail.com', 'Addinul Masri', '', 'Other', 0, 0, '2015-05-27', '2015-05-27'),
(9, 'guswandi@gmail.com', 'Guswandi', '', '', 0, 0, '2015-05-27', '2015-05-27'),
(10, 'adi@gmail.com', 'adi', '', '', 0, 0, '2015-05-29', '2015-05-29'),
(14, 'coba@gmail.com', 'Coba', 'Coba', 'Male', 0, 0, '2015-06-03', '2015-06-03'),
(15, 'investor@gmail.com', 'Investor', '', NULL, 0, 0, '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', '0000-00-00', '0000-00-00'),
(2, 'Jawa Tengah', '0000-00-00', '0000-00-00'),
(3, 'Jawa Timur', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seeds`
--

CREATE TABLE IF NOT EXISTS `seeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image_id` int(11) DEFAULT '0',
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `seeds`
--

INSERT INTO `seeds` (`id`, `name`, `description`, `stock`, `price`, `image_id`, `updated_at`, `created_at`) VALUES
(1, 'Jagung', 'Jagung (Zea mays ssp. mays) adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi percobaan', 100, 15000, 5, '2015-06-02', '2015-05-30'),
(2, 'Kelapa Sawit', 'Kelapa sawit (Elaeis) adalah tumbuhan industri penting penghasil minyak masak, minyak industri, maupun bahan bakar (biodiesel)', 50, 10000, 7, '2015-05-30', '2015-05-30'),
(3, 'Zaitun', 'Zaitun (Olea europaea) adalah pohon kecil tahunan dan hijau abadi, yang buah mudanya dapat dimakan mentah ataupun sesudah diawetkan sebagai penyegar. Buahnya yang tua diperas dan minyaknya diekstrak menjadi minyak zaitun yang dapat dipergunakan untuk berbagai macam keperluan. Zaitun adalah anggota suku Oleaceae.', 10, 10000, 8, '2015-05-31', '2015-05-31'),
(4, 'Kacang Tanah', 'Kacang tanah (Arachis hypogaea L.) adalah tanaman polong-polongan atau legum anggota suku Fabaceae yang dibudidayakan, serta menjadi kacang-kacangan kedua terpenting setelah kedelai di Indonesia.[1] Tanaman yang berasal dari benua Amerika ini tumbuh secara perdu setinggi 30 hingga 50 cm (1 hingga 1½ kaki) dengan daun-daun kecil tersusun majemuk.', 10, 10000, 9, '2015-05-31', '2015-05-31'),
(5, 'Karet', 'Pohon karet para pertama kali hanya tumbuh di Amerika Selatan. Setelah percobaan berkali-kali yang dilakukan oleh Henry Wickham, pohon ini berhasil dikembangkan di Asia Tenggara, di mana sekarang ini tanaman ini banyak dikembangkan. Sekarang Asia merupakan sumber karet alami.', 10, 10000, 10, '2015-05-31', '2015-05-31'),
(6, 'Durian', 'Durian adalah nama tumbuhan tropis yang berasal dari wilayah Asia Tenggara, sekaligus nama buahnya yang bisa dimakan. Nama ini diambil dari ciri khas kulit buahnya yang keras dan berlekuk-lekuk tajam sehingga menyerupai duri. Sebutan populernya adalah "raja dari segala buah" (King of Fruit). Durian adalah buah yang kontroversial, meskipun banyak orang yang menyukainya, namun sebagian yang lain malah muak dengan aromanya.', 5, 10000, 11, '2015-05-31', '2015-05-31'),
(7, 'Tin', 'Tin atau Ara (Ficus carica L.) adalah sejenis tumbuhan penghasil buah-buahan yang dapat dimakan yang berasal dari Asia Barat. Buahnya bernama sama. Nama "Tin" diambil dari bahasa Arab, juga dikenal dengan nama "Ara" (buah ara / pohon ara) sedangkan dalam bahasa Inggris disebut fig (common fig; "pohon ara umum"), sebenarnya masih termasuk kerabat pohon beringin dari dari genus yang sama, yaitu Ficus.', 6, 12300, 12, '2015-05-31', '2015-05-31'),
(8, 'Kurma', 'Kurma , (Arab: ????, Tamr; nama latin Phoenix dactylifera) adalah tanaman palma (Arecaceae) dalam genus Phoenix, buahnya dapat dimakan. Walaupun tempat asalnya tidak diketahui karena telah sejak lama dibudidayakan, kemungkinan tanaman ini berasal dari tanah sekitar Teluk Persia[1]. Pohonnya berukuran sedang dengan tinggi sekitar 15-25 m, tumbuh secara tunggal atau membentuk rumpun pada sejumlah batang dari sebuah sistem akar tunggal. Daunnya memiliki panjang 3-5 m, dengan duri pada tangkai daun, menyirip dan mempunyai sekitar 150 pucuk daun muda; daun mudanya berukuran dengan panjang 30 cm dan lebar 2 cm. Rentangan penuh mahkotanya berkisar dari 6-10 m.', 40, 10000, 13, '2015-05-31', '2015-05-31'),
(9, 'Delima', 'Delima (punica granatum) adalah tanaman buah-buahan yang dapat tumbuh hingga 5–8 m. Tanaman ini diperkirakan berasal dari Iran, namun telah lama dikembangbiakkan di daerah Mediterania. Bangsa Moor memberi nama salah satu kota kuno di Spanyol, Granada berdasarkan nama buah ini. Tanaman ini juga banyak ditanam di daerah Cina Selatan dan Asia Tenggara.\r\n\r\nDelima berasal dari Timur Tengah, tersebar di daerah subtropik sampai tropik, dari dataran rendah sampai di bawah 1.000 m dpl. Tumbuhan ini menyukai tanah gembur yang tidak terendam air, dengan air tanah yang tidak dalam. Delima sering ditanam di kebun-kebun sebagai tanaman hias, tanaman obat, atau karena buahnya yang dapat dimakan.\r\n\r\nBentuk pohon perdu atau pohon kecil dengan tinggi 2–5 m. Batang berkayu, ranting bersegi, percabangan banyak, lemah, berduri pada ketiak daunnya, cokelat ketika masih muda, dan hijau kotor setelah tua. Daun tunggal, bertangkai pendek, letaknya berkelompok. Helaian daun bentuknya lonjong sampai lanset, pangkal lancip, ujung tumpul, tepi rata, pertulangan menyirip, permukaan mengkilap, panjang 1–9 cm, lebar 0,5–2,5 cm, warnanya hijau.\r\n\r\nBunga tunggal bertangkai pendek, keluar di ujung ranting atau di ketiak daun yang paling atas. Biasanya, terdapat satu sampai lima bunga, warnanya merah, putih, atau ungu. Berbunga sepanjang tahun. Buahnya buah buni, bentuknya bulat dengan diameter 5–12 cm, warna kulitnya beragam, seperti hijau keunguan, putih, cokelat kemerahan, atau ungu kehitaman. Kadang, terdapat bercak-bercak yang agak menonjol berwarna tebih tua. Bijinya banyak, kecil-kecil, bentuknya bulat panjang yang bersegi-segi agak pipih, keras, tersusun tidak beraturan, warnanya merah, merah jambu, atau putih.', 14, 47000, 14, '2015-05-31', '2015-05-31'),
(10, 'Anggur', 'Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae.[1] Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung.[1] Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya.[2] Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.[3][4]\r\n\r\nTanaman ini sudah dibudidayakan sejak tahun 4000 SM di Timur Tengah.[1] Akan tetapi, proses pengolahan buah anggur menjadi minuman anggur baru ditemukan pada tahun 2500 SM oleh bangsa Mesir.[1] Hanya beberapa waktu berselang, proses pengolahan ini segera tersebar luas ke berbagai penjuru dunia, mulai dari daerah di Laut Hitam, Spanyol, Jerman, Perancis, dan Austria.[1] Penyebaran buah ini berkembang samakin pesat dengan adanya perjalanan Colombus yang membawa buah ini mengitari dunia.[1]', 10, 10000, 15, '2015-05-31', '2015-05-31'),
(11, 'Kelengkeng', 'Lengkeng (juga disebut kelengkeng, matakucing, longan, atau duku,[butuh rujukan] Dimocarpus longan, suku lerak-lerakan atau Sapindaceae) adalah tanaman buah-buahan yang berasal dari daratan Asia Tenggara.\r\nPohon lengkeng dapat mencapai tinggi 40 m dan diameter batangnya hingga sekitar 1 m. Berdaun majemuk, dengan 2-4(-6) pasang anak daun, sebagian besar berbulu rapat pada bagian aksialnya. Tangkai daun 1–20 cm, tangkai anak daun 0,5-3,5 cm. Anak daun bulat memanjang, panjang lk. 1-5 kali lebarnya, bervariasi 3-45 × 1,5–20 cm, mengertas sampai menjangat, dengan bulu-bulu kempa terutama di sebalah bawah di dekat pertulangan daun.\r\n\r\nPerbungaan umumnya di ujung (flos terminalis), 4–80 cm panjangnya, lebat dengan bulu-bulu kempa, bentuk payung menggarpu. Mahkota bunga lima helai, panjang hingga 6 mm.\r\n\r\nBuah bulat, coklat kekuningan, hampir gundul; licin, berbutir-butir, berbintil kasar atau beronak, bergantung pada jenisnya. Daging buah (arilus) tipis berwarna putih dan agak bening. Pembungkus biji berwarna coklat kehitaman, mengkilat. Terkadang berbau agak keras.', 10, 10000, 16, '2015-05-31', '2015-05-31');
INSERT INTO `seeds` (`id`, `name`, `description`, `stock`, `price`, `image_id`, `updated_at`, `created_at`) VALUES
(12, 'Apple', '<div><span>Apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It iscultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today. Apples have been grown for thousands of years in Asia and Europe, and were brought to North America by European colonists. Apples have religious and mythological significance in many cultures, including Norse, Greek and European Christian traditions.<br><br>Apple trees are large if grown from seed, but small if grafted onto roots (rootstock). There are more than 7,500 known&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/List_of_apple_cultivars">cultivars of apples</a>, resulting in a range of desired characteristics. Different cultivars are bred for various tastes and uses, including&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cooking_apple">cooking</a>, eating raw and<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple_cider">cider production</a>. Apples are generally propagated by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Grafting">grafting</a>, although wild apples grow readily from seed. Trees and fruit are prone to a number of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Fungus">fungal</a>,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Bacteria">bacterial</a>&nbsp;and pest problems, which can be controlled by a number of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Organic_farming">organic</a>&nbsp;and non-organic means. In 2010, the fruit''s&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Genome">genome</a>&nbsp;was decoded as part of research on disease control and selective breeding in apple production.<br><br>About 69&nbsp;million tons of apples were grown worldwide in 2010, and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/China">China</a>&nbsp;produced almost half of this total. The&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/United_States">United States</a>&nbsp;is the second-leading producer, with more than 6% of world production.&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Turkey">Turkey</a>&nbsp;is third, followed by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Italy">Italy</a>,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/India">India</a>&nbsp;and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Poland">Poland</a>. Apples are often eaten raw, but can also be found in many prepared foods (especially desserts) and drinks. Many beneficial health effects are thought to result from eating apples; however, two types of allergies are attributed to various proteins found in the fruit.<br><br>Botanical information<br><br>The apple is a&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Deciduous">deciduous</a>&nbsp;tree, generally standing 1.8 to 4.6&nbsp;m (6 to 15&nbsp;ft) tall in cultivation and up to 39&nbsp;ft (12&nbsp;m) in the wild.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-3">[3]</a>&nbsp;When cultivated, the size, shape and branch density are determined by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Rootstock">rootstock</a>&nbsp;selection and trimming method. The&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Leaf">leaves</a>&nbsp;are&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Leaf_arrangement">alternately arranged</a>&nbsp;dark green-colored simple ovals with serrated margins and slightly downy undersides.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a><br><br><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Blossoms">Blossoms</a>&nbsp;are produced in spring simultaneously with the budding of the leaves, and are produced on spurs and some long shoots. The 3 to 4&nbsp;cm (1.2 to 1.6&nbsp;in) flowers are white with a pink tinge that gradually fades, five&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Petal">petaled</a>, with an&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Inflorescence">inflorescence</a>&nbsp;consisting of a&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cyme_(botany)">cyme</a>&nbsp;with 4–6 flowers. The central flower of the inflorescence is called the "king bloom"; it opens first, and can develop a larger fruit.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-5">[5]</a><br>The fruit matures in late summer or autumn, and varieties exist with a wide range of sizes. Commercial growers aim to produce an apple that is 7.0 to 8.3&nbsp;cm (2.75 to 3.25&nbsp;in) in diameter, due to market preference. Some consumers, especially those in Japan, prefer a larger apple, while apples below 5.7&nbsp;cm (2.25&nbsp;in) are generally used for making juice and have little fresh market value. The skin of ripe apples is generally red, yellow, green, pink, or russetted although many bi- or tri-colored varieties may be found.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Janick-6">[6]</a>&nbsp;The skin may also be wholly or partly russeted i.e. rough and brown. The skin is covered in a protective layer of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Epicuticular_wax">epicuticular wax</a>,<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-7">[7]</a>&nbsp;The flesh is generally pale yellowish-white,<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Janick-6">[6]</a>&nbsp;though pink or yellow flesh is also known.<br>Wild ancestors<br>The original wild&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Ancestor">ancestor</a>&nbsp;of&nbsp;<i>Malus domestica</i>&nbsp;was&nbsp;<i>Malus sieversii</i>, found growing wild in the mountains of Central Asia in southern Kazakhstan, Kyrgyzstan, Tajikistan, and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Xinjiang">Xinjiang</a>, China.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Architecture_and_size_relations:_an_essay_on_the_apple_.28Malus_x_domestica.2C_Rosaceae.29_tree-8">[8]</a>&nbsp;Cultivation of the species, most likely beginning on the forested flanks of the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Tian_Shan">Tian Shan</a>&nbsp;mountains, progressed over a long period of time and permitted secondary&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Introgression">introgression</a>&nbsp;of genes from other species into the open-pollinated seeds. Significant exchange with&nbsp;<i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Malus_sylvestris">Malus sylvestris</a></i>, the crabapple, resulted in current populations of apples being more related to crabapples than to the more morphologically similar progenitor&nbsp;<i>Malus sieversii</i>. In strains without recent admixture the contribution of the latter predominates.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-9">[9]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-10">[10]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Coart-11">[11]</a><br>Genome<br>In 2010, an Italian-led consortium announced they had decoded the complete&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Genome">genome</a>&nbsp;of the apple in collaboration with horticultural genomicists at&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Washington_State_University">Washington State University</a>,<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-12">[12]</a>&nbsp;using the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Golden_delicious">Golden delicious</a>&nbsp;variety.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-13">[13]</a>&nbsp;It had about 57,000 genes, the highest number of any plant genome studied to date<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-14">[14]</a>&nbsp;and more genes than the human genome (about 30,000).<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-15">[15]</a>&nbsp;This new understanding of the apple genome will help scientists in identifying genes and gene variants that contribute to resistance to disease and drought, and other desirable characteristics. Understanding the genes behind these characteristics will allow scientists to perform more knowledgeable selective breeding. Decoding the genome also provided proof that&nbsp;<i>Malus sieversii</i>&nbsp;was the wild ancestor of the domestic apple—an issue that had been long-debated in the scientific community.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-16">[16]</a><br>History<br>The center of diversity of the genus&nbsp;<i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Malus">Malus</a></i>&nbsp;is in eastern&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Turkey">Turkey</a>. The apple tree was perhaps the earliest tree to be cultivated,<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app6-17">[17]</a>&nbsp;and its fruits have been improved through selection over thousands of years.&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Alexander_the_Great">Alexander the Great</a>&nbsp;is credited with finding dwarfed apples in<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Kazakhstan">Kazakhstan</a>&nbsp;in 328&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/BCE">BCE</a>;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a>&nbsp;those he brought back to Macedonia might have been the progenitors of dwarfing root stocks. Winter apples, picked in late autumn and stored just above freezing, have been an important food in Asia and Europe for millennia.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app6-17">[17]</a><br>Apples were brought to North America by colonists in the 17th century,<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a>&nbsp;and the first apple orchard on the North American continent was planted in&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Boston">Boston</a>&nbsp;by Reverend&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/William_Blaxton">William Blaxton</a>&nbsp;in 1625.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-18">[18]</a>&nbsp;The only apples native to North America are crab apples, which were once called "common apples".<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-lawrence122-19">[19]</a>&nbsp;Apple varieties brought as seed from Europe were spread along Native American trade routes, as well as being cultivated on Colonial farms. An 1845 United States apples nursery catalogue sold 350 of the "best" varieties, showing the proliferation of new North American varieties by the early 19th century.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-lawrence122-19">[19]</a>&nbsp;In the 20th century, irrigation projects in&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Eastern_Washington">Eastern Washington</a>began and allowed the development of the multibillion dollar fruit industry, of which the apple is the leading product.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a><br>Until the 20th century, farmers stored apples in&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Root_cellar">frostproof cellars</a>&nbsp;during the winter for their own use or for sale. Improved transportation of fresh apples by train and road replaced the necessity for storage.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-20">[20]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-21">[21]</a>&nbsp;In the 21st century, long-term storage again came into popularity, as "controlled atmosphere" facilities were used to keep apples fresh year-round. Controlled atmosphere facilities use high humidity, low oxygen, and controlled carbon dioxide levels to maintain fruit freshness.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-22">[22]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-23">[23]</a><br>Cultural aspects<br>Germanic paganism<br>In&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Norse_mythology">Norse mythology</a>, the goddess&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/I%C3%B0unn">Iðunn</a>&nbsp;is portrayed in the&nbsp;<i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Prose_Edda">Prose Edda</a></i>&nbsp;(written in the 13th century by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Snorri_Sturluson">Snorri Sturluson</a>) as providing apples to the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Gods">gods</a>that give them&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Eternal_youth">eternal youthfulness</a>. English scholar&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/H._R._Ellis_Davidson">H. R. Ellis Davidson</a>&nbsp;links apples to religious practices in&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Germanic_paganism">Germanic paganism</a>, from which&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Norse_paganism">Norse paganism</a>&nbsp;developed. She points out that buckets of apples were found in the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Oseberg_ship">Oseberg ship</a>&nbsp;burial site in Norway, and that fruit and nuts (Iðunn having been described as being transformed into a nut in&nbsp;<i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Sk%C3%A1ldskaparm%C3%A1l">Skáldskaparmál</a></i>) have been found in the early graves of the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Germanic_peoples">Germanic peoples</a>&nbsp;in England and elsewhere on the continent of Europe, which may have had a symbolic meaning, and that nuts are still a recognized symbol of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Fertility">fertility</a>&nbsp;in southwest England.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-autogenerated1-24">[24]</a><br>Davidson notes a connection between apples and the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Vanir">Vanir</a>, a tribe of gods associated with&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Fertility">fertility</a>&nbsp;in Norse mythology, citing an instance of eleven "golden apples" being given to woo the beautiful&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Ger%C3%B0r">Gerðr</a>&nbsp;by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Sk%C3%ADrnir">Skírnir</a>, who was acting as messenger for the major Vanir god&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Freyr">Freyr</a>&nbsp;in stanzas 19 and 20 of<i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Sk%C3%ADrnism%C3%A1l">Skírnismál</a></i>. Davidson also notes a further connection between fertility and apples in Norse mythology in chapter 2 of the&nbsp;<i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/V%C3%B6lsunga_saga">Völsunga saga</a></i>&nbsp;when the major goddess&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Frigg">Frigg</a>&nbsp;sends King&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Rerir">Rerir</a>&nbsp;an apple after he prays to Odin for a child, Frigg''s messenger (in the guise of a crow) drops the apple in his lap as he sits atop a&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Tumulus">mound</a>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-DAVIDSON165-166-25">[25]</a>&nbsp;Rerir''s wife''s consumption of the apple results in a six-year pregnancy and the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Caesarean_section">Caesarean section</a>&nbsp;birth of their son—the hero&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/V%C3%B6lsung">Völsung</a>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-DAVIDSONROLES146-147-26">[26]</a><br>Further, Davidson points out the "strange" phrase "Apples of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Hel_(location)">Hel</a>" used in an 11th-century poem by the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Skald">skald</a>&nbsp;Thorbiorn Brúnarson. She states this may imply that the apple was thought of by Brúnarson as the food of the dead. Further, Davidson notes that the potentially Germanic goddess&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Nehalennia">Nehalennia</a>&nbsp;is sometimes depicted with apples and that parallels exist in early Irish stories. Davidson asserts that while cultivation of the apple in Northern Europe extends back to at least the time of the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Roman_Empire">Roman Empire</a>&nbsp;and came to Europe from the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Near_East">Near East</a>, the native varieties of apple trees growing in Northern Europe are small and bitter. Davidson concludes that in the figure of Iðunn "we must have a dim reflection of an old symbol: that of the guardian goddess of the life-giving fruit of the other world."<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-autogenerated1-24">[24]</a><br>Greek mythology<br>Apples appear in many&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/World_religions">religious traditions</a>, often as a mystical or&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Forbidden_fruit">forbidden fruit</a>. One of the problems identifying apples in religion,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Mythology">mythology</a>&nbsp;and<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Folklore">folktales</a>&nbsp;is that the word "apple" was used as a generic term for all (foreign) fruit, other than berries, including nuts, as late as the 17th century.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app3-27">[27]</a>&nbsp;For instance, in&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Greek_mythology">Greek mythology</a>, the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Greek_hero">Greek hero</a>&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Heracles">Heracles</a>, as a part of his&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Labours_of_Hercules">Twelve Labours</a>, was required to travel to the Garden of the Hesperides and pick the golden apples off the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Hesperides#The_Garden_of_the_Hesperides">Tree of Life</a>&nbsp;growing at its center.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book1-28">[28]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book2-29">[29]</a><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-30">[30]</a><br>The Greek goddess of discord,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Eris_(mythology)">Eris</a>, became disgruntled after she was excluded from the wedding of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Peleus">Peleus</a>&nbsp;and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Thetis">Thetis</a>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-31">[31]</a>&nbsp;In retaliation, she tossed a golden apple inscribed&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Kallisti">????????</a>&nbsp;(<i>Kalliste</i>, sometimes transliterated&nbsp;<i>Kallisti</i>, ''For the most beautiful one''), into the wedding party. Three goddesses claimed the apple:&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Hera">Hera</a>,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Athena">Athena</a>, and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Aphrodite">Aphrodite</a>.&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Paris_(mythology)">Paris</a>&nbsp;of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Troy">Troy</a>&nbsp;was appointed to select the recipient. After being bribed by both Hera and Athena, Aphrodite tempted him with the most beautiful woman in the world,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Helen_of_Troy">Helen</a>&nbsp;of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Sparta">Sparta</a>. He awarded the apple to Aphrodite, thus indirectly causing the<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Trojan_War">Trojan War</a>.<br>The apple was thus considered, in ancient Greece, to be sacred to Aphrodite, and to throw an apple at someone was to symbolically declare one''s love; and similarly, to catch it was to symbolically show one''s acceptance of that love.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-32">[32]</a>&nbsp;An epigram claiming authorship by Plato states:<br>I throw the apple at you, and if you are willing to love me, take it and share your girlhood with me; but if your thoughts are what I pray they are not, even then take it, and consider how short-lived is beauty.<br><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Atalanta">Atalanta</a>, also of Greek mythology, raced all her suitors in an attempt to avoid marriage. She outran all but&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Hippomenes">Hippomenes</a>&nbsp;(also known as&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Melanion">Melanion</a>, a name possibly derived from<i>melon</i>&nbsp;the Greek word for both "apple" and fruit in general),<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book2-29">[29]</a>&nbsp;who defeated her by cunning, not speed. Hippomenes knew that he could not win in a fair race, so he used three golden apples (gifts of Aphrodite, the goddess of love) to distract Atalanta. It took all three apples and all of his speed, but Hippomenes was finally successful, winning the race and Atalanta''s hand.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book1-28">[28]</a><br>The forbidden fruit in the Garden of Eden<br>Though the forbidden fruit of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Garden_of_Eden">Eden</a>&nbsp;in the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Book_of_Genesis">Book of Genesis</a>&nbsp;is not identified, popular Christian tradition has held that it was an apple that&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Adam_and_Eve">Eve</a>&nbsp;coaxed<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Adam_and_Eve">Adam</a>&nbsp;to share with her.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book7-34">[34]</a>&nbsp;The origin of the popular identification with a fruit unknown in the Middle East in biblical times is found in confusion between the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Latin_language">Latin</a>&nbsp;words&nbsp;<i>m?lum</i>&nbsp;(an apple) and&nbsp;<i>m?lum</i>&nbsp;(an evil), each of which is normally written&nbsp;<i>malum</i>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-35">[35]</a>&nbsp;The tree of the forbidden fruit is called "the tree of the knowledge of good and evil" in&nbsp;<a target="_blank" rel="nofollow" href="http://tools.wmflabs.org/bibleversefinder/?book=Genesis&amp;verse=2:17&amp;src=ESV">Genesis 2:17</a>, and the Latin for "good and evil" is&nbsp;<i>bonum et malum</i>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-36">[36]</a><br><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Renaissance">Renaissance</a>&nbsp;painters may also have been influenced by the story of the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Golden_apple">golden apples</a>&nbsp;in the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Hesperides#The_Garden_of_the_Hesperides">Garden of Hesperides</a>. As a result, in the story of Adam and Eve, the apple became a symbol for knowledge, immortality, temptation, the fall of man into sin, and sin itself. The&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Larynx">larynx</a>&nbsp;in the human throat has been called&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Adam%27s_apple">Adam''s apple</a>&nbsp;because of a notion that it was caused by the forbidden fruit remaining in the throat of Adam.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book7-34">[34]</a>&nbsp;The apple as symbol of sexual&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Seduction">seduction</a>&nbsp;has been used to imply human sexuality, possibly in an ironic vein.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book7-34">[34]</a><br>Cultivars<br>There are more than 7,500 known&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cultivar">cultivars</a>&nbsp;of apples.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Elzebroek-37">[37]</a>&nbsp;Cultivars vary in their&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Crop_yield">yield</a>&nbsp;and the ultimate size of the tree, even when grown on the same&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Rootstock">rootstock</a>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-England-38">[38]</a>&nbsp;Different cultivars are available for&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Temperate">temperate</a>&nbsp;and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Subtropical">subtropical</a>&nbsp;climates. The UK''s National Fruit Collection, which is the responsibility of the Department of Environment Food and Rural Affairs, includes a collection of over 2,000 varieties of apple tree in Kent.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-39">[39]</a>&nbsp;The University of Reading, which is responsible for developing the UK national collection database, provides access to search the national collection. The University of Reading''s work is part of the European Cooperative Programme for Plant Genetic Resources of which there are 38 countries participating in the Malus/Pyrus work group.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-40">[40]</a><br>The UK''s national fruit collection database contains a wealth of information on the characteristics and origin of many apples, including alternative names for what is essentially the same ''genetic'' apple variety. Most of these cultivars are bred for eating fresh (dessert apples), though some are cultivated specifically for cooking (<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cooking_apple">cooking apples</a>) or producing&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cider">cider</a>.&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cider_apple">Cider apples</a>&nbsp;are typically too tart and astringent to eat fresh, but they give the beverage a rich flavor that dessert apples cannot.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-apples1-41">[41]</a><br>Commercially popular apple cultivars are soft but crisp. Other desired qualities in modern commercial apple breeding are a colorful skin, absence of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Russet_apple">russeting</a>, ease of shipping, lengthy storage ability, high yields, disease resistance, common apple shape, and developed flavor.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-England-38">[38]</a>&nbsp;Modern apples are generally sweeter than older cultivars, as popular tastes in apples have varied over time. Most North Americans and Europeans favor sweet, subacid apples, but tart apples have a strong minority following.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-World-42">[42]</a>&nbsp;Extremely sweet apples with barely any acid flavor are popular in Asia<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-World-42">[42]</a>&nbsp;and especially&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Indian_Subcontinent">Indian Subcontinent</a>&nbsp;.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-apples1-41">[41]</a></span></div><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Malus_domestica_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-108.jpg"><img width="220" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Malus_domestica_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-108.jpg/220px-Malus_domestica_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-108.jpg" height="276"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Malus_domestica_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-108.jpg"></a></div>Blossoms, fruits, and leaves of the apple tree (<i>Malus domestica</i>)</div></div></div><div>Main article:&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Malus_sieversii">Malus sieversii</a></div><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:95apple.jpeg"><img width="220" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/9/92/95apple.jpeg/220px-95apple.jpeg" height="165"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:95apple.jpeg"></a></div>Wild&nbsp;<i>Malus sieversii</i>&nbsp;apple in Kazakhstan</div></div></div><div>Main article:&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple_(symbolism)">Apple (symbolism)</a></div><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Carl_Larsson_Brita_as_Iduna.jpg"><img width="130" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Carl_Larsson_Brita_as_Iduna.jpg/130px-Carl_Larsson_Brita_as_Iduna.jpg" height="183"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Carl_Larsson_Brita_as_Iduna.jpg"></a></div>"Brita as&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/I%C3%B0unn">Iduna</a>" (1901) by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Carl_Larsson">Carl Larsson</a></div></div></div><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Hercules_Musei_Capitolini_MC1265_n2.jpg"><img width="130" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Hercules_Musei_Capitolini_MC1265_n2.jpg/130px-Hercules_Musei_Capitolini_MC1265_n2.jpg" height="228"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Hercules_Musei_Capitolini_MC1265_n2.jpg"></a></div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Heracles">Heracles</a>&nbsp;with the apple of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Hesperides">Hesperides</a></div></div></div><blockquote><div>—<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Plato">Plato</a>,&nbsp;<span>Epigram VII<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-33">[33]</a></span></div></blockquote><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Durer_Adam_and_Eve.jpg"><img width="130" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Durer_Adam_and_Eve.jpg/130px-Durer_Adam_and_Eve.jpg" height="171"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Durer_Adam_and_Eve.jpg"></a></div><i><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Adam_and_Eve">Adam and Eve</a></i>&nbsp;by<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Albrecht_D%C3%BCrer">Albrecht Dürer</a>&nbsp;(1507), showcasing the apple as a symbol of sin.</div></div></div><div>Main article:&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/List_of_apple_cultivars">List of apple cultivars</a></div><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Red_and_Green_apples_in_India.jpg"><img width="220" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Red_and_Green_apples_in_India.jpg/220px-Red_and_Green_apples_in_India.jpg" height="165"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Red_and_Green_apples_in_India.jpg"></a></div>Red and green apples in India</div></div></div><p>Old cultivars are often oddly shaped, russeted, and have a variety of textures and colors. Some find them to have a better flavor than modern cultivars,<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Crops_.26_Gardening_-_Apples_of_Antiquity-43">[43]</a>&nbsp;but they may have other problems which make them commercially unviable from low yield, disease susceptibility, poor tolerance for storage or transport, or just being the ''wrong'' size. A few old cultivars are still produced on a large scale, but many have been preserved by home gardeners and farmers that sell directly to local markets. Many unusual and locally important cultivars with their own unique taste and appearance exist; apple conservation campaigns have sprung up around the world to preserve such local cultivars from extinction. In the United Kingdom, old cultivars such as ''<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Cox%27s_Orange_Pippin">Cox''s Orange Pippin</a>'' and ''<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Egremont_Russet">Egremont Russet</a>'' are still commercially important even though by modern standards they are low yielding and susceptible to disease.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app-4">[4]</a></p><h2>Cultivation</h2><h3>Breeding</h3><div>See also:&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Fruit_tree_propagation">Fruit tree propagation</a>&nbsp;and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Malling_series">Malling series</a></div><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Apfelbaum_Boskop_Hochstamm.jpg"><img width="220" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Apfelbaum_Boskop_Hochstamm.jpg/220px-Apfelbaum_Boskop_Hochstamm.jpg" height="147"></a><div><div><a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/File:Apfelbaum_Boskop_Hochstamm.jpg"></a></div>An apple tree in Germany</div></div></div><p>In the wild, apples grow readily from seeds. However, like most perennial fruits, apples are ordinarily propagated asexually by&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Grafting">grafting</a>. This is because seedling apples are an example of "<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Zygosity">extreme heterozygotes</a>", in that rather than inheriting DNA from their parents to create a new apple with those characteristics, they are instead significantly different from their parents.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-44">[44]</a>&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Polyploid">Triploid</a>&nbsp;varieties have an additional reproductive barrier in that 3 sets of chromosomes cannot be divided evenly during meiosis, yielding unequal segregation of the chromosomes (aneuploids). Even in the case when a triploid plant can produce a seed (apples are an example), it occurs infrequently, and seedlings rarely survive.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-45">[45]</a></p><p>Because apples do not breed true when planted as seeds,&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Grafting">grafting</a>&nbsp;is generally used to produce new apple trees. The&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Rootstock">rootstock</a>&nbsp;used for the bottom of the graft can be selected to produce trees of a large variety of sizes, as well as changing the winter hardiness, insect and disease resistance, and soil preference of the resulting tree. Dwarf rootstocks can be used to produce very small trees (less than 3.0&nbsp;m (10&nbsp;ft) high at maturity), which bear fruit earlier in their life cycle than full size trees.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-46">[46]</a>&nbsp;Dwarf rootstocks for apple trees can be traced as far back as 300 BC, to the area of&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Persia">Persia</a>and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Asia_Minor">Asia Minor</a>.&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Alexander_the_Great">Alexander the Great</a>&nbsp;sent samples of dwarf apple trees to&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Aristotle">Aristotle</a>''s&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Lyceum">Lyceum</a>. Dwarf rootstocks became common by the 15th century, and later went through several cycles of popularity and decline throughout the world.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-47">[47]</a>&nbsp;The majority of the rootstocks used today to control size in apples were developed in England in the early 1900s. The&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/East_Malling_Research_Station">East Malling Research Station</a>&nbsp;conducted extensive research into rootstocks, and today their rootstocks are given an "M" prefix to designate their origin. Rootstocks marked with an "MM" prefix are Malling-series varieties later crossed with trees of the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Northern_Spy">Northern Spy</a>&nbsp;variety in&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/London_Borough_of_Merton">Merton, England</a>.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-48">[48]</a></p><p>Most new apple cultivars originate as seedlings, which either arise by chance or are bred by deliberately crossing cultivars with promising characteristics.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-book9-49">[49]</a>&nbsp;The words ''seedling'', ''pippin'', and ''kernel'' in the name of an apple cultivar suggest that it originated as a seedling. Apples can also form&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Bud_sport">bud sports</a>&nbsp;(mutations on a single branch). Some bud sports turn out to be improved strains of the parent cultivar. Some differ sufficiently from the parent tree to be considered new cultivars.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-app4-50">[50]</a></p><p>Since the 1930s, the Excelsior Experiment Station at the&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/University_of_Minnesota">University of Minnesota</a>&nbsp;has introduced a steady progression of important apples that are widely grown, both commercially and by local orchardists, throughout&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Minnesota">Minnesota</a>&nbsp;and&nbsp;<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Wisconsin">Wisconsin</a>. Its most important contributions have included ''<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Haralson_(apple)">Haralson''</a>&nbsp;(which is the most widely cultivated apple in Minnesota), ''<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Wealthy_(apple)">Wealthy</a>'', ''Honeygold'', and ''<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Honeycrisp">Honeycrisp</a>''.</p><p>Apples have been acclimatized in Ecuador at very high altitudes, where they provide crops twice per year because of constant temperate conditions year-round.<a target="_blank" rel="nofollow" href="http://en.wikipedia.org/wiki/Apple#cite_note-Apples_in_Ecuador-51">[51]</a></p>', 100, 5000, 27, '2015-06-02', '2015-06-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seeds_transactions`
--

CREATE TABLE IF NOT EXISTS `seeds_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `seed_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('BELUM_DIBAYAR','DIBAYAR','CANCELLED') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `seeds_transactions`
--

INSERT INTO `seeds_transactions` (`id`, `user_id`, `seed_id`, `amount`, `price`, `status`, `created_at`, `updated_at`) VALUES
(21, 3, 10, 0, 120000, 'DIBAYAR', '2015-05-31', '2015-06-05'),
(22, 3, 8, 20, 200000, 'BELUM_DIBAYAR', '2015-05-31', '2015-05-31'),
(23, 3, 4, 5, 50000, 'BELUM_DIBAYAR', '2015-05-31', '2015-05-31'),
(24, 3, 2, 0, 10000, 'CANCELLED', '2015-05-31', '2015-06-05'),
(25, 3, 12, 5, 25000, 'BELUM_DIBAYAR', '2015-06-02', '2015-06-02'),
(26, 6, 7, 10, 123000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05'),
(27, 3, 9, 10, 470000, 'BELUM_DIBAYAR', '2015-06-05', '2015-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `seed_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `log` set('BUY_SEED','BUY_LAND') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seed_id` (`seed_id`),
  UNIQUE KEY `land_id` (`land_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `group_id` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `profile_id`, `email`, `password`, `group_id`, `updated_at`, `created_at`, `remember_token`) VALUES
(2, 7, 'aswinda.pp@gmail.com', '$2y$10$2m5J47tdLUZkwQwUqMbtnuwalNAdh.rSmjnK4GFpH3eAOrACgQGZ2', 0, '2015-06-05', '2015-05-27', 'EGJbL01zsYUAG8r0MnfkNOveDnKUa5yZ8MqJrXJtmYuL8wbqpKZdduhUVyDP'),
(3, 8, 'addinul.masri@gmail.com', '$2y$10$aPuuDuIgwmX5nC8nr.i1luHWSh2GMdobKsV6dorGEDw3AlOMytXS.', 1, '2015-06-05', '2015-05-27', 'uKyRneLUnRl1qEGGOfY0BAgU95NFgNb3ezZFN0glhzJP1mPQy6QVeQhXsVAX'),
(4, 9, 'guswandi@gmail.com', '$2y$10$HI0U5hTlo1BEPuoNyuwaye/x1AUpde8iwkurFXPHdsBBuoW.8RBIu', 2, '2015-06-05', '2015-05-27', 'CK40iu3ziZoQZix8d7J2FsWnudHz9FVHKFcwsk8Vs8sXoQMDzLWdq1bC2klT'),
(5, 10, 'adi@gmail.com', '$2y$10$iLp0sX1xO.i8j9Fs4/.ah.yaS9UT27pWkm.i/iHiZvZO/ASuz.EPq', 1, '2015-05-29', '2015-05-29', ''),
(6, 15, 'investor@gmail.com', '$2y$10$sJNjTklxr.y2KH8tCTsiHeJWIa6bAcHEml6XvFKhHnbZW1.jgYY06', 1, '2015-06-05', '2015-06-05', 'LMOyrVinJibZZkJoQNFVxZsqmbT03US5tCzBFUb5tuatjurnSCAPUL9gVPke');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
