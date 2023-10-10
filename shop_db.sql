-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2023 pada 09.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_product`, `qty`, `subtotal`) VALUES
(1, 1, 1, 12, 14666664);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `title`, `slug`) VALUES
(1, 'Smartphone', 'smartphone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` enum('waiting','paid','delivered','cancel') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date`, `invoice`, `total`, `name`, `address`, `phone`, `status`) VALUES
(1, 2, '2023-10-10', '220231010134754', 4888888, 'Tirta Afandi', 'Dsn. Kentong DS. Labuhan Kec. Brondong', '089612383979', 'cancel'),
(2, 2, '2023-10-10', '220231010134845', 1100000, 'Tirta Afandi', 'Dsn. Kentong DS. Labuhan Kec. Brondong', '089612383979', 'waiting'),
(3, 2, '2023-10-10', '220231010141715', 1222222, 'Tirta Afandi', 'Dsn. Kentong DS. Labuhan Kec. Brondong', '089612383979', 'waiting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_confirm`
--

CREATE TABLE IF NOT EXISTS `orders_confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_orders` int(11) NOT NULL,
  `account_name` varchar(225) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_detail`
--

CREATE TABLE IF NOT EXISTS `orders_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_orders` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `subtotal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `id_orders`, `id_product`, `qty`, `subtotal`) VALUES
(1, 1, 1, 4, 4888888),
(2, 2, 2, 1, 100000),
(3, 2, 3, 1, 1000000),
(4, 3, 1, 1, 1222222);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `id_category`, `slug`, `title`, `description`, `price`, `image`, `is_available`) VALUES
(1, 1, 'product1', 'product1', 'product1', 1222222, 'product1-20231009181416.png', 1),
(2, 1, 'product2', 'product 2', 'lorem ipsum dgfsgfs', 100000, 'product-2-20231010110607.png', 1),
(3, 1, 'product3', 'product3', 'product3', 1000000, 'product3-20231010111130.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `is_active`, `image`) VALUES
(1, 'user', 'admin@example.com', '$2y$10$GEmZqnn/aeI.GlzzE8SLzOb79Kdzi4mfNUSkfYEcU26LjVPS.h96a', 'member', 1, NULL),
(2, 'admin', 'admin@mamam.id', '$2y$10$v8Axt9ZgXXoQp5WLQMcQAOUCLg6yf1Ar6VKWF0/CbX6lcRuXcFYnS', 'admin', 1, 'admin-20231009182641.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
