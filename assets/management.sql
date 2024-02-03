-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 08:42 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_course`
--

CREATE TABLE `admin_add_course` (
  `id` int(11) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `enrolled_student` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `assign_teacher` varchar(100) NOT NULL,
  `assign_teacher_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_course`
--

INSERT INTO `admin_add_course` (`id`, `course_title`, `semister`, `course_code`, `enrolled_student`, `department`, `assign_teacher`, `assign_teacher_id`) VALUES
(5, 'cse', 'fall-19', '202', '23', 'cse', 'zabbir Hossain', 6),
(6, 'cse4', 'fall-19', '767', '45', 'cse', 'rahi', 7),
(7, 'cse-112', 'winter-15', '112', '23', 'cse', 'nayem', 9),
(8, 'cse990', 'Summer-19', '990', '23', 'cse', 'ridhi', 10),
(13, 'Software engineering', 'spring-18', 'CSE-333', '23', 'EEE', '', 6),
(14, 'Algorithm ', 'summer-18', 'CSE-323', '40', 'CSE', '', 9),
(15, 'Object Oriented programming', 'summer-18', 'CSE-221', '40', 'CSE', '', 11),
(16, 'Data Structure', 'SPRING-18', 'CSE-134', '40', 'CSE', '', 12),
(17, 'Wireless Programming', 'FALL-18', '311', '40', 'CSE', '', 12),
(18, 'Operating System', 'SPRING-19', '214', '40', 'CSE', '', 16),
(19, 'Database Management System', 'SPRING-18', '214', '40', 'CSE', '', 16);

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_student`
--

CREATE TABLE `admin_add_student` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conf_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_student`
--

INSERT INTO `admin_add_student` (`id`, `image`, `std_id`, `name`, `email`, `phone`, `program`, `department`, `password`, `conf_password`) VALUES
(2, 'a70c8ba4e247c82c4e7345830f550218.jpg', '142', 'zabbir Hossain', 'anuj.lpu1@gmail.com', '+8801933722564', 'bsc', 'cse', '1234', '1234'),
(3, 'f23bcf24c67e81995964c6a395ccaa6b.jpg', '123', 'rohit', 'rohit_j@live.com', '01553-418874', 'bsc', 'cse', '1234', '1234'),
(4, '013346990b4b3d9268b0e7cf70037c3b.jpg', '111', 'rohit', 'test@gmail.com', '+8801933722564', 'bsc', 'cse', '1234', '1234'),
(5, '030298b51c4d02575cf8eacfca3d270c.jpg', '362', 'Sadman  Sakib', 'sadman@gmail.com', '01719654341', 'Bsc in CSE', 'CSE', '1234', '1234'),
(6, 'a65423a2915f2f6fb0308a2587b328e8.jpg', '343', 'Faisal Ahmed', 'faisal@gmail.com', '01513421114', 'Bsc in CSE', 'CSE', '1234', '1234'),
(7, 'cbbb7984cfa994c6e55526db35ac9c1c.jpg', '351', 'Nusrat Jahan', 'nusrat@gmail.com', '01762123123', 'Bsc in CSE', 'CSE', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_student_course`
--

CREATE TABLE `admin_add_student_course` (
  `id` int(11) NOT NULL,
  `std_id` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `semister` varchar(100) NOT NULL,
  `assign_teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_student_course`
--

INSERT INTO `admin_add_student_course` (`id`, `std_id`, `course_title`, `course_code`, `semister`, `assign_teacher`) VALUES
(1, '3', 'cse', '202', 'fall-19', 'zabbir Hossain'),
(2, '2', 'cse', '202', 'fall-19', 'zabbir Hossain'),
(3, '2', 'cse4', '767', 'fall-19', 'rahi'),
(4, '4', 'cse-112', '112', 'winter-15', 'nayem'),
(5, '4', 'cse990', '990', 'Summer-19', 'ridhi'),
(6, '4', 'cse', '202', 'fall-19', 'zabbir Hossain'),
(7, '2', 'Algorithm ', 'CSE-323', 'summer-18', ''),
(8, '4', 'Algorithm ', 'CSE-323', 'summer-18', ''),
(9, '5', 'Object Oriented programming', 'CSE-221', 'summer-18', ''),
(10, '6', 'Object Oriented programming', 'CSE-221', 'summer-18', ''),
(11, '7', 'Object Oriented programming', 'CSE-221', 'summer-18', ''),
(12, '5', 'Data Structure', 'CSE-134', 'SPRING-18', 'Arif Mahmud'),
(13, '6', 'Data Structure', 'CSE-134', 'SPRING-18', 'Arif Mahmud'),
(14, '7', 'Data Structure', 'CSE-134', 'SPRING-18', 'Arif Mahmud'),
(15, '5', 'Wireless Programming', '311', 'FALL-18', 'Arif Mahmud'),
(16, '6', 'Wireless Programming', '311', 'FALL-18', 'Arif Mahmud'),
(17, '7', 'Wireless Programming', '311', 'FALL-18', 'Arif Mahmud'),
(18, '6', 'Database Management System', '214', 'SPRING-18', 'Arif Mahmud'),
(19, '5', 'Database Management System', '214', 'SPRING-18', 'Arif Mahmud'),
(20, '7', 'Database Management System', '214', 'SPRING-18', 'Arif Mahmud');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_teacher`
--

CREATE TABLE `admin_add_teacher` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `assign_course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_teacher`
--

INSERT INTO `admin_add_teacher` (`id`, `image`, `name`, `email`, `password`, `phone`, `assign_course`) VALUES
(7, '5e86bba05edbf653837755354f5eceb3.jpg', 'rahi', 'test@gmail.com', '1234', '01553-418874', 'AI'),
(8, 'b7f5bd1a813e57bf7fc20f95d70de814.jpg', 'zabbir Hossain', 'zabbirhossain727@gmail.com', '1234', '+8801933722564', 'OS'),
(11, '14ee0d3a098fd38b34f5426d7c17942a.jpg', 'Salim Hoq', 'salim@gmail.com', 'asd', '01722551541', ''),
(15, '97c7d384f0c30c05ee5aa5fdf5cfe979.jpg', 'Naznin Sultana', 'nazninsultana@gmail.com', 'asd', '01722551541', ''),
(16, '283b9ff1533fc48d896e1f6cbfce7c37.jpg', 'Arif Mahmud', 'arif@gmail.com', 'asd', '01722551541', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'ridhi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `assign_course`
--

CREATE TABLE `assign_course` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_course`
--

INSERT INTO `assign_course` (`id`, `type`) VALUES
(1, 'CSE'),
(2, 'BBA'),
(3, 'LAW'),
(4, 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `course_code`
--

CREATE TABLE `course_code` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_code`
--

INSERT INTO `course_code` (`id`, `type`) VALUES
(1, '333'),
(2, '134'),
(3, '323'),
(4, '214'),
(5, '221'),
(6, '311'),
(7, '334'),
(8, '331');

-- --------------------------------------------------------

--
-- Table structure for table `course_title`
--

CREATE TABLE `course_title` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_title`
--

INSERT INTO `course_title` (`id`, `type`) VALUES
(1, 'Software engineering'),
(2, 'Data Structure'),
(3, 'Operating System'),
(4, 'Algorithm '),
(5, 'Object Oriented programming'),
(6, 'Database Management System'),
(7, 'Wireless Programming'),
(8, 'Compiler Design');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `type`) VALUES
(1, 'EEE'),
(2, 'Software Engineering'),
(3, 'Civil Engineering'),
(4, 'CSE'),
(5, 'Textile engineering'),
(6, 'BBA '),
(7, 'LAW ');

-- --------------------------------------------------------

--
-- Table structure for table `parents_send_message`
--

CREATE TABLE `parents_send_message` (
  `id` int(11) NOT NULL,
  `teacher_email` varchar(30) NOT NULL,
  `student_id` int(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents_send_message`
--

INSERT INTO `parents_send_message` (`id`, `teacher_email`, `student_id`, `message`) VALUES
(4, '6', 142, 'i kjadk'),
(6, '6', 142, 'why not??\r\n'),
(7, '11', 142, 'asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `type`) VALUES
(1, 'Bsc in CSE'),
(2, 'Bsc in LAW'),
(3, 'Bsc in BBA'),
(4, 'Bsc in EEE');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `type`) VALUES
(1, 'SPRING-18'),
(2, 'SUMMER-18'),
(3, 'FALL-18'),
(4, 'SPRING-19'),
(5, 'SUMMER-19'),
(6, 'FALL-19');

-- --------------------------------------------------------

--
-- Table structure for table `student_add_course`
--

CREATE TABLE `student_add_course` (
  `id` int(11) NOT NULL,
  `std_id` int(50) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `assign_teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_add_course`
--

INSERT INTO `student_add_course` (`id`, `std_id`, `course_title`, `course_code`, `semister`, `assign_teacher`) VALUES
(1, 2, 'cse', '202', 'fall-19', 'zabbir Hossain'),
(2, 2, 'cse4', '767', 'fall-19', 'rahi'),
(3, 2, 'cse', '202', 'fall-19', 'zabbir Hossain');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `teacher_id`, `semister`, `course_code`, `date`, `attendance`, `student_id`) VALUES
(39, 6, '\r\nfall-19', '202', '2018-10-29', 'present', '123'),
(40, 6, '\r\nfall-19', '202', '2018-10-29', 'absent', '142'),
(41, 6, '\r\nfall-19', '202', '2018-10-29', 'present', '111'),
(42, 12, '\r\nFALL-18', '311', '2018-11-03', 'present', '362'),
(43, 12, '\r\nFALL-18', '311', '2018-11-03', 'present', '343'),
(44, 12, '\r\nFALL-18', '311', '2018-11-03', 'present', '351'),
(45, 16, '\r\nSPRING-18', '214', '2018-11-03', 'present', '343'),
(46, 16, '\r\nSPRING-18', '214', '2018-11-03', 'present', '362'),
(47, 16, '\r\nSPRING-18', '214', '2018-11-03', 'absent', '351'),
(48, 16, '\r\nSPRING-18', '214', '2018-11-11', 'absent', '343'),
(49, 16, '\r\nSPRING-18', '214', '2018-11-11', 'absent', '362'),
(50, 16, '\r\nSPRING-18', '214', '2018-11-11', 'present', '351');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `username`, `password`) VALUES
(1, 'ridhi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `username`, `password`) VALUES
(1, 'ridhi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_send_message`
--

CREATE TABLE `teacher_send_message` (
  `id` int(11) NOT NULL,
  `student_id` int(50) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_send_message`
--

INSERT INTO `teacher_send_message` (`id`, `student_id`, `teacher_id`, `message`) VALUES
(4, 142, '6', 'nice child..'),
(6, 142, '6', 'apni valo na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_add_course`
--
ALTER TABLE `admin_add_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_add_student`
--
ALTER TABLE `admin_add_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_add_student_course`
--
ALTER TABLE `admin_add_student_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_add_teacher`
--
ALTER TABLE `admin_add_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_course`
--
ALTER TABLE `assign_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_code`
--
ALTER TABLE `course_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_title`
--
ALTER TABLE `course_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents_send_message`
--
ALTER TABLE `parents_send_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_add_course`
--
ALTER TABLE `student_add_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_send_message`
--
ALTER TABLE `teacher_send_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_add_course`
--
ALTER TABLE `admin_add_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin_add_student`
--
ALTER TABLE `admin_add_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_add_student_course`
--
ALTER TABLE `admin_add_student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_add_teacher`
--
ALTER TABLE `admin_add_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_course`
--
ALTER TABLE `assign_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_code`
--
ALTER TABLE `course_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_title`
--
ALTER TABLE `course_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parents_send_message`
--
ALTER TABLE `parents_send_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_add_course`
--
ALTER TABLE `student_add_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_send_message`
--
ALTER TABLE `teacher_send_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
