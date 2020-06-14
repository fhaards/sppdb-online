-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2020 pada 22.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spsb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombang`
--

CREATE TABLE `gelombang` (
  `id_gel` int(10) NOT NULL,
  `nm_gel` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `total_peserta` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gelombang`
--

INSERT INTO `gelombang` (`id_gel`, `nm_gel`, `tgl_mulai`, `tgl_akhir`, `total_peserta`, `status`) VALUES
(1, 'Gelombang 1', '2020-06-06', '2020-07-09', 0, 'Aktif'),
(5, 'Gelombang 2', '2020-07-07', '2020-07-23', 1, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `kd_jurusan` varchar(20) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kd_jurusan`, `nm_jurusan`, `status`) VALUES
(7, 'RPL01', 'Rekayasa Perangkat Lunak', 'Aktif'),
(9, 'PMS001', 'Pemasaran', 'NonAktif'),
(10, 'TKJ101', 'Teknik Komputer Jaringan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_bayar_daftar`
--

CREATE TABLE `peserta_bayar_daftar` (
  `no_pembayaran` int(30) NOT NULL,
  `id_pendaftaran` int(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_bayar_daftar`
--

INSERT INTO `peserta_bayar_daftar` (`no_pembayaran`, `id_pendaftaran`, `status`) VALUES
(3, 19, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_dokumen`
--

CREATE TABLE `peserta_dokumen` (
  `no_dokumen` int(30) NOT NULL,
  `id_pendaftaran` int(30) NOT NULL,
  `img_ijasah` text NOT NULL,
  `img_skhun` text NOT NULL,
  `img_raport_s4` text NOT NULL,
  `img_raport_s5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_dokumen`
--

INSERT INTO `peserta_dokumen` (`no_dokumen`, `id_pendaftaran`, `img_ijasah`, `img_skhun`, `img_raport_s4`, `img_raport_s5`) VALUES
(3, 19, '1d42a9ecfa411cafd1054b0425e82d9f.jpg', '2e12284249caf8fd2d30e07273e9a7b4.jpg', '823a66604ccb27e6763153cad5e9882c.png', 'bcbe8d3a4b5ca1bad7376e575d1d79d1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_orangtua`
--

CREATE TABLE `peserta_orangtua` (
  `kd_orangtua` int(30) NOT NULL,
  `id_pendaftaran` int(30) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `gaji_orangtua` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_orangtua`
--

INSERT INTO `peserta_orangtua` (`kd_orangtua`, `id_pendaftaran`, `nm_ayah`, `pekerjaan_ayah`, `nm_ibu`, `pekerjaan_ibu`, `gaji_orangtua`) VALUES
(4, 19, 'Abidin', 'Pegawai Negri', 'Siti Nurhasanah', 'Guru', '> 6jt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pendaftar`
--

CREATE TABLE `peserta_pendaftar` (
  `id_pendaftaran` int(30) NOT NULL,
  `kd_peserta` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_jurusan` int(2) NOT NULL,
  `nm_lengkap` varchar(100) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_gel` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_pendaftar`
--

INSERT INTO `peserta_pendaftar` (`id_pendaftaran`, `kd_peserta`, `id_user`, `id_jurusan`, `nm_lengkap`, `nisn`, `jk`, `agama`, `tempat_lahir`, `tgl_lahir`, `provinsi`, `kota`, `alamat`, `id_gel`, `status`) VALUES
(19, '1585936180', 67, 10, 'Faris Salahuddin', '17114190', 'Laki-Laki', 'Islam', 'JAKARTA', '1994-06-13', '32', '3201', 'Perumahan Bukit Dago A-9 32', 5, 'Invalid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(1, 'Super User', 'thisadmin@mail.com', '$2y$10$C2PPLZLv.g.Tqd2BdI4/ruVpDP/V0o6BDrxkBoL5eNsBrl58kZn3y', 'Admin'),
(67, 'Faris Salahuddin', 'faris@mail.com', '$2y$10$a8tof1TYmq5sUCq82LVQN.tOqDGQdXzeC1a8cAM6VVafUZm64WlSi', 'Invalid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_berita`
--

CREATE TABLE `_berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `_berita`
--

INSERT INTO `_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `status`) VALUES
(8, 'PPDB Tahun Ajaran 2020/2021 Semua Dilakukan Sistem Daring, Kuota Jalur Prestasi 30 Persen', '<p><a href=\"https://www.malangpostonline.com/\">Malangpostonline.com</a> &ndash; Penerimaan Peserta Didik Baru (PPDB) Kota Malang tahun ajaran 2020/2021 mulai disosialisasikan. Dinas Pendidikan dan Kebudayaan Kota Malang telah mengatur teknis bagaimana proses penerimaan siswa baru. Berbagai skema dan rapat koordinasi terus digelar dalam rangka suksesnya kegiatan tersebut.</p>\r\n<p>Walikota Malang Drs. H. Sutiaji mengatakan bahwa di tengah situasi Covid-19 ini gelaran PPDB akan kembali dilakukan secara daring. Sehingga pendaftaran siswa didik baru tidak perlu datang ke sekolah.</p>\r\n<p>\"Sebetulnya sejak lima tahun terakhir ini, Kota Malang selalu melakukan PPDB secara daring. Jadi saya rasa tidak akan masalah buat kami,\" ujarnya dalam rangka Rapat Koordinasi Persiapan PPDB Tahun Ajaran 2020/2021 di Kantor Dinas Pendidikan dan Kebudayaan Kota Malang, Kamis (30/4).</p>\r\n<p>Hanya saja, masih kata dia, yang membuat berbeda dengan tahun lalu adalah kuota bagi siswa melalui jalur prestasi menjadi lebih besar yaitu sebanyak 30 persen. Ini hampir sama dengan di tahun 2018 yang lalu.</p>\r\n<p>\"Tahun ini kami juga menambah 6 rombel baru dengan kuota kurang lebih 180 siswa. Hal ini dilakukan untuk memenuhi tuntutan masyarakat. Penambahan rombel tersebut ada di SMP Mulyorejo, SMP Gadang dan SMP Polehan,&rdquo; jelas Sutiaji.</p>\r\n<p>Dengan demikian, tahun ini Kota Malang akan siap menerima peserta didik baru baik di sekolah negeri maupun swasta yang ada.</p>\r\n<p>\"Jumlah 14 ribuan keluaran dari Sekolah Dasar dipastikan dapat diterima seluruhnya di sekolah SMP yang ada di Kota Malang,&rdquo; ucapnya.</p>\r\n<p>Lebih lanjut, orang nomor satu di Pemkot Malang ini menekankan bahwa semua pihak menjalankan aturan yang telah dibuat dengan mengedepankan integritas. Apalagi saat ini PPDB 2020/2021 mengakomodir nilai rapor. Dan hal ini membutuhkan kesungguhan, kedisiplinan dan yang utama adalah kejujuran dalam menyajikan nilai rapor.</p>\r\n<p>&ldquo;Jangan sampai karena ingin masuk di SMP yang diinginkan atau ingin peserta didiknya mendapatkan SMP Negeri, melakukan hal yang tidak baik. Karena&nbsp; Disdikbud memperhatikan kemampuan prestasi siswa untuk ditempatkan di SMP yang benar-benar melaksanakan pembinaan sesuai dengan bakat dan minat anak bersangkutan,&rdquo; tutur Sutiaji.</p>\r\n<p>Sementara itu, Kepala Dinas Pendidikan dan Kebudayaan Kota Malang, Zubaidah juga&nbsp; menyampaikan, PPDB tahun ini ada tiga jalur di antaranya jalur afirmasi dengan kuota sebesar 15 persen, jalur prestasi 30 persen, jalur perpindahan orangtua 5 persen, dan jalur zonasi 50 persen.</p>\r\n<p>&ldquo;Untuk jalur kepindahan orang tua tingkat SD, dibutuhkan surat penugasan orang tua di Kota Malang yakni dari instansi, lembaga, kantor, atau perusahaan, ditambah kartu keluarga dan akta kelahiran,&rdquo; ungkapnya.</p>\r\n<p>Sedangkan jalur afirmasi memiliki persyaratan Kartu Keluarga Sejahtera (KKS) atau Program Keluarga Harapan (PKH). Sementara untuk tingkat SMP ada tambahan syarat Kartu Indonesia Pintar (KIP).</p>\r\n<p>&ldquo;Pada jalur zonasi berkas yang dibutuhkan sebagai persyaratan adalah Kartu Keluarga (KK) yang diterbitkan paling singkat 1 tahun sejak diterbitkan tanggal pendaftaran,&rdquo; ujarnya.</p>\r\n<p>Untuk jalur prestasi diperlukan piagam lomba berjenjang. Baik akademik atau non akademik, dengan minimal juara tingkat kota. Bukti piagam dikirim ke panitia Dinas Pendidikan dan Kebudayaan, di Jalan Veteran No 19 Kota Malang. Di luar itu, pada jalur prestasi para siswa juga harus melampirkan surat keterangan prestasi akademik atau rapor dari kepala sekolah SD/sederajat.</p>\r\n<p>&ldquo;Untuk jalur prestasi nilai rapor di ambil dari kelas 4, kelas 5 dan semester gasal kelas 6 dengan nilai minimal 85,00 ke atas. Dan untuk nilai KI-1 dan KI-2 (nilai sikap perilaku) minimal baik dan lulusan dari sekolah Kota Malang,&rdquo; terangnya.</p>\r\n<p>Sebagai informasi, semua prosedur pendaftaran PPDB dilakukan melalui daring atau online dengan mengakses https://ppdb.dikbud.web.id. Berkas persyaratan dapat diupload sesuai dengan jalur penerimaan yang dipilih,&rdquo; pungkasnya. (mp4/lim)</p>', '2020-06-06', 'Aktif'),
(9, 'Daftar PPDB 2020: Alur, Syarat Dan Cara Daftar Online SMP, SMA/SMK', '<p xss=removed>Daftar PPDB 2020: Alur, Syarat & Cara Daftar Online SMP, SMA/SMK – Proses Penerimaan Peserta Didik Baru (PPDB) tahun 2020 akan segera tiba. Cara pendaftaran siswa baru online mengalami banyak perkembangan dari tahun ke tahun. Artikel berikut akan membahas secara lengkap tahapan, syarat, serta cara pendaftaran online untuk SMP dan SMA/SMK.</p>\n<p xss=removed>Mendaftar SMP secara online tentu perlu memperhatikan jadwal pendaftaran SMP Negeri 2019/2020. Proses PPDB online SMP. Begitu pula, sebelum melakukan pendaftaran online untuk SMA/SMK, ketahuilah jadwal pendaftaran SMA Negeri. Proses PPDB online SMA/SMK biasanya tidak jauh berbeda dengan PPDB SMP.</p>\n<p xss=removed>Cara daftar SIAP PPDB Online 2020/2021 sangat mudah. Kamu hanya perlu mengikuti alur pendaftaran sampai akhirnya diterima. Sebenarnya, SIAP PPDB Online adalah sistem untuk mengelola seluruh informasi penerimaan siswa-siswi baru. Proses yang perlu ditangani adalah pendaftaran siswa baru, seleksi, serta pengumuman. Harapannya, semua informasi dapat diakses secara online.<br>Siap-ppdb.com merupakan situs utama untuk memberikan informasi akurat terkait Penerimaan Peserta Didik Baru. Informasi juga dapat diakses oleh siswa, guru, sekolah, orang tua, alumni, dan masyakarat. Namun, belum semua wilayah bisa menerapkan PPDB secara online.</p>', '2020-06-07', 'Aktif'),
(10, 'Pengumuman Kelulusan Sekolah Kedinasan 2020/2021', '<p>Pengumuman Kelulusan Sekolah Kedinasan 2020/2021 – Sejumlah Sekolah Kedinasan telah membuka pendaftaran penerimaan Calon Taruna/Taruni baru sejak 8 Juni 2020. Jika merujuk pada informasi yang ada sekarang, pengumuman kelulusan Sekolah Kedinasan akan diumumkan pada bulan November 2020 mendatang. Jadwal yang diberikan oleh Badan Kepegawaian Negara juga masih belum pasti, mengingat masih akan menyesuaikan situasi pandemi Covid-19. Adapun di bawah ini Mamikos akan rangkumkan informasi terkait pengumuman Sekolah Kedinasan 2020.</p>\n<p>Sebelum kamu mengetahui hasil akhir dari seleksi Sekolah Kedinasan tahun 2020, tentunya kamu harus mengikuti berbagai tahapan seleksi terlebih dahulu. Hingga kini, tahapan seleksi Sekolah Kedinasan baru akan sampai pada tahap pendaftaran. Di mana pendaftaran Sekolah Kedinasan akan dibuka pada 8 Juni hingga 23 Juni 2020. Sebelum kamu mengetahui informasi terkait pengumuman kelulusan Sekolah Kedinasan 2020, ada baiknya kamu mengetahui info lengkap terkait seleksi Sekolah Kedinasan terlebih dahulu.</p>', '2020-06-07', 'Aktif'),
(13, ' 3 Aturan Resmi New Normal untuk Karyawan di Tempat Kerja dari Menkes', '<p xss=removed>3 Aturan Resmi New Normal untuk Karyawan di Tempat Kerja dari Menkes – Penerapan aturan new normal sudah dibuat untuk menghadapi penyesuaian masyarakat terhadap Pandemi Covid-19. Aktivitas yang semula dilakukan secara online atau tidak langsung akan kembali normal secara berangsur-angsur. Namun, tentunya akan ada penyesuaian yang dilakukan, apalagi saat ini masih ada kasus positif Covid-19 yang ditemukan di Indonesia. Aktivitas bekerja di luar rumah maupun di kantor pun kemudian ditetapkan oleh Menteri Kesehatan untuk dijadikan panduan.</p>\n<p xss=removed>Aturan new normal dari Menteri Kesehatan sudah dikeluarkan oleh Kementerian Kesehatan Republik Indonesia. Terkait pemberlakuan new normal, Keputusan Menteri Kesehatan nomor HK.01.07/MENKES/328/2020 telah dikeluarkan. Keputusan tersebut berisi tentang Panduan Pencegahan dan Pengendalian Covid-19 di Tempat Kerja Perkantoran dan Industri dalam Mendukung Keberlangsungan Usaha pada Situasi Pandemi. Pertimbangan dikeluarkannya keputusan tersebut adalah kegiatan ekonomi yang harus tetap berjalan. Tentunya kegiatan tersebut dilakukan dengan mengutamakan langkah-langkah pencegahan.</p>\n<p xss=removed>Selama ini, telah diterapkan Pembatasan Sosial Berskala Besar (PSBB) berdasarkan Peraturan Pemerintah nomor 21 Tahun 2020. PSBB dilakukan mempercepat penanganan Covid-19 yang salah satunya dilakukan dengan meliburkan tempat kerja. Tapi, cara ini tidak dapat dilakukan selamanya, apalagi roda ekonomi harus tetap berjalan.</p>', '2020-06-07', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_info`
--

CREATE TABLE `_info` (
  `id_info` int(1) NOT NULL,
  `cara_mendaftar` text NOT NULL,
  `dokumen` text NOT NULL,
  `info_pembayaran` text NOT NULL,
  `welcome_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `_info`
--

INSERT INTO `_info` (`id_info`, `cara_mendaftar`, `dokumen`, `info_pembayaran`, `welcome_msg`) VALUES
(1, '<p><strong>Berikut tata cara pendaftaran : </strong></p>\n<p>1. Lakukan registrasi pada kolom registrasi <br>2. Login kedalam aplikasi <br>3. Lengkapi formulir pendaftaran <br>4. Lakukan pemabayaran pendaftaran lalu konfirmasi pendaftaran <br>dll...</p>', '<p><strong>Dokumen Persyaratan Umum yang dibutuhkan meliputi: </strong></p>\n<p>1. Fotokopi akta kelahiran <br>2. Fotokopi ijazah <br>3. Fotokopi SHUN <br>4. Fotokopi Kartu Keluarga (KK) <br>5. Fotokopi KTP Orang tua <br>6. Surat Kelakuan Baik <br>7. Surat tanggung jawab mutlak orang tua <br>8. Pas foto siswa ukuran 4x6 sebanyak 3 lembar <br>9. Dokumen khusus sesuai jalur yang ditempuh</p>\n<p><strong>Selain itu, beberapa ketentuan ini juga bisa menjadi perhatian bagi calon peserta didik: </strong></p>\n<p>1. SHUN tidak dipersyaratkan bagi ABK/CPD lulusan sistem pendidikan dari luar negeri. <br>2. Dokumen asli dari dokumen yang difotokopi disertakan untuk verifikasi oleh panitia pendaftaran di satuan pendidikan atau cabang dinas. <br>3. Selanjutnya pendaftar akan menerima Surat Tanda Bukti Pendaftaran (STBP).</p>\n<p><strong>Dokumen persyaratan khusus yang diperlukan meliputi: </strong></p>\n<p><br>1. Surat Keterangan Tidak Mampu (SKTM) dari kelurahan, atau Kartu Keluarga Sejahtera (KKS) atau Kartu Indonesia Pintar (KIP) atau Kartu Indonesia Sehat (KIS) bagi calon peserta didik jalur KETM.</p>\n<p><br>2. Data Hasil Diagnosa/Assesment Psikolog atau Pakar dari pergurua tinggi layanan khusus atau pusat dukungan (Ressource Center) atau kelompok kerja inklusi bagi calon peserta didik berkebutuhan khusus atau penyandang disabilitas.</p>\n<p><br>3. Surat Keterangan dari Pimpinan Tempat Orang Tua Bertugas, sertifikat pendidik, SK pengangkatan pertama, SK pembagian tugas mengajar/membimbing/membina, bagi calon peserta didik jalur Penghargaan Maslahat Guru (PMG).</p>\n<p><br>4. Kartu Keluarga (KK) yang menunjukkan calon peserta didik telah menetap pada tempat domisili sekurang-kurangnya selama 6 bulan, bagi calon peserta didik Warga Penduduk Setempat (WPS).</p>\n<p><br>5. Piagam/Sertifikat yang dilegalisasi pihak kejuaraan, atau piala/medali dengan surat keterangan dari panitia atau pihak berwenang, bagi calon peserta didik Jalur Prestasi.</p>\n<p> </p>', '<p><strong>Informasi Pembayaran</strong></p>\n<p>.................</p>', '<p><strong>Selamat Datang <br>Sistem Penerimaan Peserta Didik Baru<br></strong>SMK Science Technology & Business Depok</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_sekolah`
--

CREATE TABLE `_sekolah` (
  `id_sekolah` int(1) NOT NULL,
  `nm_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nm_apl` varchar(100) NOT NULL,
  `initial_apl` varchar(20) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `_sekolah`
--

INSERT INTO `_sekolah` (`id_sekolah`, `nm_sekolah`, `alamat`, `no_telp`, `email`, `nm_apl`, `initial_apl`, `logo`) VALUES
(1, 'SMK SCIENCE TECHNOLOGI & BUSINEESS DEPOK', 'Jl. H. Sulaeman No.1, Tugu Sawangan, Kota Depok', '081318513388', 'smkstbdepok@mail.com', 'Sistem Penerimaan Peserta Didik Baru', 'SPPDB', 'a4ab042530287eaf809c4026e6843f84.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id_gel`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `peserta_bayar_daftar`
--
ALTER TABLE `peserta_bayar_daftar`
  ADD PRIMARY KEY (`no_pembayaran`),
  ADD KEY `no_pendaftaran` (`id_pendaftaran`);

--
-- Indeks untuk tabel `peserta_dokumen`
--
ALTER TABLE `peserta_dokumen`
  ADD PRIMARY KEY (`no_dokumen`),
  ADD KEY `no_pendaftaran` (`id_pendaftaran`);

--
-- Indeks untuk tabel `peserta_orangtua`
--
ALTER TABLE `peserta_orangtua`
  ADD PRIMARY KEY (`kd_orangtua`),
  ADD KEY `no_pendaftaran` (`id_pendaftaran`);

--
-- Indeks untuk tabel `peserta_pendaftar`
--
ALTER TABLE `peserta_pendaftar`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `kd_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `_berita`
--
ALTER TABLE `_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `_info`
--
ALTER TABLE `_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `_sekolah`
--
ALTER TABLE `_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id_gel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `peserta_bayar_daftar`
--
ALTER TABLE `peserta_bayar_daftar`
  MODIFY `no_pembayaran` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta_dokumen`
--
ALTER TABLE `peserta_dokumen`
  MODIFY `no_dokumen` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta_orangtua`
--
ALTER TABLE `peserta_orangtua`
  MODIFY `kd_orangtua` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `peserta_pendaftar`
--
ALTER TABLE `peserta_pendaftar`
  MODIFY `id_pendaftaran` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `_berita`
--
ALTER TABLE `_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `_info`
--
ALTER TABLE `_info`
  MODIFY `id_info` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `_sekolah`
--
ALTER TABLE `_sekolah`
  MODIFY `id_sekolah` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peserta_pendaftar`
--
ALTER TABLE `peserta_pendaftar`
  ADD CONSTRAINT `peserta_pendaftar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_pendaftar_ibfk_3` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
