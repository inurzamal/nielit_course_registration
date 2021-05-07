-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2021 at 09:37 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nielit_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `razorpay`
--

CREATE TABLE `razorpay` (
  `id` bigint NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `razorpay`
--

INSERT INTO `razorpay` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `email`, `mobile`) VALUES
(1, 'Nurzamal Islam ', 1, 'success', 'pay_H7R57A9HqBNU7M', 'n.zaman98@gmail.com', '9101873030'),
(2, 'Nurzamal Islam ', 2, 'success', 'pay_H7cbAVaRdfgNRF', 'n.zaman98@gmail.com', '7896247467'),
(3, 'Piyush Shrivastava ', 1000, 'success', 'pay_H7oreA6YTXGuHl', 'piyushshrivastava12@gmail.com', '8827704712'),
(4, 'Piyush Shrivastava ', 1, 'success', 'pay_H7ovU2knrppBeb', 'piyushshrivastava12@gmail.com', '8827704712');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `ph` varchar(30) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `landphone` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `income` bigint NOT NULL,
  `aadhaar` varchar(30) DEFAULT NULL,
  `source` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `qualstream` varchar(50) NOT NULL,
  `qualmode` varchar(50) NOT NULL,
  `qualresult` varchar(50) NOT NULL,
  `qualpercent` float NOT NULL,
  `qualyear` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `cc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `email`, `gender`, `ph`, `father_name`, `mother_name`, `address`, `district`, `state`, `pincode`, `nationality`, `religion`, `landphone`, `mobile`, `occupation`, `income`, `aadhaar`, `source`, `qualification`, `qualstream`, `qualmode`, `qualresult`, `qualpercent`, `qualyear`, `photo`, `sign`, `cc`) VALUES
(1, 'Nurzamal Islam', '', 'MALE', 'NO', 'Surman Ali', 'Rokia Khatun', 'NIELIT Guwahati', 'Kamrup Metro', 'Assam', '781022', 'INDIAN', 'Islam', '', '7896247467', 'Business', 1500000, '', 'Social Media-FaceBook', 'M.Tech', 'Computer Science', 'FULL', 'YES', 77, '2021-05-01', 'uploads/abc.jpg', 'uploads/sign.jpg', 'uploads/'),
(2, 'qwerty', 'merry@gmail.com', 'MALE', 'NO', 'Raju', 'Rinki', 'DHARMAPURI', 'Kamrup Metro', 'Tamil Nadu', '636701', 'INDIAN', 'Hindu', '09101873030', '09101873030', 'Business', 1000, '', 'Social Media-WhatsApp', 'B.E.', 'Science', 'FULL', 'YES', 62, '2021-05-06', 'uploads/abc.jpg', 'uploads/Online Class.jpg', 'uploads/'),
(3, 'Nurzamal Islam', 'nur.nielit18@gmail.com', 'MALE', 'NO', 'Surman Ali', 'Rokia Khatun', 'NIELIT Guwahati City Centre, 2nd Floor, ARIT&SC Building, NH 37, Khanapara, Guwahati, Assam 781022', 'Kamrup', 'Assam', '781022', 'INDIAN', 'Islam', '', '7896247467', 'Business', 1200000, '', 'Social Media-FaceBook', 'M.Tech', 'CSE AI', 'FULL', 'YES', 66.2, '2017-06-05', 'uploads/photo.jpg', 'uploads/sign.jpg', 'uploads/'),
(4, 'Nurzamal Islam', 'n.zaman98@gmail.com', 'MALE', 'NO', 'Surman Ali', 'Rokia Khatun', 'NIELIT Guwahati City Centre, Khanapara', 'Guwahati ', 'Assam', '781012', 'INDIAN', 'Islam', '7896247467', '07896247467', 'Job', 1200000, '', 'Social Media-WhatsApp', 'B.SC.', 'cse', 'FULL', 'YES', 77, '2021-05-07', 'uploads/photo.jpg', 'uploads/sign.jpg', 'uploads/Doctor Prescription.jpg'),
(5, 'Nurzamal Islam', 'n.zaman98@gmail.com', 'MALE', 'NO', 'Surman Ali', 'Rokia Khatun', 'NIELIT Guwahati City Centre, Khanapara', 'Guwahati ', 'Assam', '781012', 'INDIAN', 'Islam', '7896247467', '07896247467', 'Job', 1200000, '', 'Social Media-WhatsApp', 'B.SC.', 'cse', 'FULL', 'YES', 77, '2021-05-07', '/var/www/html/uploads/photo.jpg', '/var/www/html/uploads/photo.jpg', '/var/www/html/uploads/'),
(6, 'Nurzamal Islam', 'n.zaman98@gmail.com', 'MALE', 'NO', 'Surman Ali', 'Rokia Khatun', 'NIELIT Guwahati City Centre, Khanapara', 'Guwahati ', 'Assam', '781012', 'INDIAN', 'Islam', '7896247467', '07896247467', 'Job', 1200000, '', 'Social Media-WhatsApp', 'B.SC.', 'cse', 'FULL', 'YES', 77, '2021-05-07', '/var/www/html/uploads/Online Class.jpg', '/var/www/html/uploads/share1361737382.jpg', '/var/www/html/uploads/'),
(7, 'Nurzamal Islam', 'n.zaman98@gmail.com', 'MALE', 'NO', 'Surman Ali', 'Rokia Khatun', 'NIELIT Guwahati City Centre, Khanapara', 'Guwahati ', 'Assam', '781012', 'INDIAN', 'Islam', '7896247467', '07896247467', 'Job', 1200000, '', 'Social Media-WhatsApp', 'B.SC.', 'cse', 'FULL', 'YES', 77, '2021-05-07', 'uploads/photo.jpg', 'uploads/sign.jpg', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `course_name`, `student_name`, `category`, `dob`, `email`, `password`, `date`) VALUES
(1, 5559777959, 'Cloud Computing', 'Nurzamal Islam', 'General', '1989-04-30', 'n.zaman98@gmail.com', '12345', '2021-05-03 10:20:34'),
(2, 73902079881, 'Cloud Computing', 'Akash sharma', 'General', '1994-05-12', 'akashsharma12@gmail.com', 'akash12345', '2021-05-04 04:33:33'),
(3, 25285, 'Cloud Computing', 'qwerty', 'General', '2000-02-04', 'merry@gmail.com', '123', '2021-05-06 08:03:25'),
(4, 15807, 'Android Application Development', 'Nur', 'General', '1989-04-30', 'nur.nielit18@gmail.com', '123', '2021-05-06 19:21:23'),
(5, 4113414327026, 'Cloud Computing', 'Piyush Shrivastava', 'General', '2009-06-07', 'piyushshrivastava12@gmail.com', 'nielitguwahati2021', '2021-05-07 07:24:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `razorpay`
--
ALTER TABLE `razorpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_name` (`student_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `razorpay`
--
ALTER TABLE `razorpay`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
