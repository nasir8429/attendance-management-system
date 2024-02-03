-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 07:43 PM
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
(20, 'Software engineering', 'FALL-18', '331', '40', 'CSE', 'Arif Mahmud', 15),
(21, 'Data Structure', 'SPRING-18', '333', '40', 'CSE', 'Tasfia Bushra', 17),
(22, 'Operating System', 'SPRING-18', '134', '40', 'CSE', 'Taslima Aktar Shova', 19),
(23, 'Algorithm ', 'FALL-18', '323', '40', 'CSE', 'Tasfia Bushra', 17),
(24, 'Object Oriented programming', 'SUMMER-18', '311', '40', 'CSE', 'Salim Hoq', 18),
(25, 'Database Management System', 'FALL-18', '334', '40', 'CSE', 'Momotaz Panna', 20),
(26, 'Wireless Programming', 'SUMMER-18', '221', '40', 'CSE', 'Tumpa Shaha Biswas', 16),
(27, 'Compiler Design', 'SUMMER-18', '214', '40', 'CSE', 'Momotaz Panna', 20);

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
(8, 'c43bfce94e34c717062aaa86e200a103.jpg', '151', 'Arman Hasan Siam', 'siam@gmail.com', '01933722564', 'Bsc in CSE', 'CSE', '123', '123'),
(9, 'f6960fb5dee269ff85a3aa8455f938c9.jpg', '152', 'Sakil Rahman', 'sakil1@gmail.com', '01513421114', 'Bsc in CSE', 'CSE', '123', '123'),
(10, 'd140d5231190d78a01370fbb00421b22.jpg', '153', 'Mahfuz Mishel', 'mishel@live.com', '01553418874', 'Bsc in CSE', 'CSE', '123', '123'),
(11, 'ca322443a121b99c8af00600c79f1fd4.jpg', '154', 'Ishrat A Chowdhury', 'ishrat1@gmail.com', '01933722564', 'Bsc in CSE', 'CSE', '123', '123'),
(12, '47640d1dcaa56cc6bb0855d9b781eed1.jpg', '155', 'ImRan Shouvo', 'imran887@gmail.com', '01762123123', 'Bsc in CSE', 'CSE', '123', '123'),
(13, 'ce2ec1022de95b03d0932df395146985.jpg', '156', 'Sadman Sakib', 'sadman@gmail.com', '01719654341', 'Bsc in CSE', 'CSE', '123', '123'),
(14, '3922d803658ec5bcfe3ea6ae38c738dc.jpg', '157', 'Satyajit Roy', 'satyajit@gmail.com', '01933722578', 'Bsc in CSE', 'EEE', '123', '123'),
(15, 'b495f4a591c4eb2a83e91c3c88423c3f.jpg', '158', 'Mahfuza Nova', 'nova21@gmail.com', '01762123123', 'Bsc in CSE', 'CSE', '123', '123'),
(16, 'a780e3c12110bccf5fef229955ef2aa3.jpg', '159', 'Avijit Roy', 'roy35@gmail.com', '01862123123', 'Bsc in CSE', 'CSE', '123', '123'),
(17, '7f32f71986399c805406877704ae57da.jpg', '160', 'Ashikur Rahman Miah', 'asik21@gmail.com', '01719654341', 'Bsc in CSE', 'CSE', '123', '123'),
(18, 'ea34da9147708c155a47a9058622d833.jpg', '161', 'Kamrul Hasan Tulib', 'tulib@gmail.com', '01862123124', 'Bsc in CSE', 'CSE', '123', '123'),
(19, 'd90caf8d77bdc88aa67a491e75600042.jpg', '162', 'Angel Sonia Sadeef', 'sonia@gmail.com', '01553418874', 'Bsc in CSE', 'CSE', '123', '123'),
(20, 'ddcc08dd3ef1d694b3c5958b3a22d17e.jpg', '163', 'Masiyat Chowdhury', 'masiyat@live.com', '01862123128', 'Bsc in CSE', 'CSE', '123', '123'),
(21, '0e4a4c5262aad588de69f554e0ba0c79.jpg', '164', 'Monir Ahmed Tonoy', 'tonoy@gmail.com', '01862123128', 'Bsc in CSE', 'CSE', '123', '123'),
(22, 'e2d0535206239120a5835892ba0519aa.jpg', '165', 'Nahid Majlish', 'nahid@gmail.com', '01762123124', 'Bsc in CSE', 'CSE', '123', '123'),
(23, '4e4bed1a6287aa9d10145fbbc0892773.jpg', '166', 'Anindita Shruti', 'shruti@gmail.com', '01862123123', 'Bsc in CSE', 'CSE', '123', '123'),
(24, '5e667875629ae633be363fb551426853.jpg', '167', 'Aminul Islam Sagor', 'sagor@gmail.com', '01719654341', 'Bsc in CSE', 'CSE', '123', '123'),
(25, '9f6fbadea5af5b5fb1a69537f5ee814f.jpg', '168', 'Afsana Swarna', 'afsana21@gmail.com', '01621689954', 'Bsc in CSE', 'CSE', '123', '123'),
(26, '4d4ba078181a5221c8f8e2f3431933bf.jpg', '169', 'Abrar Priyo', 'priyo@gmail.com', '01621689956', 'Bsc in CSE', 'CSE', '123', '123'),
(27, 'acf098b7bad031c6c847cb806fc2513e.jpg', '170', 'Afsana Haque Mila', 'mila@gmail.com', '01762123124', 'Bsc in CSE', 'CSE', '123', '123'),
(28, '1136c1c4d2ee87987499f2a41a853b4c.jpg', '171', 'Fahim Sarker', 'fahim@gmail.com', '01719654341', 'Bsc in CSE', 'CSE', '123', '123');

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
(12, '5', 'Data Structure', '134', 'SPRING-18', 'Arif Mahmud'),
(19, '8', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(20, '9', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(21, '10', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(22, '11', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(23, '12', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(24, '13', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(25, '14', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(26, '15', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(27, '16', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(28, '17', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(29, '18', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(30, '19', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(31, '20', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(32, '21', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(33, '22', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(34, '23', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(35, '24', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(36, '25', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(37, '26', 'Algorithm ', '323', 'FALL-18', 'Tasfia Bushra'),
(38, '8', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(39, '9', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(40, '10', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(41, '11', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(42, '12', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(43, '14', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(44, '15', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(45, '16', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(46, '17', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(47, '18', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(48, '19', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(49, '20', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(50, '21', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(51, '22', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(52, '23', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(53, '24', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(54, '28', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(55, '27', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(56, '26', 'Data Structure', '333', 'SPRING-18', 'Tasfia Bushra'),
(57, '8', 'Compiler Design', '214', 'SUMMER-18', 'Momotaz Panna'),
(58, '8', 'Database Management System', '334', 'FALL-18', 'Momotaz Panna'),
(59, '8', 'Object Oriented programming', '311', 'SUMMER-18', 'Salim Hoq'),
(60, '8', 'Operating System', '134', 'SPRING-18', 'Taslima Aktar Shova'),
(61, '8', 'Software engineering', '331', 'FALL-18', 'Arif Mahmud'),
(62, '8', 'Wireless Programming', '221', 'SUMMER-18', 'Tumpa Shaha Biswas');

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
(15, 'eed50513e7d6c1aa8327f9e06ce26523.jpg', 'Arif Mahmud', 'arif@gmail.com', 'asd', '01621689956', 'CSE'),
(16, '43b36320f49aa5e0d67066df5dedeec9.jpg', 'Tumpa Shaha Biswas', 'tumpa@gmail.com', 'asd', '01621689956', 'CSE'),
(17, 'ed6e49f67046e9419f418ac4d2beb6b5.jpg', 'Tasfia Bushra', 'anika@gmail.com', 'asd', '01719654341', 'CSE'),
(18, '988c742058ebb92f809755381420c25b.jpg', 'Salim Hoq', 'salim@gmail.com', 'asd', '01819654341', 'CSE'),
(19, '86fcb99dc807ac23e655965f9ee022c9.jpg', 'Taslima Aktar Shova', 'akter@gmail.com', 'asd', '01862123123', 'CSE'),
(20, '2e94ee0d1736134cc2a23377bdb118d1.jpg', 'Momotaz Panna', 'panna@gmail.com', 'asd', '01621689954', 'CSE'),
(21, 'cce952a2bbe145573dbd44b9feee07c5.jpg', 'Mohammad Niaz up', 'niaz@gmail.com', 'asd', '01621689956', 'OS'),
(22, '22165b11b831a94eb2a7e8ea43beac28.jpg', 'Aminul Islam ', 'sagor1@gmail.com', 'asd', '01719654342', 'SAD'),
(23, 'efba0b43c1027fb340800bba39781a42.jpg', 'Ms. Faria Hossain', 'faria@gmail.com', 'asd', '01819654341', 'CSE'),
(24, '52078157c1293bc0cbe9f41f55b28567.jpg', 'Mr. Mohammad Monirul Islam', 'monirul@gmail.com', 'asd', '01719654342', 'CSE');

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
(3, 'LAW');

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
(7, '17', 151, 'Actually I wanted to know about the progress of my child.'),
(8, '17', 151, 'But algorithm is a subject he practices a lot');

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
(4, 'SPRING-17'),
(5, 'SUMMER-17'),
(6, 'FALL-17');

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
(1, 2, 'cse', '202', 'FALL-18', 'Arif Mahmud');

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
(140, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '151'),
(141, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '152'),
(142, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '153'),
(143, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '154'),
(144, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '155'),
(145, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '157'),
(146, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '158'),
(147, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '159'),
(148, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '160'),
(149, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '161'),
(150, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '162'),
(151, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '163'),
(152, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '164'),
(153, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '165'),
(154, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '166'),
(155, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '167'),
(156, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '171'),
(157, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '170'),
(158, 17, '\r\nFALL-18', '333', '2018-11-01', 'present', '169'),
(159, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '151'),
(160, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '152'),
(161, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '153'),
(162, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '154'),
(163, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '155'),
(164, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '157'),
(165, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '158'),
(166, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '159'),
(167, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '160'),
(168, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '161'),
(169, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '162'),
(170, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '163'),
(171, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '164'),
(172, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '165'),
(173, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '166'),
(174, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '167'),
(175, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '171'),
(176, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '170'),
(177, 17, '\r\nFALL-18', '333', '2018-11-02', 'present', '169'),
(178, 17, '\r\nFALL-18', '333', '2018-11-03', 'absent', '151'),
(179, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '152'),
(180, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '153'),
(181, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '154'),
(182, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '155'),
(183, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '157'),
(184, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '158'),
(185, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '159'),
(186, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '160'),
(187, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '161'),
(188, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '162'),
(189, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '163'),
(190, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '164'),
(191, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '165'),
(192, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '166'),
(193, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '167'),
(194, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '171'),
(195, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '170'),
(196, 17, '\r\nFALL-18', '333', '2018-11-03', 'present', '169'),
(197, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '151'),
(198, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '152'),
(199, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '153'),
(200, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '154'),
(201, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '155'),
(202, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '156'),
(203, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '157'),
(204, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '158'),
(205, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '159'),
(206, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '160'),
(207, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '161'),
(208, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '162'),
(209, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '163'),
(210, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '164'),
(211, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '165'),
(212, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '166'),
(213, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '167'),
(214, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '168'),
(215, 17, '\r\nFALL-18', '323', '2018-11-01', 'present', '169'),
(216, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '151'),
(217, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '152'),
(218, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '153'),
(219, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '154'),
(220, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '155'),
(221, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '156'),
(222, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '157'),
(223, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '158'),
(224, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '159'),
(225, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '160'),
(226, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '161'),
(227, 17, '\r\nFALL-18', '323', '2018-11-02', 'present', '162'),
(228, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '163'),
(229, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '164'),
(230, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '165'),
(231, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '166'),
(232, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '167'),
(233, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '168'),
(234, 17, '\r\nFALL-18', '323', '2018-11-02', 'absent', '169');

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
(7, 151, '17', 'siam is doing well in all the subjects except algorithm.'),
(9, 151, '17', 'He needs more attention on that.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin_add_student`
--
ALTER TABLE `admin_add_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `admin_add_student_course`
--
ALTER TABLE `admin_add_student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `admin_add_teacher`
--
ALTER TABLE `admin_add_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_course`
--
ALTER TABLE `assign_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
