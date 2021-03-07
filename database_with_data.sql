-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 03:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `attendance_status` varchar(50) NOT NULL,
  `attendance_date` date NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_id`, `attendance_status`, `attendance_date`, `teacher_id`) VALUES
(1, 1, 'Present', '2021-03-01', 1),
(2, 2, 'Present', '2021-03-01', 1),
(3, 3, 'Present', '2021-03-01', 1),
(4, 4, 'Present', '2021-03-01', 1),
(5, 5, 'Present', '2021-03-01', 1),
(6, 1, 'Present', '2021-03-02', 1),
(7, 2, 'Absent', '2021-03-02', 1),
(8, 3, 'Present', '2021-03-02', 1),
(9, 4, 'Present', '2021-03-02', 1),
(10, 5, 'Present', '2021-03-02', 1),
(16, 1, 'Absent', '2021-03-04', 1),
(17, 2, 'Present', '2021-03-04', 1),
(18, 3, 'Present', '2021-03-04', 1),
(19, 4, 'Present', '2021-03-04', 1),
(20, 5, 'Absent', '2021-03-04', 1),
(21, 1, 'Present', '2021-03-03', 1),
(22, 2, 'Absent', '2021-03-03', 1),
(23, 3, 'Absent', '2021-03-03', 1),
(24, 4, 'Absent', '2021-03-03', 1),
(25, 5, 'Present', '2021-03-03', 1),
(26, 1, 'Absent', '2021-03-05', 1),
(27, 2, 'Absent', '2021-03-05', 1),
(28, 3, 'Present', '2021-03-05', 1),
(29, 4, 'Absent', '2021-03-05', 1),
(30, 5, 'Absent', '2021-03-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `studentEmail` varchar(50) NOT NULL,
  `studentPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `studentName`, `studentEmail`, `studentPassword`) VALUES
(1, 'Sam', 'sam@gmail.com', '9876543210'),
(2, 'Adam', 'adam@gmail.com', '3579516482'),
(3, 'Ram', 'ram@gmail.com', '65413987'),
(4, 'Ronak', 'ronak@gmail.com', '6523147890'),
(5, 'Aniket', 'aniket@gmail.com', '987465132');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacherName` varchar(50) NOT NULL,
  `teacherEmail` varchar(50) NOT NULL,
  `teacherPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacherName`, `teacherEmail`, `teacherPassword`) VALUES
(1, 'Shivam', 's@gmail.com', '123456'),
(2, 'Alex', 'alex@gmail.com', '987654'),
(3, 'Namita', 'n@gmail.com', '123456789'),
(4, 'Sunny', 'sunny@gmail.com', '32106549870');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `fk_student_id` (`student_id`),
  ADD KEY `fk_teacher_id` (`teacher_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `fk_teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
