-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Februari 2016 jam 04:54
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `username`, `password`) VALUES
(1, 'rpl', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kode_dokter` varchar(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `alamat_dokter` varchar(50) NOT NULL,
  `telepon_dokter` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_dokter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `alamat_dokter`, `telepon_dokter`, `username`, `password`) VALUES
('D001', 'Dr. Santiko', 'Menggoro', '086996786967', 'billy', 'billy'),
('D002', 'Dr. Ajun', 'Kauman Temanggung', '08123456789', 'joni', '1234'),
('D003', 'Dr. Dendi', 'Kledung', '085799648768', 'dokterdendi', 'dokter'),
('D004', 'Dr. Saputra', 'Lungge', '085799648769', 'Saputra', 'saputra'),
('D005', 'Dr. Aji', 'Wonosobo', '085799648767', 'aji', 'aji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosis`
--

CREATE TABLE IF NOT EXISTS `dosis` (
  `id_dosis` varchar(4) NOT NULL,
  `nama_dosis` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_dosis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosis`
--

INSERT INTO `dosis` (`id_dosis`, `nama_dosis`) VALUES
('D1', '3x1 Sebelum Makan'),
('D2', '2x1 Sebelum Makan'),
('D3', '1x1 Sebelum Makan'),
('D4', '3x1 Sesudah Makan'),
('D5', '2x1 Sesudah Makan'),
('D6', '1x1 Sesudah Makan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
  `inggris` varchar(20) NOT NULL,
  `indonesia` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`inggris`, `indonesia`) VALUES
('Monday', 'Senin'),
('Tuesday', 'Selasa'),
('Wednesday', 'Rabu'),
('Thursday', 'Kamis'),
('Friday', 'jumat'),
('Saturday', 'sabtu'),
('Sunday', 'Minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_praktek`
--

CREATE TABLE IF NOT EXISTS `jadwal_praktek` (
  `kode_jadwal` varchar(5) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kode_dokter` varchar(5) NOT NULL,
  PRIMARY KEY  (`kode_jadwal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_praktek`
--

INSERT INTO `jadwal_praktek` (`kode_jadwal`, `hari`, `jam_mulai`, `jam_selesai`, `kode_dokter`) VALUES
('J005', 'Tuesday', '07:00:00', '17:00:00', 'D005'),
('J004', 'Tuesday', '07:00:00', '17:00:00', 'D004'),
('J002', 'Monday', '07:00:00', '17:00:00', 'D002'),
('J003', 'Monday', '07:00:00', '17:00:00', 'D003'),
('J001', 'Monday', '07:00:00', '17:00:00', 'D001'),
('J006', 'Tuesday', '07:00:00', '17:00:00', 'D006'),
('J007', 'Wednesday', '07:00:00', '17:00:00', 'D001'),
('J008', 'Wednesday', '07:00:00', '17:00:00', 'D005'),
('J009', 'Wednesday', '07:00:00', '17:00:00', 'D003'),
('J010', 'Tuesday', '07:00:00', '17:00:00', 'D002'),
('J011', 'Thursday', '07:00:00', '17:00:00', 'D004'),
('J012', 'Thursday', '07:00:00', '17:00:00', 'D006'),
('J013', 'Friday', '07:00:00', '17:00:00', 'D001'),
('J014', 'Friday', '07:00:00', '17:00:00', 'D004'),
('J015', 'Friday', '07:00:00', '17:00:00', 'D006'),
('J016', 'Saturday', '07:00:00', '17:00:00', 'D003'),
('J017', 'Saturday', '07:00:00', '17:00:00', 'D002'),
('J018', 'Saturday', '07:00:00', '17:00:00', 'D005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisbiaya`
--

CREATE TABLE IF NOT EXISTS `jenisbiaya` (
  `id_jenisbiaya` int(5) NOT NULL auto_increment,
  `nama_biaya` varchar(20) NOT NULL,
  `tarif` int(10) NOT NULL,
  PRIMARY KEY  (`id_jenisbiaya`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `jenisbiaya`
--

INSERT INTO `jenisbiaya` (`id_jenisbiaya`, `nama_biaya`, `tarif`) VALUES
(8, 'Jamkesmas', 2500),
(7, 'Askes', 5000),
(6, 'BPJS', 0),
(9, 'Umum', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  PRIMARY KEY  (`kode_obat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `merk`, `satuan`, `harga_jual`) VALUES
('C001', 'Parasetamol', 'Sambefarma', 'Tablet', 16000),
('C002', 'Antimo', 'Kalbefarma', 'Tablet', 12000),
('C003', 'Bodrek', 'Sambalado', 'tablet', 6000),
('C004', 'Komik', 'konidin', 'botolan', 9000),
('C005', 'Antangin', 'OBH', 'Cair', 2000),
('C006', 'Bintang Tujuh', 'Bejo', 'Cair', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obatout`
--

CREATE TABLE IF NOT EXISTS `obatout` (
  `no_out` int(11) NOT NULL auto_increment,
  `no` int(9) NOT NULL,
  `kode_obat` varchar(100) NOT NULL,
  `id_dosis` varchar(100) NOT NULL,
  `jumlah` int(9) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY  (`no_out`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `obatout`
--

INSERT INTO `obatout` (`no_out`, `no`, `kode_obat`, `id_dosis`, `jumlah`, `time`) VALUES
(17, 0, 'asasa', '1X', 5, '09:44:00'),
(18, 0, '001', '1', 5, '09:47:00'),
(19, 0, '001', '1', 3, '09:50:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `no_pasien` int(11) NOT NULL auto_increment,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `tanggal_lahir_pasien` date NOT NULL,
  `telp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  PRIMARY KEY  (`no_pasien`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nama_pasien`, `alamat_pasien`, `tanggal_lahir_pasien`, `telp`, `jenis_kelamin`, `tanggal_registrasi`) VALUES
(1, 'Susilo Prasetyo Utomo', 'Lungge', '1998-01-06', '1234567890123', 'Laki-laki', '2016-02-14'),
(3, 'Aldo Maulana', 'Bendo', '1998-06-09', '1234567890123', 'Laki-laki', '2016-02-14'),
(5, 'Ajun Al', 'Kauman', '2008-06-11', '1234567890123', 'Laki-laki', '2016-02-15'),
(6, 'M. Sururi', 'Windusari', '1997-09-27', '1234567890123', 'Laki-laki', '2016-02-16'),
(9, 'Bagas Setiawan', 'Ngumpul', '2016-02-24', '089678567', 'Laki-laki', '2016-02-18'),
(10, 'Ibnu Aji Ardiyanto', 'Danupayan', '1998-06-16', '085643227409', 'Laki-laki', '2016-02-22'),
(11, 'cobolo', 'jeketro', '1990-03-31', '086656565659', 'Laki-laki', '2016-02-22'),
(12, 'Dayan', 'Temanggung', '2015-05-14', '08123456789', 'Laki-laki', '2016-02-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `telepon_pegawai` varchar(12) NOT NULL,
  `jeniskelamin_pegawai` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama_pegawai`, `alamat_pegawai`, `telepon_pegawai`, `jeniskelamin_pegawai`, `username`, `password`) VALUES
('002820282', 'Dendi', 'Kledung', '085676767678', 'perempuan', 'dendi', 'dendi'),
('69696969696969', 'Dinday', 'Kasihan', '0878777769', 'Laki-laki', 'DinnDay', 'huhuhu'),
('1998199765787', 'Ansor', 'Jakarta', '086798756', 'Laki-laki', 'ansor', 'manan'),
('748493930', 'Santiko Dwi', 'Lungge', '08763836829', 'perempuan', 'santiko', 'santiko'),
('1234', 'Fahreza', 'Butuh', '085866111231', 'Laki-laki', 'Fahreza', '1234'),
('987654321', 'Bagas Setiawan', 'Kedungumpul Kandangan Temanggung', '08564321177', 'Laki-laki', 'bagas', 'bagas'),
('13565', 'Aldo', 'Bendo,', '085600439293', 'Laki-laki', 'aldo', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `no_pemeriksaan` int(11) NOT NULL auto_increment,
  `no_pendaftaran` varchar(4) NOT NULL,
  `keluhan` varchar(225) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `perawatan` varchar(100) NOT NULL,
  `tindakan` varchar(225) NOT NULL,
  `berat_badan` int(4) NOT NULL,
  `tensi_diastolik` varchar(4) NOT NULL,
  `tensi_sistolik` varchar(4) NOT NULL,
  `no_resep` varchar(15) NOT NULL,
  PRIMARY KEY  (`no_pemeriksaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`no_pemeriksaan`, `no_pendaftaran`, `keluhan`, `diagnosa`, `perawatan`, `tindakan`, `berat_badan`, `tensi_diastolik`, `tensi_sistolik`, `no_resep`) VALUES
(69, '189', 'Sakit Hati', 'Putus Cinta', 'Puasa', 'Move On', 70, '120', '70', 'RSP03'),
(90, '195', 'Mual, pusing', 'Amnesia', 'Makan yang Kasar', 'Pemberian obat', 70, '120', '70', 'RSP06'),
(73, '190', 'Mencret', 'Jantung', 'makan yang ada Bakterinya', 'Amputansi', 99, '8787', '5645', 'RSP04'),
(61, '191', 'Pusing', 'Hamil', 'Makan yang Kasar', 'Melahirkan', 85, '120', '70', 'RSP02'),
(83, '193', 'Mual, pusing', 'mikir utang', 'kerja keras', 'ngendat', 180, '150', '150', 'RSP05'),
(82, '192', 'Mual, pusing', 'tipes', 'Makan yang halus', 'Pemberian obat', 60, '120', '70', 'RSP01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL auto_increment,
  `no_pasien` int(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `kode_jadwal` varchar(5) NOT NULL,
  `id_jenisbiaya` varchar(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  PRIMARY KEY  (`no_pendaftaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `no_pasien`, `tgl_pendaftaran`, `no_urut`, `kode_jadwal`, `id_jenisbiaya`, `nip`) VALUES
(192, 9, '2016-02-22', 4, 'J001', '9', '69696969696969'),
(193, 11, '2016-02-22', 5, 'J003', '9', '002820282'),
(189, 1, '2016-02-22', 1, 'J002', '8', '002820282'),
(190, 3, '2016-02-22', 2, 'J003', '7', '748493930'),
(191, 6, '2016-02-22', 3, 'J001', '9', '987654321'),
(194, 3, '2016-02-23', 1, 'J010', '7', '748493930'),
(195, 12, '2016-02-23', 2, 'J010', '8', '002820282');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kode_poli` varchar(5) NOT NULL,
  `nama_poli` varchar(30) NOT NULL,
  `alamat_poli` varchar(50) NOT NULL,
  `telepon_poli` varchar(12) NOT NULL,
  PRIMARY KEY  (`kode_poli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id_resep` int(11) NOT NULL auto_increment,
  `no_resep` varchar(15) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `id_dosis` varchar(4) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY  (`id_resep`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `no_resep`, `kode_obat`, `id_dosis`, `jumlah`) VALUES
(35, 'RSP02', 'C001', 'D3', 5),
(34, 'RSP02', 'C002', 'D4', 10),
(59, 'RSP05', 'C002', 'D3', 100),
(58, 'RSP01', 'C001', 'D2', 4),
(41, 'RSP03', 'C001', 'D3', 6),
(40, 'RSP03', 'C002', 'D1', 5),
(57, 'RSP01', 'C002', 'D1', 5),
(47, 'RSP04', 'C001', 'D2', 8),
(46, 'RSP04', 'C002', 'D2', 4),
(56, 'RSP01', 'C003', 'D3', 5),
(60, 'RSP05', 'C006', 'D5', 80),
(66, 'RSP06', 'C006', 'D1', 8),
(65, 'RSP06', 'C002', 'D3', 7),
(64, 'RSP06', 'C003', 'D1', 6);
