-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 11:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regpersonal`
--

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `IID` int(10) NOT NULL,
  `IPNUM` varchar(20) NOT NULL,
  `FIRSTNAME` text NOT NULL,
  `LASTNAME` text NOT NULL,
  `DOB` date NOT NULL,
  `GENDER` text NOT NULL,
  `ADDRESSLINE1` varchar(20) NOT NULL,
  `ADDRESSLINE2` varchar(20) NOT NULL,
  `CITY` varchar(10) NOT NULL,
  `PROVINCE` varchar(10) NOT NULL,
  `POSTALCODE` varchar(10) NOT NULL,
  `MOBILENUMBER` varchar(10) NOT NULL,
  `HOME` varchar(10) NOT NULL,
  `INSURANCEPLAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`IID`, `IPNUM`, `FIRSTNAME`, `LASTNAME`, `DOB`, `GENDER`, `ADDRESSLINE1`, `ADDRESSLINE2`, `CITY`, `PROVINCE`, `POSTALCODE`, `MOBILENUMBER`, `HOME`, `INSURANCEPLAN`) VALUES
(1, '1234', 'anuja', 'piyumal', '2001-01-09', 'male', 'wekotuwawatta', 'hakurukumbura', 'mirigama', 'western', '11200', '0760918810', '0332275117', 'premium'),
(2, '5678', 'pasindu', 'kaushan', '2000-10-20', 'male', 'thilinagama', 'rajadahana', 'mirigama', 'western', '11209', '0708213456', '0332275747', 'basic'),
(3, '9012', 'Kavindi', 'thathsarani', '1999-11-27', 'female', 'hospital road', 'karapitiya', 'galle', 'southern', '12000', '0713487123', '0354678222', 'standard');

-- --------------------------------------------------------

--
-- Table structure for table `claim3`
--

CREATE TABLE `claim3` (
  `i_date` date NOT NULL,
  `idate1` varchar(100) NOT NULL,
  `h_date1` varchar(100) NOT NULL,
  `h_date2` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim3`
--

INSERT INTO `claim3` (`i_date`, `idate1`, `h_date1`, `h_date2`, `info`) VALUES
('2020-10-06', '2020/10/12-2020/10/20', '2020/10/12', '2020/10/16', '               diabetic'),
('2020-10-14', '2020/10/12-2020/10/20', '2020/10/13', '2020/10/16', '               headache'),
('2020-10-08', '2020/10/12-2020/10/20', '2020/10/15', '2020/10/16', '          Gasritis'),
('2020-10-07', '2020/10/12-2020/10/20', '2020/10/17', '2020/10/16', '               accident');

-- --------------------------------------------------------

--
-- Table structure for table `claim4`
--

CREATE TABLE `claim4` (
  `acnum` int(11) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `t_charge` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim4`
--

INSERT INTO `claim4` (`acnum`, `bank`, `t_charge`, `amount`, `balance`, `info`) VALUES
(773535700, 'Commercial Bank of Ceylon PLC', 1000000, 250000, 750000, '    Nawaloka hospital,gampaha'),
(773535709, 'Commercial Bank of Ceylon PLC', 100000, 25000, 75000, '          HEMAS hospital,gampaha'),
(773535734, 'Sampath Bank PLC', 1000000, 250000, 750000, '    Nawaloka hospital,gampaha'),
(773535767, 'Bank of Ceylon', 1000000, 250000, 750000, '    Arogya hospital,gampaha'),
(773535787, 'Bank of Ceylon', 1000000, 250000, 750000, '    Arogya hospital,gampaha'),
(773535789, 'Bank of Ceylon', 1000000, 250000, 750000, '    Arogya hospital,gampaha');

-- --------------------------------------------------------

--
-- Table structure for table `claimperson`
--

CREATE TABLE `claimperson` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `street1` varchar(200) NOT NULL,
  `street2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `pcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dates` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `st2` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `p_code` int(11) NOT NULL,
  `ptnumber` varchar(20) NOT NULL,
  `stad` varchar(20) NOT NULL,
  `paitientsrel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`firstname`, `lastname`, `dates`, `gender`, `street_address`, `st2`, `city`, `p_code`, `ptnumber`, `stad`, `paitientsrel`) VALUES
('', '', '0000-00-00', '', '', '', '', 0, '', '', ''),
('anuja ', 'hashintha', '1999-05-22', 'female', 'no:15/17, biyagama', 'no:15/17, biyagama', 'gampaha', 10147989, '0725475681', 'no:15/17, biyagama', 'child'),
('chamara', 'desha', '1997-02-22', 'male', 'no:1,deshatha uyana', 'no:1,deshatha uyana', 'gampaha', 10052465, '0712545712', 'no:1,deshatha uyana', 'sponse'),
('chethine', 'theeshana', '1999-05-22', 'male', 'no:101smarathilake road ,gampaha', 'no:101smarathilake road ,gampaha', 'gampaha', 101546, '0712545612', 'no:101smarathilake r', 'self'),
('Kasun', 'Priyashan', '1999-05-22', 'male', 'no:15/17,indurugall,wathurugama', 'no:15/17,indurugall,wathurugama', 'gampaha', 1014571, '0724578564', 'no:15/17,indurugall,', 'other'),
('kawmadhi', 'desha', '1999-08-18', 'female', 'no:20/1, yakkala', 'no:20/1, yakkala', 'gampaha', 111024, '07254701245', 'no:20/1, yakkala', 'child'),
('sagara', 'kimuthu', '1996-02-22', 'male', 'no:15/1,wathurugama', 'no:15/1,wathurugama', 'gampaha', 100214, '0712546789', 'no:15/1,wathurugama', 'self'),
('supuma', 'hashintha', '1999-05-22', 'female', 'no:20/1, malabe', 'no:20/1, malabe', 'kaduwela', 101441545, '0725471478', 'no:20/1, malabe', 'self');

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`Name`, `Email`) VALUES
('Iresh chaminda', 'ireshc67@gmail.com'),
('Kasun priyashan', 'kasunpri99@gmail.com'),
('anuja piyumal', 'piumalanuja17@gmail.com'),
('Tharindu deshan', 'thari2020@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `faname` varchar(20) NOT NULL,
  `fame` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massages` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`faname`, `fame`, `email`, `massages`) VALUES
('Kasun', 'Priyashan', 'kpriyashan304@gmail.', 'fsffs'),
('Kasun', 'Priyashan', 'kpriyashan304@gmail.com', 'fsffs'),
('Kasun', 'Priyashan', 'kpriyashan304@gmail.com', 'fsffs'),
('selmal', 'samtikia', 'tikira@gmail.com', 'good'),
('tamira', 'sam ika', 'asdda@gmail.com', 'welldone'),
('aaaasad', 'dsd', 'kpriyashan304@gmail.com', 'dsdswdsd'),
('aaaasad', 'dsd', 'kpriyashan304@gmail.com', 'dsdswdsd'),
('dsfafs', 'dfvsxdf', 'sdzfvsxf@gmail.com', 'dfdfdfdf'),
('c ghfv', 'cvghvfhj', 'kpriyashan304@gmail.com', 'ghgvhv'),
('arft', 'sertfsde', 'kpriyashan304@gmail.com', ''),
('Kasun', 'Priyashan', 'kpriyashan304@gmail.com', 'hoda'),
('gdcrfgdcrghdr', 'xetgfdcg', 'kpriyashan304@gmail.com', 'gdcrgdcg'),
('Kasuncfg', 'Priyashanxdfg', 'kpriyashan304@gmail.com', 'gfdc'),
('chethine', 'chandrasiri', 'chethine@gmai.com', 'want a request');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `nic` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `street1` varchar(200) NOT NULL,
  `street2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `pcode` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `wagetype` varchar(200) NOT NULL,
  `worktype` varchar(110) NOT NULL,
  `selfincome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`nic`, `status`, `empname`, `street1`, `street2`, `city`, `province`, `pcode`, `mobile`, `home`, `salary`, `wagetype`, `worktype`, `selfincome`) VALUES
('200000909895', 'employed', 'Virtusa International', '1,Beach Road, ', 'Kollupitiya', 'Colombo', 'Western', 11999, 718989555, 112222222, 30000, 'monthly', '', 0),
('200100401207', 'employed', 'John Kells(PVT) Limited', 'No 1,Beach Road', 'Kollupitiya', 'Colombo', 'Western', 11000, 782356542, 112222222, 15000, 'monthly', '', 0),
('907552655v', 'selfemployed', '', '', '', '', '', 0, 0, 0, 15000, 'monthly', 'Owner of Automobile Work Shop', 10000),
('968808914v', 'employed', 'WSO2 Software Company', '33,Remand Road', 'Middle Town', 'Nuwara Eliya', 'Central', 12500, 765555555, 817878999, 250000, 'yearly', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`firstName`, `lastName`, `Email`, `MobileNo`, `FEEDBACK`) VALUES
('chanuka', 'nayanajith', 'chanuka0321@gmail.com', '715226008', 'beautiful'),
('iresh', 'chaminda', 'ireshc2020@gmail.com', '721376090', 'consultation is very good'),
('kasun', 'priyashan', 'kasunpri199@gmail.com', '713422099', 'superb'),
('Tharindu ', 'deshan', 'tharin20@gmail.com', '707773235', 'your service is good');

-- --------------------------------------------------------

--
-- Table structure for table `logdetails`
--

CREATE TABLE `logdetails` (
  `username` varchar(100) NOT NULL,
  `l_password` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `times1` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logdetails`
--

INSERT INTO `logdetails` (`username`, `l_password`, `dates`, `times1`) VALUES
('chamathrl@gmail.com', '11111111', '2020-10-22', '02:22:26'),
('pawan@gmail.com', 'srilanka', '2020-10-22', '02:28:02'),
('theeknew21@gmail.com', 'Hello123', '2020-10-22', '02:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `passwords` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `passwords`) VALUES
('XVBDB', 'DBDBD'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('cfgvhft', '4554756'),
(' fgs', 'sfegs546'),
('it124757', '1245648@sd'),
('it1545484', 'sde@1234'),
('it4098654', '@sda1234'),
('it234622', '21@sfdssf3'),
('it234633', '21Dafffvvv'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('kasun', 'kasun123'),
('kasun', 'kasun123'),
('kasun', 'kasun123'),
('kasun', 'dsdsdgfg');

-- --------------------------------------------------------

--
-- Table structure for table `medicalcondition`
--

CREATE TABLE `medicalcondition` (
  `nic` varchar(15) NOT NULL,
  `medical` varchar(200) NOT NULL,
  `medical2` varchar(20) NOT NULL,
  `medical3` varchar(20) NOT NULL,
  `medical4` varchar(20) NOT NULL,
  `medical5` varchar(20) NOT NULL,
  `tobaccouser` varchar(200) NOT NULL,
  `insurancetype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalcondition`
--

INSERT INTO `medicalcondition` (`nic`, `medical`, `medical2`, `medical3`, `medical4`, `medical5`, `tobaccouser`, `insurancetype`) VALUES
('200000909895', 'Yes', '', 'Yes', 'Yes', '', 'No', 'Standerd'),
('200100401207', 'Yes', 'Yes', '', 'Yes', '', 'No', 'standerd'),
('907552655v', 'Yes', '', '', 'Yes', '', 'No', 'premium'),
('968808914v', '', 'Yes', '', '', 'Yes', 'Yes', 'Standerd');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `street1` varchar(200) NOT NULL,
  `street2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `pcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`fname`, `lname`, `dob`, `gender`, `nic`, `email`, `home`, `mobile`, `street1`, `street2`, `city`, `province`, `pcode`) VALUES
('Anuja ', 'Piyumal', '2000-01-09', 'Male', '200000909895', 'anujapiyumal@gmail.com', 718965447, 112547899, '50,Garden Road', 'New Town', 'Mirigama', 'Western', 10111),
('Chethine', 'Liyanarachchi', '2001-01-04', 'Male', '200100401207', 'chethinell@gmail.com', 770805877, 332292702, 'No 47,Aluthgama,Bogamuwa', 'Kalagedihena', 'Gampaha', 'Western', 11875),
('Chamath', 'Liyanarachchi', '1990-05-21', 'Male', '907552655v', 'chamathrl@gmail.com', 716935200, 332290500, 'No 47/B,Aluthgama', 'Bogamuwa,Kalagedihena', 'Gampaha', 'Western', 11880),
('Dasuni', 'Madushani', '1996-08-24', 'Female', '968808914v', 'dasunimadushani@yahoo.com', 714400988, 814546855, '234/B,Hill Road', 'Hamangoda,Katugastota', 'Kandy', 'Centreal', 12569);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `NIC` int(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Birth` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `NICnumber` int(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobiletel` varchar(20) NOT NULL,
  `Hometel` varchar(20) NOT NULL,
  `Streetaddress1` varchar(20) NOT NULL,
  `Streetaddress2` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `Postalcode` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`NIC`, `FirstName`, `LastName`, `Birth`, `Gender`, `NICnumber`, `Email`, `Mobiletel`, `Hometel`, `Streetaddress1`, `Streetaddress2`, `City`, `Province`, `Postalcode`) VALUES
(0, '', '', '0000-00-00', 'Male', 0, '', '', '', '', '', '', '', 0),
(2000674857, 'Panchali', 'Senarathna', '2019-10-17', 'Female', 0, 'pancha2020@gmail.com', '0723321897', '037203010', 'flower road', 'matale', 'kandy', 'central', 50000),
(2001009025, 'anuja', 'piumal', '2020-04-07', 'Male', 0, 'anujapiumal17@gmail.', '0717004661', '0332275114', 'nalla road', 'mirigama', 'gampaha', 'western', 11200),
(2001234568, 'iresh', 'chaminda', '2020-10-07', 'Male', 0, 'chethinel12@gmail.co', '0713344764', '0332275678', 'bogamuva', 'yakkala', 'gampaha', 'western', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`) VALUES
('Chamath', 'chamathrl@gmail.com', '111111113'),
('Chethine', 'chethinell@gmail.com', '12345678'),
('Mick', 'micknew4@yahoo.com', 'hello'),
('Pawan', 'pawan@gmail.com', 'srilanka'),
('Theek', 'theeknew21@gmail.com', 'Hello123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `claim3`
--
ALTER TABLE `claim3`
  ADD PRIMARY KEY (`h_date1`);

--
-- Indexes for table `claim4`
--
ALTER TABLE `claim4`
  ADD PRIMARY KEY (`acnum`);

--
-- Indexes for table `claimperson`
--
ALTER TABLE `claimperson`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`firstname`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `logdetails`
--
ALTER TABLE `logdetails`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `medicalcondition`
--
ALTER TABLE `medicalcondition`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
