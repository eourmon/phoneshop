-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2023 at 05:48 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `deposit` int DEFAULT NULL,
  `storage` int DEFAULT NULL,
  `ram` int DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `b_id` int DEFAULT NULL,
  `t_id` int DEFAULT NULL,
  `s_id` int DEFAULT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `photo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `title`, `price`, `deposit`, `storage`, `ram`, `discount`, `b_id`, `t_id`, `s_id`, `phone_number`, `email`, `name`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(11, 2, 15, 'iPhone 12 Mini 128G', '669', 100, 128, 8, NULL, 1, 1, 1, '3434', 'test@gamil.com', 'test', 'uploads/product/oz7rL0A73RliUXKbNrd4ZTdz88znO7ljWiNCOSXz.jpg', '<p>iPhone 12 Mini 128G<br></p>', 2, '2023-03-11 10:08:01', '2023-03-11 10:08:01'),
(10, 1, 21, 'Samsung Galaxy S22 8GB 256GB', '899', 1, 256, 8, 0.1, 7, 1, 1, '0962834327', 'eourmon@gmail.com', 'Eour Mon', 'uploads/product/KO2sCnC6rn2RcprZew8Umh5AGdLoqlsIpWgxZJiY.png', '<p>Samsung Galaxy S22 8GB 256GB<br></p>', 1, '2023-03-11 04:15:14', '2023-03-11 04:15:14'),
(9, 1, 25, 'iPhone 14 256GB', '678.00', 100, 128, 1, 0.1, 1, 1, 1, '0962834327', 'eourmon@gmail.com', 'Eour Mon', 'uploads/product/n0RYJPf9PxEozgcBL7zPiBbUhfNDsCaPIyXm3len.jpg', '<p><br></p>', 1, '2023-03-11 04:12:04', '2023-03-11 04:12:04'),
(4, 1, 32, 'iPhone', '450.00', 1, 128, 8, 0, 1, 2, 1, '0962834327', 'eourmon@gmail.com', 'Eour Mon', 'uploads/product/uJlJHellGUJr3p18Lw3KXzOx9iB3DAiRrIFGilew.png', '<p><br></p>', 1, '2023-03-07 05:00:02', '2023-03-07 05:00:02'),
(5, 1, 15, 'iPhone 12 Mini 128G', '669', 100, 128, 8, NULL, 1, 1, 1, '0962834327', 'eourmon@gmail.com', 'Eour Mon', 'uploads/product/oz7rL0A73RliUXKbNrd4ZTdz88znO7ljWiNCOSXz.jpg', '<p>iPhone 12 Mini 128G<br></p>', 1, '2023-03-07 07:12:11', '2023-03-07 07:12:11'),
(8, 2, 32, 'iPhone', '450.00', 1, 128, 8, 0, 1, 2, 1, '3434', 'test@gamil.com', 'test', 'uploads/product/uJlJHellGUJr3p18Lw3KXzOx9iB3DAiRrIFGilew.png', '<p><br></p>', 2, '2023-03-10 03:59:47', '2023-03-10 03:59:47'),
(12, 2, 3, 'Vivo pro  13', '15000', 343, 128, 16, 0.5, 3, 1, 1, '3434', 'test@gamil.com', 'test', 'uploads/product/WvbzCl8F2p9J8ZPz7QOEB1sCWyfY7gnVClz0IS7H.png', '<p>DFSF</p>', 2, '2023-03-11 10:08:26', '2023-03-11 10:08:26'),
(13, 3, 10, 'iPhone 12', '1200', 3, 12, 244, 34, 1, 1, 1, '09872742', 'chorkpheara@gmail.com', 'Chork Pheara', 'uploads/product/QkZ13ERCIQUl1So3fVKOwNJUyBo9huQMWTMaCjzU.jpg', NULL, 1, '2023-03-11 15:49:39', '2023-03-11 15:49:39'),
(14, 3, 20, 'Samsung Galaxy S22 8GB 128GB', '849', 1, 128, 8, 0.5, 7, 1, 1, '09872742', 'chorkpheara@gmail.com', 'Chork Pheara', 'uploads/product/T4e4A6CyELHjkfr0gQeYk8w7W61a6rAjL1hA0Z5F.png', '<p>Samsung Galaxy S22 8GB 128GB<br></p>', 1, '2023-03-11 15:49:50', '2023-03-11 15:49:50'),
(15, 3, 3, 'Vivo pro  13', '15000', 343, 128, 16, 0.5, 3, 1, 1, '09872742', 'chorkpheara@gmail.com', 'Chork Pheara', 'uploads/product/WvbzCl8F2p9J8ZPz7QOEB1sCWyfY7gnVClz0IS7H.png', '<p>DFSF</p>', 1, '2023-03-11 15:50:00', '2023-03-11 15:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `logo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `phone` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `logo`, `description`, `phone`, `email`, `address`, `created_at`) VALUES
(1, 'One-Store', 'uploads/companies/BXZA15xcDyfgPIfEba0sQLXUZPWTlYM0avJUxDjp.png', 'Stay in touch with latest updates about our products and offers', '081 777 025, 081 777 155', 'info@pos-system.com', 'No 546, street 1982, Sangkat Phnom Penh Thmey, Khan Sen Sok, Phnom Penh, Cambodia.', '2022-07-28 08:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `photo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `user` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `photo`, `description`, `user`, `date`, `active`, `created_at`) VALUES
(1, 'Hacker Database System', 'uploads/news/qDh65XerQO5K9ubW3SDYFElVj5Cvj3b5gsWdDBqH.jpg', '<p><span style=\"font-weight: bolder; color: rgb(68, 68, 68); font-family: &quot;PT Serif&quot;, serif; font-size: 15px; text-align: justify;\">Although Hollywood pundits</span><span style=\"color: rgb(68, 68, 68); font-family: &quot;PT Serif&quot;, serif; font-size: 15px; text-align: justify;\">&nbsp;have reported that Kyler Park’s back story could become part of Cobra Kai’s</span><br></p>', 'Eour Mon', '2023-02-01', 1, '2023-02-01 02:50:58'),
(2, 'Linux System Attack', 'uploads/news/VPMYGsfdCv51M2VTkf5SKtYQqMF0FrrIEMwh3mGu.jpg', '<span style=\"margin: 0px; padding: 0px; font-family: &quot;PT Serif&quot;, serif; font-weight: bolder; color: rgb(68, 68, 68); font-size: 15px; text-align: justify;\">Although Hollywood pundits</span><span style=\"margin: 0px; padding: 0px; font-family: &quot;PT Serif&quot;, serif; color: rgb(68, 68, 68); font-size: 15px; text-align: justify;\">&nbsp;have reported that Kyler Park’s back story could become part of Cobra Kai’s</span><br>', 'test1', '2023-02-01', 1, '2023-02-01 02:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `alias` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `alias`) VALUES
(1, 'role', 'Roles'),
(2, 'user', 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `active`, `create_at`) VALUES
(1, 'Administrator', 1, '2023-01-14 04:55:01'),
(2, 'Accountant', 1, '2023-01-14 04:55:17'),
(3, 'IT Admin', 1, '2023-01-14 04:55:24'),
(4, 'Officer', 1, '2023-01-14 04:55:32'),
(5, 'Saller', 1, '2023-01-14 04:55:41'),
(6, 'Accountant', 1, '2023-01-14 04:59:01'),
(7, 'Sale', 1, '2023-01-14 05:01:19'),
(8, 'Supplier', 1, '2023-01-14 05:02:25'),
(9, 'Testing', 1, '2023-01-18 04:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
CREATE TABLE IF NOT EXISTS `role_permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `list` tinyint NOT NULL DEFAULT '0',
  `create` tinyint NOT NULL DEFAULT '0',
  `edit` tinyint NOT NULL DEFAULT '0',
  `delete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `list`, `create`, `edit`, `delete`) VALUES
(1, 3, 1, 0, 0, 0, 0),
(2, 3, 2, 0, 0, 0, 0),
(3, 1, 2, 1, 1, 1, 1),
(4, 1, 1, 1, 1, 1, 1),
(5, 8, 2, 0, 0, 0, 0),
(6, 8, 1, 0, 0, 0, 0),
(7, 9, 1, 0, 1, 1, 1),
(8, 9, 2, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sequence` tinyint NOT NULL DEFAULT '1',
  `active` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `photo`, `sequence`, `active`, `created_at`) VALUES
(1, 'uploads/slides/SGt27fHcjvx3V2SJd7KDxf5Egb7VM5opPlYnqroL.jpg', 1, 1, '2023-02-01 01:38:46'),
(2, 'uploads/slides/kL6WuUVwvrFwzH4Ga0dUpvGTZmXjOnQgW8vA9RCw.jpg', 1, 1, '2023-02-01 01:38:51'),
(3, 'uploads/slides/MIFIUqbSAiIUdI85XaaNVb7cv8fTZQJM7QSPfdHy.jpg', 1, 0, '2023-02-01 01:38:55'),
(4, 'uploads/slides/oGlz31wubAo37EH2Ulx5df9AYf2gRjxaLx3msD9E.jpg', 1, 1, '2023-02-01 01:38:58'),
(5, 'uploads/slides/y1LjjT2suGSvJ8Aqh4TLWoBrVZP4KVgvSpdJ13pV.jpg', 1, 0, '2023-02-01 01:39:01'),
(6, 'uploads/slides/ftiQnuU5QRkLMXxRAMeFRw07XmxhD2e3vR8cXHBs.jpg', 1, 1, '2023-02-01 01:39:05'),
(7, 'uploads/slides/SFM5Gud8H7KEe201MC1Bw7UVH2D4pPvuip2oDHQP.jpg', 1, 1, '2023-02-01 01:39:08'),
(8, 'uploads/slides/U1Vl8I4NJt9OqpZHs6xeo9U3ofeyhN1xyslkdYTt.jpg', 1, 1, '2023-02-01 01:39:13'),
(9, 'uploads/slides/ZGIY8WLxkzlyLXD7yQyhGKPqKd836KrnY14kyRzt.jpg', 1, 1, '2023-02-01 01:39:18'),
(10, 'uploads/slides/2DDRrVyF5tBpwJeZ0tCwMR6CyaJ5B5U9PKmoSwjT.jpg', 1, 0, '2023-02-01 01:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

DROP TABLE IF EXISTS `socials`;
CREATE TABLE IF NOT EXISTS `socials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `icon` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `url` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `url`, `active`, `created_at`) VALUES
(1, 'Facebook', 'facebook', 'https://web.facebook.com/deltaplc', 1, '2022-07-29 07:51:43'),
(2, 'YouTube', 'youtube', 'https://www.youtube.com/channel/UCsjWn-uG90XP2QpBIQj5ZZg/featured', 0, '2022-07-29 10:02:04'),
(3, 'Twitter', 'twitter', 'https://www.twitter.com/deltaplc1', 1, '2022-07-29 14:19:57'),
(4, 'Instagram', 'instagram', 'https://web.instagram.com/deltaplc', 1, '2022-07-29 14:20:50'),
(5, 'Linkedin', 'linkedin', 'https://web.linkedin.com/deltaplc', 1, '2022-07-29 14:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `specialoffer`
--

DROP TABLE IF EXISTS `specialoffer`;
CREATE TABLE IF NOT EXISTS `specialoffer` (
  `id` int DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `photo` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `price` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `discount` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `finalprice` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `deadline` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `active` char(1) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `specialoffer`
--

INSERT INTO `specialoffer` (`id`, `title`, `photo`, `price`, `discount`, `finalprice`, `deadline`, `active`) VALUES
(1, 'iPhone 14 Pro', 'assets/img/specialoffer/1.jpg', '$1,279', '$60 OFF', '$1,219', 'Ends on 12 Dec 2022', NULL),
(2, 'Galaxy S22 Ultra', 'assets/img/specialoffer/2.png', '$1,299', '$150 OFF', '$1,149', 'Ends on 25 Dec 2022', NULL),
(3, 'Galaxy Z Flip 3 5G', 'assets/img/specialoffer/3.png', '$849', '$69 OFF', '$780', 'Ends on 20 Nov 2022', NULL),
(4, 'iPhone 13 Pro Max', 'assets/img/specialoffer/4.jpg', '$1,189', '$110 OFF', '$1,079', 'Ends on 20 Nov 2022', NULL),
(5, 'iPhone 13 Pro', 'assets/img/specialoffer/5.png', '$1,099', '$110 OFF', '$989', 'Ends on 20 Nov 2022', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Available', 1, '2023-01-11 06:44:54'),
(2, 'Not Available', 1, '2023-01-11 06:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrand`
--

DROP TABLE IF EXISTS `tblbrand`;
CREATE TABLE IF NOT EXISTS `tblbrand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `photo` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tblbrand`
--

INSERT INTO `tblbrand` (`id`, `name`, `photo`, `status`, `created_at`) VALUES
(1, 'iPhone', 'uploads/brand/ZyZ4iFOcMgec4gGFh4QFxMzJQyeu1SquuefebHrn.jpg', 1, '2023-01-10 07:22:09'),
(2, 'Samsung', 'uploads/brand/CFEXQSOjuMw1ifcKjnh4UUixxVjrp2ro7ZSVADii.jpg', 0, '2023-01-10 08:33:50'),
(3, 'Oppo', 'uploads/brand/5eV3W7oVffDctF9I8mRsgGJa2pV3zN1nLuJqdbox.png', 1, '2023-01-10 09:04:02'),
(4, 'Vivo', 'uploads/brand/sCNtLGpxgdEN0YTC1andll41GoibTJmSXhHjoWLd.png', 1, '2023-01-10 09:04:10'),
(5, 'Apple', 'uploads/brand/laEe0QYEEUCy7ZHK5mla8Ndg9ne2FdguaPkjw5p6.jpg', 0, '2023-01-11 01:42:54'),
(6, 'Dell', 'uploads/brand/YTmaBDGZpAit9GCmIAzkZmkpbEclYBPZVtBgcuxo.jpg', 0, '2023-01-12 09:41:01'),
(7, 'Samsung', 'uploads/brand/ymrqFIJ3JhZFgALhS6B99On52ekqvwbVTKWCoqi3.png', 1, '2023-01-24 03:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

DROP TABLE IF EXISTS `tblcart`;
CREATE TABLE IF NOT EXISTS `tblcart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `payment_id` int NOT NULL,
  `cart_detail_id` int NOT NULL,
  `status` int NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `payment_id` (`payment_id`),
  KEY `cart_detail_id` (`cart_detail_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcartdetail`
--

DROP TABLE IF EXISTS `tblcartdetail`;
CREATE TABLE IF NOT EXISTS `tblcartdetail` (
  `cart_id` int NOT NULL,
  `phone_id` int NOT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`cart_id`,`phone_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcartstatus`
--

DROP TABLE IF EXISTS `tblcartstatus`;
CREATE TABLE IF NOT EXISTS `tblcartstatus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `deposit` int DEFAULT NULL,
  `storage` int DEFAULT NULL,
  `ram` int DEFAULT NULL,
  `discount` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `b_id` int DEFAULT NULL,
  `t_id` int DEFAULT NULL,
  `s_id` int DEFAULT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `photo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` int DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `title`, `price`, `deposit`, `storage`, `ram`, `discount`, `b_id`, `t_id`, `s_id`, `description`, `photo`, `status`, `created_at`) VALUES
(25, 'iPhone 14 256GB', '678.00', 100, 128, 1, '00.10', 1, 1, 1, '<p><br></p>', 'uploads/product/n0RYJPf9PxEozgcBL7zPiBbUhfNDsCaPIyXm3len.jpg', 1, '2023-01-24 07:01:02'),
(3, 'Vivo pro  13', '15000', 343, 128, 16, '0.5', 3, 1, 1, '<p>DFSF</p>', 'uploads/product/WvbzCl8F2p9J8ZPz7QOEB1sCWyfY7gnVClz0IS7H.png', 1, '2023-01-11 09:17:37'),
(26, 'Vivo testing', '1200', 2, 128, 8, '0', 4, 1, 1, '<p><br></p>', 'uploads/product/hlUi8qBESmB8xXBT7wEYM5tT75z1ktKdy4EZhD3W.png', 1, '2023-02-10 09:17:13'),
(27, 'Vivo Pro', '500', 2, 250, 16, '0', 4, 1, 1, '<p><br></p>', 'uploads/product/tvWDbBVbt0BFJCFYw9hNbPdskWNyh3dMoVjxPtd6.png', 1, '2023-02-10 09:18:02'),
(8, 'iPhone 12 pro Max', '1250', 3, 3412, 16, '0.5', 1, 1, 1, '<p>Iphone 12 pro max</p>', 'uploads/product/Pq8WezuWBhhTrmBoLxNap2PEKdciAjQdXKSK03VF.png', 1, '2023-01-12 02:11:00'),
(10, 'iPhone 12', '1200', 3, 12, 244, '34', 1, 1, 1, NULL, 'uploads/product/QkZ13ERCIQUl1So3fVKOwNJUyBo9huQMWTMaCjzU.jpg', 1, '2023-01-13 06:32:00'),
(11, 'iPhone 13 256GB', '873', 1, 256, 6, NULL, 1, 1, 1, NULL, 'uploads/product/QmGiaJ56pr6avc9oPuGP1Of1wBaB25ngvucaUAik.jpg', 1, '2023-01-18 09:21:36'),
(16, 'iPhone 12 Mini 128G', '819', 2, 128, 8, NULL, 1, 1, 1, 'iPhone 12 Mini 128G', 'uploads/product/DwVUF5H6tDbqK2Kvia5yEdMnZgqgKNjVBd7whLkx.jpg', 1, '2023-01-24 04:55:24'),
(17, 'Samsung Galaxy S22 Ultra', '1333', 1, 250, 16, '0.5', 7, 1, 1, '<p>Samsung Galaxy S22 Ultra 12GB 512GB<br></p>', 'uploads/product/TD2foaEH2HJGS7TOY9NkpWeHHiuUm8uxamcN5NkR.png', 1, '2023-01-24 06:31:11'),
(18, 'Samsung Galaxy Z Fold4 512GB', '1899', 1, 250, 8, '0', 7, 1, 1, '<p>Samsung Galaxy Z Fold4 512GB<br></p>', 'uploads/product/7CnjnjCr6Sq17IuamHbbyIxqRIxVP0LWvKCpe3DM.png', 1, '2023-01-24 06:32:18'),
(19, 'Samsung Galaxy Z Flip4 256GB', '1200', 1, 250, 16, '0', 7, 1, 1, '<p>Samsung Galaxy Z Flip4 256GB<br></p>', 'uploads/product/3z4lXjd8Qe1ha5XTGb7TXp3SSL3xorppDeUtrM7k.png', 1, '2023-01-24 06:33:06'),
(20, 'Samsung Galaxy S22 8GB 128GB', '849', 1, 128, 8, '0.5', 7, 1, 1, '<p>Samsung Galaxy S22 8GB 128GB<br></p>', 'uploads/product/T4e4A6CyELHjkfr0gQeYk8w7W61a6rAjL1hA0Z5F.png', 1, '2023-01-24 06:36:45'),
(21, 'Samsung Galaxy S22 8GB 256GB', '899', 1, 256, 8, '0.1', 7, 1, 1, '<p>Samsung Galaxy S22 8GB 256GB<br></p>', 'uploads/product/KO2sCnC6rn2RcprZew8Umh5AGdLoqlsIpWgxZJiY.png', 1, '2023-01-24 06:37:20'),
(22, 'Samsung Galaxy S22 Plus 8GB 128GB', '999', 1, 128, 8, '0', 7, 1, 1, '<p>Samsung Galaxy S22 Plus 8GB 128GB<br></p>', 'uploads/product/fU2iOxOh94IbUfnWJ3LMQVoRpyHU9XBBo8HRiHls.png', 1, '2023-01-24 06:38:01'),
(23, 'Samsung Galaxy S22 Plus 8GB 256GB', '149', 1, 128, 8, NULL, 7, 1, 1, NULL, 'uploads/product/JIZvLdcooI1nQzOc6tCS52JN0dJsUWcUqdmPluCl.png', 1, '2023-01-24 06:46:07'),
(24, 'Samsung Galaxy S22 Ultra 12GB 256GB', '1299', 1, 256, 8, '0', 7, 1, 1, '<p>Samsung Galaxy S22 Ultra 12GB 256GB<br></p>', 'uploads/product/I1WqbiuE6TJinf2t4Lbuqy4NfZ452fOWFSJsHTOU.png', 1, '2023-01-24 06:49:15'),
(12, 'Vivo', '800', 3, 128, 8, '0.5', 4, 1, 1, '<p>vivo description</p>', 'uploads/product/RmSLicHoPRcmDUApS4nO3yZWcWnJJ1dITcCLYV1F.png', 1, '2023-01-24 03:24:36'),
(13, 'iPhone 11 pro Max', '600', 4, 128, 8, '0.5', 1, 1, 1, '<p>iPhone 11 pro max</p>', 'uploads/product/rCdwQJdgHB66XGO02w3mGI2TlZ3n7oWLTsogOx6O.jpg', 1, '2023-01-24 03:44:45'),
(28, 'Vivo Pro max', '800', 5, 512, 31, '0', 4, 1, 1, '<p><br></p>', 'uploads/product/wCKeNmxsjFju1ZxbULeX74wTNV00OZc4gmXzBt7C.png', 1, '2023-02-10 09:19:00'),
(29, 'Oppo v3', '300', 5, 128, 6, '0', 3, 1, 1, '<p><br></p>', 'uploads/product/NUEjhaUPFGT02NzeSEtQGf58oTkrF2QkwE0vtKCx.png', 1, '2023-02-10 09:28:25'),
(14, 'iPhone 13 256GB', '773', 2, 512, 8, '0.5', 1, 1, 1, '<p>some description</p>', 'uploads/product/5C92EB6N1UHMcnWIeVivEoPo6CrYcpqQThCBeFx6.jpg', 1, '2023-01-24 04:31:38'),
(15, 'iPhone 12 Mini 128G', '669', 100, 128, 8, NULL, 1, 1, 1, '<p>iPhone 12 Mini 128G<br></p>', 'uploads/product/oz7rL0A73RliUXKbNrd4ZTdz88znO7ljWiNCOSXz.jpg', 1, '2023-01-24 04:48:43'),
(30, 'Oppo pro', '250', 8, 128, 8, '0', 3, 1, 1, NULL, 'uploads/product/FORiyUure26YoQ8T5kjussjj5FyyH9qv4yVMYIDW.jpg', 1, '2023-02-10 09:29:14'),
(31, 'iPhone 11', '6400', 1, 128, 8, '0', 1, 1, 1, '<p><br></p>', 'uploads/product/TQjkZrLxW2shvR5GssJBgtgJKb5xnYtXquDqVfOo.jpg', 1, '2023-02-10 09:30:28'),
(32, 'iPhone', '450.00', 1, 128, 8, '0', 1, 2, 1, '<p><br></p>', 'uploads/product/uJlJHellGUJr3p18Lw3KXzOx9iB3DAiRrIFGilew.png', 1, '2023-02-18 03:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbltype`
--

DROP TABLE IF EXISTS `tbltype`;
CREATE TABLE IF NOT EXISTS `tbltype` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbltype`
--

INSERT INTO `tbltype` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'New', 1, '2023-01-10 04:23:01'),
(2, 'Secondhand', 1, '2023-01-10 04:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `phone_number` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `type` int DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL DEFAULT '123',
  `email` varchar(250) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `name`, `phone_number`, `type`, `password`, `email`, `status`, `created_at`) VALUES
(1, 'Eour Mon', '0962834327', NULL, '1@server', 'eourmon@gmail.com', 1, '2023-03-07 03:49:57'),
(2, 'test', '3434', NULL, '123', 'test@gamil.com', 1, '2023-03-07 03:53:49'),
(3, 'Chork Pheara', '09872742', NULL, '123', 'chorkpheara@gmail.com', 1, '2023-03-11 15:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

DROP TABLE IF EXISTS `tblusertype`;
CREATE TABLE IF NOT EXISTS `tblusertype` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`id`, `type`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint NOT NULL DEFAULT '1',
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `created_at`, `active`, `updated_at`, `username`, `role_id`) VALUES
(17, 'Eour Mon', 'eourmon@gmail.com', NULL, '$2y$10$E1Kmb9J7MnJxsFb55P1v7OdCfNxdcge5iV9zpVGmnc6ARs9pfD9fO', NULL, 'uploads/users/wOSsyKrn747OzzCfpupfqhtTGdMJh4Tv6Hlr7mPJ.jpg', '2021-01-29 03:27:56', 1, NULL, 'eourmon', 1),
(12, 'Admin', 'admin@gmail.com', NULL, '$2y$10$7ONANegBXtT0jQFf7lV/z.guYfSU1Q2pXAsPRQT937.bh8s1Ao9hC', 'DRVk2CL4ZApQRnQy0Zw4b8LysRfde8AVO85yMp9Gm3yrjnqJin5kNta5vIbJ', 'uploads/users/P33mnMNUFJDWIhrvcXDOXJaNO1PQmWPdCV4JQrjQ.png', NULL, 1, NULL, 'admin', 1),
(21, 'Chan Sreyroth', 'sreyroth@gmail.com', NULL, '$2y$10$NiUs84KSJ81DoFg5TWucveJKMrLTCBRFdHY8vYYT1/ylC89iqAYb6', NULL, 'uploads/users/Qoh4JwQnkJmbZhWsKcHoZOZW3AYVbzGpIpzwb7d7.jpg', '2023-01-16 08:09:22', 1, NULL, 'sreyroth', 9),
(22, 'Ly Naysereyvath', 'lynaysereyvath@gmail.com', NULL, '$2y$10$3.tIwuJVjzHKWChfkInMd.4kmCJ/.jbVyH4CnHNexqIolGtZar6ua', NULL, 'uploads/users/7h0Z4BUE9D8RfQLa1THa8wDvsPZxVWrF3WBaNY4u.ico', '2023-03-10 07:56:00', 1, NULL, 'sereyvath', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `tbluser_ibfk_1` FOREIGN KEY (`type`) REFERENCES `tblusertype` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
