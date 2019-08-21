-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 07:47 AM
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

--
-- Dumping data for table `tbl_ajax`
--

INSERT INTO `tbl_ajax` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'awdawfeg', 'edawedaef', 'awdefaeq', 'edawefaweg');

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
(42, 1, 'Education', 0, '2019-07-23 18:53:12'),
(43, 5, 'awdawdawd', 0, '2019-08-18 14:51:21'),
(44, 5, 'awdawdawd', 0, '2019-08-18 14:51:25');

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
(17, 2, 0, 'noerase12@gmail.com', 'The power of habit', 500, 1, '2019-08-20 18:44:09'),
(18, 3, 0, 'noerase12@gmail.com', 'Rich Dad Poor Dad', 550, 1, '2019-08-20 18:44:09');

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
(2, 2, 'nikko@gmail.com', '2019-08-11 16:40:11'),
(3, 3, 'admin@gmail.com', '2019-08-15 20:01:20');

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
(1, 'uploads/6928979260af7226c7b303b3b597cba1carousel-2.jpg', 'uploads/6928979260af7226c7b303b3b597cba1carousel-3.jpg', 'uploads/6928979260af7226c7b303b3b597cba1carousel-1.jpg', 1, '2019-07-24 17:34:45');

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
(68, 159, 'John Isaac', 5, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'It is a great novel I like Stephen kings', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:38:49'),
(69, 159, 'John Isaac', 5, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'Love it', 'I love it', '2019-08-20 18:40:00'),
(70, 158, 'John Isaac', 5, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'mcdo', 'love ko to', '2019-08-20 18:40:43'),
(71, 158, 'John Isaac', 5, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'jabee', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia ', '2019-08-20 18:41:18'),
(72, 157, 'John Isaac', 3, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'testing', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia', '2019-08-20 18:41:38'),
(73, 157, 'John Isaac', 4, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'testings', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia', '2019-08-20 18:41:50'),
(74, 155, 'John Isaac', 5, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'test', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia', '2019-08-20 18:42:12'),
(75, 152, 'John Isaac', 5, 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'love it', 'I really love this books!!', '2019-08-20 18:42:43');

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
(140, 0, 'The 7 Habits of highly effective people', 'Education', 600, 50, 'Stephen R. Covey', 'uploads/320bd20d604de33c24a17e49cc3485657 habits.jpg', '#financial #business', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 17:49:21'),
(141, 0, 'The Great Gatsby', 'Romance', 500, 50, 'F Scott Fitzgerald', 'uploads/954c2653066a2027ea09f3bb81b87029220px-TheGreatGatsby_1925jacket.jpeg', '#romance', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 17:52:37'),
(142, 0, 'A walk to remember', 'Romance', 300, 50, 'Nicholas Sparks', 'uploads/0cb45dbd228db85433ab244776aaa53eA walk to remember.jpg', '#romance', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 17:54:34'),
(143, 0, 'Fifty Shade of Grey', 'Romance', 1000, 50, 'E. L. James', 'uploads/62dbdcefd4f2b64d140fdb8058a2777dFifty shades.jpg', '#romance #69 #spg', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 17:55:52'),
(144, 0, 'Game of Thrones', 'Fantasy', 900, 50, 'George R.R. Martin', 'uploads/a5e4f8728fd3d5d40bc45941ffb350f7Game of thrones.jpg', '#battle #war', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 17:57:02'),
(145, 0, 'Harry Potter', 'Fantasy', 500, 50, 'J. K. Rowlings', 'uploads/f2c64c01c47a098053f62e18e5deb77cHarry Potter.jpg', '#harry #potter', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 17:58:30'),
(146, 0, 'How Children Fails', 'Education', 500, 50, 'John Holt', 'uploads/28864a14fa77cf21b70ebbf70272ed8fHow children fail.jpg', '#children #Guidance', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:00:07'),
(147, 0, 'IT', 'Select category', 1200, 50, 'Stephen Kings', 'uploads/744567afd2fa14f26a90c5a576a4c605IT.jpg', '#horror', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:01:07'),
(148, 0, 'Jane Eyre', 'Romance', 450, 50, 'Charlotte Bronte', 'uploads/c472ffc99c107ef945b52af8355d0bfcJane Eyre.jpg', '#love #forever #iloveyou', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:02:05'),
(149, 0, 'Lord of the Rings', 'Fantasy', 500, 50, 'J. K. Rowlings', 'uploads/ddba86cc26a6d7f6f3638e8658be60a7Lord of the Rings.png', '#lord #fantasy', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:03:35'),
(150, 0, 'Normal People', 'Mystery', 500, 50, 'Sally Rooney', 'uploads/a9ee2c02b1872e876daab473d8d27c93Normal People.jpg', '#education #psychology', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:04:45'),
(151, 0, 'Out of our Minds', 'Fantasy', 500, 50, 'Ken Robinson', 'uploads/ea95a1ffba2632e8bd5627eff8b058a7Out of our minds.jpg', '#fantasy', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:06:00'),
(152, 0, 'Rich Dad Poor Dad', 'Education', 550, 49, 'Robert Kiyosaki', 'uploads/77986a6633a4602ed3c1fc43d8fda404Rich dad poor dad.jpg', '#rich #poor #dad #financial', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:07:30'),
(153, 0, 'See me', 'Romance', 500, 50, 'Nicholas Sparks', 'uploads/2bd27c33751e9afa4472da11a1431fecSee me.jpg', '#romance', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:08:52'),
(154, 0, 'Slaughterhouse-five', 'Thriller', 250, 50, 'Kurt Vonnegut', 'uploads/32898690045b5f8a0b57c9710d7c5bf1slaughterhouse-five.jpg', '#horror #thriller', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:09:39'),
(155, 0, 'Steve Jobs', 'Education', 500, 50, 'Walter Isaacson', 'uploads/85c4a97219163e391a78a333ce46546dSteve Jobs.jpg', '#apple', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:10:45'),
(156, 0, 'The mister', 'Romance', 350, 50, 'E. L. James', 'uploads/be3be89edd34903801c38b4b29de3f10The mister.jpg', '#mistress #cheater #bitch', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:12:38'),
(157, 0, 'The power of habit', 'Education', 500, 49, 'charles Duhigg', 'uploads/f0dcd0130e93302b89e0944390b22a40The power of habit.jpg', '#self-improvement', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:13:50'),
(158, 0, 'The Shining', 'Thriller', 500, 50, 'Stephen Kings', 'uploads/cd3aa3f2e5d401298888664146f53dddThe shining.jpg', '#horror #killer #murder', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:16:09'),
(159, 0, 'The Stand', 'Thriller', 500, 50, 'Stephen Kings', 'uploads/7de285673590b63d73419d96c611accdThe Stand.jpg', '#TheStand', 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', '2019-08-20 18:16:47');

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
(1, 'noerase12@gmail.com', '$2y$10$XXeWdnOreHNLo0vbF1LqOuVlmVOYMoewQyeIkk5JMvrf03Dn2GvZO', 'uploads/d019b13d3b1b92e2563b514ee5931da2einstein remake.jpg', 'Pulong, Bunga, Silang Cavite', '09771234567', 'John Isaac', 'Caasi', '1997-09-22', '2019-08-11 16:31:08'),
(2, 'nikko@gmail.com', '$2y$10$AcVBvx43AWxuF4bRYnkp8uyZj8jouC4a885yMXJYR0iiFt40EL5Oi', '', 'Pasay city', '', 'John Nikko', 'Caasi', '2010-11-11', '2019-08-11 16:40:11'),
(3, 'admin@gmail.com', '$2y$10$LvgmIe2hYAG.qOyEPVN/heobKUrtofIioS4CISgmiP7Swn0iSNM3q', 'uploads/165e5f782e15ddf882c8963ceece577ebabe.png', 'Pulong, Bunga, Silang Cavite awdawdaw', '09770433213', 'aweawdawdaw', 'awdagae', '1997-09-22', '2019-08-15 20:01:19');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tbl_customer_received`
--
ALTER TABLE `tbl_customer_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_stack`
--
ALTER TABLE `tbl_stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
