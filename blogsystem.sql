-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 04:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcontent` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogtitle`, `blogcontent`, `category`, `author`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Blog about Football', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue eu consequat ac felis donec. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Consectetur a erat nam at. Aliquam etiam erat velit scelerisque in dictum non. Quis risus sed vulputate odio ut. Arcu cursus euismod quis viverra nibh. Sed sed risus pretium quam vulputate dignissim. Feugiat nisl pretium fusce id velit ut tortor pretium viverra.', 'Sports', 'John', 'blog-about-football-1', '1614097828.jpg', '2021-02-23 11:00:28', '2021-02-24 02:04:35'),
(2, 'Blog about Cricket', 'Elementum facilisis leo vel fringilla est ullamcorper. In iaculis nunc sed augue lacus viverra vitae congue eu. Quam vulputate dignissim suspendisse in est ante. Libero nunc consequat interdum varius sit amet mattis. Cras ornare arcu dui vivamus arcu felis bibendum ut tristique. Odio euismod lacinia at quis risus sed vulputate odio. Massa placerat duis ultricies lacus sed turpis tincidunt. Sapien eget mi proin sed libero enim sed. At tempor commodo ullamcorper a lacus vestibulum sed arcu non. Adipiscing at in tellus integer feugiat. Lorem ipsum dolor sit amet consectetur adipiscing. Elit sed vulputate mi sit amet mauris commodo. Adipiscing at in tellus integer feugiat scelerisque varius.', 'Sports', 'Smith', 'blog-about-cricket', '1614152818.jpg', '2021-02-23 12:28:28', '2021-02-23 12:56:59'),
(4, 'Blog about Food', 'Cras sed felis eget velit aliquet sagittis id. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Felis bibendum ut tristique et egestas quis. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Eget dolor morbi non arcu risus. Fringilla phasellus faucibus scelerisque eleifend donec. Eget nunc lobortis mattis aliquam faucibus. Netus et malesuada fames ac turpis. Magna eget est lorem ipsum dolor sit amet. Convallis tellus id interdum velit. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Et leo duis ut diam quam nulla porttitor massa.', 'Nature', 'John', 'blog-about-food', '1614103108.jpg', '2021-02-24 08:15:02', '2021-02-24 08:15:02'),
(5, 'Post 3', 'Iaculis urna id volutpat lacus laoreet non. Lorem ipsum dolor sit amet consectetur. Ipsum suspendisse ultrices gravida dictum fusce ut placerat. Cursus metus aliquam eleifend mi in nulla. Neque laoreet suspendisse interdum consectetur libero. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Interdum posuere lorem ipsum dolor sit. Maecenas accumsan lacus vel facilisis volutpat est. Nascetur ridiculus mus mauris vitae ultricies. Neque volutpat ac tincidunt vitae semper quis lectus. Semper feugiat nibh sed pulvinar proin. Id venenatis a condimentum vitae sapien pellentesque habitant. Cursus mattis molestie a iaculis. Scelerisque viverra mauris in aliquam sem fringilla.', 'Nature', 'Smith', 'post-3', '1614174490.jpg', '2021-02-24 08:18:10', '2021-02-24 08:18:10'),
(6, 'Post 4', 'Praesent elementum facilisis leo vel fringilla est ullamcorper. Sit amet venenatis urna cursus eget nunc. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui. Nullam non nisi est sit amet facilisis magna etiam. Curabitur gravida arcu ac tortor dignissim convallis.', 'Fashion', 'Smith', 'post-4', '1614175228.jpg', '2021-02-24 08:30:28', '2021-02-24 08:57:38'),
(7, 'Post 5', 'Ultricies integer quis auctor elit. Mauris ultrices eros in cursus turpis massa. Et tortor consequat id porta nibh. Tortor dignissim convallis aenean et tortor at. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Dolor morbi non arcu risus quis. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Mi tempus imperdiet nulla malesuada. Metus aliquam eleifend mi in nulla. Pharetra magna ac placerat vestibulum.', 'Food', 'Smith', 'post-5', '1614175372.jpg', '2021-02-24 08:32:52', '2021-02-24 08:32:52'),
(8, 'Post 6', 'Mi tempus imperdiet nulla malesuada. Metus aliquam eleifend mi in nulla. Pharetra magna ac placerat vestibulum. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Praesent elementum facilisis leo vel fringilla est ullamcorper. Sit amet venenatis urna cursus eget nunc.Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui.', 'Electronics', 'John', 'post-6', '1614175867.jpg', '2021-02-24 08:41:07', '2021-02-24 08:41:07'),
(9, 'Post 7', 'Metus aliquam eleifend mi in nulla. Pharetra magna ac placerat vestibulum. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Praesent elementum facilisis leo vel fringilla est ullamcorper. Sit amet venenatis urna cursus eget nunc. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non.', 'Electronics', 'John', 'post-7', '1614176059.png', '2021-02-24 08:44:19', '2021-02-24 08:44:19'),
(10, 'Post 8', 'Pellentesque massa placerat duis ultricies lacus sed turpis tincidunt id. At imperdiet dui accumsan sit amet nulla facilisi. A iaculis at erat pellentesque adipiscing commodo elit at. Nunc id cursus metus aliquam eleifend mi in nulla posuere. Nec feugiat in fermentum posuere. Iaculis urna id volutpat lacus laoreet non curabitur gravida. Dolor magna eget est lorem ipsum dolor sit amet. Aliquam eleifend mi in nulla posuere. Vel orci porta non pulvinar. Sed faucibus turpis in eu. Est pellentesque elit ullamcorper dignissim.', 'Electronics', 'John', 'post-8', '1614176463.jpg', '2021-02-24 08:47:42', '2021-02-24 08:47:42'),
(11, 'Blog about Birds', 'Iaculis urna id volutpat lacus laoreet non. Lorem ipsum dolor sit amet consectetur. Ipsum suspendisse ultrices gravida dictum fusce ut placerat. Cursus metus aliquam eleifend mi in nulla. Neque laoreet suspendisse interdum consectetur libero. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Interdum posuere lorem ipsum dolor sit. Maecenas accumsan lacus vel facilisis volutpat est.', 'Nature', 'John', 'blog-about-birds', '1614174302.png', '2021-02-24 08:51:03', '2021-02-24 08:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentuser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment`, `commentuser`, `created_at`, `updated_at`) VALUES
(1, '2', 'This is first comment', 'John', '2021-02-24 05:41:27', '2021-02-24 05:41:27'),
(2, '2', 'This is second  comment', 'John', '2021-02-24 07:12:54', '2021-02-24 07:12:54'),
(3, '4', 'delicious food', 'Smith', '2021-02-24 09:20:21', '2021-02-24 09:20:21'),
(4, '11', 'nice bird', 'Smith', '2021-02-24 09:37:05', '2021-02-24 09:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_18_181007_create_blogs_table', 1),
(5, '2021_02_24_095549_create_comments_table', 2);

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
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Smith', 'John', 'john@email.con', NULL, '$2y$10$4bjnRztvzybRamza2hUdleTDcTaqIxP5YQa0bsNQZgArlfaLnPKHS', NULL, '2021-02-23 10:13:35', '2021-02-23 10:13:35'),
(2, 'Smith John', 'Smith', 'smith@email.com', NULL, '$2y$10$oZbxhbBRg.s6Gx9gQva1BeCY5Mc531R5FF4NLJXmE31jBzICEldkK', NULL, '2021-02-23 10:14:01', '2021-02-23 10:14:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
