-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2023 at 03:54 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'web_phone'
--

-- --------------------------------------------------------

--
-- Table structure for table 'account'
--

DROP TABLE IF EXISTS 'account';
CREATE TABLE IF NOT EXISTS 'account' (
  'Username' varchar(64) NOT NULL,
  'Fullname' varchar(256) DEFAULT NULL,
  'Password' varchar(256) DEFAULT NULL,
  'Email' varchar(256) DEFAULT NULL,
  'Status' int DEFAULT '0',
  'Permission' varchar(32) DEFAULT 'User',
  'Time' timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY ('Username')
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table 'account'
--

INSERT INTO 'account' ('Username', 'Fullname', 'Password', 'Email', 'Status', 'Permission', 'Time') VALUES
('Thinh1', 'Nguyen Phuc Thinh', '123456', 'Thinhpn@gmail.com\r\n', 1, 'Admin', '2023-05-08 06:59:43');

-- --------------------------------------------------------

--
-- Table structure for table 'product'
--

DROP TABLE IF EXISTS 'product';
CREATE TABLE IF NOT EXISTS 'product' (
  'ProductID' varchar(64) NOT NULL,
  'Productname' varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  'Productdescription' text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  'Unit' varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  'Unitprice' int DEFAULT NULL,
  'Quantity' int DEFAULT '0',
  'Updatetime' timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  'Linkpicture' varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY ('ProductID')
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table 'product'
--

INSERT INTO 'product' ('ProductID', 'Productname', 'Productdescription', 'Unit', 'Unitprice', 'Quantity', 'Updatetime', 'Linkpicture') VALUES
('SS00', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 00\r\nMỏng Nhẹ và thoáng khí - tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 0, '2023-05-08 06:21:24', 'p00.jpg'),
('SS01', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 01\r\nMỏng Nhẹ và thoáng khí - tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:39:46', 'p01.jpg'),
('SS02', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 02\r\nMỏng Nhẹ và thoáng khí - tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:43:39', 'p03.jpg'),
('SS04', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 04\r\nMỏng Nhẹ và thoáng khí - tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:48', 'p04.jpg'),
('SS05', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 05\r\nMỏng Nhẹ và thoáng khí - tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:48', 'p05.jpg'),
('SS06', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 06\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 250000, 5, '2023-05-08 06:47:48', 'p06.jpg'),
('SS07', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 07\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 250000, 5, '2023-05-08 06:47:48', 'p07.jpg'),
('SS08', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 08\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 250000, 5, '2023-05-08 06:47:48', 'p08.jpg'),
('SS09', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 09\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 250000, 5, '2023-05-08 06:47:48', 'p09.jpg'),
('SS10', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 10\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:48', 'p10.jpg'),
('SS11', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 11\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:48', 'p11.jpg'),
('SS12', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 12\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:48', 'p12.jpg'),
('SS13', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 13\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'p013.jpg'),
('IP01', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 01\r\nMỏng Nhẹ và thoáng khí tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:49', 'i1.jpg'),
('IP02', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 02\r\nMỏng Nhẹ và thoáng khí tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:49', 'i02.jpg'),
('IP03', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 03\r\nMỏng Nhẹ và thoáng khí tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:49', 'i03.jpg'),
('IP04', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 04\r\nMỏng Nhẹ và thoáng khí tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:49', 'i04.jpg'),
('IP05', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 05\r\nMỏng Nhẹ và thoáng khí tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:49', 'i05.jpg'),
('IP06', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 06\r\nMỏng Nhẹ và thoáng khí tác tạo có nhiều đường vân đẹp', 'Chiếc', 250000, 5, '2023-05-08 06:47:49', 'i06.jpg'),
('IP07', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 07\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i07.jpg'),
('IP08', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 08\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i08.jpg'),
('IP09', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 09\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i09.jpg'),
('IP10', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 10\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 330000, 5, '2023-05-08 06:47:49', 'i10.jpg'),
('IP11', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 11\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i11.jpg'),
('IP12', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 12\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i12.jpg'),
('IP13', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 13\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', '\"C:\\wamp64\\www\\WEB-ASM2\\i13.jpg\"'),
('IP14', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 14\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i14.jpg'),
('IP15', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 15\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 330000, 5, '2023-05-08 06:47:49', 'i15.jpg'),
('IP16', 'PWC IPhone', 'Ốp Lưng IPhone bằng gỗ\r\nDòng I 16\r\nMỏng Nhẹ và thoáng khí điều khắc cầu kỳ', 'Chiếc', 300000, 5, '2023-05-08 06:47:49', 'i16.jpg'),
('SS03', 'PWC Samsung', 'Ốp Lưng SamSung bằng gỗ\r\nDòng S 03\r\nMỏng Nhẹ và thoáng khí - tác tạo có nhiều đường vân đẹp\'', 'Chiếc', 250000, 5, '2023-05-08 06:54:42', 'p03.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
