-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 12:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'enwebdev', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `b_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `r_type` varchar(20) NOT NULL,
  `b_status` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `booking_in_date` date NOT NULL,
  `check_out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`b_id`, `c_name`, `r_type`, `b_status`, `address`, `phone`, `booking_in_date`, `check_out_date`) VALUES
(10001, 'Ashok Thapa', ' single', ' standard', '  Palpa', 2147483647, '2022-05-03', '2022-05-06'),
(10002, 'Rama Limbu', ' douple', ' single', '  Dharan', 2147483647, '2022-05-07', '2022-05-10'),
(10003, 'Aashish Shah', ' standard', ' douple', '  Pokhara', 2147483647, '2022-05-16', '2022-05-19'),
(10004, 'Sita Magar', ' suite', ' standard', '  Morang', 2147483647, '2022-05-30', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_no` int(110) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_no`, `full_name`, `email`, `subject`, `message`) VALUES
(2, 'Nitesh Tamang', ' gmail@gmail.com', ' vgfvgdscf', 'hjk'),
(556623, 'saroj koirala', ' sdfasdf@gmail.com', ' sdfa', 'sdfasdf'),
(9878665, 'saroj koirala', ' ', ' skjdhfk', 'sdjkfhjas'),
(2147483647, 'Nitesh Tamang', ' ', ' qwertac', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `room_no`, `c_name`, `address`, `email`, `phone`) VALUES
(6, 101, 'Ashok Thapa', 'Palpa', 'ashok@gmail.com', 2147483647),
(7, 102, 'Rama Limbu', 'Dharan ', 'rama@gmail.com', 2147483647),
(8, 103, 'Aashish Shah', 'Pokhara', 'aashish@gmail.com', 2147483647),
(9, 104, 'Sita Magar', 'Morang', 'sita66@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_name`, `description`) VALUES
(101, 'Our Gardrn', 'Garden are not made by singing \"oh how beautiful\" and sitting in the shade.'),
(102, 'Front Garden', 'Trees and plants always look like the people they live with,somehow.'),
(103, 'Delicious Food', 'People who love to ear are always the best people.'),
(104, 'Happy Staff', 'Do good and good will come to you.'),
(105, 'Our Building', 'You cannot build a great building on a weak foundation.'),
(106, 'Our Kitchen', 'Everything tastes better when we are together.'),
(107, 'Food', 'Made with love'),
(108, 'Happy Customer', 'Live life to the fullest and focus on the positive.'),
(109, 'Welcome', 'Posivitity always wins');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`fullname`, `username`, `email`, `password`) VALUES
('aasika magar', 'aashika123', 'aashika@gmail.com', '$2y$10$cbHO6xW/8tRe5R3YD/9QCe4RwRE5uebK543wI5B.c34gM25qiFwzS');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(11) NOT NULL,
  `r_type` varchar(50) NOT NULL,
  `s_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `r_type`, `s_code`) VALUES
(101, 'standard', 'sc'),
(102, 'douple', 'dl'),
(103, 'standard', 'sc'),
(104, 'suite', 's');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `e_id` int(11) NOT NULL,
  `services` varchar(50) NOT NULL,
  `assignto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`e_id`, `services`, `assignto`) VALUES
(1001, 'car', 'Ridan Rai'),
(1002, 'catering', 'Sima  Tamang'),
(1003, 'courier', 'Ram Shah'),
(1004, 'Ironing', 'Niya Shrestha'),
(1005, 'House', 'Purnima Mehta'),
(1006, 'room', 'Hari Shah');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `e_Id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `salary` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`e_Id`, `full_name`, `address`, `email`, `position`, `salary`) VALUES
(1001, 'Ridan Rai', ' Dhankuta', ' ridan@gmail.com', 'front', '15000'),
(1002, 'Sima Tamang', ' Dhankuta', ' sima12@gmail.com', 'host', '10000'),
(1003, 'Ram Shah', ' Biratnagar', ' ram@gmail.com', 'sales_manager', '100000'),
(1004, 'Niya Shrestha', ' Dharan', ' niya@gmail.com', 'house', '18000'),
(1005, 'Purnima Mehta', ' Biratnagar', ' purnima44@gmail.com', 'house', '19000'),
(1006, 'Hari Shah', ' Dhankuta', ' hari99@gmail.com', 'security', '20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_no`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`e_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10223;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_no` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25467;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9863;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `e_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
