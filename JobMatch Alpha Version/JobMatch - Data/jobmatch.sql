-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:30 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobmatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_info`
--

CREATE TABLE `academic_info` (
  `ID` int(11) NOT NULL,
  `Institution` varchar(50) NOT NULL,
  `Qualification_Description` varchar(50) NOT NULL,
  `Qualification_Field` varchar(30) NOT NULL,
  `Start_Date` varchar(20) NOT NULL,
  `Completion_Date` varchar(20) NOT NULL,
  `Academic_Average` varchar(7) NOT NULL,
  `Grade_Scale` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(11) NOT NULL,
  `Company_Name` varchar(30) NOT NULL,
  `Company_Email` varchar(67) NOT NULL,
  `Company_Number` varchar(10) NOT NULL,
  `Company_Province` varchar(20) NOT NULL,
  `Company_Country` varchar(20) NOT NULL,
  `Company_City` varchar(15) NOT NULL,
  `Company_Website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `ID` int(11) NOT NULL,
  `Job_Title` varchar(34) NOT NULL,
  `Job_Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `ID` int(11) NOT NULL,
  `Major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `ID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Date_of_Birth` varchar(50) NOT NULL,
  `Id_Num` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Marital_Status` varchar(15) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Race` varchar(15) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`ID`, `Title`, `Name`, `Surname`, `Country`, `Date_of_Birth`, `Id_Num`, `Email`, `Marital_Status`, `Gender`, `Race`, `City`) VALUES
(6, 'Mr', 'Garfield', 'Carter', 'South Africa', '05-April-2018', '1234567890123', '', '', 'Male', 'Black', 'Durban'),
(8, 'Prof', 'Garfield', 'Cudi', 'South Africa', '16-Jan-1997', '1234567890144', 'Garfield@gmail.com', '', 'Male', 'Black', 'Jozi');

-- --------------------------------------------------------

--
-- Table structure for table `professional_experience`
--

CREATE TABLE `professional_experience` (
  `ID` int(11) NOT NULL,
  `Organisation` varchar(60) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Start_Date` varchar(20) NOT NULL,
  `End_Date` varchar(20) NOT NULL,
  `Type_of_Involvement` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `ID` int(11) NOT NULL,
  `Duty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Name`) VALUES
(6, 'john@gmail.com', 'man', 'John'),
(7, 'john1@gmail.com', 'man', 'JC'),
(8, 'Garfield@gmail.com', 'man', 'Garfield');

-- --------------------------------------------------------

--
-- Table structure for table `user_achievements`
--

CREATE TABLE `user_achievements` (
  `ID` int(11) NOT NULL,
  `Achievement_name` varchar(20) NOT NULL,
  `Achievement_Description` varchar(225) NOT NULL,
  `Year_Obtained` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_biographies`
--

CREATE TABLE `user_biographies` (
  `ID` int(11) NOT NULL,
  `User_Bio` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_interests`
--

CREATE TABLE `user_interests` (
  `ID` int(11) NOT NULL,
  `Interest` varchar(20) NOT NULL,
  `Club_Societies` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `ID` int(11) NOT NULL,
  `Skill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_info`
--
ALTER TABLE `academic_info`
  ADD KEY `academic_info_users_ID_fk` (`ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD KEY `job_postings_companies_ID_fk` (`ID`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD KEY `majors_academic_info_ID_fk` (`ID`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professional_experience`
--
ALTER TABLE `professional_experience`
  ADD KEY `professional_experience_users_ID_fk` (`ID`);

--
-- Indexes for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD KEY `responsibilities_professional_experience_ID_fk` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_achievements`
--
ALTER TABLE `user_achievements`
  ADD KEY `user_achievements_users_ID_fk` (`ID`);

--
-- Indexes for table `user_biographies`
--
ALTER TABLE `user_biographies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_interests`
--
ALTER TABLE `user_interests`
  ADD KEY `user_interests_users_ID_fk` (`ID`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD KEY `user_skill_users_ID_fk` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_info`
--
ALTER TABLE `academic_info`
  ADD CONSTRAINT `academic_info_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD CONSTRAINT `job_postings_companies_ID_fk` FOREIGN KEY (`ID`) REFERENCES `companies` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `majors`
--
ALTER TABLE `majors`
  ADD CONSTRAINT `majors_academic_info_ID_fk` FOREIGN KEY (`ID`) REFERENCES `academic_info` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professional_experience`
--
ALTER TABLE `professional_experience`
  ADD CONSTRAINT `professional_experience_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD CONSTRAINT `responsibilities_professional_experience_ID_fk` FOREIGN KEY (`ID`) REFERENCES `professional_experience` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_achievements`
--
ALTER TABLE `user_achievements`
  ADD CONSTRAINT `user_achievements_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_biographies`
--
ALTER TABLE `user_biographies`
  ADD CONSTRAINT `Biographies_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_interests`
--
ALTER TABLE `user_interests`
  ADD CONSTRAINT `user_interests_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `user_skill_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
