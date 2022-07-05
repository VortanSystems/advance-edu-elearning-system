-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 10:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advance`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_courses`
--

CREATE TABLE `advance_courses` (
  `id` bigint(20) NOT NULL,
  `course_title` text NOT NULL,
  `course_price` text NOT NULL,
  `course_image` text NOT NULL,
  `course_details` text NOT NULL,
  `course_brief` text NOT NULL,
  `application_status` text NOT NULL,
  `course_status` text NOT NULL,
  `course_purchases` text NOT NULL,
  `course_tutor` text NOT NULL,
  `course_views` text NOT NULL,
  `course_id` text NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_courses`
--

INSERT INTO `advance_courses` (`id`, `course_title`, `course_price`, `course_image`, `course_details`, `course_brief`, `application_status`, `course_status`, `course_purchases`, `course_tutor`, `course_views`, `course_id`, `upload_date`, `updated_at`) VALUES
(1, 'An Introduction To Data Analysis', '20000', 'resources/images/courses/3636Business-energy-bill_Hero-Mobile_840x580.jpg', 'Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is...\r\nFor Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You.\r\n\r\nADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '113523613567', '11', '3280685', '2022-07-04 08:02:58', '2022-07-04 12:21:18'),
(2, 'Want To Work Online?', '45000', 'resources/images/courses/1220How-to-Earn-Money-Online-Seriously-5-Effective-Strategies.jpg', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '654277', '10', '1745816', '2022-07-04 08:12:06', '2022-07-04 16:18:16'),
(3, 'Affiliate Marketing, What Does It Entail?', '25000', 'resources/images/courses/9778Affiliate-Research-Header-Image-1024x608.png', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '654278', '2', '9018101', '2022-07-04 08:17:36', '2022-07-05 03:53:49'),
(4, 'Photography As A Career', '26000', 'resources/images/courses/1465wefhg.jpg', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\'m in that two seat Lambo.', 'approved', 'public', '0', '113523613567', '0', '5661880', '2022-07-04 08:19:27', '2022-07-04 08:27:06'),
(5, 'Risk Free Passive Income Strategies', '150000', 'resources/images/courses/9976passive-income-easy.png', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '654277', '0', '9134577', '2022-07-04 08:21:21', '2022-07-04 08:34:35'),
(6, 'Manage Your Credit Score', '10000', 'resources/images/courses/2426a-person-holding-a-credit-card-to-shop-online-through-a-notebook-computer-free-photo.jpg', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '654278', '0', '996357', '2022-07-04 08:22:30', '2022-07-04 08:34:40'),
(7, 'Tips To Better Resume Writting', '20000', 'resources/images/courses/362254362.jpg', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '654278', '0', '7019776', '2022-07-04 08:26:26', '2022-07-04 08:27:20'),
(8, 'Professional Career Development. Is It Ideal?', '870000', 'resources/images/courses/539photo-1571844307880-751c6d86f3f3.jpg', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '654277', '1', '3944507', '2022-07-04 08:31:11', '2022-07-05 12:00:15'),
(9, 'Modern Day Professionalism', '1500000', 'resources/images/courses/281520180403184403-GettyImages-660629502.jpeg', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo. Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is... For Your Financial Safety, Please Only Pay Tutors Through This Platform. We\'ll Not Be Held Liable For Transactions Outside Of This Platform. Don\'t Accept To Pay Extra Fees After Enrollment. Thank You. ADVANCE EDU - MANAGEMENT', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', 'approved', 'public', '0', '113523613567', '4', '1997462', '2022-07-04 08:32:29', '2022-07-05 12:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `advance_notis`
--

CREATE TABLE `advance_notis` (
  `id` bigint(20) NOT NULL,
  `to_user` text NOT NULL,
  `from_user` text NOT NULL,
  `message` text NOT NULL,
  `send_status` text NOT NULL,
  `read_status` text NOT NULL,
  `send_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_notis`
--

INSERT INTO `advance_notis` (`id`, `to_user`, `from_user`, `message`, `send_status`, `read_status`, `send_date`, `last_update`) VALUES
(1, 'fanando@gmail.com', 'no-reply@domain.com', 'Your Withdraw Request Has Been Received On ', 'not_sent', 'no', '2022-07-05 11:45:16', '2022-07-05 11:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `advance_purchases`
--

CREATE TABLE `advance_purchases` (
  `id` bigint(255) NOT NULL,
  `buyer_email` text NOT NULL,
  `buyer_name` text NOT NULL,
  `buyer_phone` text NOT NULL,
  `course_id` text NOT NULL,
  `tutor_id` text NOT NULL,
  `buying_time` text NOT NULL,
  `buy_status` text NOT NULL,
  `payment_status` text NOT NULL,
  `purchase_amount` text NOT NULL,
  `wallet_reference` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advance_searches`
--

CREATE TABLE `advance_searches` (
  `id` bigint(20) NOT NULL,
  `topic` text NOT NULL,
  `tocken` text NOT NULL,
  `time_stamps` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_searches`
--

INSERT INTO `advance_searches` (`id`, `topic`, `tocken`, `time_stamps`, `result`) VALUES
(11, 'a', 'q8zDhO6uu7mePnhXPvOX', '2022-07-04 13:06:16', '8'),
(12, 'a', 'rb3-3-q-cJS8YsXP3eFr', '2022-07-04 13:07:51', '8'),
(13, 'an', '4vlanTq2chDQKV--6Bko', '2022-07-04 13:08:07', '3'),
(14, 'work', '-fS23mTWNI-JWRECJD-c', '2022-07-04 13:08:16', '1'),
(15, 'earn', 'OJysieOgp0AcA7nZ--K-', '2022-07-04 13:08:20', '0'),
(16, 'online', 'E-B5o-bEkMZCf4CP-2bg', '2022-07-04 13:08:26', '1'),
(17, '?', 'nqk4b--yQeu1--w8-Ukv', '2022-07-04 13:08:45', '3'),
(18, 'an', 'CkglJVteRJO-qR2fI--V', '2022-07-04 13:37:00', '3'),
(19, 'an', '-0-Q8ib4iBHcJTOZc2lP', '2022-07-04 13:37:23', '3'),
(20, 'a', 'kjapX--dYQlJg--ZdU-O', '2022-07-04 13:37:26', '8'),
(21, '', 'SZUX-2mzmDg--hvjdAUp', '2022-07-04 13:44:22', '3'),
(22, 'h', 'ZLr-LBqp-FIWV-h-Svi4', '2022-07-04 13:44:56', '2'),
(23, 'henry', 'XPt-j63P-kIwTVdpVuQG', '2022-07-04 13:46:32', '1'),
(24, 'm', '--4Kolxn-IA3iwSDH6mf', '2022-07-04 13:46:39', '2'),
(25, 'c', '1Ik-XgLp-P-GpjAbL79H', '2022-07-04 13:46:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `advance_users`
--

CREATE TABLE `advance_users` (
  `id` bigint(20) NOT NULL,
  `profile_pic` text,
  `user_email` varchar(155) NOT NULL,
  `user_phone` text,
  `user_password` text NOT NULL,
  `user_reset_key` text NOT NULL,
  `user_courses` text NOT NULL,
  `user_purchases` text NOT NULL,
  `account_status` text NOT NULL,
  `profile_updated` text NOT NULL,
  `access_level` text NOT NULL,
  `user_balance` text NOT NULL,
  `tutor_ids` text NOT NULL,
  `tutor_level` text,
  `fullname` text,
  `address` text,
  `city` text,
  `country` text,
  `bio` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastupdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_users`
--

INSERT INTO `advance_users` (`id`, `profile_pic`, `user_email`, `user_phone`, `user_password`, `user_reset_key`, `user_courses`, `user_purchases`, `account_status`, `profile_updated`, `access_level`, `user_balance`, `tutor_ids`, `tutor_level`, `fullname`, `address`, `city`, `country`, `bio`, `created_at`, `lastupdate`) VALUES
(1, 'resources/images/profile_pics/269420180403184403-GettyImages-660629502.jpeg', 'mathews1720@gmail.com', '+256751021147', '$2y$10$if9bQJgerjl/CqJ/6ol90.E3O4s7ryrwu7DZN5sVhU7Fe.KBRrLw6', '$2y$10$SptaZTiCsMkeqwPRvN3NKesiEIGL035IT39HeywWotcGQkWdhW3oG', '0', '0', 'active', 'yes', 'admin', '10000', '654276', '', 'Administration', 'plot 1, masumba avenue', 'Mbale', 'Uganda', 'Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owensâ€™ bed design but the back is...', '2022-07-01 18:51:20', '2022-07-05 12:06:26'),
(2, 'resources/images/profile_pics/940320180403184403-GettyImages-660629502.jpeg', 'naweri@gmail.com', '+256751021147', '$2y$10$uj4Dvgb7Mtwt2TGoFV52yO2ONYroxjbJLWerwwJNm.HUvP3rdIZpS', '$2y$10$4yL9UUrNIDOLAwvSmSlDI.zbXVbgl4tFXtsqlqnYal1NVkkOt1yBa', '0', '0', 'active', 'yes', 'user', '10000', '654277', 'basic', 'Henry Roland', 'plot 1, masumba avenue', 'Derby County', 'U.K', 'Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is...', '2022-07-01 18:51:20', '2022-07-05 12:06:51'),
(4, 'resources/images/profile_pics/159mike.jpg', 'fanando@gmail.com', '0751021147', '$2y$10$dnMdhhbLR2FIN6a/mvVgz.kr1BssQsQLPo8Wr96QlakSbu0wCwKWO', '$2y$10$KfcsGolSqaSMfvUaJvwQtepJW0IlLfyG6AjvaniOzzIZLTKlA.PmS', '0', '0', 'active', 'yes', 'user', '10000', '654278', 'premium', 'Mike Skzewoski', 'plot 1, masumba avenue', 'Kiev', 'Ukraine', 'Lamborghini Mercy, Your chick she so thirsty, I\\\'m in that two seat Lambo.', '2022-07-01 18:51:20', '2022-07-05 12:07:10'),
(5, 'resources/images/profile_pics/3347photo-1571844307880-751c6d86f3f3.jpg', 'calisa@gmail.com', '1234567890', '$2y$10$uOTg5Sjzhd26E16YjG6EI.H8cP7hhiSSQqdEuQj5nLmyRf6SrzRzi', '$2y$10$EcSle1viJuqpOXnsJ2G09O1Rr79Lc7xokulPtq0zQk8ZcZl83zbJK', '0', '0', 'active', 'yes', 'user', '0', '113523613567', 'basic', 'Calisa Smith', '12483 CA', 'san fransisco', 'United States', 'Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick OwensÃ¢â‚¬â„¢ bed design but the back is...', '2022-07-03 19:45:13', '2022-07-05 12:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `advance_withdraws`
--

CREATE TABLE `advance_withdraws` (
  `id` bigint(20) NOT NULL,
  `tutor_id` text NOT NULL,
  `amount` text NOT NULL,
  `currency` text NOT NULL,
  `withdraw_details` text NOT NULL,
  `date_requested` text NOT NULL,
  `withdraw_status` text NOT NULL,
  `reference` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_withdraws`
--

INSERT INTO `advance_withdraws` (`id`, `tutor_id`, `amount`, `currency`, `withdraw_details`, `date_requested`, `withdraw_status`, `reference`, `created_at`, `updated_at`) VALUES
(1, '654278', '8000', 'UGX', 'hi', '05-07-2022', 'approved', '786733508268382', '2022-07-05 11:45:16', '2022-07-05 11:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings_general`
--

CREATE TABLE `system_settings_general` (
  `id` int(11) NOT NULL,
  `pro_price` text NOT NULL,
  `pro_interval` text NOT NULL,
  `free_account_courses` text NOT NULL,
  `pictona_merchant` text NOT NULL,
  `merchant_key` text NOT NULL,
  `min_withdraw` text NOT NULL,
  `max_withdraw` text NOT NULL,
  `landing` text NOT NULL,
  `about_us` text NOT NULL,
  `faqs` text NOT NULL,
  `app_name` text NOT NULL,
  `base_url` text NOT NULL,
  `meta_title` text NOT NULL,
  `welcome_text` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_key_words` text NOT NULL,
  `sys_email` text NOT NULL,
  `maintenance_mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings_general`
--

INSERT INTO `system_settings_general` (`id`, `pro_price`, `pro_interval`, `free_account_courses`, `pictona_merchant`, `merchant_key`, `min_withdraw`, `max_withdraw`, `landing`, `about_us`, `faqs`, `app_name`, `base_url`, `meta_title`, `welcome_text`, `meta_description`, `meta_key_words`, `sys_email`, `maintenance_mode`) VALUES
(1, '20000', '30', '2', 'naweriindustries832@gmail.com', 'UIGIJHokj-JIPpjiOGOUGggyu5764874', '5000', '1000000', 'resources/images/system/1860wefhg.jpg', '  <!-- About Start -->\r\n        <div class=\"about\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6\">\r\n                        <div class=\"about-img\" data-parallax=\"scroll\" data-image-src=\"http://localhost/resources/images/courses/1465wefhg.jpg\"></div>\r\n                    </div>\r\n                    <div class=\"col-lg-6\">\r\n                        <div class=\"section-header\">\r\n                            <p>Learn About Us</p>\r\n                            <h2>Worldwide non-profit charity organization</h2>\r\n                        </div>\r\n                        <div class=\"about-tab\">\r\n                            <ul class=\"nav nav-pills nav-justified\">\r\n                                <li class=\"nav-item\">\r\n                                    <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#tab-content-1\">About</a>\r\n                                </li>\r\n                                <li class=\"nav-item\">\r\n                                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#tab-content-2\">Mission</a>\r\n                                </li>\r\n                                <li class=\"nav-item\">\r\n                                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#tab-content-3\">Vision</a>\r\n                                </li>\r\n                            </ul>\r\n\r\n                            <div class=\"tab-content\">\r\n                                <div id=\"tab-content-1\" class=\"container tab-pane active\">\r\n                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis. Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum. Phasellus et felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque. Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n                                </div>\r\n                                <div id=\"tab-content-2\" class=\"container tab-pane fade\">\r\n                                    Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n                                </div>\r\n                                <div id=\"tab-content-3\" class=\"container tab-pane fade\">\r\n                                    Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <!-- About End -->\r\n        \r\n        \r\n        <!-- Facts Start -->\r\n        <div class=\"facts\" data-parallax=\"scroll\" data-image-src=\"img/facts.jpg\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-home\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-plus\" data-toggle=\"counter-up\">150</h3>\r\n                                <p>Countries</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-charity\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-plus\" data-toggle=\"counter-up\">400</h3>\r\n                                <p>Volunteers</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-kindness\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-dollar\" data-toggle=\"counter-up\">10000</h3>\r\n                                <p>Our Goal</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-donation\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-dollar\" data-toggle=\"counter-up\">5000</h3>\r\n                                <p>Raised</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <!-- Facts End -->\r\n\r\n', '  <!-- About Start -->\r\n        <div class=\"about\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6\">\r\n                        <div class=\"about-img\" data-parallax=\"scroll\" data-image-src=\"http://localhost/resources/images/courses/1465wefhg.jpg\"></div>\r\n                    </div>\r\n                    <div class=\"col-lg-6\">\r\n                        <div class=\"section-header\">\r\n                            <p>Learn About Us</p>\r\n                            <h2>Worldwide non-profit charity organization</h2>\r\n                        </div>\r\n                        <div class=\"about-tab\">\r\n                            <ul class=\"nav nav-pills nav-justified\">\r\n                                <li class=\"nav-item\">\r\n                                    <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#tab-content-1\">About</a>\r\n                                </li>\r\n                                <li class=\"nav-item\">\r\n                                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#tab-content-2\">Mission</a>\r\n                                </li>\r\n                                <li class=\"nav-item\">\r\n                                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#tab-content-3\">Vision</a>\r\n                                </li>\r\n                            </ul>\r\n\r\n                            <div class=\"tab-content\">\r\n                                <div id=\"tab-content-1\" class=\"container tab-pane active\">\r\n                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis. Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum. Phasellus et felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque. Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n                                </div>\r\n                                <div id=\"tab-content-2\" class=\"container tab-pane fade\">\r\n                                    Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n                                </div>\r\n                                <div id=\"tab-content-3\" class=\"container tab-pane fade\">\r\n                                    Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <!-- About End -->\r\n        \r\n        \r\n        <!-- Facts Start -->\r\n        <div class=\"facts\" data-parallax=\"scroll\" data-image-src=\"img/facts.jpg\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-home\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-plus\" data-toggle=\"counter-up\">150</h3>\r\n                                <p>Countries</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-charity\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-plus\" data-toggle=\"counter-up\">400</h3>\r\n                                <p>Volunteers</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-kindness\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-dollar\" data-toggle=\"counter-up\">10000</h3>\r\n                                <p>Our Goal</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-3 col-md-6\">\r\n                        <div class=\"facts-item\">\r\n                            <i class=\"flaticon-donation\"></i>\r\n                            <div class=\"facts-text\">\r\n                                <h3 class=\"facts-dollar\" data-toggle=\"counter-up\">5000</h3>\r\n                                <p>Raised</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <!-- Facts End -->\r\n\r\n', 'Advance Edu', 'http://localhost', 'Advance Edu - Learn Courses Online', 'Learning, On The Go.', 'Learn Courses At Your Convinience Online', 'AdvanceEdu, Naweri Industries', 'no-reply@domain.com', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) NOT NULL,
  `paid_amount` text NOT NULL,
  `reference` varchar(255) NOT NULL,
  `pay_reason` text NOT NULL,
  `pay_date` text NOT NULL,
  `expire_data` text NOT NULL,
  `pay_currency` text NOT NULL,
  `status` text NOT NULL,
  `pay_note` text NOT NULL,
  `owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `paid_amount`, `reference`, `pay_reason`, `pay_date`, `expire_data`, `pay_currency`, `status`, `pay_note`, `owner`) VALUES
(1, '10000', '98y75987567rtyfuyy', 'pro', 'Tue 03 June 2022', 'Tue 03 August 2022', 'UGX', 'complete', 'thanks', '654276');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_courses`
--
ALTER TABLE `advance_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advance_notis`
--
ALTER TABLE `advance_notis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advance_purchases`
--
ALTER TABLE `advance_purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wallet_reference` (`wallet_reference`);

--
-- Indexes for table `advance_searches`
--
ALTER TABLE `advance_searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advance_users`
--
ALTER TABLE `advance_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `advance_withdraws`
--
ALTER TABLE `advance_withdraws`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- Indexes for table `system_settings_general`
--
ALTER TABLE `system_settings_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advance_courses`
--
ALTER TABLE `advance_courses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `advance_notis`
--
ALTER TABLE `advance_notis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advance_purchases`
--
ALTER TABLE `advance_purchases`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advance_searches`
--
ALTER TABLE `advance_searches`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `advance_users`
--
ALTER TABLE `advance_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advance_withdraws`
--
ALTER TABLE `advance_withdraws`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_settings_general`
--
ALTER TABLE `system_settings_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
