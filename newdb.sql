-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 09:01 AM
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
(2, 'admin@gmail.com', '$2y$10$mHmCIPFXdgAbw6fUniI2DeFm0ZDb37chAsQheOQHcGOKR1BqdVzAG', 'Isaac', 'Caasi', 1, '2019-08-06 20:16:54');

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
(42, 1, 'Education', 0, '2019-07-23 18:53:12');

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
-- Table structure for table `tbl_customer_received`
--

CREATE TABLE `tbl_customer_received` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `ref_id2` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer_received`
--

INSERT INTO `tbl_customer_received` (`id`, `ref_id`, `ref_id2`, `user_name`, `title`, `price`, `quantity`, `date_created`) VALUES
(5, 3, 0, 'nikko@gmail.com', 'Jenny', 500, 1, '2019-08-12 14:24:38'),
(6, 4, 0, 'nikko@gmail.com', 'testings', 250, 1, '2019-08-12 14:24:38'),
(7, 6, 0, 'nikko@gmail.com', 'anne', 500, 1, '2019-08-12 14:24:38'),
(8, 7, 0, 'nikko@gmail.com', 'testing new', 400, 1, '2019-08-12 14:24:38'),
(9, 5, 0, 'noerase12@gmail.com', 'Jenny', 500, 1, '2019-08-12 14:24:44'),
(10, 8, 0, 'nikko@gmail.com', 'Jenny', 500, 1, '2019-08-12 14:39:31'),
(11, 9, 0, 'nikko@gmail.com', 'testings', 250, 1, '2019-08-12 14:39:31'),
(12, 10, 0, 'nikko@gmail.com', 'testing', 450, 1, '2019-08-12 14:39:31'),
(13, 11, 0, 'noerase12@gmail.com', 'testings', 250, 1, '2019-08-12 14:51:45'),
(14, 12, 0, 'noerase12@gmail.com', 'testing', 450, 1, '2019-08-12 14:51:45'),
(15, 13, 0, 'noerase12@gmail.com', 'Jenny', 500, 1, '2019-08-12 14:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deliver_process`
--

CREATE TABLE `tbl_deliver_process` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_existed_user`
--

CREATE TABLE `tbl_existed_user` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_existed_user`
--

INSERT INTO `tbl_existed_user` (`id`, `ref_id`, `email`, `date_created`) VALUES
(1, 1, 'noerase12@gmail.com', '2019-08-11 16:31:08'),
(2, 2, 'nikko@gmail.com', '2019-08-11 16:40:11');

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
(2, 'customer Cart', 'customer_cart', '2019-08-12 12:45:41'),
(3, 'Delivery', 'delivery', '2019-08-12 12:25:10'),
(4, 'item Entries', 'item_entries', '2019-07-24 16:25:55'),
(5, 'users', 'user', '2019-08-05 12:38:29'),
(6, 'products', 'products', '2019-07-21 16:22:09'),
(7, 'product categories', 'product_category', '2019-07-21 16:22:09'),
(8, 'product review', 'product_review', '2019-07-29 20:39:06'),
(9, 'Page reviews', 'reviews', '2019-07-21 16:22:09'),
(10, 'about', 'about', '2019-07-21 16:22:09'),
(11, 'contact us', 'contact_us', '2019-07-21 16:22:09'),
(12, 'header Settings', 'header', '2019-07-22 20:42:59'),
(13, 'footer settings', 'footer', '2019-07-22 20:45:51'),
(14, 'parallax settings', 'parallax', '2019-07-23 16:16:46');

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
(1, 'uploads/d3afbec118126c4a67c23246a750a36acarousel-1.jpg', 'uploads/d3afbec118126c4a67c23246a750a36acarousel-2.jpg', 'uploads/d3afbec118126c4a67c23246a750a36acarousel-3.jpg', 1, '2019-07-24 17:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pending_reviews`
--

CREATE TABLE `tbl_pending_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pending_reviews`
--

INSERT INTO `tbl_pending_reviews` (`id`, `name`, `image`, `title`, `description`, `date_created`) VALUES
(1, 'Anne ', '0', 'awdadwdaw', 'awdawwfawrgaergaerg', '2019-08-07 23:04:15'),
(2, 'pat@gmail.com', '0', 'rgaergaerg', 'awdargaerg', '2019-08-11 11:35:25');

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
  `rev_image` varchar(255) NOT NULL,
  `rev_title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_review`
--

INSERT INTO `tbl_prod_review` (`id`, `ref_id`, `rev_name`, `rev_star`, `rev_image`, `rev_title`, `message`, `date_posted`) VALUES
(62, 139, 'John Isaac', 5, 'uploads/cb6f783062553aa3b5bfae9d6b972b36einstein remake.jpg', 'awdawefawe', 'awrgaergre', '2019-08-11 20:05:05'),
(63, 139, 'John Isaac', 5, 'uploads/7a46a14d8867fd3b64dfd9783f4bb42fsample-image.jpg', 'wefaeger', 'putnagina  mooo!!', '2019-08-13 12:00:53');

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
(75, 0, 'awdawd', 'Science-Fiction', 100, 10, 'awdawd', 'uploads/5dd88b2b0a63d9b7cca9edbc5389fe9dcarousel-3.jpg', 'awdawdawd', 'awdawdawd', '2019-07-04 17:40:59'),
(105, 0, 'twitter', 'Fantasy', 100, 10, 'awdawd', 'uploads/4464d9a4a684459dc75a520c8aa06d36carousel-1.jpg', 'awdawdawd', 'awdawdawfawfawf', '2019-07-10 08:07:59'),
(106, 0, 'Books', 'Comedy', 100, 10, 'programming', 'uploads/d176942ee9dc469658e0dd04fb4e1dcaimage_30.jpg', 'bookings', 'this product is available in the store', '2019-07-11 13:39:53'),
(108, 0, 'fantastic bes', 'Fantasy', 1000, 10, 'Fantasy', 'uploads/a42ce638fcc640931cb036689e553435image_14.jpg', 'dadawdawd', 'awdadadadawdawd', '2019-07-11 22:16:05'),
(112, 0, 'facebook', 'Thriller', 100, 10, 'mark zuckerberg', 'uploads/3bbaa3bb25674cb5592af38d69a78fabimage_07.png', 'adawdawd', 'adadawd', '2019-07-12 09:21:22'),
(114, 0, 'IT', 'Science-Fiction', 100, 10, 'Stephen Kings', 'uploads/3de35b93244fd30d1c65749dbef6b788image_01.png', '#horror', 'awdadwd', '2019-07-12 12:21:06'),
(117, 0, 'Baby ko! <3', 'Romance', 500, 111, 'john isaac', 'uploads/63e681f0e7651d74d1cf2916d87e437fmaine mendoza.jpg', '#cute #cutie', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2019-07-17 16:03:37'),
(118, 0, 'Detective Conan', 'Mystery', 100, 10, 'E.L. James', 'uploads/75da47551f203f4f358a84d9fbc85a733.JPG', '#detective', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', '2019-07-17 17:03:23'),
(119, 0, 'Ironman', 'Science-Fiction', 100, 10, 'james bond', 'uploads/67ca297f417197bd5a75be20f43fd366dorm2.jpg', '#ironman', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', '2019-07-17 17:27:40'),
(120, 0, 'ironman 2', 'Science-Fiction', 2000, 522, 'james bond', 'uploads/c5fde883a595dc1526f209180a9e543cdorm3.jpg', '#ironman2 #ironman', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-17 17:28:46'),
(122, 0, 'Programming', 'Education', 100, 10, 'John Doe', 'uploads/d94b38735a078e2cb7e7b2bd10c51894Bulalo-1.jpg', '#foodpanda', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-07-17 17:30:53'),
(123, 0, 'Architectural Database', 'Education', 100, 9, 'james bond', 'uploads/40df31804ada727bb7e3f32710e89284avatar-2.jpg', '#avatar', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.\r\n', '2019-07-17 17:31:40'),
(124, 0, 'Ecommerce website', 'Fantasy', 20000, 30, 'john isaac', 'uploads/514a96b5baa9922deea551efbcfdaefcChicken-Platter-1.jpg', '#testing #onetwothree', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt i', '2019-07-18 12:16:43'),
(125, 0, 'testing new', 'Fantasy', 400, 11998, 'John Isaac', 'uploads/d74e61addc4de8ceb7fae459b0152723Baluarte.jpg', '#baluarte', 'wdawdafawefcawefaw', '2019-07-18 15:00:45'),
(126, 0, 'testinggggg', 'Fantasy', 100, 214, 'awdawdwdaw', 'uploads/720730b7a0e9a214a981b8cd37c74c9femma watson.jpg', 'wdawdawawdawd', 'awdadwdadawd', '2019-07-23 16:22:18'),
(128, 0, 'twitter', 'Science-Fiction', 200, 500, 'twitter', 'uploads/f52a76b6f94a6669f0d13143c62afff8bes ecka.jpg', 'twitter', 'twittereererererer', '2019-07-23 16:25:01'),
(129, 0, 'facebook', 'Fantasy', 500, 9, 'test', 'uploads/6c72d14b021d63d264d4e86d7f1971f9font awesome.png', '#tags', 'awdwadafawefawe', '2019-07-23 16:55:01'),
(130, 0, 'anne', 'Romance', 500, 6, 'John Isaac', 'uploads/680a980a526681977c953aac9cfd84a4einstein remake.jpg', '#avatar', 'sort is a place for relaxation, Family Bondings and for Nature Lover. Beautiful place i can say , clean and nice amenities especially the pools i love their pools, its very clean. Most of all they allow my Fur.', '2019-07-26 11:34:11'),
(132, 0, 'testing', 'Fantasy', 450, 14, 'awdawd', 'uploads/38f01a24d40534c71cca133de583f2b9Cara.jpg', 'awdawd', 'description', '2019-08-01 19:09:06'),
(138, 0, 'testings', 'Romance', 250, 104, 'admin selector', 'uploads/055a9f9f0eaf706dda6551f4b9a25890liza.jpg', '#tags', 'awdawdefabulldogs', '2019-08-01 21:51:35'),
(139, 0, 'Jenny', 'Fantasy', 500, 1, 'Jennifer', 'uploads/d508a4a2103d0c78ea38427419b40820sample-image.jpg', 'egeg', 'sefsef', '2019-08-06 11:06:37');

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
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `image`, `address`, `contact_no`, `firstname`, `lastname`, `birthdate`, `date_created`) VALUES
(1, 'noerase12@gmail.com', '$2y$10$XXeWdnOreHNLo0vbF1LqOuVlmVOYMoewQyeIkk5JMvrf03Dn2GvZO', 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'Pulong, Bunga, Silang Cavite', '09771234567', 'John Isaac', 'Caasi', '2019-08-14', '2019-08-11 16:31:08'),
(2, 'nikko@gmail.com', '$2y$10$AcVBvx43AWxuF4bRYnkp8uyZj8jouC4a885yMXJYR0iiFt40EL5Oi', '', 'Pasay city', '', 'John Nikko', 'Caasi', '2010-11-11', '2019-08-11 16:40:11');

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
(1, 138, 'noerase12@gmail.com', 'testings', 250, 1, '2019-08-12 22:00:33');

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
-- Indexes for table `tbl_customer_received`
--
ALTER TABLE `tbl_customer_received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deliver_process`
--
ALTER TABLE `tbl_deliver_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ecommerce_config`
--
ALTER TABLE `tbl_ecommerce_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_existed_user`
--
ALTER TABLE `tbl_existed_user`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_ajax`
--
ALTER TABLE `tbl_ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tbl_customer_received`
--
ALTER TABLE `tbl_customer_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_deliver_process`
--
ALTER TABLE `tbl_deliver_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ecommerce_config`
--
ALTER TABLE `tbl_ecommerce_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_existed_user`
--
ALTER TABLE `tbl_existed_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_parallax`
--
ALTER TABLE `tbl_parallax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pending_reviews`
--
ALTER TABLE `tbl_pending_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_stack`
--
ALTER TABLE `tbl_stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `tbl_top_categories`
--
ALTER TABLE `tbl_top_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user_items`
--
ALTER TABLE `tbl_user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
