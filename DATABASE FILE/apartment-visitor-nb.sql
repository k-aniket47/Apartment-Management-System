
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `apartment` (
  `ID` int(11) NOT NULL,
  `apartment_number` varchar(255) NOT NULL,
  `building_number` varchar(20) NOT NULL,
  `apartment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `apartment` (`ID`, `apartment_number`, `building_number`, `apartment_status`) VALUES
(6, '201', 'C', 'Empty'),
(7, '269', 'A', 'Owned'),
(8, '333', 'D', 'Owned'),
(9, '69', 'B', 'Owned'),
(10, '255', 'B', 'Empty'),
(11, '86', 'A', 'Empty'),
(12, '179', 'A', 'Empty'),
(13, '321', 'D', 'Owned'),
(14, '203', 'B', 'Owned'),
(15, '888', 'A', 'Owned'),
(16, '170', 'C', 'Owned'),
(17, '401', 'A', 'Empty'),
(18, '444', 'D', 'Owned'),
(19, '580', 'A', 'Owned');


CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `Security_Code` int(50) NOT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `Security_Code`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Owner', 'admin', 1010, 7986136181, 'admin@gmail.com', 'd00f5d5217896fb7fd601412cb890830', '2022-01-12 03:25:47');


CREATE TABLE `tblvisitor` (
  `ID` int(5) NOT NULL,
  `VisitorName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Gender` varchar(11) NOT NULL,
  `Apartment` varchar(120) NOT NULL,
  `BuildingNo` varchar(55) NOT NULL,
  
  `EnterDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `tblvisitor` (`ID`, `VisitorName`, `MobileNumber`, `Address`, `Gender`, `Apartment`, `BuildingNo`, `EnterDate`, `outtime`) VALUES
(1, 'Parth Muchal', 8878520000, '29 Brook Town Street', 'Male', '201', 'C','2022-01-13 06:11:53', '2032-01-12 05:14:20'),
(2, 'Satyam Anand', 8218963214, '17 Ring Road', 'Male', '333', 'D','2022-01-13 06:41:05', '2032-09-12 05:15:54'),
(3, 'Aanvi Gupta', 7850000010, 'Sadar Bazar', 'Female', '203', 'B', '2022-01-13 06:42:40',  '2029-09-12 05:13:21'),
(4, 'Jennifer Merchant', 9234567890, '2301 Besides Aura Club', 'Others', '321', 'D','2022-01-13 15:52:09', '2032-09-12 05:12:54'),
(5, 'Smith Paul', 6580000010, 'Janjeerwala Chowk', 'Male', '888', 'A', '2022-01-13 15:56:42', '2027-09-12 05:16:40'),
(10, 'Priyal Chandrakar', 7896547800, 'Opposite to Vijan Mahal', 'Female', '201','C','2022-01-13 14:04:53', '2032-09-12 05:17:42'),
(11, 'Rajasvi Singh', 9547778569, 'NY Street 47', 'Female', '333', 'D ','2022-01-13 14:41:57', '2032-09-11 15:59:45'),
(12, 'Stuti Sinha', 7101010101, '77 Kolar Road', 'Female', '255', 'B', '2022-01-13 15:58:59', '2029-09-11'),
(13, 'Varun Mahajan', 7703265910, '699 Dumna Way', 'Male', '86', ' A', '2022-01-13 05:07:35', '2032-09-12'),
(14, 'O.M sharma', 7890000000, '37/2 Alpha Avenue', 'Male', '333', ' D ', '2022-02-02 05:09:55', NULL),
(15, 'Bob Koli', 7012478193, '19/9 LIG', 'Male', '170', 'C', '2022-02-02 05:19:37', NULL),
(16, 'Vikram Kumar', 7002719610, 'Wright Street', 'Male', '580', 'A ','2022-02-02 15:38:00', NULL);


--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);



ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`);



--

--
ALTER TABLE `apartment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--

--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
