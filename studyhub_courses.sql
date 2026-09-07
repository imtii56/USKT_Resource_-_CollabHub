-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 04:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyhub_courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `course_category` varchar(50) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `delivery_type` varchar(20) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `semester_id`, `course_category`, `course_type`, `delivery_type`, `course_code`, `course_name`, `credit_hours`) VALUES
(1, 1, 'General Education', 'Core/Compulsory', 'Theory', 'ITA5221', 'Applied Physics', 3),
(2, 1, 'General Education', 'Core/Compulsory', 'Lab', 'ITA5222', 'Applied Physics Lab', 1),
(3, 1, 'Domain', 'Discipline/Major', 'Theory', 'ITS222', 'Computer Organization & Assembly Language', 3),
(4, 1, 'Domain', 'Discipline/Major', 'Lab', 'ITS222L', 'Computer Organization Lab', 1),
(5, 1, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'DC-0001', 'Programming Fundamentals', 4),
(6, 1, 'General Education', 'Core/Compulsory', 'Theory', 'UGIC5102', 'Expository Writing', 3),
(7, 1, 'General Education', 'Core/Compulsory', 'Theory', 'UGIC5103', 'Islamic Studies/Ethics', 2),
(8, 2, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'DC-0003', 'Object-Oriented Programming', 4),
(9, 2, 'Domain', 'Core/Compulsory', 'Theory', 'IT2311', 'Discrete Mathematics', 3),
(10, 2, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'DC-0004', 'Data Structures', 4),
(11, 2, 'Domain', 'Elective', 'Theory + Lab', 'DE-0001', 'Web Development', 3),
(12, 2, 'Domain', 'Discipline/Major', 'Theory', 'IT2312', 'Digital Logic Design', 3),
(13, 2, 'Domain', 'Discipline/Major', 'Lab', 'IT2312L', 'Digital Logic Lab', 1),
(14, 17, 'General Education', 'Core/Compulsory', 'Theory', 'ADP101', 'Introduction to Programming', 3),
(15, 17, 'General Education', 'Core/Compulsory', 'Lab', 'ADP101L', 'Programming Lab', 1),
(16, 17, 'Domain', 'Core/Compulsory', 'Theory', 'ADP102', 'Computer Fundamentals', 3),
(17, 17, 'Domain', 'Core/Compulsory', 'Lab', 'ADP102L', 'Computer Fundamentals Lab', 1),
(18, 17, 'General Education', 'Core/Compulsory', 'Theory', 'ADP103', 'Communication Skills', 2),
(19, 17, 'General Education', 'Core/Compulsory', 'Theory', 'ADP104', 'Mathematics for Computing', 3),
(20, 18, 'Domain', 'Core/Compulsory', 'Theory', 'ADP201', 'Object-Oriented Programming', 3),
(21, 18, 'Domain', 'Core/Compulsory', 'Lab', 'ADP201L', 'OOP Lab', 1),
(22, 18, 'Domain', 'Core/Compulsory', 'Theory', 'ADP202', 'Database Systems', 3),
(23, 18, 'Domain', 'Core/Compulsory', 'Lab', 'ADP202L', 'Database Lab', 1),
(24, 18, 'Domain', 'Core/Compulsory', 'Theory', 'ADP203', 'Web Technologies', 3),
(25, 18, 'General Education', 'Core/Compulsory', 'Theory', 'ADP204', 'Technical Writing', 2),
(26, 21, 'General Education', 'Core/Compulsory', 'Theory', 'ITM101', 'Introduction to IT', 3),
(27, 21, 'General Education', 'Core/Compulsory', 'Theory', 'ITM102', 'Business Communication', 3),
(28, 21, 'Domain', 'Core/Compulsory', 'Theory', 'ITM103', 'Principles of Management', 3),
(29, 21, 'Domain', 'Core/Compulsory', 'Theory', 'ITM104', 'Computer Applications', 3),
(30, 21, 'General Education', 'Core/Compulsory', 'Theory', 'ITM105', 'Business Mathematics', 3),
(31, 21, 'General Education', 'Core/Compulsory', 'Theory', 'ITM106', 'Introduction to Accounting', 3),
(32, 22, 'Domain', 'Core/Compulsory', 'Theory', 'ITM201', 'Database Management', 3),
(33, 22, 'Domain', 'Core/Compulsory', 'Lab', 'ITM201L', 'Database Lab', 1),
(34, 22, 'Domain', 'Core/Compulsory', 'Theory', 'ITM202', 'Financial Accounting', 3),
(35, 22, 'Domain', 'Core/Compulsory', 'Theory', 'ITM203', 'E-Commerce Fundamentals', 3),
(36, 22, 'Domain', 'Core/Compulsory', 'Theory', 'ITM204', 'Organizational Behavior', 3),
(37, 22, 'General Education', 'Core/Compulsory', 'Theory', 'ITM205', 'Business Ethics', 2),
(38, 9, 'General Education', 'Core/Compulsory', 'Theory', 'AIA5221', 'Calculus for AI', 3),
(39, 9, 'General Education', 'Core/Compulsory', 'Lab', 'AIA5222', 'Programming Fundamentals Lab', 1),
(40, 9, 'Domain', 'Core/Compulsory', 'Theory', 'AIS222', 'Introduction to AI', 3),
(41, 9, 'Domain', 'Core/Compulsory', 'Theory', 'AIS223', 'Linear Algebra', 3),
(42, 9, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'AIDC-001', 'Python for AI', 4),
(43, 9, 'General Education', 'Core/Compulsory', 'Theory', 'UGIC5102', 'Expository Writing', 2),
(44, 10, 'Domain', 'Core/Compulsory', 'Theory', 'AIS231', 'Probability and Statistics', 3),
(45, 10, 'Domain', 'Core/Compulsory', 'Theory', 'AIS232', 'Data Structures for AI', 3),
(46, 10, 'Domain', 'Core/Compulsory', 'Lab', 'AIS232L', 'Data Structures Lab', 1),
(47, 10, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'AIDC-002', 'Machine Learning Fundamentals', 4),
(48, 10, 'Domain', 'Elective', 'Theory', 'AIE-001', 'Cognitive Science', 3),
(49, 10, 'General Education', 'Core/Compulsory', 'Theory', 'UGIC5103', 'Islamic Studies/Ethics', 2),
(50, 3, 'Domain', 'Core/Compulsory', 'Theory', 'IT3311', 'Data Structures & Algorithms', 3),
(51, 3, 'Domain', 'Core/Compulsory', 'Lab', 'IT3312', 'DSA Lab', 1),
(52, 3, 'Domain', 'Core/Compulsory', 'Theory', 'IT3321', 'Computer Networks', 3),
(53, 3, 'Domain', 'Core/Compulsory', 'Lab', 'IT3322', 'Networks Lab', 1),
(54, 3, 'Mathematics', 'Core/Compulsory', 'Theory', 'MATH3301', 'Discrete Mathematics', 3),
(55, 3, 'Domain', 'Elective', 'Theory', 'IT3331', 'Web Development', 3),
(56, 4, 'Domain', 'Core/Compulsory', 'Theory', 'IT4311', 'Database Systems', 3),
(57, 4, 'Domain', 'Core/Compulsory', 'Lab', 'IT4312', 'Database Lab', 1),
(58, 4, 'Domain', 'Core/Compulsory', 'Theory', 'IT4321', 'Software Engineering', 3),
(59, 4, 'Domain', 'Elective', 'Theory', 'IT4331', 'Mobile App Development', 3),
(60, 4, 'Mathematics', 'Core/Compulsory', 'Theory', 'MATH4301', 'Probability & Statistics', 3),
(61, 4, 'General Education', 'Core/Compulsory', 'Theory', 'GEN4301', 'Technical Writing', 2),
(62, 5, 'Domain', 'Core/Compulsory', 'Theory', 'IT5311', 'Operating Systems', 3),
(63, 5, 'Domain', 'Core/Compulsory', 'Lab', 'IT5312', 'OS Lab', 1),
(64, 5, 'Domain', 'Core/Compulsory', 'Theory', 'IT5321', 'Artificial Intelligence', 3),
(65, 5, 'Domain', 'Elective', 'Theory + Lab', 'IT5331', 'Cloud Computing', 4),
(66, 5, 'Domain', 'Elective', 'Theory', 'IT5341', 'Information Security', 3),
(67, 5, 'University', 'Elective', 'Theory', 'UE-0002', 'University Elective II', 2),
(68, 6, 'Domain', 'Core/Compulsory', 'Theory', 'IT6311', 'Machine Learning', 3),
(69, 6, 'Domain', 'Core/Compulsory', 'Lab', 'IT6312', 'ML Lab', 1),
(70, 6, 'Domain', 'Core/Compulsory', 'Theory', 'IT6321', 'Big Data Analytics', 3),
(71, 6, 'Domain', 'Elective', 'Theory + Lab', 'IT6331', 'DevOps', 4),
(72, 6, 'Domain', 'Elective', 'Theory', 'IT6341', 'Blockchain Technology', 3),
(73, 6, 'General Education', 'Core/Compulsory', 'Theory', 'GEN6301', 'Entrepreneurship', 2),
(74, 7, 'Domain', 'Core/Compulsory', 'Theory', 'IT7311', 'Computer Vision', 3),
(75, 7, 'Domain', 'Core/Compulsory', 'Project', 'IT7312', 'Final Year Project I', 3),
(76, 7, 'Domain', 'Elective', 'Theory', 'IT7321', 'Natural Language Processing', 3),
(77, 7, 'Domain', 'Elective', 'Theory + Lab', 'IT7331', 'IoT Systems', 4),
(78, 7, 'Domain', 'Elective', 'Theory', 'IT7341', 'Cyber Security', 3),
(79, 7, 'Professional', 'Core/Compulsory', 'Theory', 'PRO7301', 'IT Project Management', 3),
(80, 8, 'Domain', 'Core/Compulsory', 'Project', 'IT8311', 'Final Year Project II', 3),
(81, 8, 'Domain', 'Elective', 'Theory', 'IT8321', 'Advanced Algorithms', 3),
(82, 8, 'Domain', 'Elective', 'Theory + Lab', 'IT8331', 'Cloud Native Applications', 4),
(83, 8, 'Professional', 'Core/Compulsory', 'Theory', 'PRO8301', 'Professional Practices', 3),
(84, 8, 'Professional', 'Core/Compulsory', 'Theory', 'PRO8302', 'IT Governance', 3),
(85, 8, 'University', 'Elective', 'Theory', 'UE-0003', 'University Elective III', 2),
(86, 19, 'Domain', 'Core/Compulsory', 'Theory', 'ADP301', 'Web Development', 3),
(87, 19, 'Domain', 'Core/Compulsory', 'Lab', 'ADP301L', 'Web Dev Lab', 1),
(88, 19, 'Domain', 'Core/Compulsory', 'Theory', 'ADP302', 'Data Structures', 3),
(89, 19, 'Domain', 'Core/Compulsory', 'Lab', 'ADP302L', 'Data Structures Lab', 1),
(90, 19, 'Domain', 'Elective', 'Theory', 'ADP303', 'Introduction to AI', 3),
(91, 19, 'General Education', 'Core/Compulsory', 'Theory', 'ADP304', 'Professional Ethics', 2),
(92, 20, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'ADP401', 'Software Engineering', 4),
(93, 20, 'Domain', 'Core/Compulsory', 'Theory', 'ADP402', 'IT Project Management', 3),
(94, 20, 'Domain', 'Elective', 'Theory + Lab', 'ADP403', 'Mobile App Development', 4),
(95, 20, 'Domain', 'Elective', 'Theory', 'ADP404', 'Database Administration', 3),
(96, 20, 'Professional', 'Core/Compulsory', 'Theory', 'ADP405', 'Internship', 3),
(97, 20, 'General Education', 'Core/Compulsory', 'Theory', 'ADP406', 'Entrepreneurship', 2),
(98, 23, 'Domain', 'Core/Compulsory', 'Theory', 'ITM301', 'Financial Management', 3),
(99, 23, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'ITM302', 'E-Commerce Technologies', 4),
(100, 23, 'Domain', 'Elective', 'Theory', 'ITM303', 'Marketing Principles', 3),
(101, 23, 'Domain', 'Core/Compulsory', 'Theory', 'ITM304', 'Operations Management', 3),
(102, 23, 'Domain', 'Elective', 'Theory', 'ITM305', 'Human Resource Management', 3),
(103, 23, 'General Education', 'Core/Compulsory', 'Theory', 'ITM306', 'Business Ethics', 2),
(104, 24, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'ITM401', 'IT Project Management', 4),
(105, 24, 'Domain', 'Core/Compulsory', 'Theory', 'ITM402', 'Strategic Management', 3),
(106, 24, 'Domain', 'Elective', 'Theory + Lab', 'ITM403', 'Digital Marketing', 4),
(107, 24, 'Domain', 'Core/Compulsory', 'Project', 'ITM404', 'Capstone Project', 3),
(108, 24, 'Professional', 'Core/Compulsory', 'Theory', 'ITM405', 'Professional Practices', 3),
(109, 24, 'General Education', 'Core/Compulsory', 'Theory', 'ITM406', 'Entrepreneurship', 2),
(110, 11, 'Domain', 'Core/Compulsory', 'Theory', 'AIS331', 'Probability for AI', 3),
(111, 11, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'AIDC-003', 'Deep Learning Fundamentals', 4),
(112, 11, 'Mathematics', 'Core/Compulsory', 'Theory', 'MATH3301', 'Linear Algebra', 3),
(113, 11, 'Domain', 'Core/Compulsory', 'Theory', 'AIS332', 'Computer Vision', 3),
(114, 11, 'Domain', 'Elective', 'Theory', 'AIE-002', 'Cognitive Computing', 3),
(115, 11, 'General Education', 'Core/Compulsory', 'Theory', 'GEN3301', 'Research Methods', 2),
(116, 12, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'AIDC-004', 'Natural Language Processing', 4),
(117, 12, 'Domain', 'Core/Compulsory', 'Theory', 'AIS431', 'Reinforcement Learning', 3),
(118, 12, 'Domain', 'Core/Compulsory', 'Theory', 'AIS432', 'AI Ethics', 3),
(119, 12, 'Domain', 'Elective', 'Theory + Lab', 'AIE-003', 'Robotics', 4),
(120, 12, 'Domain', 'Elective', 'Theory', 'AIE-004', 'Bioinformatics', 3),
(121, 12, 'University', 'Elective', 'Theory', 'UE-0001', 'University Elective I', 2),
(122, 13, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'AIDC-005', 'Advanced Deep Learning', 4),
(123, 13, 'Domain', 'Core/Compulsory', 'Theory', 'AIS531', 'Computer Vision Systems', 3),
(124, 13, 'Domain', 'Core/Compulsory', 'Lab', 'AIS531L', 'Computer Vision Lab', 1),
(125, 13, 'Domain', 'Elective', 'Theory', 'AIE-005', 'AI for Healthcare', 3),
(126, 13, 'Domain', 'Elective', 'Theory + Lab', 'AIE-006', 'Autonomous Systems', 4),
(127, 13, 'Mathematics', 'Core/Compulsory', 'Theory', 'MATH5301', 'Advanced Statistics', 3),
(128, 13, 'Professional', 'Core/Compulsory', 'Theory', 'PRO5301', 'AI Project Management', 2),
(129, 14, 'Domain', 'Core/Compulsory', 'Theory + Lab', 'AIDC-006', 'Natural Language Understanding', 4),
(130, 14, 'Domain', 'Core/Compulsory', 'Theory', 'AIS631', 'Reinforcement Learning', 3),
(131, 14, 'Domain', 'Core/Compulsory', 'Lab', 'AIS631L', 'RL Lab', 1),
(132, 14, 'Domain', 'Elective', 'Theory', 'AIE-007', 'AI in Finance', 3),
(133, 14, 'Domain', 'Elective', 'Theory + Lab', 'AIE-008', 'Computer Graphics for AI', 4),
(134, 14, 'Professional', 'Core/Compulsory', 'Theory', 'PRO6301', 'AI Ethics & Governance', 3),
(135, 14, 'University', 'Elective', 'Theory', 'UE-0002', 'University Elective II', 2),
(136, 15, 'Domain', 'Core/Compulsory', 'Project', 'AIS731', 'AI Capstone Project I', 3),
(137, 15, 'Domain', 'Core/Compulsory', 'Theory', 'AIS732', 'Edge AI Systems', 3),
(138, 15, 'Domain', 'Elective', 'Theory + Lab', 'AIE-009', 'Generative AI Models', 4),
(139, 15, 'Domain', 'Elective', 'Theory', 'AIE-010', 'AI for Cybersecurity', 3),
(140, 15, 'Domain', 'Elective', 'Theory', 'AIE-011', 'Quantum Machine Learning', 3),
(141, 15, 'Professional', 'Core/Compulsory', 'Theory', 'PRO7301', 'AI Product Development', 3),
(142, 15, 'Professional', 'Core/Compulsory', 'Theory', 'PRO7302', 'Technical Leadership', 2),
(143, 16, 'Domain', 'Core/Compulsory', 'Project', 'AIS831', 'AI Capstone Project II', 4),
(144, 16, 'Domain', 'Core/Compulsory', 'Theory', 'AIS832', 'AI Deployment & Scalability', 3),
(145, 16, 'Domain', 'Elective', 'Theory + Lab', 'AIE-012', 'Multimodal AI Systems', 4),
(146, 16, 'Domain', 'Elective', 'Theory', 'AIE-013', 'AI for Social Good', 3),
(147, 16, 'Professional', 'Core/Compulsory', 'Theory', 'PRO8301', 'AI Startup Strategies', 3),
(148, 16, 'Professional', 'Core/Compulsory', 'Theory', 'PRO8302', 'Professional Certification Prep', 2),
(149, 16, 'University', 'Elective', 'Theory', 'UE-0003', 'University Elective III', 2);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `program_code` varchar(20) NOT NULL,
  `duration_years` int(11) NOT NULL,
  `total_semesters` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_name`, `program_code`, `duration_years`, `total_semesters`, `description`) VALUES
(1, 'BS Information Technology', 'BSIT', 4, 8, 'Bachelor of Science in Information Technology'),
(2, 'BS Artificial Intelligence', 'BSAI', 4, 8, 'Bachelor of Science in Artificial Intelligence'),
(3, 'ADP Information Technology', 'ADPIT', 2, 4, 'Associate Degree in Information Technology'),
(4, 'ADP IT Management', 'ADPITM', 2, 4, 'Associate Degree in IT Management');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `semester_number` int(11) NOT NULL,
  `semester_name` varchar(50) DEFAULT NULL,
  `academic_session` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semester_id`, `program_id`, `semester_number`, `semester_name`, `academic_session`) VALUES
(1, 1, 1, 'Fall 2023', 'Regular'),
(2, 1, 2, 'Spring 2024', 'Regular'),
(3, 1, 3, 'Fall 2024', 'Regular'),
(4, 1, 4, 'Spring 2025', 'Regular'),
(5, 1, 5, 'Fall 2025', 'Regular'),
(6, 1, 6, 'Spring 2026', 'Regular'),
(7, 1, 7, 'Fall 2026', 'Regular'),
(8, 1, 8, 'Spring 2027', 'Regular'),
(9, 2, 1, 'Fall 2023', 'Regular'),
(10, 2, 2, 'Spring 2024', 'Regular'),
(11, 2, 3, 'Fall 2024', 'Regular'),
(12, 2, 4, 'Spring 2025', 'Regular'),
(13, 2, 5, 'Fall 2025', 'Regular'),
(14, 2, 6, 'Spring 2026', 'Regular'),
(15, 2, 7, 'Fall 2026', 'Regular'),
(16, 2, 8, 'Spring 2027', 'Regular'),
(17, 3, 1, 'Fall 2023', 'Regular'),
(18, 3, 2, 'Spring 2024', 'Regular'),
(19, 3, 3, 'Fall 2024', 'Regular'),
(20, 3, 4, 'Spring 2025', 'Regular'),
(21, 4, 1, 'Fall 2023', 'Regular'),
(22, 4, 2, 'Spring 2024', 'Regular'),
(23, 4, 3, 'Fall 2024', 'Regular'),
(24, 4, 4, 'Spring 2025', 'Regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`),
  ADD KEY `program_id` (`program_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

--
-- Constraints for table `semesters`
--
ALTER TABLE `semesters`
  ADD CONSTRAINT `semesters_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
