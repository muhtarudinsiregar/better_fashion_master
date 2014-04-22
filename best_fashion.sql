-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2014 pada 11.17
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `best_fashion`
--
CREATE DATABASE IF NOT EXISTS `best_fashion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `best_fashion`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `visi`, `misi`) VALUES
(1, 'asasas', 'membuat para kawula muda menjadi fashionista tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `tanggal` text NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `tag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `tanggal`, `isi`, `status`, `tag`) VALUES
(3, 'diskon123', '21:38:24 2014-03-16', '<p>diskon akhir tahun emang keren</p>', 'publish', 'celana-panjang,street-jeans'),
(4, 'diskon', '07:16:45 2014-02-01', '<p>diskon akhir tahun emang kerenq</p>', 'publish', 'baju,baju-jeans,baju-bajuan'),
(6, 'diskon baru akhir tahun', '22:01:29 2014-03-18', 'ada yang baru lho dari better fashion <3', 'publish', 'tag,afafaf,asas'),
(7, 'tes', '09:53:27 2014-04-14', 'tes', 'Publish', 'tes,tesa1,rres,ta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `detail_barang` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `foto_asli` varchar(250) NOT NULL,
  `tags` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `detail_barang`, `kategori`, `foto`, `foto_asli`, `tags`) VALUES
(2, 'gorillaz concert tes baru ni', 100000, 'cotton combed 10x cek 123', '1', '12_thumb.JPG', '12.JPG', 'tes'),
(4, 'baju ', 9000, 'harga', '1', '1235445_10200127664107855_448582382_n_thumb.jpg', '', ''),
(6, 'abingdon boys clothing', 50000, 'baju  karya abingdon boys for u all, grab it fast!!!', '2', 'wallpaper-653922_thumb.jpg', '', 'band,abingdon boys,japan'),
(7, 'LLoyd ', 120000, 'terbuat dari bahan yang alami. dari dari benang-benang pilihan terbaik.', '2', 'lloud-hairstyle-s1_thumb.jpg', 'lloud-hairstyle-s1.jpg', 'cloth,men,casual,better fashion,jeans'),
(10, 'jack sparrow', 60000, 'terbuat dari es buatan', '4', 'tumblr_mdeb7qBstR1rkb57xo1_50011_thumb.jpg', 'tumblr_mdeb7qBstR1rkb57xo1_50011.jpg', 'sparrow,johnny depp,jony deep'),
(11, 'one piece anime', 50000, 'tes', '5', '00_(1)_thumb.jpg', '00_(1).jpg', 'one piece,luffy,topi jerami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `message`, `status`, `tanggal`) VALUES
(10, 'name', 'email', 'email tes ', 1, ''),
(11, '1', '1', '1', 1, ''),
(12, 'tes sore', 'tes sore', 'tes sore', 1, ''),
(13, 'tes sore', 'tes sore', 'tes sore', 1, ''),
(14, 'ali', 'ali', 'aki', 1, ''),
(15, 'qw', 'qw', 'qw', 1, ''),
(16, 'qw', 'qw', 'qw', 0, ''),
(17, 'qw', 'qw', 'qw', 0, ''),
(18, 'qw', 'qw', 'qw', 0, ''),
(19, 'qw', 'qw', 'qw', 0, ''),
(20, 'qw', 'qw', 'qw', 0, ''),
(21, 'qw', 'qw', 'qw', 0, ''),
(22, 'qw', 'qw', 'qw', 0, ''),
(23, 'qw', 'qw', 'qw', 1, ''),
(24, 'qw', 'qw', 'qw', 1, ''),
(25, 'qw', 'qw', 'qw', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'kemeja batik jogja'),
(2, 'celana jeans112'),
(3, 'celana gombrang'),
(4, 'celana panjang batik'),
(5, 'baju bola'),
(60, 'jeans batik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `g_plus` varchar(100) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `facebook`, `twitter`, `email`, `g_plus`, `no_telpon`, `informasi`) VALUES
(1, 'https://www.facebook.com/better-fashion', 'https://twitter.com/better_fashion', 'better_fashion@gmail.com', 'https://plus.google.com/u/0/112271661378486753881', '087755925565', 'Better Fashion adalah distro untuk kawula muda yang berada di daerah jgj1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '10bd3f40a4ebb18c8e7165019d352680f5f34bc7', 1268889823, 1397548203, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
