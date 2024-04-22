-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 03:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `school` varchar(50) DEFAULT NULL,
  `year` varchar(15) NOT NULL,
  `major` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school`, `year`, `major`, `description`) VALUES
(3, 'SD Cahaya Nur', '2010-2016', NULL, 'Sekolah Swasta Katolik di Kudus, Jawa Tengah'),
(4, 'SMP Negeri 1 Kudus', '2016-2019', NULL, 'SMP Negeri terbaik di Kudus, Jawa Tengah'),
(5, 'SMA Negeri 1 Kudus', '2019-2022', 'Science', 'SMA Negeri terbaik di Kudus, Jawa Tengah'),
(7, 'BINUS University', '2022-2026', 'School of Computer Science', 'Perguruan Tinggi Swasta terbaik di Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `name`, `year`, `description`) VALUES
(4, 'Duta BINUSIAN', '2024-Now', 'Mendapatkan beasiswa mentoring dan tutoring. Bertugas membantu mahasiswa yang mengalami kesulitan dalam perkuliahan.'),
(5, 'Promotion Team', '2024-Now', 'Part time job sebagai tim marketing BINUS @Malang, bertanggung jawab atas penulisan konten promosi, pengerjaan data excel dan database SalesForce.'),
(6, 'HIMTI (Himpunan Mahasiswa Teknik Informatika)', '2022-Now', 'Mengikuti organisasi HIMTI, sebagai aktivis Public Relation 2023/2024 dan sekarang menjabat sebagai Bendahara HIMTI @Malang 2024/2025'),
(8, 'Teaching Assistant', '2023-Now', 'Mengajar mata kuliah Algo dan Data Structure');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `title`, `description`) VALUES
(1, '/storage/images/1713614588WhatsApp Image 2024-04-15 at 13.28.56_9b0734bb.jpg', 'Try On!', 'Try On merupakan aplikasi mobile Android yang berbasis Augmented Reality. Aplikasi ini memungkinkan user untuk virtual try-on aksesori kacamata, sepatu dan jam tangan.'),
(14, '/storage/images/1713620883WhatsApp Image 2023-12-27 at 07.35.53_c3c52feb.jpg', 'NOTE APP', 'Java based GUI note app merupakan aplikasi berbasis java GUI yang memungkinkan user untuk melakukan pencatatan'),
(15, '/storage/images/1713746358Screenshot 2024-02-23 154547.png', 'Hospital Web UI/UX', 'User Interface rumah sakit menggunakan tools FIGMA'),
(16, '/storage/images/1713746483project2.png', 'SekolahQu', 'Ide bisnis aplikasi manajemen pembelajaran dan sekolah yang sudah dibuat mock up UI/UX designnya');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `lastEducation` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `dob`, `gender`, `religion`, `lastEducation`, `address`, `image`) VALUES
(1, 'Regina Celine Adiwinata', '2004-06-19', 'Female', 'Catholic', 'Computer Science Undergraduate', 'University Village C19, Araya,  Malang', '/storage/images/1713746233foto pas celine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'reginaceline1906@gmail.com', '$2y$12$QVJkOx8cTAEaCyr0qY9VmO8TwNT7V2he8x0VuI1Gi1ikaP2Jd/MYW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
