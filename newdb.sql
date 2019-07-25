-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 03:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `some_text` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `name`, `image1`, `image2`, `image3`, `some_text`, `description`, `date_posted`, `date_created`) VALUES
(1, 'Hello World!', 'uploads/162150414992b948dc39fca75ad781c4carousel-1.jpg', 'uploads/162150414992b948dc39fca75ad781c4carousel-2.jpg', 'uploads/162150414992b948dc39fca75ad781c4carousel-3.jpg', 'why this website?', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-16 22:11:13', '2019-07-16 22:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `cat_name`, `activated`, `date_created`) VALUES
(31, 'Fantasy', 1, '2019-07-11 21:11:06'),
(33, 'Science-Fiction', 1, '2019-07-11 21:11:30'),
(34, 'Romance ', 1, '2019-07-11 21:11:38'),
(35, 'Thriller', 1, '2019-07-11 21:11:50'),
(37, 'Comedy', 1, '2019-07-11 21:12:12'),
(41, 'Mystery', 0, '2019-07-23 18:52:04'),
(42, 'Education', 0, '2019-07-23 18:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_info`
--

CREATE TABLE `tbl_contact_info` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel_no` varchar(255) NOT NULL,
  `fax_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_info`
--

INSERT INTO `tbl_contact_info` (`id`, `address`, `tel_no`, `fax_no`, `mobile_no`, `email`) VALUES
(1, 'Calamba City, Laguna, Philippiness', '(02) 8085874', '(02) 8975992', '09062220546 / 09188378094', 'noerase12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ecommerce_config`
--

CREATE TABLE `tbl_ecommerce_config` (
  `id` int(11) NOT NULL,
  `activated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ecommerce_config`
--

INSERT INTO `tbl_ecommerce_config` (`id`, `activated`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menus`
--

INSERT INTO `tbl_menus` (`id`, `menu_name`, `menu_link`, `date_created`) VALUES
(3, 'products', 'products', '2019-07-21 16:22:09'),
(4, 'product categories', 'product_category', '2019-07-21 16:22:09'),
(5, 'reviews', 'reviews', '2019-07-21 16:22:09'),
(6, 'about', 'about', '2019-07-21 16:22:09'),
(7, 'contact us', 'contact_us', '2019-07-21 16:22:09'),
(11, 'header Settings', 'header', '2019-07-22 20:42:59'),
(13, 'footer settings', 'footer', '2019-07-22 20:45:51'),
(14, 'parallax settings', 'parallax', '2019-07-23 16:16:46'),
(15, 'activity log', 'activity_log', '2019-07-24 16:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parallax`
--

CREATE TABLE `tbl_parallax` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parallax`
--

INSERT INTO `tbl_parallax` (`id`, `image`, `image2`, `image3`, `activated`, `date_created`) VALUES
(1, 'uploads/532168bd6e989437dd39569bb947179fcarousel-2.jpg', 'uploads/532168bd6e989437dd39569bb947179fLuneta.jpg', 'uploads/532168bd6e989437dd39569bb947179fcarousel-1.jpg', 1, '2019-07-24 17:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pending_reviews`
--

CREATE TABLE `tbl_pending_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pending_reviews`
--

INSERT INTO `tbl_pending_reviews` (`id`, `name`, `description`, `date_created`) VALUES
(2, 'Johnny English', 'Loreland Farm Resort is a place for relaxation, Family Bondings and for Nature Lover. Beautiful place i can say , clean and nice amenities especially the pools i love their pools, its very clean. Most of all they allow my Fur Babies to come .... they have fun and enjoyed the place too and for that i can truly say its a haven !!!', 0),
(3, 'Hello World', 'Loreland Farm Resort is a place for relaxation, Family Bondings and for Nature Lover. Beautiful place i can say , clean and nice amenities especially the pools i love their pools, its very clean. Most of all they allow my Fur Babies to come .... they have fun and enjoyed the place too and for that i can truly say its a haven !!!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` int(20) DEFAULT NULL,
  `item_desc` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `item_name`, `item_price`, `item_desc`, `date_created`) VALUES
(1, 'Item', 1500, 'item1 is not available but you can buy it today', '2019-06-09 19:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`id`, `name`, `image`, `description`, `date_created`) VALUES
(2, 'Dean Wewet Fabian', '', 'Loreland Farm Resort is a place for relaxation, Family Bondings and for Nature Lover. Beautiful place i can say , clean and nice amenities especially the pools i love their pools, its very clean. Most of all they allow my Fur Babies to come .... they have fun and enjoyed the place too and for that i can truly say its a haven !!!', '2019-07-24 09:22:37'),
(4, 'John Doe', '', 'sort is a place for relaxation, Family Bondings and for Nature Lover. Beautiful place i can say , clean and nice amenities especially the pools i love their pools, its very clean. Most of all they allow my Fur Babies to come .... they have fun and enjoyed the place too and for that i can truly s', '2019-07-24 20:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stack`
--

CREATE TABLE `tbl_stack` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `title_desc` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `some_text` varchar(50) DEFAULT NULL,
  `description` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stack`
--

INSERT INTO `tbl_stack` (`id`, `title`, `category`, `price`, `quantity`, `title_desc`, `image`, `some_text`, `description`, `date_created`) VALUES
(75, 'awdawd', 'Science-Fiction', 0, 0, 'awdawd', 'uploads/5dd88b2b0a63d9b7cca9edbc5389fe9dcarousel-3.jpg', 'awdawdawd', 'awdawdawd', '2019-07-04 17:40:59'),
(105, 'twitter', 'Fantasy', 0, 0, 'awdawd', 'uploads/4464d9a4a684459dc75a520c8aa06d36carousel-1.jpg', 'awdawdawd', 'awdawdawfawfawf', '2019-07-10 08:07:59'),
(106, 'Books', 'Appliances', 0, 0, 'programming', 'uploads/d176942ee9dc469658e0dd04fb4e1dcaimage_30.jpg', 'bookings', 'this product is available in the store', '2019-07-11 13:39:53'),
(108, 'fantastic bes', 'Fantasy', 0, 0, 'Fantasy', 'uploads/a42ce638fcc640931cb036689e553435image_14.jpg', 'dadawdawd', 'awdadadadawdawd', '2019-07-11 22:16:05'),
(112, 'facebook', 'Thriller', 0, 0, 'mark zuckerberg', 'uploads/3bbaa3bb25674cb5592af38d69a78fabimage_07.png', 'adawdawd', 'adadawd', '2019-07-12 09:21:22'),
(114, 'IT', 'Science-Fiction', 0, 0, 'Stephen Kings', 'uploads/3de35b93244fd30d1c65749dbef6b788image_01.png', '#horror', 'awdadwd', '2019-07-12 12:21:06'),
(117, 'Baby ko! <3', 'Romance', 50000, 1, 'john isaac', 'uploads/056915c9a599a1d11ae203c7aadc63aaLADP9261.JPEG', '#cute #cutie', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2019-07-17 16:03:37'),
(118, 'Detective Conan', 'Mystery', 0, 0, 'E.L. James', 'uploads/75da47551f203f4f358a84d9fbc85a733.JPG', '#detective', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', '2019-07-17 17:03:23'),
(119, 'Ironman', 'Science-Fiction', 0, 0, 'james bond', 'uploads/67ca297f417197bd5a75be20f43fd366dorm2.jpg', '#ironman', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', '2019-07-17 17:27:40'),
(120, 'ironman 2', 'Science-Fiction', 2000, 523, 'james bond', 'uploads/c5fde883a595dc1526f209180a9e543cdorm3.jpg', '#ironman2 #ironman', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-17 17:28:46'),
(122, 'Programming', 'Education', 0, 0, 'John Doe', 'uploads/d94b38735a078e2cb7e7b2bd10c51894Bulalo-1.jpg', '#foodpanda', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-17 17:30:53'),
(123, 'Architectural Database', 'Education', 0, 0, 'james bond', 'uploads/40df31804ada727bb7e3f32710e89284avatar-2.jpg', '#avatar', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.\r\n', '2019-07-17 17:31:40'),
(124, 'Ecommerce website', 'Fantasy', 20000, 3000, 'john isaac', 'uploads/514a96b5baa9922deea551efbcfdaefcChicken-Platter-1.jpg', '#testing #onetwothree', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt i', '2019-07-18 12:16:43'),
(125, 'testing new', 'Fantasy', 4, 12000, 'John Isaac', 'uploads/d74e61addc4de8ceb7fae459b0152723Baluarte.jpg', '#baluarte', 'wdawdafawefcawefaw', '2019-07-18 15:00:45'),
(126, 'testinggggg', 'Fantasy', 123123123, 2147483647, 'awdawdwdaw', 'uploads/d43e98ee2379442ed828d23ba51c1749font awesome.png', 'wdawdawawdawd', 'awdadwdadawd', '2019-07-23 16:22:18'),
(127, 'twitter', 'Fantasy', 1000000, 2222, 'twitter', 'uploads/81b44297c50af1151464369e5fd3958cLADP9261.JPEG', 'twitter', 'twittereererererer', '2019-07-23 16:24:18'),
(128, 'twitter', 'Science-Fiction', 1000000, 2222, 'twitter', 'uploads/004951c2853d9cc591f4b2a948079a6bLADP9261.JPEG', 'twitter', 'twittereererererer', '2019-07-23 16:25:01'),
(129, 'facebook', 'Fantasy', 500000, 2, 'test', 'uploads/6c72d14b021d63d264d4e86d7f1971f9font awesome.png', '#tags', 'awdwadafawefawe', '2019-07-23 16:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `date_created`) VALUES
(1, 'admin', 'admin123', '2019-06-09 18:57:00'),
(3, 'user', 'user123', '2019-06-09 18:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_content`
--

CREATE TABLE `tbl_web_content` (
  `id` int(11) NOT NULL,
  `nav_menu1` varchar(50) NOT NULL,
  `nav_menu2` varchar(50) NOT NULL,
  `nav_menu3` varchar(50) NOT NULL,
  `nav_menu4` varchar(50) NOT NULL,
  `nav_logo` varchar(255) NOT NULL,
  `home_logo` varchar(255) NOT NULL,
  `why_desc` text NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `footer_image` varchar(255) NOT NULL,
  `text_display` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web_content`
--

INSERT INTO `tbl_web_content` (`id`, `nav_menu1`, `nav_menu2`, `nav_menu3`, `nav_menu4`, `nav_logo`, `home_logo`, `why_desc`, `footer_text`, `header_image`, `footer_image`, `text_display`, `activated`, `date_created`) VALUES
(1, 'Products', 'Reviews', 'Contact Us', 'About', 'uploads/b9cb5236474c82fc4d55eef92fcc42f1vitalis-preloader.png', 'uploads/b9cb5236474c82fc4d55eef92fcc42f1vitalis-preloader.png', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum ', 'Copyright Â©2019 Test Website Name - All Rights Reserved', 'uploads/b9cb5236474c82fc4d55eef92fcc42f1Luneta.jpg', 'uploads/318abfdcdd18d34edb75e669583b3273vitalis-preloader.png', 'image where it live', 0, '2019-07-10 21:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ecommerce_config`
--
ALTER TABLE `tbl_ecommerce_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_parallax`
--
ALTER TABLE `tbl_parallax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pending_reviews`
--
ALTER TABLE `tbl_pending_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stack`
--
ALTER TABLE `tbl_stack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ecommerce_config`
--
ALTER TABLE `tbl_ecommerce_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_parallax`
--
ALTER TABLE `tbl_parallax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pending_reviews`
--
ALTER TABLE `tbl_pending_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_stack`
--
ALTER TABLE `tbl_stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
