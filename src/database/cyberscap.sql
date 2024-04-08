-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2024 at 03:15 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staph`
--

-- --------------------------------------------------------

--
-- Table structure for table `Applications`
--

CREATE TABLE `Applications` (
  `ApplicationID` int(11) NOT NULL,
  `JobID` int(11) DEFAULT NULL,
  `SeekerID` int(11) DEFAULT NULL,
  `ProviderID` int(11) NOT NULL,
  `Status` enum('Applied','Rejected','Selected') DEFAULT 'Applied',
  `AppliedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Applications`
--

INSERT INTO `Applications` (`ApplicationID`, `JobID`, `SeekerID`, `ProviderID`, `Status`, `AppliedDate`) VALUES
(2, 3, 12, 14, 'Applied', '2024-03-28 14:54:47'),
(3, 4, 16, 15, 'Selected', '2024-03-29 11:11:04'),
(4, 3, 17, 14, 'Selected', '2024-03-30 21:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `Interviews`
--

CREATE TABLE `Interviews` (
  `InterviewID` int(11) NOT NULL,
  `ApplicationID` int(11) DEFAULT NULL,
  `ProviderID` int(11) NOT NULL,
  `InterviewDate` datetime DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Interviews`
--

INSERT INTO `Interviews` (`InterviewID`, `ApplicationID`, `ProviderID`, `InterviewDate`, `Location`, `Notes`) VALUES
(1, 2, 14, '2024-03-31 16:00:00', 'https://zoom.us/j/5551112222', NULL),
(2, 4, 14, '2024-04-02 03:40:00', 'https://zoom.us/j/5551112222', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Jobs`
--

CREATE TABLE `Jobs` (
  `JobID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Description` text,
  `Amount` decimal(15,0) NOT NULL DEFAULT '0',
  `JobType` enum('Part Time','Full Time','Contract','Remote') NOT NULL DEFAULT 'Remote',
  `Status` enum('Open','Closed') DEFAULT 'Open',
  `ProviderID` int(11) DEFAULT NULL,
  `PostDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Jobs`
--

INSERT INTO `Jobs` (`JobID`, `Title`, `Description`, `Amount`, `JobType`, `Status`, `ProviderID`, `PostDate`) VALUES
(2, 'Software Developer', 'Software developers create the computer applications that allow users to do specific tasks and the underlying systems that run the devices or control networks. Software quality assurance analysts and testers design and execute software tests to identify problems and learn how the software works.', '50000', 'Full Time', 'Open', 13, '2024-03-27 09:50:04'),
(3, 'AI Engineer', 'Artificial intelligence engineers are individuals who use AI and machine learning techniques to develop applications and systems that can help organizations increase efficiency, cut costs, increase profits, and make better business decisions.', '130000', 'Remote', 'Open', 14, '2024-03-28 03:35:31'),
(4, 'Senior Full Stack Software Engineer', 'A full stack software engineer develops all aspects of a software application, from the user interface to the back-end database. As a full stack software engineer, your job duties include gathering customer requirements, writing the code to develop the application, and troubleshooting the application for any issues.', '76000', 'Part Time', 'Open', 15, '2024-03-28 03:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `Notifications`
--

CREATE TABLE `Notifications` (
  `ID` bigint(20) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IsRead` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Notifications`
--

INSERT INTO `Notifications` (`ID`, `Title`, `Description`, `UserID`, `IsRead`) VALUES
(1, 'Application #2 Status Update', 'Hello! Your application status has been updated to <b>Selected</b>!', 12, 1),
(2, 'Your Interview Scheduled', 'Hello! Your interview has been scheduled for 2024-03-31T16:00 at https://zoom.us/j/5551112222 By Google!', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Profiles`
--

CREATE TABLE `Profiles` (
  `ProfileID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `Resume` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(3, 'Job Provider'),
(2, 'Seeker');

-- --------------------------------------------------------

--
-- Table structure for table `SavedJobs`
--

CREATE TABLE `SavedJobs` (
  `SavedJobID` int(11) NOT NULL,
  `JobID` int(11) DEFAULT NULL,
  `SeekerID` int(11) DEFAULT NULL,
  `SavedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `RoleID` int(11) DEFAULT NULL,
  `Cv_Url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserID`, `Name`, `Username`, `Password`, `Email`, `RoleID`, `Cv_Url`) VALUES
(7, 'Akalanka Ekanayake', 'Admin', 'a17585180d4d87fb9488a8714f9723eaef28ca7f', 'admin@admin.com', 1, NULL),
(12, 'Shan User ', 'Seeker', 'a17585180d4d87fb9488a8714f9723eaef28ca7f', 'seeker@admin.com', 2, 'cv_uploads/faf221f332fcae7e6e2e7086e2c006d029a46026_cv1.pdf'),
(13, 'Job Provider', 'Provider', 'a17585180d4d87fb9488a8714f9723eaef28ca7f', 'provider@admin.com', 3, NULL),
(14, 'Google', 'Google', 'a17585180d4d87fb9488a8714f9723eaef28ca7f', 'google@admin.com', 3, NULL),
(15, 'Spotify ', 'Spotify', 'a17585180d4d87fb9488a8714f9723eaef28ca7f', 'spotify@admin.com', 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Applications`
--
ALTER TABLE `Applications`
  ADD PRIMARY KEY (`ApplicationID`),
  ADD KEY `JobID` (`JobID`),
  ADD KEY `SeekerID` (`SeekerID`);

--
-- Indexes for table `Interviews`
--
ALTER TABLE `Interviews`
  ADD PRIMARY KEY (`InterviewID`),
  ADD KEY `ApplicationID` (`ApplicationID`);

--
-- Indexes for table `Jobs`
--
ALTER TABLE `Jobs`
  ADD PRIMARY KEY (`JobID`),
  ADD KEY `ProviderID` (`ProviderID`);

--
-- Indexes for table `Notifications`
--
ALTER TABLE `Notifications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Profiles`
--
ALTER TABLE `Profiles`
  ADD PRIMARY KEY (`ProfileID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`RoleID`),
  ADD UNIQUE KEY `RoleName` (`RoleName`);

--
-- Indexes for table `SavedJobs`
--
ALTER TABLE `SavedJobs`
  ADD PRIMARY KEY (`SavedJobID`),
  ADD KEY `JobID` (`JobID`),
  ADD KEY `SeekerID` (`SeekerID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `RoleID` (`RoleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Applications`
--
ALTER TABLE `Applications`
  MODIFY `ApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Interviews`
--
ALTER TABLE `Interviews`
  MODIFY `InterviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Jobs`
--
ALTER TABLE `Jobs`
  MODIFY `JobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Notifications`
--
ALTER TABLE `Notifications`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Profiles`
--
ALTER TABLE `Profiles`
  MODIFY `ProfileID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `SavedJobs`
--
ALTER TABLE `SavedJobs`
  MODIFY `SavedJobID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Applications`
--
ALTER TABLE `Applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`JobID`) REFERENCES `Jobs` (`JobID`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`SeekerID`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Interviews`
--
ALTER TABLE `Interviews`
  ADD CONSTRAINT `interviews_ibfk_1` FOREIGN KEY (`ApplicationID`) REFERENCES `Applications` (`ApplicationID`);

--
-- Constraints for table `Jobs`
--
ALTER TABLE `Jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`ProviderID`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Profiles`
--
ALTER TABLE `Profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `SavedJobs`
--
ALTER TABLE `SavedJobs`
  ADD CONSTRAINT `savedjobs_ibfk_1` FOREIGN KEY (`JobID`) REFERENCES `Jobs` (`JobID`),
  ADD CONSTRAINT `savedjobs_ibfk_2` FOREIGN KEY (`SeekerID`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `Roles` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
