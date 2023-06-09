-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 05:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dswddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `quantity` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` float NOT NULL,
  `item_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `date_created`, `quantity`, `user_id`, `user_name`, `item_name`, `item_image`, `item_price`, `item_description`) VALUES
(34, 1, '2023-06-04', 2, 1, 'sample', 'Coffee Maker', '/uploads/1683795245_b8d50f4b55e9d26feb7c.webp', 2232, '10-12 cups capacity 700-1200watts, 230V, 1Ø, 60Hz Non-stick warming plate with ON/OFF Switch and Light Indicator Reusable Cone style filter with handle Clear water level indicator on tank Heat resistant glass carafe, hinged tank  including at least 6 mont');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `text`, `created_at`, `name`, `item_image`) VALUES
(1, 2, 1, 'comment try', '14-10-1222', 'name', ''),
(6, 1, 8, 'gagi haha', '2023-05-15 13:00:27', 'sample', ''),
(15, 7, 1, 'sample comment', '2023-06-01 20:59:45', 'asdfsfasdf', ''),
(16, 9, 2, 'sample comment', '2023-06-02 14:53:10', 'Jeven Mata', '');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `download_number` int(11) NOT NULL,
  `file` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `download_number`, `file`) VALUES
(1, 10, 'TA'),
(2, 0, 'MS');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `position` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `legend` varchar(255) NOT NULL DEFAULT 'PERMANENT',
  `row` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `about`, `email`, `image`, `date_added`, `position`, `status`, `legend`, `row`) VALUES
(1, ' Jenny Pearl C. Abedania', '', '', 'https://drive.google.com/file/d/1JgQua34r5GtWgUApD1mRlA3YFkjNumjN/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE OFFICER IV', 'MOA', '', '1'),
(2, 'Engr.Aldwin R. Bacay', '', '', 'https://drive.google.com/file/d/1Q5Qid8z4IZmyXywgrEQYbMQbnByjv9kj/view?usp=share_link', 'current_timestamp()', 'ENGINEER II', 'PERMANENT', '', '3'),
(3, 'Mayquilito P. Alvena', '', '', 'https://drive.google.com/file/d/1GaFVT0hUdr1vREMDCce9YNLfHNTFZ_So/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Carpenter II)', 'PERMANENT', '', '0'),
(4, 'Danilo O.Bernal', '', '', 'https://drive.google.com/file/d/1ntq7naORbadoU25HR2FRNo8rlPLxEQMU/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Carpenter II)', 'PERMANENT', '', '0'),
(5, 'Patrick V. Caldito', '', '', 'https://drive.google.com/file/d/12gBWprX-vnrPpqyk8UtA2-NU0QwoJMLU/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE ASSISTANT II (Air-Conditioning Technician II)', 'PERMANENT', '', '0'),
(6, 'Julien C.De Torres', '', '', 'https://drive.google.com/file/d/1V0N3lOqrS2PHBOQjaxFmX2YTfF5m6qmF/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Painter II)', 'PERMANENT', '', '0'),
(7, 'Engr.Alfredo C. Evangelista II', '', '', 'https://drive.google.com/file/d/11hnMXY4zyd6i3yadNOEJvv5hhEkHiMXE/view?usp=share_link', 'current_timestamp()', 'ENGINEER IIII', 'PERMANENT', '', '0'),
(8, 'Engr.Villamor A. Evangelista,JR.', '', '', 'https://drive.google.com/file/d/19XpxE7c8o6ZNBy-MhnkmRM7ya04Ii7Ha/view?usp=share_link', 'current_timestamp()', 'PROJECT MANAGEMENT OFFICER', 'MOA', '', '5'),
(9, 'Norman A. Gabales', '', '', 'https://drive.google.com/file/d/1FW8jJqO_4Q16hiFvAK3vvUay-x7L5B9A/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE IV', 'MOA', '', '0'),
(10, 'Carlos P. Garcia', '', '', 'https://drive.google.com/file/d/1Re898TF51sd7G5N9P8COqOs1BugDoplL/view?usp=share_link', 'current_timestamp()', 'CONSTRUCTION AND MAINTENANCE GENERAL FOREMAN', 'PERMANENT', '', '3'),
(11, 'RammonCito O.Garcia', '', '', 'https://drive.google.com/file/d/1I8LY-01UsqFKFl2Wly26ZnAZ7z7vZRx6/view?usp=share_link', 'current_timestamp()', 'SENIOR ADMINISTRATIVE ASSISTANT II (Audio-Visual Aids Technician IV)', 'MOA', '', '5'),
(12, 'Raymond A. Guitierrez', '', '', 'https://drive.google.com/file/d/1_In8_kusTqZdWcwdeuYU9Sm6BjpjKeqI/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE IV', 'MOA', '', '0'),
(13, 'Jhon Michael De Pedro ', '', '', 'https://drive.google.com/file/d/1om1yXb_0EGSUAW9bNewMjvjIUDqF3Jht/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE OFFICER III', 'PERMANENT', '', '3'),
(14, 'Engr. Jymlee P. Pacala', '', '', 'https://drive.google.com/file/d/1krEgPDqQhueRy70Yuq_JGGclxIzTDmT2/view?usp=share_link', 'current_timestamp()', 'PROJECT MANAGEMENT OFFICER', 'MOA', '', 'E'),
(15, 'Louie Jane R. Francisco', '', '', 'https://drive.google.com/file/d/1ksw6VdFUBdLOq1KeSGHnPjhcStmHTA-K/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE ASSISTANT II (Clerk IV)', 'PERMANENT', '', '0'),
(16, 'Engr. Katherine L. Longcanaya', '', '', 'https://drive.google.com/file/d/1gV2Kvi7SUDppGa3ZSYLq2QzJi90pTTv6/view?usp=share_link', 'current_timestamp()', 'PROJECT MANAGEMENT OFFICER', 'MOA', '', '5'),
(17, 'Mario P. Macenas', '', '', 'https://drive.google.com/file/d/1M_JJDhsucKaRWyl2px0Ubo6sWj2qFVPB/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE ASSISTANT IV (Carpenter General Foreman)', 'PERMANENT', '', '0'),
(18, 'Elsa L. Magat', '', '', 'https://drive.google.com/file/d/1M_JJDhsucKaRWyl2px0Ubo6sWj2qFVPB/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V', 'PERMANENT', '', '0'),
(19, 'Mark Anthony P.Marcelo', '', '', 'https://drive.google.com/file/d/1oyo_LqZa7M02MRwJ_o9QO_8g9JAEDJT8/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE IV', 'MOA', '', '0'),
(20, 'Marina M. Mediana', '', '', 'https://drive.google.com/file/d/13zwSSAKeTzUSxo1luQz_DMVHKBt9pgNi/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE IV', 'MOA', '', '0'),
(21, 'Larry P. Miranda', '', '', 'https://drive.google.com/file/d/15s51kRvSQIjlOYkVlHKvq_8-jfMgwJ31/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Mason II)', 'PERMANENT', '', '0'),
(22, 'Rodrigo N. Mirande', '', '', 'https://drive.google.com/file/d/1d2EGRwutys8DNRCIMTV5myURpLvT2sUX/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Plumber II)', 'PERMANENT', '', '0'),
(23, 'Ernesto Q. Obrique', '', '', 'https://drive.google.com/file/d/1NqiBLfkmAQF4FisW7APhw_ksMsF7GQU6/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Plumber II)', 'PERMANENT', '', '0'),
(24, 'Silvino G. Pelingon Jr', '', '', 'https://drive.google.com/file/d/1LOBJfmg-FP0dlDDozR4gWBQhDMzDp61m/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE AIDE V (Carpenter II)', 'PERMANENT', '', '0'),
(25, 'Maria Theresa M. Reyes', '', '', 'https://drive.google.com/file/d/1gXXjT216RlG3nuM1mKQpkvUoPezF1Jbg/view?usp=share_link', 'current_timestamp()', 'ADMINISTRATIVE ASSISTANT II', 'MOA', '', '0'),
(26, 'Edgar B.Saminian ', '', '', 'https://drive.google.com/file/d/1gXXjT216RlG3nuM1mKQpkvUoPezF1Jbg/view?usp=share_link', 'current_timestamp()', '', '', '', '0'),
(27, 'Junmar S. Sevilleno', '', '', 'https://drive.google.com/file/d/1Lubt65cC03sLtGvyKLorHeoT0lWqY3i9/view?usp=share_link', 'current_timestamp()', '', '', '', '0'),
(28, 'Engr.Julius Ryan B. Tuquero', '', '', 'https://drive.google.com/file/d/1LSRrrwvBGh7YNXxFKzU-hWrdkq2F0ckQ/view?usp=share_link', 'current_timestamp()', '', '', '', '5'),
(29, 'Engr. Ronald T. Vegim', '', '', 'https://drive.google.com/file/d/1dsJhdtxYBaX3orb1aipz63GEbGmNIY0z/view?usp=share_link', 'current_timestamp()', '', '', '', '5'),
(30, 'AR.Nezhley Anne P.Vivit', 'Architect ||', '', 'https://drive.google.com/file/d/1HfVq8C_KEiIv7CiYyr_vrZwS2rXuuIpA/view?usp=share_link', 'current_timestamp()', '', '', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(55) NOT NULL,
  `item_id` int(55) NOT NULL,
  `user_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `datein` varchar(255) NOT NULL,
  `dateout` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `ta` varchar(255) NOT NULL,
  `ms` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `tasub` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `downloadts` int(255) NOT NULL,
  `downloadms` int(255) NOT NULL,
  `tsfilename` varchar(255) NOT NULL,
  `msfilename` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `name`, `description`, `price`, `datein`, `dateout`, `status`, `ratings`, `ta`, `ms`, `note`, `tasub`, `comments`, `image`, `downloadts`, `downloadms`, `tsfilename`, `msfilename`, `imagename`) VALUES
(1, 'Coffee Maker', '10-12 cups capacity 700-1200watts, 230V, 1Ø, 60Hz Non-stick warming plate with ON/OFF Switch and Light Indicator Reusable Cone style filter with handle Clear water level indicator on tank Heat resistant glass carafe, hinged tank  including at least 6 mont', '2232', '0-4-29', '0-4-29', 'ACTIVE', '5', '', '', 'NOTES', 'Supply and delivery of Coffee Maker', '', '/uploads/1683795245_b8d50f4b55e9d26feb7c.webp', 0, 0, '', '', ''),
(2, 'Split-type Ceiling Suspend Air Conditioning Unit', 'Cooling: Equal or More Than 34,000 btu/hr or 40,000 kJ/Hr (3.0TR) EER: 8.3-12.3btu/hr-W Refrigerant: R410A/R22/R32 Inverter type Power Supply: 220-240V/60hz/1P Remote Controlled and Air Flow Function Anti-Bacterial Filter Compressor type with Anti-corrosi', '122,062.00', '0-4-29', '0-4-29', 'ACTIVE', '4', 'https://drive.google.com/file/d/1Bd19ayNBNg4Zh9QaXg5JI4w9WUepN2-a/view?usp=share_link', '', 'General Notes:\r\n1. Includes electrical power source (circuit breaker, wires, conduits, moldings and etc.) and\r\nmechanical support (bracket support, base stand, pipes (drains and etc.),\r\n2. Conduct site inspection prior to submission of quotation.\r\n3. Any ', 'SUPPLY, DELIVERY AND INSTALLATION OF 3TR AIR CONDITIONING\r\n\r\nUNITS', '', 'https://www.remalsales.com/assets/images/carrier%20ac%202015/53xq060.jpg', 0, 0, '', '', ''),
(3, 'ACRYLIC NAME PLATE HOLDER / STAND (TOBLERONE TYPE)', '12” Clear/Transparent Acrylic Desk Template Holder/Stand Double Sided Orientation: Landscape Display on desks, tables, counters, or any flat surface', '400.00', '0-4-29', '0-4-29', 'ACTIVE', '5', 'https://drive.google.com/file/d/19auwWR6Lg7U1iAuXN03dqlDX-Jx3boOD/view?usp=share_link', '', 'Attached picture is for reference only. Please submit photos of the sample/brochure for\r\nreference and approval of the end user.', 'SUPPLY AND DELIVERY OF ACRYLIC NAME PLATE HOLDER / STAND', '', 'https://m.media-amazon.com/images/I/511Y--BPkKL._AC_UF894,1000_QL80_.jpg', 0, 0, '', '', ''),
(4, 'Air Cooler', '(250-550 watts, 220-240V, 1Ø, 60Hz), for 70-95sq.m area of coverage,\n 7500-9500 cu.m per hour airflow\nthree (3) side cooling pad,\n LED control panel with remote control,\n 150-200 liter water tank capacity, with continuous water supply connector \n4-5 caster wheels, includes instructional manual and 6months to 1year warranty on parts and service.\n', '34,645.00', '0-4-29', '0-4-29', 'ACTIVE', '4', 'https://drive.google.com/file/d/1ESb29bXoHx22Lwx6EO_Tw9G2b4RyHWew/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for\r\nreference and approval of the end user.', 'SUPPLY AND DELIVERY OF AIR COOLER', '', 'https://freepngimg.com/save/52333-evaporative-air-cooler-download-hq-png/680x680', 0, 0, '', '', ''),
(5, 'Analog Wall Clock with Digital Date Display', '13”-15” diameter analog wall clock, made of high quality material (plastic and anti-fogging clear glass cover) LCD display for date and day powered by at least two AA batteries, includes at least 6 months warranty and/or replacement for defective units.', '8433.00', '0-4-29', '0-4-29', 'ACTIVE', '5', 'https://drive.google.com/file/d/1ZxDnST04q6G5MXaZNhTr7hG5Knh16Xc6/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure\r\nfor reference and approval of the end user.', 'SUPPLY AND DELIVERY OF ANALOG WALL CLOCK WITH DATE\r\n\r\nDISPLAY', '', 'https://m.media-amazon.com/images/I/71rJLbREA9L._AC_UF894,1000_QL80_.jpg', 0, 0, '', '', ''),
(6, ' Analog Wall Clock', '13”-16” diameter analog wall clock, made of high quality material (plastic and anti-fogging clear glass cover) quartz movement for precision timing powered by one AA battery (included) with at least 6 months warranty and/or replacement for defective units.', '825.00', '0-4-29', '0-4-29', 'ACTIVE', '5', 'https://w7.pngwing.com/pngs/478/1015/png-transparent-round-black-framed-analog-clock-at-11-00-alarm-clock-wall-watch-background-accessories-time-number.png', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for\r\nreference and approval of the end user.', 'SUPPLY AND DELIVERY OF ANALOG WALL CLOCK', '', 'https://w7.pngwing.com/pngs/478/1015/png-transparent-round-black-framed-analog-clock-at-11-00-alarm-clock-wall-watch-background-accessories-time-number.png', 0, 0, '', '', ''),
(7, 'NO NAME', 'Removable Cash and Coin Tray with 4 Cash Clips in Lid 8 Coin Slots and 1 Bill Slot in Tray Storage under Tray Scratch Resistant Powder Coated Finish With Key Lock', '1,935.00', '0-4-29', '0-4-29', 'ACTIVE', '5', 'https://drive.google.com/file/d/1vhF9bLS5zu53HjFoYPVb6zXyopwDkaC_/view?usp=share_link', '', '', '', '', 'https://i5.walmartimages.com/asr/fc847a17-5ae1-46f4-80b5-381052550253_1.a39652fad91231eb7d8ee205fab74151.jpeg', 0, 0, '', '', ''),
(8, 'Digital Wall Clock', 'Dimension: 20” x 7.5” x 2” (±2”) inches digital wall clock, 24 and/or 12 hours LED display visible in day/ night, Temperature, Day of the Week and Date display built-in battery back-up in LED Red color Power supply: 220-240V, 50-60Hz and/or 5V DC (adapter and power cord included), includes at least 6 months warranty and/or replacement for defective unit', '1,650.00', '0-4-29', '0-4-29', 'ACTIVE', '5', 'https://drive.google.com/file/d/1eWtM4d_KQ9p_-aog6Oxzrt2KCLDlrBDO/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for\r\nreference and approval of the end user.', 'SUPPLY AND DELIVERY OF DIGITAL WALL CLOCK', '', 'https://www.american-time.com/wp-content/uploads/2021/03/4in-4-Surface-Red-img2.jpg', 0, 0, '', '', ''),
(9, 'Electric Stand Fan ', '18” to 20\" diameter 60-150 Watts, 220-240 Volts, 50-60Hz,  3-wing banana type blades (plastic), 3 fan speed rotary control switch with oscillation, adjustable fan head and height, with built-in thermal fuse protection round base and includes instructional manual with at least 6 months warranty on parts and services.  With PS or ICC mark Brand shall be engraved/ embossed/ printed on the item Grill: metal  Packaging: 1 unit per box', '3,880.00', '0-4-29', '0-4-29', 'ACTIVE', '5', 'https://drive.google.com/file/d/1opqY4m14hG_jTkkO5JFTtHKj_vlxrYyh/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for reference\r\nand approval of end user.', 'SUPPLY AND DELIVERY OF ELECTRIC STAND FAN', '', 'https://th.bing.com/th/id/OIP.8N7w_lPTLNI2i9ZvEESs3AHaHa?pid=ImgDet&rs=1', 0, 0, '', '', ''),
(10, 'EXECUTIVE OFFICE CHAIR', 'Leather seat Adjustable Height Tilting Mechanism Pneumatic Height Adjustment 360 Degrees Swivel Function 150Kg Maximum Weight Seating Capacity Color: Black Starbased metal legs  Wheel Caster Height: 116-120 cm Width: at least 47cm Seat Depth: at least 55cm  Armrest Height: 61-73 cm Seating Height: High Back - at least 45 cm', '9,680.00', '0-4-29', '0-4-29', 'INACTIVE', '5', '/uploads/tsfile/1684195857_d8a0a028edd06ce536fe.docx', '/uploads/msfile/1684195857_c84907e86c8ed8265be2.docx', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for reference\r\nand approval of end user.', 'SUPPLY AND DELIVERY OF EXECUTIVE OFFICE CHAIRS', '', '/uploads/1684195857_8aefc44e2a62a9d4665e.webp', 0, 0, '1684195857_d8a0a028edd06ce536fe.docx', '1684195857_c84907e86c8ed8265be2.docx', '1684195857_8aefc44e2a62a9d4665e.webp'),
(11, 'EXECUTIVE OFFICE TABLE', 'MDF Board Top Melamine laminated finish with powder coated steel legs and modesty panel With 1 drawer with a swing door, cabinet in central lock mechanism  With 2 Door, sliding cabinet + 1 drawer and 1 swing door in individual lock mechanism Color: Black Main Table Dimension:  1.80m(W) x 0.75m(D) x 0.75m(H) Side Table Dimension:  1.20m(W) x 0.40m(D) x 0.65m(H) *Allowable variance of (+/-) 3 cm. in all dimensions', '22,000.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1xjOIU6EptQgJFKjFbpSf0_XTFieKo2hO/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for reference\r\nand approval of end user.', 'SUPPLY AND DELIVERY OF EXECUTIVE OFFICE TABLE', '', 'https://www.pngfind.com/pngs/m/454-4546020_furniture-executive-desk-furniture-office-table-png-transparent.png', 0, 0, '', '', ''),
(12, 'GANG CHAIR - 3 SEATER', '3 seater, with 2 leg support Metal with armrest on both end Seat & Back Shell: Cold Rolled steel in Chrome Finish, Chair Color: Silver Perforated seat Frame Armrests & Legs: Cold rolled steel in Chrome Finish   Overall Assembled Dimension: Length: 1750 mm (±100mm) Width:  680 mm (±20mm)          Height: 800 mm (±20mm)', '7,130.00', '0-4-29', '0-4-29', 'ACTIVE', '5', '', '', 'Attached picture is for reference only. Please submit photos of the sample for reference\r\nand approval.', 'SUPPLY AND DELIVERY OF GANG CHAIR - 3 SEATER', '', '/uploads/1684115623_670a1eacb14accc00731.jpg', 0, 0, '1684115623_ee02e41e122749f5eabf.docx', '1684115623_34a9b3ef14732ce9587d.docx', '1684115623_670a1eacb14accc00731.jpg'),
(13, 'GANG CHAIR - 5 SEATER', '5 seater, with 3 leg support Metal with armrest on both ends Seat & Back Shell: Cold Rolled steel in Chrome Finish, Chair Color: Silver Perforated seat Frame, Armrests & Legs: Cold rolled steel in Chrome Finish  Overall assembled dimension:  Length: 2,900 mm (±100mm) Width:   680 mm (±20mm) Height: 800 mm (±20mm)', '10,887.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/19sPshssreK5hJx4skxVQkPvghPxmwj_5/view?usp=share_link', '', 'Attached picture is for reference only. Please submit photos of the sample for reference\r\nand approval.', 'SUPPLY AND DELIVERY OF GANG CHAIR - 5 SEATER', '', 'https://cdn.shopify.com/s/files/1/0322/4259/7932/products/ACSS-X5_decf0445-8db4-4158-9c12-d32c25c7d3c0_3600x2438.jpg?v=1585170310', 0, 0, '', '', ''),
(14, 'HEAVY DUTY PUSH CART', 'High Capacity All Stainless Steel Heavy Duty/Foldable Hand Truck Trolley Push Cart Weight capacity requirements: Can withstand up to 500 kg Dimension platform: at least 19.5 inch x 29 inch platform At least 4 inches wheel diameter', '8,250.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1mUNT54nOr_hT9qxwGjYY9BjMp3JCwPFO/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for reference\r\nand approval of the end user.', 'SUPPLY AND DELIVERY OF HEAVY DUTY PUSH CART', '', 'https://media.karousell.com/media/photos/products/2020/01/23/heavy_duty_push_cart__stanley__prestar_1579759126_f3409aaab', 0, 0, '', '', ''),
(15, 'Industrial Floor Electric Fan', '16” to18\" metal 3-wing blade, (60-150 Watts, 220-240 Volts, 50-60Hz) industrial type metal body, 3 fan speed control adjustable fan head and oscillation control With built-in thermal fuse protection, includes instructional manual  at least 6 months warranty on parts and services.  With PS or ICC mark Brand shall be engraved/ embossed/ printed on the item Grill: metal  Packaging: 1 unit per box', '3,739.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1yr4uBo6bPuz5w9sSyaB5_YMtPXr-l8R_/view?usp=share_link', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for\r\nreference and approval of the end user.', 'SUPPLY AND DELIVERY OF INDUSTRIAL FLOOR ELECTRIC FAN', '', 'https://i5.walmartimages.com/asr/d2f28fd8-1230-4205-bf47-0589e9e482de.5aa21df0a512e4c54c91810f99846dad.jpeg', 0, 0, '', '', ''),
(16, 'LAMINATING MACHINE                    ', '450W-700W 230V, 60Hz Control and Guide Gauge, on/off master switch Paper Size: A4-A3 Laminating Thickness: 60-65 mic Laminating Speed: 250-500mm per minute  Motor Reverse Control with Hot and Cold switch Warm up time: 3-5 minutes ', '4,592.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1_LKZbVEzHsV7tEYtVb24jK-0p6HE_ss_/view?usp=share_link', '', 'Attached picture is for reference only. Please submit photos of the sample for reference and\r\napproval.', 'SUPPLY AND DELIVERY OF LAMINATING MACHINE', '', 'https://image.made-in-china.com/2f0j00LACQqgVGZobs/Laminating-Machine-A3-Temperature-Adjustable-Metal-Laminator-320mm-.jpg', 0, 0, '', '', ''),
(17, 'MOBILE PEDESTAL', 'Steel Filing Cabinet Mobile Pedestal Flush Handle. All metal construction with plastic molded top, nylon slide for all drawers caster – 55 mm, gauge – 0.9mm or gauge 20 5 swivel castors built for ease of mobility  Color: Light Gray Dimension: 40cm (W) X 56cm (D) X 65cm(H) with (+/-) 2 cm variance in all dimension  Accessories: pencil tray and file divider, flush handle, central locking system (with keys), 2 small drawers, 1 big drawer', '4,610.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1KccRCX8kBbmwGx8TrjPxFEItw4R2skR8/view?usp=sharing', '', 'Attached picture is for reference only. Kindly submit photos of the sample or brochure for\r\nreference and approval of the end user.', 'SUPPLY AND DELIVERY OF MOBILE PEDESTAL', '', 'https://th.bing.com/th/id/R.5a0a2b773c053fce92aaf9c977a2b5ce?rik=BNVy1M69CNiIXQ&riu=http%3a%2f%2fwww.officewarehouse.com.ph%2f__resources%2f_web_data_%2fproducts%2fproducts%2fimages%2f606.png&ehk=ohwFlZLgSkgKSPfeT6dasnGG1gv%2bJibRc2QVLeXI9f4%3d&risl=&pid=ImgRaw&r=0', 0, 0, '', '', ''),
(18, 'OFFICE STAFF CHAIRS', 'Midback Mesh back Fabric seat with armrest Gaslift and tilting mechanism Chrome finish star base legs with twin nylon caster  Capacity: 250lbs maximum seating weight requirement', ' 5,170.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1MB8pxvvTCHdW6PN2B0w8xzyBPV7vLuw5/view?usp=share_link', '', 'Attached picture is for reference only. Please submit photos of the sample for reference and\r\napproval.', 'SUPPLY AND DELIVERY OF OFFICE STAFF CHAIRS', '', 'https://th.bing.com/th/id/OIP.PqE_S8CaeW-3sEOmPDbT3AHaHa?pid=ImgDet&rs=1', 0, 0, '', '', ''),
(19, 'NO NAME', 'Double Sided Silk Fabric, patched design Set includes eyelet for mounting purposes Dimension: 3’ x 6”', '4,950.00', '0-4-29', '0-4-29', 'INACTIVE', '5', '', '', 'NOTE', '', '', '/uploads/1683793266_4cc73f25699feea2f4cf.png', 0, 0, '', '', ''),
(20, 'WHEELED TRASH BIN ', 'Wheeled trash bin with cover and foot pedal. Made with Polyethylene resin.    Volume Capacity: 120 L  Color: For end-user’s approval in accordance with the standard guidelines set by the Department', '6,710.00', '0-4-29', '0-4-29', 'INACTIVE', '5', 'https://drive.google.com/file/d/1ZDkqmNEesyV8Fwy5Kl21SxNsxJ349L-8/view?usp=share_link', 'https://drive.google.com/file/d/1ZDkqmNEesyV8Fwy5Kl21SxNsxJ349L-8/view?usp=share_link', 'Attached picture is for reference only. Please submit photos of the sample/brochure for\r\nreference and approval of end user.', 'SUPPLY AND DELIVERY OF WHEELED TRASH BIN', '', 'https://th.bing.com/th/id/OIP.kmtDQD5LM-Pe6-eI2yEpegHaHa?pid=ImgDet&rs=1', 0, 0, '', '', ''),
(27, 'Product Name', '', '1321', '', '', 'STATUS', '', '', '', 'THIS NOTE', '', '', '/uploads/1683791687_b8bcd83f75d71b03a6c0.jpg', 0, 0, '', '', ''),
(31, 'Sameple Prodyct', 'update description', '323', '', '', 'ACTIVE', '', '', '', 'NTOES', '', '', '/uploads/1684113152_ffe6db2bba51b03cf9b5.jpg', 0, 0, '', '', '1684113152_ffe6db2bba51b03cf9b5.jpg'),
(32, 'Sample Item', '', '12324', '', '', 'ACTIVE', '', '/files/1685625542_dfc009fb404c5b312078.webp', '/files/1685625542_5294b8ff664853ac9af5.webp', 'SAMPLE NOTE', '', '', '/uploads/1685625542_9a839390e8d451b3b0ed.webp', 0, 0, '', '', ''),
(33, 'Sample Product', '', '12345', '', '', 'ACTIVE', '', '/files/1685690335_1fe05a6991227d2d5e32.png', '/files/1685690335_25aaa3382a92c047f308.png', 'Sample note', '', '', '/uploads/1685690335_2be7c52ed7f1dbf79af6.png', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL DEFAULT 'USER',
  `date_created` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'ACTIVE',
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `is_admin`, `date_created`, `status`, `address`, `phone`, `image`) VALUES
(1, 'sample@gmail.com', '$2y$10$Zt3HaCDDxQIXAfJ9MRIkP.y.FB6ci5F3uOx9vdlTE4eECx0vTJQpS', 'sample', 'ADMIN', '2023-05-03 10:35:38', 'ACTIVE', '', '', '/uploads/1685610347_1ec2a66cf6459bcbd483.png'),
(2, 'kenjie@gmail.com', '$2y$10$VTU2yst0phHLgh7gioydeeM3takVX.bx1wanIs2zqbgx2xXbonz4a', 'kenjie', 'ADMIN', '2023-05-03 10:35:38', 'ACTIVE', '', '', ''),
(3, 'user@gmail.com', '$2y$10$3WLXbWFHdfnSic2I7fwKF.WLwdVHqB0btYWWHqR8rkaW6y8sHDcrC', 'user', 'USER', '2023-05-03 12:20:30', 'ACTIVE', '', '', ''),
(5, 'mark@example.com', '$2y$10$iZ4q0XYA2lBVfbTTDlVcyOktyAAfvDn7nQ5YzZJwqnKRVfPr7BghG', 'mark', 'USER', '2023-05-10 08:57:50', 'ACTIVE', 'address', '12313', ''),
(6, 'admin@gmail.com', '$2y$10$8uHC4s./EPpViTUsTZgCCOoGYVwu8t2r64XNEekT9oSgmwyi.88pu', 'Jomar Mata', 'USER', '2023-06-01 20:40:21', 'ACTIVE', 'San Rafael Montalban Rizal', '232323232', 'https://fc93-112-201-162-31.ngrok-free.app/assets/images/logob.png'),
(7, 'bok@gmail.com', '$2y$10$KiAqb/Oqaf4zJrhTxqIrY.NGup2h.uUyQ8AkYLXOmVKi0GoNl4Oy.', 'asdfsfasdf', 'USER', '2023-06-01 20:41:52', 'ACTIVE', 'asdasdas', '1233434', 'https://fc93-112-201-162-31.ngrok-free.app/assets/images/logob.png'),
(8, 'adasda@gmail.com', '$2y$10$7F8GPOSPuEo8KM97W0tQHeNNwaynPIbNugBPeEeFoPsbzVI2mnWD.', 'jorda', 'USER', '2023-06-02 10:58:23', 'ACTIVE', 'San Rafael Montalban Rizal', '0232323232', 'http://localhost:8080/assets/images/logob.png'),
(9, 'jevenmata@gmail.com', '$2y$10$t2J0PG8AfNdLbGEU1DwXw.NMYZq0vzfGYJJ9Uq8.n4NbSt9OcyzVm', 'Jeven Mata', 'USER', '2023-06-02 14:49:30', 'ACTIVE', 'phase 2 Hillside San Rafael', '123445454', 'https://4284-112-201-162-31.ngrok-free.app/assets/images/logob.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
