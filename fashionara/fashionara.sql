-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2016 at 04:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fashionara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Merry', '6afe0fe1ff8212fef7b6e63b9ba3cefb'),
(2, 'bhawna', 'a925576942e94b2ef57a066101b48876'),
(3, 'mahi', 'viksmahi'),
(4, 'manjinder', 'manjinder'),
(5, 'amandeep', 'amandeep');

-- --------------------------------------------------------

--
-- Table structure for table `bcustomer`
--

CREATE TABLE IF NOT EXISTS `bcustomer` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bcustomer`
--

INSERT INTO `bcustomer` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'bhawna', 'bh@gmail.com', 'chd', '9456734567'),
(2, 'bhawna', 'bh@gmail.com', 'chd', '9456734567'),
(3, 'bhawna', 'bh@gmail.com', 'chd', '9456734567'),
(4, 'bhawna', 'bh@gmail.com', 'chd', '9456734567'),
(5, 'fff', 'ff', 'ffff', 'ff'),
(6, 'sunny', 'sunny@gmail.com', '21 chd', '98756745678'),
(7, 'sunny', 'sunny@gmail.com', '21 chd', '98756745678'),
(8, 'sunny', 'sunny@gmail.com', '21 chd', '98756745678'),
(9, 'sunny', 'sunny@gmail.com', '21 chd', '98756745678'),
(10, 'sunny', 'sunny@gmail.com', '21 chd', '98756745678'),
(11, 'daizy', 'jindal.daizy@gmail.com', 'jnxjkxc', '9417831377'),
(12, 'daizy', 'jindal.daizy@gmail.com', 'jnxjkxc', '9417831377');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maincat` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `maincat`, `Description`) VALUES
(1, 'Men', 'this category contain men''s wear,men''s footwear and kids wear...'),
(2, 'Women', 'contains all type of women clothes,footwearsand earings'),
(3, 'Kids', 'contain information about all toys...'),
(4, 'Electronics', 'it has the mobile ,laptopsand pendrives'),
(5, 'Beauty', 'amway products are avaliable,...'),
(6, 'Kitchen', 'Furniture,decor is available'),
(7, 'Sale', 'dcat');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `serialid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`serialid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`serialid`, `username`, `email`, `message`) VALUES
(1, 'merry', 'merry.khushi@gmail.com', 'hi hello'),
(2, 'zdsdgf', '', ''),
(3, 'anu', '', ''),
(4, 'skcjc', '', ''),
(5, 'abcddd', '', ''),
(6, 'aaaa', '', 'sdsvdfb'),
(7, 'scfacd', '', 'c cz hellogvxhjsj');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Usertype` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `mobile_no`, `address`, `email`, `gender`, `Usertype`) VALUES
(21, 'bhawna.', 'e27c83838dcef10282ad807e0550c5f7', '89765456789', 'chd', 'bhawna@gmail.com', 'Female', 1),
(23, 'sunny', 'fcea920f7412b5da7be0cf42b8c93759', '98756745678', '21 chd', 'sunny@gmail.com', 'Male', 2),
(24, 'sanchita', 'a068de0f9c9c9b4ba13842452fa576ed', '9856723456', 'bti', 'sanchu@gmail.com', 'Female', 2),
(25, 'Merrygarg', '0f6a4989fab0693c30eb02269d4d24d6', '9871235678', '21c..chandigarh', 'merry@gmail.com', 'Female', 2),
(26, 'merry', 'ad9055cbf9f513f5d08c93064d547abd', '9087867546', 'sec 22 a', 'merry1@gmail.com', 'Female', 2),
(27, 'daizy', '94442b2975269187949fa4717bc975ca', '9417831377', 'jnxjkxc', 'jindal.daizy@gmail.com', 'Female', 2),
(28, 'daizy', '161360c6a7fc57d3b5c7243df47a6146', '34567890', 'dfghjkl', 'jindal.daizy1@gmail.com', 'Female', 2),
(29, 'a', 'dc483e80a7a0bd9ef71d8cf973673924', '9988844639', '#4', 'abc@gmail.com', 'Female', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(255) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`serial`, `emailid`) VALUES
(1, 'Subscribe'),
(2, 'merry@gmail.com'),
(3, 'rashmiuppal@gmail.com'),
(4, 'merry@gmail.com'),
(5, 'bh@gmail.com'),
(6, 'bhdgthtj'),
(7, 'fdsgytkuynmjl'),
(8, 'gyuiughui'),
(9, 'dggjjkjvn'),
(10, 'gffhjjgj'),
(11, 'adwet5@gmail.com'),
(12, 'asdd@gmail.com'),
(13, 'merry1@gmail.com'),
(14, 'merry.khushi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`, `amount`) VALUES
(1, '2013-03-30', 1, 0),
(2, '2013-03-30', 2, 0),
(3, '2013-03-30', 3, 0),
(4, '2013-03-30', 4, 0),
(5, '2013-03-30', 5, 0),
(6, '2013-05-02', 0, 0),
(7, '2013-05-02', 0, 0),
(8, '2013-05-02', 0, 0),
(9, '2013-05-02', 0, 0),
(10, '2013-05-02', 0, 0),
(11, '2013-05-02', 0, 0),
(12, '2013-05-03', 0, 0),
(13, '2013-05-05', 0, 0),
(14, '2013-05-07', 0, 0),
(15, '2013-05-10', 0, 0),
(16, '2013-05-10', 0, 20550),
(17, '2013-05-10', 0, 1155),
(18, '2013-05-10', 6, 1155),
(19, '2013-05-10', 7, 500),
(20, '2013-05-10', 8, 500),
(21, '2013-05-15', 9, 500),
(22, '2013-05-15', 10, 500),
(23, '2014-04-01', 11, 550),
(24, '2014-04-16', 12, 20600);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 10, 1, 655),
(1, 22, 1, 10000),
(2, 10, 1, 655),
(2, 22, 1, 10000),
(3, 10, 1, 655),
(3, 22, 1, 10000),
(4, 10, 1, 655),
(4, 22, 1, 10000),
(5, 7, 1, 50000),
(6, 3, 1, 600),
(6, 24, 1, 600),
(6, 2, 1, 550),
(6, 4, 1, 800),
(6, 1, 1, 500),
(7, 3, 1, 600),
(7, 24, 1, 600),
(7, 2, 1, 550),
(7, 4, 1, 800),
(7, 1, 1, 500),
(7, 9, 1, 9000),
(8, 3, 1, 600),
(8, 24, 1, 600),
(8, 2, 1, 550),
(8, 4, 1, 800),
(8, 1, 1, 500),
(8, 9, 1, 9000),
(9, 3, 1, 600),
(9, 24, 1, 600),
(9, 2, 1, 550),
(9, 4, 1, 800),
(9, 1, 1, 500),
(9, 9, 1, 9000),
(10, 3, 1, 600),
(10, 24, 1, 600),
(10, 2, 1, 550),
(10, 4, 1, 800),
(10, 1, 1, 500),
(10, 9, 1, 9000),
(11, 5, 1, 1000),
(12, 4, 3, 800),
(13, 2, 1, 550),
(14, 4, 1, 800),
(15, 2, 1, 550),
(15, 4, 1, 800),
(15, 10, 1, 655),
(16, 2, 1, 550),
(16, 8, 1, 20000),
(17, 1, 1, 500),
(17, 10, 1, 655),
(18, 1, 1, 500),
(18, 10, 1, 655),
(19, 1, 1, 500),
(20, 1, 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `subid` int(11) NOT NULL,
  `pquantity` int(11) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `subid` (`subid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pcode`, `pname`, `price`, `subid`, `pquantity`, `pdescription`, `pimage`, `size`, `category`) VALUES
(1, 'P001', 'Long top', '500.00', 4, 4, 'latest designer top for girls....', '5186569c09d69.jpg', 'M,S,XL,L', 2),
(2, 'P002', 'Sandels', '550.00', 5, 8, 'designer look with flowers ', '518656c3d4fc4.jpg', '', 2),
(3, 'P003', 'High heels', '600.00', 5, 15, 'black color with cool look with high heels', '51876d9d85335.jpg', '', 2),
(4, 'P004', 'Tommy belts', '800.00', 12, 12, 'brown color belts of latest design...', '51876de1176ed.jpeg', '', 1),
(6, 'P006', 'Shoes', '700.00', 3, 10, 'shoes of good leather nd reliable', '51876e3788e8c.jpg', '', 1),
(8, 'P008', 'Acer laptop', '20000.00', 9, 6, 'new advance technology laptop with additional RAM', '51876e712fdc3.jpg', '', 4),
(9, 'P009', ' Samsung mobile', '9000.00', 10, 6, 'Android application in latest moblie in white color', '51876e9898290.jpeg', '', 4),
(10, 'P010', ' Pink Teddy', '655.00', 15, 8, 'soft stuff teddy in pink color', '51876ec2db211.jpg', '', 3),
(11, 'P011', 'Teddy', '999.00', 15, 10, 'teddy with flowers', '518773f16beb1.jpg', '', 3),
(12, 'P012', 'Amway Shampoo', '645.00', 7, 4, 'shampoo of amway for shiny hairs', '51876ee63919c.jpg', '', 5),
(13, 'P013', 'Amway Facewash', '500.00', 7, 8, 'facewash for all type skin ', '51876f418a0d1.jpg', '', 5),
(14, 'P014', 'Amway Lotion', '600.00', 7, 6, 'lotion to protect from sun', '51876f6d62194.jpg', '', 5),
(15, 'P015', 'Diamond Ring', '1000000.00', 8, 4, 'New Desinger ring in market with discount', '51876f91b7696.jpg', '', 2),
(16, 'P016', 'Designer Ring', '500000.00', 8, 3, 'new ring with diamond look', '51876fb314288.jpg', '', 2),
(17, 'P017', 'Titan Watch', '2000.00', 12, 3, 'having good look with mideium daill', '5187700501b02.jpg', 'x,y,n', 1),
(18, 'P018', 'Samsung Black', '7000.00', 10, 3, 'having good application with android', '5187704176ae6.jpg', '', 4),
(19, 'P019', 'Sandisk Pendrive', '800.00', 11, 3, 'USB having Storage of 8gb', '518770927231c.jpg', '', 4),
(20, 'P020', 'Funny Pendrive', '500.00', 11, 9, 'funny pendrive having good storage', '5187720cf3ae2.jpg', '', 4),
(21, 'P021', 'stylish belts', '2000.00', 12, 5, 'designer belt with brown colour', '5155a30c8306f.jpg', '', 1),
(22, 'P022', 'Diamond Necklace', '10000.00', 8, 3, 'designer necklace with diamond look', '5155a4ba23c43.jpg', '', 2),
(23, 'P023', 'diamond ring', '30000.00', 8, 4, 'a stylish and desingner ring...', '5187713f3a513.jpg', '', 2),
(24, 'P024', 'Funny Pendrive', '600.00', 11, 12, 'funny pen drives for daily use....', '5187717d6677e.jpg', '', 4),
(25, 'P025', 'Diamondlook Pendrive', '1000.00', 11, 3, 'the stylish Pendrive....', '518771b3e4c4c.jpg', '', 4),
(26, 'P026', ' Shirt', '1000.00', 2, 5, 'Men clothes are available of all brands', '51877259647e5.JPG', '', 1),
(27, 'P027', 'Tshirt', '1000.00', 2, 3, 'Different colours are available with all size', '518772911b040.JPG', '', 1),
(28, 'P028', 'Men shirt', '1400.00', 2, 4, 'All type of brands are available with casual rates ', '518772a55a014.JPG', '', 1),
(29, 'P029', 'Shoes', '2000.00', 3, 2, 'Shoes with comfort and designer shoes', '518772f35078f.JPG', '', 1),
(30, 'P030', ' Shirt', '1000.00', 4, 4, 'Designer shirt with all brands on casual rates', '51877341858a6.jpg', '', 2),
(31, 'P031', 'Top', '1000.00', 4, 3, 'Having good Stuff of all brands', '5187735aa2c26.png', '', 2),
(32, 'P032', 'Footwear', '1100.00', 5, 3, 'all type of footwears are available ', '5183da4def34f.jpg', '', 2),
(33, 'P033', 'Shoes men', '1000.00', 3, 3, 'all brands are here', '518773c1ab2a4.JPG', '', 1),
(34, 'P034', 'Girl Dress', '1000.00', 6, 3, 'Blue color in frock', '518778b804807.jpg', '', 3),
(35, 'P034', 'Kid Shoes', '1200.00', 14, 3, 'casual shoes in all size', 'image2.jpg', '', 3),
(36, 'P035', 'Kids Sports', '800.00', 14, 2, 'comfortable shoes for kids', 'image10.jpg', '', 3),
(37, 'P036', 'Girl sandals', '1100.00', 14, 3, 'designer sandels for kid girls', 'image19.jpg', '', 3),
(38, 'P037', 'Boys shirt', '1200.00', 6, 4, 'clothes of boys in casual rates', '41.jpg', '', 3),
(39, 'P038', 'Girl dress', '500.00', 6, 3, 'new collection of kid girl tops with all colours', '37.jpg', '', 3),
(40, 'P039', 'Tub', '1200.00', 15, 4, 'toys to play for kids  ', 'ak13.jpg', '', 3),
(41, 'P040', 'Bangles', '200.00', 8, 4, 'Different colour bangles with new look', 'bangle3.jpeg', '', 2),
(42, 'P041', 'Earings', '1000.00', 8, 3, 'Diamond look earings with designer look', 'ear1.jpeg', '', 2),
(43, 'P042', 'Belts', '1000.00', 8, 4, 'New brandes with all colours belts are here', 'belt3.jpeg', '', 2),
(44, 'Po43', 'Necklace ', '2000.00', 8, 3, 'New look necklace with stones', 'j3.jpeg', '', 2),
(45, 'P044', 'Cluthes', '1000.00', 8, 5, 'Cluthes with new colours and designer look', 'clutches3.jpeg', '', 2),
(46, 'P045', 'Purse ', '1500.00', 8, 2, 'Black colour casual purse for routine use wiith good quality', 'image4.jpeg', '', 2),
(47, 'P046', 'Saree', '15000.00', 4, 4, 'designer saree with new look ', 'SAREE.jpeg', '', 2),
(48, 'P047', 'Suit ', '3000.00', 4, 3, 'suits with new look and casual rates', 'SUIT.jpeg', '', 2),
(49, 'P048', 'Punjabi suit', '3000.00', 4, 5, 'Suit with designer look ', '518a978fdaa97.jpg', '', 2),
(50, 'P049', 'Bridal Lehnga', '45000.00', 4, 4, 'Designer lehnga with new look ', 'bridal4.jpeg', '', 2),
(51, 'P050', 'Punjabi Suit', '1500.00', 4, 3, 'Designer Suit wirh new design', '350156.jpeg', '', 2),
(52, 'P051', 'Top', '1200.00', 4, 3, 'New look nand designer top', 'Screenshot_7.png', '', 2),
(53, 'P052', 'Red Belly', '2000.00', 5, 3, 'Red colour belly with new look', '2.jpg', '', 2),
(54, 'P053', 'Botties', '1000.00', 5, 4, 'Botties with different colours', '8.jpg', '', 2),
(55, 'P054', 'Sandeles', '2500.00', 5, 5, 'Sandeles with new flower', 'are (4).jpg', '', 2),
(56, 'P055', 'Yellow Sandeles', '1600.00', 5, 3, 'Yellow colour sandeles new demanded ', 'ddgdh (1).jpg', '', 2),
(57, 'P056', 'Designer Chappal', '1700.00', 5, 3, 'new design chappal with casual rate', '4.jpg', '', 2),
(58, 'P057', 'Flloters', '1800.00', 5, 3, 'Designer flloters with new look and all colours', '9.jpg', '', 2),
(59, 'P058', 'Goggles', '3500.00', 12, 4, 'goggles with new look', 'image1.jpeg', '', 1),
(60, 'P059', 'Belts', '4000.00', 12, 4, 'branded belts with all colours and designer look', 'BELT2.jpg', '', 1),
(61, 'P060', 'Scarfs', '1000.00', 12, 6, 'Scarfs for men with casual rates for party use', 'SCARFS.jpg', '', 1),
(62, 'P061', 'Watch', '4000.00', 12, 5, 'Watch with all new brands and different designs', '2.jpg', '', 1),
(63, 'P062', 'Wallet', '1500.00', 12, 4, 'nNew Branded Wallet with casual rates', 'MA07.JPG', '', 1),
(64, 'P063', 'Cap', '500.00', 12, 3, 'Caps with all colours with new design', 'CAP2.jpg', '', 1),
(65, 'P064', 'Summer wear', '1100.00', 6, 5, 'New Arrival for summer with casual rates', '24.jpg', '', 3),
(66, 'P065', 'Party Kid Dress', '0.00', 6, 5, 'Dress with different colour for party wear', '28.jpg', '', 3),
(67, 'P066', 'Summer Dress', '1400.00', 6, 7, 'New look Summer wear with soft stuff ', '38.jpg', '', 3),
(68, 'P067', 'Kid Kapri', '1100.00', 6, 5, 'Kapri for summer wear with good quality', '44.jpg', '', 3),
(69, 'P068', 'Kid Shirt', '1200.00', 6, 5, 'Boy shirt branded with casual rates with new look', '42.jpg', '', 3),
(70, 'P069', 'Frock', '1000.00', 6, 6, 'SGirl frock for routine use with good stuff and casual rate', '26.jpg', '', 3),
(71, 'P070', 'Flotters', '1200.00', 14, 5, 'Summer footwear for kids ', 'image6.jpg', '', 3),
(72, 'P071', 'Shoes men', '1500.00', 14, 6, 'Designer shoes of all colours for kids', 'image4.jpg', '', 3),
(73, 'P075', 'High heels', '3000.00', 18, 20, 'New designer look heels ', 'are (5).jpg', '', 7),
(74, 'P097', 'Suits', '3500.00', 19, 6, 'desingner suits', 'latestfashionofwomenclothing-1.jpg', '', 7),
(75, 'P081', 'Refrigrator', '500.00', 13, 10, 'furniture for daily use in our store', 'h8.jpeg', '', 6),
(76, 'P084', 'Frames', '1100.00', 17, 12, 'New Frames for kitchen', 'rose-scraps-70.gif', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE IF NOT EXISTS `product_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pro_id` int(11) NOT NULL,
  `Size` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product_size`
--


-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `subname` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`subid`),
  KEY `catid` (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subid`, `subname`, `catid`) VALUES
(2, 'Men''s Clothes', 1),
(3, 'Men''s Footwear', 1),
(4, 'Women''s Clothes', 2),
(5, 'Women''s Footwear', 2),
(6, 'Kids Clothing', 3),
(7, 'Amway', 5),
(8, 'Women''s Accessories', 2),
(9, 'Laptops', 4),
(10, 'Mobiles', 4),
(11, 'Pendrive', 4),
(12, 'Men''s Accessories', 1),
(13, 'Furniture', 6),
(14, 'Kids Footwear', 3),
(15, 'Toys', 3),
(16, 'Furnishing', 6),
(17, 'Decor', 6),
(18, 'Footwears', 7),
(19, 'Clothes', 7),
(20, 'Accessories', 7);
