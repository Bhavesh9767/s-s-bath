-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 25, 2020 at 07:54 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `ss_bath`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `appointment`
-- 

CREATE TABLE `appointment` (
  `app_no` int(100) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `eml` varchar(30) NOT NULL,
  `gndr` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `cnt` varchar(13) NOT NULL,
  `ill` varchar(50) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` varchar(30) NOT NULL,
  `req_date` date NOT NULL,
  `req_time` time NOT NULL,
  `app_status` varchar(30) NOT NULL,
  PRIMARY KEY  (`app_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `appointment`
-- 

INSERT INTO `appointment` (`app_no`, `name`, `eml`, `gndr`, `age`, `cnt`, `ill`, `app_date`, `app_time`, `req_date`, `req_time`, `app_status`) VALUES 
(1, 'rajesh', 'rajesh@gmail.com', 'Male', '51 to 60 year', '9658985647', 'no', '2020-08-24', '3 to 4 pm', '2020-08-23', '16:51:47', 'Appointment Book'),
(2, 'rajesh', 'rajesh@gmail.com', 'Male', '51 to 60 year', '9658985647', '', '2020-08-28', '11 to 12 am', '2020-08-23', '17:05:22', 'Appointment Book'),
(3, 'rajesh', 'rajesh@gmail.com', 'Male', '51 to 60 year', '9658985647', '', '2020-08-04', '2 to 3 pm', '2020-08-23', '17:06:53', 'Appointment Book'),
(4, 'ketan s patel', 'ketan@gmail.com', 'Female', '81 to 90 year', '9856859647', '', '2020-08-28', '3 to 4 pm', '2020-08-23', '17:47:35', 'Appointment Book');

-- --------------------------------------------------------

-- 
-- Table structure for table `registration`
-- 

CREATE TABLE `registration` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `eml` varchar(30) NOT NULL,
  `pass` text NOT NULL,
  `cnt` varchar(13) NOT NULL,
  `add` varchar(30) NOT NULL,
  `gndr` varchar(6) NOT NULL,
  `agr` varchar(13) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `eml` (`eml`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `registration`
-- 

INSERT INTO `registration` (`id`, `name`, `eml`, `pass`, `cnt`, `add`, `gndr`, `agr`) VALUES 
(1, 'bhavesh k patel', 'bhavesh88284@gmail.com', '105cc16c7e86611d3de2ecf3a7c2a842', '9714127892', '8/955 bhagat faliya', 'male', '21 to 30 year'),
(2, 'vishal', 'vishal@gmail.com', '290fe3d3fcf1846a545bc570b12df4c9', '9858746925', 'knkn', 'male', '81 to 90 year'),
(3, 'vishal', 'doctor@gmail.com', '66024d42ca78db4dbe133b31f70f8315', '9856745896', '15', 'male', '51 to 60 year'),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(5, 'vishal', 'd', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(6, 'ketan s patel', 'ketan@gmail.com', 'fa4abf9e312b44fbd0c846a87165b317', '9856859647', 'kknkjnkjn', 'female', '81 to 90 year'),
(7, 'rajesh', 'rajesh@gmail.com', '10ae8642323251b47e9c501ac2ff3613', '9658985647', 'tiskari', 'male', '51 to 60 year');
