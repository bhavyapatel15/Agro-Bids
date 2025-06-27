-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 07:23 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `profilepic` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `adminname`, `password`, `email`, `status`, `profilepic`, `contact`) VALUES
(1, 'admin', 'admin', 'admin123@gmail.com', 1, 'default.jpg', '7575038760');

-- --------------------------------------------------------

--
-- Table structure for table `tblauction`
--

CREATE TABLE `tblauction` (
  `auctionid` int(11) NOT NULL,
  `farmerid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `baseprice` int(11) NOT NULL,
  `unitid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `des` varchar(500) NOT NULL,
  `assignedid` int(11) NOT NULL DEFAULT 0,
  `addeddt` timestamp NOT NULL DEFAULT current_timestamp(),
  `auctionstartdt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `auctionenddt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauction`
--

INSERT INTO `tblauction` (`auctionid`, `farmerid`, `title`, `subcategoryid`, `baseprice`, `unitid`, `qty`, `des`, `assignedid`, `addeddt`, `auctionstartdt`, `auctionenddt`, `status`) VALUES
(1, 1, 'Auction For Red Apple', 1, 500, 1, 5, 'Apple is a sweet and delicious fruit that is very healthy. It is also a good disease-fighter. The delicious taste and bright colour of the food make it even more appealing.', 4, '2024-03-05 13:33:46', '2024-03-12 18:30:00', '2024-03-18 18:30:00', 3),
(2, 1, 'Auction For Banana', 5, 1500, 1, 10, 'Fresh Banana From Japan', 1, '2024-03-08 18:21:18', '2024-03-28 18:30:00', '2024-04-01 18:30:00', 3),
(4, 2, 'Auction For Spinach', 6, 1000, 1, 20, 'Spinach is a green, leafy vegetable. It comes from southwestern and central Asia. Its flowers are small and yellow.It is rich in Vitamin K,vitamin A,vitamin C.\n', 4, '2024-03-09 18:12:28', '2024-03-09 18:30:00', '2024-03-14 18:30:00', 3),
(5, 2, 'Auction For Orange', 10, 1000, 1, 20, 'Fresh Malta Oranges imported from Thailand', 1, '2024-03-13 07:34:05', '2024-03-13 18:30:00', '2024-03-21 18:30:00', 3),
(6, 1, 'Auction For Cabbage', 15, 3500, 1, 10, 'Cabbage is healthy', 2, '2024-03-17 12:16:36', '2024-03-18 18:30:00', '2024-03-22 18:30:00', 3),
(7, 1, 'Auction For Blackberry', 11, 1000, 1, 10, 'Very healthy and tasty blackberries imported from Thailand.', 2, '2024-03-19 12:32:03', '2024-03-18 18:30:00', '2024-03-27 18:30:00', 3),
(10, 1, 'Auction For Dragon Fruit', 8, 2000, 1, 10, 'Exotic Dragon Fruit imported from Japan.', 1, '2024-03-22 21:51:05', '2024-03-23 18:30:00', '2024-03-28 18:30:00', 3),
(11, 4, 'Auction For Tomatos', 17, 1000, 1, 5, 'Fresh and juicy tomatos from Spain.', 3, '2024-03-29 12:56:46', '2024-03-31 18:30:00', '2024-04-15 18:30:00', 3),
(12, 7, 'Auction For Durian', 31, 5000, 1, 10, 'Auction For Exotic Fruit Durian.Imported From Thailand.', 0, '2024-04-01 18:11:26', '2024-04-04 18:30:00', '2024-04-10 18:30:00', 1),
(13, 1, 'Auction For Yellow Bell Pepper', 18, 1800, 3, 1, 'Auction For Fresh And Delicious Yellow Bell Pepper.', 0, '2024-04-01 18:19:45', '2024-04-02 18:30:00', '2024-04-09 18:30:00', 2),
(15, 6, 'Auction For Sunflower Seeds', 20, 2000, 1, 5, 'Sunflower seeds have a mild, nutty flavor and a firm but tender texture.', 0, '2024-04-03 08:20:08', '2024-04-02 18:30:00', '2024-04-12 18:30:00', 1),
(16, 1, 'Auction For Potato', 39, 3000, 1, 10, 'Great Quality Potatos.', 0, '2024-04-04 16:23:30', '2024-04-08 18:30:00', '2024-04-15 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblbid`
--

CREATE TABLE `tblbid` (
  `bidid` int(11) NOT NULL,
  `auctionid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `bidamount` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbid`
--

INSERT INTO `tblbid` (`bidid`, `auctionid`, `buyerid`, `bidamount`, `status`) VALUES
(8, 4, 1, 1200, 1),
(10, 1, 4, 600, 3),
(11, 4, 4, 1300, 3),
(12, 2, 4, 1200, 1),
(14, 2, 2, 2600, 1),
(15, 2, 3, 2200, 1),
(17, 2, 1, 2800, 3),
(19, 7, 1, 1400, 1),
(20, 7, 3, 1500, 1),
(21, 7, 2, 1300, 3),
(23, 5, 1, 2700, 3),
(25, 5, 4, 2600, 1),
(29, 6, 2, 5100, 3),
(30, 10, 1, 2100, 3),
(32, 11, 3, 1100, 3),
(33, 13, 3, 1900, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblbuyer`
--

CREATE TABLE `tblbuyer` (
  `buyerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `buyername` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `coverphoto` varchar(100) NOT NULL DEFAULT 'cover.jpeg',
  `street1` varchar(200) NOT NULL,
  `street2` varchar(200) NOT NULL,
  `cityid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `profilephoto` varchar(100) NOT NULL DEFAULT 'default.jpeg',
  `bio` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbuyer`
--

INSERT INTO `tblbuyer` (`buyerid`, `userid`, `buyername`, `password`, `email`, `coverphoto`, `street1`, `street2`, `cityid`, `status`, `profilephoto`, `bio`, `contact`) VALUES
(1, 2, 'Kathan', '123', 'kathan@gmail.com', 'cover.jpeg', '56 Vatsalya Bunglows', 'Vesu', 4, 1, '660d1ab5e40ddgettyimages-1179627332-612x612.jpg', 'helloo', 2147483647),
(2, 5, 'Jash', '123', 'jash@gmail.com', 'cover.jpeg', 'Bunglow 3 Aagam Heritage', 'Vesu', 3, 1, '660d1b8fdb072240_F_639257487_3iUIAuUIa6rosGenkLHYHfAUUlaS0eMk.jpg', 'helloo', 2147483647),
(3, 9, 'dev', '123', 'dev@gmail.com', '660b2d9fc6a3cwhite-curved.jpg', '301-Evergreen Complex', 'Adajan', 11, 1, '660d1c19a9240240_F_702090485_la8XR7DJPNopgPVAWVeBP5C9dxAX5L1p.jpg', 'helloo', 2147483647),
(4, 10, 'devansh', '123', 'devansh@gmail.com', 'cover.jpeg', '104-Shree Complex', 'Piplod', 1, 1, '660d1cab732bf240_F_460996728_z1JX6Ks7K7pkfWg4qldrnIIPsXk5O3ZH.jpg', 'helloo', 2147483647),
(5, 12, 'Dev', '123', 'Dev@gmail.com', 'cover.jpeg', '12-Shreeji Society', 'Dumas', 1, 1, 'default.jpeg', 'hellooo', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categoryid`, `categoryname`, `image`) VALUES
(1, 'FRUITS', 'fruits.jpg'),
(2, 'VEGETABLES', 'vegies.jpg'),
(4, 'SEEDS', '65e1f9ef699e2seeds.jpg'),
(6, 'EXOTIC FRUITS', '65e2f2e677d4aexotic2.jpg'),
(12, 'GRAINS', '660020279583165e2ffbd7e10bgrains.jpg'),
(13, 'DAIRY', '65fbe43ca26eadairy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `stateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'mumbai', 2),
(3, 'Valsad', 1),
(4, 'Jaipur', 3),
(5, 'Bharuch', 1),
(6, 'Surat', 1),
(10, 'Pune', 2),
(11, 'Jodhpur', 3),
(12, 'Vijaywada', 4),
(13, 'Daman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfarmer`
--

CREATE TABLE `tblfarmer` (
  `farmerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `farmername` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `street1` varchar(200) NOT NULL,
  `street2` varchar(200) NOT NULL,
  `cityid` int(11) NOT NULL,
  `profilephoto` varchar(200) NOT NULL DEFAULT 'default.jpeg',
  `coverphoto` varchar(200) NOT NULL DEFAULT 'cover.jpeg',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfarmer`
--

INSERT INTO `tblfarmer` (`farmerid`, `userid`, `farmername`, `password`, `email`, `contact`, `bio`, `street1`, `street2`, `cityid`, `profilephoto`, `coverphoto`, `status`) VALUES
(1, 1, 'Bhavya', '123', 'bhavya12345@gmail.com', '7575038760', 'hello i am from surat', '13 Sai Ashish Society', 'Piplod', 6, '660d1935cc3f3240_F_602097061_tRkwoe0dopzjXzEZQSzjUXCR2D6zq5GA.jpg', '660b2e1450005pexels-pixabay-33834.jpg', 1),
(2, 8, 'Nisharg', '123', 'nisharg@email.com', '9898989898', 'hrllooo', '57 Vatsalya Bunglows', 'Vesu', 11, '660d19af0ad84240_F_621026535_CaXJzFdA4SAcO8YwYhThxzZ116wIkxWP.jpg', 'cover.jpeg', 1),
(3, 11, 'Nillu', '123', 'nillu123@gmail.com', '7575038760', 'hello there', '11 Shree Bunglows', 'Adajan', 1, 'default.jpeg', 'cover.jpeg', 1),
(4, 16, 'Alex', '123', 'alex123@gmail.com', '9898989898', 'Farmer since 15 years.', '14 Sai Ashish Society', 'Victoria', 11, '660d0e8c3370512.png', 'cover.jpeg', 1),
(6, 22, 'Akash', '123', 'akash123@gmail.com', '9898989898', 'Hello I am From Jodhpur.', '13 Sai Kishore Society', 'Columbia Street', 11, 'default.jpeg', 'cover.jpeg', 1),
(7, 23, 'Jay', '123', 'jay123@gmail.com', '7878787878', 'Hello I am Jay From Daman.', '21 Jamphore Building ', 'Near Beach', 13, '660d1a3a2d54a240_F_266912688_Z4k3A1xTbUNGLOLiKAF9yUB5KHpp83xX.jpg', '660aa03db8ca4curved-11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblreport`
--

CREATE TABLE `tblreport` (
  `reportid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `farmerid` int(11) NOT NULL,
  `des` varchar(200) NOT NULL,
  `reportdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreport`
--

INSERT INTO `tblreport` (`reportid`, `buyerid`, `farmerid`, `des`, `reportdt`) VALUES
(1, 2, 1, 'Product quality was bad.', '2024-03-22 18:50:36'),
(2, 1, 1, 'Delivery Not On Time', '2024-04-04 09:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `reviewid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `farmerid` int(11) NOT NULL,
  `review` varchar(200) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `reviewdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`reviewid`, `buyerid`, `farmerid`, `review`, `rating`, `reviewdt`) VALUES
(1, 1, 1, 'The Product quality was great as usual.Service provided was great.', '4.5', '2024-03-05 19:23:23'),
(2, 4, 1, 'Packaging of the product provided by the farmer was great.', '4', '2024-03-22 13:06:47'),
(4, 2, 1, 'Quality of the product was good and great service provided.', '4.5', '2024-03-31 10:00:59'),
(7, 3, 4, 'Great Experience.', '4.5', '2024-04-01 22:37:45'),
(9, 4, 1, 'Great Quality.', '4.5', '2024-04-04 09:26:41'),
(11, 1, 2, 'Execellent Service.', '4.5', '2024-04-04 09:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`stateid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra'),
(3, 'Rajasthan'),
(4, 'Andhra Pradesh'),
(5, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `subcategoryid` int(11) NOT NULL,
  `subcategoryname` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`subcategoryid`, `subcategoryname`, `categoryid`, `image`) VALUES
(1, 'Red Apple', 1, '65f200b5ee96fredapple.jfif'),
(5, 'Banana', 1, '65f200fc23a9d65e30cf27ff0ebanana.jpg'),
(6, 'Spinach', 2, '65e318346e549spinach.jfif'),
(7, 'Pumpkin Seeds', 4, '6609277d1db82pumpkinseeds2.jpg'),
(8, 'Dragon Fruit', 6, '65e32022d8308dragon.jpg'),
(9, 'Wheat Grains', 9, '65e320460c2aewheat.jpg'),
(10, 'Orange', 1, '65e3247d85a4forange.jfif'),
(11, 'Blackberry', 1, '65e324990791cblackberry.png'),
(17, 'Tomato', 2, '65e327b5d8bbbtomato.jpg'),
(18, 'Yellow Bell Pepper', 2, '65e327d14253fyellowbell.jfif'),
(19, 'Red Chilli', 2, '65e327ecd03a6redchilli.jpg'),
(20, 'Sunflower seeds', 4, '65e3312eb7fe9sunflower.jpg'),
(21, 'Chia Seeds', 4, '65e32a755a7fechiaseeds.jpg'),
(22, 'Watermelon seeds', 4, '65e32a9902d4cWatermelon_Seeds.jpg'),
(24, 'Sesame Seeds', 4, '65e332462bcabsesame.avif'),
(25, 'Star Fruit', 6, '65e3328ea6a95starfruit.jpg'),
(29, 'White Rice Grains', 11, '65e70accaaaf965e3334441827whiterice.jpg'),
(30, 'White Rice Grains', 12, '65fbe94794a8865e3334441827whiterice.jpg'),
(31, 'Durian', 6, '65fbe9b8f29fcdurian.jpg'),
(33, 'Strawberry', 1, '660924573c439straberry1.jpg'),
(34, 'Guava', 1, '660924f941173guava.jpg'),
(35, 'Cherry', 1, '660925440d909cherry2.webp'),
(36, 'Green Grapes', 1, '660925938f330grapes.jpg'),
(37, 'Watermelon', 1, '660925d30a603watermelon.webp'),
(38, 'Red Onion', 2, '660926a75d2d5redonion1.avif'),
(39, 'Potato', 2, '66092705acceapotato.jpg'),
(40, 'Passion Fruit', 6, '660927e77124bpassionfruit.jpg'),
(41, 'Barley Grains', 12, '66092854d84d5barley.jpg'),
(42, 'Brown Rice Grains', 12, '660928bcd217cbrownrice2.jpg'),
(43, 'Oats', 12, '660928f4b553eoats.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `transactionid` int(11) NOT NULL,
  `auctionid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `farmerid` int(11) NOT NULL,
  `razororderid` varchar(100) NOT NULL,
  `razorpaymentid` varchar(100) NOT NULL,
  `razorpaysignature` varchar(100) NOT NULL,
  `shippingaddress` varchar(500) NOT NULL,
  `transacdt` timestamp NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`transactionid`, `auctionid`, `buyerid`, `farmerid`, `razororderid`, `razorpaymentid`, `razorpaysignature`, `shippingaddress`, `transacdt`, `amount`) VALUES
(1, 1, 4, 1, 'order_NoY1bYSvdAWm72', 'pay_NoY1x7n7I27qjF', '4c90f0ee311357c42cfd1174b2dbdbce5e2f48894f75ff6492f09927e4f024cf', '104-Shree Complex,Piplod,Surat,Gujarat', '2024-03-20 08:44:18', 600),
(2, 2, 1, 1, 'order_NodKKfADMAd1I9', 'pay_NodKStXJcStULV', 'b8922333b62d32e083848bfbe735ee2adad277799da67e185dd9d4c37ffc6e82', '56-Vatsalya Bunglows,Vesu,Bharuch,Gujarat', '2024-03-20 13:55:17', 2800),
(3, 4, 4, 2, 'order_Noe7yK2sVtkvrz', 'pay_Noe87gCFy4I3EA', 'bd182ee662ccef8f7d558d64e3fdede2f004a0730138bdc02316987bd1700dd1', '104-Shree Complex,Piplod,Surat,Gujarat', '2024-03-20 14:42:13', 1300),
(4, 5, 1, 2, 'order_NpLPc2W3bAeBJB', 'pay_NpLPiPpnXZ2uSm', '041e77f77d967613d48115c9e4a644d08fcf5bed5b0100d235cf6143e54784d0', '56-Vatsalya Bunglows,Vesu,Bharuch,Gujarat', '2024-03-22 09:02:42', 2700),
(5, 7, 2, 1, 'order_NpUZZ7zJlLRWTH', 'pay_NpUbTtIROgXmBH', '7ed71a610cc9a655446319789e4ee32ab4f6de114176bebb6e19c1bc74e9f93c', 'Bunglow 3 Aagam Heritage,Vesu,Pune,Maharashtra', '2024-03-22 18:03:09', 1300),
(6, 6, 2, 1, 'order_Npa11ZrgDgahx1', 'pay_Npa17fRH9GFbMX', '2b3bc83236d433cefd319f2e9f55a3b3cf293e76e69a5847bf3cfcf8ad19eab3', 'Bunglow 3 Aagam Heritage,Vesu,Pune,Maharashtra', '2024-03-22 23:19:49', 5100),
(7, 10, 1, 1, 'order_NqBDRgB7sJeAp9', 'pay_NqBDaS9GOli0Jj', '221c74ef5e763141e3da33d2f0f4e0a57cdae7742f11dee28e34a02d095d077f', '56-Vatsalya Bunglows,Vesu,Bharuch,Gujarat', '2024-03-24 11:43:18', 2100),
(8, 11, 3, 4, 'order_NtVrE6mwpPoicu', 'pay_NtVs84gzRVcjKS', '012997281beef89c6fffa7f8d06c4d6789f735f3172838687d97f9c1779e6af4', '301-Evergreen Complex,Adajan,mumbai,Maharashtra', '2024-04-01 21:52:39', 1100);

-- --------------------------------------------------------

--
-- Table structure for table `tblunit`
--

CREATE TABLE `tblunit` (
  `unitid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblunit`
--

INSERT INTO `tblunit` (`unitid`, `type`) VALUES
(1, 'kilograms'),
(2, 'grams'),
(3, 'ton'),
(4, 'quintal'),
(5, 'piece');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `regdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userid`, `username`, `password`, `type`, `status`, `regdt`) VALUES
(1, 'Bhavya', '123', 'farmer', 1, '2024-03-02 14:23:55'),
(2, 'Kathan', '123', 'buyer', 1, '2024-03-02 17:47:44'),
(5, 'Jash', '123', 'buyer', 1, '2024-03-09 07:00:32'),
(8, 'kathunn', '123', 'farmer', 1, '2024-03-09 07:07:38'),
(9, 'dev', '123', 'buyer', 1, '2024-03-09 07:08:57'),
(10, 'devansh', '123', 'buyer', 1, '2024-03-09 07:11:18'),
(11, 'Nillu', '123', 'farmer', 0, '2024-03-14 10:41:09'),
(12, 'Dev', '123', 'buyer', 1, '2024-03-19 08:42:25'),
(16, 'Alex', '123', 'farmer', 1, '2024-03-29 11:50:34'),
(19, 'Akash', '123', 'farmer', 1, '2024-03-31 11:41:23'),
(23, 'Jay', '123', 'farmer', 1, '2024-04-01 11:53:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblauction`
--
ALTER TABLE `tblauction`
  ADD PRIMARY KEY (`auctionid`);

--
-- Indexes for table `tblbid`
--
ALTER TABLE `tblbid`
  ADD PRIMARY KEY (`bidid`);

--
-- Indexes for table `tblbuyer`
--
ALTER TABLE `tblbuyer`
  ADD PRIMARY KEY (`buyerid`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  ADD PRIMARY KEY (`farmerid`);

--
-- Indexes for table `tblreport`
--
ALTER TABLE `tblreport`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`subcategoryid`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD PRIMARY KEY (`unitid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblauction`
--
ALTER TABLE `tblauction`
  MODIFY `auctionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblbid`
--
ALTER TABLE `tblbid`
  MODIFY `bidid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblbuyer`
--
ALTER TABLE `tblbuyer`
  MODIFY `buyerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `farmerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblreport`
--
ALTER TABLE `tblreport`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `subcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `transactionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblunit`
--
ALTER TABLE `tblunit`
  MODIFY `unitid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
