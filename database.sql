-- CSI 2520 - Fall 2016
-- Final Group Project
-- Group members:
--     Stephanie Gorham
--     Kelly Kurkowski
--     Keenan McCloskey
--     Dan Wilmot
--
-- phpMyAdmin SQL Dump
-- version 4.0.9deb1.lucid~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 10:11 PM
-- Server version: 5.5.52-0ubuntu0.12.04.1-log
-- PHP Version: 5.3.10-1ubuntu3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kkurkowski`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE IF NOT EXISTS `Employees` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL COMMENT 'Employee Name',
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Availability` varchar(50) NOT NULL,
  `Skill1` varchar(50) NOT NULL COMMENT 'Skill #1',
  `Skill1Exp` varchar(50) NOT NULL COMMENT 'Skill #1 Experience',
  `Skill2` varchar(50) NOT NULL COMMENT 'Skill #2',
  `Skill2Exp` varchar(50) NOT NULL COMMENT 'Skill #2 Experience',
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`EID`, `Name`, `Address`, `Phone`, `Email`, `Availability`, `Skill1`, `Skill1Exp`, `Skill2`, `Skill2Exp`) VALUES
(1, 'Kelly Kurkowski', '31490 Gloede', '2488402452', 'kkurkowski@oakland.edu', 'Soon', 'HTML', '3-5 years', 'CSS', '<1 year'),
(2, 'John Doe', '1234 Main St', '1234567890', 'jdoe@company.com', 'Soon', 'C++', '10+ years', 'Python', '5-10 years'),
(3, 'Harry Potter', '4 Privet Drive', '1112131415', 'hpotter@hogwarts.uk', 'Now', 'HTML', '<1 year', 'PHP', '<1 year'),
(4, 'Bertram Gilfoyle', '578 Hooli Ave', '7894565365', 'gilfoyle@piedpiper.com', 'Exploring', 'Python', '5-10 years', 'C++', '5-10 years'),
(5, 'Jon Snow', '1 Winterfell', '0001115569', 'jonsnow@thestarks.com', 'Exploring', 'C++', '<1 year', 'Java', '<1 year'),
(6, 'Bilbo Baggins', 'The Shire', '2221237890', 'secondbreakfast@hobbit.com', 'Exploring', 'Python', '5-10 years', 'HTML', '<1 year'),
(7, 'Ender Wiggin', '999 Spacestation', '0007896363', 'ewiggin@academy.com', 'Now', 'HTML', '<1 year', 'Java', '3-5 years'),
(8, 'Leslie Knope', '1 Liberty St', '5551239876', 'lknope@pawnee.gov', 'Soon', 'PHP', '5-10 years', 'CSS', '<1 year'),
(9, 'abc', ' centergrove', '1234567890', 'a@b.com', 'Now', 'C++', '<1 year', 'Java', '3-5 years');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Class1` varchar(7) NOT NULL,
  `Class2` varchar(7) NOT NULL,
  `Class3` varchar(7) NOT NULL,
  `Class4` varchar(7) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`SID`, `Name`, `Email`, `Major`, `Class1`, `Class2`, `Class3`, `Class4`) VALUES
(1, 'John Smith', 'jsmith@oakland.edu', 'Computer Science', 'CSE 280', 'CSE 252', '', ''),
(2, 'Harry Potter', 'hpotter@hogwarts.uk', 'Engineering', 'EGR 240', '', '', ''),
(3, 'Abe', 'theprez@us.gov', 'Information Technology', 'CIT 123', '', '', ''),
(4, 'Jimmy', 'jimmy@oakland.edu', 'Engineering', 'EGR 234', '', '', ''),
(5, 'Megan', 'meg@abc.com', 'Information Technology', 'CIT 567', '', '', ''),
(6, 'Sally', 'something@whatever.com', 'Communications', 'COM 124', 'COM 456', '', ''),
(7, 'Carol', 'carol@what.com', 'Computer Science', 'CSE 123', 'CSE 345', '', ''),
(8, 'Kelly', 'kellykurkowski@gmail.com', 'Computer Science', 'CSE 252', '', '', ''),
(9, 'Me', 'yourmom@yourhouse.com', 'Communications', 'COM 123', 'COM 569', '', ''),
(10, 'Qwert', 'asdfg@asdf.com', 'Engineering', 'EGR 123', '', '', ''),
(11, 'Peter Cottontail', 'carrothead@bunnytrail.com', 'Information Technology', 'CIT 456', 'CIT 367', 'CIT 256', 'CIT 111'),
(13, 'Kelly', 'kelly@kurkowski.com', 'Computer Science', 'CSE 252', '', '', ''),
(14, 'Stephanie Gorham', 'sagorham@oakland.edu', 'Information Technology', 'CIT 252', '', '', ''),
(15, 'Stephanie Gorham', 'sagorham@oakland.edu', 'Information Technology', 'CIT 230', 'CIT 252', 'CIT 247', 'COM 202'),
(16, 'Zeus', 'playa@athens.com', 'Communications', 'COM 345', '', '', ''),
(20, 'Dan', 'gmail@gmail.com', 'Communications', 'CIT 252', 'EGR 141', '', ''),
(25, 'abc', 'a@b.com', 'Computer Science', 'CSE 000', '', '', ''),
(26, 'ndnk', 'ndn@b.c', 'Communications', 'ksdjk', '', 'kqmk', ''),
(27, 'abc', 'a@b.com', 'Communications', '123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Tutors`
--

CREATE TABLE IF NOT EXISTS `Tutors` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Class1` varchar(7) NOT NULL,
  `Class2` varchar(7) NOT NULL,
  `Class3` varchar(7) NOT NULL,
  `Class4` varchar(7) NOT NULL,
  `Availability` varchar(255) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `Tutors`
--

INSERT INTO `Tutors` (`TID`, `Name`, `Email`, `Major`, `Class1`, `Class2`, `Class3`, `Class4`, `Availability`) VALUES
(1, 'Kelly Kurkowski', 'kkurkowski@oakland.edu', 'Computer Science', 'CSE 280', 'CSE 252', '', '', 'Saturday morning, Sunday afternoon'),
(2, 'Lady Gaga', 'rahrah@ahahah.com', 'Information Technology', 'CIT 252', '', '', '', 'Sunday'),
(3, 'Michael Scott', 'mscott@scranton.pa', 'Communications', 'COM 101', 'COM 201', '', '', 'Sunday at 5pm-6pm'),
(4, 'Daniel', 'dbwilmot@oakland.edu', 'Information Technology', 'CIT 252', 'CIT 254', 'CIT 280', '', 'Mon: 4pm-5pm\r\nTues: 4pm-6pm'),
(6, 'Bob', 'bob@google.com', 'Engineering', 'EGR123', 'EGR234', 'EGR345', 'EGR456', 'Monday night, Tuesday 5pm-7pm'),
(7, 'Donald Trump', 'Yuge@TheDon.com', 'Computer Science', 'CIT 252', '', '', '', 'Everyday'),
(8, 'Peter Griffin', 'peter@pawtucket.com', 'Information Technology', 'CIT 123', 'CIT 456', 'CIT 234', 'CIT 968', 'Monday-Friday, 6pm-8pm'),
(15, 'Stephanie Gorham', 'sagorham@oakland.edu', 'Information Technology', '', 'CIT 252', 'CIT 247', '', 'Tuesday and Thursday'),
(16, 'Stephanie Gorham', 'sagorham@oakland.edu', 'Information Technology', 'CIT 252', '', '', '', 'Tuesdays and Thursdays'),
(17, 'Stephanie Gorham', 'sagorham@oakland.edu', 'Information Technology', 'CIT 230', '', '', '', ''),
(21, 'ARGGG', 'kelly@ahhhhh.com', 'Computer Science', 'CSE 123', '', '', '', 'NEVER'),
(22, 'abc', 'a@b.com', 'Communications', 'cmc 123', '', '', '', 'tomo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('kkurkowski', 'abcd1234'),
('singh', 'a1b2c3d4'),
('oututors', 'abc123'),
('username', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
