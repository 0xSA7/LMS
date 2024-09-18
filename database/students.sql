-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 06:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `instructor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `instructor_id`, `created_at`, `updated_at`) VALUES
(82, 'Eaque qui tempora.', 'Incidunt sed animi occaecati harum dolore nesciunt.', 291, '2024-09-15 21:18:19', '2024-09-15 21:18:19'),
(83, 'Iure eligendi illum molestias rem sed doloribus.', 'Et neque veniam corrupti cum esse numquam.', 293, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(84, 'Voluptas porro fugiat quia.', 'Beatae reiciendis ex autem voluptas.', 295, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(85, 'Natus qui tempore sit molestias eos.', 'Accusantium esse aliquid soluta quasi sit facere.', 297, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(86, 'Enim voluptatem doloremque.', 'Quia consequuntur pariatur omnis totam repudiandae sed qui.', 299, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(87, 'Sequi at accusamus.', 'Aut impedit quam rerum necessitatibus modi ea incidunt aut adipisci asperiores aut in sit.', 301, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(88, 'Aperiam beatae iusto.', 'Dolor error et qui recusandae sit in ipsa dolores.', 303, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(89, 'Dignissimos est deleniti qui.', 'Animi quae quisquam quis id non similique mollitia.', 305, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(90, 'Vel ab asperiores dolorum molestiae.', 'Autem quo porro quod asperiores vero ad esse necessitatibus voluptas repellendus quae eos iure.', 307, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(91, 'Nostrum omnis tempore.', 'Temporibus suscipit voluptates tempore explicabo numquam distinctio.', 309, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(92, 'Hammes-Hills', 'Qui quis non optio eum iusto sed vel cupiditate molestiae.', 311, '2024-09-15 21:25:37', '2024-09-15 21:25:37'),
(93, 'Graham-Walter', 'Alias voluptas rerum rem quos vel voluptate.', 313, '2024-09-15 21:25:37', '2024-09-15 21:25:37'),
(94, 'Little and Sons', 'Error optio fuga perspiciatis natus consequuntur libero illum quae nihil.', 315, '2024-09-15 21:25:37', '2024-09-15 21:25:37'),
(95, 'Robel-Paucek', 'Et quis architecto et eligendi.', 317, '2024-09-15 21:25:37', '2024-09-15 21:25:37'),
(101, 'ea et', 'In sunt rem iste explicabo.', 329, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(102, 'nihil animi', 'Id accusantium vero placeat nobis.', 331, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(103, 'quasi recusandae odio repellendus', 'Aut laudantium culpa unde et veritatis sed accusamus repellendus.', 333, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(104, 'magni voluptas', 'Debitis incidunt recusandae alias ratione possimus.', 335, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(105, 'atque consequatur quia est', 'Odio quia voluptate beatae et nihil.', 337, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(106, 'aut accusamus', 'Et inventore a esse sapiente id ut minus id explicabo minus omnis.', 339, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(107, 'sunt dolorum', 'Assumenda minus sed aliquid exercitationem enim ducimus iure.', 341, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(108, 'et eum', 'Consequatur eveniet dignissimos asperiores est voluptatem.', 343, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(109, 'saepe nihil sapiente', 'Nostrum libero natus voluptatum nemo consequatur.', 345, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(110, 'laravel', 'laravel course', 329, '2024-09-11 01:29:12', '2024-09-12 01:29:12'),
(111, 'Keebler-Pacocha', 'Molestiae ipsum accusantium officiis voluptatum.', 347, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(112, 'Sawayn-Ziemann', 'Sed cumque id optio accusantium.', 349, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(113, 'Barrows, Erdman and Spinka', 'Ea doloremque et fugiat molestiae occaecati rem ut voluptatibus ratione et ex dolore.', 351, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(114, 'Kutch, Rath and Shanahan', 'Aperiam qui sint quis dicta inventore consequatur cupiditate consequatur.', 353, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(115, 'Medhurst-Lehner', 'Omnis quam fugiat quia.', 355, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(116, 'Blick-Kuphal', 'Iste ut aut quibusdam aliquam.', 357, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(117, 'Herman Ltd', 'Neque voluptas voluptatem veritatis repellendus doloremque suscipit perferendis adipisci minima possimus exercitationem.', 359, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(118, 'Russel, Ebert and Lubowitz', 'Aut illo dolores qui animi omnis est.', 361, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(119, 'Klocko Group', 'Qui cupiditate aliquam aut aut non fugit rem et ex.', 363, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(120, 'Thompson-Roberts', 'Repellat placeat impedit at sint fugit culpa perspiciatis.', 365, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(121, 'Bogisich, Labadie and Swaniawski', 'Reiciendis quia earum et vitae quod est porro occaecati voluptas.', 367, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(122, 'Rosenbaum and Sons', 'Officiis iusto veritatis voluptatem dicta veritatis labore culpa ad sit.', 369, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(123, 'Fay, Kshlerin and Nikolaus', 'Voluptatibus odit debitis voluptate ut quos rem.', 371, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(124, 'Connelly, Dicki and Kiehn', 'Occaecati doloremque illum optio et amet quisquam.', 373, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(125, 'Heller-Gibson', 'Dicta et rerum tempore in dolores.', 375, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(126, 'Herman Group', 'Quis hic dolor tenetur.', 377, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(127, 'Bosco-Olson', 'Quisquam modi quis aut et perspiciatis amet.', 379, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(128, 'Kozey PLC', 'Libero et explicabo at atque officia dolorem.', 381, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(129, 'Watsica PLC', 'Magni reiciendis deleniti facere harum repudiandae architecto.', 383, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(130, 'Cole, Stiedemann and Tremblay', 'Eius perferendis illo velit odio aut cupiditate et.', 385, '2024-09-16 00:20:17', '2024-09-16 00:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `student_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 290, 82, '2024-09-15 21:18:19', '2024-09-15 21:18:19'),
(2, 292, 83, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(3, 294, 84, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(4, 296, 85, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(5, 298, 86, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(6, 300, 87, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(7, 302, 88, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(8, 304, 89, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(9, 306, 90, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(10, 308, 91, '2024-09-15 21:19:01', '2024-09-15 21:19:01'),
(26, 340, 107, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(27, 342, 108, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(28, 344, 109, '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(29, 344, 110, NULL, NULL),
(30, 342, 110, NULL, NULL),
(31, 346, 111, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(32, 348, 112, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(33, 350, 113, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(34, 352, 114, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(35, 354, 115, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(36, 356, 116, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(37, 358, 117, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(38, 360, 118, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(39, 362, 119, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(40, 364, 120, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(41, 366, 121, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(42, 368, 122, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(43, 370, 123, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(44, 372, 124, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(45, 374, 125, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(46, 376, 126, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(47, 378, 127, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(48, 380, 128, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(49, 382, 129, '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(50, 384, 130, '2024-09-16 00:20:17', '2024-09-16 00:20:17');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2014_11_12_000000_create_users_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_11_064933_create_courses_table', 1),
(6, '2024_09_11_065345_create_enrollments_table', 1),
(7, '2024_09_11_065513_create_assignments_table', 1),
(8, '2024_09_11_065542_create_submissions_table', 1),
(9, '2024_09_12_132641_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `role` enum('instructor','student','admin') NOT NULL DEFAULT 'student',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(344, 'Bernhard Ondricka', 'mokon@example.com', '2024-09-15 21:26:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'ifYANjuWvT', '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(345, 'Peter Wyman', 'lindsey.effertz@example.net', '2024-09-15 21:26:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'JLuH3XfpfI', '2024-09-15 21:26:43', '2024-09-15 21:26:43'),
(346, 'Dr. Rowena Hoppe IV', 'lowe.cristobal@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'GnBkqLK3KO', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(347, 'Parker Abernathy', 'nmoore@example.org', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'n3vVLM5xAJ', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(348, 'Dr. Isabel Keebler DVM', 'tyrel.feeney@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', '9p6gzjCWwN', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(349, 'Noble Frami', 'jerde.patricia@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'aanlTpsW3s', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(350, 'Shyann Breitenberg', 'anissa67@example.org', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', '8f8AFFSDll', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(351, 'Lisette Bashirian', 'senger.lois@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'mzFF2SxdFL', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(352, 'Peter Ledner', 'koelpin.ada@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', '6mIg0ze2FE', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(353, 'Vivian Cruickshank', 'cleffler@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '3EiMc5vvEP', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(354, 'Ali Marvin', 'carolina.blick@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'tEJuIpa4XI', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(355, 'Ms. Lorine Ratke', 'zhodkiewicz@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'OMXmUxHNtz', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(356, 'Prof. Johnpaul Macejkovic', 'tgrimes@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', '409Okjk8Ia', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(357, 'Maryam Daugherty', 'margaretta.paucek@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '7X37X7tARU', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(358, 'Ms. Margarette Hudson', 'amelia88@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', '20nepYrxUa', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(359, 'Rachelle Gottlieb IV', 'idella.kirlin@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '1T7uf4Rg73', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(360, 'Mr. Adelbert Mueller IV', 'heaney.kitty@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'WpOSPRi0Ku', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(361, 'Ralph Kilback', 'shyanne20@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '1TF8KdURSc', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(362, 'Layne Hackett', 'effie37@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'W7VkXbRzjX', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(363, 'Zachery Jast', 'ghaley@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'cFTKaVBu5e', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(364, 'Prof. Cullen Luettgen Sr.', 'kozey.maia@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'GV43qhfVFK', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(365, 'Prof. Antonette O\'Keefe III', 'ohara.stanton@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'q59b6Rkvjf', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(366, 'Prof. Mercedes Herzog Sr.', 'winifred13@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'FkToJ69HW2', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(367, 'Aileen Bradtke', 'alexanne16@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '1OZx8kB7nV', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(368, 'Ashlynn Fritsch', 'elvie.nader@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'z3LoBhJHyQ', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(369, 'Wilfrid Windler', 'deonte.lakin@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'HfNI4dL6pq', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(370, 'Zoila Kovacek', 'gabernathy@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'tdI0dW4NDx', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(371, 'Lillie Welch', 'shaun18@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'LlRlCtX90O', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(372, 'Kamille Schowalter', 'bcremin@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'djTINaVnGs', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(373, 'Buster Sipes DDS', 'afarrell@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'Bb1UxhCWcw', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(374, 'Dr. Destinee Nicolas II', 'gbrakus@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'AH5hK7AgIh', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(375, 'Taryn Rice DDS', 'courtney52@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'jQ3vi5Ct48', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(376, 'Reid Hilpert', 'nhahn@example.org', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'COKdAcpvg4', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(377, 'Dr. Tevin Davis I', 'eliza14@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'ecylXP9xP2', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(378, 'Orville Conroy II', 'braun.coleman@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', '5lWaiwVv7T', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(379, 'Arielle Zemlak', 'keara.heaney@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'F546BenbUI', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(380, 'Prof. Taylor Strosin PhD', 'jaylen43@example.org', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'GqFpshFFVm', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(381, 'Dr. Amiya Witting Jr.', 'keven.padberg@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', 'BSxqK891DR', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(382, 'Judah Orn', 'weldon.kulas@example.com', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'C2ovbBAmXf', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(383, 'Dolores Adams', 'elvis.renner@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '0q2lkkN087', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(384, 'Adela Cummings', 'jbradtke@example.org', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'h5GDsQxM4q', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(385, 'Brendon Torp', 'edietrich@example.net', '2024-09-16 00:20:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'instructor', '0e1gcObbnv', '2024-09-16 00:20:17', '2024-09-16 00:20:17'),
(386, 'taha', 'tahashaban743@gmail.com', NULL, '123456', 'student', NULL, '2024-09-18 01:17:22', '2024-09-18 01:17:22'),
(387, 'shaban', 'tahashaban843@gmail.com', NULL, '$2y$10$dFfh055QSIfUGnTUhsuLb.62VoG8i8dorVv1FGB9Gc5O/OQUe2iwy', 'student', NULL, '2024-09-18 02:57:57', '2024-09-18 02:57:57'),
(388, 'admin', 'admin123@gmail.com', '2024-09-03 06:08:24', '$2y$10$PNG0VSpcn2VXEI7H6D2xfeIvyQoB55qjdSgvfHQdX9G6IXQy2yACS', 'admin', NULL, '2024-09-18 06:08:24', '2024-09-18 06:08:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignments_course_id_foreign` (`course_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_instructor_id_foreign` (`instructor_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollments_student_id_foreign` (`student_id`),
  ADD KEY `enrollments_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submissions_assignment_id_foreign` (`assignment_id`),
  ADD KEY `submissions_student_id_foreign` (`student_id`);

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
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `enrollments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_assignment_id_foreign` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submissions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
