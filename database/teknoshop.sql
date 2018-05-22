-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 04:52 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'koko');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(100) NOT NULL,
  `deskripsi_artikel` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`) VALUES
(1, 'Smartphone', '3x3.png', '      Smartphone adalah sebuah telepone genggam yang memiliki fitur atau kemampuan tingkat tinggi, sering kali dalam penggunaanya menyerupai komputer, sehingga banyak orang mengartikan smarphone sebagai komputer genggam yang memiliki fasilitas telepone. Fitur - fitur yang dapat ditemukan pada smartphone antara lain telepone, sms, internet, ebook viewer, editing dokumen dan masih banyak lagi yang lainnya. Kita juga dapat menambahkan aplikasi lain kedalam smartphone layaknya kita menginstall aplikasi pada komputer.\r\n\r\nSebelum smartphone dikenal oleh kita seperti sekarang ini, kita mengenal adanya telepone seluler dan PDA ( Personal Digital Assistant, ponsel berfungsi untuk telepone dan sms sementara PDA memiliki fungsi asisten digital pribadi dari sini munculah ide untuk menggabungkan fungsi keduanya. bagaimana sudah tahu apa itu smartphone ?    '),
(6, 'Cuma Sejutaan! Advani6 Smartphone Canggih Dengan Layar Full View dan Sistem Keamanan Terbaik', 'hipwee-advan3-2.jpg', 'Belum banyak orang tahu, Advan menjadi satu-satunya brand lokal yang berhasil masuk peringkat lima besar smartphone paling laris sepanjang tahun 2017 versi IDC ( International Data Corporation) Indonesia. Di tahun ini pun, Advan ikut berinovasi dengan merilis #Advani6, smartphone trendi yang dibandrol dengan harga satu jutaan. #Advani6 ditujukan khusus untuk kalangan menengah kebawah. Berikut spesifikasi #Advani6, brand lokal kelas internasional.\r\n\r\n1. Ini yang paling diunggulkan, Layar Full View dibekali baterai kapasitas besar\r\n\r\nDitunjang dengan daya baterai yang cukup besar yaitu 3.300 mAh removeable dan layar 5.5 inci resolusi fullHD, #Advani6 menawarkan kepuasan konsumen dalam bermain game, menonton video serta multimedia lainnya. Dengan layar pelindung 2.5D Screen, Scratch Resistant Glass membuat smartphone ini terkesan mewah dan lebih menarik. Serta kapasitas baterai yang cukup besar, kamu dapat menghabiskan waktu 4 jam saat bermain game dan waktu standby hingga 6 jam.\r\n\r\n2. Inovasi disektor kamera menggunakan sensor Samsung CMOS\r\n\r\nPada sektor kamera, #Advani6 tersebut juga dilengkapi lensa belakang beresolusi 13MP CMOS dengan LED Flash dan fitur autofokus, juga lensa depan 5MP dengan kemampuan wide angle, 720p. Tak ketinggalan kemampuan video 1080p@30fps cukup baik untuk para gamers. Paket lengkap~\r\n\r\n3. OS dan CPU yang tak ketinggalan jaman\r\n\r\nSistem operasi sudah mengusung OS Android Nougat versi 7 dan OS bawaan. Dapur pacu mengusung MediaTek mt6750t octacore dengan kecepatan 1,5 GHz berkolaborasi dengan grafis CPU Mali-T860MP2. Dengan RAM yang sudah 2gb dan memori internal 32gb disertai slot SD sampai 256gb. Jaringannya juga sudah support 4G, kamu bebas berselancar diinternet dengan koneksi baik. Spesifikasi ini sudah sangat mumpuni untuk kebutuhan multitasking aplikasi sehari-hari. Selain dukungan hardware tersebut, #Advani6 dibekali dengan berbagai software yang biasa ditemukan di smartphone. Diantaranya fitur fingerprint, Face ID, dan Advan Secure untuk mengamankan data-data penting pemilik ponsel.\r\n\r\n4. Ini yang lebih canggih, sistem keamanan berlapis\r\n\r\nSelain fingerprint dan Face ID, Advan Secure yang ada di #Advani6 adalah Super Applock, Privacy System, dan Anti Theft. Sistem keamanan yang berlapis didasari bahwa data yang tersimpan didalam mobil adalah penting kerahasiaannya. Super App Lock, fitur tersebut adalah membuka aplikasi dengan kunci unik. Ketika seseorang mencoba paksa masuk ke dalam perangkat atau salah membuka kunci, akan langsung ketahuan. Perangkat akan memfoto pelaku dan mengirimkannya ke email pemilik. Untuk privacy system, adalah bilik kerahasiaan dimana pemilik smartphone dapat menyembunyikan data foto, video dan panggilan. Dan yang terakhir, fitur Anti Theft. Fitur ini adalah fitur anti maling. Lengkap sudah keamanan dan kerahasiaan para pengguna #Advani6.\r\n\r\nDengan harga yang pas di kantong, serta spesifikasi yang badai kamu sudah punya smartphone kekinian brand lokal. Sebagai bentuk menghargai karya anak bangsa.'),
(7, 'Belum banyak orang tahu, Advan menjadi satu-satunya brand lokal yang berhasil masuk peringkat lima b', 'hipwee-komponen-hp-750x422.jpg', 'Tadi siang ketika lagi mencuci pakaian, tidak sengaja smartphone S*msung yang aku pakai tercebur ke dalam air dengan keadaan music player menyala. Aku langsung cepat-cepat mengambil smartphone-ku itu sebelum seluruh badannya masuk ke dalam air. Ketika aku angkat, speaker-nya sudah kemasukan air. Aku langsung mematikan aplikasi music player. Kemudian aku matikan dan jemur selama 10 menitan di bawah panas matahari tanpa melepas semua komponennya karena ketika tercebur ke dalam air, smartphone-ku terlindungi oleh softcase yang aku pikir tidak apa-apa kalau tidak aku lepas komponen dalam smartphone-nya.\r\n\r\nSetelah dijemur, aku nyalakan kembali. Tapi yang aku dapati nyala dalam keadaan tidak normal. Aplikasi kamera terus membuka setiap kali aku membuka aplikasi lain. Akhirnya aku putuskan mematikan smartphone-ku kembali. Mulai aku lepaskan penutupnya dan aku copot baterai, SIM card, dan memory card. Aku jemur smartphone kosongan itu di bawah sinar matahari lagi selama 5 menitan. Lalu aku pasang lagi semuanya dan menyalakan kembali. Lagi-lagi keadaannya masih sama seperti tadi.\r\n\r\nAku putuskan mematikan kembali smartphone-ku dan melepas semua komponen (baterai, SIM card, dan memory card). Aku mengikuti cara yang aku baca di beberapa artikel memakai hp satunya. Cara pertama yang aku pakai yaitu dengan menaruh badan smartphone kosongan ke dalam beras. Kata beberapa artikel yang aku baca, beras bisa menyerap air dan mengeringkan komponen hp yang basah. Tapi memerlukan waktu yang lama. Yaitu sekitar satu-dua hari.\r\n\r\nSetelah beberapa menit, aku berpikir kalau waktu yang diperlukan akan lama dan kalau tidak berhasil, nanti malah gela sendiri. Aku pun mencari artikel di internet lagi dan menemukan cara yang kedua. Nah, ternyata cara yang kedua ini berhasil loh guys ^^ maka dari itu aku mau berbagi tips dan testimoni langsung dari aku. Disimak yuk!\r\n\r\n\r\nJangan panik.\r\n\r\nLepas penutup smartphone.\r\n\r\nCopot baterai, SIM card, dan memory card.\r\n\r\nJika masih ada air yang terlihat, bersihkan dengan tisu kering atau lap kering.\r\n\r\nSetelah kering, siapkan tisu kering beberapa lembar ( 3-4 lembar) dan satu lembar atau dua lembar koran (lebih baik dua lembar).\r\n\r\nBalut badan hp kosongan tadi dengan selembar tisu. Setelah terbalut, lanjutkan membalut dengan tisu sampai tisu yang ada habis terpakai. Kemudian, balut dengan koran yang tebal.\r\n\r\nMasukkan balutan kombinasi antara badan hp kosongan, tisu kering, dan koran ke dalam freezer. *Eh???* Trust me deh hehe ^^/ Tujuan dari pembalutan ini adalah agar embun es dapat terserap dan tidak masuk sehingga merusak komponen hp.\r\n\r\nBiarkan selama 30 menit-an.\r\n\r\nSetelah 30 menit berlalu, ambil balutan tersebut.\r\n\r\nBuka satu persatu balutan.\r\n\r\nBersihkan embun es jika ada yang menempel di badan hp dengan tisu kering.\r\n\r\nPastikan badan hp benar-benar kering.\r\n\r\nPasang kembali baterai, SIM card, dan memory card.\r\n\r\nCoba menyalakan kembali hp.\r\n\r\nDan voila hp kembali normal ^o^/\r\n\r\nKemudian aku cek semua aplikasi yang ada di smartphone-ku. Syukur, semuanya normal. Tidak seperti tadi yang sempat error dengan aplikasi kamera yang terus-terusan membuka.\r\n\r\nOh iya, kalau seandainya hp atau smartphone kalian tercebur dalam air selama lebih dari waktu smartphone-ku tercebur air (1- 2 menitan), misal setengah jam, coba diamkan di freezer selama satu jam. (Kalau ada yang sudah coba, tolong testimoni dengan komen di bawah ya~ ^^ semoga saja berhasil).\r\n\r\nSekian tips dan testimoni dari aku. Semoga bisa membantu kalian yang punya masalah sama denganku hehe :D'),
(8, 'Asa Kamera Smartphone Menguasai Dunia Fotografi', 'infografik-kamera-smartphone-mild-nadya.jpg', 'Pada pertengahan dekade 1800an, dunia baru saja mengenal fotografi komersial. Namun, menciptakan selembar foto kala itu lebih serupa menambang Bitcoin hari ini. Rumit dan mahal. Ini dialami oleh George Eastman. Pada 1878, kala hendak pergi berpetualangan ke Santo Domingo di Republik Dominika, Eastman membawa peralatan fotografi, yang selain mahal, juga memiliki ukuran besar melebihi microwave. Jelas saja, Eastman tidak menikmati petualangan yang dilakukannya.\r\n\r\nPada 1888, berbekal pengalaman tidak enak itu, Eastman mendirikan Kodak, perusahaan fotografi yang memiliki slogan â€œpress the button, we do the rest\". Kodak kemudian tumbuh pesat, seiring tumbuh pesatnya dunia fotografi. Ia menjadi penguasa pasar. Sayangnya, Kodak secara perlahan mulai tersingkir oleh hadirnya dunia digital.\r\n\r\nHari ini, 130 berlalu sejak Kodak didirikan, perusahaan itu sudah tidak banyak berarti lagi dalam dunia fotografi kini. Namun, slogan â€œpress the button, we do the restâ€ nampaknya masih bisa bertahan. Jelas bukan untuk Kodak lagi, melainkan digunakan untuk mendeskripsikan keunggulan kamera dalam tubuh smartphone saat ini.\r\n\r\nHari ini, masyarakat dunia menciptakan foto melebihi masa-masa manapun dalam rentang sejarah modern manusia. Publikasi yang dilakukan Business Insider menyebut ada 1,2 triliun foto yang diambil manusia di seluruh dunia pada 2017. Angka ini meningkat dari hanya 660 miliar foto yang diambil manusia pada 2013. Yang unik, 85 persen dari jumlah tersebut terjadi karena smartphone, bukan kamera digital konvensional. Kamera digital hanya menyumbang 10,3 persen dari total foto yang diciptakan dunia. \r\n\r\nâ€œTidak ada keraguan bahwa smartphone menjadi cukup baik dimanfaatkan di banyak waktu, terima kasih pada ponsel, lebih banyak foto yang diambil daripada sebelumnya,â€ ucap Liz Cutting, anggota NPD, firma riset digital, pada Wired.\r\n\r\nAnnie Leibovitz, salah seorang tokoh di dunia fotografi, mengatakan bahwa populernya smartphone jadi alat untuk menciptakan foto ialah karena ia gampang ditemui dan mudah digunakan. Leibovitz, mengatakan bahwa iPhone dan smartphone secara umum merupakan â€œkamera bidik zaman ini.â€\r\n\r\nâ€œFotografi mobile (smartphone) hebat karena ini mengikis batasan untuk menggunakannya,â€ kata Doc Pop. â€œTanpa investasi yang besar, setiap orang dapat memasuki dunia fotografi hari ini,â€ tambah Leibovitz, yang senang menggunakan iPhone untuk mengambil foto ini.'),
(9, 'Menyusul iOS, Game Fortnite Akan Segera Tersedia Untuk Android Juga  Selengkapnya: https://www.berit', 'Fortnite.jpg', 'Pada bulan Maret lalu, developer game Epic Games telah merilis game Fortnite yang mendapat sambutan baik. Namun, saat itu game Fortnite hanya meluncur untuk iOS, sehingga pengguna Android sangat menantikan kehadiran game tersebut. Kini akhirnya perusahaan telah mengumumkan kehadiran Fortnite untuk Android yang akan tiba pada musim panas tahun ini (sekitar Juni hingga Agustus).\r\n\r\nSelain mengumumkan kehadiran Fortnite untuk Android, perusahaan juga mengumumkan adanya beberapa tambahan dan peningkatan yang akan datang ke platform mobile. Salah satu fitur yang akan datang adalah voice chat yang memungkinkan rekan satu tim saling berkomunikasi. Ada juga pilihan untuk membungkam diri Anda sendiri atau orang lain, dan fitur ini akan bekerja di seluruh platform. Mode penghemat baterai juga akan ditambahkan, dimana fitur ini akan mengurangi pengaturan grafik untuk menurunkan konsumsi daya dengan konsekuensi grafis yang menurun. Fitur pelacakan statistik juga datang untuk versi mobile. Selain itu, baru-baru ini versi iOS juga mendapatkan HUD yang telah disesuaikan. Permainan ini akan mendapatkan fitur autorun yang ditingkatkan bersama dengan pengurangan ukuran instalasi dan pembaruan, peningkatan kinerja grafis, dan peningkatan stabilitas. Genre game survival memang tengah diminati untuk sekarang ini, dan kehadiran Fortnite di platform Android akan semakin meramaikan persaingan. Kita nantikan saja kabar selanjutnya. ');

-- --------------------------------------------------------

--
-- Table structure for table `kotak_saran`
--

CREATE TABLE `kotak_saran` (
  `id_ks` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plg` int(11) NOT NULL,
  `email_plg` varchar(100) NOT NULL,
  `password_plg` varchar(50) NOT NULL,
  `nama_plg` varchar(100) NOT NULL,
  `telepon_plg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `email_plg`, `password_plg`, `nama_plg`, `telepon_plg`) VALUES
(1, 'kiki@gmail.com', 'kiki', 'kiki seno', '0812345678'),
(3, 'rudi@gmail.com', 'root', 'rudi budiman', '08129430797');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_plg` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_plg`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, '2018-05-19', 800000),
(2, 1, '2018-05-20', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah_pembelian`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `deskripsi_produk`) VALUES
(4, 'Samsung J10', 890000, 800, '1x1.jpg', 'jika aku kamu kau'),
(5, 'oppo 1', 890210, 1000, '3x3_8.png', 'sa opooap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kotak_saran`
--
ALTER TABLE `kotak_saran`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plg`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kotak_saran`
--
ALTER TABLE `kotak_saran`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_plg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
