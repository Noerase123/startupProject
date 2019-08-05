-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 02:36 PM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `firstname`, `lastname`, `activated`, `date_created`) VALUES
(1, 'admin@gmail.com', 'admin123', 'Admin Isaac', '', 1, '2019-07-30 07:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ajax`
--

CREATE TABLE `tbl_ajax` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_desc` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `ref_id`, `customer_name`, `image`, `title`, `title_desc`, `price`, `quantity`, `date_created`) VALUES
(62, 138, '', 'uploads/8ea0973ff9f595070fed86d3539ef6bffont awesome.png', 'testings', 'admin selector', 12000, 1, '2019-08-05 17:32:20'),
(63, 138, '', 'uploads/8ea0973ff9f595070fed86d3539ef6bffont awesome.png', 'testings', 'admin selector', 12000, 1, '2019-08-05 17:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `ref_id`, `cat_name`, `activated`, `date_created`) VALUES
(31, 1, 'Fantasy', 1, '2019-07-11 21:11:06'),
(33, 1, 'Science-Fiction', 1, '2019-07-11 21:11:30'),
(34, 1, 'Romance ', 1, '2019-07-11 21:11:38'),
(35, 1, 'Thriller', 1, '2019-07-11 21:11:50'),
(37, 1, 'Comedy', 1, '2019-07-11 21:12:12'),
(41, 1, 'Mystery', 0, '2019-07-23 18:52:04'),
(42, 1, 'Education', 0, '2019-07-23 18:53:12'),
(44, 1, 'Oldies', 0, '2019-08-05 20:23:32');

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
(1, 'Calamba City, Laguna, Philippines', '(02) 8085874', '(02) 8975992', '09062220546 / 09188378094', 'noerase12@gmail.com');

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
(1, 'cart', 'cart', '2019-08-02 09:04:14'),
(2, 'users', 'user', '2019-08-05 12:38:29'),
(3, 'products', 'products', '2019-07-21 16:22:09'),
(4, 'product categories', 'product_category', '2019-07-21 16:22:09'),
(5, 'product review', 'product_review', '2019-07-29 20:39:06'),
(6, 'Page reviews', 'reviews', '2019-07-21 16:22:09'),
(7, 'about', 'about', '2019-07-21 16:22:09'),
(8, 'contact us', 'contact_us', '2019-07-21 16:22:09'),
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
(1, 'uploads/c3612944d01e83e1e934b1e09a00763ecarousel-3.jpg', 'uploads/c3612944d01e83e1e934b1e09a00763eLuneta.jpg', 'uploads/c3612944d01e83e1e934b1e09a00763eLuneta.jpg', 1, '2019-07-24 17:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pending_reviews`
--

CREATE TABLE `tbl_pending_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_prod_review`
--

CREATE TABLE `tbl_prod_review` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `rev_name` varchar(255) NOT NULL,
  `rev_star` int(11) NOT NULL,
  `rev_title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_review`
--

INSERT INTO `tbl_prod_review` (`id`, `ref_id`, `rev_name`, `rev_star`, `rev_title`, `message`, `date_posted`) VALUES
(1, 130, 'John Isaac', 4, 'awdadwdaw', 'awdadadawdawdawdawdawdawd', '2019-07-29 21:13:01'),
(8, 128, 'John Nikko', 5, 'Subject Math', 'because of you and its all because of you', '2019-07-30 10:14:41'),
(9, 129, 'John Nikko', 7, 'Hello World', 'Hello Motherfuckersssss!', '2019-07-30 13:06:50'),
(12, 130, 'John Isaac', 5, 'awdawdadawdaw', 'rgaergserser', '2019-08-01 22:43:44'),
(13, 130, 'John Isaac', 3, '2123123af', 'awdadaefqe', '2019-08-01 22:45:56'),
(14, 130, 'John Nikko', 5, 'awdawd', 'awdawdawd', '2019-08-05 10:52:28'),
(16, 138, 'John Nikko', 5, 'test', 'testet', '2019-08-05 12:27:10'),
(17, 138, 'John Nikko', 4, 'test', 'testttt', '2019-08-05 12:27:20');

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
  `ref_id` int(11) NOT NULL,
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

INSERT INTO `tbl_stack` (`id`, `ref_id`, `title`, `category`, `price`, `quantity`, `title_desc`, `image`, `some_text`, `description`, `date_created`) VALUES
(75, 0, 'awdawd', 'Science-Fiction', 0, 0, 'awdawd', 'uploads/5dd88b2b0a63d9b7cca9edbc5389fe9dcarousel-3.jpg', 'awdawdawd', 'awdawdawd', '2019-07-04 17:40:59'),
(105, 0, 'twitter', 'Fantasy', 0, 0, 'awdawd', 'uploads/4464d9a4a684459dc75a520c8aa06d36carousel-1.jpg', 'awdawdawd', 'awdawdawfawfawf', '2019-07-10 08:07:59'),
(106, 0, 'Books', 'Appliances', 0, 0, 'programming', 'uploads/d176942ee9dc469658e0dd04fb4e1dcaimage_30.jpg', 'bookings', 'this product is available in the store', '2019-07-11 13:39:53'),
(108, 0, 'fantastic bes', 'Fantasy', 0, 0, 'Fantasy', 'uploads/a42ce638fcc640931cb036689e553435image_14.jpg', 'dadawdawd', 'awdadadadawdawd', '2019-07-11 22:16:05'),
(112, 0, 'facebook', 'Thriller', 0, 0, 'mark zuckerberg', 'uploads/3bbaa3bb25674cb5592af38d69a78fabimage_07.png', 'adawdawd', 'adadawd', '2019-07-12 09:21:22'),
(114, 0, 'IT', 'Science-Fiction', 0, 0, 'Stephen Kings', 'uploads/3de35b93244fd30d1c65749dbef6b788image_01.png', '#horror', 'awdadwd', '2019-07-12 12:21:06'),
(117, 0, 'Baby ko! <3', 'Romance', 50000, 1, 'john isaac', 'uploads/056915c9a599a1d11ae203c7aadc63aaLADP9261.JPEG', '#cute #cutie', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2019-07-17 16:03:37'),
(118, 0, 'Detective Conan', 'Mystery', 0, 0, 'E.L. James', 'uploads/75da47551f203f4f358a84d9fbc85a733.JPG', '#detective', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', '2019-07-17 17:03:23'),
(119, 0, 'Ironman', 'Science-Fiction', 0, 0, 'james bond', 'uploads/67ca297f417197bd5a75be20f43fd366dorm2.jpg', '#ironman', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', '2019-07-17 17:27:40'),
(120, 0, 'ironman 2', 'Science-Fiction', 2000, 523, 'james bond', 'uploads/c5fde883a595dc1526f209180a9e543cdorm3.jpg', '#ironman2 #ironman', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-17 17:28:46'),
(122, 0, 'Programming', 'Education', 0, 0, 'John Doe', 'uploads/d94b38735a078e2cb7e7b2bd10c51894Bulalo-1.jpg', '#foodpanda', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-17 17:30:53'),
(123, 0, 'Architectural Database', 'Education', 0, 0, 'james bond', 'uploads/40df31804ada727bb7e3f32710e89284avatar-2.jpg', '#avatar', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.\r\n', '2019-07-17 17:31:40'),
(124, 0, 'Ecommerce website', 'Fantasy', 20000, 3000, 'john isaac', 'uploads/514a96b5baa9922deea551efbcfdaefcChicken-Platter-1.jpg', '#testing #onetwothree', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt i', '2019-07-18 12:16:43'),
(125, 0, 'testing new', 'Fantasy', 4, 12000, 'John Isaac', 'uploads/d74e61addc4de8ceb7fae459b0152723Baluarte.jpg', '#baluarte', 'wdawdafawefcawefaw', '2019-07-18 15:00:45'),
(126, 0, 'testinggggg', 'Fantasy', 123123123, 2147483647, 'awdawdwdaw', 'uploads/d43e98ee2379442ed828d23ba51c1749font awesome.png', 'wdawdawawdawd', 'awdadwdadawd', '2019-07-23 16:22:18'),
(128, 0, 'twitter', 'Science-Fiction', 1000, 500, 'twitter', 'uploads/004951c2853d9cc591f4b2a948079a6bLADP9261.JPEG', 'twitter', 'twittereererererer', '2019-07-23 16:25:01'),
(129, 0, 'facebook', 'Fantasy', 5000, 2, 'test', 'uploads/6c72d14b021d63d264d4e86d7f1971f9font awesome.png', '#tags', 'awdwadafawefawe', '2019-07-23 16:55:01'),
(130, 0, 'anne', 'Romance', 50000, 1, 'Patricia Anne Capuz', 'uploads/680a980a526681977c953aac9cfd84a4einstein remake.jpg', '#avatar', 'sort is a place for relaxation, Family Bondings and for Nature Lover. Beautiful place i can say , clean and nice amenities especially the pools i love their pools, its very clean. Most of all they allow my Fur.', '2019-07-26 11:34:11'),
(132, 0, 'testing', 'Fantasy', 34424, 222, 'awdawd', 'uploads/38f01a24d40534c71cca133de583f2b9Cara.jpg', 'awdawd', 'description', '2019-08-01 19:09:06'),
(138, 0, 'testings', 'Romance', 12000, 1, 'admin selector', 'uploads/8ea0973ff9f595070fed86d3539ef6bffont awesome.png', '#tags', 'awdawdefabulldogs', '2019-08-01 21:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_top_categories`
--

CREATE TABLE `tbl_top_categories` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `top_name` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_top_categories`
--

INSERT INTO `tbl_top_categories` (`id`, `ref_id`, `top_name`, `date_created`) VALUES
(1, 0, 'All Categories', '2019-08-05 17:29:05'),
(2, 0, 'New Release', '2019-08-05 17:29:40'),
(3, 0, 'All time Favorites', '2019-08-05 17:29:56'),
(4, 0, 'Best Seller', '2019-08-05 17:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `firstname`, `lastname`, `birthdate`, `date_created`) VALUES
(1, 'admin@gmail.com', 'admin123', 'John Isaac', 'Caasi', '', '2019-06-09 18:57:00'),
(3, 'user', 'user123', 'John Nikko', 'Caasi', '', '2019-06-09 18:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_items`
--

CREATE TABLE `tbl_user_items` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_items`
--

INSERT INTO `tbl_user_items` (`id`, `ref_id`, `user_name`, `title`, `price`, `quantity`, `date_created`) VALUES
(4, 130, 'John Nikko', 'anne', 50000, 1, '2019-08-05 14:02:48'),
(5, 129, 'John Nikko', 'facebook', 5000, 1, '2019-08-05 14:02:48'),
(6, 128, 'John Nikko', 'twitter', 1000, 1, '2019-08-05 14:02:48'),
(19, 130, 'John Isaac', 'anne', 50000, 1, '2019-08-05 14:42:20'),
(20, 138, 'John Isaac', 'testings', 12000, 1, '2019-08-05 14:42:20'),
(21, 129, 'John Isaac', 'facebook', 5000, 1, '2019-08-05 14:42:20'),
(22, 124, 'John Isaac', 'Ecommerce website', 20000, 1, '2019-08-05 15:58:56');

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
(1, 'Products', 'Reviews', 'Contact Us', 'About', 'uploads/995bb85ef4932e01c561735019037566vitalis-preloader.png', 'uploads/995bb85ef4932e01c561735019037566vitalis-preloader.png', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum ', 'Copyright Â©2019 Test Website Name - All Rights Reserved', 'uploads/995bb85ef4932e01c561735019037566carousel-1.jpg', 'uploads/318abfdcdd18d34edb75e669583b3273vitalis-preloader.png', 'image where it live', 0, '2019-07-10 21:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ajax`
--
ALTER TABLE `tbl_ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
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
-- Indexes for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
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
-- Indexes for table `tbl_top_categories`
--
ALTER TABLE `tbl_top_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_items`
--
ALTER TABLE `tbl_user_items`
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
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ajax`
--
ALTER TABLE `tbl_ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_stack`
--
ALTER TABLE `tbl_stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `tbl_top_categories`
--
ALTER TABLE `tbl_top_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user_items`
--
ALTER TABLE `tbl_user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
