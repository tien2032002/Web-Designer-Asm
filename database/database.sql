

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `bills` (
  `id` int(8) NOT NULL,
  `order_id` int(8) NOT NULL,
  `product_id` int(8) NOT NULL,
  `quantity` int(8) NOT NULL,
  `price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(200) ,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) ,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10),
  `birthday` date 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `image`, `password`, `address`, `phone`, `gender`, `birthday`) VALUES
(1, 'chien', 'chien@chien.com', '', '123456789', 'ktx khu A', '0123456789', 'nam', '2012-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cmnd` varchar(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birthday` date,
  `image` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

---insert data---
INSERT INTO `employees` (`name`, `cmnd`, `gender`, `phone`, `birthday`, `image`, `email`, `password`, `is_admin`, `address`)
VALUES 
('Nguyễn Văn A', '123445675678', 'Nam', '0901234567', '1990-01-01', 'img1.jpg', 'a@gmail.com', '123456', 0, 'Hà Nội'),
('Trần Thị B', '567812345678', 'Nữ', '0912345678', '1991-02-02', 'img2.jpg', 'b@gmail.com', '123456', 0, 'TP Hồ Chí Minh'),
('Lê Văn C', '910112345678', 'Nam', '0923456789', '1992-03-03', 'img3.jpg', 'c@gmail.com', '123456', 0, 'Đà Nẵng'),
('Phạm Thị D', '234512345678', 'Nữ', '0934567890', '1993-04-04', 'img4.jpg', 'd@gmail.com', '123456', 0, 'Nha Trang'),
('Vũ Văn E', '678912345678', 'Nam', '0945678901', '1994-05-05', 'img5.jpg', 'e@gmail.com', '123456', 0, 'Hải Phòng'),
('Đỗ Thị F', '101112345678', 'Nữ', '0956789012', '1995-06-06', 'img6.jpg', 'f@gmail.com', '123456', 0, 'Huế'),
('Nguyễn Văn G', '111212345678', 'Nam', '0967890123', '1996-07-07', 'img7.jpg', 'g@gmail.com', '123456', 0, 'Quảng Bình'),
('Trần Thị H', '131412131415', 'Nữ', '0978901234', '1997-08-08', 'img8.jpg', 'h@gmail.com', '123456', 0, 'Cần Thơ'),
('Lê Văn I', '151623242526', 'Nam', '0989012345', '1998-09-09', 'img9.jpg', 'i@gmail.com', '123456', 0, 'Hạ Long'),
('Phạm Thị K', '17183132333435', 'Nữ', '0990123456', '1999-10-10', 'img10.jpg', 'k@gmail.com', '123456', 0, 'Sapa'),
('Vũ Văn L', '19204142434445', 'Nam', '0911123456', '2000-11-11', 'img11.jpg', 'l@gmail.com', '123456', 0, 'Đà Lạt'),
('Đỗ Thị M', '2120414243442', 'Nữ', '0922234567', '2001-12-12', 'img12.jpg', 'm@gmail.com', '123456', 0, 'Hội An'),
('Nguyễn Văn N', '2304142434424', 'Nam', '0933345678', '2002-01-01', 'img13.jpg', 'n@gmail.com', '123456', 0, 'Ninh Bình'),
('Trần Thị O', '2504142434426', 'Nữ', '0944456789', '2003-02-02', 'img14.jpg', 'o@gmail.com', '123456', 0, 'Hà Giang'),
('Lê Văn P', '2720414243448', 'Nam', '0955567890', '2004-03-03', 'img15.jpg', 'p@gmail.com', '123456', 0, 'Quảng Ninh'),
('Phạm Thị Q', '2904142434430', 'Nữ', '0966678901', '2005-04-04', 'img16.jpg', 'q@gmail.com', '123456', 0, 'Ninh Bình'),
('Vũ Văn R', '3104142434432', 'Nam', '0977789012', '2006-05-05', 'img17.jpg', 'r@gmail.com', '123456', 0, 'Thái Bình'),
('Đỗ Thị S', '331412131434', 'Nữ', '0988890123', '2007-06-06', 'img18.jpg', 's@gmail.com', '123456', 0, 'Thanh Hóa'),
('Nguyễn Văn T', '314121314536', 'Nam', '0999901234', '2008-07-07', 'img19.jpg', 't@gmail.com', '123456', 0, 'Hải Dương'),
('Trần Thị U', '314121314738', 'Nữ', '0911112345', '2009-08-08', 'img20.jpg', 'u@gmail.com', '123456', 0, 'Phú Yên')
-- --------------------------------------------------------
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(8) NOT NULL,
  `order_id` int(8) NOT NULL,
  `customer_id` int(8) NOT NULL,
  `satus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `comments` (
  `id` int(8) NOT NULL,
  `product_id` int(8) NOT NULL,
  `customer_id` int(8) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `empl_id` (`employee_id`),
  ADD KEY `cus_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `cus_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `empl_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `tables_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`ID`);
COMMIT;

--Constraints for table `comments`

ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`ID`);
COMMIT;
