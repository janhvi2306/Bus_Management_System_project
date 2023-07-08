-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 02:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbtbsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `admin_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fullname`, `admin_name`, `admin_password`) VALUES
(1, 'Janhvi Dwivedi', 'janhvi', 'janhvi123'),
(2, 'Harsh Jain', 'harsh', 'harsh123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(100) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `route_id` varchar(255) NOT NULL,
  `customer_route` varchar(200) NOT NULL,
  `booked_amount` int(100) NOT NULL,
  `Jdate` date NOT NULL,
  `booked_seat` varchar(100) NOT NULL,
  `booking_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_id`, `customer_id`, `route_id`, `customer_route`, `booked_amount`, `Jdate`, `booked_seat`, `booking_created`) VALUES
(74, 'NAFQF74', 'CUST-9102641', 'RT-1908653', 'Pune &rarr; Banglore', 100, '2023-05-25', '19', '2023-05-05 16:13:33'),
(75, 'YPLCH75', 'CUST-2114034', 'RT-9069556', 'Goa &rarr; Ujjain', 85, '2023-06-22', '19', '2023-05-05 16:30:53'),
(76, '4TFXB76', 'CUST-169344', 'RT-5887160', 'Satna &rarr; Jaipur', 118, '2023-05-25', '16', '2023-05-05 16:31:47'),
(77, 'QHIAV77', 'CUST-9474738', 'RT-1908653', 'Pune &rarr; Banglore', 100, '2023-10-26', '19', '2023-05-05 16:32:17'),
(78, '78OA078', 'CUST-2114034', 'RT-1908653', 'Pune &rarr; Banglore', 100, '2023-05-25', '18', '2023-05-05 16:34:21'),
(79, '50PH179', 'CUST-169344', 'RT-1908653', 'Pune &rarr; Banglore', 100, '2023-05-25', '4', '2023-05-05 16:40:42'),
(80, 'KBMXG80', 'CUST-5585037', 'RT-9069556', 'Goa &rarr; Ujjain', 85, '2023-05-27', '19', '2023-05-05 16:52:47'),
(81, 'SNWZN81', 'CUST-5585037', 'RT-1908653', 'Pune &rarr; Banglore', 100, '2023-05-25', '16', '2023-05-05 16:53:04'),
(82, 'SDNAA82', 'CUST-2017936', 'RT-3835554', 'Delhi &rarr; Kanpur', 70, '2023-05-11', '17', '2023-05-05 17:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(100) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `bus_assigned` tinyint(1) NOT NULL DEFAULT 0,
  `bus_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_no`, `bus_assigned`, `bus_created`) VALUES
(44, 'MVL1000', 0, '2021-10-16 22:05:16'),
(45, 'ABC0010', 1, '2021-10-17 22:32:46'),
(46, 'XYZ7890', 0, '2021-10-17 22:33:15'),
(47, 'BCC9999', 0, '2021-10-17 22:33:22'),
(48, 'RDH4255', 1, '2021-10-17 22:33:36'),
(49, 'TTH8888', 1, '2021-10-18 00:05:32'),
(50, 'MMM9969', 1, '2021-10-18 00:06:02'),
(51, 'LLL7699', 1, '2021-10-18 00:06:42'),
(52, 'SSX6633', 0, '2021-10-18 00:06:52'),
(53, 'NBS4455', 0, '2021-10-18 09:27:49'),
(54, 'CAS3300', 1, '2021-10-18 09:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_phone` varchar(10) NOT NULL,
  `customer_created` datetime NOT NULL DEFAULT current_timestamp(),
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `customer_name`, `customer_phone`, `customer_created`, `password`) VALUES
(34, 'CUST-2114034', 'Janhvi Dwivedi', '1234567890', '2021-10-16 22:09:12', ''),
(35, 'CUST-8996235', 'Harsh Jain', '9580440444', '2021-10-17 22:30:23', ''),
(36, 'CUST-2017936', 'Gaurav Hirwani', '7011111111', '2021-10-17 22:30:53', ''),
(37, 'CUST-5585037', 'Manas Rao', '8908973612', '2021-10-17 22:31:20', ''),
(38, 'CUST-9474738', 'Mansi Mishra', '7900000888', '2021-10-18 09:32:02', ''),
(39, 'CUST-4031139', 'Shreejal Gupta', '1003000010', '2021-10-18 09:33:08', ''),
(40, 'CUST-9997540', 'Diksha Singh', '7777777700', '2021-10-18 09:39:10', ''),
(41, 'CUST-9102641', 'Janhvi Dwivedi', '9580440266', '2023-05-02 20:49:09', 'janhvi123'),
(42, 'CUST-1797042', 'Poonam Singh', '5555007651', '2023-05-02 20:52:25', ''),
(43, 'CUST-2543643', 'Tanuj', '1212121222', '2023-05-02 21:09:00', 'tanuj123'),
(44, 'CUST-169344', 'Ankit Jha', '3323141111', '2023-05-02 21:12:35', 'ankit123'),
(45, 'CUST-5535445', 'Manas Rao', '1234567890', '2023-05-04 12:10:58', 'manas123');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(100) NOT NULL,
  `route_id` varchar(255) NOT NULL,
  `bus_no` varchar(155) NOT NULL,
  `route_cities` varchar(255) NOT NULL,
  `route_dep_date` date NOT NULL,
  `route_dep_time` time NOT NULL,
  `route_step_cost` int(100) NOT NULL,
  `route_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_id`, `bus_no`, `route_cities`, `route_dep_date`, `route_dep_time`, `route_step_cost`, `route_created`) VALUES
(53, 'RT-1908653', 'MVL1000', 'Pune,Banglore', '2021-10-17', '22:05:00', 100, '2021-10-16 22:05:42'),
(54, 'RT-3835554', 'MMM9969', 'Delhi,Kanpur', '2021-10-19', '23:13:00', 70, '2021-10-16 22:12:32'),
(55, 'RT-9941455', 'RDH4255', 'Banglore,Nashik', '2021-10-18', '10:00:00', 110, '2021-10-17 22:34:47'),
(56, 'RT-9069556', 'XYZ7890', 'Goa,Ujjain', '2021-10-19', '11:40:00', 85, '2021-10-17 23:39:57'),
(57, 'RT-775557', 'ABC0010', 'Kanyakumari,Chennai', '2021-10-19', '13:30:00', 131, '2021-10-17 23:42:12'),
(58, 'RT-753558', 'TTH8888', 'Chennai,Pune', '2021-10-20', '12:04:00', 55, '2021-10-18 00:04:42'),
(59, 'RT-6028759', 'LLL7699', 'Mumbai,Delhi', '2021-10-20', '13:50:00', 166, '2021-10-18 00:07:50'),
(60, 'RT-5887160', 'CAS3300', 'Satna,Jaipur', '2021-10-19', '10:30:00', 118, '2021-10-18 09:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `bus_no` varchar(155) NOT NULL,
  `seat_booked` varchar(255) DEFAULT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`bus_no`, `seat_booked`, `Date`) VALUES
('ABC0010', NULL, '0000-00-00'),
('BCC9999', NULL, '0000-00-00'),
('CAS3300', '16', '0000-00-00'),
('LLL7699', NULL, '0000-00-00'),
('MMM9969', '2,15,6,18,12', '0000-00-00'),
('MVL1000', '3,4,16', '0000-00-00'),
('NBS4455', NULL, '0000-00-00'),
('RDH4255', '15', '0000-00-00'),
('SSX6633', NULL, '0000-00-00'),
('TTH8888', NULL, '0000-00-00'),
('XYZ7890', '19', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_name`, `user_password`, `user_created`) VALUES
(1, 'Liam Moore', 'admin', '$2y$10$7rLSvRVyTQORapkDOqmkhetjF6H9lJHngr4hJMSM2lHObJbW5EQh6', '2021-06-02 13:55:21'),
(2, 'Test Admin', 'testadmin', '$2y$10$A2eGOu1K1TSBqMwjrEJZg.lgy.FmCUPl/l5ugcYOXv4qKWkFEwcqS', '2021-10-17 21:10:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
