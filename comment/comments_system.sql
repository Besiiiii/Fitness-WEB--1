CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(200) NOT NULL,
  `comment_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `comment_at`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
 'Vincy', '2022-06-30 09:57:11'),
(2, 1, 'Okay, thank you for your comment.', 'Admin', '2022-06-30 09:57:31');

