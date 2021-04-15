-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 09:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `FoodCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `FoodCategory`, `created_at`, `updated_at`) VALUES
(1001, 'Drink', '2020-07-29 23:58:29', '2020-07-29 23:58:29'),
(1002, 'burger', '2020-07-30 00:01:25', '2020-07-30 00:01:25'),
(1003, 'Breakfast', '2020-07-30 00:01:44', '2020-07-30 00:01:44'),
(1004, 'Happy Meal', '2020-07-30 00:01:55', '2020-07-30 00:01:55'),
(1005, 'Desserts & Sides', '2020-07-30 00:02:55', '2020-07-30 00:02:55'),
(1006, 'McCafé', '2020-07-30 00:05:37', '2020-07-30 00:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) UNSIGNED NOT NULL,
  `FoodName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FoodPrice` double(8,2) NOT NULL,
  `FoodImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FoodCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `FoodName`, `FoodPrice`, `FoodImage`, `FoodCategory`, `created_at`, `updated_at`) VALUES
(1, 'BigMac', 12.00, 'BigMac.jpg', '1002', '2020-07-30 00:22:48', '2020-07-30 00:22:48'),
(2, 'Beefburger', 10.00, 'beefburger.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(3, 'CheeseBurger', 8.00, 'cheeseburger.jpg', '1002', '2020-07-30 00:29:39', '2020-07-30 00:29:39'),
(4, 'Double Cheeseburger', 15.00, 'DoubleCheeseburger.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(5, 'Spicy Chicken McDeluxe', 12.00, 'SpicyChickenMcdeluxe.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(6, 'Gilled Chicken Burger', 13.00, 'GCB.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(7, 'Quarter Pounder with Cheese', 13.00, 'QPWC.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(8, 'Double Quarter Pounder with Cheese', 11.00, 'DQPWC.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(9, 'Filet-O-Fish', 11.00, 'FOF.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(10, 'Bubur Ayam McD', 11.00, 'BAM.jpg', '1002', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(11, 'Sausage McMuffin', 12.00, 'SausageMcMuffin.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(12, 'Sausage McMuffin with Egg', 14.00, 'SMWE.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(13, 'Egg McMuffin', 10.00, 'EM.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(14, 'Sausage & Scrambled Egg Sandwich', 15.00, 'SSES.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(15, 'Crispy Chicken Muffin', 10.00, 'CCM.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(16, 'Hotcakes (2pcs)', 11.00, 'Hotcakes.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(17, 'Filet-O-Fish', 15.00, 'FOF2.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(18, 'Big Breakfast', 19.00, 'BB.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(19, 'Crispy Chicken & Scrambled Egg Sandwich', 13.00, 'CCSES.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(20, 'Sausage & Scrambled Egg Sandwich', 14.00, 'SSES.jpg', '1003', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(21, 'Happy Meal Chicken Burger', 16.00, 'HMCB.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(22, 'Happy Meal Chicken McNuggets (4pcs)', 18.00, 'HMCMN.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(23, 'Happy Meal Cheeseburger', 12.00, 'HMCBC.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(24, 'Happy Meal Ayam Goreng McD', 14.00, 'HYAGM.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(25, 'Happy Meal Sausage McMuffin', 16.00, 'HMSMM.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(26, 'Happy Meal 2pc Hotcakes', 12.00, 'HM2HC.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(27, 'French Fries', 13.00, 'FF.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(28, 'Corn Cup', 18.00, 'CC.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(29, 'Apple Pie', 17.00, 'AP.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(30, 'Oreo McFlurry', 14.00, 'OM.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(31, 'Sundae Cone', 13.00, 'SC.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(32, 'ChocoTop', 16.00, 'CT.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(33, 'Chicken McNuggets', 14.00, 'CM.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(34, 'Ayam Goreng McD (regular/spicy)', 18.00, 'AGMRS.jpg', '1004', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(35, 'Minute Maid Orange Juice', 12.00, 'MMOJ.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(36, 'McCafé® Premium Roast Coffee/Tea', 11.00, 'MPRCT.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(37, 'Hot Milo', 5.00, 'HM.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(38, 'Iced Milo', 6.00, 'IM.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(39, 'Drinking Water', 8.00, 'DW.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(40, '100Plus', 3.00, '1P.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(41, 'Frozen Coca Cola/Frozen Mix', 6.00, 'FCCFM.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(42, 'Carbonated Soft Drink (Coca-Cola/Sprite)', 7.00, 'CSDCCS.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(43, 'Iced Lemon Tea', 6.00, 'ILT.jpg', '1006', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(44, 'Americano Espresso', 3.50, 'AE.jpg', '1005', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(45, 'Hazelnut Latte', 3.50, 'HL.jpg', '1005', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(46, 'Caramel Latte', 3.50, 'CL.jpg', '1005', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(47, 'Small Espresso', 3.50, 'SE.jpg', '1005', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(48, 'Flat White', 3.50, 'FW.jpg', '1005', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(50, 'Mocha', 3.50, 'MH.jpg', '1005', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(51, 'Cappuccino', 3.50, 'CP.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(53, 'Iced Latte', 4.50, 'IL.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(55, 'Iced Chocolate', 4.50, 'IC.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(56, 'Ice Blended Mocha', 4.50, 'IBM.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(57, 'Belgium Chocolate Cake - Sliced', 4.50, 'BCCS.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(58, 'Chocolate Lava Cake - Sliced', 4.50, 'CLCS.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(59, 'Classic Cheesecake - Sliced', 4.50, 'CCS.jpg', '1001', '2020-07-30 00:27:44', '2020-07-30 00:27:44'),
(60, 'Cookies & Cream Cheesecake - Sliced', 5.50, 'CCCS.jpg', '1001', '2020-07-30 00:27:44', '2020-08-02 20:11:09'),
(65, 'Happy Meal Set A', 56.00, 'BB.jpg', '1004', '2020-08-02 20:25:46', '2020-08-02 23:23:37'),
(66, 'PPLLL', 100.00, 'BigMac.jpg', '1005', '2020-08-02 20:27:56', '2020-08-02 23:25:26'),
(67, 'IJIJ', 78.00, 'BigMac.jpg', '1003', '2020-08-02 20:28:09', '2020-08-02 20:28:09'),
(68, 'IJIJ', 78.00, 'BigMac.jpg', '1003', '2020-08-02 20:28:25', '2020-08-02 20:28:25'),
(69, 'Happy Meal Set B', 12.00, 'HM2HC.jpg', '1004', '2020-08-02 23:27:12', '2020-08-02 23:27:12'),
(70, 'qqq', 12.00, 'BB.jpg', '1004', '2020-08-02 23:32:13', '2020-08-02 23:32:13'),
(71, 'qqqqweqwe', 122.00, 'BB.jpg', '1004', '2020-08-02 23:33:04', '2020-08-02 23:35:29'),
(73, 'qwqwrasd', 1234.00, 'BB.jpg', '1005', '2020-08-02 23:36:44', '2020-08-02 23:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_07_30_141121_create_food_table', 1),
(10, '2020_07_30_153837_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
