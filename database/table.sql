-- Active: 1678415452072@@127.0.0.1@3306@bookstore


USE DATABASE BookStore;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Salesman;
DROP TABLE IF EXISTS Manager;
DROP TABLE IF EXISTS Customer;
DROP TABLE IF EXISTS Book;
DROP TABLE IF EXISTS Author;
DROP TABLE IF EXISTS Publisher;
DROP TABLE IF EXISTS Supplier;
DROP TABLE IF EXISTS ProductOrder;
DROP TABLE IF EXISTS BookFeedback;
DROP TABLE IF EXISTS OrderFeedback;
DROP TABLE IF EXISTS MakeOrder;


CREATE TABLE IF NOT EXISTS User (
	userID int PRIMARY KEY AUTO_INCREMENT,
    userName varchar(50),
    userPassword varchar(50),
    firstName varchar(50),
    lastName varchar(50),
    email varchar(50),
    age int,
    gender enum("M", "F", "Other"),
    isActive BOOLEAN DEFAULT TRUE, -- check is an active account
    
    CONSTRAINT UNIQUE (userName),
    
    CONSTRAINT CHECK (LENGTH(userName) >= 8),
    CONSTRAINT CHECK (LENGTH(userPassword) >= 8),
    -- TODO: contraint email check
	-- CONSTRAINT CHECK (email like "[a-zA-Z0-9]+@[a-z]+.([a-z]+.)*com"), 
    CONSTRAINT CHECK (age > 0 && age <= 100)
);

CREATE TABLE IF NOT EXISTS Customer(
    customerID INT PRIMARY KEY,
    province VARCHAR(100),
    city VARCHAR(100),
    district VARCHAR(100),
    customerAddress VARCHAR(200),
    
    CONSTRAINT FOREIGN KEY (customerID) REFERENCES User(userID) 
);


CREATE TABLE IF NOT EXISTS Salesman (
	salesmanID INT,
    position VARCHAR(30),
    startingYear year,
    managerID INT,
    CONSTRAINT FOREIGN KEY (salesmanID) REFERENCES User(userID),
    CONSTRAINT FOREIGN KEY (managerID) REFERENCES Manager(managerID)
);

CREATE TABLE IF NOT EXISTS Manager (
	managerID INT AUTO_INCREMENT,
    position VARCHAR(30),
    startingYear year,
    
    CONSTRAINT FOREIGN KEY (managerID) REFERENCES User(userID) 
);

-- --TODO: Product Order
CREATE TABLE IF NOT EXISTS Product(
    productID INT AUTO_INCREMENT PRIMARY KEY, 
    productName VARCHAR(200),
    unitsInStock INT DEFAULT 0,
    isActive BOOLEAN DEFAULT TRUE, 
    productDescription TEXT(10000), 
    supplierID INT,
    originalPrice INT,
    discount INT, 
    currentPrice INT,
    productWeight FLOAT,
    CONSTRAINT UNIQUE productName,
    CONSTRAINT FOREIGN KEY (supplierID) REFERENCES Supplier(supplierID) 
);


-- CREATE TABLE IF NOT EXISTS Category(
--     categoryID INT AUTO_INCREMENT PRIMARY KEY,  
--     categoryName VARCHAR(255),
--     parentID INT
-- );

-- ALTER TABLE Category
--     ADD CONSTRAINT FOREIGN KEY parentID REFERENCES Category(categoryID);

CREATE TABLE IF NOT EXISTS Book (
	bookID INT,
    bookName VARCHAR(200),
    isbn VARCHAR(30),
    typeOfCover VARCHAR(20),
    numberOfPages INT,
    
    publisherID INT,
    
    
    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Product(productID),
    CONSTRAINT FOREIGN KEY (publisherID) REFERENCES Publisher(publisherID)
    
); -- Category: multi-value, -- listOfBookImages: link & multivalue

CREATE TABLE IF NOT EXISTS Author (
	authorID INT AUTO_INCREMENT PRIMARY KEY,
	fullName VARCHAR(100),
    age INT,
    home VARCHAR(50),
    -- porttraitLink VARCHAR(200)
    -- liscense VARCHAR(65535),
    authorDescription TEXT(10000)
); -- listOfAuthorImages: link & multivalue

CREATE TABLE IF NOT EXISTS Publisher (
	publisherID INT AUTO_INCREMENT PRIMARY KEY,
	publisherName VARCHAR(300),
    publisherDescription TEXT(10000), 
    numberOfProducts INT, -- trigger
    numberOfSoldProducts INT DEFAULT 0 --trigger
); -- listOfPublisherLiscense: link & multivalue

-- ALTER TABLE Book
--     ADD publisherID INT AUTO_INCREMENT;
-- ALTER TABLE Book
--     ADD supplierID INT AUTO_INCREMENT;
-- ALTER TABLE Book
--     ADD CONSTRAINT FOREIGN KEY publisherID REFERENCES Publisher(publisherID);

-- ALTER TABLE Book   
--     ADD CONSTRAINT FOREIGN KEY supplierID REFERENCES Supplier(supplierID);

CREATE TABLE IF NOT EXISTS Supplier(
	supplierID INT AUTO_INCREMENT PRIMARY KEY,
    supplierName VARCHAR(300),
    supplierDescription TEXT(10000),
    numberOfProducts INT
);

CREATE TABLE IF NOT EXISTS ProductOrder(
	orderID INT AUTO_INCREMENT PRIMARY KEY,
    orderStatus ENUM('shipped' ,'shipping', 'cancelled', 'confirming', 'confirmed', 'shipping back', 'shipped back'),
    originalCost INT, 
    totalDiscount INT,
    finalCost INT,
    orderDescription TEXT(10000), 

    sourceProvince VARCHAR(100),
    sourceCity VARCHAR(100),
    sourceDistrict VARCHAR(100), 
    sourceAddress VARCHAR(500),  

    destinationProvince VARCHAR(100),
    destinationCity VARCHAR(100),
    destinationDistrict VARCHAR(100),
    destinationAddress VARCHAR(500),

    shippingMethod VARCHAR(500),
    payingMethod ENUM('Cash', 'Online banking', 'Momo', 'ZaloPay'),
    receiverPhone VARCHAR(20),
    receiverName VARCHAR(100),
    createdTime DATETIME,
    shippedTime DATETIME
);

-- --------------------------------Weak Entities--------------------------------------------
CREATE TABLE IF NOT EXISTS BookFeedback(
    feedbackID INT AUTO_INCREMENT PRIMARY KEY,
    bookID INT,
    createdTime DATETIME, 
    content TEXT(10000),

    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Book(bookID)
); -- listOfImages: multivalue

CREATE TABLE IF NOT EXISTS OrderFeedback (
    feedbackID INT AUTO_INCREMENT PRIMARY KEY,
    orderID INT,
    createdTime DATETIME,   
    content TEXT(10000),

    CONSTRAINT FOREIGN KEY (orderID) REFERENCES ProductOrder(orderID)
); -- listOfImages: multivalue

CREATE TABLE IF NOT EXISTS ProductImages(
    productID INT, 
    productImage VARCHAR(200),

    CONSTRAINT FOREIGN KEY (productID) REFERENCES Product(productID)
);

-- ---------------------------------------------------------Relationship
CREATE TABLE IF NOT EXISTS MakeOrder (
    customerID INT,
    orderID INT,
    createdTime DATETIME, 

    CONSTRAINT FOREIGN KEY (customerID) REFERENCES Customer(customerID),
    CONSTRAINT FOREIGN KEY (orderID) REFERENCES ProductOrder(orderID),
    CONSTRAINT PRIMARY KEY MakeOrder_PK(customerID, orderID, createdTime)
);

CREATE TABLE IF NOT EXISTS WriteBook(
    authorID INT,
    bookID INT,

    CONSTRAINT FOREIGN KEY (authorID) REFERENCES Author(authorID),
    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Book(bookID),
    CONSTRAINT PRIMARY KEY WriteBook(authorID, bookID)
);

CREATE TABLE IF NOT EXISTS PublishBook (
    bookID INT,
    publisherID INT,

    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Book(bookID),
    CONSTRAINT FOREIGN KEY (publisherID) REFERENCES Publisher(publisherID),
    CONSTRAINT PRIMARY KEY PublishBook_PK(bookID, publisherID)
);

CREATE TABLE IF NOT EXISTS SupplyBook (
    bookID INT, 
    supplierID INT,

    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Book(bookID),
    CONSTRAINT FOREIGN KEY (supplierID) REFERENCES Supplier(supplierID),
    CONSTRAINT PRIMARY KEY SupplyBook_PK(bookID, supplierID)
);

CREATE TABLE IF NOT EXISTS AddToCart(
    userID INT,
    bookID INT,
    addedTime DATETIME,

    CONSTRAINT FOREIGN KEY (customerID) REFERENCES Customer(customerID),
    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Book(bookID),
    CONSTRAINT PRIMARY KEY AddToCart_PK(customerID, bookID)
);

CREATE TABLE IF NOT EXISTS ContainBook (
    orderID INT,   
    bookID INT, 

    CONSTRAINT FOREIGN KEY (orderID) REFERENCES ProductOrder(orderID),
    CONSTRAINT FOREIGN KEY (bookID) REFERENCES Book(bookID),
    CONSTRAINT PRIMARY KEY ContainBook_PK(orderID, bookID)
);

-- CREATE TABLE IF NOT EXISTS HasCategory(
--     productID INT,
--     categoryID INT,

--     CONSTRAINT FOREIGN KEY productID REFERENCES Product(productID),  
--     CONSTRAINT FOREIGN KEY categoryID REFERENCES Category(categoryID)
-- );

SET FOREIGN_KEY_CHECKS = 0;










