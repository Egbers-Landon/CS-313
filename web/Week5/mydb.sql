DROP TABLE IF EXISTS Users CASCADE;
CREATE TABLE Users (
    UserID serial NOT NULL PRIMARY KEY,
    LastName  varchar(255) NOT NULL,
    FirstName  varchar(255) NOT NULL,
    Addresss varchar(255),
    City varchar(255),
    Age int
);

DROP TABLE IF EXISTS Orders CASCADE;
CREATE TABLE Orders (
    OrderID serial NOT NULL PRIMARY KEY,
    UserID int NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

DROP TABLE IF EXISTS Products CASCADE;
CREATE TABLE Products (
    ProductID serial NOT NULL PRIMARY KEY,
    ProductName varchar(255) NOT NULL,
    ProductPrice varchar(255) NOT NULL,
    ProductDescription varchar(255) NOT NULL
);

DROP TABLE IF EXISTS Link CASCADE;
CREATE TABLE Link (
    LinkID serial NOT NULL PRIMARY KEY,
    OrderID int NOT NULL REFERENCES Orders(OrderID),
    ProductID int NOT NULL REFERENCES Products(ProductID)
);


INSERT INTO Users
(LastName, FirstName, Addresss, City, Age)
VALUES ('Egbers', 'Landon', '4321myhouseln', 'Clifton', '24');

INSERT INTO Users
(LastName, FirstName, Addresss, City, Age)
VALUES ('Smith', 'Joseph', '1234myhouseln', 'Clifton', '23');

INSERT INTO Products
(ProductName, ProductPrice, ProductDescription)
VALUES ('Xbox1', '299.99', 'A pretty good gaming console');

INSERT INTO Products
(ProductName, ProductPrice, ProductDescription)
VALUES ('PS4', '299.99', 'Another pretty good gaming console');

INSERT INTO Products
(ProductName, ProductPrice, ProductDescription)
VALUES ('Oculus Quest', '299.99', 'A unique gaming console');

INSERT INTO Products
(ProductName, ProductPrice, ProductDescription)
VALUES ('Nintendo Switch', '299.99', 'A small, but good gaming console');

INSERT INTO Products
(ProductName, ProductPrice, ProductDescription)
VALUES ('Nintendo 64', '59.99', 'An older gaming console.  Great for playing the classics!');

INSERT INTO Products
(ProductName, ProductPrice, ProductDescription)
VALUES ('Nintendo DSI', '29.99', 'A portable gaming console.  These are a little older, and we have two in stock.');