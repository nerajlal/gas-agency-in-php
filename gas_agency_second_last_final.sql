-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 06:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `gas_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `name`, `password`) VALUES
(1, 'b691c96a0e0e2674df4943221d5b4767', 'b26d9e9702bd682d4cd7c6848b70e473');

-- --------------------------------------------------------

--
-- Table structure for table `business_change_address`
--

CREATE TABLE `business_change_address` (
  `busiaddchange_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `shope_place` varchar(30) NOT NULL,
  `shop_city` varchar(30) NOT NULL,
  `shop_post_office` varchar(30) NOT NULL,
  `shope_pincode` varchar(30) NOT NULL,
  `shope_district` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `shope_proof_category` varchar(30) NOT NULL,
  `shope_upload_proof` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_connection`
--

CREATE TABLE `business_connection` (
  `business_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `landline` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `stovestatus` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `proof_category` varchar(500) NOT NULL,
  `upload_proof` varchar(500) NOT NULL,
  `upload_photo` varchar(500) NOT NULL,
  `upload_adhar` varchar(500) NOT NULL,
  `cylinder_count` varchar(100) NOT NULL,
  `bus_signature` varchar(50) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_connection`
--

INSERT INTO `business_connection` (`business_id`, `customer_id`, `name`, `dob`, `gender`, `mobile_no`, `landline`, `emailid`, `stovestatus`, `purpose`, `shop_name`, `place`, `city`, `post_office`, `pincode`, `district`, `proof_category`, `upload_proof`, `upload_photo`, `upload_adhar`, `cylinder_count`, `bus_signature`, `transaction_no`, `status`, `notification`) VALUES
(1, 1112, 'usha', '7485215', 'Female', '9048986744', '', '', 'Yes', 'Business', 'dfv', 'wer', 'we', 'we', 'fd', 'Thiruvananthapuram', 'Building rent resipt', 'images/change-address-business.png', 'images/change-address-business.png', 'images/change_add_home.png', '8', 'images/change_add_home.png', '', 'Approved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `change_connection`
--

CREATE TABLE `change_connection` (
  `temp_connection_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `deth_certificate` varchar(300) NOT NULL,
  `upload_photo` varchar(300) NOT NULL,
  `upload_adhar` varchar(300) NOT NULL,
  `uploadration_card` varchar(300) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `change_connection`
--

INSERT INTO `change_connection` (`temp_connection_id`, `customer_id`, `name`, `dob`, `gender`, `relationship`, `date`, `deth_certificate`, `upload_photo`, `upload_adhar`, `uploadration_card`, `signature`, `transaction_no`, `status`, `notification`) VALUES
(7, 1111, 'manu', '14/07/2001', 'Male', 'Mother', '01-10-21', 'images/admin_flowchart.jpg', 'images/university.png', 'images/gantchart.jpg', 'images/level0.jpg', 'images/B_newgasconnection.png', 'none', 'Under Process', 1);

-- --------------------------------------------------------

--
-- Table structure for table `connection_details`
--

CREATE TABLE `connection_details` (
  `Connection_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `landline` varchar(17) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `stove_status` varchar(50) NOT NULL,
  `ration_card_status` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `house_complx` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `streetname` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `floar_no` varchar(50) NOT NULL,
  `upload_phto` varchar(300) NOT NULL,
  `upload_adhar` varchar(300) NOT NULL,
  `uploadration_card` varchar(300) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection_details`
--

INSERT INTO `connection_details` (`Connection_id`, `customer_id`, `name`, `dob`, `gender`, `relationship`, `mobileno`, `landline`, `emailid`, `purpose`, `stove_status`, `ration_card_status`, `district`, `house_name`, `house_no`, `house_complx`, `city`, `streetname`, `pincode`, `post_office`, `floar_no`, `upload_phto`, `upload_adhar`, `uploadration_card`, `signature`, `transaction_no`, `status`, `notification`) VALUES
(108, 1111, 'manu', '14/07/2001', 'Male', 'Mother', '8848310248', '', '', 'Home', 'Yes', 'APL', 'Ernakulam', 'Aravindbhavan', '11', '', 'kochi', 'kochi', '852369', 'kochi po', '', 'images/university.png', 'images/gantchart.jpg', 'images/level0.jpg', 'images/images.jpg', '', 'Approved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_complaint`
--

CREATE TABLE `customer_complaint` (
  `complaint_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `complaint` varchar(1000) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_complaint`
--

INSERT INTO `customer_complaint` (`complaint_id`, `customer_id`, `subject`, `proof`, `complaint`, `notification`) VALUES
(11, 1111, 'Late delivary', 'images/structur_chart..jpg', 'low delivary is not good for me', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `username`, `password`, `phone_number`) VALUES
(1111, 'Aravind as', '11c2f02f38b1f3ac8e75f9edc137c3b5', '8848310248'),
(1112, 'usha', '9320a10e80eb11dfc2c0f10cea41cfa8', '9048986744');

-- --------------------------------------------------------

--
-- Table structure for table `gas_booking`
--

CREATE TABLE `gas_booking` (
  `booking_id` int(30) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `no_of_cylinder` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `arrival_date` varchar(20) NOT NULL,
  `arrival_time` varchar(12) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas_booking`
--

INSERT INTO `gas_booking` (`booking_id`, `customer_id`, `purpose`, `no_of_cylinder`, `date`, `transaction_no`, `arrival_date`, `arrival_time`, `status`, `notification`) VALUES
(170, 1111, 'Home', 'normal', '01-10-21', 'cash on delivary', 'None', 'None', 'Rejected', 1),
(171, 1111, 'Home', 'normal', '01-10-21', '1111', 'None', 'None', 'Under Process', 1);

-- --------------------------------------------------------

--
-- Table structure for table `second_cylinderdet`
--

CREATE TABLE `second_cylinderdet` (
  `Second_cylinder_id` int(30) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `voucher` varchar(200) NOT NULL,
  `transaction_no` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_cylinderdet`
--

INSERT INTO `second_cylinderdet` (`Second_cylinder_id`, `customer_id`, `voucher`, `transaction_no`, `status`, `date`, `notification`) VALUES
(7, 1111, 'images/arvind.pdf', 'ssss', 'Under Process', '01-10-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int(30) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` varchar(70) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `signature` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `staff_name`, `position`, `description`, `photo`, `signature`) VALUES
(4, 'Siva', 'Manager', 'qwef', 'images/person.png', 'images/adminsig.jpg'),
(5, 'shibu', 'kappi', 'qwdfv', 'images/pic.png', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `temp_address`
--

CREATE TABLE `temp_address` (
  `temp_address_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `house_complx` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `streetname` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `floar_no` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `proof_cat` varchar(50) NOT NULL,
  `proof` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_address`
--

INSERT INTO `temp_address` (`temp_address_id`, `customer_id`, `house_name`, `house_no`, `house_complx`, `city`, `streetname`, `pincode`, `post_office`, `floar_no`, `district`, `date`, `proof_cat`, `proof`, `status`, `notification`) VALUES
(6, 1111, 'Aravindbhavan', '11', '', 'kochi', 'kochi', '852369', 'kochi po', '', 'Ernakulam', '01-10-21', 'house rent resipt', '', 'Under Process', 1);

-- --------------------------------------------------------

--
-- Table structure for table `today_info`
--

CREATE TABLE `today_info` (
  `info_id` int(30) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `kg` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `today_info`
--

INSERT INTO `today_info` (`info_id`, `purpose`, `kg`, `price`, `status`) VALUES
(1, 'Home', '40', '1000', 'close'),
(2, 'Business', '45', '1400', 'close');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `business_change_address`
--
ALTER TABLE `business_change_address`
  ADD PRIMARY KEY (`busiaddchange_id`),
  ADD KEY `busiaddchange_id` (`busiaddchange_id`,`customer_id`,`shop_name`,`shope_place`,`shop_city`,`shop_post_office`,`shope_pincode`,`shope_district`,`shope_proof_category`,`shope_upload_proof`,`status`);

--
-- Indexes for table `business_connection`
--
ALTER TABLE `business_connection`
  ADD PRIMARY KEY (`business_id`),
  ADD KEY `business_id` (`business_id`,`customer_id`,`name`,`dob`,`gender`,`mobile_no`,`landline`,`emailid`,`stovestatus`,`purpose`,`shop_name`,`place`,`city`,`post_office`,`pincode`,`district`,`proof_category`,`upload_proof`,`upload_photo`,`upload_adhar`,`cylinder_count`,`transaction_no`,`status`);

--
-- Indexes for table `change_connection`
--
ALTER TABLE `change_connection`
  ADD PRIMARY KEY (`temp_connection_id`),
  ADD KEY `temp_connection_id` (`temp_connection_id`,`customer_id`,`name`,`dob`,`gender`,`relationship`,`deth_certificate`,`upload_photo`,`upload_adhar`,`uploadration_card`,`transaction_no`,`status`);

--
-- Indexes for table `connection_details`
--
ALTER TABLE `connection_details`
  ADD PRIMARY KEY (`Connection_id`),
  ADD KEY `Connection_id` (`Connection_id`,`customer_id`,`name`,`dob`,`gender`,`relationship`,`mobileno`,`landline`,`emailid`,`purpose`,`stove_status`,`ration_card_status`,`district`,`house_name`,`house_no`,`house_complx`,`city`,`streetname`,`pincode`,`post_office`,`floar_no`,`upload_phto`,`upload_adhar`,`uploadration_card`,`signature`,`transaction_no`,`status`);

--
-- Indexes for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gas_booking`
--
ALTER TABLE `gas_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `second_cylinderdet`
--
ALTER TABLE `second_cylinderdet`
  ADD PRIMARY KEY (`Second_cylinder_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_id` (`staff_id`,`staff_name`,`position`,`description`,`photo`),
  ADD KEY `staff_id_2` (`staff_id`,`staff_name`,`position`,`description`,`photo`),
  ADD KEY `staff_id_3` (`staff_id`,`staff_name`,`position`,`description`,`photo`),
  ADD KEY `staff_id_4` (`staff_id`,`staff_name`,`position`,`description`,`photo`);

--
-- Indexes for table `temp_address`
--
ALTER TABLE `temp_address`
  ADD PRIMARY KEY (`temp_address_id`),
  ADD KEY `temp_address_id` (`temp_address_id`,`customer_id`,`house_name`,`house_no`,`house_complx`,`city`,`streetname`,`pincode`,`post_office`,`floar_no`,`district`,`proof_cat`,`proof`,`status`);

--
-- Indexes for table `today_info`
--
ALTER TABLE `today_info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `info_id` (`info_id`,`purpose`,`kg`,`price`,`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_change_address`
--
ALTER TABLE `business_change_address`
  MODIFY `busiaddchange_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_connection`
--
ALTER TABLE `business_connection`
  MODIFY `business_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `change_connection`
--
ALTER TABLE `change_connection`
  MODIFY `temp_connection_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `connection_details`
--
ALTER TABLE `connection_details`
  MODIFY `Connection_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `complaint_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;

--
-- AUTO_INCREMENT for table `gas_booking`
--
ALTER TABLE `gas_booking`
  MODIFY `booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `second_cylinderdet`
--
ALTER TABLE `second_cylinderdet`
  MODIFY `Second_cylinder_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staff_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_address`
--
ALTER TABLE `temp_address`
  MODIFY `temp_address_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `today_info`
--
ALTER TABLE `today_info`
  MODIFY `info_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
