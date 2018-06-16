-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 05:35 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsurfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyqueue`
--

CREATE TABLE `applyqueue` (
  `SeekerID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JobID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applyqueue`
--

INSERT INTO `applyqueue` (`SeekerID`, `JobID`, `description`, `status`) VALUES
('SK0001', 'JB0001', 'Lorem ipsum dolor sit amet.', 'pending'),
('SK0001', 'JB0002', 'Because I\'m smart.', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ClientNPWP` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientPassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientPhone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientRate` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ClientNPWP`, `ClientName`, `TypeID`, `ClientAddress`, `ClientEmail`, `ClientPassword`, `ClientPhone`, `ClientDescription`, `ClientRate`, `remember_token`) VALUES
('00.000.000.0-000.001', 'Bryan Karunachandra', 'TP0002', 'Flamboyan, Alam Sutera', 'bryan@jobsurfer.com', '$2y$10$e/L54smi/5HNGCbn50AGOehjYwzrpGgB.i0o7.gZIUGJNg4yz137G', '081219936864', 'Lorem ipsum dolor sit amet, adi scua aqua.', 0, 'tnXlMrjvIQS3OqYM2MmTPBjp5fwuq21eWBq0ntmIsLndwxvDZnPp2kcKLdKb');

-- --------------------------------------------------------

--
-- Table structure for table `clienttype`
--

CREATE TABLE `clienttype` (
  `TypeID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clienttype`
--

INSERT INTO `clienttype` (`TypeID`, `TypeName`) VALUES
('TP0001', 'Company'),
('TP0002', 'Individual');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JobID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JobName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JobSalary` int(11) NOT NULL,
  `JobDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientNPWP` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JobID`, `JobName`, `JobSalary`, `JobDescription`, `ClientNPWP`, `StaffID`) VALUES
('JB0001', 'Ticketing System Designer', 10000000, 'Make ticketing system for football club.', '00.000.000.0-000.001', 'ST0001'),
('JB0002', 'Maker4Racer', 10000000, 'Make racing car using Maker\'s way.', '00.000.000.0-000.001', 'ST0001'),
('JB0003', 'Christmas Tree Designer', 1000000, 'Lorem ipsum dolor sit amet.', '00.000.000.0-000.001', 'ST0002');

-- --------------------------------------------------------

--
-- Table structure for table `jobskill`
--

CREATE TABLE `jobskill` (
  `SkillID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JobID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobskill`
--

INSERT INTO `jobskill` (`SkillID`, `JobID`) VALUES
('SL0004', 'JB0002'),
('SL0007', 'JB0001'),
('SL0007', 'JB0002');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2018_05_01_035829_create_clienttype_table', 1),
(20, '2018_05_31_123857_create_seeker_table', 1),
(21, '2018_05_31_124151_create_staff_table', 1),
(22, '2018_05_31_124511_create_client_table', 1),
(23, '2018_05_31_124526_create_skill_table', 1),
(24, '2018_05_31_124540_create_job_table', 1),
(25, '2018_05_31_125725_create_userskill_table', 1),
(26, '2018_05_31_132032_create_pengawasan_table', 1),
(27, '2018_06_01_125547_create_jobskill_table', 1),
(28, '2018_06_04_125748_create_applyqueue_tabble', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengawasan`
--

CREATE TABLE `pengawasan` (
  `StaffID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SuperviseeID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengawasan`
--

INSERT INTO `pengawasan` (`StaffID`, `SuperviseeID`) VALUES
('ST0001', 'ST0002'),
('ST0001', 'ST0003');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `SeekerID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeekerPhone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeekerEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeekerPassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeekerAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeekerGender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`SeekerID`, `fName`, `lName`, `SeekerPhone`, `remember_token`, `SeekerEmail`, `SeekerPassword`, `SeekerAddress`, `SeekerGender`) VALUES
('SK0001', 'Teguh Wibowo', 'Wijaya', '081219936864', 'Yso5Yxe61hpQNQxoJ64zlzgUYT8bqix8jyNqrUZvmDItzUxmz5OPTCVbzh2i', 'teguh@jobsurfer.com', '$2y$10$o3u.mfrNiaO9rGL.CLJjJOPQxYr1B92n6uzHbYRIUmNh1eiTiEIZy', 'Kutabumi', 'M'),
('SK0002', 'Albert', 'Winata', '081219936864', 'AZKkOQ16w6SNwUMlpkFPr1RWNcT95u78S50X9h4GQe5Oq0z8kHB6bwVTeCg0', 'albert@jobsurfer.com', '$2y$10$GIRMsKHTVLg.MNvH9l9TpONwrTcqJ/mGlmU4svyCS/mQtblCwTPQS', 'Poris', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `SkillID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SkillName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`SkillID`, `SkillName`) VALUES
('SL0001', 'IoT Programming'),
('SL0004', 'Racing'),
('SL0005', 'Mass Marketing'),
('SL0006', 'Public Speaking'),
('SL0007', 'Project Management'),
('SL0008', 'Project Announcer');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffPassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffPosition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffPassword`, `StaffName`, `StaffPosition`, `remember_token`) VALUES
('ST0001', '$2y$10$7PmwIGnw9kJH/4SM8mG1C.nChZAyYr79nFgUi7Y1m.5vDDsNK4YF2', 'Giovanni Dejan', 'Manajer', 'bo9oB06XViw5WrmFjRALzuHjVCCaxwGogz5nliELigsF8UbP08lH41TYXuJz'),
('ST0002', '$2y$10$18JJrx59s0pm/GrLs/iEAOcAZeJ4DYHFE0in6hBD7yBWYsNz5fIxm', 'Vincent Tansol', 'Officer', NULL),
('ST0003', '$2y$10$0R4NdxwLGH2.d1b17WuQGeJVhvnVWoMuPvz8I2oleSv/3.Qfn68gy', 'Imam', 'Officer', NULL),
('ST0004', '$2y$10$2QVMNfEjzItnC2U.PmiwH.ujj8fBm3n7xVgNcDhMD0BtHSl64QBeu', 'Bla Bla Bla', 'Officer', 'BcH3C0hQvANTBYke0uwbWTBCVk4pYHyOxg3Nqxeq2hg9ofaPPAINGeffssx2');

-- --------------------------------------------------------

--
-- Table structure for table `userskill`
--

CREATE TABLE `userskill` (
  `SeekerID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SkillID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CertificationDate` date DEFAULT NULL,
  `SkillLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyqueue`
--
ALTER TABLE `applyqueue`
  ADD PRIMARY KEY (`SeekerID`,`JobID`),
  ADD KEY `applyqueue_jobid_foreign` (`JobID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ClientNPWP`),
  ADD UNIQUE KEY `client_clientemail_unique` (`ClientEmail`),
  ADD KEY `client_typeid_foreign` (`TypeID`);

--
-- Indexes for table `clienttype`
--
ALTER TABLE `clienttype`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JobID`),
  ADD KEY `job_clientnpwp_foreign` (`ClientNPWP`),
  ADD KEY `job_staffid_foreign` (`StaffID`);

--
-- Indexes for table `jobskill`
--
ALTER TABLE `jobskill`
  ADD PRIMARY KEY (`SkillID`,`JobID`),
  ADD KEY `jobskill_jobid_foreign` (`JobID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD PRIMARY KEY (`StaffID`,`SuperviseeID`),
  ADD KEY `pengawasan_superviseeid_foreign` (`SuperviseeID`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`SeekerID`),
  ADD UNIQUE KEY `seeker_seekeremail_unique` (`SeekerEmail`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`SkillID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `userskill`
--
ALTER TABLE `userskill`
  ADD PRIMARY KEY (`SeekerID`,`SkillID`),
  ADD KEY `userskill_skillid_foreign` (`SkillID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applyqueue`
--
ALTER TABLE `applyqueue`
  ADD CONSTRAINT `applyqueue_jobid_foreign` FOREIGN KEY (`JobID`) REFERENCES `job` (`JobID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applyqueue_seekerid_foreign` FOREIGN KEY (`SeekerID`) REFERENCES `seeker` (`SeekerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_typeid_foreign` FOREIGN KEY (`TypeID`) REFERENCES `clienttype` (`TypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_clientnpwp_foreign` FOREIGN KEY (`ClientNPWP`) REFERENCES `client` (`ClientNPWP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_staffid_foreign` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobskill`
--
ALTER TABLE `jobskill`
  ADD CONSTRAINT `jobskill_jobid_foreign` FOREIGN KEY (`JobID`) REFERENCES `job` (`JobID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobskill_skillid_foreign` FOREIGN KEY (`SkillID`) REFERENCES `skill` (`SkillID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD CONSTRAINT `pengawasan_staffid_foreign` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengawasan_superviseeid_foreign` FOREIGN KEY (`SuperviseeID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userskill`
--
ALTER TABLE `userskill`
  ADD CONSTRAINT `userskill_seekerid_foreign` FOREIGN KEY (`SeekerID`) REFERENCES `seeker` (`SeekerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userskill_skillid_foreign` FOREIGN KEY (`SkillID`) REFERENCES `skill` (`SkillID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
