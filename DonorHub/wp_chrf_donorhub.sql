-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 01:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_chrf_donorhub`
--

CREATE TABLE `wp_chrf_donorhub` (
  `id` int(11) NOT NULL,
  `campain_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campain_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal` int(11) NOT NULL,
  `min_amt` int(11) NOT NULL,
  `max_amt` int(11) NOT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_amt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonymous_donations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_chrf_donorhub`
--

INSERT INTO `wp_chrf_donorhub` (`id`, `campain_name`, `campain_img`, `description`, `goal`, `min_amt`, `max_amt`, `organization_name`, `custom_amt`, `anonymous_donations`) VALUES
(1, 'No Cancer for Life', 'logo.jpeg', 'An online crowdfunding campaign that collects monetary donations to assist a cancer patient or the family of a cancer patient to cover expensive cancer treatments and chemotherapy is called cancer crowdfunding.', 1000000, 100, 1000000, 'Cancer Hospital', 'enable', 'enable'),
(2, 'Blood Donation Campaign', 'bdc.jpeg', 'The purpose of blood donation camp is to select a suitable donor whose blood is safe to the recipients and who himself shall not in any way be harmed by blood donation. Outdoor voluntary blood donation camps in India are organized in three phases. They are pre-camp phase, camp phase, post-camp phase.', 0, 50, 1200000, '-', 'enable', 'enable'),
(3, 'Food Drive', 'fd.jpeg', 'There are people who are facing hunger in your community. Hunger exists in every state and county in the United States. Your local food banks, shelters, and soup kitchens rely on the donations they receive from people like you to help keep their shelves stocked.', 5000000, 500, 5000000, '-', 'enable', 'enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_chrf_donorhub`
--
ALTER TABLE `wp_chrf_donorhub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_chrf_donorhub`
--
ALTER TABLE `wp_chrf_donorhub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
