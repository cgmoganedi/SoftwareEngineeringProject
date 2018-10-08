-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 05:26 PM
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

--
-- Dumping data for table `academic_info`
--

INSERT INTO `academic_info` (`ID`, `Institution`, `Qualification_Description`, `Qualification_Field`, `Start_Date`, `Completion_Date`, `Academic_Average`, `Grade_Scale`) VALUES
(6, 'Wits', 'BSc Mathematics', 'Mathematics', '2018-01-12', '2018-11-30', '56%', 'percentage'),
(10, 'Wits', 'Bsc Mathematics', 'Mathematics', '2018-01-12', '2018-11-30', '45%', 'percentage'),
(11, 'Uj', 'BSc Mathematics', 'Science', '2018-01-12', '2018-11-30', '20%', 'percentage'),
(13, 'UCT', 'BSc General', 'Documentaion', '2018-03-07', '2018-10-26', '50', 'Percentage');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`ID`, `Email`, `Name`, `Password`) VALUES
(1, 'google@gmail.com', 'Google', 'man'),
(2, 'microsoft@outlook.com', 'Microsoft', 'man'),
(3, 'mjomaneadmin@gmail.com', 'Mjomane Inc', 'mjo'),
(4, 'fnb@gmail.com', 'FNB', 'fnb'),
(6, 'sbibles@gmail.com', 'Sammy and Sons Bibles', 'sam');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `ID` int(11) NOT NULL,
  `Company_Name` varchar(30) NOT NULL,
  `Company_Email` varchar(67) NOT NULL,
  `Company_Number` varchar(10) NOT NULL,
  `Company_Province` varchar(20) NOT NULL,
  `Company_Country` varchar(20) NOT NULL,
  `Company_City` varchar(15) NOT NULL,
  `Company_Website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`ID`, `Company_Name`, `Company_Email`, `Company_Number`, `Company_Province`, `Company_Country`, `Company_City`, `Company_Website`) VALUES
(1, 'Google Maps', 'google@gmail.com', '0118902343', 'Namif', 'South Somalia', 'Mani', 'googlemaps.com'),
(2, 'Microsoft', 'microsoft@outlook.com', '1234567890', 'Nami', 'South Sudan', 'Mani', 'google.com'),
(3, 'mjo', 'mjomaneadmin@gmail.com', '1234567890', 'Nami', 'BRASIL', 'RIO', 'MJO.COM'),
(4, 'First Rand Banking', 'fnb@gmail.com', '0112567986', 'Manchester', 'Ghana', 'Jozi', 'fnb.co.za'),
(6, 'Sammy and Sons Bibles', 'sbibles@gmail.com', '0112567986', 'GP', 'Ghana', 'Somewhere', 'sb.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `ID` int(11) NOT NULL,
  `Job_Title` varchar(34) NOT NULL,
  `Job_Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_postings`
--

INSERT INTO `job_postings` (`ID`, `Job_Title`, `Job_Description`) VALUES
(1, 'Coder', 'The candidate will be making websites.\r\n\r\nSkills:\r\nCoding\r\nWriting\r\nPresenting\r\n\r\nEducation\r\nCandidate must have done one of the following:\r\nArts\r\nAnthropology\r\nHistory \r\nComputer Science\r\nHospitality studies'),
(1, 'Tea Person', 'We will pay you a million. We promise. This is not a prank. lol.'),
(2, 'Manager', 'We need people who did history and anthropology.'),
(6, 'Church Minister', 'Candidate must be good at documentation.');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `ID` int(11) NOT NULL,
  `Major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`ID`, `Major`) VALUES
(6, 'Computer Science'),
(10, 'Geography'),
(10, 'Psychology'),
(6, 'Mathematics'),
(6, 'Applied Mathematics'),
(6, 'Statistics'),
(10, 'Hospitality studies'),
(10, 'History'),
(11, 'Coding'),
(13, 'Documentation');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `Job` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL
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
(6, 'Ms', 'Sam', 'Cube', 'Nigeria', '2018-05-10', '1234567890123', 'sam@gmail.com', '', 'Male', 'White', 'Johannesburg'),
(8, 'Prof', 'Garfield', 'Cudi', 'South Africa', '16-Jan-1997', '1234567890144', 'Garfield@gmail.com', '', 'Male', 'Black', 'Jozi'),
(10, 'Mr', 'Jomo', 'Carter', 'South Afrika', '1996-12-04', '1234567890123', 'jomo@gmail.com', '', 'Male', 'Black', 'Diepkloof'),
(11, 'Mr', 'Mzulu', 'khula', 'South Afrika', '1996-12-04', '1234567890123', 'mzulu@gmail.com', '', 'Male', 'Black', 'Soweto'),
(12, 'Mr', 'love', 'more', 'South Africa', '12/5/2018', '1234567890123', 'love@gmail.com', '', 'Male', 'Black', 'Johannesburg'),
(13, 'Ms', 'Sam', 'Cube', 'Nigeria', '2018-05-10', '1234567890123', 'sam@gmail.com', '', 'Male', 'White', 'Johannesburg');

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
  `Type_of_Involvement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_experience`
--

INSERT INTO `professional_experience` (`ID`, `Organisation`, `Country`, `Position`, `Start_Date`, `End_Date`, `Type_of_Involvement`) VALUES
(6, 'Google', 'USA', '', '2018-12-14', '2020-01-05', 'Im not sur'),
(11, 'Google', 'USA', '', '2018-12-14', '2020-01-05', 'Im not sure'),
(13, ' ', 'Other', '', '2018-10-19', '2018-10-19', ' ');

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
(8, 'Garfield@gmail.com', 'man', 'Garfield'),
(10, 'jomo@gmail.com', 'cat', 'Jomo'),
(11, 'mzulu@gmail.com', 'mzulu', 'Mzulu'),
(12, 'love@gmail.com', 'love', 'love'),
(13, 'sam@gmail.com', 'sam', 'Sam');

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

--
-- Dumping data for table `user_biographies`
--

INSERT INTO `user_biographies` (`ID`, `User_Bio`) VALUES
(6, 'I am a great guy but have depression and anger issues. I work best on drugs and I love being with my pet beetle, jimi.'),
(11, 'I am a great guy but have depression and anger issues. I work best on drugs and I love being with my pet beetle, jimi.He likes cheetos. '),
(13, 'I am Sam and I like God and Hillsong is my favourite thing in the world');

-- --------------------------------------------------------

--
-- Table structure for table `user_interests`
--

CREATE TABLE `user_interests` (
  `ID` int(11) NOT NULL,
  `Interest` varchar(70) NOT NULL,
  `Club_Societies` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_interests`
--

INSERT INTO `user_interests` (`ID`, `Interest`, `Club_Societies`) VALUES
(6, 'Thinking about the universe', 'The Lonely Stoners Club'),
(11, 'Thinking about the universe and jimi', 'The Lonely Stoners Club');

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `ID` int(11) NOT NULL,
  `Skill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`ID`, `Skill`) VALUES
(6, 'Fighting insects and birds '),
(6, 'Coding'),
(8, 'Math'),
(6, 'presenting'),
(8, 'writing'),
(8, 'accounting'),
(7, 'eating'),
(11, 'Fighting.'),
(13, 'Documentation');

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
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
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
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD KEY `matches_job_postings_ID_fk` (`Job`),
  ADD KEY `matches_users_ID_fk` (`User`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_info`
--
ALTER TABLE `academic_info`
  ADD CONSTRAINT `academic_info_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_info`
--
ALTER TABLE `company_info`
  ADD CONSTRAINT `company_info_companies_ID_fk` FOREIGN KEY (`ID`) REFERENCES `companies` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD CONSTRAINT `job_postings_companies_ID_fk` FOREIGN KEY (`ID`) REFERENCES `companies` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `majors`
--
ALTER TABLE `majors`
  ADD CONSTRAINT `majors_users_ID_fk` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_job_postings_ID_fk` FOREIGN KEY (`Job`) REFERENCES `job_postings` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matches_users_ID_fk` FOREIGN KEY (`User`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
