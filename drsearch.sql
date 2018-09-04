-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 08:37 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbloodbank`
--

CREATE TABLE `addbloodbank` (
  `bloodbankID` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ave` int(20) NOT NULL,
  `bve` int(20) NOT NULL,
  `ove` int(20) NOT NULL,
  `abve` int(20) NOT NULL,
  `a1ve` int(20) NOT NULL,
  `b1ve` int(20) NOT NULL,
  `o1ve` int(20) NOT NULL,
  `ab1ve` int(20) NOT NULL,
  `bbg` varchar(20) NOT NULL,
  `contact` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbloodbank`
--

INSERT INTO `addbloodbank` (`bloodbankID`, `name`, `address`, `ave`, `bve`, `ove`, `abve`, `a1ve`, `b1ve`, `o1ve`, `ab1ve`, `bbg`, `contact`) VALUES
(1, 'Gene bloodbank', 'G Block Ground Floor,kantisikhara complex,Landmark:below geetanjalicollege for women,punjagutta\r\n', 20, 16, 20, 5, 3, 4, 5, 2, '2', '(91)-40-23403882'),
(3, 'Balanagar  bloodbank', '4-194/4,ferozguda,Landmark:Beside BBR Hospital,balanagar,\r\nhyderabad-India.', 18, 20, 18, 12, 6, 4, 10, 2, '3', '(91)-40-23774469'),
(5, 'Asia blood bank', 'shanti surabhi complex, AS rao nagar secunderabad-India', 60, 45, 60, 12, 5, 5, 16, 9, '4', '(91)-40-27162146'),
(4, 'Red Cross Blood Bank', 'HNO:1-1-79/A bhagyanagar Complex,RTC cross Roads \r\nHyderabad-India', 52, 39, 52, 15, 5, 7, 12, 4, '0', '(91)-40-27667500'),
(2, 'Balaji bloodbank', 'Ground Floor,SBI Bank,nalgonda X Road,Malakpet\r\nhyderabad-India.', 21, 16, 21, 12, 3, 4, 5, 2, '0', '(91)-40-64522406/24553406'),
(0, 'Janani voluntary bloodbank', 'HNO:9-1-63/3,secondfloor,assumption house, Millenium church.\r\nLandmark: oppsite OBC Bank\r\nS D Road\r\n', 20, 16, 20, 5, 3, 4, 5, 2, '2', '(91)-40-6560322');

-- --------------------------------------------------------

--
-- Table structure for table `adddiagonistics`
--

CREATE TABLE `adddiagonistics` (
  `diaogID` int(20) NOT NULL,
  `dianame` varchar(100) NOT NULL,
  `diafacility` varchar(20) NOT NULL,
  `diaservice` varchar(100) NOT NULL,
  `diaprice` varchar(50) NOT NULL,
  `dialocation` varchar(100) NOT NULL,
  `drate` varchar(20) NOT NULL,
  `prate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adddiagonistics`
--

INSERT INTO `adddiagonistics` (`diaogID`, `dianame`, `diafacility`, `diaservice`, `diaprice`, `dialocation`, `drate`, `prate`) VALUES
(2, 'vijaya diagonistics', '', 'ct scan, x-ray', 'good', 'Santosh nagar', '***', '****'),
(4, 'vijaya diagonistics', 'good', 'ct scan, x-ray', 'affordable', 'Santosh nagar', '***', '****1/2');

-- --------------------------------------------------------

--
-- Table structure for table `adddoctor`
--

CREATE TABLE `adddoctor` (
  `docID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `qualify` varchar(40) NOT NULL,
  `yearexp` varchar(15) NOT NULL,
  `success` varchar(20) NOT NULL,
  `fail` varchar(20) NOT NULL,
  `dtime1` varchar(25) NOT NULL,
  `dam` varchar(30) NOT NULL,
  `dtime2` varchar(25) NOT NULL,
  `dpm` varchar(30) NOT NULL,
  `dfee` varchar(30) NOT NULL,
  `dcontact` varchar(30) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `hoslocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adddoctor`
--

INSERT INTO `adddoctor` (`docID`, `name`, `specialisation`, `qualify`, `yearexp`, `success`, `fail`, `dtime1`, `dam`, `dtime2`, `dpm`, `dfee`, `dcontact`, `hospital`, `hoslocation`) VALUES
(1, 'chandrakanth reddy', 'Cardiologist             ', 'mbbs PHD cardiology', '10', '100', '2', '10:00', 'AM', '1:00', 'PM', '2800', '24341699', 'Apollo Hospitals', 'DMRL X Road,kanchan Bagh,santoshnagar,Hydeabad,Telangana 500258'),
(2, 'riya chakraborthy', 'Pulmonologist', 'mbbs pHD pulmonology', '5', '87', '12', '10:00', 'AM', '1:00', 'PM', '600', '24569871', 'CARE Hospitals', 'Road No.1Banjara hills,Hyderabad,Telangana 500034'),
(3, 'mahima iyer', 'Pulmonologist', 'mbbs pHD pulmonology', '12', '212', '21', '6:00', 'AM', '8:30', 'PM', '250', '23654789', 'yashoda hospitals', 'NLG X roads,national highway-9,malakpet hyderabad,telangana,500456'),
(4, 'srinivas reddy', 'Pulmonologist', 'mbbs pHD pulmonology', '6', '56', '0', '4:30', 'PM', '6:30', 'PM', '290', '24346587', 'prathima hospitals', 'station road,opp.vaishnoai hotel,kachiguda,hyderabad,telangana.'),
(5, 'subhash jha', 'Opthamologist', 'mbbs PHD opthamology', '6', '320', '13', '10:00', 'AM', '1:00', 'PM', '200', '224569877', 'vasan eye care hospitals', 'maawitha mansion,sagar Road,champapet,hyderabad,telangana 500235'),
(6, 'srinath parthiban', 'Pulmonologist', 'mbbs pHD pulmonology', '15', '350', '20', '6:00', 'PM', '8:30', 'PM', '240', '26547891', 'Continental Hospitals', 'near orr approach road,nanakram guda,gachibowli,hyderabad,telangana,500987'),
(7, 'varshini gupta', 'Opthamologist', 'mbbs PHD opthamology', '3', '230', '6', '10:00', 'AM', '1:00', 'PM', '500', '254698711', 'maxivision eye hospitals', 'madan arcade,ISSADAN,santoshnagar X roads,hyderabad,telangana,hyderabad'),
(257, 'padmavathi', 'Gyneacologist', 'mbbs pHD gyneacology', '25', '810', '57', '10:00', 'AM', '1:00', 'PM', '250', '8096139595', 'basant sahney hospitals', '253,road no-11,nehru nagar,west marredpally,secunderabad-500026,telangana');

-- --------------------------------------------------------

--
-- Table structure for table `addhospital`
--

CREATE TABLE `addhospital` (
  `hosID` int(20) NOT NULL,
  `hosname` varchar(30) NOT NULL,
  `hoslocal` varchar(50) NOT NULL,
  `hosspecial` varchar(60) NOT NULL,
  `popfor` varchar(50) NOT NULL,
  `facility` varchar(20) NOT NULL,
  `drate` varchar(20) NOT NULL,
  `prate` varchar(20) NOT NULL,
  `hcontact` varchar(500) NOT NULL,
  `hosimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addhospital`
--

INSERT INTO `addhospital` (`hosID`, `hosname`, `hoslocal`, `hosspecial`, `popfor`, `facility`, `drate`, `prate`, `hcontact`, `hosimage`) VALUES
(1, 'yashoda hospitals', 'NLG X Roads,national highway9,malakpet,hyderabad,t', 'cardiology,nephrology,gastronomy,oncology,neuro immunology', 'neurology,cardiology', 'affordable', '****', '****', '1800-00-1568', 'C:xampphtdocsDrsearchhtmlimgyashoda.jpg'),
(2, 'yashoda hospitals', 'station road,secunderabadtelangana,500456', 'cardiology,nephrology,gastronomy,oncology,neuro immunology', 'neurology,cardiology', 'affordable', '****', '****', '1800-00-1568', 'C:xampphtdocsDrsearchhtmlimgyashoda.jpg'),
(3, 'prathima hospitals', 'station road,kachiguda,hyderabad,telangana,500056', 'cardiology,nephrology,gastronomy,oncology,neuro immunology', 'neurology,cardiology', 'affordable', '***1/2', '****', '2526232124', 'C:xampphtdocsDrsearchhtmlimgmedisymbol.jpg'),
(4, 'apollo hospitals', 'dmrl xroads santoshnagar,kanchanbagh.hyderabad,tel', 'cardiology,nephrology,gastronomy,oncology,neuro immunology', 'neurology,cardiology', 'affordable', '****', '****', '1800-564-25869', 'C:xampphtdocsDrsearchhtmlimgapollo.png'),
(98, 'apollo hospitals', 'dmrl xroads santoshnagar,kanchanbagh.hyderabad,tel', 'cardiology,nephrology,gastronomy,oncology,neuro immunology', 'neurology,cardiology', 'extraordinary       ', '****', '***1/2', '1800-00-1568', 'C:xampphtdocsDrsearchhtmlimgapollo.png'),
(222, 'apollo hospitals', 'dmrl xroads santoshnagar,kanchanbagh.hyderabad,tel', 'cardiology,nephrology,gastronomy,oncology,neuro immunology', 'oncology,cardiology,neuroimmunology,nephrology', 'extraordinary       ', '****', '****', '1800-00-1568', 'C:xampphtdocsDrsearchhtmlimgapollo.png'),
(257, 'basant sahney hospital', '253,road no.11,nehru nagar,west marredpally,secund', 'paediatrics,gyneacology,maternity', 'paediatrics', 'affordable', '****1/2', '*****', '040-27704778', 'C:xampphtdocsDrsearchhtmlimg20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('drsearch@dcme', 'drsearch@001');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `name` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `aadhaar` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `specialisation` varchar(20) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `dapp` date NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`name`, `gender`, `age`, `aadhaar`, `location`, `specialisation`, `doctorname`, `dapp`, `date`, `time`) VALUES
('t s moses', 'male', '18', '012457', 'ram nagar', 'Opthamologist', 'Dr.laxman', '2017-03-07', 'March 6,2017,2:49 am', ''),
('bharghavilaxmi', 'female', '15', '123456', 'jamia osmania', 'Cardiologist', 'Dr.chandrkaanthreddy', '2017-02-17', 'February 16,2017,2:2', ''),
('vardhan', 'male', '15', '369852', 'borabanda', 'Cardiologist', 'Dr.laxman', '2017-03-08', 'March 7,2017,8:18 am', ''),
('m.suresh', 'male', '29', '385140', 'uppal', 'Cardiologist', 'Dr.laxman', '2017-03-07', 'March 6,2017,11:44 a', ''),
('sai vardhan', 'male', '17', '569874', 'kachiguda', 'Cardiologist', 'Dr.chandrkaanthreddy', '2017-03-08', 'March 6,2017,2:51 am', ''),
('chandrakanthreddy', 'male', '17', '581675', 'rakshapuram,kanchanbagh,hyderabad', 'Pulmonologist', 'Dr.naimisha', '2017-03-11', '2/3/2017', '20:13'),
('hemanth kumar', 'male', '18', '581692', 'borabanda', 'Pulmonologist', 'Dr.mahathi', '2017-02-18', 'February 18,2017,12:', ''),
('priya', 'female', '20', '631690', 'jeedimetla', 'Cardiologist', 'Dr.laxman', '2017-03-10', 'March 7,2017,7:11 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `articlerating`
--

CREATE TABLE `articlerating` (
  `id` int(11) NOT NULL,
  `articleid` int(11) NOT NULL DEFAULT '0',
  `ratingpoint` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donorID` int(11) NOT NULL,
  `dname` varchar(40) NOT NULL,
  `dgender` varchar(10) NOT NULL,
  `dage` varchar(20) NOT NULL,
  `daadhar` varchar(40) NOT NULL,
  `dbloodtype` varchar(20) NOT NULL,
  `dplace` varchar(40) NOT NULL,
  `dcontact` varchar(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donorID`, `dname`, `dgender`, `dage`, `daadhar`, `dbloodtype`, `dplace`, `dcontact`, `date`) VALUES
(1, 'naimisha reddy', 'female', '17', '2546987', 'O+VE', 'LBNAGAR', '224569877', 'March 2,2017,6:04 pm'),
(2, 'chandrakanth reddy', 'male', '17', '581675', 'O-VE', 'LBNAGAR', '24341688', 'March 2,2017,6:04 pm'),
(3, 'hemanth rajan', 'female', '17', '2546987', 'B-VE', 'KUKATPALLY', '25897455', 'March 2,2017,6:05 pm'),
(4, 'moses thipparthi', 'male', '18', '25698744', 'B+VE', 'NARAYANGUDA', '26987451', 'March 2,2017,6:06 pm'),
(6, 'laxman sheela', 'male', '18', '23657899', 'AB+VE', 'SHALIBANDA', '259874631', 'March 2,2017,6:06 pm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `emailaddress`, `message`, `date`) VALUES
('amit singh', 'amit12334@gmail.com', 'hello drsearch...welcome to u all\r\n', 'February 15,2017,1:13 pm'),
('bharghavilaxmi', 'bharghavi laxmi@gmail.com', 'hi namaskaram', 'February 13,2017,11:47 am'),
('chandrakanth', 'chandu123@gmail.com', 'hi', 'March 4,2017,8:01 am'),
('hemanth kumar', 'hk141098@gmail.com', 'hi chandu  good job...\r\na very good and useful application in recent times', 'March 2,2017,8:41 am'),
('karthik', 'karthikeya@gmail.com', 'hello drsearch welcome', 'February 13,2017,11:53 am'),
('mawra hoccane', 'mawra@gmail.com', 'hi welcome drsearch', 'February 13,2017,11:44 am'),
('m.suresh', 's2123@gmail.com', 'hello', 'March 6,2017,11:47 am'),
('sai vardhan', 'sai123@gmail.com', 'hello drsearch', 'March 4,2017,11:33 am'),
('priya tummuri', 'saiganga190@gmail.com', 'nice good work by chandrakanth rddy', 'March 7,2017,7:14 am'),
('srikanth', 'srikanthmallepally@gmail.com', 'hi hello I am an idiot', 'February 13,2017,11:30 am'),
('srikar gilla', 'srikar216@gmail.com', 'hello this is an useful website', 'March 2,2017,6:06 am');

-- --------------------------------------------------------

--
-- Table structure for table `fr_star`
--

CREATE TABLE `fr_star` (
  `id` int(11) NOT NULL,
  `rate_id` varchar(40) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `rate` double NOT NULL,
  `rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `recipientID` int(20) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `rgender` varchar(10) NOT NULL,
  `raadhar` varchar(50) NOT NULL,
  `rbloodtype` varchar(20) NOT NULL,
  `units` varchar(20) NOT NULL,
  `rplace` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`recipientID`, `rname`, `rgender`, `raadhar`, `rbloodtype`, `units`, `rplace`, `date`) VALUES
(2, '', '', '', '', '', '', 'March 2,2017,6:09 pm'),
(3, '', '', '', '', '', '', 'March 2,2017,6:09 pm'),
(4, '', '', '', '', '', '', 'March 2,2017,6:11 pm'),
(5, '', '', '', '', '', '', 'March 2,2017,6:11 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbloodbank`
--
ALTER TABLE `addbloodbank`
  ADD PRIMARY KEY (`contact`);

--
-- Indexes for table `adddiagonistics`
--
ALTER TABLE `adddiagonistics`
  ADD PRIMARY KEY (`diaogID`);

--
-- Indexes for table `adddoctor`
--
ALTER TABLE `adddoctor`
  ADD PRIMARY KEY (`docID`);

--
-- Indexes for table `addhospital`
--
ALTER TABLE `addhospital`
  ADD PRIMARY KEY (`hosID`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`aadhaar`);

--
-- Indexes for table `articlerating`
--
ALTER TABLE `articlerating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donorID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `emailaddress` (`emailaddress`);

--
-- Indexes for table `fr_star`
--
ALTER TABLE `fr_star`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`recipientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddiagonistics`
--
ALTER TABLE `adddiagonistics`
  MODIFY `diaogID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `adddoctor`
--
ALTER TABLE `adddoctor`
  MODIFY `docID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT for table `addhospital`
--
ALTER TABLE `addhospital`
  MODIFY `hosID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT for table `articlerating`
--
ALTER TABLE `articlerating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fr_star`
--
ALTER TABLE `fr_star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `recipientID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
