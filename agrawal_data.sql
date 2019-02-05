-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 05:45 AM
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
  `student_mobile_number` int(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `physically_challenged` varchar(20) NOT NULL,
  `aadhar_number` varchar(15) NOT NULL,
  `samagraha_id` varchar(15) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile_number` int(15) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `annual_income` int(30) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_mobile_number` int(15) NOT NULL,
  `through_agent` varchar(20) NOT NULL,
  `agent_name` varchar(50) DEFAULT NULL,
  `agent_mobile_number` int(15) DEFAULT NULL,
  `through_whom` varchar(30) DEFAULT NULL,
  `other_person_name` varchar(50) DEFAULT NULL,
  `other_person_relation` varchar(15) DEFAULT NULL,
  `other_person_same_college` varchar(15) DEFAULT NULL,
  `ssc_school_name` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_marks` int(10) NOT NULL,
  `hsc_school_name` varchar(50) NOT NULL,
  `hsc_board` varchar(50) NOT NULL,
  `hsc_marks` int(10) NOT NULL,
  `diploma_done` varchar(10) NOT NULL,
  `diploma_school_name` varchar(50) DEFAULT NULL,
  `diploma_board` varchar(50) DEFAULT NULL,
  `diploma_marks` int(10) DEFAULT NULL,
  `diploma_branch` varchar(20) DEFAULT NULL,
  `iit_jee_appeared` varchar(10) DEFAULT NULL,
  `iit_jee_marks` int(10) DEFAULT NULL,
  `current_course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cdgi_students`
--

INSERT INTO `cdgi_students` (`registration_id`, `full_name`, `date_of_birth`, `gender`, `student_email`, `student_mobile_number`, `category`, `physically_challenged`, `aadhar_number`, `samagraha_id`, `father_name`, `father_mobile_number`, `occupation`, `annual_income`, `mother_name`, `mother_mobile_number`, `through_agent`, `agent_name`, `agent_mobile_number`, `through_whom`, `other_person_name`, `other_person_relation`, `other_person_same_college`, `ssc_school_name`, `ssc_board`, `ssc_marks`, `hsc_school_name`, `hsc_board`, `hsc_marks`, `diploma_done`, `diploma_school_name`, `diploma_board`, `diploma_marks`, `diploma_branch`, `iit_jee_appeared`, `iit_jee_marks`, `current_course`) VALUES
('CDGI1', 'Manali Keshattiwar', '1998-02-04', 'Female', 'manali@gmail.com', 1234567894, 'General', 'No', '123456789123', '123', 'Ashok Keshattiwar', 2147483647, 'Service', 555555, 'Seema Keshattiwar', 2147483647, 'No', '', 0, 'Self', '', '', '', 'CDGI School', 'CBSE', 99, 'CDGI School', 'CBSE', 98, 'No', '', '', 0, '', 'Yes', 335, 'Computer Science (CS)');

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
  `student_mobile_number` int(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `physically_challenged` varchar(20) NOT NULL,
  `aadhar_number` varchar(15) NOT NULL,
  `samagraha_id` varchar(15) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile_number` int(15) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `annual_income` int(30) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_mobile_number` int(15) NOT NULL,
  `through_agent` varchar(20) NOT NULL,
  `agent_name` varchar(50) DEFAULT NULL,
  `agent_mobile_number` int(15) DEFAULT NULL,
  `through_whom` varchar(30) DEFAULT NULL,
  `other_person_name` varchar(50) DEFAULT NULL,
  `other_person_relation` varchar(15) DEFAULT NULL,
  `other_person_same_college` varchar(15) DEFAULT NULL,
  `ssc_school_name` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_marks` int(10) NOT NULL,
  `hsc_school_name` varchar(50) NOT NULL,
  `hsc_board` varchar(50) NOT NULL,
  `hsc_marks` int(10) NOT NULL,
  `current_course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cdips_students`
--

INSERT INTO `cdips_students` (`registration_id`, `full_name`, `date_of_birth`, `gender`, `student_email`, `student_mobile_number`, `category`, `physically_challenged`, `aadhar_number`, `samagraha_id`, `father_name`, `father_mobile_number`, `occupation`, `annual_income`, `mother_name`, `mother_mobile_number`, `through_agent`, `agent_name`, `agent_mobile_number`, `through_whom`, `other_person_name`, `other_person_relation`, `other_person_same_college`, `ssc_school_name`, `ssc_board`, `ssc_marks`, `hsc_school_name`, `hsc_board`, `hsc_marks`, `current_course`) VALUES
('CDIPS1', 'Riya S Pahuja', '1994-09-04', 'Female', 'riya@gmail.com', 2147483647, 'General', 'No', '123456789875', '2299', 'Shankarlal Pahuja', 2147483647, 'Business', 8888888, 'Ratna Pahuja', 2147483647, 'Yes', 'XYZ Za', 666559974, '', '', '', '', 'CDIPS school', 'CBSE', 97, 'CDIPS school', 'CBSE', 94, 'B.Sc (Computer)');

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
  `student_mobile_number` int(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `physically_challenged` varchar(20) NOT NULL,
  `aadhar_number` varchar(15) NOT NULL,
  `samagraha_id` varchar(15) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile_number` int(15) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `annual_income` int(30) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_mobile_number` int(15) NOT NULL,
  `through_agent` varchar(20) NOT NULL,
  `agent_name` varchar(50) DEFAULT NULL,
  `agent_mobile_number` int(15) DEFAULT NULL,
  `through_whom` varchar(30) DEFAULT NULL,
  `other_person_name` varchar(50) DEFAULT NULL,
  `other_person_relation` varchar(15) DEFAULT NULL,
  `other_person_same_college` varchar(15) DEFAULT NULL,
  `ssc_school_name` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_marks` int(10) NOT NULL,
  `hsc_school_name` varchar(50) NOT NULL,
  `hsc_board` varchar(50) NOT NULL,
  `hsc_marks` int(10) NOT NULL,
  `current_course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cdip_students`
--

INSERT INTO `cdip_students` (`registration_id`, `full_name`, `date_of_birth`, `gender`, `student_email`, `student_mobile_number`, `category`, `physically_challenged`, `aadhar_number`, `samagraha_id`, `father_name`, `father_mobile_number`, `occupation`, `annual_income`, `mother_name`, `mother_mobile_number`, `through_agent`, `agent_name`, `agent_mobile_number`, `through_whom`, `other_person_name`, `other_person_relation`, `other_person_same_college`, `ssc_school_name`, `ssc_board`, `ssc_marks`, `hsc_school_name`, `hsc_board`, `hsc_marks`, `current_course`) VALUES
('CDIP1', 'Riya', '1994-04-09', 'Female', 'abc1@gmail.com', 1234567890, 'General', 'No', '123456789123', '123', 'Shankarlal Pahuja', 2147483647, 'Business', 200020, 'Ratna Pahuja', 2147483647, 'No', '', 123458769, 'Self', '', '', 'No', 'CDIP school', 'CBSE', 99, 'CDIP school', 'CBSE', 99, 'B.Pharma'),
('CDIP2', 'Pooja Patil', '1998-11-23', 'Female', 'pooja@gmail.com', 2147483647, 'General', 'No', '456385721555', '12333', 'Santosh Patil', 2147483647, 'Navy Officer', 668855, 'Prerna Patil', 2147483647, 'No', '', 0, 'Self', '', '', '', 'CDIP school', 'MP', 95, 'CDIP School', 'MP', 96, 'D.Pharma');

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
