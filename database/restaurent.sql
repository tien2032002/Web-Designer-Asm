-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2023 lúc 04:01 AM
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
-- Cơ sở dữ liệu: `restaurent`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
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
(2, 'Ayhed', 'Ayhed@gmail.com', './view/images/user/user2', '12345678', 'Sume', '3401179729', 'nữ', '2000-04-07'),
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
(17, 'Shen Hee', 'Shenhee@gmail.com', './view/images/user/user9', '12345678', 'Liyu', '7068411795', 'nữ', '1999-03-10');

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


INSERT INTO `feedback` (`id`, `product_id`, `customer_id`, `stars`, `comment`) VALUES
(2, 208, 3, 3, 'Sản phẩm rất đáng tiền'),
(3, 208, 3, 5, 'Sản phẩm rất tuyệt vời');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `update_product_rating` AFTER INSERT ON `feedback` FOR EACH ROW BEGIN
  UPDATE `products`
  SET `rating` = (SELECT AVG(`stars`) FROM `feedback` WHERE `product_id` = NEW.`product_id`)
  WHERE `id` = NEW.`product_id`;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(101, 'Gỏi cuốn', 'starter', 'Gỏi cuốn có xuất xứ từ Miền nam có nhiều nguyên liệu như rau xà lách, húng quế, tía tô, tôm khô, rau thơm, thịt luộc, tôm tươi.. tất cả được cuộn trong vỏ bánh tráng', './view/images/starter/starter-1.jpg', 7000, 0),
(102, 'Gỏi cá hồi', 'starter', 'Gỏi cá hồi với rau là một món ăn thơm, hấp dẫn và. Mang lại rất nhiều chất dinh dưỡng cho sức khoẻ con người', './view/images/starter/starter-2.jpg', 30000, 0),
(103, 'Gỏi tôm', 'starter', 'Tôm là một loại thực phẩm giàu chất dinh dưỡng, những món ăn ngon từ tôm sống đặc biệt là gỏi tôm. Gỏi tôm sẽ mang lại cho thực khách cảm giác tươi mát của hải sản tươi hòa quyện cùng vị cay của nước chấm mù tạt giúp kích thích vị giác', './view/images/starter/starter-3.jpg', 35000, 0),
(104, 'Súp cua', 'starter', 'Thường được chọn là món khai vị nóng trong các bữa tiệc để tráng bụng, súp cua không chỉ là một món ngon dễ ăn mà còn chứa nhiều dinh dưỡng, bổ sung nhiều iot, canxi và chất khoáng cho cơ thể', './view/images/starter/starter-4.jpg', 25000, 0),
(105, 'Salad', 'starter', 'Salad dùng làm món để ăn đầu tiên trong bữa ăn, chế biến bằng cách kết hợp giữa các loại rau trộn với muối, dầu giấm để tăng thêm hương vị và dùng như món khai vị tốt cho hệ tiêu hóa  và giúp thưởng thức các món ăn sau được ngon hơn', './view/images/starter/starter-5.jpg', 22000, 0),
(106, 'Bánh bacon cuộn', 'starter', 'Bánh gạo cuộn bacon dẻo thơm, cay cay của hạt tiêu và thấm đẫm nước sốt ngọt nhẹ đặc trưng của sốt yakiniku kèm vị beo béo của phô mai sẽ khiến bạn dù chỉ ăn một lần cũng không thể nào quên.', './view/images/starter/starter-6.jpg', 35000, 0),
(107, 'Bánh anh đào', 'starter', 'Hoa anh đào được ướp muối và nhập trực tiếp từ Nhật sau khi được xử lí sẽ có vị mặn nhè nhẹ. Lá hoa anh đào với hương thơm thoang thoảng đặc trưng khi kết hợp cùng vị kem béo ngậy, mềm mịn của lớp cheese và phần bánh cookie giòn tan bên dưới sẽ lưu lại một cảm giác vô cùng đặc biệt', './view/images/starter/starter-7.jpg', 20000, 0),
(108, 'Saganaki', 'starter', 'Trong ẩm thực Hy Lạp, saganaki là bất kỳ món ăn nào trong số nhiều món ăn được chế biến trong chảo rán nhỏ, món nổi tiếng nhất là món khai vị với pho mát chiên', './view/images/starter/starter-8.jpg', 15000, 0),
(109, 'Đậu phụ rán phô mai', 'starter', 'Món đậu phụ rán phô mai này đã được rất nhiều người khoái khẩu nhờ hương vị lạ miệng, hấp dẫn, kích thích vị giác khi thưởng thức', './view/images/starter/starter-9.jpg', 20000, 0),
(110, 'Dango', 'starter', 'Dango là một loại bánh trôi của ẩm thực Nhật Bản được làm từ bột nếp, tương tự như bánh dày Nhật Bản mochi. Bánh này thường được ăn với trà xanh.', './view/images/starter/starter-10.jpg', 20000, 0),
(111, 'Gà cay', 'starter', ' Là món ăn rất thơm ngon nhờ thịt gà giòn tan hòa quyện cùng nước sốt cay đặc trưng hương vị ẩm thực Hàn Quốc', './view/images/starter/starter-11.jpg', 40000, 0),
(112, 'Gỏi ngó sen', 'starter', 'Gỏi ngó sen tôm thịt với vị dai ngon của tôm thịt, ngọt chua đậm đà của rau củ, phù hợp cho mọi lứa tuổi', './view/images/starter/starter-12.jpg', 40000, 0),
(201, 'Thịt rang cháy cạnh', 'main', 'Vào những ngày mưa lạnh hay nắng nóng, chỉ cần ngửi thấy mùi thơm nức đậm đà từ nồi thịt kho cháy cạnh thoang thoảng cũng đủ làm dạ dày “thổn thức”', './view/images/main-course/main-course-1.jpg', 35000, 0),
(202, 'Thịt bò xào nấm kim châm', 'main', 'Đây sẽ là món xào có mùi thơm hấp dẫn với vị đậm đà, mềm, thơm, của thịt bò và nấm', './view/images/main-course/main-course-2.jpg', 40000, 0),
(203, 'Mì ý sốt cà chua bò bằm', 'main', 'Sợi mì Ý được luộc mềm dai áo xung quanh mình nước sốt cà chua ngọt, tô điểm những miếng thịt bò bằm hấp dẫn, cộng thêm mùi thơm từ phô mai sẽ khiến bất cứ ai ăn sẽ nhớ mãi không quên', './view/images/main-course/main-course-3.jpg', 42000, 0),
(204, 'Bò hầm rau củ', 'main', 'Thịt bò hầm rau củ rất ngon và giàu dinh dưỡng. Nước dùng có vị ngọt đặc trưng của rau củ còn thịt bò mềm tan trong miệng, mùi vị thơm ngon, rất hấp dẫn', './view/images/main-course/main-course-4.jpg', 50000, 0),
(205, 'Cà ri gà', 'main', 'Hương vị cay cay kết hợp giữa khoai, thịt gà được tẩm ướp kỹ, cà rốt mềm hòa quyện đều trong nước súp sánh ngọt khiến món cà ri gà rất hấp dẫn', './view/images/main-course/main-course-5.jpg', 40000, 0),
(206, 'Khoai tây đút lò', 'main', 'Lớp vỏ ngoài giòn vàng, bên trong mềm, dậy mùi thơm của bơ tỏi và lá xạ hương', './view/images/main-course/main-course-6.jpg', 35000, 0),
(207, 'Khoai tây nghiền', 'main', 'Khoai tây nghiền, là một món ăn được chế biến bằng cách nghiền khoai tây luộc. Sữa, bơ, muối và hạt tiêu thường được sử dụng để pha chế. Món ăn thường là một món ăn kèm với thịt hoặc rau.', './view/images/main-course/main-course-7.jpg', 27000, 0),
(208, 'Bánh khoai tây Korokke', 'main', 'Bánh Korokke là sự kết hợp hài hòa giữa lớp phủ giòn tan cùng với vị đậm đà từ nguyên liệu trong nhân bánh, sau đó mang đi chiên ngập dầu cho đến khi vàng đều. Đây chắc hẳn sẽ là món bánh làm hài lòng các tín đồ mê các món chiên ngập dầu', './view/images/main-course/main-course-8.jpg', 27000, 4),
(209, 'Ức vịt áp chảo', 'main', 'Món ức vịt áp chảo là một sự kết hợp tuyệt vời giữa ức vịt ngon mềm cùng với khoai tây béo bùi.', './view/images/main-course/main-course-9.jpg', 50000, 0),
(301, 'Chè trái cây', 'dessert', 'Chè trái cây là sự kết hợp tuyệt vời của nhiều loại trái cây với nhau, ăn cùng nước đường phèn ngọt thanh. Chè trái cây giúp bạn giải nhiệt, thư giãn sau một ngày dài.', './view/images/dessert/dessert-1.jpg', 15000, 0),
(302, 'Rau câu dừa', 'dessert', 'Rau câu dừa có vị ngọt thanh của nước dừa tươi và vị béo nhẹ từ nước cốt dừa', './view/images/dessert/dessert-2.jpg', 15000, 0),
(303, 'Chè đậu đỏ', 'dessert', 'Chè đậu đỏ truyền thống được múc ra chén với khói tỏa nghi ngút và có mùi thơm hấp dẫn của nước cốt dừa và đậu đỏ', './view/images/dessert/dessert-3.jpg', 15000, 0),
(304, 'Chè vải hạt sen', 'dessert', 'Chè vải hạt sen có tác dụng thanh nhiệt cơ thể. Hạt sen giòn giòn, bùi bùi, vải ngọt thanh, thơm ngon. Ngoài ra, hạt sen còn giúp bạn có giấc ngủ sâu hơn vào ban đêm.', './view/images/dessert/dessert-4.jpg', 15000, 0),
(305, 'Sương sáo nước cốt dừa', 'N/A', ' Sương sáo dai dai, mềm mềm ăn kèm với nước cốt dừa béo béo, thêm vài viên đá mát lạnh sẽ giúp bạn phấn chấn tinh thần hơn hẳn sau bữa ăn.', './view/images/dessert/dessert-5.jpg', 15000, 0),
(306, 'Chè dừa dầm', 'N/A', 'Chè có vị ngọt thanh, béo béo của sữa dừa, phần cùi dừa dai mềm vừa phải', './view/images/dessert/dessert-6.jpg', 15000, 0),
(307, 'Chè khúc bạch', 'N/A', 'Chè khúc bạch là sự kết hợp hài hòa của nước đường phèn ngọt thanh, thơm thoang thoảng mùi vải, ăn kèm với những viên khúc bạch thơm, béo được làm từ kem sữa tươi. ', './view/images/dessert/dessert-7.jpg', 15000, 0),
(308, 'Chè bột lọc heo quay', 'N/A', 'Chè bột lọc heo quay đặc sản Huế pha trộn hương vị mặn ngọt, bột lọc dai và thịt heo giòn cực kì lạ miệng ', './view/images/dessert/dessert-8.jpg', 15000, 0),
(309, 'Chè đậu ngự', 'N/A', 'Chè đậu ngự thơm ngon đặc sản Huế, thanh mát, giải nhiệt cho mùa hè oi bức', './view/images/dessert/dessert-9.jpg', 15000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `satus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`order_id`),
  ADD KEY `bills_ibfk_2` (`product_id`);

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
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_id` (`customer_id`),
  ADD KEY `empl_id` (`employee_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tables_ibfk_1` (`customer_id`),
  ADD KEY `tables_ibfk_2` (`order_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT cho bảng `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `cus_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `empl_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Các ràng buộc cho bảng `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `tables_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
