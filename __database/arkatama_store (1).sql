-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2023 at 12:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkatama_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `banner` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `name`, `url`, `banner`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Banner Januari', 'https://arkatama.id/1', '1.jpg', 1, '2023-01-01 13:02:23', '2023-01-01 13:02:23'),
(2, 'Banner Februari', 'https://arkatama.id/1', '2.jpg', 0, '2023-01-01 13:02:23', '2023-01-02 13:02:23'),
(3, 'Banner Maret', 'https://arkatama.id/1', '3.jpg', 1, '2023-01-01 13:02:23', '2023-01-01 13:02:23'),
(4, 'Banner April', 'https://arkatama.id/1', '4.jpg', 0, '2023-01-01 13:02:23', '2023-01-03 13:02:23'),
(5, 'Banner Mei', NULL, '5.jpg', 1, '2023-01-01 13:02:23', '2023-01-01 13:02:23'),
(6, 'Banner Juni', 'https://arkatama.id/1', '6.jpg', 1, '2023-01-01 13:02:23', '2023-01-03 13:02:23'),
(7, 'Banner Juli', NULL, '7.jpg', 0, '2023-01-01 13:02:23', '2023-01-02 13:02:23'),
(8, 'Banner Agustus', 'https://arkatama.id/1', '8.jpg', 1, '2023-01-01 13:02:23', '2023-01-07 13:02:23'),
(9, 'Banner September', 'https://arkatama.id/1', '9.jpg', 0, '2023-01-01 13:02:23', '2023-01-08 13:02:23'),
(10, 'Banner Oktober', NULL, '10.jpg', 1, '2023-01-01 13:02:23', '2023-01-05 13:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Katgeori 1', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(2, 'Katgeori 2', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(3, 'Katgeori 3', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(4, 'Katgeori 4', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(5, 'Katgeori 5', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(6, 'Katgeori 6', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(7, 'Katgeori 7', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(8, 'Katgeori 8', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(9, 'Katgeori 9', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(10, 'Katgeori 10', '2023-04-01 15:00:00', '2023-04-01 15:00:00'),
(11, 'Kategori 11', NULL, NULL),
(13, 'Kategori 12', NULL, NULL),
(14, 'Kategori 13', NULL, NULL),
(16, 'Kategori 14', NULL, NULL),
(17, 'Kategori 15', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_product_kategori`
-- (See below for the actual view)
--
CREATE TABLE `data_product_kategori` (
`produk` varchar(100)
,`kategori` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_product_kategory_new`
-- (See below for the actual view)
--
CREATE TABLE `data_product_kategory_new` (
`kategori` varchar(100)
,`nama_produk` varchar(100)
,`deskripsi_produk` text
,`harga` decimal(10,2)
,`status` enum('accepted','rejected','waiting')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_product_status_selain_disetujui`
-- (See below for the actual view)
--
CREATE TABLE `data_product_status_selain_disetujui` (
`produk` varchar(100)
,`kategori` varchar(100)
,`status` enum('accepted','rejected','waiting')
);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `size` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `size`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Produk 1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '40000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1),
(2, 'Produk 7', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '10000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1),
(3, 'Produk 13', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '20000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1),
(4, 'Produk 99', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '11000.00', '2023-04-08 06:11:39', '2023-04-08 06:11:39', 1),
(5, 'Produk 69', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '12000.00', '2023-04-08 06:11:39', '2023-04-08 06:11:39', 1),
(6, 'Produk 39', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '13000.00', '2023-04-08 06:11:39', '2023-04-08 06:11:39', 1),
(7, 'Produk 49', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '14000.00', '2023-04-08 06:11:39', '2023-04-08 06:11:39', 1),
(8, 'Produk 31', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '15000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(9, 'Produk 32', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '16000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(10, 'Produk 32', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '17000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(11, 'Produk 33', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '18000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(12, 'Produk 34', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '19000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(13, 'Produk 35', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '20000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(14, 'Produk 36', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '21000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(15, 'Produk 37', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '22000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(16, 'Produk 38', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '23000.00', '2023-04-08 06:17:06', '2023-04-08 06:17:06', 1),
(17, 'Produk 3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '15000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1),
(18, 'Produk 27', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '25000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1),
(19, 'Produk 21', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1),
(20, 'Produk 25', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlah_product_per_kategori`
-- (See below for the actual view)
--
CREATE TABLE `jumlah_product_per_kategori` (
`kategori` varchar(100)
,`jumlah_produk` bigint
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('accepted','rejected','waiting') NOT NULL DEFAULT 'waiting',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int NOT NULL,
  `verified_at` datetime DEFAULT NULL,
  `verified_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `status`, `created_at`, `updated_at`, `created_by`, `verified_at`, `verified_by`) VALUES
(1, 9, 'Produk 1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '40000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(2, 5, 'Produk 2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '35000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(3, 6, 'Produk 3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '15000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(4, 10, 'Produk 4', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '30000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(5, 4, 'Produk 5', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '40000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(6, 2, 'Produk 6', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '45000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(7, 10, 'Produk 7', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '10000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(8, 1, 'Produk 8', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '15000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(9, 1, 'Produk 9', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '45000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(10, 4, 'Produk 10', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(11, 2, 'Produk 11', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '45000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(12, 4, 'Produk 12', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '40000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(13, 10, 'Produk 13', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '20000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(14, 4, 'Produk 14', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '45000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(15, 5, 'Produk 15', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '45000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(16, 7, 'Produk 16', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(17, 6, 'Produk 17', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '40000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(18, 3, 'Produk 18', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '20000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(19, 10, 'Produk 19', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '10000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(20, 9, 'Produk 20', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '25000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(21, 5, 'Produk 21', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(22, 8, 'Produk 22', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '40000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(23, 7, 'Produk 23', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(24, 7, 'Produk 24', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '25000.00', 'rejected', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(25, 8, 'Produk 25', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '50000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(26, 2, 'Produk 26', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '10000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(27, 4, 'Produk 27', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '25000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(28, 4, 'Produk 28', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '25000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(29, 3, 'Produk 29', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '45000.00', 'accepted', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(30, 9, 'Produk 30', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab non amet quod quos earum voluptatem eius voluptas quasi odit, praesentium nemo repellat est delectus et nulla officia corporis ex!', '30000.00', 'waiting', '2023-04-02 06:30:17', '2023-04-02 06:30:17', 1, NULL, NULL),
(31, 11, 'new product', 'ini adalah produk baru', '15000.00', 'waiting', NULL, NULL, 1, NULL, NULL),
(47, 13, 'new product katalog 12', 'ini adalah produk baru', '17000.00', 'waiting', NULL, NULL, 1, NULL, NULL),
(48, 13, 'new product katalog 12', 'ini adalah produk baru', '20000.00', 'accepted', NULL, NULL, 1, NULL, NULL),
(52, 16, 'new product katalog 14', 'ini adalah produk baru yang diluncurkan oleh arkatama_store', '30000.00', 'accepted', NULL, NULL, 1, NULL, NULL),
(53, 16, 'new product katalog 14', 'ini adalah produk baru namun masih dalam tahap pengembangan', '25000.00', 'rejected', NULL, NULL, 1, NULL, NULL),
(54, 16, 'new product katalog 14', 'ini adalah produk baru yang diluncurkan oleh arkatama_store', '30000.00', 'accepted', NULL, NULL, 1, NULL, NULL),
(55, 16, 'new product katalog 14', 'ini adalah produk baru namun masih dalam tahap pengembangan', '25000.00', 'rejected', NULL, NULL, 1, NULL, NULL),
(56, 16, 'new product katalog 14', 'ini adalah produk baru yang diluncurkan oleh arkatama_store', '30000.00', 'accepted', NULL, NULL, 1, NULL, NULL),
(57, 16, 'new product katalog 14', 'ini adalah produk baru namun masih dalam tahap pengembangan', '25000.00', 'rejected', NULL, NULL, 1, NULL, NULL),
(58, 17, 'new product katalog 15', 'ini adalah produk baru yang diluncurkan oleh arkatama_store dan berhasil menarik banyak pelanggan dengan harga terjangkau', '20000.00', 'accepted', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` enum('admin','staff') NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `role`, `avatar`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1@gmail.com', 'Diah Paramitha', 'admin', 'IMG_20221008_144946.jpg', '081234567899', 'Jln. Kenangan', '$2y$10$OlGv/Cch4PI5P9Z428KSQOvrvPtA7J1i4GiexmWkiQ8VyRqjLSY2e', '2023-04-08 06:05:33', '2023-05-19 18:26:45'),
(12, 'freakgirlyu@gmail.com', 'diahhh', 'staff', 'IMG_20220503_101859.jpg', '089765456789', 'Jln. Hidup adalah ninja', '$2y$10$flHl5cdcbpYyR70ngYwPOuXLPBA8pjOG0Eg09PcNQfyasNh2sFvKC', '2023-05-20 11:23:44', '2023-05-20 12:18:47'),
(13, 'paramitah@gmail.com', 'paramitah', 'staff', 'Rohani_DiahParamitha.jpg', '087654345213', 'Jln. gada belok', '$2y$10$MuQTPy6a3gHU5mGgpGSRJOeKZp4nxB2Wq6K7T7TaET0a0BcgOjzRu', '2023-05-20 12:18:20', '2023-05-20 12:18:20'),
(14, 'mitha@gmail.com', 'mitha', 'staff', 'IMG-20220128-WA0029.jpg', '089767543421', 'Jln. hati-hatiku', '$2y$10$YAmMZWQjGb/F3tNKswp1VO7uwsz2UncYhU3YHkzBMFuXci42V6YY.', '2023-05-20 12:21:38', '2023-05-20 12:21:38');

-- --------------------------------------------------------

--
-- Structure for view `data_product_kategori`
--
DROP TABLE IF EXISTS `data_product_kategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_product_kategori`  AS SELECT `p`.`name` AS `produk`, `c`.`name` AS `kategori` FROM (`products` `p` join `categories` `c` on((`p`.`category_id` = `c`.`id`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `data_product_kategory_new`
--
DROP TABLE IF EXISTS `data_product_kategory_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_product_kategory_new`  AS SELECT `c`.`name` AS `kategori`, `p`.`name` AS `nama_produk`, `p`.`description` AS `deskripsi_produk`, `p`.`price` AS `harga`, `p`.`status` AS `status` FROM (`products` `p` join `categories` `c` on((`p`.`category_id` = `c`.`id`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `data_product_status_selain_disetujui`
--
DROP TABLE IF EXISTS `data_product_status_selain_disetujui`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_product_status_selain_disetujui`  AS SELECT `p`.`name` AS `produk`, `c`.`name` AS `kategori`, `p`.`status` AS `status` FROM (`products` `p` join `categories` `c` on((`p`.`category_id` = `c`.`id`))) WHERE (`p`.`status` <> 'accepted')  ;

-- --------------------------------------------------------

--
-- Structure for view `jumlah_product_per_kategori`
--
DROP TABLE IF EXISTS `jumlah_product_per_kategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah_product_per_kategori`  AS SELECT `c`.`name` AS `kategori`, count(`p`.`id`) AS `jumlah_produk` FROM (`products` `p` join `categories` `c` on((`p`.`category_id` = `c`.`id`))) GROUP BY `kategori``kategori`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `verified_by` (`verified_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
