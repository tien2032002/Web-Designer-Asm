-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2023 lúc 01:55 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `restaurant`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'request'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `table_id`, `product_id`, `quantity`, `price`, `status`) VALUES
(1, 3, 205, 1, 40000, 'canceled'),
(2, 3, 308, 6, 90000, 'canceled'),
(3, 4, 308, 10, 150000, 'paid'),
(4, 5, 205, 5, 200000, 'paid'),
(5, 5, 111, 3, 120000, 'paid'),
(6, 5, 308, 2, 30000, 'paid'),
(7, 6, 301, 1, 15000, 'canceled'),
(8, 6, 102, 3, 90000, 'canceled'),
(9, 7, 205, 1, 40000, 'paid'),
(10, 7, 205, 1, 40000, 'paid'),
(11, 8, 101, 8, 56000, 'request'),
(12, 9, 101, 1, 7000, 'canceled'),
(13, 9, 102, 1, 30000, 'request');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `platform`, `icon`, `link`) VALUES
(1, 'Địa chỉ', 'bi bi-geo-alt', '6 Đ. Hoàng Sa, Vĩnh Ninh'),
(2, 'facebook', 'bi bi-youtube', 'gb.com'),
(3, 'số điện thoại', 'bi bi-telephone', '+84 120443812'),
(5, 'twitter', 'bi bi-twitter', 'twitter.com/disfruitar'),
(7, 'map', 'none', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27932.397705129646!2d106.64633329222451!3d10.801180934406508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zTmjDoCBow6BuZw!5e0!3m2!1svi!2s!4v1682214942487!5m2!1svi!2s');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'view\\images\\avt_user',
  `password` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `image`, `password`, `address`, `phone`, `gender`, `birthday`) VALUES
(2, 'Ayhed', 'Ayhed@gmail.com', './view/images/user/user2', '12345678', 'Sume', '3401179729', 'Nữ', '2000-04-07'),
(3, 'Ayaya', 'Ayaya@gmail.com', './view/images/user/user3', '12345678', 'Ina', '6170195144', 'nữ', '2003-09-28'),
(4, 'Ahuzak', 'Ahuzak@gmail.com', './view/images/user/user4', '12345678', 'Ina', '3936410514', 'nam', '2002-08-29'),
(5, 'Koju Ara', 'KojuAra@gmail.com', './view/images/user/user5', '12345678', 'Ina', '7286437349', 'nữ', '2001-07-14'),
(6, 'Ei', 'EiKute@gmail.com', './view/images/user/user6', '12345678', 'Ina', '8489182330', 'nữ', '2001-06-26'),
(7, 'Mae Yiko', 'MaeYiko@gmail.com', './view/images/user/user7', '12345678', 'Ina', '8278597158', 'nữ', '2002-06-27'),
(8, 'Leyan', 'Leyan@gmail.com', './view/images/user/user8', '12345678', 'Liyu', '7262452694', 'nữ', '2000-04-20'),
(9, 'Shen Hee', 'Shenhee@gmail.com', './view/images/user/user9', '12345678', 'Liyu', '7262452694', 'nữ', '1999-03-10'),
(10, 'Ayhed', 'Ayhed@gmail.com', './view/images/user/user2', '12345678', 'Sume', '5326790976', 'nữ', '2000-04-07'),
(11, 'Ayaya', 'Ayaya@gmail.com', './view/images/user/user3', '12345678', 'Ina', '7801506346', 'nữ', '2003-09-28'),
(12, 'Ahuzak', 'Ahuzak@gmail.com', './view/images/user/user4', '12345678', 'Ina', '9160198312', 'nam', '2002-08-29'),
(13, 'Koju Ara', 'KojuAra@gmail.com', './view/images/user/user5', '12345678', 'Ina', '8225803730', 'nữ', '2001-07-14'),
(14, 'Ei', 'EiKute@gmail.com', './view/images/user/user6', '12345678', 'Ina', '5452257074', 'nữ', '2001-06-26'),
(15, 'Mae Yiko', 'MaeYiko@gmail.com', './view/images/user/user7', '12345678', 'Ina', '3457223567', 'nữ', '2002-06-27'),
(16, 'Leyan', 'Leyan@gmail.com', './view/images/user/user8', '12345678', 'Liyu', '4486777172', 'nữ', '2000-04-20'),
(17, 'Shen Hee', 'Shenhee@gmail.com', './view/images/user/user9', '12345678', 'Liyu', '7068411795', 'nữ', '1999-03-10'),
(18, 'Tien Nguyen Phuoc Bao', 'tien2@nguyen.com', 'view/images/user/user18', '12345678', 'Hà Nội', '745634527', 'Nam', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cmnd` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birthday` date DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `cmnd`, `gender`, `phone`, `birthday`, `image`, `email`, `password`, `is_admin`, `address`) VALUES
(1, 'Nguyễn Văn A', '123445675678', 'Nam', '0901234567', '1990-01-01', 'img1.jpg', 'a@gmail.com', '123456', 0, 'phường Linh Trung, thành phố Thủ Đức, TP. Hồ Chí Minh'),
(2, 'Trần Thị B', '123445675679', 'Nữ', '0901234568', '1991-02-02', 'img2.jpg', 'b@gmail.com', '123456', 0, 'phường 1, quận 1, TP. Hồ Chí Minh'),
(3, 'Nguyễn Thị C', '123445675680', 'Nữ', '0901234569', '1992-03-03', 'img3.jpg', 'c@gmail.com', '123456', 0, 'phường An Phú, quận 2, TP. Hồ Chí Minh'),
(4, 'Phan Thị D', '123445675681', 'Nữ', '0901234570', '1993-04-04', 'img4.jpg', 'd@gmail.com', '123456', 0, 'phường Thảo Điền, quận 2, TP. Hồ Chí Minh'),
(5, 'Vũ Thị E', '123445675682', 'Nữ', '0901234571', '1994-05-05', 'img5.jpg', 'e@gmail.com', '123456', 0, 'phường Tân Phú, quận 7, TP. Hồ Chí Minh'),
(6, 'Nguyễn Thị F', '123445675683', 'Nữ', '0901234572', '1995-06-06', 'img6.jpg', 'f@gmail.com', '123456', 0, 'phường Thủ Thiêm, quận 2, TP. Hồ Chí Minh'),
(7, 'Lê Thị G', '123445675684', 'Nữ', '0901234573', '1996-07-07', 'img7.jpg', 'g@gmail.com', '123456', 0, 'phường Hiệp Phú, quận 9, TP. Hồ Chí Minh'),
(8, 'Trần Thị H', '123445675685', 'Nữ', '0901234574', '1997-08-08', 'img8.jpg', 'h@gmail.com', '123456', 0, 'phường Phú Mỹ Hưng, quận 7, TP. Hồ Chí Minh'),
(9, 'Đỗ Thị I', '123445675686', 'Nữ', '0901234575', '1998-09-09', 'img9.jpg', 'i@gmail.com', '123456', 0, 'phường Tân Bình, quận Tân Phú, TP. Hồ Chí Minh'),
(10, 'Nguyễn Văn J', '123445675688', 'Nam', '0901234576', '1999-10-10', 'img10.jpg', 'j@gmail.com', '123456', 0, 'phường Cầu Kho, quận 1, TP. Hồ Chí Minh'),
(11, 'Lê Thị K', '123445675689', 'Nữ', '0901234577', '2000-11-11', 'img11.jpg', 'k@gmail.com', '123456', 0, 'phường Thảo Điền, quận 2, TP. Hồ Chí Minh'),
(12, 'Vũ Thị L', '123445675690', 'Nữ', '0901234578', '2001-12-12', 'img12.jpg', 'l@gmail.com', '123456', 0, 'phường Bến Thành, quận 1, TP. Hồ Chí Minh'),
(13, 'Trần Văn M', '123445675691', 'Nam', '0901234579', '2002-01-01', 'img13.jpg', 'm@gmail.com', '123456', 0, 'phường Thảo Điền, quận 2, TP. Hồ Chí Minh'),
(14, 'Lê Văn N', '123445675692', 'Nam', '0901234580', '2003-02-02', 'img14.jpg', 'n@gmail.com', '123456', 0, 'phường Tân Bình, quận Tân Phú, TP. Hồ Chí Minh'),
(15, 'Trần Thị O', '123445675693', 'Nữ', '0901234581', '2004-03-03', 'img15.jpg', 'o@gmail.com', '123456', 0, 'phường 7, quận 3, TP. Hồ Chí Minh'),
(16, 'Nguyễn Văn P', '123445675694', 'Nam', '0901234582', '2005-04-04', 'img16.jpg', 'p@gmail.com', '123456', 0, 'phường Phú Mỹ, quận 7, TP. Hồ Chí Minh'),
(17, 'Phạm Thị Q', '123445675695', 'Nữ', '0901234583', '2006-05-05', 'img17.jpg', 'q@gmail.com', '123456', 0, 'phường Hòa Xuân, quận Cẩm Lệ, thành phố Đà Nẵng'),
(18, 'Vũ Văn R', '123445675696', 'Nam', '0901234584', '2007-06-06', 'img18.jpg', 'r@gmail.com', '123456', 0, 'phường Cẩm Nam, thành phố Hội An, tỉnh Quảng Nam'),
(19, 'admin', '12345678', 'Nam', '00008888', '0000-00-00', '', '', 'admin123', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `stars` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `product_id`, `customer_id`, `stars`, `comment`) VALUES
(1463, 209, 5, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1464, 306, 8, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1465, 207, 16, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1466, 107, 2, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1467, 305, 3, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1468, 102, 14, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1469, 203, 14, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1470, 107, 10, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1471, 303, 14, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1472, 102, 8, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1473, 111, 15, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1474, 306, 9, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1475, 109, 15, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1476, 109, 10, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1477, 111, 4, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1478, 206, 9, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1479, 203, 3, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1480, 209, 2, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1481, 111, 11, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1482, 112, 8, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1483, 201, 8, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1484, 202, 14, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1485, 112, 13, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1486, 309, 9, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1487, 302, 17, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1488, 306, 14, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1489, 304, 12, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1490, 205, 17, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1491, 305, 8, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1492, 102, 10, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1493, 102, 7, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1494, 207, 17, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1495, 110, 10, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1496, 201, 9, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1497, 102, 9, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1498, 309, 15, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1499, 208, 13, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1500, 304, 17, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1501, 111, 3, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1502, 306, 11, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1503, 207, 8, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1504, 208, 3, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1505, 306, 10, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1506, 106, 10, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1507, 106, 17, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1508, 205, 11, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1509, 110, 15, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1510, 303, 16, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1511, 304, 15, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1512, 108, 2, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1513, 301, 9, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1514, 109, 16, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1515, 110, 7, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1516, 307, 12, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1517, 111, 14, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1518, 204, 10, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1519, 112, 17, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1520, 309, 3, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1521, 301, 15, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1522, 208, 15, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1523, 209, 15, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1524, 309, 7, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1525, 207, 10, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1526, 107, 11, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1527, 307, 6, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1528, 106, 7, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1529, 308, 5, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1530, 109, 3, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1531, 209, 3, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1532, 112, 11, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1533, 205, 16, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1534, 101, 13, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1535, 101, 15, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1536, 206, 2, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1537, 103, 15, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1538, 107, 8, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1539, 110, 6, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1540, 206, 13, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1541, 104, 5, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1542, 208, 5, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1543, 112, 3, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1544, 103, 17, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1545, 109, 2, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1546, 203, 15, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1547, 104, 3, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1548, 202, 10, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1549, 301, 10, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1550, 103, 14, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1551, 105, 11, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1552, 201, 7, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1553, 308, 3, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1554, 305, 6, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1555, 306, 17, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1556, 202, 9, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1557, 303, 10, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1558, 205, 15, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1559, 105, 4, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1560, 207, 6, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1561, 209, 4, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1562, 303, 12, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1563, 101, 3, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1564, 103, 5, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1565, 209, 8, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1566, 309, 10, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1567, 201, 11, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1568, 109, 14, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1569, 205, 5, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1570, 306, 15, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1571, 104, 8, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1572, 307, 15, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1573, 203, 9, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1574, 203, 2, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1575, 109, 5, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1576, 202, 17, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1577, 102, 6, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1578, 303, 5, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1579, 302, 8, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1580, 105, 5, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1581, 106, 11, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1582, 106, 8, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1583, 307, 9, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1584, 204, 7, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1585, 110, 8, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1586, 106, 16, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1587, 201, 12, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1588, 103, 11, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1589, 203, 12, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1590, 112, 15, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1591, 111, 12, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1592, 110, 14, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1593, 206, 7, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1594, 303, 3, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1595, 304, 8, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1596, 209, 17, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1597, 106, 5, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1598, 201, 10, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1599, 202, 3, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1600, 206, 12, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1601, 109, 4, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1602, 206, 16, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1603, 112, 2, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1604, 204, 8, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1605, 103, 13, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1606, 303, 4, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1607, 102, 3, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1608, 104, 7, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1609, 207, 4, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1610, 112, 12, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1611, 301, 8, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1612, 209, 10, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1613, 105, 17, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1614, 205, 13, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1615, 103, 8, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1616, 101, 16, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1617, 109, 17, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1618, 307, 3, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1619, 206, 14, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1620, 309, 8, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1621, 107, 13, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1622, 111, 13, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1623, 304, 13, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1624, 305, 14, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1625, 107, 12, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1626, 105, 10, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1627, 108, 9, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1628, 202, 5, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1629, 106, 9, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1630, 203, 17, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1631, 112, 10, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1632, 301, 3, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1633, 102, 13, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1634, 309, 12, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1635, 207, 11, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1636, 204, 13, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1637, 301, 17, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1638, 301, 6, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1639, 102, 15, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1640, 303, 15, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1641, 303, 7, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1642, 102, 17, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1643, 110, 5, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1644, 303, 13, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1645, 108, 5, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1646, 105, 15, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1647, 205, 4, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1648, 205, 6, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1649, 209, 13, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1650, 101, 17, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1651, 304, 4, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1652, 204, 17, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1653, 306, 6, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1654, 208, 9, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1655, 308, 12, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1656, 206, 3, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1657, 309, 11, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1658, 106, 15, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1659, 101, 2, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1660, 304, 16, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1661, 205, 2, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1662, 308, 2, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1663, 106, 3, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1664, 104, 4, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1665, 203, 8, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1666, 306, 2, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1667, 102, 11, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1668, 104, 14, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1669, 109, 11, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1670, 304, 9, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1671, 108, 10, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1672, 205, 10, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1673, 203, 4, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1674, 301, 5, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1675, 112, 14, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1676, 207, 9, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1677, 203, 6, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1678, 304, 6, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1679, 309, 17, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1680, 106, 2, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1681, 105, 13, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1682, 208, 11, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1683, 304, 7, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1684, 110, 2, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1685, 204, 9, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1686, 107, 6, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1687, 306, 7, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1688, 306, 13, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1689, 206, 4, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1690, 208, 4, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1691, 106, 4, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1692, 204, 3, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1693, 208, 6, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1694, 201, 6, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1695, 102, 5, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1696, 205, 7, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1697, 112, 6, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1698, 103, 3, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1699, 309, 14, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1700, 204, 12, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1701, 206, 15, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1702, 202, 6, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1703, 305, 17, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1704, 104, 10, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1705, 205, 8, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1706, 308, 4, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1707, 309, 4, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1708, 306, 3, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1709, 108, 14, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1710, 201, 13, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1711, 301, 4, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1712, 105, 12, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1713, 204, 4, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1714, 203, 13, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1715, 301, 11, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1716, 101, 12, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1717, 302, 10, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1718, 203, 7, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1719, 104, 12, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1720, 201, 14, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1721, 201, 17, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1722, 302, 4, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1723, 306, 4, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1724, 105, 7, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1725, 303, 11, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1726, 303, 17, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1727, 207, 7, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1728, 108, 11, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1729, 204, 15, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1730, 110, 11, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1731, 307, 8, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1732, 308, 8, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1733, 110, 12, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1734, 208, 14, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1735, 102, 4, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1736, 103, 7, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1737, 304, 3, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1738, 203, 5, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1739, 108, 16, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1740, 103, 10, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1741, 307, 16, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1742, 305, 11, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1743, 208, 8, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1744, 101, 10, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1745, 305, 9, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1746, 209, 6, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1747, 202, 11, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1748, 208, 2, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1749, 108, 15, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1750, 303, 6, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1751, 110, 16, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1752, 204, 16, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1753, 308, 17, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1754, 207, 13, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1755, 202, 12, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1756, 111, 5, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1757, 302, 5, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1758, 204, 6, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1759, 203, 16, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1760, 101, 5, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1761, 308, 15, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1762, 304, 5, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1763, 309, 6, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1764, 207, 15, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1765, 202, 2, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1766, 303, 8, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1767, 101, 14, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1768, 206, 6, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1769, 207, 12, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1770, 206, 10, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1771, 104, 15, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1772, 108, 8, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1773, 203, 11, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1774, 106, 12, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1775, 111, 9, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1776, 104, 17, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1777, 307, 10, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1778, 207, 14, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1779, 201, 5, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1780, 302, 16, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1781, 208, 7, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1782, 112, 4, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1783, 208, 17, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1784, 107, 5, 3, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1785, 103, 2, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1786, 105, 6, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1787, 108, 12, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1788, 207, 3, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1789, 111, 17, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1790, 201, 2, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1791, 208, 10, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1792, 111, 2, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1793, 202, 4, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1794, 108, 17, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1795, 307, 11, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1796, 202, 16, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1797, 104, 11, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1798, 111, 8, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1799, 302, 3, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1800, 306, 5, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1801, 104, 9, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1802, 101, 8, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1803, 109, 7, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1804, 208, 16, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1805, 107, 16, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1806, 304, 14, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1807, 301, 13, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1808, 109, 6, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1809, 202, 13, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1810, 308, 9, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1811, 306, 16, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1812, 205, 3, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1813, 106, 13, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1814, 109, 12, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1815, 103, 12, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1816, 302, 14, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1817, 107, 17, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1818, 207, 2, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1819, 108, 6, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1820, 302, 12, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1821, 301, 7, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1822, 208, 12, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1823, 308, 7, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1824, 209, 7, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1825, 209, 11, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1826, 204, 5, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1827, 302, 7, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1828, 111, 6, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1829, 307, 4, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1830, 101, 6, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1831, 201, 3, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1832, 204, 14, 3, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1833, 307, 13, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1834, 206, 5, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1835, 205, 12, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1836, 102, 16, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1837, 302, 15, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1838, 108, 7, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1839, 104, 2, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1840, 110, 17, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1841, 307, 7, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1842, 107, 9, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1843, 307, 5, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1844, 301, 2, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1845, 201, 15, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1846, 105, 14, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1847, 209, 16, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1848, 308, 16, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1849, 205, 9, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1850, 302, 2, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1851, 101, 4, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1852, 103, 4, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1853, 105, 8, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1854, 204, 11, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1855, 308, 13, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1856, 209, 14, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1857, 305, 12, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1858, 109, 8, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1859, 105, 9, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1860, 107, 4, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1861, 105, 2, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1862, 304, 2, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1863, 111, 10, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1864, 207, 5, 5, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1865, 112, 9, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1866, 105, 3, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1867, 111, 16, 5, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1868, 110, 4, 5, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1869, 206, 11, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1870, 306, 12, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1871, 301, 16, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.');
INSERT INTO `feedback` (`id`, `product_id`, `customer_id`, `stars`, `comment`) VALUES
(1872, 302, 11, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1873, 101, 7, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1874, 107, 14, 4, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1875, 103, 6, 4, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1876, 307, 17, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1877, 111, 7, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1878, 109, 13, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1879, 307, 2, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1880, 110, 9, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1881, 202, 8, 3, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1882, 110, 13, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1883, 103, 16, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1884, 202, 7, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1885, 305, 2, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1886, 112, 16, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1887, 105, 16, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1888, 108, 4, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1889, 209, 12, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1890, 301, 14, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1891, 307, 14, 4, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1892, 101, 9, 4, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1893, 112, 5, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1894, 104, 16, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1895, 110, 3, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1896, 308, 14, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1897, 303, 9, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1898, 108, 3, 3, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1899, 308, 11, 3, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1900, 209, 9, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1901, 303, 2, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1902, 308, 6, 5, 'Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.'),
(1903, 304, 10, 3, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1904, 112, 7, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1905, 204, 2, 4, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1906, 302, 13, 4, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1907, 107, 3, 5, 'Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.'),
(1908, 109, 9, 3, 'Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.'),
(1909, 103, 9, 5, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1910, 201, 16, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1911, 309, 2, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1912, 305, 7, 4, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1913, 104, 6, 3, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1914, 305, 15, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1915, 104, 13, 5, 'Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤'),
(1916, 205, 14, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1917, 305, 13, 5, 'Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.'),
(1918, 203, 10, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1919, 201, 4, 4, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1921, 106, 6, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1922, 304, 11, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1923, 305, 10, 3, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1924, 302, 9, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1925, 206, 8, 4, 'Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.'),
(1926, 301, 12, 5, 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.'),
(1927, 202, 15, 4, 'Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen '),
(1928, 206, 17, 5, 'Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.'),
(1929, 305, 16, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like'),
(1930, 305, 4, 3, 'So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like');

--
-- Bẫy `feedback`
--
DELIMITER $$
CREATE TRIGGER `update_product_rating` AFTER INSERT ON `feedback` FOR EACH ROW BEGIN
  -- Cập nhật số sao trung bình của sản phẩm trong bảng products
  UPDATE `products`
  SET `rating` = (SELECT AVG(`stars`) FROM `feedback` WHERE `product_id` = NEW.`product_id`)
  WHERE `id` = NEW.`product_id`;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_product_rating_on_update` AFTER UPDATE ON `feedback` FOR EACH ROW BEGIN
  UPDATE `products`
  SET `rating` = (SELECT AVG(`stars`) FROM `feedback` WHERE `product_id` = NEW.`product_id`)
  WHERE `id` = NEW.`product_id`;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `thumnail` text NOT NULL DEFAULT 'view/image/news/logo.jpg',
  `title` text NOT NULL,
  `tag` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `thumnail`, `title`, `tag`, `content`) VALUES
(3, 'view/images/news/dessert-1.jpg', 'Chè trái cây chua ngọt cho mùa hè thanh mát', 3, '<p><strong>Ch&egrave; tr&aacute;i c&acirc;y chua ngọt</strong><br />\n<br />\nM&oacute;n ch&egrave; tr&aacute;i c&acirc;y chua ngọt c&oacute; đủ vị chua nhẹ của dứa ch&iacute;n, ngọt đậm của xo&agrave;i, vị t&aacute;o gi&ograve;n gi&ograve;n, thanh long đỏ vừa đẹp vừa m&aacute;t v&agrave; thơm m&ugrave;i chanh d&acirc;y sẽ rất hấp dẫn v&agrave; k&iacute;ch th&iacute;ch vị gi&aacute;c.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"{keywords}\" src=\"https://imgs.vietnamnet.vn/Images/2017/10/12/15/20171012152957-che-trai-cay-chua-ngot.jpg\" /></p>\n\n<p><br />\nNguy&ecirc;n liệu:<br />\n<br />\n- 1 tr&aacute;i t&aacute;o.<br />\n<br />\n- 1 tr&aacute;i xo&agrave;i.<br />\n<br />\n- 1/2 tr&aacute;i thanh long.<br />\n<br />\n- 1/2 tr&aacute;i thơm.<br />\n<br />\n- 20 tr&aacute;i chanh d&acirc;y.<br />\n<br />\n- 100g đường c&aacute;t trắng.<br />\n<br />\nC&aacute;ch thực hiện:<br />\n<br />\nT&aacute;o, xo&agrave;i, thơm, thanh long gọt vỏ, cắt hạt lựu.<br />\n<br />\nTrộn nước chanh d&acirc;y với nước s&ocirc;i để nguội v&agrave; đường th&agrave;nh hỗn hợp nước chanh d&acirc;y chua ngọt. Sau đ&oacute; đổ hỗn hợp vừa pha v&agrave;o c&aacute;c loại tr&aacute;i c&acirc;y đ&atilde; trộn ch&uacute;ng ta c&oacute; ngay m&oacute;n ch&egrave; hoa quả thơm ngon đẹp mắt rồi.<br />\n<br />\n<strong>Ch&egrave; tr&aacute;i c&acirc;y kiểu Đ&agrave;i Loan</strong><br />\n<br />\nCh&egrave; tr&aacute;i c&acirc;y kiểu Đ&agrave;i Loan l&agrave; m&oacute;n ch&egrave; lạ đang được giới trẻ săn đ&oacute;n rất nhiều. Ch&egrave; tr&aacute;i c&acirc;y kiểu Đ&agrave;i Loan mang đặc trưng ri&ecirc;ng bởi hương vị dẻo thơm của khoai c&ugrave;ng sữa dừa b&eacute;o ngậy.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"{keywords}\" src=\"https://imgs.vietnamnet.vn/Images/2017/10/12/15/20171012153035-che-trai-cay-dai-loan.jpg\" /></p>\n\n<p><br />\nNguy&ecirc;n liệu:<br />\n<br />\n- 150ml nước cốt dừa.<br />\n<br />\n- 40g đường c&aacute;t trắng.<br />\n<br />\n- 15ml sữa đặc.<br />\n<br />\n- 220g bột năng.<br />\n<br />\n- 1/2 tr&aacute;i dưa hấu.<br />\n<br />\n- 2 tr&aacute;i xo&agrave;i ch&iacute;n.<br />\n<br />\n- 1/2 tr&aacute;i dưa gang.<br />\n<br />\n- 200g khoai m&ocirc;n.<br />\n<br />\n- 200g khoai lang v&agrave;ng.<br />\n<br />\n- 100g khoai lang t&iacute;m.<br />\n<br />\nC&aacute;ch thực hiện:<br />\n<br />\nSơ chế bằng c&aacute;ch gọt vỏ khoai lang, khoai m&ocirc;n rồi cho v&agrave;o nồi hấp, sau đ&oacute; nghiền nhuyễn ch&uacute;ng. Sau đ&oacute; cho bột năng, đường c&aacute;t v&agrave; nước v&agrave;o nh&agrave;o cho đến khi th&agrave;nh một khối dẻo mịn.<br />\n<br />\nLăn bột th&agrave;nh những đoạn d&agrave;i rồi cắt th&agrave;nh những kh&uacute;c vừa. Sau đ&oacute;, luộc vi&ecirc;n khoai đến khi chuyển m&agrave;u trong v&agrave; nổi l&ecirc;n mặt nước th&igrave; vớt ra t&ocirc; đựng nước lọc.<br />\n<br />\nCho đường, nước lọc, sữa đặc, nước cốt dừa v&agrave;o t&ocirc; v&agrave; khuấy đều.<br />\n<br />\nDưa hấu, dưa gang, xo&agrave;i cắt hạt lựu sau đ&oacute; tr&igrave;nh b&agrave;y ra b&aacute;t c&ugrave;ng với vi&ecirc;n khoai dẻo v&agrave; đ&aacute; dăm. Cuối c&ugrave;ng, rưới hỗn hợp sữa dừa l&ecirc;n nữa l&agrave; ch&uacute;ng ta đ&atilde; ho&agrave;n th&agrave;nh m&oacute;n ch&egrave; tr&aacute;i c&acirc;y Đ&agrave;i Loan rồi đ&oacute;.<br />\n<br />\n<strong>Ch&egrave; thạch tr&aacute;i c&acirc;y pha l&ecirc;</strong><br />\n<br />\nVới sự kết hợp ho&agrave;n hảo giữa ch&egrave; bơ thơm mềm b&eacute;o với thạch tr&aacute;i c&acirc;y dẻo, lạnh đ&uacute;ng l&agrave; một sự lựa chọn tuyệt vời cho cả gia đ&igrave;nh.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"{keywords}\" src=\"https://imgs.vietnamnet.vn/Images/2017/10/12/15/20171012153056-che-thach-trai-cay-pha-le.jpg\" /></p>\n\n<p><br />\nNguy&ecirc;n liệu:<br />\n<br />\n- 200g bơ.<br />\n<br />\n- 150g nước cốt dừa.<br />\n<br />\n- 100ml sữa tươi.<br />\n<br />\n- 90g sữa đặc.<br />\n<br />\n- 1/4 muỗng vỏ chanh.<br />\n<br />\n- 4 l&aacute; gelatin.<br />\n<br />\n- 5 muỗng canh đường c&aacute;t trắng.<br />\n<br />\n- 1/2 muỗng bột rau c&acirc;u.<br />\n<br />\nC&aacute;ch thực hiện:<br />\n<br />\nL&agrave;m ch&egrave; bơ: Cắt đ&ocirc;i tr&aacute;i bơ, nạo lấy thịt cho v&agrave;o m&aacute;y xay nhuyễn.<br />\nNg&acirc;m gelatin với nước, vớt ra. Đun sữa tươi, nước cốt dừa, sữa đặc tr&ecirc;n bếp, cho gelatin v&agrave;o khuấy tan.<br />\n<br />\nBắc xuống cho bơ xay v&agrave;o, b&agrave;o &iacute;t vỏ chanh cho thơm v&agrave;o. Trộn đều v&agrave; cho ra khu&ocirc;n, giữ lạnh đến khi đ&ocirc;ng.<br />\n<br />\nL&agrave;m thạch pha l&ecirc;: Ho&agrave; bột rau c&acirc;u v&agrave; đường, đun nước s&ocirc;i. Từ từ cho bột rau c&acirc;u, đường v&agrave;o khuấy li&ecirc;n tục. Bắc nồi xuống để nguội. Cắt nhỏ c&aacute;c loại tr&aacute;i c&acirc;y y&ecirc;u th&iacute;ch v&agrave; tr&aacute;i c&acirc;y ra khu&ocirc;n, đổ thạch đ&atilde; nấu v&agrave;o, sau đ&oacute; đậy nắp khu&ocirc;n lại chờ đ&ocirc;ng.&nbsp;<br />\n<br />\nL&agrave;m nước dừa để chan: Đun nước cốt dừa v&agrave; sữa đặc tr&ecirc;n bếp với lửa nhỏ đến khi s&ocirc;i lăn tăn. Bắc xuống để nguội.<br />\n<br />\nLấy ch&egrave; bơ ra khỏi khu&ocirc;n, đặt vi&ecirc;n thạch th&ecirc;m nước đ&aacute; v&agrave; chan nước dừa l&agrave; bạn đ&atilde; ho&agrave;n th&agrave;nh m&oacute;n tr&aacute;ng miệng n&agrave;y.<br />\n<br />\nĐừng qu&ecirc;n những loại&nbsp;<a href=\"http://vietnamnet.vn/vn/doi-song/am-thuc/\">ch&egrave; tr&aacute;i c&acirc;y</a>&nbsp;trong của thực đơn ăn vặt gia đ&igrave;nh m&igrave;nh nh&eacute;, chắc chắn đ&acirc;y sẽ l&agrave;&nbsp;<a href=\"http://vietnamnet.vn/mon-ngon-moi-ngay-tag82712.html\" target=\"_blank\">m&oacute;n ngon</a>&nbsp;chinh phục bất cứ ai trong gia đ&igrave;nh bạn.</p>\n'),
(5, 'view/images/news/toi-nay-an-gi-167236732141564694536.jpg', 'Công thức cá hồi sốt tỏi mật ong nhanh gọn, dễ làm', 1, '<h2><strong>Nước sốt ch&iacute;nh l&agrave; linh hồn của m&oacute;n ăn n&agrave;y khiến cho thịt c&aacute; ngon ngọt v&agrave; c&oacute; bề ngo&agrave;i v&ocirc; c&ugrave;ng đẹp mắt.</strong></h2>\r\n\r\n<p><strong>Chuẩn bị:</strong></p>\r\n\r\n<p><em>Nguy&ecirc;n liệu sơ chế c&aacute; hồi</em></p>\r\n\r\n<p>- 2 phi l&ecirc; c&aacute; hồi đ&atilde; bỏ da</p>\r\n\r\n<p>- Dầu &ocirc; liu</p>\r\n\r\n<p>- Muối v&agrave; ti&ecirc;u</p>\r\n\r\n<p><em>Nước sốt</em></p>\r\n\r\n<p>- 4 muỗng canh mật ong</p>\r\n\r\n<p>- 2 muỗng canh nước tương</p>\r\n\r\n<p>- 1 muỗng canh giấm trắng</p>\r\n\r\n<p>- 1 t&eacute;p tỏi lớn băm nhuyễn</p>\r\n\r\n<p><em>Trang tr&iacute; m&oacute;n ăn</em></p>\r\n\r\n<p>- Hạt m&egrave;</p>\r\n\r\n<p>- H&agrave;nh l&aacute; th&aacute;i nhỏ</p>\r\n\r\n<p><strong>C&aacute;ch l&agrave;m:</strong></p>\r\n\r\n<p>Bước 1: D&uacute;ng khăn giấy thấm kh&ocirc; c&aacute; hồi v&agrave; rắc muối ti&ecirc;u.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Công thức cá hồi sốt tỏi mật ong nhanh gọn, dễ làm - 1\" src=\"https://cdn.24h.com.vn/upload/3-2022/images/2022-09-29/2-1664416418-589-width721height508.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bước 2: Đ&aacute;nh đều c&aacute;c nguy&ecirc;n liệu đ&atilde; chuẩn bị để l&agrave;m nước sốt trong 1 c&aacute;i b&aacute;t nhỏ.</p>\r\n\r\n<p>Bước 3: Đổ dầu v&agrave;o chảo chống d&iacute;nh v&agrave; đun ở lửa vừa. Cho c&aacute; hồi v&agrave;o chảo v&agrave; chi&ecirc;n 3-4 ph&uacute;t sau đ&oacute; lật mặt kia sao cho 2 mặt v&agrave;ng đều.</p>\r\n\r\n<p><img alt=\"Công thức cá hồi sốt tỏi mật ong nhanh gọn, dễ làm - 2\" src=\"https://cdn.24h.com.vn/upload/3-2022/images/2022-09-29/1-1664416418-80-width716height511.jpg\" /></p>\r\n\r\n<p>Bước 4: Đổ nước sốt l&ecirc;n c&aacute; hồi, nấu trong 1 ph&uacute;t đến khi nước sốt đặc lại.</p>\r\n\r\n<p>Bước 5: Cho ra đĩa v&agrave; thưởng thức.</p>\r\n'),
(6, 'view/images/news/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.webp', '4 món ngon không thể bỏ qua trong mùa xuân', 2, '<p>Thịt luộc chấm mắm rươi<br />\r\n<br />\r\nMắm rươi l&agrave; một trong những loại mắm ngon nổi tiếng của người d&acirc;n v&ugrave;ng ven biển Việt Nam v&agrave; cả thị d&acirc;n H&agrave; Nội một thời. V&agrave;o th&aacute;ng 10 m&ugrave;a rươi, rươi sau khi mua về, l&agrave;m sạch, được đem muối để trở th&agrave;nh mắm. Phải ng&acirc;m ủ đủ 3 th&aacute;ng r&ograve;ng mắm mới ngấu, mới c&oacute; thể sử dụng l&agrave;m nước chấm cho c&aacute;c m&oacute;n ăn như gi&ograve; lụa, b&ecirc; thui, thịt luộc&hellip;<br />\r\n<br />\r\nV&agrave;o những ng&agrave;y đầu xu&acirc;n, kh&ocirc;ng g&igrave; tươi non bằng c&aacute;c loại rau tr&aacute;i. Trong vườn, tr&aacute;i qu&yacute;t vẫn c&ograve;n tươi, khế đương quả, dứa, chuối xanh đầy buồng, rau x&agrave; l&aacute;ch mơn mởn những b&uacute;p non, rau m&ugrave;i, rau răm, rau h&uacute;ng theo mưa xu&acirc;n m&agrave; trổ m&atilde; mỡ m&agrave;ng. Ở căn bếp, mắm rươi đ&atilde; ch&iacute;n thơm lừng. Kết hợp ch&uacute;ng lại với nhau, ăn k&egrave;m thịt ba chỉ luộc th&igrave; quả thật &ldquo;ngon kh&ocirc;ng g&igrave; bằng&rdquo;.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 1\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/thit-luoc-cham-mam-ruoi-(1)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /><br />\r\n<br />\r\n<img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 2\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/thit-luoc-cham-mam-ruoi-(2)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /></p>\r\n\r\n<p><br />\r\nXếp miếng thịt ba chỉ th&aacute;i mỏng v&agrave;o l&aacute; x&agrave; l&aacute;ch, đặt l&ecirc;n tr&ecirc;n miếng b&aacute;nh đa, th&ecirc;m l&aacute;t gừng, v&agrave;i miếng khế chua, dứa, chuối xanh, th&ecirc;m cọng rau m&ugrave;i, rau răm, rau h&uacute;ng, v&agrave;i sợi vỏ qu&yacute;t nhỏ, h&agrave;nh t&iacute;m th&aacute;i mỏng v&agrave; v&agrave;i sợi b&uacute;n v&agrave;o rồi cuộn lại, chấm với mắm rươi đ&atilde; được chưng n&oacute;ng c&ugrave;ng t&oacute;p mỡ, gừng non th&aacute;i chỉ, lạc rang đập dập, ớt tươi, hạt ti&ecirc;u kh&ocirc; v&agrave; ch&uacute;t tỏi băm c&oacute; thể ngay lập tức khiến người ta rơi v&agrave;o trạng th&aacute;i đ&ecirc; m&ecirc; kh&oacute; cưỡng.<br />\r\n<br />\r\nPhảng phất đ&acirc;u đ&oacute; hương vị đồng qu&ecirc; với m&ugrave;i l&aacute; cỏ thơm ng&aacute;t h&ograve;a quyện, với vị chua ch&aacute;t ngọt b&ugrave;i kh&oacute; lẫn, với cả ch&uacute;t hương xu&acirc;n được g&oacute;i gh&eacute;m lại.<br />\r\n<br />\r\nB&uacute;n thang<br />\r\n<br />\r\nBởi nguy&ecirc;n gốc b&uacute;n thang được chế biến từ những m&oacute;n ăn thừa ng&agrave;y Tết, được ăn để giải ngấy sau những ng&agrave;y gi&ograve; chả, thịt c&aacute; &ecirc; chề n&ecirc;n c&oacute; lẽ n&ecirc;n gọi b&uacute;n thang l&agrave; &ldquo;m&oacute;n ăn ng&agrave;y xu&acirc;n&rdquo; mới đ&uacute;ng.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 3\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/IMG_4820-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /><br />\r\n<br />\r\n<img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 4\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/IMG_4827-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /></p>\r\n\r\n<p><br />\r\nCũng bởi v&agrave;o ng&agrave;y đầu xu&acirc;n, mọi loại rau, gia vị đều rất tươi ngon. Cần nước trắng phau, ngọt thơm, t&ocirc;m hẹ lột vỏ đỏ au, củ c&aacute;i muối gi&ograve;n tan, gi&ograve; lụa thơm dẻo&hellip; c&ugrave;ng h&ograve;a quyện sắc m&agrave;u, l&agrave;m n&ecirc;n m&ugrave;i thơm vừa thanh tao, vừa hấp dẫn của nồi nước d&ugrave;ng. M&agrave;u sắc h&agrave;i h&ograve;a, hương vị độc đ&aacute;o kh&ocirc;ng những k&iacute;ch th&iacute;ch dịch vị thực kh&aacute;ch m&agrave; c&ograve;n khiến cho họ ho&agrave;n to&agrave;n h&agrave;i l&ograve;ng v&agrave; m&atilde;n nh&atilde;n.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 5\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/bungthang1-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /></p>\r\n\r\n<p><br />\r\nV&agrave;o những ng&agrave;y thường trong năm, c&oacute; thể với nhiều thực kh&aacute;ch, thưởng thức b&uacute;n thang hơi lạt miệng, nhưng những ng&agrave;y đầu xu&acirc;n như thế n&agrave;y, b&uacute;n thang quả thực l&agrave; sự lựa chọn số một. B&uacute;n thang ngon bởi c&aacute;i vị nhẹ nh&agrave;ng, ngọt đậm đ&agrave; m&agrave; kh&ocirc;ng hề ng&aacute;n ngấy, thanh tho&aacute;t như những l&agrave;n gi&oacute; xu&acirc;n vậy.<br />\r\n<br />\r\nB&aacute;nh tr&ocirc;i - b&aacute;nh chay<br />\r\n<br />\r\nB&aacute;nh tr&ocirc;i - b&aacute;nh chay l&agrave; những m&oacute;n ngon c&oacute; xuất xứ từ phương Bắc nhưng lại l&agrave; hai loại b&aacute;nh cổ truyền nổi tiếng của Việt Nam, phổ biến v&agrave; được l&agrave;m nhiều nhất v&agrave;o ng&agrave;y m&ugrave;ng 3 th&aacute;ng 3 &acirc;m lịch h&agrave;ng năm, c&ograve;n được gọi l&agrave; Tết H&agrave;n thực hoặc &ldquo;ng&agrave;y b&aacute;nh tr&ocirc;i b&aacute;nh chay&rdquo;.<br />\r\n<br />\r\nC&aacute;ch l&agrave;m hai loại b&aacute;nh n&agrave;y rất đơn giản. Nguy&ecirc;n liệu cần chuẩn bị chỉ l&agrave; bột gạo nếp, đường mật, vừng, dừa, nước thơm v&agrave; nh&acirc;n đậu xanh, c&oacute; thể th&ecirc;m ch&uacute;t hoa bưởi t&ugrave;y theo sở th&iacute;ch v&agrave; th&oacute;i quen của từng gia đ&igrave;nh.&nbsp;&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 6\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/banh-troi-banh-chay-(1)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /><br />\r\n<br />\r\n<img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 7\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/banh-troi-banh-chay-(2)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /><br />\r\n<br />\r\n<img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 8\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/banh-troi-banh-chay-(3)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /></p>\r\n\r\n<p><br />\r\nSau Tết, người ta bắt đầu chia tay những thức ăn lắm mỡ, nhiều dầu, nhiều đạm để đến với những m&oacute;n ăn thật nhẹ nh&agrave;ng, thanh m&aacute;t, v&igrave; thế b&aacute;nh tr&ocirc;i, b&aacute;nh chay được &ldquo;trọng dụng&rdquo;.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 9\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/banh-troi-banh-chay-%284%29-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /></p>\r\n\r\n<p><br />\r\nC&ograve;n với nhiều người d&acirc;n Việt Nam, b&aacute;nh tr&ocirc;i tr&ograve;n đầy l&agrave; biểu tượng cho sự hanh th&ocirc;ng, tr&ocirc;i chảy, no đủ&hellip;, ăn b&aacute;nh tr&ocirc;i b&aacute;nh chay v&agrave;o ng&agrave;y đầu năm để hy vọng c&oacute; một năm mới thuận lợi, b&igrave;nh an. V&agrave; d&ugrave; v&igrave; l&yacute; do g&igrave; th&igrave; chiếc b&aacute;nh trắng muốt, tr&ograve;n xinh, thơm hương dừa, vừng, s&aacute;nh ngọt vị nước ướp hoa nh&agrave;i, hoa bưởi vẫn rất được ưa chuộng trong những ng&agrave;y xu&acirc;n mới n&agrave;y.<br />\r\n<br />\r\nNhững m&oacute;n ăn từ măng<br />\r\n<br />\r\nMăng l&agrave; một trong những đặc sản l&agrave;m n&ecirc;n hương vị đặc trưng truyền thống của ẩm thực Việt Nam. Măng rất th&ocirc;ng dụng v&agrave; được hầu hết c&aacute;c d&acirc;n tộc tr&ecirc;n mảnh đất h&igrave;nh chữ S sử dụng l&agrave;m nguy&ecirc;n liệu chế biến m&oacute;n ăn. Măng th&acirc;n thiện v&agrave; dễ kết hợp khi chế biến với nhiều nguy&ecirc;n liệu kh&aacute;c. M&acirc;m cỗ Tết của người Việt từ ng&agrave;n xưa đến nay kh&ocirc;ng thể thiếu đi m&oacute;n canh măng. C&oacute; mu&ocirc;n v&agrave;n m&oacute;n ăn ngon được chế biến từ măng: măng hầm xương, măng chua, măng x&aacute;o vịt, ếch x&agrave;o măng&hellip;<br />\r\n<br />\r\nV&agrave;o ng&agrave;y xu&acirc;n, khi những cơn mưa ph&ugrave;n v&agrave; gi&aacute; lạnh vừa qua đi, trời đất đủ nắng ấm v&agrave; độ ẩm để mu&ocirc;n lo&agrave;i c&acirc;y sinh trưởng v&agrave; ph&aacute;t triển th&igrave; họ nh&agrave; tre cũng kh&ocirc;ng nằm ngo&agrave;i quy luật đ&oacute;.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 10\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/Mang-(1)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /><br />\r\nMăng ng&acirc;m chua cay ăn k&egrave;m thịt nướng<br />\r\n<br />\r\n<img alt=\"4 món ngon không thể bỏ qua trong mùa xuân 11\" src=\"https://afamilycdn.com/k:thumb_w/600/lz22gR5gAUy5ERF6knDuUrImpNtM4c/Image/2013/02/Mang-(2)-82bed/4-mon-ngon-khong-the-bo-qua-trong-mua-xuan.jpg\" /><br />\r\nMăng luộc chấm tương</p>\r\n\r\n<p><br />\r\nM&ugrave;a xu&acirc;n, măng tre đội mầm vươn l&ecirc;n tươi tốt, từng mầm sống sau những ng&agrave;y ủ d&agrave;i trong l&ograve;ng đất mẹ đ&atilde; t&iacute;ch đủ năng lượng để sẵn s&agrave;ng lớn th&agrave;nh c&acirc;y. Cũng bởi thế m&agrave; ăn măng ngon nhất l&agrave; v&agrave;o m&ugrave;a xu&acirc;n. Non mỡ m&agrave;ng v&agrave; ngọt thanh tao.&nbsp;</p>\r\n'),
(7, 'view/images/news/mon-an-mua-thu-thom-ngon-1.jpg.webp', '5+ món ăn mùa thu thơm ngon không thể bỏ qua', 4, '<h2><strong>Chả cốm</strong></h2>\r\n\r\n<p>Từ trước đến nay, cốm đ&atilde; được xem l&agrave; một trong những m&oacute;n ăn mang đậm văn h&oacute;a H&agrave; Nội, nhất l&agrave; những độ thu về. Tr&ecirc;n thực tế, cốm l&agrave; th&agrave;nh phần ch&iacute;nh để chế biến c&aacute;c m&oacute;n ăn như x&ocirc;i, b&aacute;nh, chả,&hellip; Trong số đ&oacute;, m&oacute;n chả cốm được c&ocirc;ng nhận l&agrave; những&nbsp;<strong>m&oacute;n ăn m&ugrave;a thu thơm ngon</strong>&nbsp;được nhiều người y&ecirc;u th&iacute;ch. Đặc biệt, m&oacute;n n&agrave;y thường được ăn k&egrave;m với b&uacute;n đậu mắm t&ocirc;m, đặc biệt m&ugrave;i vị cốm thơm thơm m&agrave; lại b&ugrave;i b&ugrave;i đặc trưng sẽ kh&ocirc;ng l&agrave;m bạn c&oacute; cảm gi&aacute;c bị ng&aacute;n.&nbsp;</p>\r\n\r\n<h2><strong>Ch&egrave; b&iacute; rợ</strong></h2>\r\n\r\n<p>B&iacute; rợ c&ograve;n l&agrave; một loại củ quả cực kỳ bổ dưỡng n&ecirc;n n&oacute; c&oacute; thể được chế biến th&agrave;nh nhiều m&oacute;n ăn ngon v&agrave; lạ miệng. Ch&iacute;nh v&igrave; thế, đ&acirc;y l&agrave; một trong những m&oacute;n ăn thơm ngon v&agrave;o m&ugrave;a thu kh&ocirc;ng thể bỏ qua nếu mọi người t&igrave;m một m&oacute;n ăn thanh lọc cho cơ thể. Ngo&agrave;i ra, đ&acirc;y l&agrave; dịp Halloween n&ecirc;n mọi người cũng c&oacute; thể th&ecirc;m m&oacute;n n&agrave;y v&agrave;o trong menu tiệc t&ugrave;ng của m&igrave;nh nữa đấy!</p>\r\n\r\n<p><a href=\"https://besthome.com.vn/images/2022/10/mon-an-mua-thu-thom-ngon-2.jpg\"><img alt=\"Chè bí rợ là một món ăn mùa thu thơm ngon vừa ngon miệng vừa có thể giúp thanh lọc cơ thể\" src=\"https://besthome.com.vn/images/2022/10/mon-an-mua-thu-thom-ngon-2.jpg.webp\" style=\"height:420px; width:512px\" /></a></p>\r\n\r\n<p>Ch&egrave; b&iacute; rợ l&agrave; một m&oacute;n ăn m&ugrave;a thu thơm ngon vừa ngon miệng vừa c&oacute; thể gi&uacute;p thanh lọc cơ thể</p>\r\n\r\n<h2><strong>Tr&aacute;m nhồi thịt</strong></h2>\r\n\r\n<p>M&ugrave;a thu được mệnh danh l&agrave; m&ugrave;a rụng tr&aacute;m &ndash; bắt đầu từ cuối th&aacute;ng 6 từ đến cuối th&aacute;ng 9. V&igrave; vậy trong thời điểm n&agrave;y cũng c&oacute; rất nhiều m&oacute;n ăn từ quả tr&aacute;m được ra đời. Với hương vị vừa b&ugrave;i vừa thơm th&igrave; quả tr&aacute;m c&oacute; thể d&ugrave;ng để nấu canh, kho hoặc l&agrave;m x&ocirc;i đều v&ocirc; c&ugrave;ng ngon. Trong số đ&oacute; phải kể đến m&oacute;n tr&aacute;m nhồi thịt &ndash; một m&oacute;n ăn cực bắt vị để d&ugrave;ng c&ugrave;ng m&oacute;n cơm n&oacute;ng m&agrave; bạn c&oacute; thể tự chế biến tại nh&agrave;.</p>\r\n\r\n<h2><strong>Lẩu cua đồng</strong></h2>\r\n\r\n<p>Nhắc đến&nbsp;<strong>m&oacute;n ăn m&ugrave;a thu thơm ngon</strong>&nbsp;chắc chắn kh&ocirc;ng thể thiếu m&oacute;n lẩu cua đồng n&oacute;ng hổi thơm nức mũi. Tuy nhi&ecirc;n, nguy&ecirc;n vật liệu của m&oacute;n ăn n&agrave;y tương đối kh&oacute; t&igrave;m n&ecirc;n gi&aacute; th&agrave;nh của ch&uacute;ng kh&aacute; đắt. B&ecirc;n cạnh đ&oacute;, quy tr&igrave;nh nấu lẩu cua đồng cũng đ&ograve;i hỏi tay nghề tương đối cao n&ecirc;n mọi người n&ecirc;n lưu &yacute; nh&eacute;!</p>\r\n\r\n<h2><strong>Sườn x&agrave;o chua ngọt</strong></h2>\r\n\r\n<p>Thời tiết se lạnh như thế kh&ocirc;ng thể thiếu m&oacute;n sườn x&agrave;o chua ngọt trong danh s&aacute;ch những&nbsp;<strong>m&oacute;n ăn m&ugrave;a thu thơm ngon</strong>. Đ&oacute; l&agrave; l&yacute; do v&igrave; sao m&oacute;n sườn x&agrave;o chua ngọt lại v&ocirc; c&ugrave;ng &ldquo;đắt h&agrave;ng&rdquo; trong thời điểm giao m&ugrave;a hạ &ndash; thu hay thu &ndash; đ&ocirc;ng. Tr&ecirc;n thực tế, m&oacute;n ăn n&agrave;y kh&ocirc;ng hề xa lạ với ch&uacute;ng ta v&agrave; c&aacute;ch chế biến cũng tương đối dễ n&ecirc;n tại sao kh&ocirc;ng bắt tay v&agrave;o việc m&agrave; nấu ngay th&ocirc;i nhỉ!</p>\r\n\r\n<p><a href=\"https://besthome.com.vn/images/2022/10/mon-an-mua-thu-thom-ngon-3.jpg\"><img alt=\"Thời tiết se lạnh như thế không thể thiếu món sườn xào chua ngọt trong danh sách những món ăn mùa thu thơm ngon\" src=\"https://besthome.com.vn/images/2022/10/mon-an-mua-thu-thom-ngon-3.jpg.webp\" style=\"height:288px; width:512px\" /></a></p>\r\n\r\n<p>Thời tiết se lạnh như thế kh&ocirc;ng thể thiếu m&oacute;n sườn x&agrave;o chua ngọt trong danh s&aacute;ch những m&oacute;n ăn m&ugrave;a thu thơm ngon</p>\r\n\r\n<h2><strong>Thịt xi&ecirc;n nướng</strong></h2>\r\n\r\n<p>Thưởng thức v&agrave;i xi&ecirc;n thịt nướng trong tiết trời c&oacute; ch&uacute;t lạnh th&igrave; đ&uacute;ng l&agrave; kh&ocirc;ng c&ograve;n g&igrave; bằng phải kh&ocirc;ng mọi người? B&iacute; quyết để l&agrave;m m&oacute;n ăn n&agrave;y cực kỳ ngon phải kể đến kh&acirc;u tẩm ướp gia vị sao cho thấm hết thịt. Tiếp đến, chỉ cần bỏ ch&uacute;t thời gian để nướng thịt tr&ecirc;n bếp l&agrave; đ&atilde; c&oacute; được đĩa thịt ngon l&agrave;nh m&agrave; lại đảm bảo vệ sinh. Bạn c&oacute; thể ăn k&egrave;m với c&aacute;c loại rau cải, c&agrave; chua, dưa leo,&hellip; để c&acirc;n bằng vị, vừa kh&ocirc;ng c&oacute; cảm gi&aacute;c bị ng&aacute;n.</p>\r\n\r\n<h2><strong>Nem chua r&aacute;n</strong></h2>\r\n\r\n<p>H&atilde;y tưởng tượng bạn đang cắn một miếng nem chua r&aacute;n vừa thơm vừa b&eacute;o ngậy trong kh&ocirc;ng kh&iacute; trời lạnh se se th&igrave; đ&uacute;ng l&agrave; qu&aacute; tuyệt vời! Mọi người c&oacute; thể chọn ăn nem chua r&aacute;n với cơm n&oacute;ng hoặc cuộn b&aacute;nh tr&aacute;ng k&egrave;m rau đều v&ocirc; c&ugrave;ng ngon miệng. Đ&acirc;y được coi l&agrave; một trong những&nbsp;<strong>m&oacute;n ăn m&ugrave;a thu thơm ngon</strong>&nbsp;được rất nhiều bạn trẻ ưa th&iacute;ch.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; danh s&aacute;ch những&nbsp;<strong>m&oacute;n ăn m&ugrave;a thu thơm ngon</strong>&nbsp;m&agrave; ch&uacute;ng t&ocirc;i đ&atilde; tổng hợp để mọi người c&oacute; thể tham khảo. Từ đ&oacute; chuẩn bị những m&oacute;n ăn ngon m&ugrave;a thu chuẩn vị, hấp dẫn để tự chi&ecirc;u đ&atilde;i bản th&acirc;n v&agrave; gia đ&igrave;nh. Nếu cần tư vấn hoặc t&igrave;m mua c&aacute;c sản phẩm gia dụng, vật liệu d&ugrave;ng bếp th&igrave; c&oacute; thể li&ecirc;n hệ với BestHome để được tư vấn.</p>\r\n'),
(8, 'view/images/news/top-10-mon-ngon-an-vao-mua-dong-sieu-ngon-de-lam-am-nong-202212230834508107.jpg', 'Top 10 món ngon ăn vào mùa đông siêu ngon, dễ làm, ấm nóng', 5, '<p><strong>Ch&aacute;o sườn</strong></p>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-nau-chao-suon-thom-ngon-cho-bua-sang-ngay-cuoi-tuan-1225539\">Ch&aacute;o sườn</a>&nbsp;l&agrave; một m&oacute;n rất dễ ăn, d&ugrave; l&agrave; người gi&agrave; hay trẻ nhỏ đều c&oacute; thể ăn được.&nbsp;<strong>V&agrave;o một buổi s&aacute;ng se lạnh, c&ograve;n g&igrave; tuyệt vời hơn được cầm một b&aacute;t ch&aacute;o sườn n&oacute;ng hổi tr&ecirc;n tay, nh&acirc;m nhi vị ch&aacute;o b&ugrave;i b&ugrave;i, ngon ngọt đặc trưng từ gạo v&agrave; thịt xương hầm, cay nhẹ của một ch&uacute;t ti&ecirc;u.</strong></p>\r\n\r\n<p>Ngo&agrave;i ra, ch&aacute;o sườn cũng rất dễ chế biến v&agrave; c&aacute;c nguy&ecirc;n liệu cũng dễ d&agrave;ng t&igrave;m mua.<strong>&nbsp;C&aacute;c mẹ c&oacute; thể thử ngay m&oacute;n ăn đầy đủ chất dinh dưỡng n&agrave;y để nạp năng lượng cho con v&agrave;o buổi s&aacute;ng nh&eacute;!</strong></p>\r\n\r\n<p><img alt=\"Cháo sườn\" src=\"https://cdn.tgdd.vn/Files/2022/12/23/1498408/top-10-mon-ngon-an-vao-mua-dong-sieu-ngon-de-lam-am-nong-202212230834508107.jpg\" style=\"height:140px; width:360px\" />Ch&aacute;o sườn</p>\r\n\r\n<p><strong>S&uacute;p cua</strong></p>\r\n\r\n<p>Một b&aacute;t&nbsp;<a href=\"https://www.bachhoaxanh.com/kinh-nghiem-hay/bo-tui-ngay-cach-nau-sup-cua-an-sang-nhanh-gon-khong-bi-chay-nuoc-1300089\">s&uacute;p cua</a>&nbsp;sền sệt, n&oacute;ng hổi c&ugrave;ng vị thơm ngọt của nước d&ugrave;ng g&agrave; chắc chắn sẽ đ&aacute;nh thức chiếc bụng đ&oacute;i của bạn.&nbsp;<strong>Kh&ocirc;ng chỉ dễ chế biến m&agrave; c&ograve;n chuẩn bị rất nhanh, đ&acirc;y l&agrave; một lựa chọn ho&agrave;n hảo cho bữa s&aacute;ng nhanh gọn nhưng l&agrave; đầy đủ dưỡng chất từ rau củ, thịt cua, thịt g&agrave;,...</strong></p>\r\n\r\n<p><img alt=\"Súp cua\" src=\"https://cdn.tgdd.vn/Files/2022/12/23/1498408/top-10-mon-ngon-an-vao-mua-dong-sieu-ngon-de-lam-am-nong-202212230835174562.jpg\" style=\"height:140px; width:360px\" />S&uacute;p cua</p>\r\n\r\n<p><strong>T&agrave;o phớ</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/kinh-nghiem-hay/mach-ban-cach-lam-tao-pho-bang-yen-mach-vua-ngon-vua-chang-lo-tang-can-1308857\">T&agrave;o phớ</a>&nbsp;chắc hẳn l&agrave; m&oacute;n ăn thời thơ ấu của hầu hết mọi người.&nbsp;<strong>Buổi s&aacute;ng l&agrave;nh lạnh&nbsp;m&agrave; được thưởng thức b&aacute;t t&agrave;o phớ n&oacute;ng hổi c&ugrave;ng ch&uacute;t nước đường thơm vị gừng th&igrave; thật tuyệt vời.&nbsp;</strong>&nbsp;Kh&ocirc;ng chỉ t&igrave;m mua ở những h&agrave;ng qu&aacute;n b&ecirc;n ngo&agrave;i m&agrave; bạn c&ograve;n c&oacute; thể tự nấu m&oacute;n n&agrave;y tại nh&agrave; cực k&igrave; đơn giản.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Tào phớ\" src=\"https://cdn.tgdd.vn/Files/2022/12/23/1498408/top-10-mon-ngon-an-vao-mua-dong-sieu-ngon-de-lam-am-nong-202212230835454237.jpg\" style=\"height:140px; width:360px\" />T&agrave;o phớ</p>\r\n\r\n<p><strong>Phở b&ograve;</strong></p>\r\n\r\n<p>Nhắc đến những m&oacute;n ăn s&aacute;ng v&agrave;o m&ugrave;a đ&ocirc;ng th&igrave; chắc chắn kh&ocirc;ng thể bỏ qua m&oacute;n&nbsp;<a href=\"https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-nau-pho-bo-ha-noi-962092\">phở b&ograve;</a>&nbsp;rồi.&nbsp;<strong>Bạn chắc chắn sẽ kh&ocirc;ng thể cưỡng lại m&oacute;n phở thơm ngọt nhiều dưỡng chất, kết hợp c&ugrave;ng b&aacute;nh phở dai dai v&agrave; nước d&ugrave;ng đậm đ&agrave;, ăn k&egrave;m c&ugrave;ng một v&agrave;i cọng rau thơm.</strong>&nbsp;M&oacute;n ăn đặc trưng của Việt Nam n&agrave;y tưởng chừng phức tạp nhưng lại kh&aacute; đơn giản trong c&aacute;ch chế biến.</p>\r\n\r\n<p><img alt=\"Phở bò\" src=\"https://cdn.tgdd.vn/Files/2022/12/23/1498408/top-10-mon-ngon-an-vao-mua-dong-sieu-ngon-de-lam-am-nong-202212230836055450.jpg\" style=\"height:140px; width:360px\" />Phở b&ograve;</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) DEFAULT 'N/A',
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `description`, `image`, `price`, `rating`) VALUES
(101, 'Gỏi cuốn', 'starter', 'Gỏi cuốn có xuất xứ từ Miền nam có nhiều nguyên liệu như rau xà lách, húng quế, tía tô, tôm khô, rau thơm, thịt luộc, tôm tươi.. tất cả được cuộn trong vỏ bánh tráng', './view/images/starter/starter-1.jpg', 7000, 3.9375),
(102, 'Gỏi cá hồi', 'starter', 'Gỏi cá hồi với rau là một món ăn thơm, hấp dẫn và. Mang lại rất nhiều chất dinh dưỡng cho sức khoẻ con người', './view/images/starter/starter-2.jpg', 30000, 4),
(103, 'Gỏi tôm', 'starter', 'Tôm là một loại thực phẩm giàu chất dinh dưỡng, những món ăn ngon từ tôm sống đặc biệt là gỏi tôm. Gỏi tôm sẽ mang lại cho thực khách cảm giác tươi mát của hải sản tươi hòa quyện cùng vị cay của nước chấm mù tạt giúp kích thích vị giác', './view/images/starter/starter-3.jpg', 35000, 4.4375),
(104, 'Súp cua', 'starter', 'Thường được chọn là món khai vị nóng trong các bữa tiệc để tráng bụng, súp cua không chỉ là một món ngon dễ ăn mà còn chứa nhiều dinh dưỡng, bổ sung nhiều iot, canxi và chất khoáng cho cơ thể', './view/images/starter/starter-4.jpg', 25000, 4.1875),
(105, 'Salad', 'starter', 'Salad dùng làm món để ăn đầu tiên trong bữa ăn, chế biến bằng cách kết hợp giữa các loại rau trộn với muối, dầu giấm để tăng thêm hương vị và dùng như món khai vị tốt cho hệ tiêu hóa  và giúp thưởng thức các món ăn sau được ngon hơn', './view/images/starter/starter-5.jpg', 22000, 4.0625),
(106, 'Bánh bacon cuộn', 'starter', 'Bánh gạo cuộn bacon dẻo thơm, cay cay của hạt tiêu và thấm đẫm nước sốt ngọt nhẹ đặc trưng của sốt yakiniku kèm vị beo béo của phô mai sẽ khiến bạn dù chỉ ăn một lần cũng không thể nào quên.', './view/images/starter/starter-6.jpg', 35000, 4.06667),
(107, 'Bánh anh đào', 'starter', 'Hoa anh đào được ướp muối và nhập trực tiếp từ Nhật sau khi được xử lí sẽ có vị mặn nhè nhẹ. Lá hoa anh đào với hương thơm thoang thoảng đặc trưng khi kết hợp cùng vị kem béo ngậy, mềm mịn của lớp cheese và phần bánh cookie giòn tan bên dưới sẽ lưu lại một cảm giác vô cùng đặc biệt', './view/images/starter/starter-7.jpg', 20000, 4),
(108, 'Saganaki', 'starter', 'Trong ẩm thực Hy Lạp, saganaki là bất kỳ món ăn nào trong số nhiều món ăn được chế biến trong chảo rán nhỏ, món nổi tiếng nhất là món khai vị với pho mát chiên', './view/images/starter/starter-8.jpg', 15000, 3.625),
(109, 'Đậu phụ rán phô mai', 'starter', 'Món đậu phụ rán phô mai này đã được rất nhiều người khoái khẩu nhờ hương vị lạ miệng, hấp dẫn, kích thích vị giác khi thưởng thức', './view/images/starter/starter-9.jpg', 20000, 3.8125),
(110, 'Dango', 'starter', 'Dango là một loại bánh trôi của ẩm thực Nhật Bản được làm từ bột nếp, tương tự như bánh dày Nhật Bản mochi. Bánh này thường được ăn với trà xanh.', './view/images/starter/starter-10.jpg', 20000, 4.125),
(111, 'Gà cay', 'starter', ' Là món ăn rất thơm ngon nhờ thịt gà giòn tan hòa quyện cùng nước sốt cay đặc trưng hương vị ẩm thực Hàn Quốc', './view/images/starter/starter-11.jpg', 40000, 3.75),
(112, 'Gỏi ngó sen', 'starter', 'Gỏi ngó sen tôm thịt với vị dai ngon của tôm thịt, ngọt chua đậm đà của rau củ, phù hợp cho mọi lứa tuổi', './view/images/starter/starter-12.jpg', 40000, 4),
(201, 'Thịt rang cháy cạnh', 'main', 'Vào những ngày mưa lạnh hay nắng nóng, chỉ cần ngửi thấy mùi thơm nức đậm đà từ nồi thịt kho cháy cạnh thoang thoảng cũng đủ làm dạ dày “thổn thức”', './view/images/main-course/main-course-1.jpg', 35000, 3.8125),
(202, 'Thịt bò xào nấm kim châm', 'main', 'Đây sẽ là món xào có mùi thơm hấp dẫn với vị đậm đà, mềm, thơm, của thịt bò và nấm', './view/images/main-course/main-course-2.jpg', 40000, 3.8125),
(203, 'Mì ý sốt cà chua bò bằm', 'main', 'Sợi mì Ý được luộc mềm dai áo xung quanh mình nước sốt cà chua ngọt, tô điểm những miếng thịt bò bằm hấp dẫn, cộng thêm mùi thơm từ phô mai sẽ khiến bất cứ ai ăn sẽ nhớ mãi không quên', './view/images/main-course/main-course-3.jpg', 42000, 3.625),
(204, 'Bò hầm rau củ', 'main', 'Thịt bò hầm rau củ rất ngon và giàu dinh dưỡng. Nước dùng có vị ngọt đặc trưng của rau củ còn thịt bò mềm tan trong miệng, mùi vị thơm ngon, rất hấp dẫn', './view/images/main-course/main-course-4.jpg', 50000, 3.8125),
(205, 'Cà ri gà', 'main', 'Hương vị cay cay kết hợp giữa khoai, thịt gà được tẩm ướp kỹ, cà rốt mềm hòa quyện đều trong nước súp sánh ngọt khiến món cà ri gà rất hấp dẫn', './view/images/main-course/main-course-5.jpg', 40000, 3.9375),
(206, 'Khoai tây đút lò', 'main', 'Lớp vỏ ngoài giòn vàng, bên trong mềm, dậy mùi thơm của bơ tỏi và lá xạ hương', './view/images/main-course/main-course-6.jpg', 35000, 4),
(207, 'Khoai tây nghiền', 'main', 'Khoai tây nghiền, là một món ăn được chế biến bằng cách nghiền khoai tây luộc. Sữa, bơ, muối và hạt tiêu thường được sử dụng để pha chế. Món ăn thường là một món ăn kèm với thịt hoặc rau.', './view/images/main-course/main-course-7.jpg', 27000, 4.1875),
(208, 'Bánh khoai tây Korokke', 'main', 'Bánh Korokke là sự kết hợp hài hòa giữa lớp phủ giòn tan cùng với vị đậm đà từ nguyên liệu trong nhân bánh, sau đó mang đi chiên ngập dầu cho đến khi vàng đều. Đây chắc hẳn sẽ là món bánh làm hài lòng các tín đồ mê các món chiên ngập dầu', './view/images/main-course/main-course-8.jpg', 27000, 4.0625),
(209, 'Ức vịt áp chảo', 'main', 'Món ức vịt áp chảo là một sự kết hợp tuyệt vời giữa ức vịt ngon mềm cùng với khoai tây béo bùi.', './view/images/main-course/main-course-9.jpg', 50000, 3.4375),
(301, 'Chè trái cây', 'dessert', 'Chè trái cây là sự kết hợp tuyệt vời của nhiều loại trái cây với nhau, ăn cùng nước đường phèn ngọt thanh. Chè trái cây giúp bạn giải nhiệt, thư giãn sau một ngày dài.', './view/images/dessert/dessert-1.jpg', 15000, 4.125),
(302, 'Rau câu dừa', 'dessert', 'Rau câu dừa có vị ngọt thanh của nước dừa tươi và vị béo nhẹ từ nước cốt dừa', './view/images/dessert/dessert-2.jpg', 15000, 3.86667),
(303, 'Chè đậu đỏ', 'dessert', 'Chè đậu đỏ truyền thống được múc ra chén với khói tỏa nghi ngút và có mùi thơm hấp dẫn của nước cốt dừa và đậu đỏ', './view/images/dessert/dessert-3.jpg', 15000, 4.1875),
(304, 'Chè vải hạt sen', 'dessert', 'Chè vải hạt sen có tác dụng thanh nhiệt cơ thể. Hạt sen giòn giòn, bùi bùi, vải ngọt thanh, thơm ngon. Ngoài ra, hạt sen còn giúp bạn có giấc ngủ sâu hơn vào ban đêm.', './view/images/dessert/dessert-4.jpg', 15000, 3.6875),
(305, 'Sương sáo nước cốt dừa', 'dessert', ' Sương sáo dai dai, mềm mềm ăn kèm với nước cốt dừa béo béo, thêm vài viên đá mát lạnh sẽ giúp bạn phấn chấn tinh thần hơn hẳn sau bữa ăn.', './view/images/dessert/dessert-5.jpg', 15000, 4.0625),
(306, 'Chè dừa dầm', 'dessert', 'Chè có vị ngọt thanh, béo béo của sữa dừa, phần cùi dừa dai mềm vừa phải', './view/images/dessert/dessert-6.jpg', 15000, 4.375),
(307, 'Chè khúc bạch', 'dessert', 'Chè khúc bạch là sự kết hợp hài hòa của nước đường phèn ngọt thanh, thơm thoang thoảng mùi vải, ăn kèm với những viên khúc bạch thơm, béo được làm từ kem sữa tươi. ', './view/images/dessert/dessert-7.jpg', 15000, 3.875),
(308, 'Chè bột lọc heo quay', 'dessert', 'Chè bột lọc heo quay đặc sản Huế pha trộn hương vị mặn ngọt, bột lọc dai và thịt heo giòn cực kì lạ miệng ', './view/images/dessert/dessert-8.jpg', 15000, 4.125),
(309, 'Chè đậu ngự', 'dessert', 'Chè đậu ngự thơm ngon đặc sản Huế, thanh mát, giải nhiệt cho mùa hè oi bức', './view/images/dessert/dessert-9.jpg', 15000, 3.92857);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `mail` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `response`
--

INSERT INTO `response` (`id`, `name`, `mail`, `message`) VALUES
(4, 'Nguyễn Tiến', 'tien@nguyen.com', 'abc'),
(5, 'Nguyễn Tiến', 'tien@ajsdfh.com', 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `table_number` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `reservation_date` date NOT NULL,
  `time` time NOT NULL,
  `number_of_guests` int(2) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tables`
--

INSERT INTO `tables` (`id`, `table_number`, `customer_id`, `customer_name`, `customer_phone`, `customer_email`, `reservation_date`, `time`, `number_of_guests`, `status`) VALUES
(2, 7, NULL, 'Nguyễn Tiến', '339085759', 'tien@nguyen.com', '2023-04-25', '15:00:00', 4, 'canceled'),
(3, 1, NULL, NULL, NULL, NULL, '2023-04-25', '04:32:12', 4, 'canceled'),
(4, 1, NULL, NULL, NULL, NULL, '2023-04-27', '05:05:18', 4, 'paid'),
(5, 1, NULL, NULL, NULL, NULL, '2023-04-27', '06:11:18', 4, 'paid'),
(6, 1, NULL, NULL, NULL, NULL, '2023-04-27', '06:12:22', 4, 'canceled'),
(7, 1, NULL, NULL, NULL, NULL, '2023-04-27', '09:20:24', 4, 'paid'),
(8, 6, 2, 'Ayhed', '3401179729', 'Ayhed@gmail.com', '2023-04-27', '10:00:00', 4, 'in use'),
(9, 1, 18, 'Tien Nguyen Phuoc Bao', '745634527', 'tien2@nguyen.com', '2023-04-27', '10:00:00', 4, 'in use'),
(10, 0, 2, 'Ayhed', '3401179729', 'Ayhed@gmail.com', '2023-04-28', '10:00:00', 4, 'not confirm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`table_id`),
  ADD KEY `bills_ibfk_2` (`product_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`customer_id`),
  ADD KEY `comments_ibfk_2` (`product_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tables_ibfk_1` (`customer_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1938;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT cho bảng `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
