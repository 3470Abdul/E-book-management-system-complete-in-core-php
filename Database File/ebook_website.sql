-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 10:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `competition_id` int(11) NOT NULL,
  `competition_cover` varchar(400) NOT NULL,
  `competition_topic` varchar(255) NOT NULL,
  `competition_title` varchar(255) NOT NULL,
  `competition_start_date` varchar(255) NOT NULL,
  `competition_end_date` varchar(255) NOT NULL,
  `competition_prize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`competition_id`, `competition_cover`, `competition_topic`, `competition_title`, `competition_start_date`, `competition_end_date`, `competition_prize`) VALUES
(2, 'plan1.jpg', 'write a story on the horror house', 'story writing', '2022-08-01', '2022-08-15', '$90'),
(5, 'Coder-Life-iPhone-Wallpaper.jpg', 'write an essay on your life', 'essay writing', '2022-08-09', '2022-09-08', '$150');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_Id`, `name`, `email`, `message`) VALUES
(1, 'Rayyan', ' rayyanali4422@gmail.com', ' hi \r\nrayyanali');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `fullname`, `username`, `email`, `phone_no`, `country`, `city`, `address`, `postal_code`, `method`) VALUES
(11, 'asad', 'asad', 'asad@gmail.com', '03170666292', 'pakistan', 'Karachi', 'gulshan-e-iqbal block A', 45637, 'Cash On Delivery'),
(12, 'ali', 'ali', 'ali@gmail.com', '03156567657', 'america', 'Jersey', 'new Jersey town block C plot no# LB-234 ', 123453, 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_Id` int(11) NOT NULL,
  `slider_image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_Id`, `slider_image`) VALUES
(1, 'cover1.jpg'),
(3, 'cover11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_book`
--

CREATE TABLE `tbl_add_book` (
  `book_Id` int(11) NOT NULL,
  `book_cover` varchar(400) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` varchar(50) NOT NULL,
  `book_discount_percent` varchar(50) NOT NULL,
  `book_catagory` varchar(50) NOT NULL,
  `book_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_add_book`
--

INSERT INTO `tbl_add_book` (`book_Id`, `book_cover`, `book_name`, `book_author`, `book_price`, `book_price_discount`, `book_discount_percent`, `book_catagory`, `book_type`) VALUES
(1, 'pc1.jpg', 'the king of drugs', 'Nora Barrett', 35, '28', '20', 'Detective and Mystery', 'Hard Copy'),
(2, 'pc2.jpg', 'memory', 'Angelina Aludo', 80, '40', '50', 'Self-Help', 'Hard Copy'),
(3, 'pc3.jpg', 'sin eater', 'megan campisi', 20, '19', '5', 'Fantasy', 'Hard Copy'),
(4, 'pc4.jpg', 'lunar strom', 'terry crosby', 34, '13.6', '60', 'Religious and Spiritual', 'Hard Copy'),
(5, 'pc5.jpg', 'fortress blood', 'L . D Goffigan', 25, '23.75', '5', 'Adventure', 'Hard Copy'),
(6, 'pc6.jpg', 'the mind of a leader', 'Kevin Anderson', 98, '29.4', '70', 'Self-Help', 'Hard Copy'),
(7, 'pc7.jpg', 'A million to one', 'Tony Faggioli', 60, '33', '45', 'Self-Help', 'Hard Copy'),
(8, 'pc8.jpg', 'the pen and the sword', 'Olan Thorensen', 10, '6', '40', 'Religious and Spiritual', 'Hard Copy'),
(9, 'pc9.jpg', 'Harry Potter and the order of pheonix', 'J.K  Rowling', 35, '28', '20', 'Adventure', 'Hard Copy'),
(10, 'pc10.jpg', 'Harry Potter and the prisonser of azkaban', 'J.K  Rowling', 40, '32', '20', 'Adventure', 'Hard Copy'),
(11, 'pc13.jpg', 'Harry Potter and the goblet of fire', 'J.K  Rowling', 45, '33.75', '25', 'Adventure', 'Hard Copy'),
(12, 'pc12.jpg', 'Harry Potter and the cursed child', 'J.K  Rowling', 50, '40', '20', 'Adventure', 'Hard Copy'),
(13, 'pc11.jpg', 'Harry Potter and the secrets of dumbledore', 'J.K  Rowling', 35, '28', '20', 'Adventure', 'Hard Copy'),
(14, 'pc14.jpg', 'The time travelers wife', 'Audrey Niffenegger', 68, '40.8', '40', 'Romance', 'Hard Copy'),
(15, 'pc15.jpg', 'Young Lovers', 'Marcella Agrippina', 35, '32.2', '8', 'Romance', 'Hard Copy'),
(16, 'pc16.jpg', 'red white and royal blue', 'Casey Mcquiston', 38, '34.2', '10', 'Romance', 'Hard Copy'),
(17, 'pc17.jpg', 'gilded Cage', 'Dani Wyatt', 60, '39', '35', 'Romance', 'Hard Copy'),
(18, 'pc18.jpg', 'Islam in america', 'Kambiz GhaneaBassiri', 20, '15', '25', 'Religious and Spiritual', 'Hard Copy'),
(19, 'pc19.jpg', 'Destiny Disrupted', 'Tamim Ansary', 18, '14.4', '20', 'Religious and Spiritual', 'Hard Copy'),
(20, 'pc23.jpg', 'Aurings Wrath', 'Justin Depaoli', 24, '21.6', '10', 'Fantasy', 'Hard Copy'),
(21, 'pc24.jpg', 'Daughter of lightning', 'Anna Kate Logan', 30, '22.5', '25', 'Fantasy', 'Hard Copy'),
(22, 'pc25.jpg', 'The cerulean', 'Amy Ewing', 46, '27.6', '40', 'Fantasy', 'Hard Copy'),
(23, 'pc27.jpg', 'The Gravity', 'Nille Lewis', 24, '21.6', '10', 'Science Fiction', 'Hard Copy'),
(24, 'pc28.jpg', 'Enceladus', 'Barndon Q . Morris', 35, '19.25', '45', 'Science Fiction', 'Hard Copy'),
(25, 'pc29.jpg', 'The Portal', 'Brandon Scott', 35, '25.9', '26', 'Science Fiction', 'Hard Copy'),
(26, 'pc30.jpg', 'Whispers in the void', 'Lee Zagrzebski', 46, '18.4', '60', 'Science Fiction', 'Hard Copy'),
(27, 'pc31.jpg', 'Eat think move', 'Mary Roy-Comstock', 23, '11.5', '50', 'Health and Fitness', 'Hard Copy'),
(28, 'pc32.jpg', 'The Creative Brain', 'Brian Eagleman', 20, '13', '35', 'Health and Fitness', 'Hard Copy'),
(29, 'pc33.jpg', 'Wise and with child', 'Annie Barber', 35, '28', '20', 'Health and Fitness', 'Hard Copy'),
(30, 'pc34.jpg', 'How to take care of body', 'Julius Kaesar', 50, '40', '20', 'Health and Fitness', 'Hard Copy'),
(31, 'pc37.jpg', 'The Doom that came to Astoria', 'Craig Randall', 68, '35.36', '48', 'Horror', 'Hard Copy'),
(32, 'pc36.jpg', 'The Ritual ', 'Adam Nevill', 25, '22.5', '10', 'Horror', 'Hard Copy'),
(34, 'pc35.jpg', 'House Of Secret', 'Maria Ramsey', 38, '30.4', '20', 'Horror', 'Hard Copy'),
(35, 'pc38.jpg', 'The mid night train', 'John Premade', 23, '20.24', '12', 'Horror', 'Hard Copy'),
(36, 'pc39.jpg', 'Jack Knifed', 'Christopher Greyson', 40, '30', '25', 'Detective and Mystery', 'Hard Copy'),
(37, 'pc40.jpg', 'In the mind of revenge', 'Liv Hadden', 25, '22.5', '10', 'Detective and Mystery', 'Hard Copy'),
(38, 'pc41.jpg', 'Hitman', 'Jane Doe', 43, '35.26', '18', 'Detective and Mystery', 'Hard Copy'),
(40, 'pc20.jpg', 'Saladin', 'Geoffrey Hindley	', 13, '11.05', '15', 'Historical Fiction', 'Hard Copy'),
(41, 'pc21.jpg', 'Ertugul Ghazi ', 'Talib Arishaheen', 96, '76.8', '20', 'Historical Fiction', 'Hard Copy'),
(42, 'pc22.jpg', 'History of Ottoman Empire', 'Douglas A.Howard', 130, '78', '40', 'Historical Fiction', 'Hard Copy'),
(43, 'pc42.jpg', 'Kingdoms of Faith', 'Brian A . Catlos', 43, '34.4', '20', 'Historical Fiction', 'Hard Copy'),
(44, 'pc44.jpg', 'The lost city of Exodus', 'Ahmed Osman', 25, '22.5', '10', 'Historical Fiction', 'Hard Copy'),
(45, 'pc48.jpg', 'They all fall down', 'Rachel Howzell Hall', 36, '30.6', '15', 'Thrillers', 'Hard Copy'),
(46, 'pc47.jpg', 'The last resort', 'Susi Holliday', 30, '24', '20', 'Thrillers', 'Hard Copy'),
(47, 'pc46.jpg', 'I cant sleep', 'J .E Rowney', 14, '9.8', '30', 'Thrillers', 'Hard Copy'),
(48, 'pc45.jpg', 'The killing tide', 'Lin Anderson', 86, '60.2', '30', 'Thrillers', 'Hard Copy'),
(49, 'pc49.jpg', 'Shikwa Jawab  e Shikwa', 'Alama Iqbal', 5, '3', '40', 'Poetry', 'Hard Copy'),
(50, 'pc50.jpg', 'A thousand yearings', 'Ralph Russell', 8, '5.6', '30', 'Poetry', 'Hard Copy'),
(51, 'pc51.jpg', 'The Raven', 'Edgar Allan Poe', 46, '32.2', '30', 'Poetry', 'Hard Copy'),
(52, 'pc52.jpg', 'The truth about magic', 'Atticus', 34, '26.18', '23', 'Poetry', 'Hard Copy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_catagory`
--

CREATE TABLE `tbl_add_catagory` (
  `catagory_Id` int(11) NOT NULL,
  `catagory_cover` varchar(400) NOT NULL,
  `catagory_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_add_catagory`
--

INSERT INTO `tbl_add_catagory` (`catagory_Id`, `catagory_cover`, `catagory_title`) VALUES
(1, 'cover1.jpg', 'Religious and Spiritual'),
(2, 'cover2.jpg', 'Health and Fitness'),
(3, 'cover3.jpg', 'Fantasy'),
(4, 'cover4.jpg', 'Adventure'),
(5, 'cover5.jpg', 'Horror'),
(6, 'cover6.jpg', 'Detective and Mystery'),
(7, 'cover7.jpg', 'Historical Fiction'),
(8, 'cover8.jpg', 'Romance'),
(9, 'cover9.jpg', 'Thrillers'),
(10, 'cover10.jpg', 'Poetry'),
(11, 'cover11.jpg', 'Science Fiction'),
(12, 'cover212.jpg', 'Self-Help'),
(14, 'cover12.jpg', 'Humor and Satire'),
(15, 'cover13.jpg', 'Art'),
(16, 'cover14.jpg', 'Motivational'),
(17, 'cover15.jpg', 'Cookbook'),
(18, 'cover17.jpg', 'Drama'),
(19, 'cover18.jpg', 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contest_participants`
--

CREATE TABLE `tbl_contest_participants` (
  `competition_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'looser'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contest_participants`
--

INSERT INTO `tbl_contest_participants` (`competition_id`, `user_id`, `username`, `content`, `status`) VALUES
(2, 5, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus. \r\n', 'winner'),
(5, 5, 'admin', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', 'winner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `order_price` varchar(50) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `estimated_date` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `tracking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_name`, `author`, `order_price`, `order_qty`, `order_date`, `estimated_date`, `status`, `tracking_id`) VALUES
(11, 'sin eater', 'megan campisi', '$19', 3, '2022-08-04 11:40:56', NULL, 'completed', 1),
(11, 'Islam in america', 'Kambiz GhaneaBassiri', '$15', 3, '2022-08-04 11:40:56', NULL, 'pending', 2),
(12, 'Harry Potter and the cursed child', 'J.K  Rowling', '$40', 3, '2022-08-04 23:29:20', NULL, 'completed', 3),
(12, 'Harry Potter and the prisonser of azkaban', 'J.K  Rowling', '$32', 4, '2022-08-04 23:29:20', NULL, 'pending', 4),
(12, 'Harry Potter and the goblet of fire', 'J.K  Rowling', '$33.75', 4, '2022-08-06 09:04:33', NULL, '', 17),
(12, 'Harry Potter and the goblet of fire', 'J.K  Rowling', '$33.75', 1, '2022-08-07 07:51:30', NULL, '', 18),
(11, 'Ertugul Ghazi ', 'Talib Arishaheen', '$76.8', 2, '2022-08-07 08:48:25', NULL, '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE `tbl_plans` (
  `plan_id` int(11) NOT NULL,
  `plan_title` varchar(50) NOT NULL,
  `plan_pricing` varchar(50) NOT NULL,
  `plan_duration` varchar(50) NOT NULL,
  `Benefit1` varchar(50) NOT NULL,
  `Benefit2` varchar(50) NOT NULL,
  `Benefit3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`plan_id`, `plan_title`, `plan_pricing`, `plan_duration`, `Benefit1`, `Benefit2`, `Benefit3`) VALUES
(7, 'Free', '$0.00', 'Lifetime', 'Free Deliveries', '24/7 Support', '...'),
(8, 'Pro', '$50', '1 Years', 'Free Deliveries', '20% OFF on every purchase', '24/7 Supports');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `roles` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `fullname`, `username`, `email`, `password`, `date`, `roles`) VALUES
(4, 'Rayyan Ali', 'RayyanAli123', 'rayyanali4422@gmail.com', 'acc5d43e0936dbf3f27b906891aaafdf9ede4508', '2022-07-28 03:42:19', 'user'),
(5, 'admin', 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2022-07-28 03:46:34', 'admin'),
(6, 'ali', 'ali', 'ali@gmail.com', 'b42a6d93d796915222f6ffb2ffdd6137d93c1cdb', '2022-07-28 10:11:41', 'user'),
(11, 'asad', 'asad', 'asad@gmail.com', '8efa565ca60e84b63219ac3f5a6f11c95fc3baf7', '2022-07-31 00:51:10', 'user'),
(12, 'user', 'user', 'user@gmail.com', '12dea96fec20593566ab75692c9949596833adc9', '2022-07-31 00:52:18', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`competition_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_Id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_Id`);

--
-- Indexes for table `tbl_add_book`
--
ALTER TABLE `tbl_add_book`
  ADD PRIMARY KEY (`book_Id`);

--
-- Indexes for table `tbl_add_catagory`
--
ALTER TABLE `tbl_add_catagory`
  ADD PRIMARY KEY (`catagory_Id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`tracking_id`);

--
-- Indexes for table `tbl_plans`
--
ALTER TABLE `tbl_plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `competition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_add_book`
--
ALTER TABLE `tbl_add_book`
  MODIFY `book_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_add_catagory`
--
ALTER TABLE `tbl_add_catagory`
  MODIFY `catagory_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_plans`
--
ALTER TABLE `tbl_plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contest_participants`
--
ALTER TABLE `tbl_contest_participants`
  ADD CONSTRAINT `tbl_contest_participants_ibfk_1` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`competition_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
