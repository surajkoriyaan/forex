-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2022 at 10:49 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apnanaee_brokerage`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_manager`
--

CREATE TABLE `account_manager` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `register_as` enum('0','1','2','3','4') COLLATE utf8_unicode_ci NOT NULL COMMENT '''0'':''none'',''1'':''admin'',''2'':''account manager'',''3'':''signal provider'',''4'':''both''',
  `dob` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `services` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `city` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsappno` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telegram_link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_gallery` longtext COLLATE utf8_unicode_ci,
  `image_gallery` longtext COLLATE utf8_unicode_ci,
  `minimum_equity` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profit_sharing` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_pair` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trading_plateform` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tradable_assets` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `minimum_deposit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forex_bokers` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `investor_id` longtext COLLATE utf8_unicode_ci,
  `passdord_details` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_manager`
--

INSERT INTO `account_manager` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `register_as`, `dob`, `gender`, `company_name`, `logo`, `description`, `services`, `address`, `city`, `country`, `country_code`, `mobile`, `whatsappno`, `telegram_link`, `facebook_id`, `instagram_id`, `linkedin_id`, `website_url`, `video_gallery`, `image_gallery`, `minimum_equity`, `profit_sharing`, `currency_pair`, `trading_plateform`, `tradable_assets`, `minimum_deposit`, `forex_bokers`, `investor_id`, `passdord_details`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 0, 'Muntiajkhan', 'Pathan', 'mogli.pathan786@gmail.com', '123456789', '2', '2022-01-04', 'male', 'Virtua Solution', '16417953101458970397.jpg', '<p>hi</p>', '<p>hi</p>', '<p>hi</p>', 'hi', 'Afghanistan', 'Afghanistan (+93)', '4545454545', '4545454545', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', NULL, 'hi', 'hih', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', '', '', '2022-01-10 06:15:10', '2022-01-10 06:15:10'),
(12, 8, 'arun kumar', 'dash', 'arundash1234@gmail.com', '$2y$10$S1hBjDa/WUW7XKhg55hOZOf79FfZU/liLT4KdKoJ/3eb.GtmmbBFG', '1', '2022-01-20', 'female', 'cdfswedfw', '16435536201925255576.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'ranchi', 'India', 'India (+91)', '4534533566576', '534536537648', 'https://apnanaee.com/public/telegram', 'https://apnanaee.com/public/facebook', 'https://apnanaee.com/public/instagram', 'https://apnanaee.com/public/linkedin', 'https://apnanaee.com/public/account-edit/4', 'https://www.youtube.com/embed/EEgsSD1mBcg', '1643553159628918715.jpg,1643553159954702504.jpg,16435531591366530038.jpg', '21232', '11111111111', 'inr', 'trading plateform, online', 'tradable assests', '$ 67', 'RM MARKETS', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '0', '1', '2022-01-26 15:28:55', '2022-01-30 19:06:29'),
(13, 9, 'sahbaz ansari', 'gaddi', 'sahbaz1231231@gmail.com', '$2y$10$PFiZYT23hnUGZnr8v4AIf..T1KDuUgpsVx2rOYVSisa1TXwP3y1x2', '2', '2022-01-10', 'male', NULL, '1643553204756985115.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1643553204272652162.jpg,16435532041311739.jpg,1643553204344245813.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-01-26 15:32:42', '2022-01-30 14:33:24'),
(14, 4, 'Mohseenkhan', 'Pathan', 'ateefa7816@gmail.com', '$2y$10$wf/OS7BFPsTEP0QJFS0kPeQcTAuaPdVd.zs.b2vzmMXmzREvanyYC', '2', NULL, 'other', NULL, '1643553557709923004.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>hi</p>', NULL, '1', '1', '2022-01-27 04:40:06', '2022-01-30 14:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `account_manager_signalprovider`
--

CREATE TABLE `account_manager_signalprovider` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `services` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `city` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsappno` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telegram_link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_gallery` longtext COLLATE utf8_unicode_ci,
  `image_gallery` longtext COLLATE utf8_unicode_ci,
  `price` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signal_frequency` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signal_provider_via` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trading_strategy` longtext COLLATE utf8_unicode_ci,
  `minimum_equity` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profit_sharing` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_pair` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trading_plateform` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tradable_assets` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `minimum_deposit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forex_bokers` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `investor_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passdord_details` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '''0'':''self'',''1'':''admin''',
  `updated_by` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '''0'':''self'',''1'':''admin''',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_manager_signalprovider`
--

INSERT INTO `account_manager_signalprovider` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `company_name`, `logo`, `description`, `services`, `address`, `city`, `country`, `country_code`, `mobile`, `whatsappno`, `telegram_link`, `facebook_id`, `instagram_id`, `linkedin_id`, `website_url`, `video_gallery`, `image_gallery`, `price`, `signal_frequency`, `signal_provider_via`, `trading_strategy`, `minimum_equity`, `profit_sharing`, `currency_pair`, `trading_plateform`, `tradable_assets`, `minimum_deposit`, `forex_bokers`, `investor_id`, `passdord_details`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Mohseen', 'Pathan', 'admin@gmail.com', '12', '2022-01-02', 'male', 'Virtua Solution', '1641795651874607184.png', '<p>hi</p>', '<p>hi</p>', '<p>hi</p>', 'Kingstown', 'Andorra', 'Afghanistan (+93)', '8989898989', '8989898989', 'hi', 'hi', 'hi', 'hi', 'www.bestforexbrokersworld.com', 'https://www.youtube.com/watch?v=HZTf9g5Ht0s', '16417956512020155525.png,16417956511827489126.png', '5$', '5 Days4', 'net', '<p>hui</p>', 'hi', 'hih', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', '', NULL, '2022-01-10 06:20:51', '2022-01-10 06:20:51'),
(8, 20, 'suraj', 'kumar', 'surajkoriyaan@gmail.com', NULL, '02/13/2022', 'male', 'abc info tech pvt ltd', '16430898651884007019.png', '<p>eferfer trgtgt tryhyth tyehtyhetyt trgtrrdt</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/uploads/account_and_signal/ckeimages/3906044961643089560.png\" style=\"height:600px; width:520px\" /></p>', '<p>ewfaedf iuefu iuheiawhiu edfiuhuie iuie fiuuie</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/uploads/account_and_signal/ckeimages/15321025811643089593.jpg\" style=\"height:1075px; width:1920px\" /></p>', '<p>wedfedfr rfgrfgtrfwgtgt</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/uploads/account_and_signal/ckeimages/16882790801643089617.png\" style=\"height:395px; width:450px\" /></p>', 'bokaro', 'India', 'India (+91)', '(234) 424-5456', '2234243524', 'http://localhost:8000/agent-profile', 'https://apnanaee.com/public/facebook', 'http://localhost:8000/agent-profile', 'https://apnanaee.com/public/linkedin', 'https://apnanaee.com/public/account-manager-registration', 'http://localhost:8000/agent-profile', '1643089865455255998.jpg,16430898651962593988.jpg,16430898651866561924.jpg,16430898651199884058.jpg', '13000', 'tyuuy', 'ytfyt', '<p>ewadferfref rfe</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/uploads/account_and_signal/ckeimages/2332207501643089732.jpg\" style=\"height:930px; width:640px\" /></p>', '21232', '2323', 'werggr', 'ytty', 'wedfegfe', 'wefzsgserd', 'yyuuu', '<p>efdefer rgtftrgtrf trfgtrfg</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/uploads/account_and_signal/ckeimages/21122510521643089778.jpeg\" style=\"height:328px; width:540px\" /></p>', NULL, '1', NULL, '2022-01-25 13:51:05', '2022-01-25 13:51:05'),
(9, 10, 'javed', 'kha', 'javed@gmail.com', '$2y$10$PUnlVTTpVXlSBn5XTa828.ufsrmd4bniYxlHsj7yEP7hkXxwOjPzO', '2022-01-21', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-01-26 16:19:57', '2022-01-26 16:28:43'),
(10, 3, 'Aryaatrt', 'rajput', 'suraj8809081@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-02-08 02:45:46', '2022-02-08 02:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE `broker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `founded_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regulations` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regulated_by` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_deposit` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headquarters` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxleverage` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileno` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubevideo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubevideo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubevideo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mindeposit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxleverage_account` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_trade_volume` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_acount` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spreads` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountcurrencies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_instruments` longtext COLLATE utf8mb4_unicode_ci,
  `ea` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hedging_allowed` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scaling_allowed` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `islamic_account` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_time` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawalmethod` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_comission` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_exchange_rate` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_processing_time` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_platrform` longtext COLLATE utf8mb4_unicode_ci,
  `customer_support` longtext COLLATE utf8mb4_unicode_ci,
  `education` longtext COLLATE utf8mb4_unicode_ci,
  `awards` longtext COLLATE utf8mb4_unicode_ci,
  `conclusion` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`id`, `name`, `logo`, `founded_year`, `regulations`, `regulated_by`, `min_deposit`, `headquarters`, `maxleverage`, `country_code`, `mobileno`, `email`, `address`, `city`, `country`, `website_url`, `youtubevideo1`, `youtubevideo2`, `youtubevideo3`, `mindeposit`, `account_type`, `maxleverage_account`, `minimum_trade_volume`, `commission_acount`, `spreads`, `accountcurrencies`, `trading_instruments`, `ea`, `hedging_allowed`, `scaling_allowed`, `islamic_account`, `deposit_method`, `commission`, `exchange_rate`, `processing_time`, `withdrawalmethod`, `withdrawal_comission`, `withdrawal_exchange_rate`, `withdrawal_processing_time`, `account_link`, `trading_platrform`, `customer_support`, `education`, `awards`, `conclusion`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'OctaFx', '1641366731.png', '2011', '1', 'CySec – Cyprus Securities and Exchange Commission', '100 $', 'St. Vincent and the Grenadines', '1:500', 'India (+91)', '1010101010', 'info@bestforexbrokersworld.com', '<p>Suite 305, Griffith Corporate Centre, Beachmont, Kingstown, St. Vincent and the Grenadines.</p>', 'St Vincent', 'Saint Vincent and the Grenadines', 'https://my.octafx.com/signup/?refid=ib2498888', 'https://www.youtube.com/watch?v=TaZLmHNmDuY', NULL, NULL, '100 $', 'OctaFx MT5', '1:30', '500 Lots', 'N.A', 'Floating', 'EUR', 'Currencies', 'yes', 'yes', 'yes', 'no', 'UPI,Bank Transfer', 'Free,Free', 'Current Exchange Rate,Current Exchange Rate', 'Instant,Instant', 'Bank Transfer', 'Free', 'Current Exchange Rate', 'No fees or commission on our side whatsoever 1-3 hours to approve the withdrawal and up to 1 hour to transfer the funds.', 'https://my.octafx.com/signup/?refid=ib2498888', '<p>Octafx offers best trusted and suitable platform like MetaTrader 4, MetaTrader 5 and cTrader.</p>\r\n\r\n<h2><strong>Features of MetaTrader 4</strong></h2>\r\n\r\n<ul>\r\n	<li>&middot;User- friendly Interface</li>\r\n	<li>&middot;Cryptocurrency trading</li>\r\n	<li>&middot;CFD trading</li>\r\n	<li>&middot;Interactive adaptable charts</li>\r\n	<li>MetaTrader 4 is the best for those who are at the beginning level of trading.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Features of MetaTrader 5</strong></h2>\r\n\r\n<ul>\r\n	<li>&middot;Economic calendar</li>\r\n	<li>&middot;Stop limit order</li>\r\n	<li>&middot;CFD trading</li>\r\n	<li>&middot;Cryptocurrency</li>\r\n	<li>&middot;Highly customizable interface</li>\r\n	<li>MetaTrader 5 is best for those who are expert in this market.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Features of cTrader</strong></h2>\r\n\r\n<ul>\r\n	<li>&middot;Level II bids</li>\r\n	<li>&middot;Fix API</li>\r\n	<li>&middot;Server trailing stop</li>\r\n	<li>&middot;Cloud service to keep all account and template in one place</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>The education section of Octafx is really superb and fantastic. It covers all the information which is need of its user. There are written articles and news. The education section of Octafx contains many sub-sections like forex basics, educational, video tutorials, FAQ, terminology and manual.&nbsp;Forex basics content all the written articles. Educational section contains all the basic information like how to use Octafx, how to make deposit and withdrawal etc. There is a video tutorial section which consist videos.</p>', '<ul>\r\n	<li>&nbsp;Octafx received a lot of awards in forex field.</li>\r\n	<li>Fastest growing micro forex broker 2012</li>\r\n	<li>Asia best customer service broker 2013</li>\r\n	<li>Best customer service broker 2013</li>\r\n	<li>Asia&rsquo;s best ECN broker 2014</li>\r\n	<li>Most trusted broker 2014</li>\r\n	<li>Best ECN broker 2020</li>\r\n	<li>Best cryptocurrency broker 2020</li>\r\n	<li>Best Forex broker Asia 2021</li>\r\n	<li>Best trading platform 2021 and many more</li>\r\n</ul>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p>Founded year</p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p>2011</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>Regulated by</p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>CySec</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>MetaTrader 4</p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>Yes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>MetaTrader 5</p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>Yes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>Customer Support</p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>24/7</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>Mobile Trading</p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p>Yes</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-05 07:12:11', '2022-01-05 07:16:20'),
(7, 'INFINOX', '1641451137.png', '2009', '1', 'Securities Commission of The Bahamas (SCB)', '1 GBP', 'New Providence, The Bahamas', '1:500', 'Bahamas (+1-242)', '3232323232', 'info@bestforexbrokersworld.com', '<p>201 Church Street, Sandyport Marina Village, Nassau, New Providence, The Bahamas.</p>', 'New Providence', 'Bahamas (the)', 'https://myinfinox.infinox.bs/en/register', 'https://www.youtube.com/watch?time_continue=10&v=EEgsSD1mBcg&feature=emb_title', 'https://www.youtube.com/watch?v=EEgsSD1mBcg', 'https://www.youtube.com/watch?v=EEgsSD1mBcg', '1 $,1 $', 'STP Accounts,ECN Accounts', '1:500,1:500', '0.01 Lots,0.01 Lots', '0 $,7.5 $', 'Variable,Variable', 'AUD,GBP', 'Forex/Currencies,CFDs', 'yes,yes', 'yes,yes', 'no,no', 'yes,yes', 'Bank Transfer,Master Card,Skrill,Neteller,Visa', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant,Instant,Instant', 'Bank Transfer,Visa,Neteller,Skrill', 'Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant,Instant', 'https://myinfinox.infinox.bs/en/register', '<p>Infinox offer most popular trading platform MetaTrader 4, MetaTrader 5 and CQG. MetaTrader 4 offers FX, indices, metals, and oil while MetaTrader 5 offers FX, indices, metals, oils, and equities. Along with MetaTrader 4 and MetaTrader 5, it offers CQG for its professional traders.</p>\r\n\r\n<p>Features of CQG-</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />Built for professional traders</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />It has exchanged-traded instruments.</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />It offers a heat map and other visual tools.</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />Customizable interface and order execution.</p>', NULL, '<p>As compared to other broker Infinox have lack of educational resources. It only provides articles and nothing else. If you are looking for depth-knowledge and learning it is better off to approach any other alternative platforms.</p>', '<p>Here is the list of awards received by Infinox</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />Tech track 100 2017</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />FX report award 2017</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />Global hundred 2020 winner</p>\r\n\r\n<p>&middot; <img alt=\"Octafx Forex Broker\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/bullet.jpg\" style=\"border-style:none; height:14px; width:12px\" />Professional trader award 2020</p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2009</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>SCB</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-06 06:38:57', '2022-01-30 07:40:34'),
(8, 'MOGAFX', '1641459511.jpg', '2018', '1', 'ISA – Israel Securities Authority', '1000 $', 'Saint Vincent and the Grenadines', '1:500', 'Saint Vincent and the Grenadines (+1-784)', '9898989898', 'info@bestforexbrokersworld.com', '<p>First Floor, First St. Vincent Bank Ltd Building, James Street, Kingstown, St. Vincent and the Grenadines</p>', 'Kingstown', 'Saint Vincent and the Grenadines', 'https://www.mogafx.com/RegAcc/RegAccStep1?culture=en-US&IB=2128p8q8q8z8R8z-02', 'https://www.youtube.com/watch?v=eG2a2JJTVGU', 'https://www.youtube.com/watch?v=7Lcmn86o5to', 'https://www.youtube.com/watch?v=6C9uy1WsFVo', '1000 $', 'Standard Account', '1:500', '0.01 Lots', '0 $', '2.5 pips', 'USD', 'CFDs', 'yes', 'yes', 'yes', 'no', 'Bank Transfer', 'Free', 'Current Exchange Rate', '1 - 3 Working Days', 'Bank Transfer', 'Free', 'Current Exchange Rate', '24 - 48 Hours', 'https://www.mogafx.com/RegAcc/RegAccStep1?culture=en-US&IB=2128p8q8q8z8R8z-02', '<p>MogaFx offers the most trusted and reliable platform MetaTrader 4, MetaTrader 5 and web-trader. MogaFx is committed to give its clients best trading experience that&#39;s why they provide web-trader for free to its client, a platform with full trading functionality without the need to download or installation.</p>', NULL, '<p>The education section of MogaFx is so good. It contains all the information and knowledge about this market. It has MogaFx education series which contains the videos. This series has three levels of courses from beginning, intermediate to advance. The blog section contains all the latest, article, news and blogs. In their education section, they have an account opening guide PowerPoint presentation which contains a stepwise process to open account. Even they have a trading guide, economic calendar and glossary section.</p>', NULL, '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2009</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>ASIC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-06 08:58:31', '2022-01-06 08:59:05'),
(9, 'EXNESS', '1641462211.png', '2008', '1', 'CySec – Cyprus Securities and Exchange Commission', '1 $', 'Cyprus', '1:2000', 'Cyprus (+357)', '2020202020', 'info@bestforexbrokersworld.com', '<p>1 Siafi str. PORTO BELLO office 401<br />\r\n3042 Limassol<br />\r\nCYPRUS</p>', 'Limassol', 'Cyprus', 'https://www.exness.com/?utm_source=partners&ex_ol=1', 'https://www.youtube.com/watch?v=ixE7xA9gMuo&t=2s', NULL, NULL, '1 $,3000 $,1 $', 'Standard Cent Account,Zero Account,Standard Account', '1:2000,1:2000,1:2000', '0.01 Lots,0.01 Lots,0.01 Lots', '0 $,7 $,0 $', 'Variable,Variable,Variable', 'USD,USD,USD', 'Forex/Currencies,Cryptocurrencies,Indices', 'yes,yes,yes', 'yes,yes,yes', 'yes,yes,yes', 'yes,yes,yes', 'Visa,Master Card,Skrill,Neteller,Perfect Money', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant,Instant,Instant', 'Visa,Master Card,Skrill,Neteller,Perfect Money', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '3 - 5 Days,3-5 Days,Instant,Instant,Instant', 'https://www.exness.com/?utm_source=partners&ex_ol=1', '<h1>MetaTrader 5</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Advantages of MetaTrader 5</h2>\r\n\r\n<h3>MetaEditor</h3>\r\n\r\n<p>Now the development environment can be launched directly from the terminal, and new programs automatically appear in MetaTrader 5.</p>\r\n\r\n<h3>MetaQuotes Language 5</h3>\r\n\r\n<p>Several limitations of MQL4 have been eliminated in a new language and the number of functions and graphical objects has increased.</p>\r\n\r\n<h3>Hedging system</h3>\r\n\r\n<p>Exness has opted for the hedging mode system of the MetaTrader 5, which allows traders to have multiple positions for a trading instrument, including exact opposite ones.</p>\r\n\r\n<h3>Charts &amp; timeframes</h3>\r\n\r\n<p>All charts are created based on one-minute intervals, which allows up to 21 timeframes to be used simultaneously and the quotes history to be stored in a compact form.</p>\r\n\r\n<h3>Fundamental analysis</h3>\r\n\r\n<p>Traders can take advantage of an inbuilt economic calendar on MetaTrader 5, with news events, expected impacts, and forecasts included.</p>\r\n\r\n<h3>Indicators &amp; analytical object tools</h3>\r\n\r\n<p>MetaTrader 5 offers 38 inbuilt indicators, 22 analytical tools and 46 graphical objects, equipping traders with additional features to boost their trading experience.</p>', NULL, '<p>Exness education section contains lot of information and knowledge. Exness academy contains Essentials, development and breakthrough section. Video guidance contains videos in multiple languages. Analysis section contains full market analysis. You can join the free webinars conducted by Exness for deep knowledge of this market. Overall, education section of Exness forex broker is awesome.</p>', NULL, '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2008</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>CySec, FCA, FSCA</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 'admin', 'admin', '2022-01-06 09:43:31', '2022-01-06 10:33:03'),
(10, 'XM', '1641466152.png', '2009', '1', 'CySec – Cyprus Securities and Exchange Commission', '5 $', 'Limassol Cyprus', '1:800', 'Cyprus (+357)', '0101010101', 'info@bestforexbrokersworld.com', '<p>No.5 Cork Street, Belize City, Belize, C.A.</p>', 'Limassol', 'Cyprus', 'https://www.xm.com/register/account/real?lang=en&utm_source=bestforexbrokersworld.com&utm_content=1102840&utm_medium=affiliate', 'https://www.youtube.com/watch?v=Rbu8ETaJ0Fo&t=1s', NULL, NULL, '5 $,50 $,5 $,5 $,10000 $', 'Standard Account,Micro Ultra Low Account,Micro Account,Standard Account,Shares Account', '1:800,1:800,1:800,1:800,1:800', '0.01 Lot,0.1 Lot,100 Lots,0.01 Lots,1 Lot', '0 $,0 $,0 $,0 $,0 $', 'Variable,Variable,Variable,Variable,Variable', 'AUD,‎AUD,GBP,EUR,USD', 'Indices,Energies,Precious Metals,Currencies,CFDs', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,no', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,yes', 'Bank Transfer,Skrill,Neteller,Visa', 'Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant,Instant', 'Bank Transfer,Skrill,Visa', 'Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '2 - 5 Days,1 Working Day,2 - 5 Days', 'https://www.xm.com/register/account/real?lang=en&utm_source=bestforexbrokersworld.com&utm_content=1102840&utm_medium=affiliate', '<h2>MetaTrader 4</h2>\r\n\r\n<p>XM MT4 &mdash; Faster and Better</p>\r\n\r\n<p>XM pioneered the offering of an MT4 platform with trading execution quality in mind. Trade on MT4 with&nbsp;<strong>no requotes</strong>,&nbsp;<strong>no rejections</strong>, and flexible leverage ranging from 1:1 &mdash; to 888:1.</p>\r\n\r\n<ul>\r\n	<li>1 Single Login Access to 8 Platforms</li>\r\n	<li>Micro Lot Accounts (optional)</li>\r\n	<li>Spreads as low as 0.6 pips</li>\r\n	<li>Trade Over 1000 Instruments</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>MetaTrader 5</h2>\r\n\r\n<p>XM MT5 &mdash; 1 Platform, 6 Asset Classes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The XM MT5 offers all the pioneering features that the XM MT4 has to offer, with the addition of 300 stocks (shares) CFDs, making it the ideal multi-asset platform. Trade forex, stocks, gold, oil, equity indices and cryptocurrencies from 1 platform with no rejections, no re-quotes and flexible leverage from 1:1 to 888:1.</p>\r\n\r\n<ul>\r\n	<li>1 Single Login to 7 Platforms</li>\r\n	<li>Over 80 Analytical Objects</li>\r\n	<li>Market Depth of Latest Price Quotes</li>\r\n	<li>Over 1000 Instruments, including Stock CFDs, Stock Indices CFDs, Forex, CFDs on Precious Metals, CFDs on Cryptocurrencies, and CFDs on Energies</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>Research and Education section of XM forex broker has a wide range of educational materials. This includes market overviews, news, research, trade ideas, technical summaries, economic calendar, XM TV and podcast. Education section of XM forex brokers is so vast. It contains all the information and knowledge. Learning centre contains XM live, live education, Life Education schedule, education videos forex webinars, platform tutorials and forex seminars.</p>', '<p>XM forex broker had awarded many times in different aspects like forex excellence awards, forex broker awards and forex platform awards. XM forex broker have 36+ awards. Some of these are&nbsp;</p>\r\n\r\n<p>&bull; Best FX Service Provider&nbsp;</p>\r\n\r\n<p>&bull; Best broker in customer service&nbsp;</p>\r\n\r\n<p>&bull; Best customer service-experience global&nbsp;</p>\r\n\r\n<p>&bull; Best FX service provider for 2020&nbsp;</p>\r\n\r\n<p>&bull; Best customer service 2019&nbsp;</p>\r\n\r\n<p>&bull; Best retail forex broker&nbsp;</p>\r\n\r\n<p>&bull; Global forex broker of year&nbsp;</p>\r\n\r\n<p>&bull; Best Forex affiliate broker program-Europe&nbsp;</p>\r\n\r\n<p>&bull; Most reliable broker Global and many more</p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2009</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>CySec, IFSC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/5</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-06 10:49:12', '2022-01-06 11:09:04'),
(11, 'FP MARKETS', '1641707301.png', '2005', '1', 'ISA – Israel Securities Authority', '100 $', 'Sydney, Australia', '1:500', 'Australia (+61)', '3232323232', 'info@bestforexbrokersworld.com', '<p>Exchange, House Level 5/10 Bridge St, Sydney NSW 2000, Australia</p>', 'Sydney', 'Australia', 'https://www.fpmarkets.com/?fpm-affiliate-utm-source=IB&fpm-affiliate-pcode=14485&fpm-affiliate-agt=14485', 'https://www.youtube.com/user/fpmarkets', NULL, NULL, '100 $', 'Raw Accounts', '1:500', '0.01 Lots', '3 $', '0.0 Pips', 'USD', '60+ FX pairs, metals, indices, commodities', 'yes', 'yes', 'yes', 'yes', 'Visa', 'Free', 'Current Exchange Rate', 'Instant', 'Bank Transfer', '10 AUD', 'Current Exchange Rate', '1 Working Day', 'https://www.fpmarkets.com/?fpm-affiliate-utm-source=IB&fpm-affiliate-pcode=14485&fpm-affiliate-agt=14485', '<p>The platform fee charged depends on the trading platform you choose to use. This fee is determined by the platform provider. For instance, MetaTrader 4 and MetaTrader 5 are free to use, as is the&nbsp;<a href=\"https://www.fpmarkets.com/iress/iress-mobile/\"><strong>Iress Mobile</strong></a>&nbsp;version which is available on Android and Apple iOS devices such as iPhone and iPad. However, for&nbsp;<a href=\"https://www.fpmarkets.com/iress/iress-trader/\"><strong>Iress Trader</strong></a>/<a href=\"https://www.fpmarkets.com/iress/\"><strong>ViewPoint</strong></a>, there is a $55 monthly fee, including GST. This fee is waived when a certain amount of trades are executed or commissions generated. See below.</p>', NULL, '<p>FP market Academy has made a unique education project to enhance the knowledge and skills of its user. FP market has introduced three levels of courses for beginner intermediate and advanced intermediate and advanced. Intermediate and advanced level courses are in coming soon. FP market offers live webinars, podcast, trading eBooks, educational videos, glossary and newsletter signup.</p>', '<p>&bull; Best trade execution award&nbsp;</p>\r\n\r\n<p>&bull; Best customer service award&nbsp;</p>\r\n\r\n<p>&bull; Best value for money award</p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2005</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>ASIC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', NULL, '2022-01-09 05:48:21', '2022-01-09 05:48:21'),
(12, 'FBS', '1641709441.png', '2009', '1', 'CySec – Cyprus Securities and Exchange Commission', '1 $', 'Russia', '1:3000', 'India (+91)', '6565656565', 'info@bestforexbrokersworld.com', '<p>21, Vasili Michallidi, 3026 Limassol, Cyprus.</p>', 'Cyprus', 'Cyprus', 'https://fbs.com/?ppu=22078669&lang=en', 'https://www.youtube.com/watch?time_continue=7&v=z_QVBcqoZb0', NULL, NULL, '100 $,500 $,5 $,1 $,1000 $', 'Standard Account,Zero Spread Account,Micro Account,Cent Account,ECN Account', '1:3000,1:3000,1:3000,1:1000,1:3000', '0.01 Lot,0.01 Lot,0.01 Lot,0.01 Lot,0.1 Lot', '0 $,20 USD,0 $,0 $,6 $', 'Variable,Fixed Spread,Variable,Variable,Variable', 'EUR,EUR,USD,EUR,USD', 'Stocks/Equities,Forex/Currencies,CFDs,Indices,Commodities', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,no', 'Neteller,Visa,Sticpay,Skrill', 'Free,Free,2.5 %,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant,Instant', 'Sticpay,Skrill,Neteller,Perfect Money', '2.5 %,1 %,2 %,0.5 %', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '20 Mins to 48 Hours,20 Mins to 48 Hours,20 Mins to 48 Hours,24 - 48 Hours', 'https://fbs.com/?ppu=22078669&lang=en', '<p>FBS supports most convenient and reliable trading platforms.</p>\r\n\r\n<p>FBS Trader Platform: - FBS Trader features a set of instruments to follow the market trends and must-have tools tailored for your daily trades. The app is free from functionalities you may never use, coming with a user-friendly interface and smooth workflow.</p>\r\n\r\n<p>MetaTrader 4:- FBS offers MetaTrader 4 for Windows and Mac as well as for Android and iOS mobile platforms. MT4 provides a trading experience at your fingertips allowing you to progress as a trader anywhere at any time.</p>\r\n\r\n<p>MetaTrader 5:- Having its predecessor&#39;s best practice at hand, MetaTrader 5 is a more versatile software. It offers a wider choice of analytical tools, a possibility to trade stocks and commodities apart from currencies, and additional timeframes.</p>', NULL, '<p>Education section of FBS contains lot of information and tools. It has forex analytics, webinar and market analytics. It contains trading tools like economic calendar forex calculator and currency converter.</p>\r\n\r\n<p><a href=\"https://fbs.com/analytics/guidebooks\">Forex Guidebook</a></p>\r\n\r\n<p><a href=\"https://fbs.com/analytics/tips\">Tips for Traders</a></p>\r\n\r\n<p><a href=\"https://fbs.com/analytics/webinars\">Webinars</a></p>\r\n\r\n<p><a href=\"https://fbs.com/analytics/videolessons\">Video lessons</a></p>\r\n\r\n<p><a href=\"https://fbs.com/seminars\">Seminars</a></p>\r\n\r\n<p><a href=\"https://fbs.com/glossary\">Glossary</a></p>', '<p>&bull; FBS has received many awards. Some of these are</p>\r\n\r\n<p>&bull; Best FX IB program&nbsp;</p>\r\n\r\n<p>&bull; Best FX broker Indonesia&nbsp;</p>\r\n\r\n<p>&bull; Best forex Southeast Asia&nbsp;</p>\r\n\r\n<p>&bull; Best forex broker Thailand&nbsp;</p>\r\n\r\n<p>&bull; Best International Forex broker&nbsp;</p>\r\n\r\n<p>&bull; Best customer service broker Asia 2016&nbsp;</p>\r\n\r\n<p>&bull; Top IB program 2016&nbsp;</p>\r\n\r\n<p>&bull; Highly recommended broker insurance company Indonesia of the year&nbsp;</p>\r\n\r\n<p>&bull; Best forex broker Asia 2015&nbsp;</p>\r\n\r\n<p>&bull; Best safety of client fund Asia 2015&nbsp;</p>\r\n\r\n<p>&bull; Best broker in Asia Pacific region 2015&nbsp;</p>\r\n\r\n<p>&bull; Best broker in middle-east&nbsp;</p>\r\n\r\n<p>&bull; Most transparent forex broker 2018&nbsp;</p>\r\n\r\n<p>&bull; Best Forex broker Asia 2018&nbsp;</p>\r\n\r\n<p>&bull; Best Investor education 2017&nbsp;</p>\r\n\r\n<p>&bull; Best FX IB program China 2017&nbsp;</p>\r\n\r\n<p>&bull; Best progressive forex broker Europe 2019&nbsp;</p>\r\n\r\n<p>&bull; Best Forex broker Vietnam 2019</p>', '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2009</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>CySec, IFSC, ESMF</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-09 06:24:01', '2022-01-10 07:09:57'),
(13, 'IQ OPTION', '1641801147.png', '2013', '1', 'CySec – Cyprus Securities and Exchange Commission', '10 $', 'Limassol, Cyprus', '1:500', 'Afghanistan (+93)', '1212121212', 'info@bestforexbrokersworld.com', '<p><strong>Yiannis Nicolaides Business Center, Agiou Athanasiou Avenue 33, 4102, Agios Athanasios, Limassol, Cyprus</strong></p>', 'Limassol', 'Cyprus', 'https://iqbroker.com/lp/mobile-ib/en/?aff=262188&afftrack=&clickid=&aff_ref=&aff_promo_id=&aff_model=', 'https://www.youtube.com/watch?time_continue=1&v=SeojufjakP4', NULL, NULL, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'no', 'no', 'no', 'no', 'Master Card,Visa,UPI,Bank Transfer,Skrill', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,1 - 3 Working Days,1 - 3 Working Days,Instant', 'UPI,Neteller,Visa,Perfect Money', '2 %,2 %,2 %,2 %', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '1 - 72 Hours,1 - 3 Working Days,Instant,1 - 3 Business Days', 'https://iqbroker.com/lp/mobile-ib/en/?aff=262188&afftrack=&clickid=&aff_ref=&aff_promo_id=&aff_model=', '<p>IQ Option has developed its own trading platform. The platform is very user friendly and very easy to use. IQ option trading platformis available in different 13 languages. Multichart analysis, economic calendar etc are available to support you in your trading experience.</p>', NULL, '<p>Education system of IQ option is not as good as some other workers. If you are looking for a deep knowledge and information then it is better off to go for any alternative platforms. Education section of it often contains video tutorial, calendars, and Blogs. It contains videos and all the topics of forex.</p>', '<p>IQ option had received 14+ awards in different aspects like excellence award, customer service award etc.&nbsp;</p>\r\n\r\n<p>Awards of IQ option are</p>\r\n\r\n<p>&bull; 2017 award of excellence&nbsp;</p>\r\n\r\n<p>&bull; Intelligent trading app for option trading&nbsp;</p>\r\n\r\n<p>&bull; Century International quality Gold ERA award&nbsp;</p>\r\n\r\n<p>&bull; Best technology application&nbsp;</p>\r\n\r\n<p>&bull; Best option broker Europe 2015&nbsp;</p>\r\n\r\n<p>&bull; Most innovative option trading platform&nbsp;</p>\r\n\r\n<p>&bull; Best mobile trading platform&nbsp;</p>\r\n\r\n<p>&bull; Fastest-growing option trading brand&nbsp;</p>\r\n\r\n<p>&bull; Best trading platform&nbsp;</p>\r\n\r\n<p>&bull; World&#39;s leading option broker&nbsp;</p>\r\n\r\n<p>&bull; Most reliable option broker&nbsp;</p>\r\n\r\n<p>&bull; Most innovative option broker&nbsp;</p>\r\n\r\n<p>&bull; Best option broker&nbsp;</p>\r\n\r\n<p>&bull; Best option broker /trading application</p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2013</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>CySec</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', NULL, '2022-01-10 07:52:27', '2022-01-10 07:52:27');
INSERT INTO `broker` (`id`, `name`, `logo`, `founded_year`, `regulations`, `regulated_by`, `min_deposit`, `headquarters`, `maxleverage`, `country_code`, `mobileno`, `email`, `address`, `city`, `country`, `website_url`, `youtubevideo1`, `youtubevideo2`, `youtubevideo3`, `mindeposit`, `account_type`, `maxleverage_account`, `minimum_trade_volume`, `commission_acount`, `spreads`, `accountcurrencies`, `trading_instruments`, `ea`, `hedging_allowed`, `scaling_allowed`, `islamic_account`, `deposit_method`, `commission`, `exchange_rate`, `processing_time`, `withdrawalmethod`, `withdrawal_comission`, `withdrawal_exchange_rate`, `withdrawal_processing_time`, `account_link`, `trading_platrform`, `customer_support`, `education`, `awards`, `conclusion`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(14, 'FXTM', '1641802568.png', '20111', '1', 'CySec – Cyprus Securities and Exchange Commission', '10 $', 'Limassol Cyprus', '1:2000', 'India (+91)', '3232323232', 'info@bestforexbrokersworld.com', '<p>FXTM Tower, Lamprou Konstantara 35, Kato Polemidia 4156, Cyprus</p>', 'Limassol', 'Cyprus', 'https://www.forextime.com/?partner_id=4942057', 'https://www.youtube.com/watch?v=y886VNpYm9s', NULL, NULL, '25000 $,100 $,10 $,500 $,200 $', 'FXTM Pro Account,Standard Account,Cent Account,ECN Account,ECN Zero Account', '1:1000,1:1000,1:1000,1:1000,1:1000', '0.01 Lot,0.01 Lot,0.01 Lot,0.01 Lot,0.01 Lot', '0 $,0 $,0 $,2 USD,2 $', 'Variable,Variable,Variable,Variable,Variable', 'AUD,GBP,EUR,USD,NGN', 'Forex/Currencies,CFDs,Indices,Commodities,Cryptocurrencies', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,yes', 'yes,yes,yes,yes,yes', 'Bank Transfer,Paypal,Visa,Master Card,Skrill', 'Free,Free,Free,Free,', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '3 - 5 Working Days,Instant,Instant,Instant,Instant', 'Neteller,Visa,Master Card,Skrill', 'Free,3 $,3 $,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '24 Hours,24 Hours,24 Hours,24 Hours', 'https://www.forextime.com/?partner_id=4942057', '<p>FXTM does not have its own trading platform it uses third party platform for trading MetaTrader 5, MetaTrader 4 and Web trader.</p>', NULL, '<p>FXTM offer wide range of educational material to its user. You can develop your trading skill with free FXTM e-books. Books offered by FXTM are&nbsp;</p>\r\n\r\n<p>50 successful trader habits&nbsp;</p>\r\n\r\n<p>Elliott Wave theory&nbsp;</p>\r\n\r\n<p>Bearish Japanese candlestick and strategies&nbsp;</p>\r\n\r\n<p>Bullish Japanese candlestick strategies&nbsp;</p>\r\n\r\n<p>FXTM have e-books, forex trading seminar, forex trading webinars, forex glossary, what is forex, beginners guide to forex trading, Forex trading strategies, CFD trading short Forex Educational videos, Educational articles and periodic table.</p>', '<p>FXTM had received 43 awards in this field in many aspects like education, trading experience, reputable broker etc. Some Awards of FXTM are</p>\r\n\r\n<p>Best Forex new corner 2013&nbsp;</p>\r\n\r\n<p>Best growing Forex broker 2013&nbsp;</p>\r\n\r\n<p>Most innovative product award 2013&nbsp;</p>\r\n\r\n<p>Most educational broker 2014&nbsp;</p>\r\n\r\n<p>Fastest growing ECN broker Asia 2014&nbsp;</p>\r\n\r\n<p>Best partner program 2014&nbsp;</p>\r\n\r\n<p>Best investor trading institution 2015&nbsp;</p>\r\n\r\n<p>Most promising Forex broker 2015&nbsp;</p>\r\n\r\n<p>Best trading experience 2021 and many more</p>', '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2011</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>CySec</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-10 08:16:08', '2022-01-10 08:21:21'),
(15, 'GMIEDGE', '1641803377.svg', '2018', '1', 'VFSC – Vanuatu Financial Services Commission', '15 $', 'London, United Kingdom', '1:2000', 'India (+91)', '3636363636', 'info@bestforexbrokersworld.com', '<p>N.A</p>', 'London', 'United Kingdom of Great Britain and Northern Ireland (the)', 'https://gmi-ma.biz/account/register?token=NTg3NTgxNjZkZTZmZjJmOWNhNTljOTY1YmI1MDRiZGY=', 'https://www.youtube.com/watch?v=iiRg-gvueCE&t=68s', NULL, NULL, '100 $,25 $,15 $', 'ECN Account,Standard Account,Cent Account', '1:500,1:1000,1:1000', '0.01 Lot,0.01 Lot,0.01 Lot', '4 $,0 $,0 $', 'Variable,Variable,Variable', 'USD,USD,USD', 'Cryptocurrencies,CFDs, Commodities, Forex/Currencies,Cryptocurrencies, Indices, Energies, Precious Metals, Forex/Currencies', 'yes,yes,yes', 'yes,yes,yes', 'yes,yes,yes', 'yes,yes,yes', 'Perfect Money,Skrill,Neteller', 'Free,,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant', 'Neteller,Skrill', '4 $,4 $', 'Current Exchange Rate,Current Exchange Rate', 'Instant,Instant', 'https://gmi-ma.biz/account/register?token=NTg3NTgxNjZkZTZmZjJmOWNhNTljOTY1YmI1MDRiZGY=', '<p>Like other forex brokers GMI EDGE provides Meta Trader 4 trading platform to their clients.&nbsp;</p>', NULL, '<p>Unfortunately, there is no educational resource available on GMI.</p>', '<p>No Awards received by GMI yet.</p>', '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2018</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>VFSC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-10 08:29:37', '2022-01-10 08:43:05'),
(16, 'FXCHOICE', '1641804254.png', '2010', '1', 'IFSC – International Financial Services Commission', '100 $', 'London', '1:200', 'United Kingdom (+44)', '1212121212', 'info@bestforexbrokersworld.com', '<p><strong>20 Gresham Street, 4th Floor, London EC2V 7JE, United Kingdom</strong>.</p>', 'London', 'United Kingdom of Great Britain and Northern Ireland (the)', 'https://en.myfxchoice.com/refer-and-earn/?refer=491524', 'https://www.youtube.com/watch?v=2JpmBKgN47Y&feature=emb_title', NULL, NULL, '100 $', 'Pro Account', '1:200', '0.01 Lot', '7 $', 'Variable', 'AUD, GBP, EUR, USD', 'Cryptocurrencies, Stocks/Equities, Indices, Energies, Precious Metals, Forex/Currencies', 'yes', 'yes', 'yes', 'yes', 'Visa', 'Free', 'Current Exchange Rate', 'Instant', 'Skrill', '1 %', 'Current Exchange Rate', '24 Hours', 'https://en.myfxchoice.com/refer-and-earn/?refer=491524', '<p>MT4 and MT5</p>', NULL, '<p>FX Choice has some FAQs covering general questions and some basic market. But, unfortunately they did not have any education section on their website.</p>', '<p>Unfortunately, no awards are received by FX Choice till now.</p>', '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2010</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>IFSC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/5</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-10 08:44:14', '2022-01-13 11:04:25'),
(17, 'IC MARKETS', '1642073246.jpg', '2007', '1', 'CySec – Cyprus Securities and Exchange Commission', '200 $', 'Seychelles', '1:500', 'India (+91)', '9898989898', 'info@bestforexbrokersworld.com', '<p><strong>Eden Plaza,<br />\r\nOffice 209, Eden Island,<br />\r\nMahe, Seychelles</strong></p>', 'Eden Island', 'Seychelles', 'https://www.icmarkets.com/global/en/', 'https://www.youtube.com/watch?v=kUzlmANbNow&feature=emb_title', NULL, NULL, '200 $', 'Standard Account', '1:500', '0.01 Lot', '0 $', 'Variable', '‎AUD', 'Indices', 'yes', 'yes', 'yes', 'yes', 'Paypal', 'Free', 'Current Exchange Rate', 'Instant', 'Master Card', 'Free', 'Current Exchange Rate', '3 - 5 Days', 'https://www.icmarkets.com/global/en/', '<p>IC Market provides most trusted and reliable trading platform to its user.</p>\r\n\r\n<p>MetaTrader 4&nbsp;</p>\r\n\r\n<p>&bull; Raw pricing&nbsp;</p>\r\n\r\n<p>&bull; Fast order execution&nbsp;</p>\r\n\r\n<p>&bull; No restriction on trading</p>\r\n\r\n<p>&bull; Spread from 0.0pips&nbsp;</p>\r\n\r\n<p>MetaTrader 5&nbsp;</p>\r\n\r\n<p>&bull; Raw pricing connectivity&nbsp;</p>\r\n\r\n<p>&bull; Fast order execution&nbsp;</p>\r\n\r\n<p>&bull; No restriction on trading&nbsp;</p>\r\n\r\n<p>&bull; Level-II pricing market depth&nbsp;</p>\r\n\r\n<p>&bull; Spread from 0.0 pips&nbsp;</p>\r\n\r\n<p>MT web trader&nbsp;</p>\r\n\r\n<p>&bull; Trade from any location&nbsp;</p>\r\n\r\n<p>&bull; Take advantage of our spread&nbsp;</p>\r\n\r\n<p>&bull; No order on trade restriction&nbsp;</p>\r\n\r\n<p>&bull;Multiple order types</p>\r\n\r\n<p>&bull; Advanced charting and technical analysis</p>', NULL, '<p>Education of section of IC Market contains: blogs, video tutorials, Web TV, webinars and podcast. Educational section of IC Market is well structure and contains all the technical information and knowledge about Forex. They offer a global webinar series of experts from different countries. Get updated to the latest news of market via articles and blogs in IC market education section.</p>', '<p>14 years of IC Market in the forex market made it won numerous awards.</p>\r\n\r\n<p>Some of these are&nbsp;</p>\r\n\r\n<p>Best Asian broker 2019&nbsp;</p>\r\n\r\n<p>Best retail broker education 2013 winner&nbsp;</p>\r\n\r\n<p>Financial institution of the year 2012</p>', '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2007</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>ASIC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-13 11:27:26', '2022-01-13 11:33:58'),
(18, 'VANTAGE FX', '1642411723.jpg', '2009', '1', 'ASIC – Australian Securities and Investments Commission', '200 $', 'Sydney, Australia', '1:500', 'India (+91)', '3232323232', 'info@bestforexbrokersworld.com', '<p><strong>Suite 405, 68 York St, Sydney NSW 2000</strong>.</p>', 'Sydney', 'Australia', 'www.vantagefx.com/forex-trading/forex-trading-account/?affid=70835', 'https://www.youtube.com/watch?v=Qgc3wj7zBkk', NULL, NULL, '20000 $,200 $,500 $', 'Pro Ecn Account,Standard STP Account,Raw Ecn Account', '1:500,1:500,1:500', '0.01 Lot,0.01 Lot,0.01 Lot', '4 $,0 $,6 $', 'Variable,Variable,Variable', 'CAD,HKD,NZD', 'CFDs,Indices,Commodities', 'yes,yes,yes', 'yes,yes,yes', 'yes,yes,yes', 'no,yes,yes', 'Bank Transfer,Visa,Master Card,Neteller,Skrill', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '1 - 5 Working Days,Instant,Instant,Instant,24 Hours', 'Visa,Master Card,Skrill,Neteller', 'Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '3 - 5 Working Days,3 - 5 Working Days,1 - 2 Working Days,1 - 2 Working Days', 'www.vantagefx.com/forex-trading/forex-trading-account/?affid=70835', '<p>Vantage FX offers most popular trading softwares which is MetaTrader 4 and MetaTrader 5. These platforms contain all the technical tools and indicators which help its user to get the signals. Apart from this Vantage FX also offers Vantage FX app to access global market from anywhere and anytime. This app is available on both IOS and Android devices. It also contains technical indicators such as MACD, moving average etc. You can trade 300+ trading instruments.</p>', NULL, '<p>Education section of Vantage FX contains lot of information and videos about trading and platform tutorial. It contains written articles, blogs and news along with MT4 manual, MT5 manual, MT4 videos and smart tools videos.</p>', '<p>Vantage FX had won variety of awards across a wide range of categories. They had won 10+ awards in forex field.</p>\r\n\r\n<p>&bull; Fintech Award Winner 2021&nbsp;</p>\r\n\r\n<p>&bull; M&amp;A today winner 2020&nbsp;</p>\r\n\r\n<p>&bull; Global hundred 2020&nbsp;</p>\r\n\r\n<p>&bull; CV Magazine Winner 2019&nbsp;</p>\r\n\r\n<p>&bull; Fintech Award Winner 2018&nbsp;</p>\r\n\r\n<p>&bull; Global 100 winner 2017&nbsp;</p>\r\n\r\n<p>&bull; Fintech Award Winner 2017&nbsp;</p>\r\n\r\n<p>&bull; The Forex Winner 2016&nbsp;</p>\r\n\r\n<p>&bull; Forex Award Winner 2016&nbsp;</p>\r\n\r\n<p>&bull; IB times winner 2012&nbsp;</p>\r\n\r\n<p>&bull; Blue Ribbon winner 2011</p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2009</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>ASIC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-17 09:28:43', '2022-01-17 09:36:28'),
(19, 'IRONFX', '1642412309.png', '2010', '1', 'CySec – Cyprus Securities and Exchange Commission', '100 $', 'Cyprus', '1:1000', 'India (+91)', '3232323232', 'info@bestforexbrokersworld.com', '<p><strong>2 Iapetou Street, Agios Athanasios, Limassol 4101 Cyprus&nbsp;</strong></p>', 'Limassol', 'Cyprus', 'https://www.ironfx.com/en/register?utm_source=15033578&utm_medium=ib_link&utm_campaign=IB', 'https://www.youtube.com/watch?time_continue=1&v=bHdW0Gx0SpI', NULL, NULL, '100 $,100 $,100 $,100 $', 'Fixed Standard Account,Fixed Premium Account,VIP Account,Zero Fixed Account', '1:1000,1:1000,1:1000,1:500', '0.01 Lot,0.01 Lot,0.01 Lot,0.01 Lot', '0 $,0 $,0 $,18 $', 'Variable,Variable,Variable,Variable', '‎AUD,JPY,GBP,EUR', 'Futures,Indices,Precious Metals,Commodities', 'yes,yes,yes,yes', 'no,no,no,no', 'yes,yes,yes,yes', 'no,yes,yes,yes', 'Bank Transfer,Visa,Master Card,Skrill,Skrill', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '24 Hours,24 Hours,24 Hours,24 Hours,24 Hours', 'Bank Transfer,Master Card,Visa,Neteller,Skrill', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '24 - 48 Hours,24 - 48 Hours,24 - 48 Hours,24 - 48 Hours,24 - 48 Hours', 'https://www.ironfx.com/en/register?utm_source=15033578&utm_medium=ib_link&utm_campaign=IB', '<p>IronFX offers MetaTrader4 and web trader as a trading platform to its user which is the most trustable and reliable software. MetaTrader 4 is more reliable and popular trading software which has user-friendly interface and all essential tools and resources needed for successful online trading performance. MetaTrader 4 is supported by Windows, MacOS, iPhone, iPad, Android and any internet browsers.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/blobid3.png\" /></p>', NULL, '<p>Education section of IronFX is so vast. It contains all the information, news and blogs about trading. Educational program of IronFX has been developed to support their traders with trading strategies and achieve their goals. It contains&nbsp;</p>\r\n\r\n<p>&bull; Economic calendar&nbsp;</p>\r\n\r\n<p>&bull; Financial news&nbsp;</p>\r\n\r\n<p>&bull; Forex strategy&nbsp;</p>\r\n\r\n<p>&bull; What is forex&nbsp;</p>\r\n\r\n<p>&bull; Videos&nbsp;</p>\r\n\r\n<p>&bull; Forex trading glossary</p>', '<p>IronFX had won 25+ awards in the forex field.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/iron%20fx%20awards.png\" style=\"height:704px; width:897px\" /></p>', '<p><strong>&nbsp;Conclusion</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2010</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Not Regulated</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-17 09:38:29', '2022-01-17 10:07:53'),
(20, 'FXCC', '1642414788.png', '2010', '1', 'CySec – Cyprus Securities and Exchange Commission', '1 $', 'Vanuatu', '1:500', 'India (+91)', '9797979797', 'info@bestforexbrokersworld.com', '<p><strong>Law Partners House, Kumul Highway, Port Vila, Vanuatu</strong></p>', 'Port Vila', 'Vanuatu', 'https://www.fxcc.com/open-account?brd=1&sidc=22F3F885-7400-4016-8C98-6ADADF62EEE2', 'https://www.youtube.com/watch?v=EUGqTN9iqiw&feature=emb_title', NULL, NULL, '1 $', 'ECN Account', '1:500', '0.01 Lot', '0 $', 'Variable', 'GBP', 'Cryptocurrencies', 'yes', 'yes', 'yes', 'yes', 'Bank Transfer,Visa,Master Card,Skrill,Neteller', 'Free,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '5 - 7 Working Days,24 Hours,24 Hours,24 Hours,24 Hours', 'Skrill,Neteller,Visa', '2.7 %,2.7 %,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,5 - 10 Working  Days', 'https://www.fxcc.com/open-account?brd=1&sidc=22F3F885-7400-4016-8C98-6ADADF62EEE2', '<p>FXCC provide MetaTrader 4 as a trading platform to its users. MetaTrader 4 is supported by windows, ios, mobile and tablets. It is developed by MetaQuotes software Corporation.</p>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>Education centre of FXCC contains blogs, articles, news and eBooks which help its user to learn about this trading market. You can download its free forex eBooks</p>\r\n\r\n<p>&bull; The right trading strategy to match your lifestyle&nbsp;</p>\r\n\r\n<p>&bull; Trader&rsquo;s mindset&nbsp;</p>\r\n\r\n<p>&bull; Money management&nbsp;</p>\r\n\r\n<p>&bull; Straight through processing&nbsp;</p>\r\n\r\n<p>&bull; How to build a winning trading plan&nbsp;</p>\r\n\r\n<p>&bull; Technical and fundamental analysis&nbsp;</p>\r\n\r\n<p>&bull; The use of stop order&nbsp;</p>\r\n\r\n<p>&bull; Your trading plan&nbsp;</p>\r\n\r\n<p>&bull; An introduction to the basic of price action trading&nbsp;</p>\r\n\r\n<p>&bull; Scalping as a trading strategy&nbsp;</p>\r\n\r\n<p>&bull; Day trading as a trading style</p>\r\n\r\n<p>&nbsp;</p>', '<p>FXCC has won many awards in terms of global banking and trading account.</p>\r\n\r\n<p>&bull; Best STP broker&nbsp;</p>\r\n\r\n<p>&bull; Best STP broker Europe&nbsp;</p>\r\n\r\n<p>&bull; Best MT4 broker&nbsp;</p>\r\n\r\n<p>&bull; Best STP/ECN forex broker&nbsp;</p>\r\n\r\n<p>&bull; Best Forex trading account</p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2010</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Cyprus, Vanuatu</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/5</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-17 10:19:48', '2022-01-17 10:23:48'),
(21, 'PRIMEXBT', '1642415562.png', '2018', '2', NULL, '0.001 BTC', 'Seychelles', '1:500', 'India (+91)', '3232323232', 'info@bestforexbrokersworld.com', '<p><strong>St. Vincent and the Grenadines</strong></p>', NULL, 'Seychelles', 'https://primexbt.com/id/sign-up?click_id=61e5455498cccc0001714bd4&pid=11460&offer_id=12&sub1=&sub2=&sub3=&sub4=&sub5=&sub6=&sub7=&sub8=', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '<p>PrimeXBT is award-winning platform. It has won the best platform for margin trading and best Crypto trading app. Trading platform of PrimeXBT is superb. It offers customizable platform, layout professional chat, multiple order types and secure wallet.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.bestforexbrokersworld.com/themes/assets/images/blobid2.png\" /></p>', NULL, '<p>Education section of PrimeXBT contains articles and written materials. PrimeXBT does not contain educational videos just like other forex broker. It contains blogs, platform announcement, technical analysis, price prediction and market research.</p>', '<p><img src=\"https://www.bestforexbrokersworld.com/themes/assets/images/blobid3.png\" /></p>', '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2018</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Not Regulated</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', NULL, '2022-01-17 10:32:42', '2022-01-17 10:32:42'),
(22, 'EXPERT OPTION', '1642416824.png', '2014', '1', 'VFSC – Vanuatu Financial Services Commission', '10 $', 'Vanuatu', '1:500', 'India (+91)', '9898989898', 'info@bestforexbrokersworld.com', NULL, 'Vanuatu', 'Vanuatu', 'https://expertoption.com/?refid=34738&rlink=r&tsr=1642416509358', 'https://www.youtube.com/watch?v=f8FeVf32FDs', NULL, NULL, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'no', 'no', 'no', 'no', '', '', 'N.A', 'N.A', '', '', 'N.A', 'N.A', 'https://expertoption.com/?refid=34738&rlink=r&tsr=1642416509358', '<p>Expert option offers its own trading platform which consist 4 Chart type, 8 Indicators and trend lines. Its platform is supported by Windows, Android, iOS and MacOS. Its trading platform consist lot of useful features such as you can split the Chart layout so that you can view to different Market at same time. It consist indicators like Moving Average, MACD, Parabolic SAR, Alligator, awesome oscillator etc. Expert option consist 4 chart types- Area, Line, Bar and Candlestick chart type.</p>', NULL, '<p>Expert Option contains wide-range of education material which helps its traders to understand the concept of trading from basic to advance. Education section of expert option contains blogs, videos, written materials, and webinars. It also includes glossary, technical analysis, graphical analysis, fundamental analysis, psychology of trading, and trading strategies. In tutorial section it consist all the videos about indictors and signals. Traders can learn from the videos and maximize their profit.</p>\r\n\r\n<p>Forex Market is a risky market. It involves financial risk. Best Forex Broker World is a platform which contains the information and is not responsible for any of your loss as it contains the information for Education purpose only.</p>', NULL, '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2014</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>VFSC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-17 10:53:44', '2022-01-17 10:56:14');
INSERT INTO `broker` (`id`, `name`, `logo`, `founded_year`, `regulations`, `regulated_by`, `min_deposit`, `headquarters`, `maxleverage`, `country_code`, `mobileno`, `email`, `address`, `city`, `country`, `website_url`, `youtubevideo1`, `youtubevideo2`, `youtubevideo3`, `mindeposit`, `account_type`, `maxleverage_account`, `minimum_trade_volume`, `commission_acount`, `spreads`, `accountcurrencies`, `trading_instruments`, `ea`, `hedging_allowed`, `scaling_allowed`, `islamic_account`, `deposit_method`, `commission`, `exchange_rate`, `processing_time`, `withdrawalmethod`, `withdrawal_comission`, `withdrawal_exchange_rate`, `withdrawal_processing_time`, `account_link`, `trading_platrform`, `customer_support`, `education`, `awards`, `conclusion`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(23, 'FUSION MARKETS', '1642417815.png', '2017', '1', 'ASIC – Australian Securities and Investments Commission', '0 $', 'Melbourne, Australia', '1:500', 'India (+91)', '9797979797', 'info@bestforexbrokersworld.com', '<p><strong>17 Gwynne St, Cremorne VIC 3121, Australia</strong></p>', 'Melbourne', 'Australia', 'https://fusionmarkets.com/?cxd=45117_377603', 'https://www.youtube.com/watch?v=1NL4yc66588&feature=emb_title', NULL, NULL, 'N.A', 'Zero Account', '1:500', '0.01 Lot', '4.5 $', 'Variable', 'SGD, ‎AUD, JPY, GBP, EUR, USD', 'Indices, Energies, Precious Metals, Forex/Currencies', 'yes', 'yes', 'yes', 'no', 'Bank Transfer', 'Free', 'Current Exchange Rate', '2 - 3 Working Days', 'Bank Transfer', '15 $ - 25 $', 'Current Exchange Rate', '1 - 2 Working Days', 'https://fusionmarkets.com/?cxd=45117_377603', '<p>Fusion markets offer MetaTrader 4 and MetaTrader 5 as their trading platform which are the most reliable trading software. MetaTrader 4 and MetaTrader 5 is supported by windows, iOS, mobile and tablets. It contains 50+ most popular technical indicators, 9 time frames from 1 minute to 1 month which help user to make profit. MT4 provides 0.02ms execution speed on each trade. It is developed by MetaQuotes software Corporation.</p>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>Fusion markets do not provide any educational section. It does not have any educational videos, blogs, written materials and news. It only have a demo account as an educational tool you can try a free demo account.</p>', '<p>Fusion markets hadn&rsquo;t received any awards till now.</p>', '<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2011</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>VFSC</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', NULL, '2022-01-17 11:10:15', '2022-01-17 11:10:15'),
(24, 'Deriv', '1642505209.png', '1999', '1', 'VFSC – Vanuatu Financial Services Commission', '5 $', 'Malta', '1:1000', 'India (+91)', '5252525252', 'info@bestforexbrokersworld.com', '<p><strong>W Business Centre, Level 3, Triq Dun Karm Birkirkara, BKR 9033, Malta</strong></p>', 'Malta', 'Malta', 'https://deriv.com/?t=fmPiGGYZsXb7AT2uigmCZWNd7ZgqdRLk&utm_source=affiliate_169324&utm_medium=affiliate&utm_campaign=MyAffiliates&utm_content=&referrer=', 'https://www.youtube.com/watch?v=KjAs-oIbiv8&feature=emb_title', NULL, NULL, '0 $,0 $,0 $', 'Financial Account,STP Account,Synthetic Account', '1:1000,1:1000,1:1000', '0.01 Lot,0.01 Lot,0.01 Lot', '0 $,0 $,0 $', 'Variable,Variable,Variable', 'USD,USD,USD', 'Cryptocurrencies,Stocks/Equities,Indices', 'yes,yes,yes', 'yes,yes,yes', 'yes,yes,yes', 'no,no,no', 'Bank Transfer', 'Free', 'Current Exchange Rate', '24 Hours', 'Bank Transfer', 'Free', 'Current Exchange Rate', '1 - 2 Working Days', 'https://deriv.com/?t=fmPiGGYZsXb7AT2uigmCZWNd7ZgqdRLk&utm_source=affiliate_169324&utm_medium=affiliate&utm_campaign=MyAffiliates&utm_content=&referrer=', '<p>Deriv provide four types of trading platform to its user.&nbsp;</p>\r\n\r\n<p>&bull; DMT5&nbsp;</p>\r\n\r\n<p>&bull; DTrader</p>\r\n\r\n<p>&bull; Smart Trader&nbsp;</p>\r\n\r\n<p>&bull; DBot&nbsp;</p>\r\n\r\n<p><strong>Deriv MetaTrader 5 (DMT5)</strong></p>\r\n\r\n<p>MetaTrader 5 is a most reliable trading platform. It is developed by MetaQuotes which gives access to multiple assets. DMT5 offers 100+ tradable assets with 24/7 trading. MetaTrader 5 is user-friendly trading software and free to download. MetaTrader 5 is considered as the best choice for professional traders.</p>\r\n\r\n<p><em>Check the screenshot below</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DTrader</strong></p>\r\n\r\n<p>DTrader is also user-friendly and requires no download. It is the most powerful platform which offers 50+ tradable assets to trade. DTrader has minimum mistake of $0.35 and more than 200% potentially layout. Its duration is&nbsp; very much flexible which is 1s-365 days.&nbsp;</p>\r\n\r\n<p><em>Check the screenshot below</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Smart Trader&nbsp;</strong></p>\r\n\r\n<p><em>Check the screenshot below</em></p>\r\n\r\n<p><strong>DBot</strong></p>\r\n\r\n<p>It automates your trading ideas without writing code. It does not need any coding. It has 3 pre-built strategies and 50+ assets to unleash your bot.</p>\r\n\r\n<p><em>Check the screenshot below</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', NULL, '<p>Deriv offers blogs as their education material. It does not have any videos lessons and basic trading information. It offers weekly market report and news. They have a lot of trading tools like margin calculator, SIP calculator, P&amp;L for margin and PnL for multipliers.</p>', '<p>Deriv hadn&rsquo;t received any awards yet.</p>', '<p><strong>&nbsp;Conclusion</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>1999</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>FCA</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#ffffff; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-18 11:26:49', '2022-01-19 05:53:41'),
(25, 'IV', '1642666553.jpg', '2018', '1', 'Financial Services Authority Seychelles', '100 $', 'Seychelles', '1:500', 'India (+91)', '8989898989', 'info@bestforexbrokersworld.com', '<p><strong>Lagos NG, 79/81 Obafemi Awolowo Way, Ikeja 100001, Ikeja, Nigeria</strong></p>', 'Ikeja', 'Nigeria', 'https://svg.ivmarkets.com/register/index?invitationCode=XNX735QI', 'https://www.youtube.com/watch?v=MIan3-jM-T0&t=1s', NULL, NULL, '100 $,100 $', 'ECN Account,STP Account', '1:500,1:500', '0.01 Lot,0.01 Lot', '0 $,0 $', 'Variable,Variable', 'USD,USD', 'Cryptocurrencies,Cryptocurrencies', 'yes,yes', 'yes,yes', 'no,no', 'no,no', 'Bank Transfer,Master Card,Skrill', 'Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant', 'Bank Transfer,Master Card,Neteller,', 'Free,Free,Free,', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,', '1 - 2 Working Days,1 - 2 Working Days,24 - 48 Hours,', 'https://svg.ivmarkets.com/register/index?invitationCode=XNX735QI', '<p>IV Markets offers all the functions of&nbsp;<strong>Metatrader 4 (MT4)</strong>. Users can place orders, users can close positions, set stop loss and take profit, view real time news, view reports and analyse data.&nbsp;Traders can easily get access to all bid prices of the target products and select the most suitable product for trading.</p>\r\n\r\n<h3><strong>Advantages of IV Markets MT4</strong></h3>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.ivmarkets.com/wp-content/themes/ix/images/forex_mt4_row2_item1_new.png?v=1638946604\" style=\"height:auto; margin-bottom:30px\" />Trading becomes more flexible and convenient\r\n	<p>2 execution modes<br />\r\n	2 market orders<br />\r\n	4 pending orders<br />\r\n	stop loss and take profit orders<br />\r\n	Trailing stop loss</p>\r\n	</li>\r\n	<li><img alt=\"\" src=\"https://www.ivmarkets.com/wp-content/themes/ix/images/forex_mt4_row2_item2_new.png?v=1638946604\" style=\"height:auto; margin-bottom:30px\" />Good compatibility\r\n	<p>Software requires file size less than 5Mb<br />\r\n	Does not reply on other programs and able to run independently<br />\r\n	The requirements for network bandwidth are extremely low</p>\r\n	</li>\r\n	<li><img alt=\"\" src=\"https://www.ivmarkets.com/wp-content/themes/ix/images/forex_mt4_row2_item3_new.png?v=1638946604\" style=\"height:auto; margin-bottom:30px\" />Analysis function of MetaTrader 4\r\n	<p>Interactive chart<br />\r\n	9 schedules<br />\r\n	23 types of analysis objects<br />\r\n	30 types of technical indicators</p>\r\n	</li>\r\n	<li><img alt=\"\" src=\"https://www.ivmarkets.com/wp-content/themes/ix/images/forex_mt4_row2_item4_new.png?v=1638946604\" style=\"height:auto; margin-bottom:30px\" />Algorithmic trading\r\n	<p>Support EA trading<br />\r\n	MQL4 Trading Strategy Language<br />\r\n	MetaEditor<br />\r\n	Strategy test<br />\r\n	Free automatic trading library</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>As one of the leading online trading platform in the world, IV Markets provides MT4 mobile version to customers. You do not need to install any additional software or certificates, and this software can be used to trade in any browser and operating system (Windows, MAC OSX above, Ipad&amp;Iphone ios6 above, Android 4.4 above.)</p>', NULL, '<p>IV Markets conducts seminars and webinars. They also conduct training for beginners. IV markets is having their own team experts they analyse the market and provide trading tips to their clients. It regularly posts blogs and video tutorials for traders. &nbsp;&nbsp; &nbsp; &nbsp;</p>', NULL, '<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>Founded year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:319px\">\r\n			<p><strong>2019</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated by</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Regulated</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 4</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>MetaTrader 5</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Customer Support</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>24/7</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Mobile Trading</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:319px\">\r\n			<p><strong>Yes</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin', 'admin', '2022-01-19 06:20:38', '2022-01-20 08:42:21'),
(26, 'QUOTEX', '1642673638.png', '2020', '1', 'IFMRRC', '10 $', 'Seychelles', 'N.A', 'India (+91)', '2525252525', 'info@bestforexbrokersworld.com', '<p><strong>Seychelles</strong></p>', 'N.A', 'Seychelles', 'https://qxbroker.com/en/sign-up/?lid=79105', 'https://www.youtube.com/watch?v=i6vEjl16N_8&feature=emb_title', NULL, NULL, '100 $,1000 $,5000 $', 'Standard Account,Pro Account,VIP Account', 'N.A,N.A,N.A', 'N.A,N.A,N.A', 'N.A,N.A,N.A', 'N.A,N.A,N.A', 'N.A,N.A,N.A', 'N.A,N.A,N.A', 'no,no,no', 'no,no,no', 'no,no,no', 'no,no,no', '', '', '', '', '', '', '', '', 'https://qxbroker.com/en/sign-up/?lid=79105', '<p>Clients can reach the web-based platform and start trading after account registration. Once signed up and through the login portal, users simply need to:</p>\r\n\r\n<ol>\r\n	<li><strong>Choose an asset</strong>&nbsp;&ndash; each instrument displays a percentage return on investment if you win the trade, up to 98%</li>\r\n	<li><strong>Select an expiration time</strong>&nbsp;&ndash; times between one minute and four hours are available, and can be fine-tuned to the second</li>\r\n	<li><strong>Input investment amount</strong>&nbsp;&ndash; choose how much capital you want to put behind your market position</li>\r\n	<li><strong>Pick &lsquo;Up&rsquo; or &lsquo;Down&rsquo;</strong>&nbsp;&ndash; depending on which direction you believe the asset price will move by the expiry</li>\r\n</ol>', NULL, '<p>N.A</p>', '<p>N.A</p>', '<p>N.A</p>', 'admin', NULL, '2022-01-20 10:13:58', '2022-01-20 10:13:58'),
(27, 'YAMARKETS', '1642675273.jfif', '2016', '2', NULL, '10 $', 'Grenadines', '1:500', 'India (+91)', '6565656565', 'info@bestforexbrokersworld.com', '<p><strong>71-75 Shelton St, London WC2H 9JQ, UK</strong></p>', 'London', 'United Kingdom of Great Britain and Northern Ireland (the)', 'http://my.yamarkets.com/register?referral=550', 'https://www.youtube.com/watch?v=JMpR4BQQbwM&t=1s', NULL, NULL, '5000 $,2500 $,500 $,10 $', 'ECN Account,Royale Account,Standard Account,Ultimate Account', '1:200,1:300,1:500,1:500', '0.01 Lot,0.01 Lot,0.01 Lot,0.01 Lot', '5 $,0 $,0 $,0 $', 'Variable,Variable,Variable,Variable', 'USD,USD,USD,USD', 'Cryptocurrencies,Indices,Commodities,Forex/Currencies', 'yes,yes,yes,yes', 'yes,yes,yes,yes', 'yes,yes,yes,yes', 'yes,yes,yes,yes', 'Bank Transfer,Visa,Master Card,Neteller,Skrill', 'Free,5 %,5 %,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', 'Instant,Instant,Instant,24 Hours,24 Hours', 'Bank Transfer,Visa,Master Card,Neteller,Skrill', '5 %,Free,Free,Free,Free', 'Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate,Current Exchange Rate', '24 Hours,24 Hours,24 Hours,24 Hours,24 Hours', 'http://my.yamarkets.com/register?referral=550', '<p>N.A</p>', '<p>N.A</p>', '<p>N.A</p>', '<p>N.A</p>', '<p>N.A</p>', 'admin', 'admin', '2022-01-20 10:41:13', '2022-01-20 10:44:09'),
(28, 'CJCMARKETS', '1642675938.jfif', '2012', '1', 'ASIC – Australian Securities and Investments Commission', '1000', 'Sydney, Australia', '1:400', 'India (+91)', '2525252525', 'info@bestforexbrokersworld.com', '<p><strong>23F Tower 6789, 6789 Ayala Ave, 1209 Makati City, Manila, The Philippines</strong></p>', 'Sydney', 'Australia', 'https://trader.cjcmarketsglobal.com/register?iid=997JnQ36&uid=7609&pid=156106Pathan%20Mohseenkhan', 'https://www.youtube.com/watch?v=gHmNBpTkJPY', NULL, NULL, '50000 $,25000 $,1000 $', 'ECN Account,VIP Account,Standard Account', '1:200,1:300,1:400', '0.01 Lot,0.01 Lot,0.01 Lot', '5 $,0 $,0 $', 'Variable,Variable,Fixed Spread', 'USD,USD,USD', 'CFDs,Commodities,Forex/Currencies', 'yes,yes,yes', 'yes,yes,yes', 'no,no,no', 'no,no,no', 'Bank Transfer', 'Free', 'Current Exchange Rate', 'Instant', 'Bank Transfer', '25 $', 'Current Exchange Rate', '24 Hours', 'https://trader.cjcmarketsglobal.com/register?iid=997JnQ36&uid=7609&pid=156106Pathan%20Mohseenkhan', '<p>CJC Markets Provides Metatrader 4 for both Ios and Android Platforms.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Real-time quotes of Forex market</strong></p>\r\n\r\n<p><strong>Full set of trade orders, including pending orders</strong></p>\r\n\r\n<p><strong>Detailed online trading history</strong></p>\r\n\r\n<p><strong>Trade levels visualizing the prices of pending orders</strong></p>\r\n\r\n<p>&nbsp;</p>', '<p>N.A</p>', '<p>N.A</p>', '<p>N.A</p>', '<p>N.a</p>', 'admin', 'admin', '2022-01-20 10:52:18', '2022-01-20 10:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Albania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Algeria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Andorra', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Angola', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Antigua and Barbuda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Argentina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Armenia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Australia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Austria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Azerbaijan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Bahamas (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Bahrain', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Bangladesh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Barbados', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Belarus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Belgium', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Belize', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Benin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Bhutan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Bolivia (Plurinational State of)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Bosnia and Herzegovina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Botswana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Brazil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Brunei Darussalam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Bulgaria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Burkina Faso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Burundi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Cabo Verde', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Cambodia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Cameroon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Canada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Central African Republic (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Chad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Chile', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'China', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Colombia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Comoros (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Congo (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Costa Rica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'C', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Croatia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Cuba', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Cyprus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Czechia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Democratic People\'s Republic of Korea (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Democratic Republic of the Congo (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Denmark', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Djibouti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Dominica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Dominican Republic (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Ecuador', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Egypt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'El Salvador', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Equatorial Guinea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Eritrea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Estonia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Eswatini', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Ethiopia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Fiji', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Finland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'France', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Gabon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Gambia (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Georgia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Germany', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Ghana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Greece', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Grenada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Guatemala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Guinea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Guinea-Bissau', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Guyana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Haiti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Honduras', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Hungary', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Iceland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'India', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Indonesia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Iran (Islamic Republic of)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Iraq', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Ireland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Israel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Italy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Jamaica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Japan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Jordan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Kazakhstan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Kenya', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Kiribati', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Kuwait', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Kyrgyzstan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Lao People\'s Democratic Republic (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Latvia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Lebanon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Lesotho', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Liberia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Libya', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Liechtenstein', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Lithuania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Luxembourg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Madagascar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Malawi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Malaysia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Maldives', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Mali', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Malta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Marshall Islands (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Mauritania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Mauritius', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Mexico', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Micronesia (Federated States of)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Monaco', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Mongolia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Montenegro', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Morocco', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Mozambique', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Myanmar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Namibia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Nauru', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Nepal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Netherlands (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'New Zealand', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Nicaragua', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Niger (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Nigeria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'North Macedonia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Norway', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Oman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Pakistan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Palau', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Panama', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Papua New Guinea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Paraguay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Peru', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Philippines (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Poland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Portugal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Qatar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Republic of Korea (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Republic of Moldova (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Romania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Russian Federation (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Rwanda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Saint Kitts and Nevis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Saint Lucia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Saint Vincent and the Grenadines', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Samoa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'San Marino', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Sao Tome and Principe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Saudi Arabia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Senegal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Serbia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Seychelles', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Sierra Leone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Singapore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Slovakia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Slovenia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Solomon Islands', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Somalia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'South Africa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'South Sudan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Spain', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Sri Lanka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Sudan (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Suriname', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Sweden', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Switzerland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Syrian Arab Republic (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Tajikistan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Thailand', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Timor-Leste', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Togo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Tonga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Trinidad and Tobago', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Tunisia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Turkey', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Turkmenistan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Tuvalu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Uganda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Ukraine', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'United Arab Emirates (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'United Kingdom of Great Britain and Northern Ireland (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'United Republic of Tanzania (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'United States of America (the)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Uruguay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Uzbekistan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Vanuatu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Venezuela (Bolivarian Republic of)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Viet Nam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Yemen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Zambia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Zimbabwe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Holy See (the) *', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'State of Palestine (the) *', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'Cook Islands (the) **', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'Niue **', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, '*Observer State', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, '**Member of specialized agencies', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deposit_withdrawal`
--

CREATE TABLE `deposit_withdrawal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposit_withdrawal`
--

INSERT INTO `deposit_withdrawal` (`id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Bank Transfer', '1640849924.jpg', 'Bank Transfer', '2021-12-30 07:38:44', '2021-12-30 07:38:44'),
(4, 'Paypal', '1640850008.jpg', 'Paypal', '2021-12-30 07:40:08', '2021-12-30 07:40:08'),
(5, 'Visa', '1640850060.png', 'Visa', '2021-12-30 07:41:00', '2021-12-30 07:41:00'),
(6, 'Master Card', '1640850133.png', 'Master Card', '2021-12-30 07:42:13', '2021-12-30 07:42:13'),
(7, 'Skrill', '1640850211.png', 'Skrill', '2021-12-30 07:43:31', '2021-12-30 07:43:31'),
(8, 'Neteller', '1640850318.png', 'Neteller', '2021-12-30 07:45:18', '2021-12-30 07:45:18'),
(9, 'UPI', '1640850628.png', 'UPI', '2021-12-30 07:50:28', '2021-12-30 07:50:28'),
(10, 'Bitcoin', '1640850770.png', 'Bitcoin', '2021-12-30 07:52:50', '2021-12-30 07:52:50'),
(11, 'Litecoin', '1640851346.png', 'Litecoin', '2021-12-30 08:02:26', '2021-12-30 08:02:26'),
(12, 'Wire Transfer', '1640851427.png', 'Wire Transfer', '2021-12-30 08:03:47', '2021-12-30 08:03:47'),
(13, 'Perfect Money', '1641464783.png', 'Perfect Money', '2022-01-06 10:26:23', '2022-01-06 10:26:23'),
(14, 'Sticpay', '1641464874.svg', 'sticpay', '2022-01-06 10:27:54', '2022-01-06 10:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_10_173351_create_regulatory_body_master_table', 1),
(6, '2021_12_10_180853_create_country_master_table', 1),
(7, '2021_12_10_181249_create_mobile_nocode_master_table', 1),
(8, '2021_12_10_181544_create_city_master_table', 1),
(9, '2021_12_26_043455_create_deposit_withdrawal_table', 1),
(10, '2021_12_03_022120_create_broker_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_nocode_master`
--

CREATE TABLE `mobile_nocode_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobilecode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_nocode_master`
--

INSERT INTO `mobile_nocode_master` (`id`, `mobilecode`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan (+93)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Albania (+355)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Algeria (+213)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'American Samoa (+1-684)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Andorra (+376)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Angola (+244)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Anguilla (+1-264)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Antigua and Barbuda (+1-268)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Argentina (+54)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Armenia (+374)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Aruba (+297)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Australia (+61)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Austria (+43)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Azerbaijan (+994)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Bahamas (+1-242)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bahrain (+973)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Bangladesh (+880)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Barbados (+1-246)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Belarus (+375)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Belgium (+32)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Belize (+501)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Benin (+229)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Bermuda (+1-441)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Bhutan (+975)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Bolivia (+591)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Bosnia and Herzegovina (+387)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Botswana (+267)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Brazil (+55)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'British Indian Ocean Territory (+246)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'British Virgin Islands (+1-284)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Brunei (+673)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Bulgaria (+359)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Burkina Faso (+226)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Burundi (+257)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Cambodia (+855)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Cameroon (+237)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Canada (+1)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Cape Verde (+238)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Cayman Islands (+1-345)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Central African Republic (+236)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Chad (+235)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Chile (+56)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'China (+86)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Christmas Island (+61)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Cocos Islands (+61)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Colombia (+57)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Comoros (+269)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Cook Islands (+682)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Costa Rica (+506)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Croatia (+385)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Cuba (+53)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Cyprus (+357)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Czech Republic (+420)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Democratic Republic of the Congo (+243)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Denmark (+45)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Djibouti (+253)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Dominica (+1-767)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Dominican Republic (+1-809)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Dominican Republic (+1-829)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'East Timor (+670)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Ecuador (+593)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Egypt (+20)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'El Salvador (+503)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Equatorial Guinea (+240)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Eritrea (+291)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Estonia (+372)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Ethiopia (+251)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Falkland Islands (+500)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Faroe Islands (+298)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Fiji (+679)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Finland (+358)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'France (+33)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'French Polynesia (+689)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Gabon (+241)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Gambia (+220)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Georgia (+995)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Germany (+49)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Ghana (+233)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Gibraltar (+350)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Greece (+30)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Greenland (+299)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Grenada (+1-473)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Guam (+1-671)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Guatemala (+502)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Guinea (+224)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Guinea (+245)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Guyana (+592)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Haiti (+509)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Honduras (+504)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Hong Kong (+852)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Hungary (+36)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Iceland (+354)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'India (+91)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Indonesia (+62)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Iran (+98)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Iraq (+964)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Ireland (+353)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Isle of Man (+44-1624)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Israel (+972)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Italy (+39)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Ivory Coast (+225)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Jamaica (+1-876)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Japan (+81)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Jersey (+44-1534)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Jordan (+962)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Kazakhstan (+7)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Kenya (+254)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Kiribati (+686)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Kuwait (+965)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Kyrgyzstan (+996)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Laos (+856)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Latvia (+371)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Lebanon (+961)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Lesotho (+266)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Liberia (+231)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Libya (+218)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Liechtenstein (+423)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Lithuania (+370)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Luxembourg (+352)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Macao (+853)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Macedonia (+389)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Madagascar (+261)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Malawi (+265)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Malaysia (+60)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Maldives (+960)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Mali (+223)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Malta (+356)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Marshall Islands (+692)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Martinique (+596)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Mauritania (+222)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Mauritius (+230)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Mayotte (+262)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Mexico (+52)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Micronesia (+691)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Moldova (+373)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Monaco (+377)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Mongolia (+976)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Montenegro (+382)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Montserrat (+1-664)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Morocco (+212)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Mozambique (+258)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Myanmar (+95)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Namibia (+264)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Nauru (+674)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Nepal (+977)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Netherlands (+31)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Netherlands Antilles (+599)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'New Caledonia (+687)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'New Zealand (+64)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Nicaragua (+505)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Niger (+227)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Nigeria (+234)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Niue (+683)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'North Korea (+850)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Northern Mariana Islands (+1-670)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Norway (+47)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Oman (+968)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Pakistan (+92)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Palau (+680)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Panama (+507)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Papua New Guinea (+675)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Paraguay (+595)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Peru (+51)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Philippines (+63)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Pitcairn (+870)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Poland (+48)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Portugal (+351)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Puerto Rico (+1-787) (+1-787)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Puerto Rico (+1-939) (+1-939)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Qatar (+974)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Republic of the Congo (+242)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Romania (+40)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Russia (+7)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Rwanda (+250)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Saint Barthelemy (+590)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Saint Helena (+290)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Saint Kitts and Nevis (+1-869)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Saint Lucia (+1-758)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Saint Martin (+590)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Saint Pierre and Miquelon (+508)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Saint Vincent and the Grenadines (+1-784)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Samoa (+685)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'San Marino (+378)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Sao Tome and Principe (+239)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Saudi Arabia (+966)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Senegal (+221)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Serbia (+381)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Seychelles (+248)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Sierra Leone (+232)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Singapore (+65)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Slovakia (+421)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Slovenia (+386)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Solomon Islands (+677)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Somalia (+252)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'South Africa (+27)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'South Korea (+82)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'Spain (+34)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Sri Lanka (+94)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'Sudan (+249)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Suriname (+597)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Svalbard and Jan Mayen (+47)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Swaziland (+268)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Sweden (+46)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Switzerland (+41)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'Syria (+963)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'Taiwan (+886)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'Tajikistan (+992)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'Tanzania (+255)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'Thailand (+66)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'Togo (+228)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'Tokelau (+690)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'Tonga (+676)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'Trinidad and Tobago (+1-868)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'Tunisia (+216)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'Turkey (+90)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'Turkmenistan (+993)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'Turks and Caicos Islands (+1-649)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 'Tuvalu (+688)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 'US. Virgin Islands (+1-340)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 'Uganda (+256)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 'Ukraine (+380)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 'United Arab Emirates (+971)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'United Kingdom (+44)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'United States (+1)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'Uruguay (+598)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'Uzbekistan (+998)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'Vanuatu (+678)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'Vatican (+379)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'Venezuela (+58)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'Vietnam (+84)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'Wallis and Futuna (+681)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 'Western Sahara (+212)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 'Yemen (+967)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'Zambia (+260)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 'Zimbabwe (+263)', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regulatory_body_master`
--

CREATE TABLE `regulatory_body_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regulatory_body_master`
--

INSERT INTO `regulatory_body_master` (`id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Securities and Exchange Board of India (SEBI)', '1640841760.png', 'INDIA', '2021-12-30 05:22:40', '2021-12-30 05:22:40'),
(9, 'ASIC – Australian Securities and Investments Commission', '1640841916.jpg', 'ASIC is an agency that has an extensive and detailed rulebook of regulatory guidelines that is aimed to deter any companies from indulging in financial scams or malpractices.', '2021-12-30 05:25:16', '2021-12-30 05:25:16'),
(10, 'BaFIN – The Bundesanstalt für Finanzdienstleistungsaufsicht (Germany)', '1640842217.png', 'BaFin Forex brokers are expected to have a high-level of expertise and technical know-how for offering Forex trading and related services to traders in the European Union.', '2021-12-30 05:30:17', '2021-12-30 05:30:17'),
(11, 'CFTC – Commodities and Futures Trading Commission (United States)', '1640842318.png', 'CFTC Forex brokers do enjoy several benefits from a trader’s perspective, as investors can virtually guarantee the safety of their funds and can remain safe from any broker scams or financial abuse.', '2021-12-30 05:31:58', '2021-12-30 05:31:58'),
(12, 'CySec – Cyprus Securities and Exchange Commission', '1640842390.jpg', 'Cyprus joined the European Union in 2004, and subsequently, all constitutional matters, including CySEC’s regulatory framework, had to be reformed according to existing European guidelines.', '2021-12-30 05:33:10', '2021-12-30 05:33:10'),
(13, 'FCA – Financial Conduct Authority (United Kingdom)', '1640842446.png', 'FCA is committed to the protection of customer funds by following several regulatory protocols that prevent FCA forex brokers from committing any financial frauds.', '2021-12-30 05:34:06', '2021-12-30 05:34:06'),
(14, 'FFMS – Federal Financial Markets Service', '1640842528.png', 'FFMS – Federal Financial Markets Service', '2021-12-30 05:35:28', '2021-12-30 05:35:28'),
(15, 'FINMA – Swiss Financial Market Supervisory Authority', '1640842589.png', 'FINMA has a comprehensive list of regulatory guidelines that are regularly monitored and modified by the Swiss Parliament to ensure that all companies adhere to a uniform code of conduct.', '2021-12-30 05:36:29', '2021-12-30 05:36:29'),
(16, 'FMA – Financial Market Authority (Austria)', '1640842706.jpg', 'FMA – Financial Market Authority (Austria)', '2021-12-30 05:38:26', '2021-12-30 05:38:26'),
(17, 'FSA – Financial Services Agency', '1640842783.png', 'The Danish FSA was formed in 1988 and is one of the oldest and most established regulatory organizations in the EU.', '2021-12-30 05:39:43', '2021-12-30 05:39:43'),
(18, 'FSB – Financial Services Board (South Africa)', '1640842860.jpg', 'South Africa is turning out to be an incredibly popular destination for Forex brokers, which is witnessed by a huge surge in the number of Forex brokers in South Africa under the FSB regulation.', '2021-12-30 05:41:00', '2021-12-30 05:41:00'),
(19, 'Financial Services Commission – BVI', '1640842914.jpg', 'Financial Services Commission – BVI', '2021-12-30 05:41:54', '2021-12-30 05:41:54'),
(20, 'Financial Services Commission (FSC) – Mauritius', '1640842968.jpg', 'Financial Services Commission (FSC) – Mauritius', '2021-12-30 05:42:48', '2021-12-30 05:42:48'),
(21, 'IFSC – International Financial Services Commission', '1640843036.png', 'Belize is a popular tourist destination and a tax haven that has strong secrecy laws, which lawfully prevent any organizations from imparting information about investors to any Governmental agency or other powerful countries in the world.', '2021-12-30 05:43:56', '2021-12-30 05:43:56'),
(22, 'FSP NZ – New Zealand Financial Service Provider', '1640843103.png', 'FMA Forex brokers have evolved tremendously under the new FMA guidelines, and are now considered to be on par with a majority of the leading Forex brokers regulated by well-established regulatory agencies such as the ASIC and the FCA.', '2021-12-30 05:45:03', '2021-12-30 05:45:03'),
(23, 'ISA – Israel Securities Authority', '1640843161.jpg', 'ISA – Israel Securities Authority', '2021-12-30 05:46:01', '2021-12-30 05:46:01'),
(24, 'MFSA – Malta Financial Services Authority', '1640843268.png', 'Malta is a member nation of the EU that has a stable political system, a sound economy, and an excellent environment for businesses to thrive in what is considered to be a promising financial center in Europe.', '2021-12-30 05:47:48', '2021-12-30 05:47:48'),
(25, 'VFSC – Vanuatu Financial Services Commission', '1640843352.png', 'VFSC – Vanuatu Financial Services Commission', '2021-12-30 05:49:12', '2021-12-30 05:49:12'),
(26, 'UAE – Abu Dhabi Central Bank', '1640843409.png', 'The United Arab Emirates (UAE) has highly restrictive laws that prohibit traders and investors from following several trading strategies that are adopted by professional investors from across the globe', '2021-12-30 05:50:09', '2021-12-30 05:50:09'),
(28, 'Securities Commission of The Bahamas (SCB)', '1641450067.jpg', 'SCB', '2022-01-06 06:21:07', '2022-01-06 06:21:07'),
(29, 'FINANCIAL SERVICES AUTHORITY  St Vincent & The Grenadines', '1641457678.png', 'FINANCIAL SERVICES AUTHORITY\r\n\r\nSt Vincent & The Grenadines', '2022-01-06 08:27:58', '2022-01-06 08:27:58'),
(30, 'Financial Services Authority Seychelles', '1642571960.png', 'Financial Services Authority Seychelles', '2022-01-19 05:59:20', '2022-01-19 05:59:20'),
(31, 'IFMRRC', '1642672422.jpg', 'International Financial Market Relations Regulation Center (IFMRRC)', '2022-01-20 09:53:42', '2022-01-20 09:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `review_comments`
--

CREATE TABLE `review_comments` (
  `id` int(11) NOT NULL,
  `google_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL COMMENT '''0'':''not approved'',''1'':''approved''',
  `type` enum('0','1','2','3','4') COLLATE utf8_unicode_ci NOT NULL COMMENT '''0'':''null'',''1'':''broker'',''2'':''account manager'',''3'':''signa',
  `type_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comments` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review_comments`
--

INSERT INTO `review_comments` (`id`, `google_id`, `name`, `avatar`, `status`, `type`, `type_name`, `rating`, `comments`, `created_at`, `updated_at`) VALUES
(1, '114341000120008367762', 'Suraj Kumar', 'https://lh3.googleusercontent.com/a/AATXAJzMHUEzPTzhy-cPM3o6vZFatmLTzf4epipFH5Oa=s96-c', '1', '1', 'MOGAFX', 4, 'yfyyxfggtr erfertfrt5', '2022-01-31 21:08:48', '2022-02-02 03:59:49'),
(2, '107331403253255751325', 'Mohsin Pathan', 'https://lh3.googleusercontent.com/a-/AOh14GhFyMbEKAYT5vLTxQAR3dF2XHnlW8Gr2faIg_AY_Q=s96-c', '1', '1', 'OctaFx', 4, 'hi', '2022-02-01 06:35:21', '2022-02-01 06:35:21'),
(3, '114341000120008367762', 'Suraj Kumar', 'https://lh3.googleusercontent.com/a/AATXAJzMHUEzPTzhy-cPM3o6vZFatmLTzf4epipFH5Oa=s96-c', '1', '1', 'OctaFx', 3, 'uyyyyytcytty', '2022-02-02 06:00:04', '2022-02-02 06:00:04'),
(4, '114341000120008367762', 'Suraj Kumar', 'https://lh3.googleusercontent.com/a/AATXAJzMHUEzPTzhy-cPM3o6vZFatmLTzf4epipFH5Oa=s96-c', '1', '1', 'OctaFx', 2, 'asdawedwe', '2022-02-02 06:25:13', '2022-02-02 06:25:13'),
(5, '114341000120008367762', 'Suraj Kumar', 'https://lh3.googleusercontent.com/a/AATXAJzMHUEzPTzhy-cPM3o6vZFatmLTzf4epipFH5Oa=s96-c', '1', '1', 'OctaFx', 3, 'dxawefed', '2022-02-02 06:36:53', '2022-02-02 06:36:53'),
(6, '110008480109129921321', 'Mohsin Pathan', 'https://lh3.googleusercontent.com/a-/AOh14Gh5e6yhlpYWzzpol33-Oicqt852sAo5uhB8JCYU=s96-c', '0', '1', 'FP MARKETS', 5, 'best wishes', '2022-02-02 07:23:33', '2022-02-02 07:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `review_user`
--

CREATE TABLE `review_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgs` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review_user`
--

INSERT INTO `review_user` (`id`, `name`, `email`, `google_id`, `imgs`, `created_at`, `updated_at`) VALUES
(4, 'Suraj Kumar', 'suraj8809081@gmail.com', '114341000120008367762', 'https://lh3.googleusercontent.com/a/AATXAJzMHUEzPTzhy-cPM3o6vZFatmLTzf4epipFH5Oa=s96-c', '2022-01-31 19:35:49', '2022-01-31 20:30:02'),
(5, 'Mohsin Pathan', 'mogli.pathan786@gmail.com', '107331403253255751325', 'https://lh3.googleusercontent.com/a-/AOh14GhFyMbEKAYT5vLTxQAR3dF2XHnlW8Gr2faIg_AY_Q=s96-c', '2022-02-01 06:34:50', '2022-02-01 06:34:50'),
(6, 'Mohsin Pathan', 'ateefa7816@gmail.com', '110008480109129921321', 'https://lh3.googleusercontent.com/a-/AOh14Gh5e6yhlpYWzzpol33-Oicqt852sAo5uhB8JCYU=s96-c', '2022-02-02 07:22:47', '2022-02-02 07:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `signal_provider`
--

CREATE TABLE `signal_provider` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `services` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `city` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobileno` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsappno` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telegramlink` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebookid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagramid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_gallery` longtext COLLATE utf8_unicode_ci,
  `image_gallery` longtext COLLATE utf8_unicode_ci,
  `price` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signal_frequency` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signal_provider_via` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trading_stratergy` longtext COLLATE utf8_unicode_ci,
  `created_by` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '''0'':''self'',''1'':''admin''',
  `updated_by` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '''0'':''self'',''1'':''admin''',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signal_provider`
--

INSERT INTO `signal_provider` (`id`, `user_id`, `fname`, `lname`, `email`, `password`, `dob`, `gender`, `company_name`, `logo`, `description`, `services`, `address`, `city`, `country`, `country_code`, `mobileno`, `whatsappno`, `telegramlink`, `facebookid`, `instagramid`, `linkedin`, `website_url`, `video_gallery`, `image_gallery`, `price`, `signal_frequency`, `signal_provider_via`, `trading_stratergy`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Mohseen', 'Pathan', 'mogli.pathan786@gmail.com', '', '2021-12-30', 'male', 'Virtua Solution', '1641704523559703850.jpeg', '<p>Helllo World</p>', '<p>Hello World</p>', '<p>Hello World</p>', 'Vadodara', 'India', 'India (+91)', '9723241364', '9723241364', 'kflkdkj', 'kjfdlkfj', 'klfldsjflk', 'lklkdsjfklsd', 'www.bestforexbrokersworld.com', 'https://apnanaee.com/public/signal-provider-edit/2', '164170452398322004.jpg,16417045231135698219.jpg', '5$', '5 Days4', 'net', '<p>heilll</p>', '', NULL, '2022-01-09 05:02:03', '2022-01-09 11:19:36'),
(4, 2, 'Mohseenkhan', 'Pathan', 'mogli.pathan786@gmail.com', NULL, '2022-01-05', 'male', 'Virtua Solution', '16417954681679962480.png', '<p>hi</p>', '<p>hi</p>', '<p>hi</p>', 'Kingstown', 'Belgium', 'Austria (+43)', '8989898989', '8989898989', 'hi', 'hi', 'hi', 'hi', 'www.bestforexbrokersworld.com', 'https://www.youtube.com/embed/HZTf9g5Ht0s', '1641795468182696765.png,1641795468423948872.jpg,16417954682067843085.jpg', '5$', '5 Days4', 'net', '<p>hi</p>', '', '1', '2022-01-10 06:17:48', '2022-01-31 05:39:14'),
(5, 20, 'suraj', 'kumar', 'surajkoriyaan@gmail.com', '', '02/16/2022', 'male', 'abc info tech pvt ltd', '16430539731571184814.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'ranchi', 'India', 'India (+91)', '(546) 476-7778', '6546478848', 'http://localhost:8000/agent-profile', 'https://apnanaee.com/public/facebook', 'http://localhost:8000/agent-profile', 'https://apnanaee.com/public/linkedin', 'https://apnanaee.com/public/account-edit/4', 'http://localhost:8000/agent-profile', '1643053973538858102.jpg,1643053973570694340.jpg,164305397360319239.jpg,16430539731950189752.jpg', '13000', 'tyuuy', 'ytfyt', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', NULL, '2022-01-25 03:52:53', '2022-01-25 03:52:53'),
(6, 12, 'sigal wdwefdw', 'providerwdwed', 'signalwdwedwe@gmail.com', 'sdawsdwe', NULL, 'other', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-01-26 17:40:03', '2022-01-26 17:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` enum('0','1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''0'':''null'',''1'':''admin'',''2'':''account manager'',''3'':''signal provider'',''both'':''4''',
  `remember_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''0'':''inactive'',''1'':''active''',
  `created_by` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '''0'':''self'',''1'':''admin''',
  `updated_by` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '''0'':''self'',''1'':''admin''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `facebook_id`, `google_id`, `user_type`, `usertype`, `remember_token`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'suraj kumar', 'surajkoriyaan@gmail.com', '2022-01-21 00:00:00', '$2y$10$gwkodOk4WA.q1KwRSz4Y2OulNnJGPA989gsj4NP1ieyOuxXERM87K', NULL, NULL, NULL, '2', NULL, '1', NULL, NULL, '2022-01-21 18:08:19', '2022-01-21 18:09:48'),
(2, 'Mohseenkhan Pathan', 'mogli.pathan786@gmail.com', '2022-01-21 00:00:00', '$2y$10$xyNiKjFXHLzK.DZ6mLrKEe6gA6L0TlIqav5eZJFMFACw2QSq5yRVG', NULL, NULL, NULL, '2', NULL, '1', NULL, '1', '2022-01-21 18:23:55', '2022-01-31 05:39:14'),
(3, 'Aryaan rajput', 'suraj8809081@gmail.com', '2022-01-21 00:00:00', '$2y$10$8iWCdPKbrybpE1OxLxMSgujbcUaMrSnbRM/tB21VjNkAHk5g9mvEi', NULL, NULL, NULL, '4', NULL, '1', NULL, NULL, '2022-01-21 18:37:39', '2022-01-21 18:40:17'),
(4, 'Mohseenkhan Pathan', 'ateefa7816@gmail.com', '2022-01-22 00:00:00', '$2y$10$EPdkjeozhykg8C4UVkhn0e6OAQVoog63OTbtOBG1Z06rwWO1NXuGa', NULL, NULL, NULL, '2', NULL, '1', NULL, '1', '2022-01-22 03:27:26', '2022-01-30 14:39:17'),
(5, 'admin', 'admin@gmail.com', NULL, 'admin@123', NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL),
(6, 'arun dash', 'arundash@gmail.com', NULL, '$2y$10$WduZTImxKgWuI2H3wBMpB.3iQbPPMPZAl8aIZw4VAsTKRkYKM9xUS', NULL, NULL, NULL, '1', NULL, '0', '0', NULL, '2022-01-26 15:25:06', '2022-01-26 15:25:06'),
(7, 'arun dash', 'arundash@gmail.com', NULL, '$2y$10$gNy2dWEm/ZpWVf..m3d5PuSjCDRVSW2hfgkZ/tluACPcTS9TA2VRa', NULL, NULL, NULL, '1', NULL, '0', '0', NULL, '2022-01-26 15:28:18', '2022-01-26 15:28:18'),
(8, 'arun kumar dash', 'arundash1234@gmail.com', NULL, '$2y$10$TfT6kFB4dKWCpI0luCaQy.JWShbIWKrwGXybCvOeKX2d6yE6qmT8q', NULL, NULL, NULL, '1', NULL, '0', '0', '1', '2022-01-26 15:28:55', '2022-01-30 19:06:29'),
(9, 'sahbaz ansari gaddi', 'sahbaz1231231@gmail.com', NULL, '$2y$10$H.tZLncvfH.R08P.akR.iOae67t.4TZAI/wbopGd1Ew43N1i0fpOS', NULL, NULL, NULL, '2', NULL, '1', '1', '1', '2022-01-26 15:32:42', '2022-01-30 14:33:24'),
(10, 'javed kha', 'javed@gmail.com', NULL, '$2y$10$EfyLpJBQe2mQ2AZcmpS0OuNL7u3MBBuCFyUXsvy4sYwGKrNKUjosi', NULL, NULL, NULL, '4', NULL, '1', '1', '1', '2022-01-26 16:19:57', '2022-01-26 16:28:43'),
(11, 'sigal provider', 'signal@gmail.com', NULL, '$2y$10$CTbIsvBcv8Wv8Et933MHoOq/fydzfQ4bH4w0Bv4/Qb/lAm5u0qaES', NULL, NULL, NULL, '3', NULL, '1', '1', NULL, '2022-01-26 17:39:19', '2022-01-26 17:39:19'),
(12, 'sigal wdwefdw providerwdwed', 'signalwdwedwe@gmail.com', NULL, '$2y$10$KhSzEmFkP4Tt1OnTm4aEp.VDzrebG2BZatzm9ZjShCvomWUyzmeC2', NULL, NULL, NULL, '3', NULL, '1', '1', '1', '2022-01-26 17:40:03', '2022-01-26 17:44:54'),
(13, 'Pathan Mohseenkhan', 'bestforexbrokersworld21@gmail.com', '2022-01-31 00:00:00', '$2y$10$eZUegHeEEMUP.5mzdDxPnO.C/bcJ71ddNXD52d.IKJ50To7kval42', NULL, NULL, NULL, '3', NULL, '1', NULL, NULL, '2022-01-31 10:10:20', '2022-01-31 10:19:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_manager`
--
ALTER TABLE `account_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_manager_signalprovider`
--
ALTER TABLE `account_manager_signalprovider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broker`
--
ALTER TABLE `broker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit_withdrawal`
--
ALTER TABLE `deposit_withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_nocode_master`
--
ALTER TABLE `mobile_nocode_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regulatory_body_master`
--
ALTER TABLE `regulatory_body_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_comments`
--
ALTER TABLE `review_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_user`
--
ALTER TABLE `review_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signal_provider`
--
ALTER TABLE `signal_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_manager`
--
ALTER TABLE `account_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `account_manager_signalprovider`
--
ALTER TABLE `account_manager_signalprovider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `broker`
--
ALTER TABLE `broker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `deposit_withdrawal`
--
ALTER TABLE `deposit_withdrawal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mobile_nocode_master`
--
ALTER TABLE `mobile_nocode_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regulatory_body_master`
--
ALTER TABLE `regulatory_body_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `review_comments`
--
ALTER TABLE `review_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review_user`
--
ALTER TABLE `review_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signal_provider`
--
ALTER TABLE `signal_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
