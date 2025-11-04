-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2025 at 09:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shivatechdigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_badge` varchar(255) NOT NULL DEFAULT 'About ShivaTechDigital',
  `page_title` varchar(255) NOT NULL DEFAULT 'Transforming Businesses Through Innovation',
  `page_subtitle` text DEFAULT NULL,
  `years_experience` int(11) NOT NULL DEFAULT 15,
  `projects_delivered` int(11) NOT NULL DEFAULT 250,
  `team_members_count` int(11) NOT NULL DEFAULT 50,
  `section_label` varchar(255) NOT NULL DEFAULT 'Who We Are',
  `section_title` varchar(255) NOT NULL DEFAULT 'We Create Digital Excellence',
  `lead_text` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `highlight_1_icon` varchar(255) NOT NULL DEFAULT 'fas fa-award',
  `highlight_1_title` varchar(255) NOT NULL DEFAULT 'Award-Winning',
  `highlight_1_text` varchar(255) NOT NULL DEFAULT '50+ industry awards',
  `highlight_2_icon` varchar(255) NOT NULL DEFAULT 'fas fa-users',
  `highlight_2_title` varchar(255) NOT NULL DEFAULT 'Expert Team',
  `highlight_2_text` varchar(255) NOT NULL DEFAULT '50+ specialists',
  `highlight_3_icon` varchar(255) NOT NULL DEFAULT 'fas fa-globe',
  `highlight_3_title` varchar(255) NOT NULL DEFAULT 'Global Reach',
  `highlight_3_text` varchar(255) NOT NULL DEFAULT '30+ countries',
  `founder_label` varchar(255) NOT NULL DEFAULT 'Message from our Founder',
  `founder_name` varchar(255) NOT NULL DEFAULT 'Shweta Singh',
  `founder_title` varchar(255) NOT NULL DEFAULT 'Founder & CEO, SivaTechDigital',
  `founder_image` varchar(255) DEFAULT NULL,
  `founder_message` longtext DEFAULT NULL,
  `mission_text` text DEFAULT NULL,
  `vision_text` text DEFAULT NULL,
  `cta_title` varchar(255) NOT NULL DEFAULT 'Want to Join Our Team?',
  `cta_subtitle` varchar(255) NOT NULL DEFAULT 'We''re always looking for talented individuals to join our growing team',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `page_badge`, `page_title`, `page_subtitle`, `years_experience`, `projects_delivered`, `team_members_count`, `section_label`, `section_title`, `lead_text`, `description`, `about_image`, `highlight_1_icon`, `highlight_1_title`, `highlight_1_text`, `highlight_2_icon`, `highlight_2_title`, `highlight_2_text`, `highlight_3_icon`, `highlight_3_title`, `highlight_3_text`, `founder_label`, `founder_name`, `founder_title`, `founder_image`, `founder_message`, `mission_text`, `vision_text`, `cta_title`, `cta_subtitle`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'About ShivaTechDigital', 'Transforming Businesses Through Innovation', 'We\'re a team of passionate experts dedicated to helping businesses thrive in the digital world through cutting-edge technology and creative solutions.', 5, 250, 10, 'Who We Are', 'We Create Digital Excellence', 'SivaTechDigital (STD) is a leading digital marketing and development agency committed to transforming businesses through cutting-edge technology and innovative marketing strategies.', 'Founded with a vision to bridge the gap between technology and business growth, we have evolved into a full-service digital agency serving clients across the globe. Our team of passionate professionals brings together expertise in web development, mobile app creation, and comprehensive digital marketing to deliver solutions that drive real results.\r\n\r\nWe believe in the power of digital transformation and work tirelessly to help our clients stay ahead in an increasingly competitive digital landscape. Every project we undertake is treated with the same level of dedication and commitment to excellence, regardless of size or scope.', NULL, 'fas fa-award', 'Award-Winning', '50+ industry awards', 'fas fa-users', 'Expert Team', '50+ specialists', 'fas fa-globe', 'Global Reach', '30+ countries', 'Message from our Founder', 'Shweta Singh', 'Founder & CEO, SivaTechDigital', 'about/founder/UAgXJ13aEcYNUAsqyjrIZZIRgqvOmSEjIV2aWpwA.png', '\"Welcome to SivaTechDigital, where innovation meets excellence in every digital solution we create.\"\r\n\r\nWhen I founded SivaTechDigital, I had a clear vision: to create a company that doesn\'t just deliver digital services, but truly partners with businesses to achieve their goals. Over the years, this vision has driven us to constantly innovate, learn, and grow alongside our clients.\r\n\r\nIn today\'s fast-paced digital world, businesses need more than just a website or a mobile app – they need comprehensive solutions that integrate technology, marketing, and user experience seamlessly. That\'s exactly what we provide at STD. Our team of dedicated professionals works with passion and precision to ensure every project we undertake exceeds expectations.\r\n\r\nWhat sets us apart is our commitment to understanding your unique business challenges and creating customized solutions that address them effectively. We don\'t believe in cookie-cutter approaches. Instead, we take the time to understand your industry, target audience, and goals before crafting strategies that deliver measurable results.\r\n\r\nOur success is measured by the success of our clients. Whether it\'s a startup looking to establish their digital presence or an established enterprise seeking to optimize their digital strategy, we bring the same level of dedication, expertise, and innovation to every project.\r\n\r\nAs we continue to grow and evolve, our core values remain unchanged: integrity, innovation, excellence, and client satisfaction. These principles guide every decision we make and every solution we deliver.\r\n\r\nI invite you to explore our services and discover how SivaTechDigital can help transform your business in the digital age. Together, we can create remarkable digital experiences that drive growth and success.\r\n\r\nThank you for considering SivaTechDigital as your digital partner.', 'To empower businesses with innovative digital solutions that drive growth, enhance customer experiences, and create lasting value. We strive to be the trusted partner that helps our clients navigate the digital landscape and achieve their goals through cutting-edge technology and strategic thinking.', 'To be the leading digital agency recognized globally for excellence, innovation, and client success. We envision a future where every business, regardless of size, can leverage cutting-edge technology to compete and thrive in the digital economy, and we\'re committed to making that vision a reality.', 'Want to Join our Team?', 'We are always looking for talented individuals to join our team and help us drive innovation and excellence.', 1, '2025-11-01 20:32:36', '2025-11-01 20:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1762042216),
('laravel-cache-c525a5357e97fef8d3db25841c86da1a:timer', 'i:1762042216;', 1762042216),
('laravel-cache-site_settings', 'O:18:\"App\\Models\\Setting\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"settings\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:29:{s:2:\"id\";i:1;s:9:\"site_name\";s:16:\"ShivaTechDigital\";s:12:\"site_tagline\";s:53:\"Corporate & Professional – polished and trustworthy\";s:9:\"site_logo\";s:59:\"settings/logos/qKfZ3evq3b6biMYk4WkrZ0zsb8471rCsEbN26Ti3.png\";s:9:\"site_icon\";s:59:\"settings/icons/wsAh7PGV9UqiiDZvUSEh17oD50cJiqSjF2IlpkRv.png\";s:10:\"site_email\";s:25:\"info@shivatechdigital.com\";s:10:\"site_phone\";s:14:\"+91 7007294764\";s:12:\"site_address\";s:64:\"Block B, Industrial Area, Sector 62, Noida, Uttar Pradesh 201309\";s:8:\"site_url\";N;s:16:\"site_description\";s:278:\"We specialize in creating stunning websites, high-performance mobile applications for iOS and Android, and result-driven digital marketing strategies. Our mission is to help businesses grow online with cutting-edge design, seamless functionality, and impactful digital presence.\";s:12:\"facebook_url\";N;s:11:\"twitter_url\";N;s:12:\"linkedin_url\";N;s:13:\"instagram_url\";N;s:11:\"youtube_url\";N;s:8:\"og_image\";N;s:11:\"footer_text\";s:43:\"2025 ShivaTechDigital. All Rights Reserved.\";s:8:\"timezone\";s:12:\"Asia/Kolkata\";s:11:\"site_status\";s:6:\"active\";s:13:\"meta_keywords\";N;s:16:\"meta_description\";N;s:16:\"google_analytics\";N;s:19:\"google_verification\";N;s:15:\"whatsapp_number\";N;s:13:\"support_email\";N;s:14:\"business_hours\";N;s:16:\"google_map_embed\";N;s:10:\"created_at\";s:19:\"2025-11-01 14:56:46\";s:10:\"updated_at\";s:19:\"2025-11-02 02:56:43\";}s:11:\"\0*\0original\";a:29:{s:2:\"id\";i:1;s:9:\"site_name\";s:16:\"ShivaTechDigital\";s:12:\"site_tagline\";s:53:\"Corporate & Professional – polished and trustworthy\";s:9:\"site_logo\";s:59:\"settings/logos/qKfZ3evq3b6biMYk4WkrZ0zsb8471rCsEbN26Ti3.png\";s:9:\"site_icon\";s:59:\"settings/icons/wsAh7PGV9UqiiDZvUSEh17oD50cJiqSjF2IlpkRv.png\";s:10:\"site_email\";s:25:\"info@shivatechdigital.com\";s:10:\"site_phone\";s:14:\"+91 7007294764\";s:12:\"site_address\";s:64:\"Block B, Industrial Area, Sector 62, Noida, Uttar Pradesh 201309\";s:8:\"site_url\";N;s:16:\"site_description\";s:278:\"We specialize in creating stunning websites, high-performance mobile applications for iOS and Android, and result-driven digital marketing strategies. Our mission is to help businesses grow online with cutting-edge design, seamless functionality, and impactful digital presence.\";s:12:\"facebook_url\";N;s:11:\"twitter_url\";N;s:12:\"linkedin_url\";N;s:13:\"instagram_url\";N;s:11:\"youtube_url\";N;s:8:\"og_image\";N;s:11:\"footer_text\";s:43:\"2025 ShivaTechDigital. All Rights Reserved.\";s:8:\"timezone\";s:12:\"Asia/Kolkata\";s:11:\"site_status\";s:6:\"active\";s:13:\"meta_keywords\";N;s:16:\"meta_description\";N;s:16:\"google_analytics\";N;s:19:\"google_verification\";N;s:15:\"whatsapp_number\";N;s:13:\"support_email\";N;s:14:\"business_hours\";N;s:16:\"google_map_embed\";N;s:10:\"created_at\";s:19:\"2025-11-01 14:56:46\";s:10:\"updated_at\";s:19:\"2025-11-02 02:56:43\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:26:{i:0;s:9:\"site_name\";i:1;s:12:\"site_tagline\";i:2;s:9:\"site_logo\";i:3;s:9:\"site_icon\";i:4;s:10:\"site_email\";i:5;s:10:\"site_phone\";i:6;s:12:\"site_address\";i:7;s:8:\"site_url\";i:8;s:16:\"site_description\";i:9;s:12:\"facebook_url\";i:10;s:11:\"twitter_url\";i:11;s:12:\"linkedin_url\";i:12;s:13:\"instagram_url\";i:13;s:11:\"youtube_url\";i:14;s:8:\"og_image\";i:15;s:11:\"footer_text\";i:16;s:8:\"timezone\";i:17;s:11:\"site_status\";i:18;s:13:\"meta_keywords\";i:19;s:16:\"meta_description\";i:20;s:16:\"google_analytics\";i:21;s:19:\"google_verification\";i:22;s:15:\"whatsapp_number\";i:23;s:13:\"support_email\";i:24;s:14:\"business_hours\";i:25;s:16:\"google_map_embed\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}', 1762055803);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','replied','archived') NOT NULL DEFAULT 'new',
  `ip_address` varchar(255) DEFAULT NULL,
  `admin_notes` text DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `service`, `subject`, `message`, `status`, `ip_address`, `admin_notes`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Prashant Rao', 'sriprashantyadav@gmail.com', '07007294764', 'marketing', 'sdlkfjalskfjalksdjflkasdjfxlmasjflkasdjfljsalkfjlkashfla', 'adklfjmlasdkjfmkasdjflkasdjfkljashdlkfjhasdklmjfxhasmkjdfnhasudknhfasmhfklnasdnhfioasdhmfnklanshfiomanhdsnifasmklfhngasouidfklasdhfxmnaksdhbnfiashfpniahnsflkahdsifj', 'replied', '127.0.0.1', 'User will share the details over the email after sometime', '2025-11-01 07:57:05', '2025-11-01 07:53:53', '2025-11-01 07:58:52'),
(2, 'Shweta', 'shwetaprashant@gmail.com', '8965478965', 'web', 'I want digital marketing website for my new business', 'I want digital marketing website for my new business. Business is about to build web application and mobile application', 'replied', '127.0.0.1', 'I had replied user over email/mobile, and he confirmed that we have to start the website on 2nd Nov', '2025-11-01 12:30:07', '2025-11-01 12:29:46', '2025-11-01 12:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `core_values`
--

CREATE TABLE `core_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'fas fa-lightbulb',
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_values`
--

INSERT INTO `core_values` (`id`, `title`, `description`, `icon`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Innovation', 'We constantly explore new technologies and creative solutions to stay ahead of the curve', 'fas fa-lightbulb', 0, 1, '2025-11-01 20:29:05', '2025-11-01 20:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_02_075243_add_two_factor_columns_to_users_table', 1),
(5, '2025_11_01_130132_create_contacts_table', 1),
(6, '2025_11_01_142215_create_settings_table', 2),
(7, '2025_11_02_011331_create_about_pages_table', 3),
(8, '2025_11_02_011336_create_team_members_table', 3),
(9, '2025_11_02_011340_create_timeline_items_table', 3),
(10, '2025_11_02_011344_create_core_values_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2hszQqwLBQeEHHi2EdBhGkKTFe1reaTnDiW8XjHW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGpqeWNveUh6dUJqNGl4eFJJdkNTYkRZRGlSZDNhVnZCRGZQZ3Z6NCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7czo1OiJyb3V0ZSI7czo1OiJhYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1762052317),
('dYReLPqAm9DHFOYo7IXsgeiPnGhkCwwUZgVhVO2K', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic0cyNU9mNm9KNEFHUm5sMFRwVklyS0ZjdHVmZU5XWjM4a1R2aEhNNyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3NpdGVkZXRhaWxzIjt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762044664);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL DEFAULT 'My Website',
  `site_tagline` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_icon` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `site_url` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `timezone` varchar(255) NOT NULL DEFAULT 'UTC',
  `site_status` enum('active','maintenance','offline') NOT NULL DEFAULT 'active',
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `google_analytics` text DEFAULT NULL,
  `google_verification` text DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `support_email` varchar(255) DEFAULT NULL,
  `business_hours` text DEFAULT NULL,
  `google_map_embed` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_tagline`, `site_logo`, `site_icon`, `site_email`, `site_phone`, `site_address`, `site_url`, `site_description`, `facebook_url`, `twitter_url`, `linkedin_url`, `instagram_url`, `youtube_url`, `og_image`, `footer_text`, `timezone`, `site_status`, `meta_keywords`, `meta_description`, `google_analytics`, `google_verification`, `whatsapp_number`, `support_email`, `business_hours`, `google_map_embed`, `created_at`, `updated_at`) VALUES
(1, 'ShivaTechDigital', 'Corporate & Professional – polished and trustworthy', 'settings/logos/qKfZ3evq3b6biMYk4WkrZ0zsb8471rCsEbN26Ti3.png', 'settings/icons/wsAh7PGV9UqiiDZvUSEh17oD50cJiqSjF2IlpkRv.png', 'info@shivatechdigital.com', '+91 7007294764', 'Block B, Industrial Area, Sector 62, Noida, Uttar Pradesh 201309', NULL, 'We specialize in creating stunning websites, high-performance mobile applications for iOS and Android, and result-driven digital marketing strategies. Our mission is to help businesses grow online with cutting-edge design, seamless functionality, and impactful digital presence.', NULL, NULL, NULL, NULL, NULL, NULL, '2025 ShivaTechDigital. All Rights Reserved.', 'Asia/Kolkata', 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-11-01 09:26:46', '2025-11-01 21:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `role`, `image`, `linkedin_url`, `twitter_url`, `email`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Shweta Singh', 'Founder & CEO', 'team/URkwa86pamenyUn16GInuMiObvQFaKpCMMp8j2Lx.png', NULL, NULL, NULL, 0, 1, '2025-11-01 20:55:07', '2025-11-01 20:55:07'),
(4, 'Prashant Rao', 'Pune', 'team/9bfFkV4EO7vhNrgSEGm1jH6Me8pTpoQFAc9T3ULd.jpg', NULL, NULL, NULL, 1, 1, '2025-11-01 20:56:04', '2025-11-01 20:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_items`
--

CREATE TABLE `timeline_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'fas fa-flag',
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timeline_items`
--

INSERT INTO `timeline_items` (`id`, `year`, `title`, `description`, `icon`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '2009', 'The Beginning', 'ShivaTechDigital was founded with a vision to transform digital experiences.', 'fas fa-flag', 0, 1, '2025-11-01 20:34:28', '2025-11-01 20:34:28'),
(2, '2012', 'First Award', 'Won \"Best Digital Agency\" award and expanded to 20+ team members', 'fas fa-trophy', 1, 1, '2025-11-01 20:35:03', '2025-11-01 20:35:03'),
(3, '2016', 'Global Expansion', 'Opened offices in 5 countries and served 100+ international clients', 'fas fa-globe', 2, 1, '2025-11-01 20:36:02', '2025-11-01 20:36:02'),
(4, '2024', 'Innovation Leader', 'Leading the industry with AI-powered solutions and 250+ successful projects', 'fas fa-rocket', 3, 1, '2025-11-01 20:59:18', '2025-11-01 20:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$c.gQnvEj0RtSOX.Z2rrr6OyHctWCYDBT6s0gv9FWoWEZtrF6Eyk4q', NULL, NULL, NULL, NULL, '2025-11-01 07:47:47', '2025-11-01 07:47:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_values`
--
ALTER TABLE `core_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline_items`
--
ALTER TABLE `timeline_items`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_values`
--
ALTER TABLE `core_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timeline_items`
--
ALTER TABLE `timeline_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
