-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citynest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agent_landlord_developer`
--

CREATE TABLE `agent_landlord_developer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) DEFAULT 'logo.png',
  `businessname` varchar(100) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `agent_whatsapp` varchar(20) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `lga` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `service_provided` text DEFAULT NULL,
  `role` enum('agent','developer','landlord') NOT NULL,
  `biz_state` int(11) DEFAULT NULL,
  `biz_axis` int(11) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT 'facebook.com/johndoe\\''''',
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `time_created` timestamp NULL DEFAULT current_timestamp(),
  `time_updated` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `callbackrequest`
--

CREATE TABLE `callbackrequest` (
  `call_req_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `denomination`
--

CREATE TABLE `denomination` (
  `id` int(11) NOT NULL,
  `denomination` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duration_size`
--

CREATE TABLE `duration_size` (
  `id` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lga`
--

CREATE TABLE `lga` (
  `lga_id` int(11) NOT NULL,
  `lga_name` varchar(200) NOT NULL,
  `state_id` int(11) DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_16_115215_create_admin_table', 1),
(6, '2024_01_16_115215_create_agent_landlord_developer_table', 1),
(7, '2024_01_16_115215_create_callbackrequest_table', 1),
(8, '2024_01_16_115215_create_country_table', 1),
(9, '2024_01_16_115215_create_denomination_table', 1),
(10, '2024_01_16_115215_create_duration_size_table', 1),
(11, '2024_01_16_115215_create_features_table', 1),
(12, '2024_01_16_115215_create_lga_table', 1),
(13, '2024_01_16_115215_create_property_list_table', 1),
(14, '2024_01_16_115215_create_property_type_table', 1),
(15, '2024_01_16_115215_create_purpose_table', 1),
(16, '2024_01_16_115215_create_request_table', 1),
(17, '2024_01_16_115215_create_state_table', 1),
(18, '2024_01_16_115215_create_sub_user_details_table', 1),
(19, '2024_01_16_115215_create_subproperty_table', 1),
(20, '2024_01_16_115215_create_subscription_table', 1),
(21, '2024_01_16_115215_create_team_table', 1),
(22, '2024_01_16_115215_create_user_table', 1),
(23, '2024_01_16_115218_add_foreign_keys_to_callbackrequest_table', 1),
(24, '2024_01_16_115218_add_foreign_keys_to_lga_table', 1),
(25, '2024_01_16_115218_add_foreign_keys_to_property_list_table', 1),
(26, '2024_01_16_115218_add_foreign_keys_to_request_table', 1),
(27, '2024_01_16_115218_add_foreign_keys_to_sub_user_details_table', 1),
(28, '2024_01_16_115218_add_foreign_keys_to_subproperty_table', 1),
(29, '2024_01_16_115218_add_foreign_keys_to_team_table', 1);

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
-- Table structure for table `property_list`
--

CREATE TABLE `property_list` (
  `prop_listid` int(11) NOT NULL,
  `prop_title` varchar(255) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `sub_prop_id` int(11) NOT NULL,
  `prop_owner_id` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `serviced` enum('0','1') DEFAULT '1',
  `state_id` int(11) NOT NULL,
  `lga_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `denomination` int(11) NOT NULL,
  `append` int(11) NOT NULL,
  `initial_payment` varchar(100) DEFAULT NULL,
  `monthly_payment` varchar(100) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `features` int(11) DEFAULT NULL,
  `youtube_vid` varchar(255) DEFAULT NULL,
  `instagram_vid` varchar(255) DEFAULT NULL,
  `purpose` int(11) DEFAULT NULL,
  `time_created` timestamp NULL DEFAULT current_timestamp(),
  `time_updated` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `prop_id` int(11) NOT NULL,
  `prop_name` varchar(45) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `purpose_id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `beds` int(11) DEFAULT NULL,
  `max_budget` varchar(45) NOT NULL,
  `state` int(11) NOT NULL,
  `lga` int(11) NOT NULL,
  `more_info` text DEFAULT NULL,
  `group` enum('Individual','Agent') NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `country` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `statecol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subproperty`
--

CREATE TABLE `subproperty` (
  `subpro_id` int(11) NOT NULL,
  `subpro_name` varchar(100) NOT NULL,
  `prop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_price` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_user_details`
--

CREATE TABLE `sub_user_details` (
  `sub_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_plan_id` int(11) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `start_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `status` enum('active','canceled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `whatsapp` enum('0','1') DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `lga` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `team_head` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL
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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email_UNIQUE` (`admin_email`);

--
-- Indexes for table `agent_landlord_developer`
--
ALTER TABLE `agent_landlord_developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callbackrequest`
--
ALTER TABLE `callbackrequest`
  ADD PRIMARY KEY (`call_req_id`),
  ADD KEY `callback_key_idx` (`property_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `denomination`
--
ALTER TABLE `denomination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duration_size`
--
ALTER TABLE `duration_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `lga`
--
ALTER TABLE `lga`
  ADD PRIMARY KEY (`lga_id`),
  ADD KEY `lga_statekey_idx` (`state_id`);

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
-- Indexes for table `property_list`
--
ALTER TABLE `property_list`
  ADD PRIMARY KEY (`prop_listid`),
  ADD KEY `propkey_idx` (`prop_id`),
  ADD KEY `sub_propkey_idx` (`sub_prop_id`),
  ADD KEY `owner_key_idx` (`prop_owner_id`),
  ADD KEY `prop_state_idx` (`state_id`),
  ADD KEY `prop_lga_idx` (`lga_id`),
  ADD KEY `denomination key_idx` (`denomination`),
  ADD KEY `append_key` (`append`),
  ADD KEY `features_key_idx` (`features`),
  ADD KEY `purpose_key_idx` (`purpose`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`purpose_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `catgerory_purpose_key_idx` (`category`),
  ADD KEY `state_key_idx` (`state`),
  ADD KEY `lga_key_idx` (`lga`),
  ADD KEY `country_key_idx` (`country`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `subproperty`
--
ALTER TABLE `subproperty`
  ADD PRIMARY KEY (`subpro_id`),
  ADD KEY `subpro_idkey_idx` (`prop_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `sub_user_details`
--
ALTER TABLE `sub_user_details`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `user_key_idx` (`user_id`),
  ADD KEY `sub_plankey_idx` (`sub_plan_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `prop_statekey_idx` (`state`),
  ADD KEY `prop_lgakey_idx` (`lga`),
  ADD KEY `team_leadkey_idx` (`team_head`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agent_landlord_developer`
--
ALTER TABLE `agent_landlord_developer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `callbackrequest`
--
ALTER TABLE `callbackrequest`
  MODIFY `call_req_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `denomination`
--
ALTER TABLE `denomination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lga`
--
ALTER TABLE `lga`
  MODIFY `lga_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_list`
--
ALTER TABLE `property_list`
  MODIFY `prop_listid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `purpose_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subproperty`
--
ALTER TABLE `subproperty`
  MODIFY `subpro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_user_details`
--
ALTER TABLE `sub_user_details`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `callbackrequest`
--
ALTER TABLE `callbackrequest`
  ADD CONSTRAINT `callback_key` FOREIGN KEY (`property_id`) REFERENCES `property_list` (`prop_listid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lga`
--
ALTER TABLE `lga`
  ADD CONSTRAINT `lga_statekey` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_list`
--
ALTER TABLE `property_list`
  ADD CONSTRAINT `append_key` FOREIGN KEY (`append`) REFERENCES `duration_size` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `denomination_key` FOREIGN KEY (`denomination`) REFERENCES `denomination` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `features_key` FOREIGN KEY (`features`) REFERENCES `features` (`feature_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `owner_key` FOREIGN KEY (`prop_owner_id`) REFERENCES `agent_landlord_developer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `prop_lga` FOREIGN KEY (`lga_id`) REFERENCES `lga` (`lga_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `prop_state` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `propkey` FOREIGN KEY (`prop_id`) REFERENCES `property_type` (`prop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purpose_key` FOREIGN KEY (`purpose`) REFERENCES `purpose` (`purpose_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sub_propkey` FOREIGN KEY (`sub_prop_id`) REFERENCES `subproperty` (`subpro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `catgerory_purpose_key` FOREIGN KEY (`category`) REFERENCES `purpose` (`purpose_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `country_key` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lga_key` FOREIGN KEY (`lga`) REFERENCES `lga` (`lga_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `state_key` FOREIGN KEY (`state`) REFERENCES `state` (`state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subproperty`
--
ALTER TABLE `subproperty`
  ADD CONSTRAINT `subpro_idkey` FOREIGN KEY (`prop_id`) REFERENCES `property_type` (`prop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sub_user_details`
--
ALTER TABLE `sub_user_details`
  ADD CONSTRAINT `sub_plankey` FOREIGN KEY (`sub_plan_id`) REFERENCES `subscription` (`sub_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `agent_landlord_developer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `prop_lgakey` FOREIGN KEY (`lga`) REFERENCES `lga` (`lga_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `prop_statekey` FOREIGN KEY (`state`) REFERENCES `state` (`state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `team_leadkey` FOREIGN KEY (`team_head`) REFERENCES `agent_landlord_developer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
