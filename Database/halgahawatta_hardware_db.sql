-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.37 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for halgahawatta
CREATE DATABASE IF NOT EXISTS `halgahawatta` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `halgahawatta`;

-- Dumping structure for table halgahawatta.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vcode` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.admin: ~1 rows (approximately)
INSERT INTO `admin` (`user_name`, `email`, `vcode`) VALUES
	('Sanjana', 'sanjananisalkumara@gmail.com', '687029dbf1a70');

-- Dumping structure for table halgahawatta.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(20) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.brand: ~10 rows (approximately)
INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
	(1, 'S-lon'),
	(2, 'Keviltan'),
	(3, 'No Brand'),
	(4, 'MULTILAC'),
	(5, 'Dulux '),
	(6, 'Dongcheng '),
	(7, 'Nippon Paint'),
	(8, 'M-Seal'),
	(9, 'ORANGE'),
	(10, 'ANTON ');

-- Dumping structure for table halgahawatta.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `cart_qty` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `fk_product_has_user_user1_idx` (`user_id`),
  KEY `fk_product_has_user_product1_idx` (`product_id`),
  CONSTRAINT `fk_product_has_user_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `fk_product_has_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.cart: ~0 rows (approximately)
INSERT INTO `cart` (`cart_id`, `cart_qty`, `product_id`, `user_id`) VALUES
	(85, 3, 31, 1);

-- Dumping structure for table halgahawatta.category
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.category: ~5 rows (approximately)
INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
	(1, 'Tools Items'),
	(2, 'Building Materials'),
	(3, 'Paint And Painting Tools'),
	(4, 'Electrical Items And Tools '),
	(5, 'Plumbing Supplies');

-- Dumping structure for table halgahawatta.condition
CREATE TABLE IF NOT EXISTS `condition` (
  `con_id` int NOT NULL AUTO_INCREMENT,
  `con_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.condition: ~2 rows (approximately)
INSERT INTO `condition` (`con_id`, `con_name`) VALUES
	(1, 'Original'),
	(2, 'Local');

-- Dumping structure for table halgahawatta.order_history
CREATE TABLE IF NOT EXISTS `order_history` (
  `oh_id` int NOT NULL AUTO_INCREMENT,
  `order_id` text NOT NULL,
  `order_date` datetime NOT NULL,
  `amount` double NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`oh_id`),
  KEY `fk_order_history_user1_idx` (`user_id`),
  CONSTRAINT `fk_order_history_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.order_history: ~34 rows (approximately)
INSERT INTO `order_history` (`oh_id`, `order_id`, `order_date`, `amount`, `user_id`) VALUES
	(2, '66612638b336e', '2024-06-06 08:30:12', 11000, 1),
	(3, '66614138da01a', '2024-06-06 10:25:24', 28500, 1),
	(4, '6661415595eb9', '2024-06-06 10:26:02', 51000, 1),
	(5, '6661416e64c6e', '2024-06-06 10:26:17', 11000, 1),
	(6, '666141f8edc24', '2024-06-06 10:28:35', 11000, 1),
	(7, '6661437d85f62', '2024-06-06 10:35:03', 11000, 1),
	(8, '66616051dcbdf', '2024-06-06 12:38:05', 11000, 1),
	(9, '6661617863343', '2024-06-06 12:42:59', 61000, 1),
	(10, '6661618c9b35f', '2024-06-06 12:43:18', 11000, 1),
	(11, '6661951ee5200', '2024-06-06 16:23:38', 21000, 1),
	(12, '6661fc7d16649', '2024-06-06 23:44:28', 11000, 1),
	(13, '6661fd0a3c812', '2024-06-06 23:46:49', 121000, 1),
	(14, '66620e2498c7c', '2024-06-07 01:00:18', 21000, 1),
	(15, '66621123ca301', '2024-06-07 01:12:58', 21000, 1),
	(16, '66621b6513049', '2024-06-07 01:56:38', 11000, 1),
	(17, '6662bfb5348ed', '2024-06-07 13:38:39', 3500, 1),
	(18, '6662c0f848236', '2024-06-07 13:43:11', 3500, 1),
	(19, '6662c17cd8ec1', '2024-06-07 13:45:16', 3500, 1),
	(20, '6662c603f3f38', '2024-06-07 14:04:38', 11000, 1),
	(21, '66630e0805094', '2024-06-07 19:12:13', 11000, 1),
	(22, '66634287e7f22', '2024-06-07 22:55:54', 11000, 1),
	(23, '6663436c0c4b9', '2024-06-07 22:59:40', 11000, 1),
	(24, '666343b41ab64', '2024-06-07 23:00:53', 11000, 1),
	(25, '6663466b4c221', '2024-06-07 23:12:31', 11000, 1),
	(26, '6663618a56b01', '2024-06-08 01:08:19', 11000, 1),
	(27, '66641c2f01f4c', '2024-06-08 14:24:44', 24000, 1),
	(28, '66641ca209dc0', '2024-06-08 14:26:24', 21000, 1),
	(29, '666467c1befb8', '2024-06-08 19:47:11', 11000, 1),
	(30, '66646ae705ecb', '2024-06-08 20:00:39', 11000, 1),
	(31, '66646be745823', '2024-06-08 20:04:42', 11000, 1),
	(32, '666591f04afca', '2024-06-09 16:59:23', 16000, 1),
	(33, '6665f88c21bc4', '2024-06-10 00:29:53', 21000, 1),
	(34, '6666aa86539fe', '2024-06-10 12:56:51', 11000, 1),
	(35, '6666c6df67739', '2024-06-10 14:57:42', 36000, 11);

-- Dumping structure for table halgahawatta.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
  `oid` int NOT NULL AUTO_INCREMENT,
  `oi_qty` int NOT NULL,
  `order_history_oh_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `fk_order_history_has_product_product1_idx` (`product_id`),
  KEY `fk_order_history_has_product_order_history1_idx` (`order_history_oh_id`),
  CONSTRAINT `fk_order_history_has_product_order_history1` FOREIGN KEY (`order_history_oh_id`) REFERENCES `order_history` (`oh_id`),
  CONSTRAINT `fk_order_history_has_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.order_items: ~43 rows (approximately)
INSERT INTO `order_items` (`oid`, `oi_qty`, `order_history_oh_id`, `product_id`) VALUES
	(1, 1, 2, 32),
	(2, 1, 3, 21),
	(3, 1, 3, 23),
	(4, 2, 3, 28),
	(5, 5, 4, 28),
	(6, 1, 5, 28),
	(7, 1, 6, 32),
	(8, 1, 7, 28),
	(9, 1, 8, 28),
	(10, 6, 9, 28),
	(11, 1, 10, 31),
	(12, 2, 11, 28),
	(13, 1, 12, 31),
	(14, 12, 13, 28),
	(15, 2, 14, 27),
	(16, 1, 15, 23),
	(17, 1, 15, 19),
	(18, 1, 15, 27),
	(19, 1, 16, 24),
	(20, 1, 17, 21),
	(21, 1, 18, 21),
	(22, 1, 19, 21),
	(23, 1, 20, 24),
	(24, 1, 21, 31),
	(25, 1, 22, 27),
	(26, 1, 23, 27),
	(27, 1, 24, 27),
	(28, 1, 25, 32),
	(29, 1, 26, 27),
	(30, 1, 27, 27),
	(31, 1, 27, 24),
	(32, 1, 27, 20),
	(33, 1, 28, 31),
	(34, 1, 28, 33),
	(35, 1, 29, 27),
	(36, 1, 30, 27),
	(37, 1, 31, 27),
	(38, 2, 32, 21),
	(39, 1, 32, 27),
	(40, 1, 33, 31),
	(41, 1, 33, 32),
	(42, 1, 34, 31),
	(43, 7, 35, 23);

-- Dumping structure for table halgahawatta.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `description` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `price` varchar(20) NOT NULL,
  `quantity` int NOT NULL,
  `delivery_cost` varchar(20) NOT NULL,
  `Discount` varchar(20) NOT NULL,
  `datetime_add` datetime NOT NULL,
  `statues` varchar(10) NOT NULL,
  `category_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `size_id` int NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `condition_con_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category1_idx` (`category_id`),
  KEY `fk_product_brand1_idx` (`brand_id`),
  KEY `fk_product_size1_idx` (`size_id`),
  KEY `fk_product_admin1_idx` (`admin_email`),
  KEY `fk_product_condition1_idx` (`condition_con_id`),
  CONSTRAINT `fk_product_admin1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`email`),
  CONSTRAINT `fk_product_brand1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`),
  CONSTRAINT `fk_product_condition1` FOREIGN KEY (`condition_con_id`) REFERENCES `condition` (`con_id`),
  CONSTRAINT `fk_product_size1` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.product: ~15 rows (approximately)
INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`, `delivery_cost`, `Discount`, `datetime_add`, `statues`, `category_id`, `brand_id`, `size_id`, `admin_email`, `condition_con_id`) VALUES
	(19, 'Electric Impact Drill', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '5000', 9, '1000', ' 40%', '2024-05-29 14:00:22', '1', 1, 3, 17, 'sanjananisalkumara@gmail.com', 1),
	(20, 'COMBINATION PLIERS', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '3000', 49, '1000', '40%', '2024-05-29 14:18:55', '1', 1, 3, 3, 'sanjananisalkumara@gmail.com', 1),
	(21, 'DRILL BIT SDS ', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '2500', 14, '1000', '40%', '2024-05-29 14:38:57', '1', 1, 2, 18, 'sanjananisalkumara@gmail.com', 2),
	(22, 'Acrylic Wall Filler – Exterior ', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '1000', 10, '1000', ' 40%', '2024-05-29 15:16:23', '0', 3, 7, 14, 'sanjananisalkumara@gmail.com', 1),
	(23, 'Premium Acrylic Interior Wall Filler', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '5000', 71, '1000', '40%', '2024-05-29 15:56:14', '1', 3, 4, 13, 'sanjananisalkumara@gmail.com', 1),
	(24, 'General Purpose Epoxy Compound', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 97, '1000', '40%', '2024-05-29 16:07:59', '1', 2, 8, 20, 'sanjananisalkumara@gmail.com', 2),
	(25, 'KEVILTON 13A 4 WAY TRAILLING SOCKET', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 20, '1000', '40%', '2024-05-29 16:11:45', '1', 4, 2, 19, 'sanjananisalkumara@gmail.com', 1),
	(26, 'ORANGE LED PANEL LIGHT ', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 7, '1000', ' 40%', '2024-05-29 16:15:31', '1', 4, 9, 22, 'sanjananisalkumara@gmail.com', 2),
	(27, 'sander Grinding machine', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 8, '1000', ' 40%', '2024-05-29 16:19:02', '1', 4, 3, 11, 'sanjananisalkumara@gmail.com', 1),
	(28, 'Allenkey Set', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 0, '1000', '40%', '2024-05-29 16:24:09', '1', 1, 3, 3, 'sanjananisalkumara@gmail.com', 1),
	(30, 'S-LON PVC PRESSURE PIPES PNT 11', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 40, '1000', '40%', '2024-05-29 16:39:13', '0', 5, 1, 23, 'sanjananisalkumara@gmail.com', 1),
	(31, 'ERA TEE', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 54, '1000', '40%', '2024-05-29 16:44:19', '1', 5, 1, 23, 'sanjananisalkumara@gmail.com', 1),
	(32, 'GUTTER DOWN PIPE (12 FEET)', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 66, '1000', '40%', '2024-05-29 16:53:35', '1', 5, 10, 23, 'sanjananisalkumara@gmail.com', 1),
	(33, 'KEVILTON CABLE TRUNKING', 'Angle grinder Random orbital sander Grinding machine, cut-off rule, angle Grinder, grinding Machine, hardware png PNGWing', '10000', 54, '1000', '40%', '2024-05-29 22:55:51', '1', 4, 2, 21, 'sanjananisalkumara@gmail.com', 2),
	(34, 'NIPPON CEMENT', 'very good items', '2500', 10, '250', '20%', '2024-06-10 02:12:34', '1', 2, 7, 1, 'sanjananisalkumara@gmail.com', 1);

-- Dumping structure for table halgahawatta.product_img
CREATE TABLE IF NOT EXISTS `product_img` (
  `img_path` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`img_path`),
  KEY `fk_product_img_product1_idx` (`product_id`),
  CONSTRAINT `fk_product_img_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.product_img: ~16 rows (approximately)
INSERT INTO `product_img` (`img_path`, `product_id`) VALUES
	('resource//product_img//Electric Impact Drill_0_6656e79ed11ebjpeg', 19),
	('resource//product_img//COMBINATION PLIERS_0_6656ebf73308bjpeg', 20),
	('resource//product_img//DRILL BIT SDS _0_6656f0a96d9fajpeg', 21),
	('resource//product_img//Acrylic Wall Filler – Exterior _0_6656f96f6e953jpeg', 22),
	('resource//product_img//Premium Acrylic Interior Wall Filler_0_665702c6ed616jpeg', 23),
	('resource//product_img//General Purpose Epoxy Compound_0_66570587282dcjpeg', 24),
	('resource//product_img//KEVILTON 13A 4 WAY TRAILLING SOCKET_0_66570669404c2jpeg', 25),
	('resource//product_img//ORANGE LED PANEL LIGHT _0_6657074b9cb4djpeg', 26),
	('resource//product_img//sander Grinding machine_0_6657081ed9fe8jpeg', 27),
	('resource//product_img//Allenkey Set_0_665709510ba7djpeg', 28),
	('resource//product_img//S-LON PVC PRESSURE PIPES PNT 11_0_66570cd97ca2cjpeg', 30),
	('resource//product_img//S-LON PVC PRESSURE PIPES PNT 11_1_66570cd97de0djpeg', 30),
	('resource//product_img//ERA TEE_0_66570e0bdc716jpeg', 31),
	('resource//product_img//GUTTER DOWN PIPE (12 FEET)_0_665710379f128jpeg', 32),
	('resource//product_img//KEVILTON CABLE TRUNKING_0_6657652000ee0jpeg', 33),
	('resource//product_img//NIPPON CEMENT_0_666613bab1c57jpeg', 34);

-- Dumping structure for table halgahawatta.profile_img
CREATE TABLE IF NOT EXISTS `profile_img` (
  `img_path` varchar(100) NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`img_path`),
  KEY `fk_profile_img_user1_idx` (`user_id`),
  CONSTRAINT `fk_profile_img_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.profile_img: ~4 rows (approximately)
INSERT INTO `profile_img` (`img_path`, `user_id`) VALUES
	('resource//profile_img//Sanjana_665e4716af3be.jpeg', 1),
	('resource//profile_img//Pabasara_665a62d55d117.jpeg', 3),
	('resource//profile_img//Sanjana_665ac4f02efb5.jpeg', 4),
	('resource//profile_img//jiat_6666c6b43ac58.jpeg', 11);

-- Dumping structure for table halgahawatta.size
CREATE TABLE IF NOT EXISTS `size` (
  `size_id` int NOT NULL AUTO_INCREMENT,
  `size_name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.size: ~23 rows (approximately)
INSERT INTO `size` (`size_id`, `size_name`) VALUES
	(1, '1/2'),
	(2, '1'),
	(3, 'No Size'),
	(4, '1/16\''),
	(5, '1/8\''),
	(6, '5/32\''),
	(7, '3/16\''),
	(8, '1/4\''),
	(9, '5/16\''),
	(10, '3/8\''),
	(11, '1/2\''),
	(12, '5/8\''),
	(13, '1L'),
	(14, '5L'),
	(15, '10L'),
	(16, '20L'),
	(17, '570W'),
	(18, '8 X 110 mm'),
	(19, '10cm '),
	(20, '100g'),
	(21, '10m'),
	(22, '60w'),
	(23, '25MM - 315MM');

-- Dumping structure for table halgahawatta.sub_category
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_cat_id` int NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(50) NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`sub_cat_id`),
  KEY `fk_sub_category_category1_idx` (`category_id`),
  CONSTRAINT `fk_sub_category_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.sub_category: ~24 rows (approximately)
INSERT INTO `sub_category` (`sub_cat_id`, `sub_cat_name`, `category_id`) VALUES
	(1, 'Hand Tools', 1),
	(2, 'Power Tools', 1),
	(3, 'Gardening Tools', 1),
	(4, 'Measuring Tools', 1),
	(5, 'Cement ', 2),
	(6, 'Brick and Blocks', 2),
	(7, 'Roofing Materials', 2),
	(8, 'Insulation Materials', 2),
	(9, 'Interior Paints', 3),
	(10, 'Exterior Paints', 3),
	(11, 'Paint Tools', 3),
	(12, 'Paint Accessories', 3),
	(13, 'Protective Gear', 3),
	(14, 'Surface Preparation Products', 3),
	(15, 'Wiring', 4),
	(16, 'Outlets And Switches', 4),
	(17, 'Lighting Fixtures', 4),
	(18, 'Circuit Breakers And Fuses', 4),
	(19, 'Electronic Tools', 4),
	(20, 'Pipes', 5),
	(21, 'Facets And Fixtures', 5),
	(22, 'Pipefitting And Connectors', 5),
	(23, 'Plumbing Accessories', 5),
	(24, 'Machines', 4);

-- Dumping structure for table halgahawatta.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(20) NOT NULL,
  `Join_date_time` datetime DEFAULT NULL,
  `statues` int NOT NULL,
  `vcode` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `address_line_01` varchar(50) DEFAULT NULL,
  `address_line_02` varchar(50) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `District` varchar(45) DEFAULT NULL,
  `Postal_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.user: ~11 rows (approximately)
INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `mobile`, `username`, `password`, `Join_date_time`, `statues`, `vcode`, `address_line_01`, `address_line_02`, `city`, `District`, `Postal_code`) VALUES
	(1, 'Sanjana', 'Kumara', 'sanjananisalkumara@gmail.com', '0711401506', 'Kumara', '789456', '2024-05-25 01:50:26', 1, '6666c58fc37ba', '358/B kakunagahawatta', 'Dompe', 'Dompe', 'Gampaha', '11680'),
	(2, 'Thamali', 'Vinodya', 'abajahaj@gmail.com', '07114212524', 'thamali', '12345', '2024-05-25 01:51:54', 1, '66581444114d0', '35/v Kekunagahawatta Dompe', 'Dompe', 'Dompe', 'Gampaha', '11650'),
	(3, 'Pabasara', 'Sandeepani', 'pabasara@gmail.com', '0774859632', 'pabasara', '789456', '2024-05-25 01:52:43', 1, '665acc0502c6b', NULL, NULL, NULL, NULL, NULL),
	(4, 'Viraj', 'Lakmal', 'Viraj@gmail.com', '0774586276', 'Viraj', '5418454', '2024-05-25 11:19:27', 1, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Pasidu', 'Nethsara', 'Pasidu@gmail.com', '0778698648', 'Pnethsara', '4848775', '2024-05-25 11:22:21', 0, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Govinda', 'Sadagiri', 'Govi@gmail.com', '0789456521', 'Batta', '1234578', '2024-05-25 11:59:43', 0, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'Chathura', 'Perera', 'Cthathura@gmail.com', '0714568927', 'Chathura', '1234567', '2024-05-25 11:59:44', 0, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'Avishka', 'Gimhan', 'Avishka@gmail.com', '0711471506', 'Avishka', '1235466', '2024-05-25 11:59:45', 1, NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'Hashen ', 'Tharanga', 'Hashen@gmail.com', '0714528395', 'Hashen', '1595656954', '2024-05-25 11:59:45', 1, NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 'sahan', 'thissakya', 'sahan@gmail.com', '0711859678', 'sahan', '123456', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
	(11, 'jiat', 'student', 'jiat.achira@gmail.com', '0711401507', 'Student1', '12345', NULL, 0, '6666c5cc34d2e', NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table halgahawatta.watchlist
CREATE TABLE IF NOT EXISTS `watchlist` (
  `wa_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`wa_id`),
  KEY `fk_product_has_user_user2_idx` (`user_id`),
  KEY `fk_product_has_user_product2_idx` (`product_id`),
  CONSTRAINT `fk_product_has_user_product2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `fk_product_has_user_user2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table halgahawatta.watchlist: ~2 rows (approximately)
INSERT INTO `watchlist` (`wa_id`, `product_id`, `user_id`) VALUES
	(103, 20, 1),
	(105, 31, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
