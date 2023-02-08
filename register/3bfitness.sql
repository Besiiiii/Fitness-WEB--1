-- Database: `3bfitness`
-- --------------------------------------------------------
-- Table structure for table `users`
--

CREATE DATABASE  '3bfitness';

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `created`) VALUES
(1, 'manish', 'manish123', 'manish@gamil.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2021-01-23 09:51:05'),
(2, 'akol', 'akol123', 'alkol@gamil.com','21232f297a57a5a743894a0e4a801fc3', 'costumer', '2021-01-24 05:41:25'),
(3, 'kamal', 'kamal123', 'kamal@gamil.com','21232f297a57a5a743894a0e4a801fc3', 'costumer', '2021-01-23 09:57:54');