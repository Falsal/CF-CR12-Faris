SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `cr12_mount_everest_faris` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr12_mount_everest_faris`;

CREATE TABLE `offers_table` (
  `id` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(5) NOT NULL,
  `long` decimal(11,8) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `about` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `offers_table` (`id`, `locationName`, `image`, `description`, `price`, `long`, `lat`, `about`, `date`) VALUES
(1, 'Paris', 'img_1.jpg', '3 nights at the Metropol', 300, '2.34901000', '48.86472000', 'City of light is awaiting you and your significant other', '2021-06-05'),
(2, 'Vienna', 'img_2.jpg', '1 week at the Imperial hotel.', 1000, '16.36344900', '48.21003300', 'City of history and nostalgia', '2021-05-20'),
(3, 'Venice', 'img_3.jpg', '5 nights at a four star with one excursion', 300, '12.32714500', '45.43875900', 'City of mystery is awaiting you and your significant other', '2021-06-25'),
(4, 'Tokyo', 'img_4.jpg', '10 days at Nippon hotel', 300, '139.83947800', '35.65283200', 'City star of the orient is awaiting you and your significant other', '2021-08-19'),
(5, 'Shanghai', 'img_5.jpg', '2 weeks at five star hotel', 300, '121.45806000', '31.22222000', 'City of the future is awaiting you.', '2021-09-23'),
(6, 'Los Angeles', 'img_6.jpg', '10 days at the Boulovard', 2500, '-118.24368300', '34.05223500', 'its a wonderful', NULL),
(7, 'Rio De Jeneiro', 'img_7.jpg', '3 weeks in the amazons', 7000, '-43.19638800', '-22.90833300', 'Amazing destination in South America ', '2021-12-11'),
(9, 'Dubai', 'img_8.jpg', '7 days at Jumeira Beach Hotel ', 4000, '55.29624900', '25.27698700', '', NULL),
(13, 'Dubai', 'img_8.jpg', '5 Days at the Palm Beach Hotel', 3000, '55.29624900', '25.27698700', '', NULL),
(14, 'Vienna', 'img_2.jpg', '7 nights at the Grand Hotel', 4200, '16.36344900', '48.21003300', '', NULL),
(15, 'Vienna', 'img_2.jpg', '3 nights at the Sacher Hotel', 2200, '16.36344900', '48.21003300', '', NULL),
(16, 'Shanghai', 'img_5.jpg', '20 days cruising around China', 7000, '121.45806000', '31.22222000', 'City of the future', '2021-08-02'),
(17, 'Los Angeles', 'img_6.jpg', '15 days at Hotel Promanade', 3700, '-118.24368300', '34.05223500', 'Coolest beaches ever for surfers', '2021-05-10');


ALTER TABLE `offers_table`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `offers_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
