-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 10:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talking-talk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `news_id`, `name`, `email`, `body`, `time`) VALUES
(1, 29, 'sksdk', 'dkdckdk@gamil.com', 'dlfvl', '2020-11-10 03:04:19'),
(2, 29, 'dc;d;', 'dbffhgfh@gmail.com', 'djdjdjdj', '2020-11-10 03:04:42'),
(3, 29, 'dc;d;', 'dbffhgfh@gmail.com', 'djdjdjdj', '2020-11-10 03:04:42'),
(4, 28, 'ckckj', 'kdvkdvk@d.com', 'siksdk', '2020-11-10 03:05:06'),
(5, 28, 'DDD', 'sks@gmail.com', 'dsol', '2020-11-10 04:58:52'),
(6, 28, 'qw4r6', 'kdcvkfvkbk@gmail.com', 'fkfk', '2020-11-10 04:59:33'),
(7, 28, 'qw4r6', 'gbfgf@gamil.com', 'dvd', '2020-11-10 05:46:57'),
(8, 29, 'dkdk', 'gbfgf@yahoo.com', 'k k', '2020-11-10 05:49:48'),
(9, 29, 'l.c', 'fvlf@gmail.com', 'lcfcl', '2020-11-10 05:52:14'),
(10, 28, 'dkdk', 'agjim@gmail.com', 'kfgvkfk', '2020-11-10 05:53:33'),
(11, 29, 'dlkd', 'lkddk@gmail.com', 'ja', '2020-11-10 06:00:15'),
(12, 29, 'dc;d;', 'sks@gmail.com', 'fed', '2020-11-10 06:05:14'),
(13, 29, 'kdkcfdk', 'gbfgf@yahoo.com', ',dd,', '2020-11-10 06:05:51'),
(14, 29, 'DDD', 'agjim@gmail.com', 'll', '2020-11-10 06:07:30'),
(15, 29, 'fk', 'dckvfkvfk@gmail.com', 'jkdjdj', '2020-11-10 06:08:59'),
(16, 28, 'aoso', 'gbfgf@gamil.com', 'lclcl', '2020-11-10 06:10:32'),
(17, 24, 'AGIM pius akomaye ', 'agimpius53@gmail.com', 'ksdkdk', '2020-11-10 06:11:25'),
(18, 28, 'AGIM pius akomayeff', 'cddfcd@gmail.com', 'c bfbv c', '2020-11-10 06:20:10'),
(19, 24, 'AGIM pius akomaye ', 'admin@qwe.com', 'D.LD;', '2020-11-10 06:22:12'),
(20, 24, 'AGIM pius akomaye ', 'admin@qwe.com', 'dd', '2020-11-10 06:23:23'),
(21, 24, 'Pius ', 'agimpius53@gmail.com', 'coco', '2020-11-10 06:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `description`, `image`, `author`, `created_at`) VALUES
(12, '123456', '12', 'dmdfjfj', '20201020041021_314226.jpg', 'qwertyakomaye', '2020-11-09 10:43:01'),
(13, '1234455', '13', 'GFFG', '20201020041004_983948.jpg', 'GIN ', '2020-11-09 10:43:01'),
(15, 'dd', '15', 'dxccd', '20201020041043_40861.jpg', 'dcd', '2020-11-09 10:43:01'),
(16, 'uzumaki', '14', 'vARCHA', '20201020041029_947232.jpg', 'naruto', '2020-11-09 10:43:01'),
(19, '$arr', '19', 'getbyid', '20201020041015_875977.jpg', 'function save', '2020-11-09 10:43:01'),
(22, 'testing ', '22', 'testing', '20201016111008_435357.jpg', 'test', '2020-11-09 10:43:01'),
(23, 'file upload class in codeigniter', '23', 'The mime types corresponding to the types of files you allow to be uploaded. Usually the file extension can be used as the mime type. Can be either an array or a pipe-separated string.If set CodeIgniter will rename the uploaded file to this name. The extension provided in the file name must also be an allowed file type. If no extension is provided in the original file_name will be used.', '20201020051025_454592.jpg', 'agim pius', '2020-11-09 10:43:01'),
(24, ' If no extension is provided in the original file_name will be used.', '24', 'If set CodeIgniter will rename the uploaded file to this name. The extension provided in the file name must also be an allowed file type. If no extension is provided in the original file_name will be used.', '20201020051057_677798.jpg', 'agim pius', '2020-11-09 10:43:01'),
(25, 'gegefgegf ', '22', 'cfjvfvjfvjfvfjvfjsjdcdskcala', '20201109121133_141132.jpg', 'fgnjfgdfjgj', '2020-11-09 11:11:33'),
(28, 'fvjvbfj kfgf', '2939', 'fgrkgjrgkjrjk', '20201110021149_739462.jpg', 'fjgfjgrfj', '2020-11-10 01:01:50'),
(29, 'mtm', '2u3', 'cvd', '20201110021139_367256.jpg', '1dfjdj', '2020-11-10 01:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `sport_news`
--

CREATE TABLE `sport_news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_news`
--

INSERT INTO `sport_news` (`id`, `title`, `description`, `author`) VALUES
(1, 'end sars ', 'help us', 'agim pius'),
(2, 'ghgesfgfgbehgtrs', 'bgfbgfbgbgbgtbgbgtrfdbhdfber', 'qwerrt\r\n'),
(3, 'admin news help', 'heheehehehehehe', 'agim pius'),
(5, 'uzumaki', 'dfdhffhdhfdh', 'we need help');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_news`
--
ALTER TABLE `sport_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sport_news`
--
ALTER TABLE `sport_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
