-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 10, 2024 lúc 03:49 AM
-- Phiên bản máy phục vụ: 10.11.9-MariaDB-0+deb12u1
-- Phiên bản PHP: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobileshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province` varchar(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `agencies`
--

INSERT INTO `agencies` (`id`, `province`, `agency_name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', 'HUST', '01 Đại Cồ Việt', '2024-10-28 23:33:29', '2024-10-28 23:52:16'),
(2, 'Hà Nội', 'KMA', '141 Chiến Thắng', '2024-10-28 23:52:52', '2024-10-28 23:52:52'),
(3, 'Hà Nội', 'UET', '144 Xuân Thủy', '2024-10-28 23:53:32', '2024-10-28 23:53:32'),
(4, 'Thành Phố Hồ Chí Minh', 'HCMUS', '227 Nguyễn Văn Cừ', '2024-10-28 23:54:11', '2024-10-28 23:54:11'),
(5, 'Thành Phố Hồ Chí Minh', 'HCMUT', '268 Lý Thường Kiệt', '2024-10-28 23:54:40', '2024-10-28 23:54:40'),
(6, 'Thành Phố Hồ Chí Minh', 'UIT', 'Khu phố 6, đường Hàn Thuyên, Thủ Đức', '2024-10-28 23:54:52', '2024-10-28 23:54:52'),
(7, 'Đà Nẵng', 'DUT', '54 Nguyễn Lương Bằng', '2024-10-28 23:55:19', '2024-10-28 23:55:19'),
(8, 'Đà Nẵng', 'VKU', '470 Trần Đại Nghĩa', '2024-10-28 23:55:29', '2024-10-28 23:55:29'),
(9, 'Đà Nẵng', 'FPT-DN', 'Khu đô thị FPT', '2024-10-28 23:55:46', '2024-10-28 23:55:46'),
(10, 'Huế', 'UMP-HUE', '6 Ngô Quyền', '2024-10-29 00:06:05', '2024-10-29 00:06:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `customer_id`, `product_id`, `agency_id`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 1, 23, 1, 1, '2024-11-07 19:40:17', '2024-11-08 16:08:48'),
(7, 1, 27, 10, 1, '2024-11-07 19:40:27', '2024-11-08 16:08:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `slug_vi`, `created_at`, `updated_at`) VALUES
(1, 'iPhone', 'iphone', 'iphone', '2024-10-26 20:07:56', '2024-10-26 20:07:56'),
(2, 'Điện thoại di động', 'phone', 'dien-thoai-di-dong', '2024-10-27 07:59:00', '2024-10-27 07:59:00'),
(3, 'Máy tính bảng', 'tablet', 'may-tinh-bang', '2024-10-26 20:08:58', '2024-10-27 08:30:08'),
(4, 'Laptop', 'laptop', 'laptop', '2024-10-26 20:09:23', '2024-10-28 18:00:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `customer_id`, `product_id`, `rating`, `title`, `content`, `created_at`, `updated_at`) VALUES
(16, 1, 7, 5, 'y54yh54er', 'hngfhgfdh', '2024-11-09 01:09:18', '2024-11-09 01:09:18'),
(17, 1, 7, 5, 'i876t', 'khjgkhjg', '2024-11-09 01:10:25', '2024-11-09 01:10:25'),
(18, 1, 7, 5, 't45yt54er', 'hfghfgdhf', '2024-11-09 01:13:17', '2024-11-09 01:13:17'),
(19, 1, 7, 5, 'ik778t6t87', 'jnghhjfgj', '2024-11-09 01:15:23', '2024-11-09 01:15:23'),
(20, 1, 7, 3, '6htgfhgfd', 'fbnhghgdf', '2024-11-09 01:17:02', '2024-11-09 01:17:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `inventory`
--

CREATE TABLE `inventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `agency_id`, `quantity`, `created_at`, `updated_at`) VALUES
(7, 23, 10, 20, '2024-10-31 17:43:30', '2024-10-31 17:43:30'),
(9, 26, 3, 50, '2024-11-04 18:10:29', '2024-11-04 18:10:29'),
(10, 26, 8, 20, '2024-11-06 21:11:21', '2024-11-06 21:11:21'),
(11, 26, 1, 20, '2024-11-06 21:15:46', '2024-11-06 21:15:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items_in_order`
--

CREATE TABLE `items_in_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `items_in_order`
--

INSERT INTO `items_in_order` (`id`, `order_code`, `product_id`, `agency_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'suOUBOWJtt', 7, 1, 4, '2024-11-07 01:47:08', '2024-11-07 01:47:08'),
(2, 'suOUBOWJtt', 26, 1, 3, '2024-11-07 01:47:08', '2024-11-07 01:47:08'),
(3, 'OezqdSVYDz', 7, 1, 4, '2024-11-07 02:18:46', '2024-11-07 02:18:46'),
(4, 'OezqdSVYDz', 26, 1, 3, '2024-11-07 02:18:46', '2024-11-07 02:18:46'),
(5, 'mKemjf1mDG', 7, 1, 4, '2024-11-07 09:15:34', '2024-11-07 09:15:34'),
(6, 'mKemjf1mDG', 26, 1, 3, '2024-11-07 09:15:34', '2024-11-07 09:15:34'),
(7, 'ED8B6TnQuK', 7, 1, 4, '2024-11-07 15:30:35', '2024-11-07 15:30:35'),
(8, 'ED8B6TnQuK', 26, 1, 3, '2024-11-07 15:30:35', '2024-11-07 15:30:35'),
(11, 'EXySHBlgol', 7, 1, 4, '2024-11-07 19:37:51', '2024-11-07 19:37:51'),
(12, 'EXySHBlgol', 26, 1, 3, '2024-11-07 19:37:51', '2024-11-07 19:37:51'),
(21, 'Hvd1VtrauH', 23, 1, 1, '2024-11-07 19:51:48', '2024-11-07 19:51:48'),
(22, 'Hvd1VtrauH', 27, 10, 1, '2024-11-07 19:51:48', '2024-11-07 19:51:48'),
(23, 'H4L5O1JSWR', 23, 1, 1, '2024-11-07 19:52:33', '2024-11-07 19:52:33'),
(24, 'H4L5O1JSWR', 27, 10, 1, '2024-11-07 19:52:34', '2024-11-07 19:52:34'),
(25, 'HWDVIQ9Mwv', 23, 1, 1, '2024-11-07 19:54:01', '2024-11-07 19:54:01'),
(26, 'HWDVIQ9Mwv', 27, 10, 1, '2024-11-07 19:54:01', '2024-11-07 19:54:01'),
(27, 'HWDVIQ9Mwv', 23, 1, 1, '2024-11-07 19:54:31', '2024-11-07 19:54:31'),
(28, 'HWDVIQ9Mwv', 27, 10, 1, '2024-11-07 19:54:31', '2024-11-07 19:54:31'),
(29, 'FycNhpzJL6', 23, 1, 1, '2024-11-08 16:15:30', '2024-11-08 16:15:30'),
(30, 'FycNhpzJL6', 27, 10, 1, '2024-11-08 16:15:30', '2024-11-08 16:15:30'),
(31, 'FycNhpzJL6', 23, 1, 1, '2024-11-08 16:15:53', '2024-11-08 16:15:53'),
(32, 'FycNhpzJL6', 27, 10, 1, '2024-11-08 16:15:53', '2024-11-08 16:15:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '0001_01_01_000000_create_users_table', 1),
(6, '0001_01_01_000001_create_cache_table', 1),
(7, '0001_01_01_000002_create_jobs_table', 1),
(8, '2024_10_25_090245_create_products_table', 1),
(10, '2024_10_27_005920_create_categories_table', 2),
(11, '2024_10_29_010859_create_vendors_table', 3),
(12, '2024_10_29_034025_create_agencies_table', 4),
(13, '2024_10_31_040228_create_inventories_table', 5),
(14, '2024_11_01_090740_create_orders_table', 6),
(15, '2024_11_05_020027_create_carts_table', 7),
(16, '2024_11_07_033325_items_in_order', 8),
(17, '2024_11_08_033046_create_vouchers_table', 9),
(18, '2024_11_09_041510_create_comments_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL DEFAULT '0000000000',
  `email` varchar(255) DEFAULT NULL,
  `province` varchar(20) NOT NULL DEFAULT 'Đà nẵng',
  `district` varchar(255) NOT NULL DEFAULT 'Ngũ Hành Sơn',
  `address` text NOT NULL,
  `total_price` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `isPaid` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `customer_name`, `phone`, `email`, `province`, `district`, `address`, `total_price`, `state`, `isPaid`, `created_at`, `updated_at`) VALUES
(2, '65yuh56rtkji7yfu', 'Nguyễn Minh Quân', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '456 Trưng Nữ Vương', 10990000, 'Đang giao', 0, '2024-10-10 03:39:20', '2024-10-10 03:39:20'),
(3, 'g45rewg54dsf', 'Lê Bảo Duy', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 8990000, 'Đã giao', 0, '2024-11-03 08:23:10', '2024-11-06 19:11:49'),
(4, '423trerdgvds', 'Trần Ngô Quân Bảo', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 7690000, 'Đã giao', 0, '2024-11-03 08:16:52', '2024-11-03 08:16:52'),
(5, 'dfgh4ggdfg', 'Nguyễn Phương Thảo', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 12990000, 'Từ chối', 0, '2024-11-03 08:17:56', '2024-11-03 08:17:56'),
(6, '467tilkuyrtyj', 'Nguyễn Minh Quân', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 6490000, 'Đã hủy', 0, '2024-11-03 08:20:40', '2024-11-03 08:20:40'),
(7, 'o876okyiuytkj', 'Nguyễn Thanh Hằng', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 14900000, 'Từ chối', 0, '2024-11-03 08:21:40', '2024-11-03 08:21:40'),
(8, '1r554ry76iugj', 'Võ Hoàng Lâm', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 7790000, 'Đang giao', 0, '2024-11-03 08:22:21', '2024-11-03 08:22:21'),
(9, '0987ptuykgfh', 'Hoàng Minh Huy', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 8990000, 'Đã giao', 0, '2024-11-03 08:24:10', '2024-11-03 08:24:10'),
(10, '9p0iyuthkj7', 'Lê Bảo Duy', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 6490000, 'Đang giao', 0, '2024-11-03 08:25:26', '2024-11-03 08:25:26'),
(11, '809fgh45ew', 'Trần Ngô Quân Bảo', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 7690000, 'Đang giao', 0, '2024-11-03 08:26:04', '2024-11-03 08:26:04'),
(12, '435th76ỵ67tfu', 'Nguyễn Minh Quân', '0000000000', NULL, 'Đà nẵng', 'Ngũ Hành Sơn', '123 Nguyễn Văn Linh', 10990000, 'Đã giao', 0, '2024-11-03 08:28:20', '2024-11-03 08:28:20'),
(14, 'ChSNjXD7wh', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '14 Xô Viết Nghệ Tĩnh', 21930000, 'Đang giao hàng', 0, '2024-11-07 01:26:51', '2024-11-07 01:26:51'),
(15, '9Dd5qtrW5O', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '14 Xô Viết Nghệ Tĩnh', 21930000, 'Đang giao hàng', 0, '2024-11-07 01:32:48', '2024-11-07 01:32:48'),
(16, 'quGMtERGHZ', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '14 Xô Viết Nghệ Tĩnh', 21930000, 'Đang giao hàng', 0, '2024-11-07 01:36:53', '2024-11-07 01:36:53'),
(17, '2ZXrgBHBS0', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '14 Lê Lợi', 21930000, 'Đang giao hàng', 0, '2024-11-07 01:37:10', '2024-11-07 01:37:10'),
(18, 'ltPFZGxUiv', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '141 Chiến Thắng', 21930000, 'Đang giao hàng', 0, '2024-11-07 01:41:28', '2024-11-07 01:41:28'),
(19, 'OezqdSVYDz', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '141 Chiến Thắng', 21930000, 'Đang giao hàng', 0, '2024-11-07 02:18:46', '2024-11-07 02:18:46'),
(20, 'mKemjf1mDG', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Hà Nội', 'Hai Bà Trưng', '01 Đại Cồ Việt', 21930000, 'Đang giao hàng', 0, '2024-11-07 09:15:34', '2024-11-07 09:15:34'),
(21, 'AfwcvAchbI', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Ngũ Hành Sơn', '470 Trần Đại Nghĩa', 21930000, 'Đang giao hàng', 1, '2024-11-07 09:59:27', '2024-11-07 15:23:52'),
(22, 'ckTECZeiWm', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Ngũ Hành Sơn', '470 Trần Đại Nghĩa', 21930000, 'Đang giao hàng', 1, '2024-11-07 15:25:04', '2024-11-07 15:26:37'),
(23, 'ED8B6TnQuK', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Hà Nội', 'Hai Bà Trưng', '01 Đại Cồ Việt', 21930000, 'Đang giao hàng', 1, '2024-11-07 15:30:35', '2024-11-07 15:31:30'),
(25, 'EXySHBlgol', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '154 Lê Lợi', 21930000, 'Đang giao hàng', 1, '2024-11-07 19:37:51', '2024-11-07 19:38:41'),
(34, 'HWDVIQ9Mwv', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Đà Nẵng', 'Hải Châu', '154 Lê Lợi', 38580000, 'Đang giao hàng', 0, '2024-11-07 19:54:31', '2024-11-07 19:54:31'),
(35, 'FycNhpzJL6', 'Thái Phan Minh Hoàng', '0911482816', 'hoangtpm2005@gmail.com', 'Hà Nội', 'Hai Bà Trưng', '01 Đại Cồ Việt', 34722000, 'Đang giao hàng', 0, '2024-11-08 16:15:30', '2024-11-08 16:15:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `edition` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `thumbnail`, `category`, `vendor`, `edition`, `price`, `color`, `slug`, `slug_vi`, `description`, `images`, `created_at`, `updated_at`) VALUES
(2, 'OPPO Reno8 T 5G (8GB/128GB)', 'storage/images/products/oppo-reno8-t-5g-8gb128gb/2023_3_27_638155148198300095_oppo-reno8-t-4g-dd.jpg', 'dien-thoai-di-dong', 'oppo', NULL, 829000000, NULL, NULL, 'oppo-reno8-t-5g-8gb128gb', 'PHA+PHN0cm9uZz5NJmFncmF2ZTtuIGgmaWdyYXZlO25oPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+SyZpYWN1dGU7Y2ggdGjGsOG7m2MgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiA2LjcmcXVvdDs8L2xpPg0KCTxsaT48c3Ryb25nPkMmb2NpcmM7bmcgbmdo4buHIG0mYWdyYXZlO24gaCZpZ3JhdmU7bmg8L3N0cm9uZz4gQU1PTEVEPC9saT4NCgk8bGk+PHN0cm9uZz7EkOG7mSBwaCZhY2lyYztuIGdp4bqjaTwvc3Ryb25nPiAyNDEyIHggMTA4MDwvbGk+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcyZhYWN1dGU7bmcgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiA4MDBuaXRzPC9saT4NCgk8bGk+PHN0cm9uZz5U4bqnbiBz4buRIHF1JmVhY3V0ZTt0IChIeik8L3N0cm9uZz4gMTIwSHo8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkNhbWVyYSBzYXU8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZzwvc3Ryb25nPiBUbyZhZ3JhdmU7biBj4bqjbmggKFBhbm9yYW1hKTxiciAvPg0KCUhEUjxiciAvPg0KCUNodXkmZWNpcmM7biBuZ2hp4buHcDxiciAvPg0KCUhp4buDbiB2aTxiciAvPg0KCULhu5kgbOG7jWMgbSZhZ3JhdmU7dTxiciAvPg0KCVF1YXkgdmlkZW8gaGnhu4NuIHRo4buLIGsmZWFjdXRlO3A8YnIgLz4NCglOaCZhdGlsZGU7biBkJmFhY3V0ZTtuPGJyIC8+DQoJTCZhZ3JhdmU7bSDEkeG6uXA8YnIgLz4NCglHb29nbGUgTGVuczxiciAvPg0KCVpvb20ga+G7uSB0aHXhuq10IHPhu5E8YnIgLz4NCglYJm9hY3V0ZTthIHBoJm9jaXJjO25nPGJyIC8+DQoJUXVheSBjaOG6rW08YnIgLz4NCglUciZvY2lyYztpIG5oYW5oIHRo4budaSBnaWFuPGJyIC8+DQoJQmFuIMSRJmVjaXJjO208YnIgLz4NCglBSSBDYW1lcmE8YnIgLz4NCglTaSZlY2lyYzt1IMSR4buZIHBoJmFjaXJjO24gZ2nhuqNpPC9saT4NCgk8bGk+PHN0cm9uZz5RdWF5IHBoaW08L3N0cm9uZz4gSEQgNzIwcEAzMGZwczxiciAvPg0KCUZ1bGxIRCAxMDgwcEAzMGZwczwvbGk+DQoJPGxpPjxzdHJvbmc+xJAmZWdyYXZlO24gRmxhc2g8L3N0cm9uZz4gQyZvYWN1dGU7PC9saT4NCgk8bGk+PHN0cm9uZz7EkOG7mSBwaCZhY2lyYztuIGdp4bqjaSBjYW1lcmE8L3N0cm9uZz4gMTA4IE1QIChmLzEuNykgeCAyIE1QIChmLzMuMykgeCAyIE1QIChmLzIuNCk8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkNhbWVyYSB0csaw4bubYzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPsSQ4buZIHBoJmFjaXJjO24gZ2nhuqNpIGNhbWVyYTwvc3Ryb25nPiAzMiBNUDwvbGk+DQoJPGxpPjxzdHJvbmc+VCZpYWN1dGU7bmggbsSDbmc8L3N0cm9uZz4gWCZvYWN1dGU7YSBwaCZvY2lyYztuZzxiciAvPg0KCVRyJm9jaXJjO2kgbmhhbmggdGjhu51pIGdpYW4gKFRpbWUgTGFwc2UpPGJyIC8+DQoJVG8mYWdyYXZlO24gY+G6o25oIChQYW5vcmFtYSk8YnIgLz4NCglOaCZhdGlsZGU7biBkJmFhY3V0ZTtuIChBUiBTdGlja2Vycyk8YnIgLz4NCglMJmFncmF2ZTttIMSR4bq5cDxiciAvPg0KCUhEUjxiciAvPg0KCUNo4bulcCDEkSZlY2lyYzttPGJyIC8+DQoJQuG7mSBs4buNYyBtJmFncmF2ZTt1PC9saT4NCgk8bGk+PHN0cm9uZz5RdWF5IHBoaW08L3N0cm9uZz4gUXVheSB2aWRlbyBIRDxiciAvPg0KCVF1YXkgdmlkZW8gRnVsbCBIRDwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+SOG7hyDEkWnhu4F1IGgmYWdyYXZlO25oICZhbXA7IENQVTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlZpIHjhu60gbCZ5YWN1dGU7PC9zdHJvbmc+IFNuYXBkcmFnb24gNjk1IDVHPC9saT4NCgk8bGk+PHN0cm9uZz5WaSB44butIGwmeWFjdXRlOyDEkeG7kyBo4buNYSAoR1BVKTwvc3Ryb25nPiBBZHJlbm8gNjE5PC9saT4NCgk8bGk+PHN0cm9uZz5I4buHIMSRaeG7gXUgaCZhZ3JhdmU7bmg8L3N0cm9uZz4gQ29sb3JvcyAxMzwvbGk+DQoJPGxpPjxzdHJvbmc+VOG7kWMgxJHhu5kgQ1BVPC9zdHJvbmc+IE9jdGEtY29yZSAoMngyLjIgR0h6IEtyeW8gNjYwIEdvbGQgJmFtcDsgNngxLjcgR0h6IEtyeW8gNjYwIFNpbHZlcik8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkLhu5kgbmjhu5sgJmFtcDsgTMawdSB0cuG7rzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlJBTTwvc3Ryb25nPiA4R0I8L2xpPg0KCTxsaT48c3Ryb25nPkLhu5kgbmjhu5sgdHJvbmc8L3N0cm9uZz4gMTI4R0I8L2xpPg0KCTxsaT48c3Ryb25nPlRo4bq7IG5o4bubIG5nbyZhZ3JhdmU7aTwvc3Ryb25nPiBNaWNyb1NELCBo4buXIHRy4bujIHThu5FpIMSRYSAxIFRCPC9saT4NCgk8bGk+PHN0cm9uZz5C4buZIG5o4bubIGMmb2dyYXZlO24gbOG6oWkgKGto4bqjIGThu6VuZyk8L3N0cm9uZz4gMTEzIEdCPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5L4bq/dCBu4buRaTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPkPhu5VuZyBr4bq/dCBu4buRaS9z4bqhYzwvc3Ryb25nPiBUeXBlLUM8L2xpPg0KCTxsaT48c3Ryb25nPlPhu5Ega2hlIFNJTTwvc3Ryb25nPiAyIFNJTSAoTmFuby1TSU0pPC9saT4NCgk8bGk+PHN0cm9uZz5CbHVldG9vdGg8L3N0cm9uZz4gVjUuMTwvbGk+DQoJPGxpPjxzdHJvbmc+SmFjayB0YWkgbmdoZTwvc3Ryb25nPiBUeXBlLUM8L2xpPg0KCTxsaT48c3Ryb25nPkvhur90IG7hu5FpIGtoJmFhY3V0ZTtjPC9zdHJvbmc+IE9URzwvbGk+DQoJPGxpPjxzdHJvbmc+V2ktRmk8L3N0cm9uZz4gV2ktRmkgODAyLjExIGEvYi9nL24vYWM8L2xpPg0KCTxsaT48c3Ryb25nPk3huqFuZyBkaSDEkeG7mW5nPC9zdHJvbmc+IDVHPC9saT4NCgk8bGk+PHN0cm9uZz5D4bqjbSBiaeG6v248L3N0cm9uZz4gQ+G6o20gYmnhur9uIHYmYWNpcmM7biB0YXkgdHJvbmcgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvbGk+DQoJPGxpPjxzdHJvbmc+xJDhu4tuaCB24buLPC9zdHJvbmc+IEdMT05BU1M8YnIgLz4NCglHUFM8YnIgLz4NCglHQUxJTEVPPGJyIC8+DQoJQkVJRE9VPGJyIC8+DQoJUVpTUzwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+VGhp4bq/dCBr4bq/IC0gdHLhu41uZyBsxrDhu6NuZzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlRoaeG6v3Qga+G6vzwvc3Ryb25nPiBOZ3V5JmVjaXJjO24ga2jhu5FpPC9saT4NCgk8bGk+PHN0cm9uZz5DaOG6pXQgbGnhu4d1PC9zdHJvbmc+IEtodW5nIGjhu6NwIGtpbSAmYW1wOyBN4bq3dCBsxrBuZyB0aHXhu7cgdGluaCBo4buvdSBjxqE8L2xpPg0KCTxsaT48c3Ryb25nPksmaWFjdXRlO2NoIHRoxrDhu5tjPC9zdHJvbmc+IDE2Mi4zbW0geCA3NC4zbW0geCA3LjdtbTwvbGk+DQoJPGxpPjxzdHJvbmc+VHLhu41uZyBsxrDhu6NuZzwvc3Ryb25nPiAxNzFnPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5QaW4gJmFtcDsgU+G6oWM8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5EdW5nIGzGsOG7o25nIHBpbiBz4bqjbiBwaOG6qW08L3N0cm9uZz4gNDgwMG1BaDwvbGk+DQoJPGxpPjxzdHJvbmc+SOG7lyB0cuG7oyBz4bqhYyB04buRaSDEkWE8L3N0cm9uZz4gNjdXPC9saT4NCgk8bGk+PHN0cm9uZz5Mb+G6oWkgcGluPC9zdHJvbmc+IExpLVBvPC9saT4NCgk8bGk+PHN0cm9uZz5DJm9jaXJjO25nIG5naOG7hyBwaW48L3N0cm9uZz4gU+G6oWMgc2kmZWNpcmM7dSBuaGFuaCBTdXBlclZPT0M8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRp4buHbiAmaWFjdXRlO2NoPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+S2gmYWFjdXRlO25nIG7GsOG7m2MsIGtoJmFhY3V0ZTtuZyBi4bulaTwvc3Ryb25nPiBJUFg0PC9saT4NCgk8bGk+PHN0cm9uZz5C4bqjbyBt4bqtdCBzaW5oIHRy4bqvYyBo4buNYyA8L3N0cm9uZz4gTeG7nyBraG8mYWFjdXRlOyB2JmFjaXJjO24gdGF5IGTGsOG7m2kgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaCwgTeG7nyBraG8mYWFjdXRlOyBraHUmb2NpcmM7biBt4bq3dDwvbGk+DQoJPGxpPjxzdHJvbmc+VCZpYWN1dGU7bmggbsSDbmcgxJHhurdjIGJp4buHdDwvc3Ryb25nPiDhu6huZyBk4bulbmcgayZlYWN1dGU7cCAoTmgmYWNpcmM7biBi4bqjbiDhu6luZyBk4bulbmcpPGJyIC8+DQoJxJBhIGPhu61hIHPhu5UgKGNoaWEgxJEmb2NpcmM7aSBtJmFncmF2ZTtuIGgmaWdyYXZlO25oKTxiciAvPg0KCU3hu58gcuG7mW5nIGLhu5kgbmjhu5sgUkFNPGJyIC8+DQoJQ+G7rSBjaOG7iSB0aCZvY2lyYztuZyBtaW5oPGJyIC8+DQoJQ+G7rSBjaOG7iSBtJmFncmF2ZTtuIGgmaWdyYXZlO25oIHThuq90PGJyIC8+DQoJQ2jhur8gxJHhu5kgxJHGoW4gZ2nhuqNuIChHaWFvIGRp4buHbiDEkcahbiBnaeG6o24pPGJyIC8+DQoJQ2jhur8gxJHhu5kgdHLhursgZW0gKEtoJm9jaXJjO25nIGdpYW4gdHLhursgZW0pPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5UaCZvY2lyYztuZyB0aW4gY2h1bmc8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5UaOG7nWkgxJFp4buDbSByYSBt4bqvdDwvc3Ryb25nPiAwMS8yMDIzPC9saT4NCgk8bGk+PHN0cm9uZz5T4bqjbiBwaOG6qW0gYmFvIGfhu5NtPC9zdHJvbmc+IEjhu5lwLCBTJmFhY3V0ZTtjaCBoxrDhu5tuZyBk4bqrbiwgQyZhY2lyYzt5IGzhuqV5IHNpbSwg4buQcCBsxrBuZywgQyZhYWN1dGU7cCBUeXBlIEMsIEPhu6cgc+G6oWMgbmhhbmggcuG7nWkgxJHhuqd1IFR5cGUgQTwvbGk+DQo8L3VsPg==', '[\"storage\\/images\\/products\\/oppo-reno8-t-5g-8gb128gb\\/vi-vn-oppo-reno8-t-5g-128gb-8.png\",\"storage\\/images\\/products\\/oppo-reno8-t-5g-8gb128gb\\/vi-vn-oppo-reno8-t-5g-128gb-6.png\",\"storage\\/images\\/products\\/oppo-reno8-t-5g-8gb128gb\\/vi-vn-oppo-reno8-t-5g-128gb-10.png\",\"storage\\/images\\/products\\/oppo-reno8-t-5g-8gb128gb\\/oppo-reno8-t-5g-tong-quan-99-1020x570.png\",\"storage\\/images\\/products\\/oppo-reno8-t-5g-8gb128gb\\/oppo-reno8-t-5g638114636415528551.png\"]', '2024-10-25 16:27:34', '2024-11-04 15:46:04'),
(3, 'Xiaomi Pad 5 6GB/256GB', 'storage/images/products/xiaomi-pad-5-6gb256gb-6-256gb/xiaomi-pad-5-gray.jpeg', 'may-tinh-bang', 'xiaomi', '6-256GB', 8690000, 'Đen', NULL, 'xiaomi-pad-5-6gb256gb-6-256gb', 'PHA+PHN0cm9uZz5NJmFncmF2ZTtuIGgmaWdyYXZlO25oPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcGgmYWNpcmM7biBnaeG6o2k8L3N0cm9uZz4gMTYwMCB4IDI1NjAgUGl4ZWxzPC9saT4NCgk8bGk+PHN0cm9uZz5LJmlhY3V0ZTtjaCB0aMaw4bubYyBtJmFncmF2ZTtuPC9zdHJvbmc+IDExIGluY2g8L2xpPg0KCTxsaT48c3Ryb25nPkMmb2NpcmM7bmcgbmdo4buHIG0mYWdyYXZlO24gaCZpZ3JhdmU7bmg8L3N0cm9uZz4gSVBTIExDRDwvbGk+DQoJPGxpPjxzdHJvbmc+VOG6p24gc+G7kSBxdSZlYWN1dGU7dCAoSHopPC9zdHJvbmc+IDEyMEh6PC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5I4buHIMSRaeG7gXUgaCZhZ3JhdmU7bmggJmFtcDsgQ1BVPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+SOG7hyDEkWnhu4F1IGgmYWdyYXZlO25oPC9zdHJvbmc+IEFuZHJvaWQgMTE8L2xpPg0KCTxsaT48c3Ryb25nPlThu5FjIMSR4buZIENQVTwvc3Ryb25nPiAxIG5oJmFjaXJjO24gMi45NiBHSHosIDMgbmgmYWNpcmM7biAyLjQyIEdIeiAmYW1wOyA0IG5oJmFjaXJjO24gMS43OCBHSHo8L2xpPg0KCTxsaT48c3Ryb25nPkNoaXAgxJHhu5MgaG/huqEgKEdQVSk8L3N0cm9uZz4gQWRyZW5vIDY0MDwvbGk+DQoJPGxpPjxzdHJvbmc+Q2hpcCB44butIGwmeWFjdXRlOyAoQ1BVKTwvc3Ryb25nPiBTbmFwZHJhZ29uIDg2MDwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+QuG7mSBuaOG7myAmYW1wOyBMxrB1IHRy4buvPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+UkFNPC9zdHJvbmc+IDZHQjwvbGk+DQoJPGxpPjxzdHJvbmc+QuG7mSBuaOG7myB0cm9uZzwvc3Ryb25nPiAyNTZHQjwvbGk+DQoJPGxpPjxzdHJvbmc+QuG7mSBuaOG7myBjJm9ncmF2ZTtuIGzhuqFpIChraOG6oyBk4bulbmcpPC9zdHJvbmc+IDIzMCBHQjwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+Q2FtZXJhIHNhdTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPsSQ4buZIHBoJmFjaXJjO24gZ2nhuqNpPC9zdHJvbmc+IDEzIE1QPC9saT4NCgk8bGk+PHN0cm9uZz5RdWF5IHBoaW08L3N0cm9uZz4gSEQgNzIwcEAzMGZwczxiciAvPg0KCUZ1bGxIRCAxMDgwcEAzMGZwczxiciAvPg0KCTRLIDIxNjBwQDMwZnBzPC9saT4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZzwvc3Ryb25nPiBUxrDMoyDEkSZvY2lyYzvMo25nIGwmYWNpcmM7zIF5IG5lzIF0IChBRik8YnIgLz4NCglOaOG6rW4gZGnhu4duIGtodSZvY2lyYztuIG3hurd0PGJyIC8+DQoJTCZhZ3JhdmU7bSDEkeG6uXA8YnIgLz4NCglIRFI8YnIgLz4NCglDaGHMo20gbCZhY2lyYzvMgXkgbmXMgXQ8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkNhbWVyYSB0csaw4bubYzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlQmaWFjdXRlO25oIG7Eg25nPC9zdHJvbmc+IFThu7EgxJHhu5luZyBs4bqleSBuJmVhY3V0ZTt0IChBRik8YnIgLz4NCglRdWF5IHZpZGVvIEhEPGJyIC8+DQoJUXVheSB2aWRlbyBGdWxsIEhEPGJyIC8+DQoJTCZhZ3JhdmU7bSDEkeG6uXA8YnIgLz4NCglIRFI8YnIgLz4NCglC4buZIGzhu41jIG0mYWdyYXZlO3U8L2xpPg0KCTxsaT48c3Ryb25nPsSQ4buZIHBoJmFjaXJjO24gZ2nhuqNpPC9zdHJvbmc+IDggTVA8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlBpbiAmYW1wOyBT4bqhYzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPkR1bmcgbMaw4bujbmcgcGluPC9zdHJvbmc+IDg3MjAgbUFoPC9saT4NCgk8bGk+PHN0cm9uZz5Mb+G6oWkgcGluPC9zdHJvbmc+IExpLVBvPC9saT4NCgk8bGk+PHN0cm9uZz5DJm9jaXJjO25nIG5naOG7hyBwaW48L3N0cm9uZz4gU+G6oWMgcGluIG5oYW5oPC9saT4NCgk8bGk+PHN0cm9uZz5I4buXIHRy4bujIHPhuqFjIHThu5FpIMSRYTwvc3Ryb25nPiAzM1c8L2xpPg0KCTxsaT48c3Ryb25nPlPhuqFjIGsmZWdyYXZlO20gdGhlbyBtJmFhY3V0ZTt5PC9zdHJvbmc+IDIyLjUgVzwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+S+G6v3QgbuG7kWk8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5T4buRIGtoZSBTSU08L3N0cm9uZz4gS2gmb2NpcmM7bmcgYyZvYWN1dGU7PC9saT4NCgk8bGk+PHN0cm9uZz5XaUZpPC9zdHJvbmc+IFdpLUZpIDgwMi4xMSBhL2IvZy9uL2FjPGJyIC8+DQoJRHVhbC1iYW5kPGJyIC8+DQoJV2ktRmkgRGlyZWN0PGJyIC8+DQoJV2ktRmkgaG90c3BvdDwvbGk+DQoJPGxpPjxzdHJvbmc+Q+G7lW5nIGsmZWNpcmM7zIF0IG4mb2NpcmM7zIFpL3NhzKNjPC9zdHJvbmc+IFR5cGUtQzwvbGk+DQoJPGxpPjxzdHJvbmc+SmFjayB0YWkgbmdoZTwvc3Ryb25nPiBUeXBlIEM8L2xpPg0KCTxsaT48c3Ryb25nPkvhur90IG7hu5FpIGtoJmFhY3V0ZTtjPC9zdHJvbmc+IE9URzwvbGk+DQoJPGxpPjxzdHJvbmc+Qmx1ZXRvb3RoPC9zdHJvbmc+IFY1LjA8L2xpPg0KCTxsaT48c3Ryb25nPk3huqFuZyBkaSDEkeG7mW5nPC9zdHJvbmc+IEtoJm9jaXJjO25nIGjhu5cgdHLhu6M8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRoaeG6v3Qga+G6vyAmYW1wOyBUcuG7jW5nIGzGsOG7o25nPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+Q2jhuqV0IGxp4buHdTwvc3Ryb25nPiBLaHVuZyBraW0gbG/huqFpICZhbXA7IE3hurd0IGzGsG5nIG5o4buxYTwvbGk+DQoJPGxpPjxzdHJvbmc+VHLhu41uZyBsxrDhu6NuZzwvc3Ryb25nPiA1MTEgZzwvbGk+DQoJPGxpPjxzdHJvbmc+SyZpYWN1dGU7Y2ggdGjGsOG7m2M8L3N0cm9uZz4gMjU0LjcgeCAxNjYuMyB4IDYuODUgbW08L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRp4buHbiAmaWFjdXRlO2NoPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+VCZpYWN1dGU7bmggbsSDbmcgxJHhurdjIGJp4buHdDwvc3Ryb25nPiAmQWNpcmM7bSB0aGFuaCBEb2xieSBBdG1vczxiciAvPg0KCU3hu58ga2gmb2FjdXRlO2EgYuG6sW5nIGtodSZvY2lyYztuIG3hurd0PGJyIC8+DQoJNCBsb2E8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRoJm9jaXJjO25nIHRpbiBjaHVuZzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlRo4budaSDEkWnhu4NtIHJhIG3huq90PC9zdHJvbmc+IDA5LzIwMjE8L2xpPg0KPC91bD4=', '[\"storage\\/images\\/products\\/xiaomi-pad-5-6gb256gb-6-256gb\\/vlcsnap-2024-08-25-17h10m34s562.png\",\"storage\\/images\\/products\\/xiaomi-pad-5-6gb256gb-6-256gb\\/vlcsnap-2024-08-25-17h10m29s866.png\",\"storage\\/images\\/products\\/xiaomi-pad-5-6gb256gb-6-256gb\\/vlcsnap-2024-08-25-17h10m22s100.png\",\"storage\\/images\\/products\\/xiaomi-pad-5-6gb256gb-6-256gb\\/256gb_-_5_1.png\",\"storage\\/images\\/products\\/xiaomi-pad-5-6gb256gb-6-256gb\\/256gb_-_2_1.png\"]', '2024-10-25 19:41:52', '2024-11-04 07:22:46'),
(5, 'OPPO Pad Air 128GB', 'storage/images/products/oppo-pad-air-128gb/OPPO-pad-thumb-xám-600x600.jpg', 'may-tinh-bang', 'oppo', NULL, 7990000, NULL, NULL, 'oppo-pad-air-128gb', NULL, NULL, '2024-10-25 19:42:49', '2024-11-03 22:14:14'),
(6, 'Realme C55 - 6GB/128GB', 'storage/images/products/realme-c55-6gb128gb-6-128gb/c55-1-den.png', 'dien-thoai-di-dong', 'realme', '6-128GB', 3690000, NULL, NULL, 'realme-c55-6gb128gb-6-128gb', NULL, NULL, '2024-10-26 18:16:00', '2024-11-03 22:15:07'),
(7, 'Realme C33', 'storage/images/products/realme-c33-4-64gb/realme-c33-thumb-xanh-600x600.jpg', 'dien-thoai-di-dong', 'realme', '4-64GB', 2790000, NULL, NULL, 'realme-c33-4-64gb', NULL, NULL, '2024-10-26 18:17:11', '2024-11-03 22:17:06'),
(8, 'Realme C33', NULL, 'dien-thoai-di-dong', 'realme', '3-32GB', 2290000, NULL, NULL, 'realme-c33-3-32gb', NULL, NULL, '2024-10-26 18:17:53', '2024-10-26 18:17:53'),
(10, 'Samsung Galaxy A06', NULL, 'dien-thoai-di-dong', 'samsung', '4-128GB', 3490000, NULL, NULL, 'samsung-galaxy-a06-4-128gb', NULL, NULL, '2024-10-26 18:19:47', '2024-10-26 18:19:47'),
(11, 'Xiaomi Pad 6', 'storage/images/products/xiaomi-pad-6-8-256gb/xiaomi-pad-6-blue-thumb-600x600.jpg', 'may-tinh-bang', 'xiaomi', '8-256GB', 8490000, NULL, NULL, 'xiaomi-pad-6-8-256gb', 'PHA+PHN0cm9uZz5NJmFncmF2ZTtuIGgmaWdyYXZlO25oPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+SyZpYWN1dGU7Y2ggdGjGsOG7m2MgbSZhZ3JhdmU7bjwvc3Ryb25nPiAxMSBpbmNoPC9saT4NCgk8bGk+PHN0cm9uZz7EkOG7mSBwaCZhY2lyYztuIGdp4bqjaTwvc3Ryb25nPiAxODAwIHggMjg4MDwvbGk+DQoJPGxpPjxzdHJvbmc+QyZvY2lyYztuZyBuZ2jhu4cgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiBJUFMgTENELCAxIHThu4kgbSZhZ3JhdmU7dSwgSERSMTAsIERvbGJ5IFZpc2lvbiwgNTUwIG5pdHM8L2xpPg0KCTxsaT48c3Ryb25nPlThuqduIHPhu5EgcXUmZWFjdXRlO3QgKEh6KTwvc3Ryb25nPiAxNDRIejwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+SOG7hyDEkWnhu4F1IGgmYWdyYXZlO25oICZhbXA7IENQVTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPkjhu4cgxJFp4buBdSBoJmFncmF2ZTtuaDwvc3Ryb25nPiBNSVVJIFBhZCAxNCB0ciZlY2lyYztuIG7hu4FuIHThuqNuZyBBbmRyb2lkIDEzPC9saT4NCgk8bGk+PHN0cm9uZz5DaGlwIHjhu60gbCZ5YWN1dGU7IChDUFUpPC9zdHJvbmc+IFNuYXBkcmFnb24gODcwPC9saT4NCgk8bGk+PHN0cm9uZz5DaGlwIMSR4buTIGhv4bqhIChHUFUpPC9zdHJvbmc+IEFkcmVubyA2NTA8L2xpPg0KCTxsaT48c3Ryb25nPlThu5FjIMSR4buZIENQVTwvc3Ryb25nPiAxIG5oJmFjaXJjO24gMy4yIEdIeiwgMyBuaCZhY2lyYztuIDIuNDIgR0h6ICZhbXA7IDQgbmgmYWNpcmM7biAxLjggR0h6PC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5C4buZIG5o4bubICZhbXA7IEzGsHUgdHLhu688L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5SQU08L3N0cm9uZz4gOEdCPC9saT4NCgk8bGk+PHN0cm9uZz5C4buZIG5o4bubIHRyb25nPC9zdHJvbmc+IDI1NkdCPC9saT4NCgk8bGk+PHN0cm9uZz5C4buZIG5o4bubIGMmb2dyYXZlO24gbOG6oWkgKGto4bqjIGThu6VuZyk8L3N0cm9uZz4gMjQ2IEdCPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5DYW1lcmEgc2F1PC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcGgmYWNpcmM7biBnaeG6o2k8L3N0cm9uZz4gMTMgTVAgZi8yLjIgUERBRjwvbGk+DQoJPGxpPjxzdHJvbmc+UXVheSBwaGltPC9zdHJvbmc+IDRrIHwgMzBmcHM8YnIgLz4NCgkxMDgwcCB8IDMwLzYwZnBzPGJyIC8+DQoJNzIwcCB8IDMwZnBzPC9saT4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZzwvc3Ryb25nPiBC4buZIGzhu41jIG0mYWdyYXZlO3U8YnIgLz4NCgkmQWFjdXRlO25oIHMmYWFjdXRlO25nIHnhur91IChDaOG7pXAgxJEmZWNpcmM7bSk8YnIgLz4NCglYJm9hY3V0ZTthIHBoJm9jaXJjO25nPGJyIC8+DQoJVG8mYWdyYXZlO24gY+G6o25oIChQYW5vcmFtYSk8YnIgLz4NCglMJmFncmF2ZTttIMSR4bq5cDxiciAvPg0KCUhEUjxiciAvPg0KCUNo4bulcCBo4bq5biBnaeG7nTxiciAvPg0KCVThu7EgxJHhu5luZyBs4bqleSBuJmVhY3V0ZTt0PC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5DYW1lcmEgdHLGsOG7m2M8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz7EkOG7mSBwaCZhY2lyYztuIGdp4bqjaTwvc3Ryb25nPiA4IE1QPC9saT4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZzwvc3Ryb25nPiBRdWF5IHZpZGVvIEhEPGJyIC8+DQoJUXVheSB2aWRlbyBGdWxsIEhEPGJyIC8+DQoJTCZhZ3JhdmU7bSDEkeG6uXA8YnIgLz4NCglI4bq5biBnaeG7nSBjaOG7pXA8YnIgLz4NCglIRFI8YnIgLz4NCglC4buZIGzhu41jIG0mYWdyYXZlO3U8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlBpbiAmYW1wOyBT4bqhYzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPkR1bmcgbMaw4bujbmcgcGluPC9zdHJvbmc+IDg4NDBtQWg8L2xpPg0KCTxsaT48c3Ryb25nPkjhu5cgdHLhu6Mgc+G6oWMgdOG7kWkgxJFhPC9zdHJvbmc+IDMzVzwvbGk+DQoJPGxpPjxzdHJvbmc+TG/huqFpIHBpbjwvc3Ryb25nPiBMaS1QbzwvbGk+DQoJPGxpPjxzdHJvbmc+QyZvY2lyYztuZyBuZ2jhu4cgcGluPC9zdHJvbmc+IFPhuqFjIHBpbiBuaGFuaDwvbGk+DQoJPGxpPjxzdHJvbmc+U+G6oWMgayZlZ3JhdmU7bSB0aGVvIG0mYWFjdXRlO3k8L3N0cm9uZz4gMzNXPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5L4bq/dCBu4buRaTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPkJsdWV0b290aDwvc3Ryb25nPiBWNS4yPC9saT4NCgk8bGk+PHN0cm9uZz5D4buVbmcgayZlY2lyYzvMgXQgbiZvY2lyYzvMgWkvc2HMo2M8L3N0cm9uZz4gVVNCLUM8L2xpPg0KCTxsaT48c3Ryb25nPldpRmk8L3N0cm9uZz4gV2lGaSA277yMV2lGaSA177yMV2lGaSA0ICZhbXA7IDgwMi4xMWEvYi9nPGJyIC8+DQoJMi40R0h6IFdpRmkgfCA1R0h6IFdpRmk8L2xpPg0KCTxsaT48c3Ryb25nPkvhur90IG7hu5FpIGtoJmFhY3V0ZTtjPC9zdHJvbmc+IE9URzwvbGk+DQoJPGxpPjxzdHJvbmc+TeG6oW5nIGRpIMSR4buZbmc8L3N0cm9uZz4gS2gmb2NpcmM7bmcgaOG7lyB0cuG7ozwvbGk+DQo8L3VsPg0KDQo8cD48c3Ryb25nPlRoaeG6v3Qga+G6vyAmYW1wOyBUcuG7jW5nIGzGsOG7o25nPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+Q2jhuqV0IGxp4buHdTwvc3Ryb25nPiBLaW0gbG/huqFpPC9saT4NCgk8bGk+PHN0cm9uZz5LJmlhY3V0ZTtjaCB0aMaw4bubYzwvc3Ryb25nPiAyNTMuOTUgeCAxNjUuMTggeCA2LjUxbW08L2xpPg0KCTxsaT48c3Ryb25nPlRy4buNbmcgbMaw4bujbmc8L3N0cm9uZz4gNDkwZzwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+VGnhu4duICZpYWN1dGU7Y2g8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZyDEkeG6t2MgYmnhu4d0PC9zdHJvbmc+IMSQYSBj4butYSBz4buVPGJyIC8+DQoJJkFjaXJjO20gdGhhbmggSGktUmVzIEF1ZGlvPGJyIC8+DQoJJkFjaXJjO20gdGhhbmggRG9sYnkgQXRtb3M8YnIgLz4NCglN4bufIHLhu5luZyBi4buZIG5o4bubIFJBTTxiciAvPg0KCU3hu58ga2gmb2FjdXRlO2EgYuG6sW5nIGtodSZvY2lyYztuIG3hurd0PGJyIC8+DQoJS+G6v3QgbuG7kWkgYiZhZ3JhdmU7biBwaCZpYWN1dGU7bSBy4budaTxiciAvPg0KCUtoJm9jaXJjO25nIGdpYW4gdGjhu6kgaGFpPGJyIC8+DQoJSERSMTA8YnIgLz4NCglGb2N1cyBGcmFtZTxiciAvPg0KCURvbGJ5IFZpc2lvbjxiciAvPg0KCURDSS1QMzxiciAvPg0KCUMmb2NpcmM7bmcgbmdo4buHIE1FTUM8YnIgLz4NCglDaOG6oW0gMiBs4bqnbiB04bqvdC9t4bufIG0mYWdyYXZlO24gaCZpZ3JhdmU7bmg8YnIgLz4NCgk0IGxvYSBzdGVyZW88L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRoJm9jaXJjO25nIHRpbiBjaHVuZzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlRo4budaSDEkWnhu4NtIHJhIG3huq90PC9zdHJvbmc+IDIwMjM8L2xpPg0KPC91bD4=', '[\"storage\\/images\\/products\\/xiaomi-pad-6-8-256gb\\/m82-blue-back-45-1280x1280.png\",\"storage\\/images\\/products\\/xiaomi-pad-6-8-256gb\\/m82-blue-side-left-and-right-1280x1280.png\",\"storage\\/images\\/products\\/xiaomi-pad-6-8-256gb\\/m82-blue-side-up-and-down-1280x1280.png\",\"storage\\/images\\/products\\/xiaomi-pad-6-8-256gb\\/m82-blue-front-45-with-wallpaper-1280x1280.png\",\"storage\\/images\\/products\\/xiaomi-pad-6-8-256gb\\/m82-blue-front-with-wallpaper-1280x1280.png\",\"storage\\/images\\/products\\/xiaomi-pad-6-8-256gb\\/m82-blue-back-1280x1280.png\"]', '2024-10-26 18:24:01', '2024-11-04 15:44:06'),
(14, 'Redmi Pad SE 8.7', NULL, 'may-tinh-bang', 'xiaomi', '4G 6GB/128GB', 4590000, NULL, NULL, 'redmi-pad-se-87-4g-6gb128gb', NULL, NULL, '2024-10-28 17:04:28', '2024-10-28 17:04:28'),
(23, 'Samsung S23 Ultra', 'storage/images/products/samsung-s23-ultra-8-256gb/samsung-galaxy-s23-ultra-green-thumbnew-600x600.jpg', 'dien-thoai-di-dong', 'samsung', '8-256GB', 21590000, NULL, NULL, 'samsung-s23-ultra-8-256gb', NULL, NULL, '2024-10-29 07:48:43', '2024-10-31 17:22:54'),
(25, 'Oppo A77s 8GB/128GB', 'storage/images/products/oppo-a77s-8gb128gb/10053535-dien-thoai-oppo-a77s-8gb-128gb-den-1.jpg', 'dien-thoai-di-dong', 'samsung', NULL, 5090000, NULL, NULL, 'oppo-a77s-8gb128gb', NULL, NULL, '2024-10-31 15:47:06', '2024-10-31 17:23:17'),
(26, 'Redmi Note 12', 'storage/images/products/redmi-note-12-4-128gb/note-12-xanh_1679381773.jpg', 'dien-thoai-di-dong', 'xiaomi', '4-128GB', 3590000, 'Xanh', NULL, 'redmi-note-12-4-128gb', 'PHA+PHN0cm9uZz5NJmFncmF2ZTtuIGgmaWdyYXZlO25oPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcGgmYWNpcmM7biBnaeG6o2k8L3N0cm9uZz4gMjQwMCB4IDEwODA8L2xpPg0KCTxsaT48c3Ryb25nPksmaWFjdXRlO2NoIHRoxrDhu5tjIG0mYWdyYXZlO24gaCZpZ3JhdmU7bmg8L3N0cm9uZz4gNi42NyZxdW90OzwvbGk+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcyZhYWN1dGU7bmcgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiAxMjAwbml0czwvbGk+DQoJPGxpPjxzdHJvbmc+QyZvY2lyYztuZyBuZ2jhu4cgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiBBTU9MRUQgRG90RGlzcGxheTwvbGk+DQoJPGxpPjxzdHJvbmc+VOG6p24gc+G7kSBxdSZlYWN1dGU7dCAoSHopPC9zdHJvbmc+IDEyMEh6PC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5DYW1lcmEgc2F1PC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+VCZpYWN1dGU7bmggbsSDbmc8L3N0cm9uZz4gVG8mYWdyYXZlO24gY+G6o25oIChQYW5vcmFtYSk8YnIgLz4NCglTaSZlY2lyYzt1IGPhuq1uIChNYWNybyk8YnIgLz4NCglIRFI8YnIgLz4NCglHJm9hY3V0ZTtjIHNpJmVjaXJjO3UgcuG7mW5nIChVbHRyYXdpZGUpPGJyIC8+DQoJRyZvYWN1dGU7YyBy4buZbmcgKFdpZGUpPC9saT4NCgk8bGk+PHN0cm9uZz7EkCZlZ3JhdmU7biBGbGFzaDwvc3Ryb25nPiBDJm9hY3V0ZTs8L2xpPg0KCTxsaT48c3Ryb25nPsSQ4buZIHBoJmFjaXJjO24gZ2nhuqNpIGNhbWVyYTwvc3Ryb25nPiA1ME1QIChmLzEuOCkgeCA4TVAgKGYvMi4yKSB4IDJNUCAoZi8yLjQpPC9saT4NCgk8bGk+PHN0cm9uZz5RdWF5IHBoaW08L3N0cm9uZz4gRnVsbEhEIDEwODBwQDMwZnBzPGJyIC8+DQoJSEQgNzIwcEAzMGZwczwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+Q2FtZXJhIHRyxrDhu5tjPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcGgmYWNpcmM7biBnaeG6o2kgY2FtZXJhPC9zdHJvbmc+IDEzTVAgZi8yLjQ1PC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5I4buHIMSRaeG7gXUgaCZhZ3JhdmU7bmggJmFtcDsgQ1BVPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+VmkgeOG7rSBsJnlhY3V0ZTs8L3N0cm9uZz4gU25hcGRyYWdvbiA2ODU8L2xpPg0KCTxsaT48c3Ryb25nPkjhu4cgxJFp4buBdSBoJmFncmF2ZTtuaDwvc3Ryb25nPiBBbmRyb2lkIDEzPC9saT4NCgk8bGk+PHN0cm9uZz5WaSB44butIGwmeWFjdXRlOyDEkeG7kyBo4buNYSAoR1BVKTwvc3Ryb25nPiBBZHJlbm8gNjEwPC9saT4NCgk8bGk+PHN0cm9uZz5U4buRYyDEkeG7mSBDUFU8L3N0cm9uZz4gT2N0YS1jb3JlICg0eDIuOCBHSHogQ29ydGV4LUE3MyAmYW1wOyA0eDEuOSBHSHogQ29ydGV4LUE1Myk8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkLhu5kgbmjhu5sgJmFtcDsgTMawdSB0cuG7rzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlJBTTwvc3Ryb25nPiA0R0I8L2xpPg0KCTxsaT48c3Ryb25nPkLhu5kgbmjhu5sgdHJvbmc8L3N0cm9uZz4gMTI4R0I8L2xpPg0KCTxsaT48c3Ryb25nPlRo4bq7IG5o4bubIG5nbyZhZ3JhdmU7aTwvc3Ryb25nPiBI4buXIHRy4bujIHRo4bq7IG5o4bubIG5nbyZhZ3JhdmU7aSBsJmVjaXJjO24gdOG7m2kgMVRCPC9saT4NCgk8bGk+PHN0cm9uZz5C4buZIG5o4bubIGMmb2dyYXZlO24gbOG6oWkgKGto4bqjIGThu6VuZyk8L3N0cm9uZz4gMTAxIEdCPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5L4bq/dCBu4buRaTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPk3huqFuZyBkaSDEkeG7mW5nPC9zdHJvbmc+IDRHPC9saT4NCgk8bGk+PHN0cm9uZz5XaS1GaTwvc3Ryb25nPiBXaS1GaSAyLjRHSHosIDVHSHo8L2xpPg0KCTxsaT48c3Ryb25nPkJsdWV0b290aDwvc3Ryb25nPiBWNS4wPC9saT4NCgk8bGk+PHN0cm9uZz5D4buVbmcga+G6v3QgbuG7kWkvc+G6oWM8L3N0cm9uZz4gVHlwZS1DPC9saT4NCgk8bGk+PHN0cm9uZz5T4buRIGtoZSBTSU08L3N0cm9uZz4gMiBuYW5vIFNJTTwvbGk+DQoJPGxpPjxzdHJvbmc+xJDhu4tuaCB24buLPC9zdHJvbmc+IEdQUzxiciAvPg0KCUdMT05BU1M8YnIgLz4NCglHQUxJTEVPPC9saT4NCgk8bGk+PHN0cm9uZz5KYWNrIHRhaSBuZ2hlPC9zdHJvbmc+IDMuNSBtbTwvbGk+DQoJPGxpPjxzdHJvbmc+S+G6v3QgbuG7kWkga2gmYWFjdXRlO2M8L3N0cm9uZz4gT1RHPC9saT4NCgk8bGk+PHN0cm9uZz5D4bqjbSBiaeG6v248L3N0cm9uZz4gQ+G6o20gYmnhur9uIHYmYWNpcmM7biB0YXkgY+G6oW5oIGImZWNpcmM7bjxiciAvPg0KCUPhuqNtIGJp4bq/biBnaWEgdOG7kWM8YnIgLz4NCglD4bqjbSBiaeG6v24gdGnhu4dtIGPhuq1uPGJyIC8+DQoJQ+G6o20gYmnhur9uICZhYWN1dGU7bmggcyZhYWN1dGU7bmc8YnIgLz4NCglMYSBiJmFncmF2ZTtuPGJyIC8+DQoJQ29uIHF1YXkgaOG7k2kgY2h1eeG7g248YnIgLz4NCglD4bqjbSBiaeG6v24gJmFhY3V0ZTtwIGvhur88L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRoaeG6v3Qga+G6vyAtIHRy4buNbmcgbMaw4bujbmc8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5DaOG6pXQgbGnhu4d1PC9zdHJvbmc+IE5o4buxYTwvbGk+DQoJPGxpPjxzdHJvbmc+VGhp4bq/dCBr4bq/PC9zdHJvbmc+IE5ndXkmZWNpcmM7biBraOG7kWk8L2xpPg0KCTxsaT48c3Ryb25nPksmaWFjdXRlO2NoIHRoxrDhu5tjPC9zdHJvbmc+IDE2NS42Nm1tIHggNzUuOTZtbSB4IDcuODVtbTwvbGk+DQoJPGxpPjxzdHJvbmc+VHLhu41uZyBsxrDhu6NuZzwvc3Ryb25nPiAxODMuNWc8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlBpbiAmYW1wOyBT4bqhYzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPkR1bmcgbMaw4bujbmcgcGluIHPhuqNuIHBo4bqpbTwvc3Ryb25nPiA1MDAwbUFoPC9saT4NCgk8bGk+PHN0cm9uZz5I4buXIHRy4bujIHPhuqFjIHThu5FpIMSRYTwvc3Ryb25nPiAzM1c8L2xpPg0KCTxsaT48c3Ryb25nPkxv4bqhaSBwaW48L3N0cm9uZz4gTGktUG88L2xpPg0KCTxsaT48c3Ryb25nPkMmb2NpcmM7bmcgbmdo4buHIHBpbjwvc3Ryb25nPiBT4bqhYyBwaW4gbmhhbmg8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRp4buHbiAmaWFjdXRlO2NoPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+S2gmYWFjdXRlO25nIG7GsOG7m2MsIGtoJmFhY3V0ZTtuZyBi4bulaTwvc3Ryb25nPiBJUDUzPC9saT4NCgk8bGk+PHN0cm9uZz5C4bqjbyBt4bqtdCBzaW5oIHRy4bqvYyBo4buNYyA8L3N0cm9uZz4gQ+G6o20gYmnhur9uIHYmYWNpcmM7biB0YXkgY+G6oW5oIG0mYWFjdXRlO3k8YnIgLz4NCglN4bufIGtoJm9hY3V0ZTthIGLhurFuZyBraHUmb2NpcmM7biBt4bq3dDwvbGk+DQoJPGxpPjxzdHJvbmc+VCZpYWN1dGU7bmggbsSDbmcgxJHhurdjIGJp4buHdDwvc3Ryb25nPiAmQWNpcmM7bSB0aGFuaCBIaS1SZXMgQXVkaW88L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPlRoJm9jaXJjO25nIHRpbiBjaHVuZzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlRo4budaSDEkWnhu4NtIHJhIG3huq90PC9zdHJvbmc+IDA0LzIwMjM8L2xpPg0KCTxsaT48c3Ryb25nPlPhuqNuIHBo4bqpbSBiYW8gZ+G7k208L3N0cm9uZz4gSOG7mXAsIFMmYWFjdXRlO2NoIGjGsOG7m25nIGThuqtuLCBDJmFjaXJjO3kgbOG6pXkgc2ltLCDhu5BwIGzGsG5nLCBDJmFhY3V0ZTtwIFR5cGUgQywgQ+G7pyBz4bqhYyBuaGFuaCBy4budaSDEkeG6p3UgVHlwZSBBPC9saT4NCjwvdWw+', '[\"storage\\/images\\/products\\/redmi-note-12-4-128gb\\/note-12-total-113.png\",\"storage\\/images\\/products\\/redmi-note-12-4-128gb\\/note-12-2-1.png\",\"storage\\/images\\/products\\/redmi-note-12-4-128gb\\/note-12-5-1.png\",\"storage\\/images\\/products\\/redmi-note-12-4-128gb\\/note-12-4-1.png\",\"storage\\/images\\/products\\/redmi-note-12-4-128gb\\/note-12-3-1.png\"]', '2024-11-04 08:38:36', '2024-11-04 08:49:31'),
(27, 'Samsung Galaxy S24 FE', 'storage/images/products/samsung-galaxy-s24-fe-8-128gb/ceacaf1d8c83a058a9210ffdbedf9c9f.png', 'dien-thoai-di-dong', 'samsung', '8-128GB', 16990000, 'Xanh dương', NULL, 'samsung-galaxy-s24-fe-8-128gb', NULL, '[\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/vi-vn-samsung-galaxy-s24-fe-1.png\",\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/samsung-galaxy-s24-fe638655455256371713.png\",\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/samsung-galaxy-s24-fe638655455255591734.png\",\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/samsung-galaxy-s24-fe638655455254721740.png\",\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/samsung-galaxy-s24-fe638655455253961703.png\",\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/samsung-galaxy-s24-fe638655455253071714.png\",\"storage\\/images\\/products\\/samsung-galaxy-s24-fe-8-128gb\\/samsung-galaxy-s24-fe638655455257181735.png\"]', '2024-11-04 08:48:14', '2024-11-04 15:41:40'),
(28, 'Realme 11', 'storage/images/products/realme-11-8-128gb/realme-11-vang-thumb-1-600x600.jpg', 'dien-thoai-di-dong', 'realme', '8-128GB', 6590000, 'Vàng', NULL, 'realme-11-8-128gb', 'PHA+PHN0cm9uZz5NJmFncmF2ZTtuIGgmaWdyYXZlO25oPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+QyZvY2lyYztuZyBuZ2jhu4cgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiBTdXBlciBBbW9sZWQ8L2xpPg0KCTxsaT48c3Ryb25nPsSQ4buZIHBoJmFjaXJjO24gZ2nhuqNpPC9zdHJvbmc+IDI0MDAgeCAxMDgwPC9saT4NCgk8bGk+PHN0cm9uZz5LJmlhY3V0ZTtjaCB0aMaw4bubYyBtJmFncmF2ZTtuIGgmaWdyYXZlO25oPC9zdHJvbmc+IDYuNCZxdW90OzwvbGk+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcyZhYWN1dGU7bmcgbSZhZ3JhdmU7biBoJmlncmF2ZTtuaDwvc3Ryb25nPiAxMDAwbml0czwvbGk+DQoJPGxpPjxzdHJvbmc+VOG6p24gc+G7kSBxdSZlYWN1dGU7dCAoSHopPC9zdHJvbmc+IDkwSHo8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkNhbWVyYSBzYXU8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZzwvc3Ryb25nPiBDaOG6vyDEkeG7mSAxMDhNUCwgQ2jhu6VwIMSRJmVjaXJjO20sIFRvJmFncmF2ZTtuIGPhuqNuaCwgQ2h1eSZlY2lyYztuIGdpYSwgSERSLCBOaOG6rW4gZOG6oW5nIGPhuqNuaCBBSSwgTCZhZ3JhdmU7bSDEkeG6uXAgQUksIELhu5kgbOG7jWMgbSZhZ3JhdmU7dSwgVCZ1Z3JhdmU7eSBjaOG7iW5oIGhp4buHdSDhu6luZyBCb2tlaCwgQ2jhu6VwIMSRxrDhu51uZyBwaOG7kSwgUXUmZWFjdXRlO3QgbOG6pXkgZOG7ryBsaeG7h3UsIE0mb2NpcmM7IGgmaWdyYXZlO25oLCBDaOG6vyDEkeG7mSDhuqNuaDwvbGk+DQoJPGxpPjxzdHJvbmc+xJAmZWdyYXZlO24gRmxhc2g8L3N0cm9uZz4gQyZvYWN1dGU7PC9saT4NCgk8bGk+PHN0cm9uZz7EkOG7mSBwaCZhY2lyYztuIGdp4bqjaSBjYW1lcmE8L3N0cm9uZz4gMTA4TVAgKGYvMS44KSB4IDJNUCAoZi8yLjQpPC9saT4NCjwvdWw+DQoNCjxwPjxzdHJvbmc+Q2FtZXJhIHRyxrDhu5tjPC9zdHJvbmc+PC9wPg0KDQo8dWw+DQoJPGxpPjxzdHJvbmc+xJDhu5kgcGgmYWNpcmM7biBnaeG6o2kgY2FtZXJhPC9zdHJvbmc+IDE2TVA8L2xpPg0KCTxsaT48c3Ryb25nPlQmaWFjdXRlO25oIG7Eg25nPC9zdHJvbmc+IENo4bulcCDEkSZlY2lyYzttLCBUbyZhZ3JhdmU7biBj4bqjbmgsIENoJmFjaXJjO24gZHVuZywgSERSLCBMJmFncmF2ZTttIMSR4bq5cCwgQuG7mSBs4buNYyBtJmFncmF2ZTt1LCBUJnVncmF2ZTt5IGNo4buJbmggaGnhu4d1IOG7qW5nIEJva2VoLCBOaOG6rW4gZOG6oW5nIGtodSZvY2lyYztuIG3hurd0LCBDaOG6vyDEkeG7mSDhuqNuaDwvbGk+DQo8L3VsPg0KDQo8cD48c3Ryb25nPkjhu4cgxJFp4buBdSBoJmFncmF2ZTtuaCAmYW1wOyBDUFU8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5I4buHIMSRaeG7gXUgaCZhZ3JhdmU7bmg8L3N0cm9uZz4gaW5jaHJlYWxtZSBVSSA0LjA8YnIgLz4NCglBbmRyb2lkIDEzPC9saT4NCgk8bGk+PHN0cm9uZz5WaSB44butIGwmeWFjdXRlOzwvc3Ryb25nPiBIZWxpbyBHOTk8L2xpPg0KCTxsaT48c3Ryb25nPlZpIHjhu60gbCZ5YWN1dGU7IMSR4buTIGjhu41hIChHUFUpPC9zdHJvbmc+IEFSTSBHNTcgTUMyPC9saT4NCgk8bGk+PHN0cm9uZz5U4buRYyDEkeG7mSBDUFU8L3N0cm9uZz4gT2N0YS1jb3JlICgyeDIuMiBHSHogQ29ydGV4LUE3NiAmYW1wOyA2eDIuMCBHSHogQ29ydGV4LUE1NSk8L2xpPg0KPC91bD4NCg0KPHA+Jm5ic3A7PC9wPg0KDQo8cD48c3Ryb25nPkLhu5kgbmjhu5sgJmFtcDsgTMawdSB0cuG7rzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlJBTTwvc3Ryb25nPiA4R0I8L2xpPg0KCTxsaT48c3Ryb25nPkLhu5kgbmjhu5sgdHJvbmc8L3N0cm9uZz4gMTI4R0I8L2xpPg0KCTxsaT48c3Ryb25nPlRo4bq7IG5o4bubIG5nbyZhZ3JhdmU7aTwvc3Ryb25nPiBI4buXIHRy4bujIHThu5FpIMSRYSAxIFRCPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5L4bq/dCBu4buRaTwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlPhu5Ega2hlIFNJTTwvc3Ryb25nPiAyIG5hbm8gU0lNICsgMSBraGUgdGjhursgbmjhu5s8L2xpPg0KCTxsaT48c3Ryb25nPkJsdWV0b290aDwvc3Ryb25nPiBWNS4zPC9saT4NCgk8bGk+PHN0cm9uZz5D4buVbmcga+G6v3QgbuG7kWkvc+G6oWM8L3N0cm9uZz4gVHlwZS1DPC9saT4NCgk8bGk+PHN0cm9uZz5KYWNrIHRhaSBuZ2hlPC9zdHJvbmc+IDMuNW1tPC9saT4NCgk8bGk+PHN0cm9uZz5L4bq/dCBu4buRaSBraCZhYWN1dGU7Yzwvc3Ryb25nPiBPVEc8L2xpPg0KCTxsaT48c3Ryb25nPldpLUZpPC9zdHJvbmc+IElFRUUgODAyLjExIGEvYi9nL24vYWM8L2xpPg0KCTxsaT48c3Ryb25nPk3huqFuZyBkaSDEkeG7mW5nPC9zdHJvbmc+IDRHPC9saT4NCgk8bGk+PHN0cm9uZz5D4bqjbSBiaeG6v248L3N0cm9uZz4gQ+G6o20gYmnhur9uIHYmYWNpcmM7biB0YXkgY+G6oW5oIGImZWNpcmM7bjxiciAvPg0KCUPhuqNtIGJp4bq/biBnaWEgdOG7kWM8YnIgLz4NCglD4bqjbSBiaeG6v24gdGnhu4dtIGPhuq1uPGJyIC8+DQoJTGEgYiZhZ3JhdmU7bjxiciAvPg0KCUPhuqNtIGJp4bq/biAmYWFjdXRlO3Aga+G6vzwvbGk+DQoJPGxpPjxzdHJvbmc+xJDhu4tuaCB24buLPC9zdHJvbmc+IEdQUzxiciAvPg0KCUFHUFM8YnIgLz4NCglCZWlkb3U8YnIgLz4NCglHbG9uYXNzPGJyIC8+DQoJR2FsaWxlbzwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+VGhp4bq/dCBr4bq/IC0gdHLhu41uZyBsxrDhu6NuZzwvc3Ryb25nPjwvcD4NCg0KPHVsPg0KCTxsaT48c3Ryb25nPlRoaeG6v3Qga+G6vzwvc3Ryb25nPiBOZ3V5JmVjaXJjO24ga2jhu5FpPC9saT4NCgk8bGk+PHN0cm9uZz5DaOG6pXQgbGnhu4d1PC9zdHJvbmc+IE5o4buxYTwvbGk+DQoJPGxpPjxzdHJvbmc+VHLhu41uZyBsxrDhu6NuZzwvc3Ryb25nPiAxNzhnPC9saT4NCgk8bGk+PHN0cm9uZz5LJmlhY3V0ZTtjaCB0aMaw4bubYzwvc3Ryb25nPiAxNTkuOW1tIHggNzMuM21tIHggNy45NW1tPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5QaW4gJmFtcDsgU+G6oWM8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5EdW5nIGzGsOG7o25nIHBpbiBz4bqjbiBwaOG6qW08L3N0cm9uZz4gNTAwMG1BaDwvbGk+DQoJPGxpPjxzdHJvbmc+TG/huqFpIHBpbjwvc3Ryb25nPiBMaS1QbzwvbGk+DQoJPGxpPjxzdHJvbmc+QyZvY2lyYztuZyBuZ2jhu4cgcGluPC9zdHJvbmc+IFPhuqFjIG5oYW5oIFN1cGVyVk9PQyA2N1c8L2xpPg0KCTxsaT48c3Ryb25nPkjhu5cgdHLhu6Mgc+G6oWMgdOG7kWkgxJFhPC9zdHJvbmc+IDY3VzwvbGk+DQo8L3VsPg0KDQo8cD4mbmJzcDs8L3A+DQoNCjxwPjxzdHJvbmc+VGnhu4duICZpYWN1dGU7Y2g8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5C4bqjbyBt4bqtdCBzaW5oIHRy4bqvYyBo4buNYyA8L3N0cm9uZz4gTeG7nyBraCZvYWN1dGU7YSB2JmFjaXJjO24gdGF5IGPhuqFuaCB2aeG7gW48L2xpPg0KCTxsaT48c3Ryb25nPktoJmFhY3V0ZTtuZyBuxrDhu5tjLCBraCZhYWN1dGU7bmcgYuG7pWk8L3N0cm9uZz4gxJBhbmcgY+G6rXAgbmjhuq10PC9saT4NCgk8bGk+PHN0cm9uZz5UJmlhY3V0ZTtuaCBuxINuZyDEkeG6t2MgYmnhu4d0PC9zdHJvbmc+IE3hu58gcuG7mW5nIGLhu5kgbmjhu5sgUkFNPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4NCg0KPHA+PHN0cm9uZz5UaCZvY2lyYztuZyB0aW4gY2h1bmc8L3N0cm9uZz48L3A+DQoNCjx1bD4NCgk8bGk+PHN0cm9uZz5UaOG7nWkgxJFp4buDbSByYSBt4bqvdDwvc3Ryb25nPiAwNy8yMDIzPC9saT4NCgk8bGk+PHN0cm9uZz5T4bqjbiBwaOG6qW0gYmFvIGfhu5NtPC9zdHJvbmc+IGluY2hyZWFsbWUgMTEgNEc8YnIgLz4NCglDJmFhY3V0ZTtwIFVTQiBUeXBlLUM8YnIgLz4NCglD4bunIHPhuqFjIDY3VzxiciAvPg0KCeG7kHAgbMawbmcgYuG6o28gduG7hzxiciAvPg0KCVF1ZSBs4bqleSBTSU08YnIgLz4NCglNaeG6v25nIGQmYWFjdXRlO24gbSZhZ3JhdmU7biBoJmlncmF2ZTtuaCBkJmFhY3V0ZTtuIHPhurVuPGJyIC8+DQoJUyZhYWN1dGU7Y2ggaMaw4bubbmcgZOG6q24gc+G7rSBk4bulbmcgc+G6o24gcGjhuqltPGJyIC8+DQoJVGgmb2NpcmM7bmcgdGluIHF1YW4gdHLhu41uZyB24buBIHPhuqNuIHBo4bqpbSB2JmFncmF2ZTsgUGhp4bq/dSBi4bqjbyBoJmFncmF2ZTtuaCBpbmNoPC9saT4NCjwvdWw+DQoNCjxwPiZuYnNwOzwvcD4=', '[\"storage\\/images\\/products\\/realme-11-8-128gb\\/vi-vn-realme-11-128gb-slider-6.png\",\"storage\\/images\\/products\\/realme-11-8-128gb\\/vi-vn-realme-11-128gb-slider-2.png\",\"storage\\/images\\/products\\/realme-11-8-128gb\\/realme-11-128gb-slider-99-1020x570.png\",\"storage\\/images\\/products\\/realme-11-8-128gb\\/realme-11-128gb-slider-98-1020x570-1.png\",\"storage\\/images\\/products\\/realme-11-8-128gb\\/realme-11-128gb-slider-97-1020x570.png\",\"storage\\/images\\/products\\/realme-11-8-128gb\\/vi-vn-realme-11-128gb-slider-7.png\"]', '2024-11-04 15:24:46', '2024-11-04 15:31:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iwtzisFd40sERYnoV5zKU6ok0ufFKXgSoGrqj4kU', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmNwZUpRYTBOenBXZ2VUMmFJZ0JVMFZpRDNCbW83akJDZEZieGNiTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYW5oLW11Yy9pbWFnZXMvZmF2aWNvbi5wbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731210437);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_id` varchar(255) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` char(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'storage/images/users/guest.png',
  `isAdmin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `personal_id`, `fname`, `lname`, `gender`, `birthday`, `address`, `email`, `phone`, `email_verified_at`, `phone_verified_at`, `password`, `avatar`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '048205000588', 'Hoàng', 'Thái Phan Minh', 1, '2005-09-02', 'K482/16 Trưng Nữ Vương', 'hoangtpm2005@gmail.com', '0911482816', NULL, NULL, '$2y$12$xq24VLUad3zR4svH7ZW3ZOjLR9PehvjhxM9sT/tIc3gMmT6za0kVa', 'storage/images/users/Stalin_Full_Image.jpg', 1, NULL, NULL, '2024-11-05 07:28:20'),
(4, NULL, 'Stalin', 'Losif', 1, '1878-12-18', 'Georgia, USSR', 'losifstalin@ussr.gov.ru', NULL, NULL, NULL, '$2y$12$Cj/A2jDmaggGPfFhDbhD1.y63tY9ImxkPmCcz8AKmAB1tsNCReB/2', 'storage/images/users/Stalin_Full_Image.jpg', 1, NULL, '2024-11-02 18:51:05', '2024-11-03 01:58:12'),
(5, '048205000588', 'Thái', 'Hoàng', 1, '2004-06-07', 'Hải Châu', 'thaiphanminhhoang2005@gmail.com', NULL, NULL, NULL, '$2y$12$yHSlvsyHC5HrKG4ZJnH2qe8tIw/klv5.crsMQ7EgB9Vby2bXSqZwS', NULL, 0, NULL, '2024-11-05 07:21:32', '2024-11-05 07:27:07'),
(6, '', 'Huy', 'Nguyễn', 3, '2006-04-23', '', 'customer2@gmail.com', '', NULL, NULL, '$2y$12$EjuSf.1g7imqD0AqIZy5jeP3IEn7gffElC/Ne.6w0a1oYN39O1BRe', 'storage/images/users/john-cena.jpeg', 0, NULL, '2024-11-05 17:23:55', '2024-11-05 17:35:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`categories`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_name`, `slug`, `categories`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'samsung', '{\"dien-thoai-di-dong\":\"on\",\"may-tinh-bang\":\"on\"}', '2024-10-28 19:35:58', '2024-10-28 20:18:18'),
(2, 'Xiaomi', 'xiaomi', '{\"dien-thoai-di-dong\":\"on\",\"may-tinh-bang\":\"on\"}', '2024-10-28 19:39:04', '2024-10-28 19:39:04'),
(4, 'realme', 'realme', '{\"dien-thoai-di-dong\":\"on\"}', '2024-10-29 00:02:25', '2024-10-29 00:02:25'),
(5, 'Oppo', 'oppo', '{\"dien-thoai-di-dong\":\"on\",\"may-tinh-bang\":\"on\"}', '2024-10-29 00:02:34', '2024-10-31 07:21:13'),
(6, 'Lenovo', 'lenovo', '{\"may-tinh-bang\":\"on\",\"laptop\":\"on\"}', '2024-10-29 00:02:40', '2024-10-29 00:02:40'),
(8, 'Apple', 'apple', '{\"iphone\":\"on\",\"may-tinh-bang\":\"on\"}', '2024-10-29 01:11:17', '2024-10-29 01:11:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_code` varchar(255) NOT NULL,
  `start_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `allProduct` tinyint(1) NOT NULL,
  `productsList` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`productsList`)),
  `discountAmount` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `maxDiscount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vouchers`
--

INSERT INTO `vouchers` (`id`, `voucher_code`, `start_at`, `end_at`, `allProduct`, `productsList`, `discountAmount`, `unit`, `maxDiscount`, `created_at`, `updated_at`) VALUES
(3, 'abcd1234', '2024-11-07 13:37:00', '2024-11-10 13:37:00', 0, '[\"23\",\"27\"]', 10, '%', 15000000, '2024-11-08 06:38:09', '2024-11-08 16:07:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_vi_unique` (`slug_vi`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `items_in_order`
--
ALTER TABLE `items_in_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_vi_unique` (`slug_vi`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`,`phone`) USING BTREE;

--
-- Chỉ mục cho bảng `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vouchers_voucher_code_unique` (`voucher_code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `items_in_order`
--
ALTER TABLE `items_in_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
