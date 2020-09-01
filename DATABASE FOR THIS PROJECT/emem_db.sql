-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2020 at 12:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_Id` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Admin_Id`, `FirstName`, `LastName`, `UserName`, `Password`, `Email`) VALUES
(237, 'MANNA', 'CHRISTIAN', 'MANNA', '827ccb0eea8a706c4c34a16891f84e7b', 'guimmamanna@yahoo.com'),
(245, 'VANIA', 'VANIA', 'VANIA', '827ccb0eea8a706c4c34a16891f84e7b', 'vania@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_Id` int(10) NOT NULL,
  `Class_Id` int(10) NOT NULL,
  `Student_Id` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Status` char(10) NOT NULL,
  `Attendance_Number` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Attendance_Id`, `Class_Id`, `Student_Id`, `Description`, `Status`, `Attendance_Number`, `Date`) VALUES
(10, 2, 1, 'research m', 'Present', 1, '2020-03-31'),
(11, 3, 2, 'advanced web', 'Present', 0, '2020-02-17'),
(12, 4, 1, 'research m', 'Present', 1, '2020-02-13'),
(13, 5, 3, 'Advanced web', 'Absent', 0, '2020-02-10'),
(14, 6, 2, 'advanced web', 'Present', 1, '2020-02-17'),
(15, 6, 1, 'Advanced web', 'Present', 1, '2020-03-02'),
(16, 7, 1, 'Advanced web', 'Present', 1, '2019-09-24'),
(17, 7, 2, 'Advanced  web', 'Absent', 0, '2019-09-24'),
(18, 8, 3, 'Semantic Data', 'Absent', 0, '2019-09-24'),
(19, 8, 2, 'Semantic Data', 'Present', 1, '2019-09-24'),
(20, 9, 1, 'Big Data', 'Absent', 0, '2020-01-27'),
(21, 2, 3, 'Research m', 'Present', 1, '2020-03-12'),
(22, 9, 2, 'Big Data', 'Present', 1, '2020-03-12'),
(24, 10, 1, 'Security', 'Present', 1, '2020-03-12'),
(25, 11, 1, 'Security', 'Present', 1, '2020-02-17'),
(26, 11, 2, 'Security', 'Present', 1, '2020-02-14'),
(29, 7, 3, 'Advanced web ', 'Present', 1, '2020-02-19'),
(30, 12, 1, 'AWS module', 'Present', 1, '2020-02-26'),
(31, 12, 2, 'AWS class', 'Present', 1, '2020-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_Id` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Time_In` time NOT NULL,
  `Time_Out` time NOT NULL,
  `BuildingName` varchar(50) NOT NULL,
  `Room_Id` int(10) NOT NULL,
  `Module_Id` int(10) NOT NULL,
  `ID` int(10) NOT NULL,
  `Week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_Id`, `Date`, `Time_In`, `Time_Out`, `BuildingName`, `Room_Id`, `Module_Id`, `ID`, `Week`) VALUES
(2, '2020-03-31', '10:00:00', '12:00:00', 'Coslet', 4, 1, 1, 1),
(3, '2020-02-17', '14:00:00', '16:00:00', 'Science Centre', 1, 2, 2, 2),
(4, '2020-02-13', '10:00:00', '12:00:00', 'Coslet', 4, 1, 1, 3),
(5, '2020-02-10', '14:00:00', '16:00:00', 'Science Centre', 1, 2, 2, 4),
(6, '2020-02-17', '11:00:00', '13:00:00', 'Coslet', 4, 2, 1, 5),
(7, '2020-03-02', '14:00:00', '16:00:00', 'Science Centre', 1, 2, 2, 6),
(8, '2019-09-24', '11:14:54', '12:14:54', 'Science Centre', 1, 3, 1, 7),
(9, '2020-01-27', '09:14:54', '11:14:54', 'Science Centre', 1, 4, 2, 8),
(10, '2020-03-12', '13:00:00', '14:00:00', 'Lab', 2, 5, 2, 9),
(11, '2020-03-12', '14:00:00', '16:00:00', 'Science Centre', 5, 5, 1, 10),
(12, '2020-02-17', '09:00:00', '11:00:00', 'Science Centre', 1, 2, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `class_type`
--

CREATE TABLE `class_type` (
  `ID` int(10) NOT NULL,
  `ClassSession` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_type`
--

INSERT INTO `class_type` (`ID`, `ClassSession`) VALUES
(1, 'Theorical'),
(2, 'Practical');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `Lecturer_Id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Mobile_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`Lecturer_Id`, `FirstName`, `LastName`, `UserName`, `Password`, `Email`, `Address`, `Department`, `Mobile_number`) VALUES
(1, 'Fatima', 'Arooj', 'fa200', '5f4dcc3b5aa765d61d8327deb882cf99', 'fatima.arooj@anglia.uk', 'CB1 ', 'Computer Science', 751055529),
(2, 'Cristina ', 'Luca', 'cl201', '5f4dcc3b5aa765d61d8327deb882cf99', 'cristina.luca@anglia.uk', 'CB1', 'Computer Science', 751055529),
(3, 'Jin ', 'Zang', 'jz202', '5f4dcc3b5aa765d61d8327deb882cf99', 'jinz.zang@anglia.uk', 'CB1', 'Electonic', 751055524),
(4, 'Lidia', 'Santos', 'ls203', '5f4dcc3b5aa765d61d8327deb882cf99', 'lidia.santos@anglia.ac.uk', 'CB5 2ZN', 'Security', 751055527),
(5, 'Andrew', 'Silver', 'oliver', '5f4dcc3b5aa765d61d8327deb882cf99', 'oliver.silver@anglia.ac.uk', 'CB2', 'Arts', 751055556),
(678, 'lol', 'lolol', 'lol123', 'QWERTY123', 'lol@lol.com', 'hagshasga', 'lolli', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_module`
--

CREATE TABLE `lecturer_module` (
  `Lecturer_Id` int(10) NOT NULL,
  `Module_Id` int(10) NOT NULL,
  `NumberOfStudent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_module`
--

INSERT INTO `lecturer_module` (`Lecturer_Id`, `Module_Id`, `NumberOfStudent`) VALUES
(1, 2, 30),
(2, 2, 50),
(3, 1, 90),
(1, 3, 60),
(4, 5, 80),
(4, 4, 50);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Manager_Id` int(10) NOT NULL,
  `Lecturer_Id` int(10) NOT NULL,
  `Module_Id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Manager_Id`, `Lecturer_Id`, `Module_Id`, `FirstName`, `LastName`) VALUES
(1, 2, 2, 'Cristina ', 'Luca'),
(2, 3, 1, 'Jin', 'Zang');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `Module_Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Trimester` varchar(50) NOT NULL,
  `Total_hours` time NOT NULL,
  `Enrolled_Number` int(10) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`Module_Id`, `Name`, `Trimester`, `Total_hours`, `Enrolled_Number`, `Start_Date`, `End_Date`) VALUES
(1, 'Research Methodology', 'Second trimester', '40:00:00', 90, '2020-01-23', '2020-04-23'),
(2, 'Advanced Web Solutions', 'Second trimester', '60:00:00', 50, '2020-01-20', '2020-04-20'),
(3, 'Semantic Data Technology', 'First trimester', '40:50:38', 60, '2019-09-24', '2019-12-10'),
(4, 'Big Data', 'First trimester', '40:50:38', 40, '2019-09-23', '2019-12-09'),
(5, 'Advanced Security', 'Second trimester', '30:04:03', 80, '2020-01-23', '2020-04-23'),
(6, 'maths', '', '30:09:24', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_Id` int(10) NOT NULL,
  `Room_Capacity` int(20) NOT NULL,
  `BuildingName` varchar(50) NOT NULL,
  `RoomNumber` int(20) NOT NULL,
  `RoomDescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_Id`, `Room_Capacity`, `BuildingName`, `RoomNumber`, `RoomDescription`) VALUES
(1, 20, 'Science Centre', 504, 'good'),
(2, 25, 'Lab', 105, 'Cool'),
(3, 25, 'Lab', 106, 'Cool'),
(4, 100, 'Coslet', 124, 'Huge'),
(5, 25, 'Science Centre', 305, 'IT Room'),
(34, 789, 'MANNA', 567, 'EXTRASs');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_number` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `FirstName`, `LastName`, `UserName`, `Password`, `Email`, `Mobile_number`, `Address`) VALUES
(1, 'Ann', 'Laww', 'al100', '5f4dcc3b5aa765d61d8327deb882cf99', 'annlaww@anglia.uk', '7510555294', 'Cb1'),
(2, 'Peter', 'Abs', 'pa101', '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19', 'peterabs@anglia.uk', '0789809787', 'Cb2'),
(3, 'Sophie', 'Trump', 'st103', '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19', 'sophie-trump@anglia.uk', '0756435623', 'cb3'),
(4, 'MANNA', 'Christian', 'manna34', '51a3a97d3d19cdc72ddef058c596e4cd', 'gaffor@yahoo.com', '0751055529', 'VBT'),
(9, 'MANNA', 'manna', 'JHKH567', '754d294c47e0cf1f775559da4067425b', 'manna@yahoo.com', '0751055529', 'BNH'),
(11, 'MANNA', 'Christian', 'manna', '51a3a97d3d19cdc72ddef058c596e4cd', 'kilo@gmail.com', '980823432', 'cb12');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `Class_Id` int(10) NOT NULL,
  `Student_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`Class_Id`, `Student_Id`) VALUES
(2, 1),
(3, 2),
(4, 1),
(5, 3),
(6, 2),
(6, 1),
(7, 1),
(7, 2),
(8, 3),
(8, 2),
(9, 1),
(2, 3),
(9, 2),
(9, 3),
(10, 1),
(11, 1),
(11, 2),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_module`
--

CREATE TABLE `student_module` (
  `Student_Id` int(10) NOT NULL,
  `Module_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_module`
--

INSERT INTO `student_module` (`Student_Id`, `Module_Id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 1),
(2, 2),
(3, 3),
(3, 4),
(1, 5),
(2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Attendance_Id`),
  ADD KEY `Class_Id` (`Class_Id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_Id`),
  ADD KEY `Room_Id` (`Room_Id`),
  ADD KEY `Module_Id` (`Module_Id`),
  ADD KEY `IDclassType` (`ID`);

--
-- Indexes for table `class_type`
--
ALTER TABLE `class_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`Lecturer_Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `lecturer_module`
--
ALTER TABLE `lecturer_module`
  ADD KEY `Lecturer_Id` (`Lecturer_Id`),
  ADD KEY `Module_Id` (`Module_Id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Manager_Id`),
  ADD KEY `Lecturer_Id` (`Lecturer_Id`),
  ADD KEY `Module_Id` (`Module_Id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`Module_Id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD KEY `Class_Id` (`Class_Id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `student_module`
--
ALTER TABLE `student_module`
  ADD KEY `Module_Id` (`Module_Id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `Admin_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Attendance_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Class_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `class_type`
--
ALTER TABLE `class_type`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `Lecturer_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=679;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `Manager_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `Module_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=679;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Class_Id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`Room_Id`) REFERENCES `room` (`Room_Id`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`Module_Id`) REFERENCES `modules` (`Module_Id`),
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `class_type` (`ID`);

--
-- Constraints for table `lecturer_module`
--
ALTER TABLE `lecturer_module`
  ADD CONSTRAINT `lecturer_module_ibfk_1` FOREIGN KEY (`Lecturer_Id`) REFERENCES `lecturer` (`Lecturer_Id`),
  ADD CONSTRAINT `lecturer_module_ibfk_2` FOREIGN KEY (`Module_Id`) REFERENCES `modules` (`Module_Id`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`Lecturer_Id`) REFERENCES `lecturer` (`Lecturer_Id`),
  ADD CONSTRAINT `manager_ibfk_2` FOREIGN KEY (`Module_Id`) REFERENCES `modules` (`Module_Id`);

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`),
  ADD CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Class_Id`);

--
-- Constraints for table `student_module`
--
ALTER TABLE `student_module`
  ADD CONSTRAINT `student_module_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`),
  ADD CONSTRAINT `student_module_ibfk_2` FOREIGN KEY (`Module_Id`) REFERENCES `modules` (`Module_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
