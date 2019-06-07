-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 10:30 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microgames`
--

-- --------------------------------------------------------

--
-- Table structure for table `banneds`
--

CREATE TABLE `banneds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent` tinyint(1) NOT NULL,
  `until` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `banned_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_objects`
--

CREATE TABLE `game_objects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_pages_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` int(11) NOT NULL,
  `kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `what` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_objects`
--

INSERT INTO `game_objects` (`id`, `game_pages_id`, `order_number`, `kind`, `what`, `created_at`, `updated_at`) VALUES
(8, '6edee17b-7968-43f9-82f6-7ebe624923b0', 1, 'title', 'City Builder', '2019-06-07 05:08:05', '2019-06-07 05:08:05'),
(9, '6edee17b-7968-43f9-82f6-7ebe624923b0', 2, 'text', 'The goal of the game is to build a city and to make a lot of money.\r\nYou can do this by placing down roads, buildings and raising the taxes.\r\nIf you place down a road, you can asign zones to that road. There are a number of three zones: residential, commercial, emergency. When you have assigned a zone, you will see that buildings start appearing on the zone. There is also demand. If you have build a lot of the same buildings, the demand of that building type goes down. If the demand of that building is to low, then that type building won\'t be build. To raise demand you need to place more of the other building types.\r\nAlso there is an emergency demand. If a building type of the emergency demand is to low, buildings will start deconstructing and leaving your city. To get more income you can raise the taxes. If you raise the taxes to much the people will be unhappy and start leaving. If you want to increase the taxes without people being angry, you need to increase the population by building more residential.', '2019-06-07 05:08:05', '2019-06-07 05:08:05'),
(10, '6edee17b-7968-43f9-82f6-7ebe624923b0', 4, 'file', '6edee17b-7968-43f9-82f6-7ebe624923b0.3.PNG', '2019-06-07 05:08:05', '2019-06-07 05:08:05'),
(11, 'aeccbac2-1204-42f0-bd92-e1537b73d88b', 1, 'title', 'Mole-a-thon', '2019-06-07 05:18:39', '2019-06-07 05:18:39'),
(12, 'aeccbac2-1204-42f0-bd92-e1537b73d88b', 2, 'text', 'You are a very hungry mole that eats the wheat from the farmer. Now the farmer is following u and u need to run away in your tunnels. You can run away with W, A, S, D.', '2019-06-07 05:18:39', '2019-06-07 05:18:39'),
(13, 'aeccbac2-1204-42f0-bd92-e1537b73d88b', 3, 'file', 'aeccbac2-1204-42f0-bd92-e1537b73d88b.3.png', '2019-06-07 05:18:39', '2019-06-07 05:18:39'),
(14, '040153ce-abb9-438f-b898-397fde47bfc1', 1, 'title', 'Super card battles pro', '2019-06-07 05:22:24', '2019-06-07 05:22:24'),
(15, '040153ce-abb9-438f-b898-397fde47bfc1', 2, 'text', 'Description: Have fun card battles and outnumber your enemy card!\r\n\r\nWin from your opponent by playing higher cards then your opponent\'s card! All enemies have different hp, and card throws so be carefull on wich cards to use on wich enemy. The dodge card is used to skip a turn.', '2019-06-07 05:22:24', '2019-06-07 05:22:24'),
(16, '040153ce-abb9-438f-b898-397fde47bfc1', 3, 'text', 'Controls: Mouse only', '2019-06-07 05:22:24', '2019-06-07 05:22:24'),
(17, '040153ce-abb9-438f-b898-397fde47bfc1', 4, 'file', '040153ce-abb9-438f-b898-397fde47bfc1.4.PNG', '2019-06-07 05:22:24', '2019-06-07 05:22:24'),
(18, 'e3d5a3ca-70e4-4bc8-8b31-17884747f950', 1, 'title', 'Music run', '2019-06-07 05:29:56', '2019-06-07 05:29:56'),
(19, 'e3d5a3ca-70e4-4bc8-8b31-17884747f950', 2, 'text', 'Description: Get as high as score as possible and have fun.', '2019-06-07 05:29:56', '2019-06-07 05:29:56'),
(20, 'e3d5a3ca-70e4-4bc8-8b31-17884747f950', 3, 'text', 'Controls: use A, D to move and use the mouse to navigate through the menu\'s.', '2019-06-07 05:29:56', '2019-06-07 05:29:56'),
(21, 'e3d5a3ca-70e4-4bc8-8b31-17884747f950', 4, 'file', 'e3d5a3ca-70e4-4bc8-8b31-17884747f950.4.PNG', '2019-06-07 05:29:56', '2019-06-07 05:29:56'),
(22, 'a68c531f-7649-4846-83dc-2861b9148e2e', 1, 'title', 'Compupunch', '2019-06-07 05:35:51', '2019-06-07 05:35:51'),
(23, 'a68c531f-7649-4846-83dc-2861b9148e2e', 2, 'text', 'Description: your computer has crashed for the fifth time in a row and you\'ve had it,  take out your anger by punching it really hard.', '2019-06-07 05:35:51', '2019-06-07 05:35:51'),
(24, 'a68c531f-7649-4846-83dc-2861b9148e2e', 3, 'text', 'Controls: Mouse to do everything', '2019-06-07 05:35:51', '2019-06-07 05:35:51'),
(25, 'a68c531f-7649-4846-83dc-2861b9148e2e', 4, 'file', 'a68c531f-7649-4846-83dc-2861b9148e2e.4.png', '2019-06-07 05:35:51', '2019-06-07 05:35:51'),
(26, '6edee17b-7968-43f9-82f6-7ebe624923b0', 2, 'text', 'Controls:\r\nW/A/S/D to move the camera\r\nRight click to deselect the current building or road', '2019-06-07 05:08:05', '2019-06-07 05:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `game_pages`
--

CREATE TABLE `game_pages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_pages`
--

INSERT INTO `game_pages` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('040153ce-abb9-438f-b898-397fde47bfc1', 'Super Card Battles Pro', 'super-card-battles-pro', '60ce3e09-effc-4592-806a-97d2583e741b', '2019-06-06 23:44:11', '2019-06-06 23:44:11'),
('6edee17b-7968-43f9-82f6-7ebe624923b0', 'City Builder', 'city-builder', '60ce3e09-effc-4592-806a-97d2583e741b', '2019-06-07 04:38:18', '2019-06-07 04:38:18'),
('a68c531f-7649-4846-83dc-2861b9148e2e', 'Compupunch', 'compupunch', '60ce3e09-effc-4592-806a-97d2583e741b', '2019-06-07 05:33:38', '2019-06-07 05:33:38'),
('aeccbac2-1204-42f0-bd92-e1537b73d88b', 'moleman', 'moleman', '60ce3e09-effc-4592-806a-97d2583e741b', '2019-06-07 05:13:39', '2019-06-07 05:13:39'),
('e3d5a3ca-70e4-4bc8-8b31-17884747f950', 'musicrun', 'musicrun', '60ce3e09-effc-4592-806a-97d2583e741b', '2019-06-07 02:06:29', '2019-06-07 02:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `game_pages_tags`
--

CREATE TABLE `game_pages_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_pages_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_receiver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `user_id_receiver`, `user_id_sender`, `title`, `text`, `created_at`, `updated_at`) VALUES
(2, 'da688641-a6af-4fa7-98ff-68e04177b3e3', 'da688641-a6af-4fa7-98ff-68e04177b3e3', 'test', 'testestest', '2019-06-06 03:37:37', '2019-06-06 03:37:37');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_05_093512_create_inboxes_table', 1),
(4, '2019_06_05_093531_create_banneds_table', 1),
(5, '2019_06_05_093557_create_reactions_table', 1),
(6, '2019_06_05_093605_create_tags_table', 1),
(7, '2019_06_05_093617_create_game_pages_table', 1),
(8, '2019_06_05_093658_create_permission_tables', 1),
(9, '2019_06_05_173800_create_game_objects_table', 1),
(10, '2019_06_05_201259_create_requests_table', 1),
(11, '2019_06_05_212610_create_game_pages_tags_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'MicroGames\\User', '17513c2c-693e-49bb-a38f-0ccaa41c1389'),
(5, 'MicroGames\\User', '60ce3e09-effc-4592-806a-97d2583e741b');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `checked_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Member', 'web', '2019-06-05 21:59:22', '2019-06-05 21:59:22'),
(2, 'Creator', 'web', '2019-06-05 21:59:22', '2019-06-05 21:59:22'),
(5, 'Admin', 'web', '2019-06-06 10:41:15', '2019-06-06 10:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'test'),
(2, 'test2'),
(3, 'test3'),
(4, 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `exp` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `provider_id`, `provider`, `profile_picture`, `level`, `exp`, `remember_token`, `created_at`, `updated_at`) VALUES
('17513c2c-693e-49bb-a38f-0ccaa41c1389', 'Joey', 'joey', 'stil', 'joeystil3@gmail.com', NULL, '$2y$10$01Yo8HpYBXsRoOQMUKfH5uNOECdERDnhLplboDmUgSi5ossteLYUK', NULL, NULL, 0, 0, 0, NULL, '2019-06-07 06:15:43', '2019-06-07 06:15:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banneds`
--
ALTER TABLE `banneds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_objects`
--
ALTER TABLE `game_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_pages`
--
ALTER TABLE `game_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_pages_tags`
--
ALTER TABLE `game_pages_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `banneds`
--
ALTER TABLE `banneds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_objects`
--
ALTER TABLE `game_objects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `game_pages_tags`
--
ALTER TABLE `game_pages_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
