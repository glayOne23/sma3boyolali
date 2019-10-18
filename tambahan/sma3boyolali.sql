-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2019 at 04:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma3boyolali`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `cover`, `created_at`, `updated_at`) VALUES
(12, 'Kampus Expo 2017', '2019-09-22_14_32_51_2019-05-29_02_10_10_DSC_0463.JPG', '2019-05-28 19:10:10', '2019-09-22 07:32:51'),
(16, 'Class Meeting', '2019-09-22_14_57_50_IMG_5536.JPG', '2019-09-22 07:57:50', '2019-09-22 07:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `album_images`
--

CREATE TABLE `album_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album_images`
--

INSERT INTO `album_images` (`id`, `name`, `created_at`, `updated_at`, `album_id`) VALUES
(49, '2019-09-22_14_56_24_DSC_0505.JPG', '2019-09-22 07:56:24', '2019-09-22 07:56:24', 12),
(50, '2019-09-22_14_56_24_DSC_0497.JPG', '2019-09-22 07:56:24', '2019-09-22 07:56:24', 12),
(51, '2019-09-22_14_56_25_DSC_0491.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(52, '2019-09-22_14_56_25_DSC_0486.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(53, '2019-09-22_14_56_25_DSC_0483.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(54, '2019-09-22_14_56_25_DSC_0450.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(55, '2019-09-22_14_56_25_DSC_0444.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(56, '2019-09-22_14_56_25_DSC_0424.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(57, '2019-09-22_14_56_25_DSC_0421.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(58, '2019-09-22_14_56_25_DSC_0418.JPG', '2019-09-22 07:56:25', '2019-09-22 07:56:25', 12),
(59, '2019-09-22_14_57_58_IMG_5536.JPG', '2019-09-22 07:57:58', '2019-09-22 07:57:58', 16),
(60, '2019-09-22_14_57_58_IMG_5617.JPG', '2019-09-22 07:57:58', '2019-09-22 07:57:58', 16),
(61, '2019-09-22_14_57_58_DSC_1187.JPG', '2019-09-22 07:57:58', '2019-09-22 07:57:58', 16),
(62, '2019-09-22_14_57_58_DSC_1183.JPG', '2019-09-22 07:57:58', '2019-09-22 07:57:58', 16),
(63, '2019-09-22_14_57_58_DSC_1172.JPG', '2019-09-22 07:57:58', '2019-09-22 07:57:58', 16),
(64, '2019-09-22_14_57_59_DSC_1154.JPG', '2019-09-22 07:57:59', '2019-09-22 07:57:59', 16),
(65, '2019-09-22_14_57_59_DSC_1152.JPG', '2019-09-22 07:57:59', '2019-09-22 07:57:59', 16),
(66, '2019-09-22_14_57_59_DSC_1122.JPG', '2019-09-22 07:57:59', '2019-09-22 07:57:59', 16),
(67, '2019-09-22_14_57_59_DSC_1100.JPG', '2019-09-22 07:57:59', '2019-09-22 07:57:59', 16),
(68, '2019-09-22_14_57_59_DSC_1093.JPG', '2019-09-22 07:57:59', '2019-09-22 07:57:59', 16);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `type`, `photo`, `created_at`, `updated_at`) VALUES
(28, 'Website Smaga Rajai Turnamen Smilling Cup Boyolali', '<p align=\"justify\"><span style=\"font-family: \'Times New Roman\', serif; color: #000000;\"><span style=\"font-size: medium;\">Dalam rangka menggairahkan olahraga Basket di Boyolali, Perbasi Boyolali bekerjasama dengan salah satu sekolah Basket di Boyolali menyelenggarakan turnamen basket antar pelajar yang diikuti oleh SMA SMK di wilayah Kabupaten Boyolali.</span></span></p>\r\n<p align=\"justify\"><span style=\"font-family: \'Times New Roman\', serif; color: #000000;\"><span style=\"font-size: medium;\">Dalam kejuaraan yang dilaksanakan di Lapangan Basket Kompleks Pendopo Alit Kota Boyolali, Juara I putra dan Putri di borong habis oleh anak asuh Bapak Wahyudi Kuat. Di Bagian putra tim basket yang dimotori oleh Taufik ini mengkandaskan ambisi SMAN 1 Teras Boyolali. Sedang di Bagian putri, Putri Meluk dkk mengalahkan tim basket SMAN 1 Boyolali. Selamat !!!! (Humas SMAGABOY)</span></span></p>', 'prestasi', '2019-09-22_14_23_12_basket.jpg', '2019-09-22 07:23:12', '2019-09-22 07:23:12'),
(29, 'Test Website', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis posuere metus, ut rhoncus est tempor eget. Nulla massa nibh, finibus sit amet sollicitudin et, facilisis bibendum mi. Ut luctus euismod ligula, vitae scelerisque sem congue id. Phasellus pharetra efficitur lobortis. Nam tincidunt malesuada dolor, ut maximus felis scelerisque tristique. Phasellus bibendum nisl sit amet purus porta vestibulum. Quisque ut nunc libero. Etiam nibh sem, egestas sit amet magna ut, commodo cursus leo. Donec eget dui sollicitudin, iaculis tellus sit amet, egestas nisi. Nam id odio arcu.</p>\r\n<p>Donec convallis fringilla lobortis. Aliquam erat volutpat. Sed mattis lorem ac commodo mattis. Curabitur quis arcu et felis laoreet vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et dolor erat. Phasellus nec arcu fermentum mauris elementum sodales nec nec odio. Cras rhoncus dolor id vulputate aliquet. Integer at lacus vel ex euismod efficitur. Vestibulum eu sodales ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas a ex a justo dictum ultrices.</p>\r\n<p>Nunc sit amet lorem sed lectus rutrum cursus dictum at lectus. Donec vitae purus a nibh efficitur rhoncus ut non ligula. Aenean placerat augue in libero pharetra, hendrerit tincidunt ex dapibus. Nulla diam nulla, suscipit eget tortor vitae, ultrices aliquet erat. Etiam euismod semper dignissim. Fusce at magna ut elit blandit fringilla. Sed vel pulvinar dolor. Donec porta, erat ut lacinia ullamcorper, ligula est luctus velit, eu auctor arcu urna volutpat enim. Fusce ut hendrerit enim. Integer aliquam facilisis nunc, vel blandit purus tempus pharetra. Quisque vel orci in tortor dignissim ultrices vel venenatis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu nec tellus lobortis viverra. Nulla facilisis ipsum arcu, a consectetur nulla commodo id. Donec cursus id dui vitae vulputate. Proin sed orci eget arcu posuere vehicula.</p>', 'berita', '2019-09-22_14_45_21_Luca-Bravo.jpg', '2019-09-22 07:45:21', '2019-09-22 07:45:21'),
(30, 'Test Website 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis posuere metus, ut rhoncus est tempor eget. Nulla massa nibh, finibus sit amet sollicitudin et, facilisis bibendum mi. Ut luctus euismod ligula, vitae scelerisque sem congue id. Phasellus pharetra efficitur lobortis. Nam tincidunt malesuada dolor, ut maximus felis scelerisque tristique. Phasellus bibendum nisl sit amet purus porta vestibulum. Quisque ut nunc libero. Etiam nibh sem, egestas sit amet magna ut, commodo cursus leo. Donec eget dui sollicitudin, iaculis tellus sit amet, egestas nisi. Nam id odio arcu.</p>\r\n<p>Donec convallis fringilla lobortis. Aliquam erat volutpat. Sed mattis lorem ac commodo mattis. Curabitur quis arcu et felis laoreet vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et dolor erat. Phasellus nec arcu fermentum mauris elementum sodales nec nec odio. Cras rhoncus dolor id vulputate aliquet. Integer at lacus vel ex euismod efficitur. Vestibulum eu sodales ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas a ex a justo dictum ultrices.</p>\r\n<p>Nunc sit amet lorem sed lectus rutrum cursus dictum at lectus. Donec vitae purus a nibh efficitur rhoncus ut non ligula. Aenean placerat augue in libero pharetra, hendrerit tincidunt ex dapibus. Nulla diam nulla, suscipit eget tortor vitae, ultrices aliquet erat. Etiam euismod semper dignissim. Fusce at magna ut elit blandit fringilla. Sed vel pulvinar dolor. Donec porta, erat ut lacinia ullamcorper, ligula est luctus velit, eu auctor arcu urna volutpat enim. Fusce ut hendrerit enim. Integer aliquam facilisis nunc, vel blandit purus tempus pharetra. Quisque vel orci in tortor dignissim ultrices vel venenatis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu nec tellus lobortis viverra. Nulla facilisis ipsum arcu, a consectetur nulla commodo id. Donec cursus id dui vitae vulputate. Proin sed orci eget arcu posuere vehicula.</p>', 'berita', '2019-09-22_14_45_49_Rob-Bye.jpg', '2019-09-22 07:45:49', '2019-09-22 07:45:49'),
(31, 'Test Website 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis posuere metus, ut rhoncus est tempor eget. Nulla massa nibh, finibus sit amet sollicitudin et, facilisis bibendum mi. Ut luctus euismod ligula, vitae scelerisque sem congue id. Phasellus pharetra efficitur lobortis. Nam tincidunt malesuada dolor, ut maximus felis scelerisque tristique. Phasellus bibendum nisl sit amet purus porta vestibulum. Quisque ut nunc libero. Etiam nibh sem, egestas sit amet magna ut, commodo cursus leo. Donec eget dui sollicitudin, iaculis tellus sit amet, egestas nisi. Nam id odio arcu.</p>\r\n<p>Donec convallis fringilla lobortis. Aliquam erat volutpat. Sed mattis lorem ac commodo mattis. Curabitur quis arcu et felis laoreet vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et dolor erat. Phasellus nec arcu fermentum mauris elementum sodales nec nec odio. Cras rhoncus dolor id vulputate aliquet. Integer at lacus vel ex euismod efficitur. Vestibulum eu sodales ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas a ex a justo dictum ultrices.</p>\r\n<p>Nunc sit amet lorem sed lectus rutrum cursus dictum at lectus. Donec vitae purus a nibh efficitur rhoncus ut non ligula. Aenean placerat augue in libero pharetra, hendrerit tincidunt ex dapibus. Nulla diam nulla, suscipit eget tortor vitae, ultrices aliquet erat. Etiam euismod semper dignissim. Fusce at magna ut elit blandit fringilla. Sed vel pulvinar dolor. Donec porta, erat ut lacinia ullamcorper, ligula est luctus velit, eu auctor arcu urna volutpat enim. Fusce ut hendrerit enim. Integer aliquam facilisis nunc, vel blandit purus tempus pharetra. Quisque vel orci in tortor dignissim ultrices vel venenatis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu nec tellus lobortis viverra. Nulla facilisis ipsum arcu, a consectetur nulla commodo id. Donec cursus id dui vitae vulputate. Proin sed orci eget arcu posuere vehicula.</p>', 'berita', '2019-09-22_14_46_18_1080p-HD-Image-Nature-Desktop.jpg', '2019-09-22 07:46:18', '2019-09-22 07:46:18'),
(32, 'Lore Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis posuere metus, ut rhoncus est tempor eget. Nulla massa nibh, finibus sit amet sollicitudin et, facilisis bibendum mi. Ut luctus euismod ligula, vitae scelerisque sem congue id. Phasellus pharetra efficitur lobortis. Nam tincidunt malesuada dolor, ut maximus felis scelerisque tristique. Phasellus bibendum nisl sit amet purus porta vestibulum. Quisque ut nunc libero. Etiam nibh sem, egestas sit amet magna ut, commodo cursus leo. Donec eget dui sollicitudin, iaculis tellus sit amet, egestas nisi. Nam id odio arcu.</p>\r\n<p>Donec convallis fringilla lobortis. Aliquam erat volutpat. Sed mattis lorem ac commodo mattis. Curabitur quis arcu et felis laoreet vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et dolor erat. Phasellus nec arcu fermentum mauris elementum sodales nec nec odio. Cras rhoncus dolor id vulputate aliquet. Integer at lacus vel ex euismod efficitur. Vestibulum eu sodales ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas a ex a justo dictum ultrices.</p>\r\n<p>Nunc sit amet lorem sed lectus rutrum cursus dictum at lectus. Donec vitae purus a nibh efficitur rhoncus ut non ligula. Aenean placerat augue in libero pharetra, hendrerit tincidunt ex dapibus. Nulla diam nulla, suscipit eget tortor vitae, ultrices aliquet erat. Etiam euismod semper dignissim. Fusce at magna ut elit blandit fringilla. Sed vel pulvinar dolor. Donec porta, erat ut lacinia ullamcorper, ligula est luctus velit, eu auctor arcu urna volutpat enim. Fusce ut hendrerit enim. Integer aliquam facilisis nunc, vel blandit purus tempus pharetra. Quisque vel orci in tortor dignissim ultrices vel venenatis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu nec tellus lobortis viverra. Nulla facilisis ipsum arcu, a consectetur nulla commodo id. Donec cursus id dui vitae vulputate. Proin sed orci eget arcu posuere vehicula.</p>', 'prestasi', '2019-09-22_14_47_20_Free-nature-images-HD.jpg', '2019-09-22 07:47:20', '2019-09-22 07:47:20'),
(33, 'Lore Ipsum 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis posuere metus, ut rhoncus est tempor eget. Nulla massa nibh, finibus sit amet sollicitudin et, facilisis bibendum mi. Ut luctus euismod ligula, vitae scelerisque sem congue id. Phasellus pharetra efficitur lobortis. Nam tincidunt malesuada dolor, ut maximus felis scelerisque tristique. Phasellus bibendum nisl sit amet purus porta vestibulum. Quisque ut nunc libero. Etiam nibh sem, egestas sit amet magna ut, commodo cursus leo. Donec eget dui sollicitudin, iaculis tellus sit amet, egestas nisi. Nam id odio arcu.</p>\r\n<p>Donec convallis fringilla lobortis. Aliquam erat volutpat. Sed mattis lorem ac commodo mattis. Curabitur quis arcu et felis laoreet vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et dolor erat. Phasellus nec arcu fermentum mauris elementum sodales nec nec odio. Cras rhoncus dolor id vulputate aliquet. Integer at lacus vel ex euismod efficitur. Vestibulum eu sodales ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas a ex a justo dictum ultrices.</p>\r\n<p>Nunc sit amet lorem sed lectus rutrum cursus dictum at lectus. Donec vitae purus a nibh efficitur rhoncus ut non ligula. Aenean placerat augue in libero pharetra, hendrerit tincidunt ex dapibus. Nulla diam nulla, suscipit eget tortor vitae, ultrices aliquet erat. Etiam euismod semper dignissim. Fusce at magna ut elit blandit fringilla. Sed vel pulvinar dolor. Donec porta, erat ut lacinia ullamcorper, ligula est luctus velit, eu auctor arcu urna volutpat enim. Fusce ut hendrerit enim. Integer aliquam facilisis nunc, vel blandit purus tempus pharetra. Quisque vel orci in tortor dignissim ultrices vel venenatis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu nec tellus lobortis viverra. Nulla facilisis ipsum arcu, a consectetur nulla commodo id. Donec cursus id dui vitae vulputate. Proin sed orci eget arcu posuere vehicula.</p>', 'prestasi', '2019-09-22_14_47_40_Nature-Wallpaper-for-Walls-desktop-1080p.jpg', '2019-09-22 07:47:40', '2019-09-22 07:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `nip`, `photo`, `birthday`, `created_at`, `updated_at`, `employee_category_id`) VALUES
(22, 'Jajang', '123123', '2019-05-14_14:34:29_aryastark.jpg', '2018-04-30', '2019-05-14 07:34:29', '2019-05-14 07:34:29', 2),
(23, 'Anto', '11111', '2019-05-14_14:34:48_aryastark.jpg', '2019-05-14', '2019-05-14 07:34:48', '2019-05-14 07:34:48', 5),
(24, 'Anto Kewer', '121212', '2019-05-14_14:35:20_aryastark.jpg', '2019-04-29', '2019-05-14 07:35:20', '2019-05-14 07:35:20', 2),
(25, 'Anto', '309123', '2019-05-14_15:37:06_aryastark.jpg', '2019-04-28', '2019-05-14 08:37:06', '2019-05-14 08:37:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee_categories`
--

CREATE TABLE `employee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_categories`
--

INSERT INTO `employee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Guru Tetap', '2019-04-20 07:20:11', '2019-04-22 00:18:50'),
(5, 'Guru Honorer', '2019-04-21 22:34:16', '2019-04-21 22:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `name`, `content`, `created_at`, `updated_at`, `type`) VALUES
(5, 'MPK', '<p>Isi Halaman MPK</p>', '2019-05-12 22:01:46', '2019-09-22 08:09:59', 'organisasi'),
(6, 'Kimia', '<p>Ini halaman OSN</p>', '2019-05-12 22:07:25', '2019-09-22 08:09:11', 'osn'),
(7, 'OSIS', '<p>INI HALAMAN OSIS!!!!!!</p>', '2019-05-19 19:47:44', '2019-09-22 08:10:36', 'organisasi'),
(8, 'Karya Tulis Ilmiah (KIR)', '<p>Ini Halaman KIR</p>', '2019-05-19 19:48:55', '2019-09-22 08:08:42', 'ekstrakurikuler'),
(9, 'ROHIS', '<p>INI HALAMAN ROHIS!!</p>', '2019-05-19 19:49:04', '2019-09-22 08:13:09', 'organisasi'),
(10, 'English Cub', '<p>Ini Halaman English Club</p>', '2019-05-19 19:49:40', '2019-09-22 08:06:15', 'ekstrakurikuler'),
(11, 'Japan Club', '<p>Ini halaman japan club</p>', '2019-05-19 19:50:52', '2019-09-22 08:07:34', 'ekstrakurikuler'),
(12, 'Seni Rupa', '<p>Ini seni rupa</p>', '2019-05-19 19:51:22', '2019-09-22 08:14:09', 'ekstrakurikuler'),
(13, 'Dewan Ambalan (DA)', '<p>INI HALAMAN DA!!</p>', '2019-05-19 19:52:47', '2019-09-22 08:04:37', 'organisasi'),
(14, 'Seni Tari', '<p>Ini Halaman Seni Tari</p>', '2019-05-19 19:53:01', '2019-09-22 08:14:26', 'ekstrakurikuler'),
(15, 'Teater', '<p>Ini Halaman Seni Tari</p>', '2019-05-19 19:53:35', '2019-09-22 08:14:47', 'ekstrakurikuler'),
(16, 'Wushu', '<p>Ini Halaman Wushu</p>', '2019-05-19 19:53:58', '2019-09-22 08:16:02', 'ekstrakurikuler'),
(17, 'Basket', '<p>Ini Halaman Basket</p>', '2019-05-19 19:54:36', '2019-09-22 08:00:49', 'ekstrakurikuler'),
(18, 'Volley', '<p>Ini Halaman Volley</p>', '2019-05-19 19:55:22', '2019-09-22 08:15:42', 'ekstrakurikuler'),
(19, 'PMR', '<p>INI HALAMAN PMR!!</p>', '2019-05-19 19:55:45', '2019-09-22 08:12:28', 'organisasi'),
(20, 'Futsal', '<p>Ini Hlaman Futsal</p>', '2019-05-19 19:55:56', '2019-09-22 08:06:35', 'ekstrakurikuler'),
(21, 'Bina Remaja Muslim (BRM) Lanjutan', '<p>ini</p>', '2019-05-19 19:56:30', '2019-09-22 08:02:25', 'ekstrakurikuler'),
(22, 'Panduan Suara', '<p>Ini</p>', '2019-05-19 19:56:57', '2019-09-22 08:11:00', 'ekstrakurikuler'),
(23, 'PKS', '<div>Rastra Prasetya Praja yang berarti Polisi sebagai Penjaga Keamanan dan Ketertiban&nbsp; dengan Prinsip Melayani dan Mengayomi serta Benjanji kepada Bangsa adalah nama organisasi Patroli Keamanan Sekolah (PKS) SMA N 3 Boyolali. PKS memiliki tugas yaitu :</div>\r\n<div>&nbsp;1. Untuk membantu KAMTIBNAS ( Keamanan Ketertiban Nasional )</div>\r\n<div>&nbsp;2. Membantu masyarakat untuk menertibkan keamanan</div>\r\n<div>3. Untuk melatih siswa agar berdisiplin bertanggung jawab dan berdikari ( berdiri sendiri )</div>\r\n<div>4. Untuk mencegah serta menangani kenakalan remaja.</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Organisasi ini dibina oleh Ibu Lilis Erwati, S.Pd. dan Ibu Alice Fauziah S.Pd.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Prestasi yang telah kami raih antara lain</div>\r\n<div>1. Juara 2 Lomba Pelajar Pelopor Tingkat SMA/SMK&nbsp; Se-Kabupaten Boyolali Tahun 2017</div>\r\n<div>2. Juara 2 Lomba Safety Riding Tingkat SMA/SMK Se-Kabupaten Boyolali tahun 2019</div>\r\n<div>3. Juara Harapan 1 dan Harapan 2 Lomba Safety Riding Tingkat SMA/SMK Se-Karisidenan Tahun 2019</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>', '2019-05-19 19:57:00', '2019-09-22 08:12:01', 'organisasi'),
(24, 'Jurnalistik', '<p>Ini</p>', '2019-05-19 19:57:14', '2019-09-22 08:08:11', 'ekstrakurikuler'),
(25, 'PASKIBRA', '<p>INI HALAMAN PASKIBRA!!</p>', '2019-05-19 19:59:08', '2019-09-22 08:11:19', 'organisasi'),
(26, 'Animasi', '<p>Ini</p>', '2019-05-19 19:59:21', '2019-09-22 07:59:38', 'ekstrakurikuler'),
(27, 'Biologi', '<p>ini halaman biologi</p>', '2019-05-19 20:04:14', '2019-09-22 08:02:51', 'osn'),
(28, 'Matematika', '<p>Ini halaman matematika</p>', '2019-05-19 20:08:46', '2019-09-22 08:09:32', 'osn'),
(29, 'TIK', '<p>INI HALAMAN TIK</p>', '2019-05-19 20:10:52', '2019-09-22 08:15:05', 'osn'),
(30, 'Astronomi', '<p>ini Halaman Astronomi</p>', '2019-05-19 20:12:27', '2019-07-30 23:10:44', 'osn'),
(31, 'Ekonomi', '<p>Ini halaman Ekonomi!!</p>', '2019-05-19 20:15:00', '2019-09-22 08:05:48', 'osn'),
(32, 'Geografi', '<p>Ini halaman Geografi</p>', '2019-05-19 20:17:00', '2019-09-22 08:06:52', 'osn');

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular_images`
--

CREATE TABLE `extracurricular_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extracurricular_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extracurricular_images`
--

INSERT INTO `extracurricular_images` (`id`, `name`, `created_at`, `updated_at`, `extracurricular_id`) VALUES
(52, '2019-09-22_14_59_38_Rob-Bye.jpg', '2019-09-22 07:59:38', '2019-09-22 07:59:38', 26),
(53, '2019-09-22_14_59_56_Luca-Bravo.jpg', '2019-09-22 07:59:56', '2019-09-22 07:59:56', 30),
(54, '2019-09-22_15_00_49_basket2.jpg', '2019-09-22 08:00:49', '2019-09-22 08:00:49', 17),
(55, '2019-09-22_15_02_25_Free-nature-images-HD.jpg', '2019-09-22 08:02:25', '2019-09-22 08:02:25', 21),
(56, '2019-09-22_15_02_51_Free-nature-images-HD.jpg', '2019-09-22 08:02:51', '2019-09-22 08:02:51', 27),
(57, '2019-09-22_15_04_36_IMG-20190510-WA0015.jpg', '2019-09-22 08:04:36', '2019-09-22 08:04:36', 13),
(58, '2019-09-22_15_04_50_IMG-20190510-WA0013.jpg', '2019-09-22 08:04:50', '2019-09-22 08:04:50', 13),
(59, '2019-09-22_15_05_02_IMG-20190510-WA0011.jpg', '2019-09-22 08:05:02', '2019-09-22 08:05:02', 13),
(60, '2019-09-22_15_05_18_IMG-20190510-WA0009.jpg', '2019-09-22 08:05:18', '2019-09-22 08:05:18', 13),
(61, '2019-09-22_15_05_48_Luca-Bravo.jpg', '2019-09-22 08:05:48', '2019-09-22 08:05:48', 31),
(62, '2019-09-22_15_06_15_Rob-Bye.jpg', '2019-09-22 08:06:15', '2019-09-22 08:06:15', 10),
(63, '2019-09-22_15_06_34_Rob-Bye.jpg', '2019-09-22 08:06:34', '2019-09-22 08:06:34', 20),
(64, '2019-09-22_15_06_52_Luca-Bravo.jpg', '2019-09-22 08:06:52', '2019-09-22 08:06:52', 32),
(65, '2019-09-22_15_07_34_japan.jpg', '2019-09-22 08:07:34', '2019-09-22 08:07:34', 11),
(66, '2019-09-22_15_08_11_Rob-Bye.jpg', '2019-09-22 08:08:11', '2019-09-22 08:08:11', 24),
(67, '2019-09-22_15_08_42_Rob-Bye.jpg', '2019-09-22 08:08:42', '2019-09-22 08:08:42', 8),
(68, '2019-09-22_15_09_11_Nature-Wallpaper-for-Walls-desktop-1080p.jpg', '2019-09-22 08:09:11', '2019-09-22 08:09:11', 6),
(69, '2019-09-22_15_09_32_Luca-Bravo.jpg', '2019-09-22 08:09:32', '2019-09-22 08:09:32', 28),
(70, '2019-09-22_15_09_59_Rob-Bye.jpg', '2019-09-22 08:09:59', '2019-09-22 08:09:59', 5),
(71, '2019-09-22_15_10_36_Rob-Bye.jpg', '2019-09-22 08:10:36', '2019-09-22 08:10:36', 7),
(72, '2019-09-22_15_11_00_Rob-Bye.jpg', '2019-09-22 08:11:00', '2019-09-22 08:11:00', 22),
(73, '2019-09-22_15_11_19_Rob-Bye.jpg', '2019-09-22 08:11:19', '2019-09-22 08:11:19', 25),
(74, '2019-09-22_15_12_00_pks.jpg', '2019-09-22 08:12:00', '2019-09-22 08:12:00', 23),
(75, '2019-09-22_15_12_28_Rob-Bye.jpg', '2019-09-22 08:12:28', '2019-09-22 08:12:28', 19),
(76, '2019-09-22_15_13_09_rohis.jpg', '2019-09-22 08:13:09', '2019-09-22 08:13:09', 9),
(77, '2019-09-22_15_14_09_Rob-Bye.jpg', '2019-09-22 08:14:09', '2019-09-22 08:14:09', 12),
(78, '2019-09-22_15_14_26_Rob-Bye.jpg', '2019-09-22 08:14:26', '2019-09-22 08:14:26', 14),
(79, '2019-09-22_15_14_47_Rob-Bye.jpg', '2019-09-22 08:14:47', '2019-09-22 08:14:47', 15),
(80, '2019-09-22_15_15_05_Rob-Bye.jpg', '2019-09-22 08:15:05', '2019-09-22 08:15:05', 29),
(81, '2019-09-22_15_15_42_Rob-Bye.jpg', '2019-09-22 08:15:42', '2019-09-22 08:15:42', 18),
(82, '2019-09-22_15_16_02_Luca-Bravo.jpg', '2019-09-22 08:16:02', '2019-09-22 08:16:02', 16);

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Sejarah', '<div><span style=\"color: #333333; font-family: Arimo, sans-serif; font-size: 14px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dalam rangka alih fungsi SPG / SGO menjadi SMTA sesuai dengan Keputusan Direktur Jendral Pendidikan Dasar dan Menengah Departemen Pendidikan dan Kebudayaan No. 178/C/Kep/1989 Tentang Pedoman Pelaksanaan Alih Fungsi Sekolah Pendidikan Guru dan Sekolah Guru Olah Raga menjadi Sekolah Lanjutan Tingkat Atas Lainnya. Maka pada Tahun 1988 SPG / SGO alih fungsi menjadi SMA Negeri 3 Boyolali yang terdiri dari 4 kelas siswa, karena untuk kelas II, III masih siswa-siswi SPG. Kemudian pada Tahun Pelajaran 1989 / 1990 menerima 6 Kelas, Sehingga jumlah kelas saat itu ada 10 kelas. Pada waktu itu SPG / SGO beralamat di Jl. Pandanaran No. 169 Boyolali, kemudian pada Tahun 1989 pindah menempati Gedung Yang Baru yang beralamat Jl. Perintis Kemerdekaan ( 0276) 324586, ( 57316 ) Pulisen, Boyolali sampai sekarang.</span></div>', '2019-04-11 00:06:50', '2019-08-02 04:41:38'),
(6, 'Slideshow', NULL, '2019-04-12 19:24:23', '2019-04-12 19:24:23'),
(7, 'Kepsek', '\" SMA dengan Integritas dan Guru terbaik di Boyolali, SMA yang unggul, peduli dan berbudaya lingkungan, kreatif, inovatif, dan religius \"', '2019-04-15 09:00:41', '2019-09-22 07:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `home_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`id`, `name`, `created_at`, `updated_at`, `home_id`) VALUES
(6, '2019-09-22_14_09_51_kepsek.png', NULL, '2019-09-22 07:09:51', 7),
(42, '2019-09-22_14_08_12_bgutama.jpg', '2019-09-22 07:08:12', '2019-09-22 07:08:12', 6),
(43, '2019-09-22_14_13_13_sejarah.png', '2019-09-22 07:13:13', '2019-09-22 07:13:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_04_11_002037_create_homes_table', 1),
(3, '2019_04_11_002047_create_home_images_table', 1),
(4, '2019_04_17_143258_create_albums_table', 2),
(5, '2019_04_18_061209_create_album_images_table', 3),
(6, '2019_04_18_152958_create_visions_table', 4),
(8, '2019_04_20_130156_create_employee_categories_table', 5),
(11, '2019_04_21_014103_create_employees_table', 6),
(12, '2019_04_25_223340_add_photo_to_users', 7),
(13, '2019_04_29_042000_create_extracurriculars_table', 8),
(14, '2019_04_29_124048_create_extracurricular_images_table', 9),
(15, '2019_04_30_051155_create_articles_table', 10),
(16, '2019_05_05_155157_alter_table_extracurriculars_change_content', 11),
(17, '2019_05_07_000631_alter_table_homes_change_content', 12),
(18, '2019_05_13_044308_add_type_to_extracurriculars', 13),
(19, '2019_05_27_132201_create_related_links_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `related_links`
--

CREATE TABLE `related_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `related_links`
--

INSERT INTO `related_links` (`id`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Website UNS', 'https://uns.ac.id/en', '2019-09-22_14_48_05_uns.jpg', '2019-05-27 08:11:31', '2019-09-22 07:48:05'),
(6, 'Website UGM', 'https://ugm.ac.id/', '2019-09-22_14_48_23_ugm.jpg', '2019-07-03 17:19:12', '2019-09-22 07:48:23'),
(7, 'Website UNNES', 'https://unnes.ac.id/en/', '2019-09-22_14_48_32_unnes.jpg', '2019-07-03 17:21:30', '2019-09-22 07:48:32'),
(8, 'Website Polines', 'https://www.polines.ac.id/id/', '2019-09-22_14_48_41_polines.jpg', '2019-07-03 17:23:02', '2019-09-22 07:48:41'),
(9, 'Universitas Indonesia', 'www.ui.ac.id/en/', '2019-09-22_14_49_33_ui.jpg', '2019-07-29 22:37:02', '2019-09-22 07:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`, `created_at`, `updated_at`, `photo`) VALUES
(5, 'jajang', '$2y$10$8rCQJe4NtADCOCs5X0GqI.CzPr8Gxo757iF/k6mxhUFPjLqbu7I/G', 1, '2019-04-28 00:17:41', '2019-09-22 07:31:28', '2019-09-22_14_31_28_Dandel & Tea 24.png'),
(6, 'superadmin', '$2y$10$33JtlcRSaC4CaFj2VwZwK.rn.GdT7df1xR7l/dTA4gIqKQ8UFTPPW', 2, '2019-04-28 01:05:21', '2019-09-22 07:31:50', '2019-09-22_14_31_50_Dandel & Tea 21.png'),
(7, 'anto', '$2y$10$OfHux4wX0t.23CfRQZAEn.cvJJIWTuB56d0nWlWiLcUGcpklxpVqa', 1, '2019-04-28 07:26:42', '2019-09-22 07:31:06', '2019-09-22_14_31_06_Dandel & Tea 28.png'),
(8, 'anto kewer', '$2y$10$Nk5r2kOxDGRhNllGX9.zD.vDO50xUIFjBQea9DtT7qmxQHHtCMCuO', 1, '2019-04-28 08:58:42', '2019-09-22 07:31:22', '2019-09-22_14_31_22_Dandel & Tea 30.png');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
(1, '<span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px; text-align: center; outline: none !important;\">Menjadikan SMA Negeri 3 Boyolali yang ungguk, peduli dan berbudaya lingkungan, </span><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px; text-align: center; outline: none !important;\">kreatif, inovatif, dan religius</span>', '<span style=\"text-align: justify;\">1. Mendorong Peserta Didik untuk Mengenali Potensi Diri </span><br><span style=\"text-align: justify;\">2. Menumbuhkan Semangat Keunggulan Kepada Seluruh Warga Sekolah</span><br><span style=\"text-align: justify;\">3. Mendorong dan Mengembangkan Kreatifitas Peserta Didik</span><br><span style=\"text-align: justify;\">4. Mendorong dan Mengembangkan Peserta Didik</span><br><span style=\"text-align: justify;\">5. Mendorong Peserta Didik untuk Peduli Lingkungan</span><br><span style=\"text-align: justify;\">6. Mendorong Warga Sekolah Untuk Mewujudkan Lingkungan Ideal (Bersih, Sehat, Sejuk, dan Indah) Melalui Kegiatan Pelestarian Fungsi Lingkungan, Pencegahan 7. Terjadinya Pencemaran dan Kerusankan Lingkungan Hidup</span><br><span style=\"text-align: justify;\">8. Menumbuhkan Penghayatan Terhadap Ajaran Agama Yang Dianut dan Budaya Bangsa Untuk Sumber Kearifan Dalam Bertindak.</span><br>', NULL, '2019-07-28 19:04:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_images`
--
ALTER TABLE `album_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_images_album_id_foreign` (`album_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_employee_category_id_foreign` (`employee_category_id`);

--
-- Indexes for table `employee_categories`
--
ALTER TABLE `employee_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurricular_images`
--
ALTER TABLE `extracurricular_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extracurricular_images_extracurricular_id_foreign` (`extracurricular_id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_images_home_id_foreign` (`home_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_links`
--
ALTER TABLE `related_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `album_images`
--
ALTER TABLE `album_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee_categories`
--
ALTER TABLE `employee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `extracurricular_images`
--
ALTER TABLE `extracurricular_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `related_links`
--
ALTER TABLE `related_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album_images`
--
ALTER TABLE `album_images`
  ADD CONSTRAINT `album_images_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_employee_category_id_foreign` FOREIGN KEY (`employee_category_id`) REFERENCES `employee_categories` (`id`);

--
-- Constraints for table `extracurricular_images`
--
ALTER TABLE `extracurricular_images`
  ADD CONSTRAINT `extracurricular_images_extracurricular_id_foreign` FOREIGN KEY (`extracurricular_id`) REFERENCES `extracurriculars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_images`
--
ALTER TABLE `home_images`
  ADD CONSTRAINT `home_images_home_id_foreign` FOREIGN KEY (`home_id`) REFERENCES `homes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
