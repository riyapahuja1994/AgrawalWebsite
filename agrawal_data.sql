-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 09:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrawal_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdgi_students`
--

CREATE TABLE `cdgi_students` (
  `registration_id` varchar(30) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_mobile_number` varchar(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `physically_challenged` varchar(20) NOT NULL,
  `ssc_school_name` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_marks` varchar(5) NOT NULL,
  `ssc_yop` varchar(4) NOT NULL,
  `hsc_school_name` varchar(50) DEFAULT NULL,
  `hsc_board` varchar(50) DEFAULT NULL,
  `hsc_marks` varchar(5) DEFAULT NULL,
  `hsc_yop` varchar(4) DEFAULT NULL,
  `diploma_done` varchar(10) NOT NULL,
  `diploma_school_name` varchar(50) DEFAULT NULL,
  `diploma_board` varchar(50) DEFAULT NULL,
  `diploma_marks` varchar(5) DEFAULT NULL,
  `diploma_branch` varchar(20) DEFAULT NULL,
  `iit_jee_appeared` varchar(10) DEFAULT NULL,
  `iit_jee_marks` varchar(5) DEFAULT NULL,
  `aadhar_number` varchar(15) DEFAULT NULL,
  `samagraha_id` varchar(15) DEFAULT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile_number` varchar(15) NOT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `annual_income` varchar(30) DEFAULT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_mobile_number` varchar(15) NOT NULL,
  `through_agent` varchar(20) NOT NULL,
  `agent_name` varchar(50) DEFAULT NULL,
  `agent_mobile_number` varchar(15) DEFAULT NULL,
  `through_whom` varchar(30) DEFAULT NULL,
  `other_person_name` varchar(50) DEFAULT NULL,
  `other_person_relation` varchar(15) DEFAULT NULL,
  `other_person_same_college` varchar(15) DEFAULT NULL,
  `institute_info_src` varchar(30) NOT NULL,
  `current_course` varchar(30) NOT NULL,
  `current_course_2` varchar(30) NOT NULL,
  `current_course_3` varchar(30) NOT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cdips_students`
--

CREATE TABLE `cdips_students` (
  `registration_id` varchar(30) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_mobile_number` varchar(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `physically_challenged` varchar(20) NOT NULL,
  `ssc_school_name` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_marks` varchar(5) NOT NULL,
  `ssc_yop` varchar(4) NOT NULL,
  `hsc_school_name` varchar(50) DEFAULT NULL,
  `hsc_board` varchar(50) DEFAULT NULL,
  `hsc_marks` varchar(5) DEFAULT NULL,
  `hsc_yop` varchar(4) DEFAULT NULL,
  `aadhar_number` varchar(15) DEFAULT NULL,
  `samagraha_id` varchar(15) DEFAULT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile_number` varchar(15) NOT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `annual_income` varchar(30) DEFAULT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_mobile_number` varchar(15) NOT NULL,
  `through_agent` varchar(20) NOT NULL,
  `agent_name` varchar(50) DEFAULT NULL,
  `agent_mobile_number` varchar(15) DEFAULT NULL,
  `through_whom` varchar(30) DEFAULT NULL,
  `other_person_name` varchar(50) DEFAULT NULL,
  `other_person_relation` varchar(15) DEFAULT NULL,
  `other_person_same_college` varchar(15) DEFAULT NULL,
  `institute_info_src` varchar(30) NOT NULL,
  `current_course` varchar(30) NOT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cdip_students`
--

CREATE TABLE `cdip_students` (
  `registration_id` varchar(30) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_mobile_number` varchar(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `physically_challenged` varchar(20) NOT NULL,
  `ssc_school_name` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_marks` varchar(5) NOT NULL,
  `ssc_yop` varchar(4) NOT NULL,
  `hsc_school_name` varchar(50) DEFAULT NULL,
  `hsc_board` varchar(50) DEFAULT NULL,
  `hsc_marks` varchar(5) DEFAULT NULL,
  `hsc_yop` varchar(4) DEFAULT NULL,
  `aadhar_number` varchar(15) DEFAULT NULL,
  `samagraha_id` varchar(15) DEFAULT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile_number` varchar(15) NOT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `annual_income` varchar(30) DEFAULT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_mobile_number` varchar(15) NOT NULL,
  `through_agent` varchar(20) NOT NULL,
  `agent_name` varchar(50) DEFAULT NULL,
  `agent_mobile_number` varchar(15) DEFAULT NULL,
  `through_whom` varchar(30) DEFAULT NULL,
  `other_person_name` varchar(50) DEFAULT NULL,
  `other_person_relation` varchar(15) DEFAULT NULL,
  `other_person_same_college` varchar(15) DEFAULT NULL,
  `institute_info_src` varchar(30) NOT NULL,
  `current_course` varchar(30) NOT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdgi_students`
--
ALTER TABLE `cdgi_students`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `student_email` (`student_email`),
  ADD UNIQUE KEY `aadhar_number` (`aadhar_number`);

--
-- Indexes for table `cdips_students`
--
ALTER TABLE `cdips_students`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `student_email` (`student_email`),
  ADD UNIQUE KEY `aadhar_number` (`aadhar_number`);

--
-- Indexes for table `cdip_students`
--
ALTER TABLE `cdip_students`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `student_email` (`student_email`),
  ADD UNIQUE KEY `aadhar_number` (`aadhar_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
