-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2023 lúc 03:28 PM
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
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` text NOT NULL DEFAULT 'database/avatar/user/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `password`, `email`, `address`, `phone`, `gender`, `birthday`, `avatar`) VALUES
(1, 'customer', '0', 'custom@custom.com', '123 Le Dai Hanh', '1234567890', 'Male', '0000-00-00', 'database/avatar/user/user.png'),
(8, 'nguyen phuoc bao tien', '12345678', 'tien2@nguyen.com', NULL, '0339085758', NULL, NULL, 'database/avatar/user/user.png'),
(9, 'tien tien', '1234567890', 'tien@ajsdfh.com', NULL, '1231535634', NULL, NULL, 'database/avatar/user/user.png'),
(10, 'tien nguyen', '12345678', '123@asdgfd.com', NULL, '0339085759', NULL, NULL, 'database/avatar/user/user.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `cmnd` varchar(16) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `img-ulr` text NOT NULL DEFAULT 'database/avatar/employee/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `cmnd`, `gender`, `email`, `password`, `is_admin`, `address`, `img-ulr`) VALUES
(1, 'admin', '0339085753', '1234', 'Male', 'admin@admin.com', 'admin123', 1, 'admin street', 'database/avatar/employee/user.png'),
(9, 'Nguyễn Văn C', '12793947', '12323651', 'Nam', 'nguyenvanc@gmail.com', '4r2345qw', 0, 'Hà Nội', 'database/avatar/employee/user.png'),
(11, 'Trương Thị E', '35493458', '56467234', 'Nữ', 'truongthie@gmail.com', 'gtwer83r', 0, 'Hà Nội', 'database/avatar/employee/user.png'),
(12, 'Trần Văn F', '12323482', '56756723', 'Nam', 'tranvanf@gmail.com', '34r43t11', 0, 'Hà Nội', 'database/avatar/employee/user.png'),
(13, 'Lý Thị G', '77778888', '12938034', 'Nữ', 'lythig@gmail.com', 'r34ry131', 0, 'Hà Nội', 'database/avatar/employee/user.png'),
(14, 'Nguyễn Thị H', '43583495', '34345562', 'Nữ', 'nguyenthiH@gmail.com', 'r13r3r1', 0, 'Hà Nội', 'database/avatar/employee/user.png'),
(15, 'Nguyễn văn I', '12093849', '756234445', 'Nam', 'nguyenvani@gmail.com', '24ry21r2', 0, 'Hà Nội', 'database/avatar/employee/user.png'),
(16, 'Nguyễn Thị K', '12423461', '123247577', 'Nữ', 'nguyenthik@gmail.com', 'hugg8251', 0, 'Hà Nội', 'database/avatar/employee/user.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `empl_id` (`employee_id`),
  ADD KEY `cus_id` (`customer_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `cus_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `empl_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
