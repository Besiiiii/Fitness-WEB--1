-- Database: `3bfitness`
-- --------------------------------------------------------
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `role`, `created`) VALUES
(1, 'manish', 'manish123', '21232f297a57a5a743894a0e4a801fc3', 'super_admin', '2021-01-23 09:51:05'),
(2, 'akol', 'akol123', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2021-01-24 05:41:25'),
(3, 'kamal', 'kamal123', '21232f297a57a5a743894a0e4a801fc3', 'manager', '2021-01-23 09:57:54');